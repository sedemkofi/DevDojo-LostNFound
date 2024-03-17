CREATE DATABASE
IF NOT EXISTS LFS2024;
USE LFS2024;


CREATE TABLE Role
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
    UserID INT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    RoleID INT,
    DateOfBirth DATE,
    Gender VARCHAR(10),
    ContactNumber VARCHAR(20),
    FOREIGN KEY (RoleID) REFERENCES Role(RoleID)
);

-- Create the Item table
CREATE TABLE Item
(
    ItemID INT PRIMARY KEY,
    ItemName VARCHAR(100) NOT NULL,
    LocationFound VARCHAR(100),
    DateFound DATE,
    DateUploaded DATE,
    StatusID INT,
    FOREIGN KEY (OwnerID) REFERENCES User(UserID),
    FOREIGN KEY (StatusID) REFERENCES Status(StatusID)
);



-- Relationship: Item to Status
ALTER TABLE Item
ADD CONSTRAINT FK_Item_Status
FOREIGN KEY (StatusID) REFERENCES Status(StatusID);

-- Inserting into status table
INSERT INTO Status (StatusID, StatusName) VALUES (1, 'Unclaimed');
INSERT INTO Status (StatusID, StatusName) VALUES (2, 'Claimed');

-- Setting unclaimed as default status
ALTER TABLE Item
MODIFY StatusID INT DEFAULT 1;