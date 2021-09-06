/*create table inside test_dumbways database*/
/*==========================================*/
CREATE TABLE category_tb (id INT AUTO_INCREMENT,
					 name VARCHAR(80),
					 PRIMARY KEY(id));

CREATE TABLE writer_tb (id INT AUTO_INCREMENT,
				    name VARCHAR(80),
				    book_id INT,
				    PRIMARY KEY(id));

CREATE TABLE book_tb (id INT AUTO_INCREMENT,
				  name VARCHAR(80),
				  category_id INT,
				  writer_id INT,
				  Publication_year INT,
				  img INT,
				  PRIMARY KEY(id),
				  FOREIGN KEY(category_id) REFERENCES category_tb(id)ON DELETE SET NULL,
				  FOREIGN KEY(writer_id) REFERENCES writer_tb(id)ON DELETE SET NULL);

ALTER TABLE writer_tb ADD FOREIGN KEY(book_id) REFERENCES book_tb(id);

/*insert data*/
/*============*/
INSERT INTO book_tb(name, category_id, writer_id, Publication_year, img) VALUES ('AngularJS Essentials',NULL , NULL, 2014, 1);
INSERT INTO category_tb(name) VALUES ('Web Development');
INSERT INTO writer_tb(name, book_id) VALUES ('Rodrigo Branas', 1);
UPDATE book_tb SET category_id = 1 WHERE id = 1;
UPDATE book_tb SET writer_id = 1 WHERE id = 1;

INSERT INTO book_tb(name, category_id, writer_id, Publication_year, img) VALUES ('Python GUI programming',NULL , NULL, 2018, 2);
INSERT INTO category_tb(name) VALUES ('App Development');
INSERT INTO writer_tb(name, book_id) VALUES ('Alan D. Moore', 2);
UPDATE book_tb SET category_id = 2 WHERE id = 2;
UPDATE book_tb SET writer_id = 2 WHERE id = 2;

INSERT INTO book_tb(name, category_id, writer_id, Publication_year, img) VALUES ('Unity 2018 By Example',NULL , NULL, 2018, 3);
INSERT INTO category_tb(name) VALUES ('Game Development');
INSERT INTO writer_tb(name, book_id) VALUES ('Alan Thorn', 3);
UPDATE book_tb SET category_id = 3 WHERE id = 3;
UPDATE book_tb SET writer_id = 3 WHERE id = 3;

INSERT INTO book_tb(name, category_id, writer_id, Publication_year, img) VALUES ('Rust High Performance',2 , NULL, 2018, 4);
INSERT INTO writer_tb(name, book_id) VALUES ('Iban Eguia Moraza', 4);
UPDATE book_tb SET writer_id = 4 WHERE id = 4;

/*query*/
/*======*/
SELECT * FROM book_tb;

SELECT b.id, b.name AS book_name, c.name AS category, w.name AS writer_name, b.Publication_year, b.img FROM book_tb  b JOIN category_tb c ON b.category_id = c.id JOIN writer_tb w ON b.writer_id = w.id;

SELECT writer_tb.id, writer_tb.name AS writer_name, book_tb.name AS book_name FROM writer_tb LEFT JOIN book_tb ON writer_tb.book_id = book_tb.id;

