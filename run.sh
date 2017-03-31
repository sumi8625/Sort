#!/bin/sh

./vendor/bin/phpunit

cat ./build/coverage/testdox.txt
