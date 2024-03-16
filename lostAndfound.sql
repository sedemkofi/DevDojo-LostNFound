CREATE DATABASE
IF NOT EXISTS LFS2024;
USE LFS2024;

-- Create the Role table
CREATE TABLE Role
(
    RoleID INT PRIMARY KEY,
    RoleName VARCHAR(50) NOT NULL
);

-- Create the Status table
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
    Description TEXT,
    Category VARCHAR(50),
    LocationFound VARCHAR(100),
    DateFound DATE,
    OwnerID INT,
    StatusID INT,
    FOREIGN KEY (OwnerID) REFERENCES User(UserID),
    FOREIGN KEY (StatusID) REFERENCES Status(StatusID)
);

-- Create the Page table
CREATE TABLE Page
(
    PageID INT PRIMARY KEY,
    PageName VARCHAR(50) NOT NULL
);

-- Create the UserPageAccess table
CREATE TABLE UserPageAccess
(
    UserPageAccessID INT PRIMARY KEY,
    UserID INT,
    PageID INT,
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    FOREIGN KEY (PageID) REFERENCES Page(PageID)
);

-- Create the Settings table
CREATE TABLE Settings
(
    SettingID INT PRIMARY KEY,
    UserID INT,
    SettingName VARCHAR(50) NOT NULL,
    SettingValue VARCHAR(255) NOT NULL,
    FOREIGN KEY (UserID) REFERENCES User(UserID)
);

-- Add relationships between tables

-- Relationship: Item to User (Owner)
ALTER TABLE Item
ADD CONSTRAINT FK_Item_Owner
FOREIGN KEY (OwnerID) REFERENCES User(UserID);

-- Relationship: Item to Status
ALTER TABLE Item
ADD CONSTRAINT FK_Item_Status
FOREIGN KEY (StatusID) REFERENCES Status(StatusID);

-- Relationship: UserPageAccess to User
ALTER TABLE UserPageAccess
ADD CONSTRAINT FK_UserPageAccess_User
FOREIGN KEY (UserID) REFERENCES User(UserID);

-- Relationship: UserPageAccess to Page
ALTER TABLE UserPageAccess
ADD CONSTRAINT FK_UserPageAccess_Page
FOREIGN KEY (PageID) REFERENCES Page(PageID);

-- Relationship: Settings to User
ALTER TABLE Settings
ADD CONSTRAINT FK_Settings_User
FOREIGN KEY (UserID) REFERENCES User(UserID);
