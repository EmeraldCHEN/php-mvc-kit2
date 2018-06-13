use containerdb;

DROP TABLE IF EXISTS tbl_staff;

CREATE TABLE tbl_staff (

    ID INT(11) AUTO_INCREMENT,
    STAFFNAME VARCHAR(255) NOT NULL,
    STAFFBIO VARCHAR(255),
    STAFFIMAGE VARCHAR(255),
    JOINTEAM DATE,
    PRIMARY KEY (ID)

) AUTO_INCREMENT = 1;

INSERT INTO tbl_staff (STAFFNAME, STAFFBIO, STAFFIMAGE, JOINTEAM) VALUES ('RED', 'Red is the leader. Try not to make him angry, because he gets a little unpredictable.', 'angry-bird-icon', '2015-12-27');
INSERT INTO tbl_staff (STAFFNAME, STAFFBIO, STAFFIMAGE, JOINTEAM) VALUES ('Chuck', 'Chuck is the fast one, you want things done he is your bird. But fast is not always good he tends to get red well.... Red :-)', 'angry-bird-yellow-icon', '2017-03-01');
INSERT INTO tbl_staff (STAFFNAME, STAFFBIO, STAFFIMAGE, JOINTEAM) VALUES ('Bomb', 'Bomb has anxiety issues and get nervous at the best of times and blows up a few things, not to mention himself.', 'angry-bird-black-icon', '2016-01-01');
INSERT INTO tbl_staff (STAFFNAME, STAFFBIO, STAFFIMAGE, JOINTEAM) VALUES ('Matilda', 'If you want morning team she is not your maid. However Matilda is great at holding the gang together. She also knows a bit of HTML. (High Temper Management Logic)', 'angry-bird-white-icon', '2016-02-28');
INSERT INTO tbl_staff (STAFFNAME, STAFFBIO, STAFFIMAGE, JOINTEAM) VALUES ('The blues', 'Want a team of three, then the blues are your birds. These birds are the newest addition to the team. Together they are form the full stack birdelopers', 'angry-bird-blue-icon', '2018-02-28');