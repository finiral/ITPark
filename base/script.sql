create database Itpark;
\c Itpark
 create table Classe(
    id_Classe serial primary key,
    intitule varchar(10) 
);
create table Lieu(
    id_Lieu serial primary key,
    nom varchar(100),
    longitude decimal(10,2),
    latitude decimal(10,2)
);
--vaovao
create table Parking(
    id_Parking serial primary key,
    id_Classe int references Classe(id_Classe), 
    id_Lieu int references Lieu(id_Lieu),
    nombre_place smallInt,
    prix decimal(10,2),
    description varchar(250)
);
create table Place(
    id_Place serial primary key,
    numero_place smallInt,
    id_Parking int references Parking(id_Parking),
    status smallInt
);
--vaovao
create table Utilisateur(
    id_Utilisateur serial primary key,
    identifiant VARCHAR(100),
    mdp varchar(30),
    status smallInt,
    check(status = 0 or status = 1 or status = 2)
);
--vaovao
create table Accessproprietaire(
    id_Accessproprietaire serial primary key,
    id_Utilisateur INT references Utilisateur(id_Utilisateur),
    id_Parking INT references Parking(id_Parking)
)
--vaovao
create table Mouvementgardien(
    id_Mouvementgardien serial primary key,
    id_Utilisateur INT references Utilisateur(id_Utilisateur),
    id_Parking INT references Parking(id_Parking),
    Date_Mouvementgardien date
)
create table Reservation(
    id_Reservation serial primary key,
    id_Parking int references Parking(id_Parking),
    id_Place int references Place(id_Place),
    numero_telephone Char(12),
    date_heure_reservation TIMESTAMP WITHOUT TIME ZONE,
    duree smallInt
);
--vaovao
create table Paiement(
    id_Paiement serial primary key,
    id_Parking int references Parking(id_Parking),
    matricule varchar(20),
    montant decimal(10,2),
    date_Paiement DATE,
    numero_telephone varchar(12),
    isReservation smallInt,
    check(isReservation = 0 or isReservation = 1 )
);
--vaovao
create table MouvementPlace(
    id_Mouvementplace serial primary key,
    id_Parking int references Parking(id_Parking),
    id_Place int references Place(id_Place),
    matricule varchar(20),
    date_Heure_MouvementPlace TIMESTAMP WITHOUT TIME ZONE,
    status smallint,
    check(status = 0 or status = 1 )
);

-- 1. Fonction vueFonctionBase
-- Description: Fonction qui retourne les parkings avec des places libres dans un lieu spécifique.
CREATE OR REPLACE FUNCTION  GetPlaceParkingFreeOnPlace(param_idLieu INT) 
RETURNS TABLE(
    id_Parking INT,
    id_Classe INT, 
    id_Lieu INT, 
    nombre_place smallint, 
    prix DECIMAL(10,2), 
    description VARCHAR(250)
    ) AS $$
BEGIN
    RETURN QUERY
    SELECT p.id_Parking, p.id_Classe, p.id_Lieu, p.nombre_place, p.prix, p.description
    FROM Parking p
    JOIN Place pl ON p.id_Parking = pl.id_Parking
    WHERE pl.status = 0 AND p.id_Lieu = param_idLieu GROUP BY p.id_Parking;
END;
$$ LANGUAGE plpgsql;

-- 2. Fonction afficheListesDesPlaceLibres
-- Description: Fonction qui affiche la liste des places libres pour un parking donné.
CREATE OR REPLACE FUNCTION GetPlaceFreeForOneParking(idParking INT) 
RETURNS TABLE(
    id_Parking INT,
    id_Place INT,
    numero_place SMALLINT, 
    status SMALLINT
    ) AS $$
BEGIN
    RETURN QUERY
    SELECT pl.id_Parking,pl.id_Place, pl.numero_place, pl.status
    FROM Place pl
    WHERE pl.id_Parking = idParking AND pl.status = 0;
END;
$$ LANGUAGE plpgsql;

-- 3. Fonction getMvtPlaceEntrant
-- Description: Fonction qui obtient les mouvements de place entrants d'un parking pour un mois/annee donné.
CREATE OR REPLACE FUNCTION  GetMouvementPlaceEnter(mois INT,annee INT,idParking INT) 
RETURNS TABLE(
    id_Parking INT, 
    id_Place INT, 
    matricule VARCHAR(20),
    date_Heure_MouvementPlace  TIMESTAMP WITHOUT TIME ZONE
     ) AS $$
BEGIN
    RETURN QUERY
    SELECT mp.id_Parking, mp.id_Place,mp.matricule,mp.date_Heure_MouvementPlace
    FROM MouvementPlace mp
    WHERE EXTRACT(MONTH FROM mp.date_Heure_MouvementPlace) = mois 
    AND EXTRACT(YEAR FROM mp.date_Heure_MouvementPlace) = annee
    AND mp.status = 1 AND mp.id_Parking=idParking;
END;
$$ LANGUAGE plpgsql;

-- 4. Fonction getMvtPlaceSortant
-- Description: Fonction qui obtient les mouvements de place sortants d'un parking pour un mois/annee donné.
CREATE OR REPLACE FUNCTION GetMouvementPlaceOut(mois INT,annee INT,idParking INT) 
RETURNS TABLE(
    id_Parking INT, 
    id_Place INT, 
    matricule VARCHAR(20),
    date_Heure_MouvementPlace  TIMESTAMP WITHOUT TIME ZONE
    ) AS $$
