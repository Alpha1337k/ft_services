FROM	alpine:3.12

RUN		apk update && apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session
RUN		apk add telegraf --repository http://nl.alpinelinux.org/alpine/v3.13/community/
RUN		apk add nginx

RUN		adduser -D -g 'www' www

RUN		mkdir /www
RUN		chown -R www:www /var/lib/nginx
RUN		chown -R www:www /www
RUN		mkdir -p /run/nginx

RUN		wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz \
			&& tar -xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz \
			&& mv phpMyAdmin-4.9.0.1-all-languages /www/phpmyadmin \
			&& rm -rf /var/cache/apk/*

COPY	nginx.conf /etc/nginx/nginx.conf
COPY	telegraf.conf /etc/telegraf.conf
COPY	config.inc.php /www/phpmyadmin/config.inc.php

COPY	run.sh ./run.sh
RUN		chmod +x ./run.sh
CMD		sh ./run.sh
EXPOSE	5000
