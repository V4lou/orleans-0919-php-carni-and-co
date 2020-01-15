{
"_readme": [
"This file locks the dependencies of your project to a known state",
"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies",
"This file is @generated automatically"
],
"content-hash": "cd523eea9713853235ee0946e53e9e88",
"packages": [
{
"name": "behat/transliterator",
"version": "v1.2.0",
"source": {
"type": "git",
"url": "https://github.com/Behat/Transliterator.git",
"reference": "826ce7e9c2a6664c0d1f381cbb38b1fb80a7ee2c"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/Behat/Transliterator/zipball/826ce7e9c2a6664c0d1f381cbb38b1fb80a7ee2c",
"reference": "826ce7e9c2a6664c0d1f381cbb38b1fb80a7ee2c",
"shasum": ""
},
"require": {
"php": ">=5.3.3"
},
"require-dev": {
"chuyskywalker/rolling-curl": "^3.1",
"php-yaoi/php-yaoi": "^1.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.2-dev"
}
},
"autoload": {
"psr-0": {
"Behat\\Transliterator": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"Artistic-1.0"
],
"description": "String transliterator",
"keywords": [
"i18n",
"slug",
"transliterator"
],
"time": "2017-04-04T11:38:05+00:00"
},
{
"name": "doctrine/annotations",
"version": "v1.8.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/annotations.git",
"reference": "904dca4eb10715b92569fbcd79e201d5c349b6bc"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/annotations/zipball/904dca4eb10715b92569fbcd79e201d5c349b6bc",
"reference": "904dca4eb10715b92569fbcd79e201d5c349b6bc",
"shasum": ""
},
"require": {
"doctrine/lexer": "1.*",
"php": "^7.1"
},
"require-dev": {
"doctrine/cache": "1.*",
"phpunit/phpunit": "^7.5"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.7.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Common\\Annotations\\": "lib/Doctrine/Common/Annotations"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@gmail.com"
},
{
"name": "Roman Borschel",
"email": "roman@code-factory.org"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
},
{
"name": "Johannes Schmitt",
"email": "schmittjoh@gmail.com"
}
],
"description": "Docblock Annotations Parser",
"homepage": "http://www.doctrine-project.org",
"keywords": [
"annotations",
"docblock",
"parser"
],
"time": "2019-10-01T18:55:10+00:00"
},
{
"name": "doctrine/cache",
"version": "1.9.1",
"source": {
"type": "git",
"url": "https://github.com/doctrine/cache.git",
"reference": "89a5c76c39c292f7798f964ab3c836c3f8192a55"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/cache/zipball/89a5c76c39c292f7798f964ab3c836c3f8192a55",
"reference": "89a5c76c39c292f7798f964ab3c836c3f8192a55",
"shasum": ""
},
"require": {
"php": "~7.1"
},
"conflict": {
"doctrine/common": ">2.2,<2.4"
},
"require-dev": {
"alcaeus/mongo-php-adapter": "^1.1",
"doctrine/coding-standard": "^6.0",
"mongodb/mongodb": "^1.1",
"phpunit/phpunit": "^7.0",
"predis/predis": "~1.0"
},
"suggest": {
"alcaeus/mongo-php-adapter": "Required to use legacy MongoDB driver"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.9.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Common\\Cache\\": "lib/Doctrine/Common/Cache"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@gmail.com"
},
{
"name": "Roman Borschel",
"email": "roman@code-factory.org"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
},
{
"name": "Johannes Schmitt",
"email": "schmittjoh@gmail.com"
}
],
"description": "PHP Doctrine Cache library is a popular cache implementation that supports many different drivers such as redis, memcache, apc, mongodb and others.",
"homepage": "https://www.doctrine-project.org/projects/cache.html",
"keywords": [
"abstraction",
"apcu",
"cache",
"caching",
"couchdb",
"memcached",
"php",
"redis",
"riak",
"xcache"
],
"time": "2019-11-15T14:31:57+00:00"
},
{
"name": "doctrine/collections",
"version": "1.6.4",
"source": {
"type": "git",
"url": "https://github.com/doctrine/collections.git",
"reference": "6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/collections/zipball/6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7",
"reference": "6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7",
"shasum": ""
},
"require": {
"php": "^7.1.3"
},
"require-dev": {
"doctrine/coding-standard": "^6.0",
"phpstan/phpstan-shim": "^0.9.2",
"phpunit/phpunit": "^7.0",
"vimeo/psalm": "^3.2.2"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.6.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Common\\Collections\\": "lib/Doctrine/Common/Collections"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@gmail.com"
},
{
"name": "Roman Borschel",
"email": "roman@code-factory.org"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
},
{
"name": "Johannes Schmitt",
"email": "schmittjoh@gmail.com"
}
],
"description": "PHP Doctrine Collections library that adds additional functionality on top of PHP arrays.",
"homepage": "https://www.doctrine-project.org/projects/collections.html",
"keywords": [
"array",
"collections",
"iterators",
"php"
],
"time": "2019-11-13T13:07:11+00:00"
},
{
"name": "doctrine/common",
"version": "v2.11.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/common.git",
"reference": "b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/common/zipball/b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff",
"reference": "b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff",
"shasum": ""
},
"require": {
"doctrine/annotations": "^1.0",
"doctrine/cache": "^1.0",
"doctrine/collections": "^1.0",
"doctrine/event-manager": "^1.0",
"doctrine/inflector": "^1.0",
"doctrine/lexer": "^1.0",
"doctrine/persistence": "^1.1",
"doctrine/reflection": "^1.0",
"php": "^7.1"
},
"require-dev": {
"doctrine/coding-standard": "^1.0",
"phpstan/phpstan": "^0.11",
"phpstan/phpstan-phpunit": "^0.11",
"phpunit/phpunit": "^7.0",
"squizlabs/php_codesniffer": "^3.0",
"symfony/phpunit-bridge": "^4.0.5"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.11.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Common\\": "lib/Doctrine/Common"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@gmail.com"
},
{
"name": "Roman Borschel",
"email": "roman@code-factory.org"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
},
{
"name": "Johannes Schmitt",
"email": "schmittjoh@gmail.com"
},
{
"name": "Marco Pivetta",
"email": "ocramius@gmail.com"
}
],
"description": "PHP Doctrine Common project is a library that provides additional functionality that other Doctrine projects depend on such as better reflection support, persistence interfaces, proxies, event system and much more.",
"homepage": "https://www.doctrine-project.org/projects/common.html",
"keywords": [
"common",
"doctrine",
"php"
],
"time": "2019-09-10T10:10:14+00:00"
},
{
"name": "doctrine/dbal",
"version": "v2.10.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/dbal.git",
"reference": "0c9a646775ef549eb0a213a4f9bd4381d9b4d934"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/dbal/zipball/0c9a646775ef549eb0a213a4f9bd4381d9b4d934",
"reference": "0c9a646775ef549eb0a213a4f9bd4381d9b4d934",
"shasum": ""
},
"require": {
"doctrine/cache": "^1.0",
"doctrine/event-manager": "^1.0",
"ext-pdo": "*",
"php": "^7.2"
},
"require-dev": {
"doctrine/coding-standard": "^6.0",
"jetbrains/phpstorm-stubs": "^2019.1",
"phpstan/phpstan": "^0.11.3",
"phpunit/phpunit": "^8.4.1",
"symfony/console": "^2.0.5|^3.0|^4.0|^5.0"
},
"suggest": {
"symfony/console": "For helpful console commands such as SQL execution and import of files."
},
"bin": [
"bin/doctrine-dbal"
],
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.10.x-dev",
"dev-develop": "3.0.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\DBAL\\": "lib/Doctrine/DBAL"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@gmail.com"
},
{
"name": "Roman Borschel",
"email": "roman@code-factory.org"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
}
],
"description": "Powerful PHP database abstraction layer (DBAL) with many features for database schema introspection and management.",
"homepage": "https://www.doctrine-project.org/projects/dbal.html",
"keywords": [
"abstraction",
"database",
"db2",
"dbal",
"mariadb",
"mssql",
"mysql",
"oci8",
"oracle",
"pdo",
"pgsql",
"postgresql",
"queryobject",
"sasql",
"sql",
"sqlanywhere",
"sqlite",
"sqlserver",
"sqlsrv"
],
"time": "2019-11-03T16:50:43+00:00"
},
{
"name": "doctrine/doctrine-bundle",
"version": "1.12.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/DoctrineBundle.git",
"reference": "a374f3bc54fe7c23ddb722ef6b9ddd2d9dcb9115"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/DoctrineBundle/zipball/a374f3bc54fe7c23ddb722ef6b9ddd2d9dcb9115",
"reference": "a374f3bc54fe7c23ddb722ef6b9ddd2d9dcb9115",
"shasum": ""
},
"require": {
"doctrine/dbal": "^2.5.12",
"doctrine/doctrine-cache-bundle": "~1.2",
"jdorn/sql-formatter": "^1.2.16",
"php": "^7.1",
"symfony/config": "^3.4.30|^4.3.3",
"symfony/console": "^3.4.30|^4.3.3",
"symfony/dependency-injection": "^3.4.30|^4.3.3",
"symfony/doctrine-bridge": "^3.4.30|^4.3.3",
"symfony/framework-bundle": "^3.4.30|^4.3.3"
},
"conflict": {
"doctrine/orm": "<2.6",
"twig/twig": "<1.34|>=2.0,<2.4"
},
"require-dev": {
"doctrine/coding-standard": "^6.0",
"doctrine/orm": "^2.6",
"php-coveralls/php-coveralls": "^2.1",
"phpunit/phpunit": "^7.5",
"symfony/cache": "^3.4.30|^4.3.3",
"symfony/phpunit-bridge": "^4.2",
"symfony/property-info": "^3.4.30|^4.3.3",
"symfony/twig-bridge": "^3.4|^4.1",
"symfony/validator": "^3.4.30|^4.3.3",
"symfony/web-profiler-bundle": "^3.4.30|^4.3.3",
"symfony/yaml": "^3.4.30|^4.3.3",
"twig/twig": "^1.34|^2.12"
},
"suggest": {
"doctrine/orm": "The Doctrine ORM integration is optional in the bundle.",
"symfony/web-profiler-bundle": "To use the data collector."
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "1.12.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Bundle\\DoctrineBundle\\": ""
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Symfony Community",
"homepage": "http://symfony.com/contributors"
},
{
"name": "Doctrine Project",
"homepage": "http://www.doctrine-project.org/"
}
],
"description": "Symfony DoctrineBundle",
"homepage": "http://www.doctrine-project.org",
"keywords": [
"database",
"dbal",
"orm",
"persistence"
],
"time": "2019-11-19T11:42:20+00:00"
},
{
"name": "doctrine/doctrine-cache-bundle",
"version": "1.3.5",
"source": {
"type": "git",
"url": "https://github.com/doctrine/DoctrineCacheBundle.git",
"reference": "5514c90d9fb595e1095e6d66ebb98ce9ef049927"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/DoctrineCacheBundle/zipball/5514c90d9fb595e1095e6d66ebb98ce9ef049927",
"reference": "5514c90d9fb595e1095e6d66ebb98ce9ef049927",
"shasum": ""
},
"require": {
"doctrine/cache": "^1.4.2",
"doctrine/inflector": "~1.0",
"php": ">=5.3.2",
"symfony/doctrine-bridge": "~2.7|~3.3|~4.0"
},
"require-dev": {
"instaclick/coding-standard": "~1.1",
"instaclick/object-calisthenics-sniffs": "dev-master",
"instaclick/symfony2-coding-standard": "dev-remaster",
"phpunit/phpunit": "~4.8.36|~5.6|~6.5|~7.0",
"predis/predis": "~0.8",
"satooshi/php-coveralls": "^1.0",
"squizlabs/php_codesniffer": "~1.5",
"symfony/console": "~2.7|~3.3|~4.0",
"symfony/finder": "~2.7|~3.3|~4.0",
"symfony/framework-bundle": "~2.7|~3.3|~4.0",
"symfony/phpunit-bridge": "~2.7|~3.3|~4.0",
"symfony/security-acl": "~2.7|~3.3",
"symfony/validator": "~2.7|~3.3|~4.0",
"symfony/yaml": "~2.7|~3.3|~4.0"
},
"suggest": {
"symfony/security-acl": "For using this bundle to cache ACLs"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "1.3.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Bundle\\DoctrineCacheBundle\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Symfony Community",
"homepage": "http://symfony.com/contributors"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Fabio B. Silva",
"email": "fabio.bat.silva@gmail.com"
},
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@hotmail.com"
},
{
"name": "Doctrine Project",
"homepage": "http://www.doctrine-project.org/"
},
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
}
],
"description": "Symfony Bundle for Doctrine Cache",
"homepage": "https://www.doctrine-project.org",
"keywords": [
"cache",
"caching"
],
"time": "2018-11-09T06:25:35+00:00"
},
{
"name": "doctrine/doctrine-migrations-bundle",
"version": "2.1.2",
"source": {
"type": "git",
"url": "https://github.com/doctrine/DoctrineMigrationsBundle.git",
"reference": "856437e8de96a70233e1f0cc2352fc8dd15a899d"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/DoctrineMigrationsBundle/zipball/856437e8de96a70233e1f0cc2352fc8dd15a899d",
"reference": "856437e8de96a70233e1f0cc2352fc8dd15a899d",
"shasum": ""
},
"require": {
"doctrine/doctrine-bundle": "~1.0|~2.0",
"doctrine/migrations": "^2.2",
"php": "^7.1",
"symfony/framework-bundle": "~3.4|~4.0|~5.0"
},
"require-dev": {
"doctrine/coding-standard": "^5.0",
"mikey179/vfsstream": "^1.6",
"phpstan/phpstan": "^0.9.2",
"phpstan/phpstan-strict-rules": "^0.9",
"phpunit/phpunit": "^6.4|^7.0"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "2.1.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Bundle\\MigrationsBundle\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Doctrine Project",
"homepage": "http://www.doctrine-project.org"
},
{
"name": "Symfony Community",
"homepage": "http://symfony.com/contributors"
}
],
"description": "Symfony DoctrineMigrationsBundle",
"homepage": "https://www.doctrine-project.org",
"keywords": [
"dbal",
"migrations",
"schema"
],
"time": "2019-11-13T12:57:41+00:00"
},
{
"name": "doctrine/event-manager",
"version": "1.1.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/event-manager.git",
"reference": "629572819973f13486371cb611386eb17851e85c"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/event-manager/zipball/629572819973f13486371cb611386eb17851e85c",
"reference": "629572819973f13486371cb611386eb17851e85c",
"shasum": ""
},
"require": {
"php": "^7.1"
},
"conflict": {
"doctrine/common": "<2.9@dev"
},
"require-dev": {
"doctrine/coding-standard": "^6.0",
"phpunit/phpunit": "^7.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.0.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Common\\": "lib/Doctrine/Common"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@gmail.com"
},
{
"name": "Roman Borschel",
"email": "roman@code-factory.org"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
},
{
"name": "Johannes Schmitt",
"email": "schmittjoh@gmail.com"
},
{
"name": "Marco Pivetta",
"email": "ocramius@gmail.com"
}
],
"description": "The Doctrine Event Manager is a simple PHP event system that was built to be used with the various Doctrine projects.",
"homepage": "https://www.doctrine-project.org/projects/event-manager.html",
"keywords": [
"event",
"event dispatcher",
"event manager",
"event system",
"events"
],
"time": "2019-11-10T09:48:07+00:00"
},
{
"name": "doctrine/inflector",
"version": "1.3.1",
"source": {
"type": "git",
"url": "https://github.com/doctrine/inflector.git",
"reference": "ec3a55242203ffa6a4b27c58176da97ff0a7aec1"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/inflector/zipball/ec3a55242203ffa6a4b27c58176da97ff0a7aec1",
"reference": "ec3a55242203ffa6a4b27c58176da97ff0a7aec1",
"shasum": ""
},
"require": {
"php": "^7.1"
},
"require-dev": {
"phpunit/phpunit": "^6.2"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.3.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Common\\Inflector\\": "lib/Doctrine/Common/Inflector"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@gmail.com"
},
{
"name": "Roman Borschel",
"email": "roman@code-factory.org"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
},
{
"name": "Johannes Schmitt",
"email": "schmittjoh@gmail.com"
}
],
"description": "Common String Manipulations with regard to casing and singular/plural rules.",
"homepage": "http://www.doctrine-project.org",
"keywords": [
"inflection",
"pluralize",
"singularize",
"string"
],
"time": "2019-10-30T19:59:35+00:00"
},
{
"name": "doctrine/instantiator",
"version": "1.3.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/instantiator.git",
"reference": "ae466f726242e637cebdd526a7d991b9433bacf1"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/instantiator/zipball/ae466f726242e637cebdd526a7d991b9433bacf1",
"reference": "ae466f726242e637cebdd526a7d991b9433bacf1",
"shasum": ""
},
"require": {
"php": "^7.1"
},
"require-dev": {
"doctrine/coding-standard": "^6.0",
"ext-pdo": "*",
"ext-phar": "*",
"phpbench/phpbench": "^0.13",
"phpstan/phpstan-phpunit": "^0.11",
"phpstan/phpstan-shim": "^0.11",
"phpunit/phpunit": "^7.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.2.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Instantiator\\": "src/Doctrine/Instantiator/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Marco Pivetta",
"email": "ocramius@gmail.com",
"homepage": "http://ocramius.github.com/"
}
],
"description": "A small, lightweight utility to instantiate objects in PHP without invoking their constructors",
"homepage": "https://www.doctrine-project.org/projects/instantiator.html",
"keywords": [
"constructor",
"instantiate"
],
"time": "2019-10-21T16:45:58+00:00"
},
{
"name": "doctrine/lexer",
"version": "1.2.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/lexer.git",
"reference": "5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/lexer/zipball/5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6",
"reference": "5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6",
"shasum": ""
},
"require": {
"php": "^7.2"
},
"require-dev": {
"doctrine/coding-standard": "^6.0",
"phpstan/phpstan": "^0.11.8",
"phpunit/phpunit": "^8.2"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.2.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Common\\Lexer\\": "lib/Doctrine/Common/Lexer"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@gmail.com"
},
{
"name": "Roman Borschel",
"email": "roman@code-factory.org"
},
{
"name": "Johannes Schmitt",
"email": "schmittjoh@gmail.com"
}
],
"description": "PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.",
"homepage": "https://www.doctrine-project.org/projects/lexer.html",
"keywords": [
"annotations",
"docblock",
"lexer",
"parser",
"php"
],
"time": "2019-10-30T14:39:59+00:00"
},
{
"name": "doctrine/migrations",
"version": "2.2.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/migrations.git",
"reference": "8e124252d2f6be1124017d746d5994dd4095d66f"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/migrations/zipball/8e124252d2f6be1124017d746d5994dd4095d66f",
"reference": "8e124252d2f6be1124017d746d5994dd4095d66f",
"shasum": ""
},
"require": {
"doctrine/dbal": "^2.9",
"ocramius/package-versions": "^1.3",
"ocramius/proxy-manager": "^2.0.2",
"php": "^7.1",
"symfony/console": "^3.4||^4.0||^5.0",
"symfony/stopwatch": "^3.4||^4.0||^5.0"
},
"require-dev": {
"doctrine/coding-standard": "^6.0",
"doctrine/orm": "^2.6",
"ext-pdo_sqlite": "*",
"jdorn/sql-formatter": "^1.1",
"mikey179/vfsstream": "^1.6",
"phpstan/phpstan": "^0.10",
"phpstan/phpstan-deprecation-rules": "^0.10",
"phpstan/phpstan-phpunit": "^0.10",
"phpstan/phpstan-strict-rules": "^0.10",
"phpunit/phpunit": "^7.0",
"symfony/process": "^3.4||^4.0||^5.0",
"symfony/yaml": "^3.4||^4.0||^5.0"
},
"suggest": {
"jdorn/sql-formatter": "Allows to generate formatted SQL with the diff command.",
"symfony/yaml": "Allows the use of yaml for migration configuration files."
},
"bin": [
"bin/doctrine-migrations"
],
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.2.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Migrations\\": "lib/Doctrine/Migrations"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
},
{
"name": "Michael Simonson",
"email": "contact@mikesimonson.com"
}
],
"description": "PHP Doctrine Migrations project offer additional functionality on top of the database abstraction layer (DBAL) for versioning your database schema and easily deploying changes to it. It is a very easy to use and a powerful tool.",
"homepage": "https://www.doctrine-project.org/projects/migrations.html",
"keywords": [
"database",
"dbal",
"migrations",
"php"
],
"time": "2019-11-13T11:06:31+00:00"
},
{
"name": "doctrine/orm",
"version": "v2.7.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/orm.git",
"reference": "4d763ca4c925f647b248b9fa01b5f47aa3685d62"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/orm/zipball/4d763ca4c925f647b248b9fa01b5f47aa3685d62",
"reference": "4d763ca4c925f647b248b9fa01b5f47aa3685d62",
"shasum": ""
},
"require": {
"doctrine/annotations": "^1.8",
"doctrine/cache": "^1.9.1",
"doctrine/collections": "^1.5",
"doctrine/common": "^2.11",
"doctrine/dbal": "^2.9.3",
"doctrine/event-manager": "^1.1",
"doctrine/instantiator": "^1.3",
"doctrine/persistence": "^1.2",
"ext-pdo": "*",
"php": "^7.1",
"symfony/console": "^3.0|^4.0|^5.0"
},
"require-dev": {
"doctrine/coding-standard": "^5.0",
"phpunit/phpunit": "^7.5",
"symfony/yaml": "^3.4|^4.0|^5.0"
},
"suggest": {
"symfony/yaml": "If you want to use YAML Metadata Mapping Driver"
},
"bin": [
"bin/doctrine"
],
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.7.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\ORM\\": "lib/Doctrine/ORM"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@gmail.com"
},
{
"name": "Roman Borschel",
"email": "roman@code-factory.org"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
},
{
"name": "Marco Pivetta",
"email": "ocramius@gmail.com"
}
],
"description": "Object-Relational-Mapper for PHP",
"homepage": "https://www.doctrine-project.org/projects/orm.html",
"keywords": [
"database",
"orm"
],
"time": "2019-11-19T08:38:05+00:00"
},
{
"name": "doctrine/persistence",
"version": "1.2.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/persistence.git",
"reference": "43526ae63312942e5316100bb3ed589ba1aba491"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/persistence/zipball/43526ae63312942e5316100bb3ed589ba1aba491",
"reference": "43526ae63312942e5316100bb3ed589ba1aba491",
"shasum": ""
},
"require": {
"doctrine/annotations": "^1.0",
"doctrine/cache": "^1.0",
"doctrine/collections": "^1.0",
"doctrine/event-manager": "^1.0",
"doctrine/reflection": "^1.0",
"php": "^7.1"
},
"conflict": {
"doctrine/common": "<2.10@dev"
},
"require-dev": {
"doctrine/coding-standard": "^5.0",
"phpstan/phpstan": "^0.8",
"phpunit/phpunit": "^7.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.2.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Common\\": "lib/Doctrine/Common"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@gmail.com"
},
{
"name": "Roman Borschel",
"email": "roman@code-factory.org"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
},
{
"name": "Johannes Schmitt",
"email": "schmittjoh@gmail.com"
},
{
"name": "Marco Pivetta",
"email": "ocramius@gmail.com"
}
],
"description": "The Doctrine Persistence project is a set of shared interfaces and functionality that the different Doctrine object mappers share.",
"homepage": "https://doctrine-project.org/projects/persistence.html",
"keywords": [
"mapper",
"object",
"odm",
"orm",
"persistence"
],
"time": "2019-04-23T12:39:21+00:00"
},
{
"name": "doctrine/reflection",
"version": "v1.0.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/reflection.git",
"reference": "02538d3f95e88eb397a5f86274deb2c6175c2ab6"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/reflection/zipball/02538d3f95e88eb397a5f86274deb2c6175c2ab6",
"reference": "02538d3f95e88eb397a5f86274deb2c6175c2ab6",
"shasum": ""
},
"require": {
"doctrine/annotations": "^1.0",
"ext-tokenizer": "*",
"php": "^7.1"
},
"require-dev": {
"doctrine/coding-standard": "^4.0",
"doctrine/common": "^2.8",
"phpstan/phpstan": "^0.9.2",
"phpstan/phpstan-phpunit": "^0.9.4",
"phpunit/phpunit": "^7.0",
"squizlabs/php_codesniffer": "^3.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.0.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Common\\": "lib/Doctrine/Common"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Roman Borschel",
"email": "roman@code-factory.org"
},
{
"name": "Benjamin Eberlei",
"email": "kontakt@beberlei.de"
},
{
"name": "Guilherme Blanco",
"email": "guilhermeblanco@gmail.com"
},
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
},
{
"name": "Johannes Schmitt",
"email": "schmittjoh@gmail.com"
},
{
"name": "Marco Pivetta",
"email": "ocramius@gmail.com"
}
],
"description": "Doctrine Reflection component",
"homepage": "https://www.doctrine-project.org/projects/reflection.html",
"keywords": [
"reflection"
],
"time": "2018-06-14T14:45:07+00:00"
},
{
"name": "egulias/email-validator",
"version": "2.1.11",
"source": {
"type": "git",
"url": "https://github.com/egulias/EmailValidator.git",
"reference": "92dd169c32f6f55ba570c309d83f5209cefb5e23"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/egulias/EmailValidator/zipball/92dd169c32f6f55ba570c309d83f5209cefb5e23",
"reference": "92dd169c32f6f55ba570c309d83f5209cefb5e23",
"shasum": ""
},
"require": {
"doctrine/lexer": "^1.0.1",
"php": ">= 5.5"
},
"require-dev": {
"dominicsayers/isemail": "dev-master",
"phpunit/phpunit": "^4.8.35||^5.7||^6.0",
"satooshi/php-coveralls": "^1.0.1",
"symfony/phpunit-bridge": "^4.4@dev"
},
"suggest": {
"ext-intl": "PHP Internationalization Libraries are required to use the SpoofChecking validation"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.1.x-dev"
}
},
"autoload": {
"psr-4": {
"Egulias\\EmailValidator\\": "EmailValidator"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Eduardo Gulias Davis"
}
],
"description": "A library for validating emails against several RFCs",
"homepage": "https://github.com/egulias/EmailValidator",
"keywords": [
"email",
"emailvalidation",
"emailvalidator",
"validation",
"validator"
],
"time": "2019-08-13T17:33:27+00:00"
},
{
"name": "fig/link-util",
"version": "1.0.0",
"source": {
"type": "git",
"url": "https://github.com/php-fig/link-util.git",
"reference": "1a07821801a148be4add11ab0603e4af55a72fac"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/php-fig/link-util/zipball/1a07821801a148be4add11ab0603e4af55a72fac",
"reference": "1a07821801a148be4add11ab0603e4af55a72fac",
"shasum": ""
},
"require": {
"php": ">=5.5.0",
"psr/link": "~1.0@dev"
},
"require-dev": {
"phpunit/phpunit": "^5.1",
"squizlabs/php_codesniffer": "^2.3.1"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.0.x-dev"
}
},
"autoload": {
"psr-4": {
"Fig\\Link\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "PHP-FIG",
"homepage": "http://www.php-fig.org/"
}
],
"description": "Common utility implementations for HTTP links",
"keywords": [
"http",
"http-link",
"link",
"psr",
"psr-13",
"rest"
],
"time": "2016-10-17T18:31:11+00:00"
},
{
"name": "jdorn/sql-formatter",
"version": "v1.2.17",
"source": {
"type": "git",
"url": "https://github.com/jdorn/sql-formatter.git",
"reference": "64990d96e0959dff8e059dfcdc1af130728d92bc"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/jdorn/sql-formatter/zipball/64990d96e0959dff8e059dfcdc1af130728d92bc",
"reference": "64990d96e0959dff8e059dfcdc1af130728d92bc",
"shasum": ""
},
"require": {
"php": ">=5.2.4"
},
"require-dev": {
"phpunit/phpunit": "3.7.*"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.3.x-dev"
}
},
"autoload": {
"classmap": [
"lib"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Jeremy Dorn",
"email": "jeremy@jeremydorn.com",
"homepage": "http://jeremydorn.com/"
}
],
"description": "a PHP SQL highlighting library",
"homepage": "https://github.com/jdorn/sql-formatter/",
"keywords": [
"highlight",
"sql"
],
"time": "2014-01-12T16:20:24+00:00"
},
{
"name": "jms/metadata",
"version": "2.1.0",
"source": {
"type": "git",
"url": "https://github.com/schmittjoh/metadata.git",
"reference": "8d8958103485c2cbdd9a9684c3869312ebdaf73a"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/schmittjoh/metadata/zipball/8d8958103485c2cbdd9a9684c3869312ebdaf73a",
"reference": "8d8958103485c2cbdd9a9684c3869312ebdaf73a",
"shasum": ""
},
"require": {
"php": "^7.2"
},
"require-dev": {
"doctrine/cache": "^1.0",
"doctrine/coding-standard": "^4.0",
"phpunit/phpunit": "^7.0",
"symfony/cache": "^3.1|^4.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.x-dev"
}
},
"autoload": {
"psr-4": {
"Metadata\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Johannes M. Schmitt",
"email": "schmittjoh@gmail.com"
},
{
"name": "Asmir Mustafic",
"email": "goetas@gmail.com"
}
],
"description": "Class/method/property metadata management in PHP",
"keywords": [
"annotations",
"metadata",
"xml",
"yaml"
],
"time": "2019-09-17T15:30:40+00:00"
},
{
"name": "knplabs/knp-components",
"version": "v2.3.1",
"source": {
"type": "git",
"url": "https://github.com/KnpLabs/knp-components.git",
"reference": "024d538ee9150689da35c0cd54403606ecef0ff4"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/KnpLabs/knp-components/zipball/024d538ee9150689da35c0cd54403606ecef0ff4",
"reference": "024d538ee9150689da35c0cd54403606ecef0ff4",
"shasum": ""
},
"require": {
"php": "^7.2",
"symfony/event-dispatcher": "^3.4 || ^4.0 || ^5.0",
"symfony/http-foundation": "^3.4 || ^4.0 || ^5.0"
},
"require-dev": {
"doctrine/mongodb-odm": "^2.0",
"doctrine/orm": "^2.4",
"doctrine/phpcr-odm": "^1.2",
"jackalope/jackalope-doctrine-dbal": "^1.2",
"phpunit/phpunit": "^8.0",
"ruflin/elastica": "^1.0",
"symfony/http-kernel": "^3.4 || ^4.0 || ^5.0",
"symfony/property-access": "^3.4 || ^4.0 || ^5.0"
},
"suggest": {
"doctrine/common": "to allow usage pagination with Doctrine ArrayCollection",
"doctrine/mongodb-odm": "to allow usage pagination with Doctrine ODM MongoDB",
"doctrine/orm": "to allow usage pagination with Doctrine ORM",
"doctrine/phpcr-odm": "to allow usage pagination with Doctrine ODM PHPCR",
"propel/propel1": "to allow usage pagination with Propel ORM",
"ruflin/elastica": "to allow usage pagination with ElasticSearch Client",
"solarium/solarium": "to allow usage pagination with Solarium Client",
"symfony/property-access": "To allow sorting arrays"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.4.0-dev"
}
},
"autoload": {
"psr-4": {
"Knp\\Component\\": "src/Knp/Component"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "KnpLabs Team",
"homepage": "https://knplabs.com"
},
{
"name": "Symfony Community",
"homepage": "https://github.com/KnpLabs/knp-components/contributors"
}
],
"description": "Knplabs component library",
"homepage": "http://github.com/KnpLabs/knp-components",
"keywords": [
"components",
"knp",
"knplabs",
"pager",
"paginator"
],
"time": "2019-12-21T12:59:35+00:00"
},
{
"name": "knplabs/knp-paginator-bundle",
"version": "v5.0.0",
"source": {
"type": "git",
"url": "https://github.com/KnpLabs/KnpPaginatorBundle.git",
"reference": "dcbd60ebf494cc10cedcd65237edc8d632cf675b"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/KnpLabs/KnpPaginatorBundle/zipball/dcbd60ebf494cc10cedcd65237edc8d632cf675b",
"reference": "dcbd60ebf494cc10cedcd65237edc8d632cf675b",
"shasum": ""
},
"require": {
"knplabs/knp-components": "^2.0",
"php": "^7.2",
"symfony/framework-bundle": "^4.3 || ^5.0",
"symfony/translation": "^4.3 || ^5.0",
"twig/twig": "^2.0 || ^3.0"
},
"require-dev": {
"phpunit/phpunit": "^7.5 || ^8.4",
"symfony/expression-language": "^4.3 || ^5.0",
"symfony/templating": "^3.4 || ^4.0"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "5.0.x-dev"
}
},
"autoload": {
"psr-4": {
"Knp\\Bundle\\PaginatorBundle\\": "src"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "KnpLabs Team",
"homepage": "http://knplabs.com"
},
{
"name": "Symfony Community",
"homepage": "http://github.com/KnpLabs/KnpPaginatorBundle/contributors"
}
],
"description": "Paginator bundle for Symfony to automate pagination and simplify sorting and other features",
"homepage": "http://github.com/KnpLabs/KnpPaginatorBundle",
"keywords": [
"bundle",
"knp",
"knplabs",
"pager",
"pagination",
"paginator",
"symfony"
],
"time": "2019-11-27T08:58:44+00:00"
},
{
"name": "monolog/monolog",
"version": "1.25.2",
"source": {
"type": "git",
"url": "https://github.com/Seldaek/monolog.git",
"reference": "d5e2fb341cb44f7e2ab639d12a1e5901091ec287"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/Seldaek/monolog/zipball/d5e2fb341cb44f7e2ab639d12a1e5901091ec287",
"reference": "d5e2fb341cb44f7e2ab639d12a1e5901091ec287",
"shasum": ""
},
"require": {
"php": ">=5.3.0",
"psr/log": "~1.0"
},
"provide": {
"psr/log-implementation": "1.0.0"
},
"require-dev": {
"aws/aws-sdk-php": "^2.4.9 || ^3.0",
"doctrine/couchdb": "~1.0@dev",
"graylog2/gelf-php": "~1.0",
"jakub-onderka/php-parallel-lint": "0.9",
"php-amqplib/php-amqplib": "~2.4",
"php-console/php-console": "^3.1.3",
"phpunit/phpunit": "~4.5",
"phpunit/phpunit-mock-objects": "2.3.0",
"ruflin/elastica": ">=0.90 <3.0",
"sentry/sentry": "^0.13",
"swiftmailer/swiftmailer": "^5.3|^6.0"
},
"suggest": {
"aws/aws-sdk-php": "Allow sending log messages to AWS services like DynamoDB",
"doctrine/couchdb": "Allow sending log messages to a CouchDB server",
"ext-amqp": "Allow sending log messages to an AMQP server (1.0+ required)",
"ext-mongo": "Allow sending log messages to a MongoDB server",
"graylog2/gelf-php": "Allow sending log messages to a GrayLog2 server",
"mongodb/mongodb": "Allow sending log messages to a MongoDB server via PHP Driver",
"php-amqplib/php-amqplib": "Allow sending log messages to an AMQP server using php-amqplib",
"php-console/php-console": "Allow sending log messages to Google Chrome",
"rollbar/rollbar": "Allow sending log messages to Rollbar",
"ruflin/elastica": "Allow sending log messages to an Elastic Search server",
"sentry/sentry": "Allow sending log messages to a Sentry server"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.0.x-dev"
}
},
"autoload": {
"psr-4": {
"Monolog\\": "src/Monolog"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Jordi Boggiano",
"email": "j.boggiano@seld.be",
"homepage": "http://seld.be"
}
],
"description": "Sends your logs to files, sockets, inboxes, databases and various web services",
"homepage": "http://github.com/Seldaek/monolog",
"keywords": [
"log",
"logging",
"psr-3"
],
"time": "2019-11-13T10:00:05+00:00"
},
{
"name": "ocramius/package-versions",
"version": "1.4.2",
"source": {
"type": "git",
"url": "https://github.com/Ocramius/PackageVersions.git",
"reference": "44af6f3a2e2e04f2af46bcb302ad9600cba41c7d"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/Ocramius/PackageVersions/zipball/44af6f3a2e2e04f2af46bcb302ad9600cba41c7d",
"reference": "44af6f3a2e2e04f2af46bcb302ad9600cba41c7d",
"shasum": ""
},
"require": {
"composer-plugin-api": "^1.0.0",
"php": "^7.1.0"
},
"require-dev": {
"composer/composer": "^1.6.3",
"doctrine/coding-standard": "^5.0.1",
"ext-zip": "*",
"infection/infection": "^0.7.1",
"phpunit/phpunit": "^7.5.17"
},
"type": "composer-plugin",
"extra": {
"class": "PackageVersions\\Installer",
"branch-alias": {
"dev-master": "2.0.x-dev"
}
},
"autoload": {
"psr-4": {
"PackageVersions\\": "src/PackageVersions"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Marco Pivetta",
"email": "ocramius@gmail.com"
}
],
"description": "Composer plugin that provides efficient querying for installed package versions (no runtime IO)",
"time": "2019-11-15T16:17:10+00:00"
},
{
"name": "ocramius/proxy-manager",
"version": "2.2.3",
"source": {
"type": "git",
"url": "https://github.com/Ocramius/ProxyManager.git",
"reference": "4d154742e31c35137d5374c998e8f86b54db2e2f"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/Ocramius/ProxyManager/zipball/4d154742e31c35137d5374c998e8f86b54db2e2f",
"reference": "4d154742e31c35137d5374c998e8f86b54db2e2f",
"shasum": ""
},
"require": {
"ocramius/package-versions": "^1.1.3",
"php": "^7.2.0",
"zendframework/zend-code": "^3.3.0"
},
"require-dev": {
"couscous/couscous": "^1.6.1",
"ext-phar": "*",
"humbug/humbug": "1.0.0-RC.0@RC",
"nikic/php-parser": "^3.1.1",
"padraic/phpunit-accelerator": "dev-master@DEV",
"phpbench/phpbench": "^0.12.2",
"phpstan/phpstan": "dev-master#856eb10a81c1d27c701a83f167dc870fd8f4236a as 0.9.999",
"phpstan/phpstan-phpunit": "dev-master#5629c0a1f4a9c417cb1077cf6693ad9753895761",
"phpunit/phpunit": "^6.4.3",
"squizlabs/php_codesniffer": "^2.9.1"
},
"suggest": {
"ocramius/generated-hydrator": "To have very fast object to array to object conversion for ghost objects",
"zendframework/zend-json": "To have the JsonRpc adapter (Remote Object feature)",
"zendframework/zend-soap": "To have the Soap adapter (Remote Object feature)",
"zendframework/zend-xmlrpc": "To have the XmlRpc adapter (Remote Object feature)"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "3.0.x-dev"
}
},
"autoload": {
"psr-0": {
"ProxyManager\\": "src"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Marco Pivetta",
"email": "ocramius@gmail.com",
"homepage": "http://ocramius.github.io/"
}
],
"description": "A library providing utilities to generate, instantiate and generally operate with Object Proxies",
"homepage": "https://github.com/Ocramius/ProxyManager",
"keywords": [
"aop",
"lazy loading",
"proxy",
"proxy pattern",
"service proxies"
],
"time": "2019-08-10T08:37:15+00:00"
},
{
"name": "pdepend/pdepend",
"version": "2.5.2",
"source": {
"type": "git",
"url": "https://github.com/pdepend/pdepend.git",
"reference": "9daf26d0368d4a12bed1cacae1a9f3a6f0adf239"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/pdepend/pdepend/zipball/9daf26d0368d4a12bed1cacae1a9f3a6f0adf239",
"reference": "9daf26d0368d4a12bed1cacae1a9f3a6f0adf239",
"shasum": ""
},
"require": {
"php": ">=5.3.7",
"symfony/config": "^2.3.0|^3|^4",
"symfony/dependency-injection": "^2.3.0|^3|^4",
"symfony/filesystem": "^2.3.0|^3|^4"
},
"require-dev": {
"phpunit/phpunit": "^4.8|^5.7",
"squizlabs/php_codesniffer": "^2.0.0"
},
"bin": [
"src/bin/pdepend"
],
"type": "library",
"autoload": {
"psr-4": {
"PDepend\\": "src/main/php/PDepend"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause"
],
"description": "Official version of pdepend to be handled with Composer",
"time": "2017-12-13T13:21:38+00:00"
},
{
"name": "phpdocumentor/reflection-common",
"version": "2.0.0",
"source": {
"type": "git",
"url": "https://github.com/phpDocumentor/ReflectionCommon.git",
"reference": "63a995caa1ca9e5590304cd845c15ad6d482a62a"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/phpDocumentor/ReflectionCommon/zipball/63a995caa1ca9e5590304cd845c15ad6d482a62a",
"reference": "63a995caa1ca9e5590304cd845c15ad6d482a62a",
"shasum": ""
},
"require": {
"php": ">=7.1"
},
"require-dev": {
"phpunit/phpunit": "~6"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.x-dev"
}
},
"autoload": {
"psr-4": {
"phpDocumentor\\Reflection\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Jaap van Otterdijk",
"email": "opensource@ijaap.nl"
}
],
"description": "Common reflection classes used by phpdocumentor to reflect the code structure",
"homepage": "http://www.phpdoc.org",
"keywords": [
"FQSEN",
"phpDocumentor",
"phpdoc",
"reflection",
"static analysis"
],
"time": "2018-08-07T13:53:10+00:00"
},
{
"name": "phpdocumentor/reflection-docblock",
"version": "4.3.2",
"source": {
"type": "git",
"url": "https://github.com/phpDocumentor/ReflectionDocBlock.git",
"reference": "b83ff7cfcfee7827e1e78b637a5904fe6a96698e"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/b83ff7cfcfee7827e1e78b637a5904fe6a96698e",
"reference": "b83ff7cfcfee7827e1e78b637a5904fe6a96698e",
"shasum": ""
},
"require": {
"php": "^7.0",
"phpdocumentor/reflection-common": "^1.0.0 || ^2.0.0",
"phpdocumentor/type-resolver": "~0.4 || ^1.0.0",
"webmozart/assert": "^1.0"
},
"require-dev": {
"doctrine/instantiator": "^1.0.5",
"mockery/mockery": "^1.0",
"phpunit/phpunit": "^6.4"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.x-dev"
}
},
"autoload": {
"psr-4": {
"phpDocumentor\\Reflection\\": [
"src/"
]
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Mike van Riel",
"email": "me@mikevanriel.com"
}
],
"description": "With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.",
"time": "2019-09-12T14:27:41+00:00"
},
{
"name": "phpdocumentor/type-resolver",
"version": "1.0.1",
"source": {
"type": "git",
"url": "https://github.com/phpDocumentor/TypeResolver.git",
"reference": "2e32a6d48972b2c1976ed5d8967145b6cec4a4a9"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/phpDocumentor/TypeResolver/zipball/2e32a6d48972b2c1976ed5d8967145b6cec4a4a9",
"reference": "2e32a6d48972b2c1976ed5d8967145b6cec4a4a9",
"shasum": ""
},
"require": {
"php": "^7.1",
"phpdocumentor/reflection-common": "^2.0"
},
"require-dev": {
"ext-tokenizer": "^7.1",
"mockery/mockery": "~1",
"phpunit/phpunit": "^7.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.x-dev"
}
},
"autoload": {
"psr-4": {
"phpDocumentor\\Reflection\\": "src"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Mike van Riel",
"email": "me@mikevanriel.com"
}
],
"description": "A PSR-5 based resolver of Class names, Types and Structural Element Names",
"time": "2019-08-22T18:11:29+00:00"
},
{
"name": "phpmd/phpmd",
"version": "2.7.0",
"source": {
"type": "git",
"url": "https://github.com/phpmd/phpmd.git",
"reference": "a05a999c644f4bc9a204846017db7bb7809fbe4c"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/phpmd/phpmd/zipball/a05a999c644f4bc9a204846017db7bb7809fbe4c",
"reference": "a05a999c644f4bc9a204846017db7bb7809fbe4c",
"shasum": ""
},
"require": {
"ext-xml": "*",
"pdepend/pdepend": "^2.5",
"php": ">=5.3.9"
},
"require-dev": {
"gregwar/rst": "^1.0",
"mikey179/vfsstream": "^1.6.4",
"phpunit/phpunit": "^4.8.36 || ^5.7.27",
"squizlabs/php_codesniffer": "^2.0"
},
"bin": [
"src/bin/phpmd"
],
"type": "library",
"autoload": {
"psr-0": {
"PHPMD\\": "src/main/php"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause"
],
"authors": [
{
"name": "Manuel Pichler",
"email": "github@manuel-pichler.de",
"homepage": "https://github.com/manuelpichler",
"role": "Project Founder"
},
{
"name": "Marc Würth",
"email": "ravage@bluewin.ch",
"homepage": "https://github.com/ravage84",
"role": "Project Maintainer"
},
{
"name": "Other contributors",
"homepage": "https://github.com/phpmd/phpmd/graphs/contributors",
"role": "Contributors"
}
],
"description": "PHPMD is a spin-off project of PHP Depend and aims to be a PHP equivalent of the well known Java tool PMD.",
"homepage": "https://phpmd.org/",
"keywords": [
"mess detection",
"mess detector",
"pdepend",
"phpmd",
"pmd"
],
"time": "2019-07-30T21:13:32+00:00"
},
{
"name": "psr/cache",
"version": "1.0.1",
"source": {
"type": "git",
"url": "https://github.com/php-fig/cache.git",
"reference": "d11b50ad223250cf17b86e38383413f5a6764bf8"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/php-fig/cache/zipball/d11b50ad223250cf17b86e38383413f5a6764bf8",
"reference": "d11b50ad223250cf17b86e38383413f5a6764bf8",
"shasum": ""
},
"require": {
"php": ">=5.3.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.0.x-dev"
}
},
"autoload": {
"psr-4": {
"Psr\\Cache\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "PHP-FIG",
"homepage": "http://www.php-fig.org/"
}
],
"description": "Common interface for caching libraries",
"keywords": [
"cache",
"psr",
"psr-6"
],
"time": "2016-08-06T20:24:11+00:00"
},
{
"name": "psr/container",
"version": "1.0.0",
"source": {
"type": "git",
"url": "https://github.com/php-fig/container.git",
"reference": "b7ce3b176482dbbc1245ebf52b181af44c2cf55f"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/php-fig/container/zipball/b7ce3b176482dbbc1245ebf52b181af44c2cf55f",
"reference": "b7ce3b176482dbbc1245ebf52b181af44c2cf55f",
"shasum": ""
},
"require": {
"php": ">=5.3.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.0.x-dev"
}
},
"autoload": {
"psr-4": {
"Psr\\Container\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "PHP-FIG",
"homepage": "http://www.php-fig.org/"
}
],
"description": "Common Container Interface (PHP FIG PSR-11)",
"homepage": "https://github.com/php-fig/container",
"keywords": [
"PSR-11",
"container",
"container-interface",
"container-interop",
"psr"
],
"time": "2017-02-14T16:28:37+00:00"
},
{
"name": "psr/link",
"version": "1.0.0",
"source": {
"type": "git",
"url": "https://github.com/php-fig/link.git",
"reference": "eea8e8662d5cd3ae4517c9b864493f59fca95562"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/php-fig/link/zipball/eea8e8662d5cd3ae4517c9b864493f59fca95562",
"reference": "eea8e8662d5cd3ae4517c9b864493f59fca95562",
"shasum": ""
},
"require": {
"php": ">=5.3.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.0.x-dev"
}
},
"autoload": {
"psr-4": {
"Psr\\Link\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "PHP-FIG",
"homepage": "http://www.php-fig.org/"
}
],
"description": "Common interfaces for HTTP links",
"keywords": [
"http",
"http-link",
"link",
"psr",
"psr-13",
"rest"
],
"time": "2016-10-28T16:06:13+00:00"
},
{
"name": "psr/log",
"version": "1.1.2",
"source": {
"type": "git",
"url": "https://github.com/php-fig/log.git",
"reference": "446d54b4cb6bf489fc9d75f55843658e6f25d801"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/php-fig/log/zipball/446d54b4cb6bf489fc9d75f55843658e6f25d801",
"reference": "446d54b4cb6bf489fc9d75f55843658e6f25d801",
"shasum": ""
},
"require": {
"php": ">=5.3.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.1.x-dev"
}
},
"autoload": {
"psr-4": {
"Psr\\Log\\": "Psr/Log/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "PHP-FIG",
"homepage": "http://www.php-fig.org/"
}
],
"description": "Common interface for logging libraries",
"homepage": "https://github.com/php-fig/log",
"keywords": [
"log",
"psr",
"psr-3"
],
"time": "2019-11-01T11:05:21+00:00"
},
{
"name": "sensio/framework-extra-bundle",
"version": "v5.5.1",
"source": {
"type": "git",
"url": "https://github.com/sensiolabs/SensioFrameworkExtraBundle.git",
"reference": "dfc2c4df9f7d465a65c770e9feb578fe071636f7"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/sensiolabs/SensioFrameworkExtraBundle/zipball/dfc2c4df9f7d465a65c770e9feb578fe071636f7",
"reference": "dfc2c4df9f7d465a65c770e9feb578fe071636f7",
"shasum": ""
},
"require": {
"doctrine/annotations": "^1.0",
"php": ">=7.1.3",
"symfony/config": "^4.3|^5.0",
"symfony/dependency-injection": "^4.3|^5.0",
"symfony/framework-bundle": "^4.3|^5.0",
"symfony/http-kernel": "^4.3|^5.0"
},
"conflict": {
"doctrine/doctrine-cache-bundle": "<1.3.1"
},
"require-dev": {
"doctrine/doctrine-bundle": "^1.11|^2.0",
"doctrine/orm": "^2.5",
"nyholm/psr7": "^1.1",
"symfony/browser-kit": "^4.3|^5.0",
"symfony/dom-crawler": "^4.3|^5.0",
"symfony/expression-language": "^4.3|^5.0",
"symfony/finder": "^4.3|^5.0",
"symfony/monolog-bridge": "^4.0|^5.0",
"symfony/monolog-bundle": "^3.2",
"symfony/phpunit-bridge": "^4.3.5|^5.0",
"symfony/psr-http-message-bridge": "^1.1",
"symfony/security-bundle": "^4.3|^5.0",
"symfony/twig-bundle": "^4.3|^5.0",
"symfony/yaml": "^4.3|^5.0",
"twig/twig": "^1.34|^2.4|^3.0"
},
"suggest": {
"symfony/expression-language": "",
"symfony/psr-http-message-bridge": "To use the PSR-7 converters",
"symfony/security-bundle": ""
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "5.5.x-dev"
}
},
"autoload": {
"psr-4": {
"Sensio\\Bundle\\FrameworkExtraBundle\\": "src/"
},
"exclude-from-classmap": [
"/tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
}
],
"description": "This bundle provides a way to configure your controllers with annotations",
"keywords": [
"annotations",
"controllers"
],
"time": "2019-10-16T18:54:45+00:00"
},
{
"name": "symfony/asset",
"version": "v4.4.1",
"source": {
"type": "git",
"url": "https://github.com/symfony/asset.git",
"reference": "7ec5fc653dab63d7519a6f411982ee224a696d66"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/asset/zipball/7ec5fc653dab63d7519a6f411982ee224a696d66",
"reference": "7ec5fc653dab63d7519a6f411982ee224a696d66",
"shasum": ""
},
"require": {
"php": "^7.1.3"
},
"require-dev": {
"symfony/http-foundation": "^3.4|^4.0|^5.0",
"symfony/http-kernel": "^3.4|^4.0|^5.0"
},
"suggest": {
"symfony/http-foundation": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Asset\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Asset Component",
"homepage": "https://symfony.com",
"time": "2019-10-12T00:35:04+00:00"
},
{
"name": "symfony/cache",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/cache.git",
"reference": "72d5cdc6920f889290beb65fa96b5e9d4515e382"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/cache/zipball/72d5cdc6920f889290beb65fa96b5e9d4515e382",
"reference": "72d5cdc6920f889290beb65fa96b5e9d4515e382",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"psr/cache": "~1.0",
"psr/log": "~1.0",
"symfony/cache-contracts": "^1.1.7|^2",
"symfony/service-contracts": "^1.1|^2",
"symfony/var-exporter": "^4.2|^5.0"
},
"conflict": {
"doctrine/dbal": "<2.5",
"symfony/dependency-injection": "<3.4",
"symfony/http-kernel": "<4.4",
"symfony/var-dumper": "<4.4"
},
"provide": {
"psr/cache-implementation": "1.0",
"psr/simple-cache-implementation": "1.0",
"symfony/cache-implementation": "1.0"
},
"require-dev": {
"cache/integration-tests": "dev-master",
"doctrine/cache": "~1.6",
"doctrine/dbal": "~2.5",
"predis/predis": "~1.1",
"psr/simple-cache": "^1.0",
"symfony/config": "^4.2|^5.0",
"symfony/dependency-injection": "^3.4|^4.1|^5.0",
"symfony/var-dumper": "^4.4|^5.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Cache\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Cache component with PSR-6, PSR-16, and tags",
"homepage": "https://symfony.com",
"keywords": [
"caching",
"psr6"
],
"time": "2019-11-17T11:01:12+00:00"
},
{
"name": "symfony/cache-contracts",
"version": "v2.0.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/cache-contracts.git",
"reference": "a91281de82119a7a07481b892f709d88da592cd3"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/cache-contracts/zipball/a91281de82119a7a07481b892f709d88da592cd3",
"reference": "a91281de82119a7a07481b892f709d88da592cd3",
"shasum": ""
},
"require": {
"php": "^7.2.9",
"psr/cache": "^1.0"
},
"suggest": {
"symfony/cache-implementation": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.0-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Contracts\\Cache\\": ""
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Generic abstractions related to caching",
"homepage": "https://symfony.com",
"keywords": [
"abstractions",
"contracts",
"decoupling",
"interfaces",
"interoperability",
"standards"
],
"time": "2019-11-09T09:18:34+00:00"
},
{
"name": "symfony/config",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/config.git",
"reference": "f08e1c48e1f05d07c32f2d8599ed539e62105beb"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/config/zipball/f08e1c48e1f05d07c32f2d8599ed539e62105beb",
"reference": "f08e1c48e1f05d07c32f2d8599ed539e62105beb",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/filesystem": "^3.4|^4.0|^5.0",
"symfony/polyfill-ctype": "~1.8"
},
"conflict": {
"symfony/finder": "<3.4"
},
"require-dev": {
"symfony/event-dispatcher": "^3.4|^4.0|^5.0",
"symfony/finder": "^3.4|^4.0|^5.0",
"symfony/messenger": "^4.1|^5.0",
"symfony/service-contracts": "^1.1|^2",
"symfony/yaml": "^3.4|^4.0|^5.0"
},
"suggest": {
"symfony/yaml": "To use the yaml reference dumper"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Config\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Config Component",
"homepage": "https://symfony.com",
"time": "2019-11-16T15:22:42+00:00"
},
{
"name": "symfony/console",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/console.git",
"reference": "8b0ae5742ce9aaa8b0075665862c1ca397d1c1d9"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/console/zipball/8b0ae5742ce9aaa8b0075665862c1ca397d1c1d9",
"reference": "8b0ae5742ce9aaa8b0075665862c1ca397d1c1d9",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-mbstring": "~1.0",
"symfony/polyfill-php73": "^1.8",
"symfony/service-contracts": "^1.1"
},
"conflict": {
"symfony/dependency-injection": "<3.4",
"symfony/event-dispatcher": "<4.3",
"symfony/process": "<3.3"
},
"provide": {
"psr/log-implementation": "1.0"
},
"require-dev": {
"psr/log": "~1.0",
"symfony/config": "~3.4|~4.0",
"symfony/dependency-injection": "~3.4|~4.0",
"symfony/event-dispatcher": "^4.3",
"symfony/lock": "~3.4|~4.0",
"symfony/process": "~3.4|~4.0",
"symfony/var-dumper": "^4.3"
},
"suggest": {
"psr/log": "For using the console logger",
"symfony/event-dispatcher": "",
"symfony/lock": "",
"symfony/process": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Console\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Console Component",
"homepage": "https://symfony.com",
"time": "2019-07-24T17:13:59+00:00"
},
{
"name": "symfony/debug",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/debug.git",
"reference": "b24b791f817116b29e52a63e8544884cf9a40757"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/debug/zipball/b24b791f817116b29e52a63e8544884cf9a40757",
"reference": "b24b791f817116b29e52a63e8544884cf9a40757",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"psr/log": "~1.0"
},
"conflict": {
"symfony/http-kernel": "<3.4"
},
"require-dev": {
"symfony/http-kernel": "^3.4|^4.0|^5.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Debug\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Debug Component",
"homepage": "https://symfony.com",
"time": "2019-11-10T17:54:30+00:00"
},
{
"name": "symfony/dependency-injection",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/dependency-injection.git",
"reference": "d4439814135ed1343c93bde998b7792af8852e41"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/dependency-injection/zipball/d4439814135ed1343c93bde998b7792af8852e41",
"reference": "d4439814135ed1343c93bde998b7792af8852e41",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"psr/container": "^1.0",
"symfony/service-contracts": "^1.1.6|^2"
},
"conflict": {
"symfony/config": "<4.3|>=5.0",
"symfony/finder": "<3.4",
"symfony/proxy-manager-bridge": "<3.4",
"symfony/yaml": "<3.4"
},
"provide": {
"psr/container-implementation": "1.0",
"symfony/service-implementation": "1.0"
},
"require-dev": {
"symfony/config": "^4.3",
"symfony/expression-language": "^3.4|^4.0|^5.0",
"symfony/yaml": "^3.4|^4.0|^5.0"
},
"suggest": {
"symfony/config": "",
"symfony/expression-language": "For using expressions in service container configuration",
"symfony/finder": "For using double-star glob patterns or when GLOB_BRACE portability is required",
"symfony/proxy-manager-bridge": "Generate service proxies to lazy load them",
"symfony/yaml": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\DependencyInjection\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony DependencyInjection Component",
"homepage": "https://symfony.com",
"time": "2019-11-20T13:27:43+00:00"
},
{
"name": "symfony/doctrine-bridge",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/doctrine-bridge.git",
"reference": "fe3f4728ff026bb6df08bcd22a6eb839b90255da"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/doctrine-bridge/zipball/fe3f4728ff026bb6df08bcd22a6eb839b90255da",
"reference": "fe3f4728ff026bb6df08bcd22a6eb839b90255da",
"shasum": ""
},
"require": {
"doctrine/event-manager": "~1.0",
"doctrine/persistence": "~1.0",
"php": "^7.1.3",
"symfony/polyfill-ctype": "~1.8",
"symfony/polyfill-mbstring": "~1.0",
"symfony/service-contracts": "^1.1"
},
"conflict": {
"phpunit/phpunit": "<4.8.35|<5.4.3,>=5.0",
"symfony/dependency-injection": "<3.4",
"symfony/form": "<4.3",
"symfony/messenger": "<4.3"
},
"require-dev": {
"doctrine/annotations": "~1.0",
"doctrine/cache": "~1.6",
"doctrine/collections": "~1.0",
"doctrine/data-fixtures": "1.0.*",
"doctrine/dbal": "~2.4",
"doctrine/orm": "^2.4.5",
"doctrine/reflection": "~1.0",
"symfony/config": "^4.2",
"symfony/dependency-injection": "~3.4|~4.0",
"symfony/expression-language": "~3.4|~4.0",
"symfony/form": "~4.3",
"symfony/http-kernel": "~3.4|~4.0",
"symfony/messenger": "~4.3",
"symfony/property-access": "~3.4|~4.0",
"symfony/property-info": "~3.4|~4.0",
"symfony/proxy-manager-bridge": "~3.4|~4.0",
"symfony/security-core": "~3.4|~4.0",
"symfony/stopwatch": "~3.4|~4.0",
"symfony/translation": "~3.4|~4.0",
"symfony/validator": "~3.4|~4.0"
},
"suggest": {
"doctrine/data-fixtures": "",
"doctrine/dbal": "",
"doctrine/orm": "",
"symfony/form": "",
"symfony/property-info": "",
"symfony/validator": ""
},
"type": "symfony-bridge",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Bridge\\Doctrine\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Doctrine Bridge",
"homepage": "https://symfony.com",
"time": "2019-07-27T06:42:46+00:00"
},
{
"name": "symfony/dotenv",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/dotenv.git",
"reference": "c9ea2a1c60e7db08c1d1379cd4448fd14bda11eb"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/dotenv/zipball/c9ea2a1c60e7db08c1d1379cd4448fd14bda11eb",
"reference": "c9ea2a1c60e7db08c1d1379cd4448fd14bda11eb",
"shasum": ""
},
"require": {
"php": "^7.1.3"
},
"require-dev": {
"symfony/process": "~3.4|~4.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Dotenv\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Registers environment variables from a .env file",
"homepage": "https://symfony.com",
"keywords": [
"dotenv",
"env",
"environment"
],
"time": "2019-06-26T06:50:02+00:00"
},
{
"name": "symfony/error-handler",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/error-handler.git",
"reference": "e1acb58dc6a8722617fe56565f742bcf7e8744bf"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/error-handler/zipball/e1acb58dc6a8722617fe56565f742bcf7e8744bf",
"reference": "e1acb58dc6a8722617fe56565f742bcf7e8744bf",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"psr/log": "~1.0",
"symfony/debug": "^4.4",
"symfony/var-dumper": "^4.4|^5.0"
},
"require-dev": {
"symfony/http-kernel": "^4.4|^5.0",
"symfony/serializer": "^4.4|^5.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\ErrorHandler\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony ErrorHandler Component",
"homepage": "https://symfony.com",
"time": "2019-11-17T22:49:13+00:00"
},
{
"name": "symfony/event-dispatcher",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/event-dispatcher.git",
"reference": "ab1c43e17fff802bef0a898f3bc088ac33b8e0e1"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/event-dispatcher/zipball/ab1c43e17fff802bef0a898f3bc088ac33b8e0e1",
"reference": "ab1c43e17fff802bef0a898f3bc088ac33b8e0e1",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/event-dispatcher-contracts": "^1.1"
},
"conflict": {
"symfony/dependency-injection": "<3.4"
},
"provide": {
"psr/event-dispatcher-implementation": "1.0",
"symfony/event-dispatcher-implementation": "1.1"
},
"require-dev": {
"psr/log": "~1.0",
"symfony/config": "^3.4|^4.0|^5.0",
"symfony/dependency-injection": "^3.4|^4.0|^5.0",
"symfony/expression-language": "^3.4|^4.0|^5.0",
"symfony/http-foundation": "^3.4|^4.0|^5.0",
"symfony/service-contracts": "^1.1|^2",
"symfony/stopwatch": "^3.4|^4.0|^5.0"
},
"suggest": {
"symfony/dependency-injection": "",
"symfony/http-kernel": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\EventDispatcher\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony EventDispatcher Component",
"homepage": "https://symfony.com",
"time": "2019-11-08T22:40:51+00:00"
},
{
"name": "symfony/event-dispatcher-contracts",
"version": "v1.1.7",
"source": {
"type": "git",
"url": "https://github.com/symfony/event-dispatcher-contracts.git",
"reference": "c43ab685673fb6c8d84220c77897b1d6cdbe1d18"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/c43ab685673fb6c8d84220c77897b1d6cdbe1d18",
"reference": "c43ab685673fb6c8d84220c77897b1d6cdbe1d18",
"shasum": ""
},
"require": {
"php": "^7.1.3"
},
"suggest": {
"psr/event-dispatcher": "",
"symfony/event-dispatcher-implementation": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.1-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Contracts\\EventDispatcher\\": ""
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Generic abstractions related to dispatching event",
"homepage": "https://symfony.com",
"keywords": [
"abstractions",
"contracts",
"decoupling",
"interfaces",
"interoperability",
"standards"
],
"time": "2019-09-17T09:54:03+00:00"
},
{
"name": "symfony/expression-language",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/expression-language.git",
"reference": "0243ebde208e0cb401b37e8b8a70a7c6a0aa1d6d"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/expression-language/zipball/0243ebde208e0cb401b37e8b8a70a7c6a0aa1d6d",
"reference": "0243ebde208e0cb401b37e8b8a70a7c6a0aa1d6d",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/cache": "~3.4|~4.0",
"symfony/service-contracts": "^1.1"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\ExpressionLanguage\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony ExpressionLanguage Component",
"homepage": "https://symfony.com",
"time": "2019-05-30T16:10:05+00:00"
},
{
"name": "symfony/filesystem",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/filesystem.git",
"reference": "d12b01cba60be77b583c9af660007211e3909854"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/filesystem/zipball/d12b01cba60be77b583c9af660007211e3909854",
"reference": "d12b01cba60be77b583c9af660007211e3909854",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-ctype": "~1.8"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Filesystem\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Filesystem Component",
"homepage": "https://symfony.com",
"time": "2019-11-12T14:51:11+00:00"
},
{
"name": "symfony/finder",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/finder.git",
"reference": "ce8743441da64c41e2a667b8eb66070444ed911e"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/finder/zipball/ce8743441da64c41e2a667b8eb66070444ed911e",
"reference": "ce8743441da64c41e2a667b8eb66070444ed911e",
"shasum": ""
},
"require": {
"php": "^7.1.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Finder\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Finder Component",
"homepage": "https://symfony.com",
"time": "2019-11-17T21:56:56+00:00"
},
{
"name": "symfony/flex",
"version": "v1.4.8",
"source": {
"type": "git",
"url": "https://github.com/symfony/flex.git",
"reference": "f5bfc79c1f5bed6b2bb4ca9e49a736c2abc03e8f"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/flex/zipball/f5bfc79c1f5bed6b2bb4ca9e49a736c2abc03e8f",
"reference": "f5bfc79c1f5bed6b2bb4ca9e49a736c2abc03e8f",
"shasum": ""
},
"require": {
"composer-plugin-api": "^1.0",
"php": "^7.0"
},
"require-dev": {
"composer/composer": "^1.0.2",
"symfony/dotenv": "^3.4|^4.0|^5.0",
"symfony/phpunit-bridge": "^3.4.19|^4.1.8|^5.0",
"symfony/process": "^2.7|^3.0|^4.0|^5.0"
},
"type": "composer-plugin",
"extra": {
"branch-alias": {
"dev-master": "1.4-dev"
},
"class": "Symfony\\Flex\\Flex"
},
"autoload": {
"psr-4": {
"Symfony\\Flex\\": "src"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien.potencier@gmail.com"
}
],
"description": "Composer plugin for Symfony",
"time": "2019-11-14T09:25:51+00:00"
},
{
"name": "symfony/form",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/form.git",
"reference": "c949b2011cb386f33c3eef37bb27a9cb1e365416"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/form/zipball/c949b2011cb386f33c3eef37bb27a9cb1e365416",
"reference": "c949b2011cb386f33c3eef37bb27a9cb1e365416",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/event-dispatcher": "^4.3",
"symfony/intl": "^4.3",
"symfony/options-resolver": "~4.3",
"symfony/polyfill-ctype": "~1.8",
"symfony/polyfill-mbstring": "~1.0",
"symfony/property-access": "~3.4|~4.0",
"symfony/service-contracts": "~1.1"
},
"conflict": {
"phpunit/phpunit": "<4.8.35|<5.4.3,>=5.0",
"symfony/console": "<4.3",
"symfony/dependency-injection": "<3.4",
"symfony/doctrine-bridge": "<3.4",
"symfony/framework-bundle": "<3.4",
"symfony/http-kernel": "<4.3",
"symfony/intl": "<4.3",
"symfony/translation": "<4.2",
"symfony/twig-bridge": "<3.4.5|<4.0.5,>=4.0"
},
"require-dev": {
"doctrine/collections": "~1.0",
"symfony/config": "~3.4|~4.0",
"symfony/console": "^4.3",
"symfony/dependency-injection": "~3.4|~4.0",
"symfony/http-foundation": "~3.4|~4.0",
"symfony/http-kernel": "~4.3",
"symfony/security-csrf": "~3.4|~4.0",
"symfony/translation": "~4.2",
"symfony/validator": "~3.4|~4.0",
"symfony/var-dumper": "^4.3"
},
"suggest": {
"symfony/security-csrf": "For protecting forms against CSRF attacks.",
"symfony/twig-bridge": "For templating with Twig.",
"symfony/validator": "For form validation."
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Form\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Form Component",
"homepage": "https://symfony.com",
"time": "2019-07-23T11:21:36+00:00"
},
{
"name": "symfony/framework-bundle",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/framework-bundle.git",
"reference": "f4c4d2922c209349fa78bce2ba2faa57ccea1093"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/framework-bundle/zipball/f4c4d2922c209349fa78bce2ba2faa57ccea1093",
"reference": "f4c4d2922c209349fa78bce2ba2faa57ccea1093",
"shasum": ""
},
"require": {
"ext-xml": "*",
"php": "^7.1.3",
"symfony/cache": "~4.3",
"symfony/config": "~4.2",
"symfony/debug": "~4.0",
"symfony/dependency-injection": "^4.3",
"symfony/filesystem": "~3.4|~4.0",
"symfony/finder": "~3.4|~4.0",
"symfony/http-foundation": "^4.3",
"symfony/http-kernel": "^4.3",
"symfony/polyfill-mbstring": "~1.0",
"symfony/routing": "^4.3"
},
"conflict": {
"phpdocumentor/reflection-docblock": "<3.0",
"phpdocumentor/type-resolver": "<0.2.1",
"phpunit/phpunit": "<4.8.35|<5.4.3,>=5.0",
"symfony/asset": "<3.4",
"symfony/browser-kit": "<4.3",
"symfony/console": "<4.3",
"symfony/dom-crawler": "<4.3",
"symfony/dotenv": "<4.2",
"symfony/form": "<4.3",
"symfony/messenger": "<4.3",
"symfony/property-info": "<3.4",
"symfony/serializer": "<4.2",
"symfony/stopwatch": "<3.4",
"symfony/translation": "<4.3",
"symfony/twig-bridge": "<4.1.1",
"symfony/validator": "<4.1",
"symfony/workflow": "<4.3"
},
"require-dev": {
"doctrine/annotations": "~1.0",
"doctrine/cache": "~1.0",
"fig/link-util": "^1.0",
"phpdocumentor/reflection-docblock": "^3.0|^4.0",
"symfony/asset": "~3.4|~4.0",
"symfony/browser-kit": "^4.3",
"symfony/console": "^4.3",
"symfony/css-selector": "~3.4|~4.0",
"symfony/dom-crawler": "^4.3",
"symfony/expression-language": "~3.4|~4.0",
"symfony/form": "^4.3",
"symfony/http-client": "^4.3",
"symfony/lock": "~3.4|~4.0",
"symfony/mailer": "^4.3",
"symfony/messenger": "^4.3",
"symfony/mime": "^4.3",
"symfony/polyfill-intl-icu": "~1.0",
"symfony/process": "~3.4|~4.0",
"symfony/property-info": "~3.4|~4.0",
"symfony/security-csrf": "~3.4|~4.0",
"symfony/security-http": "~3.4|~4.0",
"symfony/serializer": "^4.3",
"symfony/stopwatch": "~3.4|~4.0",
"symfony/templating": "~3.4|~4.0",
"symfony/translation": "~4.3",
"symfony/twig-bundle": "~2.8|~3.2|~4.0",
"symfony/validator": "^4.1",
"symfony/var-dumper": "^4.3",
"symfony/web-link": "~3.4|~4.0",
"symfony/workflow": "^4.3",
"symfony/yaml": "~3.4|~4.0",
"twig/twig": "~1.34|~2.4"
},
"suggest": {
"ext-apcu": "For best performance of the system caches",
"symfony/console": "For using the console commands",
"symfony/form": "For using forms",
"symfony/property-info": "For using the property_info service",
"symfony/serializer": "For using the serializer service",
"symfony/validator": "For using validation",
"symfony/web-link": "For using web links, features such as preloading, prefetching or prerendering",
"symfony/yaml": "For using the debug:config and lint:yaml commands"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Bundle\\FrameworkBundle\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony FrameworkBundle",
"homepage": "https://symfony.com",
"time": "2019-07-27T08:36:33+00:00"
},
{
"name": "symfony/http-foundation",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/http-foundation.git",
"reference": "502040dd2b0cf0a292defeb6145f4d7a4753c99c"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/http-foundation/zipball/502040dd2b0cf0a292defeb6145f4d7a4753c99c",
"reference": "502040dd2b0cf0a292defeb6145f4d7a4753c99c",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/mime": "^4.3|^5.0",
"symfony/polyfill-mbstring": "~1.1"
},
"require-dev": {
"predis/predis": "~1.0",
"symfony/expression-language": "^3.4|^4.0|^5.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\HttpFoundation\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony HttpFoundation Component",
"homepage": "https://symfony.com",
"time": "2019-11-17T10:10:42+00:00"
},
{
"name": "symfony/http-kernel",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/http-kernel.git",
"reference": "5a5e7237d928aa98ff8952050cbbf0135899b6b0"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/http-kernel/zipball/5a5e7237d928aa98ff8952050cbbf0135899b6b0",
"reference": "5a5e7237d928aa98ff8952050cbbf0135899b6b0",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"psr/log": "~1.0",
"symfony/error-handler": "^4.4",
"symfony/event-dispatcher": "^4.4",
"symfony/http-foundation": "^4.4|^5.0",
"symfony/polyfill-ctype": "^1.8",
"symfony/polyfill-php73": "^1.9"
},
"conflict": {
"symfony/browser-kit": "<4.3",
"symfony/config": "<3.4",
"symfony/console": ">=5",
"symfony/dependency-injection": "<4.3",
"symfony/translation": "<4.2",
"twig/twig": "<1.34|<2.4,>=2"
},
"provide": {
"psr/log-implementation": "1.0"
},
"require-dev": {
"psr/cache": "~1.0",
"symfony/browser-kit": "^4.3|^5.0",
"symfony/config": "^3.4|^4.0|^5.0",
"symfony/console": "^3.4|^4.0",
"symfony/css-selector": "^3.4|^4.0|^5.0",
"symfony/dependency-injection": "^4.3|^5.0",
"symfony/dom-crawler": "^3.4|^4.0|^5.0",
"symfony/expression-language": "^3.4|^4.0|^5.0",
"symfony/finder": "^3.4|^4.0|^5.0",
"symfony/process": "^3.4|^4.0|^5.0",
"symfony/routing": "^3.4|^4.0|^5.0",
"symfony/stopwatch": "^3.4|^4.0|^5.0",
"symfony/templating": "^3.4|^4.0|^5.0",
"symfony/translation": "^4.2|^5.0",
"symfony/translation-contracts": "^1.1|^2",
"twig/twig": "^1.34|^2.4|^3.0"
},
"suggest": {
"symfony/browser-kit": "",
"symfony/config": "",
"symfony/console": "",
"symfony/dependency-injection": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\HttpKernel\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony HttpKernel Component",
"homepage": "https://symfony.com",
"time": "2019-11-21T07:08:15+00:00"
},
{
"name": "symfony/inflector",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/inflector.git",
"reference": "98581481d9ddabe4db3a66e10202fe1fa08d791b"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/inflector/zipball/98581481d9ddabe4db3a66e10202fe1fa08d791b",
"reference": "98581481d9ddabe4db3a66e10202fe1fa08d791b",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-ctype": "~1.8"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Inflector\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Bernhard Schussek",
"email": "bschussek@gmail.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Inflector Component",
"homepage": "https://symfony.com",
"keywords": [
"inflection",
"pluralize",
"singularize",
"string",
"symfony",
"words"
],
"time": "2019-11-06T12:02:32+00:00"
},
{
"name": "symfony/intl",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/intl.git",
"reference": "299cbfd6be791438e8d93ffb25765b5b93021bf9"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/intl/zipball/299cbfd6be791438e8d93ffb25765b5b93021bf9",
"reference": "299cbfd6be791438e8d93ffb25765b5b93021bf9",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-intl-icu": "~1.0"
},
"require-dev": {
"symfony/filesystem": "^3.4|^4.0|^5.0"
},
"suggest": {
"ext-intl": "to use the component with locales other than \"en\""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Intl\\": ""
},
"classmap": [
"Resources/stubs"
],
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Bernhard Schussek",
"email": "bschussek@gmail.com"
},
{
"name": "Eriksen Costa",
"email": "eriksen.costa@infranology.com.br"
},
{
"name": "Igor Wiedler",
"email": "igor@wiedler.ch"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "A PHP replacement layer for the C intl extension that includes additional data from the ICU library.",
"homepage": "https://symfony.com",
"keywords": [
"i18n",
"icu",
"internationalization",
"intl",
"l10n",
"localization"
],
"time": "2019-10-12T00:35:04+00:00"
},
{
"name": "symfony/mailer",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/mailer.git",
"reference": "050b93ce9d307de9567908aa8ab8d6fa3b970921"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/mailer/zipball/050b93ce9d307de9567908aa8ab8d6fa3b970921",
"reference": "050b93ce9d307de9567908aa8ab8d6fa3b970921",
"shasum": ""
},
"require": {
"egulias/email-validator": "^2.1.10",
"php": "^7.1.3",
"psr/log": "~1.0",
"symfony/event-dispatcher": "^4.3",
"symfony/mime": "^4.4|^5.0",
"symfony/service-contracts": "^1.1|^2"
},
"conflict": {
"symfony/http-kernel": "<4.4",
"symfony/sendgrid-mailer": "<4.4"
},
"require-dev": {
"symfony/amazon-mailer": "^4.4|^5.0",
"symfony/google-mailer": "^4.4|^5.0",
"symfony/http-client-contracts": "^1.1|^2",
"symfony/mailchimp-mailer": "^4.4|^5.0",
"symfony/mailgun-mailer": "^4.4|^5.0",
"symfony/messenger": "^4.4|^5.0",
"symfony/postmark-mailer": "^4.4|^5.0",
"symfony/sendgrid-mailer": "^4.4|^5.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Mailer\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Mailer Component",
"homepage": "https://symfony.com",
"time": "2019-11-14T14:24:33+00:00"
},
{
"name": "symfony/mime",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/mime.git",
"reference": "89da7b68b7149aab065c09b97f938753ab52831f"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/mime/zipball/89da7b68b7149aab065c09b97f938753ab52831f",
"reference": "89da7b68b7149aab065c09b97f938753ab52831f",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-intl-idn": "^1.10",
"symfony/polyfill-mbstring": "^1.0"
},
"conflict": {
"symfony/mailer": "<4.4"
},
"require-dev": {
"egulias/email-validator": "^2.1.10",
"symfony/dependency-injection": "^3.4|^4.1|^5.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Mime\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "A library to manipulate MIME messages",
"homepage": "https://symfony.com",
"keywords": [
"mime",
"mime-type"
],
"time": "2019-11-13T07:39:40+00:00"
},
{
"name": "symfony/monolog-bridge",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/monolog-bridge.git",
"reference": "45cb3b74c2483eeb877b05b106d9a89023305013"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/monolog-bridge/zipball/45cb3b74c2483eeb877b05b106d9a89023305013",
"reference": "45cb3b74c2483eeb877b05b106d9a89023305013",
"shasum": ""
},
"require": {
"monolog/monolog": "^1.25.1",
"php": "^7.1.3",
"symfony/http-kernel": "^4.3",
"symfony/service-contracts": "^1.1|^2"
},
"conflict": {
"symfony/console": "<3.4",
"symfony/http-foundation": "<3.4"
},
"require-dev": {
"symfony/console": "^3.4|^4.0|^5.0",
"symfony/http-client": "^4.4|^5.0",
"symfony/security-core": "^3.4|^4.0|^5.0",
"symfony/var-dumper": "^3.4|^4.0|^5.0"
},
"suggest": {
"symfony/console": "For the possibility to show log messages in console commands depending on verbosity settings.",
"symfony/http-kernel": "For using the debugging handlers together with the response life cycle of the HTTP kernel.",
"symfony/var-dumper": "For using the debugging handlers like the console handler or the log server handler."
},
"type": "symfony-bridge",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Bridge\\Monolog\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Monolog Bridge",
"homepage": "https://symfony.com",
"time": "2019-10-12T00:35:04+00:00"
},
{
"name": "symfony/monolog-bundle",
"version": "v3.5.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/monolog-bundle.git",
"reference": "dd80460fcfe1fa2050a7103ad818e9d0686ce6fd"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/monolog-bundle/zipball/dd80460fcfe1fa2050a7103ad818e9d0686ce6fd",
"reference": "dd80460fcfe1fa2050a7103ad818e9d0686ce6fd",
"shasum": ""
},
"require": {
"monolog/monolog": "~1.22 || ~2.0",
"php": ">=5.6",
"symfony/config": "~3.4 || ~4.0 || ^5.0",
"symfony/dependency-injection": "~3.4.10 || ^4.0.10 || ^5.0",
"symfony/http-kernel": "~3.4 || ~4.0 || ^5.0",
"symfony/monolog-bridge": "~3.4 || ~4.0 || ^5.0"
},
"require-dev": {
"symfony/console": "~3.4 || ~4.0 || ^5.0",
"symfony/phpunit-bridge": "^3.4.19 || ^4.0 || ^5.0",
"symfony/yaml": "~3.4 || ~4.0 || ^5.0"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "3.x-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Bundle\\MonologBundle\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "http://symfony.com/contributors"
}
],
"description": "Symfony MonologBundle",
"homepage": "http://symfony.com",
"keywords": [
"log",
"logging"
],
"time": "2019-11-13T13:11:14+00:00"
},
{
"name": "symfony/options-resolver",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/options-resolver.git",
"reference": "2be23e63f33de16b49294ea6581f462932a77e2f"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/options-resolver/zipball/2be23e63f33de16b49294ea6581f462932a77e2f",
"reference": "2be23e63f33de16b49294ea6581f462932a77e2f",
"shasum": ""
},
"require": {
"php": "^7.1.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\OptionsResolver\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony OptionsResolver Component",
"homepage": "https://symfony.com",
"keywords": [
"config",
"configuration",
"options"
],
"time": "2019-10-28T21:57:16+00:00"
},
{
"name": "symfony/orm-pack",
"version": "v1.0.7",
"source": {
"type": "git",
"url": "https://github.com/symfony/orm-pack.git",
"reference": "c57f5e05232ca40626eb9fa52a32bc8565e9231c"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/orm-pack/zipball/c57f5e05232ca40626eb9fa52a32bc8565e9231c",
"reference": "c57f5e05232ca40626eb9fa52a32bc8565e9231c",
"shasum": ""
},
"require": {
"doctrine/doctrine-bundle": "^1.6.10|^2.0",
"doctrine/doctrine-migrations-bundle": "^1.3|^2.0",
"doctrine/orm": "^2.5.11",
"php": "^7.0"
},
"type": "symfony-pack",
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"description": "A pack for the Doctrine ORM",
"time": "2019-10-18T05:41:09+00:00"
},
{
"name": "symfony/polyfill-intl-icu",
"version": "v1.12.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/polyfill-intl-icu.git",
"reference": "66810b9d6eb4af54d543867909d65ab9af654d7e"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/polyfill-intl-icu/zipball/66810b9d6eb4af54d543867909d65ab9af654d7e",
"reference": "66810b9d6eb4af54d543867909d65ab9af654d7e",
"shasum": ""
},
"require": {
"php": ">=5.3.3",
"symfony/intl": "~2.3|~3.0|~4.0|~5.0"
},
"suggest": {
"ext-intl": "For best performance"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.12-dev"
}
},
"autoload": {
"files": [
"bootstrap.php"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony polyfill for intl's ICU-related data and classes",
"homepage": "https://symfony.com",
"keywords": [
"compatibility",
"icu",
"intl",
"polyfill",
"portable",
"shim"
],
"time": "2019-08-06T08:03:45+00:00"
},
{
"name": "symfony/polyfill-intl-idn",
"version": "v1.12.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/polyfill-intl-idn.git",
"reference": "6af626ae6fa37d396dc90a399c0ff08e5cfc45b2"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/polyfill-intl-idn/zipball/6af626ae6fa37d396dc90a399c0ff08e5cfc45b2",
"reference": "6af626ae6fa37d396dc90a399c0ff08e5cfc45b2",
"shasum": ""
},
"require": {
"php": ">=5.3.3",
"symfony/polyfill-mbstring": "^1.3",
"symfony/polyfill-php72": "^1.9"
},
"suggest": {
"ext-intl": "For best performance"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.12-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Polyfill\\Intl\\Idn\\": ""
},
"files": [
"bootstrap.php"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Laurent Bassin",
"email": "laurent@bassin.info"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions",
"homepage": "https://symfony.com",
"keywords": [
"compatibility",
"idn",
"intl",
"polyfill",
"portable",
"shim"
],
"time": "2019-08-06T08:03:45+00:00"
},
{
"name": "symfony/polyfill-mbstring",
"version": "v1.12.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/polyfill-mbstring.git",
"reference": "b42a2f66e8f1b15ccf25652c3424265923eb4f17"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/polyfill-mbstring/zipball/b42a2f66e8f1b15ccf25652c3424265923eb4f17",
"reference": "b42a2f66e8f1b15ccf25652c3424265923eb4f17",
"shasum": ""
},
"require": {
"php": ">=5.3.3"
},
"suggest": {
"ext-mbstring": "For best performance"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.12-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Polyfill\\Mbstring\\": ""
},
"files": [
"bootstrap.php"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony polyfill for the Mbstring extension",
"homepage": "https://symfony.com",
"keywords": [
"compatibility",
"mbstring",
"polyfill",
"portable",
"shim"
],
"time": "2019-08-06T08:03:45+00:00"
},
{
"name": "symfony/polyfill-php72",
"version": "v1.12.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/polyfill-php72.git",
"reference": "04ce3335667451138df4307d6a9b61565560199e"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/polyfill-php72/zipball/04ce3335667451138df4307d6a9b61565560199e",
"reference": "04ce3335667451138df4307d6a9b61565560199e",
"shasum": ""
},
"require": {
"php": ">=5.3.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.12-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Polyfill\\Php72\\": ""
},
"files": [
"bootstrap.php"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony polyfill backporting some PHP 7.2+ features to lower PHP versions",
"homepage": "https://symfony.com",
"keywords": [
"compatibility",
"polyfill",
"portable",
"shim"
],
"time": "2019-08-06T08:03:45+00:00"
},
{
"name": "symfony/polyfill-php73",
"version": "v1.12.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/polyfill-php73.git",
"reference": "2ceb49eaccb9352bff54d22570276bb75ba4a188"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/polyfill-php73/zipball/2ceb49eaccb9352bff54d22570276bb75ba4a188",
"reference": "2ceb49eaccb9352bff54d22570276bb75ba4a188",
"shasum": ""
},
"require": {
"php": ">=5.3.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.12-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Polyfill\\Php73\\": ""
},
"files": [
"bootstrap.php"
],
"classmap": [
"Resources/stubs"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions",
"homepage": "https://symfony.com",
"keywords": [
"compatibility",
"polyfill",
"portable",
"shim"
],
"time": "2019-08-06T08:03:45+00:00"
},
{
"name": "symfony/process",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/process.git",
"reference": "856d35814cf287480465bb7a6c413bb7f5f5e69c"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/process/zipball/856d35814cf287480465bb7a6c413bb7f5f5e69c",
"reference": "856d35814cf287480465bb7a6c413bb7f5f5e69c",
"shasum": ""
},
"require": {
"php": "^7.1.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Process\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Process Component",
"homepage": "https://symfony.com",
"time": "2019-05-30T16:10:05+00:00"
},
{
"name": "symfony/property-access",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/property-access.git",
"reference": "4df120cbe473d850eb59f75c341915955e45f25b"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/property-access/zipball/4df120cbe473d850eb59f75c341915955e45f25b",
"reference": "4df120cbe473d850eb59f75c341915955e45f25b",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/inflector": "^3.4|^4.0|^5.0"
},
"require-dev": {
"symfony/cache": "^3.4|^4.0|^5.0"
},
"suggest": {
"psr/cache-implementation": "To cache access methods."
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\PropertyAccess\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony PropertyAccess Component",
"homepage": "https://symfony.com",
"keywords": [
"access",
"array",
"extraction",
"index",
"injection",
"object",
"property",
"property path",
"reflection"
],
"time": "2019-10-12T00:35:04+00:00"
},
{
"name": "symfony/property-info",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/property-info.git",
"reference": "8afd280f159697177e48eefa89efd4db60a57665"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/property-info/zipball/8afd280f159697177e48eefa89efd4db60a57665",
"reference": "8afd280f159697177e48eefa89efd4db60a57665",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/inflector": "^3.4|^4.0|^5.0"
},
"conflict": {
"phpdocumentor/reflection-docblock": "<3.0||>=3.2.0,<3.2.2",
"phpdocumentor/type-resolver": "<0.3.0",
"symfony/dependency-injection": "<3.4"
},
"require-dev": {
"doctrine/annotations": "~1.7",
"phpdocumentor/reflection-docblock": "^3.0|^4.0",
"symfony/cache": "^3.4|^4.0|^5.0",
"symfony/dependency-injection": "^3.4|^4.0|^5.0",
"symfony/serializer": "^3.4|^4.0|^5.0"
},
"suggest": {
"phpdocumentor/reflection-docblock": "To use the PHPDoc",
"psr/cache-implementation": "To cache results",
"symfony/doctrine-bridge": "To use Doctrine metadata",
"symfony/serializer": "To use Serializer metadata"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\PropertyInfo\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Kévin Dunglas",
"email": "dunglas@gmail.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Property Info Component",
"homepage": "https://symfony.com",
"keywords": [
"doctrine",
"phpdoc",
"property",
"symfony",
"type",
"validator"
],
"time": "2019-11-05T16:11:08+00:00"
},
{
"name": "symfony/routing",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/routing.git",
"reference": "cf6d72cf0348775f5243b8389169a7096221ea40"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/routing/zipball/cf6d72cf0348775f5243b8389169a7096221ea40",
"reference": "cf6d72cf0348775f5243b8389169a7096221ea40",
"shasum": ""
},
"require": {
"php": "^7.1.3"
},
"conflict": {
"symfony/config": "<4.2",
"symfony/dependency-injection": "<3.4",
"symfony/yaml": "<3.4"
},
"require-dev": {
"doctrine/annotations": "~1.2",
"psr/log": "~1.0",
"symfony/config": "^4.2|^5.0",
"symfony/dependency-injection": "^3.4|^4.0|^5.0",
"symfony/expression-language": "^3.4|^4.0|^5.0",
"symfony/http-foundation": "^3.4|^4.0|^5.0",
"symfony/yaml": "^3.4|^4.0|^5.0"
},
"suggest": {
"doctrine/annotations": "For using the annotation loader",
"symfony/config": "For using the all-in-one router or any loader",
"symfony/expression-language": "For using expression matching",
"symfony/http-foundation": "For using a Symfony Request object",
"symfony/yaml": "For using the YAML loader"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Routing\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Routing Component",
"homepage": "https://symfony.com",
"keywords": [
"router",
"routing",
"uri",
"url"
],
"time": "2019-11-20T13:44:34+00:00"
},
{
"name": "symfony/security-bundle",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/security-bundle.git",
"reference": "5cd2e315fd432345afca5ddc45a229aa89502a9f"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/security-bundle/zipball/5cd2e315fd432345afca5ddc45a229aa89502a9f",
"reference": "5cd2e315fd432345afca5ddc45a229aa89502a9f",
"shasum": ""
},
"require": {
"ext-xml": "*",
"php": "^7.1.3",
"symfony/config": "^4.2",
"symfony/dependency-injection": "^4.2",
"symfony/http-kernel": "^4.3",
"symfony/security-core": "~4.3",
"symfony/security-csrf": "~4.2",
"symfony/security-guard": "~4.2",
"symfony/security-http": "^4.3"
},
"conflict": {
"symfony/browser-kit": "<4.2",
"symfony/console": "<3.4",
"symfony/framework-bundle": "<4.2",
"symfony/twig-bundle": "<4.2",
"symfony/var-dumper": "<3.4"
},
"require-dev": {
"doctrine/doctrine-bundle": "~1.5",
"symfony/asset": "~3.4|~4.0",
"symfony/browser-kit": "~4.2",
"symfony/console": "~3.4|~4.0",
"symfony/css-selector": "~3.4|~4.0",
"symfony/dom-crawler": "~3.4|~4.0",
"symfony/expression-language": "~3.4|~4.0",
"symfony/form": "~3.4|~4.0",
"symfony/framework-bundle": "~4.2",
"symfony/http-foundation": "~3.4|~4.0",
"symfony/process": "~3.4|~4.0",
"symfony/translation": "~3.4|~4.0",
"symfony/twig-bridge": "~3.4|~4.0",
"symfony/twig-bundle": "~4.2",
"symfony/validator": "~3.4|~4.0",
"symfony/var-dumper": "~3.4|~4.0",
"symfony/yaml": "~3.4|~4.0",
"twig/twig": "~1.34|~2.4"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Bundle\\SecurityBundle\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony SecurityBundle",
"homepage": "https://symfony.com",
"time": "2019-07-27T06:42:46+00:00"
},
{
"name": "symfony/security-core",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/security-core.git",
"reference": "312c91f90786fd7add89e8542cfc98543f0e60db"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/security-core/zipball/312c91f90786fd7add89e8542cfc98543f0e60db",
"reference": "312c91f90786fd7add89e8542cfc98543f0e60db",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/event-dispatcher-contracts": "^1.1|^2",
"symfony/service-contracts": "^1.1.6|^2"
},
"conflict": {
"symfony/event-dispatcher": "<4.3|>=5",
"symfony/ldap": "<4.4",
"symfony/security-guard": "<4.3"
},
"require-dev": {
"psr/container": "^1.0",
"psr/log": "~1.0",
"symfony/event-dispatcher": "^4.3",
"symfony/expression-language": "^3.4|^4.0|^5.0",
"symfony/http-foundation": "^3.4|^4.0|^5.0",
"symfony/ldap": "^4.4|^5.0",
"symfony/validator": "^3.4.31|^4.3.4|^5.0"
},
"suggest": {
"psr/container-implementation": "To instantiate the Security class",
"symfony/event-dispatcher": "",
"symfony/expression-language": "For using the expression voter",
"symfony/http-foundation": "",
"symfony/ldap": "For using LDAP integration",
"symfony/validator": "For using the user password constraint"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Security\\Core\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Security Component - Core Library",
"homepage": "https://symfony.com",
"time": "2019-11-20T10:44:55+00:00"
},
{
"name": "symfony/security-csrf",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/security-csrf.git",
"reference": "aeed1a2315019b5a090f5ad34c01f1935ea9b757"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/security-csrf/zipball/aeed1a2315019b5a090f5ad34c01f1935ea9b757",
"reference": "aeed1a2315019b5a090f5ad34c01f1935ea9b757",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/security-core": "^3.4|^4.0|^5.0"
},
"conflict": {
"symfony/http-foundation": "<3.4"
},
"require-dev": {
"symfony/http-foundation": "^3.4|^4.0|^5.0"
},
"suggest": {
"symfony/http-foundation": "For using the class SessionTokenStorage."
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Security\\Csrf\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Security Component - CSRF Library",
"homepage": "https://symfony.com",
"time": "2019-10-12T00:35:04+00:00"
},
{
"name": "symfony/security-guard",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/security-guard.git",
"reference": "367e7d49648113279baddceb296ffd90c621414a"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/security-guard/zipball/367e7d49648113279baddceb296ffd90c621414a",
"reference": "367e7d49648113279baddceb296ffd90c621414a",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/security-core": "^3.4.22|^4.2.3|^5.0",
"symfony/security-http": "^4.3"
},
"require-dev": {
"psr/log": "~1.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Security\\Guard\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Security Component - Guard",
"homepage": "https://symfony.com",
"time": "2019-10-28T20:30:34+00:00"
},
{
"name": "symfony/security-http",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/security-http.git",
"reference": "e49361b75e9acbc029b35ae4ba957e712137286b"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/security-http/zipball/e49361b75e9acbc029b35ae4ba957e712137286b",
"reference": "e49361b75e9acbc029b35ae4ba957e712137286b",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/http-foundation": "^3.4|^4.0|^5.0",
"symfony/http-kernel": "^4.4",
"symfony/property-access": "^3.4|^4.0|^5.0",
"symfony/security-core": "^4.4"
},
"conflict": {
"symfony/event-dispatcher": ">=5",
"symfony/security-csrf": "<3.4.11|~4.0,<4.0.11"
},
"require-dev": {
"psr/log": "~1.0",
"symfony/routing": "^3.4|^4.0|^5.0",
"symfony/security-csrf": "^3.4.11|^4.0.11|^5.0"
},
"suggest": {
"symfony/routing": "For using the HttpUtils class to create sub-requests, redirect the user, and match URLs",
"symfony/security-csrf": "For using tokens to protect authentication/logout attempts"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Security\\Http\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Security Component - HTTP Integration",
"homepage": "https://symfony.com",
"time": "2019-11-20T10:44:55+00:00"
},
{
"name": "symfony/serializer",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/serializer.git",
"reference": "57116a962eb0c5e165009535f1e1d2e7024e78de"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/serializer/zipball/57116a962eb0c5e165009535f1e1d2e7024e78de",
"reference": "57116a962eb0c5e165009535f1e1d2e7024e78de",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-ctype": "~1.8"
},
"conflict": {
"phpdocumentor/type-resolver": "<0.2.1",
"symfony/dependency-injection": "<3.4",
"symfony/property-access": "<3.4",
"symfony/property-info": "<3.4",
"symfony/yaml": "<3.4"
},
"require-dev": {
"doctrine/annotations": "~1.0",
"doctrine/cache": "~1.0",
"phpdocumentor/reflection-docblock": "^3.2|^4.0",
"symfony/cache": "^3.4|^4.0|^5.0",
"symfony/config": "^3.4|^4.0|^5.0",
"symfony/dependency-injection": "^3.4|^4.0|^5.0",
"symfony/error-handler": "^4.4|^5.0",
"symfony/http-foundation": "^3.4|^4.0|^5.0",
"symfony/property-access": "^3.4|^4.0|^5.0",
"symfony/property-info": "^3.4.13|~4.0|^5.0",
"symfony/validator": "^3.4|^4.0|^5.0",
"symfony/yaml": "^3.4|^4.0|^5.0"
},
"suggest": {
"doctrine/annotations": "For using the annotation mapping. You will also need doctrine/cache.",
"doctrine/cache": "For using the default cached annotation reader and metadata cache.",
"psr/cache-implementation": "For using the metadata cache.",
"symfony/config": "For using the XML mapping loader.",
"symfony/http-foundation": "For using a MIME type guesser within the DataUriNormalizer.",
"symfony/property-access": "For using the ObjectNormalizer.",
"symfony/property-info": "To deserialize relations.",
"symfony/yaml": "For using the default YAML mapping loader."
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Serializer\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Serializer Component",
"homepage": "https://symfony.com",
"time": "2019-11-13T07:39:40+00:00"
},
{
"name": "symfony/serializer-pack",
"version": "v1.0.2",
"source": {
"type": "git",
"url": "https://github.com/symfony/serializer-pack.git",
"reference": "c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/serializer-pack/zipball/c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2",
"reference": "c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2",
"shasum": ""
},
"require": {
"doctrine/annotations": "^1.0",
"php": "^7.0",
"phpdocumentor/reflection-docblock": "^3.0|^4.0",
"symfony/property-access": "*",
"symfony/property-info": "*",
"symfony/serializer": "*"
},
"type": "symfony-pack",
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"description": "A pack for the Symfony serializer",
"time": "2018-12-10T12:14:14+00:00"
},
{
"name": "symfony/service-contracts",
"version": "v1.1.8",
"source": {
"type": "git",
"url": "https://github.com/symfony/service-contracts.git",
"reference": "ffc7f5692092df31515df2a5ecf3b7302b3ddacf"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/service-contracts/zipball/ffc7f5692092df31515df2a5ecf3b7302b3ddacf",
"reference": "ffc7f5692092df31515df2a5ecf3b7302b3ddacf",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"psr/container": "^1.0"
},
"suggest": {
"symfony/service-implementation": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.1-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Contracts\\Service\\": ""
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Generic abstractions related to writing services",
"homepage": "https://symfony.com",
"keywords": [
"abstractions",
"contracts",
"decoupling",
"interfaces",
"interoperability",
"standards"
],
"time": "2019-10-14T12:27:06+00:00"
},
{
"name": "symfony/stopwatch",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/stopwatch.git",
"reference": "5745b514fc56ae1907c6b8ed74f94f90f64694e9"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/stopwatch/zipball/5745b514fc56ae1907c6b8ed74f94f90f64694e9",
"reference": "5745b514fc56ae1907c6b8ed74f94f90f64694e9",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/service-contracts": "^1.0|^2"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Stopwatch\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Stopwatch Component",
"homepage": "https://symfony.com",
"time": "2019-11-05T16:11:08+00:00"
},
{
"name": "symfony/templating",
"version": "v4.4.2",
"source": {
"type": "git",
"url": "https://github.com/symfony/templating.git",
"reference": "628e5d6b9f779721a960cbc02f129c8b02c3f514"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/templating/zipball/628e5d6b9f779721a960cbc02f129c8b02c3f514",
"reference": "628e5d6b9f779721a960cbc02f129c8b02c3f514",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-ctype": "~1.8"
},
"require-dev": {
"psr/log": "~1.0"
},
"suggest": {
"psr/log-implementation": "For using debug logging in loaders"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Templating\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Templating Component",
"homepage": "https://symfony.com",
"time": "2019-10-28T20:30:34+00:00"
},
{
"name": "symfony/translation",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/translation.git",
"reference": "4e3e39cc485304f807622bdc64938e4633396406"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/translation/zipball/4e3e39cc485304f807622bdc64938e4633396406",
"reference": "4e3e39cc485304f807622bdc64938e4633396406",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-mbstring": "~1.0",
"symfony/translation-contracts": "^1.1.2"
},
"conflict": {
"symfony/config": "<3.4",
"symfony/dependency-injection": "<3.4",
"symfony/yaml": "<3.4"
},
"provide": {
"symfony/translation-implementation": "1.0"
},
"require-dev": {
"psr/log": "~1.0",
"symfony/config": "~3.4|~4.0",
"symfony/console": "~3.4|~4.0",
"symfony/dependency-injection": "~3.4|~4.0",
"symfony/finder": "~2.8|~3.0|~4.0",
"symfony/http-kernel": "~3.4|~4.0",
"symfony/intl": "~3.4|~4.0",
"symfony/service-contracts": "^1.1.2",
"symfony/var-dumper": "~3.4|~4.0",
"symfony/yaml": "~3.4|~4.0"
},
"suggest": {
"psr/log-implementation": "To use logging capability in translator",
"symfony/config": "",
"symfony/yaml": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Translation\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Translation Component",
"homepage": "https://symfony.com",
"time": "2019-07-18T10:34:59+00:00"
},
{
"name": "symfony/translation-contracts",
"version": "v1.1.7",
"source": {
"type": "git",
"url": "https://github.com/symfony/translation-contracts.git",
"reference": "364518c132c95642e530d9b2d217acbc2ccac3e6"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/translation-contracts/zipball/364518c132c95642e530d9b2d217acbc2ccac3e6",
"reference": "364518c132c95642e530d9b2d217acbc2ccac3e6",
"shasum": ""
},
"require": {
"php": "^7.1.3"
},
"suggest": {
"symfony/translation-implementation": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.1-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Contracts\\Translation\\": ""
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Generic abstractions related to translation",
"homepage": "https://symfony.com",
"keywords": [
"abstractions",
"contracts",
"decoupling",
"interfaces",
"interoperability",
"standards"
],
"time": "2019-09-17T11:12:18+00:00"
},
{
"name": "symfony/twig-bridge",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/twig-bridge.git",
"reference": "d0827d80581436a7d0f2a86df19e7d2106d1b167"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/twig-bridge/zipball/d0827d80581436a7d0f2a86df19e7d2106d1b167",
"reference": "d0827d80581436a7d0f2a86df19e7d2106d1b167",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/translation-contracts": "^1.1",
"twig/twig": "^1.41|^2.10"
},
"conflict": {
"symfony/console": "<3.4",
"symfony/form": "<4.3",
"symfony/http-foundation": "<4.3",
"symfony/translation": "<4.2",
"symfony/workflow": "<4.3"
},
"require-dev": {
"egulias/email-validator": "^2.0",
"symfony/asset": "~3.4|~4.0",
"symfony/console": "~3.4|~4.0",
"symfony/dependency-injection": "~3.4|~4.0",
"symfony/expression-language": "~3.4|~4.0",
"symfony/finder": "~3.4|~4.0",
"symfony/form": "^4.3",
"symfony/http-foundation": "~4.3",
"symfony/http-kernel": "~3.4|~4.0",
"symfony/mime": "~4.3",
"symfony/polyfill-intl-icu": "~1.0",
"symfony/routing": "~3.4|~4.0",
"symfony/security-acl": "~2.8|~3.0",
"symfony/security-csrf": "~3.4|~4.0",
"symfony/security-http": "~3.4|~4.0",
"symfony/stopwatch": "~3.4|~4.0",
"symfony/templating": "~3.4|~4.0",
"symfony/translation": "^4.2.1",
"symfony/var-dumper": "~3.4|~4.0",
"symfony/web-link": "~3.4|~4.0",
"symfony/workflow": "~4.3",
"symfony/yaml": "~3.4|~4.0"
},
"suggest": {
"symfony/asset": "For using the AssetExtension",
"symfony/expression-language": "For using the ExpressionExtension",
"symfony/finder": "",
"symfony/form": "For using the FormExtension",
"symfony/http-kernel": "For using the HttpKernelExtension",
"symfony/routing": "For using the RoutingExtension",
"symfony/security-core": "For using the SecurityExtension",
"symfony/security-csrf": "For using the CsrfExtension",
"symfony/security-http": "For using the LogoutUrlExtension",
"symfony/stopwatch": "For using the StopwatchExtension",
"symfony/templating": "For using the TwigEngine",
"symfony/translation": "For using the TranslationExtension",
"symfony/var-dumper": "For using the DumpExtension",
"symfony/web-link": "For using the WebLinkExtension",
"symfony/yaml": "For using the YamlExtension"
},
"type": "symfony-bridge",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Bridge\\Twig\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Twig Bridge",
"homepage": "https://symfony.com",
"time": "2019-07-24T19:57:32+00:00"
},
{
"name": "symfony/twig-bundle",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/twig-bundle.git",
"reference": "7811b73fbfbb33418a73563558d5c262b1bbfa5d"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/twig-bundle/zipball/7811b73fbfbb33418a73563558d5c262b1bbfa5d",
"reference": "7811b73fbfbb33418a73563558d5c262b1bbfa5d",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/config": "~4.2",
"symfony/debug": "~4.0",
"symfony/http-foundation": "~4.3",
"symfony/http-kernel": "~4.1",
"symfony/polyfill-ctype": "~1.8",
"symfony/twig-bridge": "^4.3",
"twig/twig": "~1.41|~2.10"
},
"conflict": {
"symfony/dependency-injection": "<4.1",
"symfony/framework-bundle": "<4.3",
"symfony/translation": "<4.2"
},
"require-dev": {
"doctrine/annotations": "~1.0",
"doctrine/cache": "~1.0",
"symfony/asset": "~3.4|~4.0",
"symfony/dependency-injection": "^4.2.5",
"symfony/expression-language": "~3.4|~4.0",
"symfony/finder": "~3.4|~4.0",
"symfony/form": "~3.4|~4.0",
"symfony/framework-bundle": "~4.3",
"symfony/routing": "~3.4|~4.0",
"symfony/stopwatch": "~3.4|~4.0",
"symfony/templating": "~3.4|~4.0",
"symfony/translation": "^4.2",
"symfony/web-link": "~3.4|~4.0",
"symfony/yaml": "~3.4|~4.0"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Bundle\\TwigBundle\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony TwigBundle",
"homepage": "https://symfony.com",
"time": "2019-07-19T08:33:28+00:00"
},
{
"name": "symfony/validator",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/validator.git",
"reference": "dbca6327b315d29653f826057ee5034ff234c587"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/validator/zipball/dbca6327b315d29653f826057ee5034ff234c587",
"reference": "dbca6327b315d29653f826057ee5034ff234c587",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-ctype": "~1.8",
"symfony/polyfill-mbstring": "~1.0",
"symfony/translation-contracts": "^1.1"
},
"conflict": {
"phpunit/phpunit": "<4.8.35|<5.4.3,>=5.0",
"symfony/dependency-injection": "<3.4",
"symfony/http-kernel": "<3.4",
"symfony/intl": "<4.3",
"symfony/translation": "<4.2",
"symfony/yaml": "<3.4"
},
"require-dev": {
"doctrine/annotations": "~1.0",
"doctrine/cache": "~1.0",
"egulias/email-validator": "^1.2.8|~2.0",
"symfony/cache": "~3.4|~4.0",
"symfony/config": "~3.4|~4.0",
"symfony/dependency-injection": "~3.4|~4.0",
"symfony/expression-language": "~3.4|~4.0",
"symfony/http-client": "^4.3",
"symfony/http-foundation": "~4.1",
"symfony/http-kernel": "~3.4|~4.0",
"symfony/intl": "^4.3",
"symfony/property-access": "~3.4|~4.0",
"symfony/property-info": "~3.4|~4.0",
"symfony/translation": "~4.2",
"symfony/var-dumper": "~3.4|~4.0",
"symfony/yaml": "~3.4|~4.0"
},
"suggest": {
"doctrine/annotations": "For using the annotation mapping. You will also need doctrine/cache.",
"doctrine/cache": "For using the default cached annotation reader and metadata cache.",
"egulias/email-validator": "Strict (RFC compliant) email validation",
"psr/cache-implementation": "For using the metadata cache.",
"symfony/config": "",
"symfony/expression-language": "For using the Expression validator",
"symfony/http-foundation": "",
"symfony/intl": "",
"symfony/property-access": "For accessing properties within comparison constraints",
"symfony/property-info": "To automatically add NotNull and Type constraints",
"symfony/translation": "For translating validation errors.",
"symfony/yaml": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Validator\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Validator Component",
"homepage": "https://symfony.com",
"time": "2019-07-23T11:21:36+00:00"
},
{
"name": "symfony/var-dumper",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/var-dumper.git",
"reference": "eade2890f8b0eeb279b6cf41b50a10007294490f"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/var-dumper/zipball/eade2890f8b0eeb279b6cf41b50a10007294490f",
"reference": "eade2890f8b0eeb279b6cf41b50a10007294490f",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-mbstring": "~1.0",
"symfony/polyfill-php72": "~1.5"
},
"conflict": {
"phpunit/phpunit": "<4.8.35|<5.4.3,>=5.0",
"symfony/console": "<3.4"
},
"require-dev": {
"ext-iconv": "*",
"symfony/console": "^3.4|^4.0|^5.0",
"symfony/process": "^4.4|^5.0",
"twig/twig": "^1.34|^2.4|^3.0"
},
"suggest": {
"ext-iconv": "To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).",
"ext-intl": "To show region name in time zone dump",
"symfony/console": "To use the ServerDumpCommand and/or the bin/var-dump-server script"
},
"bin": [
"Resources/bin/var-dump-server"
],
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"files": [
"Resources/functions/dump.php"
],
"psr-4": {
"Symfony\\Component\\VarDumper\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony mechanism for exploring and dumping PHP variables",
"homepage": "https://symfony.com",
"keywords": [
"debug",
"dump"
],
"time": "2019-11-12T14:51:11+00:00"
},
{
"name": "symfony/var-exporter",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/var-exporter.git",
"reference": "72feb69a33def8f761e612360588e40bac98caad"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/var-exporter/zipball/72feb69a33def8f761e612360588e40bac98caad",
"reference": "72feb69a33def8f761e612360588e40bac98caad",
"shasum": ""
},
"require": {
"php": "^7.1.3"
},
"require-dev": {
"symfony/var-dumper": "^4.1.1|^5.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\VarExporter\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "A blend of var_export() + serialize() to turn any serializable data structure to plain PHP code",
"homepage": "https://symfony.com",
"keywords": [
"clone",
"construct",
"export",
"hydrate",
"instantiate",
"serialize"
],
"time": "2019-11-13T07:39:40+00:00"
},
{
"name": "symfony/web-link",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/web-link.git",
"reference": "af0e386322f192ed50bd9c812daedce05368733c"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/web-link/zipball/af0e386322f192ed50bd9c812daedce05368733c",
"reference": "af0e386322f192ed50bd9c812daedce05368733c",
"shasum": ""
},
"require": {
"fig/link-util": "^1.0",
"php": "^7.1.3",
"psr/link": "^1.0"
},
"conflict": {
"symfony/http-kernel": "<4.3"
},
"require-dev": {
"symfony/http-foundation": "~3.4|~4.0",
"symfony/http-kernel": "^4.3"
},
"suggest": {
"symfony/http-kernel": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\WebLink\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Kévin Dunglas",
"email": "dunglas@gmail.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony WebLink Component",
"homepage": "https://symfony.com",
"keywords": [
"dns-prefetch",
"http",
"http2",
"link",
"performance",
"prefetch",
"preload",
"prerender",
"psr13",
"push"
],
"time": "2019-03-14T07:32:46+00:00"
},
{
"name": "symfony/webpack-encore-bundle",
"version": "v1.7.2",
"source": {
"type": "git",
"url": "https://github.com/symfony/webpack-encore-bundle.git",
"reference": "787c2fdedde57788013339f05719c82ce07b6058"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/webpack-encore-bundle/zipball/787c2fdedde57788013339f05719c82ce07b6058",
"reference": "787c2fdedde57788013339f05719c82ce07b6058",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/asset": "^3.4 || ^4.0 || ^5.0",
"symfony/config": "^3.4 || ^4.0 || ^5.0",
"symfony/dependency-injection": "^3.4 || ^4.0 || ^5.0",
"symfony/http-kernel": "^3.4 || ^4.0 || ^5.0",
"symfony/service-contracts": "^1.0 || ^2.0"
},
"require-dev": {
"symfony/framework-bundle": "^3.4 || ^4.0 || ^5.0",
"symfony/phpunit-bridge": "^4.3.5 || ^5.0",
"symfony/twig-bundle": "^3.4 || ^4.0 || ^5.0",
"symfony/web-link": "^3.4 || ^4.0 || ^5.0"
},
"type": "symfony-bundle",
"extra": {
"thanks": {
"name": "symfony/webpack-encore",
"url": "https://github.com/symfony/webpack-encore"
}
},
"autoload": {
"psr-4": {
"Symfony\\WebpackEncoreBundle\\": "src"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Integration with your Symfony app & Webpack Encore!",
"time": "2019-11-26T14:48:41+00:00"
},
{
"name": "symfony/yaml",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/yaml.git",
"reference": "34d29c2acd1ad65688f58452fd48a46bd996d5a6"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/yaml/zipball/34d29c2acd1ad65688f58452fd48a46bd996d5a6",
"reference": "34d29c2acd1ad65688f58452fd48a46bd996d5a6",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-ctype": "~1.8"
},
"conflict": {
"symfony/console": "<3.4"
},
"require-dev": {
"symfony/console": "~3.4|~4.0"
},
"suggest": {
"symfony/console": "For validating YAML files using the lint command"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\Yaml\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Yaml Component",
"homepage": "https://symfony.com",
"time": "2019-07-24T14:47:54+00:00"
},
{
"name": "twig/twig",
"version": "v2.12.2",
"source": {
"type": "git",
"url": "https://github.com/twigphp/Twig.git",
"reference": "d761fd1f1c6b867ae09a7d8119a6d95d06dc44ed"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/twigphp/Twig/zipball/d761fd1f1c6b867ae09a7d8119a6d95d06dc44ed",
"reference": "d761fd1f1c6b867ae09a7d8119a6d95d06dc44ed",
"shasum": ""
},
"require": {
"php": "^7.0",
"symfony/polyfill-ctype": "^1.8",
"symfony/polyfill-mbstring": "^1.3"
},
"require-dev": {
"psr/container": "^1.0",
"symfony/debug": "^3.4|^4.2",
"symfony/phpunit-bridge": "^4.4@dev|^5.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.12-dev"
}
},
"autoload": {
"psr-0": {
"Twig_": "lib/"
},
"psr-4": {
"Twig\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com",
"homepage": "http://fabien.potencier.org",
"role": "Lead Developer"
},
{
"name": "Twig Team",
"homepage": "https://twig.symfony.com/contributors",
"role": "Contributors"
},
{
"name": "Armin Ronacher",
"email": "armin.ronacher@active-4.com",
"role": "Project Founder"
}
],
"description": "Twig, the flexible, fast, and secure template language for PHP",
"homepage": "https://twig.symfony.com",
"keywords": [
"templating"
],
"time": "2019-11-11T16:52:09+00:00"
},
{
"name": "vich/uploader-bundle",
"version": "1.11.0",
"source": {
"type": "git",
"url": "https://github.com/dustin10/VichUploaderBundle.git",
"reference": "8ef4935f5535bb4e967f30ee95dff358c7c0705e"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/dustin10/VichUploaderBundle/zipball/8ef4935f5535bb4e967f30ee95dff358c7c0705e",
"reference": "8ef4935f5535bb4e967f30ee95dff358c7c0705e",
"shasum": ""
},
"require": {
"behat/transliterator": "^1.2",
"ext-simplexml": "*",
"jms/metadata": "^2.0",
"php": "^7.2",
"symfony/config": "^3.4 || ^4.0",
"symfony/dependency-injection": "^3.4 || ^4.0",
"symfony/event-dispatcher": "^3.4 || ^4.0",
"symfony/form": "^3.4.19 || ^4.0",
"symfony/http-foundation": "^3.4 || ^4.0",
"symfony/http-kernel": "^3.4 || ^4.0",
"symfony/property-access": "^3.4 || ^4.0",
"symfony/templating": "^3.4 || ^4.0"
},
"require-dev": {
"alcaeus/mongo-php-adapter": "^1.1",
"doctrine/doctrine-bundle": "^1.8",
"doctrine/mongodb-odm": "^1.2",
"doctrine/orm": "^2.5",
"ext-sqlite3": "*",
"knplabs/knp-gaufrette-bundle": "^0.6",
"matthiasnoback/symfony-dependency-injection-test": "^4.0",
"mikey179/vfsstream": "^1.6",
"oneup/flysystem-bundle": "^3.0",
"phpunit/phpunit": "^8.0",
"symfony/asset": "^3.4 || ^4.0",
"symfony/browser-kit": "^3.4 || ^4.0",
"symfony/css-selector": "^3.4 || ^4.0",
"symfony/doctrine-bridge": "^3.4 || ^4.0",
"symfony/dom-crawler": "^3.4 || ^4.0",
"symfony/framework-bundle": "^3.4.23 || ^4.2.4",
"symfony/phpunit-bridge": "^4.3",
"symfony/security-csrf": "^3.4 || ^4.0",
"symfony/translation": "^3.4 || ^4.0",
"symfony/twig-bridge": "^3.4 || ^4.0",
"symfony/twig-bundle": "^3.4 || ^4.0",
"symfony/validator": "^3.4 || ^4.0",
"symfony/var-dumper": "^3.4 || ^4.0",
"symfony/yaml": "^3.4 || ^4.0"
},
"suggest": {
"doctrine/doctrine-bundle": "For integration with Doctrine",
"doctrine/mongodb-odm-bundle": "For integration with Doctrine ODM",
"doctrine/orm": "For integration with Doctrine ORM",
"doctrine/phpcr-odm": "For integration with Doctrine PHPCR",
"knplabs/knp-gaufrette-bundle": "For integration with Gaufrette",
"liip/imagine-bundle": "To generate image thumbnails",
"ocramius/proxy-manager": "To use lazy services",
"oneup/flysystem-bundle": "For integration with Flysystem",
"symfony/asset": "To generate better links",
"symfony/yaml": "To use YAML mapping",
"willdurand/propel-eventdispatcher-bundle": "For integration with Propel"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "1.11.x-dev"
}
},
"autoload": {
"psr-4": {
"Vich\\UploaderBundle\\": ""
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Dustin Dobervich",
"email": "ddobervich@gmail.com"
}
],
"description": "Ease file uploads attached to entities",
"homepage": "https://github.com/dustin10/VichUploaderBundle",
"keywords": [
"file uploads",
"upload"
],
"time": "2019-11-21T14:09:47+00:00"
},
{
"name": "webmozart/assert",
"version": "1.6.0",
"source": {
"type": "git",
"url": "https://github.com/webmozart/assert.git",
"reference": "573381c0a64f155a0d9a23f4b0c797194805b925"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/webmozart/assert/zipball/573381c0a64f155a0d9a23f4b0c797194805b925",
"reference": "573381c0a64f155a0d9a23f4b0c797194805b925",
"shasum": ""
},
"require": {
"php": "^5.3.3 || ^7.0",
"symfony/polyfill-ctype": "^1.8"
},
"conflict": {
"vimeo/psalm": "<3.6.0"
},
"require-dev": {
"phpunit/phpunit": "^4.8.36 || ^7.5.13"
},
"type": "library",
"autoload": {
"psr-4": {
"Webmozart\\Assert\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Bernhard Schussek",
"email": "bschussek@gmail.com"
}
],
"description": "Assertions to validate method input/output with nice error messages.",
"keywords": [
"assert",
"check",
"validate"
],
"time": "2019-11-24T13:36:37+00:00"
},
{
"name": "zendframework/zend-code",
"version": "3.4.0",
"source": {
"type": "git",
"url": "https://github.com/zendframework/zend-code.git",
"reference": "46feaeecea14161734b56c1ace74f28cb329f194"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/zendframework/zend-code/zipball/46feaeecea14161734b56c1ace74f28cb329f194",
"reference": "46feaeecea14161734b56c1ace74f28cb329f194",
"shasum": ""
},
"require": {
"php": "^7.1",
"zendframework/zend-eventmanager": "^2.6 || ^3.0"
},
"require-dev": {
"doctrine/annotations": "^1.0",
"ext-phar": "*",
"phpunit/phpunit": "^7.5.16 || ^8.4",
"zendframework/zend-coding-standard": "^1.0",
"zendframework/zend-stdlib": "^2.7 || ^3.0"
},
"suggest": {
"doctrine/annotations": "Doctrine\\Common\\Annotations >=1.0 for annotation features",
"zendframework/zend-stdlib": "Zend\\Stdlib component"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "3.4.x-dev",
"dev-develop": "3.5.x-dev"
}
},
"autoload": {
"psr-4": {
"Zend\\Code\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause"
],
"description": "Extensions to the PHP Reflection API, static code scanning, and code generation",
"keywords": [
"ZendFramework",
"code",
"zf"
],
"abandoned": "laminas/laminas-code",
"time": "2019-10-05T23:18:22+00:00"
},
{
"name": "zendframework/zend-eventmanager",
"version": "3.2.1",
"source": {
"type": "git",
"url": "https://github.com/zendframework/zend-eventmanager.git",
"reference": "a5e2583a211f73604691586b8406ff7296a946dd"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/zendframework/zend-eventmanager/zipball/a5e2583a211f73604691586b8406ff7296a946dd",
"reference": "a5e2583a211f73604691586b8406ff7296a946dd",
"shasum": ""
},
"require": {
"php": "^5.6 || ^7.0"
},
"require-dev": {
"athletic/athletic": "^0.1",
"container-interop/container-interop": "^1.1.0",
"phpunit/phpunit": "^5.7.27 || ^6.5.8 || ^7.1.2",
"zendframework/zend-coding-standard": "~1.0.0",
"zendframework/zend-stdlib": "^2.7.3 || ^3.0"
},
"suggest": {
"container-interop/container-interop": "^1.1.0, to use the lazy listeners feature",
"zendframework/zend-stdlib": "^2.7.3 || ^3.0, to use the FilterChain feature"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "3.2-dev",
"dev-develop": "3.3-dev"
}
},
"autoload": {
"psr-4": {
"Zend\\EventManager\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause"
],
"description": "Trigger and listen to events within a PHP application",
"homepage": "https://github.com/zendframework/zend-eventmanager",
"keywords": [
"event",
"eventmanager",
"events",
"zf2"
],
"abandoned": "laminas/laminas-eventmanager",
"time": "2018-04-25T15:33:34+00:00"
}
],
"packages-dev": [
{
"name": "composer/ca-bundle",
"version": "1.2.4",
"source": {
"type": "git",
"url": "https://github.com/composer/ca-bundle.git",
"reference": "10bb96592168a0f8e8f6dcde3532d9fa50b0b527"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/composer/ca-bundle/zipball/10bb96592168a0f8e8f6dcde3532d9fa50b0b527",
"reference": "10bb96592168a0f8e8f6dcde3532d9fa50b0b527",
"shasum": ""
},
"require": {
"ext-openssl": "*",
"ext-pcre": "*",
"php": "^5.3.2 || ^7.0 || ^8.0"
},
"require-dev": {
"phpunit/phpunit": "^4.8.35 || ^5.7 || 6.5 - 8",
"psr/log": "^1.0",
"symfony/process": "^2.5 || ^3.0 || ^4.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.x-dev"
}
},
"autoload": {
"psr-4": {
"Composer\\CaBundle\\": "src"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Jordi Boggiano",
"email": "j.boggiano@seld.be",
"homepage": "http://seld.be"
}
],
"description": "Lets you find a path to the system CA bundle, and includes a fallback to the Mozilla CA bundle.",
"keywords": [
"cabundle",
"cacert",
"certificate",
"ssl",
"tls"
],
"time": "2019-08-30T08:44:50+00:00"
},
{
"name": "composer/composer",
"version": "1.9.1",
"source": {
"type": "git",
"url": "https://github.com/composer/composer.git",
"reference": "bb01f2180df87ce7992b8331a68904f80439dd2f"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/composer/composer/zipball/bb01f2180df87ce7992b8331a68904f80439dd2f",
"reference": "bb01f2180df87ce7992b8331a68904f80439dd2f",
"shasum": ""
},
"require": {
"composer/ca-bundle": "^1.0",
"composer/semver": "^1.0",
"composer/spdx-licenses": "^1.2",
"composer/xdebug-handler": "^1.1",
"justinrainbow/json-schema": "^3.0 || ^4.0 || ^5.0",
"php": "^5.3.2 || ^7.0",
"psr/log": "^1.0",
"seld/jsonlint": "^1.4",
"seld/phar-utils": "^1.0",
"symfony/console": "^2.7 || ^3.0 || ^4.0",
"symfony/filesystem": "^2.7 || ^3.0 || ^4.0",
"symfony/finder": "^2.7 || ^3.0 || ^4.0",
"symfony/process": "^2.7 || ^3.0 || ^4.0"
},
"conflict": {
"symfony/console": "2.8.38"
},
"require-dev": {
"phpunit/phpunit": "^4.8.35 || ^5.7",
"phpunit/phpunit-mock-objects": "^2.3 || ^3.0"
},
"suggest": {
"ext-openssl": "Enabling the openssl extension allows you to access https URLs for repositories and packages",
"ext-zip": "Enabling the zip extension allows you to unzip archives",
"ext-zlib": "Allow gzip compression of HTTP requests"
},
"bin": [
"bin/composer"
],
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.9-dev"
}
},
"autoload": {
"psr-4": {
"Composer\\": "src/Composer"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nils Adermann",
"email": "naderman@naderman.de",
"homepage": "http://www.naderman.de"
},
{
"name": "Jordi Boggiano",
"email": "j.boggiano@seld.be",
"homepage": "http://seld.be"
}
],
"description": "Composer helps you declare, manage and install dependencies of PHP projects. It ensures you have the right stack everywhere.",
"homepage": "https://getcomposer.org/",
"keywords": [
"autoload",
"dependency",
"package"
],
"time": "2019-11-01T16:20:17+00:00"
},
{
"name": "composer/semver",
"version": "1.5.0",
"source": {
"type": "git",
"url": "https://github.com/composer/semver.git",
"reference": "46d9139568ccb8d9e7cdd4539cab7347568a5e2e"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/composer/semver/zipball/46d9139568ccb8d9e7cdd4539cab7347568a5e2e",
"reference": "46d9139568ccb8d9e7cdd4539cab7347568a5e2e",
"shasum": ""
},
"require": {
"php": "^5.3.2 || ^7.0"
},
"require-dev": {
"phpunit/phpunit": "^4.5 || ^5.0.5",
"phpunit/phpunit-mock-objects": "2.3.0 || ^3.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.x-dev"
}
},
"autoload": {
"psr-4": {
"Composer\\Semver\\": "src"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nils Adermann",
"email": "naderman@naderman.de",
"homepage": "http://www.naderman.de"
},
{
"name": "Jordi Boggiano",
"email": "j.boggiano@seld.be",
"homepage": "http://seld.be"
},
{
"name": "Rob Bast",
"email": "rob.bast@gmail.com",
"homepage": "http://robbast.nl"
}
],
"description": "Semver library that offers utilities, version constraint parsing and validation.",
"keywords": [
"semantic",
"semver",
"validation",
"versioning"
],
"time": "2019-03-19T17:25:45+00:00"
},
{
"name": "composer/spdx-licenses",
"version": "1.5.2",
"source": {
"type": "git",
"url": "https://github.com/composer/spdx-licenses.git",
"reference": "7ac1e6aec371357df067f8a688c3d6974df68fa5"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/composer/spdx-licenses/zipball/7ac1e6aec371357df067f8a688c3d6974df68fa5",
"reference": "7ac1e6aec371357df067f8a688c3d6974df68fa5",
"shasum": ""
},
"require": {
"php": "^5.3.2 || ^7.0 || ^8.0"
},
"require-dev": {
"phpunit/phpunit": "^4.8.35 || ^5.7 || 6.5 - 7"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.x-dev"
}
},
"autoload": {
"psr-4": {
"Composer\\Spdx\\": "src"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nils Adermann",
"email": "naderman@naderman.de",
"homepage": "http://www.naderman.de"
},
{
"name": "Jordi Boggiano",
"email": "j.boggiano@seld.be",
"homepage": "http://seld.be"
},
{
"name": "Rob Bast",
"email": "rob.bast@gmail.com",
"homepage": "http://robbast.nl"
}
],
"description": "SPDX licenses list and validation library.",
"keywords": [
"license",
"spdx",
"validator"
],
"time": "2019-07-29T10:31:59+00:00"
},
{
"name": "composer/xdebug-handler",
"version": "1.4.0",
"source": {
"type": "git",
"url": "https://github.com/composer/xdebug-handler.git",
"reference": "cbe23383749496fe0f373345208b79568e4bc248"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/composer/xdebug-handler/zipball/cbe23383749496fe0f373345208b79568e4bc248",
"reference": "cbe23383749496fe0f373345208b79568e4bc248",
"shasum": ""
},
"require": {
"php": "^5.3.2 || ^7.0 || ^8.0",
"psr/log": "^1.0"
},
"require-dev": {
"phpunit/phpunit": "^4.8.35 || ^5.7 || 6.5 - 8"
},
"type": "library",
"autoload": {
"psr-4": {
"Composer\\XdebugHandler\\": "src"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "John Stevenson",
"email": "john-stevenson@blueyonder.co.uk"
}
],
"description": "Restarts a process without Xdebug.",
"keywords": [
"Xdebug",
"performance"
],
"time": "2019-11-06T16:40:04+00:00"
},
{
"name": "doctrine/data-fixtures",
"version": "1.4.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/data-fixtures.git",
"reference": "608a35a3b5bcc4214d116603095f8b0c51091592"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/data-fixtures/zipball/608a35a3b5bcc4214d116603095f8b0c51091592",
"reference": "608a35a3b5bcc4214d116603095f8b0c51091592",
"shasum": ""
},
"require": {
"doctrine/common": "^2.11",
"php": "^7.2"
},
"conflict": {
"doctrine/phpcr-odm": "<1.3.0"
},
"require-dev": {
"alcaeus/mongo-php-adapter": "^1.1",
"doctrine/coding-standard": "^6.0",
"doctrine/dbal": "^2.5.4",
"doctrine/mongodb-odm": "^1.3.0",
"doctrine/orm": "^2.5.4",
"phpunit/phpunit": "^7.0"
},
"suggest": {
"alcaeus/mongo-php-adapter": "For using MongoDB ODM with PHP 7",
"doctrine/mongodb-odm": "For loading MongoDB ODM fixtures",
"doctrine/orm": "For loading ORM fixtures",
"doctrine/phpcr-odm": "For loading PHPCR ODM fixtures"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.4.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Common\\DataFixtures\\": "lib/Doctrine/Common/DataFixtures"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Jonathan Wage",
"email": "jonwage@gmail.com"
}
],
"description": "Data Fixtures for all Doctrine Object Managers",
"homepage": "http://www.doctrine-project.org",
"keywords": [
"database"
],
"time": "2019-10-30T20:03:18+00:00"
},
{
"name": "doctrine/doctrine-fixtures-bundle",
"version": "3.3.0",
"source": {
"type": "git",
"url": "https://github.com/doctrine/DoctrineFixturesBundle.git",
"reference": "8f07fcfdac7f3591f3c4bf13a50cbae05f65ed70"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/doctrine/DoctrineFixturesBundle/zipball/8f07fcfdac7f3591f3c4bf13a50cbae05f65ed70",
"reference": "8f07fcfdac7f3591f3c4bf13a50cbae05f65ed70",
"shasum": ""
},
"require": {
"doctrine/data-fixtures": "^1.3",
"doctrine/doctrine-bundle": "^1.11|^2.0",
"doctrine/orm": "^2.6.0",
"php": "^7.1",
"symfony/config": "^3.4|^4.3|^5.0",
"symfony/console": "^3.4|^4.3|^5.0",
"symfony/dependency-injection": "^3.4|^4.3|^5.0",
"symfony/doctrine-bridge": "^3.4|^4.1|^5.0",
"symfony/http-kernel": "^3.4|^4.3|^5.0"
},
"require-dev": {
"doctrine/coding-standard": "^6.0",
"phpunit/phpunit": "^7.4",
"symfony/phpunit-bridge": "^4.1|^5.0"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "3.3.x-dev"
}
},
"autoload": {
"psr-4": {
"Doctrine\\Bundle\\FixturesBundle\\": ""
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Doctrine Project",
"homepage": "http://www.doctrine-project.org"
},
{
"name": "Symfony Community",
"homepage": "http://symfony.com/contributors"
}
],
"description": "Symfony DoctrineFixturesBundle",
"homepage": "http://www.doctrine-project.org",
"keywords": [
"Fixture",
"persistence"
],
"time": "2019-11-13T15:46:58+00:00"
},
{
"name": "easycorp/easy-log-handler",
"version": "v1.0.9",
"source": {
"type": "git",
"url": "https://github.com/EasyCorp/easy-log-handler.git",
"reference": "224e1dfcf9455aceee89cd0af306ac097167fac1"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/EasyCorp/easy-log-handler/zipball/224e1dfcf9455aceee89cd0af306ac097167fac1",
"reference": "224e1dfcf9455aceee89cd0af306ac097167fac1",
"shasum": ""
},
"require": {
"monolog/monolog": "~1.6|~2.0",
"php": ">=7.1",
"symfony/yaml": "^3.4|^4.0|^5.0"
},
"type": "library",
"autoload": {
"psr-4": {
"EasyCorp\\EasyLog\\": "src"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Javier Eguiluz",
"email": "javiereguiluz@gmail.com"
},
{
"name": "Project Contributors",
"homepage": "https://github.com/EasyCorp/easy-log-handler"
}
],
"description": "A handler for Monolog that optimizes log messages to be processed by humans instead of software. Improve your productivity with logs that are easy to understand.",
"homepage": "https://github.com/EasyCorp/easy-log-handler",
"keywords": [
"easy",
"log",
"logging",
"monolog",
"productivity"
],
"time": "2019-10-24T07:13:31+00:00"
},
{
"name": "fzaninotto/faker",
"version": "v1.9.1",
"source": {
"type": "git",
"url": "https://github.com/fzaninotto/Faker.git",
"reference": "fc10d778e4b84d5bd315dad194661e091d307c6f"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/fzaninotto/Faker/zipball/fc10d778e4b84d5bd315dad194661e091d307c6f",
"reference": "fc10d778e4b84d5bd315dad194661e091d307c6f",
"shasum": ""
},
"require": {
"php": "^5.3.3 || ^7.0"
},
"require-dev": {
"ext-intl": "*",
"phpunit/phpunit": "^4.8.35 || ^5.7",
"squizlabs/php_codesniffer": "^2.9.2"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.9-dev"
}
},
"autoload": {
"psr-4": {
"Faker\\": "src/Faker/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "François Zaninotto"
}
],
"description": "Faker is a PHP library that generates fake data for you.",
"keywords": [
"data",
"faker",
"fixtures"
],
"time": "2019-12-12T13:22:17+00:00"
},
{
"name": "gitonomy/gitlib",
"version": "v1.1.0",
"source": {
"type": "git",
"url": "https://github.com/gitonomy/gitlib.git",
"reference": "49e599915eae04b734f31e6e88f773d32d921e2e"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/gitonomy/gitlib/zipball/49e599915eae04b734f31e6e88f773d32d921e2e",
"reference": "49e599915eae04b734f31e6e88f773d32d921e2e",
"shasum": ""
},
"require": {
"php": "^5.6 || ^7.0",
"symfony/process": "^3.4|^4.0"
},
"require-dev": {
"phpunit/phpunit": "^5.7|^6.5",
"psr/log": "^1.0"
},
"suggest": {
"psr/log": "Required to use loggers for reporting of execution"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.1-dev"
}
},
"autoload": {
"psr-4": {
"Gitonomy\\Git\\": "src/Gitonomy/Git/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Alexandre Salomé",
"email": "alexandre.salome@gmail.com",
"homepage": "http://alexandre-salome.fr"
},
{
"name": "Julien DIDIER",
"email": "genzo.wm@gmail.com",
"homepage": "http://www.jdidier.net"
}
],
"description": "Library for accessing git",
"homepage": "http://gitonomy.com",
"time": "2019-06-23T09:49:01+00:00"
},
{
"name": "jean85/pretty-package-versions",
"version": "1.2",
"source": {
"type": "git",
"url": "https://github.com/Jean85/pretty-package-versions.git",
"reference": "75c7effcf3f77501d0e0caa75111aff4daa0dd48"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/Jean85/pretty-package-versions/zipball/75c7effcf3f77501d0e0caa75111aff4daa0dd48",
"reference": "75c7effcf3f77501d0e0caa75111aff4daa0dd48",
"shasum": ""
},
"require": {
"ocramius/package-versions": "^1.2.0",
"php": "^7.0"
},
"require-dev": {
"phpunit/phpunit": "^6.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.x-dev"
}
},
"autoload": {
"psr-4": {
"Jean85\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Alessandro Lai",
"email": "alessandro.lai85@gmail.com"
}
],
"description": "A wrapper for ocramius/package-versions to get pretty versions strings",
"keywords": [
"composer",
"package",
"release",
"versions"
],
"time": "2018-06-13T13:22:40+00:00"
},
{
"name": "justinrainbow/json-schema",
"version": "5.2.9",
"source": {
"type": "git",
"url": "https://github.com/justinrainbow/json-schema.git",
"reference": "44c6787311242a979fa15c704327c20e7221a0e4"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/justinrainbow/json-schema/zipball/44c6787311242a979fa15c704327c20e7221a0e4",
"reference": "44c6787311242a979fa15c704327c20e7221a0e4",
"shasum": ""
},
"require": {
"php": ">=5.3.3"
},
"require-dev": {
"friendsofphp/php-cs-fixer": "~2.2.20||~2.15.1",
"json-schema/json-schema-test-suite": "1.2.0",
"phpunit/phpunit": "^4.8.35"
},
"bin": [
"bin/validate-json"
],
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "5.0.x-dev"
}
},
"autoload": {
"psr-4": {
"JsonSchema\\": "src/JsonSchema/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Bruno Prieto Reis",
"email": "bruno.p.reis@gmail.com"
},
{
"name": "Justin Rainbow",
"email": "justin.rainbow@gmail.com"
},
{
"name": "Igor Wiedler",
"email": "igor@wiedler.ch"
},
{
"name": "Robert Schönthal",
"email": "seroscho@googlemail.com"
}
],
"description": "A library to validate a json schema.",
"homepage": "https://github.com/justinrainbow/json-schema",
"keywords": [
"json",
"schema"
],
"time": "2019-09-25T14:49:45+00:00"
},
{
"name": "nette/bootstrap",
"version": "v3.0.1",
"source": {
"type": "git",
"url": "https://github.com/nette/bootstrap.git",
"reference": "b45a1e33b6a44beb307756522396551e5a9ff249"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/nette/bootstrap/zipball/b45a1e33b6a44beb307756522396551e5a9ff249",
"reference": "b45a1e33b6a44beb307756522396551e5a9ff249",
"shasum": ""
},
"require": {
"nette/di": "^3.0",
"nette/utils": "^3.0",
"php": ">=7.1"
},
"conflict": {
"tracy/tracy": "<2.6"
},
"require-dev": {
"latte/latte": "^2.2",
"nette/application": "^3.0",
"nette/caching": "^3.0",
"nette/database": "^3.0",
"nette/forms": "^3.0",
"nette/http": "^3.0",
"nette/mail": "^3.0",
"nette/robot-loader": "^3.0",
"nette/safe-stream": "^2.2",
"nette/security": "^3.0",
"nette/tester": "^2.0",
"tracy/tracy": "^2.6"
},
"suggest": {
"nette/robot-loader": "to use Configurator::createRobotLoader()",
"tracy/tracy": "to use Configurator::enableTracy()"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "3.0-dev"
}
},
"autoload": {
"classmap": [
"src/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause",
"GPL-2.0",
"GPL-3.0"
],
"authors": [
{
"name": "David Grudl",
"homepage": "https://davidgrudl.com"
},
{
"name": "Nette Community",
"homepage": "https://nette.org/contributors"
}
],
"description": "🅱 Nette Bootstrap: the simple way to configure and bootstrap your Nette application.",
"homepage": "https://nette.org",
"keywords": [
"bootstrapping",
"configurator",
"nette"
],
"time": "2019-09-30T08:19:38+00:00"
},
{
"name": "nette/di",
"version": "v3.0.1",
"source": {
"type": "git",
"url": "https://github.com/nette/di.git",
"reference": "4aff517a1c6bb5c36fa09733d4cea089f529de6d"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/nette/di/zipball/4aff517a1c6bb5c36fa09733d4cea089f529de6d",
"reference": "4aff517a1c6bb5c36fa09733d4cea089f529de6d",
"shasum": ""
},
"require": {
"ext-tokenizer": "*",
"nette/neon": "^3.0",
"nette/php-generator": "^3.2.2",
"nette/robot-loader": "^3.2",
"nette/schema": "^1.0",
"nette/utils": "^3.0",
"php": ">=7.1"
},
"conflict": {
"nette/bootstrap": "<3.0"
},
"require-dev": {
"nette/tester": "^2.2",
"tracy/tracy": "^2.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "3.0-dev"
}
},
"autoload": {
"classmap": [
"src/"
],
"files": [
"src/compatibility.php"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause",
"GPL-2.0",
"GPL-3.0"
],
"authors": [
{
"name": "David Grudl",
"homepage": "https://davidgrudl.com"
},
{
"name": "Nette Community",
"homepage": "https://nette.org/contributors"
}
],
"description": "💎 Nette Dependency Injection Container: Flexible, compiled and full-featured DIC with perfectly usable autowiring and support for all new PHP 7.1 features.",
"homepage": "https://nette.org",
"keywords": [
"compiled",
"di",
"dic",
"factory",
"ioc",
"nette",
"static"
],
"time": "2019-08-07T12:11:33+00:00"
},
{
"name": "nette/finder",
"version": "v2.5.1",
"source": {
"type": "git",
"url": "https://github.com/nette/finder.git",
"reference": "14164e1ddd69e9c5f627ff82a10874b3f5bba5fe"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/nette/finder/zipball/14164e1ddd69e9c5f627ff82a10874b3f5bba5fe",
"reference": "14164e1ddd69e9c5f627ff82a10874b3f5bba5fe",
"shasum": ""
},
"require": {
"nette/utils": "^2.4 || ~3.0.0",
"php": ">=7.1"
},
"conflict": {
"nette/nette": "<2.2"
},
"require-dev": {
"nette/tester": "^2.0",
"tracy/tracy": "^2.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "2.5-dev"
}
},
"autoload": {
"classmap": [
"src/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause",
"GPL-2.0",
"GPL-3.0"
],
"authors": [
{
"name": "David Grudl",
"homepage": "https://davidgrudl.com"
},
{
"name": "Nette Community",
"homepage": "https://nette.org/contributors"
}
],
"description": "🔍 Nette Finder: find files and directories with an intuitive API.",
"homepage": "https://nette.org",
"keywords": [
"filesystem",
"glob",
"iterator",
"nette"
],
"time": "2019-07-11T18:02:17+00:00"
},
{
"name": "nette/neon",
"version": "v3.0.0",
"source": {
"type": "git",
"url": "https://github.com/nette/neon.git",
"reference": "cbff32059cbdd8720deccf9e9eace6ee516f02eb"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/nette/neon/zipball/cbff32059cbdd8720deccf9e9eace6ee516f02eb",
"reference": "cbff32059cbdd8720deccf9e9eace6ee516f02eb",
"shasum": ""
},
"require": {
"ext-iconv": "*",
"ext-json": "*",
"php": ">=7.0"
},
"require-dev": {
"nette/tester": "^2.0",
"tracy/tracy": "^2.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "3.0-dev"
}
},
"autoload": {
"classmap": [
"src/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause",
"GPL-2.0",
"GPL-3.0"
],
"authors": [
{
"name": "David Grudl",
"homepage": "https://davidgrudl.com"
},
{
"name": "Nette Community",
"homepage": "https://nette.org/contributors"
}
],
"description": "? Nette NEON: encodes and decodes NEON file format.",
"homepage": "http://ne-on.org",
"keywords": [
"export",
"import",
"neon",
"nette",
"yaml"
],
"time": "2019-02-05T21:30:40+00:00"
},
{
"name": "nette/php-generator",
"version": "v3.3.1",
"source": {
"type": "git",
"url": "https://github.com/nette/php-generator.git",
"reference": "4240fd7adf499138c07b814ef9b9a6df9f6d7187"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/nette/php-generator/zipball/4240fd7adf499138c07b814ef9b9a6df9f6d7187",
"reference": "4240fd7adf499138c07b814ef9b9a6df9f6d7187",
"shasum": ""
},
"require": {
"nette/utils": "^2.4.2 || ~3.0.0",
"php": ">=7.1"
},
"require-dev": {
"nette/tester": "^2.0",
"tracy/tracy": "^2.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "3.3-dev"
}
},
"autoload": {
"classmap": [
"src/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause",
"GPL-2.0",
"GPL-3.0"
],
"authors": [
{
"name": "David Grudl",
"homepage": "https://davidgrudl.com"
},
{
"name": "Nette Community",
"homepage": "https://nette.org/contributors"
}
],
"description": "🐘 Nette PHP Generator: generates neat PHP code for you. Supports new PHP 7.3 features.",
"homepage": "https://nette.org",
"keywords": [
"code",
"nette",
"php",
"scaffolding"
],
"time": "2019-11-22T11:12:11+00:00"
},
{
"name": "nette/robot-loader",
"version": "v3.2.0",
"source": {
"type": "git",
"url": "https://github.com/nette/robot-loader.git",
"reference": "0712a0e39ae7956d6a94c0ab6ad41aa842544b5c"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/nette/robot-loader/zipball/0712a0e39ae7956d6a94c0ab6ad41aa842544b5c",
"reference": "0712a0e39ae7956d6a94c0ab6ad41aa842544b5c",
"shasum": ""
},
"require": {
"ext-tokenizer": "*",
"nette/finder": "^2.5",
"nette/utils": "^3.0",
"php": ">=7.1"
},
"require-dev": {
"nette/tester": "^2.0",
"tracy/tracy": "^2.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "3.2-dev"
}
},
"autoload": {
"classmap": [
"src/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause",
"GPL-2.0",
"GPL-3.0"
],
"authors": [
{
"name": "David Grudl",
"homepage": "https://davidgrudl.com"
},
{
"name": "Nette Community",
"homepage": "https://nette.org/contributors"
}
],
"description": "? Nette RobotLoader: high performance and comfortable autoloader that will search and autoload classes within your application.",
"homepage": "https://nette.org",
"keywords": [
"autoload",
"class",
"interface",
"nette",
"trait"
],
"time": "2019-03-08T21:57:24+00:00"
},
{
"name": "nette/schema",
"version": "v1.0.1",
"source": {
"type": "git",
"url": "https://github.com/nette/schema.git",
"reference": "337117df1dade22e2ba1fdc4a4b832c1e9b06b76"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/nette/schema/zipball/337117df1dade22e2ba1fdc4a4b832c1e9b06b76",
"reference": "337117df1dade22e2ba1fdc4a4b832c1e9b06b76",
"shasum": ""
},
"require": {
"nette/utils": "^3.0.1",
"php": ">=7.1"
},
"require-dev": {
"nette/tester": "^2.2",
"tracy/tracy": "^2.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.0-dev"
}
},
"autoload": {
"classmap": [
"src/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause",
"GPL-2.0",
"GPL-3.0"
],
"authors": [
{
"name": "David Grudl",
"homepage": "https://davidgrudl.com"
},
{
"name": "Nette Community",
"homepage": "https://nette.org/contributors"
}
],
"description": "📐 Nette Schema: validating data structures against a given Schema.",
"homepage": "https://nette.org",
"keywords": [
"config",
"nette"
],
"time": "2019-10-31T20:52:19+00:00"
},
{
"name": "nette/utils",
"version": "v3.0.2",
"source": {
"type": "git",
"url": "https://github.com/nette/utils.git",
"reference": "c133e18c922dcf3ad07673077d92d92cef25a148"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/nette/utils/zipball/c133e18c922dcf3ad07673077d92d92cef25a148",
"reference": "c133e18c922dcf3ad07673077d92d92cef25a148",
"shasum": ""
},
"require": {
"php": ">=7.1"
},
"require-dev": {
"nette/tester": "~2.0",
"tracy/tracy": "^2.3"
},
"suggest": {
"ext-gd": "to use Image",
"ext-iconv": "to use Strings::webalize() and toAscii()",
"ext-intl": "to use Strings::webalize(), toAscii(), normalize() and compare()",
"ext-json": "to use Nette\\Utils\\Json",
"ext-mbstring": "to use Strings::lower() etc...",
"ext-tokenizer": "to use Nette\\Utils\\Reflection::getUseStatements()",
"ext-xml": "to use Strings::length() etc. when mbstring is not available"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "3.0-dev"
}
},
"autoload": {
"classmap": [
"src/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause",
"GPL-2.0",
"GPL-3.0"
],
"authors": [
{
"name": "David Grudl",
"homepage": "https://davidgrudl.com"
},
{
"name": "Nette Community",
"homepage": "https://nette.org/contributors"
}
],
"description": "🛠 Nette Utils: lightweight utilities for string & array manipulation, image handling, safe JSON encoding/decoding, validation, slug or strong password generating etc.",
"homepage": "https://nette.org",
"keywords": [
"array",
"core",
"datetime",
"images",
"json",
"nette",
"paginator",
"password",
"slugify",
"string",
"unicode",
"utf-8",
"utility",
"validation"
],
"time": "2019-10-21T20:40:16+00:00"
},
{
"name": "nikic/php-parser",
"version": "v4.3.0",
"source": {
"type": "git",
"url": "https://github.com/nikic/PHP-Parser.git",
"reference": "9a9981c347c5c49d6dfe5cf826bb882b824080dc"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/nikic/PHP-Parser/zipball/9a9981c347c5c49d6dfe5cf826bb882b824080dc",
"reference": "9a9981c347c5c49d6dfe5cf826bb882b824080dc",
"shasum": ""
},
"require": {
"ext-tokenizer": "*",
"php": ">=7.0"
},
"require-dev": {
"ircmaxell/php-yacc": "0.0.5",
"phpunit/phpunit": "^6.5 || ^7.0 || ^8.0"
},
"bin": [
"bin/php-parse"
],
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"PhpParser\\": "lib/PhpParser"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause"
],
"authors": [
{
"name": "Nikita Popov"
}
],
"description": "A PHP parser written in PHP",
"keywords": [
"parser",
"php"
],
"time": "2019-11-08T13:50:10+00:00"
},
{
"name": "phpro/grumphp",
"version": "v0.15.2",
"source": {
"type": "git",
"url": "https://github.com/phpro/grumphp.git",
"reference": "c153840bead6fbed370d35cc84c63dca33de0ca4"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/phpro/grumphp/zipball/c153840bead6fbed370d35cc84c63dca33de0ca4",
"reference": "c153840bead6fbed370d35cc84c63dca33de0ca4",
"shasum": ""
},
"require": {
"composer-plugin-api": "~1.0",
"composer/composer": "^1.0",
"doctrine/collections": "~1.2",
"gitonomy/gitlib": "^1.0.3",
"monolog/monolog": "~1.16",
"php": ">=7.0",
"seld/jsonlint": "~1.1",
"symfony/config": "~3.4|~4.0",
"symfony/console": "~3.4|~4.0",
"symfony/dependency-injection": "~3.4|~4.0",
"symfony/event-dispatcher": "~3.4|~4.0",
"symfony/filesystem": "~3.4|~4.0",
"symfony/finder": "~3.4|~4.0",
"symfony/options-resolver": "~3.4|~4.0",
"symfony/process": "~3.4|~4.0",
"symfony/yaml": "~3.4|~4.0"
},
"require-dev": {
"friendsofphp/php-cs-fixer": "~2",
"jakub-onderka/php-parallel-lint": "^0.9.2",
"nikic/php-parser": "~2.1",
"phpspec/phpspec": "^3.2.2",
"phpspec/prophecy": "^1.6.2",
"phpunit/phpunit": "^6.5|^7.0",
"sebastian/comparator": "^2.1",
"sebastian/diff": "^2.0",
"sebastian/exporter": "^3.1",
"sensiolabs/security-checker": "^5.0",
"squizlabs/php_codesniffer": "~2.9"
},
"suggest": {
"allocine/twigcs": "Lets GrumPHP check Twig coding standard.",
"atoum/atoum": "Lets GrumPHP run your unit tests.",
"behat/behat": "Lets GrumPHP validate your project features.",
"brianium/paratest": "Lets GrumPHP run PHPUnit in parallel.",
"codeception/codeception": "Lets GrumPHP run your project's full stack tests",
"codegyre/robo": "Lets GrumPHP run your automated PHP tasks.",
"designsecurity/progpilot": "Lets GrumPHP be sure that there are no vulnerabilities in your code.",
"doctrine/orm": "Lets GrumPHP validate your Doctrine mapping files.",
"friendsofphp/php-cs-fixer": "Lets GrumPHP automatically fix your codestyle.",
"infection/infection": "Lets GrumPHP evaluate the quality your unit tests",
"jakub-onderka/php-parallel-lint": "Lets GrumPHP quickly lint your entire code base.",
"localheinz/composer-normalize": "Lets GrumPHP tidy and normalize your composer.json file.",
"maglnet/composer-require-checker": "Lets GrumPHP analyze composer dependencies.",
"malukenho/kawaii-gherkin": "Lets GrumPHP lint your Gherkin files.",
"nikic/php-parser": "Lets GrumPHP run static analyses through your PHP files.",
"phan/phan": "Lets GrumPHP unleash a static analyzer on your code",
"phing/phing": "Lets GrumPHP run your automated PHP tasks.",
"phpmd/phpmd": "Lets GrumPHP sort out the mess in your code",
"phpspec/phpspec": "Lets GrumPHP spec your code.",
"phpstan/phpstan": "Lets GrumPHP discover bugs in your code without running it.",
"phpunit/phpunit": "Lets GrumPHP run your unit tests.",
"povils/phpmnd": "Lets GrumPHP help you detect magic numbers in PHP code.",
"roave/security-advisories": "Lets GrumPHP be sure that there are no known security issues.",
"sebastian/phpcpd": "Lets GrumPHP find duplicated code.",
"sensiolabs/security-checker": "Lets GrumPHP be sure that there are no known security issues.",
"squizlabs/php_codesniffer": "Lets GrumPHP sniff on your code.",
"sstalle/php7cc": "Lets GrumPHP check PHP 5.3 - 5.6 code compatibility with PHP 7.",
"symfony/phpunit-bridge": "Lets GrumPHP run your unit tests with the phpunit-bridge of Symfony.",
"symplify/easycodingstandard": "Lets GrumPHP check coding standard.",
"vimeo/psalm": "Lets GrumPHP discover errors in your code without running it."
},
"bin": [
"bin/grumphp"
],
"type": "composer-plugin",
"extra": {
"class": "GrumPHP\\Composer\\GrumPHPPlugin"
},
"autoload": {
"psr-4": {
"GrumPHP\\": "src"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Toon Verwerft",
"email": "toon.verwerft@phpro.be"
},
{
"name": "Community",
"homepage": "https://github.com/phpro/grumphp/graphs/contributors"
}
],
"description": "A composer plugin that enables source code quality checks.",
"time": "2019-05-17T11:56:59+00:00"
},
{
"name": "phpstan/phpdoc-parser",
"version": "0.3.5",
"source": {
"type": "git",
"url": "https://github.com/phpstan/phpdoc-parser.git",
"reference": "8c4ef2aefd9788238897b678a985e1d5c8df6db4"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/phpstan/phpdoc-parser/zipball/8c4ef2aefd9788238897b678a985e1d5c8df6db4",
"reference": "8c4ef2aefd9788238897b678a985e1d5c8df6db4",
"shasum": ""
},
"require": {
"php": "~7.1"
},
"require-dev": {
"consistence/coding-standard": "^3.5",
"jakub-onderka/php-parallel-lint": "^0.9.2",
"phing/phing": "^2.16.0",
"phpstan/phpstan": "^0.10",
"phpunit/phpunit": "^6.3",
"slevomat/coding-standard": "^4.7.2",
"squizlabs/php_codesniffer": "^3.3.2",
"symfony/process": "^3.4 || ^4.0"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "0.3-dev"
}
},
"autoload": {
"psr-4": {
"PHPStan\\PhpDocParser\\": [
"src/"
]
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"description": "PHPDoc parser with support for nullable, intersection and generic types",
"time": "2019-06-07T19:13:52+00:00"
},
{
"name": "phpstan/phpstan",
"version": "0.11.19",
"source": {
"type": "git",
"url": "https://github.com/phpstan/phpstan.git",
"reference": "63cc502f6957b7f74efbac444b4cf219dcadffd7"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/phpstan/phpstan/zipball/63cc502f6957b7f74efbac444b4cf219dcadffd7",
"reference": "63cc502f6957b7f74efbac444b4cf219dcadffd7",
"shasum": ""
},
"require": {
"composer/xdebug-handler": "^1.3.0",
"jean85/pretty-package-versions": "^1.0.3",
"nette/bootstrap": "^2.4 || ^3.0",
"nette/di": "^2.4.7 || ^3.0",
"nette/neon": "^2.4.3 || ^3.0",
"nette/robot-loader": "^3.0.1",
"nette/schema": "^1.0",
"nette/utils": "^2.4.5 || ^3.0",
"nikic/php-parser": "^4.2.3",
"php": "~7.1",
"phpstan/phpdoc-parser": "^0.3.5",
"symfony/console": "~3.2 || ~4.0",
"symfony/finder": "~3.2 || ~4.0"
},
"conflict": {
"symfony/console": "3.4.16 || 4.1.5"
},
"require-dev": {
"brianium/paratest": "^2.0 || ^3.0",
"consistence/coding-standard": "^3.5",
"dealerdirect/phpcodesniffer-composer-installer": "^0.4.4",
"ext-intl": "*",
"ext-mysqli": "*",
"ext-simplexml": "*",
"ext-soap": "*",
"ext-zip": "*",
"jakub-onderka/php-parallel-lint": "^1.0",
"localheinz/composer-normalize": "^1.1.0",
"phing/phing": "^2.16.0",
"phpstan/phpstan-deprecation-rules": "^0.11",
"phpstan/phpstan-php-parser": "^0.11",
"phpstan/phpstan-phpunit": "^0.11",
"phpstan/phpstan-strict-rules": "^0.11",
"phpunit/phpunit": "^7.5.14 || ^8.0",
"slevomat/coding-standard": "^4.7.2",
"squizlabs/php_codesniffer": "^3.3.2"
},
"bin": [
"bin/phpstan"
],
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "0.11-dev"
}
},
"autoload": {
"psr-4": {
"PHPStan\\": [
"src/"
]
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"description": "PHPStan - PHP Static Analysis Tool",
"time": "2019-10-22T20:20:22+00:00"
},
{
"name": "phpstan/phpstan-doctrine",
"version": "0.11.6",
"source": {
"type": "git",
"url": "https://github.com/phpstan/phpstan-doctrine.git",
"reference": "77592865e167b32c7dcb4f39a35210e909a8854c"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/phpstan/phpstan-doctrine/zipball/77592865e167b32c7dcb4f39a35210e909a8854c",
"reference": "77592865e167b32c7dcb4f39a35210e909a8854c",
"shasum": ""
},
"require": {
"nikic/php-parser": "^4.0",
"php": "~7.1",
"phpstan/phpdoc-parser": "^0.3",
"phpstan/phpstan": "^0.11.7"
},
"conflict": {
"doctrine/collections": "<1.0",
"doctrine/common": "<2.7",
"doctrine/mongodb-odm": "<1.2",
"doctrine/orm": "<2.5"
},
"require-dev": {
"consistence/coding-standard": "^3.8",
"dealerdirect/phpcodesniffer-composer-installer": "^0.4.4",
"doctrine/collections": "^1.0",
"doctrine/common": "^2.7",
"doctrine/mongodb-odm": "^1.2",
"doctrine/orm": "^2.5",
"jakub-onderka/php-parallel-lint": "^1.0",
"phing/phing": "^2.16.0",
"phpstan/phpstan-phpunit": "^0.11",
"phpstan/phpstan-strict-rules": "^0.11",
"phpunit/phpunit": "^7.0",
"slevomat/coding-standard": "^5.0.4"
},
"type": "phpstan-extension",
"extra": {
"branch-alias": {
"dev-master": "0.11-dev"
},
"phpstan": {
"includes": [
"extension.neon",
"rules.neon"
]
}
},
"autoload": {
"psr-4": {
"PHPStan\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"description": "Doctrine extensions for PHPStan",
"time": "2019-09-13T08:40:06+00:00"
},
{
"name": "phpstan/phpstan-symfony",
"version": "0.11.6",
"source": {
"type": "git",
"url": "https://github.com/phpstan/phpstan-symfony.git",
"reference": "c7be3054c21fd472a52b1c38eb129c3f93776084"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/phpstan/phpstan-symfony/zipball/c7be3054c21fd472a52b1c38eb129c3f93776084",
"reference": "c7be3054c21fd472a52b1c38eb129c3f93776084",
"shasum": ""
},
"require": {
"ext-simplexml": "*",
"nikic/php-parser": "^4.0",
"php": "^7.1",
"phpstan/phpstan": "^0.11.7"
},
"conflict": {
"symfony/framework-bundle": "<3.0"
},
"require-dev": {
"consistence/coding-standard": "^3.0.1",
"dealerdirect/phpcodesniffer-composer-installer": "^0.4.4",
"jakub-onderka/php-parallel-lint": "^1.0",
"nette/di": "^3.0-stable",
"phing/phing": "^2.16.0",
"phpstan/phpstan-phpunit": "^0.11",
"phpstan/phpstan-strict-rules": "^0.11",
"phpunit/phpunit": "^7.0",
"slevomat/coding-standard": "^4.5.2",
"squizlabs/php_codesniffer": "^3.3.2",
"symfony/console": "^3.0 || ^4.0",
"symfony/framework-bundle": "^3.0 || ^4.0",
"symfony/messenger": "^4.2",
"symfony/serializer": "^3.0 || ^4.0"
},
"type": "phpstan-extension",
"extra": {
"branch-alias": {
"dev-master": "0.11-dev"
},
"phpstan": {
"includes": [
"extension.neon"
]
}
},
"autoload": {
"psr-4": {
"PHPStan\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Lukáš Unger",
"email": "looky.msc@gmail.com",
"homepage": "https://lookyman.net"
}
],
"description": "Symfony Framework extensions and rules for PHPStan",
"time": "2019-05-19T17:40:25+00:00"
},
{
"name": "seld/jsonlint",
"version": "1.7.2",
"source": {
"type": "git",
"url": "https://github.com/Seldaek/jsonlint.git",
"reference": "e2e5d290e4d2a4f0eb449f510071392e00e10d19"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/Seldaek/jsonlint/zipball/e2e5d290e4d2a4f0eb449f510071392e00e10d19",
"reference": "e2e5d290e4d2a4f0eb449f510071392e00e10d19",
"shasum": ""
},
"require": {
"php": "^5.3 || ^7.0"
},
"require-dev": {
"phpunit/phpunit": "^4.8.35 || ^5.7 || ^6.0"
},
"bin": [
"bin/jsonlint"
],
"type": "library",
"autoload": {
"psr-4": {
"Seld\\JsonLint\\": "src/Seld/JsonLint/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Jordi Boggiano",
"email": "j.boggiano@seld.be",
"homepage": "http://seld.be"
}
],
"description": "JSON Linter",
"keywords": [
"json",
"linter",
"parser",
"validator"
],
"time": "2019-10-24T14:27:39+00:00"
},
{
"name": "seld/phar-utils",
"version": "1.0.1",
"source": {
"type": "git",
"url": "https://github.com/Seldaek/phar-utils.git",
"reference": "7009b5139491975ef6486545a39f3e6dad5ac30a"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/Seldaek/phar-utils/zipball/7009b5139491975ef6486545a39f3e6dad5ac30a",
"reference": "7009b5139491975ef6486545a39f3e6dad5ac30a",
"shasum": ""
},
"require": {
"php": ">=5.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "1.x-dev"
}
},
"autoload": {
"psr-4": {
"Seld\\PharUtils\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Jordi Boggiano",
"email": "j.boggiano@seld.be"
}
],
"description": "PHAR file format utilities, for when PHP phars you up",
"keywords": [
"phra"
],
"time": "2015-10-13T18:44:15+00:00"
},
{
"name": "squizlabs/php_codesniffer",
"version": "3.5.2",
"source": {
"type": "git",
"url": "https://github.com/squizlabs/PHP_CodeSniffer.git",
"reference": "65b12cdeaaa6cd276d4c3033a95b9b88b12701e7"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/65b12cdeaaa6cd276d4c3033a95b9b88b12701e7",
"reference": "65b12cdeaaa6cd276d4c3033a95b9b88b12701e7",
"shasum": ""
},
"require": {
"ext-simplexml": "*",
"ext-tokenizer": "*",
"ext-xmlwriter": "*",
"php": ">=5.4.0"
},
"require-dev": {
"phpunit/phpunit": "^4.0 || ^5.0 || ^6.0 || ^7.0"
},
"bin": [
"bin/phpcs",
"bin/phpcbf"
],
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "3.x-dev"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"BSD-3-Clause"
],
"authors": [
{
"name": "Greg Sherwood",
"role": "lead"
}
],
"description": "PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.",
"homepage": "https://github.com/squizlabs/PHP_CodeSniffer",
"keywords": [
"phpcs",
"standards"
],
"time": "2019-10-28T04:36:32+00:00"
},
{
"name": "symfony/browser-kit",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/browser-kit.git",
"reference": "e19e465c055137938afd40cfddd687e7511bbbf0"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/browser-kit/zipball/e19e465c055137938afd40cfddd687e7511bbbf0",
"reference": "e19e465c055137938afd40cfddd687e7511bbbf0",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/dom-crawler": "^3.4|^4.0|^5.0"
},
"require-dev": {
"symfony/css-selector": "^3.4|^4.0|^5.0",
"symfony/http-client": "^4.3|^5.0",
"symfony/mime": "^4.3|^5.0",
"symfony/process": "^3.4|^4.0|^5.0"
},
"suggest": {
"symfony/process": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\BrowserKit\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony BrowserKit Component",
"homepage": "https://symfony.com",
"time": "2019-10-28T20:30:34+00:00"
},
{
"name": "symfony/css-selector",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/css-selector.git",
"reference": "64acec7e0d67125e9f4656c68d4a38a42ab5a0b7"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/css-selector/zipball/64acec7e0d67125e9f4656c68d4a38a42ab5a0b7",
"reference": "64acec7e0d67125e9f4656c68d4a38a42ab5a0b7",
"shasum": ""
},
"require": {
"php": "^7.1.3"
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\CssSelector\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Jean-François Simon",
"email": "jeanfrancois.simon@sensiolabs.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony CssSelector Component",
"homepage": "https://symfony.com",
"time": "2019-10-12T00:35:04+00:00"
},
{
"name": "symfony/debug-bundle",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/debug-bundle.git",
"reference": "2255db767f7f5bf6740e9f3b4f92199f6890ca2e"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/debug-bundle/zipball/2255db767f7f5bf6740e9f3b4f92199f6890ca2e",
"reference": "2255db767f7f5bf6740e9f3b4f92199f6890ca2e",
"shasum": ""
},
"require": {
"ext-xml": "*",
"php": "^7.1.3",
"symfony/http-kernel": "^3.4|^4.0|^5.0",
"symfony/twig-bridge": "^3.4|^4.0|^5.0",
"symfony/var-dumper": "^4.1.1|^5.0"
},
"conflict": {
"symfony/config": "<4.2",
"symfony/dependency-injection": "<3.4"
},
"require-dev": {
"symfony/config": "^4.2|^5.0",
"symfony/dependency-injection": "^3.4|^4.0|^5.0",
"symfony/web-profiler-bundle": "^3.4|^4.0|^5.0"
},
"suggest": {
"symfony/config": "For service container configuration",
"symfony/dependency-injection": "For using as a service from the container"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Bundle\\DebugBundle\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony DebugBundle",
"homepage": "https://symfony.com",
"time": "2019-10-12T00:35:04+00:00"
},
{
"name": "symfony/debug-pack",
"version": "v1.0.7",
"source": {
"type": "git",
"url": "https://github.com/symfony/debug-pack.git",
"reference": "09a4a1e9bf2465987d4f79db0ad6c11cc632bc79"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/debug-pack/zipball/09a4a1e9bf2465987d4f79db0ad6c11cc632bc79",
"reference": "09a4a1e9bf2465987d4f79db0ad6c11cc632bc79",
"shasum": ""
},
"require": {
"easycorp/easy-log-handler": "^1.0.7",
"php": "^7.0",
"symfony/debug-bundle": "*",
"symfony/monolog-bundle": "^3.0",
"symfony/profiler-pack": "*",
"symfony/var-dumper": "*"
},
"type": "symfony-pack",
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"description": "A debug pack for Symfony projects",
"time": "2018-12-10T12:11:11+00:00"
},
{
"name": "symfony/dom-crawler",
"version": "v4.4.0",
"source": {
"type": "git",
"url": "https://github.com/symfony/dom-crawler.git",
"reference": "36bbcab9369fc2f583220890efd43bf262d563fd"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/dom-crawler/zipball/36bbcab9369fc2f583220890efd43bf262d563fd",
"reference": "36bbcab9369fc2f583220890efd43bf262d563fd",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/polyfill-ctype": "~1.8",
"symfony/polyfill-mbstring": "~1.0"
},
"conflict": {
"masterminds/html5": "<2.6"
},
"require-dev": {
"masterminds/html5": "^2.6",
"symfony/css-selector": "^3.4|^4.0|^5.0"
},
"suggest": {
"symfony/css-selector": ""
},
"type": "library",
"extra": {
"branch-alias": {
"dev-master": "4.4-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Component\\DomCrawler\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony DomCrawler Component",
"homepage": "https://symfony.com",
"time": "2019-10-29T11:38:30+00:00"
},
{
"name": "symfony/maker-bundle",
"version": "v1.14.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/maker-bundle.git",
"reference": "c864e7f9b8d1e1f5f60acc3beda11299f637aded"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/maker-bundle/zipball/c864e7f9b8d1e1f5f60acc3beda11299f637aded",
"reference": "c864e7f9b8d1e1f5f60acc3beda11299f637aded",
"shasum": ""
},
"require": {
"doctrine/inflector": "^1.2",
"nikic/php-parser": "^4.0",
"php": "^7.0.8",
"symfony/config": "^3.4|^4.0|^5.0",
"symfony/console": "^3.4|^4.0|^5.0",
"symfony/dependency-injection": "^3.4|^4.0|^5.0",
"symfony/filesystem": "^3.4|^4.0|^5.0",
"symfony/finder": "^3.4|^4.0|^5.0",
"symfony/framework-bundle": "^3.4|^4.0|^5.0",
"symfony/http-kernel": "^3.4|^4.0|^5.0"
},
"require-dev": {
"doctrine/doctrine-bundle": "^1.8|^2.0",
"doctrine/orm": "^2.3",
"friendsofphp/php-cs-fixer": "^2.8",
"friendsoftwig/twigcs": "^3.1.2",
"symfony/http-client": "^4.3|^5.0",
"symfony/phpunit-bridge": "^4.3|^5.0",
"symfony/process": "^3.4|^4.0|^5.0",
"symfony/security-core": "^3.4|^4.0|^5.0",
"symfony/yaml": "^3.4|^4.0|^5.0"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "1.0-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Bundle\\MakerBundle\\": "src/"
}
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony Maker helps you create empty commands, controllers, form classes, tests and more so you can forget about writing boilerplate code.",
"homepage": "https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html",
"keywords": [
"code generator",
"generator",
"scaffold",
"scaffolding"
],
"time": "2019-11-07T00:56:03+00:00"
},
{
"name": "symfony/phpunit-bridge",
"version": "v4.3.8",
"source": {
"type": "git",
"url": "https://github.com/symfony/phpunit-bridge.git",
"reference": "c216b32261358a820bb4217eb3a20e3f437a484e"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/phpunit-bridge/zipball/c216b32261358a820bb4217eb3a20e3f437a484e",
"reference": "c216b32261358a820bb4217eb3a20e3f437a484e",
"shasum": ""
},
"require": {
"php": ">=5.5.9"
},
"conflict": {
"phpunit/phpunit": "<4.8.35|<5.4.3,>=5.0"
},
"suggest": {
"symfony/debug": "For tracking deprecated interfaces usages at runtime with DebugClassLoader"
},
"bin": [
"bin/simple-phpunit"
],
"type": "symfony-bridge",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
},
"thanks": {
"name": "phpunit/phpunit",
"url": "https://github.com/sebastianbergmann/phpunit"
}
},
"autoload": {
"files": [
"bootstrap.php"
],
"psr-4": {
"Symfony\\Bridge\\PhpUnit\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Nicolas Grekas",
"email": "p@tchwork.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony PHPUnit Bridge",
"homepage": "https://symfony.com",
"time": "2019-10-30T12:58:49+00:00"
},
{
"name": "symfony/profiler-pack",
"version": "v1.0.4",
"source": {
"type": "git",
"url": "https://github.com/symfony/profiler-pack.git",
"reference": "99c4370632c2a59bb0444852f92140074ef02209"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/profiler-pack/zipball/99c4370632c2a59bb0444852f92140074ef02209",
"reference": "99c4370632c2a59bb0444852f92140074ef02209",
"shasum": ""
},
"require": {
"php": "^7.0",
"symfony/stopwatch": "*",
"symfony/twig-bundle": "*",
"symfony/web-profiler-bundle": "*"
},
"type": "symfony-pack",
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"description": "A pack for the Symfony web profiler",
"time": "2018-12-10T12:11:44+00:00"
},
{
"name": "symfony/test-pack",
"version": "v1.0.6",
"source": {
"type": "git",
"url": "https://github.com/symfony/test-pack.git",
"reference": "ff87e800a67d06c423389f77b8209bc9dc469def"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/test-pack/zipball/ff87e800a67d06c423389f77b8209bc9dc469def",
"reference": "ff87e800a67d06c423389f77b8209bc9dc469def",
"shasum": ""
},
"require": {
"php": "^7.0",
"symfony/browser-kit": "*",
"symfony/css-selector": "*",
"symfony/phpunit-bridge": "*"
},
"type": "symfony-pack",
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"description": "A pack for functional and end-to-end testing within a Symfony app",
"time": "2019-06-21T06:27:32+00:00"
},
{
"name": "symfony/web-profiler-bundle",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/web-profiler-bundle.git",
"reference": "a7886865c523a7751ee39480a25b663b82d00846"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/web-profiler-bundle/zipball/a7886865c523a7751ee39480a25b663b82d00846",
"reference": "a7886865c523a7751ee39480a25b663b82d00846",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/config": "^4.2",
"symfony/http-kernel": "^4.3",
"symfony/routing": "~3.4|~4.0",
"symfony/twig-bundle": "~4.2",
"symfony/var-dumper": "~3.4|~4.0",
"twig/twig": "^1.41|^2.10"
},
"conflict": {
"symfony/dependency-injection": "<3.4",
"symfony/form": "<4.3",
"symfony/messenger": "<4.2",
"symfony/var-dumper": "<3.4"
},
"require-dev": {
"symfony/console": "~3.4|~4.0",
"symfony/dependency-injection": "~3.4|~4.0",
"symfony/stopwatch": "~3.4|~4.0"
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Bundle\\WebProfilerBundle\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony WebProfilerBundle",
"homepage": "https://symfony.com",
"time": "2019-07-24T14:47:54+00:00"
},
{
"name": "symfony/web-server-bundle",
"version": "v4.3.3",
"source": {
"type": "git",
"url": "https://github.com/symfony/web-server-bundle.git",
"reference": "a5391b6a4ac78d518dd3f0ee5f40bcc9a7ee6fe7"
},
"dist": {
"type": "zip",
"url": "https://api.github.com/repos/symfony/web-server-bundle/zipball/a5391b6a4ac78d518dd3f0ee5f40bcc9a7ee6fe7",
"reference": "a5391b6a4ac78d518dd3f0ee5f40bcc9a7ee6fe7",
"shasum": ""
},
"require": {
"php": "^7.1.3",
"symfony/config": "~3.4|~4.0",
"symfony/console": "~3.4|~4.0",
"symfony/dependency-injection": "~3.4|~4.0",
"symfony/http-kernel": "~3.4|~4.0",
"symfony/polyfill-ctype": "~1.8",
"symfony/process": "^3.4.2|^4.0.2"
},
"suggest": {
"symfony/expression-language": "For using the filter option of the log server.",
"symfony/monolog-bridge": "For using the log server."
},
"type": "symfony-bundle",
"extra": {
"branch-alias": {
"dev-master": "4.3-dev"
}
},
"autoload": {
"psr-4": {
"Symfony\\Bundle\\WebServerBundle\\": ""
},
"exclude-from-classmap": [
"/Tests/"
]
},
"notification-url": "https://packagist.org/downloads/",
"license": [
"MIT"
],
"authors": [
{
"name": "Fabien Potencier",
"email": "fabien@symfony.com"
},
{
"name": "Symfony Community",
"homepage": "https://symfony.com/contributors"
}
],
"description": "Symfony WebServerBundle",
"homepage": "https://symfony.com",
"time": "2019-04-29T09:33:16+00:00"
}
],
"aliases": [],
"minimum-stability": "stable",
"stability-flags": [],
"prefer-stable": false,
"prefer-lowest": false,
"platform": {
"php": "^7.2",
"ext-ctype": "*",
"ext-iconv": "*"
},
"platform-dev": []
}
