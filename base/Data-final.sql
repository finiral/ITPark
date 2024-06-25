---Insertion 3 classe
INSERT INTO Classe (intitule) VALUES
('Moyen'),
('Intermediaire'),
('VIP');

INSERT INTO Lieu (nom, longitude, latitude) VALUES 
('Parking Ankorondrano', 47.529, -18.879),
('Parking Analakely', 47.524, -18.911),
('Parking Ambatobe', 48.540, -18.897),
('Parking Antanimena', 47.530, -18.900),
('Parking Behoririka', 47.125, -15.782),
('Parking Mahamasina', 46.222, -14.913),
('Parking Andavamamba', 47.518, -18.917),
('Parking Ambohijatovo', 47.522, -18.916),
('Parking 67 Ha', 46.400, -14.800),
('Parking Itaosy', 28.470, -15.954);

-- Insertion de 10 données dans la table Parking 
INSERT INTO Parking (id_Classe, id_Lieu, nombre_place, prix, description) VALUES
(1, 1, 50, 10000.00, 'Parking central 1'),
(1, 2, 100, 12000.00, 'Parking central 2'),
(2, 3, 75, 15000, 'Parking nord 1'),
(2, 4, 60, 8000, 'Parking nord 2'),
(3, 5, 90, 12000, 'Parking sud 1'),
(3, 6, 110, 12000, 'Parking sud 2'),
(1, 7, 120, 15500, 'Parking ouest 1'),
(1, 8, 70, 20000, 'Parking ouest 2'),
(2, 9, 80, 10000.00, 'Parking est 1'),
(2, 10, 85, 13000.00, 'Parking est 2');

INSERT INTO Place (numero_place, id_Parking, status) VALUES
---1 parking
(1, 1, 0),(2, 1, 0),(3, 1, 0),(4, 1, 0),(5, 1, 0),(6, 1, 0),(7, 1, 0),(8, 1, 0),(9, 1, 0),(10, 1, 0),
(11, 1, 0),(12, 1, 0),(13, 1, 0),(14, 1, 0),(15, 1, 0),(16, 1, 0),(17, 1, 0),(18, 1, 0),(19, 1, 0),(20, 1, 0),
(21, 1, 0),(22, 1, 0),(23, 1, 0),(24, 1, 0),(25, 1, 0),(26, 1, 0),(27, 1, 0),(28, 1, 0),(29, 1, 0),(30, 1, 0),

---2 parking
(1, 2, 0),(2, 2, 0),(3, 2, 0),(4, 2, 0),(5, 2, 0),(6, 2, 0),(7, 2, 0),(8, 2, 0),(9, 2, 0),(10, 2, 0),
(11, 2, 0),(12, 2, 0),(13, 2, 0),(14, 2, 0),(15, 2, 0),(16, 2, 0),(17, 2, 0),(18, 2, 0),(19, 2, 0),(20, 2, 0),
(21, 2, 0),(22, 2, 0),(23, 2, 0),(24, 2, 0),(25, 2, 0),(26, 2, 0),(27, 2, 0),(28, 2, 0),(29, 2, 0),(30, 2, 0),

---3 parking
(1, 3, 0),(3, 3, 0),(3, 3, 0),(4, 3, 0),(5, 3, 0),(6, 3, 0),(7, 3, 0),(8, 3, 0),(9, 3, 0),(10, 3, 0),
(11, 3, 0),(12, 3, 0),(13, 3, 0),(14, 3, 0),(15, 3, 0),(16, 3, 0),(17, 3, 0),(18, 3, 0),(19, 3, 0),(20, 3, 0),
(21, 3, 0),(22, 3, 0),(23, 3, 0),(24, 3, 0),(25, 3, 0),(26, 3, 0),(27, 3, 0),(28, 3, 0),(29, 3, 0),(30, 3, 0),

---4 parking
(1, 4, 0),(4, 4, 0),(3, 4, 0),(4, 4, 0),(5, 4, 0),(6, 4, 0),(7, 4, 0),(8, 4, 0),(9, 4, 0),(10, 4, 0),
(11, 4, 0),(12, 4, 0),(13, 4, 0),(14, 4, 0),(15, 4, 0),(16, 4, 0),(17, 4, 0),(18, 4, 0),(19, 4, 0),(20, 4, 0),
(21, 4, 0),(22, 4, 0),(23, 4, 0),(24, 4, 0),(25, 4, 0),(26, 4, 0),(27, 4, 0),(28, 4, 0),(29, 4, 0),(30, 4, 0),


---5 parking
(1, 5, 0),(2, 5, 0),(3, 5, 0),(4, 5, 0),(5, 5, 0),(6, 5, 0),(7, 5, 0),(8, 5, 0),(9, 5, 0),(10, 5, 0),
(11, 5, 0),(12, 5, 0),(13, 5, 0),(14, 5, 0),(15, 5, 0),(16, 5, 0),(17, 5, 0),(18, 5, 0),(19, 5, 0),(20, 5, 0),
(21, 5, 0),(22, 5, 0),(23, 5, 0),(24, 5, 0),(25, 5, 0),(26, 5, 0),(27, 5, 0),(28, 5, 0),(29, 5, 0),(30, 5, 0),

---6 parking
(1, 6, 0),(2, 6, 0),(3, 6, 0),(4, 6, 0),(5, 6, 0),(6, 6, 0),(7, 6, 0),(8, 6, 0),(9, 6, 0),(10, 6, 0),
(11, 6, 0),(12, 6, 0),(13, 6, 0),(14, 6, 0),(15, 6, 0),(16, 6, 0),(17, 6, 0),(18, 6, 0),(19, 6, 0),(20, 6, 0),
(21, 6, 0),(22, 6, 0),(23, 6, 0),(24, 6, 0),(25, 6, 0),(26, 6, 0),(27, 6, 0),(28, 6, 0),(29, 6, 0),(30, 6, 0),

---7 parking
(1, 7, 0),(2, 7, 0),(3, 7, 0),(4, 7, 0),(5, 7, 0),(6, 7, 0),(7, 7, 0),(8, 7, 0),(9, 7, 0),(10, 7, 0),
(11, 7, 0),(12, 7, 0),(13, 7, 0),(14, 7, 0),(15, 7, 0),(16, 7, 0),(17, 7, 0),(18, 7, 0),(19, 7, 0),(20, 7, 0),
(21, 7, 0),(22, 7, 0),(23, 7, 0),(24, 7, 0),(25, 7, 0),(26, 7, 0),(27, 7, 0),(28, 7, 0),(29, 7, 0),(30, 7, 0),

