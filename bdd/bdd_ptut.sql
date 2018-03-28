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
	mdp_etu varchar(150),
	desc_etu text,
	id_promo int,
	constraint FK_ETU_PROMO foreign key (id_promo) references promo (id_promo) ON DELETE CASCADE
);

Create table competence
(
	id_comp serial primary key,
	id_promo serial,
	intitule_comp varchar(100),
	constraint FK_COMP_PROMO foreign key (id_promo) references promo (id_promo) ON DELETE CASCADE
);

Create table niveau
(
	niveau int,
	id_etu serial,
	id_comp serial,
	constraint FK_ETU_NIV foreign key (id_etu) references etudiant(id_etu) ON DELETE CASCADE,
	constraint FK_COMP_NIV foreign key (id_comp) references competence(id_comp) ON DELETE CASCADE
);


Create table aide
(
	aidant boolean,
	demande_aide boolean,
	accepter_aide boolean,
	id_aide serial,
	id_aidant serial,
	id_comp serial,
	constraint FK_ETU_AIDE foreign  key (id_aide) references etudiant(id_etu) ON DELETE CASCADE,
	constraint FK_ETU_AIDANT foreign  key (id_aidant) references etudiant(id_etu) ON DELETE CASCADE,
	constraint FK_COMP_AIDE foreign key (id_comp) references competence(id_comp) ON DELETE CASCADE
);


Create table enseignant
(
	id_ens serial primary key,
	nom_ens varchar(20),
	prenom_ens varchar(20),
	email_ens varchar(50),
	mdp_ens varchar(150)
);



INSERT INTO promo(intitule_promo)
VALUES ('INFO1'),
('INFO2'),
('MMI1'),
('MMI2'),
('Enseignant');


INSERT INTO competence(id_promo, intitule_comp)
VALUES
(1, 'Introduction aux systèmes informatiques'),
(1, 'Introduction à l algorithmique et a la programmation'),
(1, 'Structures de données et algorithmes fondamentaux'),
(1, 'Introduction aux bases de données'),
(1, 'Conception de documents et d interfaces numériques'),
(1, 'Mathématiques discrètes'),
(1, 'Algèbre linéaire'),
(1, 'Environnement économique'),
(1, 'Fonctionnement des organisations'),
(1, 'Expression - Communication - Fondamentaux de la communication'),
(1, 'Anglais et informatique'),
(1, 'PPP'),

(2, 'Probabilité et statistiques'),
(2, 'Principes des systèmes d exploitation'),
(2, 'Services Réseaux'),
(2, 'Algorithmique avancée'),
(2, 'Programmation web côté serveur'),
(2, 'Conception et programmation objet avancée'),
(2, 'Mathématiques pour la synthèse d images'),
(2, 'Droits des TIC'),
(2, 'Expression - Communication - Communication professionnelle'),
(2, 'Collaborer en anglais'),
(2, 'Méthodologie de la production d applications'),
(2, 'Ƥrojet tutoré - Mise en situation professionnelle'),
(2, 'PPP - Préciser son projet'),

(3, 'Mise a niveau HTML/CSS'),
(3, 'Intégration web'),
(3, 'Les différents types de communication'),
(3, 'Infographie'),
(3, 'Environnement Economique, Juridique et Mercatique des Organisation'),
(3, 'PPP'),
(3, 'Bases de données'),


(4, 'Programmation orientée objet'),
(4, 'Ecriture de Médias Numériques'),
(4, 'Modélisation 3D'),
(4, 'Réalisation de Contenus Audiovisuels'),
(4, 'Projet');





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
('Carter','Kimberly',true,'erat.eget.tincidunt@in.edu','I2m0I45Gla4xy598x','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer',2),
('Plop','Plop',true,'mail@mail.mail','Ireftsghfjg','Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 2);





INSERT INTO niveau(niveau,id_etu,id_comp)
VALUES (1,5,2),(2,6,4),(5,2,10),(1,1,3),(5,3,8),(1,3,3),(4,8,7),
(4,10,5),(2,6,10),(2,5,9),(2,2,8),(4,4,8),(5,2,9),(1,8,6),(3,5,6),
(1,4,9),(3,1,10),(1,10,6),(1,6,5),(3,4,7),(3,10,4),(3,7,5),(4,3,1),
(3,5,1),(5,8,5),(5,9,8),(5,4,1),(3,4,10),(1,8,10),(1,7,4),(4,4,4),
(2,1,9),(3,6,2),(4,2,5),(5,8,2),(4,3,4),(4,9,1),(1,2,3),(1,3,10),
(4,7,2),(1,2,7),(2,10,2),(1,1,7),(1,4,3),(4,1,2),(2,7,10),(3,2,1),
(4,9,6),(4,10,3),(3,5,5),(5,7,8),(3,10,1),(3,8,1),(4,3,7),(2,4,5),
(5, 11, 3), (5, 11, 9), (5, 11, 6);

INSERT INTO enseignant
VALUES (DEFAULT, 'Carmignac', 'Laurent', 'laurent.carmignac@mail.com', 'password');




INSERT INTO aide
VALUES (true, false, true, 1, 2, 3),
(true, false, false, 2, 11, 3),
(true, false, true, 3, 11, 3),
(true, false, false, 4, 11, 9),
(true, false, true, 5, 8, 2),
(true, false, true, 6, 4, 4),
(true, false, true, 7, 4, 4),
(true, false, true, 8, 9, 6),
(true, false, true, 9, 11, 9),
(true, false, true, 10, 11, 6);







create or replace function trigger_verif_aide() returns trigger as
$$
begin
    if new.aidant = true then
        if new.demande_aide = true and new.accepter_aide = true then
            raise exception 'Erreur: combinaison de booleens erronee';
        end if;
    else
        raise exception 'Erreur: combinaison de booleens erronee';
    end if;

    return new;
end;
$$
language plpgsql;


create trigger trigg_v_aide before insert or update on aide for each row execute procedure trigger_verif_aide();


create or replace function trigger_verif_aide() returns trigger as
$$
begin
    if new.aidant = true then
        if new.demande_aide = true and new.accepter_aide = true then
            raise exception 'Erreur: combinaison de booleens erronee';
        end if;
    else
        raise exception 'Erreur: combinaison de booleens erronee';
    end if;

    return new;
end;
$$
language plpgsql;


create trigger trigg_v_aide before insert or update on aide for each row execute procedure trigger_verif_aide();



