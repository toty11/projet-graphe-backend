CREATE DATABASE dbgraphe;
USE dbgraphe;

CREATE TABLE etudiant(
    id_etudiant int NOT NULL AUTO_INCREMENT,
    prenom varchar(100),
    PRIMARY KEY (id_etudiant)
);

INSERT INTO etudiant (prenom) 
VALUES ("jean"),
("paola"),
("yves"),
("jacky");

CREATE TABLE notes(
    id int NOT NULL AUTO_INCREMENT,
    note int,
    matiere varchar(100),
    id_etudiant int,
    PRIMARY KEY (id),
    FOREIGN KEY (id_etudiant) REFERENCES etudiant(id_etudiant)
);

INSERT INTO notes (note,matiere,id_etudiant) 
VALUES 
(10,"Mathématiques",1),
(15,"Mathématiques",1),
(12,"Mathématiques",1),
(0,"Mathématiques",2),
(9,"Mathématiques",2),
(7,"Mathématiques",2),
(5,"Mathématiques",3),
(3,"Mathématiques",3),
(2,"Mathématiques",3),
(1,"Mathématiques",4),
(19,"Mathématiques",4),
(18,"Mathématiques",4),
(10,"SVT",1),
(11,"SVT",1),
(12,"SVT",1),
(13,"SVT",2),
(14,"SVT",2),
(17,"SVT",2),
(19,"SVT",3),
(2,"SVT",3),
(0,"SVT",3),
(19,"SVT",4),
(2,"SVT",4),
(0,"SVT",4),
(5,"Français",1),
(6,"Français",1),
(9,"Français",1),
(15,"Français",2),
(16,"Français",2),
(19,"Français",2),
(5,"Français",3),
(16,"Français",3),
(11,"Français",3),
(13,"Français",4),
(14,"Français",4),
(10,"Français",4);