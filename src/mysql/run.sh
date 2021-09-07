mysql_install_db --user=mysql --basedir=/usr --ldata=/data
telegraf -config /etc/telegraf.conf &
mysqld_safe --user=mysql --console --init_file=/init.sql