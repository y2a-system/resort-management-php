-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2025 at 03:48 AM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resort_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_list`
--

CREATE TABLE `activity_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `image_path` text NOT NULL,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `activity_list`
--

INSERT INTO `activity_list` (`id`, `name`, `description`, `status`, `image_path`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, 'Jet Ski Adventure Tour', '&lt;p&gt;Hop on a jet ski and take off on a high-speed adventure along the coastline. Your expert guide will lead you on a scenic tour, showing off hidden coves, stunning beaches, and perhaps even some nearby islands. Whether you&rsquo;re a first-timer or a seasoned rider, this exciting excursion offers thrills and breathtaking views.&lt;/p&gt;&lt;p&gt;Start with an adrenaline-pumping jet ski ride as you zip across the water to reach a pristine snorkeling spot. After an exciting ride, dock your jet skis and dive into crystal-clear waters to explore vibrant coral reefs, tropical fish, and underwater landscapes. A perfect way to combine speed and serenity!&lt;br&gt;&lt;/p&gt;', 1, 'uploads/activitys/1.png?v=1641618733', 0, '2025-01-30 13:12:13', '2025-12-19 09:14:59'),
(2, 'Snorkeling with Sea Turtles', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;&quot;&gt;Experience the magic of swimming alongside graceful sea turtles in their natural environment. This guided snorkeling tour takes you to turtle hotspots, where you&#039;ll have the opportunity to see these majestic creatures up close as they glide through the warm waters.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;&quot;&gt;A fun, safe, and educational snorkeling experience designed for families. This tour is tailored to all ages, with shallow water areas perfect for younger children and educational guides teaching everyone about the marine life and ecosystems. A wonderful way to introduce kids to the beauty of the ocean!&lt;br&gt;&lt;/p&gt;', 1, 'uploads/activitys/2.png?v=1641618857', 0, '2025-01-22 13:14:17', '2025-12-19 09:15:08'),
(3, 'Scuba Dive: Reef Exploration', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot; open=&quot;&quot; sans&quot;,=&quot;&quot; arial,=&quot;&quot; sans-serif;=&quot;&quot; font-size:=&quot;&quot; 14px;&quot;=&quot;&quot;&gt;For experienced divers, we offer advanced scuba diving trips to explore deeper, more complex reef systems. Dive into crystal-clear waters to see diverse marine life like sea turtles, rays, and schools of tropical fish. Our dive masters will lead you to some of the region&rsquo;s most spectacular dive sites.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot; open=&quot;&quot; sans&quot;,=&quot;&quot; arial,=&quot;&quot; sans-serif;=&quot;&quot; font-size:=&quot;&quot; 14px;&quot;=&quot;&quot;&gt;&lt;span style=&quot;color: rgb(33, 37, 41); font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem; text-align: left;&quot;&gt;Take your diving to the next level with an underwater photography course! Learn how to capture the beauty of the ocean with a camera, including techniques for lighting, composition, and capturing the right angles of coral, fish, and other marine life. At the end of the session, you&rsquo;ll have stunning underwater photos to remember your adventure.&lt;/span&gt;&lt;/p&gt;', 1, 'uploads/activitys/3.png?v=1641618898', 0, '2022-01-08 13:14:58', '2025-12-19 07:55:27'),
(4, 'Sunset Island Hopping', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;&quot;&gt;Set sail on a romantic sunset island-hopping cruise. Visit a few nearby secluded islands as the sun begins to set, painting the sky in shades of pink and orange. Enjoy cocktails, appetizers, and the serene beauty of the ocean as you hop from one picturesque island to another, each offering its own unique charm.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;&quot;&gt;Embark on an adventurous island-hopping tour that takes you to a series of uninhabited islands. Each stop offers a new underwater world to explore with your snorkel gear. From colorful coral reefs to schools of tropical fish, every island provides a unique opportunity for marine discovery. After snorkeling, enjoy a beach picnic or relax in the sun before continuing your journey.&lt;br&gt;&lt;/p&gt;', 1, 'uploads/activitys/4.png?v=1641618928', 0, '2022-01-08 13:15:27', '2025-12-19 07:57:04'),
(5, 'test', '&lt;p&gt;test&lt;/p&gt;', 1, 'uploads/activitys/5.png?v=1641618949', 1, '2022-01-08 13:15:49', '2025-12-19 07:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `message_list`
--

CREATE TABLE `message_list` (
  `id` int(30) NOT NULL,
  `fullname` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `message_list`
--

INSERT INTO `message_list` (`id`, `fullname`, `contact`, `email`, `message`, `status`, `date_created`) VALUES
(1, 'Michael Johnson', '4155551023', 'michael.johnson@example.com', 'Hello, I would like to check room availability for early December. Please let me know. Thank you.', 0, '2025-12-01 08:15:00'),
(2, 'Emily Carter', '2125553344', 'emily.carter@example.com', 'Hi, do you offer airport pickup service? I am planning a short stay.', 1, '2025-12-02 09:00:00'),
(3, 'Daniel Brown', '3125558899', 'daniel.brown@example.com', 'Good morning, I need information about your room rates and any discounts available.', 0, '2025-12-03 09:30:00'),
(4, 'Sarah Miller', '2135557788', 'sarah.miller@example.com', 'Hello, I made a reservation and would like to confirm my check-in time.', 1, '2025-12-04 10:10:00'),
(5, 'Christopher Wilson', '3055556677', 'chris.wilson@example.com', 'Hi there, is breakfast included with the room booking?', 0, '2025-12-05 10:45:00'),
(6, 'Jessica Anderson', '2065554455', 'jessica.anderson@example.com', 'I am traveling with family. Do you have connecting rooms available?', 1, '2025-12-06 11:20:00'),
(7, 'Matthew Taylor', '6175559988', 'matt.taylor@example.com', 'Hello, I need to modify my reservation dates. Please advise.', 0, '2025-12-07 12:00:00'),
(8, 'Ashley Thomas', '7025552233', 'ashley.thomas@example.com', 'Hi, are pets allowed in your hotel? I am traveling with a small dog.', 1, '2025-12-08 12:35:00'),
(9, 'Joshua Martinez', '2105557788', 'joshua.martinez@example.com', 'Good afternoon, can you provide parking information for guests?', 0, '2025-12-09 13:10:00'),
(10, 'Brittany Garcia', '6025551199', 'brittany.garcia@example.com', 'Hello, I have a question regarding late check-out options.', 1, '2025-12-10 13:45:00'),
(11, 'Andrew Robinson', '4045556677', 'andrew.robinson@example.com', 'Hi, I submitted a booking request and have not received confirmation yet.', 0, '2025-12-11 14:20:00'),
(12, 'Lauren Clark', '5035558822', 'lauren.clark@example.com', 'Good day, do you have meeting or conference room facilities?', 1, '2025-12-12 15:00:00'),
(13, 'Ryan Lewis', '8015554477', 'ryan.lewis@example.com', 'Hello, I would like to know your cancellation policy.', 0, '2025-12-13 15:35:00'),
(14, 'Megan Walker', '6145553344', 'megan.walker@example.com', 'Hi, are there any special offers for long stays?', 1, '2025-12-14 16:10:00'),
(15, 'Kevin Hall', '8165557766', 'kevin.hall@example.com', 'Good evening, do you provide shuttle service to nearby attractions?', 0, '2025-12-15 16:45:00'),
(16, 'Nicole Allen', '3035559911', 'nicole.allen@example.com', 'Hello, I forgot an item during my last stay. Can you assist?', 1, '2025-12-16 17:20:00'),
(17, 'Brandon Young', '6155552244', 'brandon.young@example.com', 'Hi, can you confirm if my reservation includes free Wi-Fi?', 1, '2025-12-17 17:55:00'),
(18, 'Samantha King', '6085555533', 'samantha.king@example.com', 'Good morning, what time does breakfast service start?', 1, '2025-12-18 08:25:00'),
(19, 'Justin Wright', '6515558899', 'justin.wright@example.com', 'Hello, I would like to request an invoice for my previous stay.', 1, '2025-12-19 09:05:00'),
(20, 'Olivia Lopez', '9095556622', 'olivia.lopez@example.com', 'Hi, I am interested in booking multiple rooms for a group. Please contact me.', 1, '2025-12-20 09:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_list`
--

CREATE TABLE `reservation_list` (
  `id` int(30) NOT NULL,
  `code` varchar(100) NOT NULL,
  `room_id` int(30) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `fullname` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=Pending, 1 = Confirmed, 2=Cancelled',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `reservation_list`
--

INSERT INTO `reservation_list` (`id`, `code`, `room_id`, `check_in`, `check_out`, `fullname`, `contact`, `email`, `address`, `status`, `date_created`, `date_updated`) VALUES
(1, '202512-0001', 3, '2025-12-01', '2025-12-03', 'Michael Johnson', '4155551023', 'michael.johnson@example.com', '123 Main St, San Francisco, CA', 1, '2025-12-01 09:00:00', '2025-12-01 09:00:00'),
(2, '202512-0002', 6, '2025-12-02', '2025-12-05', 'Emily Carter', '2125553344', 'emily.carter@example.com', '45 Park Ave, New York, NY', 0, '2025-12-02 09:10:00', '2025-12-02 09:10:00'),
(3, '202512-0003', 1, '2025-12-03', '2025-12-06', 'Daniel Brown', '3125558899', 'daniel.brown@example.com', '780 Lake Shore Dr, Chicago, IL', 1, '2025-12-03 09:20:00', '2025-12-03 09:20:00'),
(4, '202512-0004', 5, '2025-12-04', '2025-12-06', 'Sarah Miller', '2135557788', 'sarah.miller@example.com', '900 Sunset Blvd, Los Angeles, CA', 2, '2025-12-04 09:30:00', '2025-12-04 09:30:00'),
(5, '202512-0005', 7, '2025-12-05', '2025-12-08', 'Christopher Wilson', '3055556677', 'chris.wilson@example.com', '210 Ocean Dr, Miami, FL', 1, '2025-12-05 09:40:00', '2025-12-05 09:40:00'),
(6, '202512-0006', 2, '2025-12-06', '2025-12-09', 'Jessica Anderson', '2065554455', 'jessica.anderson@example.com', '66 Pine St, Seattle, WA', 0, '2025-12-06 09:50:00', '2025-12-06 09:50:00'),
(7, '202512-0007', 4, '2025-12-07', '2025-12-09', 'Matthew Taylor', '6175559988', 'matt.taylor@example.com', '14 Beacon St, Boston, MA', 1, '2025-12-07 10:00:00', '2025-12-07 10:00:00'),
(8, '202512-0008', 6, '2025-12-08', '2025-12-11', 'Ashley Thomas', '7025552233', 'ashley.thomas@example.com', '500 Strip Ave, Las Vegas, NV', 2, '2025-12-08 10:10:00', '2025-12-08 10:10:00'),
(9, '202512-0009', 1, '2025-12-09', '2025-12-12', 'Joshua Martinez', '2105557788', 'joshua.martinez@example.com', '88 River Walk, San Antonio, TX', 1, '2025-12-09 10:20:00', '2025-12-09 10:20:00'),
(10, '202512-0010', 5, '2025-12-10', '2025-12-13', 'Brittany Garcia', '6025551199', 'brittany.garcia@example.com', '320 Desert Rd, Phoenix, AZ', 0, '2025-12-10 10:30:00', '2025-12-10 10:30:00'),
(11, '202512-0011', 3, '2025-12-11', '2025-12-14', 'Andrew Robinson', '4045556677', 'andrew.robinson@example.com', '75 Peachtree St, Atlanta, GA', 1, '2025-12-11 10:40:00', '2025-12-11 10:40:00'),
(12, '202512-0012', 7, '2025-12-12', '2025-12-15', 'Lauren Clark', '5035558822', 'lauren.clark@example.com', '190 Pearl St, Portland, OR', 2, '2025-12-12 10:50:00', '2025-12-12 10:50:00'),
(13, '202512-0013', 2, '2025-12-13', '2025-12-15', 'Ryan Lewis', '8015554477', 'ryan.lewis@example.com', '410 Canyon Rd, Salt Lake City, UT', 1, '2025-12-13 11:00:00', '2025-12-13 11:00:00'),
(14, '202512-0014', 6, '2025-12-14', '2025-12-17', 'Megan Walker', '6145553344', 'megan.walker@example.com', '50 High St, Columbus, OH', 0, '2025-12-14 11:10:00', '2025-12-14 11:10:00'),
(15, '202512-0015', 4, '2025-12-15', '2025-12-18', 'Kevin Hall', '8165557766', 'kevin.hall@example.com', '99 Market St, Kansas City, MO', 1, '2025-12-15 11:20:00', '2025-12-15 11:20:00'),
(16, '202512-0016', 1, '2025-12-16', '2025-12-18', 'Nicole Allen', '3035559911', 'nicole.allen@example.com', '610 Broadway, Denver, CO', 2, '2025-12-16 11:30:00', '2025-12-16 11:30:00'),
(17, '202512-0017', 7, '2025-12-17', '2025-12-20', 'Brandon Young', '6155552244', 'brandon.young@example.com', '120 Music Row, Nashville, TN', 1, '2025-12-17 11:40:00', '2025-12-17 11:40:00'),
(18, '202512-0018', 5, '2025-12-18', '2025-12-21', 'Samantha King', '6085555533', 'samantha.king@example.com', '200 State St, Madison, WI', 0, '2025-12-18 11:50:00', '2025-12-18 11:50:00'),
(19, '202512-0019', 3, '2025-12-19', '2025-12-22', 'Justin Wright', '6515558899', 'justin.wright@example.com', '77 Summit Ave, St Paul, MN', 1, '2025-12-19 12:00:00', '2025-12-19 12:00:00'),
(20, '202512-0020', 2, '2025-12-20', '2025-12-23', 'Olivia Lopez', '9095556622', 'olivia.lopez@example.com', '340 Valley Rd, Riverside, CA', 2, '2025-12-20 12:10:00', '2025-12-20 12:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `room_list`
--

CREATE TABLE `room_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `type` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `image_path` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `room_list`
--

INSERT INTO `room_list` (`id`, `name`, `type`, `description`, `price`, `image_path`, `status`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, 'Standard Room', 'Single', '&lt;p data-start=&quot;190&quot; data-end=&quot;687&quot;&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;This is your classic hotel room&mdash;comfortable and convenient, perfect for travelers looking for a no-frills stay.&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;The &lt;/span&gt;&lt;strong data-start=&quot;308&quot; data-end=&quot;325&quot; style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Standard Room&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt; comes with a plush queen-sized bed, a private bathroom, air conditioning, and a TV for all your entertainment needs. You&rsquo;ll also find simple amenities like a mini-fridge, free Wi-Fi, and a cozy seating area for unwinding after a day of exploration.&lt;/span&gt;&lt;/div&gt;\r\n&lt;strong data-start=&quot;577&quot; data-end=&quot;593&quot;&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;strong data-start=&quot;577&quot; data-end=&quot;593&quot; style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Perfect for:&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem; font-weight: 400;&quot;&gt; Solo travelers, couples, or anyone looking for a budget-friendly option to rest and recharge.&lt;/span&gt;&lt;/div&gt;&lt;/strong&gt;&lt;/p&gt;', 200, 'uploads/rooms/1.png?v=1641606821', 1, 0, '2022-01-08 09:53:41', '2025-12-18 09:30:51'),
(2, 'Deluxe Room', 'Double', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;&quot;&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Elevate your stay with our &lt;/span&gt;&lt;strong data-start=&quot;1825&quot; data-end=&quot;1840&quot; style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Deluxe Room&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;, offering additional space and upgraded furnishings for a more luxurious experience.&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;This room features a king-sized bed, premium linens, a large flat-screen TV, and a cozy sitting area where you can relax after a long day of activities. The bathroom is spacious with high-end toiletries and a rain shower to pamper yourself.&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;For a little extra luxury, some Deluxe Rooms even include a private balcony with stunning views of the resort or garden.&lt;/span&gt;&lt;/div&gt;\r\n&lt;strong data-start=&quot;2294&quot; data-end=&quot;2310&quot;&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;strong data-start=&quot;2294&quot; data-end=&quot;2310&quot; style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Perfect for:&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem; font-weight: 400;&quot;&gt; Guests who enjoy more space and comfort but still want great value.&lt;/span&gt;&lt;/div&gt;&lt;/strong&gt;&lt;/p&gt;', 500, 'uploads/rooms/2.png?v=1641608206', 1, 0, '2022-01-08 10:16:45', '2025-12-18 09:31:43'),
(3, 'Family Room', 'Family', '&lt;p data-start=&quot;1297&quot; data-end=&quot;1494&quot;&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Our &lt;/span&gt;&lt;strong data-start=&quot;2420&quot; data-end=&quot;2435&quot; style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Family Room&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt; is designed with families in mind, offering plenty of room for everyone to spread out and enjoy their vacation.&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;This spacious room features a king-sized bed for the parents and additional beds or a sofa bed for the kids. A separate seating area ensures everyone has a place to relax together or on their own.&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;The room also includes a mini-fridge for snacks, a TV with kid-friendly programming, and a bathroom with ample counter space.&lt;/span&gt;&lt;/div&gt;\r\n&lt;strong data-start=&quot;2877&quot; data-end=&quot;2893&quot;&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;strong data-start=&quot;2877&quot; data-end=&quot;2893&quot; style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Perfect for:&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem; font-weight: 400;&quot;&gt; Families who want to stay together in one comfortable room with all the conveniences they need.&lt;/span&gt;&lt;/div&gt;&lt;/strong&gt;&lt;/p&gt;', 600, 'uploads/rooms/3.png?v=1641608243', 1, 0, '2022-01-08 10:17:23', '2025-12-18 09:31:54'),
(4, 'Beachfront Room', 'Double', '&lt;p data-start=&quot;778&quot; data-end=&quot;1015&quot;&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Get as close as possible to the beach with our &lt;/span&gt;&lt;strong data-start=&quot;1228&quot; data-end=&quot;1247&quot; style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Beachfront Room&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;, where the sand is only a few steps away from your door.&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;This spacious room features a king-sized bed, floor-to-ceiling windows, and direct access to the beach, so you can enjoy the soothing sound of the surf and the cool ocean breeze from the comfort of your room.&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Whether you&rsquo;re lounging by the shore or watching the waves roll in from your private terrace, you&rsquo;ll feel fully immersed in the coastal vibe.&lt;/span&gt;&lt;/div&gt;\r\n&lt;strong data-start=&quot;1662&quot; data-end=&quot;1678&quot;&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;strong data-start=&quot;1662&quot; data-end=&quot;1678&quot; style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Perfect for:&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem; font-weight: 400;&quot;&gt; Beach lovers, sun-seekers, and anyone wanting that true &ldquo;beachfront escape&rdquo; experience.&lt;/span&gt;&lt;/div&gt;&lt;/strong&gt;&lt;/p&gt;', 450, 'uploads/rooms/4.png?v=1641608280', 1, 0, '2022-01-08 10:17:59', '2025-12-18 09:31:34'),
(5, 'Sea View Room', 'Double', '&lt;p data-start=&quot;721&quot; data-end=&quot;1144&quot;&gt;&lt;/p&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &quot; source=&quot;&quot; sans=&quot;&quot; pro&quot;,=&quot;&quot; -apple-system,=&quot;&quot; blinkmacsystemfont,=&quot;&quot; &quot;segoe=&quot;&quot; ui&quot;,=&quot;&quot; roboto,=&quot;&quot; &quot;helvetica=&quot;&quot; neue&quot;,=&quot;&quot; arial,=&quot;&quot; sans-serif,=&quot;&quot; &quot;apple=&quot;&quot; color=&quot;&quot; emoji&quot;,=&quot;&quot; ui=&quot;&quot; symbol&quot;;=&quot;&quot; font-size:=&quot;&quot; 1rem;&quot;=&quot;&quot;&gt;Wake up to the sound of the waves crashing against the shore with our &lt;/span&gt;&lt;strong data-start=&quot;791&quot; data-end=&quot;808&quot; style=&quot;font-family: &quot; source=&quot;&quot; sans=&quot;&quot; pro&quot;,=&quot;&quot; -apple-system,=&quot;&quot; blinkmacsystemfont,=&quot;&quot; &quot;segoe=&quot;&quot; ui&quot;,=&quot;&quot; roboto,=&quot;&quot; &quot;helvetica=&quot;&quot; neue&quot;,=&quot;&quot; arial,=&quot;&quot; sans-serif,=&quot;&quot; &quot;apple=&quot;&quot; color=&quot;&quot; emoji&quot;,=&quot;&quot; ui=&quot;&quot; symbol&quot;;=&quot;&quot; font-size:=&quot;&quot; 1rem;&quot;=&quot;&quot;&gt;Sea View Room&lt;/strong&gt;&lt;span style=&quot;font-family: &quot; source=&quot;&quot; sans=&quot;&quot; pro&quot;,=&quot;&quot; -apple-system,=&quot;&quot; blinkmacsystemfont,=&quot;&quot; &quot;segoe=&quot;&quot; ui&quot;,=&quot;&quot; roboto,=&quot;&quot; &quot;helvetica=&quot;&quot; neue&quot;,=&quot;&quot; arial,=&quot;&quot; sans-serif,=&quot;&quot; &quot;apple=&quot;&quot; color=&quot;&quot; emoji&quot;,=&quot;&quot; ui=&quot;&quot; symbol&quot;;=&quot;&quot; font-size:=&quot;&quot; 1rem;&quot;=&quot;&quot;&gt;.&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &quot; source=&quot;&quot; sans=&quot;&quot; pro&quot;,=&quot;&quot; -apple-system,=&quot;&quot; blinkmacsystemfont,=&quot;&quot; &quot;segoe=&quot;&quot; ui&quot;,=&quot;&quot; roboto,=&quot;&quot; &quot;helvetica=&quot;&quot; neue&quot;,=&quot;&quot; arial,=&quot;&quot; sans-serif,=&quot;&quot; &quot;apple=&quot;&quot; color=&quot;&quot; emoji&quot;,=&quot;&quot; ui=&quot;&quot; symbol&quot;;=&quot;&quot; font-size:=&quot;&quot; 1rem;&quot;=&quot;&quot;&gt;This room offers the same comforts as the standard room, but with the added bonus of breathtaking views of the ocean from your window or private balcony. Enjoy the morning sunrise or evening sunset as you sip your coffee or cocktail.&lt;/span&gt;&lt;/div&gt;\r\n&lt;strong data-start=&quot;1048&quot; data-end=&quot;1064&quot;&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;strong data-start=&quot;1048&quot; data-end=&quot;1064&quot; style=&quot;font-family: &quot; source=&quot;&quot; sans=&quot;&quot; pro&quot;,=&quot;&quot; -apple-system,=&quot;&quot; blinkmacsystemfont,=&quot;&quot; &quot;segoe=&quot;&quot; ui&quot;,=&quot;&quot; roboto,=&quot;&quot; &quot;helvetica=&quot;&quot; neue&quot;,=&quot;&quot; arial,=&quot;&quot; sans-serif,=&quot;&quot; &quot;apple=&quot;&quot; color=&quot;&quot; emoji&quot;,=&quot;&quot; ui=&quot;&quot; symbol&quot;;=&quot;&quot; font-size:=&quot;&quot; 1rem;&quot;=&quot;&quot;&gt;Perfect for:&lt;/strong&gt;&lt;span style=&quot;font-family: &quot; source=&quot;&quot; sans=&quot;&quot; pro&quot;,=&quot;&quot; -apple-system,=&quot;&quot; blinkmacsystemfont,=&quot;&quot; &quot;segoe=&quot;&quot; ui&quot;,=&quot;&quot; roboto,=&quot;&quot; &quot;helvetica=&quot;&quot; neue&quot;,=&quot;&quot; arial,=&quot;&quot; sans-serif,=&quot;&quot; &quot;apple=&quot;&quot; color=&quot;&quot; emoji&quot;,=&quot;&quot; ui=&quot;&quot; symbol&quot;;=&quot;&quot; font-size:=&quot;&quot; 1rem;=&quot;&quot; font-weight:=&quot;&quot; 400;&quot;=&quot;&quot;&gt; Guests who want the relaxing ambiance of the beach without sacrificing comfort.&lt;/span&gt;&lt;/div&gt;&lt;/strong&gt;&lt;p&gt;&lt;/p&gt;', 400, 'uploads/rooms/5.png?v=1641608319', 1, 0, '2022-01-08 10:18:39', '2025-12-18 09:32:10'),
(6, 'Junior Suite', 'Single', '&lt;p&gt;A &lt;strong data-start=&quot;3025&quot; data-end=&quot;3041&quot;&gt;Junior Suite&lt;/strong&gt; offers the ideal balance of space and comfort, featuring a spacious main room with a king-sized bed and a separate lounge area with a comfy sofa.&lt;br data-start=&quot;3187&quot; data-end=&quot;3190&quot;&gt;\r\nThis open-plan suite gives you the flexibility to work, eat, or relax in a separate space without leaving your room. It also comes with a luxurious bathroom that includes both a bathtub and shower.&lt;br data-start=&quot;3387&quot; data-end=&quot;3390&quot;&gt;\r\nSome Junior Suites come with a balcony or terrace, so you can enjoy some fresh air while reading or catching up with loved ones.&lt;br data-start=&quot;3518&quot; data-end=&quot;3521&quot;&gt;\r\n&lt;strong data-start=&quot;3521&quot; data-end=&quot;3537&quot;&gt;Perfect for:&lt;/strong&gt; Guests who want a bit more space without the need for separate rooms.&lt;br&gt;&lt;/p&gt;', 200, 'uploads/rooms/6.png?v=1766050424', 1, 0, '2025-12-18 09:33:44', '2025-12-18 09:33:44'),
(7, 'Presidential / Luxury Suite', 'Family', '&lt;p&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;For those who demand nothing but the best, our &lt;/span&gt;&lt;strong data-start=&quot;5344&quot; data-end=&quot;5376&quot; style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Presidential or Luxury Suite&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt; is the ultimate indulgence.&lt;/span&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;This spacious suite offers a combination of opulent d&eacute;cor, panoramic views, and top-of-the-line amenities. It includes a large living room, a private dining area, a king-sized bedroom, and a luxurious bathroom with a soaking tub, rain shower, and designer toiletries. You&rsquo;ll also receive personalized services, such as a dedicated butler or concierge, to ensure that every need is met.&lt;/span&gt;&lt;/div&gt;\r\n&lt;strong data-start=&quot;5795&quot; data-end=&quot;5811&quot;&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;strong data-start=&quot;5795&quot; data-end=&quot;5811&quot; style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem;&quot;&gt;Perfect for:&lt;/strong&gt;&lt;span style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; font-size: 1rem; font-weight: 400;&quot;&gt; VIP guests, celebrities, or anyone who wants to enjoy the absolute pinnacle of luxury.&lt;/span&gt;&lt;/div&gt;&lt;/strong&gt;&lt;/p&gt;', 700, 'uploads/rooms/7.png?v=1766050493', 1, 0, '2025-12-18 09:34:53', '2025-12-18 09:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Resort Management System'),
(6, 'short_name', 'Beach Resort'),
(11, 'logo', 'uploads/logo-1766049602.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover-1766044479.png'),
(15, 'content', 'Array'),
(16, 'email', 'reception@resort-hotel.com'),
(17, 'contact', '01854698789 / 78945632'),
(18, 'from_time', '11:00'),
(19, 'to_time', '21:30'),
(20, 'address', '123 Street, New York City, US, 2306');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=not verified, 1 = verified',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `status`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', NULL, 'Admin', 'admin', 'e82ddef8b431030568cf7af3edf5a276', 'uploads/avatar-1.png?v=1639468007', NULL, 1, 1, '2021-01-20 14:02:37', '2025-12-29 03:04:55'),
(2, 'User', NULL, '', 'user', 'cd74fae0a3adf459f73bbf187607ccea', 'uploads/avatar-5.png?v=1641622906', NULL, 2, 1, '2022-01-08 14:21:46', '2025-12-19 09:16:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_list`
--
ALTER TABLE `activity_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_list`
--
ALTER TABLE `message_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_list`
--
ALTER TABLE `reservation_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room_list`
--
ALTER TABLE `room_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
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
-- AUTO_INCREMENT for table `activity_list`
--
ALTER TABLE `activity_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message_list`
--
ALTER TABLE `message_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reservation_list`
--
ALTER TABLE `reservation_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `room_list`
--
ALTER TABLE `room_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation_list`
--
ALTER TABLE `reservation_list`
  ADD CONSTRAINT `reservation_list_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room_list` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
