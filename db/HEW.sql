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
INSERT INTO money1(id,name,img,price,count) VALUES(1,'�_�C�\�[(DAISO)�F�u���[�v���l�b�gG-SHOCK��',"cost_img/sozai4.jpeg",300,0);
INSERT INTO money1(id,name,img,price,count) VALUES(2,'�_�C�\�[(DAISO)�F�~���E�H�b�`',"cost_img/sozai2.jpg",500,0);
INSERT INTO money1(id,name,img,price,count) VALUES(3,'�J����(CURREN)�F�r�W�l�X �t�@�b�V���� �r���v 8291G',"cost_img/sozai13.jpg",2688,0);
INSERT INTO money1(id,name,img,price,count) VALUES(4,'�J�V�I(CASIO)�FAW-80-1AJF',"cost_img/sozai9.jpg",3300,0);
INSERT INTO money1(id,name,img,price,count) VALUES(5,'�J�V�I(CASIO)�FHDA-600B-7BJF',"cost_img/sozai8.jpg",6490,0);
INSERT INTO money1(id,name,img,price,count) VALUES(6,'�C���r�N�^�F�t�H�[�X�N���m�O���t�@�r���v 1512',"cost_img/sozai8.jpg",8231,0);

DELETE FROM money2(id,name,img,price,count) VALUES(3,'�}�[�N�W�F�C�R�u�X(Marc Jacobs)�FSET_�i�J���[��������j�r���v',"cost_img/sozai13.jpg",2688,0);
INSERT INTO money2(id,name,img,price,count) VALUES(1,'�T���o�g�[���E�}�[���F�r���vSM12105S-SSWH',"money_img/sozai1.webp",14080,0);
INSERT INTO money2(id,name,img,price,count) VALUES(2,'������Ѓh�E�V�V���F�t���{�r���vF02-SWHLG',"money_img/sozai1.jpg",19800,0);
INSERT INTO money2(id,name,img,price,count) VALUES(3,'�}�[�N�W�F�C�R�u�X(Marc Jacobs)�FSET_�i�J���[��������j�r���v',"high_img/sozai7.jpg",24200,0);
INSERT INTO money2(id,name,img,price,count) VALUES(4,'�j�N�\��(NIXON)�F�Z���g���[�N���m���U�[�r���vA4051888',"money_img/sozai2.jpg",24200,0);
INSERT INTO money2(id,name,img,price,count) VALUES(5,'�V�`�Y��(CITIZEN)�F�r���v�_�C���N�g�t���C�g CB1120-50E',"money_img/sozai3.webp",22000,0);
INSERT INTO money2(id,name,img,price,count) VALUES(6,'�X�C�X�~���^���[(SWISS MILITARY HANOWA)�F�r���vCHALLENGER PRO ML442',"money_img/sozai2.webp",38500,0);
INSERT INTO money2(id,name,img,price,count) VALUES(7,'�e�B�\(TISSOT)�F�r���v1000�V�[�X�^�[ �N���m�O���t',"money_img/sozai5.webp",77000,0);
INSERT INTO money2(id,name,img,price,count) VALUES(8,'�J�V�I(CASIO)�F�r���v�v���g���b�NPRW-7000FC-1JF',"money_img/sozai6.webp",90000,0);


DELETE FROM money3;
INSERT INTO money3(id,name,img,price,count) VALUES(1,'�n�~���g��(HAMILTON)�F�r���vH24411732 Ventura Quartz �x���`����',"money_img/sozai13.jpg",100100,0);
INSERT INTO money3(id,name,img,price,count) VALUES(2,'�Z�C�R�[(SEIKO)�F�r���v�A�X�g����SBXC015',"money_img/sozai4.jpg",200000,0);
INSERT INTO money3(id,name,img,price,count) VALUES(3,'�V�`�Y��(CITIZEN)�F�r���v�A�e�b�TCC4006-61E',"money_img/sozai5.jpg",270000,0);
INSERT INTO money3(id,name,img,price,count) VALUES(4,'�p�l���C(PANERAI)�F�r���vRADIOMIR BASE 3 DAYS ACCIAIO - 45MM',"money_img/sozai6.jpg",506000,0);
INSERT INTO money3(id,name,img,price,count) VALUES(5,'�I���K(OMEGA)�F�r���v�X�s�[�h�}�X�^�[ ���[�V���O �}�X�^�[ �N���m���[�^�[',"money_img/sozai12.jpg",700201,0);
INSERT INTO money3(id,name,img,price,count) VALUES(6,'�u���K��(Bulgari)�F�r���vBGO41BSLDCH �I�N�g',"money_img/sozai8.webp",902370,0);
INSERT INTO money3(id,name,img,price,count) VALUES(7,'�p�e�b�N�E�t�B���b�v(Patek Philippe)�F�r���v5712R',"money_img/sozai8.jpg",5281200,0);
INSERT INTO money3(id,name,img,price,count) VALUES(8,'�O�����h�Z�C�R�[�iGrand Seiko)�F�r���vSBGZ001',"money_img/sozai9.jpg",8000000,0);
INSERT INTO money3(id,name,img,price,count) VALUES(9,'���@�V������ �R���X�^���X�F�r���vTraditionnelle Skeleton Perpetual Calendar 43172/000P-9236',"money_img/sozai10.jpg",12512999,0);
INSERT INTO money3(id,name,img,price,count) VALUES(10,'���V���[���~��(RICHARD MILLE)�F�r���vRM11-02',"money_img/sozai11.jpg",20088000,0);






