for i in {1..10}
do
   echo "~~~~~~~~~~KUERI 1"
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri1 %> coucdb1.txt
   
   echo "~~~~~~~~~~KUERI 2"
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri2 %> coucdb2.txt

   echo "~~~~~~~~~~KUERI 3"
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri3 %> coucdb3.txt

   echo "~~~~~~~~~~KUERI 4"
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri4 %> coucdb4.txt

   echo "~~~~~~~~~~KUERI 5"
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri5 %> coucdb5.txt

   echo "~~~~~~~~~~KUERI 6"
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri6 %> coucdb6.txt

done
