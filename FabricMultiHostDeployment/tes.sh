echo "~~~~~KUERI 1"
for i in {1..10}
do
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri1 %> coucdb1.txt
   sleep 1
done

echo "~~~~~KUERI 2"
for i in {1..10}
do
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri2 %> coucdb2.txt
   sleep 1
done

echo "~~~~~KUERI 3"
for i in {1..10}
do
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri3 %> coucdb3.txt
   sleep 1
done

echo "~~~~~KUERI 4"
for i in {1..10}
do
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri4 %> coucdb4.txt
   sleep 1
done

echo "~~~~~KUERI 5"
for i in {1..10}
do
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri5 %> coucdb5.txt
   sleep 1
done

echo "~~~~~KUERI 6"
for i in {1..10}
do
   time curl -X GET http://34.101.233.117:5984/mychannel_pegawai/_design/tes/_view/kueri6 %> coucdb6.txt
   sleep 1
done