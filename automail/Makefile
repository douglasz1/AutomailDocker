-include env_make

.PHONY: test

php ?= 7.2

## Command to send email in laravel to mailhog
send: 
	php artisan mail:send 

## Command to run laravel test to verify email in mailhog
test:
	php artisan test