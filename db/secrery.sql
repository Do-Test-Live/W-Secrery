-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 06:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secrery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'superadmin@secrery.com', '@BCD1234');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_heading` text NOT NULL,
  `blog_description` text NOT NULL,
  `industry_id` int(11) NOT NULL,
  `company_domain_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_heading`, `blog_description`, `industry_id`, `company_domain_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Things to do before leaving Microsoft', 'Folks,\n\nCan you folks tell me things to do before leaving Microsoft.\n\nHere are few things that are on top of my mind\n1. Utilize Perks+\n2. 401K max out\n3. Bright Horizons backup care hours - Do you know how to benefit from this? May be take tution hours for kids?\n4. Backup personal files from \"Onedrive -Microsoft\" (as you will lose access to 5TB)\n5. W2 and Payslip backup\n6. Personal profile backup - People talk about managepointhr , i have not gone there recently and don\'t know a way to go there. How to take backup of your profile?\n\n7. Connects backup\n8. Microsoft store - People talk about buying M365 subs, is it worth?\n9. Anything else from benefits portal? Insurance? HSA?\n10. How about linkedin Premium? I already have one active, wondering if I can buy for next year (as new fiscal year as started) ?\n11. How about microsoft alumni network, is it worth $101 per year?', 1, 1, 1, '2022-11-23 16:37:40', '2022-11-23 16:37:40'),
