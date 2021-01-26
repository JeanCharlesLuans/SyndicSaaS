INSERT INTO utilisateur(NOM, PRENOM, ADRESSE, VILLE, CODE_POSTAL, TELEPHONE, MAIL, LOYER, MOT_DE_PASSE) VALUES  ('LUANS', 'Jean-Charles', '63 Rue des Sport', 'Salmiech', '12120', '063322114455', 'luans.jeancharles@gmail.com', '5000.25', 'azerty');
INSERT INTO utilisateur(NOM, PRENOM, ADRESSE, VILLE, CODE_POSTAL, TELEPHONE, MAIL, LOYER, MOT_DE_PASSE) VALUES ('DELMAS', 'Yanis', '8 Rue des Devs', 'RODEZ', '12000', '068822745455', 'yanis.delmas@iut-rodez.fr', '5874', 'azerty');
INSERT INTO utilisateur(NOM, PRENOM, ADRESSE, VILLE, CODE_POSTAL, TELEPHONE, MAIL, LOYER, MOT_DE_PASSE) VALUES ('FEUNOUILLOT', 'Tanguy', '74 Allée des Joueurs', 'Paris', '93000', '0674512568', 'tanguy.fenouillot@iut-rodez.Fr', '7512.33', 'azerty');
INSERT INTO utilisateur(NOM, PRENOM, ADRESSE, VILLE, CODE_POSTAL, TELEPHONE, MAIL, LOYER, MOT_DE_PASSE) VALUES ('HYVER', 'Florian', '95 Rue des Fleurs', 'Rodez', '12000', '0633487512', 'florian.hyver@iut-rodez.fr', '745.20', 'azerty');
INSERT INTO utilisateur(NOM, PRENOM, ADRESSE, VILLE, CODE_POSTAL, TELEPHONE, MAIL, LOYER, MOT_DE_PASSE) VALUES ('MILLET', 'Paul', '64 Rue des IHM', 'Rodez', '12000', '063322114455', 'paul.millet@iut-rodez.fr', '74211.5', 'azerty');

INSERT INTO administrateur(ID_UTILISATEUR) VALUES (1);

INSERT INTO gestionnaire (ID_UTILISATEUR) VALUES (2);
INSERT INTO gestionnaire (ID_UTILISATEUR) VALUES (3);


INSERT INTO coproprietaire (ID_UTILISATEUR) VALUES (4);
INSERT INTO coproprietaire (ID_UTILISATEUR) VALUES (5);

INSERT INTO copropriete (NOM, ADRESSE, COMPLEMENT_ADRESSE, VILLE, CODE_POSTAL) VALUES ('Rse des sables', '63 Rue des devs', '2eme etage', 'Rodez', '12120');


