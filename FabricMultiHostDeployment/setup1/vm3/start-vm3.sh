docker rm -f $(docker ps -aq)

docker-compose -f ./docker-compose.yaml up -d

sleep 5
./joinChannel.sh