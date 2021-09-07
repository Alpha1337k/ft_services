FROM	alpine:3.12

RUN		apk update
RUN		apk add vsftpd
RUN		apk add openssl
RUN		apk add telegraf --repository http://nl.alpinelinux.org/alpine/v3.13/community/

RUN 	openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
			-subj '/C=NL/ST=NH/L=Amsterdam/O=42/CN=okruitho' \
			-keyout ssl.key \
			-out ssl.crt

COPY	run.sh ./run.sh
RUN		adduser -D -h /var/ftp user && echo "user:pass" | chpasswd
RUN		rm /etc/vsftpd/vsftpd.conf
COPY	telegraf.conf /etc/telegraf.conf
COPY	vsftpd.conf /etc/vsftpd/vsftpd.conf

RUN		chmod +x ./run.sh
CMD		sh ./run.sh
EXPOSE 	21 20 30000