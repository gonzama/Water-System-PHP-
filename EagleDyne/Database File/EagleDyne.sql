{\rtf1\ansi\ansicpg1252\cocoartf1561
{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 -- phpMyAdmin SQL Dump\
-- version 4.7.7\
-- https://www.phpmyadmin.net/\
--\
-- Host: localhost\
-- Generation Time: Jun 07, 2018 at 01:11 AM\
-- Server version: 5.6.38\
-- PHP Version: 7.2.1\
\
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\
SET time_zone = "+00:00";\
\
--\
-- Database: `EagleDyne`\
--\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `product`\
--\
\
CREATE TABLE `product` (\
  `pid` varchar(50) NOT NULL DEFAULT '',\
  `pname` varchar(50) NOT NULL,\
  `type` varchar(50) NOT NULL,\
  `supplierId` varchar(50) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `product`\
--\
\
INSERT INTO `product` (`pid`, `pname`, `type`, `supplierId`) VALUES\
('p1', 'Samsung S8', 'mobile phones', 'sup2'),\
('p3', 'laptop1', 'computer1', 'sup2');\
\
--\
-- Indexes for dumped tables\
--\
\
--\
-- Indexes for table `product`\
--\
ALTER TABLE `product`\
  ADD PRIMARY KEY (`pid`),\
  ADD UNIQUE KEY `pid` (`pid`);\
}