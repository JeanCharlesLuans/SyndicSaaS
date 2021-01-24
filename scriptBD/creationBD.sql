-- Création de la base de donnée
CREATE DATABASE syndicsaas;

-- Table utilisateur de l'application
CREATE TABLE UTILISATEUR 
(
	ID INT PRIMARY KEY NOT NULL,
	NOM VARCHAR(255) NOT NULL,
	PRENOM VARCHAR(255) NOT NULL,
	ADRESSE VARCHAR(255)	NOT NULL,
	COMPLEMENT_ADRESSE VARCHAR(255),
	VILLE VARCHAR(255) NOT NULL, 
	CODE_POSTAL VARCHAR(5) NOT NULL,
	TELEPHONE VARCHAR(255) NOT NULL,
	MAIL VARCHAR(255) NOT NULL,
	LOYER FLOAT(10,2) NOT NULL,
	MOT_DE_PASSE VARCHAR(255) NOT NULL
);

-- Table administrateur de l'application
CREATE TABLE ADMINISTRATEUR 
(
	ID INT PRIMARY KEY NOT NULL,
	ID_UTILISATEUR INT NOT NULL,
	CONSTRAINT FK_USER_ADMIN FOREIGN KEY (ID_UTILISATEUR) REFERENCES UTILISATEUR(ID)
);

-- Table gestionnaire d'une copropriété
CREATE TABLE GESTIONNAIRE 
(
	ID INT PRIMARY KEY NOT NULL,
	ID_UTILISATEUR INT NOT NULL,
	CONSTRAINT FK_USER_GESTIONNAIRE FOREIGN KEY (ID_UTILISATEUR) REFERENCES UTILISATEUR(ID)
);

-- Table Coproprietaire d'une copropriété
CREATE TABLE COPROPRIETAIRE
(
	ID INT PRIMARY KEY NOT NULL,
	ID_UTILISATEUR INT NOT NULL,
	CONSTRAINT FK_USER_COPROPRIETAIRE FOREIGN KEY (ID_UTILISATEUR) REFERENCES UTILISATEUR(ID)
);

-- Table coproprietaire d'une copropriété
CREATE TABLE COPROPRIETE
(
	ID INT PRIMARY KEY NOT NULL,
	NOM VARCHAR(255) NOT NULL,
	ADRESSE VARCHAR(255) NOT NULL,
	COMPLEMENT_ADRESSE VARCHAR(255) NOT NULL,
	VILLE VARCHAR(255) NOT NULL,
	CODE_POSTAL VARCHAR(5) NOT NULL
);

-- Table permettant de retarcer la liste des copropriétés d'un gestionnaire
CREATE TABLE LISTE_GESTIONNAIRE_COPROPRIETE
(
	ID_GESTIONNAIRE INT NOT NULL,
	ID_COPROPRIETE  INT NOT NULL,
	PRIMARY KEY(ID_GESTIONNAIRE, ID_COPROPRIETE),
	CONSTRAINT FK_LGC_GESTIONNAIRE FOREIGN KEY (ID_GESTIONNAIRE) REFERENCES GESTIONNAIRE(ID),
	CONSTRAINT FK_LGC_COPROPRIETE  FOREIGN KEY (ID_COPROPRIETE) REFERENCES COPROPRIETE(ID)
);

-- Table permettant de retarcer la liste des copropriétés d'un proprietaire
CREATE TABLE LISTE_COMPROPRIETAIRE_COPROPRIETE
(
	ID_COPROPRIETAIRE INT NOT NULL,
	ID_COPROPRIETE    INT NOT NULL,
	PRIMARY KEY(ID_COPROPRIETAIRE, ID_COPROPRIETE),
	CONSTRAINT FK_LCC_COPROPRIETAIRE FOREIGN KEY (ID_COPROPRIETAIRE) REFERENCES COPROPRIETAIRE(ID),
	CONSTRAINT FK_LCC_COPROPRIETE  FOREIGN KEY (ID_COPROPRIETE) REFERENCES COPROPRIETE(ID)
);