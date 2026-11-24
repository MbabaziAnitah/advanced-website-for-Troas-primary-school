-- Troas Primary School: MySQL schema (only needed if you choose MySQL instead of the default SQLite).
-- 1) Create admin/config.local.php with:  $DB_DRIVER='mysql'; $DB_HOST='localhost'; $DB_NAME='troas_school'; $DB_USER='root'; $DB_PASS='';
-- 2) Import this file with phpMyAdmin.
CREATE DATABASE IF NOT EXISTS troas_school CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci; USE troas_school;
CREATE TABLE IF NOT EXISTS admins(id INT AUTO_INCREMENT PRIMARY KEY,username VARCHAR(60) NOT NULL UNIQUE,password_hash VARCHAR(255) NOT NULL,created_at DATETIME NULL,last_login DATETIME NULL);
CREATE TABLE IF NOT EXISTS admissions(id INT AUTO_INCREMENT PRIMARY KEY,pupil_name VARCHAR(120) NOT NULL,dob DATE NOT NULL,gender VARCHAR(20) NOT NULL,class_id INT NOT NULL,class_name VARCHAR(50) NOT NULL,boarding VARCHAR(20) NOT NULL,previous_school VARCHAR(150),parent_name VARCHAR(120) NOT NULL,phone VARCHAR(30) NOT NULL,email VARCHAR(150),address VARCHAR(200),status VARCHAR(30) NOT NULL DEFAULT 'New',created_at DATETIME NULL);
CREATE TABLE IF NOT EXISTS messages(id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(100) NOT NULL,email VARCHAR(150) NOT NULL,subject VARCHAR(150),message TEXT NOT NULL,status VARCHAR(30) NOT NULL DEFAULT 'New',created_at DATETIME NULL);
CREATE TABLE IF NOT EXISTS content_items(id INT AUTO_INCREMENT PRIMARY KEY,type VARCHAR(20) NOT NULL,title VARCHAR(180) NOT NULL,body TEXT,extra VARCHAR(500),image VARCHAR(255),link_text VARCHAR(60),link_url VARCHAR(300),sort_order INT NOT NULL DEFAULT 0,active TINYINT(1) NOT NULL DEFAULT 1,created_at DATETIME NULL,updated_at DATETIME NULL);
-- Default login: username admin / password TroasAdmin2026! (change immediately after first login)
INSERT IGNORE INTO admins(username,password_hash,created_at) VALUES('admin','$2y$12$1pmY55s9ieG6Uz/O1oPwO.UIuf1JbuicILckr3p7rjvcDmpXp5k1y',NOW());
INSERT INTO content_items(type,title,body,image,link_text,link_url,sort_order,active,created_at,updated_at) VALUES
('slides','Nurturing Young Minds for a Bright Future','Quality education in a safe, caring environment in Njeru, Buikwe.','assets/images/slide-campus.jpg','Apply for admission','admissions.html',1,1,NOW(),NOW()),
('slides','A Campus Made for Learning','Bright classrooms, open green spaces and a safe environment for every child.','assets/images/slide-building.jpg','Take a tour','about.html',2,1,NOW(),NOW()),
('slides','Strong Foundations, Nursery to Primary Seven','Dedicated teachers, modern methods and individual attention for every learner.','assets/images/slide-classroom.jpg','Our programmes','programmes.html',3,1,NOW(),NOW()),
('slides','Every Talent Has a Stage','Music, dance, drama and clubs help children discover what they love.','assets/images/slide-concert.jpg','See the gallery','gallery.html',4,1,NOW(),NOW()),
('slides','Discipline, Teamwork and Sport','From track and field to swimming, we build healthy, confident learners.','assets/images/slide-athletics.jpg','Latest news','news.html',5,1,NOW(),NOW()),
('slides','Champions in the Making','Our teams train hard, play fair and never give up.','assets/images/sports-team.jpg','Sports news','news-sports.html',6,1,NOW(),NOW()),
('slides','Care, Guidance and Counselling','Teachers and counsellors who listen, support and walk with every child.','assets/images/counselling.jpg','Contact us','contact.html',7,1,NOW(),NOW()),
('slides','One Troas Family','Parents, teachers and learners working together. Never give up.','assets/images/slide-assembly.jpg','About our school','about.html',8,1,NOW(),NOW());
