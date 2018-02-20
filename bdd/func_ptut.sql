create or replace function ajout_etu(int id, varchar(20) nom, varchar(20) prenom) returns void as
$$
begin
	insert into etudiant
	values (id,nom, prenom)
end;
$$ language mysql