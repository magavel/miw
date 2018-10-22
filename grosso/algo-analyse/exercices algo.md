#ALGO 

**EXERCICE 1**
``
Procédure permutation ([E-S] a, b : réel)
	var temp:réel
	début
		temp ← a
		a← b
		b<- a
	fin
```
**EXERCICE 2**
``
Procédure  tri ([E] ord : booléen [E-S] a,b,c : réel)

DÉBUT
	
		ordre croissant
		SI (a>b) ALORS
			permutation (a,b)
		FINSI
		SI(b>c) ALORS
			permutation(b,c)
		FINSI
		SI (a>b) ALORS
			permutation (a,b)
		FINSI

		//ordre décroissant
		SI (NON ord) ALORS

			permutation(a,c)
	
		FINSI	
FIN
```
nota:
 
pour trier beaucoup de valeur on peut mettre toutes ces valeurs ds un tableau t.
Boucle de 0 à t.lenght
et on compare ti avec ti+1






A chaque boucle on enleve un indice au tableau car à chaque boucle on laisse le nbr ele plus grand à droite
c’est la methode de tri par bulles.


**EXERCICE 3**

//sans fonction récursive
````
Fonction somme ([E] n : entier):entier

       variable n, res :entier
DEBUT
       n ← saisir un chiffre 
       res=0
       POUR (i=1 à i =n)
           res +=i
       FINPOUR
       retourne res
       
FIN

```
***avec fonction récursive…***




```
Fonction somme ([E] n : entier):entier

      
DEBUT	
	SI n=0 alors retourne 0
		sinon 
			retourne n + somme(n-1)
	FINSI
       
FIN

```



//fonction factorielle
```
Fonction factorielle ([E] n : entier):entier
	variable n: reel
	
DEBUT
	
	SI n=0 alors retourne 0
		sinon 
			retourne n * somme(n-1)
	FINSI

FIN

```
nota
un algo récursif peut s’appeler sui même.
Exploration de répertoire et sous répertoire ds un disque.






```
Procédure capitalise (E)c,t:reel; d:entier (S) nc:reel
 variable 

DEBUT
	nc=c
	pour (i=1; i<d; i++)
		nc= nc x (1+t)
	finpour
FIN



Procédure doubleCapital ([E] c,t:reel [S]n:entier) 

	n=1
	r=c
debut
	tantque r<2c faire
		capitalise (c,t,n;r)
		n++
	finTq
fin
```
**correction**

``
Procédure doubleCapital ([E] c,t:reel [S]n:entier) 
	n=0
	r=c
debut
	repeter
		nc= c x (1+t)
		n++
	jusqu'a nc>=2c
fin
```

**question 7**
```
fonction estPremier([E]n:entier):booleen
var i : entier
debut
	si <=1 alors retourner faux finsi
	i <- 2c
	tantque i<= racineCarre(n)
		si (n mod i = 0) 
		    reyourne faux 
		finsi
		i <- i +1
	finTq
	retourne vrai

fin
```
**question 10**
///pas d'homonyme`
``
procedure rechercher ([E] t[]:tableau d'élèves, n:chaine [S]trouve:booléen, age: entier)
i: reel
trouve false
i=-1
debut
	repeter

		i<- i +1
	jusqu'a t(i).nom = n ou t(i).nom=fin
	si t(i).nom = n
			trouve = vrai
			t(i).age=age
	finsi
fin
```
*****************
**question 11**
*****************


///si homonymie`
``
procedure rechercher ([E] t[]:tableau d'élèves, n:chaine [S]trouve:booléen, age: entier)

j:entier
age: tableau
trouve = false
i=0
j=0
debut
	pour i allant de 0 à taille de t[]-1
		si t(i).nom = n alors
			trouve = vrai   // pour optimiser on sort le trouve 
			t(i).age=age[j]
			j=j+1
		finsi
		si j<> 0 alors  // c'est meiux pour l'optimisation de sortir cette condition
			trouve à vrai
		finsi
	
	finpour
fin
```
***correction

```
debut
	reoeter 
		i = i+1

fin

```



*****************
**Question 12**
*****************


//recherche dans un tableau trié par ordre croissant
``
procedure recherche([E]t[]:tableau d'élèves, n:chaine [S]trouvé:booléen, age:entier)

var A:string
i, j: entier

Debut
trouve = 0
i=-1
j=0
	tantque  t(i).nom <n  t(i).nom<>fin
		i = i+1
	fintq
	si t(i).nom =n alors
			trouve = vrai
			t(i).age=age[j]
			j=j+1
			i = i+1
		finsi
fin

```

*****************
**Question 13**
****************`

```html
precédure dichotomie([E] t[]: tableau d'élève, n:chaine, nb:entier [S] trouvé: booléen, age:entier)

var
	i, d, l :entier
	d = 1
	l = nb
	i= (d+l)/2
debut
	tantque n<>t(i).nom et que d<=l
		si n <t(i).nom alors
			l = i-1
		sinon
			d = i+1

		si n==t[I].nom ALORS
		trouve ==1
		age = t[i].age
	fintq

fin

```
********************
**Question 14**
********************
```
procedure insere([E] nom: chaine, age:entier [E,S] t[] :tableau d'élève, nb :entier)

var
	i, d, l :entier
	d = 1
	l = nb
	i= (d+l)/2
debut
	tantque n<>t(i) et que d<=l
		si n <t(i) alors
			l = i-1
		sinon
			d = i+1

		si d=l ALORS
		 inserer nom dans t[i+1].nom
		 inserer age dans t[i+1].age
		 nb = nb +1
		
	fintq

fin

```

***************************************
**Faire procédure sur les pointeurs rechercher un nom et le supprimer**
*************************

```
Procedure ([E]nom : chaine [ES]debut)
var s:pointeur sur Tpersonne

Debut
    s <- debut
    Tantque s<> NIL et que S-> nom <> nom
        s<- s -> Psuivant
    FinTq
    s->nom=nom
    psuivant-1 = psuivant
    desallouer psuivant
fin

```





