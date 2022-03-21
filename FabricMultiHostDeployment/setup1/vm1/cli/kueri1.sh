peer chaincode query \
    -C mychannel \
    -n pegawai \
    -c '{"Args":["QueryAssets","{\"selector\":{},\"fields\":[\"nip_bps\",\"nip\",\"nama\",\"jenis_kelamin\",\"tempat_lahir\",\"tanggal_lahir\",\"no_telepon\",\"no_handphone\",\"email\",\"alamat\",\"perkiraan_pensiun\",\"jabatan_terakhir\"]}"]}'
