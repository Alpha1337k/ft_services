telegraf -config /etc/telegraf.conf &

adduser --disabled-password user
echo "user:pass" | chpasswd
/usr/sbin/sshd
nginx -g 'daemon off;'