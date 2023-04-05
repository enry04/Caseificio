-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Apr 05, 2023 alle 21:53
-- Versione del server: 10.4.27-MariaDB
-- Versione PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caseificio`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `tAccount`
--

CREATE TABLE `tAccount` (
  `id` int(11) NOT NULL,
  `nomeUtente` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tipologia` varchar(200) NOT NULL,
  `idCaseificio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tAccount`
--

INSERT INTO `tAccount` (`id`, `nomeUtente`, `password`, `tipologia`, `idCaseificio`) VALUES
(1, 'JimmyCheng', 'ciao123', 'consorzio', NULL),
(2, 'EnricoVisentin', 'ciao123', 'caseificio', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `tAcquirente`
--

CREATE TABLE `tAcquirente` (
  `id` int(255) NOT NULL,
  `partitaIva` varchar(255) NOT NULL,
  `idTipologiaAcquirente` int(255) NOT NULL,
  `nomeAzienda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tAcquirente`
--

INSERT INTO `tAcquirente` (`id`, `partitaIva`, `idTipologiaAcquirente`, `nomeAzienda`) VALUES
(1, 'IT8387750', 1, 'Volta SRL'),
(2, 'IT648274', 1, 'jimmy SRL'),
(3, 'CH72848', 2, 'Visentin SRL'),
(4, '934252', 2, 'ciao');

-- --------------------------------------------------------

--
-- Struttura della tabella `tCaseificio`
--

CREATE TABLE `tCaseificio` (
  `id` int(11) NOT NULL,
  `codice` varchar(4) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `latitudine` double NOT NULL,
  `longitudine` double NOT NULL,
  `via` varchar(255) NOT NULL,
  `numeroCivico` int(255) NOT NULL,
  `cap` int(255) NOT NULL,
  `nomeTitolare` varchar(255) NOT NULL,
  `nome` varchar(1000) NOT NULL,
  `descrizione` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tCaseificio`
--

INSERT INTO `tCaseificio` (`id`, `codice`, `provincia`, `latitudine`, `longitudine`, `via`, `numeroCivico`, `cap`, `nomeTitolare`, `nome`, `descrizione`) VALUES
(1, 'CF02', 'Brescia', 45.539651, 10.225225, 'Via Lunga', 32, 25060, 'Giovanni Bianchi', 'Caseificio Santuario', 'Il Caseificio Santuario si trova nel cuore della Franciacorta e produce formaggi freschi e stagionati a partire dal latte delle mucche allevate nei pascoli circostanti.'),
(2, 'CF03', 'Bologna', 44.647458, 10.926002, 'Via della Meccanica', 29, 41043, 'Roberto Paltrinieri', 'Caseificio Fior di Latte', 'Il Caseificio Fior di Latte produce mozzarelle e burrate di altissima qualità utilizzando latte fresco e selezionato proveniente dalla Romagna.'),
(3, 'CF04', 'Napoli', 40.61133, 15.70374, 'Via Tito Angelini', 18, 84020, 'Antonio Sorrentino', 'Caseificio San Giuseppe', 'Il Caseificio San Giuseppe si trova nella regione Campania e produce mozzarelle di bufala, ricotte e altri formaggi tipici.'),
(4, 'CF05', 'Bologna', 40.933472, 17.11621, 'Via Roma', 38, 70010, 'Giovanni De Luca', 'Caseificio Pugliese', 'Il Caseificio Pugliese produce formaggi come la burrata, il caciocavallo, la scamorza e il pecorino a partire dal latte delle pecore e delle capre allevate nelle campagne pugliesi.'),
(5, 'CF06', 'Napoli', 40.88557, 14.28404, 'Via Giovanni Amendola', 53, 80035, 'Luigi Russo', 'Caseificio dei Campi', 'Il Caseificio dei Campi si trova nei pressi di Napoli e produce formaggi come la mozzarella di bufala, la provola affumicata e la ricotta di bufala.'),
(6, 'CF07', 'Verona', 45.438731, 10.988031, 'Via Enrico Fermi', 10, 37135, 'Andrea Bianchi', 'Caseificio di Verona', 'Il Caseificio di Verona produce formaggi come il Monte Veronese, la ricotta affumicata e la stracchino a partire dal latte delle mucche allevate nei pascoli delle colline venete.'),
(7, 'CF08', 'Verona', 45.38078, 11.78638, 'Via Rialto', 27, 35122, 'Marco Rossi', 'Caseificio del Brenta', 'Il Caseificio del Brenta si trova nella provincia di Padova e produce formaggi come il Grana Padano, il Provolone e il Parmigiano Reggiano utilizzando metodi tradizionali.'),
(8, 'CF09', 'Brescia', 43.785899, 11.261144, 'Via delle Carra', 36, 50019, 'Paolo Neri', 'Caseificio del Mugello', 'Il Caseificio del Mugello si trova in Toscana e produce formaggi come il Pecorino, la Ricotta e la Crescenza a partire dal latte delle pecore allevate nella zona.'),
(9, 'CF10', 'Bologna', 38.10617, 15.65015, 'Via Archimede', 10, 89015, 'Mario Bianchi', 'Caseificio del Capo', 'Il Caseificio del Capo si trova nella regione Calabria e produce formaggi come la Caciocavallo, la Pecorina e la Ricotta a partire dal latte delle pecore e delle capre locali.'),
(10, 'CF11', 'Verona', 43.5236, 13.1868, 'Via Lazio', 15, 60020, 'Giuseppe Neri', 'Caseificio della Riviera', 'Il Caseificio della Riviera si trova nelle Marche e produce formaggi come il Pecorino, la Ricotta e la Crescenza a partire dal latte delle pecore allevate nella zona.'),
(11, 'CF01', 'Brescia', 45.057755, 7.676163, 'Via Tavagnasco', 45, 10015, 'Giuseppe Rossi', 'Caseificio Alta Langa', 'Il Caseificio Alta Langa si trova nelle colline piemontesi e produce formaggi tipici come la Robiola, il Castelmagno e il Raschera.');

-- --------------------------------------------------------

--
-- Struttura della tabella `tForma`
--

CREATE TABLE `tForma` (
  `id` int(11) NOT NULL,
  `idStagionatura` int(11) NOT NULL,
  `idAcquirente` int(11) DEFAULT NULL,
  `idCaseificio` int(11) NOT NULL,
  `codice` varchar(1000) NOT NULL,
  `numeroProgressivo` int(255) NOT NULL,
  `dataProduzione` date NOT NULL,
  `scelta` varchar(1000) NOT NULL,
  `stato` varchar(1) NOT NULL,
  `codiceStampato` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tForma`
--

INSERT INTO `tForma` (`id`, `idStagionatura`, `idAcquirente`, `idCaseificio`, `codice`, `numeroProgressivo`, `dataProduzione`, `scelta`, `stato`, `codiceStampato`) VALUES
(100, 4, NULL, 1, 'CF020420231', 1, '2023-04-02', 'seconda', 'S', 'SI'),
(101, 4, NULL, 1, 'CF020420232', 2, '2023-04-02', 'seconda', 'S', 'SI'),
(102, 4, NULL, 1, 'CF020420233', 3, '2023-04-02', 'seconda', 'S', 'SI'),
(103, 4, NULL, 1, 'CF020420234', 4, '2023-04-02', 'seconda', 'S', 'SI'),
(104, 4, NULL, 1, 'CF020420235', 5, '2023-04-02', 'seconda', 'S', 'SI'),
(105, 3, NULL, 1, 'CF020420236', 6, '2023-04-04', 'seconda', 'S', 'SI'),
(106, 3, NULL, 1, 'CF020420237', 7, '2023-04-04', 'seconda', 'S', 'SI'),
(107, 3, NULL, 1, 'CF020420238', 8, '2023-04-04', 'seconda', 'S', 'SI'),
(108, 3, NULL, 1, 'CF020420239', 9, '2023-04-04', 'seconda', 'S', 'SI'),
(109, 3, NULL, 1, 'CF0204202310', 10, '2023-04-04', 'seconda', 'S', 'SI'),
(110, 3, NULL, 1, 'CF0204202311', 11, '2023-04-04', 'seconda', 'S', 'SI'),
(111, 3, NULL, 1, 'CF0204202312', 12, '2023-04-04', 'seconda', 'S', 'SI'),
(112, 3, NULL, 1, 'CF0204202313', 13, '2023-04-04', 'seconda', 'S', 'SI');

-- --------------------------------------------------------

--
-- Struttura della tabella `tFoto`
--

CREATE TABLE `tFoto` (
  `id` int(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `fotoPrincipale` varchar(200) NOT NULL,
  `idCaseificio` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tFoto`
--

INSERT INTO `tFoto` (`id`, `path`, `fotoPrincipale`, `idCaseificio`) VALUES
(1, 'imgs/dairies-images/cas1-1.jpeg', 'si', 1),
(2, 'imgs/dairies-images/cas1-2.jpeg', 'no', 1),
(3, 'imgs/dairies-images/cas1-3.jpeg', 'no', 1),
(4, 'imgs/dairies-images/cas2-1.webp', 'si', 2),
(5, 'imgs/dairies-images/cas2-2.jpeg', 'no', 2),
(6, 'imgs/dairies-images/cas2-3.jpeg', 'no', 2),
(7, 'imgs/dairies-images/cas3-1.jpg', 'si', 3),
(8, 'imgs/dairies-images/cas3-2.jpg', 'no', 3),
(9, 'imgs/dairies-images/cas3-3.jpeg', 'no', 3),
(10, 'imgs/dairies-images/cas4.jpeg', 'si', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `tLatte`
--

CREATE TABLE `tLatte` (
  `id` int(11) NOT NULL,
  `litriRaccolti` int(11) NOT NULL,
  `litriImpiegati` int(11) NOT NULL,
  `data` date NOT NULL,
  `idCaseificio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tLatte`
--

INSERT INTO `tLatte` (`id`, `litriRaccolti`, `litriImpiegati`, `data`, `idCaseificio`) VALUES
(1, 12, 20, '2023-03-28', 1),
(2, 22, 32, '2023-03-28', 1),
(3, 32, 32, '2023-03-28', 1),
(4, 121, 21, '2023-03-28', 1),
(5, 32, 32, '2023-03-28', 1),
(6, 322, 32, '2023-03-28', 1),
(7, 23, 32, '2023-03-28', 1),
(8, 21, 2, '2023-03-28', 1),
(9, 32, 2, '2023-03-29', 1),
(10, 32, 23, '2023-03-29', 1),
(11, 23, 21, '2023-03-29', 1),
(12, 32, 32, '2023-03-29', 1),
(13, 32, 22, '2023-03-29', 1),
(14, 2, 2, '2023-03-31', 1),
(15, 21, 2, '2023-04-01', 1),
(16, 23, 32, '2023-04-02', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `tMessaggio`
--

CREATE TABLE `tMessaggio` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `messaggio` varchar(1000) NOT NULL,
  `destinatario` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `tStagionatura`
--

CREATE TABLE `tStagionatura` (
  `id` int(255) NOT NULL,
  `mesi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tStagionatura`
--

INSERT INTO `tStagionatura` (`id`, `mesi`) VALUES
(1, 12),
(2, 24),
(3, 30),
(4, 36);

-- --------------------------------------------------------

--
-- Struttura della tabella `tTipologiaAcquirente`
--

CREATE TABLE `tTipologiaAcquirente` (
  `id` int(255) NOT NULL,
  `tipologia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tTipologiaAcquirente`
--

INSERT INTO `tTipologiaAcquirente` (`id`, `tipologia`) VALUES
(1, 'grossisti'),
(2, 'grande distribuzione');

-- --------------------------------------------------------

--
-- Struttura della tabella `tVendita`
--

CREATE TABLE `tVendita` (
  `id` int(11) NOT NULL,
  `idForma` int(11) NOT NULL,
  `idAcquirente` int(11) NOT NULL,
  `dataVendita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `tAccount`
--
ALTER TABLE `tAccount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCaseificio` (`idCaseificio`);

--
-- Indici per le tabelle `tAcquirente`
--
ALTER TABLE `tAcquirente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTipologiaAcquirente` (`idTipologiaAcquirente`),
  ADD KEY `idTipologiaAcquirente_2` (`idTipologiaAcquirente`);

--
-- Indici per le tabelle `tCaseificio`
--
ALTER TABLE `tCaseificio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codice` (`codice`),
  ADD KEY `id` (`id`);

--
-- Indici per le tabelle `tForma`
--
ALTER TABLE `tForma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idStagionatura` (`idStagionatura`,`idAcquirente`,`idCaseificio`),
  ADD KEY `idCaseificio` (`idCaseificio`),
  ADD KEY `idAcquirente` (`idAcquirente`);

--
-- Indici per le tabelle `tFoto`
--
ALTER TABLE `tFoto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCaseificio` (`idCaseificio`);

--
-- Indici per le tabelle `tLatte`
--
ALTER TABLE `tLatte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCaseificio` (`idCaseificio`);

--
-- Indici per le tabelle `tMessaggio`
--
ALTER TABLE `tMessaggio`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `tStagionatura`
--
ALTER TABLE `tStagionatura`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `tTipologiaAcquirente`
--
ALTER TABLE `tTipologiaAcquirente`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `tVendita`
--
ALTER TABLE `tVendita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `tAccount`
--
ALTER TABLE `tAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `tAcquirente`
--
ALTER TABLE `tAcquirente`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `tCaseificio`
--
ALTER TABLE `tCaseificio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT per la tabella `tForma`
--
ALTER TABLE `tForma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT per la tabella `tFoto`
--
ALTER TABLE `tFoto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `tLatte`
--
ALTER TABLE `tLatte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `tMessaggio`
--
ALTER TABLE `tMessaggio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `tStagionatura`
--
ALTER TABLE `tStagionatura`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `tTipologiaAcquirente`
--
ALTER TABLE `tTipologiaAcquirente`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `tVendita`
--
ALTER TABLE `tVendita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `tAccount`
--
ALTER TABLE `tAccount`
  ADD CONSTRAINT `taccount_ibfk_1` FOREIGN KEY (`idCaseificio`) REFERENCES `tCaseificio` (`id`);

--
-- Limiti per la tabella `tAcquirente`
--
ALTER TABLE `tAcquirente`
  ADD CONSTRAINT `tacquirente_ibfk_1` FOREIGN KEY (`idTipologiaAcquirente`) REFERENCES `tTipologiaAcquirente` (`id`);

--
-- Limiti per la tabella `tForma`
--
ALTER TABLE `tForma`
  ADD CONSTRAINT `tforma_ibfk_1` FOREIGN KEY (`idCaseificio`) REFERENCES `tCaseificio` (`id`),
  ADD CONSTRAINT `tforma_ibfk_2` FOREIGN KEY (`idAcquirente`) REFERENCES `tAcquirente` (`id`),
  ADD CONSTRAINT `tforma_ibfk_3` FOREIGN KEY (`idStagionatura`) REFERENCES `tStagionatura` (`id`);

--
-- Limiti per la tabella `tFoto`
--
ALTER TABLE `tFoto`
  ADD CONSTRAINT `tfoto_ibfk_1` FOREIGN KEY (`idCaseificio`) REFERENCES `tCaseificio` (`id`);

--
-- Limiti per la tabella `tLatte`
--
ALTER TABLE `tLatte`
  ADD CONSTRAINT `tlatte_ibfk_1` FOREIGN KEY (`idCaseificio`) REFERENCES `tCaseificio` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
