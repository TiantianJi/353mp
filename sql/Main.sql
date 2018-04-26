CREATE TABLE Employees(
  ESIN INTEGER(40) NOT NULL PRIMARY KEY,
  EName VARCHAR(40) NOT NULL ,
  EbirthDate DATE NOT NULL ,
  Eaddress VARCHAR(60),
  Egender ENUM('M', 'F') DEFAULT 'F',
  EphoneNumber BIGINT,
  Esalary DOUBLE UNSIGNED DEFAULT 0
);

CREATE TABLE SuperviseOf(
  ESIN INTEGER(40) NOT NULL PRIMARY KEY ,
  SSIN INTEGER(40) NOT NULL,
  FOREIGN KEY (ESIN) REFERENCES Employees(ESIN),
  FOREIGN KEY (SSIN) REFERENCES Employees(ESIN)
);


CREATE TABLE Dependent(
  DependentSIN INTEGER(40) NOT NULL,
  ESIN INTEGER(40) NOT NULL,
  DependentName VARCHAR(40) NOT NULL,
  DBirthDate DATE,
  DdGender ENUM('M', 'F') DEFAULT 'F',
  FOREIGN KEY (ESIN) REFERENCES Employees(ESIN),
  PRIMARY KEY (DependentSIN, ESIN)
);

CREATE TABLE related(
  DependentSIN INTEGER(40) NOT NULL ,
  ESIN INTEGER(40) NOT NULL ,
  FOREIGN KEY (ESIN) REFERENCES Employees(ESIN)
);

CREATE TABLE Department(
  DepartmentNumber INTEGER(40) NOT NULL PRIMARY KEY,
  DepartmentName VARCHAR(40) NOT NULL UNIQUE
);

CREATE TABLE Project(
  PID INTEGER(40) NOT NULL PRIMARY KEY,
  PName VARCHAR(40) NOT NULL UNIQUE,
  Stage ENUM('preliminary','intermediate','advanced','complete')
);

CREATE TABLE chargedBy (
  PID     INTEGER(40) NOT NULL PRIMARY KEY ,
  DepartmentNumber INTEGER(40) NOT NULL ,
  FOREIGN KEY (PID) REFERENCES Project (PID),
  FOREIGN KEY (DepartmentNumber) REFERENCES Department (DepartmentNumber)
);

CREATE TABLE Location(
  Place VARCHAR(40) NOT NULL PRIMARY KEY
);

CREATE TABLE situated(
  Place VARCHAR(40) NOT NULL PRIMARY KEY ,
  DepartmentNumber INTEGER(40) NOT NULL,
  FOREIGN KEY (Place) REFERENCES Location(Place),
  FOREIGN KEY (DepartmentNumber) REFERENCES Department(DepartmentNumber)
);

CREATE TABLE workIn(
  ESIN INTEGER(40) NOT NULL PRIMARY KEY ,
  DepartmentNumber INTEGER(40) NOT NULL ,
  FOREIGN KEY (ESIN) REFERENCES Employees(ESIN),
  FOREIGN KEY (DepartmentNumber) REFERENCES Department(DepartmentNumber)
);

CREATE TABLE manage(
  DepartmentNumber INTEGER(40) PRIMARY KEY,
  ESIN INTEGER(40),
  StartDate DATE,
  FOREIGN KEY (DepartmentNumber) REFERENCES Department(DepartmentNumber),
  FOREIGN KEY (ESIN) REFERENCES Employees(ESIN)
);

CREATE TABLE assigned(
  PID INTEGER(40) NOT NULL,
  Place VARCHAR(40),
  FOREIGN KEY (PID) REFERENCES Project(PID),
  FOREIGN KEY (Place) REFERENCES Location(Place)
);

CREATE TABLE workOn(
  PID INTEGER(40) NOT NULL ,
  ESIN INTEGER(40) NOT NULL ,
  Hours DOUBLE,
  PRIMARY KEY (PID, ESIN),
  FOREIGN KEY (PID) REFERENCES Project(PID),
  FOREIGN KEY (ESIN) REFERENCES Employees(ESIN)
);


