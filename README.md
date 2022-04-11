# SQLi Exercise

Built on top of this [repo](https://github.com/thomaslaurenson/startrek_payroll)

# startrek_payroll

A simple SQL injection vulnerable web application powered by Docker

## Project Summary

This is a simple web application that is vulnerable to SQL injection attacks. The web application is based on the `payroll_app` from the [Metasploitable3 project](https://github.com/rapid7/metasploitable3), and the PHP code is taken (almost) directly from that project. The primary contribution of this project is a Docker environment using docker-compose and consiting of Nginx, PHP and MySQL containers to run the web application easily.

## Project Instructions

Install the project requirements on your choice of operating system, including:

- Docker
- Docker Compose

Run using either of the following:

- `docker-compose up --build`
- `./run.sh` (only on Bash)

Clean the Docker environment (after making changes):

- `./clean.sh` (only on Bash)

Open web browser and visit:

- `localhost:8080`
