create database itpark;
\c itpark
create table Classe(
    id_Classe serial primary key,
    intitule varchar(30) 
);
create table Lieu(
    id_Lieu serial primary key,
    nom varchar(255),
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
-- vaovao
create table Status_Utilisateur(
    id_Status serial primary key,
    status_nom varchar(20)
);
--vaovao
create table Utilisateur(
    id_Utilisateur serial primary key,
    identifiant VARCHAR(100),
    mdp varchar(255),
    status int references status_utilisateur(id_status)
);
---changement
alter table utilisateur alter column status type int
alter table utilisateur 
add constraint status_user_fk FOREIGN KEY (status) references status_utilisateur(id_status)

-- vaovao
alter table Utilisateur
add column etat smallint default 1;

--vaovao
create table Accessproprietaire(
    id_Accessproprietaire serial primary key,
    id_Utilisateur INT references Utilisateur(id_Utilisateur),
    id_Parking INT references Parking(id_Parking)
);
--vaovao
create table Mouvementgardien(
    id_Mouvementgardien serial primary key,
    id_Utilisateur INT references Utilisateur(id_Utilisateur),
    id_Parking INT references Parking(id_Parking),
    Date_Mouvementgardien date
);
create table Reservation(
    id_Reservation serial primary key,
    id_Parking int references Parking(id_Parking),
    id_Place int references Place(id_Place),
    numero_telephone varChar(13),
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
    numero_telephone varchar(13),
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

--vaovao
CREATE VIEW v_Parking AS
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
     Lieu l ON p.id_Lieu = l.id_Lieu;

-- vaovao
drop function GetResarvationsForOneParking;

CREATE OR REPLACE FUNCTION GetResarvationsForOneParking(idParking INT)
    RETURNS TABLE(
        id_Reservation INT,
        classe_nom VARCHAR(30),
        lieu_nom VARCHAR(250),
        nombre_place smallINT,
        prix DECIMAL(10, 2),
        description VARCHAR(250),
        numero_place smallINT,
        numero_telephone_2 varChar(13),
        date_heure_reservation TIMESTAMP WITHOUT TIME ZONE,
        duree smallInt
    ) AS $$
    BEGIN
        RETURN QUERY
        SELECT r.id_Reservation, v_p.classe_nom, v_p.lieu_nom, v_p.nombre_place, v_p.prix, v_p.description, 
               pl.numero_place, r.numero_telephone::VARCHAR, r.date_heure_reservation, r.duree 
        FROM Reservation r
        JOIN v_Parking v_p ON r.id_Parking = v_p.id_Parking
        JOIN Place pl ON r.id_Parking = pl.id_Parking WHERE r.id_Parking = idParking;
    END;
    $$ LANGUAGE plpgsql;

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
    SELECT COALESCE(SUM(pa.montant), 0)
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
CREATE OR REPLACE FUNCTION GetPlaceEnterCount(
    mois INT,
    annee INT,
    idParking INT
) 
RETURNS TABLE(
    heure INT,
    count_mouvement BIGINT
) AS $$
BEGIN
    RETURN QUERY
    SELECT 
        gs.heure, 
        COALESCE(COUNT(mp.date_Heure_MouvementPlace), 0) AS count_mouvement
    FROM 
        generate_series(0, 23) AS gs(heure) 
    LEFT JOIN 
        MouvementPlace mp 
    ON 
        EXTRACT(HOUR FROM mp.date_Heure_MouvementPlace) = gs.heure
        AND EXTRACT(MONTH FROM mp.date_Heure_MouvementPlace) = mois
        AND EXTRACT(YEAR FROM mp.date_Heure_MouvementPlace) = annee
        AND mp.status = 1
        AND mp.id_Parking = idParking
    GROUP BY 
        gs.heure
    ORDER BY 
        gs.heure;
END;
$$ LANGUAGE plpgsql;

-- 8. Fonction GetPlaceOutCount
-- Description: Fonction qui compte le nombre d'entrée dans un parking 
-- pour chaque intervalle d'heure lors d'un mois donné
CREATE OR REPLACE FUNCTION GetPlaceOutCount(
    mois INT,
    annee INT,
    idParking INT
) 
RETURNS TABLE(
    heure INT,
    count_mouvement BIGINT
) AS $$
BEGIN
    RETURN QUERY
    SELECT 
        gs.heure, 
        COALESCE(COUNT(mp.date_Heure_MouvementPlace), 0) AS count_mouvement
    FROM 
        generate_series(0, 23) AS gs(heure) 
    LEFT JOIN 
        MouvementPlace mp 
    ON 
        EXTRACT(HOUR FROM mp.date_Heure_MouvementPlace) = gs.heure
        AND EXTRACT(MONTH FROM mp.date_Heure_MouvementPlace) = mois
        AND EXTRACT(YEAR FROM mp.date_Heure_MouvementPlace) = annee
        AND mp.status = 0 
        AND mp.id_Parking = idParking
    GROUP BY 
        gs.heure
    ORDER BY 
        gs.heure;
END;
$$ LANGUAGE plpgsql;

--9.Fonction fonctions insertion-update(ok)
-- Description:Fonction  qui insert des donnees dans les tables: reservation,MouvementPlace.Update de la table place
CREATE OR REPLACE FUNCTION InsertReservation(
    p_id_Parking INT,
    p_id_Place INT,
    p_numero_telephone VARCHAR(15),
    p_date_heure_reservation TIMESTAMP WITHOUT TIME ZONE,
    p_duree SMALLINT,
    p_matricule VARCHAR(20)
)
RETURNS VOID AS $$
BEGIN
    INSERT INTO Reservation (id_Parking, id_Place, numero_telephone, date_heure_reservation, duree)
    VALUES (p_id_Parking, p_id_Place, p_numero_telephone, p_date_heure_reservation, p_duree);

    INSERT INTO MouvementPlace (id_Parking, id_Place, matricule, date_Heure_MouvementPlace, status)
    VALUES (p_id_Parking, p_id_Place, p_matricule, p_date_heure_reservation, 1);

    UPDATE Place
    SET status = 1
    WHERE id_Place = p_id_Place;
END;
$$ LANGUAGE plpgsql;

---10-fonction qui recupere le id_place
CREATE OR REPLACE FUNCTION get_place(id_parking_param INT, numero_place_param INT)
RETURNS INT AS $$
DECLARE
    id_place_result INT;
BEGIN
    SELECT id_place
    INTO id_place_result
    FROM place
    WHERE id_parking = id_parking_param AND numero_place = numero_place_param;

    RETURN id_place_result;
END;
$$ LANGUAGE plpgsql;


-- view
/*
 CREATE VIEW v_Parking AS
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
     Lieu l ON p.id_Lieu = l.id_Lieu;
*/

CREATE VIEW v_Parking AS
 SELECT
    p.id_Parking,
    c.intitule AS classe_nom,
    l.nom AS lieu_nom,
    COUNT(pl.id_place) AS nombre_place,
    p.prix,
    p.description
FROM
    Parking p
JOIN
    Classe c ON p.id_Classe = c.id_Classe
JOIN
    Lieu l ON p.id_Lieu = l.id_Lieu
JOIN
    Place pl ON p.id_Parking = pl.id_Parking
GROUP BY
    p.id_Parking,
    c.intitule,
    l.nom,
    p.nombre_place,
    p.prix,
    p.description;


--view paiement par jour
  --  date_Paiement DATE,
    --date_Paiement DATE,
    
create or replace view v_PaiementDay as select id_parking,sum(montant),date_Paiement from paiement group by 
date_Paiement,id_Parking order by date_Paiement;


Create or replace VIEW v_count_place_used as 
select 
    count(id_place) as count_place
from
    place 
where 
    status = 1;


