--
-- Table structure for table `emailSignups`
--

CREATE TABLE IF NOT EXISTS groundedEarthMothership.emailSignups
(
	id	INT NOT NULL AUTO_INCREMENT,
	email 	VARCHAR(64) NOT NULL,
	signedUpAt TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
