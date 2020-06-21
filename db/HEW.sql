set character_set_client=sjis;
set character_set_connection=utf8;
set character_set_results=sjis;
set character_set_server=utf8;
CREATE DATABASE HEW;
USE HEW;
CREATE TABLE money1(
	id INT PRIMARY KEY,
	name VARCHAR(100),
	img VARCHAR(50),
	price INT,
	count INT
);
DELETE FROM money1;
INSERT INTO money1(id,name,img,price,count) VALUES(1,'ダイソー(DAISO)：ブループラネットG-SHOCK風',"cost_img/sozai4.jpeg",300,0);
INSERT INTO money1(id,name,img,price,count) VALUES(2,'ダイソー(DAISO)：ミリウォッチ',"cost_img/sozai2.jpg",500,0);
INSERT INTO money1(id,name,img,price,count) VALUES(3,'カレン(CURREN)：ビジネス ファッション 腕時計 8291G',"cost_img/sozai13.jpg",2688,0);
INSERT INTO money1(id,name,img,price,count) VALUES(4,'カシオ(CASIO)：AW-80-1AJF',"cost_img/sozai9.jpg",3300,0);
INSERT INTO money1(id,name,img,price,count) VALUES(5,'カシオ(CASIO)：HDA-600B-7BJF',"cost_img/sozai8.jpg",6490,0);
INSERT INTO money1(id,name,img,price,count) VALUES(6,'インビクタ：フォースクロノグラフ　腕時計 1512',"cost_img/sozai8.jpg",8231,0);

DELETE FROM money2(id,name,img,price,count) VALUES(3,'マークジェイコブス(Marc Jacobs)：SET_（カラー複数あり）腕時計',"cost_img/sozai13.jpg",2688,0);
INSERT INTO money2(id,name,img,price,count) VALUES(1,'サルバトーレ・マーラ：腕時計SM12105S-SSWH',"money_img/sozai1.webp",14080,0);
INSERT INTO money2(id,name,img,price,count) VALUES(2,'株式会社ドウシシャ：フルボ腕時計F02-SWHLG',"money_img/sozai1.jpg",19800,0);
INSERT INTO money2(id,name,img,price,count) VALUES(3,'マークジェイコブス(Marc Jacobs)：SET_（カラー複数あり）腕時計',"high_img/sozai7.jpg",24200,0);
INSERT INTO money2(id,name,img,price,count) VALUES(4,'ニクソン(NIXON)：セントリークロノレザー腕時計A4051888',"money_img/sozai2.jpg",24200,0);
INSERT INTO money2(id,name,img,price,count) VALUES(5,'シチズン(CITIZEN)：腕時計ダイレクトフライト CB1120-50E',"money_img/sozai3.webp",22000,0);
INSERT INTO money2(id,name,img,price,count) VALUES(6,'スイスミリタリー(SWISS MILITARY HANOWA)：腕時計CHALLENGER PRO ML442',"money_img/sozai2.webp",38500,0);
INSERT INTO money2(id,name,img,price,count) VALUES(7,'ティソ(TISSOT)：腕時計1000シースター クロノグラフ',"money_img/sozai5.webp",77000,0);
INSERT INTO money2(id,name,img,price,count) VALUES(8,'カシオ(CASIO)：腕時計プロトレックPRW-7000FC-1JF',"money_img/sozai6.webp",90000,0);


DELETE FROM money3;
INSERT INTO money3(id,name,img,price,count) VALUES(1,'ハミルトン(HAMILTON)：腕時計H24411732 Ventura Quartz ベンチュラ',"money_img/sozai13.jpg",100100,0);
INSERT INTO money3(id,name,img,price,count) VALUES(2,'セイコー(SEIKO)：腕時計アストロンSBXC015',"money_img/sozai4.jpg",200000,0);
INSERT INTO money3(id,name,img,price,count) VALUES(3,'シチズン(CITIZEN)：腕時計アテッサCC4006-61E',"money_img/sozai5.jpg",270000,0);
INSERT INTO money3(id,name,img,price,count) VALUES(4,'パネライ(PANERAI)：腕時計RADIOMIR BASE 3 DAYS ACCIAIO - 45MM',"money_img/sozai6.jpg",506000,0);
INSERT INTO money3(id,name,img,price,count) VALUES(5,'オメガ(OMEGA)：腕時計スピードマスター レーシング マスター クロノメーター',"money_img/sozai12.jpg",700201,0);
INSERT INTO money3(id,name,img,price,count) VALUES(6,'ブルガリ(Bulgari)：腕時計BGO41BSLDCH オクト',"money_img/sozai8.webp",902370,0);
INSERT INTO money3(id,name,img,price,count) VALUES(7,'パテック・フィリップ(Patek Philippe)：腕時計5712R',"money_img/sozai8.jpg",5281200,0);
INSERT INTO money3(id,name,img,price,count) VALUES(8,'グランドセイコー（Grand Seiko)：腕時計SBGZ001',"money_img/sozai9.jpg",8000000,0);
INSERT INTO money3(id,name,img,price,count) VALUES(9,'ヴァシュロン コンスタンス：腕時計Traditionnelle Skeleton Perpetual Calendar 43172/000P-9236',"money_img/sozai10.jpg",12512999,0);
INSERT INTO money3(id,name,img,price,count) VALUES(10,'リシャールミル(RICHARD MILLE)：腕時計RM11-02',"money_img/sozai11.jpg",20088000,0);






