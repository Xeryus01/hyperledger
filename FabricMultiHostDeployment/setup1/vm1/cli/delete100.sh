peer chaincode invoke -o orderer.example.com:7050 \
    --ordererTLSHostnameOverride orderer.example.com \
    --tls $CORE_PEER_TLS_ENABLED \
    --cafile $ORDERER_CA \
    -C $CHANNEL_NAME -n ${CC_NAME} \
    --peerAddresses peer0.org1.example.com:7051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG1} \
    --peerAddresses peer0.org2.example.com:9051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG2} \
    --peerAddresses peer0.org3.example.com:11051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG3} \
    -c '{"function": "deletePegawaiByRange","Args":["400000", "400100"]}'
