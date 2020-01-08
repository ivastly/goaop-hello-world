# Rationale
This is a performance benchmark for [Go!AOP](https://github.com/goaop/framework) framework for Aspect Oriented Programming
in PHP. It uses 1000 aspects.

# Usage
```bash
composer install
vendor/bin/phpbench run GoAopBench.php --report=aggregate
```

# Results on my machine
![screenshot](https://github.com/ivastly/goaop-hello-world/raw/bench-1000/aop-bench-1000classes.png)

# Bonus: benchmark for empty PHP method call
![screenshot](https://github.com/ivastly/goaop-hello-world/raw/bench-1000/empty-method-call-benchmark.png)

# More info
This is a part of [medium article](https://medium.com) 
