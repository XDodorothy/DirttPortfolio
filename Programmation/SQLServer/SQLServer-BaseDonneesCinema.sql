-- EXAMEN 1 DE DOROTHÉE THERRIEN
-- DANS LE COURS DE PROGRAMMATION II

use Cinema;
go
/*Afficher la table*/
select * from Film
select * from Pays
select * from Studio
select * from Langue
select * from Producteur

-- 1. Afficher le nombre de films. (1pts)

select count(id)as "Nombre de films" from Film

-- 2. Afficher les noms des films du plus récent au plus vieux. (0.5pts)

select nom from Film 
order by dateSortie desc

-- 3. Afficher les noms, dates de sorties, durées et nombre d’oscars gagnés des films sorties durant l’année 2000, en utilisant 2 méthodes. (2pts)

/*Methode 1*/
select nom, dateSortie, duree, nbOscarsGagnes from Film
where YEAR(dateSortie) = 2000

/*Methode 2*/
select nom, dateSortie, duree, nbOscarsGagnes from Film
where dateSortie between '2000-01-01' and '2000-12-31'

-- 4. Afficher le nom des films produits par le producteur d’id 1. (2pts)

select nom from film 
where idProducteur = 1

-- 5. Afficher le nom des films produits par Steven Spielberg, en utilisant 2 méthodes. (1pts)

/*Methode 1*/
select Film.nom from film
inner join Producteur
on Film.idProducteur = Producteur.id
where Producteur.nom = 'Steven Spielberg'

/*Methode 2*/
select Film.nom from Film
where idProducteur in (select id from Producteur where Producteur.nom = 'Steven Spielberg')

-- 6. Afficher le nom des films produits par des femmes. (2pts)

select Film.nom from film
inner join Producteur
on Film.idProducteur = Producteur.id
where sexe = 'Feminin'

-- 7. Afficher le nombre d’oscars des films produits par des hommes. (1pts)

select sum(nbOscarsGagnes) as [Nombre d'oscar gagnés par des hommes] from film
inner join Producteur
on Film.idProducteur = Producteur.id
where sexe = 'Masculin'

-- 8. Afficher le nom des films dont la durée est supérieure ou égale à 130. (0.5pts)

select nom from film
where duree >= 130

-- 9. Afficher les films du plus court au plus long. (0.5pts)

select * from Film
order by duree

-- 10. Afficher le nom des studios qui se trouvent en Chine. (0.5pts)

select nom from Studio
where idPays in (select id from Pays where nom = 'Chine')

-- 11. Afficher le nombre de producteurs par sexe. (0.5pts)

select sexe, count(id) from Producteur
group by sexe

-- 12. Afficher le nom des producteurs du plus jeune au plus vieux. (0.5pts)

select nom from Producteur
order by dateNaissance desc

-- 13. Afficher la moyenne des durées des films. (0.5pts)

select avg(duree) as 'Moyenne des durées des films' from Film

-- 14. Afficher le film qui a gagné le plus d’oscars. (0.5pts)

select * from Film 
where nbOscarsGagnes = (select max(nbOscarsGagnes) from Film)

-- 15. Afficher le film le plus long. (1pts)

select * from Film 
where duree = (select max(duree) from Film)

-- 16. Afficher le nom des films produits aux USA. (0.5pts)

select Film.nom from film
inner join Studio
on Film.idStudio = Studio.id
inner join Pays
on Studio.idPays = Pays.id
where Pays.nom = 'USA'

-- 17. Afficher le nom et la date de naissance des producteurs qui n’ont produit aucun film. (1pts)

select Producteur.nom as 'Nom Producteur', Producteur.dateNaissance from Producteur
left join Film
on Producteur.id = Film.idProducteur
where Film.id is null

-- 18. Afficher le nom des producteurs qui ont produit au moins un film. (1pts)

select Producteur.nom from Producteur
right join Film
on Producteur.id = Film.idProducteur


-- 19. Afficher le film produit aux USA ayant reçu le plus de nominations en oscars. (1pts)

Select * from film 
where  NbNominationsOscars = (select max(NbNominationsOscars) from film) and idStudio in (select id from Studio where idPays in (select id from Pays where nom = 'USA'))

-- 20. Afficher les noms, budgets, revenus et profits des films, sachant que profit = revenu - budget. (1pts)

select nom, budget as 'Budget ($)', revenu as 'Revenu ($)', (revenu - budget) as 'Profits ($)' from Film

-- 21. Classer les films par durée en utilisant la clause CASE (< 150 court et >= 150 long). (1pts)

select *,
Case
when duree < 150 then 'court'
when duree >= 150 then 'long'
End as durée
from Film
order by duree

-- 22. Mettre à jour la durée du film nommé Titanic à 200. (0.5pts)

update Film
set duree = 200
where  nom = 'Titanic'
-- Juste pour vérifier :
select * from Film

-- 23. Supprimer les films dont la langue est le français. (0.5 pts)

delete from Film where idLangue in (select id from Langue where nom = 'Francais')
-- Juste pour vérifier :
select * from Film

-- 24. Supprimer toutes les lignes de toutes les tables. (0.5 pts)

delete from Film
delete from Studio
delete from Producteur
delete from Pays
delete from Langue 
-- Juste pour vérifier :
select * from Film
select * from Pays
select * from Studio
select * from Langue
select * from Producteur