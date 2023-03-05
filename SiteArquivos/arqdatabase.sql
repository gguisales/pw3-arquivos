CREATE DATABASE arqDataBase;
USE arqDataBase;

    CREATE TABLE usuarios (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nm_us VARCHAR(50) NOT NULL,
    email_user VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

    CREATE TABLE arquivo(
    cd_arquivo INT PRIMARY KEY AUTO_INCREMENT,
    nm_amostra VARCHAR(50),
    nm_arquivo VARCHAR(45)
    );