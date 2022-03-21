peer chaincode invoke -o orderer.example.com:7050 \
    --ordererTLSHostnameOverride orderer.example.com \
    --tls true \
    --cafile $ORDERER_CA \
    -C $CHANNEL_NAME -n ${CC_NAME} \
    --peerAddresses peer0.org2.example.com:9051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG2} \
    --peerAddresses peer0.org3.example.com:11051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG3} \
    -c '{"function": "Init","Args":["0", "15000"]}'
