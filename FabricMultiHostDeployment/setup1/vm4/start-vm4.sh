docker rm -f $(docker ps -aq)

docker-compose -f ./docker-compose.yaml up -d
