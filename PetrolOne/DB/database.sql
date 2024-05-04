CREATE DATABASE IF NOT EXISTS petrolone;


USE petrolone;

CREATE TABLE utenti(
    username varchar(16),
    pwd varchar(20) PRIMARY KEY,
    nome_azienda varchar(20),
    indirizzo varchar(20),
    partita_iva varchar(11)
    );