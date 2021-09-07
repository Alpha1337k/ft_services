FROM	alpine:3.12

# RUN		apk update
RUN		apk add mysql
RUN		apk add mysql-client
RUN		apk add telegraf --repository http://nl.alpinelinux.org/alpine/v3.13/community/

# RUN		rc-service mysql start && \
# 	echo "CREATE DATABASE phpmyadmin;" | mysql -u root && \
# 	echo "CREATE USER 'oscar'@'localhost' IDENTIFIED BY 'codam';" | mysql -u root && \
# 	echo "GRANT ALL ON *.* TO 'oscar'@'localhost' IDENTIFIED BY 'codam' WITH GRANT OPTION;" | mysql -u root && \
# 	echo "FLUSH PRIVILEGES;" | mysql -u root

# SHOW VARIABLES LIKE 'skip_networking'
# SHOW GLOBAL VARIABLES like 'bind_address'

COPY	run.sh /run.sh
COPY	init.sql /init.sql
COPY	my.cnf /etc/my.cnf
RUN		chmod +x /run.sh
COPY	telegraf.conf /etc/telegraf.conf

CMD		sh /run.sh