'use strict';
const process = require('process');

const response = {
    "argv0": process.argv[0],
    "argv1": process.argv[1],
    "argv2": process.argv[2],
    "argv3": process.argv[3],
    "argv4": process.argv[4],
    "argv5": process.argv[5],
}

console.log(response);

/*

    console.log(process.argv[0]);
    console.log(process.argv[1]); ///home/customer/www/7950ohana.com/public_html/dev/index.js
    console.log(process.argv[2]); // one
    console.log(process.argv[3]); //two=three
    console.log(process.argv[4]); //four
    console.log(process.argv[5]); // World
    console.log(process.argv[6]); // undefined


*/
/*
for (let j = 0; j < process.argv.length; j++) {
    console.log(j + ' -> ' + (process.argv[j]));
}
*/