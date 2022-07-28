SHELL := /bin/sh
.DEFAULT_GOAL := test

install:
	@composer update -o

test:
	@php index.php

clean:
	@rm -rf composer.lock vendor

all: install test clean