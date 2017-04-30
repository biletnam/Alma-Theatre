-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2017 at 09:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almatheatre`
--

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `total_seats` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `name`, `total_seats`) VALUES
(1, 'IMAX 3D', 60),
(2, 'Normal', 60);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `release_date` date NOT NULL,
  `genre` varchar(30) NOT NULL,
  `director` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration` time NOT NULL,
  `description` text NOT NULL,
  `youtube_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `release_date`, `genre`, `director`, `writer`, `name`, `duration`, `description`, `youtube_url`) VALUES
(1, '2017-03-03', 'Action, Drama, Sci-Fi', 'James Mangold', 'James Mangold, Scott Frank', 'Logan', '02:18:00', 'In the near future, a weary Logan (Hugh Jackman) cares for an ailing Professor X (Patrick Stewart) at a remote outpost on the Mexican border. His plan to hide from the outside world gets upended when he meets a young mutant (Dafne Keen) who is very much like him. Logan must now protect the girl and battle the dark forces that want to capture her.', 'DekuSxJgpbY'),
(2, '2017-03-17', 'Family, Fantasy, Musical', 'Bill Condon', 'Stephen Chbosky, Evan Spiliotopoulos', 'Beauty and the Beast', '02:10:00', 'Belle (Emma Watson), a bright, beautiful and independent young woman, is taken prisoner by a beast (Dan Stevens) in its castle. Despite her fears, she befriends the castle\'s enchanted staff and learns to look beyond the beast\'s hideous exterior, allowing her to recognize the kind heart and soul of the true prince that hides on the inside.', 'k-AyhL9AR9Q'),
(3, '2017-03-10', 'Action, Adventure, Fantasy', 'Jordan Vogt-Roberts', 'Dan Gilroy, Max Borenstein', 'Kong: Skull Island', '02:00:00', 'Scientists, soldiers and adventurers unite to explore a mythical, uncharted island in the Pacific Ocean. Cut off from everything they know, they venture into the domain of the mighty Kong, igniting the ultimate battle between man and nature. As their mission of discovery soon becomes one of survival, they must fight to escape from a primal world where humanity does not belong.', 'rV7KX3LsmTk'),
(4, '2017-02-10', 'Crime, Thriller, Action', 'Chad Stahelski', 'Derek Kolstad', 'John Wick: Chapter 2', '02:02:00', 'Retired super-assassin John Wick\'s plans to resume a quiet civilian life are cut short when Italian gangster Santino D\'Antonio shows up on his doorstep with a gold marker, compelling him to repay past favors. Ordered by Winston, kingpin of secret assassin society The Continental, to respect the organization\'s ancient code, Wick reluctantly accepts the assignment to travel to Rome to take out D\'Antonio\'s sister, the ruthless capo atop the Italian Camorra crime syndicate.', 'XGk2EfbD_Ps'),
(5, '2017-02-10', 'Animation, Action, Adventure', 'Chris McKay', 'Seth Grahame-Smith, Chris McKenna', 'The Lego Batman Movie', '02:09:00', 'There are big changes brewing in Gotham, but if Batman (Will Arnett) wants to save the city from the Joker\'s (Zach Galifianakis) hostile takeover, he may have to drop the lone vigilante thing, try to work with others and maybe, just maybe, learn to lighten up. Maybe his superhero sidekick Robin (Michael Cera) and loyal butler Alfred (Ralph Fiennes) can show him a thing or two.', 'h6DOpfJzmo0'),
(6, '2017-01-27', 'Adventure, Comedy, Drama', 'Lasse Hallstrom', 'W. Bruce Cameron, Cathryn Michon', 'A Dog\'s Purpose', '02:00:00', 'A devoted dog (Josh Gad) discovers the meaning of its own existence through the lives of the humans it teaches to laugh and love. Reincarnated as multiple canines over the course of five decades, the lovable pooch develops an unbreakable bond with a kindred spirit named Ethan (Bryce Gheisar). As the boy grows older and comes to a crossroad, the dog once again comes back into his life to remind him of his true self.', 'C4y_h9xbyDE'),
(7, '2017-05-26', 'Adventure, Fantasy, Action', 'Joachim Ronning, Espen Sandberg', 'Jeff Nathanson, Jeff Nathanson', 'Pirates of the Caribbean: Dead Men Tell No Tales', '02:33:00', 'Thrust into an all-new adventure, a down-on-his-luck Capt. Jack Sparrow (Johnny Depp) feels the winds of ill-fortune blowing even more strongly when deadly ghost sailors led by his old nemesis, the evil Capt. Salazar (Javier Bardem), escape from the Devil\'s Triangle. Jack\'s only hope of survival lies in seeking out the legendary Trident of Poseidon, but to find it, he must forge an uneasy alliance with a brilliant and beautiful astronomer and a headstrong young man in the British navy.', 'Hgeu5rhoxxY'),
(8, '2017-08-11', 'Mystery, Thriller, Horror', 'David Sandberg', 'Gary Dauberman', 'Annabelle: Creation', '01:40:00', 'A nun (Stephanie Sigman) and a group of orphans become the target of a doll maker\'s possessed creation.', 'zjaOgN2Uti8'),
(9, '2017-06-30', 'Animation, Action, Adventure', 'Pierre Coffin, Kyle Balda', 'Ken Daurio', 'Despicable Me 3', '01:36:00', 'Gru (Steve Carell) and his wife Lucy (Kristen Wiig) must stop former \'80s child star Balthazar Bratt (Trey Parker) from achieving world domination.', 'euz-KBBfAAo'),
(10, '2017-06-09', 'Action, Adventure, Fantasy', 'Alex Kurtzman', 'Jon Spaihts, Christopher McQuarrie', 'The Mummy', '02:00:00', 'Thought safely entombed in a crypt deep beneath the desert, an ancient princess whose destiny was unjustly taken from her is awakened in the modern era, bringing with her malevolence grown over millennia and terrors that defy human comprehension.', 'vJxgxVH0Fsk'),
(11, '2017-03-31', 'Action, Crime, Drama', 'Rupert Sanders', 'Shirow Masamune, Jamie Moss', 'Ghost in the Shell', '02:00:00', 'In the near future, Major is the first of her kind: a human who is cyber-enhanced to be a perfect soldier devoted to stopping the world\'s most dangerous criminals. When terrorism reaches a new level that includes the ability to hack into people\'s minds and control them, Major is uniquely qualified to stop it. As she prepares to face a new enemy, Major discovers that her life was stolen instead of saved. Now, she will stop at nothing to recover her past while punishing those who did this to her.', 'G4VmJcZR0Yg'),
(12, '2016-11-28', 'Adventure, Family, Fantasy', 'David Yates', 'J.K. Rowling', 'Fantastic Beasts and Where to Find Them', '02:13:00', 'Holding a mysterious leather suitcase in his hand, Newt Scamander, a young activist wizard from England, visits New York while he is on his way to Arizona. Inside his expanding suitcase hides a wide array of diverse, magical creatures that exist among us, ranging from tiny, twig-like ones, to majestic and humongous ones. It is the middle of the 20s and times are troubled since the already fragile equilibrium of secrecy between the unseen world of wizards and the ordinary or \"No-Maj\" people that the MACUSA Congress struggles to maintain, is at risk of being unsettled. The adventures of writer Newt Scamander in New York\'s secret community of witches and wizards seventy years before Harry Potter reads his book in school.', 'Vso5o11LuGU'),
(13, '2015-10-02', 'Adventure, Drama, Sci-Fi', 'Ridley Scott', 'Drew Goddard, Andy Weir', 'The Martian', '02:24:00', 'During a manned mission to Mars, Astronaut Mark Watney is presumed dead after a fierce storm and left behind by his crew. But Watney has survived and finds himself stranded and alone on the hostile planet. With only meager supplies, he must draw upon his ingenuity, wit and spirit to subsist and find a way to signal to Earth that he is alive. Millions of miles away, NASA and a team of international scientists work tirelessly to bring \"the Martian\" home, while his crewmates concurrently plot a daring, if not impossible, rescue mission. As these stories of incredible bravery unfold, the world comes together to root for Watney\'s safe return.', 'ej3ioOneTy8'),
(14, '2016-03-25', 'Action, Adventure, Sci-Fi', 'Zack Snyder', 'Chris Terrio, David S.Goyer', 'Batman v Superman: Dawn of Justice', '02:31:00', 'The general public is concerned over having Superman on their planet and letting the \"Dark Knight\" - Batman - pursue the streets of Gotham. While this is happening, a power-phobic Batman tries to attack Superman.,Meanwhile Superman tries to settle on a decision, and Lex Luthor, the criminal mastermind and millionaire, tries to use his own advantages to fight the \"Man of Steel\"', '0WWzgGyAH6Y');

-- --------------------------------------------------------

--
-- Table structure for table `movies_actors`
--

CREATE TABLE `movies_actors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `movies_actors`
--

