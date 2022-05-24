/*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/

'use strict';

module.exports.info = 'Creating cars.';

let txIndex = -1;
let colors = ['blue', 'red', 'green', 'yellow', 'black', 'purple', 'white', 'violet', 'indigo', 'brown'];
let makes = ['Toyota', 'Ford', 'Hyundai', 'Volkswagen', 'Tesla', 'Peugeot', 'Chery', 'Fiat', 'Tata', 'Holden'];
let models = ['Prius', 'Mustang', 'Tucson', 'Passat', 'S', '205', 'S22L', 'Punto', 'Nano', 'Barina'];
let owners = ['Tomoko', 'Brad', 'Jin Soo', 'Max', 'Adrianna', 'Michel', 'Aarav', 'Pari', 'Valeria', 'Shotaro'];
let bc, contx;

module.exports.init = function (blockchain, context, args) {
    bc = blockchain;
    contx = context;

    return Promise.resolve();
};

module.exports.run = function () {
    txIndex++;
    let nip_bps = 'xxx449999' + txIndex.toString();
    let nip = colors[Math.floor(Math.random() * colors.length)];
    let nama = makes[Math.floor(Math.random() * makes.length)];
    let jenis_kelamin = models[Math.floor(Math.random() * models.length)];
    let tempat_lahir = owners[Math.floor(Math.random() * owners.length)];
    let tanggal_lahir = owners[Math.floor(Math.random() * owners.length)];
    let no_telepon = owners[Math.floor(Math.random() * owners.length)];
    let no_handphone = owners[Math.floor(Math.random() * owners.length)];
    let email = owners[Math.floor(Math.random() * owners.length)];
    let alamat = owners[Math.floor(Math.random() * owners.length)];
    let perkiraan_pensiun = owners[Math.floor(Math.random() * owners.length)];
    let jabatan_terakhir = owners[Math.floor(Math.random() * owners.length)];
    let status_pegawai = owners[Math.floor(Math.random() * owners.length)];
    let golongan = owners[Math.floor(Math.random() * owners.length)];
    let nama_instansi = owners[Math.floor(Math.random() * owners.length)];
    let alamat_instansi = owners[Math.floor(Math.random() * owners.length)];
    let notelp_instansi = owners[Math.floor(Math.random() * owners.length)];
    let status_perkawinan = owners[Math.floor(Math.random() * owners.length)];
    let agama = owners[Math.floor(Math.random() * owners.length)];
    let pendidikan = owners[Math.floor(Math.random() * owners.length)];

    let arg = {
        nip_bps: contx.clientIdx + '_NIP_' + txIndex.toString(),
        nip: "xxxxxxxx2018012xxx",
        nama: "Dummy ke-" + txIndex.toString(),
        jenis_kelamin: "PR",
        tempat_lahir: "Tanjungbalai",
        tanggal_lahir: "07-02-1992",
        no_telepon: "xxxxxxxxx525",
        no_handphone: "(+62)xxxxxx524",
        email: "xxx449999@gmail.com",
        alamat: "jl. Dummy, No. 74, Banjarmasin",
        perkiraan_pensiun: "2052",
        jabatan_terakhir: "Penugasan Statistisi Pelaksana Lanjutan Seksi Statistik Produksi",
        status_pegawai: "TB Double Degree",
        golongan: "IIc",
        nama_instansi: "Kantor BPS ke-8",
        alamat_instansi: "Alamat kantor BPS ke-8",
        notelp_instansi: "(+62)xxxxxx008",
        email_instansi: "BPS-8@bps.go.id",
        status_perkawinan: "Cerai Mati",
        agama: "Kristen Protestan",
        pendidikan: [
            {
                nama_instansi_pendidikan: "SD 1 Tanjungbalai",
                nama_prodi_jurusan: "SD",
                tahun_lulus: "2004"
            },
            {
                nama_instansi_pendidikan: "",
                nama_prodi_jurusan: "SMP",
                tahun_lulus: "2007"
            },
            {
                nama_instansi_pendidikan: "",
                nama_prodi_jurusan: "SMA",
                tahun_lulus: "2010"
            }
        ]
    };

    let args = {
        chaincodeFunction: 'createCar',
        chaincodeArguments: [JSON.stringify(arg)]
    };

    return bc.invokeSmartContract(contx, 'pegawai', 'v1', args, 30);
};

module.exports.end = function () {
    return Promise.resolve();
};
