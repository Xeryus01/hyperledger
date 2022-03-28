for i in {1..6}
do
   echo "~~~~~~~~~~KUERI 1"
   time ./kueri1.sh %> log1.txt
   
   echo "~~~~~~~~~~KUERI 2"
   time ./kueri2.sh %> log2.txt

   echo "~~~~~~~~~~KUERI 3"
   time ./kueri3.sh %> log3.txt

   echo "~~~~~~~~~~KUERI 4"
   time ./kueri4.sh %> log4.txt

   echo "~~~~~~~~~~KUERI 5"
   time ./kueri5.sh %> log5.txt

   echo "~~~~~~~~~~KUERI 6"
   time ./kueri6.sh %> log6.txt

done