---8 parking
(1, 8, 0),(2, 8, 0),(3, 8, 0),(4, 8, 0),(5, 8, 0),(6, 8, 0),(7, 8, 0),(8, 8, 0),(9, 8, 0),(10, 8, 0),
(11, 8, 0),(12, 8, 0),(13, 8, 0),(14, 8, 0),(15, 8, 0),(16, 8, 0),(17, 8, 0),(18, 8, 0),(19, 8, 0),(20, 8, 0),
(21, 8, 0),(22, 8, 0),(23, 8, 0),(24, 8, 0),(25, 8, 0),(26, 8, 0),(27, 8, 0),(28, 8, 0),(29, 8, 0),(30, 8, 0),

---9 parking
(1, 9, 0),(2, 9, 0),(3, 9, 0),(4, 9, 0),(5, 9, 0),(6, 9, 0),(7, 9, 0),(8, 9, 0),(9, 9, 0),(10, 9, 0),
(11, 9, 0),(12, 9, 0),(13, 9, 0),(14, 9, 0),(15, 9, 0),(16, 9, 0),(17, 9, 0),(18, 9, 0),(19, 9, 0),(20, 9, 0),
(21, 9, 0),(22, 9, 0),(23, 9, 0),(24, 9, 0),(25, 9, 0),(26, 9, 0),(27, 9, 0),(28, 9, 0),(29, 9, 0),(30, 9, 0),

---10 parking
(1, 10, 0),(2, 10, 0),(3, 10, 0),(4, 10, 0),(5, 10, 0),(6, 10, 0),(7, 10, 0),(8, 10, 0),(9, 10, 0),(10, 10, 0),
(11, 10, 0),(12, 10, 0),(13, 10, 0),(14, 10, 0),(15, 10, 0),(16, 10, 0),(17, 10, 0),(18, 10, 0),(19, 10, 0),(20, 10, 0),
(21, 10, 0),(22, 10, 0),(23, 10, 0),(24, 10, 0),(25, 10, 0),(26, 10, 0),(27, 10, 0),(28, 10, 0),(29, 10, 0),(30, 10, 0);



-- Insertion de 3 données de propriétaires 
INSERT INTO Utilisateur (identifiant, mdp, status) VALUES
('proprietaire2', 'mdp1', 1),
('proprietaire2', 'mdp2', 1),
('proprietaire3', 'mdp3', 1);

INSERT INTO Accessproprietaire (id_Utilisateur, id_Parking) VALUES
(1, 1),
(2, 2),
(3, 3);

-- Insertion de 1 donnée d'admin dans la table Utilisateur
INSERT INTO Utilisateur (identifiant, mdp, status) VALUES
('admin1@gmail.com', 'adminmdp', 2);

-- Insertion de 20 données de gardiens dans la table Utilisateur et Mouvementgardien
INSERT INTO Utilisateur (identifiant, mdp, status) VALUES
('gardien1@gmail.com', 'mdpg1', 0),
('gardien2@gmail.com', 'mdpg2', 0),
('gardien3@gmail.com', 'mdpg3', 0),
('gardien4@gmail.com', 'mdpg4', 0),
('gardien5@gmail.com', 'mdpg5', 0),
('gardien6@gmail.com', 'mdpg6', 0),
('gardien7@gmail.com', 'mdpg7', 0),
('gardien8@gmail.com', 'mdpg8', 0),
('gardien9@gmail.com', 'mdpg9', 0),
('gardien10@gmail.com', 'mdpg10', 0),
('gardien11@gmail.com', 'mdpg11', 0),
('gardien12@gmail.com', 'mdpg12', 0),
('gardien13@gmail.com', 'mdpg13', 0),
('gardien14@gmail.com', 'mdpg14', 0),
('gardien15@gmail.com', 'mdpg15', 0),
('gardien16@gmail.com', 'mdpg16', 0),
('gardien17@gmail.com', 'mdpg17', 0),
('gardien18@gmail.com', 'mdpg18', 0),
('gardien19@gmail.com', 'mdpg19', 0),
('gardien20@gmail.com', 'mdpg20', 0);

INSERT INTO Mouvementgardien (id_Utilisateur, id_Parking, Date_Mouvementgardien) VALUES
(4, 1, '2023-06-01'),
(5, 2, '2023-06-02'),
(6, 3, '2023-06-03'),
(7, 4, '2023-06-04'),
(8, 5, '2023-06-05'),
(9, 6, '2023-06-06'),
(10, 7, '2023-06-07'),
(11, 8, '2023-06-08'),
(12, 9, '2023-06-09'),
(13, 10, '2023-06-10'),
(14, 1, '2023-06-11'),
(15, 2, '2023-06-12'),
(16, 3, '2023-06-13'),
(17, 4, '2023-06-14'),
(18, 5, '2023-06-15'),
(19, 6, '2023-06-16'),
(20, 7, '2023-06-17'),
(21, 8, '2023-06-18'),
(22, 9, '2023-06-19'),
(23, 10, '2023-06-20');

