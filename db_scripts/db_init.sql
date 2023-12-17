DROP DATABASE conf_bsas_db;
CREATE DATABASE conf_bsas_db;


CREATE TABLE oradores (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    surename VARCHAR(50) NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL
);

CREATE TABLE topics (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    color_hex VARCHAR(6) NOT NULL
);

CREATE TABLE oradores_topics (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    orador_id int NOT NULL,
    topic_id int NOT NULL,
    FOREIGN KEY (orador_id) REFERENCES oradores(id),
    FOREIGN KEY (topic_id) REFERENCES topics(id)
);

CREATE TABLE charla (
    id int NOT NULL PRIMARY KEY  AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(50) NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    topic_id int NOT NULL,
    FOREIGN KEY (topic_id) REFERENCES topics(id)
);


CREATE TABLE tikets (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    surename VARCHAR(50) NOT NULL,
    born_date DATE NOT NULL,
    sex CHAR(1)
);


INSERT INTO topics (name, color_hex) VALUES
("JavaScript", "ffc107"),
("React", "0d6efd"),
("Negocios", "6c757d"),
("Startup", "dc3545")
;

INSERT INTO oradores (name, surename, image_url, description)
VALUES
  ('Steve', 'Jobs', 'images/steve.jpg', 'Cofundador de Apple Inc.'),
  ('Bill', 'Gates', 'images/bill.jpg', 'Cofundador de Microsoft Corporation.'),
  ('Ada', 'Lovelace', 'images/ada.jpeg', 'Matemática y escritora, considerada la primera programadora.')
;


INSERT INTO oradores_topics (orador_id, topic_id) VALUES
(1, 1), (1,2), #steve:js - steve:react
(2, 1), (2,2), #bill:js - bill:react
(3,3), (3,4); #ada:negocios - ada:startup
