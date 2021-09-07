minikube delete
minikube start --vm-driver=virtualbox --extra-config=apiserver.service-node-port-range=1-35000 \
	--addons metallb --addons dashboard \
	--addons storage-provisioner \
	--addons default-storageclass \
	--disk-size 10GB \
	--dns-proxy=false \
	--host-dns-resolver=true

minikube kubectl -- apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.5/manifests/namespace.yaml
minikube kubectl -- apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.5/manifests/metallb.yaml

export M_IP=$(minikube ip)

echo "minikube ip:" $M_IP
sed -i '' -e '$ d' ./src/metallb.yaml
echo "      - $M_IP-$M_IP" >> ./src/metallb.yaml
sed -i '' "31s/.*/            return 307 http:\/\/$M_IP:5050;/" src/nginx/nginx.conf
sed -i '' "37s/.*/            proxy_pass http:\/\/$M_IP:5000\/;/" src/nginx/nginx.conf
sed -i '' "1s/.*/pasv_address=$M_IP/" src/ftps/vsftpd.conf

eval $(minikube docker-env)

kubectl apply -f "./src/metallb.yaml"

docker build -t service_influxdb ./src/influxdb
kubectl apply -f "./src/influxdb.yaml"
docker build -t service_mysql ./src/mysql
kubectl apply -f "./src/mysql.yaml"
docker build -t service_nginx ./src/nginx
kubectl apply -f "./src/nginx.yaml"
docker build -t service_wordpress ./src/wordpress
kubectl apply -f "./src/wordpress.yaml"
docker build -t service_phpadmin ./src/phpadmin
kubectl apply -f "./src/phpmyadmin.yaml"
docker build -t service_ftps ./src/ftps
kubectl apply -f "./src/ftps.yaml"
docker build -t service_grafana ./src/graffie
kubectl apply -f "./src/grafana.yaml"

minikube dashboard
