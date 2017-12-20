Create table promo
(
  id_promo int primary key,
  intitule_promo varchar(10)
);


Create table competence
(
  id_comp int primary key,
  intitule_comp varchar(100)
);

Create table etudiant
(
  id_etudiant int primary key,
  nom_etu varchar(20),
  prenom_etu varchar(20),
  email varchar(50),
  mdp varchar(20),
  description text,
  id_promo int,
  id_comp int,
  constraint FK_ETU_PROMO foreign key (id_promo) references promo (id_promo),
  constraint FK_ETU_COMP foreign key (id_comp) references competence (id_comp)
);


insert into competence
values (1, 'C++'),
(2, 'PHP'),
(3, 'Algorithmique');

insert into promo
values (1, 'INFO1'),
(2, 'INFO2');




insert into etudiant
values (1, 'Doiteau', 'Laurent', 'laurent.doiteau@etu.univ-amu.fr', 'root', 'Projeeeeet.', 2, 3),
(2, 'Vienne', 'Geoffrey', 'geoffrey.vienne@etu.univ-amu.fr', 'H@gU1', 'On ecrit colour et pas color.', 2, 1),
(3, 'Barbe', 'Baptiste', 'baptiste.barbe@etu.univ-amu.fr', '4#Gc.L', 'Sponsored by IKEA.', 2, 3),
(4, 'Dos-Santos Barroso', 'Alexandra', 'alexandre.dossantosbarroso@etu.univ-amu.fr', '!UpQLjb', 'Coucou.', 2, 2),
(5, 'Richard', 'Thomas', 'thomas.richard@etu.univ-amu.fr', 'AfKLio@', 'Je fais le code igniter mamene', 2, 2),
(6, 'Roux', 'Alexandre', 'alexandre.roux.2@etu.univ-amu.fr', 'MfhLgj', 'Plop.', 2, 1);
