peer chaincode query \
    -C mychannel \
    -n pegawai \
    -c '{"Args":["QueryAssets","{\"selector\":{},\"fields\":[\"nip_bps\",\"nama\",\"jabatan_terakhir\",\"pendidikan\"]}"]}'