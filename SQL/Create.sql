CREATE TABLE Map (
    	ID_MapField 	INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    	X 		INTEGER NOT NULL,
    	Y 		INTEGER NOT NULL,
    	Type		INTEGER,
	Bonus		INTEGER,
	Img		VARCHAR(80)
);

CREATE TABLE Player (
    	ID_Player 	INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    	Username 	VARCHAR(50) NOT NULL,
    	Password 	VARCHAR(500) NULL,
    	Email		VARCHAR(500) NULL
);

CREATE TABLE Village (
	ID_Vil   		INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ID_Player_FK    	INTEGER NOT NULL,
	CordX			INTEGER NOT NULL,
	CordY			INTEGER NOT NULL,
	Village_type		INTEGER NOT NULL,
	Main			BOOLEAN,
	Population		INTEGER NOT NULL,
    Resources_wood  	DOUBLE(12,3),
    Resources_clay  	DOUBLE(12,3),
    Resources_iron  	DOUBLE(12,3),
	Resources_wheat		DOUBLE(12,3),
	Resources_cap	INTEGER,
	Wheat_cap	INTEGER,
	Prod_wood	INTEGER,
	Prod_clay	INTEGER,
	Prod_iron	INTEGER,
	Prod_wheat	INTEGER,
	Field_1		INTEGER,
	Field_2		INTEGER,
	Field_3		INTEGER,
	Field_4		INTEGER,
	Field_5		INTEGER,
	Field_6		INTEGER,
	Field_7		INTEGER,
	Field_8		INTEGER,
	Field_9		INTEGER,
	Field_10		INTEGER,
	Field_11		INTEGER,
	Field_12		INTEGER,
	Field_13		INTEGER,
	Field_14		INTEGER,
	Field_15		INTEGER,
	Field_16		INTEGER,
	Field_17		INTEGER,
	Field_18		INTEGER,
	Buildin_site_1		INTEGER,
	Buildin_site_2		INTEGER,
	Buildin_site_3		INTEGER,
	Buildin_site_4		INTEGER,
	Buildin_site_5		INTEGER,
	Buildin_site_6		INTEGER,
	Buildin_site_7		INTEGER,
	Buildin_site_8		INTEGER,
	Buildin_site_9		INTEGER,
	Buildin_site_10		INTEGER,
	Buildin_site_11		INTEGER,
	Buildin_site_12		INTEGER,
	Buildin_site_13		INTEGER,
	Buildin_site_14		INTEGER,
	Buildin_site_15		INTEGER,
	Buildin_site_16		INTEGER,
	Buildin_site_17		INTEGER,
	Buildin_site_18		INTEGER,
	Buildin_site_19		INTEGER,
	Buildin_site_20		INTEGER,
	Buildin_site_21		INTEGER	
);




CREATE TABLE Buildings (
    ID_Building				INTEGER PRIMARY KEY,
    Building_name	 		VARCHAR(500) NOT NULL,
    Building_description	VARCHAR(500) NOT NULL,
	Level					INTEGER NOT NULL,
	Price_wood_next				INTEGER NOT NULL,
	Price_clay_next				INTEGER NOT NULL,
	Price_iron_next				INTEGER NOT NULL,
	Price_wheat_next			INTEGER NOT NULL,
	Time_to_build			TIME,
	Population			INTEGER NULL,
	Storage					INTEGER NULL,
	Reduction_time			INTEGER NULL
);


CREATE TABLE Fields (
    ID_Field				INTEGER PRIMARY KEY,
    Field_name	 			VARCHAR(500) NOT NULL,
    Field_description		VARCHAR(500) NOT NULL,
	Field_type			INTEGER NOT NULL,
	Level					INTEGER NOT NULL,
	Price_wood_next				INTEGER NOT NULL,
	Price_clay_next				INTEGER NOT NULL,
	Price_iron_next				INTEGER NOT NULL,
	Price_wheat_next			INTEGER NOT NULL,
	Time_to_Build			TIME,
	Population			INTEGER NULL,
	Production				INTEGER NULL
)






































CREATE TABLE FieldArea (
    ID_Field_Area 			INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   	ID_Vil_FK				INTEGER NOT NULL,
   	ID_Vil_Field_Area_FK 	INTEGER NULL,
   	ID_Field_FK				INTEGER NULL,
	Field_level				INTEGER NULL,
	Type					INTEGER NOT NULL
);




CREATE TABLE BuildingArea (
    ID_Building_Area 	INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ID_Vil_FK		INTEGER NOT NULL,
    ID_Vil_Building_Area_FK	INTEGER NULL,
    ID_Building		INTEGER NULL,
	Building_Level		INTEGER NULL
);







