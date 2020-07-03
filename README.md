# php-lambda-layer-playground

learn [stackery/php-lambda-layer](https://github.com/stackery/php-lambda-layer) for running PHP on lambda

see [src/php/index.php](src/php/index.php)

**Session**

```sh
REGION="us-east-1"
BUCKET_NAME="aws-sam-cli-managed-default-samclisourcebucket-13v3pefdyn46p"
STACK_NAME="my-first-serverless-php-service"

# package
sam package \
    --template-file template.yaml \
    --output-template-file packaged.yaml \
    --s3-bucket "${BUCKET_NAME}"

# deploy
sam deploy \
    --template-file packaged.yaml \
    --stack-name "${STACK_NAME}" \
    --capabilities CAPABILITY_IAM

# get api gateway root endpoint 
API_GATEWAY_ENDPOINT=$(aws cloudformation --region "${REGION}" describe-stacks --stack-name "${STACK_NAME}" --query "Stacks[0].Outputs[?OutputKey=='ApiGatewayEndpoint'].OutputValue" --output text)

# test
curl "${API_GATEWAY_ENDPOINT}index.php" # Hello World! You've reached /index.php

# delete stack
aws cloudformation delete-stack --region "${REGION}" --stack-name "${STACK_NAME}"
```

## Resources

* [Introducing the new Serverless LAMP stack](https://aws.amazon.com/blogs/compute/introducing-the-new-serverless-lamp-stack/)
* [aws-samples/php-examples-for-aws-lambda](https://github.com/aws-samples/php-examples-for-aws-lambda) - github repo for article.
* [AWS Lambda Custom Runtime for PHP: A Practical Example](https://aws.amazon.com/blogs/apn/aws-lambda-custom-runtime-for-php-a-practical-example/) - *older article, but covers low level details*