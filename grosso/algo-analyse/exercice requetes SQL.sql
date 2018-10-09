a
select n°vol, heureDepart from vols where villeDepart=paris order by heureDepart desc

b
select count (*) from vols where n°pilote=104 

c
select count (n°pilote) from pilotes

d
select count distinct n°avion from vols 

e
select avg capacite from avions where nomAvion= airbus

f

select n°avion, nomAvion from avions where capacite > 270 and localisation = paris order by 2 

g
select  p.n°pilote, nomPilote, a.n°Avion, nomAvion 
	from pilotes p
    inner join vols v on p.n°pilote = v.n°pilote
    inner join avions a on v.n°avion = a.n°avion
    
    order by p.n°pilote desc
    
h
select nomPilote
	from pilotes
    natural join vols
    where villeDepart and heureDepart>15:00
    
i
select nomPilote
	from pilote p
    inner join avions a on p.n°pilote = a.n°pilote
    where n°avion=5004 or n°avion=5005

j
select nomPilote
	from pilote p
    inner join avions a on p.n°pilote = a.n°pilote
    where nomAvion=airbus


k
select n°vol, villeDepart, villeArrivee
    from vols
    where n°vol=IT509


l
select nomPilote
    from pilotes p
    natural join vols v
    where v.villeArrivee ≠ p.adresse

m
select n°pilote
    from vols
    where n°Avion=  select n°Avion 
                            from vols
                            where n°pilote=104
                    

n

select nomPilote
    from pilotes
    natural join vols
    where nomAvion =    select n°Avion
                            from vols
                            where n°pilote=104
                         


o
select n°vol, villeDepart, villeArrivee, nomAvion, capaciteAvion
    from vols
    natural join avions
    where villeDepart = select adresse 
                            from pilotes
                            where n°pilote=105

p

select n°pilote, nomPilote, adresse count(*)
    from pilotes
    natural join vols
    group by n°vol


q

select n°Avion; nomAvion count(*)
    from avions
    natural join vols
    group by n°Avion having count(*)>2


r
select nomAvion avg(capacite)
from avions
group by nomAvion

s 

select n°pilote
from vols
where villeDepart not paris

t
select villeArrivee
from vols
union
select villeDepart
from vols

u

select n°pilote
from vols
natural join vols
where adresse ≠ villeArrivee et adresse ≠ villeDepart

v
select n°Avion, nomAvion 
from avions
natural join vols 
where n°Avion ≠ select n°Avion from avions where n°pilote ≠ 100

w

select n°Avion 
from vols
where villeDepart ≠ paris

x

select n°Avion, nomAvion
from avions
natural join vols
where villeDepart ≠ paris

y
select nomPilote
from pilotes
union
select localisation
from avions

z

select nomPilote 
from pilotes
where n°pilote ≠ select n°pilote from vols 
