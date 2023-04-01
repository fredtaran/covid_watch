-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 01:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_watch`
--
CREATE DATABASE IF NOT EXISTS `covid_watch` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `covid_watch`;

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `nationality` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`nationality`) VALUES
('Afghan'),
('Albanian'),
('Algerian'),
('American'),
('Andorran'),
('Angolan'),
('Anguillan'),
('Argentine'),
('Armenian'),
('Australian'),
('Austrian'),
('Azerbaijani'),
('Bahamian'),
('Bahraini'),
('Bangladeshi'),
('Barbadian'),
('Belarusian'),
('Belgian'),
('Belizean'),
('Beninese'),
('Bermudian'),
('Bhutanese'),
('Bolivian'),
('Botswanan'),
('Brazilian'),
('British'),
('British Virgin Islander'),
('Bruneian'),
('Bulgarian'),
('Burkinan'),
('Burmese'),
('Burundian'),
('Cambodian'),
('Cameroonian'),
('Canadian'),
('Cape Verdean'),
('Cayman Islander'),
('Central African'),
('Chadian'),
('Chilean'),
('Chinese'),
('Citizen of Antigua and Barbuda'),
('Citizen of Bosnia and Herzegovina'),
('Citizen of Guinea-Bissau'),
('Citizen of Kiribati'),
('Citizen of Seychelles'),
('Citizen of the Dominican Republic'),
('Citizen of Vanuatu '),
('Colombian'),
('Comoran'),
('Congolese (Congo)'),
('Congolese (DRC)'),
('Cook Islander'),
('Costa Rican'),
('Croatian'),
('Cuban'),
('Cymraes'),
('Cymro'),
('Cypriot'),
('Czech'),
('Danish'),
('Djiboutian'),
('Dominican'),
('Dutch'),
('East Timorese'),
('Ecuadorean'),
('Egyptian'),
('Emirati'),
('English'),
('Equatorial Guinean'),
('Eritrean'),
('Estonian'),
('Ethiopian'),
('Faroese'),
('Fijian'),
('Filipino'),
('Finnish'),
('French'),
('Gabonese'),
('Gambian'),
('Georgian'),
('German'),
('Ghanaian'),
('Gibraltarian'),
('Greek'),
('Greenlandic'),
('Grenadian'),
('Guamanian'),
('Guatemalan'),
('Guinean'),
('Guyanese'),
('Haitian'),
('Honduran'),
('Hong Konger'),
('Hungarian'),
('Icelandic'),
('Indian'),
('Indonesian'),
('Iranian'),
('Iraqi'),
('Irish'),
('Israeli'),
('Italian'),
('Ivorian'),
('Jamaican'),
('Japanese'),
('Jordanian'),
('Kazakh'),
('Kenyan'),
('Kittitian'),
('Kosovan'),
('Kuwaiti'),
('Kyrgyz'),
('Lao'),
('Latvian'),
('Lebanese'),
('Liberian'),
('Libyan'),
('Liechtenstein citizen'),
('Lithuanian'),
('Luxembourger'),
('Macanese'),
('Macedonian'),
('Malagasy'),
('Malawian'),
('Malaysian'),
('Maldivian'),
('Malian'),
('Maltese'),
('Marshallese'),
('Martiniquais'),
('Mauritanian'),
('Mauritian'),
('Mexican'),
('Micronesian'),
('Moldovan'),
('Monegasque'),
('Mongolian'),
('Montenegrin'),
('Montserratian'),
('Moroccan'),
('Mosotho'),
('Mozambican'),
('Namibian'),
('Nauruan'),
('Nepalese'),
('New Zealander'),
('Nicaraguan'),
('Nigerian'),
('Nigerien'),
('Niuean'),
('North Korean'),
('Northern Irish'),
('Norwegian'),
('Omani'),
('Pakistani'),
('Palauan'),
('Palestinian'),
('Panamanian'),
('Papua New Guinean'),
('Paraguayan'),
('Peruvian'),
('Pitcairn Islander'),
('Polish'),
('Portuguese'),
('Prydeinig'),
('Puerto Rican'),
('Qatari'),
('Romanian'),
('Russian'),
('Rwandan'),
('Salvadorean'),
('Sammarinese'),
('Samoan'),
('Sao Tomean'),
('Saudi Arabian'),
('Scottish'),
('Senegalese'),
('Serbian'),
('Sierra Leonean'),
('Singaporean'),
('Slovak'),
('Slovenian'),
('Solomon Islander'),
('Somali'),
('South African'),
('South Korean'),
('South Sudanese'),
('Spanish'),
('Sri Lankan'),
('St Helenian'),
('St Lucian'),
('Stateless'),
('Sudanese'),
('Surinamese'),
('Swazi'),
('Swedish'),
('Swiss'),
('Syrian'),
('Taiwanese'),
('Tajik'),
('Tanzanian'),
('Thai'),
('Togolese'),
('Tongan'),
('Trinidadian'),
('Tristanian'),
('Tunisian'),
('Turkish'),
('Turkmen'),
('Turks and Caicos Islander'),
('Tuvaluan'),
('Ugandan'),
('Ukrainian'),
('Uruguayan'),
('Uzbek'),
('Vatican citizen'),
('Venezuelan'),
('Vietnamese'),
('Vincentian'),
('Wallisian'),
('Welsh'),
('Yemeni'),
('Zambian'),
('Zimbabwean');

-- --------------------------------------------------------

--
-- Table structure for table `patient_log`
--

CREATE TABLE `patient_log` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_age` int(3) NOT NULL,
  `p_num` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'mobile number with or without leading zero',
  `p_temp` float NOT NULL COMMENT 'body temp',
  `diagnose` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=yes 0=no',
  `encounter` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=yes 0=no',
  `vacinated` tinyint(1) NOT NULL DEFAULT 0,
  `nationality` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_gender` tinyint(4) NOT NULL COMMENT '1=male 2==female',
  `dt` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'date and time created'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `username`, `password`, `dt`) VALUES
(1, 'user', '123', '2023-03-30 15:32:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_log`
--
ALTER TABLE `patient_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_log`
--
ALTER TABLE `patient_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
