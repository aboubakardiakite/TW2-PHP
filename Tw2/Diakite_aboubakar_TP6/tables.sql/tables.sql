-- Base de données: Cyclisme

-- --------------------------------------------------------
-- 
-- Structure de la table equipes
-- 

CREATE TABLE equipes (
  nom varchar(20),
  couleur varchar(10),
  directeur varchar(15),
  PRIMARY KEY (nom)
) ;

-- 
-- Contenu de la table equipes
-- 

INSERT INTO equipes VALUES ('PicsouBank', 'Or', 'Raymond');
INSERT INTO equipes VALUES ('SuperCarburant', 'Bleu', 'Ralph');
INSERT INTO equipes VALUES ('LavePlusBlanc', 'Gris', 'Roger');

-- 
-- Structure de la table coureurs
-- 

CREATE TABLE coureurs (
  dossard int,
  nom varchar(15) NOT NULL,
  equipe varchar(20),
  taille int,
  PRIMARY KEY (dossard),
  FOREIGN KEY (equipe) REFERENCES equipes(nom)
) ;

-- 
-- Contenu de la table coureurs
-- 

INSERT INTO coureurs VALUES (1, 'alain', 'LavePlusBlanc', 175);
INSERT INTO coureurs VALUES (2, 'alphonse', 'PicsouBank', 185);
INSERT INTO coureurs VALUES (3, 'germain', 'PicsouBank', 183);
INSERT INTO coureurs VALUES (4, 'théodule', 'SuperCarburant', 169);
INSERT INTO coureurs VALUES (5, 'albert', 'PicsouBank', 174);
INSERT INTO coureurs VALUES (6, 'louis', 'LavePlusBlanc', 184);
INSERT INTO coureurs VALUES (7, 'léon', 'SuperCarburant', 191);


