-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 mars 2022 à 12:53
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutiquelaravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
    `id` int(255) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cart_product`
--

DROP TABLE IF EXISTS `cart_product`;
CREATE TABLE IF NOT EXISTS `cart_product` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `cart_id` int(11) NOT NULL,
    `product_id` int(11) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
    `id` int(25) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
                                            (1, 'furniture'),
                                            (2, 'bed'),
                                            (3, 'set'),
                                            (4, 'living room'),
                                            (5, 'bedroom'),
                                            (6, 'accessory'),
                                            (7, 'garden'),
                                            (8, 'seat'),
                                            (9, 'storage'),
                                            (10, 'bedding');

-- --------------------------------------------------------

--
-- Structure de la table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
CREATE TABLE IF NOT EXISTS `category_product` (
    `id` int(25) NOT NULL AUTO_INCREMENT,
    `category_id` int(255) NOT NULL,
    `product_id` int(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category_product`
--

INSERT INTO `category_product` (`id`, `category_id`, `product_id`) VALUES
                                                                       (32, 10, 1),
                                                                       (41, 8, 5),
                                                                       (40, 7, 5),
                                                                       (53, 3, 17),
                                                                       (39, 6, 5),
                                                                       (27, 5, 1),
                                                                       (26, 4, 4),
                                                                       (25, 4, 2),
                                                                       (24, 3, 4),
                                                                       (23, 3, 3),
                                                                       (22, 3, 2),
                                                                       (21, 2, 1),
                                                                       (20, 1, 4),
                                                                       (19, 1, 3),
                                                                       (18, 1, 2),
                                                                       (17, 1, 1),
                                                                       (33, 2, 21),
                                                                       (34, 3, 21),
                                                                       (35, 5, 22),
                                                                       (36, 6, 22),
                                                                       (37, 5, 23),
                                                                       (38, 6, 23),
                                                                       (49, 1, 17),
                                                                       (52, 2, 17),
                                                                       (54, 4, 17),
                                                                       (55, 5, 17);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch` int(11) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
    `id` int(25) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `description` text NOT NULL,
    `price` decimal(10,0) NOT NULL,
    `image` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
                                                                           (1, 'Wild Bed', 'In 2022, green plants and even trees in pots will continue to make their way into the home. They are becoming ever more abundant and it is safe to say that some bedrooms and many living rooms are beginning to resemble real urban jungles! And that\'s only natural: who wouldn\'t want to adopt the positive attitude towards organic decoration? Houseplants purify and refresh the air and bring the calm of nature indoors, don\'t they?', '650', 'https://deavita.fr/wp-content/uploads/2021/09/chambre-coucher-boheme-tendances-deco-plantes-vertes-exotiques.webp'),
(2, 'Wild Lounge', 'Apart from the omnipresent solid wood, raw concrete, white marble and black steel are also present in tomorrow\'s décor. However, the keen observer can see that their presence is certainly more restrained than in previous years. When it comes to metal finishes, brushed brass is gradually replacing the popular stainless steel.', '1300', 'https://deavita.fr/wp-content/uploads/2021/09/idees-tendances-deco-2022-culte-nature-matieres-brutes-textures.webp'),
                                                                           (3, 'Trendy Dining Room', 'When it comes to materials used in interior design, there is a certain craze for natural wood. This is not actually a recent phenomenon, but the 2022 decorating trends will pick up on the love for this fantastic organic material. On the floor, we are seeing the great return of light-coloured natural parquet in all its possible shades and strip arrangements. Use the same wood for furnishings and exposed ceiling beams, among other things, and it will be perfect!', '1950', 'https://deavita.fr/wp-content/uploads/2021/09/espaces-miltiofonctionnels-tendances-deco-2022-studio-mezzanine.webp'),
                                                                           (4, 'Chic Lounge', 'This style has slowly started to take off this year, but the \"grand-millennial\" will enjoy an ever-increasing vogue as we move into 2022. In short, this unique design trend is about appreciating traditional style from a modern perspective. You can expect to see tasteful antique decor, a vintage mirror on the wall, lots of brass and wicker, and an amazing variety of textures, patterns and colours. You could say that grand-millennial is the new bohemian style, decidedly eclectic, sometimes shockingly chic, but never boring.', '2200', 'https://deavita.fr/wp-content/uploads/2021/09/style-grand-millennial-tendances-deco-2022-salon-eclectique.webp'),
                                                                           (5, 'Cardboard chair', 'This beautiful chair to be filled with soil allows you to grow grass so that you can sit in fresh grass', '30', 'https://www.laboiteverte.fr/wp-content/uploads/2016/08/carton-chaise-herbe-07.jpg'),
                                                                           (17, 'tutu', 'jfureistgesul', '3', 'turlututu/tuttut');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email_verified_at` timestamp NULL DEFAULT NULL,
    `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
