telegraf -config /etc/telegraf.conf &
grafana-server	--homepath=/usr/share/grafana \
				--config=/usr/share/grafana/conf/defaults.ini \
				--packaging=docker