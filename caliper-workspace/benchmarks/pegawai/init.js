'use strict';

module.exports.info = 'Template callback';

const contractID = 'pegawai';
const version = '1.0';
let txIndex = 0;

let bc, ctx, clientArgs, clientIdx;

module.exports.init = async function (blockchain, context, args) {
    bc = blockchain;
    ctx = context;
    clientArgs = args;
};

module.exports.run = function () {
    txIndex++;
    clientIdx = ctx.clientIdx.toString();

    for (let i = 0; i < clientArgs.assets; i++) {
        try {
            console.log(`Client ${clientIdx}: Creating asset ${txIndex.toString()}`);
            const myArgs = {
                chaincodeFunction: 'Init',
                invokerIdentity: 'Admin@org1.example.com',
                chaincodeArguments: ["10", "110"]
            };
            return bc.bcObj.invokeSmartContract(ctx, contractID, version, myArgs);
        } catch (error) {
            console.log(`Client ${clientIdx}: Smart Contract threw with error: ${error}`);
        }
    }
};

module.exports.end = async function () {
};