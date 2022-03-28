export CORE_PEER_TLS_ENABLED=true
export ORDERER_CA=${PWD}/../../artifacts/channel/crypto-config/ordererOrganizations/example.com/orderers/orderer.example.com/msp/tlscacerts/tlsca.example.com-cert.pem
export PEER0_ORG1_CA=${PWD}/../../artifacts/channel/crypto-config/peerOrganizations/org1.example.com/peers/peer0.org1.example.com/tls/ca.crt
export PEER0_ORG2_CA=${PWD}/../../artifacts/channel/crypto-config/peerOrganizations/org2.example.com/peers/peer0.org2.example.com/tls/ca.crt
export PEER0_ORG3_CA=${PWD}/../../artifacts/channel/crypto-config/peerOrganizations/org3.example.com/peers/peer0.org3.example.com/tls/ca.crt
export FABRIC_CFG_PATH=${PWD}/../../artifacts/channel/config/

export CHANNEL_NAME=mychannel

# ganti ORD_IP (IP Orderer) sesuai dengan IP pada VM orderer yang digunakan
export ORD_IP=34.101.154.102
export ORD_PORT=7050

# Fungsi untuk export variable sesuai dengan Peer0Org1
setGlobalsForPeer0Org1() {
    export CORE_PEER_LOCALMSPID="Org1MSP"
    export CORE_PEER_TLS_ROOTCERT_FILE=$PEER0_ORG1_CA
    export CORE_PEER_MSPCONFIGPATH=${PWD}/../../artifacts/channel/crypto-config/peerOrganizations/org1.example.com/users/Admin@org1.example.com/msp
    export CORE_PEER_ADDRESS=localhost:7051
}

CHANNEL_NAME="mychannel"

# CC_RUNTIME_LANGUAGE diset sebagai node karena peneliti memakai nodejs sebagai bahasa pemrogramannya
CC_RUNTIME_LANGUAGE=node
VERSION="1"
CC_SRC_PATH="./../../artifacts/src/pegawai/"
CC_NAME="pegawai"

chaincodeInvoke() {
    setGlobalsForPeer0Org1

    peer chaincode invoke -o ${ORD_IP}:${ORD_PORT} \
        --ordererTLSHostnameOverride orderer.example.com \
        --tls $CORE_PEER_TLS_ENABLED \
        --cafile $ORDERER_CA \
        -C $CHANNEL_NAME -n ${CC_NAME} \
        --peerAddresses localhost:9051 --tlsRootCertFiles $PEER0_ORG2_CA \
        --peerAddresses localhost:11051 --tlsRootCertFiles $PEER0_ORG3_CA \
        -c '{"function": "Init","Args":["5000"]}'

#     for i in {400000..400010}
#     do
#     peer chaincode invoke -o ${ORD_IP}:${ORD_PORT} \
#         --ordererTLSHostnameOverride orderer.example.com \
#         --tls $CORE_PEER_TLS_ENABLED \
#         --cafile $ORDERER_CA \
#         -C $CHANNEL_NAME -n ${CC_NAME} \
#         --peerAddresses localhost:9051 --tlsRootCertFiles $PEER0_ORG2_CA \
#         --peerAddresses localhost:11051 --tlsRootCertFiles $PEER0_ORG3_CA \
#         -c '{"function": "createPegawai","Args":[
# "xxx'$i'", "nip orang ke-'$i'", "nama dummy ke-'$i'", "LK", "Kota Dummy ke-'$i'", "tanggal '$i'", "081'$i'", "082'$i'", "email dummy-'$i'@gmail.com", "alamat dummy ke-'$i'", "tahun'$i'", "jabatan '$i'", "status '$i'", "golongan '$i'", "instansi '$i'", "alamat_instansi '$i'", "08-'$i'", "kawin", "islam", "[{\"nama_instansi_pendidikan\":\"SD Setia\",\"nama_prodi_jurusan\":\"SD\",\"tahun_lulus\":\"1999\"},{\"nama_instansi_pendidikan\":\"\",\"nama_prodi_jurusan\":\"SMP\",\"tahun_lulus\":\"2002\"},{\"nama_instansi_pendidikan\":\"SMA 1 Manado\",\"nama_prodi_jurusan\":\"SMA\",\"tahun_lulus\":\"2005\"},{\"nama_instansi_pendidikan\":\"Universitas Padjadjaran\",\"nama_prodi_jurusan\":\"Ilmu Ekonomi\",\"tahun_lulus\":\"2009\"}]"]}'
#     done
}

chaincodeQuery() {
    setGlobalsForPeer0Org1

    # peer chaincode query -C $CHANNEL_NAME -n ${CC_NAME} -c '{"Args":["QueryAssets", "{\"selector\":{\"status_perkawinan\":\"Kawin\"}, \"use_index\":[\"_design/tes\", \"tes\"]}"]}'
    # peer chaincode query -C $CHANNEL_NAME -n ${CC_NAME} -c '{"Args":["GetQueryResultForQueryString", "{\"selector\":{\"Agama\":\"Islam\"}, \"use_index\":[\"_design/tes\", \"tes\"]}"]}'

    # Query All Pegawai
    peer chaincode query -C $CHANNEL_NAME -n ${CC_NAME} -c '{"Args":["queryAllPegawai"]}'
    # peer chaincode query -C $CHANNEL_NAME -n ${CC_NAME} -c '{"Args":["queryPegawai", "xxx400010"]}'
    # peer chaincode query -C $CHANNEL_NAME -n ${CC_NAME} -c '{"Args":["queryPegawaiByRange", "xxx400000", "xxx400009"]}'
    # peer chaincode query -C $CHANNEL_NAME -n ${CC_NAME} -c '{"Args":["QueryByAgama", "Islam"]}'
 
}

# Eksekusi semua fungsi di atas
# commitChaincodeDefinition
# queryCommitted
# chaincodeInvokeInit
# sleep 5
# chaincodeInvoke
# sleep 5
chaincodeQuery
