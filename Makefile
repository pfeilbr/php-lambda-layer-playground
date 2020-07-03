REGION=us-east-1
BUCKET_NAME=aws-sam-cli-managed-default-samclisourcebucket-13v3pefdyn46p
STACK_NAME=my-first-serverless-php-service

.PHONY: package
package:
	sam package \
    --template-file template.yaml \
    --output-template-file packaged.yaml \
    --s3-bucket "${BUCKET_NAME}"

deploy: package
	sam deploy \
    --template-file packaged.yaml \
    --stack-name "${STACK_NAME}" \
    --capabilities CAPABILITY_IAM

.PHONY: test
test:
	$(eval API_GATEWAY_ENDPOINT=$(shell aws cloudformation --region "${REGION}" describe-stacks --stack-name "${STACK_NAME}" --query "Stacks[0].Outputs[?OutputKey=='ApiGatewayEndpoint'].OutputValue" --output text))
	curl "${API_GATEWAY_ENDPOINT}index.php" # Hello World! You've reached /index.php

.PHONY: delete
delete:
	aws cloudformation delete-stack --region "${REGION}" --stack-name "${STACK_NAME}"
