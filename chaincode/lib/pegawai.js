/*
 * SPDX-License-Identifier: Apache-2.0
 */

'use strict';

const { Contract } = require('fabric-contract-api');

class PegawaiCC extends Contract {

    async initLedger(ctx) {
        console.info('============= START : Initialize Ledger ===========');
        const pegawai = [
            {
                nip_bps: '123456789',
                nip: '1990281937213',
                nama: 'Saya Nama 1',
                jk: 'Laki-laki',
                tempat_lahir: 'Kebumen',
                tanggal_lahir: '21 Juni 1990',
                no_telepon: '082837183718',
                email: 'saya1@mail.com',
                alamat: 'Kebumen',
                perkiraan_pensiun: '2045',
                jabatan_terakhir: 'Kepala',
                status_pegawai: 'Masih hidup',
                nama_instansi: 'BPS Pusat',
                alamat_instansi: 'Jakarta',
                notelp_instansi: '082-12381928',
                pendidikan:
                    [
                        {
                            nama_prodi_jurusan: 'SD',
                            nama_instansi_pendidikan: 'SD',
                            tahun_lulus: '2001'
                        },
                        {
                            nama_prodi_jurusan: 'SMP',
                            nama_instansi_pendidikan: 'SMP',
                            tahun_lulus: '2007'
                        }
                    ],
            },
            {
                nip_bps: '23567890',
                nip: '1990281937212',
                nama: 'Saya Nama 2',
                jk: 'Laki-laki',
                tempat_lahir: 'Kebumen',
                tanggal_lahir: '21 Juni 1990',
                no_telepon: '082837183718',
                email: 'saya2@mail.com',
                alamat: 'Kebumen',
                perkiraan_pensiun: '2045',
                jabatan_terakhir: 'Kepala',
                status_pegawai: 'Masih hidup',
                nama_instansi: 'BPS Pusat',
                alamat_instansi: 'Jakarta',
                notelp_instansi: '082-12381928',
                pendidikan:
                    [
                        {
                            nama_prodi_jurusan: 'SD',
                            nama_instansi_pendidikan: 'SD',
                            tahun_lulus: '2001'
                        },
                        {
                            nama_prodi_jurusan: 'SMP',
                            nama_instansi_pendidikan: 'SMP',
                            tahun_lulus: '2007'
                        }
                    ],
            },
            {
                nip_bps: '35678901',
                nip: '1990281937243',
                nama: 'Saya Nama 3',
                jk: 'Laki-laki',
                tempat_lahir: 'Kebumen',
                tanggal_lahir: '21 Juni 1990',
                no_telepon: '082837183718',
                email: 'saya3@mail.com',
                alamat: 'Kebumen',
                perkiraan_pensiun: '2045',
                jabatan_terakhir: 'Kepala',
                status_pegawai: 'Masih hidup',
                nama_instansi: 'BPS Pusat',
                alamat_instansi: 'Jakarta',
                notelp_instansi: '082-12381928',
                pendidikan:
                    [
                        {
                            nama_prodi_jurusan: 'SD',
                            nama_instansi_pendidikan: 'SD',
                            tahun_lulus: '2001'
                        },
                        {
                            nama_prodi_jurusan: 'SMP',
                            nama_instansi_pendidikan: 'SMP',
                            tahun_lulus: '2007'
                        }
                    ],
            },
        ];

        for (let i = 0; i < pegawai.length; i++) {
            await ctx.stub.putState("pgw-" + i, Buffer.from(JSON.stringify(pegawai[i])));
            console.info('Added <--> ', pegawai[i]);
        }
        console.info('============= END : Initialize Ledger ===========');
    }

    async createPegawai(ctx, id_number, nip_bps, nip, nama, jk, tempat_lahir, tanggal_lahir, no_telepon, email, alamat, perkiraan_pensiun, jabatan_terakhir, status_pegawai, nama_instansi, alamat_instansi, notelp_instansi, pendidikan) {
        const pegawai = await ctx.stub.getState(id_number);
        if (!pegawai || pegawai.length === 0) {
            const pegawai =
            {
                "nip_bps": nip_bps,
                "nip": nip,
                "nama": nama,
                "jk": jk,
                "tempat_lahir": tempat_lahir,
                "tanggal_lahir": tanggal_lahir,
                "no_telepon": no_telepon,
                "email": email,
                "alamat": alamat,
                "perkiraan_pensiun": perkiraan_pensiun,
                "jabatan_terakhir": jabatan_terakhir,
                "status_pegawai": status_pegawai,
                "nama_instansi": nama_instansi,
                "alamat_instansi": alamat_instansi,
                "notelp_instansi": notelp_instansi,
            };
            pegawai["pendidikan"] = JSON.parse(pendidikan);
            await ctx.stub.putState(id_number, Buffer.from(JSON.stringify(pegawai)));
        }
    }

    async deletePegawai(ctx, id_number) {
        const assetJSON = await ctx.stub.getState(id_number);
        if (!assetJSON && !assetJSON.length > 0) {
            throw new Error(`The asset ${id_number} does not exist`);
        }
        return ctx.stub.deleteState(id_number);
    }

    async queryPegawai(ctx, id_number) {
        const pegawaiAsBytes = await ctx.stub.getState(id_number); // get the pegawai from chaincode state
        if (!pegawaiAsBytes || pegawaiAsBytes.length === 0) {
            throw new Error(`${id_number} does not exist`);
        }
        console.log(pegawaiAsBytes.toString());
        return pegawaiAsBytes.toString();
    }

    async queryPegawaiByRange(ctx, startKey, endKey) {
        const allResults = [];
        for await (const { key, value } of ctx.stub.getStateByRange(startKey, endKey)) {
            const strValue = Buffer.from(value).toString('utf8');
            let record;
            try {
                record = JSON.parse(strValue);
            } catch (err) {
                console.log(err);
                record = strValue;
            }
            allResults.push({ Key: key, Record: record });
        }
        console.info(allResults);
        return JSON.stringify(allResults);
    }

    async queryAllPegawai(ctx) {
        const startKey = 'pgw-0';
        const endKey = 'pgw-999999999';
        const allResults = [];
        for await (const { key, value } of ctx.stub.getStateByRange(startKey, endKey)) {
            const strValue = Buffer.from(value).toString('utf8');
            let record;
            try {
                record = JSON.parse(strValue);
            } catch (err) {
                console.log(err);
                record = strValue;
            }
            allResults.push({ Key: key, Record: record });
        }
        console.info(allResults);
        return JSON.stringify(allResults);
    }

}

module.exports = PegawaiCC;
