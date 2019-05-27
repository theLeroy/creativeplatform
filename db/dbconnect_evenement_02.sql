DROP TABLE IF EXISTS partners;
DROP TABLE IF EXISTS objects;
DROP TABLE IF EXISTS publish;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS projects;

CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  firstname VARCHAR(255),
  lastname VARCHAR(255),
  username VARCHAR(50),
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE projects (
  id SERIAL PRIMARY KEY,
  timestamp DATETIME,
  name VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  teaser TEXT NOT NULL
);

CREATE TABLE publish (
  id SERIAL PRIMARY KEY,
  users_id BIGINT UNSIGNED,
  FOREIGN KEY (users_id) REFERENCES users(id),
  projects_id BIGINT UNSIGNED,
  FOREIGN KEY (projects_id) REFERENCES projects(id)
);

CREATE TABLE partners (
  id SERIAL PRIMARY KEY,
  projects_id BIGINT UNSIGNED,
  FOREIGN KEY (projects_id) REFERENCES projects(id),
  function VARCHAR(255),
  wage int
);

CREATE TABLE objects (
  id SERIAL PRIMARY KEY,
  projects_id BIGINT UNSIGNED,
  FOREIGN KEY (projects_id) REFERENCES projects(id),
  prop VARCHAR(255),
  wage int
);
