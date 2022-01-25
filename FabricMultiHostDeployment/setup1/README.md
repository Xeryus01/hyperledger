# Topologi jaringan network Hyperledger Fabric ini

Pada network Hyperledger Fabric ini, digunakan 5 virtual machine yang terdiri dari 3 peer organisasi dan 2 orderer. Tiap virtual machine melakukan satu layanan. 3 peer organisasi disediakan agar menyediakan ketersediaan (availibility) penyimpanan data yang tinggi sehingga apabila salah satu layanan peer mengalami crash, maka masih terdapat peer lain yang akan berjalan, sedangkan 2 orderer disediakan agar menyediakan ketersediaan layanan ordering yang tinggi sehingga apabila salah satu orderer server crash, maka orderer server lain akan menjadi leader agar tetap bisa melakukan layanan ordering

# Langkah menjalankan network Hyperledger Fabric

- execute bash script pada tiap virtual machine dengan urutan
  1. run start-vm script (vm1, vm2, vm3, vm4, vm5)
  2. run deployChaincode.sh (vm1)
  3. run installAndApproveChaincode.sh (vm2 dan vm3)