INSERT INTO `movies_actors` (`id`, `name`, `image_file_name`) VALUES
(2, 'Dan Steve', 'DanSteveAsBeast'),
(3, 'Emma Watson', 'Emma Watson as Belle'),
(8, 'Ian McKellen', 'IanMcKellenAsCogsworth'),
(11, 'Luke Evans', 'LukeEvansAsGaston'),
(13, 'Ian McShane', 'IanMcShaneAsWinston'),
(15, 'Keanu Reeves', 'KeanuReevesAsJohnWick'),
(17, 'laurence Fishburne', 'laurenceFishburneAsBoweryKing'),
(19, 'Ruby Rose', 'RubyRoseAsAres'),
(20, 'Brie Larson', 'BrieLarsonAsMasonWeaver'),
(26, 'Samuel L.Jackson', 'SamuelL_JacksonAsPrestonPackard'),
(27, 'Toby Kebbell', 'TobyKebbellAsJackChapman_Kong'),
(28, 'Tom Hiddlestone', 'TomHiddlestoneAsJanesConrad'),
(29, 'Boyd Holbrook', 'BoydHolbrookAsPierce'),
(30, 'Dafne Keen', 'DafneKeenAsLaura'),
(32, 'Hugh Jackman', 'HughJackmanAsLogan'),
(33, 'Patrick Stewart', 'PatrickStewartAsCharles'),
(36, 'Billy Dee Williams', 'BillyDeeWilliamsAsTwoFace'),
(37, 'Canon O\'Brian', 'CanonO\'BrianAsRiddler'),
(38, 'Channing Tatum', 'ChanningTatumAsSuperMan'),
(39, 'Doug Benson', 'DougBensonAsBane'),
(40, 'Britt Robertson', 'BrittRobertson'),
(41, 'Dennis Quaid', 'DennisQuaidAsEthan'),
(42, 'Josh Gad', 'JoshGadAsDog'),
(43, 'Peggy Lipton', 'PeggyLipton'),
(44, 'Anothy LaPaglia', 'AnothyLaPagliaAsSamuelMullins'),
(45, 'Miranda Otto', 'MirandaOttoAs'),
(46, 'Stephanie Sigman', 'StephanieSigmanAsSisterCharlotte'),
(47, 'Talitha Bateman', 'TalithaBatemanAsJanice'),
(48, 'Kristen Wiig', 'KristenWiigAsLucyWilde'),
(49, 'Pierre Coffin', 'PierreCoffinAsKevinTheMinion'),
(50, 'Steve Carell', 'SteveCarellAsGruAndDru'),
(51, 'Trey Parker', 'TreyParkerAsBalthazarBratt'),
(52, 'JulietteBinoche', 'JulietteBinocheAsDr_Ouelet'),
(53, 'Pilou Asbaek', 'PilouAsbaekAsBatou'),
(54, 'Scarlett Johansson', 'ScarlettJohanssonAsMajorMiraKilian'),
(55, 'Takesi Kitano', 'TakesiKitanoAsDaisuke Aramaki'),
(56, 'Javier Bardem', 'JavierBardemAsCaptainSalazar'),
(57, 'Johnny Depp', 'JohnnyDeppAsJackSparrow'),
(58, 'Kaya Scodelario', 'KayaScodelarioAs'),
(59, 'Orlando Bloom', 'OrlandoBloomAsWillTurner'),
(60, 'Annabelle Wallis', 'AnnabelleWallisAsJennyHalsey'),
(61, 'Russell Crowe', 'RussellCroweAsDr_Jekyl'),
(62, 'Sofia Boutella', 'SofiaBoutellaAsMummy1'),
(63, 'Tom Cruise', 'TomCruiseAsTylerColt'),
(64, 'Ben Affleck', 'benAffleckAsBatman'),
(65, 'Gal Gadot', 'GalGadotAsDianaPrince'),
(66, 'Henry Cavill', 'HenryCavillAsSuperman'),
(67, 'Jesse Eisenberg', 'JesseEisenbergAsLexLuthor'),
(68, 'Collin Farrell', 'CollinFarrellAsPercivalGraves'),
(69, 'Eddie Redmayne', 'EddieRedmayneAsNewtScamander'),
(70, 'Ezra Miller', 'EzraMillerAsCredence'),
(71, 'Katherine Waterston', 'KatherineWaterstonAsPorpentinaGoldstein'),
(72, 'Chiwetel Ejiofor', 'ChiwetelEjioforAsVenkatkapoor'),
(73, 'Jessica Chatain', 'JessicaChatainAsMelissaLewis'),
(74, 'Kristen Wiig', 'KristenWiigAsAnnieMontro'),
(75, 'Matt Damon', 'mattdamon');

