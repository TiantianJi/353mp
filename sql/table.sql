CREATE TABLE Employees(
  SIN INTEGER(40) NOT NULL PRIMARY KEY,
  Name VARCHAR(40) NOT NULL ,
  birthDate DATE NOT NULL ,
  address VARCHAR(60),
  gender ENUM('M', 'F') DEFAULT 'F',
  phoneNumber BIGINT,
  salary DOUBLE DEFAULT 0
);


CREATE TABLE SuperviseOf(
  EmployeeSIN INTEGER(40) NOT NULL PRIMARY KEY ,
  SupervisorSIN INTEGER(40) NOT NULL,
  FOREIGN KEY (EmployeeSIN) REFERENCES Employees(SIN),
  FOREIGN KEY (SupervisorSIN) REFERENCES Employees(SIN)
);


CREATE TABLE Dependent(
  DependentSIN INTEGER(40) NOT NULL PRIMARY KEY,
  dependentName VARCHAR(40) NOT NULL,
  dBirthDate DATE,
  dGender ENUM('M', 'F') DEFAULT 'F'
);

CREATE TABLE Department(
  DepartmentNumber INTEGER(40) NOT NULL PRIMARY KEY,
  DepartmentName VARCHAR(40) NOT NULL
);

CREATE TABLE Project(
  PID INTEGER(40) NOT NULL PRIMARY KEY,
  PName VARCHAR(40) NOT NULL
);

CREATE TABLE Location(
  place VARCHAR(40) NOT NULL PRIMARY KEY
);

CREATE TABLE assigned(
  PID INTEGER(40) NOT NULL PRIMARY KEY,
  place VARCHAR(40),
  FOREIGN KEY (PID) REFERENCES Project(PID),
  FOREIGN KEY (place) REFERENCES Location(place)
);

CREATE TABLE situated(
  place VARCHAR(40) NOT NULL PRIMARY KEY ,
  DepartmentNumber INTEGER(40) NOT NULL,
  FOREIGN KEY (place) REFERENCES Location(place),
  FOREIGN KEY (DepartmentNumber) REFERENCES Department(DepartmentNumber)
);

CREATE TABLE chanrgedBy (
  PID     INTEGER(40) NOT NULL PRIMARY KEY ,
  DNumber INTEGER(40) NOT NULL ,
  FOREIGN KEY (PID) REFERENCES Project (PID),
  FOREIGN KEY (DNumber) REFERENCES Department (DepartmentNumber)
);

CREATE TABLE workOn(
  PID INTEGER(40) NOT NULL ,
  SIN INTEGER(40) NOT NULL ,
  hours DOUBLE,
  PRIMARY KEY (PID, SIN),
  FOREIGN KEY (PID) REFERENCES Project(PID),
  FOREIGN KEY (SIN) REFERENCES Employees(SIN)
);

CREATE TABLE workIn(
  SIN INTEGER(40) NOT NULL PRIMARY KEY ,
  DNumber INTEGER(40) NOT NULL ,
  FOREIGN KEY (SIN) REFERENCES Employees(SIN),
  FOREIGN KEY (DNumber) REFERENCES Department(DepartmentNumber)
);

CREATE TABLE manage(
  DNumber INTEGER(40) PRIMARY KEY,
  SIN INTEGER(40),
  StartDate DATE,
  FOREIGN KEY (DNumber) REFERENCES Department(DepartmentNumber),
  FOREIGN KEY (SIN) REFERENCES Employees(SIN)
);

CREATE TABLE related(
  DependentSIN INTEGER(40) NOT NULL ,
  SIN INTEGER(40) NOT NULL ,
  FOREIGN KEY (SIN) REFERENCES Employees(SIN)
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

INSERT INTO Dependent VALUE (1, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (2, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (3, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (4, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (5, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (6, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (7, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (8, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (9, 'tem', '1993-03-23', 'F');
INSERT INTO Dependent VALUE (10, 'tem', '1993-03-23', 'F');

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

#调取家属信息
SELECT DependentSIN
FROM related
WHERE SIN=10;


INSERT INTO SuperviseOf VALUE (10,1);
INSERT INTO SuperviseOf VALUE (9, 1);
INSERT INTO SuperviseOf VALUE (8, 2);
INSERT INTO SuperviseOf VALUE (7, 1);
INSERT INTO SuperviseOf VALUE (6, 1);
INSERT INTO SuperviseOf VALUE (5, 2);
INSERT INTO SuperviseOf VALUE (4, 1);
INSERT INTO SuperviseOf VALUE (3, 2);

#调取上级信息
SELECT SupervisorSIN
FROM SuperviseOf
WHERE EmployeeSIN=4;

#调取下级信息
SELECT EmployeeSIN
FROM SuperviseOf
WHERE SupervisorSIN=1;

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

#调取员工信息
SELECT SIN
FROM workOn
WHERE PID = 3;

INSERT INTO assigned VALUE (1, '101');
INSERT INTO assigned VALUE (2, '101');

INSERT INTO situated VALUE ('101', 1);
INSERT INTO situated VALUE ('102', 1);

INSERT INTO chanrgedBy VALUE (1, 1);
INSERT INTO chanrgedBy VALUE (2, 1);
INSERT INTO chanrgedBy VALUE (3, 2);

INSERT INTO workIn VALUE (1, 1);
INSERT INTO workIn VALUE (2, 2);
INSERT INTO workIn VALUE (4, 1);
INSERT INTO workIn VALUE (6,1);


SELECT EmployeeSIN
FROM SuperviseOf
WHERE SupervisorSIN=1;


INSERT INTO manage VALUE (1,1,'2014-02-23');
INSERT INTO manage VALUE (2,2,'2014-02-23');
