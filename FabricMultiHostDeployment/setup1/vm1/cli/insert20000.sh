peer chaincode invoke -o orderer.example.com:7050 \
    --ordererTLSHostnameOverride orderer.example.com \
    --tls true \
    --cafile $ORDERER_CA \
    -C mychannel -n pegawai \
    --peerAddresses peer0.org1.example.com:7051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG1} \
    --peerAddresses peer0.org2.example.com:9051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG2} \
    --peerAddresses peer0.org3.example.com:11051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG3} \
    -c '{"function": "Init","Args":["0", "10000"]}'

peer chaincode invoke -o orderer2.example.com:8050 \
    --ordererTLSHostnameOverride orderer2.example.com \
    --tls true \
    --cafile $ORDERER_CA \
    -C mychannel -n pegawai \
    --peerAddresses peer0.org1.example.com:7051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG1} \
    --peerAddresses peer0.org2.example.com:9051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG2} \
    --peerAddresses peer0.org3.example.com:11051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG3} \
    -c '{"function": "Init","Args":["10000", "20000"]}'