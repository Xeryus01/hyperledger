peer chaincode query \
    -C mychannel \
    -n pegawai \
    -c '{"Args":["QueryAssets","{\"selector\": {\"tempat_lahir\": {\"$regex\": \"Jakarta\"},\"$not\": {\"agama\": \"Islam\"},\"status_pegawai\": {\"$in\": [\"CPNS\",\"PNS\"]},\"status_perkawinan\": \"Belum Kawin\"},\"fields\": [\"nip_bps\",\"nip\",\"nama\",\"jenis_kelamin\",\"agama\",\"no_telepon\",\"golongan\",\"status_pegawai\",\"status_perkawinan\",\"nama_instansi\",\"email_instansi\",\"pendidikan\"]}"]}'
