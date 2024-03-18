SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `LFS2024`
--

CREATE DATABASE
IF NOT EXISTS LFS2024;
USE LFS2024;


CREATE TABLE user_role
(
    RoleID INT PRIMARY KEY,
    RoleName VARCHAR(50) NOT NULL
);



CREATE TABLE Status
(
    StatusID INT PRIMARY KEY,
    StatusName VARCHAR(50) NOT NULL
);

-- Create the User table
CREATE TABLE User
(
    UserID INT PRIMARY KEY auto_increment,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    RoleID INT,
    FOREIGN KEY (RoleID) REFERENCES user_role(RoleID)
);

-- Create the Item table
CREATE TABLE Item
(
    ItemID INT PRIMARY KEY auto_increment,
    ItemName VARCHAR(100) NOT NULL,
    LocationFound VARCHAR(100),
    DateFound DATE,
    DateUploaded DATE,
    StatusID INT,
    FOREIGN KEY (StatusID) REFERENCES Status(StatusID)
);



-- Relationship: Item to Status
ALTER TABLE Item
ADD CONSTRAINT FK_Item_Status
FOREIGN KEY (StatusID) REFERENCES Status(StatusID);

-- Inserting into status table
INSERT INTO Status (StatusID, StatusName) VALUES 
(1, 'Unclaimed'), 
(2, 'Claimed');

INSERT INTO user_role (RoleID, RoleName) VALUES 
(1, 'superadmin'),
(2, 'admin'),
(3, 'user');

INSERT INTO User (FirstName, LastName, Email, RoleID, Password) VALUES 
('Ashesi', 'Admin', 'admin@ashesi.edu.gh', 1,'$2y$10$VysWN9cm3ZKCWhCd25L7SeSOD172Pct2VzqdkgvAsSrYj8mY0RJkm');

-- Setting unclaimed as default status
ALTER TABLE Item
MODIFY StatusID INT DEFAULT 1;

COMMIT;
