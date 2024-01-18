-- Création de la base de données
CREATE DATABASE MaBaseDeDonnees;

-- Utilisation de la base de données
USE MaBaseDeDonnees;

-- Création de la table "roles"
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

-- Création de la table "users"
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    role_id INT NOT NULL,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);

-- Création de la table "messages"
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    receiver_id INT NOT NULL,
    expeditor_id INT,
    content VARCHAR(500),
    FOREIGN KEY (receiver_id) REFERENCES users(id),
    FOREIGN KEY (expeditor_id) REFERENCES users(id)
);

CREATE TABLE CHANNELS (
    
)

-- Insertion de données dans la table "roles"
INSERT INTO roles (name) VALUES ("Chatter");
INSERT INTO roles (name) VALUES ("admin");

-- Insertion de données dans la table "users"
INSERT INTO roles (name) VALUES ("Charles");
INSERT INTO roles (name) VALUES ("Luiz");
INSERT INTO users (username, password, role_id) VALUES ("Zelda", "toto", 1);
INSERT INTO users (username, password, role_id) VALUES ("Link", "toto", 2);
INSERT INTO users (username, password, role_id) VALUES ("Ganon", "toto", 1); -- Assurez-vous que Ganon a le rôle "Chatter" (1) ou "admin" (2) en fonction de votre intention.

-- Vous pouvez insérer des données dans la table "messages" de manière similaire.


