**********************************************
**         Devoir de php                    **
**********************************************





**Création d'une interface multi-page :**

Créez un fichier function.php qui regroupera toutes les fonctions :
getData() : renvoie un tableau PHP avec les pages du site. Tableau associatif : nom de la page, title, content.
getTitle($page) : renvoie le title de la page passée en paramètre, si page non trouvée, le title de la page 404.
getContent($page) : renvoie le contenu HTML de la page passée en paramètre, si page non trouvée, le contenu de la page 404.

Le fichier index.php sera le seul fichier de navigation. 

1 : Pouvoir naviguer entre les pages.
=> Un menu listera toutes les pages avec un lien.
=> Le contenu de la page sera affiché dans le corps de page.
2 : Ajouter une page "formulaire" avec les champs Nom, Prénom et Message (zone de texte). À la validation du formulaire, afficher ce qui a été envoyé suivit du formulaire.