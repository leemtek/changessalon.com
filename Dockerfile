FROM ubuntu:16.04
ENTRYPOINT service nginx restart && bash
RUN apt-get install php5-fpm php5-mysql
COPY ./assets/docker_configs/nginx.conf /etc/nginx/nginx.conf