BEGIN
    RETURN QUERY
    SELECT mp.id_Parking, mp.id_Place, mp.matricule, mp.date_Heure_MouvementPlace
    FROM MouvementPlace mp
    WHERE EXTRACT(MONTH FROM mp.date_Heure_MouvementPlace) = mois 
    AND EXTRACT(YEAR FROM mp.date_Heure_MouvementPlace) = annee
    AND mp.status = 0 AND mp.id_Parking=idParking;
END;
$$ LANGUAGE plpgsql;

-- 5. Fonction getPaiement
-- Description: Fonction qui obtient les paiements pour un mois donné et pour un collaborateur spécifique.
CREATE OR REPLACE FUNCTION GetPaiement(
    mois INT, 
    annee INT,
    idParking INT) 
RETURNS DECIMAL AS $$
DECLARE
    total_montant DECIMAL := 0;
BEGIN
    SELECT SUM(pa.montant)
    INTO total_montant
    FROM Paiement pa
    WHERE EXTRACT(MONTH FROM pa.date_paiement) = mois 
    AND EXTRACT(YEAR FROM pa.date_paiement) = annee 
    AND pa.id_Parking = idParking;

    RETURN total_montant;
END;
$$ LANGUAGE plpgsql;

-- 6. Fonction getParkings
-- Description: Fonction qui obtient les parkings pour un collaborateur donné.
CREATE OR REPLACE FUNCTION GetParkings(idCollaborateur INT) 
RETURNS TABLE(
    id_Parking INT, 
    id_Classe INT, 
    id_Lieu INT, 
    nombre_place SMALLINT, 
    prix DECIMAL(10,2), 
    id_utilisateur INT,
    description VARCHAR(250) 
    ) AS $$
BEGIN
    RETURN QUERY
    select  
    p.id_parking,
    p.id_Classe,
    p.id_Lieu,
    p.nombre_place,
    p.prix,
    u.id_utilisateur,
    p.description FROM parking as p join Accessproprietaire as ap on p.id_parking=ap.id_parking
    JOIN utilisateur as u on ap.id_utilisateur=u.id_utilisateur  where u.id_utilisateur=idCollaborateur
    GROUP BY p.id_parking,u.id_utilisateur;
END;
$$ LANGUAGE plpgsql;

-- 7. Fonction GetPlaceEnterCount
-- Description: Fonction qui compte le nombre d'entrée dans un parking 
-- pour chaque intervalle d'heure lors d'un mois donné
CREATE OR REPLACE FUNCTION GetPlaceEnterCount(mois INT, annee INT,idParking INT) 
RETURNS TABLE(
    heure INT,
    count_mouvement INT
) AS $$
BEGIN
    RETURN QUERY
    SELECT 
        generate_series(0, 23) AS heure, 
        COALESCE(SUM(CASE 
            WHEN EXTRACT(HOUR FROM mp.date_Heure_MouvementPlace) = generate_series THEN 1 
            ELSE 0 
        END), 0) AS count_mouvement
    FROM 
        generate_series(0, 23) 
    LEFT JOIN 
        MouvementPlace mp 
    ON 
        EXTRACT(HOUR FROM mp.date_Heure_MouvementPlace) = generate_series
    WHERE 
        EXTRACT(MONTH FROM mp.date_Heure_MouvementPlace) = mois 
        AND EXTRACT(YEAR FROM mp.date_Heure_MouvementPlace) = annee
        AND mp.status = 1 AND mp.id_Parking=idParking
    GROUP BY 
        generate_series
    ORDER BY 
        heure;
END;
$$ LANGUAGE plpgsql;

-- 8. Fonction GetPlaceOutCount
-- Description: Fonction qui compte le nombre d'entrée dans un parking 
-- pour chaque intervalle d'heure lors d'un mois donné
CREATE OR REPLACE FUNCTION GetPlaceOutCount(mois INT,annee INT ,idParking INT) 
RETURNS TABLE(
    heure INT,
    count_mouvement INT
) AS $$
BEGIN
    RETURN QUERY
    SELECT 
        generate_series(0, 23) AS heure, 
        COALESCE(SUM(CASE 
            WHEN EXTRACT(HOUR FROM mp.date_Heure_MouvementPlace) = generate_series THEN 1 
            ELSE 0 
        END), 0) AS count_mouvement
    FROM 
        generate_series(0, 23) 
    LEFT JOIN 
        MouvementPlace mp 
    ON 
        EXTRACT(HOUR FROM mp.date_Heure_MouvementPlace) = generate_series
    WHERE 
        EXTRACT(MONTH FROM mp.date_Heure_MouvementPlace) = mois 
        AND EXTRACT(YEAR FROM mp.date_Heure_MouvementPlace) = annee
        AND mp.status = 0 AND mp.id_Parking=idParking
    GROUP BY 
        generate_series
    ORDER BY 
        heure;
END;
$$ LANGUAGE plpgsql;



-- Requete pour avoir l'heure avec entrée max parking
SELECT * from GetPlaceOutCount($mois,$annee,$idParking) where count_mouvement=(SELECT max(count_mouvement) from GetPlaceOutCount($mois,$annee,$idParking));
