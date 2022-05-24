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

module.exports.info = 'Querying a car.';

const helper = require('../helper');

const contractID = 'pegawai';
const version = '1.0';
let txIndex = 0;
let start_nip = 400000;
let limitIndex, bc, ctx, clientIdx, clientArgs;

module.exports.init = async function (blockchain, context, args) {
    bc = blockchain;
    ctx = context;
    clientArgs = args;
    limitIndex = args.assets;

    // await helper.createCar(bc, contx, args);

    // return Promise.resolve();
};

module.exports.run = function () {
    let nip_bps = 'xxx' + start_nip.toString();

    start_nip++;
    txIndex++;
    clientIdx = ctx.clientIdx.toString();

    // let nip_bps = clientIdx + '_NIP_' + txIndex.toString();

    // let args = {
    //     chaincodeFunction: 'queryPegawai',
    //     chaincodeArguments: [nip_bps]
    // };

    for (let i = 0; i < clientArgs.assets; i++) {
        try {
            if (txIndex === limitIndex) {
                txIndex = 0;
            }
            console.log(`Client ${clientIdx}: Deleting asset ${nip_bps}`);
            const args = {
                chaincodeFunction: 'deletePegawai',
                invokerIdentity: 'Admin@org1.example.com',
                chaincodeArguments: [nip_bps]
            };
            return bc.bcObj.invokeSmartContract(ctx, contractID, version, args);
        } catch (error) {
            console.log(`Client ${clientIdx}: Smart Contract threw with error: ${error}`);
        }
    }
};

module.exports.end = function () {
    return Promise.resolve();
};