-- --------------------------------------------------------

--
-- Table structure for table `movies_characters`
--

CREATE TABLE `movies_characters` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `actor_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `movies_characters`
--

INSERT INTO `movies_characters` (`id`, `name`, `actor_id`, `movie_id`) VALUES
(1, 'Beast', 2, 2),
(2, 'Belle', 3, 2),
(3, 'Cogsworth', 8, 2),
(4, 'Gaston', 11, 2),
(5, 'Winston', 13, 4),
(6, 'John Wick', 15, 4),
(7, 'Bowery King', 17, 4),
(8, 'Ares', 19, 4),
(9, 'Mason Weaver', 20, 3),
(10, 'Preston Packard', 26, 3),
(11, 'Jack Chapman/Kong', 27, 3),
(12, 'Janes Conrad', 28, 3),
(13, 'Pierce', 29, 1),
(14, 'Laura', 30, 1),
(15, 'Logan', 32, 1),
(16, 'Charles', 33, 1),
(17, 'TwoFace', 36, 5),
(18, 'Riddler', 37, 5),
(19, 'SuperMan', 38, 5),
(20, 'Bane', 39, 5),
(21, 'Ethan', 41, 6),
(22, 'Dog', 42, 6),
(23, 'Samuel Mullins', 44, 8),
(24, 'Sister charlotte', 46, 8),
(25, 'Janice', 47, 8),
(26, 'Lucy Wilde', 48, 9),
(27, 'Kevin The Minion', 49, 9),
(28, 'Gru/Dru', 50, 9),
(29, 'Balthazar Bratt', 51, 9),
(30, 'Dr. Ouelet', 52, 11),
(31, 'Batou', 53, 11),
(32, 'Major Mira Kilian', 54, 11),
(33, 'Daisuke Aramaki', 55, 11),
(34, 'Captain Salazar', 56, 7),
(35, 'Jack Sparrow', 57, 7),
(36, 'Will Turner', 59, 7),
(37, 'Jenny Halsey', 60, 10),
(38, 'Dr. Jekyl', 61, 10),
(39, 'Mummy #1', 62, 10),
(40, 'Tyler Colt', 63, 10),
(41, 'Percival Graves', 68, 12),
(42, 'Newt Scamander', 69, 12),
(43, 'Credence', 70, 12),
(44, 'Popenrtina Goldstein', 71, 12),
(45, 'Batman', 64, 14),
(46, 'Diana prince', 65, 14),
(47, 'Superman', 66, 14),
(48, 'Lex Luthor', 67, 14),
(52, 'MarkWatney', 75, 13);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_homepage` varchar(255) NOT NULL,
  `image_payment` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `image_homepage`, `image_payment`, `price`, `description`) VALUES
