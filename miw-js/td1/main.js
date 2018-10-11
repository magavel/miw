
    // console.log('page chargée');
    // alert('Bonjour page chargée')
    // v=confirm("Voulez vous continuer");
    // alert(v);

    //exo 4

    function exo4(){

        var ladate = new Date();
        alert("date de dernier mise à jour: "+ ladate.getDay()+"/"+ ladate.getMonth()+ "/" + ladate.getFullYear());
    }



///////////////////////////////////////////////////////////
//exo 5

function exo5(){

    var saisie = prompt("Saisissez  nom, prenom: " , "feron avel");
    var f=saisie.search(" "); 
    var nom= saisie.substring(0,f);
    var prenom= saisie.substring(f+1);
    alert('Bonjour ' + nom.toUpperCase() +' '+prenom.substr(0,1).toUpperCase()+ prenom.substring(1).toLowerCase());
}


///////////////////////////////////////////////////////////
// exo 6

function exo6(){
    var conteneur = document.getElementById('imgRollOver');
    var monImg = document.createElement('img');
    monImg.width = 200;
    monImg.setAttribute('onMouseOver','surImage()');
    monImg.setAttribute('onMouseOut','retImage()');
    monImg.src = "img/PORTAIT MAPA-1.jpg";
    conteneur.appendChild(monImg);
}

function surImage(){
    for (i = 0; i < document.images.length; i++){

        document.images[i].src = "img/PORTAIT MAPA-4.jpg";
    }
}
function retImage(){

    for (i = 0; i < document.images.length; i++){
            
        document.images[i].src = "img/PORTAIT MAPA-1.jpg";
    }
}

///////////////////////////////////////////////////////////
// exo 7

function exo7(){
    document.write(navigator.appName);
    document.write(navigator.appVersion);
    document.write(navigator.userAgent);
    document.write(navigator.platform);
    
}


///////////////////////////////////////////////////////////
// exo 8
function exo8(){
    var nom = prompt("Saisissez  nom: ", "FERON")
    var prenom = prompt("Saisissez  prenom: ", "Avel")
    alert('Nbre de caractères du nom: ' + nom.length);
    alert('Nbre de caractères du prenom: ' + prenom.length);
    alert('Les 3 premières lettre du nom: ' + nom.substr(0,3));
    alert('Les 3 premières lettre du prenom: ' + prenom.substr(0,3));
    
}


///////////////////////////////////////////////////////////
// exo 9

function exo9(){
    var a = parseFloat(prompt('saisir un nbre a: ', '16.6'));
    var b = parseFloat(prompt('saisir un nbre b: ', '6.6'));
    var c = Math.round((a+b) * 100) / 100;
    var vmax = Math.max(a,b);
    var aSup= Math.ceil(a);
    var bMoins= Math.floor(b);
    alert('La somme a+b= ' + c + '\nValeur maximale= '+ vmax+ '\nEntier >= '+a+'= '+ aSup+ '\nEntier <= '+b+'= '+ bMoins);
    
}


///////////////////////////////////////////////////////////
// exo 10

function exo10(){
    window.open('horloge.html',"nom_popup","menubar=no, status=no, scrollbars=no, menubar=no, width=400, height=400");
}



///////////////////////////////////////////////////////////
// exo 11

function exo11(){
    var saisie = prompt("Saisissez  des mots séparer par des '_': ", "feron_joie_henry_poisson");
    var tableau = saisie.split('_');
    for (i=0; i<tableau.length; i++){
        var texte;
        texte+= tableau[i] ;
        texte+='/';
    }
    console.log(texte);
    alert(texte);
}


///////////////////////////////////////////////////////////
// exo 12

function exo12(){

    window.open('exo12.html',"nom_popup","menubar=no, status=no, scrollbars=no, menubar=no, width=400, height=400");
}




