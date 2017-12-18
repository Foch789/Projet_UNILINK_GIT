Create table promo
(
	id_promo int primary key,
	intitule_promo varchar(10)
);

Create table etudiant
(
	id_etudiant int primary key,
	nom_etu varchar(20),
	prenom_etu varchar(20),
	aidant int,
	email varchar(50),
	mdp varchar(20),
	description text,
	id_promo int,
	constraint FK_ETU_PROMO foreign key (id_promo) references promo (id_promo),
	constraint FK_AIDE foreign key (aidant) references etudiant(id_etudiant)
);

Create table competence
(
	id_comp int primary key,
	intitule_comp varchar(100)
);

Create table niveau
(
	niveau int,
	id_etudiant int,
	id_comp int,
	constraint FK_ETU_NIV foreign key (id_etudiant) references etudiant(id_etudiant),
	constraint FK_COMP_NIV foreign key (id_comp) references competence(id_comp)
);


Create table aide
(
	aidant boolean,
	demande_aide boolean,
	accepter boolean,
	id_etudiant int,
	id_comp int,
	constraint FK_ETU_AIDE foreign  key (id_etudiant) references etudiant(id_etudiant),
	constraint FK_COMP_AIDE foreign key (id_comp) references competence(id_comp)
);
