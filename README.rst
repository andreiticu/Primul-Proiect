SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `images` (
  `id` int(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `images` (`id`, `title`, `image`) VALUES
(3, 'Crema de zahar ars', 'images/im8.jpg'),
(4, 'Avocado', './images/im9.jpg'),
(8, 'Vafe si trandafiri', './images/im7.jpg'),
(10, 'Pui umplut', './images/PuiUmplut.jpg');
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `images`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
