#keihard gestolen

minikube delete
kubectl delete --all ingresses
kubectl delete --all deployments
kubectl delete --all pods
kubectl delete --all services
kubectl delete --all pvc
kubectl delete -n default deployment nginx