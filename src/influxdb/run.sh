influxd run -config /etc/influxdb.conf &

# echo "create database influxd-t" | influx
# echo "create database influx" | influx
# echo "create database ftps" | influx
# echo "create database mysql" | influx
# echo "create database nginx" | influx
# echo "create database wordpress" | influx
# echo "create database phpmyadmin" | influx
# echo "create database grafana" | influx
# echo "create user oscar with password 'codam'" | influx

telegraf -config /etc/telegraf.conf