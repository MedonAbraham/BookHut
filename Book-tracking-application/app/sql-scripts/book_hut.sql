-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Apr 08, 2022 at 08:59 PM
-- Server version: 10.6.5-MariaDB-1:10.6.5+maria~focal
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_hut`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ISBN` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `pages` int(11) NOT NULL,
  `published_year` int(11) NOT NULL,
  `description` varchar(8000) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN`, `title`, `author`, `pages`, `published_year`, `description`, `genre`, `language`) VALUES
('9780099558781', 'A Gentleman in Moscow', 'Amor Towles', 500, 2017, 'On 21 June 1922, Count Alexander Rostov - recipient of the Order of Saint Andrew, member of the Jockey Club, Master of the Hunt - is escorted out of the Kremlin, across Red Square and through the elegant revolving doors of the Hotel Metropol. Deemed an unrepentant aristocrat by a Bolshevik tribunal, the Count has been sentenced to house arrest indefinitely. But instead of his usual suite, he must now live in an attic room while Russia undergoes decades of tumultuous upheaval. Can a life without luxury be the richest of all?', 'Drama', 'English'),
('9780241353011', 'The New Breed', 'Kate Darling', 539, 2021, 'The robots are here. They make our cars, they deliver fast food, they mine the sea floor. And in the near-future their presence will increasingly enter our homes and workplaces - making human-robot interaction a frequent, everyday occurrence. What will this future look like? What will define the relationship between humans and robots?\r\n\r\nHere Kate Darling, a world-renowned expert in robot ethics, shows that in order to understand the new robot world, we must first move beyond the idea that this technology will be something like us. Instead, she argues, we should look to our relationship with animals. Just as we have harnessed the power of animals to aid us in war and work, so too will robots supplement - rather than replace - our own skills and abilities.\r\n\r\nA deeply original analysis of our technological future and the ethical dilemmas that await us, The New Breed explains how the treatment of machines can reveal a new understanding of our own history, our own systems and how we relate - not just to non-humans, but also to each other.', 'Ethics', 'English'),
('9780300243147', 'Humour', 'Terry Eagleton', 191, 2019, 'A compelling guide to the fundamental place of humour and comedy within Western culture-by one of its greatest exponents Written by an acknowledged master of comedy, this study reflects on the nature of humour and the functions it serves. Why do we laugh? What are we to make of the sheer variety of laughter, from braying and cackling to sniggering and chortling? Is humour subversive, or can it defuse dissent? Can we define wit? Packed with illuminating ideas and a good many excellent jokes, the book critically examines various well-known theories of humour, including the idea that it springs from incongruity and the view that it reflects a mildly sadistic form of superiority to others. Drawing on a wide range of literary and philosophical sources, Terry Eagleton moves from Aristotle and Aquinas to Hobbes, Freud, and Bakhtin, looking in particular at the psychoanalytical mechanisms underlying humour and its social and political evolution over the centuries.', 'Comedy', 'English'),
('9780316484893', 'The Precipice', 'Toby Ord', 230, 2020, 'If all goes well, human history is just beginning. Our species could survive for billions of years - enough time to end disease, poverty, and injustice, and to flourish in ways unimaginable today. But this vast future is at risk. With the advent of nuclear weapons, humanity entered a new age, where we face existential catastrophes - those from which we could never come back. Since then, these dangers have only multiplied, from climate change to engineered pathogens and artificial intelligence. If we do not act fast to reach a place of safety, it will soon be too late.\r\n\r\nDrawing on over a decade of research, The Precipice explores the cutting-edge science behind the risks we face. It puts them in the context of the greater story of humanity: showing how ending these risks is among the most pressing moral issues of our time. And it points the way forward, to the actions and strategies that can safeguard humanity.', 'Thriller', 'English'),
('9780593329443', 'Broad Band', 'Clare L. Evans', 134, 2020, 'The history of the internet is more than just alpha nerds, brogrammers, and male garage-to-riches billionaires. Female visionaries have always been at the vanguard of technology and innovation.\r\n\r\nIn fact, women turn up at the very beginning of every important wave in technology. They may have been hidden in plain sight, their inventions and contributions touching our lives in ways we don\'t even realize, but they have always been part of the story.\r\n\r\nIn a world where tech companies are still male-dominated and women are often dissuaded from STEM careers, Broad Band shines a much-needed light on the bright minds history forgot, from pioneering database poets, data wranglers, and hypertext dreamers to glass ceiling-shattering dot com-era entrepreneurs.\r\n\r\nGet to know Ada Lovelace, who wove the first computer program in 1842, and Grace Hopper, the tenacious mathematician who democratized computing after World War II. Meet Elizabeth \"Jake\" Feinler, the one-woman Google who kept the earliest version of the Internet online, and Stacy Horn, the New York cyberpunk who ran one of the world\'s earliest social networks out of her New York City apartment in the 1980s.\r\n\r\nJoin the ranks of the pioneers who defied social convention to become leaders of the tech revolution. This electrifying corrective to tech history introduces us all to our long-overlooked tech mothers and grandmothers--showing us that if there\'s a \"boy\'s club\" that dominates Silicon Valley today, it\'s an anachronism.', 'Biography', 'English'),
('9780691183176', 'The Sum of Small Things', 'Elizabeth Currid-Halkett', 434, 2018, 'In today\'s world, the leisure class has been replaced by a new elite. Highly educated and defined by cultural capital rather than income bracket, these individuals earnestly buy organic, carry canvas tote bags, and breast-feed their babies. They care about discreet, inconspicuous consumption-like eating free-range chicken and heirloom tomatoes, wearing organic cotton shirts and TOMS shoes, and listening to the latest podcast. They use their purchasing power to hire nannies and housekeepers, to cultivate their children\'s growth, and to practice yoga and Pilates. In The Sum of Small Things, Elizabeth Currid-Halkett dubs this new elite the aspirational class and discusses how, through deft decisions about education, health, parenting, and retirement, they reproduce wealth and upward mobility, deepening the ever-wider class divide. With a rich narrative and extensive interviews and research, The Sum of Small Things illustrates how cultural capital leads to lifestyle shifts and examines what these changes will mean for everyone.', 'Self-help book', 'English'),
('9781411432963', 'Pride and Prejudice', 'Jane Austen', 432, 1813, 'Pride and Prejudice follows the turbulent relationship between Elizabeth Bennet, the daughter of a country gentleman, and Fitzwilliam Darcy, a rich aristocratic landowner. They must overcome the titular sins of pride and prejudice in order to fall in love and marry.', 'Romance ', 'English '),
('9781526611512', 'A Beginner\'s Guide to Japan', 'Pico Iyer', 240, 2020, 'Winner of the Edward Stanford Travel Memoir of the Year 2020 How does a sushi bar explain a Japanese poem? Why do Japanese couples plan matching outfits for their honeymoon? Why are so many things in Japan the opposite of what we expect? After thirty-two years in Japan, Pico Iyer knows the country as few others can. In A Beginner\'s Guide to Japan, he dashes from baseball games to love-hotels and from shopping malls to zen temple gardens to find fresh ways of illuminating his adopted home. Playful and surreptitiously profound, this is a guidebook to a Japan few have ever seen before. \'Rarely in any writing on Japan is provocation so elegantly and surgically performed\' Financial Times', 'Literary ', 'English'),
('9781529110630', 'Another Now', 'Yanis Varoufakis', 240, 2021, '\'I could not recommend this more. If you\'re looking for a sense of optimism, a sense of political possibility, this book is very important\' Owen Jones What would a fair and equal society actually look like? Imagine a world with no banks. No stock market. No tech giants. No billionaires. In Another Now world-famous economist, Yanis Varoufakis, shows us what such a world would look like. Far from being a fantasy, he describes how it could have come about - and might yet. But would we really want it? Varoufakis\'s boundary-breaking new book confounds expectations of what the good society would look like and confronts us with the greatest question: are we able to build a better society, despite our flaws. \'A vision of a new society with new ways of thinking is possibly the most important thing an artist can offer at the moment\' Brian Eno\r\n\r\n', 'Science fiction', 'English'),
('9781603090254', 'Alec: The Years Have Pants', 'Eddie Campbell', 640, 2010, 'Brilliantly observed and profoundly expressed, the ALEC stories present a version of Eddie\'s own life, filtered through the alter ego of \"Alec MacGarry.\" Over many years, we witness Alec\'s (and Eddie\'s) progression \"from beer to wine\" -- wild nights at the pub, existential despair, the hunt for love, the quest for art, becoming a responsible breadwinner, feeling lost at his own movie premiere, and much more! Eddie\'s outlandish fantasies and metafictional tricks convert life into art, while staying fully grounded in his own absurdity.', 'Autobiographical novel', 'English'),
('9781786634382', 'Toward Freedom', 'Toure Reed', 345, 2020, 'The fate of poor and working-class African Americans-who are unquestionably represented among neoliberalism\'s victims-is inextricably linked to that of other poor and working-class Americans Reed contends that the road to a more just society for African Americans and everyone else is obstructed, in part, by a discourse that equates entrepreneurialism with freedom and independence. This, ultimately, insists on divorcing race and class. In the age of runaway inequality and Black Lives Matter, there is an emerging consensus that our society has failed to redress racial disparities. The culprit, however, is not the sway of a metaphysical racism or the modern survival of a primordial tribalism. Instead, it can be traced to far more comprehensible forces, such as the contradictions in access to New Deal era welfare programs, the blinders imposed by the Cold War, and Ronald Reagan\'s neoliberal assault on the half-century long Keynesian consensus.\r\n\r\n', 'Biography', 'English'),
('9781787332478', '12 Bytes', 'Jeanette Winterson', 324, 2021, '*A \'BOOKS OF 2021\' PICK IN THE GUARDIAN, FINANCIAL TIMES AND EVENING STANDARD* Twelve bytes. Twelve eye-opening, mind-expanding, funny and provocative essays on the implications of artificial intelligence for the way we live and the way we love - from Sunday Times-bestselling author Jeanette Winterson. An original, and entertaining new book from Jeanette Winterson, drawing on her years of thinking about and reading about Artificial Intelligence in its bewildering manifestations. She looks to history, religion, myth, literature, the politics of race and gender, and of course, computing science, to help us understand the radical changes to the way we live and love that are happening now. When we create non-biological life-forms, will we do so in our image? Or will we accept the once-in-a-species opportunity to remake ourselves in their image? What do love, caring, sex, and attachment look like when humans form connections with non-human helpers teachers, sex-workers, and companions? And what will happen to our deep-rooted assumptions about gender? Will the physical body that is our home soon be enhanced by biological and neural implants, keeping us fitter, younger, and connected? Is it time to join Elon Musk and leave Planet Earth? With wit, compassion and curiosity, Winterson tackles AI\'s most interesting talking points, from the algorithms that data-dossier your whole life, to the weirdness of backing up your brain.', 'Biography', 'English'),
('9781788166782', 'Why We\'re Polarized', 'Ezra Klein', 220, 2020, '\'Powerful [and] intelligent\' - Fareed Zakaria, CNN \'Superbly researched and written\' - Francis Fukuyama, The Washington Post America\'s political system isn\'t broken. The truth is scarier: it\'s working exactly as designed. In Why We\'re Polarized, Ezra Klein reveals the structural and psychological forces behind America\'s deep political divisions, revealing how a system filled with rational, functional parts can combine into a dysfunctional whole. Neither a polemic nor a lament, this book offers a clear framework for understanding everything from Trump\'s rise to the Democratic Party\'s leftward shift to the politicisation of everyday culture. Klein shows how and why American politics polarised in the twentieth century, what that polarisation did to Americans\' views of the world and one another, and how feedback loops between polarised political identities and polarised political institutions drive the system toward crisis. This revelatory book will change how you look at politics, and perhaps at yourself.', 'idk', 'English'),
('9781846046452', 'How Do You Live?', 'Genzaburo Yoshino', 298, 2021, 'Publishing in English for the very first time, Japan\'s beloved coming-of-age classic on what really matters in life The streets of Tokyo swarm below fifteen year-old Copper as he gazes out into the city of his childhood. Struck by the thought of the infinite people whose lives play out alongside his own, he begins to wonder, how do you live? Considering life\'s biggest questions for the first time, Copper turns to his dear uncle for heart-warming wisdom. As the old man guides the boy on a journey of philosophical discovery, a timeless tale unfolds, offering a poignant reflection on what it means to be human. The favourite childhood book of anime master Hayao Miyazaki, How Do You Live? is the basis a highly anticipated film from Studio Ghibli.', 'Ethics', 'English'),
('9789048862498', 'De visionair', 'Anja Sicking', 340, 2022, 'Als Roemer mee mag doen met een roboticaproject op school, krijgt hij het plan om een digitale bril te ontwerpen waarmee hij de emoties van anderen kan lezen. Zijn eigen vermogen om de expressie van mensen te duiden is beperkt, hij leeft vooral in zijn hoofd en fantasiewereld. Hij gelooft in de onbegrensde mogelijkheden van technologie, en denkt dat we alles moeten kunnen meten en weten. Als hij verliefd wordt, dreigen zijn opvattingen over de meetbare mens hun bestaansrecht te verliezen. Jaren later, terwijl Roemer een belangrijke bijdrage levert aan een door technologie beheerste wereld, bloeit zijn verliefdheid weer op. Kan de mens wel grip krijgen op zichzelf en de ander?', 'Romance', 'Dutch');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `message` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email_address`, `subject`, `message`) VALUES
(14, 'Anthony', 'Burch', 'anthUrch@hotmail.com', 'Logged out of my account', 'I would like to reset my password. I haven\'t been able to access my lists for the past 3 days. Hope this can be fixed soon! ');

