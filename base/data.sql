INSERT INTO Classe (intitule) VALUES ('Intermediaire');
INSERT INTO Classe (intitule) VALUES ('VIP');
INSERT INTO Classe (intitule) VALUES ('Moyen');

INSERT INTO Lieu (nom, longitude, latitude) VALUES ('Parking Ankorondrano', 47.529, -18.879);
INSERT INTO Lieu (nom, longitude, latitude) VALUES ('Parking Analakely', 47.524, -18.911);
INSERT INTO Lieu (nom, longitude, latitude) VALUES ('Parking Ambatobe', 47.540, -18.897);


INSERT INTO Parking (id_Classe, id_Lieu, nombre_place, prix, description) VALUES
(1, 1, 50, 15, 'Parking sécurisé avec surveillance 24h/24'),
(2, 2, 20, 20, 'Parking VIP avec services additionnels'),
(3, 3, 100, 30, 'Parking économique avec accès facile');

INSERT INTO Utilisateur (identifiant, mdp, status) VALUES
('user1@example.com',MD5('password123'),1),
('user2@example.com',MD5('password456'),0),
('user3@example.com',MD5('password789'),1);


INSERT INTO Accessproprietaire (id_Utilisateur,id_Parking) values (1,1);
INSERT INTO Accessproprietaire (id_Utilisateur,id_Parking) values (2,1);
INSERT INTO Accessproprietaire (id_Utilisateur,id_Parking) values (3,1);


INSERT INTO Place (numero_place, id_Parking, status) VALUES
(1, 1, 0), (2, 1, 1), (3, 1, 0),
(1, 2, 1), (2, 2, 0), (3, 2, 0),
(1, 3, 1), (2, 3, 1), (3, 3, 0);


INSERT INTO MouvementPlace (id_Parking, id_Place, matricule, date_Heure_MouvementPlace, status) VALUES
(1, 1, 'ABC1234', '2023-06-01 08:00:00', 1),
(2, 2, 'DEF5678', '2023-06-01 09:00:00', 1),
(3, 3, 'GHI9012', '2023-06-01 07:30:00', 1),

(1, 1, 'ABC1234', '2023-06-01 10:00:00',0),
(2, 2, 'DEF5678', '2023-06-01 12:00:00', 0),
(3, 3, 'GHI9012', '2023-06-01 08:30:00', 0),

(1, 6, 'DEF5678', '2023-05-01 12:00:00', 1),
(1, 4, 'GHI9012', '2023-04-01 08:30:00', 0),
(1, 2, 'DEF5678', '2023-02-01 12:00:00', 1);


INSERT INTO Paiement (id_Parking, matricule, montant, date_Paiement, numero_telephone, isReservation) VALUES
(1, 'ABC1234', 4000, '2023-06-01', '0341234567', 1),
(1, 'TBA2125', 4000, '2023-06-01', '0346724372', 1),
(2, 'DEF5678', 15000, '2023-06-01', '0347654321', 1),
(3, 'GHI9012', 1000, '2023-06-01', '0341122334', 0);
