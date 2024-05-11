-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2024 at 07:34 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u650739581_motorvero`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_nows`
--

CREATE TABLE `apply_nows` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `resume` longtext DEFAULT NULL,
  `event_manually_resume` longtext DEFAULT NULL,
  `event_manually_letter` longtext DEFAULT NULL,
  `cover_letter` longtext DEFAULT NULL,
  `linkedin_profile` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `work_authorization` varchar(255) DEFAULT NULL,
  `maintain_authorization` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `transgender_identify` varchar(255) DEFAULT NULL,
  `lgbtqia_identify` varchar(255) DEFAULT NULL,
  `race_ethnicity` varchar(255) DEFAULT NULL,
  `veteran_status` varchar(255) DEFAULT NULL,
  `disability` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_nows`
--

INSERT INTO `apply_nows` (`id`, `job_id`, `first_name`, `last_name`, `email`, `phone`, `resume`, `event_manually_resume`, `event_manually_letter`, `cover_letter`, `linkedin_profile`, `website`, `work_authorization`, `maintain_authorization`, `gender`, `transgender_identify`, `lgbtqia_identify`, `race_ethnicity`, `veteran_status`, `disability`, `created_at`, `updated_at`) VALUES
(1, 38, 'Asad', 'Khan', 'asad@gmail.com', '03102010201', 'resume16869023243164153597.txt', NULL, NULL, 'cover_letter16869023247841625995.txt', 'https://eliteblue.net/motorvero/public/', 'https://eliteblue.net/motorvero/public/', 'Yes', 'Yes', '[\"Man\",\"I don\'t wish to\\r\\n                                        answer\"]', '[\"I identify as\\r\\n                                        transgender\",\">I do not identify as\\r\\n                                        transgender\"]', '[\"I identify as LGBTQIA+\",\"I do not identify as\\r\\n                                        LGBTQIA+\"]', '[\"African American\\/Black\",\"Caribbean\",\"Latinx\",\"Middle Eastern\"]', '[\"I am a veteran or active\\r\\n                                        military\",\"I am not a veteran or active military\"]', '[\"Yes\",\"I don\'t wish to\\r\\n                                        answer\"]', '2023-06-16 07:58:44', '2023-06-16 07:58:44'),
(2, 38, 'Ann', 'Payne', 'xinisoku@mailinator.com', '+1 (121) 899-1366', NULL, NULL, NULL, NULL, 'Nobis sunt consequa', 'https://www.vokavihok.ca', 'Yes', 'NO', '[\"I don\'t wish to\\r\\n                                        answer\"]', '[\"I identify as\\r\\n                                        transgender\",\"I do not identify as\\r\\n                                        transgender\"]', '[\"I do not identify as\\r\\n                                        LGBTQIA+\",\"I don\'t wish to\\r\\n                                        answer\"]', '[\"African American\\/Black\",\"Caribbean\",\"East Asian\",\"Middle Eastern\",\"Native American\",\"South Asian\",\"White\",\"I don\'t wish to\\r\\n                                        answer\"]', '[\"I am a veteran or active\\r\\n                                        military\"]', NULL, '2023-10-20 07:06:43', '2023-10-20 07:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `written_by` varchar(255) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `admin_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `slug`, `short_description`, `long_description`, `status`, `written_by`, `type`, `category`, `admin_status`, `created_at`, `updated_at`) VALUES
(255, 3, 'From Rags to Riches: Driving a 2020 Nissan Versa to the Hamptons', 'from-rags-to-riches-driving-a-2020-nissan-versa-to-the-hamptons', '<p>When the average car shopper considers a&nbsp;<a href=\"https://www.cargurus.com/Cars/2020-Nissan-Versa-Overview-c29165\">Nissan Versa</a>, they&rsquo;re doing so with one primary purpose: value.</p>', '<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter size-large\"><img class=\"wp-image-61641\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-1-of-17-1-1200x754.jpg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-1-of-17-1-1200x754.jpg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-1-of-17-1-300x188.jpg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-1-of-17-1-150x94.jpg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-1-of-17-1-768x482.jpg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-1-of-17-1-1536x965.jpg 1536w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-1-of-17-1-2048x1286.jpg 2048w\" alt=\"\" width=\"1200\" height=\"754\" /></figure>\r\n</div>\r\n<p>When the average car shopper considers a&nbsp;<a href=\"https://www.cargurus.com/Cars/2020-Nissan-Versa-Overview-c29165\">Nissan Versa</a>, they&rsquo;re doing so with one primary purpose: value.</p>\r\n<p>Today&rsquo;s automotive marketplace is awash with brilliant, beautifully engineered vehicles that, unfortunately, often cost well into the tens of thousands of dollars. The average transaction price for a new-car purchase sits well over $30,000, and that number rises every year.</p>\r\n<p>So, when Nissan puts a car like the Versa up for sale starting at $14,730&hellip; well, bargain shoppers take notice. Especially when the car in question looks as good as the 2020 Versa.</p>\r\n<h2><strong>What&rsquo;s the Plan?</strong></h2>\r\n<p>It&rsquo;s one thing to buy a car for an urban commute. It&rsquo;s a whole other thing when you need to drive a long distance. To really get an understanding of how well a subcompact sedan like the Nissan Versa handles a long drive, we embarked upon one of America&rsquo;s great automotive tests: the road trip.</p>\r\n<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter size-large\"><img class=\"wp-image-61642\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-8-of-17-1200x799.jpg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-8-of-17-1200x800.jpg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-8-of-17-300x200.jpg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-8-of-17-150x100.jpg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-8-of-17-768x511.jpg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-8-of-17-1536x1022.jpg 1536w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-8-of-17-2048x1363.jpg 2048w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-8-of-17-600x400.jpg 600w\" alt=\"\" width=\"1200\" height=\"799\" /></figure>\r\n</div>\r\n<p>In an attempt to bring a romantic irony to the experience, we decided it was only appropriate to drive one of America&rsquo;s least expensive cars to one of it&rsquo;s most expensive towns. Departing from Boston, we would travel roughly 100 miles to New London, Connecticut. From there, we&rsquo;d park the Versa on the Orient Point ferry, followed by another 40 miles to Westhampton, New York. After two days sequestered in a house (with a pool, thank goodness), we&rsquo;d do the same trip in reverse.</p>\r\n<h2><strong>How Does the Nissan Versa Handle a Long Drive?</strong></h2>\r\n<p>Nissan redesigned the Versa for the 2020 model year, delivering a transformation rare in cars of this size and at this price point. &nbsp;At our disposal was an SR trim optioned up to $21,885 and painted Monarch Orange Metallic. To say the least, we wouldn&rsquo;t lose this one in a parking lot.</p>\r\n<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter size-large\"><img class=\"wp-image-61643\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-14-of-17-1200x800.jpg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-14-of-17-1200x800.jpg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-14-of-17-300x200.jpg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-14-of-17-150x100.jpg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-14-of-17-768x512.jpg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-14-of-17-1536x1024.jpg 1536w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-14-of-17-2048x1365.jpg 2048w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-14-of-17-600x400.jpg 600w\" alt=\"\" width=\"1200\" height=\"800\" /></figure>\r\n</div>\r\n<p>The all-new Versa sits 2.3 inches lower to the road, stretches 1.6 inches longer from nose to tail, and spans and extra 1.8 inches across the middle. The new dimensions result in substantially reduced rear-seat legroom, which will hurt if you&rsquo;re taking the whole (hopefully small) family out of state. However, if you&rsquo;re embarking on a two-person road trip, the new car&rsquo;s dramatically larger front-seat area is a welcome change. On top of it, trunk space remains near the top of the segment, at 15 cubic feet. Unfortunately, the Nissan Versa Note hatchback was discontinued with the arrival of the 2020 Versa.</p>\r\n<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter size-large\"><img class=\"wp-image-61644\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-11-of-17-1200x800.jpg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-11-of-17-1200x800.jpg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-11-of-17-300x200.jpg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-11-of-17-150x100.jpg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-11-of-17-768x512.jpg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-11-of-17-1536x1024.jpg 1536w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-11-of-17-2048x1365.jpg 2048w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-11-of-17-600x400.jpg 600w\" alt=\"\" width=\"1200\" height=\"800\" /></figure>\r\n</div>\r\n<p>Hit the open road in a Nissan Versa, and you&rsquo;ll enjoy great fuel economy&mdash;we measured 39 miles per gallon along our mostly highway drive against the EPA&rsquo;s estimate of 32 mpg city, 40 highway, 35 combined. Because the Versa is a subcompact sedan, it doesn&rsquo;t insulate well from road and wind noise. Engine noise is also a disappointment. Paired with Nisan&rsquo;s Xtronic continuously variable transmission (CVT), the Versa&rsquo;s 1.6-liter four-cylinder engine makes a fair racket on its way to providing 122 horsepower and 114 pound-feet of torque.</p>\r\n<h2><strong>Is the Nissan Versa Easy to Live With?</strong></h2>\r\n<p>Along the way to Westhampton, we joked that we&rsquo;d stick out like a sore thumb. Or, to be more accurate, we&rsquo;d stick out like an economy car amid a sea of Audis, BMWs, and Porsches. Amazingly, and certainly thanks in no small part to the Versa&rsquo;s brilliant paint, we never felt out of place.</p>\r\n<p>The Versa can&rsquo;t compete with a luxury car, but considering it wasn&rsquo;t designed to, it doesn&rsquo;t feel terribly outgunned, either (at least in terms of style&mdash;don&rsquo;t put it on a drag strip). This is a handsome little car.</p>\r\n<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter size-large\"><img class=\"wp-image-61645\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-15-of-17-1200x800.jpg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-15-of-17-1200x800.jpg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-15-of-17-300x200.jpg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-15-of-17-150x100.jpg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-15-of-17-768x512.jpg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-15-of-17-1536x1024.jpg 1536w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-15-of-17-2048x1365.jpg 2048w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-15-of-17-600x400.jpg 600w\" alt=\"\" width=\"1200\" height=\"800\" /></figure>\r\n</div>\r\n<p>Even better, Versa drivers will benefit from its comparative lack of tech features. No, there&rsquo;s no night vision or augmented-reality camera feed on this mass-market vehicle, but its 7-inch touchscreen infotainment system sports Apple CarPlay, Android Auto, and most importantly, is very easy to use.</p>\r\n<h2><strong>Is the Nissan Versa a Good Value?</strong></h2>\r\n<p>The Versa is likely the most compelling sedan on the market for shoppers looking to spend less than $20,000. That may sound like a half-hearted compliment, but there&rsquo;s a very clear case to be made for buying a brand-new Versa, and it boils down to price.</p>\r\n<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter size-large\"><img class=\"wp-image-61646\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-7-of-17-1200x720.jpg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-7-of-17-1200x720.jpg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-7-of-17-300x180.jpg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-7-of-17-150x90.jpg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-7-of-17-768x461.jpg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-7-of-17-1536x922.jpg 1536w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/08/20-Versa-MSmith-edited-7-of-17-2048x1229.jpg 2048w\" alt=\"\" width=\"1200\" height=\"720\" /></figure>\r\n</div>\r\n<p>New cars come with a lot of perks, like up-to-date technology and safety features, not to mention new-car warranties. As most shoppers know, however, new cars also come with unavoidable depreciation. And, with few exceptions, the more expensive a car is, the quicker is tends to lose its value. But keep the cost of that new car relatively low, and there&rsquo;s limited room for it to depreciate. Rental-car companies have known this for years, and it&rsquo;s why you won&rsquo;t find top-dollar options and features on your rented Jeep Compass.</p>\r\n<p>But the Versa packages a lot of those options in as standard equipment. Additionally, the seats are comfortable, the tech is easy to use, and the car&rsquo;s impressive list of safety features rarely intruded into our drive. If you want space for five adults and leather upholstery, the Versa&rsquo;s not the best way to spend your money. That said, if you&rsquo;re only moving yourself or one passenger, you want some good baseline tech and safety, and you want the security of a warranty without huge depreciation, the Versa may make a lot of sense. Across 300 miles, you&rsquo;ll certainly know that you&rsquo;re driving a subcompact sedan, but with the 2020 Versa, that reality isn&rsquo;t as painful as it has been in the past.</p>', '1', 'onnana', 'new', 'blog', 1, '2023-05-22 09:03:13', '2023-08-14 23:52:06'),
(256, 3, 'The Range Rover Sport HST Hits the Sweet Spot', 'the-range-rover-sport-hst-hits-the-sweet-spot', '<p>Land Rover needs little introduction to the luxury-shopping community. The famed British company owns nearly exclusive rights to the top of the luxury</p>', '<div class=\"entry-content\">\r\n<figure class=\"wp-block-image size-large\"><img class=\"wp-image-61500\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-front-quarter-1200x728.jpg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-front-quarter-1200x728.jpg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-front-quarter-300x182.jpg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-front-quarter-150x91.jpg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-front-quarter-768x466.jpg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-front-quarter-1536x932.jpg 1536w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-front-quarter.jpg 2000w\" alt=\"\" width=\"1200\" height=\"728\" /></figure>\r\n<p>Land Rover needs little introduction to the luxury-shopping community. The famed British company owns nearly exclusive rights to the top of the luxury SUV mountain&mdash;at least for those with their eyes set below the two-hundred-thousand-and-up club dominated by&nbsp;<a href=\"https://www.cargurus.com/Cars/2019-Rolls-Royce-Cullinan-Overview-c28443\" target=\"_blank\" rel=\"noreferrer noopener\" aria-label=\"Rolls-Royce (opens in a new tab)\">Rolls-Royce</a>&nbsp;and&nbsp;<a href=\"https://www.cargurus.com/Cars/2020-Bentley-Bentayga-Overview-c29029\" target=\"_blank\" rel=\"noreferrer noopener\" aria-label=\"Bentley (opens in a new tab)\">Bentley</a>. The flagship, full-size&nbsp;<a href=\"https://www.cargurus.com/Cars/2020-Land-Rover-Range-Rover-Overview-c29215\" target=\"_blank\" rel=\"noreferrer noopener\" aria-label=\"Range Rover (opens in a new tab)\">Range Rover</a>&nbsp;remains Land Rover&rsquo;s crown jewel. However, the smaller&nbsp;<a href=\"https://www.cargurus.com/Cars/2020-Land-Rover-Range-Rover-Sport-Overview-c29249\" target=\"_blank\" rel=\"noreferrer noopener\" aria-label=\"Range Rover Sport (opens in a new tab)\">Range Rover Sport</a>&nbsp;model remains the best-selling Land Rover in the United States.&nbsp;</p>\r\n<span id=\"more-61493\"></span>\r\n<h2>Plenty of Power, Plenty of Posh</h2>\r\n<p>Like most vehicles in the Land Rover stable, the Range Rover Sport comes in a wide variety of trims. And before we start talking about &ldquo;value,&rdquo; it&rsquo;s worth noting: All Land Rovers are expensive. At the bottom of the totem pole lives the SE, with prices starting at $68,650.&nbsp;There&rsquo;s the HSE above that, starting at $74,250, and the fire-breathing SVR at the top of the pile, coming in at $114,500. Shoppers can choose among a range of engines&mdash;gasoline, diesel, and hybrid plug-in&mdash;although 4WD comes standard (this is a Land Rover, after all).&nbsp;</p>\r\n<p>Tucked away in the upper-middle section of the lineup lives the HST trim. Fitted with a spruced-up version of Land Rover&rsquo;s&nbsp;homegrown&nbsp;Ingenium inline 6-cylinder engine, the HST delivers 395 horsepower and 406 pound-feet of torque. Land Rover augments that power with a 48-volt mild-hybrid system designed to save gas and pump fewer emissions into the atmosphere. Starting price? A Goldilocks $82,950.&nbsp;</p>\r\n<figure class=\"wp-block-image size-large\"><img class=\"wp-image-61501\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-from-backseat-1200x755.jpg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-from-backseat-1200x755.jpg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-from-backseat-300x189.jpg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-from-backseat-150x94.jpg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-from-backseat-768x483.jpg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-from-backseat-1536x966.jpg 1536w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-from-backseat.jpg 2000w\" alt=\"\" width=\"1200\" height=\"755\" /></figure>\r\n<p>The HST clearly delivers the goods under the hood. Maybe it manages that a bit less excitingly than an SVR, but it certainly does it with more decorum. Inside the cabin, it&rsquo;s all Range Rover, too. Red leather upholstery covers the dash, and interspersed black swaths add a racy flavor that will almost certainly appeal to Land Rover&rsquo;s celebrity customers.&nbsp;</p>\r\n<h2>High-Tech Touches</h2>\r\n<p>A premium Meridian sound system delivers crisp sound, and your tunes are easily managed whether you opt to use Land Rover&rsquo;s infotainment system, Apple CarPlay, or Android Auto.&nbsp; The dual-screen setup in the Range Rover Sport takes barely a minute to learn, and after a week of driving, we thoroughly preferred it to many competitors&rsquo; single-screen designs. In particular, it was nice being able to use Android Auto&rsquo;s Google Maps feature on the top screen while still managing our Spotify choices on the lower screen.&nbsp;</p>\r\n<figure class=\"wp-block-image size-large\"><img class=\"wp-image-61506\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-Speaker-1200x868.jpg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-Speaker-1200x868.jpg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-Speaker-300x217.jpg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-Speaker-150x108.jpg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-Speaker-768x555.jpg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-Speaker-1536x1111.jpg 1536w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-Speaker.jpg 2000w\" alt=\"\" width=\"1200\" height=\"868\" /></figure>\r\n<p>Despite Land Rover&rsquo;s reputation for technological troubles, our test car never faltered. The only annoyance came from Land Rover&rsquo;s perplexing Adaptive Speed Limited. Rather than working like traditional cruise control, the default setting pegs the car at the posted speed limit. You can ask it to keep the speed a few miles per hour faster or slower than the road signs request, but it requires an extra step.&nbsp;</p>\r\n<h2>A Bull in a China Shop</h2>\r\n<p>Despite its cultured cabin, there&rsquo;s no getting around the Range Rover Sport&rsquo;s size. While it doesn&rsquo;t look particularly enormous sitting in a driveway, it feels positively massive on the road. Driving next to an Audi Q5, we found ourselves looking over and thinking, &ldquo;What are they doing all the way down there?&rdquo; Adjusting the Sport&rsquo;s ride height to off-road mode only adds to this feeling.&nbsp;</p>\r\n<figure class=\"wp-block-image size-large\"><img class=\"wp-image-61502\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-rear-quarter-1200x728.jpg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-rear-quarter-1200x728.jpg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-rear-quarter-300x182.jpg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-rear-quarter-150x91.jpg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-rear-quarter-768x466.jpg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-rear-quarter-1536x932.jpg 1536w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/02/RangeRover-Photos-rear-quarter.jpg 2000w\" alt=\"\" width=\"1200\" height=\"728\" /></figure>\r\n<p>Further, the Range Rover Sport has a nearly inexcusably large turning radius. Yes, we know we&rsquo;re talking about a genuine, off-road capable SUV here. But at more than 20 feet, it&rsquo;s significantly wider than a Toyota 4Runner&rsquo;s. It was exhausting to wrangle this car through the narrow streets of Cambridge, Massachusetts. You&rsquo;d think an iconic British brand would know the merits of a nimble steering rack.&nbsp;</p>\r\n<p>Regardless, the Land Rover badge still stands for something. Namely: luxury and capability. The Range Rover Sport&rsquo;s HST trim fulfills those requirements at a (by Land Rover standards) reasonable price. Choose your options judiciously, and an HST can deliver everything you want out of a luxury SUV.&nbsp;</p>\r\n</div>', '1', 'doudou', 'new', 'blog', 1, '2023-05-22 09:05:00', '2023-08-15 04:55:50'),
(260, 3, 'The Hummer Sport HST Hits the Sweet Spot', 'hummer', '<p>From Rags to Riches: Driving a 2020 Hummer to the Hamptons</p>', '<table id=\"myTable\" class=\"table dataTable no-footer\" aria-describedby=\"myTable_info\">\r\n<tbody>\r\n<tr class=\"odd\">\r\n<td>From Rags to Riches: Driving a 2020 Hummer to the Hamptons</td>\r\n</tr>\r\n</tbody>\r\n</table>', '1', NULL, 'used', 'blog', 1, '2023-05-22 11:02:30', '2023-08-12 00:15:42'),
(263, 3, 'The Jaguar F-PACE SVR: A Modern-Day Supercar', 'the-jaguar-f-pace-svr-a-modern-day-supercar', '<p>Let&rsquo;s be perfectly clear: The 380-horsepower Jaguar F-PACE S has always been a fast SUV. Its supercharged V6 roars to life and will make the uninitiated&rsquo;s hair stand on end. On this point, there is little argument.</p>', '<div class=\"entry-content\">\r\n<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter\"><img class=\"wp-image-61473\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-1-1200x808.jpeg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-1-1200x808.jpeg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-1-150x101.jpeg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-1-300x202.jpeg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-1-768x517.jpeg 768w\" alt=\"\" width=\"1200\" height=\"808\" /></figure>\r\n</div>\r\n<p>Let&rsquo;s be perfectly clear: The 380-horsepower Jaguar F-PACE S has always been a fast SUV. Its supercharged V6 roars to life and will make the uninitiated&rsquo;s hair stand on end. On this point, there is little argument.</p>\r\n<span id=\"more-61471\"></span>\r\n<p>The trouble is, performance SUVs like the&nbsp;<a href=\"https://www.cargurus.com/Cars/2020-BMW-X5-M-Overview-c29781\">BMW X5 M</a>,&nbsp;<a href=\"https://www.cargurus.com/Cars/2020-Jeep-Grand-Cherokee-Overview-c29397\">Jeep Grand Cherokee Trackhawk</a>, and&nbsp;<a href=\"https://www.cargurus.com/Cars/2020-Porsche-Cayenne-Overview-c29171\">Porsche Cayenne Turbo</a>&nbsp;redefined what shoppers can expect from a high-riding crossover, and Jaguar, a company with a long history in performance and racing, simply couldn&rsquo;t compete with those rocket ships.</p>\r\n<h2><strong>Don&rsquo;t Wake the Neighbors</strong></h2>\r\n<p>Luckily, in a true Cinderella story, Jaguar&rsquo;s supercharged V8 is a perfect fit for the F-PACE&rsquo;s engine bay. It&rsquo;s with this engine that the F-PACE evolves from a fast, premium luxury crossover and heads toward supercar territory.</p>\r\n<div class=\"wp-block-image\">\r\n<figure class=\"aligncenter\"><img class=\"wp-image-61474\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-5-1200x800.jpeg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-5-1200x800.jpeg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-5-150x100.jpeg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-5-300x200.jpeg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-5-768x512.jpeg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-5-600x400.jpeg 600w\" alt=\"\" width=\"1200\" height=\"800\" /></figure>\r\n</div>\r\n<p>The 2019 Jaguar F-PACE SVR isn&rsquo;t necessarily the best choice for early risers living in quiet suburban hamlets. Sure, our test car&rsquo;s Ultra Blue paint would look spectacular against a green, manicured lawn. But depress the brake and punch the ignition, and the birds will almost certainly leave their nest and your peaceful neighbors will likely be writing strongly worded letters to the homeowner&rsquo;s association.</p>\r\n<p>The F-PACE SVR is loud&mdash;loud is kind of Jaguar&rsquo;s thing these days. But it also comes with a little party trick for those who can&rsquo;t get enough of blasting through tunnels and revving in parking garages. On the center console between the driver and passenger seats, Jaguar has installed a button that opens a set of baffles in the exhaust tailpipe. Hit this button, and the SVR&rsquo;s engine note grows from a subtle (but noticeable) growl to an outright bark. The residents of your bucolic neighborhood might not appreciate the noise, but you likely will.</p>\r\n<h2><strong>Watch Out for That Speed Limit</strong></h2>\r\n<p>Once you&rsquo;re off and running, the party&rsquo;s just begun. The SVR&rsquo;s 5.0-liter V8 engine puts out 550 horsepower and 502 pound-feet of torque, distributed to all four wheels and managed by a quick 8-speed automatic transmission. It&rsquo;s not quite as quick as some competitors&mdash;namely the Porsche Macan Turbo&mdash;but with Pirelli Scorpion all-season tires, it raced away from stoplights and tore through corners. Despite the car&rsquo;s 4,395 pounds, it never felt top-heavy.</p>\r\n<figure class=\"wp-block-image\"><img class=\"wp-image-61477\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-1200x800.jpeg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-1200x800.jpeg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-150x100.jpeg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-300x200.jpeg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-768x512.jpeg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-600x400.jpeg 600w\" alt=\"\" width=\"1200\" height=\"800\" /></figure>\r\n<p>Certainly, the SVR benefits from a few additional upgrades&mdash;at nearly $90,000, one would hope it comes with more than just a big engine. 22-inch wheels handle the wide tires, and the massive brakes house Jaguar&rsquo;s electronic active differential, which helps the vehicle carve corners by applying light braking to the inside wheel during turns. Unfortunately, like a true supercar, it also chugged gas. Over 250 miles, we averaged 16.3 miles per gallon of painfully expensive premium fuel.</p>\r\n<h2><strong>Stop for Groceries</strong></h2>\r\n<p>What truly makes the F-PACE special, however, is not its sound or its speed or its handling chops. It&rsquo;s that it provides all of these supercar elements while still being up to the task of day-to-day life.</p>\r\n<figure class=\"wp-block-image\"><img class=\"wp-image-61476\" src=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-4-1200x800.jpeg\" sizes=\"(max-width: 1200px) 100vw, 1200px\" srcset=\"https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-4-1200x800.jpeg 1200w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-4-150x100.jpeg 150w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-4-300x200.jpeg 300w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-4-768x512.jpeg 768w, https://cargurus.wpenginepowered.com/wp-content/uploads/2020/01/Jaguar-4-600x400.jpeg 600w\" alt=\"\" width=\"1200\" height=\"800\" /></figure>\r\n<p>Typically, you&rsquo;ll hear critics praise the&nbsp;<a href=\"https://www.cargurus.com/Cars/2020-Porsche-911-Overview-c29071\">Porsche 911</a>&nbsp;or the&nbsp;<a href=\"https://www.cargurus.com/Cars/2020-Audi-R8-Overview-c28955\">Audi R8</a>&nbsp;as &ldquo;everyday supercars,&rdquo; because they&rsquo;re relatively comfortable and easy to drive, while also providing top-tier performance. But next to an F-PACE SVR, those cars are garage-queen exotics.</p>\r\n<p>The F-PACE gives you all-wheel drive. It gives you ground clearance. It gives you 63.5 cubic feet of total cargo space. It just so happens to also give you face-melting acceleration and cellular-disrupting braking. Packaged in gorgeously designed sheet metal and complete with advanced safety and technology features, the F-PACE SVR is the new daily-driving supercar.</p>\r\n</div>', '1', NULL, 'new', 'article', 1, '2023-05-22 11:24:13', '2023-08-16 08:33:15'),
(265, 3, 'Testing ok', 'testing', '<p>this is just for testing</p>', '<p>this is just for testing</p>', '1', NULL, NULL, NULL, 1, '2023-06-16 11:28:04', '2023-07-02 17:51:08'),
(266, 16, 'Blog Data', 'blog-data', '<p>Blog Data ok</p>', '<p>Blog Data</p>', '1', NULL, 'used', 'article', 0, '2023-06-16 14:00:25', '2023-08-23 04:50:37'),
(267, 3, 'Who Makes Electric Cars?', 'testing-blog', '<p>Anyone with cash or a decent credit score can purchase an electric car from these automakers.</p>', '<p>We&rsquo;ve arrived at the tipping point where it&rsquo;s probably easier to list the manufacturers that don&rsquo;t make an electric car, rather than those that do. It&rsquo;s amazing to consider that it was only 12 model years ago when you could first to purchase an electric vehicle (EV) from a mass-market automaker in the United States. And in the intervening years, at least three startup car manufacturers have emerged,&nbsp;<strong><a href=\"https://www.cargurus.com/Cars/articles/how-to-buy-a-tesla\">one of which sells over 300,000 zero-emissions cars a year</a></strong>. That alone is incredible. 25 years ago, most experts in the industry would&rsquo;ve told you that the introduction of an all-new independent auto manufacturer in the US market was all but impossible.</p>\r\n<p>In that short span of time, the variety of electric vehicles offered has exploded. In 2011, you had one choice: an econobox focused on frugality. In the current model year, you have vehicles from at least four different classes, including strong representation from luxury cars and SUVs. The only thing missing at this point is a pure sports car, and that&rsquo;s coming in the very near future.</p>\r\n<p>This roundup of electric car companies is very much a moving target. Every few months, we&rsquo;re expecting new EVs to emerge from traditional manufacturers, as well as upstarts in the automotive industry hoping to disrupt the status quo.</p>\r\n<p>For now, we&rsquo;ll keep this list to makers of passenger&nbsp;<strong><a href=\"https://www.cargurus.com/Cars/articles/should-I-buy-an-electric-car\">vehicles that anyone with cash or a decent credit score can purchase</a></strong>, either now or in the next year or two.</p>', '1', 'big boy', 'new', 'research', 1, '2023-07-04 22:19:06', '2023-08-14 18:31:38'),
(268, 3, 'The Best Trucks Under $25,000 in 2023', 'blog-title-2', '<p>The truck landscape sure has changed. Not long ago, you could pick up a used 2012 Chevrolet Silverado 2500 in the $8,000 to $10,000 range, even with low mileage.</p>', '<p>Pickup trucks are inherently useful vehicles. Not only do they offer a handy bed for loading up landscaping materials, construction equipment, or other cargo, but many crew cab pickup trucks now offer enough interior space to make them genuine family vehicles.</p>\r\n<p>Shoppers on a budget can still buy a pickup truck--there are plenty of options available. We&rsquo;ve set a price cap of $25,000 in this article, and while many of our suggestions are used trucks, there are some brand-new models available for less than $25,000, too. If you want features like touchscreen audio system controls, a backup camera, and Apple CarPlay/Android Auto connectivity, you\'ll be able to find them at this price point.</p>\r\n<p>In general, if you&rsquo;re looking for a pickup under $25,000, your best bet is to set your sights on one of the lower trim levels. If you&rsquo;re looking at the Ford F-150 King Ranch, RAM 1500 Laramie, or Chevrolet Silverado LTZ trims, this price range will limit you to older trucks with lots of miles on the odometer. The Ford F-Series XL, Ram Tradesman, and Chevrolet WT trim levels, on the other hand, are all low-cost pickups that still include air conditioning, power windows, power locks, power steering, and power anti-lock brakes.</p>\r\n<p>Modern pickup trucks almost all have automatic transmissions, too, and most are offered with either rear-wheel drive (RWD) or four-wheel drive (4WD). Unless you&rsquo;re hauling a horse trailer up a steep dirt road or driving regularly in slippery, snowy conditions, opting for RWD may be a good tip to save some money.</p>', '1', NULL, 'used', 'research', 1, '2023-07-04 22:21:07', '2023-07-04 22:45:44'),
(269, 3, 'dope', 'dope', '<p>doki</p>', '<p>dope</p>', '0', NULL, 'used', 'blog', 1, '2023-07-13 06:47:15', '2023-07-13 06:50:04'),
(270, 3, 'Article testing', 'article-testing', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '<div>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>&nbsp;</div>', '1', NULL, 'new', 'article', 1, '2023-07-25 21:51:15', '2023-07-25 21:51:15'),
(271, 3, 'advice 123', 'advice', '<div>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>&nbsp;</div>', '<div>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>&nbsp;</div>', '1', NULL, 'new', 'article', 1, '2023-07-25 21:53:14', '2023-07-31 21:53:08'),
(274, 3, 'asdfasdfasf', 'asdfasdfasf', '<p>asdfasdfasf</p>', NULL, '1', NULL, 'new', 'article', 1, '2023-07-31 22:05:29', '2023-07-31 22:55:57'),
(275, 3, 'testing blog in all pages', 'testing-blog-in-all-pages', '<p>testing blog in all pages testing blog in all pages&nbsp; testing blog in all pages&nbsp;</p>\r\n<p>testing blog in all pages testing blog in all pages&nbsp; testing blog in all pages&nbsp;</p>\r\n<p>testing blog in all pages testing blog in all pages&nbsp; testing blog in all pages&nbsp;</p>\r\n<p>testing blog in all pages testing blog in all pages&nbsp; testing blog in all pages&nbsp;</p>', '<p>testing blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pagestesting blog in all pages</p>', '1', NULL, 'new', 'article', 1, '2023-08-08 20:28:58', '2023-08-08 20:28:58'),
(276, 3, 'testing new blog on all pages article 2', 'testing-new-blog-on-all-pages-article-2', '<p>testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2</p>', '<p>testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2testing new blog on all pages article 2</p>', '1', NULL, 'Select', 'article', 1, '2023-08-08 20:56:21', '2023-08-08 20:56:21'),
(277, 3, 'sadasfasf', 'sadasfasf', '<p>asdfasfasdfasf</p>', '<p>sdfasfasfas</p>', '1', 'dev', 'new', 'article', 1, '2023-08-13 21:53:35', '2023-08-13 21:53:35'),
(278, 3, 'testing for car preview', 'testing-for-car-preview', '<p>testing for car preview</p>', '<p>testing for car preview</p>', '1', NULL, 'used', 'article', 1, '2023-08-13 22:33:02', '2023-08-13 22:33:02'),
(279, 3, 'testing for car preview new', 'testing-for-car-preview-new', '<p>testing for car preview new</p>', '<p>testing for car preview new</p>', '1', NULL, 'new', 'article', 1, '2023-08-13 22:33:59', '2023-08-13 22:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `blog_page_categories`
--

CREATE TABLE `blog_page_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_page_categories`
--

INSERT INTO `blog_page_categories` (`id`, `category_id`, `page_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 274, 'blog', '2023-07-31 22:05:29', '2023-07-31 22:55:36', '2023-07-31 22:55:36'),
(2, 274, 'research', '2023-07-31 22:05:29', '2023-07-31 22:55:36', '2023-07-31 22:55:36'),
(3, 274, 'sell_my_car', '2023-07-31 22:05:29', '2023-07-31 22:55:36', '2023-07-31 22:55:36'),
(4, 274, 'blog', '2023-07-31 22:55:57', '2023-07-31 22:55:57', NULL),
(5, 274, 'research', '2023-07-31 22:55:57', '2023-07-31 22:55:57', NULL),
(6, 255, 'research', '2023-08-04 04:08:32', '2023-08-04 04:09:29', '2023-08-04 04:09:29'),
(7, 255, 'sell_my_car', '2023-08-08 19:55:25', '2023-08-08 19:56:09', '2023-08-08 19:56:09'),
(8, 275, 'blog', '2023-08-08 20:28:58', '2023-08-08 20:28:58', NULL),
(9, 275, 'research', '2023-08-08 20:28:58', '2023-08-08 20:28:58', NULL),
(10, 275, 'sell_my_car', '2023-08-08 20:28:58', '2023-08-08 20:28:58', NULL),
(11, 275, 'tip_and_advice', '2023-08-08 20:28:58', '2023-08-08 20:28:58', NULL),
(12, 275, 'industry_insight', '2023-08-08 20:28:58', '2023-08-08 20:28:58', NULL),
(13, 276, 'blog', '2023-08-08 20:56:21', '2023-08-08 20:56:21', NULL),
(14, 276, 'research', '2023-08-08 20:56:21', '2023-08-08 20:56:21', NULL),
(15, 276, 'sell_my_car', '2023-08-08 20:56:21', '2023-08-08 20:56:21', NULL),
(16, 276, 'tip_and_advice', '2023-08-08 20:56:21', '2023-08-08 20:56:21', NULL),
(17, 276, 'industry_insight', '2023-08-08 20:56:21', '2023-08-08 20:56:21', NULL),
(18, 263, 'blog', '2023-08-10 18:26:52', '2023-08-10 18:28:00', '2023-08-10 18:28:00'),
(19, 263, 'research', '2023-08-10 18:28:00', '2023-08-10 18:28:51', '2023-08-10 18:28:51'),
(20, 263, 'sell_my_car', '2023-08-10 18:28:51', '2023-08-16 08:30:59', '2023-08-16 08:30:59'),
(21, 260, 'blog', '2023-08-12 00:06:40', '2023-08-12 00:07:48', '2023-08-12 00:07:48'),
(22, 260, 'research', '2023-08-12 00:07:48', '2023-08-12 00:08:27', '2023-08-12 00:08:27'),
(23, 260, 'sell_my_car', '2023-08-12 00:08:27', '2023-08-12 00:09:36', '2023-08-12 00:09:36'),
(24, 260, 'tip_and_advice', '2023-08-12 00:09:36', '2023-08-12 00:10:29', '2023-08-12 00:10:29'),
(25, 260, 'industry_insight', '2023-08-12 00:10:29', '2023-08-12 00:11:40', '2023-08-12 00:11:40'),
(26, 260, 'blog', '2023-08-12 00:12:47', '2023-08-12 00:13:37', '2023-08-12 00:13:37'),
(27, 260, 'blog', '2023-08-12 00:14:38', '2023-08-12 00:14:45', '2023-08-12 00:14:45'),
(28, 260, 'research', '2023-08-12 00:14:45', '2023-08-12 00:15:42', '2023-08-12 00:15:42'),
(29, 277, 'blog', '2023-08-13 21:53:35', '2023-08-13 21:53:35', NULL),
(30, 277, 'research', '2023-08-13 21:53:35', '2023-08-13 21:53:35', NULL),
(31, 277, 'sell_my_car', '2023-08-13 21:53:35', '2023-08-13 21:53:35', NULL),
(32, 277, 'tip_and_advice', '2023-08-13 21:53:35', '2023-08-13 21:53:35', NULL),
(33, 277, 'industry_insight', '2023-08-13 21:53:35', '2023-08-13 21:53:35', NULL),
(34, 278, 'car_preview', '2023-08-13 22:33:02', '2023-08-13 22:33:02', NULL),
(35, 279, 'car_preview', '2023-08-13 22:33:59', '2023-08-13 22:33:59', NULL),
(36, 267, 'sell_my_car', '2023-08-14 17:53:02', '2023-08-14 17:54:09', '2023-08-14 17:54:09'),
(37, 267, 'sell_my_car', '2023-08-14 17:56:01', '2023-08-14 17:57:39', '2023-08-14 17:57:39'),
(38, 267, 'blog', '2023-08-14 18:30:33', '2023-08-14 18:31:38', '2023-08-14 18:31:38'),
(39, 255, 'tip_and_advice', '2023-08-14 23:47:22', '2023-08-14 23:49:03', '2023-08-14 23:49:03'),
(40, 255, 'tip_and_advice', '2023-08-14 23:49:03', '2023-08-14 23:49:30', '2023-08-14 23:49:30'),
(41, 255, 'tip_and_advice', '2023-08-14 23:49:30', '2023-08-14 23:50:54', '2023-08-14 23:50:54'),
(42, 255, 'sell_my_car', '2023-08-14 23:50:54', '2023-08-14 23:51:23', '2023-08-14 23:51:23'),
(43, 255, 'sell_my_car', '2023-08-14 23:51:23', '2023-08-14 23:52:06', '2023-08-14 23:52:06'),
(44, 256, 'industry_insight', '2023-08-15 04:53:09', '2023-08-15 04:54:43', '2023-08-15 04:54:43'),
(45, 256, 'industry_insight', '2023-08-15 04:55:12', '2023-08-15 04:55:50', '2023-08-15 04:55:50'),
(46, 263, 'car_preview', '2023-08-16 08:33:15', '2023-08-16 08:34:35', '2023-08-16 08:34:35'),
(47, 263, 'tip_and_advice', '2023-08-16 08:34:35', '2023-08-16 08:35:31', '2023-08-16 08:35:31'),
(48, 263, 'research', '2023-08-16 08:35:31', '2023-08-16 08:36:19', '2023-08-16 08:36:19'),
(49, 263, 'sell_my_car', '2023-08-16 08:36:19', '2023-08-16 08:36:19', NULL),
(50, 266, 'blog', '2023-08-23 04:50:37', '2023-08-23 04:50:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `cover_letter` text NOT NULL,
  `resume` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `first_name`, `last_name`, `email`, `phone_no`, `cover_letter`, `resume`, `created_at`, `updated_at`) VALUES
(4, 'Corporis sint offici', 'Tamekah', 'Alvarado', 'tokepene@mailinator.com', '+1 (592) 935-4821', 'Sed eaque perferendi', 'resume16851810121408031552.pdf', '2023-05-27 09:50:12', '2023-05-27 09:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `dealer_type` int(11) DEFAULT NULL,
  `make_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_year` int(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `dollar_price` varchar(255) DEFAULT NULL,
  `original_price` varchar(255) DEFAULT NULL,
  `prices` longtext DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mile_age` varchar(255) DEFAULT NULL,
  `engine_capacity` varchar(255) DEFAULT NULL,
  `fuel_type` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `transmission` varchar(255) DEFAULT NULL,
  `vehicle_condition` varchar(255) DEFAULT NULL,
  `external_color` varchar(255) DEFAULT NULL,
  `internal_color` varchar(255) DEFAULT NULL,
  `vehicle_body` varchar(255) DEFAULT NULL,
  `VIN` varchar(255) DEFAULT NULL,
  `deal_type` varchar(255) DEFAULT NULL,
  `title_check` varchar(255) DEFAULT NULL,
  `accident_check` varchar(255) DEFAULT NULL,
  `owner` int(255) DEFAULT NULL,
  `certified` int(11) DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `admin_status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `user_id`, `dealer_type`, `make_id`, `model_id`, `model_year`, `title`, `slug`, `dollar_price`, `original_price`, `prices`, `details`, `location`, `zip_code`, `contact_no`, `email`, `mile_age`, `engine_capacity`, `fuel_type`, `vehicle_type`, `transmission`, `vehicle_condition`, `external_color`, `internal_color`, `vehicle_body`, `VIN`, `deal_type`, `title_check`, `accident_check`, `owner`, `certified`, `status`, `admin_status`, `created_at`, `updated_at`) VALUES
(64, 3, 1, 68, 47, 1995, 'Robert Andrewss', 'robert-andrews', '42000', '42953', '[\"42953\",\"42000\"]', '<p>Price History comprises prices posted on MotorVero for this vehicle. Price may exclude certain taxes, fees, and/or charges. See seller for details.</p>', 'Minneapolis, MN 31 mi away', '75070', '288499222', 'subaro@gmail.com', '161,496 miles', '170 hp 2.5L H4', 'electric', 'Four Wheeler', 'Automatic', 'New', 'Black', 'none', 'SUV / Crosover', '44332211345', 'Great', 'Good', 'No Accident', 1, 1, 1, 1, '2023-06-07 11:01:29', '2023-10-10 20:42:33'),
(66, 3, 1, 74, 58, 1999, 'Polestar 1 AWD', 'polestar-1-awd-2', '42953', '42953', '[\"42953\"]', '<p>Price History comprises prices posted on MotorVero for this vehicle. Price may exclude certain taxes, fees, and/or charges. See seller for details.</p>', 'massachusettes', '01220', '+1 (334) 581-1797', 'polester2021@gmail.com', '4321', '55433', 'Gas', 'Four Wheeler', 'Manual', 'Used', 'black', 'none', 'HatchBack', '6654', 'Great', 'Good', 'No Accident', 1, 1, 1, 1, '2023-06-07 11:25:42', '2023-10-10 20:42:33'),
(67, 3, 1, 75, 60, 2000, 'Mark X', 'mark-x', '25000', '25000', '[\"25000\"]', '<p>Price History comprises prices posted on MotorVero for this vehicle. Price may exclude certain taxes, fees, and/or charges. See seller for details.</p>', 'Al Raas Mall opposite DHA phase ll Gate 1 Main GT Road', '24720.', '00322376442', 'MarkX2005@gmail.com', '125,000', '2500 cc', 'Gas', 'Four Wheeler', 'Manual', 'Used', 'Black', 'None', 'Sedan', '5722525252525', 'Good', 'Fair', 'No Accident', 2, 1, 1, 1, '2023-06-07 11:38:44', '2023-10-10 20:42:33'),
(68, 3, 1, 75, 61, 2005, 'Sonata', 'sonata', '24950', '24950', '[\"24950\",\"24950\"]', '<p>Price History comprises prices posted on MotorVero for this vehicle. Price may exclude certain taxes, fees, and/or charges. See seller for details.</p>', 'Sed natus est velit', '59201', '0552025424', 'Sonata2023@gmail.com', '00000', '2000 cc to 2500 cc', 'Gas', 'Four Wheeler', 'Automatic', 'New', 'Grey', 'None', 'Sedan', '4454545454', 'High', 'Excellent', 'No Accident', 2, 1, 1, 1, '2023-06-07 11:53:01', '2023-10-10 20:42:33'),
(70, 3, 1, 73, 57, 2015, 'Wagon R', 'wagon-r', '15000', '15000', '[\"15000\"]', '<p>Price History comprises prices posted on MotorVero for this vehicle. Price may exclude certain taxes, fees, and/or charges. See seller for details.</p>', 'Central Jail Karachi', '4545', '03364572522', 'WagonR25@gmail.com', '2000', '998 cc', 'Gas', 'Four Wheeler', 'Manual', 'Used', 'White', 'None', 'Wagon', '5285517', 'Good', 'Good', 'No Accident', 4, 1, 1, 1, '2023-06-07 12:17:04', '2023-10-10 20:42:33'),
(71, 3, 1, 75, 59, 2020, 'Vigo', 'vigo', '45000', '45000', '[\"45000\"]', '<p>Price History comprises prices posted on MotorVero for this vehicle. Price may exclude certain taxes, fees, and/or charges. See seller for details.</p>', 'National Cricket Stadium Karachi', '3545', '0032263849', 'Vigo34@gmail.com', '117,000', '2494 cc', 'electric', 'Four Wheeler', 'Automatic', 'Used', 'Black', 'None', 'PickUp Truck', '41811454', 'Good', 'Good', 'No Accident', 3, 1, 1, 1, '2023-06-07 12:24:05', '2023-10-10 20:42:33'),
(72, 3, 1, 64, 40, 2019, 'Range Rover', 'range-rover', '100000', '100000', '[\"100000\"]', '<p>Price History comprises prices posted on MotorVero for this vehicle. Price may exclude certain taxes, fees, and/or charges. See seller for details.</p>', 'Hassan Square', '3545', '0236941917', 'Range3@gmail.com', '8,500 km', '2000 cc', 'Gas', 'Four Wheeler', 'Manual', 'New', 'White', 'None', 'SUV/Crosover', '8984187', 'Good', 'Good', 'No Accident', 1, 1, 1, 1, '2023-06-07 13:16:02', '2023-10-10 20:42:33'),
(73, 3, 1, 77, 63, 2018, '2021 Nissan Titan SV Crew Cab 4WD', '2021-nissan-titan-sv-crew-cab-4wd', '35527', '35527', '[\"35527\"]', '<div>\r\n<dl class=\"hP30qs\">\r\n<dt class=\"om75fw\" data-cg-ft=\"make\">Make:</dt>\r\n<dd class=\"BivK6Q\">Nissan</dd>\r\n<dt class=\"om75fw\" data-cg-ft=\"model\">Model:</dt>\r\n<dd class=\"BivK6Q\">Titan</dd>\r\n<dt class=\"om75fw\" data-cg-ft=\"year\">Year:</dt>\r\n<dd class=\"BivK6Q\">2021</dd>\r\n<dt class=\"om75fw\" data-cg-ft=\"trim\">Trim:</dt>\r\n<dd class=\"BivK6Q\">SV Crew Cab 4WD</dd>\r\n<dt class=\"om75fw\" data-cg-ft=\"bodyType\">Body type:</dt>\r\n<dd class=\"BivK6Q\">Pickup Truck</dd>\r\n<dt class=\"om75fw\" data-cg-ft=\"exteriorColor\">Exterior color:</dt>\r\n<dd class=\"BivK6Q\">Gray (Gun Metallic)</dd>\r\n</dl>\r\n</div>\r\n<div>\r\n<dl class=\"hP30qs\">\r\n<dt class=\"om75fw\" data-cg-ft=\"interiorColor\">Interior color:</dt>\r\n<dd class=\"BivK6Q\">Black</dd>\r\n<dt class=\"om75fw\" data-cg-ft=\"mileage\">Mileage:</dt>\r\n<dd class=\"BivK6Q\">64,101 mi</dd>\r\n<dt class=\"om75fw\" data-cg-ft=\"condition\">Condition:</dt>\r\n<dd class=\"BivK6Q\">Used</dd>\r\n<dt class=\"om75fw\" data-cg-ft=\"vin\">VIN:</dt>\r\n<dd class=\"BivK6Q\">1N6AA1ED8MN508838</dd>\r\n<dt class=\"om75fw\" data-cg-ft=\"stockNumber\">Stock number:</dt>\r\n<dd class=\"BivK6Q\">508838A</dd>\r\n</dl>\r\n</div>', 'Carrollton, TX (49 mi away)', '75145', '023312911307', 'sedyf@mailinator.com', '64,101', 'Karachi', 'new_electric', 'Four Wheeler', 'Automatic', 'Used', 'Gray (Gun Metallic)', 'Black', 'PickUp Truck', '410451', 'Good', 'Good', 'No issue Reported', 1, 1, 1, 1, '2023-06-08 09:43:39', '2023-10-10 20:42:33'),
(74, 3, 1, 78, 64, 2002, '2018 Dodge Challenger SXT Plus RWD', '2018-dodge-challenger-sxt-plus-rwd', '24950', '24950', '[\"24950\"]', '<p>If your credit is in the sub-prime category, you&rsquo;ll want to consider doing what you can to repair it. That means avoiding late payments whenever possible, paying off high-interest, revolving credit usually associated with credit cards, and avoiding any unnecessary loans. But sometimes life gets in the way, and with a poor credit score, your options are limited. \"Buy Here, Pay Here\" financing is one option that may be available to you, as long as you understand the risks. This kind of sub-prime, bad credit car loan is offered by independent used car dealers who specialize in vehicles that don&rsquo;t get sold on typical franchised auto dealer lots. The cars may be older and have some miles on them, and they often don&rsquo;t have more than a 30-day warranty, meaning that you&rsquo;ll have to consider doing something like a pre-purchase inspection at an independent mechanic before you purchase.</p>', 'Irving, TX (41 mi away)', '4534', '0324586055', 'Dodge18@gmail.com', '37670', '305 hp 3.6L V6', 'new_electric', 'Four Wheeler', 'Automatic', 'Used', 'White', 'Black', 'Coupe', '122401', 'Fair', 'No issues reported', 'No Accident', 1, 1, 1, 1, '2023-06-08 10:09:22', '2023-10-10 20:42:33'),
(75, 3, 1, 80, 65, 2009, 'Porsche 911', 'porsche-911', '124900', '124900', '[\"124900\"]', '<p>WP0AB2A90KS115311Auto financing has been around almost as long as the automobile itself because cars have always been expensive. Buying a used car, rather than buying a new car, is one way to ease some of the financial burdens. But even in the used market, financing a car with an auto loan is often a necessary step.</p>', 'Grapevine, TX (50 mi away)', '5285', '05558422041', 'Porsche911@gmail.com', '10,283', '3.0-liter flat-six', 'Petrol', 'Four Wheeler', 'Automatic', 'Used', 'GT Silver Metallic', 'Black/Bordeaux Red', 'Coupe', 'WP0AB2A90KS115311', 'Good', 'No issues reported.', 'No accidents or damage reported.', 1, 1, 1, 1, '2023-06-08 10:47:59', '2023-10-10 20:42:33'),
(76, 3, 1, 81, 66, 2013, '2016 Jeep Wrangler Unlimited Sport 4WD', '2016-jeep-wrangler-unlimited-sport-4wd', '25900', '25900', '[\"25900\"]', '<p>a285-horsepower, 3.6-liter V-6 engine. Six-speed manual transmission. Four-wheel drive. Solid front and rear axles. Underbody skid plates. Soft-top with sunroof feature. Removable side doors. Fold-down windshield.</p>', 'Dallas, TX (37 mi away)', '5465', '064594125841', 'Jeepwrangler@gmail.com', '73215', '285 hp 3.6L V6', 'Petrol', 'Four Wheeler', 'Automatic', 'Used', 'Gray (Granite Crystal Metallic Clearcoat)', 'Black', 'SUV/Crosover', '1C4BJWDG8GL244357', 'Good', 'No issues reported', 'No accidents or damage reported.', 2, 1, 1, 1, '2023-06-08 11:01:49', '2023-10-10 20:42:33'),
(78, 3, 1, 64, 68, 2011, 'MINI Cooper S 4-Door Hatchback FWD', 'mini-cooper-s-4-door-hatchback-fwd', '35860', '35860', '[\"35860\"]', '<p>Cooper Details database: All plastic modelling products, news and built models from Cooper Details (US).</p>', 'Dallas, TX (39 mi away)', '5898', '033590584', 'Cooper24@gmail.com', '12 mi', '189 hp 2L I4', 'Petrol', 'Four Wheeler', 'Automatic', 'New', 'Melting Silver III Metallic', 'Carbon Black', 'HatchBack', 'WMW53DK00R2U52160', 'High', 'No issues reported', 'No accidents or damage reported.', 0, 1, 1, 1, '2023-06-08 11:15:41', '2023-10-10 20:42:33'),
(79, 3, 1, 71, 69, 2010, 'Mercedes-Benz SL-Class SL 450 RWD', 'mercedes-benz-sl-class-sl-450-rwd', '61488', '61488', '[\"61488\"]', '<p>Make: Mercedes-Benz Model: SL-Class Year: 2019 Trim: SL 450 RWD Body type: Convertible Exterior color: Black Interior color: Black Mileage: 18,272 mi Condition: Used VIN: WDDJK6GA1KF054901 Stock number: 054901</p>', 'Garland, TX (41 mi away)', '5963', '03294204720', 'MClassSL@gmail.com', '18272 mi', '362 hp 3L V6', 'Petrol', 'Four Wheeler', 'Automatic', 'Used', 'Black', 'Black', 'Covertable', 'WDDJK6GA1KF054901', 'Good', 'No issues reported', 'No accidents or damage reported.', 1, 1, 1, 1, '2023-06-08 11:29:52', '2023-10-10 20:42:33'),
(80, 3, 1, 82, 70, 2007, 'Chrysler Pacifica Touring L FWD', 'chrysler-pacifica-touring-l-fwd', '19375', '19375', '[\"19375\"]', '<p>Mileage Mileage 93,184 Drivetrain Drivetrain Front-Wheel Drive Exterior color Exterior color Brilliant Black Crystal Pearlcoat Interior color Interior color Black/Alloy MPG MPG 23 MPG Engine Engine 287 hp 3.6L V6 Fuel type Fuel type Gasoline Transmission Transmission 9-Speed Automatic</p>', 'North Richland Hills, TX (49 mi away)', '9845', '033235996', 'Chrysler@gmail.com', '93184', '287 hp 3.6L V6', 'Petrol', 'Four Wheeler', 'Automatic', 'Used', 'Brilliant Black Crystal Pearlcoat', 'Black/Alloy', 'MiniVan', '2C4RC1BG6JR339240', 'Fair', 'No issues reported', 'No accidents or damage reported.', 2, 1, 1, 1, '2023-06-08 11:45:27', '2023-10-10 20:42:33'),
(82, 3, 1, 63, 38, 1996, 'Audi A4 2.0 TFSI quattro Premium Plus', 'audi-a4-20-tfsi-quattro-premium-plus', '20998', '20998', '[\"20998\"]', '<p>Make: Audi Model: A4 Year: 2018 Trim: 2.0 TFSI quattro Premium Plus AWD Body type: Sedan Exterior color: Florett Silver metallic Interior color: Black Mileage: 87,523 mi Condition: Used VIN: WAUENAF45JN006904 Stock number: JN006904P</p>', 'Dallas, TX (39 mi away)', '31341', '033645805', 'Audi4a@gmail.com', '87523 mi', '252 hp 2L I4', 'Petrol', 'Two Wheeler', 'Automatic', 'Used', 'Florett Silver metallic', 'Black', 'Sedan', '4040', 'Fair', 'No issues reported.', 'No accidents or damage reported.', 2, 1, 1, NULL, '2023-06-08 12:58:43', '2023-10-10 20:42:33'),
(83, 3, 1, 64, 40, 1997, 'BMW 6 Series 640i Coupe RWD', 'bmw-6-series-640i-coupe-rwd', '50000', '29990', '[\"29990\",\"50000\"]', '<p>Make: BMW Model: 6 Series Year: 2016 Trim: 640i Coupe RWD Body type: Coupe Exterior color: Black Interior color: Black Mileage: 63,325 mi Condition: Used VIN: WBA6H1C53GD932905 Stock number: 13219</p>', 'Carrollton, TX (49 mi away)', '3533', '0276932178', 'Bmw6@gmail.com', '63325', '315 hp 3L I6', 'Petrol', 'Four Wheeler', 'Automatic', 'Used', 'Black', 'Black', 'Coupe', '544432224', 'Good', 'No issues reported.', 'No accidents or damage reported.', 3, 1, 1, 1, '2023-06-08 13:11:03', '2023-10-10 20:42:33'),
(84, 6, 2, 71, 52, 2014, 'Mercedes-Benz 300-Class', 'mercedes-benz-300-class', '2900', '2900', '[\"2900\"]', '<p>Make: Mercedes-Benz Model: 300-Class Year: 1991 Body type: Sedan Exterior color: Red (Maroon) Interior color: Black Mileage: 111,000 mi Condition: Used VIN: No VIN provided Stock number: NE-23034073</p>', 'Bardwell, TX', '52919', '061924596', 'Mercedes@gmail.com', NULL, NULL, 'Petrol', 'Four Wheeler', 'Automatic', 'Used', 'Red (Maroon)', 'Black', 'Sedan', 'WDDJK6GA1KF054901', 'Good', 'No issues reported.', 'No accidents or damage reported.', 5, 1, 1, 0, '2023-06-08 13:37:25', '2023-06-27 09:25:15'),
(85, 3, 1, 74, 58, 2021, 'Tesla Model X 75D AWD', 'tesla-model-x-75d-awd', '48000', '52977', '[\"52977\",\"48000\"]', '<p>Make: Tesla Model: Model X Year: 2018 Trim: 75D AWD Body type: SUV / Crossover Exterior color: Silver Metallic Interior color: Black Mileage: 18,036 mi Condition: Used VIN: 5YJXCDE21JF100957 Stock number: P100957</p>', 'Carrollton, TX (48 mi away)', '9412', '0035294169', 'TeslaX@gmail.com', '18036', 'Battery range 237 mi', 'electric', 'Four Wheeler', 'Automatic', 'Used', 'Silver Metallic', 'Black', 'Sedan', '433221122244', 'Good', 'No issues reported', 'No accidents or damage reported.', 1, 1, 1, 1, '2023-06-08 13:47:29', '2023-10-10 20:42:33'),
(86, 3, 1, 72, 54, 2012, 'Rolls-Royce Cullinan AWD', 'rolls-royce-cullinan-awd', '359180', '359180', '[\"359180\"]', '<p>Make: Rolls-Royce Model: Cullinan Year: 2021 Trim: AWD Body type: SUV / Crossover Exterior color: Silver Interior color: Havana Mileage: 6,944 mi Certified: Manufacturer Certified Pre-Owned Condition: Certified Pre-Owned VIN: SLATV4C03MU206548 Stock number: ETMB8595R</p>', 'Dallas, TX (39 mi away)', '9881', '0379640122', 'Rollroyce@gmail.com', '6,944', '563 hp 6.8L V12', 'Gas', 'Four Wheeler', 'Automatic', 'Used', 'Silver', 'Havana', 'SUV / Crosover', '332112333333', 'Good', 'No issues reported.', 'No accidents or damage reported.', 1, 1, 1, 1, '2023-06-08 13:58:23', '2023-10-10 20:42:33'),
(90, 6, 2, 63, 39, NULL, 'Audi e-tron GT', 'audi-e-tron-gt-2', '15773427', '15773427', '[\"15773427\"]', '<p>ABS Air Bags Air Conditioning Alloy Rims Cassette Player Climate Control Cruise Control Front Camera Front Speakers Heated Seats Immobilizer Key Keyless Entry Navigation System Power Locks Power Mirrors Power Steering Power Windows Rear AC Vents Rear Camera Rear Speakers Steering Switches Sun Roof USB and Auxillary Cable</p>', 'Dallas, TX (37 mi away)', '05103', '002507607852', 'audi5911@gmail.com', NULL, '93.4 kWh', 'electric', 'Four Wheeler', 'Automatic', 'Used', 'Mythos Black Metallic', 'Black', 'Sedan', 'WDDJK6GA1KF054901', NULL, 'No issues reported', 'No accidents or damage reported.', 1, 1, 1, 0, '2023-07-03 10:25:44', '2023-07-03 10:25:44'),
(91, 6, 2, 71, 69, NULL, 'Mercedes Benz EQE', 'mercedes-benz-eqe', '102310', '102310', '[\"102310\"]', '<p>ABS AM/FM Radio Air Bags Air Conditioning Alloy Rims CD Player Climate Control CoolBox Cruise Control DVD Player Front Camera Front Speakers Heated Seats Immobilizer Key Keyless Entry Navigation System Power Locks Power Mirrors Power Steering Power Windows Rear AC Vents Rear Camera Rear Seat Entertainment Rear Speakers Steering Switches Sun Roof USB and Auxillary Cable</p>', 'North Richland Hills, TX (49 mi away)', '6192', '01546004975', 'mercedes98@gmail.com', '12 mi', '12.0 kWh', 'electric', 'Four Wheeler', 'Automatic', 'Used', 'Grey', 'white', 'Sedan', '2C3CDZAG8JH229254', NULL, 'No issues reported', 'No accidents or damage reported.', 2, 1, 1, 0, '2023-07-03 10:33:53', '2023-07-03 10:33:53'),
(92, 6, 2, 64, 41, NULL, 'BMW i4 eDrive40', 'bmw-i4-edrive40', '55400', '55400', '[\"55400\"]', '<p>ABS AM/FM Radio Air Bags Air Conditioning Alloy Rims Cruise Control Immobilizer Key Keyless Entry Power Locks Power Mirrors Power Steering Power Windows Sun Roof</p>', 'Grapevine, TX (50 mi away)', '119465', '0014256395', 'bmw989@gmail.com', '18272 mi', '92.0 kWh', 'electric', 'Four Wheeler', 'Automatic', 'Used', 'Mineral White', 'red/black', 'Sedan', '1C4BJWDG8GL244357', NULL, 'No issues reported', 'No accidents or damage reported.', 1, 1, 1, 0, '2023-07-03 10:40:40', '2023-07-03 10:40:40'),
(93, 6, 2, 77, 63, NULL, 'Nissan Note 1.2E', 'nissan-note-12e', '15650', '15650', '[\"15650\"]', '<p>Price is slightly negotiable. In Good condition. Engine in pristine condition. Well maintained. Excellent mileage. Comfortable seats. Neat &amp; clean interior/exterior. Looking to sell the car urgently. Excellent fuel average and smooth drive. Stapni and other tools are available. Original key available. No mechanical work required. No need to spend a single penny on car maintainence. Just buy and drive. Plz don\'t text. Feel free to call if you have any query. Mention PakWheels.com when calling Seller to get a good deal</p>', 'Grapevine, TX (50 mi away)', '0482', '0205699959', 'nissannote@gmail.com', '73215', '1198 cc', 'electric', 'Four Wheeler', 'Automatic', 'Used', 'Brown', 'Black', 'HatchBack', '1C4BJWDG8GL244357', NULL, 'No issues reported', 'No accidents or damage reported.', 3, 1, 1, 0, '2023-07-03 10:48:33', '2023-07-03 10:48:33'),
(94, 6, 2, 63, 39, NULL, 'Audi e-tron 50 Quattro', 'audi-e-tron-50-quattro', '119680', '119680', '[\"119680\"]', '<p>ABS AM/FM Radio Air Bags Air Conditioning Alloy Rims Cruise Control Immobilizer Key Keyless Entry Navigation System Power Locks Power Mirrors Power Steering Power Windows Sun Roof</p>', 'North Richland Hills, TX (49 mi away)', '0645', '0021523546', 'Audietron5@gmail.com', '12 mi60.0 kW=', '60.0 kWh', 'electric', 'Four Wheeler', 'Automatic', 'Used', 'White', 'Black', 'SUV/Crosover', 'WP0AB2A90KS115311', NULL, 'No issues reported.', 'No Accident', 2, 1, 1, 0, '2023-07-03 10:54:13', '2023-07-03 10:54:13'),
(95, 6, 2, 63, 39, NULL, 'Audi e-tron 50 Quattro', 'audi-e-tron-50-quattro-2', '119680', '119680', '[\"119680\"]', '<p>ABS AM/FM Radio Air Bags Air Conditioning Alloy Rims Cruise Control Immobilizer Key Keyless Entry Navigation System Power Locks Power Mirrors Power Steering Power Windows Sun Roof</p>', 'North Richland Hills, TX (49 mi away)', '0645', '0021523546', 'Audietron5@gmail.com', '12 mi60.0 kW=', '60.0 kWh', 'electric', 'Four Wheeler', 'Automatic', 'Used', 'White', 'Black', 'SUV/Crosover', 'WP0AB2A90KS115311', NULL, 'No issues reported.', 'No Accident', 2, 1, 1, 0, '2023-07-03 10:54:18', '2023-07-03 10:54:18'),
(96, 6, 2, 64, 40, NULL, 'BMW iX3 M Sport', 'bmw-ix3-m-sport', '104900', '104900', '[\"104900\"]', '<p>ABS Air Bags Air Conditioning Alloy Rims Climate Control Cruise Control Front Speakers Heated Seats Immobilizer Key Keyless Entry Navigation System Power Locks Power Mirrors Power Steering Power Windows Rear AC Vents Rear Camera Rear Speakers Steering Switches</p>', 'Dallas, TX (39 mi away)', '0325', '0146384252', 'BMWiX3MSport@gmail.com', '12 mi60.0 kW', '73.8 kWh', 'electric', 'Four Wheeler', 'Automatic', 'Used', 'Mineral White', 'Black', 'SUV/Crosover', 'WP0AB2A90KS115311', NULL, 'No issues reported', 'No accidents or damage reported.', 2, 1, 1, 0, '2023-07-03 11:03:34', '2023-07-03 11:03:34'),
(97, 3, 1, 74, 58, NULL, 'tesla electric', 'tesla-electric', '123456', '123456', '[\"123456\"]', '<p>Electric car&nbsp;</p>', 'texas', '750890', '12345678909', 'testing@it.com', '0', '4000', 'electric', 'Four Wheeler', 'Manual', 'New', 'black', 'black', 'Sedan', '1234', 'Great', 'asad', '0', 1, 1, 1, 1, '2023-07-04 21:22:28', '2023-10-10 20:42:33'),
(98, 22, 1, 70, 50, NULL, 'Ford Explorer', 'ford-explorer', '45000', '45000', '[\"45000\"]', '<p>big big big ford&nbsp; big dover</p>', 'california', '25000', '6655544433', 'mottoverocars@gmail.com', '50000', '5444', 'Gas', 'Four Wheeler', 'Automatic', 'Used', 'white', 'black', 'SUV/Crosover', '43322111112334', NULL, 'good', 'good', 1, 1, 1, 0, '2023-08-14 18:50:34', '2023-08-14 19:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(10, 'Rina Day', '+1 (917) 631-8411', 'palomudyf@mailinator.com', 'Deserunt et id do au', 'Cupidatat et digniss', '2023-05-27 08:02:19', '2023-05-27 08:02:19'),
(12, 'suffere', 'suffer@gmail.com', '222333444', 'hello', 'madddd', '2023-07-31 03:52:59', '2023-07-31 03:52:59'),
(13, 'fff', 'bongo@gmail.com', '445566', 'giig', 'giiggyyy', '2023-07-31 19:11:02', '2023-07-31 19:11:02'),
(14, 'sam', 'bongo@gmail.com', '333222121', 'lolo', 'ok okay', '2023-08-21 19:56:38', '2023-08-21 19:56:38'),
(15, 'Pamela Rosario', '+1 (204) 229-6688', 'nidirebyh@mailinator.com', 'Commodi rerum incidu', 'Voluptatibus rem dol', '2023-10-20 07:05:42', '2023-10-20 07:05:42'),
(16, 'Reagan Weaver', '+1 (183) 511-5502', 'jexyvivuro@mailinator.com', 'Repudiandae quis inc', 'Et omnis fugiat ess', '2023-10-20 07:05:51', '2023-10-20 07:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `contact_dealers`
--

CREATE TABLE `contact_dealers` (
  `id` int(10) UNSIGNED NOT NULL,
  `car_id` int(11) UNSIGNED NOT NULL,
  `dealer_id` int(11) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `about_car` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `comments` longtext DEFAULT NULL,
  `email_me` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_dealers`
--

INSERT INTO `contact_dealers` (`id`, `car_id`, `dealer_id`, `first_name`, `last_name`, `about_car`, `zip`, `email`, `phone`, `comments`, `email_me`, `created_at`, `updated_at`) VALUES
(11, 71, 3, 'Muzammil', 'Naveed', 'I\'d like to test drive this', '45021', 'muzamil@gmail.com', '03101010201', NULL, 1, '2023-06-14 07:54:49', '2023-06-14 07:54:49'),
(12, 67, 3, 'okkk', 'joo', 'I\'m interested in this', '011122', 'sss@gmail.com', '333222111', 'ok', 1, '2023-06-14 13:03:36', '2023-06-14 13:03:36'),
(13, 85, 6, 'ggg', 'hhhh', 'Will like to make payment via crypto currency and get 18% discount.', '765', 'tttggg@gmail.com', '777665556', 'hello', 1, '2023-06-17 18:43:40', '2023-06-17 18:43:40'),
(15, 71, 3, 'Muhammad', 'Raheel', 'I\'d like to know your best price for this', '75080', 'jamers786@gmail.com', '03473639710', 'test', 1, '2023-06-23 10:39:28', '2023-06-23 10:39:28'),
(16, 71, 3, 'Muhammad', 'Raheel', 'I\'d like to know your best price for this', '75080', 'jamers786@gmail.com', '03473639710', 'test', 1, '2023-06-23 10:39:38', '2023-06-23 10:39:38'),
(18, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:34', '2023-07-04 03:50:34'),
(19, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:35', '2023-07-04 03:50:35'),
(20, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:35', '2023-07-04 03:50:35'),
(21, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:39', '2023-07-04 03:50:39'),
(22, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:39', '2023-07-04 03:50:39'),
(23, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:39', '2023-07-04 03:50:39'),
(24, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:39', '2023-07-04 03:50:39'),
(25, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:40', '2023-07-04 03:50:40'),
(26, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:40', '2023-07-04 03:50:40'),
(27, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:46', '2023-07-04 03:50:46'),
(28, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:46', '2023-07-04 03:50:46'),
(29, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:46', '2023-07-04 03:50:46'),
(30, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:47', '2023-07-04 03:50:47'),
(31, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:47', '2023-07-04 03:50:47'),
(32, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:47', '2023-07-04 03:50:47'),
(33, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:47', '2023-07-04 03:50:47'),
(34, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:49', '2023-07-04 03:50:49'),
(35, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:49', '2023-07-04 03:50:49'),
(36, 64, 3, 'hhhhh', 'yyyy', 'I\'m interested in this', '45533', 'do@gmail.com', '6655554', NULL, 1, '2023-07-04 03:50:49', '2023-07-04 03:50:49'),
(37, 96, 6, 'gggrrr', 'hhh', 'Will like to make payment via crypto currency and get 18% discount.', '1234', 'huh@gmail.com', '2222222', NULL, 1, '2023-07-05 06:58:53', '2023-07-05 06:58:53'),
(38, 96, 6, 'gggrrr', 'hhh', 'Will like to make payment via crypto currency and get 18% discount.', '1234', 'huh@gmail.com', '2222222', NULL, 1, '2023-07-05 06:58:57', '2023-07-05 06:58:57'),
(39, 96, 6, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-07-05 06:58:57', '2023-07-05 06:58:57'),
(40, 66, 3, 'bob', 'bobby', 'Will like to make payment via crypto currency and get 18% discount.', '17765', 'bobff@gmail.com', '4333223444', 'you', 1, '2023-08-04 04:04:52', '2023-08-04 04:04:52'),
(41, 66, 3, 'bob', 'bobby', 'Will like to make payment via crypto currency and get 18% discount.', '17765', 'bobff@gmail.com', '4333223444', 'you', 1, '2023-08-04 04:04:56', '2023-08-04 04:04:56'),
(42, 66, 3, 'bob', 'bobby', 'Will like to make payment via crypto currency and get 18% discount.', '17765', 'bobff@gmail.com', '4333223444', 'you', 1, '2023-08-04 04:04:57', '2023-08-04 04:04:57'),
(44, 66, 3, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-08-04 04:04:57', '2023-08-04 04:04:57'),
(45, 66, 3, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-08-04 04:04:58', '2023-08-04 04:04:58'),
(46, 98, 22, 'ok', 'coup', 'I\'d like to know your best price for this', '20000', 'mottovers@gmail.com', '332211122', 'good', 1, '2023-08-14 18:58:58', '2023-08-14 18:58:58'),
(47, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:11', '2023-09-19 13:23:11'),
(48, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:11', '2023-09-19 13:23:11'),
(49, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:11', '2023-09-19 13:23:11'),
(50, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:11', '2023-09-19 13:23:11'),
(51, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:11', '2023-09-19 13:23:11'),
(52, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:11', '2023-09-19 13:23:11'),
(53, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:12', '2023-09-19 13:23:12'),
(54, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:12', '2023-09-19 13:23:12'),
(55, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:12', '2023-09-19 13:23:12'),
(56, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:12', '2023-09-19 13:23:12'),
(57, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:12', '2023-09-19 13:23:12'),
(58, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:12', '2023-09-19 13:23:12'),
(59, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:13', '2023-09-19 13:23:13'),
(60, 98, 22, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-19 13:23:13', '2023-09-19 13:23:13'),
(61, 97, 3, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-21 03:50:42', '2023-09-21 03:50:42'),
(62, 97, 3, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-21 03:50:45', '2023-09-21 03:50:45'),
(63, 97, 3, NULL, NULL, 'I\'d like to know your best price for this', NULL, NULL, NULL, NULL, 1, '2023-09-21 03:50:46', '2023-09-21 03:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealership_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `work_email` text NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `used_inventory` text NOT NULL,
  `website` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`id`, `dealership_name`, `first_name`, `last_name`, `work_email`, `phone_no`, `state`, `zip_code`, `used_inventory`, `website`, `created_at`, `updated_at`) VALUES
(1, 'Cailin Ingram', 'Emmanuel', 'Albert', 'xokowyd@mailinator.com', '+1 (945) 915-5013', 'Large', '50703', 'Medium', 'https://www.lid.tv', '2023-05-27 13:46:54', '2023-05-27 13:46:54'),
(2, 'Carson Lott', 'Upton', 'Joyce', 'jasibug@mailinator.com', '+1 (621) 733-2834', 'Large', '58287', 'Large', 'https://www.zyvit.us', '2023-05-27 13:54:36', '2023-05-27 13:54:36'),
(3, 'Dokba ltd', 'Donni', 'Doll', 'donni@gmail.com', '2341123344', 'Large', '45409', 'Large', 'mottovero.com', '2023-06-20 07:57:08', '2023-06-20 07:57:08'),
(4, 'Muhammad Raheel', 'Muhammad', 'Raheel', 'jamerss786@gmail.com', '03473639710', 'Large', '75080', 'Large', 'https://acusync.org/daniyal', '2023-06-20 13:48:16', '2023-06-20 13:48:16'),
(5, 'dddddd', 'ddddd', 'Raheelds', 'jamers786@gmail.com', '03473639710', 'Large', '75080', 'Large', 'https://acusync.org/daniyal', '2023-06-20 14:08:17', '2023-06-20 14:08:17'),
(6, 'dsfs', 'sfd', 'sfds', 'dfsdf@fghf.vg', 'sdfsd', 'Large', 'fsdf', 'Medium', 'sdfs', '2023-06-20 15:17:12', '2023-06-20 15:17:12'),
(7, 'foodlock', 'bis', 'mark', 'eli@gmail.com', '54433222', 'Large', '45409', 'Medium', 'follow.com', '2023-06-27 20:35:48', '2023-06-27 20:35:48'),
(8, 'ponka', 'ponka', 'ding', 'ding12@it.com', '1234567890', 'Small', '123456', 'Small', 'testing.com', '2023-07-24 20:27:05', '2023-07-24 20:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `dealer_details`
--

CREATE TABLE `dealer_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealership_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `used_inventory` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dealer_details`
--

INSERT INTO `dealer_details` (`id`, `dealership_name`, `first_name`, `last_name`, `state`, `zip_code`, `used_inventory`, `website`, `created_at`, `updated_at`) VALUES
(1, 'Testing testingasdf', 'Testingdf', 'testingsdf', 'Large', '1231231', 'Large', 'asdffasfas.com', '2023-07-24 22:32:25', '2023-07-24 22:32:25'),
(2, 'guyman', 'guy', 'guy', 'Large', '45533', 'Medium', 'guy.com', '2023-07-31 03:41:57', '2023-07-31 03:41:57'),
(3, 'guyman', 'rip', 'okay', 'Large', '45533', 'Large', 'guy.com', '2023-07-31 03:47:15', '2023-07-31 03:47:15'),
(4, 'bong', 'eliz', 'bong', 'Large', '20220', 'Large', 'bong.com', '2023-08-27 14:48:58', '2023-08-27 14:48:58'),
(5, 'Addison Mcgowan', 'Kimberley', 'Woods', 'Large', '36658', 'Small', 'https://www.fylaqiqymogo.ca', '2023-10-20 07:06:03', '2023-10-20 07:06:03'),
(6, 'Brittany Matthews', 'Fitzgerald', 'Camacho', 'Large', '72042', 'Large', 'https://www.dywe.net', '2023-10-20 07:06:11', '2023-10-20 07:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pages`
--

CREATE TABLE `detail_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `car_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_pages`
--

INSERT INTO `detail_pages` (`id`, `car_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 64, 3, '2023-06-16 11:18:22', '2023-06-16 11:18:22'),
(2, 78, 3, '2023-06-16 12:21:38', '2023-06-16 12:21:38'),
(3, 84, 3, '2023-06-16 12:22:08', '2023-06-16 12:22:08'),
(4, 67, 3, '2023-06-16 12:23:23', '2023-06-16 12:23:23'),
(5, 85, 3, '2023-06-16 12:51:23', '2023-06-16 12:51:23'),
(6, 73, 3, '2023-06-16 12:52:03', '2023-06-16 12:52:03'),
(7, 75, 3, '2023-06-16 13:10:24', '2023-06-16 13:10:24'),
(8, 70, 3, '2023-06-16 13:12:31', '2023-06-16 13:12:31'),
(9, 76, 3, '2023-06-16 13:37:11', '2023-06-16 13:37:11'),
(10, 86, 3, '2023-06-16 13:54:11', '2023-06-16 13:54:11'),
(11, 83, 3, '2023-06-16 14:01:50', '2023-06-16 14:01:50'),
(12, 85, 6, '2023-06-17 18:42:50', '2023-06-17 18:42:50'),
(13, 82, 3, '2023-06-19 07:07:45', '2023-06-19 07:07:45'),
(14, 79, 3, '2023-06-19 07:10:11', '2023-06-19 07:10:11'),
(15, 72, 3, '2023-06-19 07:14:51', '2023-06-19 07:14:51'),
(16, 74, 3, '2023-06-19 07:19:33', '2023-06-19 07:19:33'),
(17, 71, 3, '2023-06-20 07:54:46', '2023-06-20 07:54:46'),
(18, 68, 3, '2023-06-20 08:00:57', '2023-06-20 08:00:57'),
(19, 80, 3, '2023-06-20 08:03:03', '2023-06-20 08:03:03'),
(20, 71, 20, '2023-06-20 14:40:39', '2023-06-20 14:40:39'),
(21, 66, 3, '2023-06-23 07:19:51', '2023-06-23 07:19:51'),
(22, 71, 11, '2023-06-27 11:09:31', '2023-06-27 11:09:31'),
(23, 64, 11, '2023-06-27 11:13:11', '2023-06-27 11:13:11'),
(24, 67, 11, '2023-06-27 11:34:18', '2023-06-27 11:34:18'),
(25, 74, 11, '2023-06-27 11:34:25', '2023-06-27 11:34:25'),
(26, 94, 3, '2023-07-04 03:49:17', '2023-07-04 03:49:17'),
(27, 95, 3, '2023-07-04 22:54:13', '2023-07-04 22:54:13'),
(28, 97, 3, '2023-07-05 00:05:24', '2023-07-05 00:05:24'),
(29, 91, 3, '2023-07-05 00:12:08', '2023-07-05 00:12:08'),
(30, 96, 6, '2023-07-05 06:58:00', '2023-07-05 06:58:00'),
(31, 94, 6, '2023-07-05 07:01:41', '2023-07-05 07:01:41'),
(32, 66, 21, '2023-07-05 08:47:49', '2023-07-05 08:47:49'),
(33, 92, 21, '2023-07-05 08:48:39', '2023-07-05 08:48:39'),
(34, 83, 21, '2023-07-05 08:50:05', '2023-07-05 08:50:05'),
(35, 67, 12, '2023-07-06 13:00:07', '2023-07-06 13:00:07'),
(36, 73, 12, '2023-07-06 13:02:27', '2023-07-06 13:02:27'),
(37, 85, 17, '2023-07-06 21:24:33', '2023-07-06 21:24:33'),
(38, 85, 12, '2023-07-06 21:33:50', '2023-07-06 21:33:50'),
(39, 72, 12, '2023-07-06 21:35:04', '2023-07-06 21:35:04'),
(40, 76, 12, '2023-07-06 21:35:10', '2023-07-06 21:35:10'),
(41, 74, 12, '2023-07-07 02:40:30', '2023-07-07 02:40:30'),
(42, 80, 12, '2023-07-07 02:41:21', '2023-07-07 02:41:21'),
(43, 72, 6, '2023-07-07 15:09:37', '2023-07-07 15:09:37'),
(44, 97, 6, '2023-07-08 16:48:24', '2023-07-08 16:48:24'),
(45, 96, 3, '2023-07-09 16:10:26', '2023-07-09 16:10:26'),
(46, 73, 22, '2023-07-11 03:05:02', '2023-07-11 03:05:02'),
(47, 83, 12, '2023-07-13 06:28:37', '2023-07-13 06:28:37'),
(48, 72, 11, '2023-07-13 06:36:35', '2023-07-13 06:36:35'),
(49, 68, 12, '2023-07-13 06:39:06', '2023-07-13 06:39:06'),
(50, 66, 12, '2023-07-17 17:01:19', '2023-07-17 17:01:19'),
(51, 92, 12, '2023-07-20 06:48:24', '2023-07-20 06:48:24'),
(52, 94, 12, '2023-07-20 17:30:22', '2023-07-20 17:30:22'),
(53, 72, 23, '2023-07-21 12:22:07', '2023-07-21 12:22:07'),
(54, 85, 23, '2023-07-21 12:23:24', '2023-07-21 12:23:24'),
(55, 82, 23, '2023-07-21 12:28:05', '2023-07-21 12:28:05'),
(56, 83, 23, '2023-07-21 12:56:59', '2023-07-21 12:56:59'),
(57, 97, 23, '2023-07-21 12:57:17', '2023-07-21 12:57:17'),
(58, 64, 6, '2023-07-22 00:21:20', '2023-07-22 00:21:20'),
(59, 92, 3, '2023-07-24 11:11:42', '2023-07-24 11:11:42'),
(60, 66, 6, '2023-07-24 19:23:03', '2023-07-24 19:23:03'),
(61, 72, 24, '2023-07-24 19:46:06', '2023-07-24 19:46:06'),
(62, 76, 24, '2023-07-24 19:46:31', '2023-07-24 19:46:31'),
(63, 97, 24, '2023-08-01 20:35:17', '2023-08-01 20:35:17'),
(64, 64, 12, '2023-08-04 05:51:05', '2023-08-04 05:51:05'),
(65, 97, 12, '2023-08-11 16:35:33', '2023-08-11 16:35:33'),
(66, 91, 12, '2023-08-11 16:35:47', '2023-08-11 16:35:47'),
(67, 93, 3, '2023-08-12 00:24:25', '2023-08-12 00:24:25'),
(68, 98, 22, '2023-08-14 18:51:47', '2023-08-14 18:51:47'),
(69, 76, 22, '2023-08-14 18:56:12', '2023-08-14 18:56:12'),
(70, 75, 22, '2023-08-19 05:03:05', '2023-08-19 05:03:05'),
(71, 64, 22, '2023-08-19 05:11:27', '2023-08-19 05:11:27'),
(72, 98, 12, '2023-08-20 04:27:35', '2023-08-20 04:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `register_url` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `register_url`, `description`, `start_datetime`, `end_datetime`, `created_by`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'testing events', NULL, '<p>asafq3</p>', '2023-07-29 22:56:00', '2023-07-31 22:56:00', 3, 1, '2023-07-29 17:56:54', '2023-07-29 17:56:54', NULL),
(2, 'asdfasfas', NULL, '<p>sdfasfasfasfasf</p>', '2023-08-02 22:58:00', '2023-08-26 22:58:00', 3, 1, '2023-07-29 17:58:47', '2023-07-29 17:58:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expert_reviews`
--

CREATE TABLE `expert_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `reviews_video` varchar(255) DEFAULT NULL,
  `start_price` varchar(255) DEFAULT NULL,
  `end_price` varchar(255) DEFAULT NULL,
  `pros` longtext DEFAULT NULL,
  `cons` longtext DEFAULT NULL,
  `look_feel` varchar(255) DEFAULT NULL,
  `technology` varchar(255) DEFAULT NULL,
  `safety` varchar(255) DEFAULT NULL,
  `form_function` varchar(255) DEFAULT NULL,
  `cost` varchar(255) DEFAULT NULL,
  `expert_description` longtext DEFAULT NULL,
  `look_and_feel_detail` longtext DEFAULT NULL,
  `performance` longtext DEFAULT NULL,
  `form_and_function_detail` longtext DEFAULT NULL,
  `technology_detail` longtext DEFAULT NULL,
  `safety_detail` longtext DEFAULT NULL,
  `cost_effectiveness` longtext DEFAULT NULL,
  `price_range_start` varchar(255) DEFAULT NULL,
  `price_range_end` varchar(255) DEFAULT NULL,
  `avg_price_range_start` varchar(255) DEFAULT NULL,
  `avg_price_range_end` varchar(255) DEFAULT NULL,
  `yoy_price_start` varchar(255) DEFAULT NULL,
  `yoy_price_end` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `written_by` varchar(255) DEFAULT NULL,
  `admin_status` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expert_reviews`
--

INSERT INTO `expert_reviews` (`id`, `title`, `short_description`, `long_description`, `reviews_video`, `start_price`, `end_price`, `pros`, `cons`, `look_feel`, `technology`, `safety`, `form_function`, `cost`, `expert_description`, `look_and_feel_detail`, `performance`, `form_and_function_detail`, `technology_detail`, `safety_detail`, `cost_effectiveness`, `price_range_start`, `price_range_end`, `avg_price_range_start`, `avg_price_range_end`, `yoy_price_start`, `yoy_price_end`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `type`, `category`, `written_by`, `admin_status`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'meta', '<p>mettaaa miss dimpo</p>', '<p>ok ok ok fff</p>', NULL, '300', '3000', '<p>good</p>', '<p>badd</p>', '4', '6', '8', '9', '10', '<p>good good boy</p>', '<p>okay</p>', '7', '<p>form</p>', NULL, '<p>fine g</p>', '<p>eefgffgddszdd</p>', '522', '5677', '6655', '446', '886', '5454', NULL, NULL, NULL, 1, 'new', 'research', NULL, 1, 3, NULL, '2023-08-28 21:48:27', '2023-08-28 21:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `category` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `slug`, `description`, `location`, `category`, `created_at`, `updated_at`) VALUES
(38, 'Financial Systems Administrator', 'financial-systems-administrator', '<div class=\"content-intro\">\r\n<p><strong>Who we are<br /></strong><span class=\"normaltextrun\">At CarGurus (NASDAQ: CARG), our mission is to give people the power to reach their destination. We started as a small team of developers determined to bring trust and transparency to car shopping. Since then, our history of innovation and go-to-market acceleration has driven industry-leading growth. In fact, we&rsquo;re the largest and fastest-growing automotive marketplace, and we&rsquo;ve been profitable for over 15 years.</span></p>\r\n<p><strong>What we do</strong><br />The market is evolving, and we are too, moving the entire automotive journey online and guiding our customers through every step. That includes everything from the sale of an old car to the financing, purchase, and delivery of a new one. Today, tens of millions of consumers visit CarGurus.com each month, and ~30,000 dealerships use our products. But they\'re not the only ones who love CarGurus&mdash;our employees do, too. We have a people-first culture that fosters&nbsp;kindness, collaboration, and innovation, and empowers our Gurus with tools to fuel their career growth. Disrupting a trillion-dollar industry requires fresh and diverse perspectives. Come join us for the ride!</p>\r\n</div>\r\n<h2>&nbsp;</h2>\r\n<h2><strong>Role Overview</strong></h2>\r\n<p>As a&nbsp;<strong>Senior Accountant</strong>&nbsp;at CarGurus, you will support a wide range of accounting functions including the monthly close, SEC and financial reporting, SOX, the external audit, and process improvements. You will have the opportunity to demonstrate strong analytical and interpretation skills and to apply accounting principles. Communication and cross-departmental partnership are important in this position as you will work collaboratively with other functional groups (i.e.: Financial Planning &amp; Analysis, Accounts Receivable, Accounts Payable, Collections).</p>\r\n<h2><strong>Responsibilities:</strong></h2>\r\n<ul>\r\n<li>Supporting key areas of the monthly financial close to ensure timely and accurate reporting on general ledger and financial results.</li>\r\n<li>Review subsidiary financials for completeness and accuracy, and ensure appropriate consolidation into consolidated financial statements.</li>\r\n<li>Maintain and update technical accounting positions memos and detail new positions memos.</li>\r\n<li>Assist in the preparation of quarterly and annual financial statements in accordance with US GAAP and SEC requirements.</li>\r\n<li>Assist with compliance with Sarbanes Oxley controls, process improvement activities, and with the successful completion of the year-end audit and quarterly reviews.</li>\r\n</ul>\r\n<h2><strong>Qualifications:</strong></h2>\r\n<ul>\r\n<li>Bachelor&rsquo;s degree in Accounting or Finance required.</li>\r\n<li>3+ years accounting experience; CPA required.</li>\r\n<li>Effective communication and partnership skills are important. This position should be comfortable interacting with colleagues in a professional and helpful manner.</li>\r\n<li>Motivated teammate with a can-do mindset and the ability to work in a fast-paced, forward-moving environment.</li>\r\n<li>Ability to learn and understand financial accounting systems/software: NetSuite and/or Concur experience is a plus.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<div class=\"content-conclusion\">\r\n<p><strong>Working at CarGurus</strong><br />We reward our Gurus&rsquo; curiosity and passion with best-in-class benefits and compensation, including equity for all employees, both when they start and as they continue to grow with us. Our career development and corporate giving programs, as well as our employee resource groups (ERGs) and communities, help people build connections while making an impact in personally meaningful ways. A flexible hybrid model and robust time off policies encourage work-life balance and individual well-being. Thoughtful perks like daily free lunch, a new car discount, meditation and fitness apps, commuting cost coverage, and more help our people create space for what matters most in their personal and professional lives.</p>\r\n<p><strong>We welcome all</strong><br />CarGurus strives to be a place to which people can bring the ultimate expression of themselves and their potential&mdash;starting with our hiring process. We do not discriminate based on race, color, religion, national origin, age, sex, marital status, ancestry, physical or mental disability, veteran status, gender identity, or sexual orientation. We foster an inclusive environment that values people for their skills, experiences, and unique perspectives. That&rsquo;s why we hope you&rsquo;ll apply even if you don&rsquo;t check every box listed in the job description. We want to know what only&nbsp;<em>you&nbsp;</em>can bring to CarGurus.</p>\r\n</div>', '52', 'engineering', '2023-06-07 11:45:29', '2023-06-09 11:49:09'),
(39, 'Office Coordinator', 'office-coordinator', '<div class=\"content-intro\">\r\n<p><strong>Who we are<br /></strong><span class=\"normaltextrun\">At CarGurus (NASDAQ: CARG), our mission is to give people the power to reach their destination. We started as a small team of developers determined to bring trust and transparency to car shopping. Since then, our history of innovation and go-to-market acceleration has driven industry-leading growth. In fact, we&rsquo;re the largest and fastest-growing automotive marketplace, and we&rsquo;ve been profitable for over 15 years.</span></p>\r\n<p><strong>What we do</strong><br />The market is evolving, and we are too, moving the entire automotive journey online and guiding our customers through every step. That includes everything from the sale of an old car to the financing, purchase, and delivery of a new one. Today, tens of millions of consumers visit CarGurus.com each month, and ~30,000 dealerships use our products. But they\'re not the only ones who love CarGurus&mdash;our employees do, too. We have a people-first culture that fosters&nbsp;kindness, collaboration, and innovation, and empowers our Gurus with tools to fuel their career growth. Disrupting a trillion-dollar industry requires fresh and diverse perspectives. Come join us for the ride!</p>\r\n</div>\r\n<p><strong>Role Overview</strong></p>\r\n<p>As a core member of the Facilities, Real Estate and Operations team (FREO), the&nbsp;<strong>Office Coordinator</strong>&nbsp;will strive to deliver an outstanding workplace experience to all Gurus and guests. As one of the faces of CarGurus, you will be one of the first points of contact for people on site. Additionally, you will provide excellent event support.</p>\r\n<p><strong>What you\'ll do</strong></p>\r\n<ul>\r\n<li>Be an ambassador of company culture and values</li>\r\n<li>Be approachable, reliable, and energetic</li>\r\n<li>Field inquiries from employees while working on-site at our Cambridge offices</li>\r\n<li>Maintain the overall appearance, organization, and cleanliness of the workplace</li>\r\n<li>Performing daily walkthroughs to ensure workstations, conference rooms and public spaces are clean and presentable</li>\r\n<li>Own our in-office pantry program including inventory tracking and stocking</li>\r\n<li>Assist in facilitating daily in-office lunch and beverage programs</li>\r\n<li>Assist in leading the day-to-day operations of our Cambridge offices</li>\r\n<li>Assist in addressing building-related needs and requirements</li>\r\n<li>Implement and suggest updates to office policies, procedures, and safety standards (i.e. emergency evacuation plan, visitor registration, security, etc.)</li>\r\n<li>Oversee office vendors to ensure the scope of work is being maintained and completed</li>\r\n<li>Partner with the People Operations team to facilitate employee events, company meetings, lunches, customer meet-ups, etc.</li>\r\n<li>Maintain inventory and supply management of office supplies, cleaning supplies, bathroom supplies, PPE, etc.</li>\r\n<li>Assist with inter-office moves</li>\r\n</ul>\r\n<p><strong>What you\'ll bring</strong></p>\r\n<ul>\r\n<li>2+ years of office, facilities, or related experience</li>\r\n<li>Willingness and ability to work in-person at our Cambridge offices 5 days a week</li>\r\n<li>The ability to prioritize workload, follow through, and complete tasks in a timely manner</li>\r\n<li>Strong organization and planning skills</li>\r\n<li>Comfort owning projects and suggesting resolutions to challenges; you take initiative and work well independently, as well as with others</li>\r\n<li>A customer-first mentality, outgoing and personable demeanor, and polished approach to interactions with internal and external customers</li>\r\n<li>The ability to work in a fast-paced environment with evolving needs and requirements</li>\r\n<li>Strong attention to detail, the ability to learn quickly and understand the big picture</li>\r\n<li>Capacity to take on special projects as needed/assigned</li>\r\n<li>Prior customer service, admin, or event management experience is a plus</li>\r\n<li>The ability to lift up to 50 lbs</li>\r\n</ul>\r\n<div class=\"content-conclusion\">\r\n<p><strong>Working at CarGurus</strong><br />We reward our Gurus&rsquo; curiosity and passion with best-in-class benefits and compensation, including equity for all employees, both when they start and as they continue to grow with us. Our career development and corporate giving programs, as well as our employee resource groups (ERGs) and communities, help people build connections while making an impact in personally meaningful ways. A flexible hybrid model and robust time off policies encourage work-life balance and individual well-being. Thoughtful perks like daily free lunch, a new car discount, meditation and fitness apps, commuting cost coverage, and more help our people create space for what matters most in their personal and professional lives.</p>\r\n<p><strong>We welcome all</strong><br />CarGurus strives to be a place to which people can bring the ultimate expression of themselves and their potential&mdash;starting with our hiring process. We do not discriminate based on race, color, religion, national origin, age, sex, marital status, ancestry, physical or mental disability, veteran status, gender identity, or sexual orientation. We foster an inclusive environment that values people for their skills, experiences, and unique perspectives. That&rsquo;s why we hope you&rsquo;ll apply even if you don&rsquo;t check every box listed in the job description. We want to know what only&nbsp;<em>you&nbsp;</em>can bring to CarGurus.<span data-lucid-type=\"application/vnd.lucid.text\" data-lucid-content=\"{&quot;t&quot;:&quot;Working at CarGurus \\nWe reward our Gurus&rsquo; curiosity and passion with best-in-class benefits and compensation, including equity for all employees, both when they start and as they continue to grow with us. Our career development and corporate giving programs, as well as our employee resource groups (ERGs) and communities, help people build connections while making an impact in personally meaningful ways. A flexible hybrid model and robust time off policies encourage work-life balance and individual well-being. Thoughtful perks like daily free lunch, a new car discount, meditation and fitness apps, commuting cost coverage, and more help our people create space for what matters most in their personal and professional lives.&quot;,&quot;m&quot;:[{&quot;s&quot;:0,&quot;n&quot;:&quot;a&quot;,&quot;v&quot;:&quot;left&quot;},{&quot;s&quot;:0,&quot;n&quot;:&quot;p&quot;,&quot;v&quot;:1.1036906734302876},{&quot;s&quot;:0,&quot;n&quot;:&quot;b&quot;,&quot;v&quot;:true,&quot;e&quot;:19},{&quot;s&quot;:0,&quot;n&quot;:&quot;c&quot;,&quot;v&quot;:&quot;#000000ff&quot;,&quot;e&quot;:21},{&quot;s&quot;:0,&quot;n&quot;:&quot;s&quot;,&quot;v&quot;:19.999999999999996,&quot;e&quot;:21},{&quot;s&quot;:19,&quot;n&quot;:&quot;p&quot;,&quot;v&quot;:1.1036906734302876},{&quot;s&quot;:21,&quot;n&quot;:&quot;a&quot;,&quot;v&quot;:&quot;left&quot;},{&quot;s&quot;:21,&quot;n&quot;:&quot;p&quot;,&quot;v&quot;:1.1036906734302876},{&quot;s&quot;:21,&quot;n&quot;:&quot;c&quot;,&quot;v&quot;:&quot;#1d1c1dff&quot;,&quot;e&quot;:730},{&quot;s&quot;:21,&quot;n&quot;:&quot;s&quot;,&quot;v&quot;:20,&quot;e&quot;:730}]}\">#</span></p>\r\n</div>', '54', 'finance-legal-executive', '2023-06-07 12:04:31', '2023-06-09 11:47:10'),
(40, 'Senior Accountant', 'senior-accountant', '<div class=\"content-intro\">\r\n<p><strong>Who we are<br /></strong><span class=\"normaltextrun\">At CarGurus (NASDAQ: CARG), our mission is to give people the power to reach their destination. We started as a small team of developers determined to bring trust and transparency to car shopping. Since then, our history of innovation and go-to-market acceleration has driven industry-leading growth. In fact, we&rsquo;re the largest and fastest-growing automotive marketplace, and we&rsquo;ve been profitable for over 15 years.</span></p>\r\n<p><strong>What we do</strong><br />The market is evolving, and we are too, moving the entire automotive journey online and guiding our customers through every step. That includes everything from the sale of an old car to the financing, purchase, and delivery of a new one. Today, tens of millions of consumers visit CarGurus.com each month, and ~30,000 dealerships use our products. But they\'re not the only ones who love CarGurus&mdash;our employees do, too. We have a people-first culture that fosters&nbsp;kindness, collaboration, and innovation, and empowers our Gurus with tools to fuel their career growth. Disrupting a trillion-dollar industry requires fresh and diverse perspectives. Come join us for the ride!</p>\r\n</div>\r\n<p><strong>Role overview</strong></p>\r\n<p>The&nbsp;<strong>Financial Systems Administrator</strong>&nbsp;will play a critical role in maintaining and improving the functionality of the various financial systems. They will work closely with Accounting and Finance teams to ensure the highest level of data accuracy.</p>\r\n<p><strong>What you\'ll do</strong></p>\r\n<ul>\r\n<li>Perform general Administrative duties for multiple SaaS Financial Systems including access management</li>\r\n<li>Design, develop and maintain custom searches, reports and objects</li>\r\n<li>Development of new and support of existing custom scripts, workflow, and custom objects</li>\r\n<li>Develop and evaluate novel features native to existing platforms</li>\r\n<li data-stringify-indent=\"0\" data-stringify-border=\"0\">Exercise professional understanding of cloud architecture and DevOps</li>\r\n<li data-stringify-indent=\"0\" data-stringify-border=\"0\">Collaborate with both internal/external technical experts to drive system solutions</li>\r\n<li data-stringify-indent=\"0\" data-stringify-border=\"0\">Mentor and Empower team members to provide outstanding support and continuously improves the processes for the full SDLC</li>\r\n<li data-stringify-indent=\"0\" data-stringify-border=\"0\">Monitors and reports on progress in completing projects and accomplishing goals.</li>\r\n</ul>\r\n<p><strong>What you\'ll bring</strong></p>\r\n<ul>\r\n<li>1+ year of experience in Financial SaaS Systems</li>\r\n<li>Familiarity with subscription business and ecommerce processes</li>\r\n<li data-stringify-indent=\"0\" data-stringify-border=\"0\">Understanding of basic business accounting concepts such as AR and AP, as well the mechanics of business invoicing, payments and collections</li>\r\n<li data-stringify-indent=\"0\" data-stringify-border=\"0\">Working understanding of revenue accounting/ASC606 a plus</li>\r\n<li data-stringify-indent=\"0\" data-stringify-border=\"0\">Payment platform experience, including check, credit card, EFT as well as banking portal experience</li>\r\n<li>Experience with business requirements, technical analysis and design, coding, testing, and implementation of customizations within software environment (Primarily focus is Procure-to-Pay, Order-To-Cash and Corporate Accounting)</li>\r\n<li>SOX compliance experience a plus</li>\r\n</ul>\r\n<div class=\"content-conclusion\">\r\n<p><strong>Working at CarGurus</strong><br />We reward our Gurus&rsquo; curiosity and passion with best-in-class benefits and compensation, including equity for all employees, both when they start and as they continue to grow with us. Our career development and corporate giving programs, as well as our employee resource groups (ERGs) and communities, help people build connections while making an impact in personally meaningful ways. A flexible hybrid model and robust time off policies encourage work-life balance and individual well-being. Thoughtful perks like daily free lunch, a new car discount, meditation and fitness apps, commuting cost coverage, and more help our people create space for what matters most in their personal and professional lives.</p>\r\n<p><strong>We welcome all</strong><br />CarGurus strives to be a place to which people can bring the ultimate expression of themselves and their potential&mdash;starting with our hiring process. We do not discriminate based on race, color, religion, national origin, age, sex, marital status, ancestry, physical or mental disability, veteran status, gender identity, or sexual orientation. We foster an inclusive environment that values people for their skills, experiences, and unique perspectives. That&rsquo;s why we hope you&rsquo;ll apply even if you don&rsquo;t check every box listed in the job description. We want to know what only&nbsp;<em>you&nbsp;</em>can bring to CarGurus.</p>\r\n</div>', '53', 'people-talent', '2023-06-07 12:06:00', '2023-06-09 11:44:01'),
(42, 'Business Development Representative', 'business-development-representative', '<div class=\"content-intro\">\r\n<p><strong>Who we are<br /></strong><span class=\"normaltextrun\">At CarGurus (NASDAQ: CARG), our mission is to give people the power to reach their destination. We started as a small team of developers determined to bring trust and transparency to car shopping. Since then, our history of innovation and go-to-market acceleration has driven industry-leading growth. In fact, we&rsquo;re the largest and fastest-growing automotive marketplace, and we&rsquo;ve been profitable for over 15 years.</span></p>\r\n<p><strong>What we do</strong><br />The market is evolving, and we are too, moving the entire automotive journey online and guiding our customers through every step. That includes everything from the sale of an old car to the financing, purchase, and delivery of a new one. Today, tens of millions of consumers visit CarGurus.com each month, and ~30,000 dealerships use our products. But they\'re not the only ones who love CarGurus&mdash;our employees do, too. We have a people-first culture that fosters&nbsp;kindness, collaboration, and innovation, and empowers our Gurus with tools to fuel their career growth. Disrupting a trillion-dollar industry requires fresh and diverse perspectives. Come join us for the ride!</p>\r\n</div>\r\n<h2>&nbsp;</h2>\r\n<h2><strong>Role Overview</strong></h2>\r\n<p>The Senior Manager of Accounting will be based at CarOffer\'s office in Dallas, TX and will be a critical member of the CarGurus accounting team. This position will bring public company expertise and guidance to the close process and will have significant interaction with members of the CarOffer and CarGurus accounting and finance teams. The candidate we are seeking needs to demonstrate a strong ability to interpret and apply accounting principles, and also be able to clearly communicate complex technical accounting matters to both finance and non-finance partners.</p>\r\n<h2><strong>What You&rsquo;ll Do</strong></h2>\r\n<ul>\r\n<li>Prepare and review as appropriate technical accounting estimates, including but not limited to sales allowance, inventory reserves, and allowance for doubtful accounts.</li>\r\n<li>Account for website development costs including evaluating projects for capitalization and monitoring for impairment.</li>\r\n<li>Document monthly and quarterly SOX controls in accordance with public company standards.</li>\r\n<li>Maintain and update technical accounting positions memos and document new positions memos.</li>\r\n<li>Provide insight into the business by highlighting the effects of proper accounting on transactional results.</li>\r\n<li>Partner with CarOffer to help identify areas of improvement and enhance accounting processes to drive efficiencies.</li>\r\n<li>Partner cross-functionally with various teams including FP&amp;A, Legal, Investor Relations, SEC reporting, and SOX.</li>\r\n<li>Be a liaison between CarOffer and CarGurus by bringing up matters that impact operations and reporting.</li>\r\n<li>Support quarterly reviews and the year-end audit with external auditors.</li>\r\n<li>Assist with CarOffer-specific 10-Q/10-K disclosures.</li>\r\n<li>Provide accounting support for special ad-hoc projects.</li>\r\n</ul>\r\n<h2><strong>Who You Are</strong></h2>\r\n<ul>\r\n<li>Bachelor\'s degree in Accounting or Finance;&nbsp;<strong>CPA required</strong>.</li>\r\n<li>8<strong>+</strong>&nbsp;years of combined public company industry and Big Four accounting firm experience.</li>\r\n<li>Experience in the automotive industry is strongly preferred.</li>\r\n<li>Proficiency with Excel.</li>\r\n<li>Strong communicator and comfortable interacting with colleagues in a professional and helpful manner.</li>\r\n<li>Motivated standout colleague with the ability to work in a fast-paced, forward-moving environment</li>\r\n<li>Ability to learn and understand financial accounting systems/software: NetSuite software experience is a plus.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<div class=\"content-conclusion\">\r\n<p><strong>Working at CarGurus</strong><br />We reward our Gurus&rsquo; curiosity and passion with best-in-class benefits and compensation, including equity for all employees, both when they start and as they continue to grow with us. Our career development and corporate giving programs, as well as our employee resource groups (ERGs) and communities, help people build connections while making an impact in personally meaningful ways. A flexible hybrid model and robust time off policies encourage work-life balance and individual well-being. Thoughtful perks like daily free lunch, a new car discount, meditation and fitness apps, commuting cost coverage, and more help our people create space for what matters most in their personal and professional lives.</p>\r\n<p><strong>We welcome all</strong><br />CarGurus strives to be a place to which people can bring the ultimate expression of themselves and their potential&mdash;starting with our hiring process. We do not discriminate based on race, color, religion, national origin, age, sex, marital status, ancestry, physical or mental disability, veteran status, gender identity, or sexual orientation. We foster an inclusive environment that values people for their skills, experiences, and unique perspectives. That&rsquo;s why we hope you&rsquo;ll apply even if you don&rsquo;t check every box listed in the job description. We want to know what only&nbsp;<em>you&nbsp;</em>can bring to CarGurus.<span data-lucid-type=\"application/vnd.lucid.text\" data-lucid-content=\"{&quot;t&quot;:&quot;Working at CarGurus \\nWe reward our Gurus&rsquo; curiosity and passion with best-in-class benefits and compensation, including equity for all employees, both when they start and as they continue to grow with us. Our career development and corporate giving programs, as well as our employee resource groups (ERGs) and communities, help people build connections while making an impact in personally meaningful ways. A flexible hybrid model and robust time off policies encourage work-life balance and individual well-being. Thoughtful perks like daily free lunch, a new car discount, meditation and fitness apps, commuting cost coverage, and more help our people create space for what matters most in their personal and professional lives.&quot;,&quot;m&quot;:[{&quot;s&quot;:0,&quot;n&quot;:&quot;a&quot;,&quot;v&quot;:&quot;left&quot;},{&quot;s&quot;:0,&quot;n&quot;:&quot;p&quot;,&quot;v&quot;:1.1036906734302876},{&quot;s&quot;:0,&quot;n&quot;:&quot;b&quot;,&quot;v&quot;:true,&quot;e&quot;:19},{&quot;s&quot;:0,&quot;n&quot;:&quot;c&quot;,&quot;v&quot;:&quot;#000000ff&quot;,&quot;e&quot;:21},{&quot;s&quot;:0,&quot;n&quot;:&quot;s&quot;,&quot;v&quot;:19.999999999999996,&quot;e&quot;:21},{&quot;s&quot;:19,&quot;n&quot;:&quot;p&quot;,&quot;v&quot;:1.1036906734302876},{&quot;s&quot;:21,&quot;n&quot;:&quot;a&quot;,&quot;v&quot;:&quot;left&quot;},{&quot;s&quot;:21,&quot;n&quot;:&quot;p&quot;,&quot;v&quot;:1.1036906734302876},{&quot;s&quot;:21,&quot;n&quot;:&quot;c&quot;,&quot;v&quot;:&quot;#1d1c1dff&quot;,&quot;e&quot;:730},{&quot;s&quot;:21,&quot;n&quot;:&quot;s&quot;,&quot;v&quot;:20,&quot;e&quot;:730}]}\">#</span></p>\r\n</div>', '56', 'internship-co-ops', '2023-06-07 12:07:58', '2023-06-09 11:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `lafasta_access`
--

CREATE TABLE `lafasta_access` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `access_token` longtext DEFAULT NULL,
  `token_type` varchar(255) NOT NULL,
  `access_token_expires` varchar(255) NOT NULL,
  `refresh_token` longtext DEFAULT NULL,
  `refresh_token_expires` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lafasta_access`
--

INSERT INTO `lafasta_access` (`id`, `access_token`, `token_type`, `access_token_expires`, `refresh_token`, `refresh_token_expires`, `created_at`, `updated_at`) VALUES
(1, 'D7okwxkAPd5rkVws5hU4vmHSk1AGhSf6qCHWl8eiLGWZn2cloCSWsmhgqgr-tPgoti_F24NzBqfoZNDNJAa-ZYZOODLoIN2oIAhwVr0kON6bzwJy9mMkLLRsJAHJ7WRgseXFPxd9r2qjWjN6jacdpoI9FuO35Pd2c5auC_Xn_FF4_veG5zvnixiHms6vcpJJj2tEl0_X6JjvnOqLgaO-qqn79EYOqZZ6CCcqCia4qrHuN3Zd4fG73H3_YD_SSucV6EG6VcDF0bkAUHNSYKggUwTyWpSkV5Z8G5lSJUqr1MtdZPWZRGPAqTUDoUUq2DgtK9jRIisAAqgEMyJNjPaHdAyE3sWJ7aklKiNLBGdP3SfQqxEjB19xJuMhG6t3Y5OFjMapKUbGOQn-UvElcE0piW7icnIWB37_zlnaDcbEYD8h3fDKdNPrIF5C8qb0NKXNvig4S1-nBeXkxojyHe30NsorTQbOP0QWt8uR0BBgn7_EIf7gFSJuf7YiyO0wOSc-Xrx5YOp1M6W_fsf67yHVzPqseRY', 'bearer', '10/20/2023 11:59:15 AM', 'iYMkD4In5WPmcWzPdA-2AbCiE6E0qb12ZBz2OW96uVirwQ2gO_GhndDwLJJAPI1qrj22-GcNky15LNsorddmPXoUD4Pe99O9NAW5qC_3lKgAA1TYY0lSAcF5UuOPDn5sIW33A1jqX65nSHtBo46nrY-WalZsR488SUfporX3nhR3Ct6-q_lYJO9CNTVTLsBGrQUyTmuILW6KX7f8E1g1irDVot915PaCOPCepWFiyHPyJWMES70KrcfhporKYfVisX_UNjwuF-6OxLjqLdC4vaVkbZU7T2If85U_0GdW05Wn4bmv_IxVSTvVNb65euwHmrtHHuOnEoDOkSWk_UfzlXaMD3gs2Fs183JeiUJ1A2-D8JKhpE7nY5M_ANHN5VbldR7gDIkuFKq-J7IL0Noo4kFpGmpJ0DEekoxP4SEJWKs4RJrS4-Kzo8BzBtd8oCvyScyvhVwc2HFkfl5QWtVMU9Jw-zrOyAnczhoiuSqlfX4ElZMif-7ywMuQdtZosDyP-ZILAfHFE0abDjxproUVVGltqi8', '10/20/2024 11:59:15 AM', '2022-10-20 03:59:53', '2022-10-20 03:59:53'),
(2, '59bjc8Ihc5r4UIKIFI9-R3rCmgvotbS5OcMuisdt6W-9uJ4yhzhW-2nI1fw4K1itO0PKv8JwDLfeQK1zVoiv9w5ZrmkiBXtHPBxTzOTPdicuppTzSIujGjP4PW4N7DvHBQTx1Vln6DIIsmSoLqtT0cRizEfNnzzoso5NK9Txyoqj5UP2kgdiWabCMvmozpDfd-95ooCtzO6BajgF1Za1QhQY5WgUWr5ejdASpyXDvVsRCLzOj7i1V09gpTxiY98-GR6AmT3Rp32JWsgAKQkQi-tst1e5hDfPT5Le0O1TT-5x-rNhvZdsYuKmi-ONSF3SsCl1zZZsVWhTnCgHAUso7F4Zp0xezN2RSeaSCFEg0N3N5_77b8-BSeOJKE7C1g4FLiKKsi02aemXj8XBVY9fZkTms04mvFIXF8BgB7Xrt07hr8CTLLOYYuReRp6-86UoR2biPnzEp2MCxKdspBS_uPOPss2YKSTtnIwWbZXltfbxxh3brZtZVqQTEL7egnBzklgFEg', 'bearer', '10/20/2023 11:59:59 AM', '75JZ1Tc1z8vkZace1la8zoBofde3mgJnMvXyYkg3_pajJhKS4XoPMLs36Df4NwSiNL-Ltkljq_PqHpFGoc3lmXnhENY1AhoQ70tTpGDKV5bIBG-U0iWYFjC5Ep5WBSOyDImYzwX85d8Z-Dc6rap_dd4N19L82qVJ6SxQ72Rv47IFO32mHfqe2E0Odr6bnRsfsk8JwOGJ0k8L9zLCbtlURjGZgBnYDHj36bAyAz-JXZly0TJIHu7YHxgKecT9q_jgff-sK-2TTkq08P-_e2nNDnBPgkM-C_0A3o0mXXioYZXRtVN57rSrKDWckhg4dqNaCAXGrAndvOAKmzddt4xjNh97JlC-I8oJ9LOJsXRG6CIivGlDiIXEbIbr4vh8zu7zDb-IIhIl96Kgoxtayoyqg7wuIAjMMBlhj9Qv76zFnhY_nfamRvnWz6o7OAd3kqMOI7TfRcQWMNgGb80DWlv379176v7KnBJ7X0uy3deoQf9oyiIIRiYCSDnA_VaP0dbv3MdmOg', '10/20/2024 11:59:59 AM', '2022-10-20 04:00:38', '2022-10-20 04:00:38'),
(3, 'zcWnUBFvi1sY3kK4bkjr75ihSVIz6-ZA8szyzbZs6rwtvbt1Uy3ALxIPQmurUPQYI-Un54bLyQpJp3QbS39RjY4j-a6fsct7AkaUf7mD9TVc104K_oVlooEvqdNBplbXsM5QUgjAHKBFJfHxsGSH-wKFLyuWJWCyaD7mZ0ncTXFxUX-Ya8S8Wmw2wagf6Qs1pwv8WgWMWslJKPnq9XUHcsh_MmrPcOO4NXItPQ8sYs79Y6opoxeU9mI6xV6uVDR_HNOqtezma2wU6SQ1niwRLa_5EPMroxfAAAhm_2-xmfm-Q7eIKQy_OztwFmJAR4gJP9bHXOb2Nxv9vUFv-cMVpzQzwxq6hXipsbGjpXVXNZR988fE2g7ehRm_87MTcOHaqkVNOFSPZJo-14qRc_INeE-N08Auzg0EMCTeKkbSIEl5S3GyGuR6gDqRBp3Ld901TX7nhCLYbUFiTRJGsHICAKgjpZeuyMLABntStxhwqshIZNStr_dLsW0AxqvPEXKuovic_2H7CsWMeUZLnh9mTRev56A', 'bearer', '10/20/2023 4:48:43 PM', 'Rbd6DNuIzOjr5qxVjpQFshPjo8K7SKbtl1Qck3aUWUbqg-zbDVpqW4-tk2OA1Ae14mwANT8s0CuffSwYYKe2cEwGrTB6PqCwA3ZgfDiX9FaUYLE8leHOT0PWCc46d7yguIXUCIkkza8TYhDUrqKujxdjAWlTaObK-IuJwufjsXX0JN1pKXOHbQKMzCQpRGrWBEXqKNatR4v0NB7hEepr_xeP0JrVD_IYHDOjtjNtboSV3hwPNhOOP1EhDO7ZFplgLIqm-FRyEZWYWoR4OymiVA-TIrkZfVMC0hQgG9rS0XCBwr6FGJqlO0SDRJWFSRwjGcAfk-BfDqRV3rVa_XDnwDKNgBWwX5MNptQuhBzxzrV_Ubhc0eAkIaIiGFLpxTB9yNnoRKsFtflDLFMO5FOMaUhgdl8jS3Am2FqzvQbFAC9oVF5qrGnzI_8TotymmNlo63KPNVJm_DO4NNG___wk1BzWZSzIHrG2UfHHZL_zdGEATlZB2K6o-aCsu4si-s50cZDOdIqV8GKhFKk4kHB0KwQiCFY', '10/20/2024 4:48:43 PM', '2022-10-20 08:49:20', '2022-10-20 08:49:20'),
(4, 'Wdow7RzXXX7qDnEFBFRIcV666BqphjQZXAIBGkXd17Er60Ns4H_YZWtskDDRXgYmKExtr198fV9PxPZc4RPoSoFRJtcvzbOQP5JMGg2XCF724rZWzjwiah8x-3KTe8qYxLXUW5yCPgjjI1S0Gtya0jdGdxGjeD3Cc2rvbu4_OKHzabPU-KyTTIBUhvnnttNZuhN9JGXCXlw_1vsycdzLbKb7Y_yCgF2eE4IXs9mb6k6yf7xf1FNrqYuuPSNh6ysVFZL92jNL6dZuTvK48NjAfiRBfemlOAhr1Yk324vV5Os03FIrVRaopALLEnoraEFmwyw3kqSwcxIfm5tmbZJzKN-YaSf6iBkCxsD4IIkvLWP78p05Y7udMyzPF0VNaFW3hV_H6CbDHZHyTxurT-neISpdFNRqrDTU7brwMK9cuLZQLZfoozd9rYKxOin6cKALgrVYyH5dShIiU2WuhQXqpg3zHumZGgICKE8Rwi3JF87hJkntTjW5fgItXePNVkJLezhwktGz6akjC8g931dQLsYGBD4', 'bearer', '10/20/2023 4:58:30 PM', 'V7AZ2gJ8UUoTrQQ6ngYvmUDzZH6ZCjIdlE29Ua08XQPF054OXd_aKs5KIOS26TrjHVrga-Z-AveAoDcBPq3aCc3aRRiXCg2upPeWDNoCe8hcmHVyOAMokeASE1gd5hZXMbxX2EDLSwyIi7hZhCtVb_YWoUKlICYrQutK5tFMyk9bznd8bGUUDQKF1UVsQJbZUvXNbgZsRWND769Q0JlpVuu6cjqeyvEHaFS3NKhSiHghXKyHXxh7Uklbqs-DR6ZKWQKgyi9QdWHJbmlVHYgoaMUZlX5As0FAzTbSF6-X7FeSQZeqgQDpP6rqkT6HCY9xu1wLlnDrDbTde5WJMA9rccycsUj_2Cr6Q3QnIGXvuA0K7Aucy5k4a4rwUvxmVBP8fYbIX6qD51g-bCkQreBM5ySpZE8kiSRIzv2x_nLBmKFze-lh6uI8F_NzNk22PdnQAbxDpDhpptpPXfYnjJ2az_glB0VkoqAPgNddsyLHy1fXtUmhag_8Vv5x7UC8zV6pKnOKQEhr6rcbQzFh15kcUMlEUX0', '10/20/2024 4:58:30 PM', '2022-10-20 08:59:08', '2022-10-20 08:59:08'),
(5, 'bXmbdkpg4aVuDoM5x1HB-AUIFUh8J5Kjj0dEdogrRS2UqODyNsEkz_d3ZL4gRRBYcq8fb0isn6DjScSZL3xRFxdiCRX6Q287XbIkyhLYQD2E46c8tJfWhXPTOxuVPsC1D6rcl1jC8QFFg5Wl2uagzGiOhJPtso2uHKcNdSvvJANJyFgbVhUcGXNTrXOSAycWhbnFhvv7vr0RojVRAq3dCyz8JgYMhahp6GiQrCAojEdPUQmTjK9pRWXvs8jCpdn7Tk-HhQ-bj3CJkL1Xkx_dnHipLrp5dmf1RY7GscpROwtMVu-oFlAmqLp2x7d7xCd7UNKhYWZRul2kDKns_xzwWiQL0Hb02XjAFEuad5bnU-ouEBIxySh4nDxM6uZaHJtdJHmuZilTNClGLxXVkozFIVVABKiRXUvBfq6wMrZ_TDJX32Fq6SQQA8q9b-eToI3Lh2iPJUbtSc6Ut2cEzKnUlMKOEXfPmQCY2gpLT8STch7m8YwS1mB08aLp4nv8FSEvkQL2OMDdkN6r47DizerVeKRifp0', 'bearer', '10/20/2023 5:00:33 PM', 'uceafifiJPWInUPv4iJF0k7hKMmYQYfLx4Y3AXTgEBjQi6Q-WdjIXavE9EPi7snzy1BwTrRjhamlbOqbiDq4ChVBBXIj8a2RsHszrrabvncqUKaVzm3-oC77SXB-hJYUQw1M3gExZJ8odUzagugA43Ije7ZLVHWMQgUjmgTla5BJ58ER0wgX2pArl8rIjxbAajHbzaEyYpl80DV71vz_EiRNebTso_54ZFSlDmibMT2x74HpxGRjOaWZbkdVvRaDzWWyNNh_h9VnTs9PgDDsQsw5EdJCaNUZpIdEb54JD_4pIf97n104bikCdCz-dIBwKHqVEM1yYJWd4KOPSk4A0i9231eSMqClUaFXhsxC_JH5osT0xGR47by75W2XshRxjVu7HvrO4ftmneIIYZ_pb1Hn3M6A5jZ2tCOwWMVVq5JbYekQj75tcUB2NhvquXCWqoth1m03HqaRC1FWhYzT0BEzKab2OVQuZexaQJWtSX4WaRAqZmSflx3W7-elser32boAs-uwBt4tN9tjibuNxtT1PbE', '10/20/2024 5:00:33 PM', '2022-10-20 09:01:11', '2022-10-20 09:01:11'),
(6, 'nWmUZ99uIkTv0jcjMxDGI-ulbNyLVEFlBOBpKrqZWI7nMNfvTtpYGyVHWNUnA0v8_t8xcyNbiji5qgKQ_TWZulJts0zV6b7OGtjaNKq5GgBP_6U0L9DwK96WJe_VDdA4X7ya1U4St6r8TXV6U5YUhxcmvq3V6HtDhNpecqySIYT5Dj3jqPgF180rS985MnZbj-Y0NkaI3Dy-ox3_1k_3d6tWgB74Q8xskFGOA_f8Id0tsmbBz4J0xSobOFDuNPGTOvUqYo8cSXfEDenaOULpAv3eIIADoSNrphH_5CcsEnh6WqVEJ7mNpv6_AdyJnsEk_bobabDqAorktJFmKX2ht740dj4TwgZ8f7VSX57T34CZdNykzXn7L8gj-d_0fxJ_bI8Ocdd7xnw-ey0K0o52d_uvi-sQFyGARi87_aodoo5SYuba0FR80vwg2Zs_hRzPLYaye8F99dYPoIMA7bOU29UtmGvZN1NYdQTEy1_7WEiIVvMvjntDRKqC3JM6YmzlmXBBuw', 'bearer', '10/20/2023 5:28:05 PM', 'afun7ddOud4Ziv9TC04g_JcacN7NLDwloDl5krfuIIkUTLa6etrlb1uADLbdrvFjTBi3Q2k51e6fDx05gfjNQ5YNcZwnq9e2lmGVt3oA9ADwKHLBluaqBAitBVjIymTn-UP-kISUuCP7ERiPGyDcyyex-yf78X7Z_mveyKz8jFoXSlCgMpRn1fRGGu9p4yqsn11Bgr4sjFixWTknYliSgtjzFPQXiBWRHiWIBqJzt1hnKNizHWLhlPDTpnf5RHFO3kNCROzCydZOlhxGr81UaaSlIOx59ypWPQ2pIJnWyzzt9jnObXK66vooB61WYJHapPOGLDxYFVpcDAI4-GcuLHKIupPwoAERgBkpXlol-rkHJcnT-sM9rtgDNJP9j8MVl-SR1CI9tuVLkwTwyeZGFkMelNYbE1KV8XWQeMWVSkZB3iiMmWACirdKqnpJubobrD8eTColvzre6g3AyrjJlLFF74AdCSRx97EhcMdp66HtR5OoE3-scvvlOy83cNi22ZFICw', '10/20/2024 5:28:05 PM', '2022-10-20 09:28:42', '2022-10-20 09:28:42'),
(7, 'P4vZLJ8BxWZAwenoQZhcSeIQkcVRMHA4c8Fib7bt9l04A0OunxvdqQV5KSmq-YvUCjq7e9SlpzO5TCZr5ZyuBi17IqkwyYCpLR4WE_phnTFAhuEs_FIeayQ5m4vRYX8F3Z3inPHH0aA_ZReZmGr99HNjZsKCn700wPBnrOPS_i3S47pAPNMe87-8ULIDSd09ka44ISXER4kTC7zy8K8QK4i_hixr9RsxDAnZW7gMo8N96-y_swgSp8CbvGN81eee9pJMiwHlMZGnyfHeo3yzOobaGiFraaXblqTD8ukatYZnNb-zpoFb-dK8sxseAWtTFfzf1TyslaDVPfyn4YvGglkhQ6aN9458XY8Ul0ek9l16NutftcRw48L6dvC1qWZhj4wSI4PJ2K1sW1LgrpIkHxkWlt8bxEpTBucyi3pLXXUz5SuPr-lIqJ7c78S8QT7SQelBhXHpWPot3CwfV_A8-6XrAnqo0tRrKFVMpbnRRYGGYWmgMSZ19hjXxWOy26_FnxhWsTirpS9lNJ8FWrowa_1HnWI', 'bearer', '10/20/2023 5:28:41 PM', 'bYltK8Lrs7KmTlzpHKs7eQyh-pskJdiFPomdW_H39dZboqk4QBtXq_W_nkuiLMHOFLn3uw1w5sGggXAJ8qTtSotw0lTj8ASFGgzB2Y0sc9Q7LAdL6voktnl5XoGdEDVqVzHZIRDvoDiv978d7rzPjf7dIHyy9T6r2oBG4W7B0xtTwi4lrUYwjdhqzS5Dra6yyaeItfTSHfgurd2dilb9SoP0x28i83WfV65f3pV7tu2_dkY2zRsp_wSiEC3B8sft0IIUi_-Azhmw4v9VzA_1DWWjv791UsTTAJyCyYegU5CFhrajzUA0TCz-cbnRl9258XICqyFCbhI9zKPEJfPW8z5ZgpfhoFChSK9yb8gsKQNj2dtgJregEPYcW86vjQtzaeAEUDp3LOc9jQg803x7bsVw6QhqhLe3Wy9tk8Lw9mgb1M7aTyXq6xajosDgBOaz-Om51uMqhA_Y5Jjuz_D1xsgezPQrH_7qdBejZmNj8Qjfuhv059Gv2eWZ_c4kmCr9uNTsgGUEB3oOX6eUpjTONxMYFJQ', '10/20/2024 5:28:41 PM', '2022-10-20 09:29:19', '2022-10-20 09:29:19'),
(8, 'Nfq56MQlagqUNmf9MmJNheQBXTZZN82VTFuvJfDyFt9gXB6Medh7pAlSa-6S1IZg4bu3mT9WcKQyxQx1jWEZWCs83Ui5MIPU1rPZxC2JZiojf_jmCr9ypGuY8bhtoM9ux2p3FdDzpgr7M4LJAbQm7aOnFG4pabxArQtyBLH2mPmamh_pjY4q6J_-qsBtFeNta7fLIUahR1jEIZHRuIUlI8Gq5LKiGonkMrbWMRx5_Mfa9E51InCSjj13CZiOeOUYpop6vaH94XjHhzIBrcL7tW5Aa_Czfl9oKHdm9SmD6PARGummg1h5thJEVSdjO8gG18z1Z3hSJ8hBT5yn2r6jZuEUD26IsJ-86kBxkPK0OauoV3GWtCjuy5zH_IK2gU3fVXmWGek0KVjjZWrpAsZPWHGkfcNwxHAYwv5rOVSGBO32DZ1HnHDz7x7DkstQgPBgaIxpi7kfpZr8Cb1vXWFXnHjLMAMYhdyUxp0aUshRtCR_qzzroX5iG2ATvONcDQ8hvnJE91UqbomkCSGM65o5QcLrtPw', 'bearer', '10/20/2023 5:29:34 PM', 'F2Kv93oUmMWMwfrCwocXNvy9NUhe_TZD6_dX3dabUWQv-QvsxlGsVaUvauCv0u1LLIzlt3rOkCJRcoK5D7z9OKzrwYbqQk8MmczWEQaN4n6N207_V5S-r4Jn-qaOLD5WTuaxPVB99ob3cQH6-gaFjKcIc7cuqj4iP9YbI9yovu1LvX_JcDERqMgG01ouhVINb75GYPoEc6bKuzDdO-TzdjhJG3VjPYwtF5nqkouHRA0pmWpYHT_nfMsGKYfJIgbcZHPYcNo2VhiyaK3ZzjFRK9TcWqMJCWQIr5Vss18uFGEJfr7STTMgW_BteKG69dZb-SIRCg219FV9WWisEk5P9RgRqh4yflELPQ6wGd_sxrQo6mgmrUIuwBm7OSEFaxx58CdfbBomlORVtak8mk_Ox5-P8JhnjMaEyNpv5GO32LAe_6xOco6MuOREPkI5tzNSNi7EDJHwn-srh_MuSf07rmRth2-p1WbL52MxGDTFhQZpJAlU5Hj7832XfOHEFO5Oj9SfFkijBw3k6F7CGETidh81_-I', '10/20/2024 5:29:34 PM', '2022-10-20 09:30:12', '2022-10-20 09:30:12'),
(9, 'rQALfnTB58p6kTAT_9iV8RupIIbdtjr9ADc2BZcZJNBGJqvHVgJkrNqdh3QC_BDI7QoB_J2rLYwQ1hFNsMD6zoFDoj2Vuhd5E7bn0W44B3uzNv3Xa94VYCB-hecxczhtlRpUanyRyuX_WlUeIyum6hMqK5mFBB26hvvMwlDLkB3LOUHxb4hEK_1Ioj1oLUH9TvaB0HWNhuYpzhmbYOyIjuKCCitWr5RCAo3IyvgR6hxOhssAdIYcWIoReYI1wtA1oPHAZZjpw81lIU5yF2oIY5KrTOSViTB8kJCYwv98i8wOWlW7DOfmHCE25C-2g8JEU4_alcMyAON2Qv4X-mwpw3Jse_y2q0knPXo9sGPG6jwDnOyKuoN5DD54bSe9tW3sF2rcjXDtbT0ipLHOfSAYMaIgTlUKItx-61vnAponrtLGVJzSQrSIUMmIS4epR8I8393Y1Fyh4_-7DN6U4fjnzHanWBCM5z42CwoKaqPpv6931NCL-HwdD3v1caNj9iXHkVm25crw8myUUwhUWOuSdG3_iP0', 'bearer', '10/20/2023 5:30:01 PM', 'MD0KVeCldsAZlKQ1l-pMhlaRmrjSvCfNQ8rZLyPYjNsQMG5a7TjbpK-b4clqzGnh6RIYimO31hX3ZezAEgTiDqlBWMk1b5E66D9oz-aaBmq7L6xV050wueL7pnvRDFOt3qJhMwkHyglf6K0VJbrBGFEkEHYxOxZBkAYSHmSztIfGb_HWqAohI5oXP7uqXSRxUFd12OhcV19B--RkqjsYQlux62ZcaE1FR3fmbSNgXafGy98jbnaspFltZ3KTHp-g0MOiS8Q_Enw5ycJNgyLIBSsd93C1yvlAYUtS4iWPxLN1cEXuYjKSP-Edj_h2JcNTBf6G3C-pRoOOmpLc518lyiNGdM8nrp9yIsSbBIjfk9gO-lI094BD6dHqjMpUlLNzS1AsXalJl4ha11UrtSfgs79_MVZRMqKE49k3RoZ-FCcMojKp4Pqfxs4BjsyQNmLKc4JRF6J89NQ5JWBs7M7C6pO1j8iL_Y04iXgWDzaGEedBF76EN-DbzpUt_FcS6fR3bwJWm1xKm_p58Vm27CqPo-KKhXU', '10/20/2024 5:30:01 PM', '2022-10-20 09:30:39', '2022-10-20 09:30:39'),
(10, '6CRRjRW4sR5ra_QsaIXJzOa7dOEJ4Yxf3sWU67XYjAVwC9i9vs6HQ65iqHNiZAF-nx--GPxp2yuqekJOdEaLfY0u7Q0OSqG1FzMO7Cf7kuFDzUArz6M6D0OGOzYKThXFsE60S1z3cgUKT4MsXq7fG326TwmYFFMFjXBYdjzWydGVmeY4ducZinLpL_4xD3rasCROCMddCO9BbretP1QcRVYP_Vxj6ql0ZbEntWvlbruz0-VoNoeBpe9fvO4UKGWi3vfdCAXVlQmJTRjbs8qfn-SdUzOm9qwJSIiPg2DkYBbs1c_xf83U7aDKLENBqCayid2c3gbtNNmWLCAvHSodBklaegzQOTyGc1JP4KtJNUY4c1sc39H4U0qXlsvIsWwDRZV93AjXE8_4uoMzDXEyF9lLNLdkDCWBC8mTnxzjBp0LkfHIk9BnrwfocMhGjcoPYNWR4DJYMqBvq2bWVC_6M_i6q1kpYMggQ1NwdYGXO7REvjObQFu37meHaHITfAicaba-Tg7uHYwbb7-pzOUJpsz1Ldk', 'bearer', '10/20/2023 5:36:30 PM', '5-HqRbX4B3G9-7EvNIx11ZXm2ujzhfcchBSOpUCId3920OlcBPjpE6GsYHP454031gePxL8RZfuC8UmdIZmNSkZUApzZI146Otxnp5RFlbN5x_OA4txWaU4O384mxmqtoKSDsx3cuMSf8MMpLK93v4aKYV8KAHICs1Hkwi9zi-jM7_y0Zp01sJnfk0o1dF0ep9AsJSYnLUal6azQ7_t87TAKwLta4HsHwX5KPWzWHP17aDAQVKdYJSxiLVyh9_LtHeeHFAIH-I0Qtygl8799dhCX86pjbKqrJlinJHCxFHs-0pc-MImwrTURiKlb4lc5DrjGuqV4neEE3-vcf7GKbj5hKoL_iSOIIluPJXoZfFCHbJVbWoeSvthrISMnlRILGtadXNwOdGIUSB-VBItSupg0pmjqtokD-bgmch8FY-0k136y1d5-5RXVJ4Qyki9TWv1DQrypn0jLxM4PMaPEl_4-Q-UcgiTzeQq_UFGUrBhyhOviYeJMSRwgHfHVz67fXw659yaW47xnV9BN0ZXUiWeHXXw', '10/20/2024 5:36:30 PM', '2022-10-20 09:37:08', '2022-10-20 09:37:08'),
(11, 'clpXGxr2hDgqSFUQ_p71MUwq_Pt_wexJzON7ujGr5Nv2sOTz2Gs97GqtRDuhJCi3NUdr9ScnkzSG5G1gT1zBXFrxm8q-URbUC711SicUeTiVPd69jJaOBj68wqz6zBM5xzQisCmDp5Qj0jQTnwuzGBCpy0j8IlDIxIniCG2lqr2FDyXuR6HiCjUsa9pmSIme2cArZS-JRntt52gdYTFFswPPyykEF5Vqfw2rR5KZKmN-AFitGijFhGvvdcPAwk0jMUqqEh5UcLk6GSbhA9TQUuLraIHHIMnppkFNsik6laGis4X1nfs46Q--hChtfT1EPu4nHfKFiYGJHWpCRipszezeUxjsCZHevw27H3Kdmtu0WYZ-p7V0a7Fp5pvHdbARoSZhP99bUBTZ-CSg2TMDR9u7xzpeSqoe6qWd3-RpeRNT-TDrN_OqIh3uFtW7_62lgBFsZPvwiAhofob0BIDgz85KRZpjOkLCJBNh4DVUXye82aswPg3HXUOUTuN_zZd0vhkm4ACEwYR8LhHWDr5BK7090So', 'bearer', '10/20/2023 5:37:49 PM', 'X4VRm0GjL_sKTs43kxCvB819XZ5Q6ZwIBL2t_2-KSDovUUdbt9zJNgk-pmcNEJCHeyjIp-vJbm8F5fvD9Nn3RlIrxTNgvs1zY8qu6NSThhYZq_SKObf6WRbFmbXtxWNFLHB1-3r1VQj2UplQIup5GPIT4-qmNaUMYNQCXLzECrLsEGVb8-CEyA09JdjjHWuSBZYZVBid8xQP-R8VoV6AR1ii4L9mEwak8Ibo5X-Gyz50qBRyOA-c0dka_qWIH8F_I9lmfFrNxjht1LDsY3se8vCuycWmyvAWIcKdNUWZFfBFdDJYsyFBGhDzPP0B7OlSZeD0jZgfUYQbmieH5fCHtk9DNWoqnOPNSsCMebkNZbP9TtQqq9EJA7XFiEs3DUhZ7JKh2ZROX8mX9CJcoafzQfuRg4Ctp01uvpcqPY0hNAs5oBbfiOpul9Iog4LUXJlMd5XfratN-aLMBDQSnwyaYTzGgcNqYAKVIQ3CamM-ySjhgnXpxWRbFLqYesa_x8X5GSDL0o8vD8HY4W2_YjTyfhAF4CQ', '10/20/2024 5:37:49 PM', '2022-10-20 09:38:27', '2022-10-20 09:38:27'),
(12, 'Fx93f1UoFL5NukJoOECtiys3vrekX98HEoMyB39xJJPZw1hIhHaAUvXe9Mh6dnxSIOScI_4bpz6asc4qoPzM-4WwkhO9uUJMLM3B6-Cd5EIjOYZ0VTHdh9K6Bfxs_DLiyI9B17U8Y165HyXcJfrZ-PqO3RT2-isv80gfa15ZYhUiBL8ikJIrti87MHpUGc6X_2Z97Iaa62rcmyJMx8LC0cfznFnI-HldtheWUflQJV9SzeWjwhB6hKjdq2y4gxlcoU5GYAGgaHSb8t6oS2enPn5YHWXV-Y08wEDPKVqvIlWzrfJlMFwULNGYPTJJo8mDztkITBSEgYIc0eJ57ZnMqrMHYQPSGcPVrARzvpq81-1U3iD88oiIu1ty_UM6l_nqmU-_qB6DKlAyuad8vFpn14Owcii5n0yWJkdIlEK2cOlnxSlhbd5ICa7S87eDxZxOpLkaPT7Vd2qZfkd-PzTiVrDmn4QkyuH8IEeqWaBXPPxvQKkAr6wR_bxyVyE5fb56jUr-kOL8TdlChTB0ZNB7cga4gq8', 'bearer', '10/20/2023 5:41:11 PM', 'HrdPm2hwgHG650zlj229IvgG_65WEgfr4if8YsgnbymCbYW4-LykcLoK8tf9aFITx7rwGvtlJdNocLEmKcEFIzdMJUxopBL072CfPERs8fjdJ428zSneiS8RSOFywGSzn309317DSXvbyuSG0IxWaYS5_Jj8q3hoW9HMgEkKiKaFjNxvB5EFigno03YRsMlIMRdxcTuz6uY0gGGO3p_R21U7sCaJ1Nq8JMejqS57ebIoUYRLq_ooP_Yizown-rcnWoQi4zhA7swx1Wdc_F5ZCMiR48CFNso4iKcNuJtB4wAKX3vbGUz3E_Lz0ltcrptC-uy_F1tnWVNJThJmgTIcmLUVTspBh2iHJRwTwReYViMpSTvj14TiZWHuWSqe1iQFutOUPZAaZhsPQsvD8t80BVPJVaLj1YVUAvfhc43UjVnDbQQAqQ5M1GffQEVI4W18Az06ApoX63kREuwYk-6QJ4dov3UeaxEs1GOUlgRf4RZzCAROCNXO-Ta6cc8Pq_O1XYsxPvHcyuS21RSew0qrU1sWQxA', '10/20/2024 5:41:11 PM', '2022-10-20 09:41:49', '2022-10-20 09:41:49'),
(13, 'qPBRUCYLdxCJmoq6SBBQLTWug2lQGJZ2c9PVqUU2W1FSN6YoeKEcCkDKEj4UVv31WabPWBJ2w3IAfpX5rAdKibZM4-dhc2pRWmQyP0MS-uAFKvNAJSChTBjbvHZ9AX2eOxJrKgPSNAG1e4kStYuYPFnoar0vNoY9b29sels2l5FrzK1GcXEKhTVlxZqJqv3W4CuroQc0WtDkO_9VgZ2a4-6x0_mlybwLH7KpymoHCC6miCFQZqhuTjbps04qLLzpgDM5YTSKaAhcnH0r83x1vDlFqVdc5_BaY2IZEHOb53iK6obcjCo49ml-qUGpG19StJwpLlfYO7rKjrwolwwzX87T0A_Hc5K8WHkShlQe_7yj7Wt2L3p2XfKieQnBwVUMsvLGnTfdhNTXGMVPM4rn-aCVTJhGWbzDCfOZ81lSSiJ6Cw4rdzuwv_1Csvyvi6lT08WYcgzkfp6eX2TS7P4QBgeN3K2FiDIdylTYWh7oQvvDt1RaJozyTuuh2-tHbU-cHjz6Lgpird5lgHbJ_IDb7YePBMM', 'bearer', '10/20/2023 5:42:00 PM', 'zVXdtHjhtU-OW8NRsW6ru5dA-qAD64CREjnBgfx6-Mye9AK1tNMfablJTv0Ly_1bdyTyZNhS_OtuM0a7sF8Km9HW_HsixhG0npKMSHDIqsblrUkmXmFKwO9LPOZOAt4tQglOYHk1IsBf7XgLvuA3XGUkqClmvY1ggaRRLqgV9b7CWDJ5izlaHdDdVTOvnnEBJqrjKquQ_ieT5mJiCUUca0gTXoHyPIKP99d4YTMeGNLklfddYdvKbPZSC7XOsokXErYJ_vJIBdcy-wUmI1erWDYb7tFmPa6VCkiIpAFeA83IAP9VZiHe7Kry7ei5t7RS1o2c30Qrz7iVeDlHxATdZjWzV2KRJyX8k6eExR6MBeCgGNVVKN36NZhl7mb1pngZ7M-9lyQAOzvKjo7oSObXid0UYDf9tTpIaTkKZnzO8D9XXxJkZanIPGictD2BWn1GuKmz8vtthBngXiBZV7h45YR-_bpGrlKsk272cO-yw9_yB1Ci7bXlKDgkrMwnENX_jtRYJl3v_05re9ZyO6uekHJfQRQ', '10/20/2024 5:42:00 PM', '2022-10-20 09:42:38', '2022-10-20 09:42:38'),
(14, 'e8tM9BemCH7aY-hbrvpmPY5ywyRHV9RMcPYLOb2EGK4dgMtDTqak6Ol6wbM6CQrD2BDtQBMbrVQKn3sNVdFk3PSIkSBph3IxR1sIOSz1phC7qbAhE9rwAqijyfst89zCwGrzWhFzH3eBjSp_W2Oh5rnms749wxDhye0X_qjMNAeUdzz74zpBqBqyjWqiRsLZotwhhq1x6IDK5Seci2au4hNgJpIl4wRv0yRdAbcWPfbgY3-sWn4aqnAyp3Ve0UX7FkNIvdKzrcTq_4utv2RRyYzhRILMFKl3zaTBK1oMmU7B1B-szlTOaPDWz5xY5NtltfrUwwbhzIw29FV_hzPde7cisa3wiQhioOqH08xwzMXZzeKWODGFakRI0SKzES5SUzfYfKPtfqHn2Iw-_IF196Ic7_8RZIOfTa7ZvOT_q1G7mWf5OTC5EGg2vKLubitIBJai3gryRlgbmpx8CcL6LbvZYd0pGoh1sh7mVYjgZQLX87b3RzxqhgTntkWWdu1ioWalxUDm6i9C4XI4sdVAF-CHWYA', 'bearer', '10/20/2023 5:55:16 PM', 'Z-WsnqVggx_l9WjqT8J4vZnupDkM9siejHhogwCdiEcdDp6-aktYa1wq1QQG5M14OtZc45mJArucHp7M_-VCGHRzxT6EAzCTlbP3lDSTepIiUfedpuez5ir0Q4CaVqoKuyo9ejMSsD1rWMlPKqgLwGvTg65W98y1ngxJwY2AlXHXh7GcGGBD_Hec8-h-LhLIvpmSVbnzugva2MLAnCJnMzD78JkvwRAT_YxZ7c_Q87yWwWzIIBJSr3n8zJWN9WPh6DGJw0z9-xDu8BPjrc2D6mCS6uPfr9rfcg9MuZNe_dwyYKFkq3o9i3-xh6qhs1mOElh73oL8Z0suLb1Afn0Q-yjUTARKG8xACKIxQ8lNASsGm4Vd6LxHZ4JQwiRLtrC01QOE40Y0URLN3pqlHYOX-E6LDDR7bnGbh4AI_-dW_GANUVKV6OTahae6jaXyJyLDiw1QaUAE6CZZngaRn_0BM9kxi3UKTujeCPOCO-qb8K-kMHl-olXoPcsTHIuE6yNKf_F7srNowWLntmctoZMY-LjPk58', '10/20/2024 5:55:16 PM', '2022-10-20 09:55:57', '2022-10-20 09:55:57'),
(15, 'L23kQMV_tDsZ30fAnNLpzeuB-MV2R3q1Ln5dZJE4zZvZMHiMPon8rP3r_bP__ydyM42QMsvPXDwObbQ5odMJjVY08xVZypRtGXj22On5mrRJCJyjeoK8BifLoiqbS-tABAPv5oF8w-N8pgcdbpZrCRTfL4wOyQCoBMf0dfciOucZQMqohfeiBLzHGgJeKXS1E5jo5msRwLSCKQ3a4MEFFCnP-c8MWFH5-5Oauo2nJF5oiYjLKCyUlvC7hh1TUBZLSkqh11OuVWmgzl2n9lplYVC1M57Elh0xahPbc6reh4yuX7o180Xoq7oJMGVPSrIsJv1G2CPoEjH3JZnbG_glxVXIvU-DgJfVWMLhesC2m3my_0rgcvgylCFQz-_zy4u1QhfkQlzzrdC_mXX89ydGaEP__46ecZbEgIWqggw8gHTHKF1AJOo0ALPUzeT3R_0vGetMstye0FrfveNtIrlsRu_aUODykiRaYRoArzvz0BwafXC-6Il7hcp8YXFWzWOFAka4n-fFR9Mg3i6GjmbBtlq4UFk', 'bearer', '10/20/2023 5:57:50 PM', 'eeyBeDI3qXcpGBA79laGpQ2K4Oofxr8WRxFuo8lI4l4mk8CSfqEN818ipqiLM_kGRjZRjoJsoJaPO-0RM0ZYCktFSqD2URZguPwjfIrADqDL9WOIM9GAoMqfrWfAYFJE14QQ073CIZ33FRufhzTrkBVS4B2KtrAOR3ZW0qf2XTl5KqZ9eod0R_9oD1GAPe_8p_BFdxFlutJ2_AWxMriq5JNfzN8hNaIPOAAEjOH3TpzNWaeTaaxy_aPDKd3zvgUOZX0ITK7Z4OCpEl4bGisPqP4cB-yvlK9_Zf0nHKPntVsYeKdeE0g9GeOwDNUR2c78Psj-S2rEI1u6oqeYU1rBnhy5cWVFwiwO7qI7-L1lUNqVXXVJrrRwohaaj3on5--EYexHZ-JlC75twJjeXngdOumofY8LSVsQioBcYM3N4qPYmKtrSWZwHQzayB3u-kbBXtLz1H7cokG9U2v_XCpe_0boEzgXa-kzYcFLj1w_pEa9WSfT5ZbIFHxqVnOO0ip27pF6QSco31CF54l_We2p3jYF3lc', '10/20/2024 5:57:50 PM', '2022-10-20 09:58:28', '2022-10-20 09:58:28'),
(16, 'HeQtLBsf5D469iWL-82xzNa594Rm3BVJ0wowYGc_KD_ICuaaKCVY1x08Hk98m0ZrzOWMgz5mgc3QU_s9p0gSYcVjOQUcJnpM6H9qIBn94Fs_PPEmcVcGTK5UPoq-O5ySPMVr8qvgKVI443hJisPLCZw-Zx81dY-R42qmIR7ZmStcWP9N8Vej1M6b45jZlLMevE6MVwA2W-6h--Xlf5XDlKMHXmYqr07OyCeaoqjt2wHhQKE-olU0afw4AV7U-kcXScpG6IiNNSYuIwxM0caTZggvcwzQ5dy5k51Vtkz5CLj43OT-OEw8GKMi91Kx1g6cykPmkmuRUcJkHDs4_WDVkVGwfN83KBp78DjdATuLeX-cmsHtUTDEYIF9gB2kxx8vUE_8Zc5soYIr0m2Qwrxi1gwVkHNQN1aowHpBF8hdfG53V_jbHfRBOwwdb3A4uAobZMKgGCf3aDAO5Ub1UAYCr7bku4skDEprew7QdD7Det9rpUQVWq-25fw0RZ1qaNEcD_COkIY5e6A7tiHY7da6b4KzKNk', 'bearer', '10/20/2023 5:58:27 PM', 'HpWmedLR6H7AAD8BGFZ6OLTozKI_L7LCKJj4F88cpjE_b3iT1fwyldY9r5DeROi_6N-sAQF4oDt7_ysHR6OsLRqZU2l3DFCL-H6UgvjJjKid5SKIfYXrp87uASTTj0_OgMk0BxktXMFQq2DNOAMr8BeRpvzdqrGJnmGA_BbgpWi8ARA777DDbN4ojNyanfE5gvLCri1iw_wSMIcecU0jeKDnZxBy3K1WU4GW-Ta6ZV8dUflnA7A4HAlXQzWaTc2TZJ0Vhlj19ZDcCbz54te-SlZN7SOdZ9qVXqnxuAjPf80CBD-69Hmo_Pv4tgwdc5GkNOzBvRtHteWsx27rd674awuE4oKHLsbHi3QLL2KPu1Rm8gV8coo36wl_fgF1hM4c9KgiK1X-2z3Yv81nxSypruVBmOmAlf-xm5an9tWVICo7UrFTlDtX0MQVSrowr3rNttpwpwzLxydkGOq64MCePKwLI030SjGF6GW2-1UNPcvS0GE3fHUxw3FtTUiR_aiqdFzR16W8olSnigCuF4m3U1RAEgA', '10/20/2024 5:58:27 PM', '2022-10-20 09:59:05', '2022-10-20 09:59:05'),
(17, 'jUdwEBAWWjvchLQtnxDlMdw1GNV3_MLv9GuKDwonrEtBsVvu-59Wkc282sHGqIZWfk4p1LGSpwmQyhVPW-5P2EsCw3Iqlm1Qx2tQ-bEOojUkhs6ZoQskUsh3JA4hpxmIC6QupXU79HNq8fnBt-6RDgKUx1-rPbYkRT3wt9FhYwURzNHGa-8bkyctkTS1fwOkOe-RNysuf65bktkVShzzIbdM1XVwMLA9xWdWaPmqCyGwZzznIXJyg1yTwum4p5cemCec4pw2ijkFiCmXKQbJuHVNBKfkvO40k-MYBBvoS0Lat0ocGtXUxSzRUO4s5pgB0l93ofqb9XUxar6wLzGrtALJGDREUDiybP2G7x3WHAMluMRqgfYLLhaRS4L0h5Z1k_bGzU4Jup-FVUmgCSSlcbpSzAz_c2u_QpiTnWQ5pQaC0NI3YIFaSooyIeanlsqFR-OTZsimnq-Rww5EI9X3VMcsntoXDwICXNv-3tkvAuuWVjNy0dJjZ-87iHUWTGwlplUNyw', 'bearer', '10/20/2023 6:02:09 PM', 'gndDOetPP4OshnceVO308JJxRRziI1yUG79j9B9P4ZeIAN0nMco_cmoX2Hv3mMVRjAr7NNdGr58Y-onPK9mBixqHvAwouINr79Gx10Zl5LqireVwNvU-ad-36FyH_ThKan_ryGOaZZBlGXqrE_CwWkMGqhopPeniwHdwiftUq14pX2oUicV8mqDym5cwnZW7POX2fh3NaXVc_5zHPnfzer0HU7NV7xL6QPtw_t-6iz784QUA-mbtuVMREAnsown1fRuTOFwebE0jDqeGAEtbS4LdIfycHrKkSC-IXiGkN9iVIhvzSEaK2oqzWrN9-7gtR2lp2UPM93OWdb78dOhELYisxuzm5oM2tURbtkaBXVG885TLEkT4FwsCF_mzHURgbZ8AfQKtcKRhLkE7btIFrc32zHY0TwmdpASolIu_UsdBZNwX53wycNQwGAPGGJWp-2fbuMXNgJMuUAyZv07LJHUQjlGv_Fboeb2pQafWsDvfkYWY7tvZXBjfbsAcC7CEZWJrWg', '10/20/2024 6:02:09 PM', '2022-10-20 10:02:46', '2022-10-20 10:02:46'),
(18, 'pgRToYFd_MyqYlIimo5ALYGHLlESJMWbB09uvdssdtwSsTU5UOIhRp1R2rcHhERwArXUygFjCqYAKUvgT3xXRTgP_3TTpQzOeKG2NvQEu8rkvSibwGTny3sp8EGNY8hnLmdEI30F4nuSINX1ZnD3ipN0dFmq78OwA9N2X2dnubqUSD2mjPhI0N8QJxzBAk8BI8mrJjqmrEhNuMbuV9GWTPUjE5mlA6BD_k8DviMHs4fuKz6FMTBiApWKAwIQjNjdlm582k9vLSjDKk42fVwIhujNDBA4A0v3ZEz8jD7C7fnwsbVtG2p5z75keLVQIVGiCKWz_7QwQtmppw1F5nvOBsm3v2gAEYB2ErbvRWX7Dqi2WmGv6ZXRq5RY8dBruRgQqac5HQZSV-2TTHxVfWm33YTiG3mDqVOqoqjrTbInppgm_a4jrQFmZAnwK19D2vYlptjjVit8Hl0IzFOf9nYmZE435wMv9TJvAYPm-kfM-Ud2t7hOWq6C_p276pya-et8rEjDk9CtGD3zoNqOYKU6IlC8k50', 'bearer', '10/20/2023 6:02:11 PM', 'ci2zrJhI1miwLcNJTobjufVHc43VwuiC1jaOmXxKGg8TvkRVS9dGQKJPHA4D2lAAMXreP-8Fvr24sDDQzY6BAwxLgzYPce--0ktnmZWlyQbhO7-mlaBZelsXH6AnKfGUOxHJwytYfvbnVlWzJYbz3UpSkFG1EsyQ1nomAN4tMtd4wLZUJ6BeDl8doqrsp_FJMvjTLZKtF4356AxC8e1-ip99ZyA2SZGOzE2e9lN-r0AmUE7GSYG_5n95UZ52fuXlhn0JNXfy4YdSzcm3iRAH2cZawn9KL8xY2PCSFxPcOT-HFszHkjhhqR_lrDp6Nmyro35bEfy-9FdXlx1i8m6-vLBSPJnjBT7XqXfzVVRaaVTWHlE0Gw6fu1Vg0NfJelsyI8PbpUDIYzJWRuot3B0YTc0FaQjI1dzn2WSEC3nqYh82mxFBwJpLuqYfTN3d6uplugL1-nR7-Pa0eZ4qspYi2nith5X_UU-TzPfmytrKaUj-GVa28OpHZ0H7SBM1vmYCXCfNb4h1lkiozzYk5Ar5iMXSMIw', '10/20/2024 6:02:11 PM', '2022-10-20 10:02:48', '2022-10-20 10:02:48'),
(19, 'ZhPPpYcUwsntEl9HVUkr8qu3s4ygpAwfYYGY2l-LTRyQMZortlAZ_uybIRD0NYlHzBHVlyBMSxmqKOvFRm01A3ZUepwQh_Oj08dHFe-ukydwgbyIdtl65YSiEV5K1xnnOyHfMnVBvmyHTn2kHvbgNAo-VVVJj_b6InNExieaOJyxCllgg_l_y4qUZid9NMRjX5sGlKoRDuAemMteQpzCxYtahaFRJZwaGXvLzkjTxRxrsf2Na_9N0mSg8grEPBfSp9-ORJDt-YFDO9yMQbSlMDBVJXkuqHJVMOaTFxPMkHaznl6b5OuyfS4Fmmsj1aMjY_IujFbbIYqyJ2H2zhgMJ9SFfkJOiJ_jEO3L2ErApRvQ0ZRZbpW7SmBSyFcnMZbcIv1cuX9sh5ZJ3KStVfIw7cBrS9QZlRJ09AlTaaEcIllJUwWp9GKhbAc7SyMC_MeNI3h7N2F6-kEMJFwm9KP_yl2K3V8dmU1pnl_ZwGZUlvWNeTrTIh7KAxenKAyP5GndY09YJA', 'bearer', '10/20/2023 6:08:42 PM', 'LQ5w26xMy7tbOlfl8vZDhJ41OQUqgJG6dyuS_4l7ymSzMp07Xzel6UK_-RNmwdMNUXdBZzgYDnpOizbLnAB8tGSxoEb4bZh-qiRS3jJQgaRvTDFy63Z6ZzZFxFXiz29xxrrcp8dxvTnq3AJDL6CrlojO_X_Zt7BFeqKpZI4AuiWBuOfvvoORFU3mjNC4Vm2eDnUxSsBJlzniw6aBAKaPWskp67nFfH35z6lE2YSC25kPzDYht-xCDih3xyoFpIEtjwp1ZwB4iwkXL3HRlRlElD_8drCrnJzqYSuH6NZ-X02YWxEWsPK6WAGlKoTTXESgJo3IiQNnKeckwptnvYniXNf6HoItgxNEvcXAa89EG_7FF2QH-cGTYiyV_cId95w5E9ZnfszWkXbsNBKtvATJWcRtXvkPPKTi6t81Ne2IKaGSiqAxK7QYImkfiBzgrqeCteEbmPQXX1A7P25k_y1MTiOeyqLckVi5pZzxzZzoEMX34z8dLiQ2DKSr-8M4TzWxcjYPtg', '10/20/2024 6:08:42 PM', '2022-10-20 10:09:20', '2022-10-20 10:09:20'),
(20, '9YDlkXedAxdHOAbRad8AOhf1RriqUagULuaHKLBeUtlhpw1lq3LmpV9hoBqpX9im8mBuqrZZuN5shOdj39Bm2DfC6Yy2WtfIRNLsfi5OnOlZD5AhNr1C587JgVg-xPQShoTZGzvczoAIFPZxtisq5IoZYruc1uqfa5PGjwGJItN-VmFijwvst-kig7R78WJ6V71DbSHhBQOi32UXwhrcC9WEnD4B4OW6FpNGhfl695uZYoGns17EH3rJzDHv0FGsPN-cwyW4HPdddOvTpL1P0YzLV9Dyj9aW0WRuDIpXRREuctlxXihnhfoISB6h5WTIvaiFVIiX58FV0QRoIpN930vIdpFOtJrJkrfVNwDCl5uGtEkCWSaGhtu-Uhm5HhchVlGsY3-tVNi9Z5DrkF3LM72JIFjE5z-nUj3pB3cxkt96RxZk3YDuYEklkjvwBkBpz0qrPamVPeRU2dVVREfga3U5s1H7mRNOfA6bB91Z84gFeuU0zDAVGHUMZ0IoiWDpt9podF6CbtVQ0MnmZbvsc7oe9EU', 'bearer', '10/22/2023 11:19:24 AM', 'sxjMnkNF9gLJJjmyEP6buEnx3uyyR62AollmB_sPXmJt8VkKvCeOMJSE1HaloKs1HPNgg_uJcS88ki0CnRLX-p9N2vpNnW8JijAomLSTtHlrLNOJRHYPkoLPOx3MI_eTvmFes_U0L_ksEqOXSni7RGBMo6Spg4piO7D7WMeW9nvccB12dRpYIHjVnxhxi1OUGdqqQZ4hcPjZsTl20qaBVqHwVjJvF19Q7RckD5F1Ep_HZHLDo_XvUHzDMLOKiOJ478yaVXCZP4039rpsw2KuK_MNXdF1kMV_bpx-OGQeSFA78TrOl7yLHTKXMyMo_T3y4arqoyxeKS7tlnCipEyUkcnpeoQQYV2tFdeFPU6GNAJT5JvIkXW9ul3IIhOgefHn9RUxih6m7coUpbB5NtmBfju_3c08eGGxOBBXkArIzG0IsGh4JWAU46_WdJXs1anqj4jBXdZw4jPfKPFkynxhVzbxjmtztpG1W21hJ-L0lEJF5riIB9XoE9QgKypLOn_OFLhEtbnFHcYKB-EYJzfJhTE4aZI', '10/22/2024 11:19:24 AM', '2022-10-22 08:20:01', '2022-10-22 08:20:01'),
(21, 'PPUsG9ztO81B-iX_sz9S9R2IEkkg1Csn2-KP8HtIzONb2Mj2L8cH_wp068mTwQMvWTFyInjTs3XEswdyOSfzHi2t1CIkPNr31-S9N0guEGH2TU2Osytz7S04b4sn3IAVxug2hylgGDOj-2zNd9zntqnrRzpXkPXA7EA1w8OIlRa0sU5aEPC3qZsLch8oUZO-oEOivtsA7A3iariwTj6SZEF9O1K-N6IbbNXHbdpScfzI43A7T8k53ER3sTYVoVJ7JeIkYtXqeirn_fZ5EN_cgDfbZyWDQrl3yqfA0pFhGerdcxLbTOAMLcYfOT1_uBH2EVTBGCebdYWt02bi8_usmKtRslvtvdIueKXeN5RZWJYBhalFiJyXPXOT_StryNNb9stpXKtJaVNURQ9ekIcxOU8f6zsMQzzw8sXGYXGmLn0sxKn_L0D9Z2hUzxX6Ft-2wSWQwgoob3kinW-EK46wHevM0dIdpQ9x9Mlve0lBuPOcpflaIcudzO3K_UM1XnojTVNJ15y9AOML9IqVudb-i1GV5UU', 'bearer', '10/31/2023 3:48:32 PM', 'XnuKG0YeIC5rd8eKGhLhwpP_DlRU8KTVFP3cNE8kMhwdJTOaLkEDPlTg1yHUgc_2vYEVJCOPKjMI0ttlOgvus8fbMS-wS4rVTlRmLO2dY9-9heOw-PUmKiTa8NgK4H1sFCvkRpPzwt0PZoZClZXF6aA8U-Ml9PRAjKDrQDDe7fCeAegT2BPr2VIebffnjPm2rmn5MYC0V6L7cwdIFbUP6CS3BsgdHU2j6_WRS1fkHt-LYrlp-_YeGF8oZ-nA6ldahzW8WuYNVZi9Ly1iN1b8IQIZ-EVcii7t6vIicMp4lpICTxqEpQlpRasOJxqE8fePUP6JMfj0eKg8sbR_ZV4e7bP3GVjPDNK6MYLL6CDY2RIgl7jIxgyq_gGlYv12H8pbAEO6uJClFqwg9siy34mmWgUz3PkI8USbwdMtRL0-Qd-0ROUwJeJhQryhcs17v3wYyCV39e7_sbA80BEB7exjPDdr0UMPLHgjLmg50dcdTypD0ngAuN2rRAMGxbrYPafEb_6r4pSBr8e_BnxPRGV0Nprzdms', '10/31/2024 3:48:32 PM', '2022-10-31 12:49:01', '2022-10-31 12:49:01'),
(22, 'UAqo6OpxKZAGGwbNau__b6Jdb661OjsEM4KZDn76H076bIg4DImLAqLrrJ0FDdGYvQ-M3ThYIxLXqkUAtenzpu4ER7506Tnzet0UY4QbPKIL5cS2wgse8lpoo5hdZqrD6tu6Q09x4dQs96SxM2sMsSHgO_T69Z6Y6r4EQz87gVBQ3wRvxO2GPYJuaxC5Ruv9OAraIroP1hAwCq62kJIM04l_VtB5mQ8Ri51Pjk31x0vEO6pfZh0A6Fv4HKZor_F9LvAJiffDQsrt2VDB6ENVMnb1z95JGppzwQDOituYGQiwUnE9sChp3EkXBnm76vvpUbj4tH8_g9IfMnZwK9ka9stIOwRBnkRcirr5MmSqsuQ0RciMWrl0sEh5u56uytsXftQ_lKhQYE8_ND-xU9_qB9WECVSDZMZtLkHqOjdeVRe6OxA5_EPZ5ric471sSttEm3bgiQ0X1SmMF43KskDZ2iwOcPEgXO6eeiv8_EBCnXl4N5tcDWBHcr9RiuU3Mg6DKfE3yTGataf-qeX3uUk_AoP9yNs', 'bearer', '10/31/2023 5:01:41 PM', 'P6C2EXqXny-8EL_U1l10yh4LVuGPXFl9yXGwpfA46a2j66qN5C61lwJSOE9KaMZlru1odY_IBHLogT0Dzc-hBcWvmjqLKzc50JiTL4jv34fcSbecWn9LjyP6Q6xlUQzz3580OGE_nQxIwetAZ_pBxxkmtCKpbH5medh_9Rl4KQUoXIQj02oQB7X2NvSnj20AC3Zj_lOANjU0VGzPkyMAsRFApVt4OuoA711q6-WqxkUnekkwuNdLKWsEYl2BMbHXP6AU24HdzBFyhklSapPjVPhvDlaN6TH0YE1ohpUqmJuHPLG33ch82J_FhOxcElv1VG6zj-P7OH1oTC1z3wU3Ycbt_wilikt48HjsaX73kz24yIK9QAVzW42oQxh2D7hJhoBlCtzau9Qvb5oCRYmrvW4k60ZvOO4gLad7haFFzXHpzFNDlvWlvAmR4M59m4L5Xo9HfKRUy51lBschZcKw1V_49k8ji4m0wNefWDFz6kZ-uhQ6wCs__yzJZdXVLIvWFxxZOIyvaNIAdjEQLHTkON0Klr4', '10/31/2024 5:01:41 PM', '2022-10-31 14:02:10', '2022-10-31 14:02:10'),
(23, 'bpFo9kp0XNpEHVuJ6CoBoaItb1liuzRMN9BPmu2qKhe0_OxyLIkugO-Fm-iPyPmE4hPurtTK-2lnHFLsLHjSXCJk_Z2qBEL-IqAXv0_p8eCDimgQE58pZCFeQzgR_8FVOoZqvehahSSgsM17SjkXuZe8Do4d6M7UNc-wwIzktwc_KeVgNBCKOcYooHQuNse_HJnExj0T4E6LQVqEFWj3pN_VCQOGFY0ATzLwEl6K3qpqS3WJ0d1oIkErwZYwHRa_QPIwzvGhv8XXM4gcaLzAsU5N_sYthZTP_ZkadJ8ZkaAGpqz8_L4tXTtfRlmnUCSdIpSHhUX6H3Y6L3Nc_pntEunYQHCYs9Aa5Ho__i0XbggOTudtiUs46MpaQJWNCFWlFSP8IewCg4e_Kyx7dNxxsbWhlX5YGghCHnU5gt0vSo8FsuHz4qTUx0Vk4NRg_yrI5qy9NEDTmmxCRjfpJ90cdZPiawjXMdQ-l5Ip_PJtq30S7L65Ox34x0Yrw_l4YBGp7uQtpYIIcdf4EBru0WcTgAywHK4', 'bearer', '10/31/2023 5:02:05 PM', 'gsjSjbwDLknNi7Kc5zoRg90_sj5HLJl8WwVHdnv6MB9mIKa3z8BsT1tkodGgZLYrNXDbDQGCnUjkUvLVt1-9z4pWNFPtF1-KT8yAxBwvuM27Ry9yUscv-MtTKavOMxFRru9pyveRT5jBfnJHtZWY9oULk6aQxta_uo0UhoNv1PEi8u43kMAA9UIM5MT6Y8ZESMZhwe5TDV01rSShpM-TcHyFsbBBceePisfuMoCrD0jyKOMmIaU7JRKITO99LvQRUAb4WGGoPTF1cDPBYzb-HLcORZkKCxrn16pZbIpXmZh94PoHnvbmTxMwJfhLRkCfvQbceMdp2agPsq75Y-uCnetyj8p1hR1CB89QqAOpyaDbIEmTkLSwnnKyYrMAJUh7GWvo62UUi9vKNr8ZKUqzmCM8P2u7_sXBOq9E6Ekts5x--Rz237Q5p4LQGq750UIp-iJfUjfo72rJmKuuHNIf1k1wKK6YfbH1gVZrQwMQtHrryftKXCCLenBB8h4lfj2boHTRAZi9eamqmFpyjzL4F8uTIVk', '10/31/2024 5:02:05 PM', '2022-10-31 14:02:34', '2022-10-31 14:02:34'),
(24, 'LrbeYRC0YrsMQfRvOtVllJNbZ8WbHhoGkADgHk8baGK4SIdP3nO5YHi2CyWCceEJjvDcxJ2-6A3x9ddGzpDJl20PnrLpMXfsGgHMNGPlKeHBsL_Kp0N0vIuwpiN-5a-_Jey6zAHYAwCkU17GZRPISPYjaQWZtXH6MIGMhAhMOqvyockEB4v91AY0KxlX1jFmO2tqG9KVPxkIFwI3wSC-HNJGg3_48o0BpEGUTqyxKzpsLuUPeHLm6VclNZXCAImvl5i89OOGPC-x074ygontWEm50WLDlpYUSOC3DIrt-OfMKHOY1f67YpSFxMZaZRrNbwISx2mfx5tkhCYVxMs5yHl_d1zafY6s10bpIW309KNhU6ks17ZDrNB2fuwTBBoXUYaKprBUBKNJeJxVs8mjptZgzoesq9GVWFfCIBVX71tX6TvVpp2MOWiEjgj6QPwf258FOlEYKEJVRmbK9S6DBwMKew0UXeCWHJo3onblTFDY3DIIPQUMg9cPbMcv_U-GU0ktTXPbqtgVBqbyCO6KmJqfSGE', 'bearer', '10/31/2023 5:02:09 PM', '1262kC8_SweZThhQhudcSLgG8STvCWuMJotndhgioLEQcm9c7TeEdbE8RkpTgm02DPMotnQz8tGuVUhctqJeoEBCeAWGYUx_0q4-NJJzu9DA6OfjCBR4JlMNw1orvFR_8ZHf4Biu5jG7iYu8qod7Po7tSrCT9Gi4CIA_6cTNfhlGci_pYMQSAE9-iPxVZwf11QitREKuwklFbMqWsABF6F9TxVbmxLFkcNST2sr_jWsVQ4IbaFLjG_Cwb4mIM6stKDkkpoJ-mOxI5Q2GZpUY6215ENtP6Ci5qije4YAYsDh6pNLrX0E3RrBi2mrHYOuqqsT8WX3pWCGQvrEXH3OY1v-grEhJA3v62M1VwcL6HBZRITX-j91VjzGXYpzsRkyj5pzZUOQ5pDqHfqi3GgsFooU8U9FnLYHD9g7ROpKfu3p5oB7Y9cV4o0KgZJ3xEffLWvCgIr1ysYyeN0LjSe8yPm7yRdSm6h3ko2gZd78FM59iV3NfSmUbiHC6gbzzpauqNCCgsKULpFafJ6UYVRJzdNjrJkQ', '10/31/2024 5:02:09 PM', '2022-10-31 14:02:38', '2022-10-31 14:02:38'),
(25, '2PVLvYb5wHrmFlS7qqhZPJNI6q6g8oTaEzXbxGuVYfXg7E48QngRVVbQnQVqo6tCCBw4RQNW3qimY0r8Uopc8NEZPdT1DpLdGlI-0hr8Dx7nerLm8BbFhJzAXZM1T_9-nHfbRUFCXFZmADe3OWAvyZJjMtE5oZVES_eJNcRkpCZjuDKHkIidWsj0NWcquupYVjgag6Oyql_8zf13_cxRiofTed2JNKQqzqgBsIYBMSKwjvWZW1slu6kChbHkSEydw32xRFd4kGGpc2BVQZoPTk-0nq5RHklJih6yL-rUdoejgWaqZ_Wqs39ywKYAgBd9Pn4ZYutRbHZ2n6xcTz8KIYebwLP7_P6OLETez7FzO5tgGLuBBpcuufM28c1QGOynURXMwnGvBbMQbXchXvvXlJ6snl9g5Z6SiebhOzNaecdvZ9a8u0qDamoCHP07fPGoONcBgyS9s_3jZLPweqq7AcFVKPUycecq6d-b4sWhAq5D5yIzdD6GcgYEFFxTP1-ugzYSYxNgi2vMFYcDOySdSBSD7iM', 'bearer', '10/31/2023 5:03:03 PM', '7VjynmwOwkWDzbzzFcMG72gL3wG-e8mEgIQIJgtHA1llh4MK1EZYjeUxOyd9YiU0mv1ZFf7WFqLiL2X99qnJ19TahtvV4GmbgdCTYTwCnCcWDYxL3CcGenOiyxnt74EUalOdVeLG26sokBmkIUOQiy08occjIcJbk_z6Jxdnv2DjBGEm5iK6iTom9QXAppgw36l9qSCo2Ah4kJJuv22lyNulaBOLhJdmw3RRUzlBC53fTGIR__SOMLwy0yFCMy3slbZgdkUGUDQ-6zTO5flokUjohUlCBrsTy_ufB8usYIxoPo8S0PtWXDPqZ7XSanbOKwdET2-skl_zdXN7HiaiBgDo-1C64pWw-rbVBThFvOYLL_6a1mm0TLxSUEV0E0hcTnxNIZ6NSiy2YFM5RdiLgHLMoBIa2mITuf-tuXJhtb8xHYZkN7dQcU2esv_U-fJRa_0hDavSLDkJW1xYEqyPzlx4YxCLY5DcYkWvdC2azXyxRzcLuIBodPUd3dz9o3MYdMeUV3sdjAKeyienFOwrXyG2WwY', '10/31/2024 5:03:03 PM', '2022-10-31 14:03:32', '2022-10-31 14:03:32'),
(26, 'b3uxY-ly5a36aj6DlJkTw8Ro4H-VdpTA5UBDSyHGFhMhSsD0pK4d8bO2_6bC0PqgxvnoJNsiIuEKd-OahByDCtVWjsEHgpsGdXwwD0ctLe0UCVrx9B9TItuxCkCQC3weFRMm6i3DtkFt0iwJCB18pFnxpX124ahw11UQKkb52INSuW4TGIaed75wNb7p3gq_f-dq_StPPfcYhO8xHZwUjUij50eT0ZH6JsG8JxBDAb5gqpCSu-FENhrAMYGZKn0ldIAHd7e9cL7eTEb7oJHmujsfN_ao4cRsKUOJwfw8P_lXDz9RFlLNifWv61W90Ze6cROvIFJKfnspyE-eI7bR0vkeYJurrdan_nZgAwljSqqsPC8akhT7w0mIwn08N9XT1Jc9VBVlMlP7BUIlAoj5kgC1_9B9nivyk-vEgcMdyXFylWAhChfgV7_L97kub7F-UO1jBa6N9vSrBQEbik1JHfyYsZ3GQGkO_M2VO72FPgi6RstDOWJD0_gqjvdSQWyvVPJx-9Y05h8wLmhg0-FO1ZZCG3U', 'bearer', '10/31/2023 5:04:19 PM', 'qZzy0Fq7d--ELWNA4o51iZOLE2s93lmCaYG7ZGwDQWTL-ICZZKWG3V-cbE2FcgeGXytEXAgR9hOI0ZEpKSmywlZl1nkYTO6nD2aFXilCE8yHxNMkES4qxYNPe59zrKFW9kyPBS9wJkyBAgcIoDSdQsQOu9OIesLPa9pMeMqGHMvCr4O4CV2ZMnXTwy1lxbgw7XZgPtFct0glFeQ9dQGYadg5mBMT-_AJHHPZbINA_lGRruR7meE7zW9hiuNQP_pGyYzV9Mkip4I5c7X2Fq-QPv1S4qD6QoKE2UaAnHcHvNcyO26-1ht9wJxnC8Wd306wTdh1VenF75gQ9jGQf9VYu3reAUO5o4d41SfooKAtMyMvwdrXo5mYMo_FJkiCTzbifnbE5oXwtE_Eete9xL_jctvuiuJ9owlII56GFSU0KiVxckTrv9a92y4mjwrdl3MUnb8pjQT0k-2BKoEh_secHY4jsML6hE9hJMXBoF0us3yRs5lFWN4AWqIUr8gYuv3D9GAFFUV-XWJYcCCst9ijvdqW11U', '10/31/2024 5:04:19 PM', '2022-10-31 14:04:48', '2022-10-31 14:04:48'),
(27, '0pOo2fnAQ3hMaOkmcslGL-ynzsUpGvJ09xSsgESzInSPMEmxd9k0FOmSJr83BqM90rBor574MaYJdmgyxqWfositxJzMpi2Txh2oZXcWINyttJzzQjWrxFyfbVgSww7Ju_U1WMdvd6hq_zQJoPyhMyXgH96QdcA7tgk1qARQsw_hUgLsGtaaLulmBOnrtNZCAcDy5wxASNOGYtADjVNobmCCMIs5QE62YlIYkTcPbayWxboB1ugteFc6qc08uF-axZb7yAOtX7hE-JOvPLqZF6MkHXEOLhIFvXgjMYJphniF5p6cyNMJ_zl5psKsGL8E_ikDvkEpuLpVlWriqTnVYQziXq7kHBs11iUTF3UJSdXwyPGIW-jwmKEFMW8VIqteCXFBN9LbwV7_39riJotkQARnl9oie-XJkODIV7uXnzXd0R5EB6ic2wbt-jbVeqZikhhpaibqZFXE7jiYhO3fFUFmNgv-bUddFN848_u3bODKaQ3iZRUpMeAKuiaRC-f1rBdGk3V6N-ZTR3Ek8Ew6-WZhUkw', 'bearer', '10/31/2023 5:04:31 PM', 'iIwTSyT375MhR6Gh8YBv4x5H7jlZglivSMPLw6xMFhHK05BbUukbnvA3ioWO_p3Emx1iMX23Lv8k-Wozh1wo3m-H25hTnCL-AvxO0Z725ihhnAltWf4qx-yn2oSv5K0sxOrY4X-iVlwRS2P3aLCE7AB2_MeK_9641azqmu0AcxO3krEVHcTk-tgxKC4WHuYQ2ptNalkNtzFu2YZB8eHVWnNXm1z6T-OkbDddt1CyNOFAyaZHlq7fTYdidDu42vht6BQL7ootk7KM_OoenUVbcmyGP_xBd5qolskPurymPRlL6xkzK-k64wJAnVBTIF0jJ3e4wu3jHkkSscgffULb6E8fCnufnw5TBV-GQXO2q4fXzi_68f_tHaHw08v8G_q4OpU2kCAhE3wrVbG2wjot9CSDY0ItMeKsIB3J_CZf4Zg2H48YnXr2IwYLnThzD-qiT7yzD6j15tZkJRL5zbF90Sfe5kqC54M3O46pDK7HLOmkft7W3_EsJYrX3YAA29uNCfX0Y1VdGcqg83L4p2yNBQ9JjJk', '10/31/2024 5:04:31 PM', '2022-10-31 14:05:00', '2022-10-31 14:05:00'),
(28, 'BWwi75HEQRhI_fawMXySiNeDOMiTZwlKeDZ526c2-NaMHJc3uVeazSjWe7MJxiSCYJ0wKXEBVkqg2I-EgmVabH6McTmy0ftkGLZhiZkLBmZHxyenZMS12sdId9ptxb5jOG4qsQY6FR412j3f2RbfyhkHTULTfRAJNMIgw9QGtvzBxgyoU8LbOktWYR7x6LXtnKBjucLoL12sC_VurSatYd63eJ_NrnV7oo0VnAvJLyd2y_szHFvHQul2jHeuj0Ho9p_O7v8LQOAXACGAtqrQz7DLCV0bZZhO0WU1n3379OXvkQvLpJR5VcDX0KzS-kwgIwq6V1ZdNVGUzawKnnH0oxKwMJbUdAeil2YHmDHYzrq08enbJumeThB62br3JuKzbmEgUW0LqrGZyNGPf2m-rii8w4NqWz0023FbKYf7AwHK1hGx0f1ffwigXtt8s3W6qoO-_7gxuV7lNoxXre5HCZGHacnv72QoLVkTVld-i4Qbvdi2o13I3OsWBDDXeZ4fOTCLdBFdKSs855jq0qppP7Ar5Lw', 'bearer', '10/31/2023 5:04:40 PM', 'LU-Jq0nRpAg-xdyp7aV9GVDAnJHp65OTSTq5yHh26_X77Hm6dwnRHRZ3mHzBefxTt1ZQY-MeTqLDArF5XlBX634hxIZ9rkYfI7izNnQstQMLU4YN1DLynvMAkxMwE2DDlKtCCi34mPbzeG4EJEMdLJKIYgsdKqJCSKWS3AIb8HdZatnn4GYTBMPzUv99wUO4jbRlaoWW8xmE7Ncnuq1qg8lS0wJUuo3d5N5dd7eJi4vhTp1x4wAe9jtE9BMaDC4hKAmHphduj2XNKtgXL-Z9TFz8WHckxlS-rcfoLVxAzLOXZNgO0liZU_v8x2yTuJgNRwPisM93789wOj23oTfgGm1CFDsEkSE3nxt3lESnA6sWXAoxcN1akzWnYmU54z2sOwKIJXngPXSpt-NyJjtFVqql28_bgSIHVP7ksujcXvCYyLwxmZedV_K0Fxmyv4l34BUklMQS45kFm1KO6T1hqH5CQlFyYnDNcYqa_Biu9mGC4-rYxR5EIGpkAbJKz1TytNorLk56KB2nZFR4KYnaccgpi1Y', '10/31/2024 5:04:40 PM', '2022-10-31 14:05:09', '2022-10-31 14:05:09'),
(29, 'py-52ff8_9akeW4B89Lsxsh4Mu7R4f5R-aTqyVnK6X0i1kwbFIyq7XbxVerXIFaRIOCs3DrF68oOW_ek4ia4fACSXfCZvXq81gm9hN6wkLuwidMh0Y4MzvBGnhcOYWEfEzVb9ZJShErKiKQ0dPiZ6vmp02ojSTPcxi-TgPCuBZMcpVrRiF2y_vwZy4Ww73_l05eO0RDbalJxsr1Tirb3v5SxtmyuphFc1RDWvCLZeudG_b-UIWB9NVJPV9cvcJODh5xVMI5xKUqQDnL7l8VFs2gVrDCYCz8kJS9dtzUP4L6TqJl1UEvMCZL2rMjfoOunA9AhXGzoTiogGEYDUzv8lG9t-A4TaGIzBxQvTbbI5kMFklEwuM8WF4ULZTfmdNksXQM-6Z2PhxaVqNf9-2NYZJzeCpRd7SuUn8gUNgWqYqFZ_M5gKof2t_cyoOTSAX7Kv6C7WmespAu0DtSWf4igSyEXcVf5oxCbId1DBthHPUEPlF22oG65BP15ulDMIjGaFpp37_ZedXCsT0HN9pMxFJUyYRI', 'bearer', '10/31/2023 5:14:17 PM', 'NerLYHxHrhUsIeabTjlWz9tD81XI8HW24hAHnMcR9Jnj7qNgPA7JZfSfIPWOHa3hvhNKCLzqA2G0Qm6dHs_8OQjb6mI_afnHy1tLZ5rc-FVQXh5FCpnYa-sNp6RBgUc5Vq9NnOFfwjSsFwmEEIXMwnk2lhrdzpAdkcKpLIkK-eFk1NtVmqzqdybhvSY9VH2OJxKavwzPiyj9e8kxvgdCxpRZtjKe9DLlS1y8ll84zbsdeOvhXS3TrwUWe2sGX6bvTjiUw87aufAuEDekkOG0xOV3yADt7SMWqGB7nuTiHT7y1yoklsRtqa6kNh_KjI3dF88ds3ZlGKgiKbGORGXwewjMPzW_CY2rtJVLGJh6nNhJEY3jg0o1uwgwzG77VIOD6l3sOZ8ngnwxMSAk4_Wvg95J_xUabF5hNVRHrzOsGf9tBc8LS_Ui_AmI_OAea0e_jetCocSBfHuqYaeezJmS70R1MGB9o5_cwmPCeVQn_YkvR38wopXGxaKNPGQk5chtLUGy7qV0_1EEdq0kpcJHl-7t6QQ', '10/31/2024 5:14:17 PM', '2022-10-31 14:14:46', '2022-10-31 14:14:46'),
(30, 'v7oyDSsptg5LK0eJyqeKldSfapv6NXbK4XQ5nBdttGYZTQxRO_ZVDXMuzpIzoH2kQ25S2vATyVHIL2J0TajwNC_f--TUfv9FDUuVSbdhFuCeT5NdoVbG7o1XIUuZCsnpr-s-y5L-vOWVmkj-l7QugOXXX7J8ZCOa6XYZOAp5Zy7oYL3R-tJh_QkrKWui8fkPzwamX2t_efTkI0Y1QUkHYflqbQXhIYAdOu9k-ZNC9YuHyPomMX84ZVDRu3suJ-kAaSwvigAbvSQBfxfg8t--wSjMpgs2ZLChPOIDfb5mFGt5wY8ymeztYV1-d98YsfJ8hAv6XGWMrzJ6RwcWGatww-utpNM2O_R1rz1gokG-ubCHYPi5gG38KiuD2gZG2v6nHBeqkVh9lzuif7440L3ydgDvRLxst4aNPgMOZAOhgoH5cPbYSH3U492dAKkD0E0ANo5buzFkr83-VE6O3It-KX6ji5Hh3LemFmQZJzI5m4gCLsqt9uj3L_1TkP9kfCALpVDAskflXOLcl9iXO0hhcHGZCkk', 'bearer', '10/31/2023 5:21:45 PM', 'CEHREYbZXYt_eEpFwSsxfEbfpdpzAKLYRSR4Z6GoHhxXb7RBtampfFSzMpHDYqtWTso4CY6gdaoVmAs09aPBq6-D09_rrCd0bJP1H88p2XQWjYvl1WQ9RRWAEmpjZHUPnJapsPP1XxeEF3_3QANtjMZRK9p6NkG2N1PNfju_4wx2V0LXfjsnZrFXp8cRWpsQ3PO2NbzU1pVPKVI3-33xJsWiALqxb6NSIHko1RGnjrn6hTPL9XPil5DDU_Ofi9J3pxfpKfVpgOZ_2_YGP8YKvKHqPXUg2r61mOV5QX7nJALkvb3bzFlc-B6R_TkOuAASBdpxchXNL7rPpRsFaOwDJVCG0EvA-L2g193JlIcERKkqDPdwKFD1lVff9Lw1QdvqaaFlRiVg4GCqbj8E4Nh5fppoI4lOD7KZ6opSA87eanY2uTjDw7_65xkCgXeh4GEdDzMxc_f6zq-sKqydvia5BB3gH5y-dimfzXzDaN-7AINzJukBu-jl0EN-uVfVA_bp491-KhgE82p1kTpLDuBKmSETE-0', '10/31/2024 5:21:45 PM', '2022-10-31 14:22:14', '2022-10-31 14:22:14'),
(31, 'hy5g9uqcLIrhvwWBmEWHro8iJbfAUYsiqb563g_RATfUrmhuBlp1z8MiKinhT4GVxPgYUwk68M2eJhOqA8U9-Tj99kr8O0mRxb3hZ7VyvB-XYN2n6W8mSw7sjBxmtluTfZm5DdznEa1q7HYVhp7a4F8_0e0oTgkUVeaX7HMXq5yHZiEEhRZipQJ_D-19bV_3Ri5yUT7ii1CJmNNeb7iQ7z-bKQNJ9JI4gVK1OG0539Y6sMvqdoy36n5TbpqXQ9uliJDd6mZf2Ba6h7aplCguEX-0dauAPp8cIFDhjBVb0-E4QRN0IW46hAeEfG4TxpP4FsrlNsSq03KF1vDVI3ALcf6ltruKb2tx4OvKbkbVDZZWFsRPE31V0NH310ECZcZ6mwpzyIBSJ3kSXBsKt7t34825e4W2hbsL93fiNVrV9bGpHjSa5B1rna8tjnvkND4QCesONFytpTisM36svL9AGxkogooGEjVhV6rrx9Rke5xQO9A4Zqn4wLi07U9cRBYW_G___ULGN6HARUYMa4nGmDwYViM', 'bearer', '10/31/2023 5:32:24 PM', '08wffzrOO9R-IS3IbuWk_xfvqd0p0HJqH_5UKgYjaze9oEC5ElYePeImEFbBhxgNewDKptnj8XG2FPZWRq4jRi5oPqm9bMAATzCbTjQYRJlE9zBIlUfYPySsXOy--Xp7FzEluHFonR_PW_oVcsL4ruNA1vXOJ_rSF4elHr7v_Baxoz7w-lvK7mYFSu0NMFxbHCp3RadTuS3V2PGn-1IFi87hqAWnoeHbEx87XRH3x_b2BkLHiRR684iNV1QKEB8GrfJRdBbYSvftTNRVADpEMNFoHVYWPosqJIlnFZHlHzTDjYYnbp1gWNoRDsPM35jdKusreyRaSktbsfOHKcogqmvbGJ2eAO6f-2YYXBG0lnp-zq7SPFRC2P4T1ryXK4003klt1t2uH99aPkS2E7fPoGw9hwdMjguDGZTcdbIExrx3nOJD6Ir9jM_vKV-pubNlijOlbkCIlVLC7PixxnP6xwh-VQUI8kZLKGvEyEpic4VNqFeWC9W2a_eUAx6Rru4NhDq07tvZL3Z3cAqu7DfAOTNQpY0', '10/31/2024 5:32:24 PM', '2022-10-31 14:32:53', '2022-10-31 14:32:53'),
(32, 'KRIfkgdbfUsXz_U1sQLy-p67OH02rvdwoLMuGKlDVMmuwqwsH7K_DitnUX91YTuD-dv6KXw6TV0phuL1bcCCZNqkVAgTt7ly95RMiPuvSR6BoVgAhEKnqwOuy7m5u_MQhkL5S8BdScJSK01UsWKg5tP7BsNROLHKmdw80-Dfy-XFNN1VRCdCbdMmmsllONWqaXQyhIE7WOFT26B5uG72x3FelHS9M995X9tsDPSQvBQSDMCkIGTztDlxclefrH3lGUWF4EzgKWwLF62cNfaDMup0CGpChYqK0LNO2sQKXxC9McFcOShjLH4L8laWoLTrvHshn2NxNGbJ6mDn_CNJYoQ5CvlBXD0tTW5mKl--J_LZMPxjl8eIA1YL-665d69hOSuNWTXt4bEd0rsFs95O6E61bzpxYpXc_xUv9YyWdtF2UkmG8Nb6XIJ7qHrkP6GKjGfVPD62TBN5pxkW3622VDWkSX42WV1KLVzjfJiucG7UexyIJgleLhBsoPPK87tAmx-S5hWopRTB7zzGEvbjWUCUAYc', 'bearer', '10/31/2023 5:39:00 PM', '4P2oNHhRrnYygW1gJf-wYQcEJLT7TcQJw4Z0hAKV4FbwU2KE09t1tVlgKNn7uvjrv8ur5PoqP-vegW_lPqTBDaKSYMisfqw-82aPyfL0RWRRke2LcJIa46Pp63iM0lD4iIjeqhQw2LB9QjeqtELTH3n95_6i7kpN4Bns3tBjVqr3Fwl5coYv2ebgZLSgu5bxt6YP0scsJgAOkW20RKl2TYAxoFvyZZpU8GLVZuCZvK_sXkePWmz7QbSoEgbVVfDddISO7jeFO5SN41Dxb1YPXuzrwDTFOaDW7Su2Q3m7Pg2f5sCd4P498baUknSOW9IIrzmF-7srHSKuvvccp7H5XDOV986rClqpCIsAjDYQKRD6m8X8dDZW8jEQ6cHoFbfD8EhjMUBfKFC2KX7Wsr7_X_aVF8LqGb-qZi2zrg-sgDTV267-2OovSZGEGxmxCbox53Uo53n_obbvOt-qHPCaxd7di8OGSvGlpcAejSgM8Ys0PY_Bbp8upHXpQuBqlfyVtRlWa1WIo46RC2FGTPkUtSBmYgs', '10/31/2024 5:39:00 PM', '2022-10-31 14:39:29', '2022-10-31 14:39:29'),
(33, 'hCK9hre4LdkI7FeMijM8h44aV4npHYLuqqVtmM8wuJQ-Ukaqp12PtR8Qs6d0RG9VofGsXL2azEhohqvNd4aPk8tMyzhifDj5_YAgmo1WZbC2uKJsVXeQkyWn1jaHWH2pqlw3I3rrzw3CkNCP1Bn92ReACHrxUXR79kyg-C6j1ghmXuu9_oq3D5yzhfvEXf9lrMIpUIWy1URk3VsCKR80DpyLeTJjOuf4_S_0zxEr46-sLAG9QH7Ep_oCbZdufZxy-67J5d9pOgyci11o9C3osnkenfLSwxI8uarzXy3NVcAHmB3ttmZTx0H5yGgztfIPNnEeXEcm-iblsdsc-dP0nGX2h4U1O8FF5pLaUPDQcZ6GUa7I_4W9J-FIKMFVCLbqTEjpts4zRWJ0PgiNpdsnlc-0ElmWe4tNjTvIvXtWFlWjPOPpU6gWXgtL-lcpvyNEXPwS-uiI3rhv2lynKl9VOLCO5QFUmKv76j-xj32T7lDRMCDBRKuBviEmmf4CuRX_VkoHmuP9JjcVp4mo0A1SKrb6duc', 'bearer', '10/31/2023 5:41:05 PM', 'q03Y-xZDoExzLXqrjLE1-tA28tA9PNeAa1Aw7O9xxmlr5BsLXy3KuVE3KjAQIki2gHVR-LjdOBP1oewQWEtFir5S6DFMKpMAkbgbJLxVWXyyRwEcA-T9CjAEdVcE1FxC1JF_bJXYkw4w1ix45xM0HNSZIeCyhNdz-Mbwo1YYR2S6VgkZWmcc76QuAskWqrPNTJEasmD2qfy6gTMMqVUlGwEpgYFKD151kBXMYA0eJ-V7kVCOkJYO7mIHDE7TTOOnK-XgXGWUOaPuqiFpb_WY_6vyOHM2TdjPnRfkl49Ao7GCe3kxkMO77_Fuo5y-JBPArzjvK683Gb86BFrM8qiogKpmiq5jbh9eg5Z6AXHlsPVWI93Dtmm5BqtTrk52IC-FPvElnM9Lg8w5lL_ebNnh_WhW-vINWbHoUT5wbgocedUBZ93_1VwHT5D_pd3gyo0UjGOEDux_D-0BFmhBmksU_nI8S1NwfIwX92_kSfAVkw6Gm6tQIHXol4alJWoNeSib5dcMLj1os3TqvMgexna2MWPInN4', '10/31/2024 5:41:05 PM', '2022-10-31 14:41:34', '2022-10-31 14:41:34'),
(34, 'apOxHmTdnkBsDpdO3VbOzOmD8Nj2qgdMcgsXz6L_banMDzOu2O71LNws-G63dj5JcO8e87CiXx4TuKB5wica7AVQymSVNfWL_qecSNWKsYF-Mnuv2Pf8XwHvQFZeVbmLvMLfCMGI4ZFDpN9y2vDgoAwhR8bT0Lp_7kI5uanMMEAlycTPWp35xB9t_VPaxHzrgu8qsRwGX2mIdHgiZHmONPCzFBtT5Ee83yAUfCPVH-u2j-M1jcPm_pNCKpYEDUBkCvR3tq3mXfD5XaGgruto_ffZROnu8Qe5Ire2imrkvo1spqISET81xz922vXTIgQ4vUkTVVsa_XoD_L6UZbXHAMQ-DXSZlpCD1WIyxFdVkuu_YL7c6wRx0WBYQVkG76PL9A2unRlSGm3NPtB9rlttufFXS54wR_YabzQMfcjaNGAyNizq33maHrQofnNwqyZ01RSuAnOdbAVSRJ1Rh1XCWng8uxOIEUjtlpwnX7GJ8gSZ3zhPHtaGkpUYRsZ4t7GuCccKubrYJWeKoioRUxLoQBtqVeo', 'bearer', '11/1/2023 1:39:09 PM', '2D95Ih9AczT7FbTt9xFW5xhNh2WY9FXSEQz_BW_zFo3mLHz3TqKbSxDp0uyOUepCZDoihCKhO0skEBenXiFe4q_I1H0MNYee-9MwTi9-j52lXSfXqWyN68xIjG8xWO7qn0xfPhV8KLvzjdfmP5al1s6bGWDGu1GDt8cThnmR2ievX0xGpMKxZbV2ZJGrrkbtWIzAUjGXuIUp-pXj5DJeqzqUgsbmyMF4FE4NLE2ovUsAl3LrAimtrWbcQubbznh25O83sd4OTz0Gbz8Nae3zxc1KLzIPveGM6OX84XTZflyFwJqygcs5YzBjNxj2nVarOe9nFhK78PNl88fqeOaEQefUOCs9Bakc74nKNNk_74Q4PT-7Z6iKbZvjFyoIVaL7FsK7mXrSuN5tDlb_494SeQVclGOfjwCLCE9Echmp_RV1-y5HyGZmf30rNzO0Bulmgr3Sy8IP-fAFFEOzZZxMYbnAg3Fy1fh6HAnVaJD-BTvd2jGMQPjPxrsp4eb1WHZO6VUfTuxA0I-SCuY0SEHwdsDlhx4', '11/1/2024 1:39:09 PM', '2022-11-01 10:39:38', '2022-11-01 10:39:38'),
(35, 'h6ePFjcCGV67eZndFX8T-f4ADhSL9ugjTUwXISrUHGrhQh1zxpJhAhGMdYwm_eFFu73vG2VNpAxriAfI_YDjPTeixFp5jgFC6UW5thf5jIf7cRFc9SK9swxPQAqxtkSCFz299WjjqQJlroc36UveV_6bPFPKf3oJYMHK2QG2epVHfDQCSYX7iGUk8Hyu4jp4uGSkhOKP_8TCBzmnI54xKAwBAwMHJFcyc4mXfdEi6F2_-oe12FXxyjR-BJ2RIyjX9c7PVGlyWHaNc_VkE45SPPc-5WSVs88255X6wPkIsW5Cxx6LYe_ZAv8wta1a_8s2SenhoTVznrqrw2onv6j3VlcswPaOoskaJxXCLjYaH0PsBrX2_JDSGy2ZYCmTXkvy3QMwpCLcqKvuSvlv43uqXfziIu_XB7ddqN2-PSzl_EfDZt_nztBm10jfyNiOExlY9A2n3i2AFooHTiMR4kGQsCcuwSFp5qs74BZJ9MERUgTLxj5iaGmXM7xhjB5bEycAg3Qhet4cB_c3wJi4e99USLyYXGs', 'bearer', '11/1/2023 3:53:57 PM', 'SExlsFongupjDxC9pBHgbRZ9jjY4SaJR2FJvf-T1Keb_TDP_S155H4zEmWKHK5vYiPxaTvCmqBe4GIXeyPB48jHoLcijSWCOM4wO5dJgve50JTy03LlavAnWIBj1LKjPNWB01xXcYK9nF9weQbSCUcy6N-K_sq_USeEh8JANqFWQZ0FiPieGI211fROgLruaBNAeXcSiPxx08LK6sP8yr9WUadmNYCbd3AcbbeQP-aQzPaHlWq5Dm7wfpmR31hAsLlkbjH8qV3KONSj4b1_3UxFS1E2N_oPkhkohOOoe1VZe8I0xjFAhDx3wZ7t-5uVDvpuRCJQMilJWDsY4_C0GXvuNxaPetKflzI0g_AraRZz1SxATBJzc8fd__zUXz9hUbMp_lBIEl17lQp21LEUq7Hux0JUfDb0oZ_GesumDvIBysL3tyU-ldBWw5nki4Ye7fgFAEPCBRUZyFE6eAmAMWFKcVibnWlnzuLPKPybw5EYlsQzxlEkTLuEZG2Xh8P8sZpoXb8XE4dW1_qH89S33FbxlwyA', '11/1/2024 3:53:57 PM', '2022-11-01 12:54:25', '2022-11-01 12:54:25'),
(36, '7fddyNA5h8kQM4Meu5Jieejti-imRTVNo5Fcskt6zOLlsEtTQCLIToxb2VZbCn9LVz-D_0BFECULRx-NAsY-xsiZ2JwQCw9svfl4vOSMNzXuV11YHIb6U-GRV-1Tp6hZXYG83Mmm-RcFSJHwrypl5a0IjpW-qB45lp1lwHulHv0ShZVJ2eA525_FDc2Tl2ZJPiYV4-hNleMU_Dz2QmeLC3teh9v7bK7Xjew6s5IrBzmXhTLoq7W5CmxmTkAQSP9v-x_IUszzK9ulDDiCUOood5cFJxcvAiWc4VG3DmY6SBCu2KsSr2aJYWVcHtFhcA1VZTS1y_yWMqxsuuj3H_HV1JfQb4R9quln498sLIg0hARA28MKz7o-ubLEhWwQEzxqYTvryhPSCy10QqJqyCG1b2NM4NwWoF94Ozrt7i3BObmVY_v1npJY2MkrK7gL31e1zGgPSeCiP8WWSQaN3-U5jH5fIzVIv3QG-ql-HX6oDSf9ezsdvitldI-QypWGgQFG5hdvZGaxU0vZ-vltpJabZYQy88g', 'bearer', '11/1/2023 4:00:06 PM', 'CsNnuldJr1lkUdqgfDwLwa1GwA7NOKECA8UqOdPmNKv18P8RFxxaV9TIdT4xW19z8h1On801W2IFesbEpXAJLZNCqGJcwjIIk3NvUSF1UZPnMXcy1PmdlXohD05yX9qttORe6Wn4ABbU66iL9R_hm9djY1uBLME8IQrABA7xGrE7ePWfNMyIgRqwny1WFdjPjfoF8kQChKeLn-5AEbU_Nqb1DEpIObkNYnMqJjlqln7xst6e9imAr7eUwh-30JINupewTPeYvqgAZC91k-zqmXgCtJpcoZcgH-u-v0ml8euC3-yJKPddUyTA9v788Zn1rE2VZgj1lwTAUfSmzuFZ9303vWwMwk59o4i5I6f_jBulzyBEpKeURpmK6DtlB2z31w0GmCwhRKEM51jk54FKEyxyb2IK59RmE0Z1vXLE3d0XuaTkJQ6Pm23zxA5EG-WzfkaeMQwc8pF5mLpL8GwZwm32YKRIBjI3yA77unfyNInRKGr80jsYl3LEY0PWLMjIw3Gp5E_O3kyKdWeYzS1irLm7PbY', '11/1/2024 4:00:06 PM', '2022-11-01 13:00:35', '2022-11-01 13:00:35'),
(37, 'jlTV_iDEWr4Zjj0dxeG9vISfZmUJR1gjXI8M9gQzaicenR5lOiOSdf4wpOcKZsHEl-JhgkRuYuHY4SWuFMPQktkaoaCswMPHCFz2Qk4o2xr_EtCAcLtCbIhS18zPzwbf0aY-yMUCqe_rd8REqh0ZJOL0lmqpF67sQCJgYxQDApQ7IY5nBuZypz0ckSo1kwetVqBY1MzgMCoHlisY4Bod9ztcloIu4cyvWfCPmY_mak9WB0qWE65nEBLEZbQBdnPDYcZiALwdreuexH9LofE6RrbjY5oIF-sbjs00JPy3ep03E5ccyfDRkPQ23VbL6d2_eTPHdR8h4JpXY9eu_kLRxPMXiLMC1DXH6XksCQ9giaZ0lBtZ5Rny9CsAfi9wRzKeifMBAxiEj_BZNlhqOYc7S1dQX6LFaZcjg2uCer4fuQkSXjK06PDDf15VsqOFPB5h_Mlny2mi5tVp4TM6IVd2YfcxRP-n64Hn-dghji1ejZ8IQ4FD6Q7x4OSHt1BEa0PtU0Pt5mzcxAB30rSQ6vOJjwePJ3A', 'bearer', '11/3/2023 4:18:59 PM', 'kZnOt_egItJWB8qoi1z5-lgikeOSUdj4_ddDzD7iTX4Yck_UNXzvEpxGbjMO-uuvoD6pF5_jUJ9JFCepO8Iko9i_Ckebot6n6shzioal8p91SaonvjKTIyoSU6BmYxYRzMwt8Tclgw_5_DPX4UtfD8J8sAQ0JRMbJPrWrSZ19ICPYNS-uT3tNJgpPpP5oqPgEePhnd5HXlVgdvGnHz7jAvQvAwjgbqKHXGlVfo8oYOiNHVVXNBmGsX1xcqdJSdN0UQNbz76w7pNhx5jyX6hWcCxBRaytoLMgP1fDbSOCTmDdGJelpaekTj4TG6vyQk7VeFIlnNCl2q9umKKBK3aOPolmrzmjE9fe0ZwgbDsudTT6RnydPS7noKim3tBSLqA7qDondTj_pOwwBQgXDCjigL8SZrhvkWW6lSk2rb9Yw4bvKeTgsglrXZGIlA-PtmP86c62fPRhsFsLo9whLv65sk6mAoJMz5v_kDnME-XOEJAEmesE0yafKVH0TsLC9WbYKdaBMJwW8J6OohTR6bRAYfw1gsk', '11/3/2024 4:18:59 PM', '2022-11-03 13:19:26', '2022-11-03 13:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `title`, `slug`, `address`, `image`, `created_at`, `updated_at`) VALUES
(52, 'Cambridge, MA', 'cambridge-ma', '<p>Close to Kendall Square and MIT, CarGurus&rsquo; global headquarters are located in one of the country&rsquo;s top tech hubs.</p>', 'location16861377999757299796.png', '2023-06-07 11:36:39', '2023-06-07 11:36:39'),
(53, 'Detroit, MI', 'detroit-mi', '<p>America&rsquo;s automotive capital is home to members of our ad team who work with top auto manufacturers.</p>', 'location168613788311678245981.png', '2023-06-07 11:38:03', '2023-06-07 11:38:03'),
(54, 'Raleigh, NC', 'raleigh-nc', '<p>Located in downtown Raleigh, our newest office is home to a robust research and development center.</p>', 'location16861379395865935268.png', '2023-06-07 11:38:59', '2023-06-07 11:38:59'),
(55, 'London, England', 'london-england', '<p>Pistonheads, a CarGurus company, is based in central London. It&rsquo;s easily accessible via three nearby train stations.</p>', 'location16861379939864994651.png', '2023-06-07 11:39:53', '2023-06-07 11:39:53'),
(56, 'Dublin, Ireland', 'dublin-ireland', '<p>At our European headquarters, you&rsquo;ll find a team dedicated to growing our international business.</p>', 'location168613802410137491985.png', '2023-06-07 11:40:24', '2023-06-07 11:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE `makes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `is_electric` smallint(6) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`id`, `title`, `slug`, `status`, `is_electric`, `created_at`, `updated_at`) VALUES
(62, 'Acura', 'acura', '1', 0, '2023-06-07 09:45:04', '2023-06-07 09:45:04'),
(63, 'Audi', 'audi', '1', 0, '2023-06-07 10:03:43', '2023-06-07 10:03:43'),
(64, 'BMW', 'bmw', '1', 0, '2023-06-07 10:03:57', '2023-06-07 10:03:57'),
(65, 'Chevyy', 'chevyy', '1', 0, '2023-06-07 10:04:14', '2023-06-07 10:04:14'),
(66, 'ferrari', 'ferrari', '1', 0, '2023-06-07 10:04:26', '2023-06-07 10:04:26'),
(68, 'Hummer', 'hummer', '1', 0, '2023-06-07 10:04:49', '2023-06-07 10:04:49'),
(69, 'Civic', 'civic', '1', 0, '2023-06-07 10:05:12', '2023-06-16 07:05:21'),
(70, 'Mazda', 'mazda', '1', 0, '2023-06-07 10:05:25', '2023-06-07 10:05:25'),
(71, 'Mercedes', 'mercedes', '1', 0, '2023-06-07 10:05:36', '2023-06-07 10:05:36'),
(72, 'Rolls-Royce', 'rolls-royce', '1', 0, '2023-06-07 10:05:50', '2023-06-07 10:05:50'),
(73, 'Suzuki', 'suzuki', '1', 0, '2023-06-07 10:06:05', '2023-06-07 10:06:05'),
(74, 'Tesla', 'tesla', '1', 1, '2023-06-07 10:06:16', '2023-06-07 10:06:16'),
(75, 'Toyota', 'toyota', '1', 0, '2023-06-07 10:06:29', '2023-06-07 10:06:29'),
(76, 'Volvo', 'volvo', '1', 0, '2023-06-07 10:06:39', '2023-06-07 10:06:39'),
(77, 'Nissan', 'nissan', '1', 0, '2023-06-08 09:38:37', '2023-06-08 09:38:37'),
(78, 'Dodge', 'dodge', '1', 0, '2023-06-08 09:54:39', '2023-06-08 09:54:39'),
(79, 'Dodge', 'dodge-2', '1', 0, '2023-06-08 09:55:27', '2023-06-08 09:55:27'),
(80, 'Porsche', 'porsche', '1', 0, '2023-06-08 10:39:44', '2023-06-08 10:39:44'),
(81, 'Jeep', 'jeep', '1', 0, '2023-06-08 10:56:04', '2023-06-08 10:56:04'),
(82, 'Chrysler', 'chrysler', '1', 0, '2023-06-08 11:37:56', '2023-06-08 11:37:56'),
(83, 'Civic', 'civic', '1', 0, '2023-06-16 07:04:50', '2023-06-16 07:04:50'),
(85, 'electric car', 'electric-car', '1', 1, '2023-07-04 21:43:23', '2023-07-04 21:43:23'),
(86, 'trsting', 'trsting', '1', 0, '2023-07-04 21:44:27', '2023-07-04 21:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference_id` int(255) DEFAULT NULL,
  `reference_type` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `reference_id`, `reference_type`, `image`, `created_at`, `updated_at`) VALUES
(848, 246, 'blog', 'blog168320088512009878861.jpg', '2023-05-04 09:50:52', '2023-05-04 11:48:05'),
(919, 255, 'blog', 'blog168474619313216815932.jpg', '2023-05-22 09:03:13', '2023-05-22 09:03:13'),
(920, 256, 'blog', 'blog16847463006212657595.jpg', '2023-05-22 09:05:00', '2023-05-22 09:05:00'),
(927, 260, 'blog', 'blog16847533509328898041.jpg', '2023-05-22 11:02:30', '2023-05-22 11:02:30'),
(930, 263, 'blog', 'blog16847546534872816103.jpeg', '2023-05-22 11:24:13', '2023-05-22 11:24:13'),
(952, 67, 'car', 'car16861379245898652938.jpg', '2023-06-07 11:38:44', '2023-06-07 11:38:44'),
(958, 66, 'car', 'car16861371427329743565.jpg', '2023-06-07 12:10:24', '2023-06-07 12:10:24'),
(959, 70, 'car', 'car16861402243815569750.jpg', '2023-06-07 12:17:04', '2023-06-07 12:17:04'),
(960, 70, 'car', 'car168614022411333842005.jpg', '2023-06-07 12:17:04', '2023-06-07 12:17:04'),
(961, 71, 'car', 'car16861406457556092952.jpeg', '2023-06-07 12:24:05', '2023-06-07 12:24:05'),
(962, 71, 'car', 'car16861406451994373514.jpg', '2023-06-07 12:24:05', '2023-06-07 12:24:05'),
(963, 68, 'car', 'car16861387815063077664.jpg', '2023-06-07 13:15:02', '2023-06-07 13:15:02'),
(964, 68, 'car', 'car16861387815117997585.jpg', '2023-06-07 13:15:02', '2023-06-07 13:15:02'),
(965, 72, 'car', 'car16861437628336318961.jpg', '2023-06-07 13:16:02', '2023-06-07 13:16:02'),
(966, 72, 'car', 'car16861437622759512655.jpg', '2023-06-07 13:16:02', '2023-06-07 13:16:02'),
(973, 75, 'car', 'car16862212798363589531.jpeg', '2023-06-08 10:47:59', '2023-06-08 10:47:59'),
(974, 75, 'car', 'car168622127911845256698.jpeg', '2023-06-08 10:47:59', '2023-06-08 10:47:59'),
(975, 75, 'car', 'car16862212795098185834.jpeg', '2023-06-08 10:47:59', '2023-06-08 10:47:59'),
(976, 76, 'car', 'car168622210912278995476.jpeg', '2023-06-08 11:01:49', '2023-06-08 11:01:49'),
(977, 76, 'car', 'car16862221092950714025.jpeg', '2023-06-08 11:01:49', '2023-06-08 11:01:49'),
(978, 76, 'car', 'car16862221094177381973.jpeg', '2023-06-08 11:01:49', '2023-06-08 11:01:49'),
(979, 76, 'car', 'car16862221094544412740.jpeg', '2023-06-08 11:01:49', '2023-06-08 11:01:49'),
(984, 78, 'car', 'car16862229413571246052.jpeg', '2023-06-08 11:15:41', '2023-06-08 11:15:41'),
(985, 78, 'car', 'car16862229416072384238.jpeg', '2023-06-08 11:15:41', '2023-06-08 11:15:41'),
(986, 79, 'car', 'car16862237924471916036.jpeg', '2023-06-08 11:29:52', '2023-06-08 11:29:52'),
(987, 79, 'car', 'car16862237923788506954.jpeg', '2023-06-08 11:29:52', '2023-06-08 11:29:52'),
(988, 79, 'car', 'car1686223792580127478.jpeg', '2023-06-08 11:29:52', '2023-06-08 11:29:52'),
(989, 80, 'car', 'car168622472763193314.jpeg', '2023-06-08 11:45:27', '2023-06-08 11:45:27'),
(990, 80, 'car', 'car16862247271554328687.jpeg', '2023-06-08 11:45:27', '2023-06-08 11:45:27'),
(991, 80, 'car', 'car16862247278379967985.jpeg', '2023-06-08 11:45:27', '2023-06-08 11:45:27'),
(992, 80, 'car', 'car16862247276672519103.jpeg', '2023-06-08 11:45:27', '2023-06-08 11:45:27'),
(1008, 84, 'car', 'car168623144510265202726.jpeg', '2023-06-08 13:37:25', '2023-06-08 13:37:25'),
(1009, 84, 'car', 'car16862314451307578623.jpeg', '2023-06-08 13:37:25', '2023-06-08 13:37:25'),
(1010, 84, 'car', 'car16862314455065642152.jpeg', '2023-06-08 13:37:25', '2023-06-08 13:37:25'),
(1011, 84, 'car', 'car16862314454283432627.jpeg', '2023-06-08 13:37:25', '2023-06-08 13:37:25'),
(1012, 84, 'car', 'car16862314459675736552.jpeg', '2023-06-08 13:37:25', '2023-06-08 13:37:25'),
(1026, 82, 'car', 'car16862291232805599604.jpeg', '2023-06-12 13:12:48', '2023-06-12 13:12:48'),
(1027, 82, 'car', 'car16862291239026471540.jpeg', '2023-06-12 13:12:48', '2023-06-12 13:12:48'),
(1028, 82, 'car', 'car16862291231259532597.jpeg', '2023-06-12 13:12:48', '2023-06-12 13:12:48'),
(1029, 82, 'car', 'car16862291232364809977.jpeg', '2023-06-12 13:12:48', '2023-06-12 13:12:48'),
(1030, 82, 'car', 'car168622912312301483957.jpeg', '2023-06-12 13:12:48', '2023-06-12 13:12:48'),
(1032, 265, 'blog', 'blog168691488410147821880.png', '2023-06-16 11:28:04', '2023-06-16 11:28:04'),
(1033, 266, 'blog', 'blog16869240253862943283.png', '2023-06-16 14:00:25', '2023-06-16 14:00:25'),
(1036, 73, 'car', 'car168621741911014513016.jpeg', '2023-06-21 14:06:08', '2023-06-21 14:06:08'),
(1037, 73, 'car', 'car16862174191796926000.jpeg', '2023-06-21 14:06:08', '2023-06-21 14:06:08'),
(1038, 73, 'car', 'car16862174199319001737.jpeg', '2023-06-21 14:06:08', '2023-06-21 14:06:08'),
(1039, 74, 'car', 'car16862189627050184778.jpeg', '2023-06-21 14:08:16', '2023-06-21 14:08:16'),
(1040, 74, 'car', 'car16862189627088999940.jpeg', '2023-06-21 14:08:16', '2023-06-21 14:08:16'),
(1041, 74, 'car', 'car16862189624642845307.jpeg', '2023-06-21 14:08:16', '2023-06-21 14:08:16'),
(1051, 85, 'car', 'car168623204912479951933.jpeg', '2023-06-30 02:31:05', '2023-06-30 02:31:05'),
(1052, 85, 'car', 'car16862320492209945261.jpeg', '2023-06-30 02:31:05', '2023-06-30 02:31:05'),
(1053, 85, 'car', 'car168623204910141013497.jpeg', '2023-06-30 02:31:05', '2023-06-30 02:31:05'),
(1054, 85, 'car', 'car16862320493556606542.jpeg', '2023-06-30 02:31:05', '2023-06-30 02:31:05'),
(1055, 85, 'car', 'car168623204913284805413.jpeg', '2023-06-30 02:31:05', '2023-06-30 02:31:05'),
(1056, 85, 'car', 'car168623204913799443334.jpeg', '2023-06-30 02:31:05', '2023-06-30 02:31:05'),
(1057, 85, 'car', 'car16862320491048531023.jpeg', '2023-06-30 02:31:05', '2023-06-30 02:31:05'),
(1058, 83, 'car', 'car16862298634089311124.jpeg', '2023-06-30 02:36:21', '2023-06-30 02:36:21'),
(1059, 83, 'car', 'car16862298634925228829.jpeg', '2023-06-30 02:36:21', '2023-06-30 02:36:21'),
(1060, 83, 'car', 'car16862298636188098656.jpeg', '2023-06-30 02:36:21', '2023-06-30 02:36:21'),
(1061, 83, 'car', 'car16862298636420112231.jpeg', '2023-06-30 02:36:21', '2023-06-30 02:36:21'),
(1062, 83, 'car', 'car16862298631435242391.jpeg', '2023-06-30 02:36:21', '2023-06-30 02:36:21'),
(1063, 83, 'car', 'car16862298633691281676.jpeg', '2023-06-30 02:36:21', '2023-06-30 02:36:21'),
(1066, 90, 'car', 'car16883799442704163628.webp', '2023-07-03 10:25:44', '2023-07-03 10:25:44'),
(1067, 90, 'car', 'car16883799446333831911.webp', '2023-07-03 10:25:44', '2023-07-03 10:25:44'),
(1068, 90, 'car', 'car16883799448036852512.webp', '2023-07-03 10:25:44', '2023-07-03 10:25:44'),
(1069, 91, 'car', 'car168838043313726275799.webp', '2023-07-03 10:33:53', '2023-07-03 10:33:53'),
(1070, 91, 'car', 'car16883804332304523330.webp', '2023-07-03 10:33:53', '2023-07-03 10:33:53'),
(1071, 91, 'car', 'car168838043311269143216.webp', '2023-07-03 10:33:53', '2023-07-03 10:33:53'),
(1072, 92, 'car', 'car16883808409494012358.webp', '2023-07-03 10:40:40', '2023-07-03 10:40:40'),
(1073, 92, 'car', 'car168838084011085370416.webp', '2023-07-03 10:40:40', '2023-07-03 10:40:40'),
(1074, 92, 'car', 'car168838084012448365692.webp', '2023-07-03 10:40:40', '2023-07-03 10:40:40'),
(1075, 92, 'car', 'car16883808408909792749.webp', '2023-07-03 10:40:40', '2023-07-03 10:40:40'),
(1076, 93, 'car', 'car1688381313730226618.webp', '2023-07-03 10:48:33', '2023-07-03 10:48:33'),
(1077, 93, 'car', 'car1688381313414134071.webp', '2023-07-03 10:48:33', '2023-07-03 10:48:33'),
(1078, 93, 'car', 'car168838131310460855332.webp', '2023-07-03 10:48:33', '2023-07-03 10:48:33'),
(1079, 93, 'car', 'car168838131312575549139.webp', '2023-07-03 10:48:33', '2023-07-03 10:48:33'),
(1080, 94, 'car', 'car16883816534728679234.webp', '2023-07-03 10:54:13', '2023-07-03 10:54:13'),
(1081, 94, 'car', 'car168838165313099749531.webp', '2023-07-03 10:54:13', '2023-07-03 10:54:13'),
(1082, 94, 'car', 'car16883816534643084355.webp', '2023-07-03 10:54:13', '2023-07-03 10:54:13'),
(1083, 95, 'car', 'car16883816586390897997.webp', '2023-07-03 10:54:18', '2023-07-03 10:54:18'),
(1084, 95, 'car', 'car16883816581477907283.webp', '2023-07-03 10:54:18', '2023-07-03 10:54:18'),
(1085, 95, 'car', 'car16883816588942223280.webp', '2023-07-03 10:54:18', '2023-07-03 10:54:18'),
(1086, 96, 'car', 'car168838221410253561152.webp', '2023-07-03 11:03:34', '2023-07-03 11:03:34'),
(1087, 96, 'car', 'car16883822141647934455.webp', '2023-07-03 11:03:34', '2023-07-03 11:03:34'),
(1088, 96, 'car', 'car168838221413401441413.webp', '2023-07-03 11:03:34', '2023-07-03 11:03:34'),
(1089, 97, 'car', 'car16885057489968093382.jpg', '2023-07-04 21:22:28', '2023-07-04 21:22:28'),
(1090, 267, 'blog', 'blog1688510852629854984.jpeg', '2023-07-04 22:19:06', '2023-07-04 22:47:32'),
(1091, 268, 'blog', 'blog16885107444868540833.jpg', '2023-07-04 22:21:07', '2023-07-04 22:45:44'),
(1092, 269, 'blog', 'blog16892308353138001573.jpg', '2023-07-13 06:47:15', '2023-07-13 06:47:15'),
(1093, 1, 'pressRoom', NULL, '2023-07-14 21:41:12', '2023-07-14 21:41:12'),
(1094, 2, 'pressRoom', 'pressRoom16893710002798530323.jpg', '2023-07-14 21:43:20', '2023-07-14 21:43:20'),
(1095, 3, 'pressRoom', 'pressRoom16893710859350305244.jpg', '2023-07-14 21:44:45', '2023-07-14 21:44:45'),
(1096, 270, 'blog', 'blog169032187512824064889.png', '2023-07-25 21:51:15', '2023-07-25 21:51:15'),
(1097, 271, 'blog', 'blog16903219944765035975.jpg', '2023-07-25 21:53:14', '2023-07-25 21:53:14'),
(1098, 1, 'event', 'event16906519063035845571.jpg', '2023-07-29 17:31:46', '2023-07-29 17:31:46'),
(1099, 2, 'event', 'event16906524312120606113.jpg', '2023-07-29 17:40:31', '2023-07-29 17:40:31'),
(1100, 1, 'event', 'event16906534142987171998.jpg', '2023-07-29 17:56:54', '2023-07-29 17:56:54'),
(1101, 2, 'event', NULL, '2023-07-29 17:58:47', '2023-07-29 17:58:47'),
(1102, 272, 'blog', 'blog169075449533604452.jpg', '2023-07-30 22:00:16', '2023-07-30 22:01:35'),
(1103, 273, 'blog', 'blog16907544721479998841.jpg', '2023-07-30 22:01:12', '2023-07-30 22:01:12'),
(1104, 274, 'blog', NULL, '2023-07-31 22:05:29', '2023-07-31 22:05:29'),
(1105, 64, 'car', 'car16861356899703399339.jpg', '2023-08-02 23:59:59', '2023-08-02 23:59:59'),
(1106, 64, 'car', 'car16861356897691126655.jpg', '2023-08-02 23:59:59', '2023-08-02 23:59:59'),
(1107, 275, 'blog', 'blog169152653813564825065.jpg', '2023-08-08 20:28:58', '2023-08-08 20:28:58'),
(1108, 276, 'blog', 'blog16915281812920072505.jpg', '2023-08-08 20:56:21', '2023-08-08 20:56:21'),
(1109, 277, 'blog', NULL, '2023-08-13 21:53:35', '2023-08-13 21:53:35'),
(1110, 278, 'blog', 'blog169196598212296886814.jpg', '2023-08-13 22:33:02', '2023-08-13 22:33:02'),
(1111, 279, 'blog', NULL, '2023-08-13 22:33:59', '2023-08-13 22:33:59'),
(1112, 98, 'car', 'car16920390344574477735.jpeg', '2023-08-14 18:50:34', '2023-08-14 18:50:34'),
(1113, 98, 'car', 'car16920390349601190771.jpeg', '2023-08-14 18:50:34', '2023-08-14 18:50:34'),
(1114, 98, 'car', 'car16920390349209579874.jpeg', '2023-08-14 18:50:34', '2023-08-14 18:50:34'),
(1115, 98, 'car', 'car16920390347470121637.jpeg', '2023-08-14 18:50:34', '2023-08-14 18:50:34'),
(1116, 86, 'car', 'car16862327036430609977.jpeg', '2023-08-23 16:44:26', '2023-08-23 16:44:26'),
(1117, 86, 'car', 'car16862327031392240023.jpeg', '2023-08-23 16:44:26', '2023-08-23 16:44:26'),
(1118, 86, 'car', 'car16862327036052958133.jpeg', '2023-08-23 16:44:26', '2023-08-23 16:44:26'),
(1119, 86, 'car', 'car16862327039138191816.jpeg', '2023-08-23 16:44:26', '2023-08-23 16:44:26'),
(1120, 86, 'car', 'car168623270311943894828.jpeg', '2023-08-23 16:44:26', '2023-08-23 16:44:26'),
(1121, 86, 'car', 'car16862327033979294286.jpeg', '2023-08-23 16:44:26', '2023-08-23 16:44:26'),
(1125, 1, 'Expert_Review', 'expertReview169325930712880664026.png', '2023-08-28 21:48:27', '2023-08-28 21:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `receiver` bigint(20) UNSIGNED NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(191) DEFAULT NULL,
  `file_name` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `user_id`, `receiver`, `is_seen`, `created_at`, `updated_at`, `file`, `file_name`) VALUES
(1, 'Qui qui velit et pariatur accusamus dolorem sed.', 1, 2, 1, '2023-06-09 13:57:10', '2023-06-09 13:57:10', NULL, NULL),
(2, 'Fugit consequatur doloribus cumque alias.', 2, 1, 1, '2023-06-09 13:57:10', '2023-06-09 13:57:10', NULL, NULL),
(51, 'asda', 6, 3, 1, '2023-07-04 23:38:19', '2023-09-10 21:03:23', NULL, NULL),
(52, 'hi', 3, 20, 0, '2023-07-05 08:37:19', '2023-07-05 08:37:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_13_203232_create_permission_tables', 2),
(6, '2022_10_15_195243_create_orders_table', 3),
(7, '2022_10_20_084220_lafasta_access', 4),
(8, '2023_07_05_192737_create_states_table', 5),
(9, '2023_07_06_135555_create_sell_car_logs_table', 6),
(11, '2023_07_08_223954_create_sell_car_more_details_table', 7),
(13, '2023_07_14_200532_create_press_rooms_table', 8),
(14, '2023_07_14_223410_alter_table_review_add_dealer', 9),
(16, '2023_07_24_215838_create_dealer_details_table', 10),
(19, '2023_07_14_200516_create_events_table', 11),
(21, '2023_07_30_212312_a_lter_table_review_add_deleted_at', 12),
(22, '2023_07_31_211430_create_blog_page_categories_table', 13),
(23, '2023_08_08_214336_add_register_url_column_to_event', 14),
(24, '2023_08_13_214203_alter_table_blogs_add_written_by_column', 15),
(26, '2023_08_19_145641_create_expert_reviews_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(10) UNSIGNED NOT NULL,
  `make_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `make_id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(36, 62, 'RLX', 'rlx', 1, '2023-06-07 10:15:35', '2023-06-07 10:15:35'),
(37, 63, 'A3', 'a3', 1, '2023-06-07 10:16:41', '2023-06-07 10:16:41'),
(38, 63, 'A4', 'a4', 1, '2023-06-07 10:16:53', '2023-06-07 10:16:53'),
(39, 63, 'Allroad', 'allroad', 1, '2023-06-07 10:17:09', '2023-06-07 10:17:09'),
(40, 64, '6 Series', '6-series', 1, '2023-06-07 10:17:45', '2023-06-07 10:17:45'),
(41, 64, 'ActiveHybrid 3', 'activehybrid-3', 1, '2023-06-07 10:18:06', '2023-06-07 10:18:06'),
(42, 65, 'Avalanche', 'avalanche', 1, '2023-06-07 10:18:52', '2023-06-07 10:18:52'),
(43, 66, '360 Spider', '360-spider', 1, '2023-06-07 10:19:23', '2023-06-07 10:19:23'),
(44, 66, '365 GTC/4', '365-gtc4', 1, '2023-06-07 10:19:39', '2023-06-07 10:19:39'),
(47, 68, 'H2 base', 'h2-base', 1, '2023-06-07 10:21:17', '2023-06-07 10:21:17'),
(49, 69, 'Interceptor', 'interceptor', 1, '2023-06-07 10:22:05', '2023-06-07 10:22:05'),
(50, 70, 'B-Series', 'b-series', 1, '2023-06-07 10:22:33', '2023-06-07 10:22:33'),
(51, 71, '190 Class', '190-class', 1, '2023-06-07 10:23:09', '2023-06-07 10:23:09'),
(52, 71, '300 Class', '300-class', 1, '2023-06-07 10:23:21', '2023-06-07 10:23:21'),
(53, 72, 'Phantom', 'phantom', 1, '2023-06-07 10:25:13', '2023-06-07 10:25:13'),
(54, 72, 'Cullinan', 'cullinan', 1, '2023-06-07 10:26:06', '2023-06-07 10:26:06'),
(55, 72, 'Dawn', 'dawn', 1, '2023-06-07 10:26:23', '2023-06-07 10:26:23'),
(56, 73, 'Equator', 'equator', 1, '2023-06-07 10:27:39', '2023-06-07 10:27:39'),
(57, 73, 'Forenza', 'forenza', 1, '2023-06-07 10:27:51', '2023-06-07 10:27:51'),
(58, 74, 'Model X', 'model-x', 1, '2023-06-07 10:28:18', '2023-06-07 10:28:18'),
(59, 75, 'Avalon', 'avalon', 1, '2023-06-07 10:28:44', '2023-06-07 10:28:44'),
(60, 75, 'Corolla', 'corolla', 1, '2023-06-07 10:28:57', '2023-06-07 10:28:57'),
(61, 75, 'Hundai', 'hundai', 1, '2023-06-07 10:29:16', '2023-06-07 10:29:16'),
(62, 76, 'Jetta', 'jetta', 1, '2023-06-07 10:29:44', '2023-06-07 10:29:44'),
(63, 77, 'TItan', 'titan', 1, '2023-06-08 09:39:11', '2023-06-16 12:38:47'),
(64, 78, 'Challenger', 'challenger', 1, '2023-06-08 09:57:00', '2023-06-08 09:57:00'),
(65, 80, '911', '911', 1, '2023-06-08 10:40:50', '2023-06-08 10:40:50'),
(68, 64, 'Cooper', 'cooper', 1, '2023-06-08 11:12:10', '2023-06-08 11:12:10'),
(69, 71, 'SL-Class', 'sl-class', 1, '2023-06-08 11:19:59', '2023-06-08 11:19:59'),
(70, 82, 'Pacifica', 'pacifica', 1, '2023-06-08 11:38:37', '2023-06-08 11:38:37'),
(78, 85, 'testing model for electric', 'testing-model-for-electric', 1, '2023-07-04 21:45:28', '2023-07-04 21:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(5, 'App\\Models\\User', 13),
(5, 'App\\Models\\User', 15),
(5, 'App\\Models\\User', 11),
(6, 'App\\Models\\User', 16),
(6, 'App\\Models\\User', 17),
(5, 'App\\Models\\User', 18),
(5, 'App\\Models\\User', 19),
(5, 'App\\Models\\User', 20),
(5, 'App\\Models\\User', 21),
(5, 'App\\Models\\User', 12),
(5, 'App\\Models\\User', 23),
(5, 'App\\Models\\User', 24),
(2, 'App\\Models\\User', 25),
(2, 'App\\Models\\User', 22),
(2, 'App\\Models\\User', 6),
(1, 'App\\Models\\User', 3),
(11, 'App\\Models\\User', 31);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `read_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `read_at`, `created_at`, `updated_at`) VALUES
(13, 'recruiter@gmail.com', NULL, '2023-01-20 12:33:05', '2023-01-20 12:33:05'),
(25, 'admin@gmail.com', NULL, '2023-05-27 13:35:38', '2023-05-27 13:35:38'),
(26, 'pexam@mailinator.com', NULL, '2023-05-27 13:44:03', '2023-05-27 13:44:03'),
(27, 'sammy@gmail.com', NULL, '2023-05-29 19:26:09', '2023-05-29 19:26:09'),
(28, 'atongsangk@gmail.com', NULL, '2023-05-29 19:26:49', '2023-05-29 19:26:49'),
(31, 'fnnff@rgkmgkmrkg.com', NULL, '2023-06-06 12:46:55', '2023-06-06 12:46:55'),
(32, 'hunain@gmail.com', NULL, '2023-06-08 07:21:25', '2023-06-08 07:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `order_number` int(11) NOT NULL,
  `shipment_id` int(11) DEFAULT NULL,
  `financial_status` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `total_item` varchar(255) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `order_number`, `shipment_id`, `financial_status`, `total_price`, `currency`, `total_item`, `delivery`, `order_date`, `created_at`, `updated_at`) VALUES
(1, '5184041058465', 1584, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2022-10-15T20:28:00+03:00', '2022-10-15 16:56:55', '2022-10-15 16:56:55'),
(2, '5184031948961', 1583, NULL, 'paid', '215.28', 'SAR', '2', 'Standard', '2022-10-15T20:22:56+03:00', '2022-10-15 16:56:55', '2022-10-15 16:56:55'),
(3, '5111060398241', 1524, NULL, 'pending', '327.00', 'SAR', '1', 'Standard', '2022-08-20T19:32:47+03:00', '2022-10-15 16:56:55', '2022-10-15 16:56:55'),
(4, '5111008460961', 1523, NULL, 'pending', '327.00', 'SAR', '1', 'Standard', '2022-08-20T18:45:32+03:00', '2022-10-15 16:56:55', '2022-10-15 16:56:55'),
(5, '5187679092897', 1588, NULL, 'paid', '121.20', 'SAR', '1', 'Standard', '2022-10-18T16:49:16+03:00', '2022-10-18 10:18:35', '2022-10-18 10:18:35'),
(6, '5191427031201', 1589, 100559425, 'paid', '719.00', 'SAR', '7', 'Standard', '2022-10-21T14:50:03+03:00', '2022-10-31 12:48:47', '2022-11-01 13:00:36'),
(7, '5192622473377', 1590, NULL, 'paid', '1013.00', 'SAR', '7', 'Standard', '2022-10-22T12:51:04+03:00', '2022-10-31 12:48:47', '2022-10-31 12:48:47'),
(8, '5192926560417', 1591, 100555600, 'paid', '327.00', 'SAR', '1', 'Standard', '2022-10-22T18:41:36+03:00', '2022-10-31 12:48:47', '2022-10-31 14:41:36'),
(9, '5194177839265', 1592, NULL, 'paid', '327.00', 'SAR', '3', 'Standard', '2022-10-23T19:12:08+03:00', '2022-11-01 10:33:59', '2022-11-01 10:33:59'),
(10, '5197962739873', 1593, NULL, 'paid', '621.00', 'SAR', '3', 'Standard', '2022-10-26T18:12:58+03:00', '2022-11-01 10:33:59', '2022-11-01 10:33:59'),
(11, '5199116533921', 1594, NULL, 'paid', '124.14', 'SAR', '1', 'Standard', '2022-10-27T15:21:58+03:00', '2022-11-01 10:33:59', '2022-11-01 10:33:59'),
(12, '5202116903073', 1595, NULL, 'paid', '121.20', 'SAR', '1', 'Standard', '2022-10-29T13:01:25+03:00', '2022-11-01 10:33:59', '2022-11-01 10:33:59'),
(17, '5203412549793', 1596, NULL, 'paid', '327.00', 'SAR', '1', 'Standard', '2022-10-30T13:38:49+03:00', '2022-11-01 13:00:08', '2022-11-01 13:00:08'),
(18, '5205073297569', 1597, NULL, 'paid', '327.00', 'SAR', '3', 'Standard', '2022-10-31T19:18:11+03:00', '2022-11-01 13:00:08', '2022-11-01 13:00:08'),
(19, '5206258876577', 1598, 100564602, 'paid', '327.00', 'SAR', '1', 'Standard', '2022-11-01T15:58:18+03:00', '2022-11-01 13:00:08', '2022-11-03 13:19:28'),
(20, '5212755230881', 1599, NULL, 'paid', '297.60', 'SAR', '3', 'Standard', '2022-11-05T23:57:02+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(21, '5212771811489', 1600, NULL, 'paid', '297.60', 'SAR', '1', 'Standard', '2022-11-06T00:07:12+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(22, '5215063965857', 1601, NULL, 'paid', '327.00', 'SAR', '1', 'Standard', '2022-11-07T13:21:12+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(23, '5215727583393', 1602, NULL, 'paid', '215.28', 'SAR', '1', 'Standard', '2022-11-07T23:29:33+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(24, '5222400131233', 1603, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2022-11-11T15:00:27+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(25, '5222486704289', 1604, NULL, 'paid', '621.00', 'SAR', '5', 'Standard', '2022-11-11T16:30:19+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(26, '5224568324257', 1605, NULL, 'paid', '327.00', 'SAR', '3', 'Standard', '2022-11-12T20:49:39+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(27, '5225105260705', 1606, NULL, 'paid', '397.56', 'SAR', '2', 'Standard', '2022-11-13T02:32:18+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(28, '5227569119393', 1607, NULL, 'paid', '124.14', 'SAR', '1', 'Standard', '2022-11-14T16:05:37+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(29, '5228871876769', 1608, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2022-11-15T13:47:12+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(30, '5229059375265', 1609, NULL, 'paid', '397.56', 'SAR', '4', 'Standard', '2022-11-15T17:20:04+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(31, '5232751804577', 1610, NULL, 'paid', '306.42', 'SAR', '1', 'Standard', '2022-11-17T21:23:07+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(32, '5239492411553', 1611, NULL, 'paid', '425.00', 'SAR', '4', 'Standard', '2022-11-21T17:19:51+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(33, '5243578220705', 1612, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2022-11-23T17:27:53+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(34, '5245279174817', 1613, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-11-24T14:31:22+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(35, '5245349265569', 1614, NULL, 'paid', '278.00', 'SAR', '1', 'Standard', '2022-11-24T15:32:21+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(36, '5245350772897', 1615, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-11-24T15:33:33+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(37, '5246233673889', 1616, NULL, 'paid', '425.00', 'SAR', '2', 'Standard', '2022-11-25T00:57:15+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(38, '5247439175841', 1617, NULL, 'paid', '327.00', 'SAR', '1', 'Standard', '2022-11-25T11:47:02+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(39, '5251772580001', 1618, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-11-26T12:21:12+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(40, '5251811901601', 1619, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-11-26T12:52:59+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(41, '5251823665313', 1620, NULL, 'paid', '294.00', 'SAR', '1', 'Standard', '2022-11-26T13:02:32+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(42, '5252042457249', 1621, NULL, 'paid', '327.00', 'SAR', '2', 'Standard', '2022-11-26T15:46:12+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(43, '5252413915297', 1622, NULL, 'paid', '196.00', 'SAR', '1', 'Standard', '2022-11-26T18:53:04+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(44, '5252498325665', 1623, NULL, 'paid', '294.00', 'SAR', '3', 'Standard', '2022-11-26T19:28:37+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(45, '5252611113121', 1624, NULL, 'paid', '196.00', 'SAR', '2', 'Standard', '2022-11-26T20:14:25+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(46, '5253110464673', 1625, NULL, 'paid', '327.00', 'SAR', '1', 'Standard', '2022-11-26T23:39:04+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(47, '5254134825121', 1626, NULL, 'paid', '278.00', 'SAR', '1', 'Standard', '2022-11-27T11:07:05+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(48, '5255114916001', 1627, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-11-27T21:04:41+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(49, '5255395344545', 1628, NULL, 'paid', '153.00', 'SAR', '2', 'Standard', '2022-11-27T23:05:26+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(50, '5256893137057', 1629, NULL, 'paid', '196.00', 'SAR', '2', 'Standard', '2022-11-28T14:03:10+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(51, '5257682157729', 1630, NULL, 'paid', '1013.00', 'SAR', '2', 'Standard', '2022-11-28T20:54:28+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(52, '5257905078433', 1631, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-11-28T21:38:05+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(53, '5258038182049', 1632, NULL, 'paid', '327.00', 'SAR', '1', 'Standard', '2022-11-28T22:26:01+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(54, '5259467227297', 1633, NULL, 'paid', '153.00', 'SAR', '2', 'Standard', '2022-11-29T08:13:56+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(55, '5260095127713', 1634, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2022-11-29T17:47:48+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(56, '5260289736865', 1635, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2022-11-29T20:07:54+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(57, '5261385826465', 1636, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2022-11-30T10:36:43+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(58, '5261600555169', 1637, NULL, 'paid', '425.00', 'SAR', '1', 'Standard', '2022-11-30T14:40:08+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(59, '5261781860513', 1638, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2022-11-30T17:21:37+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(60, '5261794410657', 1639, NULL, 'paid', '327.00', 'SAR', '3', 'Standard', '2022-11-30T17:31:56+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(61, '5261814202529', 1640, NULL, 'paid', '278.00', 'SAR', '1', 'Standard', '2022-11-30T17:47:27+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(62, '5261847855265', 1641, NULL, 'paid', '294.00', 'SAR', '1', 'Standard', '2022-11-30T18:11:41+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(63, '5261889601697', 1642, NULL, 'paid', '297.60', 'SAR', '1', 'Standard', '2022-11-30T18:42:32+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(64, '5261890683041', 1643, NULL, 'paid', '88.00', 'SAR', '1', 'Standard', '2022-11-30T18:43:21+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(65, '5262361723041', 1644, NULL, 'paid', '278.00', 'SAR', '1', 'Standard', '2022-11-30T23:56:22+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(66, '5263482093729', 1645, NULL, 'paid', '327.00', 'SAR', '1', 'Standard', '2022-12-01T14:59:26+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(67, '5263503294625', 1646, NULL, 'paid', '186.00', 'SAR', '2', 'Standard', '2022-12-01T15:20:07+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(68, '5263514534049', 1647, NULL, 'paid', '278.00', 'SAR', '1', 'Standard', '2022-12-01T15:31:05+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(69, '5263588229281', 1648, NULL, 'paid', '425.00', 'SAR', '2', 'Standard', '2022-12-01T16:39:50+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(70, '5263814131873', 1649, NULL, 'paid', '294.00', 'SAR', '1', 'Standard', '2022-12-01T19:40:21+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(71, '5264132079777', 1650, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-12-01T23:25:26+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(72, '5264138862753', 1651, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-12-01T23:30:09+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(73, '5264174186657', 1652, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2022-12-01T23:54:06+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(74, '5264261906593', 1653, NULL, 'paid', '215.00', 'SAR', '1', 'Standard', '2022-12-02T00:54:43+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(75, '5264856350881', 1654, NULL, 'paid', '215.00', 'SAR', '1', 'Standard', '2022-12-02T09:44:15+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(76, '5264911827105', 1655, NULL, 'paid', '248.00', 'SAR', '1', 'Standard', '2022-12-02T11:03:41+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(77, '5264971464865', 1656, NULL, 'paid', '196.00', 'SAR', '1', 'Standard', '2022-12-02T12:00:04+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(78, '5265029234849', 1657, NULL, 'paid', '196.00', 'SAR', '2', 'Standard', '2022-12-02T13:19:03+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(79, '5265076879521', 1658, NULL, 'paid', '215.00', 'SAR', '1', 'Standard', '2022-12-02T14:15:39+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(80, '5265485398177', 1659, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2022-12-02T19:42:15+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(81, '5265493721249', 1660, NULL, 'paid', '392.00', 'SAR', '2', 'Standard', '2022-12-02T19:47:27+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(82, '5265531895969', 1661, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-12-02T20:11:34+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(83, '5265624432801', 1662, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-12-02T21:08:39+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(84, '5265629544609', 1663, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-12-02T21:11:45+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(85, '5266384355489', 1664, NULL, 'paid', '278.00', 'SAR', '1', 'Standard', '2022-12-03T06:06:53+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(86, '5266548785313', 1665, NULL, 'paid', '196.00', 'SAR', '2', 'Standard', '2022-12-03T09:05:22+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(87, '5266560876705', 1666, NULL, 'paid', '251.00', 'SAR', '3', 'Standard', '2022-12-03T09:23:09+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(88, '5266672484513', 1667, NULL, 'paid', '196.00', 'SAR', '2', 'Standard', '2022-12-03T11:48:35+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(89, '5266877251745', 1668, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2022-12-03T15:35:33+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(90, '5266928435361', 1669, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-12-03T16:20:34+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(91, '5266961465505', 1670, NULL, 'paid', '411.00', 'SAR', '3', 'Standard', '2022-12-03T16:46:37+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(92, '5266973196449', 1671, NULL, 'paid', '294.00', 'SAR', '1', 'Standard', '2022-12-03T16:54:47+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(93, '5267019268257', 1672, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-12-03T17:26:56+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(94, '5267270008993', 1673, NULL, 'paid', '98.00', 'SAR', '1', 'Standard', '2022-12-03T20:02:36+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(95, '5267593429153', 1674, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2022-12-03T22:57:29+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(96, '5268382548129', 1675, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-04T09:30:47+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(97, '5268823638177', 1676, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-04T17:43:56+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(98, '5269086208161', 1677, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-04T20:15:55+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(99, '5269087092897', 1678, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-04T20:16:24+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(100, '5269478637729', 1679, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2022-12-04T23:45:54+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(101, '5270404726945', 1680, NULL, 'paid', '392.00', 'SAR', '1', 'Free Shipping', '2022-12-05T12:42:53+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(102, '5271495770273', 1681, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2022-12-06T01:54:50+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(103, '5271518281889', 1682, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-06T02:13:34+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(104, '5274234257569', 1683, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2022-12-07T15:07:49+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(105, '5276004548769', 1684, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-08T13:56:53+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(106, '5276186476705', 1685, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-08T16:47:03+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(107, '5278001856673', 1686, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-09T16:58:24+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(108, '5278002544801', 1687, NULL, 'paid', '294.00', 'SAR', '3', 'Free Shipping', '2022-12-09T16:59:00+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(109, '5279206506657', 1688, NULL, 'paid', '392.00', 'SAR', '4', 'Free Shipping', '2022-12-10T06:26:20+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(110, '5279934578849', 1689, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-10T18:29:43+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(111, '5279944048801', 1690, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-10T18:34:43+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(112, '5281968619681', 1691, NULL, 'paid', '251.00', 'SAR', '3', 'Free Shipping', '2022-12-11T20:03:58+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(113, '5284286300321', 1692, NULL, 'paid', '294.00', 'SAR', '3', 'Free Shipping', '2022-12-12T23:26:36+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(114, '5286133530785', 1693, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2022-12-13T23:18:35+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(115, '5287107166369', 1694, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-14T12:44:50+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(116, '5287518109857', 1695, NULL, 'paid', '294.00', 'SAR', '2', 'Free Shipping', '2022-12-14T19:03:15+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(117, '5288726724769', 1696, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2022-12-15T09:53:32+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(118, '5292525650081', 1697, NULL, 'paid', '392.00', 'SAR', '2', 'Free Shipping', '2022-12-17T14:54:36+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(119, '5294241022113', 1698, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-18T14:19:02+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(120, '5297398546593', 1699, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2022-12-20T11:22:21+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(121, '5297803362465', 1700, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2022-12-20T18:34:09+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(122, '5298130911393', 1701, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-20T22:46:17+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(123, '5298741936289', 1702, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2022-12-21T07:39:21+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(124, '5300395933857', 1703, NULL, 'paid', '368.00', 'SAR', '3', 'Free Shipping', '2022-12-22T12:34:08+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(125, '5300610007201', 1704, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-22T17:25:12+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(126, '5300786102433', 1705, NULL, 'paid', '588.00', 'SAR', '4', 'Free Shipping', '2022-12-22T20:07:15+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(127, '5301027930273', 1706, NULL, 'paid', '294.00', 'SAR', '2', 'Free Shipping', '2022-12-22T23:31:46+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(128, '5301901459617', 1707, NULL, 'paid', '229.00', 'SAR', '1', 'Standard', '2022-12-23T17:01:56+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(129, '5301934555297', 1708, NULL, 'paid', '392.00', 'SAR', '4', 'Free Shipping', '2022-12-23T17:37:32+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(130, '5303001153697', 1709, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-24T14:22:54+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(131, '5303230103713', 1710, NULL, 'paid', '294.00', 'SAR', '3', 'Free Shipping', '2022-12-24T19:46:55+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(132, '5303473537185', 1711, NULL, 'paid', '294.00', 'SAR', '3', 'Free Shipping', '2022-12-25T00:34:27+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(133, '5304637227169', 1712, NULL, 'paid', '209.40', 'SAR', '2', 'Standard', '2022-12-25T15:17:10+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(134, '5304724455585', 1713, NULL, 'paid', '294.00', 'SAR', '2', 'Free Shipping', '2022-12-25T17:23:02+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(135, '5305550471329', 1714, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2022-12-26T11:08:43+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(136, '5307429879969', 1715, NULL, 'paid', '264.60', 'SAR', '1', 'Free Shipping', '2022-12-27T18:37:53+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(137, '5307475001505', 1716, NULL, 'paid', '248.00', 'SAR', '1', 'Standard', '2022-12-27T19:17:32+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(138, '5308705374369', 1717, NULL, 'paid', '248.00', 'SAR', '1', 'Standard', '2022-12-28T15:41:56+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(139, '5309476470945', 1718, NULL, 'paid', '333.20', 'SAR', '4', 'Free Shipping', '2022-12-29T02:46:25+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(140, '5310100439201', 1719, NULL, 'paid', '333.20', 'SAR', '4', 'Free Shipping', '2022-12-29T15:44:00+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(141, '5310136713377', 1720, NULL, 'paid', '333.20', 'SAR', '2', 'Free Shipping', '2022-12-29T16:32:55+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(142, '5310200414369', 1721, NULL, 'paid', '248.00', 'SAR', '1', 'Standard', '2022-12-29T17:45:10+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(143, '5310230331553', 1722, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2022-12-29T18:16:18+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(144, '5310271258785', 1723, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-29T18:53:13+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(145, '5311336448161', 1724, NULL, 'paid', '282.90', 'SAR', '1', 'Standard', '2022-12-30T13:18:42+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(146, '5311418433697', 1725, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2022-12-30T15:02:32+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(147, '5311691391137', 1726, NULL, 'paid', '333.20', 'SAR', '2', 'Free Shipping', '2022-12-30T19:33:25+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(148, '5312027754657', 1727, NULL, 'paid', '499.80', 'SAR', '6', 'Free Shipping', '2022-12-30T23:35:28+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(149, '5312162365601', 1728, NULL, 'paid', '499.80', 'SAR', '1', 'Free Shipping', '2022-12-31T01:15:40+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(150, '5314023325857', 1729, NULL, 'paid', '294.00', 'SAR', '3', 'Free Shipping', '2023-01-01T17:08:13+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(151, '5314245460129', 1730, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2023-01-01T21:43:33+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(152, '5314615476385', 1731, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2023-01-02T04:08:37+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(153, '5314982084769', 1732, NULL, 'paid', '509.00', 'SAR', '2', 'Free Shipping', '2023-01-02T12:52:20+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(154, '5315070984353', 1733, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2023-01-02T15:14:44+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(155, '5316555669665', 1734, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2023-01-03T19:20:27+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(156, '5316615078049', 1735, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2023-01-03T20:13:51+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(157, '5316764008609', 1736, NULL, 'paid', '248.00', 'SAR', '1', 'Standard', '2023-01-03T22:28:13+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(158, '5317364777121', 1737, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2023-01-04T09:09:04+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(159, '5317661065377', 1738, NULL, 'paid', '131.00', 'SAR', '1', 'Standard', '2023-01-04T16:17:18+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(160, '5318271926433', 1739, NULL, 'paid', '392.00', 'SAR', '3', 'Free Shipping', '2023-01-05T02:05:53+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(161, '5318831997089', 1740, NULL, 'paid', '392.00', 'SAR', '3', 'Free Shipping', '2023-01-05T13:20:04+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(162, '5318903136417', 1741, NULL, 'paid', '294.00', 'SAR', '3', 'Free Shipping', '2023-01-05T15:07:52+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(163, '5319753040033', 1742, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2023-01-06T05:18:00+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(164, '5320418361505', 1743, NULL, 'paid', '588.00', 'SAR', '1', 'Free Shipping', '2023-01-06T17:26:13+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(165, '5323159765153', 1744, NULL, 'paid', '294.00', 'SAR', '1', 'Free Shipping', '2023-01-08T09:30:05+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(166, '5323449860257', 1745, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2023-01-08T16:43:51+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(167, '5323629854881', 1746, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2023-01-08T20:02:42+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(168, '5324639961249', 1747, NULL, 'paid', '186.00', 'SAR', '2', 'Standard', '2023-01-09T13:37:01+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(169, '5324665094305', 1748, NULL, 'paid', '313.60', 'SAR', '3', 'Free Shipping', '2023-01-09T14:16:16+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(170, '5324900073633', 1749, NULL, 'paid', '548.80', 'SAR', '3', 'Free Shipping', '2023-01-09T18:35:48+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(171, '5324938150049', 1750, NULL, 'paid', '155.40', 'SAR', '2', 'Standard', '2023-01-09T19:10:12+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(172, '5325953925281', 1751, NULL, 'paid', '392.00', 'SAR', '2', 'Free Shipping', '2023-01-10T15:49:41+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(173, '5326032240801', 1752, NULL, 'paid', '268.20', 'SAR', '1', 'Standard', '2023-01-10T17:28:48+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(174, '5326402420897', 1753, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2023-01-10T23:20:00+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(175, '5328576250017', 1754, NULL, 'paid', '229.00', 'SAR', '2', 'Standard', '2023-01-12T17:57:31+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(176, '5328904552609', 1755, NULL, 'paid', '229.00', 'SAR', '1', 'Standard', '2023-01-12T23:18:10+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(177, '5329485201569', 1756, NULL, 'paid', '0.00', 'SAR', '2', 'Standard', '2023-01-13T10:35:23+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29'),
(178, '5329998774433', 1757, NULL, 'pending', '588.00', 'SAR', '2', 'Free Shipping', '2023-01-13T20:02:28+03:00', '2023-01-13 17:07:29', '2023-01-13 17:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `our_talent`
--

CREATE TABLE `our_talent` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `resume` longtext DEFAULT NULL,
  `event_manually_resume` longtext DEFAULT NULL,
  `event_manually_letter` longtext DEFAULT NULL,
  `cover_letter` longtext DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_talent`
--

INSERT INTO `our_talent` (`id`, `first_name`, `last_name`, `email`, `phone`, `resume`, `event_manually_resume`, `event_manually_letter`, `cover_letter`, `department`, `created_at`, `updated_at`) VALUES
(1, 'Hunain', 'Khan', 'hunain@gmail.com', '031010201021', 'resume16868361461892408895.pdf', NULL, NULL, 'cover_letter16868361462336046124.pdf', '[\"sales\",\"marketing\",\"engineering\"]', '2023-06-15 13:35:46', '2023-06-15 13:35:46'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 13:55:25', '2023-06-20 13:55:25'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 14:22:29', '2023-06-20 14:22:29'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 14:39:03', '2023-06-20 14:39:03'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 14:53:19', '2023-06-20 14:53:19'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 14:58:21', '2023-06-20 14:58:21'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 14:58:52', '2023-06-20 14:58:52'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 14:59:58', '2023-06-20 14:59:58'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:01:10', '2023-06-20 15:01:10'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:02:52', '2023-06-20 15:02:52'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:03:32', '2023-06-20 15:03:32'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:03:58', '2023-06-20 15:03:58'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:04:41', '2023-06-20 15:04:41'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:04:57', '2023-06-20 15:04:57'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:07:25', '2023-06-20 15:07:25'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:08:30', '2023-06-20 15:08:30'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:08:54', '2023-06-20 15:08:54'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:10:42', '2023-06-20 15:10:42'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:10:52', '2023-06-20 15:10:52'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:12:16', '2023-06-20 15:12:16'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:14:34', '2023-06-20 15:14:34'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 15:14:47', '2023-06-20 15:14:47'),
(24, 'Demetrius', 'Jones', 'vipuxip@mailinator.com', '+1 (627) 873-6658', NULL, NULL, NULL, NULL, '[\"sales\",\"marketing\",\"engineering\",\"people-and-talent\"]', '2023-10-20 07:07:03', '2023-10-20 07:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mottoverocars@gmail.com', '$2y$10$YAwQ7ugNIgZl4ZClnaBhxebR18v5PnhSLdCBKgH5Sd2PsKOxHbehG', '2023-07-09 23:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', NULL, NULL),
(3, 'role-create', 'web', '2022-10-13 21:02:33', '2022-10-13 21:02:33'),
(4, 'role-delete', 'web', '2022-10-13 21:02:33', '2022-10-13 21:02:33'),
(5, 'role-edit', 'web', '2022-10-13 21:02:33', '2022-10-13 21:02:33'),
(6, 'user-create', 'web', '2022-10-13 21:02:33', '2022-10-13 21:02:33'),
(7, 'user-delete', 'web', '2022-10-13 21:02:33', '2022-10-13 21:02:33'),
(8, 'user-list', 'web', '2022-10-13 21:02:33', '2022-10-13 21:02:33'),
(9, 'user-edit', 'web', '2022-10-13 21:02:33', '2022-10-13 21:02:33'),
(10, 'user-sidebar', 'web', '2022-10-13 21:02:33', '2023-02-01 04:05:19'),
(11, 'roles-and-permission-sidebar', 'web', '2022-10-13 21:02:33', '2022-10-13 21:02:33'),
(13, 'dashboard-permission', 'web', '2022-10-13 21:02:33', '2022-10-13 21:02:33'),
(16, 'permission-list', 'web', '2023-02-01 04:28:30', '2023-02-01 04:28:30'),
(17, 'permission-create', 'web', '2023-02-01 04:28:43', '2023-02-01 04:28:43'),
(18, 'permission-edit', 'web', '2023-02-01 04:28:55', '2023-02-01 04:28:55'),
(19, 'permission-delete', 'web', '2023-02-01 04:29:08', '2023-02-01 04:29:08'),
(20, 'contacts-list', 'web', '2023-04-28 21:03:25', '2023-04-28 21:03:25'),
(21, 'make-sidebar', 'web', '2023-04-28 21:07:04', '2023-04-28 21:07:04'),
(22, 'model-sidebar', 'web', '2023-04-28 21:07:17', '2023-04-28 21:07:17'),
(23, 'make-edit', 'web', '2023-05-01 08:46:09', '2023-05-01 08:46:09'),
(24, 'make-delete', 'web', '2023-05-01 08:46:20', '2023-05-01 08:46:20'),
(25, 'make-list', 'web', '2023-05-01 08:46:32', '2023-05-01 08:46:32'),
(26, 'model-create', 'web', '2023-05-01 09:46:17', '2023-05-01 09:46:17'),
(27, 'model-list', 'web', '2023-05-01 09:46:29', '2023-05-01 09:46:29'),
(28, 'model-edit', 'web', '2023-05-01 09:46:49', '2023-05-01 09:46:49'),
(29, 'model-delete', 'web', '2023-05-01 09:47:02', '2023-05-01 09:47:02'),
(30, 'make-create', 'web', '2023-05-01 09:47:13', '2023-05-01 09:47:13'),
(31, 'car-sidebar', 'web', '2023-05-01 10:03:34', '2023-05-01 10:03:34'),
(32, 'car-create', 'web', '2023-05-01 10:03:49', '2023-05-01 10:03:49'),
(33, 'car-list', 'web', '2023-05-01 10:03:59', '2023-05-01 10:03:59'),
(34, 'car-edit', 'web', '2023-05-01 10:04:17', '2023-05-01 10:04:17'),
(35, 'car-delete', 'web', '2023-05-01 10:04:28', '2023-05-01 10:04:28'),
(36, 'blog-create', 'web', '2023-05-04 09:36:23', '2023-05-04 09:36:23'),
(37, 'blog-edit', 'web', '2023-05-04 10:43:05', '2023-05-04 10:43:05'),
(38, 'blog-delete', 'web', '2023-05-04 10:43:17', '2023-05-04 10:43:17'),
(40, 'reviews-approved', 'web', '2023-05-13 12:06:27', '2023-05-13 12:06:27'),
(41, 'reviews-sidebar', 'web', '2023-05-22 09:24:32', '2023-05-22 09:24:32'),
(42, 'pending-sidebar', 'web', '2023-05-22 09:25:58', '2023-05-22 09:25:58'),
(43, 'blog-sidebar', 'web', '2023-05-22 09:28:00', '2023-05-22 09:28:00'),
(44, 'configuration-sidebar', 'web', '2023-05-22 09:54:44', '2023-05-22 09:54:44'),
(45, 'review-view', 'web', '2023-05-25 07:48:17', '2023-05-25 07:48:17'),
(46, 'dashboard-sidebar', 'web', '2023-05-25 11:35:20', '2023-05-25 11:35:20'),
(47, 'contact-delete', 'web', '2023-05-27 08:22:32', '2023-05-27 08:22:32'),
(48, 'setting-sidebar', 'web', '2023-05-27 08:27:09', '2023-05-27 08:27:09'),
(49, 'career-delete', 'web', '2023-05-27 08:32:05', '2023-05-27 08:32:05'),
(50, 'newsletter-sidebar', 'web', '2023-05-27 13:48:56', '2023-05-27 13:48:56'),
(51, 'location-sidebar', 'web', '2023-05-29 08:31:10', '2023-05-29 08:31:10'),
(52, 'Frontend', 'web', '2023-05-29 09:57:47', '2023-05-29 09:57:47'),
(53, 'job-sidebar', 'web', '2023-06-01 10:55:45', '2023-06-01 10:55:45'),
(54, 'job-delete', 'web', '2023-06-03 09:35:58', '2023-06-03 09:35:58'),
(55, 'job-edit', 'web', '2023-06-03 09:36:14', '2023-06-03 09:36:14'),
(56, 'subscribers-delete', 'web', '2023-06-08 12:14:19', '2023-06-08 12:14:19'),
(57, 'my-profile', 'web', '2023-06-12 12:18:36', '2023-06-12 12:18:36'),
(58, 'reviews-edit', 'web', '2023-06-12 13:11:03', '2023-06-12 13:11:03'),
(59, 'testimonial-create', 'web', '2023-06-14 03:00:29', '2023-06-14 03:00:29'),
(60, 'testimonial-sidebar', 'web', '2023-06-14 07:14:14', '2023-06-14 07:14:14'),
(61, 'testimonial-edit', 'web', '2023-06-14 07:18:29', '2023-06-14 07:18:29'),
(62, 'testimonial-delete', 'web', '2023-06-14 07:18:40', '2023-06-14 07:18:40'),
(63, 'pre-qualified-delete', 'web', '2023-06-14 07:32:09', '2023-06-14 07:32:09'),
(64, 'contact-dealer-sidebar', 'web', '2023-06-14 08:00:41', '2023-06-14 08:00:41'),
(65, 'contact-dealer-delete', 'web', '2023-06-14 08:03:16', '2023-06-14 08:03:16'),
(66, 'request-info-delete', 'web', '2023-06-14 09:37:37', '2023-06-14 09:37:37'),
(67, 'talent-delete', 'web', '2023-06-15 14:30:31', '2023-06-15 14:30:31'),
(68, 'apply-delete', 'web', '2023-06-16 09:28:48', '2023-06-16 09:28:48'),
(69, 'blog-approval-sidebar', 'web', '2023-06-16 11:53:08', '2023-06-16 11:53:08'),
(70, 'press-sidebar', 'web', '2023-07-14 20:51:39', '2023-07-14 20:51:39'),
(71, 'press_release-edit', 'web', '2023-07-14 21:31:41', '2023-07-14 21:31:41'),
(72, 'press_release-delete', 'web', '2023-07-14 21:31:59', '2023-07-14 21:31:59'),
(73, 'press_release-create', 'web', '2023-07-14 21:38:42', '2023-07-14 21:38:42'),
(74, 'event-sidebar', 'web', '2023-07-25 22:19:28', '2023-07-25 22:19:28'),
(75, 'review-delete', 'web', '2023-07-30 21:34:16', '2023-07-30 21:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `press_rooms`
--

CREATE TABLE `press_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_status` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `press_rooms`
--

INSERT INTO `press_rooms` (`id`, `user_id`, `admin_status`, `title`, `short_description`, `long_description`, `meta_keywords`, `meta_description`, `type`, `category`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 'testing press release', '<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', NULL, NULL, NULL, 1, '1', '2023-07-14 21:41:12', '2023-07-14 21:41:12', NULL),
(2, 3, 1, 'Press Coverage', '<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '<p>Press Coveraget is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', NULL, NULL, NULL, 2, '1', '2023-07-14 21:43:20', '2023-07-14 21:43:20', NULL),
(3, 3, 1, 'Insights', '<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '<p>Press Coveraget is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', NULL, NULL, NULL, 3, '1', '2023-07-14 21:44:45', '2023-07-14 21:44:45', NULL),
(4, 3, 1, 'press release 2', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at&nbsp;</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', NULL, NULL, NULL, 1, '1', '2023-07-14 22:08:47', '2023-07-14 22:08:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pre_qualifieds`
--

CREATE TABLE `pre_qualifieds` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `confirm_email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `app_unit` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `property_type` varchar(255) DEFAULT NULL,
  `monthly_pay` varchar(255) DEFAULT NULL,
  `employment_status` varchar(255) DEFAULT NULL,
  `employer` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `duration_of_residence` varchar(255) DEFAULT NULL,
  `month_of_residence` varchar(255) DEFAULT NULL,
  `primary_income` varchar(255) DEFAULT NULL,
  `social_security` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `agreed` varchar(255) DEFAULT NULL,
  `term_condition` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pre_qualifieds`
--

INSERT INTO `pre_qualifieds` (`id`, `first_name`, `last_name`, `email`, `confirm_email`, `phone_number`, `home_address`, `app_unit`, `city`, `state`, `zip_code`, `duration`, `month`, `property_type`, `monthly_pay`, `employment_status`, `employer`, `job_title`, `duration_of_residence`, `month_of_residence`, `primary_income`, `social_security`, `date_of_birth`, `agreed`, `term_condition`, `created_at`, `updated_at`) VALUES
(2, 'Florence', 'Wilson', 'kakyxoke@mailinator.com', 'kakyxoke@mailinator.com', '323', 'Tempore sint quisqu', 'Aut dolore delectus', 'Autem accusantium cu', 'NM', '18222', '52', '6', 'own', '1', 'Military', 'Laboris molestias no', 'Non ab commodi nihil', '87', '8', '317', 'Pa$$w0rd!', '1989-02-15', '1', NULL, '2023-06-12 15:06:52', '2023-06-12 15:06:52'),
(3, 'Beck', 'Reese', 'xanapuxy@mailinator.com', 'xanapuxy@mailinator.com', '503', 'Est dolorum velit i', 'Eu cupiditate harum', 'Consectetur sit mag', 'PA', '53559', '82', '3', 'Other', '11', 'Military', 'Odio quam sunt qui v', 'Exercitation magna d', '82', '10', '180', 'Pa$$w0rd!', '2018-05-06', '1', '1', '2023-06-12 15:08:47', '2023-06-12 15:08:47'),
(5, 'Tallulah', 'Sexton', 'zynupufaga@mailinator.com', 'zynupufaga@mailinator.com', '83', 'Aute laboris tenetur', 'Vero eu magnam velit', 'Soluta dolores moles', 'ID', '73715', '3', '1', 'Other', '5', 'Unemployed', 'Quibusdam sed quis l', 'Aliquid ipsum volupt', '14', '5', '852', 'Pa$$w0rd!', '2008-07-05', NULL, NULL, '2023-06-12 15:13:26', '2023-06-12 15:13:26'),
(6, 'Kelly', 'Branch', 'laqujibibu@mailinator.com', 'laqujibibu@mailinator.com', '327', 'Commodo facilis comm', 'Aute ipsum est nat', 'Non irure eiusmod na', 'KS', '99503', '58', '9', 'Rent', '11', 'Full-time', 'Aliquip eum ut natus', 'Incidunt nihil sit', '73', '3', '336', 'Pa$$w0rd!', '1985-11-18', '1', NULL, '2023-06-12 15:15:35', '2023-06-12 15:15:35'),
(8, 'Linda', 'Russell', 'hyri@mailinator.com', 'hyri@mailinator.com', '695', 'Eiusmod neque fugit', 'Quod minim non sapie', 'Elit perspiciatis', 'FL', '11180', '40', '11', 'Other', '11', 'Part-time', 'Fugit sed in itaque', 'Corporis sint in do', '72', '9', '195', 'Pa$$w0rd!', '2006-10-02', NULL, NULL, '2023-06-12 15:18:30', '2023-06-12 15:18:30'),
(9, 'Otto', 'Stout', 'lahihoreti@mailinator.com', 'lahihoreti@mailinator.com', '488', 'Itaque id aliquip na', 'Dicta pariatur Veri', 'Non id quia qui magn', 'SC', '60711', '2', '3', 'Other', '8', 'Self-employed', 'Minus labore autem n', 'Dolore id sed ut sun', '65', '7', '66', 'Pa$$w0rd!', '1994-12-07', NULL, NULL, '2023-06-12 15:20:36', '2023-06-12 15:20:36'),
(10, 'Natalie', 'Townsend', 'luku@mailinator.com', 'luku@mailinator.com', '187', 'Occaecat sunt ullam', 'Ut molestiae sed rec', 'Et et debitis volupt', 'ID', '87030', '84', '8', 'Rent', '5', 'Military', 'Voluptatem adipisci', 'Aperiam dignissimos', '20', '11', '196', 'Pa$$w0rd!', '1991-07-10', '1', '1', '2023-06-12 15:21:41', '2023-06-12 15:21:41'),
(12, 'Simon', 'Harrington', 'figubaba@mailinator.com', 'figubaba@mailinator.com', '973', 'Quia aliquid volupta', 'Asperiores eaque dol', 'Nisi odit ad quos do', 'MD', '23138', '22', '9', 'Other', '1', 'Military', 'Provident quod esse', 'Ut possimus aliqua', '74', '2', '825', 'Pa$$w0rd!', '2000-02-23', NULL, NULL, '2023-06-12 15:48:28', '2023-06-12 15:48:28'),
(13, 'Roanna', 'Fernandez', 'sudym@mailinator.com', 'sudym@mailinator.com', '945', 'Quia elit voluptate', 'Rem deserunt incidid', 'Aliquam aspernatur e', 'PA', '75432', '46', '6', 'own', '6', 'Unemployed', 'Molestiae veniam mi', 'Ut est quia at volup', '76', '9', '807', 'Pa$$w0rd!', '1975-05-26', NULL, NULL, '2023-06-21 11:33:16', '2023-06-21 11:33:16'),
(14, 'donna', 'okk', 'bolo@gmail.com', 'bolo@gmail.com', '555544443', '55444 ffddsa', '7765', 'douglas', 'NC', '7664211', '10', '9', 'Rent', '5444333', 'Part-time', 'ffouyy', 'fouh', '15', '9', '66554432', '5443211188', '1976-12-05', '1', '1', '2023-06-21 17:24:51', '2023-06-21 17:24:51'),
(15, 'Muhammad', 'Raheel', 'jamers786@gmail.com', 'jamers786@gmail.com', '03473639710', 'H-27 A/10 Malir Extension Colony', '556', 'Karachi', 'IA', '75080', '11', '1', 'own', '500', 'Self-employed', 'gthank', 'thank', '16', '2', '5660', '455995566', '2023-07-03', '1', '1', '2023-07-03 09:57:51', '2023-07-03 09:57:51'),
(16, 'Eagan', 'Curtis', 'tugipih@mailinator.com', 'tugipih@mailinator.com', '123', 'Culpa aliquid proid', 'Est et debitis lauda', 'Eos provident sit v', 'PA', '60318', '18', '3', 'own', '1', 'Retired', 'Ex esse neque dolori', 'Quasi est qui numqua', '54', '3', '289', 'Pa$$w0rd!', '2004-04-21', NULL, NULL, '2023-07-21 11:56:25', '2023-07-21 11:56:25'),
(17, 'KOUATCHEU', 'YIMKOUA', 'fidelekouatch@yahoo.fr', 'fidelekouatch@yahoo.fr', '9787982051', '73 heritage lane apt B10', '122', 'Leominster', 'MA', '01453', '3', '5', 'Other', '23333', 'Self-employed', 'motorvero', 'mott', '7', NULL, '500000', '55445566676', '2023-08-09', '1', '1', '2023-08-29 20:58:40', '2023-08-29 20:58:40'),
(18, 'Isaiah', 'Parks', 'taby@mailinator.com', 'taby@mailinator.com', '4', 'Ullam vitae ipsum es', 'Libero incidunt at', 'Libero rem tempor pa', 'NV', '77707', '22', '7', 'Rent', '11', 'Other', 'Aliquam minus repreh', 'Ea natus sit volupt', '61', '2', '127', 'Pa$$w0rd!', '1972-12-30', '1', '1', '2023-10-13 12:00:18', '2023-10-13 12:00:18'),
(19, 'Aphrodite', 'Browning', 'rogewu@mailinator.com', 'rogewu@mailinator.com', '114', 'Laborum Quos nisi c', 'Quia dolorum anim ve', 'Duis aut fugiat ab i', 'VA', '10861', '50', '5', 'Rent', '8', 'Full-time', 'Velit doloremque ame', 'Libero dolor error a', '20', '5', '806', 'Pa$$w0rd!', '2006-02-13', '1', '1', '2023-10-20 07:09:21', '2023-10-20 07:09:21'),
(20, 'Aphrodite', 'Browning', 'rogewu@mailinator.com', 'rogewu@mailinator.com', '114', 'Laborum Quos nisi c', 'Quia dolorum anim ve', 'Duis aut fugiat ab i', 'VA', '10861', '50', '5', 'Rent', '8', 'Full-time', 'Velit doloremque ame', 'Libero dolor error a', '20', '5', '806', 'Pa$$w0rd!', '1999-06-07', '1', '1', '2023-10-20 07:10:28', '2023-10-20 07:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reference_type` varchar(255) DEFAULT NULL,
  `reference_id` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reactions`
--

INSERT INTO `reactions` (`id`, `user_id`, `reference_type`, `reference_id`, `type`, `comments`, `image`, `created_at`, `updated_at`) VALUES
(172, 3, 'car', '57', 'wishlist', NULL, NULL, '2023-06-06 14:03:48', NULL),
(173, 12, 'car', '57', 'wishlist', NULL, NULL, '2023-06-07 07:56:16', NULL),
(174, 3, 'car', '69', 'wishlist', NULL, NULL, '2023-06-08 15:15:15', NULL),
(176, 6, 'car', '83', 'wishlist', NULL, NULL, '2023-06-13 01:14:00', NULL),
(179, 3, 'car', '64', 'wishlist', NULL, NULL, '2023-06-20 21:17:34', NULL),
(180, 3, 'car', '76', 'wishlist', NULL, NULL, '2023-06-21 15:41:35', NULL),
(183, 11, 'car', '67', 'wishlist', NULL, NULL, '2023-06-27 11:34:16', NULL),
(184, 11, 'car', '74', 'wishlist', NULL, NULL, '2023-06-27 11:34:24', NULL),
(186, 3, 'car', '66', 'wishlist', NULL, NULL, '2023-06-27 17:43:35', NULL),
(194, 21, 'car', '83', 'wishlist', NULL, NULL, '2023-07-05 08:50:04', NULL),
(199, 12, 'car', '80', 'wishlist', NULL, NULL, '2023-07-07 02:41:19', NULL),
(202, 11, 'car', '72', 'wishlist', NULL, NULL, '2023-07-13 06:36:33', NULL),
(205, 3, 'car', '86', 'wishlist', NULL, NULL, '2023-07-14 23:59:19', NULL),
(206, 12, 'car', '94', 'wishlist', NULL, NULL, '2023-07-20 17:30:21', NULL),
(208, 23, 'car', '72', 'wishlist', NULL, NULL, '2023-07-21 12:22:11', NULL),
(209, 23, 'car', '82', 'wishlist', NULL, NULL, '2023-07-21 12:28:04', NULL),
(210, 24, 'car', '72', 'wishlist', NULL, NULL, '2023-07-24 19:46:17', NULL),
(211, 24, 'car', '76', 'wishlist', NULL, NULL, '2023-07-24 19:46:29', NULL),
(213, 3, 'car', '82', 'wishlist', NULL, NULL, '2023-07-27 11:00:19', NULL),
(225, 3, 'car', '74', 'wishlist', NULL, NULL, '2023-08-01 02:18:50', NULL),
(230, 12, 'car', '67', 'wishlist', NULL, NULL, '2023-08-04 05:48:21', NULL),
(232, 12, 'car', '68', 'wishlist', NULL, NULL, '2023-08-05 02:20:57', NULL),
(233, 12, 'car', '82', 'wishlist', NULL, NULL, '2023-08-05 02:21:00', NULL),
(236, 6, 'car', '72', 'wishlist', NULL, NULL, '2023-08-07 21:12:09', NULL),
(238, 12, 'car', '85', 'wishlist', NULL, NULL, '2023-08-11 16:35:21', NULL),
(239, 12, 'car', '97', 'wishlist', NULL, NULL, '2023-08-11 16:35:23', NULL),
(242, 3, 'car', '67', 'wishlist', NULL, NULL, '2023-08-11 16:45:55', NULL),
(244, 3, 'car', '72', 'wishlist', NULL, NULL, '2023-11-29 23:25:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request_information`
--

CREATE TABLE `request_information` (
  `id` int(10) UNSIGNED NOT NULL,
  `car_id` int(10) UNSIGNED NOT NULL,
  `dealer_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_information`
--

INSERT INTO `request_information` (`id`, `car_id`, `dealer_id`, `first_name`, `last_name`, `area`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 64, 3, 'Huanin', 'Khan', 'liyari', 'hunain@gmail.com', '03101010101', '2023-06-14 09:25:32', '2023-06-14 09:25:32'),
(4, 67, 3, NULL, NULL, NULL, NULL, NULL, '2023-06-17 20:22:23', '2023-06-17 20:22:23'),
(5, 72, 3, NULL, NULL, NULL, NULL, NULL, '2023-07-05 06:59:44', '2023-07-05 06:59:44'),
(6, 72, 3, NULL, NULL, NULL, NULL, NULL, '2023-07-05 07:01:38', '2023-07-05 07:01:38'),
(7, 72, 3, NULL, NULL, NULL, NULL, NULL, '2023-07-05 07:06:00', '2023-07-05 07:06:00'),
(8, 72, 3, NULL, NULL, NULL, NULL, NULL, '2023-07-05 07:07:57', '2023-07-05 07:07:57'),
(9, 72, 3, NULL, NULL, NULL, NULL, NULL, '2023-10-20 07:07:49', '2023-10-20 07:07:49'),
(10, 72, 3, NULL, NULL, NULL, NULL, NULL, '2023-10-20 07:07:55', '2023-10-20 07:07:55'),
(11, 72, 3, NULL, NULL, NULL, NULL, NULL, '2023-10-20 07:08:03', '2023-10-20 07:08:03'),
(12, 72, 3, NULL, NULL, NULL, NULL, NULL, '2023-10-20 07:08:12', '2023-10-20 07:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` int(11) NOT NULL,
  `dealer_id` int(11) UNSIGNED NOT NULL,
  `rating` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `reviews_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `testimonial_id` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `car_id`, `dealer_id`, `rating`, `name`, `email`, `comment`, `reviews_status`, `created_at`, `updated_at`, `testimonial_id`, `type`, `deleted_by`, `deleted_at`) VALUES
(13, 71, 3, 3, 'mannan', 'mannan@gmail.com', 'second testing', 0, '2023-06-13 17:28:49', '2023-07-30 21:45:45', NULL, 1, 3, '2023-07-30 21:45:45'),
(14, 64, 3, 4, 'Raja', 'raja@gmail.com', 'this is just testing', 1, '2023-06-14 10:33:52', '2023-06-14 10:34:12', NULL, 1, NULL, NULL),
(15, 64, 3, 5, 'Muhammad Raheel', 'jamers786@gmail.com', 'tested', 1, '2023-06-20 14:40:23', '2023-06-20 14:40:54', NULL, 1, NULL, NULL),
(16, 68, 3, 5, 'Muhammad Raheel', 'jamers786@gmail.com', 'nice', 1, '2023-07-03 10:24:23', '2023-07-03 10:25:16', NULL, 1, NULL, NULL),
(17, 67, 3, 4, 'Muhammad Raheel', 'jamers786@gmail.com', 'good', 0, '2023-07-04 20:09:29', '2023-07-04 20:10:18', NULL, 1, NULL, NULL),
(18, 72, 3, 4, 'Philip Rutledge', 'byrusidym@mailinator.com', 'Veniam adipisicing', 0, '2023-10-13 12:04:41', '2023-10-13 12:04:41', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-10-13 15:49:07', '2022-10-13 15:49:07'),
(2, 'Dealer', 'web', '2023-04-28 21:04:29', '2023-04-28 21:04:29'),
(5, 'User', 'web', '2023-05-29 10:03:13', '2023-05-29 10:03:13'),
(6, 'Blogger', 'web', '2023-06-14 20:54:43', '2023-06-14 20:54:43'),
(11, 'career management', 'web', '2024-01-10 06:24:34', '2024-01-10 06:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(13, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(32, 7),
(32, 9),
(32, 10),
(33, 1),
(33, 2),
(33, 8),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 4),
(36, 6),
(37, 1),
(37, 4),
(37, 6),
(38, 1),
(38, 6),
(39, 3),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(43, 4),
(43, 6),
(44, 1),
(45, 1),
(46, 1),
(46, 2),
(46, 6),
(47, 1),
(48, 1),
(49, 1),
(49, 11),
(50, 1),
(51, 1),
(51, 11),
(52, 1),
(52, 5),
(53, 1),
(53, 11),
(54, 1),
(54, 11),
(55, 1),
(55, 11),
(56, 1),
(57, 1),
(57, 2),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(64, 2),
(65, 1),
(66, 1),
(67, 1),
(67, 11),
(68, 1),
(68, 11),
(69, 1),
(70, 1),
(70, 11),
(71, 1),
(71, 11),
(72, 1),
(72, 11),
(73, 1),
(73, 11),
(74, 1),
(74, 11),
(75, 1);

-- --------------------------------------------------------

--
-- Table structure for table `savelikes`
--

CREATE TABLE `savelikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `like` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `condition` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `tracking` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`id`, `user_id`, `condition`, `make`, `model`, `zip`, `url`, `tracking`, `created_at`, `updated_at`) VALUES
(1, '13', 'Old', '21', NULL, NULL, 'https://eliteblue.net/motorvero/public/listing?_token=21rJG1ZqKoWN2PGeSpWvsVQWST8GKEy5jBwN8BvM&condition=Old&make=21&model=&zip=&tracking=home', 'home', '2023-06-07 10:12:52', '2023-06-07 10:12:52'),
(2, '13', 'Old', '21', NULL, NULL, 'https://eliteblue.net/motorvero/public/listing?_token=21rJG1ZqKoWN2PGeSpWvsVQWST8GKEy5jBwN8BvM&condition=Old&make=21&model=&zip=&tracking=home', 'home', '2023-06-07 10:12:56', '2023-06-07 10:12:56'),
(3, '3', 'Used', '68', '48', NULL, 'https://eliteblue.net/motorvero/public/listing?condition=Used&tracking=home&make=68&model=48&zip=', 'home', '2023-06-08 12:06:18', '2023-06-08 12:06:18'),
(4, '3', 'Used', '68', '48', NULL, 'https://eliteblue.net/motorvero/public/listing?condition=Used&tracking=home&make=68&model=48&zip=', 'home', '2023-06-08 12:06:19', '2023-06-08 12:06:19'),
(5, '3', 'Used', NULL, NULL, NULL, 'https://eliteblue.net/motorvero/public/listing?tracking=home&condition=Used', 'home', '2023-06-22 10:02:30', '2023-06-22 10:02:30'),
(6, '3', 'Used', '72', NULL, NULL, 'https://eliteblue.net/motorvero/public/listing?condition=Used&tracking=home&make=72&model=&zip=', 'home', '2023-07-03 10:14:57', '2023-07-03 10:14:57'),
(7, '3', 'new', '74', '58', NULL, 'https://eliteblue.net/motorvero/public/listing?tracking=home&condition=new&make=74&model=58&zip=', 'home', '2023-07-04 21:42:59', '2023-07-04 21:42:59'),
(8, '21', 'Used', '64', NULL, NULL, 'https://eliteblue.net/motorvero/public/listing?condition=Used&tracking=home&make=64&model=&zip=', 'home', '2023-07-05 08:48:11', '2023-07-05 08:48:11'),
(9, '23', 'Used', '63', '37', NULL, 'https://eliteblue.net/motorvero/public/listing?condition=Used&tracking=home&make=63&model=37&zip=', 'home', '2023-07-21 12:22:43', '2023-07-21 12:22:43'),
(10, '24', 'Used', NULL, NULL, NULL, 'https://eliteblue.net/motorvero/public/listing?condition=Used&tracking=home&zip=', 'home', '2023-07-24 19:47:11', '2023-07-24 19:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `sell_car_logs`
--

CREATE TABLE `sell_car_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `license_plate_number` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `vin_number` varchar(255) DEFAULT NULL,
  `response` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sell_car_logs`
--

INSERT INTO `sell_car_logs` (`id`, `type`, `license_plate_number`, `state`, `vin_number`, `response`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'license', '8UZS701', 'california', 'WA1AWBF75MD010938', '{\"Vehicle_Descriptor\":\"WA1AWBF7*MD\",\"Make\":\"AUDI\",\"Manufacturer_Name\":\"VOLKSWAGEN AG\",\"Model\":\"SQ7\",\"Model_Year\":\"2021\",\"Plant_City\":\"BRATISLAVA\",\"Series\":\"quattro Premium Plus\",\"Vehicle_Type\":\"MULTIPURPOSE PASSENGER VEHICLE (MPV)\",\"Plant_Country\":\"SLOVAKIA\",\"Note\":\"HD Radio, Bluetooth, Satellite Radio, Auxiliary Audio Input, MP3 Player  \",\"Base_Price__$_\":\"85000\",\"Body_Class\":\"Sport Utility Vehicle (SUV)\\/Multi-Purpose Vehicle (MPV)\",\"Doors\":\"4\",\"Gross_Vehicle_Weight_Rating_From\":\"Class 2E: 6,001 - 7,000 lb (2,722 - 3,175 kg)\",\"Wheel_Base__inches__From\":\"117.9\",\"Trailer_Type_Connection\":\"Not Applicable\",\"Trailer_Body_Type\":\"Not Applicable\",\"Number_of_Wheels\":\"4\",\"Wheel_Size_Front__inches_\":\"20\",\"Wheel_Size_Rear__inches_\":\"20\",\"Steering_Location\":\"Left-Hand Drive (LHD)\",\"Number_of_Seats\":\"7\",\"Number_of_Seat_Rows\":\"2\",\"Transmission_Style\":\"Automatic\",\"Transmission_Speeds\":\"8\",\"Drive_Type\":\"AWD\\/All-Wheel Drive\",\"Axles\":\"2\",\"Engine_Number_of_Cylinders\":\"8\",\"Displacement__CC_\":\"4000\",\"Displacement__CI_\":\"244.0949763789\",\"Displacement__L_\":\"4\",\"Engine_Power__kW_\":\"372.8500\",\"Fuel_Type_-_Primary\":\"Gasoline\",\"Engine_Brake__hp__From\":\"500\",\"Other_Engine_Info\":\"Emissions Certification Test Group: MVGAT04.0NAV  Federal\\/California Emission Standard: Tier 3 BIN 125 LEV3 ULEV125\",\"Engine_Manufacturer\":\"Audi\",\"Curtain_Air_Bag_Locations\":\"All Rows\",\"Front_Air_Bag_Locations\":\"1st Row (Driver and Passenger)\",\"Side_Air_Bag_Locations\":\"All Rows\",\"Anti-lock_Braking_System__ABS_\":\"Standard\",\"Electronic_Stability_Control__ESC_\":\"Standard\",\"Traction_Control\":\"Standard\",\"Tire_Pressure_Monitoring_System__TPMS__Type\":\"Indirect\",\"Auto-Reverse_System_for_Windows_and_Sunroofs\":\"Standard\",\"Keyless_Ignition\":\"Standard\",\"NCSA_Body_Type\":\"Unknown light vehicle type (automobile,utility vehicle, van, or light truck)\",\"NCSA_Make\":\"Audi\",\"NCSA_Model\":\"Unknown (AUDI)\",\"Adaptive_Cruise_Control__ACC_\":\"Optional\",\"Crash_Imminent_Braking__CIB_\":\"Standard\",\"Blind_Spot_Warning__BSW_\":\"Standard\",\"Forward_Collision_Warning__FCW_\":\"Standard\",\"Lane_Departure_Warning__LDW_\":\"Standard\",\"Lane_Keeping_Assistance__LKA_\":\"Optional\",\"Backup_Camera\":\"Standard\",\"Bus_Floor_Configuration_Type\":\"Not Applicable\",\"Bus_Type\":\"Not Applicable\",\"Custom_Motorcycle_Type\":\"Not Applicable\",\"Motorcycle_Suspension_Type\":\"Not Applicable\",\"Motorcycle_Chassis_Type\":\"Not Applicable\",\"Automatic_Crash_Notification__ACN__\\/_Advanced_Automatic_Crash_Notification__AACN_\":\"Standard\",\"Daytime_Running_Light__DRL_\":\"Standard\",\"Headlamp_Light_Source\":\"LED\",\"Semiautomatic_Headlamp_Beam_Switching\":\"Standard\",\"Rear_Cross_Traffic_Alert\":\"Standard\",\"Lane_Centering_Assistance\":\"Optional\",\"VIN\":\"WA1AWBF75MD010938\",\"License_Plate\":\"8UZS701\"}', '2023-07-06 14:47:27', '2023-07-06 14:47:27', NULL),
(2, 'vin', NULL, NULL, '1C4NJPBB3FD398798', '{\"VIN\":\"1C4NJPBB3FD398798\",\"Manufacturer\":\"Chrysler Corporation LLC\",\"Adress_line_1\":\"800 Chrysler Dr\",\"Adress_line_2\":\"Auburn Hills MI 48326-2757,\",\"Region\":\"North America\",\"Country\":\"United States\",\"Note\":\"Manufacturer builds more than 500 vehicles per year\",\"Entered_VIN\":\"1C4NJPBB3FD398798\",\"Corrected_VIN\":\"1C4NJPBB3FD398798\",\"Squish_VIN\":\"1C4NJPBBFD\",\"WMI\":\"1C4\",\"VIS_identifier\":\"N\\/A\",\"VDS\":\"NJPBB3FD\",\"Year_identifier\":\"F\",\"Serial_number\":\"398798\",\"VIN_type\":\"normal\",\"Check_digit\":\"valid\",\"Make\":\"Jeep\",\"Model\":\"Patriot\",\"Model_year\":\"2015\",\"Trim_level\":\"Sport\",\"Body_style\":\"4 Doors SUV\",\"Engine_type\":\"I4\",\"Fuel_type\":\"Gasoline\",\"Transmission\":\"6-Speed Automatic\",\"Vehicle_class\":\"Compact SUV\",\"Vehicle_type\":\"SUV\",\"Manufactured_in\":\"USA\",\"Body_type\":\"SUV\",\"Number_of_doors\":\"4\",\"Number_of_seats\":\"5\",\"Displacement_SI\":\"2360\",\"Displacement_CID\":\"144\",\"Displacement_Nominal\":\"2.4\",\"Engine_head\":\"DOHC\",\"Engine_valves\":\"16\",\"Engine_cylinders\":\"4\",\"Engine_aspiration\":\"Naturally\",\"Engine_HorsePower\":\"158\",\"Engine_KiloWatts\":\"118\",\"Automatic_gearbox\":\"6AT\",\"Emission_standard\":\"50 STATE EMISSIONS\",\"Driveline\":\"FWD\"}', '2023-07-09 08:45:27', '2023-07-09 08:45:27', NULL),
(4, 'vin', NULL, NULL, '1N6AA1ED7MN525131', '{\"VIN\":\"1N6AA1ED7MN525131\",\"Manufacturer\":\"Nissan Motor Mfg Corp USA\",\"Adress_line_1\":\"983 Nissan Dr\",\"Adress_line_2\":\"Smyrna TN 37167-4405,\",\"Region\":\"North America\",\"Country\":\"United States\",\"Note\":\"Manufacturer builds more than 500 vehicles per year\",\"Entered_VIN\":\"1N6AA1ED7MN525131\",\"Corrected_VIN\":\"1N6AA1ED7MN525131\",\"Squish_VIN\":\"1N6AA1EDMN\",\"WMI\":\"1N6\",\"VIS_identifier\":\"N\\/A\",\"VDS\":\"AA1ED7MN\",\"Year_identifier\":\"M\",\"Serial_number\":\"525131\",\"VIN_type\":\"normal\",\"Check_digit\":\"valid\",\"Make\":\"Nissan\",\"Model\":\"TITAN\",\"Model_year\":\"2021\",\"Body_style\":\"Crew Pickup\",\"Engine_type\":\"5.6\",\"Fuel_type\":\"Gasoline\",\"Transmission\":\"Automatic\",\"Manufactured_in\":\"United States\",\"Body_type\":\"Crew Pickup\",\"Displacement_Nominal\":\"5.6\",\"Engine_cylinders\":\"8\",\"Engine_HorsePower\":\"400\",\"Engine_KiloWatts\":\"298\",\"Automatic_gearbox\":\"AT\"}', '2023-07-10 15:36:00', '2023-07-10 15:36:00', NULL),
(5, 'vin', NULL, NULL, '1C4PJMCS6EW221428', '{\"VIN\":\"1C4PJMCS6EW221428\",\"Manufacturer\":\"Chrysler Corporation LLC\",\"Adress_line_1\":\"800 Chrysler Dr\",\"Adress_line_2\":\"Auburn Hills MI 48326-2757,\",\"Region\":\"North America\",\"Country\":\"United States\",\"Note\":\"Manufacturer builds more than 500 vehicles per year\",\"Entered_VIN\":\"1C4PJMCS6EW221428\",\"Corrected_VIN\":\"1C4PJMCS6EW221428\",\"Squish_VIN\":\"1C4PJMCSEW\",\"WMI\":\"1C4\",\"VIS_identifier\":\"N\\/A\",\"VDS\":\"PJMCS6EW\",\"Year_identifier\":\"E\",\"Serial_number\":\"221428\",\"VIN_type\":\"normal\",\"Check_digit\":\"valid\",\"Make\":\"Jeep\",\"Model\":\"Cherokee\",\"Model_year\":\"2014\",\"Engine_type\":\"V6\",\"Fuel_type\":\"Gasoline\",\"Transmission\":\"9-Speed Automatic\",\"Number_of_doors\":\"4\",\"Number_of_seats\":\"5\",\"Displacement_Nominal\":\"3.2\",\"Engine_head\":\"DOHC\",\"Engine_valves\":\"24\",\"Engine_cylinders\":\"6\",\"Automatic_gearbox\":\"9AT\",\"Driveline\":\"4WD\",\"Anti-Brake_System\":\"4-Wheel ABS\",\"Front_brake_type\":\"Disc\",\"Rear_brake_type\":\"Drum\",\"Front_suspension\":\"Independent\",\"Rear_suspension\":\"Independent\",\"Front_spring_type\":\"Coil\",\"Rear_spring_type\":\"Leaf\",\"Tire_front\":\"225\\/65R17\",\"Tire_rear\":\"225\\/65R17\",\"GVWR_range\":\"5001-6000\"}', '2023-07-11 06:54:59', '2023-07-11 06:54:59', NULL),
(6, 'vin', NULL, NULL, '1C4PJMCS6EW221428', '{\"VIN\":\"1C4PJMCS6EW221428\",\"Manufacturer\":\"Chrysler Corporation LLC\",\"Adress_line_1\":\"800 Chrysler Dr\",\"Adress_line_2\":\"Auburn Hills MI 48326-2757,\",\"Region\":\"North America\",\"Country\":\"United States\",\"Note\":\"Manufacturer builds more than 500 vehicles per year\",\"Entered_VIN\":\"1C4PJMCS6EW221428\",\"Corrected_VIN\":\"1C4PJMCS6EW221428\",\"Squish_VIN\":\"1C4PJMCSEW\",\"WMI\":\"1C4\",\"VIS_identifier\":\"N\\/A\",\"VDS\":\"PJMCS6EW\",\"Year_identifier\":\"E\",\"Serial_number\":\"221428\",\"VIN_type\":\"normal\",\"Check_digit\":\"valid\",\"Make\":\"Jeep\",\"Model\":\"Cherokee\",\"Model_year\":\"2014\",\"Engine_type\":\"V6\",\"Fuel_type\":\"Gasoline\",\"Transmission\":\"9-Speed Automatic\",\"Number_of_doors\":\"4\",\"Number_of_seats\":\"5\",\"Displacement_Nominal\":\"3.2\",\"Engine_head\":\"DOHC\",\"Engine_valves\":\"24\",\"Engine_cylinders\":\"6\",\"Automatic_gearbox\":\"9AT\",\"Driveline\":\"4WD\",\"Anti-Brake_System\":\"4-Wheel ABS\",\"Front_brake_type\":\"Disc\",\"Rear_brake_type\":\"Drum\",\"Front_suspension\":\"Independent\",\"Rear_suspension\":\"Independent\",\"Front_spring_type\":\"Coil\",\"Rear_spring_type\":\"Leaf\",\"Tire_front\":\"225\\/65R17\",\"Tire_rear\":\"225\\/65R17\",\"GVWR_range\":\"5001-6000\"}', '2023-07-11 06:54:59', '2023-07-11 06:54:59', NULL),
(7, 'vin', NULL, NULL, '324523453453453245', '{\"message\":\"VIN not found, please try again.\",\"success\":false}', '2023-07-19 07:31:13', '2023-07-19 07:31:13', NULL),
(8, 'vin', NULL, NULL, '5TFDW5F13JX760722', '{\"VIN\":\"5TFDW5F13JX760722\",\"Manufacturer\":\"Toyota Motor Manufacturing Texas Inc\",\"Adress_line_1\":\"15800 Applewhite Rd\",\"Adress_line_2\":\"San Antonio TX 78264-3413,\",\"Region\":\"North America\",\"Country\":\"United States\",\"Note\":\"Manufacturer builds more than 500 vehicles per year\",\"Entered_VIN\":\"5TFDW5F13JX760722\",\"Corrected_VIN\":\"5TFDW5F13JX760722\",\"Squish_VIN\":\"5TFDW5F1JX\",\"WMI\":\"5TF\",\"VIS_identifier\":\"N\\/A\",\"VDS\":\"DW5F13JX\",\"Year_identifier\":\"J\",\"Serial_number\":\"760722\",\"VIN_type\":\"normal\",\"Check_digit\":\"valid\",\"Make\":\"Toyota\",\"Model\":\"Tundra\",\"Model_year\":\"2018\",\"Trim_level\":\"SR-5\",\"Body_style\":\"Crew Pickup\",\"Engine_type\":\"5.7L DOHC 32V\",\"Fuel_type\":\"Flexible Fuel\",\"Transmission\":\"6-Speed Automatic\",\"Manufactured_in\":\"United States\",\"Body_type\":\"Crew Pickup\",\"Displacement_SI\":\"5700\",\"Displacement_CID\":\"348\",\"Displacement_Nominal\":\"5.7\",\"Engine_head\":\"DOHC\",\"Engine_valves\":\"32\",\"Engine_cylinders\":\"8\",\"Engine_HorsePower\":\"381\",\"Engine_KiloWatts\":\"284\",\"Automatic_gearbox\":\"6AT\"}', '2023-07-19 16:39:32', '2023-07-19 16:39:32', NULL),
(9, 'vin', NULL, NULL, '5TFDW5F13JX760722', '{\"VIN\":\"5TFDW5F13JX760722\",\"Manufacturer\":\"Toyota Motor Manufacturing Texas Inc\",\"Adress_line_1\":\"15800 Applewhite Rd\",\"Adress_line_2\":\"San Antonio TX 78264-3413,\",\"Region\":\"North America\",\"Country\":\"United States\",\"Note\":\"Manufacturer builds more than 500 vehicles per year\",\"Entered_VIN\":\"5TFDW5F13JX760722\",\"Corrected_VIN\":\"5TFDW5F13JX760722\",\"Squish_VIN\":\"5TFDW5F1JX\",\"WMI\":\"5TF\",\"VIS_identifier\":\"N\\/A\",\"VDS\":\"DW5F13JX\",\"Year_identifier\":\"J\",\"Serial_number\":\"760722\",\"VIN_type\":\"normal\",\"Check_digit\":\"valid\",\"Make\":\"Toyota\",\"Model\":\"Tundra\",\"Model_year\":\"2018\",\"Trim_level\":\"SR-5\",\"Body_style\":\"Crew Pickup\",\"Engine_type\":\"5.7L DOHC 32V\",\"Fuel_type\":\"Flexible Fuel\",\"Transmission\":\"6-Speed Automatic\",\"Manufactured_in\":\"United States\",\"Body_type\":\"Crew Pickup\",\"Displacement_SI\":\"5700\",\"Displacement_CID\":\"348\",\"Displacement_Nominal\":\"5.7\",\"Engine_head\":\"DOHC\",\"Engine_valves\":\"32\",\"Engine_cylinders\":\"8\",\"Engine_HorsePower\":\"381\",\"Engine_KiloWatts\":\"284\",\"Automatic_gearbox\":\"6AT\"}', '2023-07-19 16:39:32', '2023-07-19 16:39:32', NULL),
(10, 'vin', NULL, NULL, '5UXCW2C00N9K56708', '{\"VIN\":\"5UXCW2C00N9K56708\",\"Manufacturer\":\"BMW Manufacturing Co LLC\",\"Adress_line_1\":\"1400 Highway 101 S\",\"Adress_line_2\":\"Greer SC 29651-6799,\",\"Region\":\"North America\",\"Country\":\"United States\",\"Note\":\"Manufacturer builds more than 500 vehicles per year\",\"Entered_VIN\":\"5UXCW2C00N9K56708\",\"Corrected_VIN\":\"5UXCW2C00N9K56708\",\"Squish_VIN\":\"5UXCW2C0N9\",\"WMI\":\"5UX\",\"VIS_identifier\":\"N\\/A\",\"VDS\":\"CW2C00N9\",\"Year_identifier\":\"N\",\"Serial_number\":\"K56708\",\"VIN_type\":\"normal\",\"Check_digit\":\"valid\",\"Make\":\"BMW\",\"Model\":\"X7\",\"Model_year\":\"2022\",\"Body_style\":\"Wagon\",\"Engine_type\":\"3.0L 4WD\",\"Fuel_type\":\"Gasoline\",\"Transmission\":\"Automatic\",\"Manufactured_in\":\"United States\",\"Body_type\":\"Wagon\",\"Displacement_Nominal\":\"3.0\",\"Engine_cylinders\":\"6\",\"Engine_HorsePower\":\"335\",\"Engine_KiloWatts\":\"250\",\"Automatic_gearbox\":\"AT\",\"Driveline\":\"4WD\"}', '2023-07-20 17:18:25', '2023-07-20 17:18:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sell_car_more_details`
--

CREATE TABLE `sell_car_more_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sell_car_log_id` int(11) DEFAULT NULL,
  `detail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`detail`)),
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sell_car_more_details`
--

INSERT INTO `sell_car_more_details` (`id`, `sell_car_log_id`, `detail`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 4, '{\"zipCode\":\"43235\",\"milage\":\"20447\",\"alloy\":\"alloy\",\"steel\":\"steel\",\"premium\":\"premium\",\"sport\":\"sport\",\"powerMirror\":\"power_mirror\",\"power\":\"power\",\"quickOrder\":\"quick_order\",\"offRoad\":\"off_road\",\"wheelDamageValue\":\"no\",\"mechinicalDefectsValue\":{\"value\":\"no\",\"defectengine1\":null,\"defectengine2\":null,\"defectengine3\":null,\"defectengine4\":null,\"defectengine5\":null},\"windShieldReplaceValue\":{\"value\":\"yes\",\"after_market_part_detail\":null},\"smokedValueValue\":\"no\",\"keyDetailValue\":\"2\",\"vehicleAccidentDetailValue\":\"owned\",\"recieverEmail\":\"mottovero@gmail.com\"}', 'mottovero@gmail.com', '2023-07-10 15:45:48', '2023-07-23 20:28:13', '2023-07-23 20:28:13'),
(20, 2, '{\"state\":[\"georgia\"],\"zipCode\":\"67890\",\"milage\":\"098\",\"carInterierColorValues\":\"silver\",\"alloy\":\"alloy\",\"steel\":\"steel\",\"premium\":\"premium\",\"sport\":\"sport\",\"powerMirror\":\"power_mirror\",\"preferred\":\"preferred\",\"tow\":\"tow\",\"power\":\"power\",\"quickOrder\":\"quick_order\",\"value\":\"value\",\"se\":\"se\",\"offRoad\":\"off_road\",\"accidentValue\":\"2\",\"vehicleCondition\":\"amazing\",\"tireCondition\":\"GoodtoGo\",\"wheelDamageValue\":\"yes\",\"mechinicalDefectsValue\":{\"value\":\"yes\",\"defectengine1\":\"false\",\"defectengine2\":\"true\",\"defectengine3\":\"true\",\"defectengine4\":\"true\",\"defectengine5\":\"false\"},\"windShieldReplaceValue\":\"yes\",\"aftermarket\":{\"value\":\"yes\",\"after_market_part_detail\":\"4567\"},\"vehicleIssueStopDriving\":\"yes\",\"exteriorDamageValue\":{\"value\":\"yes\",\"scuff\":\"true\",\"scratches\":\"true\",\"chips\":\"true\",\"fading\":\"true\",\"dent\":\"true\",\"ding\":\"true\",\"rust\":\"false\",\"hail\":\"false\",\"other\":\"false\"},\"smokedValueValue\":\"yes\",\"keyDetailValue\":\"1\",\"vehicleAccidentDetailValue\":\"owned\",\"recieverEmail\":\"adad@ty.com\"}', 'adad@ty.com', '2023-07-22 00:07:35', '2023-07-22 00:07:35', NULL),
(21, 4, '{\"state\":[\"Please select the state\"],\"zipCode\":\"223443\",\"milage\":\"34555\",\"carInterierColorValues\":\"blue\",\"alloy\":\"alloy\",\"steel\":\"steel\",\"premium\":\"premium\",\"sport\":\"sport\",\"powerMirror\":\"power_mirror\",\"preferred\":\"preferred\",\"tow\":\"tow\",\"power\":\"power\",\"quickOrder\":\"quick_order\",\"value\":\"value\",\"se\":\"se\",\"offRoad\":\"off_road\",\"accidentValue\":\"2\",\"vehicleCondition\":\"amazing\",\"tireCondition\":\"GoodtoGo\",\"wheelDamageValue\":\"no\",\"mechinicalDefectsValue\":{\"value\":\"no\",\"defectengine\":null,\"defectengine1\":null,\"defectengine2\":null,\"defectengine3\":null,\"defectengine4\":null,\"defectengine5\":null},\"windShieldReplaceValue\":\"no\",\"aftermarket\":{\"value\":\"no\",\"after_market_part_detail\":null},\"vehicleIssueStopDriving\":\"no\",\"exteriorDamageValue\":{\"value\":\"no\",\"scuff\":null,\"scratches\":null,\"chips\":null,\"fading\":null,\"dent\":null,\"ding\":null,\"rust\":null,\"hail\":null,\"other\":null},\"smokedValueValue\":\"no\",\"vehicleAccidentDetailValue\":\"leased\",\"recieverEmail\":\"Mototto@gmail.com\"}', 'Mototto@gmail.com', '2023-07-23 20:28:13', '2023-07-23 20:28:13', NULL),
(22, 10, '{\"state\":[\"american samoa\"],\"zipCode\":\"1223332\",\"milage\":\"2344442\",\"alloy\":\"alloy\",\"steel\":\"steel\",\"premium\":\"premium\",\"sport\":\"sport\",\"powerMirror\":\"power_mirror\",\"preferred\":\"preferred\",\"tow\":\"tow\",\"power\":\"power\",\"quickOrder\":\"quick_order\",\"value\":\"value\",\"se\":\"se\",\"offRoad\":\"off_road\",\"accidentValue\":\"0\",\"vehicleCondition\":\"amazing\",\"tireCondition\":\"GoodtoGo\",\"wheelDamageValue\":\"yes\",\"mechinicalDefectsValue\":{\"value\":\"no\",\"defectengine\":null,\"defectengine1\":null,\"defectengine2\":null,\"defectengine3\":null,\"defectengine4\":null,\"defectengine5\":null},\"windShieldReplaceValue\":\"no\",\"aftermarket\":{\"value\":\"no\",\"after_market_part_detail\":null},\"vehicleIssueStopDriving\":\"no\",\"exteriorDamageValue\":{\"value\":\"no\",\"scuff\":null,\"scratches\":null,\"chips\":null,\"fading\":null,\"dent\":null,\"ding\":null,\"rust\":null,\"hail\":null,\"other\":null},\"smokedValueValue\":\"no\",\"keyDetailValue\":\"2\",\"vehicleAccidentDetailValue\":\"leased\",\"recieverEmail\":\"shu@gmail.com\"}', 'shu@gmail.com', '2023-07-29 18:00:14', '2023-07-29 18:00:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `reference_id` int(11) NOT NULL,
  `reference_type` varchar(255) DEFAULT NULL,
  `meta_title` longtext DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `meta_keywords` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `reference_id`, `reference_type`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(544, 255, 'blog', NULL, NULL, NULL, '2023-05-22 09:03:13', '2023-05-22 09:03:13'),
(545, 256, 'blog', NULL, NULL, NULL, '2023-05-22 09:05:00', '2023-05-22 09:05:00'),
(549, 260, 'blog', 'Nobis ullamco omnis', '<p>dddd</p>', 'Hummer', '2023-05-22 11:02:30', '2023-05-22 11:02:30'),
(552, 263, 'blog', NULL, NULL, NULL, '2023-05-22 11:24:13', '2023-05-22 11:24:13'),
(554, 265, 'blog', 'this is just for testing', '<p>this is just for testing</p>', 'this is just for testing', '2023-06-16 11:28:04', '2023-06-16 11:28:04'),
(555, 266, 'blog', 'Blog Data', '<p>Blog Data</p>', 'Blog Data', '2023-06-16 14:00:25', '2023-06-16 14:00:25'),
(556, 267, 'blog', 'testing blog meta', '<p>testing blog meta desc</p>', 'testing-blog', '2023-07-04 22:19:06', '2023-07-04 22:19:06'),
(557, 268, 'blog', 'blog title 2 title', '<p>blog title 2 meta</p>', 'blog title 2', '2023-07-04 22:21:07', '2023-07-04 22:21:07'),
(558, 269, 'blog', NULL, NULL, NULL, '2023-07-13 06:47:15', '2023-07-13 06:47:15'),
(559, 1, 'pressRoom', 'testing press release', '<p>testing press release</p>', 'testing press release', '2023-07-14 21:41:12', '2023-07-14 21:41:12'),
(560, 2, 'pressRoom', 'Press Coverage', '<p>Press Coverage</p>', 'Press Coverage', '2023-07-14 21:43:20', '2023-07-14 21:43:20'),
(561, 3, 'pressRoom', 'Insights', '<p>Insights</p>', 'Insights', '2023-07-14 21:44:45', '2023-07-14 21:44:45'),
(562, 270, 'blog', 'Article', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'tarticle', '2023-07-25 21:51:15', '2023-07-25 21:51:15'),
(563, 271, 'blog', 'Advice', '<div>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>&nbsp;</div>', NULL, '2023-07-25 21:53:14', '2023-07-25 21:53:14'),
(564, 272, 'blog', 'SELL MY CAR PAGE', '<p>SELL MY CAR PAGE</p>', 'SELL MY CAR PAGE', '2023-07-30 22:00:16', '2023-07-30 22:00:16'),
(565, 273, 'blog', 'SELL MY CAR PAGE', '<p>SELL MY CAR PAGE</p>', 'SELL MY CAR PAGE', '2023-07-30 22:01:12', '2023-07-30 22:01:12'),
(566, 274, 'blog', 'asdfasdfas', '<p>afasf</p>', NULL, '2023-07-31 22:05:29', '2023-07-31 22:05:29'),
(567, 275, 'blog', 'Article testing', NULL, NULL, '2023-08-08 20:28:58', '2023-08-08 20:28:58'),
(568, 276, 'blog', 'testing new blog on all pages article 2', NULL, 'testing new blog on all pages article 2', '2023-08-08 20:56:21', '2023-08-08 20:56:21'),
(569, 277, 'blog', 'asdfasfasfsad', '<p>weqweqweqw</p>', NULL, '2023-08-13 21:53:35', '2023-08-13 21:53:35'),
(570, 278, 'blog', NULL, '<p>testing for car preview</p>', NULL, '2023-08-13 22:33:02', '2023-08-13 22:33:02'),
(571, 279, 'blog', NULL, NULL, NULL, '2023-08-13 22:33:59', '2023-08-13 22:33:59'),
(575, 1, 'Expert_Review', NULL, NULL, NULL, '2023-08-28 21:48:27', '2023-08-28 21:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `code`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'AL', 'alabama', NULL, NULL, NULL),
(2, NULL, 'AK', 'alaska', NULL, NULL, NULL),
(3, NULL, 'AB', 'alberta', NULL, NULL, NULL),
(4, NULL, 'AS', 'american samoa', NULL, NULL, NULL),
(5, NULL, 'AZ', 'arizona', NULL, NULL, NULL),
(6, NULL, 'AR', 'arkansas', NULL, NULL, NULL),
(7, NULL, 'BC', 'british columbia', NULL, NULL, NULL),
(8, NULL, 'CA', 'california', NULL, NULL, NULL),
(9, NULL, 'PW', 'caroline islands', NULL, NULL, NULL),
(10, NULL, 'CO', 'colorado', NULL, NULL, NULL),
(11, NULL, 'CT', 'conneticut', NULL, NULL, NULL),
(12, NULL, 'DE', 'delaware', NULL, NULL, NULL),
(13, NULL, 'DC', 'district of columbia', NULL, NULL, NULL),
(14, NULL, 'FM', 'federated state', NULL, NULL, NULL),
(15, NULL, 'FL', 'florida', NULL, NULL, NULL),
(16, NULL, 'GA', 'georgia', NULL, NULL, NULL),
(17, NULL, 'GU', 'guam', NULL, NULL, NULL),
(18, NULL, 'HI', 'hawaii', NULL, NULL, NULL),
(19, NULL, 'ID', 'idoha', NULL, NULL, NULL),
(20, NULL, 'IL', 'illinois', NULL, NULL, NULL),
(21, NULL, 'IN', 'indiana', NULL, NULL, NULL),
(22, NULL, 'IA', 'iowa', NULL, NULL, NULL),
(23, NULL, 'KS', 'kansas', NULL, NULL, NULL),
(24, NULL, 'KY', 'kentucky', NULL, NULL, NULL),
(25, NULL, 'LA', 'lousiana', NULL, NULL, NULL),
(26, NULL, 'ME', 'maine', NULL, NULL, NULL),
(27, NULL, 'MB', 'manitoba', NULL, NULL, NULL),
(28, NULL, 'MP', 'mariana islands', NULL, NULL, NULL),
(29, NULL, 'MH', 'marshall islands', NULL, NULL, NULL),
(30, NULL, 'MD', 'maryland', NULL, NULL, NULL),
(31, NULL, 'MA', 'massachusetts', NULL, NULL, NULL),
(32, NULL, 'MI', 'michigan', NULL, NULL, NULL),
(33, NULL, 'MN', 'minnesota', NULL, NULL, NULL),
(34, NULL, 'MS', 'mississippi', NULL, NULL, NULL),
(35, NULL, 'MO', 'missouri', NULL, NULL, NULL),
(36, NULL, 'MT', 'montana', NULL, NULL, NULL),
(37, NULL, 'NE', 'nebraska', NULL, NULL, NULL),
(38, NULL, 'NV', 'nevada', NULL, NULL, NULL),
(39, NULL, 'NB', 'new brunswick', NULL, NULL, NULL),
(40, NULL, 'NH', 'new hampshire', NULL, NULL, NULL),
(41, NULL, 'NJ', 'new jersey', NULL, NULL, NULL),
(42, NULL, 'NM', 'new mexico', NULL, NULL, NULL),
(43, NULL, 'NY', 'new york', NULL, NULL, NULL),
(44, NULL, 'NF', 'newfoundland', NULL, NULL, NULL),
(45, NULL, 'NC', 'north carolina', NULL, NULL, NULL),
(46, NULL, 'ND', 'north dakota', NULL, NULL, NULL),
(47, NULL, 'NT', 'northwest territories', NULL, NULL, NULL),
(48, NULL, 'NS', 'nova scotia', NULL, NULL, NULL),
(49, NULL, 'NU', 'nunavut', NULL, NULL, NULL),
(50, NULL, 'OH', 'ohio', NULL, NULL, NULL),
(51, NULL, 'OK', 'oklahoma', NULL, NULL, NULL),
(52, NULL, 'ON', 'ontario', NULL, NULL, NULL),
(53, NULL, 'OR', 'oregon', NULL, NULL, NULL),
(54, NULL, 'PA', 'pennsylvania', NULL, NULL, NULL),
(55, NULL, 'PE', 'prince edward island', NULL, NULL, NULL),
(56, NULL, 'PR', 'puerto rico', NULL, NULL, NULL),
(57, NULL, 'PQ', 'quebec', NULL, NULL, NULL),
(58, NULL, 'RI', 'rhode island', NULL, NULL, NULL),
(59, NULL, 'SK', 'saskatchewan', NULL, NULL, NULL),
(60, NULL, 'SC', 'south carolina', NULL, NULL, NULL),
(61, NULL, 'SD', 'south dakota', NULL, NULL, NULL),
(62, NULL, 'TN', 'tennessee', NULL, NULL, NULL),
(63, NULL, 'TX', 'texas', NULL, NULL, NULL),
(64, NULL, 'UT', 'utah', NULL, NULL, NULL),
(65, NULL, 'VT', 'vermont', NULL, NULL, NULL),
(66, NULL, 'VI', 'virgin islands', NULL, NULL, NULL),
(67, NULL, 'VA', 'virginia', NULL, NULL, NULL),
(68, NULL, 'WA', 'washington', NULL, NULL, NULL),
(69, NULL, 'WV', 'west virginia', NULL, NULL, NULL),
(70, NULL, 'WI', 'wisconsin', NULL, NULL, NULL),
(71, NULL, 'WY', 'wyoming', NULL, NULL, NULL),
(72, NULL, 'YT', 'yukon territory', NULL, NULL, NULL),
(73, NULL, 'AE', 'armed forces-europe', NULL, NULL, NULL),
(74, NULL, 'AA', 'armed forces-americas', NULL, NULL, NULL),
(75, NULL, 'AP', 'armed forces-pacific', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `user_profile` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `user_id`, `title`, `slug`, `status`, `description`, `user_profile`, `created_at`, `updated_at`) VALUES
(38, 3, 'Mark N', 'dave-m', 1, '<p>Using Motorvero I was able to get all of the features that I wanted, well within my budget.</p>', 'testimonial16867123457366100114.webp', '2023-06-14 03:12:25', '2023-06-23 04:42:53'),
(39, 3, 'Robbert P', 'robbert-p', 1, '<p>Using Motorvero I was able to get all of the features that I wanted, well within my budget.</p>', 'testimonial168785667368467848.jpg', '2023-06-27 09:04:33', '2023-06-27 09:04:33'),
(42, 3, 'ok ok ok testing', 'ok-ok-ok-testing', 1, '<p>Okay the testing for review is a checking checking</p>', 'testimonial169188393012134676242.png', '2023-08-12 23:45:30', '2023-08-12 23:45:30'),
(43, 3, 'review testimonials technical', 'review-testimonials-technical', 1, '<p>she is a good boy</p>', 'testimonial169188411712132164277.png', '2023-08-12 23:48:37', '2023-08-12 23:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `dealer_type` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `map_link` varchar(255) DEFAULT NULL,
  `website_link` varchar(255) DEFAULT NULL,
  `monday_opening_hour` varchar(255) DEFAULT NULL,
  `monday_closing_hour` varchar(255) DEFAULT NULL,
  `tuesday_opening_hour` varchar(255) DEFAULT NULL,
  `tuesday_closing_hour` varchar(255) DEFAULT NULL,
  `wednesday_opening_hour` varchar(255) DEFAULT NULL,
  `wednesday_closing_hour` varchar(255) DEFAULT NULL,
  `thursday_opening_hour` varchar(255) DEFAULT NULL,
  `thursday_closing_hour` varchar(255) DEFAULT NULL,
  `friday_opening_hour` varchar(255) DEFAULT NULL,
  `friday_closing_hour` varchar(255) DEFAULT NULL,
  `saturday_opening_hour` varchar(255) DEFAULT NULL,
  `saturday_closing_hour` varchar(255) DEFAULT NULL,
  `sunday_opening_hour` varchar(255) DEFAULT NULL,
  `sunday_closing_hour` varchar(255) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `is_online` tinyint(4) NOT NULL DEFAULT 0,
  `last_activity` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `slug`, `dealer_type`, `email`, `email_verified_at`, `password`, `remember_token`, `phone_number`, `status`, `map_link`, `website_link`, `monday_opening_hour`, `monday_closing_hour`, `tuesday_opening_hour`, `tuesday_closing_hour`, `wednesday_opening_hour`, `wednesday_closing_hour`, `thursday_opening_hour`, `thursday_closing_hour`, `friday_opening_hour`, `friday_closing_hour`, `saturday_opening_hour`, `saturday_closing_hour`, `sunday_opening_hour`, `sunday_closing_hour`, `image`, `created_at`, `updated_at`, `is_admin`, `is_online`, `last_activity`) VALUES
(3, 'Motorvero', NULL, 1, 'info@eliteblue.net', NULL, '$2y$10$/PJeuTF9XwhHUIGM.ji.aucbNGu4/0g1Qy5anlX62EChVBwlyDLii', 'LxqNVkmCiCAPweOOtHzOBIhxfslAeQDEfon0OvPXP1X8qo6iT3BdyF600djm', '(336) 228-6493', 1, 'https://goo.gl/maps/UYJu7rSQgvzznQYs5', 'https://traveltriangle.com/', '07:30', '19:30', '07:40', '20:00', '07:45', '20:29', '07:50', '20:40', '08:00', '20:59', '20:30', '21:00', NULL, NULL, 'profile168657223612676998393.png', '2022-10-13 15:52:38', '2023-10-10 20:42:33', 1, 1, '2023-06-14 12:18:18'),
(6, 'Aalyanss', NULL, 2, 'muhammadaalyan313@gmail.com', NULL, '$2y$10$YC8KPORzFPsR.YswVlgGReKXvGEk.s/xJZKIF10DpRCf9ul4YLa5S', 'hYqbWuK4vwNhicoQYQuKOB3U7dnvCRGZVdpt3RfS8m1V5EqjlcIcbgIGDxe1', '00000000', 3, 'https://goo.gl/maps/yofRUcYEHYdvSnZQ9', 'https://www.amazon.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile16865727773182711498.jpg', '2023-05-11 14:44:12', '2023-08-14 19:07:35', 0, 1, '2023-06-14 12:18:18'),
(11, 'raja jee', NULL, NULL, 'raja@gmail.com', NULL, '$2y$10$nghs/tH.ujyu1xmGnmK8zuXHskJuT4.pJlFJxZ2/AvlCk/AYFBede', NULL, '0320202010', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-29 10:07:13', '2023-06-06 14:08:35', 0, 0, '2023-06-14 12:18:18'),
(12, 'con', NULL, 4, 'shu@gmail.com', NULL, '$2y$10$3zWUF9VnPdFLRxfmXfOzrOs2PBvMoQyz2r0t9xamgRSHSnF94T7YO', NULL, '2222255555', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '16860624633944988209.jpg', '2023-06-02 20:33:04', '2023-07-06 21:29:19', 0, 0, '2023-06-14 12:18:18'),
(13, 'Naveed Ullah Khan', NULL, NULL, 'naveedullahhere@gmail.com', NULL, '$2y$10$Ifd85O94OLv44FKCfEkHz.9X/tkb/TVugFkNAP5PHmdbZP1Ecv7CS', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-07 09:34:26', '2023-06-07 09:34:26', 0, 0, '2023-06-14 12:18:18'),
(14, 'Hunain', NULL, NULL, 'hunain@gmail.com', NULL, '$2y$10$8yMmPSR5N3.S4Uq.PN9xnOCdvS/ozeibkQAQaWtTlGD2T4MJWa2ge', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-12 15:03:46', '2023-06-12 15:03:46', 0, 0, '2023-06-14 12:18:18'),
(15, 'Mannan', 'mannan', NULL, 'mannan@gmail.com', NULL, '$2y$10$Cgs7rzZjsp82qt7RDnNoyuc/y6Lk/RDKkrBFsNt009GWYKDZv8n4a', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-12 15:05:05', '2023-06-12 15:05:05', 0, 0, '2023-06-14 12:18:18'),
(16, 'Dana', NULL, NULL, 'dana@gmail.com', NULL, '$2y$10$/PJeuTF9XwhHUIGM.ji.aucbNGu4/0g1Qy5anlX62EChVBwlyDLii', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-14 20:57:30', '2023-06-14 20:57:30', 0, 0, '2023-06-14 20:57:30'),
(17, 'bolo', NULL, NULL, 'bolo@gmail.com', NULL, '$2y$10$ITFrq.jNgQXPt8oDKjMFA.DgwC5zkz4vGdekUSxUXM1s38k7V7kee', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-14 20:59:15', '2023-06-14 20:59:15', 0, 0, '2023-06-14 20:59:15'),
(18, 'Muhammad Raheel', NULL, NULL, 'jamers786@gmail.com', NULL, '$2y$10$Kclc8J12TpNGT22nISsMzuytgnkaMduEYImqlPnk8gw1qQNJoZHNW', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-15 09:15:28', '2023-06-15 09:15:28', 0, 0, '2023-06-15 09:15:28'),
(19, 'Muhammad Raheel', 'muhammad-raheel', NULL, 'jamerss786@gmail.com', NULL, '$2y$10$nqm6RTuiGnziFCh0t0.Z/.4/xnIHRP39FSHq/pHsJmomKw3UzfAia', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 13:42:38', '2023-06-20 13:42:38', 0, 0, '2023-06-20 13:42:38'),
(20, 'raja', 'raja', NULL, 'rajahammad@gmail.com', NULL, '$2y$10$IhnOmLk/SQru2nAmbevoP.Nm05qA9SXmBDk9s7AM2XLKcbwpzjzrK', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 14:27:25', '2023-06-20 14:27:25', 0, 0, '2023-06-20 14:27:25'),
(21, 'Naveed Ullah Khan', 'naveed-ullah-khan', NULL, 'naveedullahere@gmail.com', NULL, '$2y$10$u5z4vmfJG38QcWttKVuTseloOB0V.ym3fhmN/xfZGyIlIEjYqrTLe', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-05 08:46:13', '2023-07-05 08:46:13', 0, 0, '2023-07-05 08:46:13'),
(22, 'motto me', 'motto', 1, 'mottoverocars@gmail.com', NULL, '$2y$10$m0ASwHOObNBSLSrDbDL4ReWrpikGD2wyxxw5p23VH1G8cpzE3QdWO', NULL, '243111222111', 3, NULL, 'motto.com', '07:00', '18:00', '07:53', '18:00', '07:00', '18:00', '07:00', '18:00', '07:00', '18:00', '07:00', '18:00', '07:00', '18:00', 'profile16920393331026417503.jpeg', '2023-07-09 23:36:22', '2023-08-14 19:07:08', 0, 0, '2023-07-09 23:36:22'),
(23, 'adfsfd', 'adfsfd', NULL, 'dfsadfad@ff.com', NULL, '$2y$10$hopM3n/a0LRyIeOPmLiZz./FviuVjVcSzyw/1nCBpD0s2T92xq28e', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-21 12:21:42', '2023-07-21 12:21:42', 0, 0, '2023-07-21 12:21:42'),
(24, 'testing', 'testing', NULL, 'testing@it.com', NULL, '$2y$10$/PJeuTF9XwhHUIGM.ji.aucbNGu4/0g1Qy5anlX62EChVBwlyDLii', 'ckZYxA984tF4ZU5lIzDD7k6MffrY3jK2so4nAxtKCefd3rMOhVtX4N67gU31', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-24 19:45:02', '2023-07-24 19:45:02', 0, 0, '2023-07-24 19:45:02'),
(25, 'Testingdf', 'testingdf', 4, 'testing@it.comsas', NULL, '$2y$10$7OtP5C7ykFEHnKwXWdXIRe9Eit6xJ4j6BAYG/ckX17lQiI9RrxXiq', NULL, '012312312323', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-24 22:32:25', '2023-07-24 22:42:21', 0, 0, '2023-07-24 22:32:25'),
(26, 'guy', 'guy', NULL, 'guy@gmail.com', NULL, '', NULL, '222333444', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-31 03:41:57', '2023-07-31 03:41:57', 0, 0, '2023-07-31 03:41:57'),
(27, 'rip', 'rip', NULL, 'guy@gmail.com', NULL, '', NULL, '44444444', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-31 03:47:15', '2023-07-31 03:47:15', 0, 0, '2023-07-31 03:47:15'),
(28, 'eliz', 'eliz', NULL, 'bong@gmail.com', NULL, '', NULL, '222111', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 14:48:58', '2023-08-27 14:48:58', 0, 0, '2023-08-27 14:48:58'),
(29, 'Kimberley', 'kimberley', NULL, 'zusajenu@mailinator.com', NULL, '', NULL, '+1 (571) 571-8345', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-20 07:06:03', '2023-10-20 07:06:03', 0, 0, '2023-10-20 07:06:03'),
(30, 'Fitzgerald', 'fitzgerald', NULL, 'gyqinotyg@mailinator.com', NULL, '', NULL, '+1 (597) 911-2475', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-20 07:06:11', '2023-10-20 07:06:11', 0, 0, '2023-10-20 07:06:11'),
(31, 'shasha', 'shasha', 3, 'shasha@gmail.com', NULL, '$2y$10$6ew3UHP9g6qCTcMvlf/pqeT9BSuw.ixyAKUkt95eUr69WqWZZ3TTW', NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-10 06:25:52', '2024-01-10 06:25:52', 0, 0, '2024-01-10 06:25:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_nows`
--
ALTER TABLE `apply_nows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_page_categories`
--
ALTER TABLE `blog_page_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `make_ids_foreign` (`make_id`),
  ADD KEY `model_ids_foreign` (`model_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_dealers`
--
ALTER TABLE `contact_dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealer_details`
--
ALTER TABLE `dealer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pages`
--
ALTER TABLE `detail_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert_reviews`
--
ALTER TABLE `expert_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lafasta_access`
--
ALTER TABLE `lafasta_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makes`
--
ALTER TABLE `makes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`),
  ADD KEY `messages_receiver_foreign` (`receiver`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_ids_foreigns` (`make_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletters_email_unique` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_talent`
--
ALTER TABLE `our_talent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`(191),`tokenable_id`);

--
-- Indexes for table `press_rooms`
--
ALTER TABLE `press_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_qualifieds`
--
ALTER TABLE `pre_qualifieds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `request_information`
--
ALTER TABLE `request_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `savelikes`
--
ALTER TABLE `savelikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_car_logs`
--
ALTER TABLE `sell_car_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_car_more_details`
--
ALTER TABLE `sell_car_more_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_foreign_` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_nows`
--
ALTER TABLE `apply_nows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `blog_page_categories`
--
ALTER TABLE `blog_page_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_dealers`
--
ALTER TABLE `contact_dealers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dealer_details`
--
ALTER TABLE `dealer_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_pages`
--
ALTER TABLE `detail_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expert_reviews`
--
ALTER TABLE `expert_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `lafasta_access`
--
ALTER TABLE `lafasta_access`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `makes`
--
ALTER TABLE `makes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1126;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `our_talent`
--
ALTER TABLE `our_talent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `press_rooms`
--
ALTER TABLE `press_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pre_qualifieds`
--
ALTER TABLE `pre_qualifieds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reactions`
--
ALTER TABLE `reactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `request_information`
--
ALTER TABLE `request_information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `savelikes`
--
ALTER TABLE `savelikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sell_car_logs`
--
ALTER TABLE `sell_car_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sell_car_more_details`
--
ALTER TABLE `sell_car_more_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=576;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `model_ids_foreigns` FOREIGN KEY (`make_id`) REFERENCES `makes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
