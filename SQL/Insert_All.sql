INSERT INTO player(
	Username,
	Password,
	Email) VALUES ('Smaggy','Heslo','test@test.cz');


INSERT INTO Buildings(
	Building_name,
	Building_description,
	Level,
	Price_wood_next,
	Price_clay_next,
	Price_iron_next,
	Price_wheat_next,
	Time_to_build,
	Population,
	Reduction_time
) VALUES (
	'Main Building',
	'This building is the home of the chief and center of all the operations',
	1,
	200,
	200,
	200,
	200,
	'00:00:10',
	2,
	3
);

INSERT INTO Buildings(
	Building_name,
	Building_description,
	Level,
	Price_wood_next,
	Price_clay_next,
	Price_iron_next,
	Price_wheat_next,
	Time_to_build,
	Population,
	Storage
) VALUES (
	'Werehouse',
	'This building stores your resources',
	1,
	200,
	200,
	200,
	200,
	'00:00:10',
	2,
	1200
);

INSERT INTO Buildings(
	Building_name,
	Building_description,
	Level,
	Price_wood_next,
	Price_clay_next,
	Price_iron_next,
	Price_wheat_next,
	Time_to_build,
	Population,
	Storage
) VALUES (
	'Cranny',
	'This building stores your wheat',
	1,
	200,
	200,
	200,
	200,
	'00:00:10',
	2,
	1200
);


INSERT INTO Fields(
	Field_name,
	Field_description,
	Field_type,
	Level,
	Price_wood_next,
	Price_clay_next,
	Price_iron_next,
	Price_wheat_next,
	Time_to_build,
	Population,
	Production
) VALUES (
	'Lumber camp',
	'This building produce wood, that is needed for constructions',
	1,
	1,
	70,
	120,
	90,
	50,
	'00:00:12',
	2,
	15
);

INSERT INTO Fields(
	Field_name,
	Field_description,
	Field_type,
	Level,
	Price_wood_next,
	Price_clay_next,
	Price_iron_next,
	Price_wheat_next,
	Time_to_build,
	Population,
	Production
) VALUES (
	'Clay pit',
	'This building produce clay, that is needed for constructions',
	2,
	1,
	110,
	70,
	95,
	50,
	'00:00:12',
	2,
	15
);

INSERT INTO Fields(
	Field_name,
	Field_description,
	Field_type,
	Level,
	Price_wood_next,
	Price_clay_next,
	Price_iron_next,
	Price_wheat_next,
	Time_to_build,
	Population,
	Production
) VALUES (
	'Iron rocs',
	'This building produce iron, that is needed for constructions',
	3,
	1,
	90,
	90,
	50,
	50,
	'00:00:12',
	3,
	15
);

INSERT INTO Fields(
	Field_name,
	Field_description,
	Field_type,
	Level,
	Price_wood_next,
	Price_clay_next,
	Price_iron_next,
	Price_wheat_next,
	Time_to_build,
	Population,
	Production
) VALUES (
	'Cropland',
	'This land produce wheat, that is needed for constructions',
	4,
	1,
	80,
	75,
	65,
	0,
	'00:00:12',
	1,
	15
);


INSERT INTO Village(	
	ID_Player_FK,
	CordX,
	CordY,
	Village_type,
	Main,
	Population,
	Resources_wood,
    	Resources_clay,
    	Resources_iron,
	Resources_wheat,
	Field_1,
	Field_2,
	Field_3,
	Field_4,
	Field_5,
	Field_6,
	Field_7,
	Field_8,
	Field_9,
	Field_10,
	Field_11,
	Field_12,
	Field_13,
	Field_14,
	Field_15,
	Field_16,
	Field_17,
	Field_18,
	Buildin_site_1

) VALUES (
	1,
	0,
	0,
	1,
	TRUE,
	0,
	500,
	500,
	500,
	500,
	1,
	1,
	1,
	1,

	2,
	2,
	2,
	2,

	3,
	3,
	3,
	3,

	4,
	4,
	4,
	4,
	4,
	4,

	1
)







































































INSERT INTO Village(	
	ID_Player_FK,
	CordX,
	CordY,
	Village_type,
	Main,
	Population,
	Resources_wood,
    	Resources_clay,
    	Resources_iron,
	Resources_wheat,
	Field_1,
	Field_2,
	Field_3,
	Field_4,
	Field_5,
	Field_6,
	Field_7,
	Field_8,
	Field_9,
	Field_10,
	Field_11,
	Field_12,
	Field_13,
	Field_14,
	Field_15,
	Field_16,
	Field_17,
	Field_18,
	Buildin_site_1,
	Buildin_site_2,
	Buildin_site_3,
	Buildin_site_4,
	Buildin_site_5,
	Buildin_site_6,
	Buildin_site_7,
	Buildin_site_8,
	Buildin_site_9,
	Buildin_site_10,
	Buildin_site_11,
	Buildin_site_12,
	Buildin_site_13,
	Buildin_site_14,
	Buildin_site_15,
	Buildin_site_16,
	Buildin_site_17,
	Buildin_site_18,
	Buildin_site_19,
	Buildin_site_20,
	Buildin_site_21	
) VALUES (
	1,
	0,
	0,
	1,
	TRUE,
	0,
	500,
	500,
	500,
	500,
	1,
	1,
	1,
	1,

	2,
	2,
	2,
	2,

	3,
	3,
	3,
	3,

	4,
	4,
	4,
	4,
	4,
	4,

	1
)