INSERT INTO Employees VALUE (1,'jason','1991-04-22','188 boul de L\'Assomption, QC', 'M', 5149926186, 3199.4237);
INSERT INTO Employees VALUE (2,'Fatimah', '1991-04-12', '20 Maple Avenue San Pedro, QC', 'M', 5149926186, 3129.4237);
INSERT INTO Employees VALUE (3,'Chanel', '1992-06-22', '7 W. Adams Lane San Jose, QC', 'F', 5149926186, 4999.4237);
INSERT INTO Employees VALUE (4,'Dayna', '1995-05-12', '188 boul de L\'Assomption, QC', 'F', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (5,'Sue', '1994-09-22', '601 Sherwood Ave, QC', 'F', 5149926186, 1929.4237);
INSERT INTO Employees VALUE (6,'Kennedy', '1993-04-22', '1 East Bayberry Street, QC', 'F', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (7,'Isabel', '1996-04-22', '241 Indian Spring St, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (8,'Nico', '1995-12-22', '25 Fairview Dr. Los Angeles, QC', 'M', 5149926186, 2349.4237);
INSERT INTO Employees VALUE (9,'Lottie', '1995-08-22', '737 Hill Field Street, QC', 'F', 5149926186, 2789.4237);
INSERT INTO Employees VALUE (10,'Roxanne', '1997-01-22', '23 boul de L\'Assomption, QC', 'M', 5149926186, 2991.4237);
INSERT INTO Employees VALUE (11,'Marilyn','1990-04-23','188 boul de L\'Assomption, QC', 'F', 5149926186, 3299.4237);
INSERT INTO Employees VALUE (12,'Judy', '1995-04-12', '12 S. Sulphur Springs St, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (13,'Camilla', '1996-06-22', '33 Addison Street, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (14,'Hiba', '1990-05-12', '282 Hawthorne Street, QC', 'F', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (15,'Kathy ', '1992-09-22', '8 SE. Washington St, QC', 'F', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (16,'Jamie', '1993-04-22', '9877 Washington Dr, QC', 'F', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (17,'Michal ', '1996-02-12', '13 Vermont Dr.Sacramento, QC', 'F', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (18,'Agnes ', '1995-12-22', '148 boul de Shadow, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (19,'Cindy', '1995-08-22', '112 boul de Shadow, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (20,'Robbie', '1997-01-22', '188 boul de Boston, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (21,'Phillip','1991-04-22','188 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (22,'Tommy ', '1991-04-12', '18 boul de Assomon, QC', 'F', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (23,'Iestyn', '1992-06-22', '7755 Shadow Brook Ave, QC', 'F', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (24,'Phillip', '1995-05-12', '188 boul de Asso, QC', 'F', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (25,'Krish', '1994-09-22', '181 boul de Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (26,'Harlow', '1993-04-22', '991 Tarkiln Hill Ave, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (27,'Everly', '1996-04-22', '182 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (28,'Georgie', '1995-12-22', '49 Ridgewood Ave, QC', 'F', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (29,'Emmanuel', '1995-08-22', '9089 Constitution Court, QC', 'F', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (30,'Max', '1997-01-22', '389 Gainsway Stree, QC', 'M', 5149926186, 2999.4237);

INSERT INTO Department VALUE (1, 'gaming');
INSERT INTO Department VALUE (2, 'web');
INSERT INTO Department VALUE (3, 'application');

INSERT INTO Location VALUE ('H building');
INSERT INTO Location VALUE ('EV building');
INSERT INTO Location VALUE ('S building');
INSERT INTO Location VALUE ('T building');

INSERT INTO Project VALUE (1, 'phython','preliminary');
INSERT INTO Project VALUE (2, 'app','intermediate');
INSERT INTO Project VALUE (3, 'website','advanced');
INSERT INTO Project VALUE (4, 'game','complete');

INSERT INTO Dependent VALUE (136, 1, 'Lily', '1968-03-23', 'F');
INSERT INTO Dependent VALUE (213, 2, 'Lily', '1976-03-23', 'F');
INSERT INTO Dependent VALUE (323, 3, 'tam', '1979-01-23', 'M');
INSERT INTO Dependent VALUE (412, 4, 'tom', '1956-04-23', 'F');
INSERT INTO Dependent VALUE (523, 5, 'tqm', '1967-05-23', 'F');
INSERT INTO Dependent VALUE (614, 6, 'sem', '1983-08-23', 'F');
INSERT INTO Dependent VALUE (712, 7, 'wem', '1999-01-23', 'M');
INSERT INTO Dependent VALUE (811, 8, 'lem', '1978-09-23', 'F');
INSERT INTO Dependent VALUE (912, 9, 'tem', '1993-01-23', 'F');
INSERT INTO Dependent VALUE (1011, 10, 'tem', '1993-07-23', 'F');
INSERT INTO Dependent VALUE (1136, 11, 'tem', '1968-03-23', 'F');
INSERT INTO Dependent VALUE (1213, 12, 'tem', '1976-03-23', 'F');
INSERT INTO Dependent VALUE (1323, 13, 'jem', '1979-01-23', 'M');
INSERT INTO Dependent VALUE (1412, 14, 'gem', '1956-04-23', 'F');
INSERT INTO Dependent VALUE (1523, 15, 'tem', '1967-05-23', 'F');
INSERT INTO Dependent VALUE (1614, 16, 'bem', '1983-08-23', 'F');
INSERT INTO Dependent VALUE (1712, 17, 'cem', '1999-01-23', 'M');
INSERT INTO Dependent VALUE (1811, 18, 'zem', '1978-09-23', 'F');
INSERT INTO Dependent VALUE (1912, 19, 'yem', '1993-01-23', 'F');
INSERT INTO Dependent VALUE (2012, 20, 'rem', '1993-01-23', 'F');

INSERT INTO related VALUE (136, 1);
INSERT INTO related VALUE (213, 2);
INSERT INTO related VALUE (323, 3);
INSERT INTO related VALUE (412, 4);
INSERT INTO related VALUE (523, 5);
INSERT INTO related VALUE (614, 6);
INSERT INTO related VALUE (712, 7);
INSERT INTO related VALUE (811, 8);
INSERT INTO related VALUE (912, 9);
INSERT INTO related VALUE (1011,10);
INSERT INTO related VALUE (1136, 11);
INSERT INTO related VALUE (1213, 12);
INSERT INTO related VALUE (1323, 13);
INSERT INTO related VALUE (1412, 14);
INSERT INTO related VALUE (1523, 15);
INSERT INTO related VALUE (1614, 16);
INSERT INTO related VALUE (1712, 17);
INSERT INTO related VALUE (1811, 18);
INSERT INTO related VALUE (1912, 19);
INSERT INTO related VALUE (2011,20);


INSERT INTO SuperviseOf VALUE (2,1);
INSERT INTO SuperviseOf VALUE (3,1);
INSERT INTO SuperviseOf VALUE (4,1);
INSERT INTO SuperviseOf VALUE (5,1);
INSERT INTO SuperviseOf VALUE (6,1);
INSERT INTO SuperviseOf VALUE (8,7);
INSERT INTO SuperviseOf VALUE (9,7);
INSERT INTO SuperviseOf VALUE (10,7);
INSERT INTO SuperviseOf VALUE (11,7);
INSERT INTO SuperviseOf VALUE (12,7);
INSERT INTO SuperviseOf VALUE (14,13);
INSERT INTO SuperviseOf VALUE (15,13);
INSERT INTO SuperviseOf VALUE (16,13);
INSERT INTO SuperviseOf VALUE (17,13);
INSERT INTO SuperviseOf VALUE (18,13);
INSERT INTO SuperviseOf VALUE (19,13);
INSERT INTO SuperviseOf VALUE (20,13);
INSERT INTO SuperviseOf VALUE (21,13);
INSERT INTO SuperviseOf VALUE (22,13);
INSERT INTO SuperviseOf VALUE (23,13);
INSERT INTO SuperviseOf VALUE (24,13);
INSERT INTO SuperviseOf VALUE (25,13);
INSERT INTO SuperviseOf VALUE (26,13);
INSERT INTO SuperviseOf VALUE (27,13);
INSERT INTO SuperviseOf VALUE (28,13);
INSERT INTO SuperviseOf VALUE (29,13);
INSERT INTO SuperviseOf VALUE (30,13);


INSERT INTO workOn VALUE (1,1,20);
INSERT INTO workOn VALUE (1,2,20);
INSERT INTO workOn VALUE (1,3,20);
INSERT INTO workOn VALUE (1,4,20);
INSERT INTO workOn VALUE (1,5,20);
INSERT INTO workOn VALUE (1,6,20);
INSERT INTO workOn VALUE (2,7,20);
INSERT INTO workOn VALUE (2,8,20);
INSERT INTO workOn VALUE (2,9,20);
INSERT INTO workOn VALUE (2,10,20);
INSERT INTO workOn VALUE (2,11,20);
INSERT INTO workOn VALUE (2,12,20);
INSERT INTO workOn VALUE (3,13,20);
INSERT INTO workOn VALUE (3,14,20);
INSERT INTO workOn VALUE (3,15,20);
INSERT INTO workOn VALUE (3,16,20);
INSERT INTO workOn VALUE (3,17,20);
INSERT INTO workOn VALUE (3,18,20);
INSERT INTO workOn VALUE (3,19,20);
INSERT INTO workOn VALUE (4,20,20);
INSERT INTO workOn VALUE (4,21,20);
INSERT INTO workOn VALUE (4,22,20);
INSERT INTO workOn VALUE (4,23,20);
INSERT INTO workOn VALUE (4,24,20);
INSERT INTO workOn VALUE (4,25,20);
INSERT INTO workOn VALUE (4,26,20);
INSERT INTO workOn VALUE (4,27,20);
INSERT INTO workOn VALUE (4,28,20);
INSERT INTO workOn VALUE (4,29,20);
INSERT INTO workOn VALUE (4,30,20);



INSERT INTO assigned VALUE (1, 'H building');
INSERT INTO assigned VALUE (2, 'EV building');
INSERT INTO assigned VALUE (3,'S building');
INSERT INTO assigned VALUE (4,'T building');

INSERT INTO situated VALUE ('H building', 1);
INSERT INTO situated VALUE ('EV building', 2);
INSERT INTO situated VALUE ('S building',3);
INSERT INTO situated VALUE ('T building',3);

INSERT INTO chargedBy VALUE (1,1);
INSERT INTO chargedBy VALUE (2,2);
INSERT INTO chargedBy VALUE (3,3);
INSERT INTO chargedBy VALUE (4,3);


INSERT INTO workIn VALUE (1, 1);
INSERT INTO workIn VALUE (2, 1);
INSERT INTO workIn VALUE (3, 1);
INSERT INTO workIn VALUE (4, 1);
INSERT INTO workIn VALUE (5, 1);
INSERT INTO workIn VALUE (6, 1);
INSERT INTO workIn VALUE (7, 2);
INSERT INTO workIn VALUE (8, 2);
INSERT INTO workIn VALUE (9, 2);
INSERT INTO workIn VALUE (10,2);
INSERT INTO workIn VALUE (11,2);
INSERT INTO workIn VALUE (12,2);
INSERT INTO workIn VALUE (13,3);
INSERT INTO workIn VALUE (14,3);
INSERT INTO workIn VALUE (15,3);
INSERT INTO workIn VALUE (16,3);
INSERT INTO workIn VALUE (17,3);
INSERT INTO workIn VALUE (18,3);
INSERT INTO workIn VALUE (19,3);
INSERT INTO workIn VALUE (20,3);
INSERT INTO workIn VALUE (21,3);
INSERT INTO workIn VALUE (22,3);
INSERT INTO workIn VALUE (23,3);
INSERT INTO workIn VALUE (24,3);
INSERT INTO workIn VALUE (25,3);
INSERT INTO workIn VALUE (26,3);
INSERT INTO workIn VALUE (27,3);
INSERT INTO workIn VALUE (28,3);
INSERT INTO workIn VALUE (29,3);
INSERT INTO workIn VALUE (30,3);


INSERT INTO manage VALUE (1,1,'2014-02-23');
INSERT INTO manage VALUE (2,7,'2014-02-23');
INSERT INTO manage VALUE (3,13,'2015-03-22');


DROP TABLE workOn;
DROP TABLE workIn;
DROP TABLE situated;
DROP TABLE related;
DROP TABLE manage;
DROP TABLE chargedBy;
DROP TABLE assigned;
DROP TABLE SuperviseOf;
DROP TABLE Project;
DROP TABLE Location;
DROP TABLE Dependent;
DROP TABLE Employees;
DROP TABLE Department;

SELECT Ename, Esalary FROM Employees ORDER BY Esalary DESC;

SELECT Ename
FROM Employees
WHERE ESIN NOT IN(SELECT ESIN FROM workOn) OR ESIN = (SELECT ESIN FROM workOn GROUP BY ESIN HAVING COUNT(*) > 1);

SELECT Egender, sum(Esalary)
FROM Employees
GROUP BY Egender;

SELECT ESIN, Egender
FROM Employees
ORDER BY Egender;

UPDATE Employees SET Eaddress='adshfiu'|| Eaddress='asdfj' WHERE ESIN=30;