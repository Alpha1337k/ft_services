FROM	alpine:3.12

RUN		apk update
RUN		apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session
RUN		apk add wget
RUN		apk add nginx
RUN		apk add telegraf --repository http://nl.alpinelinux.org/alpine/v3.13/community/

RUN		adduser -D -g 'www' www

RUN		mkdir /www
RUN		mkdir /www/wp
RUN		chown -R www:www /var/lib/nginx
RUN		chown -R www:www /www
RUN		mkdir -p /run/nginx

RUN		wget https://wordpress.org/latest.tar.gz
RUN		tar xvf latest.tar.gz 
RUN		mv wordpress/* /www

COPY	nginx.conf /etc/nginx/nginx.conf
COPY	config.php /www/wp-config.php
COPY	telegraf.conf /etc/telegraf.conf

COPY	run.sh ./run.sh
RUN		chmod +x ./run.sh
CMD		sh ./run.sh
EXPOSE 	5050