CREATE DATABASE `db_tracks`;
USE `db_tracks`;
CREATE TABLE `tbl_music` (
  `mus_id` int(5)UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(180) NOT NULL DEFAULT '',
  `genre` varchar(180) NOT NULL DEFAULT '',
  `artist` varchar(180) NOT NULL DEFAULT '',
  `album` varchar(180) NOT NULL DEFAULT '',
  PRIMARY KEY (`mus_id`)
) COLLATE='latin1_swedish_ci' ENGINE=MyISAM AUTO_INCREMENT=10000;

INSERT INTO `tbl_music` (title, genre, artist, album) VALUES
('Duck Song', 'Children', 'Duck', 'Duckie Momo');

INSERT INTO `tbl_music` (title, genre, artist, album) VALUES
('Concrete', 'Pop Metal', 'Poppy', 'I Disagree');

INSERT INTO `tbl_music` (title, genre, artist, album) VALUES
('People of the Sun', 'Metal', 'Rage Against the Machine', 'Evil Empire');
