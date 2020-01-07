# Rationale
This is a performance benchmark for [Go!AOP](https://github.com/goaop/framework) framework for Aspect Oriented Programming
in PHP. It uses `ab` tool and and nginx+php-fpm stack, to simulate real web app and make sure opcache is used.

# Usage
```bash
docker-compose up -d
chmod 777 public/cache
docker run --rm -it -v $PWD:/app composer install

ab -k -c 1 -n 10 http://127.0.0.1:8080/test_original.php # warm-up, ignore results
ab -k -c 1 -n 1000 http://127.0.0.1:8080/test_original.php

ab -k -c 1 -n 10 http://127.0.0.1:8080/test_modern.php # warm-up, ignore results
ab -k -c 1 -n 1000 http://127.0.0.1:8080/test_modern.php
```

# Results on my machine


# More info
This is a part of [medium article](https://medium.com) 
