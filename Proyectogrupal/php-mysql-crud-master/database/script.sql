CREATE DATABASE miscursos;

use miscursos;

CREATE TABLE (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  curso set('Principiante', 'Intermedio', 'Avanzado'),
  dni BIGINT(20),
  nombre VARCHAR(100) NOT NULL,
  apellido VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  FECHA TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE task;
