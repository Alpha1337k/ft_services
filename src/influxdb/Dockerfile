FROM	alpine:3.12

# RUN		apk update
RUN		apk add influxdb
RUN		apk add telegraf --repository http://nl.alpinelinux.org/alpine/v3.13/community/

RUN		rm -f /etc/telegraf.conf
COPY	telegraf.conf /etc/telegraf.conf

EXPOSE	8086 8088
COPY	run.sh /run.sh
RUN		chmod +x /run.sh
CMD		sh /run.sh