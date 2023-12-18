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

CREATE TABLE charlas (
    id int NOT NULL PRIMARY KEY  AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(50) NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    topic_id int NOT NULL,
    orador_id int NOT NULL,
    FOREIGN KEY (topic_id) REFERENCES topics(id),
    FOREIGN KEY (orador_id) REFERENCES oradores(id)
);


CREATE TABLE tikets (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    surename VARCHAR(50) NOT NULL,
    born_date DATE NOT NULL,
    sex CHAR(1)
);


#################################
#### INIT ORADORES Y TOPICOS ####
#################################

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



######################
#### INIT CHARLAS ####
######################


INSERT INTO charlas (name, description, start_time, end_time, topic_id, orador_id)
VALUES
  ('Introducción a JavaScript', 'Explora los fundamentos de JavaScript, Descubre cómo JavaScript se ha convertido en la columna vertebral de la interactividad en la web dinámica.', '10:00:00', '11:00:00', 1, 1),
  ('Desarrollo con React', 'Sumérgete en el emocionante mundo de React. Aprende las mejores prácticas, patrones y técnicas para desarrollar aplicaciones modernas y eficientes con la potencia de React.', '13:00:00', '13:30:00', 2, 2),
  ('Estrategias de Negocios', 'Una charla de estrategias de negocios clave para el éxito empresarial. Exploraremos tácticas innovadoras, enfoques de mercado y decisiones estratégicas.', '15:00:00', '16:30:00', 3, 3),
  ('Innovación en Startups', 'Descubre cómo la innovación impulsa el crecimiento en el ecosistema de startups. Examinaremos casos de estudio y prácticas de innovación de exitosas Startups.', '09:00:00', '10:30:00', 4, 1),
  ('Avances en JavaScript', 'Mantente actualizado con los últimos avances en el mundo de JavaScript. Esta charla proporcionará una visión panorámica de los emocionantes desarrollos en el universo JavaScript.', '14:00:00', '15:30:00', 1, 2);
