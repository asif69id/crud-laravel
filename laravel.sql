CREATE TABLE `books` (
  `id` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
  `bookName` varchar(250) DEFAULT NULL,
  `bookPrice` varchar(250) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