CREATE TABLE Building_prices (
    	ID_Price		INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    	ID_Price_FK		INTEGER NOT NULL,
	Level			INTEGER NOT NULL,
	Price_wood		INTEGER NOT NULL,
	Price_clay		INTEGER NOT NULL,
	Price_iron		INTEGER NOT NULL,
	Price_wheat		INTEGER NOT NULL
);












CREATE TABLE ma (
    cenova_zona_cenova_zona_id   INTEGER NOT NULL,
    udalost_udalost_id           INTEGER NOT NULL
);

ALTER TABLE ma ADD CONSTRAINT ma_pk PRIMARY KEY ( cenova_zona_cenova_zona_id,
udalost_udalost_id );

CREATE TABLE nabizi (
    udalost_udalost_id   INTEGER NOT NULL,
    benefit_benefit_id   INTEGER NOT NULL
);

ALTER TABLE nabizi ADD CONSTRAINT nabizi_pk PRIMARY KEY ( udalost_udalost_id,
benefit_benefit_id );

CREATE TABLE obsahuje (
    omezeni_omezeni_id   INTEGER NOT NULL,
    udalost_udalost_id   INTEGER NOT NULL
);

ALTER TABLE obsahuje ADD CONSTRAINT obsahuje_pk PRIMARY KEY ( omezeni_omezeni_id,
udalost_udalost_id );

CREATE TABLE omezeni (
    omezeni_id    MEDIUMINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    type          INTEGER NOT NULL,
    name          VARCHAR(50) NOT NULL,
    description   VARCHAR(500)
);

CREATE TABLE osoba (
    osoba_id   MEDIUMINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(20) NOT NULL,
    surname    VARCHAR(20) NOT NULL,
    username   VARCHAR(30) NOT NULL,
    password   VARCHAR(255) NOT NULL,
    email      VARCHAR(255) NOT NULL,
    rights     INTEGER NOT NULL,
    money      INTEGER
);

CREATE TABLE rezervace (
    udalost_udalost_id   INTEGER NOT NULL,
    osoba_osoba_id       INTEGER NOT NULL
);

ALTER TABLE rezervace ADD CONSTRAINT rezervace_pk PRIMARY KEY ( udalost_udalost_id,
osoba_osoba_id );

CREATE TABLE udalost (
    udalost_id             MEDIUMINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name                   VARCHAR(100) NOT NULL,
    datum                  DATE NOT NULL,
    available_seats        INTEGER NOT NULL,
    ticket_price           INTEGER NOT NULL,
    zarizeni_id		   INTEGER NOT NULL
);

CREATE TABLE zarizeni (
    zarizeni_id   MEDIUMINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name          VARCHAR(70) NOT NULL,
    location      VARCHAR(70) NOT NULL
);

CREATE TABLE ziskala (
    osoba_osoba_id       INTEGER NOT NULL,
    benefit_benefit_id   INTEGER NOT NULL
);

ALTER TABLE ziskala ADD CONSTRAINT ziskala_pk PRIMARY KEY ( osoba_osoba_id,
benefit_benefit_id );




-- Oracle SQL Developer Data Modeler Summary Report: 
-- 
-- CREATE TABLE                            11
-- CREATE INDEX                             0
-- ALTER TABLE                             22
-- CREATE VIEW                              0
-- ALTER VIEW                               0
-- CREATE PACKAGE                           0
-- CREATE PACKAGE BODY                      0
-- CREATE PROCEDURE                         0
-- CREATE FUNCTION                          0
-- CREATE TRIGGER                           0
-- ALTER TRIGGER                            0
-- CREATE COLLECTION TYPE                   0
-- CREATE STRUCTURED TYPE                   0
-- CREATE STRUCTURED TYPE BODY              0
-- CREATE CLUSTER                           0
-- CREATE CONTEXT                           0
-- CREATE DATABASE                          0
-- CREATE DIMENSION                         0
-- CREATE DIRECTORY                         0
-- CREATE DISK GROUP                        0
-- CREATE ROLE                              0
-- CREATE ROLLBACK SEGMENT                  0
-- CREATE SEQUENCE                          0
-- CREATE MATERIALIZED VIEW                 0
-- CREATE SYNONYM                           0
-- CREATE TABLESPACE                        0
-- CREATE USER                              0
-- 
-- DROP TABLESPACE                          0
-- DROP DATABASE                            0
-- 
-- ORDS DROP SCHEMA                         0
-- ORDS ENABLE SCHEMA                       0
-- ORDS ENABLE OBJECT                       0
-- 
-- ERRORS                                   0
-- WARNINGS                                 0

