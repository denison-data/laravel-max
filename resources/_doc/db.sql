// study 용이기 때문에 간단한 db.sql 파일을 만들어 보았습니다. 아래의 SQL 문을 이용하여 데이터베이스에 테이블을 생성하실 수 있습니다.

CREATE TABLE posts (
id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
`subject` VARCHAR(255),
content TEXT,
PRIMARY KEY(id)
);

CREATE TABLE users (
id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
`name` VARCHAR(100),
phone VARCHAR(30),
email VARCHAR(100),
PRIMARY KEY(id)
);