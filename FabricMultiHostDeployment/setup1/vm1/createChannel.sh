export CORE_PEER_TLS_ENABLED=true
export ORDERER_CA=${PWD}/../../artifacts/channel/crypto-config/ordererOrganizations/example.com/orderers/orderer.example.com/msp/tlscacerts/tlsca.example.com-cert.pem
export PEER0_ORG1_CA=${PWD}/../../artifacts/channel/crypto-config/peerOrganizations/org1.example.com/peers/peer0.org1.example.com/tls/ca.crt
export FABRIC_CFG_PATH=${PWD}/../../artifacts/channel/config/

export CHANNEL_NAME=mychannel

# ganti ORD_IP (IP Orderer) sesuai dengan IP pada VM orderer yang digunakan
export ORD_IP=34.101.154.102
export ORD_PORT=7050

# Fungsi untuk export variable sesuai dengan Peer0Org1
setGlobalsForPeer0Org1(){
    export CORE_PEER_LOCALMSPID="Org1MSP"
    export CORE_PEER_TLS_ROOTCERT_FILE=$PEER0_ORG1_CA
    export CORE_PEER_MSPCONFIGPATH=${PWD}/../../artifacts/channel/crypto-config/peerOrganizations/org1.example.com/users/Admin@org1.example.com/msp
    export CORE_PEER_ADDRESS=localhost:7051
}

# Fungsi untuk membuat channel
createChannel(){
    # Menghapus semua channel artifacts yang masih tersisa sebelumnya
    rm -rf ./channel-artifacts/*
    setGlobalsForPeer0Org1
    
    # command untuk membuat channel "peer channel create ..."
    # channel cukup dibuat pada satu VM (pada kasus ini, channel dibuat pada VM1)
    peer channel create -o ${ORD_IP}:${ORD_PORT} -c $CHANNEL_NAME \
    --ordererTLSHostnameOverride orderer.example.com \
    -f ./../../artifacts/channel/${CHANNEL_NAME}.tx --outputBlock ./channel-artifacts/${CHANNEL_NAME}.block \
    --tls $CORE_PEER_TLS_ENABLED --cafile $ORDERER_CA
}

# Fungsi untuk bergabung dengan channel
joinChannel(){
    setGlobalsForPeer0Org1

    peer channel join -b ./channel-artifacts/$CHANNEL_NAME.block
    
}

# Fungsi untuk update channel setelah bergabung dengan channel
updateAnchorPeers(){
    setGlobalsForPeer0Org1

    # command untuk update channel setelah bergabung dengan channel "peer channel update ..."
    peer channel update -o ${ORD_IP}:${ORD_PORT} --ordererTLSHostnameOverride orderer.example.com -c $CHANNEL_NAME -f ./../../artifacts/channel/${CORE_PEER_LOCALMSPID}anchors.tx --tls $CORE_PEER_TLS_ENABLED --cafile $ORDERER_CA
    
}

# Eksekusi semua fungsi di atas
createChannel
joinChannel
updateAnchorPeers