INSERT INTO Paiement (id_Parking, matricule, montant, date_Paiement, numero_telephone, isReservation) VALUES
-- Janvier
(1, '123ABC1', 10500.00, '2021-01-01', '123456789012', 1),
(2, '123ABC2', 11500.00, '2021-01-01', '123456789012', 1),
(3, '123ABC3', 12500.50, '2021-01-01', '123456789012', 0),
(4, '123ABC4', 13000.00, '2021-01-01', '123456789012', 1),
(5, '123ABC5', 14000.00, '2021-01-01', '123456789012', 0),
(1, '456DEF1', 15000.50, '2021-01-15', '123456789012', 1),
(2, '456DEF2', 15500.00, '2021-01-15', '123456789012', 1),
(3, '456DEF3', 16000.50, '2021-01-15', '123456789012', 0),
(4, '456DEF4', 16500.00, '2021-01-15', '123456789012', 1),
(5, '456DEF5', 17000.00, '2021-01-15', '123456789012', 0),
-- Février
(1, '789GHI1', 17500.00, '2021-02-01', '123456789012', 1),
(2, '789GHI2', 18000.00, '2021-02-01', '123456789012', 1),
(3, '789GHI3', 18500.50, '2021-02-01', '123456789012', 0),
(4, '789GHI4', 19000.00, '2021-02-01', '123456789012', 1),
(5, '789GHI5', 19500.00, '2021-02-01', '123456789012', 0),
(1, '321JKL1', 20000.50, '2021-02-15', '123456789012', 1),
(2, '321JKL2', 20500.00, '2021-02-15', '123456789012', 1),
(3, '321JKL3', 21000.50, '2021-02-15', '123456789012', 0),
(4, '321JKL4', 21500.00, '2021-02-15', '123456789012', 1),
(5, '321JKL5', 22000.00, '2021-02-15', '123456789012', 0),
-- Mars
(1, '654MNO1', 22500.00, '2021-03-01', '123456789012', 1),
(2, '654MNO2', 23000.00, '2021-03-01', '123456789012', 1),
(3, '654MNO3', 23500.50, '2021-03-01', '123456789012', 0),
(4, '654MNO4', 24000.00, '2021-03-01', '123456789012', 1),
(5, '654MNO5', 24500.00, '2021-03-01', '123456789012', 0),
(1, '987PQR1', 25000.50, '2021-03-15', '123456789012', 1),
(2, '987PQR2', 25500.00, '2021-03-15', '123456789012', 1),
(3, '987PQR3', 26000.50, '2021-03-15', '123456789012', 0),
(4, '987PQR4', 26500.00, '2021-03-15', '123456789012', 1),
(5, '987PQR5', 27000.00, '2021-03-15', '123456789012', 0),
-- Avril
(1, '741STU1', 27500.00, '2021-04-01', '123456789012', 1),
(2, '741STU2', 28000.00, '2021-04-01', '123456789012', 1),
(3, '741STU3', 28500.50, '2021-04-01', '123456789012', 0),
(4, '741STU4', 29000.00, '2021-04-01', '123456789012', 1),
(5, '741STU5', 29500.00, '2021-04-01', '123456789012', 0),
(1, '852VWX1', 30000.50, '2021-04-15', '123456789012', 1),
(2, '852VWX2', 30500.00, '2021-04-15', '123456789012', 1),
(3, '852VWX3', 31000.50, '2021-04-15', '123456789012', 0),
(4, '852VWX4', 31500.00, '2021-04-15', '123456789012', 1),
(5, '852VWX5', 32000.00, '2021-04-15', '123456789012', 0),
-- Mai
(1, '963YZA1', 32500.00, '2021-05-01', '123456789012', 1),
(2, '963YZA2', 33000.00, '2021-05-01', '123456789012', 1),
(3, '963YZA3', 33500.50, '2021-05-01', '123456789012', 0),
(4, '963YZA4', 34000.00, '2021-05-01', '123456789012', 1),
(5, '963YZA5', 34500.00, '2021-05-01', '123456789012', 0),
(1, '147BCD1', 35000.50, '2021-05-15', '123456789012', 1),
(2, '147BCD2', 35500.00, '2021-05-15', '123456789012', 1),
(3, '147BCD3', 36000.50, '2021-05-15', '123456789012', 0),
(4, '147BCD4', 36500.00, '2021-05-15', '123456789012', 1),
(5, '147BCD5', 37000.00, '2021-05-15', '123456789012', 0),
-- Juin
(1, '258EFG1', 37500.00, '2021-06-01', '123456789012', 1),
(2, '258EFG2', 38000.00, '2021-06-01', '123456789012', 1),
(3, '258EFG3', 38500.50, '2021-06-01', '123456789012', 0),
(4, '258EFG4', 39000.00, '2021-06-01', '123456789012', 1),
(5, '258EFG5', 39500.00, '2021-06-01', '123456789012', 0),
(1, '369HIJ1', 40000.50, '2021-06-15', '123456789012', 1),
(2, '369HIJ2', 40500.00, '2021-06-15', '123456789012', 1),
(3, '369HIJ3', 41000.50, '2021-06-15', '123456789012', 0),
(4, '369HIJ4', 41500.00, '2021-06-15', '123456789012', 1),
(5, '369HIJ5', 42000.00, '2021-06-15', '123456789012', 0),
-- Juillet
(1, '471KLM1', 42500.00, '2021-07-01', '123456789012', 1),
(2, '471KLM2', 43000.00, '2021-07-01', '123456789012', 1),
(3, '471KLM3', 43500.50, '2021-07-01', '123456789012', 0),
(4, '471KLM4', 44000.00, '2021-07-01', '123456789012', 1),
(5, '471KLM5', 44500.00, '2021-07-01', '123456789012', 0),
(1, '582NOP1', 45000.50, '2021-07-15', '123456789012', 1),
(2, '582NOP2', 45500.00, '2021-07-15', '123456789012', 1),
(3, '582NOP3', 46000.50, '2021-07-15', '123456789012', 0),
(4, '582NOP4', 46500.00, '2021-07-15', '123456789012', 1),
(5, '582NOP5', 47000.00, '2021-07-15', '123456789012', 0),
-- Août
(1, '693QRS1', 47500.00, '2021-08-01', '123456789012', 1),
(2, '693QRS2', 48000.00, '2021-08-01', '123456789012', 1),
(3, '693QRS3', 48500.50, '2021-08-01', '123456789012', 0),
(4, '693QRS4', 49000.00, '2021-08-01', '123456789012', 1),
(5, '693QRS5', 49500.00, '2021-08-01', '123456789012', 0),
(1, '714TUV1', 50000.50, '2021-08-15', '123456789012', 1),
(2, '714TUV2', 50500.00, '2021-08-15', '123456789012', 1),
(3, '714TUV3', 51000.50, '2021-08-15', '123456789012', 0),
(4, '714TUV4', 51500.00, '2021-08-15', '123456789012', 1),
(5, '714TUV5', 52000.00, '2021-08-15', '123456789012', 0),
-- Septembre
(1, '825WXY1', 52500.00, '2021-09-01', '123456789012', 1),
(2, '825WXY2', 53000.00, '2021-09-01', '123456789012', 1),
(3, '825WXY3', 53500.50, '2021-09-01', '123456789012', 0),
(4, '825WXY4', 54000.00, '2021-09-01', '123456789012', 1),
(5, '825WXY5', 54500.00, '2021-09-01', '123456789012', 0),
(1, '936ZAB1', 55000.50, '2021-09-15', '123456789012', 1),
(2, '936ZAB2', 55500.00, '2021-09-15', '123456789012', 1),
(3, '936ZAB3', 56000.50, '2021-09-15', '123456789012', 0),
(4, '936ZAB4', 56500.00, '2021-09-15', '123456789012', 1),
(5, '936ZAB5', 57000.00, '2021-09-15', '123456789012', 0),
-- Octobre
(1, '147CDE1', 57500.00, '2021-10-01', '123456789012', 1),
(2, '147CDE2', 58000.00, '2021-10-01', '123456789012', 1),
(3, '147CDE3', 58500.50, '2021-10-01', '123456789012', 0),
(4, '147CDE4', 59000.00, '2021-10-01', '123456789012', 1),
(5, '147CDE5', 59500.00, '2021-10-01', '123456789012', 0),
(1, '258FGH1', 60000.50, '2021-10-15', '123456789012', 1),
(2, '258FGH2', 60500.00, '2021-10-15', '123456789012', 1),
(3, '258FGH3', 61000.50, '2021-10-15', '123456789012', 0),
(4, '258FGH4', 61500.00, '2021-10-15', '123456789012', 1),
(5, '258FGH5', 62000.00, '2021-10-15', '123456789012', 0),
-- Novembre
(1, '369HIJ1', 62500.00, '2021-11-01', '123456789012', 1),
(2, '369HIJ2', 63000.00, '2021-11-01', '123456789012', 1),
(3, '369HIJ3', 63500.50, '2021-11-01', '123456789012', 0),
(4, '369HIJ4', 64000.00, '2021-11-01', '123456789012', 1),
(5, '369HIJ5', 64500.00, '2021-11-01', '123456789012', 0),
(1, '471KLM1', 65000.50, '2021-11-15', '123456789012', 1),
(2, '471KLM2', 65500.00, '2021-11-15', '123456789012', 1),
(3, '471KLM3', 66000.50, '2021-11-15', '123456789012', 0),
(4, '471KLM4', 66500.00, '2021-11-15', '123456789012', 1),
(5, '471KLM5', 67000.00, '2021-11-15', '123456789012', 0),
-- Décembre
(1, '582NOP1', 67500.00, '2021-12-01', '123456789012', 1),
(2, '582NOP2', 68000.00, '2021-12-01', '123456789012', 1),
(3, '582NOP3', 68500.50, '2021-12-01', '123456789012', 0),
(4, '582NOP4', 69000.00, '2021-12-01', '123456789012', 1),
(5, '582NOP5', 69500.00, '2021-12-01', '123456789012', 0),
(1, '693QRS1', 70000.50, '2021-12-15', '123456789012', 1),
(2, '693QRS2', 70500.00, '2021-12-15', '123456789012', 1),
(3, '693QRS3', 71000.50, '2021-12-15', '123456789012', 0),
(4, '693QRS4', 71500.00, '2021-12-15', '123456789012', 1),
(5, '693QRS5', 72000.00, '2021-12-15', '123456789012', 0);