(1, 'Individual Package', 'individual.jpg', 'cart_individual.png', 10.2, '1 Medium drink + 1 Medium Popcorn'),
(2, 'Double Trouble', 'double.jpg', 'cart_double.png', 18, '2 Medium Popcorn + 2 Medium Drink'),
(3, 'Six Pack', 'six.jpg', 'cart_six.png', 54, '6 Medium Drinks + 6 Medium Popcorn'),
(4, 'Love Bird\'s Nest', 'couple.jpg', 'cart_couple.png', 23, '2 Medium Drink + 1 Large Popcorn + Chocolate Box'),
(5, 'Kid\'s Pack', 'kids.jpg', 'cart_kids.png', 7, '1 small Drink + 1 small Popcorn + 1 Corndog');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `purchases_items`
--

CREATE TABLE `purchases_items` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `item_type` enum('ticket','package') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `showtime` datetime NOT NULL,
  `price` float NOT NULL,
  `seat` text NOT NULL,
  `hall_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies_actors`
--
ALTER TABLE `movies_actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies_characters`
--
ALTER TABLE `movies_characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases_items`
--
ALTER TABLE `purchases_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `movies_actors`
--
ALTER TABLE `movies_actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `movies_characters`
--
ALTER TABLE `movies_characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchases_items`
--
ALTER TABLE `purchases_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
