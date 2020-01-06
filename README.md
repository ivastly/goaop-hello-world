# Rationale
This is a performance benchmark for [Go!AOP](https://github.com/goaop/framework) framework for Aspect Oriented Programming
in PHP. It uses `ab` tool and and nginx+php-fpm stack, to simulate real web app and make sure opcache is used.

# Usage
```bash
docker run --rm -it -v $PWD:/app composer install
ab -k -c 1 -n 100 http://localhost:8080/test_original.php
ab -k -c 1 -n 100 http://localhost:8080/test_modern.php
```

# Results on my machine


# More info
This is a part of [medium article](https://medium.com) 
