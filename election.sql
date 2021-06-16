-- Run this code in phpmyadmin

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `votes` (
  `sno` int(11) NOT NULL,
  `participant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-

INSERT INTO `votes` (`sno`, `participant`) VALUES
(1, 'a'),
(2, 'a'),
(3, 'b'),
(4, 'c'),
(5, 'c'),
(6, 'd'),
(7, 'd'),
(8, 'a'),
(9, 'd'),
(10, 'b'),
(11, 'b');

ALTER TABLE `votes`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `votes`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

