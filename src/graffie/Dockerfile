FROM	alpine:3.12

RUN		apk update
RUN		apk add grafana --repository http://nl.alpinelinux.org/alpine/v3.13/community/
RUN		apk add telegraf --repository http://nl.alpinelinux.org/alpine/v3.13/community/

COPY	telegraf.conf /etc/telegraf.conf
COPY	default.yaml /usr/share/grafana/conf/provisioning/datasources/
COPY	dashboard.json /usr/share/grafana/conf/provisioning/dashboards/mine/
COPY	local.yaml /usr/share/grafana/conf/provisioning/dashboards/

COPY	run.sh ./run.sh
RUN		chmod +x ./run.sh
CMD		./run.sh
EXPOSE	3000