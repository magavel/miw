// fonction et variables


function perim(x,y){

    return 2*(x+y);
}

var p =perim;
console.log('perim: '+p(23,10));

//gestions arguments

function surface(){
    if (arguments.length==2)return arguments[0]*arguments[1]
        else
            if (arguments.length==1)return Math.PI*Math.pow(arguments[0],2)
                else return "nombre d'aguments invalide"
}
console.log(surface(10));
console.log(surface(10,12));
console.log(surface(10,5,7));

//argument de type fonction

function f1(a,b){return a-b}
function f2(a,b){return a+b}

function tri(f,x,y){
    var t=[];
    if (f(x,y)>0){t.push(x);t.push(y)}
        else {t.push(y); t.push(x)}
    return t;
}


console.log(tri(f1,1,6))
console.log(tri(f1,10,6))
console.log(tri(f2,1,6))
console.log(tri(f1,1,6))


//