CREATE TABLE `Notebooks` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Betriebssystem` varchar(255) NOT NULL,
  `Info` varchar(255) NOT NULL
)
ALTER TABLE `Notebooks`
  ADD PRIMARY KEY (`ID`);
COMMIT;