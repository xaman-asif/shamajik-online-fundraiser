/*Creating Database*/
CREATE DATABASE IF NOT EXISTS databasename;

CREATE TABLE IF NOT EXISTS ref_tablename(
    col10 INT AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS tablename(
	col1 BIT NOT NULL,
    col2 INT NOT NULL UNIQUE AUTO_INCREMENT,
    /*Can't use DEFAULT VALUE FOR AUTO_INCREMENT*/
    /*UNIQUE is must for AUTO_INCREMENT*/
    col3 DOUBLE NOT NULL,
    /*Shouldn't use DEFAULT for primary key*/
    col4 VARCHAR(32) NOT NULL DEFAULT 'Tomay Bhalobashi',
    col5 DATETIME DEFAULT CURRENT_TIMESTAMP,
    col6 DATETIME ON UPDATE CURRENT_TIMESTAMP,
    col9 INT NOT NULL UNIQUE,
    /*Saves the recent modification time updates as row updates*/
    CONSTRAINT primary_key PRIMARY KEY(col2),
    CONSTRAINT foreign_key FOREIGN KEY (col9) REFERENCES ref_tablename(col10) ON DELETE CASCADE ON UPDATE CASCADE
)

/*-----Perfect Foreign Key Implementation------*/
CREATE DATABASE fkdemo;

USE fkdemo;

CREATE TABLE categories(
    categoryId INT AUTO_INCREMENT PRIMARY KEY,
    categoryName VARCHAR(100) NOT NULL
) ENGINE=INNODB;

CREATE TABLE products(
    productId INT AUTO_INCREMENT PRIMARY KEY,
    productName varchar(100) not null,
    categoryId INT NOT NULL,
    CONSTRAINT fk_category
    FOREIGN KEY (categoryId) 
    REFERENCES categories(categoryId)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=INNODB;

INSERT INTO categories(categoryName)
VALUES
    ('Smartphone'),
    ('Smartwatch');

INSERT INTO products(productName, categoryId)
VALUES
    ('iPhone', 1), 
    ('Galaxy Note',1),
    ('Apple Watch',2),
    ('Samsung Galary Watch',2);

/*-----------Encrypt Password-------------*/
INSERT INTO passtable(col1) VALUES (SHA2('abc', 224))


INSERT INTO `blogs` (`username`, `loved`, `title`, `descr`, `publish`, `image`) VALUES ('$user', '0', '$title', '$descr', CURRENT_TIMESTAMP(), '');

CREATE TABLE comments (
    username VARCHAR(32) NOT NULL,
    postID VARCHAR(32) NOT NULL,
    comment_ID INT NOT NULL UNIQUE AUTO_INCREMENT,
    publish DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(comment_ID),
    FOREIGN KEY(username) REFERENCES userInfo(username) ON UPDATE CASCADE
        ON DELETE CASCADE
    FOREIGN KEY(postID) REFERENCES posts(postID) ON UPDATE CASCADE
        ON DELETE CASCADE
);

CREATE TABLE threads (
    dissID INT NOT NULL UNIQUE AUTO_INCREMENT,
    username VARCHAR(32) NOT NULL,
    blog_ID INT NOT NULL,
    postedOn DATETIME DEFAULT CURRENT_TIMESTAMP,
    cmnttext TEXT NOT NULL,
    PRIMARY KEY(dissID),
    FOREIGN KEY(username) REFERENCES userInfo(username) ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY(blog_ID) REFERENCES blogs(blog_ID) ON UPDATE CASCADE
        ON DELETE CASCADE
);