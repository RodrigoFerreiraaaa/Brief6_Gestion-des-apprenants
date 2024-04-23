#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Role
#------------------------------------------------------------

CREATE TABLE GA_ROLE(
        ID_ROLE  Int  Auto_increment  NOT NULL ,
        NOM_ROLE Varchar (255) NOT NULL
	,CONSTRAINT GA_ROLE_PK PRIMARY KEY (ID_ROLE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE GA_UTILISATEUR(
        ID_UTILISATEUR Int  Auto_increment  NOT NULL ,
        NOM            Varchar (255) NOT NULL ,
        PRENOM         Varchar (255) NOT NULL ,
        MOT_DE_PASSE   Varchar (255) NOT NULL ,
        COMPTE_ACTIF   Bool NOT NULL ,
        EMAIL          Varchar (255) NOT NULL ,
        ID_ROLE        Int NOT NULL
	,CONSTRAINT GA_UTILISATEUR_AK UNIQUE (EMAIL)
	,CONSTRAINT GA_UTILISATEUR_PK PRIMARY KEY (ID_UTILISATEUR)

	,CONSTRAINT GA_UTILISATEUR_GA_ROLE_FK FOREIGN KEY (ID_ROLE) REFERENCES GA_ROLE(ID_ROLE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Promo
#------------------------------------------------------------

CREATE TABLE GA_PROMO(
        ID_PROMO          Int  Auto_increment  NOT NULL ,
        NOM_PROMO         Varchar (255) NOT NULL ,
        DATE_DEBUT        Date NOT NULL ,
        DATE_FIN          Date NOT NULL ,
        NOMBRE_APPRENANTS Int NOT NULL
	,CONSTRAINT GA_PROMO_PK PRIMARY KEY (ID_PROMO)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Cours
#------------------------------------------------------------

CREATE TABLE GA_COURS(
        ID_COURS    Int  Auto_increment  NOT NULL ,
        NOM_COURS   Varchar (255) NOT NULL ,
        DEBUT_COURS Date NOT NULL ,
        FIN_COURS   Date NOT NULL ,
        CODE        Int NOT NULL ,
        ID_PROMO    Int NOT NULL
	,CONSTRAINT GA_COURS_PK PRIMARY KEY (ID_COURS)

	,CONSTRAINT GA_COURS_GA_PROMO_FK FOREIGN KEY (ID_PROMO) REFERENCES GA_PROMO(ID_PROMO)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Peut etre
#------------------------------------------------------------

CREATE TABLE PEUT_ETRE(
        ID_COURS       Int NOT NULL ,
        ID_UTILISATEUR Int NOT NULL ,
        RETARD         Bool NOT NULL ,
        ABSENT         Bool NOT NULL
	,CONSTRAINT PEUT_ETRE_PK PRIMARY KEY (ID_COURS,ID_UTILISATEUR)

	,CONSTRAINT PEUT_ETRE_GA_COURS_FK FOREIGN KEY (ID_COURS) REFERENCES GA_COURS(ID_COURS)
	,CONSTRAINT PEUT_ETRE_GA_UTILISATEUR0_FK FOREIGN KEY (ID_UTILISATEUR) REFERENCES GA_UTILISATEUR(ID_UTILISATEUR)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: appartient
#------------------------------------------------------------

CREATE TABLE APPARTIENT(
        ID_PROMO       Int NOT NULL ,
        ID_UTILISATEUR Int NOT NULL
	,CONSTRAINT APPARTIENT_PK PRIMARY KEY (ID_PROMO,ID_UTILISATEUR)

	,CONSTRAINT APPARTIENT_GA_PROMO_FK FOREIGN KEY (ID_PROMO) REFERENCES GA_PROMO(ID_PROMO)
	,CONSTRAINT APPARTIENT_GA_UTILISATEUR0_FK FOREIGN KEY (ID_UTILISATEUR) REFERENCES GA_UTILISATEUR(ID_UTILISATEUR)
)ENGINE=InnoDB;

