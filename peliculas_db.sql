CREATE DATABASE pelicula;
USE pelicula;

CREATE TABLE peliculas (
  id INT AUTO_INCREMENT,
  titulo VARCHAR(100),
  genero VARCHAR(50),
  director VARCHAR(100),
  year INT,      
  duracion INT,
  pais VARCHAR(50),
  idioma VARCHAR(50),
  calificacion DECIMAL(2,1),
  plataforma VARCHAR(50),
  comentario TEXT,
  PRIMARY KEY (id)
);

INSERT INTO peliculas 
(titulo, genero, director, year, duracion, pais, idioma, calificacion, plataforma, comentario)
VALUES
('F1', 'Deportes', 'Joseph Kosinski', 2024, 150, 'EE.UU.', 'Inglés', 8.5, 'Cine', 'Película sobre la Fórmula 1'),
('Transformers', 'Acción', 'Michael Bay', 2007, 144, 'EE.UU.', 'Inglés', 7.8, 'Netflix', 'Robots y acción'),
('Gran Turismo', 'Deportes', 'Neill Blomkamp', 2023, 135, 'EE.UU.', 'Inglés', 8.2, 'Prime Video', 'Basada en hechos reales'),
('Avengers', 'Superhéroes', 'Joss Whedon', 2012, 143, 'EE.UU.', 'Inglés', 9.0, 'Disney+', 'Marvel'),
('Rocky', 'Drama', 'John G. Avildsen', 1976, 120, 'EE.UU.', 'Inglés', 8.9, 'Prime Video', 'Clásico del boxeo');