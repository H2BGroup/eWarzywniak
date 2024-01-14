COMPOSE_URL="https://raw.githubusercontent.com/JJayJohnny/eWarzywniak/main/docker-compose.yaml"
INIT_URL="https://raw.githubusercontent.com/JJayJohnny/eWarzywniak/main/initDB.sh"
STACK_NAME="BE_188679"

echo "Downloading docker-compose.yml..."
wget $COMPOSE_URL -O docker-compose.yaml

echo "Downloading init_script.sh..."
wget $INIT_URL

echo "Deploying the app..."
docker stack deploy -c docker-compose.yaml $STACK_NAME --with-registry-auth