-- --------------------------------------------------------

--
-- Table structure for table `listType`
--

CREATE TABLE `listType` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listType`
--

INSERT INTO `listType` (`id`, `name`) VALUES
(1, 'Reading'),
(2, 'Want to Read'),
(3, 'Finished');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `review` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `username`, `ISBN`, `rating`, `title`, `review`) VALUES
(19, 'medonAb', '9780593329443', 4, 'Really good book', 'yeah'),
(20, 'brentFaiy', '9780241353011', 5, 'Amazing', 'Best book I have ever read !'),
(21, 'brentFaiy', '9781529110630', 3, 'Too much suspense', 'Not really my kind of book. Plus it is super long');

-- --------------------------------------------------------

--
-- Table structure for table `userLists`
--

CREATE TABLE `userLists` (
  `id` int(11) NOT NULL,
  `listId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ISBN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userLists`
--

INSERT INTO `userLists` (`id`, `listId`, `username`, `ISBN`) VALUES
(160, 1, 'medonAb', '9780099558781'),
(162, 3, 'medonAb', '9780300243147'),
(167, 1, 'brentFaiy', '9780593329443'),
(195, 2, 'medonAb', '9781411432963'),
(198, 1, 'medonAb', '9780241353011'),
(201, 3, 'brentFaiy', '9780241353011'),
(202, 3, 'brentFaiy', '9781529110630');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `email_address`, `username`, `password`) VALUES
('Brent', 'Faiyaz', 'chrisWood@gmail.com', 'brentFaiy', 'e299798040900f93803c5fd6d120d8ff4cf20147'),
('Medon', 'Abraham', 'medonget88@hotmail.com', 'medonAb', '2ae868079d293e0a185c671c7bcdac51df36e385');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listType`
--
ALTER TABLE `listType`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_ibfk_1` (`username`),
  ADD KEY `ISBN` (`ISBN`);

--
-- Indexes for table `userLists`
--
ALTER TABLE `userLists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listId` (`listId`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `userLists_ibfk_4` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `userLists`
--
ALTER TABLE `userLists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`ISBN`) REFERENCES `books` (`ISBN`) ON DELETE CASCADE;

--
-- Constraints for table `userLists`
--
ALTER TABLE `userLists`
  ADD CONSTRAINT `userLists_ibfk_1` FOREIGN KEY (`listId`) REFERENCES `listType` (`id`),
  ADD CONSTRAINT `userLists_ibfk_3` FOREIGN KEY (`ISBN`) REFERENCES `books` (`ISBN`),
  ADD CONSTRAINT `userLists_ibfk_4` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
