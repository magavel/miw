// fonction et variables


function perim(x,y){

    return 2*(x+y);
}



//gestions arguments

function surface(){
    if (arguments.length==2)return arguments[0]*arguments[1]
        else
            if (arguments.length==1)return Math.PI*Math.pow(arguments[0],2)
                else return "nombre d'aguments invalide"
}


//argument de type fonction

function f1(a,b){return a-b}
function f2(a,b){return a+b}

function tri(f,x,y){
    var t=[];
    if (f(x,y)>0){t.push(x);t.push(y)}
        else {t.push(y); t.push(x)}
    return t;
}




//

function surfPerim(long, larg){
    var r=new Object();
    r.surf=long*larg;
    r.peri=2*(long+larg);
    return r;
}

t=surfPerim(2,2);


//closures


function essai(){
    var y=3;
    function test(x){
        return x*y;
    }
    return test;
}
var f=essai();




function exo2(){
    let x= prompt('Saisir un nbre', 5);
    (paire(x))?alert('le nbre est paire'):alert("le nbre est impaire");
}



function exo3(){

    var x;
    var tab=[];
    var somme=0;
    var moyenne=0;
    var max=0;
    var min=0;
    for (i=0;i<3;i++){
        x=prompt("Saisir 3 nbre" , 8);
        if(nombre(x))
        tab.push(x*1);
    }
    for (i=0;i<tab.length;i++){
        somme += tab[i];
        moyenne=somme/3;
    }
    max=Math.max(...tab);
    min=Math.min(...tab);
    tab.sort(function(a, b) {
        return a - b;
    });
    alert('la somme vaut: '+somme+ '\nLa moyenne vaut; '+ moyenne+'\nLe max: '+max+'\nLe min: '+min+ '\nle tableaux trié: '+ tab);
}

function exo4(){
    var x;
    var somme=0;
    while(isNaN(x)){
        x= prompt('Saisir un nbre: ', 16);
        x=x*1;
    }
    somme=faireSomme(x);
    alert(somme);


}

/**
 * function qui demande ....
 */
function exo5(){
  var x =prompt(' Que voulez vous calculer: \nla surface d\'un carré: taper carré\nLa surface d\'rectangle taper rectangle\nLa surface d\'un cercle: taper cercle', 'carré');
  var resultat;
  var c;
  if (x==='carré'){
      c= prompt('Saisir la valeur du coté: ', 4);
      resultat= surfCarre(c);
  }
   if (x==='rectangle'){
      c= prompt('Saisir la valeur du petit coté: ', 4);
      var d= prompt('Saisir la valeur du grand coté', 8)
      resultat= surfRect(c,d);
  }
   if (x==='cercle'){
      c= prompt('Saisir la valeur du coté: ', 4);
      resultat= surfCercle(c);

  }

  alert(resultat);
}


function exo6(){
    var password= password;
    var ch = prompt('Saisir votre mot de passe: ', 'password');
    if (ch==password){
        console.log('test');
        exo4();
    }else{
        location.reload();
    }
}

/**
 * fonction qui affiche le carré des nbre entre 1 et 50
 */
function exo7(){
    var n = 50;
    for (let i =1; i<=n; i++){
        var x =carre(i);
        console.log('le carré de '+i+' vaut: '+x);
    }
}

/**
 * affiche les nbres impaire entre N1 et N2
 */
function exo8(){
    var a=prompt('Saisir un nbre a: ', 3);
    var b=prompt('Saisir un nbre b plus qrand que a: ', 13);
    var tab=[];
    for (a; a<b; a++){
        console.log('test');
        if(paire(a)){
            console.log(paire(a));
            tab.push(a);
        }

    }
    console.log(tab);
}
