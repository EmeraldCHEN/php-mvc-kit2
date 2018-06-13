use containerdb;

CREATE TABLE IF NOT EXISTS tbl_people (

    ID INT(11) AUTO_INCREMENT,
    FNAME VARCHAR(20) NOT NULL,
    LNAME VARCHAR(30) NOT NULL,   
    DOB DATE NOT NULL,
    PRIMARY KEY (ID)
) AUTO_INCREMENT = 1;

INSERT INTO tbl_people (FNAME, LNAME, DOB) VALUES ('Bob', 'Taylor', '1954-04-01');
INSERT INTO tbl_people (FNAME, LNAME, DOB) VALUES ('Lisa', 'Simpson', '2010-03-23');
INSERT INTO tbl_people (FNAME, LNAME, DOB) VALUES ('Tim', 'Taylor', '1968-11-10');

use containerdb;

SELECT * FROM tbl_people;