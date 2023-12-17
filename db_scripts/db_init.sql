CREATE DATABASE conf_bsas_db;


CREATE TABLE oradores (
    id int NOT NULL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    surename VARCHAR(50) NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL
);

CREATE TABLE topics (
    id int NOT NULL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    color_hex VARCHAR(6) NOT NULL
);

CREATE TABLE oradores_topics (
    id int NOT NULL PRIMARY KEY,
    orador_id int NOT NULL,
    topic_id int NOT NULL,
    FOREIGN KEY (orador_id) REFERENCES oradores(id),
    FOREIGN KEY (topic_id) REFERENCES topics(id)
);

CREATE TABLE charla (
    id int NOT NULL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(50) NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    topic_id int NOT NULL,
    FOREIGN KEY (topic_id) REFERENCES topics(id)
);


CREATE TABLE tikets (
    id int NOT NULL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    surename VARCHAR(50) NOT NULL,
    born_date DATE NOT NULL,
    sex CHAR(1)
);