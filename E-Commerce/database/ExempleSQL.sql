-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 nov. 2023 à 10:42
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`) VALUES
(5, 'Le meilleur article', 'Aliquam erat volutpat. Nunc vulputate tellus nec pulvinar tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ut massa arcu. Donec tempor ante et magna dignissim mollis sit amet vel odio. Fusce risus orci, maximus ut nibh et, facilisis ullamcorper leo. Proin finibus sollicitudin turpis, eget sodales purus dignissim ac. Suspendisse pretium nibh vel est sagittis, ac imperdiet sapien mattis. In nec semper risus. Fusce auctor, libero eu sodales tincidunt, mauris augue semper risus, in molestie libero ligula nec diam. Nulla facilisi. Morbi ac rutrum neque. Sed vestibulum lacus eu augue lacinia maximus. Donec ut tristique ante. Nulla interdum orci at aliquet aliquam.\r\n\r\nSed enim est, imperdiet vel sagittis vitae, egestas sit amet magna. Pellentesque tempus nisl magna, et faucibus nisl posuere non. Vestibulum vulputate risus et lectus vehicula, vitae cursus tellus aliquam. In ut nisi vitae elit vehicula auctor. Suspendisse id consequat turpis. Proin et erat lectus. Suspendisse viverra commodo nisl eu efficitur.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra interdum lorem, ut volutpat turpis euismod nec. Aliquam tempor diam non est tempor consequat. In sit amet sem id elit sagittis dapibus. Vivamus feugiat arcu id vulputate porttitor. Nullam nec iaculis lorem. Phasellus tempus molestie augue, nec porta velit fermentum a. Vivamus lacus turpis, venenatis ac nisl ut, euismod interdum tellus. Nunc lacinia, odio blandit feugiat accumsan, nulla augue venenatis sapien, tincidunt sodales diam arcu non ante. Sed faucibus eros neque, ac pharetra enim venenatis non. Etiam posuere et sapien accumsan ullamcorper. Mauris vestibulum neque in suscipit venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum venenatis fermentum ex, a cursus quam rhoncus a. Phasellus congue nisl turpis, nec consectetur magna sollicitudin non.\r\n\r\nDonec venenatis risus sed pretium suscipit. Duis pharetra lectus ut ante ultricies accumsan. Cras dignissim congue semper. Etiam dapibus ex quis laoreet consequat. Morbi ornare posuere porta. Maecenas sollicitudin neque nisl, quis pharetra lectus mollis bibendum. Donec luctus elit in lorem pulvinar viverra. Aliquam ut sodales nisi. Suspendisse potenti. In elementum, arcu id tempus sodales, lectus lacus volutpat turpis, vitae lacinia massa urna non massa. Donec eget purus a turpis cursus imperdiet. Proin lobortis nisi sed consequat ullamcorper.\r\n\r\nEtiam eu mauris libero. Donec tellus ante, vestibulum et nisl sed, pellentesque varius turpis. Quisque blandit, lacus a dictum mattis, lectus erat sagittis libero, a gravida neque tellus vitae lorem. Integer cursus suscipit quam dignissim sagittis. Aliquam erat volutpat. Vivamus aliquet luctus tortor, sed tempus ipsum fermentum non. Nullam a felis venenatis, vehicula lacus at, semper tellus. Integer iaculis, odio quis placerat suscipit, nisi quam mattis urna, eu tristique ex dolor id tellus. Donec ullamcorper, velit ultrices mollis eleifend, justo eros sodales mi, ac lacinia velit massa in turpis. Aenean ac sapien eu mauris ornare placerat. Quisque blandit, nulla at eleifend imperdiet, nibh magna laoreet turpis, sed auctor tortor purus sed enim. Aenean tempor vulputate tellus, a ultrices tortor condimentum id. Praesent condimentum ligula ut tortor commodo venenatis. Proin posuere purus id metus faucibus eleifend. Vestibulum vehicula dapibus lacinia. Maecenas enim tortor, auctor ac sodales vitae, consectetur vitae ipsum.', '2023-11-19 10:35:18'),
(6, 'Un lorem pas comme les autres ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ante metus, in laoreet mi imperdiet eu. Duis at ipsum ac tellus porttitor vestibulum. Quisque commodo justo eu tortor venenatis eleifend. Sed et tristique ex, eu ultrices justo. Fusce vitae nisl ac neque accumsan rhoncus id ut nibh. Cras volutpat augue vel mi laoreet, vestibulum blandit nisi porttitor. Donec ut scelerisque mi. Donec pellentesque tortor a elit molestie semper. Donec ut dui iaculis, efficitur nibh eget, dignissim nulla. Ut suscipit dapibus lacus sodales consectetur. Curabitur varius dui ac nisi bibendum, in tristique est lacinia. Aliquam condimentum bibendum lacus, in interdum ante faucibus et.\r\n\r\nEtiam interdum dapibus quam nec posuere. Nulla gravida orci sed iaculis suscipit. Aliquam luctus nisl vitae leo congue placerat. Quisque aliquet non nulla ut lacinia. Cras pharetra ligula ac enim feugiat, vel interdum nulla blandit. Aenean mattis feugiat luctus. Aliquam in pharetra elit.\r\n\r\nNulla eget nunc commodo, vehicula dolor vitae, dapibus lectus. Nam non enim fermentum, porta purus sed, accumsan neque. Maecenas in metus faucibus, vestibulum leo non, consectetur est. Integer at libero eget diam cursus fringilla. Aenean aliquam, turpis vulputate interdum suscipit, neque enim sagittis tortor, quis rutrum dui nisi at turpis. Sed luctus pulvinar gravida. Aenean efficitur ligula nec leo faucibus vehicula. Pellentesque blandit, ex eget aliquam luctus, turpis eros viverra nulla, vitae ullamcorper magna ante a diam. Nunc semper fermentum eros non bibendum. Praesent rhoncus tellus at nibh convallis, lobortis hendrerit orci convallis. Vestibulum leo lacus, porta sit amet euismod ac, iaculis eu neque. Sed ut consequat turpis, sit amet posuere massa. Mauris eu vestibulum leo. Morbi lacinia molestie metus, a luctus turpis. Nulla lacinia blandit odio, quis mollis nulla consectetur et.\r\n\r\nEtiam felis leo, sodales nec tempus at, tristique nec tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ornare mollis mattis. Aliquam a tempor enim. Etiam suscipit velit tortor, vel scelerisque velit dignissim ac. Aenean dictum ultrices elit eget eleifend. Fusce pulvinar purus libero, nec tempus magna mollis ut. Nam dignissim mauris at ante scelerisque, sit amet posuere dolor sodales.\r\n\r\nIn in enim nec nisl scelerisque maximus. Mauris tellus sem, dignissim eget varius quis, condimentum vel ante. Pellentesque fermentum augue mauris, quis fringilla diam tincidunt vitae. Proin id porta erat. Etiam eu ultrices enim, et rutrum leo. Duis rutrum nisl mauris, rhoncus tristique elit volutpat a. Phasellus hendrerit, purus id finibus volutpat, nulla justo tristique enim, pretium ornare arcu nisi porttitor justo.', '2023-11-19 16:09:54'),
(7, 'Un article pour la forme edited', '                Nulla ultrices sollicitudin nisi, ac luctus lorem ullamcorper at. Nam auctor, urna eu scelerisque sodales, lorem sem mollis augue, ac consequat sapien eros in sapien. Sed in porttitor turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam scelerisque ac magna et vestibulum. Aliquam facilisis ante nec erat dictum, et gravida ligula tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod sem nisl, nec laoreet mi porttitor at. Donec vulputate orci sit amet libero venenatis fermentum. Ut vel mattis purus. Morbi sit amet lectus consequat, efficitur justo sed, sollicitudin libero. Morbi fringilla, tellus vel sagittis rutrum, est dolor dapibus magna, nec condimentum ipsum ante quis sapien. Suspendisse rutrum nulla porttitor, fermentum est quis, tempus ligula.\r\n\r\nedited \r\n\r\nNulla odio risus, elementum eu risus et, mattis tempor tellus. Curabitur nec fermentum justo. Aliquam imperdiet dignissim luctus. In tristique nisl lectus, eget tincidunt ex imperdiet at. Nulla maximus condimentum ornare. Ut id erat vel purus mollis tempor ut egestas velit. Vivamus ac viverra diam. In in nulla sed ligula euismod interdum id quis turpis. Nullam luctus metus nec malesuada elementum.\r\n\r\nIn pellentesque et neque sed blandit. Ut pretium arcu quis vehicula aliquet. Vivamus sed turpis nec leo vestibulum gravida. Etiam imperdiet lorem eu elit sagittis dictum. Vestibulum sit amet laoreet lorem, pretium tristique ante. Praesent porta lacus eu odio dictum tempus. Curabitur congue, lorem tincidunt consectetur euismod, arcu tortor dignissim massa, nec rhoncus libero arcu eu quam. Nulla porta vestibulum semper.        ', '2023-11-19 16:11:54'),
(15, 'Le nouvelle article ', 'Un nouvelle article crée avec le backoffice                         ', '2023-11-20 16:57:50');

-- --------------------------------------------------------

--
-- Structure de la table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`) VALUES
(7, 5, 3),
(8, 5, 2),
(9, 6, 4),
(12, 7, 1),
(13, 7, 2),
(17, 15, 3);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`) VALUES
(1, 'PHP', '2023-11-19 10:34:19'),
(2, 'JS', '2023-11-19 10:34:19'),
(3, 'Python', '2023-11-19 10:34:44'),
(4, 'SQL', '2023-11-19 10:34:44');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`) VALUES
(2, 'admin', '$2y$10$jaASEoKTaMeu95RT6N31gervXL7kcxi9O72vwT/kQOAwf9tN8W75q', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`post_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
