Create table promo
(
	id_promo serial primary key,
	intitule_promo varchar(10)
);

Create table etudiant
(
	id_etu serial primary key,
	nom_etu varchar(20),
	prenom_etu varchar(20),
	aidant_etu int,
	email_etu varchar(50),
	mdp_etu varchar(20),
	desc_etu text,
	id_promo int,
	constraint FK_ETU_PROMO foreign key (id_promo) references promo (id_promo),
	constraint FK_AIDE foreign key (aidant_etu) references etudiant(id_etu)
);

Create table competence #rajouter promo pour chaque competence: INFO2, MMI1, etc...
(
	id_comp serial primary key,
	intitule_comp varchar(100)
);

Create table niveau
(
	niveau int,
	id_etu serial,
	id_comp serial,
	constraint FK_ETU_NIV foreign key (id_etu) references etudiant(id_etu),
	constraint FK_COMP_NIV foreign key (id_comp) references competence(id_comp)
);


Create table aide
(
	aidant boolean,
	demande_aide boolean,
	accepter_aide boolean,
	id_aide serial,
	id_aidant serial,
	id_comp serial,
	constraint FK_ETU_AIDE foreign  key (id_aide) references etudiant(id_etu),
	constraint FK_ETU_AIDANT foreign  key (id_aidant) references etudiant(id_etu),
	constraint FK_COMP_AIDE foreign key (id_comp) references competence(id_comp)
);
