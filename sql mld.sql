#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Film
#------------------------------------------------------------

CREATE TABLE Film(
        id_film        Int  Auto_increment  NOT NULL ,
        Titre          Varchar (50) NOT NULL ,
        Affiche        Varchar (50) NOT NULL ,
        Synopsis       Varchar (1000) NOT NULL ,
        Duree          Time NOT NULL ,
        Date_de_sortie Date NOT NULL ,
        Note           Double NOT NULL ,
        BA             Varchar (50) NOT NULL
	,CONSTRAINT Film_PK PRIMARY KEY (id_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Acteur
#------------------------------------------------------------

CREATE TABLE Acteur(
        id_acteur Int  Auto_increment  NOT NULL ,
        Nom       Varchar (50) NOT NULL ,
        Prenom    Varchar (50) NOT NULL
	,CONSTRAINT Acteur_PK PRIMARY KEY (id_acteur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Realisateur
#------------------------------------------------------------

CREATE TABLE Realisateur(
        id_realisateur Int  Auto_increment  NOT NULL ,
        Nom            Varchar (50) NOT NULL ,
        Prenom         Varchar (50) NOT NULL
	,CONSTRAINT Realisateur_PK PRIMARY KEY (id_realisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Genre
#------------------------------------------------------------

CREATE TABLE Genre(
        id_genre Int  Auto_increment  NOT NULL ,
        genre    Varchar (50) NOT NULL
	,CONSTRAINT Genre_PK PRIMARY KEY (id_genre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Producteur
#------------------------------------------------------------

CREATE TABLE Producteur(
        id_producteur Int  Auto_increment  NOT NULL ,
        Nom           Varchar (50) NOT NULL ,
        Prenom        Varchar (50) NOT NULL
	,CONSTRAINT Producteur_PK PRIMARY KEY (id_producteur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TypeUser
#------------------------------------------------------------

CREATE TABLE TypeUser(
        id_typeuser Int  Auto_increment  NOT NULL ,
        type        Varchar (50) NOT NULL
	,CONSTRAINT TypeUser_PK PRIMARY KEY (id_typeuser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        id_user     Int  Auto_increment  NOT NULL ,
        Nom         Varchar (50) NOT NULL ,
        Prenom      Varchar (50) NOT NULL ,
        Pseudo      Varchar (50) NOT NULL ,
        Mdp         Varchar (50) NOT NULL ,
        Mail        Varchar (50) NOT NULL ,
        id_typeuser Int NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (id_user)

	,CONSTRAINT User_TypeUser_FK FOREIGN KEY (id_typeuser) REFERENCES TypeUser(id_typeuser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: jouer
#------------------------------------------------------------

CREATE TABLE jouer(
        id_acteur Int NOT NULL ,
        id_film   Int NOT NULL
	,CONSTRAINT jouer_PK PRIMARY KEY (id_acteur,id_film)

	,CONSTRAINT jouer_Acteur_FK FOREIGN KEY (id_acteur) REFERENCES Acteur(id_acteur)
	,CONSTRAINT jouer_Film0_FK FOREIGN KEY (id_film) REFERENCES Film(id_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: est2
#------------------------------------------------------------

CREATE TABLE est2(
        id_genre Int NOT NULL ,
        id_film  Int NOT NULL
	,CONSTRAINT est2_PK PRIMARY KEY (id_genre,id_film)

	,CONSTRAINT est2_Genre_FK FOREIGN KEY (id_genre) REFERENCES Genre(id_genre)
	,CONSTRAINT est2_Film0_FK FOREIGN KEY (id_film) REFERENCES Film(id_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: favoris
#------------------------------------------------------------

CREATE TABLE favoris(
        id_film Int NOT NULL ,
        id_user Int NOT NULL
	,CONSTRAINT favoris_PK PRIMARY KEY (id_film,id_user)

	,CONSTRAINT favoris_Film_FK FOREIGN KEY (id_film) REFERENCES Film(id_film)
	,CONSTRAINT favoris_User0_FK FOREIGN KEY (id_user) REFERENCES User(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: produire
#------------------------------------------------------------

CREATE TABLE produire(
        id_producteur Int NOT NULL ,
        id_film       Int NOT NULL
	,CONSTRAINT produire_PK PRIMARY KEY (id_producteur,id_film)

	,CONSTRAINT produire_Producteur_FK FOREIGN KEY (id_producteur) REFERENCES Producteur(id_producteur)
	,CONSTRAINT produire_Film0_FK FOREIGN KEY (id_film) REFERENCES Film(id_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: realiser
#------------------------------------------------------------

CREATE TABLE realiser(
        id_realisateur Int NOT NULL ,
        id_film        Int NOT NULL
	,CONSTRAINT realiser_PK PRIMARY KEY (id_realisateur,id_film)

	,CONSTRAINT realiser_Realisateur_FK FOREIGN KEY (id_realisateur) REFERENCES Realisateur(id_realisateur)
	,CONSTRAINT realiser_Film0_FK FOREIGN KEY (id_film) REFERENCES Film(id_film)
)ENGINE=InnoDB;

