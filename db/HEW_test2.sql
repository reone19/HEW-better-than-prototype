set character_set_client=sjis;
set character_set_connection=utf8;
set character_set_results=sjis;
set character_set_server=utf8;
CREATE DATABASE HEW_test2;
USE HEW_test2;
CREATE TABLE money(
	id INT PRIMARY KEY,
	name VARCHAR(25),
	img VARCHAR(30),s
	price INT,
	count INT
);
DELETE FROM member;
INSERT INTO member(id,name,img,price,count) VALUES(1,'たろう',"tt",300,0);
INSERT INTO member(id,name,img,price,count) VALUES(2,'慎太郎',"ttt",500,0);
INSERT INTO member(id,name,img,price,count) VALUES(3,'雄太郎',"tttt",600,0);
INSERT INTO member(id,name,img,price,count) VALUES(4,'かとう',"ttttt",1000,0);
INSERT INTO member(id,name,img,price,count) VALUES(5,'ゆかり',"tttttt",1600,0);
INSERT INTO member(id,name,img,price,count) VALUES(6,'カナリア',"ttttttt",3100,0);
INSERT INTO member(id,name,img,price,count) VALUES(7,'あほう',"images/IMG_0039.png",6500,0);


