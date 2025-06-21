-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 15, 2025 at 10:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestseller`
--

CREATE TABLE `bestseller` (
  `id` int(11) NOT NULL,
  `proname` varchar(50) NOT NULL,
  `proauther` varchar(500) NOT NULL,
  `propub` varchar(500) NOT NULL,
  `prorel` varchar(500) NOT NULL,
  `procat` varchar(50) NOT NULL,
  `proprice` int(30) NOT NULL,
  `prodiscount` int(200) NOT NULL,
  `proquant` int(30) NOT NULL,
  `prodesc` varchar(500) NOT NULL,
  `proimg` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bestseller`
--

INSERT INTO `bestseller` (`id`, `proname`, `proauther`, `propub`, `prorel`, `procat`, `proprice`, `prodiscount`, `proquant`, `prodesc`, `proimg`, `created_at`) VALUES
(1, 'Krishna', 'by Shubha Vilas', 'William Morrow & Company', '28 Jan 2020', 'spiritualbook', 1000, 900, 20, '								The Little Blue Book on Krishna in its deluxe silk hardbound edition is a captivating and insightful exploration of Lord Krishna life and teachings. Written by renowned author Shubha Vilas, this beautifully crafted edition offers a deep understanding of Krishna wisdom, love, and divinity. A must-have for devotees of Lord Krishna and collectors of religious texts.', 'spir19.jpg', '2025-04-28 12:56:01'),
(2, 'HerStory ', 'by Nikita Thakur 		', 'Invincible Publication Pvt Ltd', '11 December 2024', 'historicalbooks', 1539, 1385, 10, '		Sequal to The Illiad, the story begins ten years after the Trojan War and the Fall of Troy, when Odysseus, one of the war heroes, has still not returned to his kingdom Ithaca.', 'history12.jpg', '2025-04-28 21:10:52'),
(3, 'Tantrics of Old', 'by Krishnarjun Bhatt', 'Fingerprint! Publishing', '1 January 2014', 'horrorbook', 1539, 1385, 15, '							The Horseman had come to your apartment Adri nodded. What did it want My goddamn soul. Tantrics. Necromancers. Exorcists. Talkers to the dead. Summoners of Demons. An ancient art. A select few.', 'horror13.jpg', '2025-04-28 21:19:09'),
(4, 'Ashtavakra Mahagita', 'by M. I. Rajasve', 'Fingerprint! Publishing	', '1 February 2021', 'spiritualbook', 1939, 1745, 5, '					How long will it take to attain knowledge? The time the horse takes to race. King Janak prayed to Ashtavakra, a great sage of his time, to impart knowledge to him.	', 'spir17.jpg', '2025-04-28 21:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `proname` varchar(50) NOT NULL,
  `proprice` int(50) NOT NULL,
  `prodiscount` int(10) NOT NULL,
  `proimg` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `total_price` int(50) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `proname`, `proprice`, `prodiscount`, `proimg`, `quantity`, `total_price`, `product_code`, `created_at`) VALUES
