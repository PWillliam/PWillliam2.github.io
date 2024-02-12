function note(nombre) {
    if (nombre <= 6) {
        return "hideux";
    } else if (nombre <= 9) {
        return "moche";
    } else if (nombre <= 14) {
        return "nice";
    } else if (nombre <= 20) {
        return "GG";
    } else {
        return "bug";
    }
}
var nombre = 21; 
console.log(note(nombre));


    for (let i = 10; i <= 100; i += 10) {
    console.log(i);
}
function sortNumbers(tInit, threshold) {
    let tInf = [];
    let tSup = [];

    for (let i = 0; i < tInit.length; i++) {
        if (tInit[i] < threshold) {
            tInf.push(tInit[i]);
        } else {
            tSup.push(tInit[i]);
        }
    }

    return {
        tInf: tInf,
        tSup: tSup
    };
}

let tableauInitial = [15, 30, 5, 40, 25, 10];
let seuil = 20;
let resultats = sortNumbers(tableauInitial, seuil);

console.log("Inférieurs à", seuil + ":", resultats.tInf);
console.log("Supérieurs à", seuil + ":", resultats.tSup);

function sortNumbers(tInit, seuil) {
    let tInf = [];
    let tSup = [];

    for (let i = 0; i < tInit.length; i++) {
        if (tInit[i] < seuil) {
            tInf.push(tInit[i]);
        } else {
            tSup.push(tInit[i]);
        }
    }

    return {
        tInf: tInf,
        tSup: tSup
    };
}

let tableauInit = [5, 12, 8, 15, 7, 20];
let seuil = 10;
let resultats = sortNumbers(tableauInit, seuil);

console.log("Inférieurs à", seuil + ":", resultats.tInf);
console.log("Supérieurs ou égaux à", seuil + ":", resultats.tSup);


