This project is based on the docker4php.
Link to the original project: https://github.com/wodby/docker4php
Link to the project documentation: https://wodby.com/docs/1.0/stacks/php/local/

The system defaul port is in the file docker-compose.yml in the traefik line 242.

The command to run the program is "make run" and to stop is "make stop".
All the others commands are in the files "docker.mk" and "Makefile". Are two makefile, one to docker other in the automail folder to laravel.

This is a project make to use a mailhog application with laravel.
THe automail folder is the laravel project.

These are two websites who help me to make this project work.
- https://maruan.medium.com/how-to-install-and-set-up-laravel-8-with-docker-compose-on-ubuntu-20-04-58149fed3e2e
- https://dev.to/dendihandian/mailhog-in-laradock-1ej6