(115, 'The Canterville Ghost', 580, 522, 'horror10.jpg', 1, 580, '34', '2025-05-12 19:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catname` varchar(50) NOT NULL,
  `catslug` varchar(255) NOT NULL,
  `catdis` varchar(500) NOT NULL,
  `catimg` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catname`, `catslug`, `catdis`, `catimg`, `created_at`) VALUES
(4, 'Spiritual Books', 'spiritualbook', 'Spiritual books can provide a fresh perspective on life’s challenges and help you cultivate inner peace and self.', 'kalki.jpg', '2025-04-25 13:10:35'),
(6, 'Horror Books', 'horrorbook', 'When you think of horror books, you think of Stephen King. This king of fiction revolutionized the horror . ', 'horror16.jpg', '2025-04-25 13:15:13'),
(8, 'Historical Books', 'historicalbooks', 'books are like time machines, taking us back to moments that shaped our world. books offer a treasure', 'history16.jpg', '2025-04-25 13:20:48'),
(9, 'Political Books', 'politicalbooks', 'If you are looking for political science books, then you should definitely browse through our site .', 'politic12.jpg', '2025-04-25 13:22:21'),
(14, 'Adventure Books', 'adventurebooks', 'If you are feeling overwhelmed by the number of amazing adventure books on hand, book.', 'adv10.jpg', '2025-04-25 13:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `submitted_at`) VALUES
(1, 'Sanmati mali', 'sanmatimali90@gmail.com', '9359135412', 'vgggg', 'ggggg', '2025-05-06 06:53:16'),
(2, 'sayali mali', 'sanmatimali90@gmail.com', '9359135412', 'kol', 'hello', '2025-05-07 04:17:27'),
(3, 'harshal mali', 'harshal@gmail.com', '8888888888', 'demo', 'hhddhdh jjjd', '2025-05-07 04:18:22'),
(4, 'harshal Mishra', 'harshal@gmail.com', '9087765654', 'eng', 'hsfcufcuwaf', '2025-05-07 08:10:40'),
(5, 'harshal malii', 'sayalimali1675@gmail.com', '9359135412', 'hfughwsggesg', 'hfffjfarorf', '2025-05-09 08:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `products` varchar(500) NOT NULL,
  `pro_id` varchar(255) NOT NULL,
  `paid_amount` int(30) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `email`, `phone`, `address`, `payment_mode`, `products`, `pro_id`, `paid_amount`, `created_at`) VALUES
(39, 'Sanmati mali', 'sanmatimali90@gmail.com', '2147483647', 'amanapur', 'Cash On Delivery', 'Prince by Niccolò(1)', '16', 0, '2025-05-09 12:26:49'),
(41, 'sayali satish mali', '2303037@ritindia.edu', '2147483647', 'amanapur', 'Cash On Delivery', 'Space(1),All Kinds of Stupid(1),Sounds of Liberation(1)', '18, 9, 2', 0, '2025-05-09 12:31:27'),
(42, 'harshal mali', 'sanmatimali90@gmail.com', '2147483647', 'palus', 'Cash On Delivery', 'Space(1),Prince by Niccolò(1)', '18, 16', 0, '2025-05-09 12:33:34'),
(43, 'harshal mali1', 'sanmatimali90@gmail.com', '2147483647', 'sangli', 'Cash On Delivery', 'Autobiography(1),Sounds of Liberation(1)', '4, 2', 0, '2025-05-09 12:40:21'),
(50, 'mayur patil', 'patil@gmail.com', '2147483647', 'vita', 'Cash On Delivery', 'Enter At Your Own Risk(1),World History(1)', '35, 17', 1870, '2025-05-09 13:30:19'),
(51, 'rohan', 'rohan@gmail.com', '1234567890', 'vita', 'Cash On Delivery', 'The Art of War(1)', '20', 900, '2025-05-09 13:35:25'),
(52, 'sayu', 'sanmatimali90@gmail.com', '9359135412', 'palus', 'Cash On Delivery', 'Autobiography(1)', '4', 900, '2025-05-09 20:53:57'),
(53, 'harshal malii', 'harshal12@gmail.com', '9359135412', 'amanapur', 'Cash On Delivery', 'The Secret Garden(1)', '32', 900, '2025-05-10 09:23:38'),
(54, 'nandini deshmukh', 'sanmatimali90@gmail.com', '9359135412', 'pune', 'Cash On Delivery', 'Maharaj(1)', '23', 485, '2025-05-10 18:59:18'),
(56, 'Sanmati mali', 'sanmatimali90@gmail.com', '9359135412', 'amanapur', 'Cash On Delivery', 'Adventures Sherlock(1)', '26', 450, '2025-05-12 09:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `proname` varchar(500) NOT NULL,
  `proauther` varchar(100) NOT NULL,
  `propub` varchar(500) NOT NULL,
  `prorel` varchar(500) NOT NULL,
  `procat` varchar(50) NOT NULL,
  `proprice` int(30) NOT NULL,
  `prodiscount` int(200) NOT NULL,
  `proquant` int(30) NOT NULL,
  `prodesc` varchar(500) NOT NULL,
  `proimg` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `proname`, `proauther`, `propub`, `prorel`, `procat`, `proprice`, `prodiscount`, `proquant`, `prodesc`, `proimg`, `created_at`) VALUES
(2, 'Sounds of Liberation', 'by Ranjit Chaudhri', 'Fingerprint! Publishing', '13 March 2021', 'spiritualbook', 500, 450, 10, '		The Spanda Karikas was written by Sage Vasugupta in the late 8th century or early 9th century AD. Sage Vasugupta is also known for the Shiva Sutras, a text revealed to him by Lord Shiva.', 'spir10.jpg', '2025-04-26 21:27:18'),
(3, 'Enlightenment', 'by Sadhguru', 'Penguin Ananda', '19 December 2024', 'spiritualbook', 539, 485, 10, '		Much is being said, asked, and questioned about enlightenment. The modern world has turned yet another simple, natural process into something to feel complicated about. ', 'spir12.jpg', '2025-04-26 21:29:52'),
(4, 'Autobiography', 'by Paramahansa Yogananda', 'Yogoda Satsanga Society of India', '9 February 1998', 'spiritualbook', 1000, 900, 12, '		Inspiring stalwarts like the Beatles, Steve Jobs, and Ravi Shankar, autobiography of a Yogi is an immensely gratifying spiritual read that has altered and enriched the lives of millions across the world, since it was first published in 1946. ', 'spir13.jpg', '2025-04-26 21:31:36'),
(5, 'The Shiva Sutras', 'by Ranjit Chaudhri', 'Fingerprint! Publishing', '1 August 2019', 'spiritualbook', 1539, 1385, 15, '		According to the legend, Sage Vasugupta received a divine revelation in a dream where Lord Shiva instructed him to seek out a specific stone near a serene stream.', 'spir14.jpg', '2025-04-26 21:33:16'),
(6, 'Sunderkand', 'by Goswami Tulsidas', 'Fingerprint! Publishing', ' 1 April 2019', 'spiritualbook', 500, 450, 10, '		Sunderkand, believed to be the most beautiful (Sunder) part of the Ramayana, describes Lord Hanuman journey to Lanka.', 'spir18.jpg', '2025-04-26 21:39:21'),
(7, 'Mukti', 'by Acharya Prashant', 'Prabhat Prakashan Pvt. Ltd.', '7 December 2022', 'spiritualbook', 539, 485, 10, '			A Journey Towards Inner Freedom and Spiritual Enlightenment A Journey Towards Inner Freedom and Spiritual Enlightenment A Journey Towards Inner Freedom and Spiritual Enlightenment A Journey Towards Inner Freedom and Spiritual Enlightenment ', 'spir16.jpg', '2025-04-26 21:41:24'),
(8, 'Ashtavakra Mahagita', 'by M. I. Rajasve', 'Fingerprint! Publishing', ' 1 February 2021', 'spiritualbook', 1939, 1745, 5, '		How long will it take to attain knowledge? The time the horse takes to race. King Janak prayed to Ashtavakra, a great sage of his time, to impart knowledge to him. ', 'spir17.jpg', '2025-04-26 21:45:44'),
(9, 'All Kinds of Stupid', 'by Saheba Singh', 'Fingerprint! Publishing', '31 August 2024 Next', 'politicalbooks', 1000, 900, 16, '		All Kinds of Stupid by Saheba Singh is a collection of poems that aims to become a constant companion during overwhelming times.', 'politic19.jpg', '2025-04-26 21:47:39'),
(10, 'Political Mysteries', 'by K R Malkani', 'Prabhat Prakashan', '1 January 2019', 'politicalbooks', 500, 450, 15, '			The author conducted meticulous research over five years to uncover the truth behind these events, making the book a valuable source of information.The book discusses not only political assassinations but also mysterious incidents such as the bombings of the Kashmir Princess and the Kanishka, providing insights into the complexities of such events.\r\nThrough this comprehensive examination, readers gain a deeper understanding of the historical and political forces at play behind these tragedies', 'politic18.jpg', '2025-04-26 21:49:35'),
(11, 'Nationalism', 'by Rabindranath Tagore', 'Penguin Ananda', '19 December 2024', 'politicalbooks', 639, 575, 10, '		Nationalism is a comprehensive exploration of the historical, political, and cultural phenomenon of nationalism. Written by Rabindranath Tagore, a renowned poet and philosopher, this thought-provoking book delves into the complexities and consequences of nationalistic fervor.', 'politic17.jpg', '2025-04-26 21:50:54'),
(12, 'Enlightenment1', 'by Sadhguru', 'Penguin Ananda', '19 December 2024', 'politicalbooks', 1000, 900, 100, '									The modern world has turned yet another simple, natural process into something to feel complicated about.  Enlightenment: A Homecoming is a collection of discourses by Sadhguru, in which he talks about enlightenment as a natural process to be engaged with, rather than something that can be “given” to us as a practice. ', 'politic16.jpg', '2025-04-26 22:00:22'),
(13, 'Capital (Das Capital)', 'by Karl Marx (Author) ', 'Fingerprint! Publishing', '1 November 2016', 'politicalbooks', 539, 485, 20, '					The author conducted meticulous research over five years to uncover the truth behind these events, making the book a valuable source of information.', 'politic15.jpg', '2025-04-26 22:06:30'),
(14, 'The Prince', 'by Niccolo Machiavelli', 'Fingerprint! Publishing', '1 August 2015', 'politicalbooks', 500, 450, 10, '		he Prince by Niccolò Machiavelli is a seminal work of political philosophy that offers profound insights into power, leadership, and governance. Immerse yourself in this influential treatise and gain a deeper understanding of the dynamics of politics and the art of ruling.', 'politic14.jpg', '2025-04-26 22:13:38'),
(15, 'Nationalism2', 'by Rabindranath Tagore', 'Fingerprint! Publishing', '1 August 2018', 'politicalbooks', 1000, 900, 10, '		Nationalism by Rabindranath Tagore is a thought-provoking collection of essays that delves into the concept of nationalism and its impact on society. ', 'politic12.jpg', '2025-04-26 22:16:33'),
(16, 'Prince by Niccolò', 'by Niccolò Machiavelli', 'Fingerprint! Publishing', '1 August 2015', 'politicalbooks', 900, 810, 10, '		The Prince by Niccolò Machiavelli is a seminal work of political philosophy that offers profound insights into power, leadership, and governance. Immerse yourself in this influential treatise and gain a deeper understanding of the dynamics of politics and the art of ruling.', 'politic10.jpg', '2025-04-26 22:18:51'),
(17, 'World History', 'by Wonder House Books', 'Wonder House Books', '20 October 2022', 'historicalbooks', 1539, 1385, 10, '		When and where did the first civilisations emerge? How did Britain lead the Industrial Revolution What was the Suffrage Movement This encyclopedia will answer these and more hows and whats for you.', 'history8.jpg', '2025-04-26 22:20:45'),
(18, 'Space', 'by Wonder House Books', 'Wonder House Books', '20 October 2022', 'historicalbooks', 499, 449, 15, '		Ever looked at the sky and wondered what all is out there in the universe? How did the solar system come into being? What are constellations? How did we reach the Moon', 'history9.jpg', '2025-04-26 22:22:07'),
(19, 'Short History of World', 'by H. G. Wells', 'Fingerprint! Publishing', '1 October 2015 ', 'historicalbooks', 539, 485, 16, '			Learn about the history of human civilization by H.G. Wells in this beautifully designed edition. From the earliest civilizations to the modern age, this book covers the major events and figures that have shaped our world.', 'history10.jpg', '2025-04-26 22:24:25'),
(20, 'The Art of War', 'by Sun Tzu', 'Fingerprint! Publishing', '1 December 2018 Next', 'historicalbooks', 1000, 900, 19, '		This Collectable Hardbound Deluxe Edition is beautifully crafted and designed. Perfect for gifting as well as for keeps. A prized edition for any library. ?The art of war is of vital importance to the State. It is a matter of life and death, a road either to safety or to ruin. ', 'history11.jpg', '2025-04-26 22:26:02'),
(21, 'HerStory', 'by Nikita Thakur', 'Invincible Publication Pvt Ltd', '11 December 2024', 'historicalbooks', 1539, 1385, 10, '		About the Book In historical records, little was written about women. Most researchers back then were Western men, projecting a white male perspective on the past as well. One of the greatest blunders that these accounts made was with the Indian woman', 'history12.jpg', '2025-04-26 22:27:38'),
(22, 'The Odyssey by Homer', 'by Homer', 'Fingerprint! Publishing', '1 August 2015', 'historicalbooks', 500, 450, 20, '		Sequal to The Illiad, the story begins ten years after the Trojan War and the Fall of Troy, when Odysseus, one of the war heroes, has still not returned to his kingdom Ithaca.', 'history13.jpg', '2025-04-26 22:30:28'),
(23, 'Maharaj', 'by Krishnarao Arjun', ' Saket Prakashan Pvt. Ltd.', '5 December 2024', 'historicalbooks', 539, 485, 40, '			An informative book on the life of one of the greatest warriors of India, the ruler of the Maratha Confederacy, Chhatrapati Shivaji Maharaj, whose guerrilla warfare tactics changed the course of mountain warfare strategies and aroused fear in the heart of the Mughal Emperor Aurangzeb and his generals.', 'history14.jpg', '2025-04-26 22:31:57'),
(24, 'Shivcharitra', 'by Sir Jadunath Sarkar', 'Saket Prakashan Pvt. Ltd.', '5 December 2024', 'historicalbooks', 1000, 900, 15, '		Shiv Charitra Aivam Chalisa is a book that delves deep into the life and teachings of Lord Shiva, one of the most revered deities in Hinduism.', 'history15.jpg', '2025-04-26 22:34:24'),
(25, 'Farseeker', 'by Joanna Starr', 'keshav pvt. Ltd', '25 March 2020', 'adventurebooks', 539, 485, 12, '			Earth, 50,000 years ago before the magic vanished. Invaded by aliens posing as gods, advanced civilisations crumbled. Now, these powerful off-worlders war for control of the planet, and the people who remain no longer remember what they once were.', 'adv2 - Copy - Copy - Copy.jpg', '2025-04-26 22:37:41'),
(26, 'Adventures Sherlock', 'by Sir Arthur Conan Doyle', '‎B Jain Publishers Pvt Ltd.', '20 October 2023', 'adventurebooks', 500, 450, 12, '		The Adventures of Sherlock Holmes is a must-read for fans of detective fiction. The collection features twelve short stories, each showcasing the brilliant mind of Sherlock Holmes as he solves some of the most perplexing cases of his career.', 'adv1 - Copy - Copy - Copy.jpg', '2025-04-26 22:39:55'),
(27, 'Power of One Thought', 'by BK Shivani', 'HarperCollins India', '1 July 2023', 'adventurebooks', 739, 665, 15, '		Renowned spiritual teacher BK Shivani profound wisdom has guided millions across the world through transformative journeys of self-discovery and personal empowerment.', 'adv3 - Copy - Copy - Copy.jpg', '2025-04-26 22:42:24'),
(28, 'The Last Bear', 'by Hannah Gold ', 'HarperCollins', '25 July 2022', 'adventurebooks', 1000, 900, 20, '		Imagine making friends with a polar bear... The Last Bear is perfect for readers of 8+, beautifully illustrated throughout by Levi Pinfold - winner of the Kate Greenaway Medal and illustrator of Harry Potter 20th anniversary edition covers.', 'adv4 - Copy - Copy - Copy.jpg', '2025-04-26 22:48:52'),
(29, 'Penguin Select Classics', 'by Mark Twain ', 'Penguin Select Classics', '21 October 2024', 'adventurebooks', 2539, 2285, 14, '		Along the Mississippi River, in the pre-civil war days, lived a mischievous and independent little boy Huckleberry Finn. The American Society in that era was brimming with policies that were discriminating and little boys like him who were oppressed.', 'adv9.jpg', '2025-04-26 22:51:24'),
(30, 'Leo Tolstoy', 'by Leo Tolstoy', 'Fingerprint! Publishing', '1 February 2019', 'adventurebooks', 500, 450, 17, '			Immerse yourself in Leo Tolstoy epic masterpiece, War and Peace. Set against the backdrop of the Napoleonic Wars, this sweeping novel explores the complexities of human nature, love, and the consequences of war. A must-read for lovers of classic literature and historical fiction.', 'adv10.jpg', '2025-04-26 22:54:51'),
(31, 'Kidnapped by Robert', 'by Robert Louis Stevenson', 'Fingerprint! Publishing', '20 May 2023', 'adventurebooks', 539, 485, 16, '		Spirited, romantic, and full of danger, Kidnapped is Robert Louis Stevenson classic of high adventure. Beloved by generations, it is the saga of David Balfour, a young heir whose greedy uncle connives to do him out of his inherited fortune ', 'adv11.jpg', '2025-04-26 22:57:35'),
(32, 'The Secret Garden', 'by Frances Hodgson', 'B K Publications Private Limited', '24 July 2022', 'adventurebooks', 1000, 900, 20, '		The Secret Garden is a timeless children classic that tells the story of Mary Lennox, a young girl who is sent to live with her uncle in a gloomy English manor after being orphaned. She is utterly miserable, but gradually the friendship with her maid and the discovery of a secret garden in the grounds of the house begin to change her.', 'adv12.jpg', '2025-04-26 22:59:41'),
(33, 'Ghosts of The Silent', 'by Anita Krishan', 'Fingerprint! Publishing', '1 December 2019', 'horrorbook', 1539, 1385, 30, '		Set in the spellbinding realm of the enchanting Himalayas, Maya, a journalist, unravels a series of mysterious events in a remote village. Seamlessly intertwining folklore and personal histories, Krishan skillfully navigates through themes of love, loss, and the unknown by capturing supernatural elements and exploring the human spirit resilience in the face of the mysterious and the unexplained.', 'horror9.jpg', '2025-04-26 23:02:08'),
(34, 'The Canterville Ghost', 'by Oscar Wilde', 'Fingerprint! Publishing', '1 February 2021', 'horrorbook', 580, 522, 22, '		The Canterville Ghost is a classic tale by Oscar Wilde, first published in 1887. A delightful read for all ages, the story follows the Otis family as they move into Canterville Chase, a haunted mansion in England, and encounter the mischievous ghost that haunts the house. This charming tale offers a unique blend of wit, satire, and heartfelt moments.', 'horror10.jpg', '2025-04-26 23:07:10'),
(35, 'Enter At Your Own Risk', 'by Anirban Bhattacharyya', 'Fingerprint! Publishing', '30 July 2024', 'horrorbook', 539, 485, 30, '		Get ready for an adrenaline pumping ride through six spine-chilling tales in Enter At Your Own Risk . As you flip through the pages, you will encounter vengeful spirits, malevolent entities, and ancient curses lurking around every corner. ', 'horror12.jpg', '2025-04-26 23:10:13'),
(36, 'The Game of Death', 'by Himanshu Rai', 'Fingerprint! Publishing', '31 December 2024', 'horrorbook', 900, 810, 30, '		The Game of Death follows teenager Aliza on a chilling quest after receiving a mysterious diary from her vanished classmate, Amrit. As she uncovers sinister truths and eerie rituals, Aliza is drawn into a dangerous web of lies and secrets. ', 'horror5.jpg', '2025-04-26 23:12:42'),
(37, 'Tantrics of Old', 'by Krishnarjun Bhatt', 'Fingerprint! Publishing', '1 January 2014', 'horrorbook', 1539, 1385, 15, '			The Horseman had come to your apartment Adri nodded. What did it want My goddamn soul. Tantrics. Necromancers. Exorcists. Talkers to the dead. Summoners of Demons. An ancient art. A select few. \r\n', 'horror13.jpg', '2025-04-26 23:17:27'),
(38, 'Tales of Horror', 'by Nikesh Murali', 'Fingerprint! Publishing', '15 July 2023', 'horrorbook', 500, 450, 30, '		Prepare to immerse yourself into the heart of darkness as Nikesh Murali, Commonwealth Short Story Prize-winning author and creator of Indias most critically acclaimed horror podcast Indian Noir weaves an unforgettable tapestry of bone-chilling scares and unrelenting terror.', 'horror14.jpg', '2025-04-26 23:20:02'),
(39, 'Ghosts in the Dark', 'by Anita Krishan', 'Fingerprint! Publishing', '1 January 2019', 'horrorbook', 539, 485, 40, '		When you hear things in the dark silence of the night, you know what it means they are watching you. The moment you are vulnerable, that when they will strike. Why, you ask Because you are alive. From the author of the bestselling Ghosts of the Silent Hills, comes another collection of chilling horror stories based on true events. ', 'horror15.jpg', '2025-04-26 23:21:55'),
(40, 'The Black Tiger', 'by Srijan Pal Singh', 'Wonder House Books', '7 December 2022', 'horrorbook', 1000, 900, 10, '		The Black Tiger is a product of a lucid research into the complicated world of black money its mechanisms, its movement, and its soft spots. A meditative and well-referenced critique of corruption and its corruptible practices, the book is a study of various countries across time and geography that have fought corruption in their own systems.', 'horror16.jpg', '2025-04-26 23:23:55'),
(60, 'Krishna', 'by Shubha Vilas', 'satish mali', '2 january', 'spiritualbook', 1000, 900, 50, 'hwdewyfwfhwhfuwkfkddfjgjdjgdgdgjgdjabhghghrijrbrbfgbbf', 'spir19.jpg', '2025-05-08 13:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscribed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `subscribed_at`) VALUES
(1, 'sanmatimali90@gmail.com', '2025-05-10 13:13:49'),
(3, 'sanmatimali9@gmail.com', '2025-05-10 13:17:02'),
(6, 'sayalimali1675@gmail.com', '2025-05-10 13:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'sanmati', '3a52f4896337ae9ba1de8292676f89aa', '2025-04-24 13:09:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestseller`
--
ALTER TABLE `bestseller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proname` (`proname`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `proname` (`proname`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `catname` (`catname`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proname` (`proname`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestseller`
--
ALTER TABLE `bestseller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