(2, 'FB Network Engineering Corp - Coding Round Interview Experience', 'A friend of mine has been asked a question in his coding round call: Given a file containing switch names, ports, Incoming BPS, Outgoing BPS. He had to find out the top talking switches using automation/scripting. He had done it in python. The role he interviewed for is Network Engineer, Corp. He Passed :)\r\n\r\nHere are some of the questions gathered from all over the internet for FB Network Engineer coding questions to help future applicants\r\n\r\nFor all networking roles at FB here is the common questions one can get:\r\nGoat Latin dictionary\r\n--Dinosaur question\r\npalindrome, arrange vowel and then consonant and given string, Regex\r\n#Basic questions about python ,\r\n#· Linux / automation, Scripting(Regex will be helpful)\r\n---Given that: \'1\' mapped to--> \'a\', \'2\' -->\'b\' , \'3\'--> \'c\'...like wise... \'26\'-->\'z\'.\r\nOutput should be in the following pattern :\r\nEx.1) if we input f=\"111\", the output should be: aaa, ak, ka\r\n//(111)->aaa, (1, 11)->ak, (11,1)->ka\r\nEx. 2) f=\"131\" output: aca, ma\r\n//(131)->aca, (13,1)->ma\r\nEx. 3) f=\"101\", output: ja\r\n//(10,1)->ja\r\nFocus more on.... Lists... Dictionaries... Srtring.... Manipulating data in above data structures (geeksforgeeeks. Com has good practice questions for above data structures)\r\n(bidsarmanish. Com also has good practice exercises.... Do all of these.... And you will be confident)\r\n--Also cover accessing csv files and manipulating or deriving results from the data in these file\r\n--Stupid simple. Sort using built in sort with python. But he seemed more interested in the full end to end read data file, do work, present results than a typical SWE big O bs algorithm question.\r\n--Given an array of integers and an integer k, you need to find the total number of continuous subarrays whose sum equals to k.\r\n--Given an array of integers greater than zero, find if it is possible to split it in two subarrays (without reordering the elements), such that the sum of the two subarrays is the same. Print the two subarrays.\r\n--count occurance of each element in the list\r\n--there are two list, find the common items in both of the list\r\n--given a csv file process the data and find the higest values\r\n-Given a set of distinct integers, nums, return all possible subsets (the power set).\r\n\r\nGiven a non-empty string s, you may delete at most one character. Judge whether you can make it a palindrome.\r\nExample 1:\r\nInput: \"aba\"\r\nOutput: True\r\nExample 2:\r\nInput: \"abca\"\r\nOutput: True\r\nExplanation: You could delete the character \'c\'.\r\n\r\n-Implement a basic calculator to evaluate a simple expression string.\r\n\r\nThe expression string contains only non-negative integers, +, -, *, / operators and empty spaces . The integer division should truncate toward zero.\r\nExample 1:\r\nInput: \"3+2*2\"\r\nOutput: 7\r\nExample 2:\r\nInput: \" 3/2 \"\r\nOutput: 1\r\n\r\nWriting a script to poll a number of network devices\r\n· Writing a function to sort an array\r\n· Writing a function to search for specific words in a file and remove them from the file\r\n· Writing a function to remove duplicates from an array\r\n· Writing a function that reads a list of hostnames and resolves each IP address and print them Writing a function that monitors a running application (e.g. parse one of the memory columns from the output of vmstat or the free command. And if the memory value exceeds a certain threshold for more than a certain timeframe, then print a report to alert the Ops team.)\r\n· The questions can be a real problem, or something contrived to use these skills.                                    ', 2, 1, 1, '2022-11-23 17:04:23', '2022-11-23 17:04:23'),
(3, 'Looking for FANG/Tech referrals & Advice', 'Hi all, first time posting here\r\n\r\nLooking to explore the market for a front-end role (or full-stack) and trying to move out of the banking sector, any advice for securing such roles, ie. do I still continue ahead and grind LC and all.\r\n\r\nAdditionally, looking to get referrals for Meta/Google/Stripe/Crypto tech firms and such.\r\n\r\nCurrent TC: 90k (Am I at a lower end of the tech spectrum :O)\r\nYOE: 2 years+\r\n\r\nAdditional question: Is it common to jump into another country for tech roles from Singapore (citizen here)', 2, 2, 2, '2022-11-23 11:25:00', '2022-11-23 11:25:00'),
(4, 'test1', 'test content                                    ', 1, 1, 4, '2022-11-24 07:35:11', '2022-11-24 07:35:11'),
(5, 'Shares', 'Chats', 2, 100, 9, '2022-11-24 23:12:01', '2022-11-24 23:12:01'),
(6, 'test', 'test', 1, 1, 3, '2022-12-06 14:05:52', '2022-12-06 14:05:52'),
(7, 'Test 8Dec', 'Test 8Dec', 0, 1, 3, '2022-12-07 16:21:42', '2022-12-07 16:21:42'),
(8, 'test', 'test', 1, 6, 15, '2022-12-09 10:59:28', '2022-12-09 10:59:28'),
(9, 'public post', 'public post', 1, 1, 3, '2022-12-11 06:04:39', '2022-12-11 06:04:39'),
(11, 'public post', 'public post', 1, 100, 1, '2022-12-12 17:41:59', '2022-12-12 17:41:59'),
(12, '321', 'abc', 2, 6, 1, '2022-12-14 08:10:54', '2022-12-14 08:10:54'),
(13, 'test', 'test', 2, 6, 1, '2022-12-14 14:55:38', '2022-12-14 14:55:38'),
(14, 'Test post 11Jan', 'Test post content', 1, 6, 3, '2023-01-11 11:58:10', '2023-01-11 11:58:10'),
(15, 'Whats next', '', 1, 12, 17, '2023-01-14 04:20:07', '2023-01-14 04:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`id`, `user_id`, `blog_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Nice Job!', '2022-11-23 17:04:37', '2022-11-23 17:04:37'),
(2, 2, 3, 'Good Job!', '2022-11-23 11:26:39', '2022-11-23 11:26:39'),
(3, 9, 2, 'Try a cmt', '2022-11-26 10:46:22', '2022-11-26 10:46:22'),
(4, 10, 1, 'rqworjqpoj213513vsdg ', '2022-11-26 11:09:38', '2022-11-26 11:09:38'),
(5, 11, 5, 'Comments 031231', '2022-11-26 11:58:31', '2022-11-26 11:58:31'),
(6, 17, 9, 'test', '2022-12-11 16:26:00', '2022-12-11 16:26:00'),
(7, 4, 4, 'Test again', '2022-12-13 14:36:12', '2022-12-13 14:36:12'),
(8, 4, 7, 'Really?', '2022-12-13 14:48:57', '2022-12-13 14:48:57'),
(9, 4, 4, 'woohoo', '2022-12-13 14:49:11', '2022-12-13 14:49:11'),
(10, 4, 3, 'trial', '2022-12-13 15:08:47', '2022-12-13 15:08:47'),
(11, 1, 11, 'test', '2022-12-14 07:28:52', '2022-12-14 07:28:52'),
(12, 1, 11, 'test', '2022-12-14 14:57:09', '2022-12-14 14:57:09'),
(13, 2, 1, 'Good. Thanks. Testing Comment 01', '2022-12-16 00:49:16', '2022-12-16 00:49:16'),
(14, 16, 1, 'Really that bad?', '2023-01-02 14:32:31', '2023-01-02 14:32:31'),
(15, 17, 1, 'Really?', '2023-01-14 04:22:09', '2023-01-14 04:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `chanel_post`
--

CREATE TABLE `chanel_post` (
  `id` int(11) NOT NULL,
  `blog_heading` text NOT NULL,
  `blog_description` text NOT NULL,
  `industry_id` int(11) NOT NULL DEFAULT 0,
  `company_domain_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chanel_post`
--

INSERT INTO `chanel_post` (`id`, `blog_heading`, `blog_description`, `industry_id`, `company_domain_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'validate me or tell me i\'m trash or give me some dose of reality', 'I\'m writing this post after a few drinks. I lurked for so long on blind and i can only get the courage to seek validation thru inebriation.\r\n\r\nI graduated in Dec 2017 from a large state school with no connections. I switched from a math/ece background (double major) and self-studied computer science fundamentals to prove that I\'m capable as a software engineer. I took CS 101 (C programming) and used MATLAB in control system classes and senior design project so I know a few things about programming and bit manipulation. I created side projects (never hosted them on Github because of imposter syndrome) where I built backend systems. I hosted these services on my free Azure education credits. I learned networking, deployments, creating websites, etc. I learned Vue.js, React, and Angular just because they popular and they were on job applications. I played with Bootstrap, Material.js, Foundation. I struggled with the front end.\r\n\r\nI moved to the Bay Area because I wanted to see if I was good culture fit for california/west coast. I had no job lined up and I finished a year of internships at an engineering firm.\r\n\r\nMy dream when I moved to bay area (san jose) was to work as a distributed systems engineer and, on the side, pursue my entrepreneurial dream of creating hardware/IOT systems while learning the software side thru FTE jobs to create a full enterprise suite. I would make things like create a full home security solution connected to IOT edge nodes and make it generic and scalable thru enterprise software experience.\r\n\r\nIn the meantime, I learned swift/objective-c programming and created a simple macOS application CRM to manage my part time job. I kept applying to jobs. Still I could not find any. I was working 2 part time jobs while applying to at least 5 companies/roles a day.\r\n\r\nNone of that happened. I applied to 100s of entry level computer science jobs and startups. Because I came from a large state school (south/southeast US, think football champs) recruiters threw my resume in the trash. I didn\'t care about football but it\'s something to talk about during cocktail parties. I got there because of a full ride scholarship.\r\n\r\nI eventually ended up at a Fortune 100 company (.NET/C# stack) as a software engineer. I started my master’s degree at the same time. Large companies suck. I can’t build like I used to. It was a place where people retired and other engineers had the right pace of work. But I did learn politics and what it was like to work for a big company.\r\n\r\nSomeone with a political science background (2 years older than me) was given projects and now this person became a senior engineer at a startup then became senior at a large engineering firm. I compare myself to him. He was given opportunities that I never received.\r\n\r\nI was laid off in May 2020 and finished my master\'s degree (online degree in computer science from top X school - idk the number and i really dont care, its a top school on us news I guess). I got the master\'s degree to signal employers that i knew how to code. I did not make any connections/networking while pursuing the masters degree (I see my master’s as just another \"training/certification”. It is still in its cylindrical tube).\r\n\r\nI got a new job after finishing my master’s degree. I quit this job 15 months later (put in my two weeks recently). I, again, felt like I wasn’t given any opportunities to show what I was capable of. I did learn a lot in this environment (leadership, stress and legacy). I also learned about burnout.\r\n\r\nMy entrepreneurial spirit has not died down. But my approach towards it has never been muddier.\r\n\r\n1. Am I enough to be a senior engineer?\r\n\r\nNot at Honeywell anymore.\r\n\r\n*Things that make me insecure:\r\n-If I was given the same opportunities as him, would I do just as good, better, or worse?\r\n-Who determines whether or not someone is ready for senior engineering position?\r\n-Is my approach too lofty?\r\n-Should I just “coast” and stop being ambitious and stop giving 110% at the companies?\r\n-Should I create more side projects to prove to hiring managers that I am capable of being senior?\r\n-Should I start my business first then show them that I’m capable?', 1, 1, 1, '2022-11-23 04:39:47', '2022-11-23 04:39:47'),
(2, 'The Truth About Goldman Sachs', 'I dont think anyone in FANG ever considers joining GS (or any bank for that matter) lol.\r\nBanks are the backup plan when you cant get into any half decent tech company.', 7, 2, 2, '2022-11-23 05:26:14', '2022-11-23 05:26:14'),
(3, 'Alpha', 'Beta', 0, 0, 9, '2022-11-24 17:12:40', '2022-11-24 17:12:40'),
(4, 'Comp chan', 'Comp chan', 0, 0, 9, '2022-11-26 04:32:22', '2022-11-26 04:32:22'),
(5, 'test', 'test1', 2, 1, 3, '2022-12-06 08:06:05', '2022-12-06 08:06:05'),
(6, 'company test', 'company test', 2, 1, 3, '2022-12-06 08:06:53', '2022-12-06 08:06:53'),
(7, 'tech test', 'test', 1, 1, 3, '2022-12-07 10:18:34', '2022-12-07 10:18:34'),
(8, 'test company', 'test', 1, 1, 3, '2022-12-09 02:43:40', '2022-12-09 02:43:40'),
(9, 'ngt test', 'ngt test content', 5, 6, 15, '2022-12-09 02:49:07', '2022-12-09 02:49:07'),
(10, 'NGT', 'NGT', 4, 6, 15, '2022-12-09 02:50:43', '2022-12-09 02:50:43'),
(11, 'test', 'test', 1, 6, 15, '2022-12-09 05:01:03', '2022-12-09 05:01:03'),
(12, 'company post', 'company post', 1, 1, 3, '2022-12-11 00:04:58', '2022-12-11 00:04:58'),
(13, 'Channel Posting', 'Why need to add industry', 1, 3, 4, '2022-12-13 08:56:29', '2022-12-13 08:56:29'),
(14, 'test ngt', 'ngt                                    ', 1, 6, 1, '2022-12-13 09:20:07', '2022-12-13 09:20:07'),
(15, 'test ngt', 'ngt post', 0, 6, 1, '2022-12-14 02:11:13', '2022-12-14 02:11:13'),
(16, 'Testing post 0-', 'Bhdgv', 0, 10, 2, '2022-12-15 18:50:59', '2022-12-15 18:50:59'),
(17, 'Lets try out', 'Woohoo', 0, 12, 17, '2023-01-13 22:18:06', '2023-01-13 22:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `chanel_post_comment`
--

CREATE TABLE `chanel_post_comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chanel_post_comment`
--

INSERT INTO `chanel_post_comment` (`id`, `user_id`, `blog_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Well Done!', '2022-11-23 11:27:00', '2022-11-23 11:27:00'),
(2, 2, 16, 'Good jobs. Can post. ', '2022-12-16 00:51:18', '2022-12-16 00:51:18'),
(3, 17, 17, 'Who am I', '2023-01-14 04:18:32', '2023-01-14 04:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `company_domain`
--

CREATE TABLE `company_domain` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `domain_name` varchar(255) NOT NULL,
  `sub_domain_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `salary` decimal(10,0) NOT NULL,
  `hours` decimal(10,0) NOT NULL,
  `promotion` decimal(10,0) NOT NULL,
  `happiness` decimal(10,0) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `monthly_income` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `working_hour` varchar(255) NOT NULL,
  `working_day` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `employee` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_domain`
--

INSERT INTO `company_domain` (`id`, `company_name`, `domain_name`, `sub_domain_name`, `description`, `salary`, `hours`, `promotion`, `happiness`, `experience`, `monthly_income`, `location`, `working_hour`, `working_day`, `image`, `employee`, `created_at`) VALUES
(1, '101 Network', '101network.com', '', 'One of the leading IT organizations in Hong Kong', '2', '5', '5', '1', '5', '1000 HKD', 'Hong Kong', '9 am to 5pm', '5 Days', 'img.png', 25, '2022-11-23 16:16:01'),
(2, 'First Citizens Bank', 'ying@fcbank.com', '', 'One of the leading banks in Hong Kong', '5', '6', '4', '3', '3', '5000 HKD', 'Hong Kong', '10am to 7pm', '5 Days', 'hotel.jpg', 10, '2022-11-23 11:17:52'),
(4, 'Company ABC', 'ABCD.Com', '', '', '0', '0', '0', '0', '', '', '', '', '', '', 0, '2022-11-26 11:28:26'),
(6, 'ngt', 'ngttech.io', ',', '', '0', '0', '0', '0', '', '', '', '', '', '', 0, '2022-12-09 08:48:01'),
(9, 'Test', 'test.com', '', 'Test content', '0', '0', '0', '0', '1999', '10000', 'Hk', '10', '10', '', 0, '2022-12-15 17:58:39'),
(10, 'OW', 'oliverwyman.com', '', '..', '0', '0', '0', '0', '2', '10', 'HK', '1', '1', '', 0, '2022-12-16 00:47:00'),
(12, 'Crypto.com', 'crypto.com', '', NULL, '0', '0', '0', '0', '2016', '10000', 'Hk', '10', '5', '', 0, '2023-01-02 14:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `company_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `company_id`, `user_email`) VALUES
(1, 'How the environment there?', 'It is quite a friendly environment.', 1, 'wing@101network.com'),
(2, 'test1', 'test', 1, 'tico3358@gmail.com'),
(3, '123', '456', 6, 'francis00358@gmail.com'),
(4, '123', '123', 3, 'francis00358@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `id` int(11) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `en_industry` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`id`, `industry`, `en_industry`, `image`, `created_at`) VALUES
(1, '資訊科技', 'Information Technology', 'assets/images/icons/technology.jpg', '2022-11-23 16:24:20'),
(2, '金融', 'Finance', 'assets/images/icons/finance.jpg', '2022-11-23 16:24:20'),
(3, '硬件及半導體', 'Hardware and Semiconductor', 'assets/images/icons/hardware.jpg', '2022-11-23 16:24:20'),
(4, '電子商務及零售', 'E-Commerce and Retail', 'assets/images/icons/E-Commerce&Retail.jpg', '2022-11-23 16:24:20'),
(5, '遊戲', ' Game', 'assets/images/icons/Gaming.jpg', '2022-11-23 16:24:20'),
(6, '汽車', ' Car', 'assets/images/icons/auto.jpg', '2022-11-23 16:24:20'),
(7, ' 媒體及娛樂 ', ' Media and Entertainment', 'assets/images/icons/social-media.jpg', '2022-11-23 16:24:20'),
(8, '電信', 'Telecommunications', 'assets/images/icons/telecommunications.jpg', '2022-11-23 16:24:20'),
(9, '健康', 'Healthy', 'assets/images/icons/healthcare.jpg', '2022-11-23 16:24:20'),
(10, '航空', 'Aviation', 'assets/images/icons/Aviation.jpg', '2022-11-23 16:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_rank` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `annual_salary` decimal(10,2) NOT NULL,
  `annual_bonas` decimal(10,2) NOT NULL,
  `salary_year` varchar(255) NOT NULL,
  `year_of_tenture` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `company` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `user_id`, `job_rank`, `job_title`, `annual_salary`, `annual_bonas`, `salary_year`, `year_of_tenture`, `comments`, `company`, `created_at`) VALUES
(2, 11, 'ABC', 'DEF', '2500.00', '500.00', '2022', '2021', 'Nice to work here', 'NGT', '2022-12-24 01:09:03'),
(3, 12, 'Test', 'Test', '5000.00', '1000.00', '2022', '2018', '', 'NGT', '2022-12-24 01:12:00'),
(4, 12, 'Test', 'Test', '8000.00', '1000.00', '2022', '2020', 'This is the updated data', 'NGT', '2022-12-24 01:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL DEFAULT 'Guest',
  `l_name` varchar(255) NOT NULL DEFAULT 'Guest',
  `image` varchar(255) NOT NULL DEFAULT 'images.png',
  `industry` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `c_domain_id` int(11) NOT NULL,
  `dob` date NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `vcode` int(11) NOT NULL,
  `company_vcode` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `company_email`, `f_name`, `l_name`, `image`, `industry`, `position`, `c_domain_id`, `dob`, `salary`, `gender`, `password`, `vcode`, `company_vcode`, `status`, `created_at`) VALUES
(1, 'test@gmail.com', 'test@test.com', 'test', 'Guest', 'images.png', '', '', 9, '0000-00-00', '0.00', '', '', 231016, 0, 0, '2022-12-15 11:59:07'),
(2, 'tath105@gmail.com', 'teddy.hung@oliverwyman.com', 'Test 01', 'Guest', 'images.png', '', '', 10, '0000-00-00', '0.00', '', '$argon2id$v=19$m=65536,t=4,p=1$TGJoTkF0S0ZFRDhuUzVlYw$tqj9HdabHFxjCxqndWK20KVKDpBxwg28MGkkfrUwPU4', 572730, 0, 1, '2022-12-15 18:47:31'),
(3, 'francis00358@gmail.com', 'francis@ngttech.io', 'frans', '', '5.jpg', '1', 'Director', 6, '0000-00-00', '100000.00', 'Male', '$argon2id$v=19$m=65536,t=4,p=1$U2JONUVaYmNaSnQ1UnhZRA$crWeaIA3DbJs0MuTzqZilToFoRf1lJqbfhpuni4R918', 277982, 0, 1, '2022-12-22 01:07:11'),
(16, 'tat.h105@gmail.com', 'teddy.hung@oliverwyman.com', 'TH', 'Guest', 'images.png', '', '', 10, '0000-00-00', '0.00', '', '$argon2id$v=19$m=65536,t=4,p=1$NllQVUQ3cjZaR3ZZbkh5Mg$JTMBn/o/ebocyvc41/gfJ/q1L0NnU4qMUB7rOiTTR4g', 676626, 640664, 1, '2023-01-02 08:28:09'),
(17, 'kankennedy@gmail.com', 'kennedy.kan@crypto.com', 'Kennedy', '', '5.jpg', '2', 'Analyst', 12, '0000-00-00', '10000.00', 'Male', '$argon2id$v=19$m=65536,t=4,p=1$eHI4QlF6V0dXLzBYL0Uxeg$+Lxnn4G5JoTRrcC2UjXOPOUPKmB9SZCcXHBdlmD4R+4', 692096, 818699, 1, '2023-01-02 08:30:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chanel_post`
--
ALTER TABLE `chanel_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chanel_post_comment`
--
ALTER TABLE `chanel_post_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_domain`
--
ALTER TABLE `company_domain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chanel_post`
--
ALTER TABLE `chanel_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `chanel_post_comment`
--
ALTER TABLE `chanel_post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_domain`
--
ALTER TABLE `company_domain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
