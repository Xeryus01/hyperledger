for i in {1..5}
do
    echo "~~~~~~~~~~~INSERT"
    time ./insert5000.sh
    sleep 5

    echo "~~~~~~~~~~~DELETE"
    time ./delete5000.sh
    sleep 10
done