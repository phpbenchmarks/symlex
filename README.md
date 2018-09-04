<p align="center">
  <img src="http://www.phpbenchmarks.com/images/logo_github.png">
  <br>
  <a href="http://www.phpbenchmarks.com" target="_blank">www.phpbenchmarks.com</a>
</p>

## What is www.phpbenchmarks.com?

You will find lot of benchmarks for PHP frameworks and template engines.

You can compare results between Apache Bench and Siege, and PHP 5.6 to 7.2.

## What is this repository?

It contains common benchmark code for [Symlex](https://github.com/symlex/symlex), 
a complete framework stack for agile Web development based on Symfony and Vue.js.

Switch the branch to select your Symlex major version and benchmark you want to see.

See all benchmarked Symlex versions on [phpbenchmarks/symlex](https://github.com/phpbenchmarks/symlex).

You can find how we benchmark on [phpbenchmarks.com](http://www.phpbenchmarks.com/en/benchmark-protocol.html).

## Development Setup

Before you start, make sure you got [Docker](https://www.docker.com/) installed on your system.

**Step 1:** Clone the repository

```
git clone https://github.com/phpbenchmarks/symlex.git
```

**Step 2:** Start the containers

```
cd symlex
docker-compose up
```

*Note: This docker-compose configuration is for testing and development purposes only.*

**Step 3:** Open the site at [localhost:8088/benchmark/helloworld](http://localhost:8088/benchmark/helloworld) (you should see "Hello World !")

## Benchmarks

You can find all Symlex benchmark results on [phpbenchmarks.com](http://www.phpbenchmarks.com/en/benchmark/symlex.html).

Scores are too low? Do not hesitate to create a pull request, and ask for a new benchmark!

See also [phpbenchmarks.com/en/participate/create-framework-benchmarks.html](http://www.phpbenchmarks.com/en/participate/create-framework-benchmarks.html).