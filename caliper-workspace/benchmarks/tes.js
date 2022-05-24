'use strict';

module.exports.info = 'Template callback';

const contractID = 'pegawai';
const version = '1.0';

let bc, ctx, clientArgs, clientIdx;

module.exports.init = async function (blockchain, context, args) {
    bc = blockchain;
    ctx = context;
    clientArgs = args;
    clientIdx = context.clientIdx.toString();
    for (let i = 0; i < clientArgs.assets; i++) {
        try {
            const assetID = `${clientIdx}_${i}`;
            console.log(`Client ${clientIdx}: Creating asset ${assetID}`);
            const myArgs = {
                chaincodeFunction: 'createSingle',
                invokerIdentity: 'Admin@org1.example.com',
                chaincodeArguments: ["{\"" + assetID + "\":\"0002\",\"nip\":\"xxxxxxxx2015041xxx\",\"tempat_lahir\":\"Batu\",\"tanggal_lahir\":\"18-04-1994\",\"pendidikan\":[{\"nama_instansi_pendidikan\":\"\",\"nama_prodi_jurusan\":\"SD\",\"tahun_lulus\":\"2008\"},{\"nama_instansi_pendidikan\":\"\",\"nama_prodi_jurusan\":\"SMP\",\"tahun_lulus\":\"2011\"}]}"]
            };
            await bc.bcObj.invokeSmartContract(ctx, contractID, version, myArgs);
        } catch (error) {
            console.log(`Client ${clientIdx}: Smart Contract threw with error: ${error}`);
        }
    }
};

module.exports.run = function () {
    const randomId = Math.floor(Math.random() * clientArgs.assets);
    const myArgs = {
        chaincodeFunction: 'queryPegawai',
        invokerIdentity: 'Admin@org1.example.com',
        chaincodeArguments: [`${clientIdx}_${randomId}`]
    };
    return bc.bcObj.querySmartContract(ctx, contractID, version, myArgs);
};

module.exports.end = async function () {
};