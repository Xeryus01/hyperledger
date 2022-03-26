echo "~~~~~~~~~~KUERI 1"
for i in {1..10}
do
   time ./kueri1.sh %> log1.txt
   sleep 1
done

echo "~~~~~~~~~~KUERI 2"
for i in {1..10}
do
   time ./kueri2.sh %> log2.txt
   sleep 1
done

echo "~~~~~~~~~~KUERI 3"
for i in {1..10}
do
   time ./kueri3.sh %> log3.txt
   sleep 1
done

echo "~~~~~~~~~~KUERI 4"
for i in {1..10}
do
   time ./kueri4.sh %> log4.txt
   sleep 1
done

echo "~~~~~~~~~~KUERI 5"
for i in {1..10}
do
   time ./kueri5.sh %> log5.txt
   sleep 1
done

echo "~~~~~~~~~~KUERI 6"
for i in {1..10}
do
   time ./kueri6.sh %> log6.txt
   sleep 1
done