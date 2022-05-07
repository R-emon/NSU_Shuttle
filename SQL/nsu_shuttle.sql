CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Password` varchar(30) NOT NULL
);

INSERT INTO `admin` (`Admin_ID`, `Name`, `Phone`, `Password`) VALUES
(1931796642, 'Md Shadman Zarif', '01933221144', '123456'),
(2011103642, 'S M Samiul Haq', '88023232435', '888333');


CREATE TABLE `bookings` (
  `Booking_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Route_ID` int(11) NOT NULL,
  `Bus_ID` int(11) DEFAULT NULL,
  `Way` varchar(10) NOT NULL,
  `Time_Slot` varchar(7) NOT NULL,
  `Date` date NOT NULL
);

CREATE TABLE `bus` (
  `Bus_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Registration_No` varchar(20) NOT NULL,
  `Driver_ID` int(11) DEFAULT NULL
);



INSERT INTO `bus` (`Bus_ID`, `Name`, `Registration_No`, `Driver_ID`) VALUES
(5001, 'Toyota Civilian', 'Dhaka-M-B-24-0031', 2001),
(5002, 'Toyota Civilian', 'Dhaka-M-B-24-0461', 2002),
(5003, 'Toyota Civilian', 'Dhaka-M-B-25-0401', 2003),
(5004, 'Toyota Civilian', 'Dhaka-M-B-26-2001', 2004),
(5005, 'Toyota Civilian', 'Dhaka-M-B-27-2056', 2005);


DROP TABLE IF EXISTS `driver`;
CREATE TABLE `driver` (
  `Driver_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Bus_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `driver` (`Driver_ID`, `Name`, `Phone`, `Bus_ID`) VALUES
(2001, 'Abdul', '01674863987', 5001),
(2002, 'Akash', '01856385987', 5002),
(2003, 'Kamal', '01974826749', 5003),
(2004, 'Rashed', '01616863945', 5004),
(2005, 'Salam', '01389675645', 5005);



DROP TABLE IF EXISTS `routes`;
CREATE TABLE `routes` (
  `Route_ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `routes` (`Route_ID`, `Name`) VALUES
(1100, 'Uttara'),
(1200, 'Dhanmondi'),
(1300, 'Jatrabari'),
(1400, 'Mirpur'),
(1500, 'Gulshan');

DROP TABLE IF EXISTS `stoppages`;
CREATE TABLE `stoppages` (
  `Route_ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `stoppages` (`Route_ID`, `Name`) VALUES
(1100, 'Abdullahpur'),
(1100, 'House Building'),
(1100, 'Jashimuddin Avenue'),
(1100, 'Uttara Airport'),
(1100, 'Le Meridien'),
(1200, 'Dhanmondi 27'),
(1200, 'National Assembly'),
(1200, 'Bijoy Sharani'),
(1200, 'Banani'),
(1300, 'Jatrabari'),
(1300, 'Sayedabad'),
(1300, 'Kamalapur'),
(1300, 'Bashabo'),
(1300, 'Moghbazar'),
(1300, 'Rampura'),
(1300, 'Badda'),
(1300, 'Baridhara'),
(1400, 'Gabtoli'),
(1400, 'Mazar Road'),
(1400, 'Mirpur College'),
(1400, 'Mirpur Stadium'),
(1400, 'Mirpur 11'),
(1400, 'Matikata'),
(1400, 'Cantonment'),
(1400, 'Army Golf Club'),
(1500, 'Hatirjheel'),
(1500, 'Gulshan 1'),
(1500, 'Gulshan 2'),
(1500, ' American Embassy'),
(1200, 'Dhanmondi 15'),
(1200, 'Dhanmondi 2'),
(1200, 'Kuril'),
(1200, 'Kurmitola'),
(1200, 'Mohakhali');


CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Password` varchar(30) NOT NULL
);



INSERT INTO `user` (`User_ID`, `Name`, `Phone`, `Address`, `Password`) VALUES
(1835403642, 'Paul', '01722457581', 'Uttara', '11111'),
(1915651042, 'Elise', '01342457584', 'Mirpur', '22222'),
(1931796642, 'Md Shadman Zarif', '01933221144', 'Dhanmondi', '12345678'),
(2011103642, 'Samiul Haq', '8802323243', 'Gulshan', '8888'),
(2122230657, 'Ryan', '01832685752', 'Jatrabari', '33333');

ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

ALTER TABLE `bookings`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Route_ID` (`Route_ID`),
  ADD KEY `Bus_ID` (`Bus_ID`);


ALTER TABLE `bus`
  ADD PRIMARY KEY (`Bus_ID`),
  ADD KEY `Driver_ID` (`Driver_ID`);


ALTER TABLE `driver`
  ADD PRIMARY KEY (`Driver_ID`),
  ADD KEY `Bus_ID` (`Bus_ID`);


ALTER TABLE `routes`
  ADD PRIMARY KEY (`Route_ID`);


ALTER TABLE `stoppages`
  ADD KEY `Route_ID` (`Route_ID`);


ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

ALTER TABLE `bookings`
  MODIFY `Booking_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;

ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`Route_ID`) REFERENCES `routes` (`Route_ID`),
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`Bus_ID`) REFERENCES `bus` (`Bus_ID`);


ALTER TABLE `bus`
  ADD CONSTRAINT `bus_ibfk_1` FOREIGN KEY (`Driver_ID`) REFERENCES `driver` (`Driver_ID`);


ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`Bus_ID`) REFERENCES `bus` (`Bus_ID`);


ALTER TABLE `stoppages`
  ADD CONSTRAINT `stoppages_ibfk_1` FOREIGN KEY (`Route_ID`) REFERENCES `routes` (`Route_ID`);
COMMIT;

