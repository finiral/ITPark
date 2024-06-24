--Suppression Parking

--new table Corbeille
CREATE TABLE Corbeille (
    id_Corbeille serial PRIMARY KEY,
    id_Parking int REFERENCES Parking(id_Parking),
    date_suppression date
);
/* CREATE or replace VIEW v_parkingActu AS
SELECT p.id_Parking, p.id_Classe, p.id_Lieu, p.nombre_place, p.prix, p.description
FROM Parking p
LEFT JOIN Corbeille c ON p.id_Parking = c.id_Parking
WHERE c.id_Parking IS NULL;
 */

 
CREATE OR REPLACE VIEW v_ParkingActu AS
SELECT
    p.id_Parking,
    c.intitule AS classe_nom,
    l.nom AS lieu_nom,
    p.nombre_place,
    p.prix,
    p.description
FROM
    Parking p
JOIN
    Classe c ON p.id_Classe = c.id_Classe
JOIN
    Lieu l ON p.id_Lieu = l.id_Lieu
WHERE
    p.id_Parking NOT IN (SELECT id_Parking FROM Corbeille);

