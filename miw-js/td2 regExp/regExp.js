
var tabemail=[
    'leo@orange.fr',
    'bernard@hotmail.fr',
    'kirk@gmail.fr',
    'henry@orange.fr',
    'jade@orange.fr'
];

var text=tabemail.toString();
demande = prompt('la compagnie', 'orange');
reg=new RegExp('[a-z0-9.-_]+@'+demande+'[.](fr|com)','gi');
// avec variable obligé d'utiliser cette forme

console.log( text.match(reg).toString());
console.log( text.match(reg));// on peut uitliser sans toString. Evite de planter avec un tableau null
