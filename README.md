# Build

First, download and install composer and install phpunit:

```
wget https://getcomposer.org/installer
mv installer composer-setup.php
php composer-setup.php --install-dir=bin --filename=composer
php bin/composer require --dev phpunit/phpunit ^9
```

# Run tests

After phpunit has been installed, run this command to execute all tests:

```
vendor/bin/phpunit --bootstrap src/autoload.php --colors=never --log-junit phpunit-report.xml tests
```