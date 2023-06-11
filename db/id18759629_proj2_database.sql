-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2022 at 03:16 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18759629_proj2_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `name` varchar(255) NOT NULL,
  `d` longtext NOT NULL,
  `book_image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`name`, `d`, `book_image`, `id`) VALUES
('Computational Neuroscience Models of the Basal Ganglia', 'https://link.springer.com/book/10.1007/978-981-10-8494-2', 'image/family.jpg', 49),
('Alzheimer\'s Disease Understanding Biomarkers, Big Data, and Therapy', 'https://www.elsevier.com/books/alzheimers-disease/moustafa/978-0-12-821334-6', 'image/basim grandma.jpg', 51);

-- --------------------------------------------------------

--
-- Table structure for table `c`
--

CREATE TABLE `c` (
  `num_1` int(11) NOT NULL,
  `num_2` int(11) NOT NULL,
  `num_3` int(11) NOT NULL,
  `num_4` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c`
--

INSERT INTO `c` (`num_1`, `num_2`, `num_3`, `num_4`, `id`) VALUES
(32, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `collaboration`
--

CREATE TABLE `collaboration` (
  `id` int(11) NOT NULL,
  `collab_desc` longtext NOT NULL,
  `collab_link` longtext NOT NULL,
  `collab_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `r` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `l`, `r`, `name`) VALUES
(35, 0, 0, 'egypt'),
(39, 0, -110, 'oo');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`id`, `name`, `description`, `year`) VALUES
(100, 'E', 'Sandeep Sathyanandan , Vignayanandam R. Muddapu & V. Srinivasa Chakravarthy (2021) A Multiscale, Systems-level, Neuropharmacological Model of Cortico-Basal Ganglia System for Arm Reaching under Normal, Parkinsonian and Levodopa Medication Conditions. doi: 10.3389/fncom.2021.756881.\r\n\r\n.\r\n\r\n', 2022),
(101, 'CM', 'Bhadra S. Kumar, Aditi Khot, Srinivasa V. Chakravarthy and S Pushpavanam. \"A Network Architecture for Bidirectional Neurovascular Coupling in Rat Whisker Barrel Cortex.\" Frontiers in Computational Neuroscience, 2021, doi: 10.3389/fncom.2021.638700', 2022),
(102, 'E', 'Bhadra S Kumar, Nagavarshini Mayakkannan, N Sowmya Manojna, V. Srinivasa Chakravarthy , \"  Artificial Neurovascular Network (ANVN) to Study the Accuracy Vs. Efficiency trade-off in an Energy Dependent Neural Network\", Scientific Reports June 2021(Accepted).', 2022),
(103, 'ML', 'Dipayan Biswas, Sooryakiran Pallikkulath, and V. Srinivasa Chakravarthy. \"A Complex-valued Oscillatory Neural Network for Storage and Retrieval of Multidimensional Aperiodic Signals.\" Frontiers in Computational Neuroscience, 2021. doi: 10.3389/fncom.2021.551111.', 2021),
(104, 'E', 'Vignayanandam R. Muddapu, & V. Srinivasa Chakravarthy. Influence of energy deficiency on the subcellular processes of Substantia Nigra Pars Compacta cell for understanding Parkinsonian neurodegeneration. Sci Rep 11, 1754 (2021). https://doi.org/10.1038/s41598-021-81185-9.', 2021),
(105, 'ML', 'Tamizharasan Kanagamani, V. Srinivasa Chakaravarthy, and Balaraman Ravindran. \"A deep network-based model of hippocampal memory functions under normal and Alzheimer\'s disease conditions.\" bioRxiv (2021).', 2021),
(106, 'E', 'Vignayanandam R. Muddapu, Karthik Vijayakumar, Keerthiga Ramakrishnan, & V. Srinivasa Chakravarthy (2020) A Computational Model of Levodopa-Induced Toxicity in Substantia Nigra Pars Compacta in Parkinson\'s Disease, bioRxiv 2020.04.05.026807.', 2023),
(107, 'ML', 'Vignayanandam R. Muddapu & V. Srinivasa Chakravarthy (2020) Influence of Energy Deficiency on the Molecular Processes of Substantia Nigra Pars Compacta Cell for Understanding Parkinsonian Neurodegeneration - A Comprehensive Biophysical Computational Model. bioRxiv:2020.02.18.950337', 2023),
(108, 'CM', 'P. P. Balasubramani, V. S. Chakravarthy, B. Ravindran, and A. A. Moustafa, \"An extended reinforcement learning model of basal ganglia to understand the contributions of serotonin and dopamine in risk-based decision making, reward prediction, and punishment learning,\" Frontiers in computational neuroscience, vol. 8, 2014.', 2032),
(109, 'CM', 'P. P. Balasubramani, V. S. Chakravarthy, B. Ravindran, and A. A. Moustafa, \"An extended reinforcement learning model of basal ganglia to understand the contributions of serotonin and dopamine in risk-based decision making, reward prediction, and punishment learning,\" Frontiers in computational neuroscience, vol. 8, 2014', 2023),
(111, 'E', 'Gupta, A., Balasubramani, P.P., and Chakravarthy, S. (2013). Computational model of precision grip in Parkinson\'s disease: A Utility based approach. Frontiers in Computational Neuroscience 7.', 2023),
(112, 'E', 'Helie, S. Chakravarthy, and A. A. Moustafa, \"Exploring the cognitive and motor functions of the basal ganglia: an integrative review of computational cognitive neuroscience models,\" Frontiers in computational neuroscience, vol. 7, 2013.', 2022),
(113, 'E', 'Deepesh.V, R.J. Pardikar, K.Karthik, A. Sricharan, V.S. Chakravarthy, and K. Balasubramanian, Automatic defect recognition (ADR) system for real-time radioscopy (RTR) of straight tube butt (STB) welds, Journal of Non-destructive Testing & Evaluation (Accepted).', 2021),
(114, 'E', 'Deepesh.V, R.J. Pardikar, K.Karthik, A. Sricharan, V.S. Chakravarthy, and K. Balasubramanian, Automatic defect recognition (ADR) system for real-time radioscopy (RTR) of straight tube butt (STB) welds, Journal of Non-destructive Testing & Evaluation (Accepted).', 2020),
(115, 'E', 'Maya M., Chakravarthy V. S., Ravindran B., An Oscillatory neural network model for birdsong learning and generation: Implications for the role of Dopamine in Song Learning, International Journal of Mind, Brain and Cognition, 2012.', 2020),
(116, 'E', 'Vignayanandam R. Muddapu & V. Srinivasa Chakravarthy (2020) Influence of Energy Deficiency on the Molecular Processes of Substantia Nigra Pars Compacta Cell for Understanding Parkinsonian Neurodegeneration - A Comprehensive Biophysical Computational Model. bioRxiv:2020.02.18.950337.', 2020),
(117, 'CM', 'Vignayanandam R. Muddapu & V. Srinivasa Chakravarthy (2020) Influence of Energy Deficiency on the Molecular Processes of Substantia Nigra Pars Compacta Cell for Understanding Parkinsonian Neurodegeneration - A Comprehensive Biophysical Computational Model. bioRxiv:2020.02.18.950337.', 2021),
(118, 'E', 'Sandeep Sathyanandan Nair, Vignayanandam R. Muddapu & V. Srinivasa Chakravarthy (2021) A Multiscale, Systems-level, Neuropharmacological Model of Cortico-Basal Ganglia System for Arm Reaching under Normal, Parkinsonian and Levodopa Medication Conditions. doi: 10.3389/fncom.2021.756881.', 2022),
(119, 'E', 'Sandeep Sathyanandan Nair, Vignayanandam R. Muddapu & V. Srinivasa Chakravarthy (2021) A Multiscale, Systems-level, Neuropharmacological Model of Cortico-Basal Ganglia System for Arm Reaching under Normal, Parkinsonian and Levodopa Medication Conditions. doi: 10.3389/fncom.2021.756881.', 2022),
(120, 'CM', 'Sukumar, D., Rengaswamy, M., and Chakravarthy, V.S. (2012). Modeling the contributions of Basal ganglia and Hippocampus to spatial navigation using reinforcement learning. PloS one 7, e47467.', 2022),
(121, 'CM', 'Sandeep Sathyanandan Nair, Vignayanandam R. Muddapu & V. Srinivasa Chakravarthy (2021) A Multiscale, Systems-level, Neuropharmacological Model of Cortico-Basal Ganglia System for Arm Reaching under Normal, Parkinsonian and Levodopa Medication Conditions. doi: 10.3389/fncom.2021.756881.', 2022),
(122, 'CM', 'Bhadra S. Kumar, Aditi Khot, Srinivasa V. Chakravarthy and S Pushpavanam. \"A Network Architecture for Bidirectional Neurovascular Coupling in Rat Whisker Barrel Cortex.\" Frontiers in Computational Neuroscience, 2021, doi: 10.3389/fncom.2021.638700', 2022),
(123, 'ML', 'Bhadra S. Kumar, Aditi Khot, Srinivasa V. Chakravarthy and S Pushpavanam. \"A Network Architecture for Bidirectional Neurovascular Coupling in Rat Whisker Barrel Cortex.\" Frontiers in Computational Neuroscience, 2021, doi: 10.3389/fncom.2021.638700.', 2023),
(124, 'E', 'Bhadra S. Kumar, Aditi Khot, Srinivasa V. Chakravarthy and S Pushpavanam. \"A Network Architecture for Bidirectional Neurovascular Coupling in Rat Whisker Barrel Cortex.\" Frontiers in Computational Neuroscience, 2021, doi: 10.3389/fncom.2021.638700.', 2021),
(126, 'CM', 'Sukumar, D., Rengaswamy, M., and Chakravarthy, V.S. (2012). Modeling the contributions of Basal ganglia and Hippocampus to spatial navigation using reinforcement learning. PloS one 7, e47467.', 2022),
(127, 'CM', 'Sandeep Sathyanandan Nair, Vignayanandam R. Muddapu & V. Srinivasa Chakravarthy (2021) A Multiscale, Systems-level, Neuropharmacological Model of Cortico-Basal Ganglia System for Arm Reaching under Normal, Parkinsonian and Levodopa Medication Conditions. doi: 10.3389/fncom.2021.756881.', 2022),
(128, 'Experimental', 'A neurocomputational model of creative processes. Neuroscience and Biobehavioral Reviews [IF =8.9]', 2006),
(129, 'computational Modeling', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 2020),
(130, 'Experimental', 'a/lkhkjgefe', 2006),
(131, 'computational Modeling', 'hhdhdhdhdhdhhddhd', 2007),
(132, 'Machine Learning', 'loollijiklhk', 2020),
(133, 'CM', 'Vignayanandam R. Muddapu & V. Srinivasa Chakravarthy (2020) Influence of Energy Deficiency on the Molecular Processes of Substantia Nigra Pars Compacta Cell for Understanding Parkinsonian Neurodegeneration - A Comprehensive Biophysical Computational Model. bioRxiv:2020.02.18.950337.\r\n', 2007),
(134, 'E', 'Vignayanandam R. Muddapu, & V. Srinivasa Chakravarthy. Influence of energy deficiency on the subcellular processes of Substantia Nigra Pars Compacta cell for understanding Parkinsonian neurodegeneration. Sci Rep 11, 1754 (2021). https://doi.org/10.1038/s41598-021-81185-9.\r\n', 2006);

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `personal_desc` longtext NOT NULL,
  `personal_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `personal_desc`, `personal_img`) VALUES
(16, 'Lab meeting in India', 'image/20160826_150318.jpg'),
(17, 'America', 'image/Ahmed profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE `teach` (
  `name` varchar(255) NOT NULL,
  `teach_image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teach`
--

INSERT INTO `teach` (`name`, `teach_image`, `id`) VALUES
('Machine Learning', 'image/Ahmed profile.jpg', 34),
('Modeling', 'image/Ahmed profile pic.jpg', 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'elias', '123', 'Elias'),
(2, 'john', 'abc', 'John');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `year`) VALUES
(32, 2022),
(34, 2021),
(36, 2023),
(42, 2020),
(43, 2006),
(44, 2007);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c`
--
ALTER TABLE `c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collaboration`
--
ALTER TABLE `collaboration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `c`
--
ALTER TABLE `c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `collaboration`
--
ALTER TABLE `collaboration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teach`
--
ALTER TABLE `teach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