INSERT INTO Paiement (id_Parking, matricule, montant, date_Paiement, numero_telephone, isReservation)
VALUES 
    -- Pour '2022-01-15'
    (1, 'MNO345', 8300.00, '2022-01-15', '0341234810', 1),
    (2, 'PQR456', 9200.00, '2022-01-15', '0381234811', 0),
    (3, 'STU567', 7800.00, '2022-01-15', '0331234812', 1),
    (4, 'VWX678', 6700.00, '2022-01-15', '0341234813', 0),
    (5, 'YZA789', 5500.00, '2022-01-15', '0381234814', 1),

    -- Pour '2022-03-22'
    (1, 'ABC890', 4800.00, '2022-03-22', '0331234815', 0),
    (2, 'DEF901', 9200.00, '2022-03-22', '0341234816', 1),
    (3, 'GHI012', 8700.00, '2022-03-22', '0381234817', 0),
    (4, 'JKL123', 8500.00, '2022-03-22', '0331234818', 1),
    (5, 'MNO234', 8200.00, '2022-03-22', '0341234819', 0),

    -- Pour '2022-05-10'
    (1, 'PQR345', 7600.00, '2022-05-10', '0381234820', 1),
    (2, 'STU456', 7900.00, '2022-05-10', '0331234821', 0),
    (3, 'VWX567', 6500.00, '2022-05-10', '0341234822', 1),
    (4, 'YZA678', 7200.00, '2022-05-10', '0381234823', 0),
    (5, 'ABC789', 6900.00, '2022-05-10', '0331234824', 1),

    -- Pour '2022-07-19'
    (1, 'JKL890', 7100.00, '2022-07-19', '0341234825', 0),
    (2, 'MNO901', 6800.00, '2022-07-19', '0381234826', 1),
    (3, 'PQR012', 7300.00, '2022-07-19', '0331234827', 0),
    (4, 'STU123', 8000.00, '2022-07-19', '0341234828', 1),
    (5, 'VWX234', 8400.00, '2022-07-19', '0381234829', 0),

    -- Pour '2022-09-23'
    (1, 'YZA345', 7700.00, '2022-09-23', '0331234830', 1),
    (2, 'ABC456', 7600.00, '2022-09-23', '0341234831', 0),
    (3, 'DEF567', 7900.00, '2022-09-23', '0381234832', 1),
    (4, 'GHI678', 7200.00, '2022-09-23', '0331234833', 0),
    (5, 'JKL789', 6500.00, '2022-09-23', '0341234834', 1),

    -- Pour '2022-11-11'
    (1, 'MNO890', 6800.00, '2022-11-11', '0381234835', 0),
    (2, 'PQR901', 7100.00, '2022-11-11', '0331234836', 1),
    (3, 'STU012', 6800.00, '2022-11-11', '0341234837', 0),
    (4, 'VWX123', 7300.00, '2022-11-11', '0381234838', 1),
    (5, 'YZA234', 8000.00, '2022-11-11', '0331234839', 0),

    -- Pour '2022-02-05'
    (1, 'ABC345', 8400.00, '2022-02-05', '0341234840', 1),
    (2, 'DEF456', 7700.00, '2022-02-05', '0381234841', 0),
    (3, 'GHI567', 7600.00, '2022-02-05', '0331234842', 1),
    (4, 'JKL678', 7900.00, '2022-02-05', '0341234843', 0),
    (5, 'MNO789', 8200.00, '2022-02-05', '0381234844', 1),

    -- Pour '2022-04-18'
    (1, 'PQR890', 7700.00, '2022-04-18', '0331234845', 0),
    (2, 'STU901', 8000.00, '2022-04-18', '0341234846', 1),
    (3, 'VWX012', 8400.00, '2022-04-18', '0381234847', 0),
    (4, 'YZA123', 7300.00, '2022-04-18', '0331234848', 1),
    (5, 'ABC234', 7800.00, '2022-04-18', '0341234849', 0),

    -- Pour '2022-06-30'
    (1, 'DEF345', 6500.00, '2022-06-30', '0381234850', 1),
    (2, 'GHI456', 6800.00, '2022-06-30', '0331234851', 0),
    (3, 'JKL567', 6900.00, '2022-06-30', '0341234852', 1),
    (4, 'MNO678', 7100.00, '2022-06-30', '0381234853', 0),
    (5, 'PQR789', 6800.00, '2022-06-30', '0331234854', 1),

    -- Pour '2022-08-15'
    (1, 'STU890', 7300.00, '2022-08-15', '0341234855', 0),
    (2, 'VWX901', 8000.00, '2022-08-15', '0381234856', 1),
    (3, 'YZA012', 8400.00, '2022-08-15', '0331234857', 0),
    (4, 'ABC123', 7700.00, '2022-08-15', '0341234858', 1),
    (5, 'DEF234', 7600.00, '2022-08-15', '0381234859', 0),

    -- Pour '2022-03-07'
    (1, 'GHI345', 7900.00, '2022-03-07', '0331234860', 1),
    (2, 'JKL456', 7200.00, '2022-03-07', '0341234861', 0),
    (3, 'MNO567', 6500.00, '2022-03-07', '0381234862', 1),
    (4, 'PQR678', 6800.00, '2022-03-07', '0331234863', 0),
    (5, 'STU789', 7900.00, '2022-03-07', '0341234864', 1),

    -- Pour '2022-02-12'
    (1, 'VWX890', 8200.00, '2022-02-12', '0381234865', 0),
    (2, 'YZA901', 7700.00, '2022-02-12', '0331234866', 1),
    (3, 'ABC012', 7300.00, '2022-02-12', '0341234867', 0),
    (4, 'DEF123', 8000.00, '2022-02-12', '0381234868', 1),
    (5, 'GHI234', 8400.00, '2022-02-12', '0331234869', 0),

    -- Pour '2022-10-10'
    (1, 'JKL345', 7700.00, '2022-10-10', '0341234870', 1),
    (2, 'MNO456', 7900.00, '2022-10-10', '0381234871', 0),
    (3, 'PQR567', 7200.00, '2022-10-10', '0331234872', 1),
    (4, 'STU678', 6500.00, '2022-10-10', '0341234873', 0),
    (5, 'VWX789', 7600.00, '2022-10-10', '0381234874', 1),

    -- Pour '2022-12-25'
    (1, 'YZA890', 8400.00, '2022-12-25', '0331234875', 0),
    (2, 'ABC901', 7300.00, '2022-12-25', '0341234876', 1),
    (3, 'DEF012', 8000.00, '2022-12-25', '0381234877', 0),
    (4, 'GHI123', 8200.00, '2022-12-25', '0331234878', 1),
    (5, 'JKL234', 7700.00, '2022-12-25', '0341234879', 0),

    -- Pour '2022-04-01'
    (1, 'MNO345', 7900.00, '2022-04-01', '0381234880', 1),
    
    (2, 'PQR456', 7200.00, '2022-04-01', '0331234881', 0),
    (3, 'STU567', 6500.00, '2022-04-01', '0341234882', 1),
    (4, 'VWX678', 7600.00, '2022-04-01', '0381234883', 0),
    (5, 'YZA789', 8400.00, '2022-04-01', '0331234884', 1),

    -- Pour '2022-06-15'
    (1, 'ABC890', 7700.00, '2022-06-15', '0341234885', 0),
    (2, 'DEF901', 8000.00, '2022-06-15', '0381234886', 1),
    (3, 'GHI012', 8400.00, '2022-06-15', '0331234887', 0),
    (4, 'JKL123', 7700.00, '2022-06-15', '0341234888', 1),
    (5, 'MNO234', 7200.00, '2022-06-15', '0381234889', 0),

    -- Pour '2022-08-31'
    (1, 'PQR345', 6500.00, '2022-08-31', '0331234890', 1),
    (2, 'STU456', 7600.00, '2022-08-31', '0341234891', 0),
    (3, 'VWX567', 7900.00, '2022-08-31', '0381234892', 1),
    (4, 'YZA678', 8200.00, '2022-08-31', '0331234893', 0),
    (5, 'ABC789', 7700.00, '2022-08-31', '0341234894', 1),

    -- Pour '2022-11-15'
    (1, 'JKL890', 8000.00, '2022-11-15', '0381234895', 0),
    (2, 'MNO901', 8400.00, '2022-11-15', '0331234896', 1),
    (3, 'PQR012', 7300.00, '2022-11-15', '0341234897', 0),
    (4, 'STU123', 8000.00, '2022-11-15', '0381234898', 1),
    (5, 'VWX234', 8400.00, '2022-11-15', '0331234899', 0),

    -- Pour '2022-02-20'
    (1, 'YZA345', 7700.00, '2022-02-20', '0341234900', 1),
    (2, 'ABC456', 7900.00, '2022-02-20', '0381234901', 0),
    (3, 'DEF567', 7200.00, '2022-02-20', '0331234902', 1),
    (4, 'GHI678', 6500.00, '2022-02-20', '0341234903', 0),
    (5, 'JKL789', 7600.00, '2022-02-20', '0381234904', 1),

    -- Pour '2022-04-10'
    (1, 'MNO890', 8400.00, '2022-04-10', '0331234905', 0),
    (2, 'PQR901', 7700.00, '2022-04-10', '0341234906', 1),
    (3, 'STU012', 8000.00, '2022-04-10', '0381234907', 0),
    (4, 'VWX123', 8400.00, '2022-04-10', '0331234908', 1),
    (5, 'YZA234', 7300.00, '2022-04-10', '0341234909', 0),

    -- Pour '2022-06-05'
    (1, 'ABC345', 8000.00, '2022-06-05', '0381234910', 1),
    (2, 'DEF456', 8200.00, '2022-06-05', '0331234911', 0),
    (3, 'GHI567', 7700.00, '2022-06-05', '0341234912', 1),
    (4, 'JKL678', 7900.00, '2022-06-05', '0381234913', 0),
    (5, 'MNO789', 7200.00, '2022-06-05', '0331234914', 1),

    -- Pour '2022-09-20'
    (1, 'PQR890', 6500.00, '2022-09-20', '0341234915', 0),
    (2, 'STU901', 7600.00, '2022-09-20', '0381234916', 1),
    (3, 'VWX012', 7900.00, '2022-09-20', '0331234917', 0),
    (4, 'YZA123', 8200.00, '2022-09-20', '0341234918', 1),
    (5, 'ABC234', 7700.00, '2022-09-20', '0381234919', 0),

    -- Pour '2022-11-25'
    (1, 'DEF345', 8000.00, '2022-11-25', '0331234920', 1),
    (2, 'GHI456', 7700.00, '2022-11-25', '0341234921', 0),
    (3, 'JKL567', 7900.00, '2022-11-25', '0381234922', 1),
    (4, 'MNO678', 7200.00, '2022-11-25', '0331234923', 0),
    (5, 'PQR789', 6500.00, '2022-11-25', '0341234924', 1),

    -- Pour '2022-02-15'
    (1, 'STU890', 7600.00, '2022-02-15', '0381234925', 0),
    (2, 'VWX901', 8000.00, '2022-02-15', '0331234926', 1),
    (3, 'YZA012', 8400.00, '2022-02-15', '0341234927', 0),
    (4, 'ABC123', 7700.00, '2022-02-15', '0381234928', 1),
    (5, 'DEF234', 7600.00, '2022-02-15', '0331234929', 0),

    -- Pour '2022-04-05'
    (1, 'GHI345', 7900.00, '2022-04-05', '0341234930', 1),
    (2, 'JKL456', 7200.00, '2022-04-05', '0381234931', 0),
    (3, 'MNO567', 6500.00, '2022-04-05', '0331234932', 1),
    (4, 'PQR678', 6800.00, '2022-04-05', '0341234933', 0),
    (5, 'STU789', 7900.00, '2022-04-05', '0381234934', 1),

    -- Pour '2022-06-20'
    (1, 'VWX890', 8200.00, '2022-06-20', '0331234935', 0),
    (2, 'YZA901', 7700.00, '2022-06-20', '0341234936', 1),
    (3, 'ABC012', 7300.00, '2022-06-20', '0381234937', 0),
    (4, 'DEF123', 8000.00, '2022-06-20', '0331234938', 1),
    (5, 'GHI234', 8400.00, '2022-06-20', '0341234939', 0),


    -- Pour diverses dates en 2023
    (1, 'ABC123', 15000.00, '2023-01-15', '0331234567', 0),
    (2, 'DEF123', 12000.50, '2023-01-15', '0341234568', 1),
    (3, 'GHI123', 11000.75, '2023-01-15', '0381234569', 0),

    (2, 'XYZ456', 1000.00, '2023-03-22', '0341234577', 1),
    (3, 'XYZ567', 2000.00, '2023-03-22', '0381234578', 0),
    (1, 'XYZ890', 1800.00, '2023-03-22', '0381234581', 1),

    (3, 'DEF789', 1000.00, '2023-05-10', '0381234587', 0),
    (1, 'DEF012', 1700.00, '2023-05-10', '0381234590', 1),
    (2, 'DEF123', 1800.00, '2023-05-10', '0331234591', 0),

    (1, 'GHI234', 4200.00, '2023-07-19', '0341234598', 1),
    (2, 'GHI345', 4300.00, '2023-07-19', '0381234599', 0),
    (3, 'GHI456', 4400.00, '2023-07-19', '0331234600', 1),

    (1, 'JKL456', 1100.00, '2023-09-23', '0331234606', 1),
    (2, 'JKL567', 1200.00, '2023-09-23', '0341234607', 0),
    (3, 'JKL678', 1300.00, '2023-09-23', '0381234608', 1),

    (1, 'MNO678', 5000.00, '2023-11-11', '0381234614', 1),
    (2, 'MNO789', 5100.00, '2023-11-11', '0331234615', 0),
    (3, 'MNO890', 5200.00, '2023-11-11', '0341234616', 1),

    (2, 'PQR901', 15000.00, '2023-02-05', '0381234623', 0),
    (3, 'PQR012', 16000.00, '2023-02-05', '0331234624', 1),

    (3, 'STU234', 4000.00, '2023-04-18', '0381234632', 1),

    (1, 'VWX789', 1200.00, '2023-06-30', '0341234643', 0),

    (1, 'YZA901', 5100.00, '2023-08-15', '0331234651', 0),

    (2, 'ABC567', 16000.00, '2023-03-07', '0341234678', 0),
    (3, 'DEF567', 17000.00, '2023-03-07', '0381234679', 1),

    (3, 'PQR567', 21000.00, '2023-02-12', '0331234683', 1),

    (1, 'YZA567', 24000.00, '2023-02-12', '0331234686', 0),

    (4, 'ABC678', 25000.00, '2023-06-25', '0341234687', 1),
    (5, 'DEF678', 26000.00, '2023-06-25', '0381234688', 0),
    (1, 'GHI678', 27000.00, '2023-06-25', '0331234689', 1),
    (2, 'JKL678', 28000.00, '2023-06-25', '0341234690', 0),

    (5, 'PQR678', 29000.00, '2023-07-30', '0381234691', 1),
    (1, 'STU678', 30000.00, '2023-07-30', '0331234692', 0),
    (2, 'VWX678', 31000.00, '2023-07-30', '0341234693', 1),
    (3, 'YZA678', 32000.00, '2023-07-30', '0381234694', 0),

    (1, 'ABC789', 33000.00, '2023-05-05', '0331234695', 1),
    (2, 'DEF789', 34000.00, '2023-05-05', '0341234696', 0),
    (3, 'GHI789', 35000.00, '2023-05-05', '0381234697', 1),

    -- Continuez d'ajouter des lignes pour d'autres dates...
    (1, 'MNO789', 36000.00, '2023-09-05', '0381234698', 0),
    (2, 'PQR789', 37000.00, '2023-09-05', '0331234699', 1),

    (2, 'STU789', 38000.00, '2023-10-05', '0341234700', 0),
    (3, 'VWX789', 39000.00, '2023-10-05', '0381234701', 1),

    (3, 'YZA789', 40000.00, '2023-11-05', '0331234702', 0),

    (4, 'ABC890', 41000.00, '2023-12-05', '0341234703', 1),
    (5, 'DEF890', 42000.00, '2023-12-05', '0381234704', 0),
    (1, 'GHI890', 43000.00, '2023-12-05', '0331234705', 1),

    (2, 'JKL890', 44000.00, '2023-02-15', '0341234706', 0),
    (3, 'MNO890', 45000.00, '2023-02-15', '0381234707', 1),

    (4, 'PQR890', 46000.00, '2023-03-15', '0331234708', 0),

    (5, 'STU890', 47000.00, '2023-04-15', '0341234709', 1),
    (1, 'VWX890', 48000.00, '2023-04-15', '0381234710', 0),

    (2, 'YZA890', 49000.00, '2023-05-15', '0331234711', 1),

    (3, 'ABC901', 50000.00, '2023-06-15', '0341234712', 0),
    (4, 'DEF901', 51000.00, '2023-06-15', '0381234713', 1),

    (5, 'GHI901', 52000.00, '2023-07-15', '0331234714', 0),

    (1, 'JKL901', 53000.00, '2023-08-15', '0341234715', 1),
    (2, 'MNO901', 54000.00, '2023-08-15', '0381234716', 0),

    (3, 'PQR901', 55000.00, '2023-09-15', '0331234717', 1),

    (4, 'STU901', 56000.00, '2023-10-15', '0341234718', 0),
    (5, 'VWX901', 57000.00, '2023-10-15', '0381234719', 1),

    (1, 'YZA901', 58000.00, '2023-11-15', '0331234720', 0),

    (2, 'ABC012', 59000.00, '2023-12-15', '0341234721', 1),
    (3, 'DEF012', 60000.00, '2023-12-15', '0381234722', 0),

    (4, 'GHI012', 61000.00, '2023-02-25', '0331234723', 1),
    (5, 'JKL012', 62000.00, '2023-02-25', '0341234724', 0),

    (1, 'MNO012', 63000.00, '2023-02-25', '0381234725', 1),

    (2, 'PQR012', 64000.00, '2023-04-25', '0331234726', 0),
    (3, 'STU012', 65000.00, '2023-04-25', '0341234727', 1),

    (4, 'VWX012', 66000.00, '2023-04-25', '0381234728', 0),

    (5, 'YZA012', 67000.00, '2023-06-25', '0331234729', 1),
    (1, 'ABC123', 68000.00, '2023-06-25', '0341234730', 0),

    (2, 'DEF123', 69000.00, '2023-07-25', '0381234731', 1),

    (3, 'GHI123', 70000.00, '2023-08-25', '0331234732', 0),

    (4, 'XYZ456', 71000.00, '2023-09-25', '0341234733', 1),
    (5, 'XYZ567', 72000.00, '2023-09-25', '0381234734', 0),

    (1, 'XYZ890', 73000.00, '2023-09-25', '0331234735', 1),

    (2, 'DEF456', 74000.00, '2023-11-25', '0341234736', 0),
    (3, 'GHI456', 75000.00, '2023-11-25', '0381234737', 1),

    (4, 'JKL456', 76000.00, '2023-12-25', '0331234738', 0),

    (5, 'MNO456', 77000.00, '2023-12-25', '0341234739', 1),
    (1, 'PQR456', 78000.00, '2023-12-25', '0381234740', 0),

    (2, 'STU456', 79000.00, '2023-02-26', '0331234741', 1),
    (3, 'VWX456', 80000.00, '2023-02-26', '0341234742', 0),

    (4, 'YZA456', 81000.00, '2023-02-26', '0381234743', 1),

    (5, 'ABC567', 82000.00, '2023-04-26', '0331234744', 0),
    (1, 'DEF567', 83000.00, '2023-04-26', '0341234745', 1),

    (2, 'PQR567', 84000.00, '2023-04-26', '0381234746', 0),

    (3, 'STU567', 85000.00, '2023-06-26', '0331234747', 1),
    (4, 'VWX567', 86000.00, '2023-06-26', '0341234748', 0),

    (5, 'YZA567', 87000.00, '2023-06-26', '0381234749', 1),

    (1, 'ABC678', 88000.00, '2023-07-26', '0331234750', 0),
    (2, 'DEF678', 89000.00, '2023-07-26', '0341234751', 1),

    (3, 'GHI678', 90000.00, '2023-07-26', '0381234752', 0),

    (4, 'JKL678', 91000.00, '2023-09-26', '0331234753', 1),
    (5, 'MNO678', 92000.00, '2023-09-26', '0341234754', 0),

    (1, 'PQR678', 93000.00, '2023-09-26', '0381234755', 1),

    (2, 'STU678', 94000.00, '2023-11-26', '0331234756', 0),
    (3, 'VWX678', 95000.00, '2023-11-26', '0341234757', 1),

    (4, 'YZA678', 96000.00, '2023-11-26', '0381234758', 0),

    (5, 'ABC789', 97000.00, '2023-12-26', '0331234759', 1),
    (1, 'DEF789', 98000.00, '2023-12-26', '0341234760', 0),

    (2, 'GHI789', 99000.00, '2023-12-26', '0381234761', 1),

    (3, 'JKL789', 100000.00, '2023-02-10', '0331234762', 0),
    (4, 'MNO789', 101000.00, '2023-02-10', '0341234763', 1),

    (5, 'PQR789', 102000.00, '2023-02-10', '0381234764', 0),

    (1, 'STU789', 103000.00, '2023-04-10', '0331234765', 1),
    (2, 'VWX789', 104000.00, '2023-04-10', '0341234766', 0),

    (3, 'YZA789', 105000.00, '2023-04-10', '0381234767', 1),

    (4, 'ABC890', 106000.00, '2023-06-10', '0331234768', 0),
    (5, 'DEF890', 107000.00, '2023-06-10', '0341234769', 1),

    (1, 'GHI890', 108000.00, '2023-06-10', '0381234770', 0),

    (2, 'JKL890', 109000.00, '2023-08-10', '0331234771', 1),
    (3, 'MNO890', 110000.00, '2023-08-10', '0341234772', 0),

    (4, 'PQR890', 111000.00, '2023-08-10', '0381234773', 1),

    (5, 'STU890', 112000.00, '2023-10-10', '0331234774', 0),
    (1, 'VWX890', 113000.00, '2023-10-10', '0341234775', 1),

    (2, 'YZA890', 114000.00, '2023-10-10', '0381234776', 0),

    (3, 'ABC901', 115000.00, '2023-12-10', '0331234777', 1),
    (4, 'DEF901', 116000.00, '2023-12-10', '0341234778', 0),

    (5, 'GHI901', 117000.00, '2023-12-10', '0381234779', 1),

    (1, 'JKL901', 118000.00, '2023-02-20', '0331234780', 0),
    (2, 'MNO901', 119000.00, '2023-02-20', '0341234781', 1),

    (3, 'PQR901', 120000.00, '2023-02-20', '0381234782', 0),

    (4, 'STU901', 121000.00, '2023-04-20', '0331234783', 1),
    (5, 'VWX901', 122000.00, '2023-04-20', '0341234784', 0),

    (1, 'YZA901', 123000.00, '2023-04-20', '0381234785', 1),

    (2, 'ABC012', 124000.00, '2023-06-20', '0331234786', 0),
    (3, 'DEF012', 125000.00, '2023-06-20', '0341234787', 1),

    (4, 'GHI012', 126000.00, '2023-06-20', '0381234788', 0),

    (5, 'JKL012', 127000.00, '2023-08-20', '0331234789', 1),
    (1, 'MNO012', 128000.00, '2023-08-20', '0341234790', 0),

    (2, 'PQR012', 129000.00, '2023-08-20', '0381234791', 1),

    (3, 'STU012', 130000.00, '2023-10-20', '0331234792', 0),
    (4, 'VWX012', 131000.00, '2023-10-20', '0341234793', 1),

    (5, 'YZA012', 132000.00, '2023-10-20', '0381234794', 0),

    (1, 'ABC123', 133000.00, '2023-12-20', '0331234795', 1),
    (2, 'DEF123', 134000.00, '2023-12-20', '0341234796', 0),

    (3, 'GHI123', 135000.00, '2023-12-20', '0381234797', 1),

    (4, 'XYZ456', 136000.00, '2023-02-01', '0331234798', 0),
    (5, 'XYZ567', 137000.00, '2023-02-01', '0341234799', 1),

    (1, 'XYZ890', 138000.00, '2023-02-01', '0381234800', 0),

    (2, 'DEF456', 139000.00, '2023-04-01', '0331234801', 1),
    (3, 'GHI456', 140000.00, '2023-04-01', '0341234802', 0),

    (4, 'JKL456', 141000.00, '2023-04-01', '0381234803', 1),

    (5, 'MNO456', 142000.00, '2023-06-01', '0331234804', 0),
    (1, 'PQR456', 143000.00, '2023-06-01', '0341234805', 1),

    (2, 'STU456', 144000.00, '2023-06-01', '0381234806', 0),

    (3, 'VWX456', 145000.00, '2023-08-01', '0331234807', 1),
    (4, 'YZA456', 146000.00, '2023-08-01', '0341234808', 0),

    (5, 'ABC567', 147000.00, '2023-08-01', '0381234809', 1),

    (1, 'DEF567', 148000.00, '2023-10-01', '0331234810', 0),
    (2, 'PQR567', 149000.00, '2023-10-01', '0341234811', 1),

    (3, 'STU567', 150000.00, '2023-10-01', '0381234812', 0),

    (4, 'VWX567', 151000.00, '2023-12-01', '0331234813', 1),
    (5, 'YZA567', 152000.00, '2023-12-01', '0341234814', 0),

    (1, 'ABC678', 153000.00, '2023-12-01', '0381234815', 1),

    (2, 'DEF678', 154000.00, '2023-02-02', '0331234816', 0),
    (3, 'GHI678', 155000.00, '2023-02-02', '0341234817', 1),

    (4, 'JKL678', 156000.00, '2023-02-02', '0381234818', 0),

    (5, 'MNO678', 157000.00, '2023-04-02', '0331234819', 1),
    (1, 'PQR678', 158000.00, '2023-04-02', '0341234820', 0),

    (2, 'STU678', 159000.00, '2023-04-02', '0381234821', 1),

    (3, 'VWX678', 160000.00, '2023-06-02', '0331234822', 0),
    (4, 'YZA678', 161000.00, '2023-06-02', '0341234823', 1),

    (5, 'ABC789', 162000.00, '2023-06-02', '0381234824', 0),

    (1, 'DEF789', 163000.00, '2023-08-02', '0331234825', 1),
    (2, 'GHI789', 164000.00, '2023-08-02', '0341234826', 0),

    (3, 'JKL789', 165000.00, '2023-08-02', '0381234827', 1),

    (4, 'MNO789', 166000.00, '2023-10-02', '0331234828', 0),
    (5, 'PQR789', 167000.00, '2023-10-02', '0341234829', 1),

    (1, 'STU789', 168000.00, '2023-10-02', '0381234830', 0),

    (2, 'VWX789', 169000.00, '2023-12-02', '0331234831', 1),
    (3, 'YZA789', 170000.00, '2023-12-02', '0341234832', 0),

    (4, 'ABC890', 171000.00, '2023-12-02', '0381234833', 1),

    (5, 'DEF890', 172000.00, '2023-02-14', '0331234834', 0),
    (1, 'GHI890', 173000.00, '2023-02-14', '0341234835', 1),

    (2, 'JKL890', 174000.00, '2023-02-14', '0381234836', 0),

    (3, 'MNO890', 175000.00, '2023-04-14', '0331234837', 1),
    (4, 'PQR890', 176000.00, '2023-04-14', '0341234838', 0),

    (5, 'STU890', 177000.00, '2023-04-14', '0381234839', 1),

    (1, 'VWX890', 178000.00, '2023-06-14', '0331234840', 0),
    (2, 'YZA890', 179000.00, '2023-06-14', '0341234841', 1),

    (3, 'ABC901', 180000.00, '2023-06-14', '0381234842', 0),

    (4, 'DEF901', 181000.00, '2023-08-14', '0331234843', 1),
    (5, 'GHI901', 182000.00, '2023-08-14', '0341234844', 0),

    (1, 'JKL901', 183000.00, '2023-08-14', '0381234845', 1),

    (2, 'MNO901', 184000.00, '2023-10-14', '0331234846', 0),
    (3, 'PQR901', 185000.00, '2023-10-14', '0341234847', 1),

    (4, 'STU901', 186000.00, '2023-10-14', '0381234848', 0),

    (5, 'VWX901', 187000.00, '2023-12-14', '0331234849', 1),

    (1, 'YZA901', 188000.00, '2023-12-14', '0341234850', 0);


    