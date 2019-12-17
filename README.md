# Rationale
This is a performance benchmark for [Go!AOP](https://github.com/goaop/framework) framework for Aspect Oriented Programming
in PHP. It uses `ab` tool and and nginx+php-fpm stack, to simulate real web app and make sure opcache is used.

# Usage
```bash
docker run --rm -it -v $PWD:/app composer install

```

# Results on my machine

#todo
- try installing xdebug
- run benchmarks on real server
- populate 'results on my machine' section
- update medium
- mention Lisachenko
- create issue on github

# More info
This is a part of [medium article](https://medium.com) 
