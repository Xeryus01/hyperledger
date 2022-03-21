peer lifecycle chaincode commit -o orderer.example.com:7050  \
    -ordererTLSHostnameOverride orderer.example.com --tls true --cafile ${ORDERER_CA}  \
    --channelID ${CHANNEL_NAME} --name ${CC_NAME}  \
    --signature-policy "OutOf(2, 'Org1MSP.peer', 'Org2MSP.peer', 'Org3MSP.peer')" \
    --peerAddresses peer0.org1.example.com:7051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG1} \
    --peerAddresses peer0.org2.example.com:9051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG2} \
    --peerAddresses peer0.org3.example.com:11051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG3} \
    --version ${VERSION} --sequence ${VERSION} --init-required

peer lifecycle chaincode querycommitted --channelID $CHANNEL_NAME --name ${CC_NAME}

peer chaincode invoke -o orderer.example.com:7050 \
    --ordererTLSHostnameOverride orderer.example.com \
    --tls true --cafile ${ORDERER_CA} \
    -C ${CHANNEL_NAME} -n ${CC_NAME} \
    --peerAddresses peer0.org1.example.com:7051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG1} \
    --peerAddresses peer0.org2.example.com:9051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG2} \
    --peerAddresses peer0.org3.example.com:11051 --tlsRootCertFiles ${CORE_PEER_TLS_ROOTCERT_FILE_ORG3} \
    --isInit -c '{"Args":[]}'
