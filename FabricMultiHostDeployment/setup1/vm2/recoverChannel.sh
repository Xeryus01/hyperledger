export CORE_PEER_TLS_ENABLED=true
export ORDERER_CA=${PWD}/../../artifacts/channel/crypto-config/ordererOrganizations/example.com/orderers/orderer.example.com/msp/tlscacerts/tlsca.example.com-cert.pem
export PEER0_ORG1_CA=${PWD}/../../artifacts/channel/crypto-config/peerOrganizations/org1.example.com/peers/peer0.org1.example.com/tls/ca.crt
export FABRIC_CFG_PATH=${PWD}/../../artifacts/channel/config/

export CHANNEL_NAME=mychannel

# ganti ORD_IP (IP Orderer) sesuai dengan IP pada VM orderer yang digunakan
export ORD_IP=157.230.251.53
export ORD_PORT=7050

# Fungsi untuk export variable sesuai dengan Peer0Org2
setGlobalsForPeer0Org2(){
    export CORE_PEER_LOCALMSPID="Org2MSP"
    export CORE_PEER_TLS_ROOTCERT_FILE=$PEER0_ORG2_CA
    export CORE_PEER_MSPCONFIGPATH=${PWD}/../../artifacts/channel/crypto-config/peerOrganizations/org2.example.com/users/Admin@org2.example.com/msp
    export CORE_PEER_ADDRESS=localhost:9051
}

# Fungsi untuk bergabung dengan channel
joinChannel(){
    setGlobalsForPeer0Org2

    peer channel join -b ./channel-artifacts/$CHANNEL_NAME.block
    
}

# Eksekusi semua fungsi di atas
joinChannel
