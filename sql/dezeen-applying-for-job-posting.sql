
		CREATE TABLE profile (
			profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
			profileName VARCHAR(32) NOT NULL,
			profileEmail VARCHAR(128) NOT NULL,
			profileWebsite VARCHAR(32),
			UNIQUE(profileNAme)
			UNIQUE(profileEmail)
			PRIMARY KEY(profileId)
			);