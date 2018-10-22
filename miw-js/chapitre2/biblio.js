
//*
// retourne vrai si nbre n est un nombre
//ok
function nombre(n){
    var reg=/^[+ -]?((\d+\.?\d*)|(\d*\.?\d+))$/;
    return(reg.test(n));
}
//retourne vrai nbre entier positif
//ok
function entierPositif(n){
    var teste=(nombre(n) && n>0 && Math.trunc(n)==n)?true:false;
    return teste;
}
//retourne vrai si x est pair et false si x impaire
//pk
/**
 * function qui retourn vrai si le nbre est paire
 * @param x
 * @returns {boolean}
 */
function paire(x){
    var paire=(entierPositif(x) && x%2==0 )?true:false;
    return paire;
}

// qui arrondi le nbre x n chiffre après la ,
//ok
function arrondi(x,n){
        let chiffre =1;
        for (let i = 1; i < n; i++){
            chiffre +='0';
        }
        x= Math.round(chiffre*x)/chiffre;
        if(nombre(x)) return x;
}



//fonction qui renvoie  pour n la somme des n premier nbre


function faireSomme(n){
    if(n==0)
        return 0;
    else
        return n + faireSomme(n-1);

}


/**
 * Function qui retourne la surface d'un carré c
 * @param c {number}
 * @returns {number}
 */
function surfCarre(c){
    var s=c*c;
    return s;
}

/**
 * Fonction qui retourne la surface d'un rectangle
 * @param a {number}
 * @param b {number}
 * @returns {number}
 */
function surfRect(a,b){
    var s=a*b;
    return s;
}

/**
 *
 *Fonction qui retourne la surface d'un cercle
 * @param r {number}
 * @returns {number}
 */
function surfCercle(r){
    var s=Math.PI*Math.pow(r,2);
    return s;
}

/**
 * retourne le carré du nbre
 * @param n {number}
 * @returns {number}
 */
function carre(n){
    return n =n*n;
}


//fonction nbOccurences(c,ch) qui retourne le nbre d'occurence de c dans ch

/*
function nbOccurences(c,ch){
    let x = c;
    x+='{1}';
    let reg = new RegExp(x,'g')
    console.log(reg);
    let monTableau;
    let index=0;
    while ((monTableau=reg.test(ch) !==null)){
        index++;
        return index;
    }

}



function nbOccurences(c,ch){
    let x = c;
    x+='{1}';
    let reg = new RegExp(x,'g');
    var t=ch.match(reg);
    return t.toString();
}

*/









// function test(f){
//     let tab = [1,2.5,-5,-2.,+5,'j','4',0];

//     for (const i in tab) {
//         f()
//     }
// }