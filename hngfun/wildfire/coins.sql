-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2017 at 01:03 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2750261_wildfire`
--

-- --------------------------------------------------------

--
-- Table structure for table `current`
--

CREATE TABLE `current` (
  `id` int(255) NOT NULL,
  `coin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currencypair` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `buy` bigint(20) NOT NULL,
  `sell` bigint(20) NOT NULL,
  `date_saved` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `current`
--

INSERT INTO `current` (`id`, `coin`, `currencypair`, `buy`, `sell`, `date_saved`) VALUES
(5963, 'Synereo AMP', 'AMP', 2, 4, '1504443632'),
(5964, 'Ardor', 'ARDR', 0, 0, '1504443632'),
(5965, 'Bitcoin Cash', 'BCH', 4, 4, '1504443632'),
(5966, 'Bytecoin', 'BCN', 4, 4, '1504443632'),
(5967, 'BitCrystals', 'BCY', 0, 0, '1504443632'),
(5968, 'Bela', 'BELA', 2, 1, '1504443632'),
(5969, 'BlackCoin', 'BLK', 2, 2, '1504443632'),
(5970, 'Bitcoin', 'BTC', 0, 0, '1504443632'),
(5971, 'BitcoinDark', 'BTCD', 39, 8, '1504443632'),
(5972, 'BitShares', 'BTS', 2, 5, '1504443632'),
(5973, 'Burst', 'BURST', 2, 0, '1504443632'),
(5974, 'CLAMS', 'CLAM', 2, 0, '1504443632'),
(5975, 'Dash', 'DASH', 5, 21, '1504443632'),
(5976, 'Decred', 'DCR', 4, 2, '1504443632'),
(5977, 'DigiByte', 'DGB', 12, 7, '1504443632'),
(5978, 'Dogecoin', 'DOGE', 4, 5, '1504443632'),
(5979, 'Einsteinium', 'EMC2', 11, 1, '1504443632'),
(5980, 'Ethereum Classic', 'ETC', 7, 4, '1504443632'),
(5981, 'Ethereum', 'ETH', 61, 60, '1504443632'),
(5982, 'Expanse', 'EXP', 0, 5, '1504443632'),
(5983, 'Factom', 'FCT', 7, 19, '1504443632'),
(5984, 'FoldingCoin', 'FLDC', 2, 2, '1504443632'),
(5985, 'Florincoin', 'FLO', 0, 3, '1504443632'),
(5986, 'GameCredits', 'GAME', 51, 9, '1504443632'),
(5987, 'Gnosis', 'GNO', 0, 0, '1504443632'),
(5988, 'Golem', 'GNT', 37, 25, '1504443632'),
(5989, 'Gridcoin Research', 'GRC', 0, 1, '1504443632'),
(5990, 'Huntercoin', 'HUC', 0, 3, '1504443632'),
(5991, 'LBRY Credits', 'LBC', 7, 67, '1504443632'),
(5992, 'Lisk', 'LSK', 18, 12, '1504443632'),
(5993, 'Litecoin', 'LTC', 39, 26, '1504443632'),
(5994, 'MaidSafeCoin', 'MAID', 5, 2, '1504443632'),
(5995, 'Nautiluscoin', 'NAUT', 0, 0, '1504443632'),
(5996, 'NAVCoin', 'NAV', 25, 31, '1504443632'),
(5997, 'Neoscoin', 'NEOS', 64, 138, '1504443632'),
(5998, 'Namecoin', 'NMC', 0, 0, '1504443632'),
(5999, 'DNotes', 'NOTE', 0, 0, '1504443632'),
(6000, 'Nexium', 'NXC', 0, 0, '1504443632'),
(6001, 'NXT', 'NXT', 8, 2, '1504443632'),
(6002, 'Omni', 'OMNI', 0, 0, '1504443632'),
(6003, 'PascalCoin', 'PASC', 2, 0, '1504443632'),
(6004, 'Pinkcoin', 'PINK', 17, 11, '1504443632'),
(6005, 'PotCoin', 'POT', 0, 0, '1504443632'),
(6006, 'Peercoin', 'PPC', 0, 0, '1504443632'),
(6007, 'Radium', 'RADS', 0, 7, '1504443632'),
(6008, 'Augur', 'REP', 3, 9, '1504443632'),
(6009, 'Riecoin', 'RIC', 0, 1, '1504443632'),
(6010, 'Siacoin', 'SC', 1, 3, '1504443632'),
(6011, 'Storjcoin X', 'SJCX', 3, 4, '1504443632'),
(6012, 'Stellar', 'STR', 10, 10, '1504443632'),
(6013, 'Stratis', 'STRAT', 1, 2, '1504443632'),
(6014, 'Syscoin', 'SYS', 6, 1, '1504443632'),
(6015, 'Tether USD', 'USDT', 0, 0, '1504443632'),
(6016, 'Viacoin', 'VIA', 15, 9, '1504443632'),
(6017, 'VeriCoin', 'VRC', 1, 4, '1504443632'),
(6018, 'Vertcoin', 'VTC', 0, 0, '1504443632'),
(6019, 'BitcoinPlus', 'XBC', 3, 0, '1504443632'),
(6020, 'Counterparty', 'XCP', 0, 0, '1504443632'),
(6021, 'NEM', 'XEM', 47, 26, '1504443632'),
(6022, 'Monero', 'XMR', 27, 22, '1504443632'),
(6023, 'Primecoin', 'XPM', 54, 2, '1504443632'),
(6024, 'Ripple', 'XRP', 34, 48, '1504443632'),
(6025, 'Zcash', 'ZEC', 7, 9, '1504443632'),
(6026, '0x', 'ZRX', 0, 18, '1504443632');

-- --------------------------------------------------------

--
-- Table structure for table `previous`
--

CREATE TABLE `previous` (
  `id` int(255) NOT NULL,
  `coin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currencypair` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `buy` bigint(20) NOT NULL,
  `current_buy` bigint(255) NOT NULL,
  `total_trade_volume` bigint(255) NOT NULL,
  `percentage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `percentage_change` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sell` bigint(20) NOT NULL,
  `date_saved` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `previous`
--

INSERT INTO `previous` (`id`, `coin`, `currencypair`, `buy`, `current_buy`, `total_trade_volume`, `percentage`, `percentage_change`, `sell`, `date_saved`) VALUES
(4021, 'Monero', 'XMR', 70, 27, 582, '', '', 39, '1504443418'),
(4022, 'Ethereum', 'ETH', 54, 61, 128, '', '', 44, '1504443418'),
(4023, 'Primecoin', 'XPM', 54, 54, 584, '', '', 0, '1504443418'),
(4024, 'Litecoin', 'LTC', 53, 39, 300, '', '', 22, '1504443418'),
(4025, 'Ripple', 'XRP', 46, 34, 632, '', '', 31, '1504443418'),
(4026, 'BitcoinDark', 'BTCD', 38, 39, 23, '', '', 4, '1504443418'),
(4027, 'GameCredits', 'GAME', 38, 51, 166, '', '', 9, '1504443418'),
(4028, 'NAVCoin', 'NAV', 33, 25, 333, '', '', 37, '1504443418'),
(4029, 'Pinkcoin', 'PINK', 21, 17, 484, '', '', 8, '1504443418'),
(4030, 'DigiByte', 'DGB', 12, 12, 58, '', '', 11, '1504443418'),
(4031, 'Viacoin', 'VIA', 11, 15, 530, '', '', 6, '1504443418'),
(4032, 'Einsteinium', 'EMC2', 10, 11, 64, '', '', 2, '1504443418'),
(4033, 'Augur', 'REP', 10, 3, 500, '', '', 8, '1504443418'),
(4034, 'Ethereum Classic', 'ETC', 9, 7, 68, '', '', 3, '1504443418'),
(4035, 'Siacoin', 'SC', 8, 1, 504, '', '', 6, '1504443418'),
(4036, 'Dash', 'DASH', 7, 5, 49, '', '', 12, '1504443418'),
(4037, 'LBRY Credits', 'LBC', 6, 7, 262, '', '', 2, '1504443418'),
(4038, 'NXT', 'NXT', 6, 8, 473, '', '', 3, '1504443418'),
(4039, 'NEM', 'XEM', 6, 47, 560, '', '', 18, '1504443418'),
(4040, 'BitShares', 'BTS', 5, 2, 28, '', '', 5, '1504443418'),
(4041, 'Decred', 'DCR', 5, 4, 51, '', '', 2, '1504443418'),
(4042, 'Factom', 'FCT', 5, 7, 152, '', '', 25, '1504443418'),
(4043, 'MaidSafeCoin', 'MAID', 5, 5, 302, '', '', 4, '1504443418'),
(4044, 'Neoscoin', 'NEOS', 5, 64, 471, '', '', 73, '1504443418'),
(4045, 'Radium', 'RADS', 5, 0, 491, '', '', 1, '1504443418'),
(4046, 'BitcoinPlus', 'XBC', 5, 3, 534, '', '', 0, '1504443418'),
(4047, 'Bitcoin Cash', 'BCH', 4, 4, 8, '', '', 1, '1504443418'),
(4048, 'Bytecoin', 'BCN', 4, 4, 12, '', '', 1, '1504443418'),
(4049, 'Burst', 'BURST', 4, 2, 28, '', '', 2, '1504443418'),
(4050, 'Expanse', 'EXP', 4, 0, 133, '', '', 1, '1504443418'),
(4051, 'FoldingCoin', 'FLDC', 4, 2, 154, '', '', 0, '1504443418'),
(4052, 'Lisk', 'LSK', 4, 18, 274, '', '', 0, '1504443418'),
(4053, 'Stellar', 'STR', 4, 10, 518, '', '', 7, '1504443418'),
(4054, 'Bela', 'BELA', 3, 2, 13, '', '', 6, '1504443418'),
(4055, 'Zcash', 'ZEC', 3, 7, 641, '', '', 15, '1504443418'),
(4056, 'Synereo AMP', 'AMP', 2, 2, 4, '', '', 2, '1504443418'),
(4057, 'Florincoin', 'FLO', 2, 0, 157, '', '', 2, '1504443418'),
(4058, '0x', 'ZRX', 2, 0, 659, '', '', 4, '1504443418'),
(4059, 'CLAMS', 'CLAM', 1, 2, 28, '', '', 0, '1504443418'),
(4060, 'Dogecoin', 'DOGE', 1, 4, 63, '', '', 4, '1504443418'),
(4061, 'Gnosis', 'GNO', 1, 0, 166, '', '', 0, '1504443418'),
(4062, 'Golem', 'GNT', 1, 37, 191, '', '', 6, '1504443418'),
(4063, 'Namecoin', 'NMC', 1, 0, 471, '', '', 0, '1504443418'),
(4064, 'PascalCoin', 'PASC', 1, 2, 473, '', '', 0, '1504443418'),
(4065, 'Syscoin', 'SYS', 1, 6, 521, '', '', 0, '1504443418'),
(4066, 'VeriCoin', 'VRC', 1, 1, 534, '', '', 5, '1504443418'),
(4067, 'Ardor', 'ARDR', 0, 0, 4, '', '', 0, '1504443418'),
(4068, 'BitCrystals', 'BCY', 0, 0, 12, '', '', 3, '1504443418'),
(4069, 'BlackCoin', 'BLK', 0, 2, 15, '', '', 2, '1504443418'),
(4070, 'Bitcoin', 'BTC', 0, 0, 15, '', '', 0, '1504443418'),
(4071, 'Gridcoin Research', 'GRC', 0, 0, 192, '', '', 1, '1504443418'),
(4072, 'Huntercoin', 'HUC', 0, 0, 195, '', '', 2, '1504443418'),
(4073, 'Nautiluscoin', 'NAUT', 0, 0, 302, '', '', 1, '1504443418'),
(4074, 'DNotes', 'NOTE', 0, 0, 471, '', '', 71, '1504443418'),
(4075, 'Nexium', 'NXC', 0, 0, 471, '', '', 0, '1504443418'),
(4076, 'Omni', 'OMNI', 0, 0, 473, '', '', 0, '1504443418'),
(4077, 'PotCoin', 'POT', 0, 0, 484, '', '', 1, '1504443418'),
(4078, 'Peercoin', 'PPC', 0, 0, 484, '', '', 0, '1504443418'),
(4079, 'Riecoin', 'RIC', 0, 0, 501, '', '', 1, '1504443418'),
(4080, 'Storjcoin X', 'SJCX', 0, 3, 508, '', '', 0, '1504443418'),
(4081, 'Stratis', 'STRAT', 0, 1, 520, '', '', 8, '1504443418'),
(4082, 'Tether USD', 'USDT', 0, 0, 521, '', '', 0, '1504443418'),
(4083, 'Vertcoin', 'VTC', 0, 0, 534, '', '', 0, '1504443418'),
(4084, 'Counterparty', 'XCP', 0, 0, 534, '', '', 0, '1504443418');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current`
--
ALTER TABLE `current`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previous`
--
ALTER TABLE `previous`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `current`
--
ALTER TABLE `current`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6027;
--
-- AUTO_INCREMENT for table `previous`
--
ALTER TABLE `previous`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4085;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
