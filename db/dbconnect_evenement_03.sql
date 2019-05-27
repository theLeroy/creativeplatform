INSERT INTO users
(firstname,lastname,username,email,password)
VALUES
('Florin', 'Hugentobler', 'hugento.f', 'hugentoblerf@mail.ch', SHA1('abcd1234')),
('Julian', 'Rupp', 'iamtschulian', 'ruppjul@gmail.com', SHA1('abcd1234')),
('Janis', 'Wanger', 'tschanis', 'janiswanger@gmail.com', SHA1('abcd1234'));

INSERT INTO projects
(timestamp, name, description, teaser)
VALUES
('2018-06-23T18:00:00', 'Malfest', 'Wir organisieren ein Fest, an dem man Malen, Sprayen, Trinken, Essen und Spass haben kann.
  Dafür benötige ich noch Hilfe. Denn es ist das erste Mal, dass ich so ein Fest mache und ich weiss
  nicht wie ich überhaupt starten soll. Ich bin ein Jugendlicher aus Bern und mache eine Lehre als Mediamatiker.
  Alle die mitmachen profitieren von Frinks und Frood, welche ich organisiere.
  Am Fest würde ich den "Job" als Fotograf übernehmen und bräuchte folgendes:', 'Das Malfest ist ein Fest, an dem man Malen, Sprayen, Trinken, Essen und Spass haben kann. Schaut doch mal rein :).');

INSERT INTO publish
(users_id, projects_id)
VALUES
(2, 1);

INSERT INTO partners
(projects_id, function, wage)
VALUES
(1, 'Auktionsmeister', 0),
(1, 'Barmann 1', 0),
(1, 'Barmann 2', 0),
(1, 'Grillmeister', 0);

INSERT INTO objects
(projects_id, prop, wage)
VALUES
(1, 'Bretter zum Malen', 100),
(1, 'Getränke', 300),
(1, 'Location', 200);
