CREATE TABLE personne (
    personneid INT(11) PRIMARY KEY AUTO_INCREMENT,
    client_id INT(11) NOT NULL,
    date_achat DATETIME NOT NULL,
    reference VARCHAR(255) NOT NULL,
    prix_total FLOAT NOT NULL,)