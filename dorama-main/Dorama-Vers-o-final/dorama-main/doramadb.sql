CREATE DATABASE IF NOT EXISTS doramadb;
USE doramadb;

CREATE TABLE users (
	id_user INT PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL,
	password VARCHAR(50) NOT NULL,
	set_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

SELECT * FROM users;

CREATE TABLE doramas (
	id_dorama INT PRIMARY KEY AUTO_INCREMENT,
    nome_dorama VARCHAR(50) NOT NULL
);

INSERT INTO doramas(nome_dorama) 
VALUES 
("Hotel del Luna"),
("Hwarang"),
("Sweet home"),
("Paixão imprevista"),
("Jardins de meteoro"),
("Love alarm"),
("True beautiful"),
("Tomorrow"),
("Flower of evil"),
("Minha vênus"),
("Garota do século 20"),
("Well intended love");

SELECT * FROM doramas;





