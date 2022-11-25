/* STORY 3-1 */

UPDATE utilisateur
SET password = "new password"
WHERE id = 1;

/* STORY 3-2 */

UPDATE utilisateur
SET email = "jm2@gmail.com"
WHERE id = 1 AND password = "new password";

/* Story 4 */

SELECT * FROM utilisateur WHERE email = "jmf@mail.com" AND password = "azerty";

/* Story 5 */

INSERT INTO jeu (id, nom_jeu)
VALUES (NULL, "The power Of Memory");

/* Story 6 */

SELECT nom_jeu, pseudo, score, niveau FROM jeu
INNER JOIN score ON id_jeu = jeu.id
INNER JOIN utilisateur ON id_joueur = utilisateur.id
ORDER BY nom_jeu DESC;

/* Story 7 */

SELECT jeu.Nom_du_jeu, utilisateur.Pseudo, score.Difficulte_de_la_partie, score.Score_de_la_partie
FROM score
INNER JOIN jeu ON score.id_jeu = jeu.id 
INNER JOIN utilisateur ON utilisateur.id = score.id_joueur
ORDER BY jeu.Nom_du_jeu , score.Difficulte_de_la_partie, score.Score_de_la_partie

/* Story 8 */

/* Si existe */

UPDATE score
SET Score_de_la_partie = '12345' AND Date_heure_partie = NOW()
WHERE id = id_joueur

/* Si existe pas */

INSERT INTO score (Identifiant_du_joueur, Identifiant_du_jeu, Difficulte_de_la_partie, Score_de_la_partie, Date_et_heure_de_la_partie) 
VALUES (idUser, gameID, GameDifficulty, 'NouveauScore', NOW());

/* Story 9 */

INSERT INTO `Message` (`Identifiant`, `Identifiant_du_jeu`, `Identifiant_de_expéditeur`, `Message`, `Date_et_heure_du_message`) VALUES (NULL, GameID, UserID, MessageUser, NOW());

/* Story 10 */

SELECT Message.Identifiant_de_expediteur , Message.Message, Message.Date_et_heure_du_message
FROM Message 
WHERE Message.Date_et_heure_du_message >= NOW() - INTERVAL 1 DAY;
ORDER BY Date_et_heure_du_message