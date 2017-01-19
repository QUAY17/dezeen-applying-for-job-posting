		CREATE TABLE profile (
			profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
			profileHandle VARCHAR(32) NOT NULL,
			profileFirstName VARCHAR(32) NOT NULL,
			profileLastName VARCHAR(32) NOT NULL,
			profileEmail VARCHAR(128) NOT NULL,
			profileWebsite VARCHAR(32),
			profilePassHash VARCHAR(20) NOT NULL,
			profilePassSalt VARCHAR(20) NOT NULL,
			UNIQUE(profileHandle),
			UNIQUE(profileEmail),
			UNIQUE(profilePassHash),
			UNIQUE(profilePassSalt),
			PRIMARY KEY(profileId)
			);

		CREATE TABLE post (
			postId INT UNSIGNED AUTO_INCREMENT NOT NULL,
			postProfileId INT UNSIGNED NOT NULL,
			profileDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
			profileDeadline DATETIME NOT NULL,
			profileContent VARCHAR(5000),
			profileCity VARCHAR(20) NOT NULL,
			profileCountry VARCHAR(20) NOT NULL,
			INDEX(postProfileId),
			FOREIGN KEY(postProfileId),
			PRIMARY KEY(postId)
		);

		CREATE TABLE tag (
			tagId INT UNSIGNED AUTO_INCREMENT NOT NULL,
			tagName VARCHAR(20) NOT NULL,
			INDEX(tagName),
			PRIMARY KEY(tagId)
		);

		CREATE TABLE postTag (
			postTagId INT UNSIGNED AUTO_INCREMENT NOT NULL,
			postTagName VARCHAR(20) NOT NULL,
			INDEX(postTagId),
			INDEX(postTagName),
			FOREIGN KEY(postTagId),
			FOREIGN KEY(postTagName)
		);

