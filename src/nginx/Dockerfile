FROM	alpine:3.12

#install

RUN		apk update
RUN		apk add telegraf --repository http://nl.alpinelinux.org/alpine/v3.13/community/
RUN		apk add nginx
RUN		apk add openssh
RUN		apk add openssl

RUN		adduser -D -g 'www' www

RUN		mkdir /www
RUN		chown -R www:www /var/lib/nginx
RUN		chown -R www:www /www
RUN		mkdir -p /run/nginx

RUN 	openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
			-subj '/C=NL/ST=NH/L=Amsterdam/O=42/CN=okruitho' \
			-keyout ssl.key \
			-out ssl.crt

RUN		ssh-keygen -A

COPY	telegraf.conf /etc/telegraf.conf
COPY	nginx.conf /etc/nginx/nginx.conf
COPY	hello.html /www/index.html
COPY	run.sh ./run.sh
RUN		chmod +x ./run.sh

CMD		sh ./run.sh
EXPOSE	22 80 443