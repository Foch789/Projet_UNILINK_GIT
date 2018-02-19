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
	aidant_etu boolean default false,
	email_etu varchar(50),
	mdp_etu varchar(20),
	desc_etu text,
	id_promo int,
	constraint FK_ETU_PROMO foreign key (id_promo) references promo (id_promo)
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



insert into competence(intitule_comp)
values ('PHP'),
('C++'),
('Mathematiques'),
('Moteurs_3D'),
('Algorithmique'),
('Web'),
('Systeme'),
('Anglais'),
('PPP'),
('Communication');


insert into promo(intitule_promo)
values ('INFO1'),
('INFO2'),
('MMI1'),
('MMI2');


INSERT INTO etudiant(nom_etu,prenom_etu,aidant_etu,email_etu,mdp_etu,desc_etu,id_promo)
VALUES ('Mccormick','Hiram',DEFAULT,'pretium.aliquet@feugiat.com','X5J5D79hkZ8sL726w','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur',3),
('Cash','Bethany',true,'libero.Donec.consectetuer@elitCurabitursed.co.uk','D1V0f46wTH9FI016K','Lorem ipsum dolor sit amet, consectetuer',4),
('Chang','Alika',true,'accumsan.interdum@sit.org','H9t2o24WGN5KQ375k','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu',2),
('Shaffer','Elvis',true,'tempor.diam.dictum@dapibus.co.uk','g6y4R07ukW8kG511O','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.',4),
('Barnett','Ulric',true,'quis.lectus.Nullam@nonenimcommodo.ca','b2z7I96HjT0NL721e','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam',3),
('Collier','Connor',true,'eget.mollis.lectus@Mauris.co.uk','a6s0w30olt7qs069a','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec',2),
('Morrow','Montana',true,'ullamcorper.eu@sollicitudin.co.uk','P0n2V15IyQ9hT240G','Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',2),
('Moon','Lavinia',true,'per.inceptos.hymenaeos@sollicitudin.org','h5T7s50XNG7mq867n','Lorem ipsum dolor sit amet, consectetuer adipiscing',2),
('Reese','Matthew',true,'malesuada.fringilla.est@lacusvarius.net','E2J6l60UnV5ph891E','Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',1),
('Carter','Kimberly',true,'erat.eget.tincidunt@in.edu','I2m0I45Gla4xy598x','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer',2);


INSERT INTO niveau(niveau,id_etu,id_comp)
VALUES (1,5,2),(2,6,4),(5,2,10),(1,1,3),(5,3,8),(1,3,3),(4,8,7),
(4,10,5),(2,6,10),(2,5,9),(2,2,8),(4,4,8),(5,2,9),(1,8,6),(3,5,6),
(1,4,9),(3,1,10),(1,10,6),(1,6,5),(3,4,7),(3,10,4),(3,7,5),(4,3,1),
(3,5,1),(5,8,5),(5,9,8),(5,4,1),(3,4,10),(1,8,10),(1,7,4),(4,4,4),
(2,1,9),(3,6,2),(4,2,5),(5,8,2),(4,3,4),(4,9,1),(1,2,3),(1,3,10),
(4,7,2),(1,2,7),(2,10,2),(1,1,7),(1,4,3),(4,1,2),(2,7,10),(3,2,1),
(4,9,6),(4,10,3),(3,5,5),(5,7,8),(3,10,1),(3,8,1),(4,3,7),(2,4,5);

