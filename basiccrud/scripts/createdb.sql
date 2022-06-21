CREATE DATABASE basiccrud;
USE basiccrud;
CREATE TABLE student (

                         id INT NOT NULL AUTO_INCREMENT,
                         voornaam VARCHAR(50),
                         achternaam VARCHAR(50),
                         PRIMARY KEY (id)
);

USE basiccrud;
ALTER TABLE student
ADD email VARCHAR(50) NULL,
ADD telefoonnummer VARCHAR(10) NULL,
ADD straatnaam VARCHAR(50) NOT NULL,
ADD huisnummer INT NOT NULL,
ADD huisnummer_toevoeging VARCHAR(10) NULL,
ADD woonplaats VARCHAR(50) NOT NULL,
ADD postcode VARCHAR(6) NOT NULL;

USE basiccrud;
CREATE TABLE klas (
                         id INT NOT NULL AUTO_INCREMENT,
                         code VARCHAR(15),
                         vestiging VARCHAR(20),
                         sectie VARCHAR(20),
                         cohort INT,
                         PRIMARY KEY (id)
);

USE basiccrud;
ALTER TABLE student
    ADD klas_id VARCHAR(15) NOT NULL ;