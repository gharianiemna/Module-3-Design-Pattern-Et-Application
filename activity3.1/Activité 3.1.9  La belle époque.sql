
SELECT nom, prenom, DATE_FORMAT(date_naissance, "%M %d %Y")  FROM `fiche_personne` WHERE DATE_FORMAT(date_naissance, "%Y")=1982 ORDER BY fiche_personne.nom;
