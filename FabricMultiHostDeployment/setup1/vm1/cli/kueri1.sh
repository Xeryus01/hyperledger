peer chaincode query \
    -C mychannel \
    -n pegawai \
    -c '{"Args":["QueryAssets","{\"selector\":{},\"fields\":[\"nip_bps\",\"nip\",\"nama\",\"jenis_kelamin\",\"tempat_lahir\",\"tanggal_lahir\",\"alamat\",\"agama\",\"status_perkawinan\",\"perkiraan_pensiun\",\"jabatan_terakhir\",\"status_pegawai\",\"golongan\"]}"]}'