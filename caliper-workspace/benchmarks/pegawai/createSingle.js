'use strict';

module.exports.info = 'Template callback';

const contractID = 'pegawai';
const version = '1.0';
let txIndex = 0;
let start_nip = 400000;

let bc, ctx, clientArgs, clientIdx;

module.exports.init = async function (blockchain, context, args) {
    bc = blockchain;
    ctx = context;
    clientArgs = args;
};

module.exports.run = function () {
    let nip_bps = 'xxx' + start_nip.toString();

    start_nip++;
    txIndex++;
    clientIdx = ctx.clientIdx.toString();

    let arg = {
        nip_bps: nip_bps,
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

    for (let i = 0; i < clientArgs.assets; i++) {
        try {
            console.log(`Client ${clientIdx}: Creating asset ${arg["nip_bps"]}`);
            const myArgs = {
                chaincodeFunction: 'createSingle',
                invokerIdentity: 'Admin@org1.example.com',
                chaincodeArguments: [JSON.stringify(arg)]
            };
            return bc.bcObj.querySmartContract(ctx, contractID, version, myArgs);
        } catch (error) {
            console.log(`Client ${clientIdx}: Smart Contract threw with error: ${error}`);
        }
    }
};

module.exports.end = async function () {
};