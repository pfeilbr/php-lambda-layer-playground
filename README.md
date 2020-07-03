# php-lambda-layer-playground

learn [stackery/php-lambda-layer](https://github.com/stackery/php-lambda-layer) for running PHP on lambda

**Key Files**

* [src/php/index.php](src/php/index.php)
* [src/php/php.ini](src/php/php.ini) - for enabled extensions
* [template.yaml](template.yaml)
* [packaged.yaml](packaged.yaml) - *generated via sam*

**Session**

see [Makefile](Makefile) for details and make changes to variables as necessary.

```sh
# deploy stack
make deploy

# test api gateway endpoint URL
make test

# delete stack
make delete

```

## Resources

* [Introducing the new Serverless LAMP stack](https://aws.amazon.com/blogs/compute/introducing-the-new-serverless-lamp-stack/)
* [Introducing the serverless LAMP stack – part 2 relational databases](https://aws.amazon.com/blogs/compute/introducing-the-serverless-lamp-stack-part-2-relational-databases/)
* [aws-samples/php-examples-for-aws-lambda](https://github.com/aws-samples/php-examples-for-aws-lambda) - github repo for article.
* [AWS Lambda Custom Runtime for PHP: A Practical Example](https://aws.amazon.com/blogs/apn/aws-lambda-custom-runtime-for-php-a-practical-example/) - *older article, but covers low level details*
* [AWS SDK for PHP](https://aws.amazon.com/sdk-for-php/)