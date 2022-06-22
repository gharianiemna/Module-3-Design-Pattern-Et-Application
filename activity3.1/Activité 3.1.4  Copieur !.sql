INSERT INTO `ft_table`( `login`, `date_naissance` )  SELECT nom, date_naissance FROM `fiche_personne` WHERE (nom LIKE "%a%") AND (LENGTH(nom) < 9) ORDER BY fiche_personne.nom LIMIT 10;
UPDATE `ft_table` SET groupe='other' WHERE id > 5;
