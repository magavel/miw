
//*
// retourne vrai si nbre n est un nombre
function nombre(n){
    var reg=/^[+ -]?((\d+\.?\d*)|(\d*\.?\d+))$/;
    return(reg.test(n));
}
//retourne vrai nbre entier positif
function entierPositif(n){
    var teste=(nombre(n) && n>0 && Math.trunc(n)==n)?true:false;
    return teste;
}
//retourne vrai si x est pair et false si x impaire

function paire(x){
    var paire=(entierPositif(x) && x%2==0 )?true:false;
    return paire;
}

// qui arrondi le nbre x n chiffre après la ,
function arrondi(x,n){
    var decimal= function(){
        let chiffre =1;
        for (let i = 1; i < n; i++){
            chiffre +='0'; 
        }
        chiffre='1'+chiffre;
        return Math.parseInt(chiffre);
        }
    };
    x= Math.round(decimal*x)/decimal;
    if(nombre(x)) return x;
    
}
console.log(arrondi(5.54512,3));


// function test(f){
//     let tab = [1,2.5,-5,-2.,+5,'j','4',0];

//     for (const i in tab) {
//         f()
//     }
// }