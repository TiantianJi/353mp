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
  PName VARCHAR(40) NOT NULL UNIQUE
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
  PID INTEGER(40) NOT NULL PRIMARY KEY,
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



INSERT INTO Employees VALUE (1,'jason','1995-04-22','188 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (2,'jason1', '1995-04-22', '188 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (3,'jason1', '1995-04-22', '188 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (4,'jason1', '1995-04-22', '188 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (5,'jason1', '1995-04-22', '188 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (6,'jason1', '1995-04-22', '188 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (7,'jason1', '1995-04-22', '188 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (8,'jason1', '1995-04-22', '188 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (9,'jason1', '1995-04-22', '188 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);
INSERT INTO Employees VALUE (10,'jason1', '1995-04-22', '188 boul de L\'Assomption, QC', 'M', 5149926186, 2999.4237);

INSERT INTO Department VALUE (1, 'gaming');
INSERT INTO Department VALUE (2, 'web');

INSERT INTO Location VALUE ('101');
INSERT INTO Location VALUE ('102');

INSERT INTO Project VALUE (1, 'x');
INSERT INTO Project VALUE (2, 't');
INSERT INTO Project VALUE (3, 'website');

INSERT INTO Dependent VALUE (1,1, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (2,1, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (3,1, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (4,1, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (5,2, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (6,2, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (7,2, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (8,2, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (9,2, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (10,2, 'tem', '1993-03-23', 'F');

INSERT INTO related VALUE (1, 1);
INSERT INTO related VALUE (2, 2);
INSERT INTO related VALUE (3, 3);
INSERT INTO related VALUE (4, 4);
INSERT INTO related VALUE (5, 5);
INSERT INTO related VALUE (6, 6);
INSERT INTO related VALUE (7, 7);
INSERT INTO related VALUE (8, 8);
INSERT INTO related VALUE (9, 9);
INSERT INTO related VALUE (10,10);
INSERT INTO related VALUE (1,10);


INSERT INTO SuperviseOf VALUE (10,1);
INSERT INTO SuperviseOf VALUE (9, 1);
INSERT INTO SuperviseOf VALUE (8, 2);
INSERT INTO SuperviseOf VALUE (7, 1);
INSERT INTO SuperviseOf VALUE (6, 1);
INSERT INTO SuperviseOf VALUE (5, 2);
INSERT INTO SuperviseOf VALUE (4, 1);
INSERT INTO SuperviseOf VALUE (3, 2);


INSERT INTO workOn VALUE (1,1,20);
INSERT INTO workOn VALUE (1,4,20);
INSERT INTO workOn VALUE (1,7,20);
INSERT INTO workOn VALUE (1,3,20);
INSERT INTO workOn VALUE (2,2,12);
INSERT INTO workOn VALUE (2,6,20);
INSERT INTO workOn VALUE (3,5,20);
INSERT INTO workOn VALUE (3,8,20);
INSERT INTO workOn VALUE (3,9,20);
INSERT INTO workOn VALUE (3,10,20);



INSERT INTO assigned VALUE (1, '101');
INSERT INTO assigned VALUE (2, '101');

INSERT INTO situated VALUE ('101', 1);
INSERT INTO situated VALUE ('102', 1);




INSERT INTO workIn VALUE (1, 1);
INSERT INTO workIn VALUE (2, 2);
INSERT INTO workIn VALUE (4, 1);
INSERT INTO workIn VALUE (6,1);

INSERT INTO manage VALUE (1,1,'2014-02-23');
INSERT INTO manage VALUE (2,2,'2014-02-23');


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

INSERT INTO Project VALUE (1, 'x');
INSERT INTO Project VALUE (2, 't');
INSERT INTO Project VALUE (3, 'website');

INSERT INTO Dependent VALUE (1,1, 'Tim', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (2,1, 'Joe', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (3,2, 'Li', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (4,2, 'Zhang', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (5,2, 'Wang', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (6,3, 'Amy', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (7,3, 'Cindy', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (8,3, 'Phil', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (9,3, 'Max', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (10,3, 'Agnes', '1993-03-23', 'F');

INSERT INTO related VALUE (1, 1);
INSERT INTO related VALUE (2, 2);
INSERT INTO related VALUE (3, 3);
INSERT INTO related VALUE (4, 4);
INSERT INTO related VALUE (5, 5);
INSERT INTO related VALUE (6, 6);
INSERT INTO related VALUE (7, 7);
INSERT INTO related VALUE (8, 8);
INSERT INTO related VALUE (9, 9);
INSERT INTO related VALUE (10,10);
INSERT INTO related VALUE (1,10);

INSERT INTO SuperviseOf VALUE (10,1);
INSERT INTO SuperviseOf VALUE (9, 1);
INSERT INTO SuperviseOf VALUE (8, 2);
INSERT INTO SuperviseOf VALUE (7, 1);
INSERT INTO SuperviseOf VALUE (6, 1);
INSERT INTO SuperviseOf VALUE (5, 2);
INSERT INTO SuperviseOf VALUE (4, 1);
INSERT INTO SuperviseOf VALUE (3, 2);

INSERT INTO workOn VALUE (1,1,20);
INSERT INTO workOn VALUE (1,4,20);
INSERT INTO workOn VALUE (1,7,20);
INSERT INTO workOn VALUE (1,3,20);
INSERT INTO workOn VALUE (2,2,12);
INSERT INTO workOn VALUE (2,6,20);
INSERT INTO workOn VALUE (3,5,20);
INSERT INTO workOn VALUE (3,8,20);
INSERT INTO workOn VALUE (3,9,20);
INSERT INTO workOn VALUE (3,10,20);

INSERT INTO assigned VALUE (1, 'EV building');
INSERT INTO assigned VALUE (2, 'H building');

INSERT INTO situated VALUE ('EV building', 1);
INSERT INTO situated VALUE ('H building', 2);

INSERT INTO chargedBy VALUE (1, 1);
INSERT INTO chargedBy VALUE (2, 1);
INSERT INTO chargedBy VALUE (3, 2);

INSERT INTO workIn VALUE (1, 1);
INSERT INTO workIn VALUE (2, 2);
INSERT INTO workIn VALUE (4, 1);
INSERT INTO workIn VALUE (6,1);

INSERT INTO manage VALUE (1,1,'2014-02-23');
INSERT INTO manage VALUE (2,2,'2014-02-23');