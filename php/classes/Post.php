<?php
/**
* Small section of a post on Dezeen Jobs https://www.dezeenjobs.com/
*
* This can be considered a small example of what Dezeen Jobs stores when a user attempts to post content on the job forum.
*
* @author Jennifer Minnich <jminnich@cnm.edu>
* @version 1.0.0
**/

class Post implements \JsonSerializable {
	use ValidateDate;
	/**
	 * id for this Post; this is the primary key
	 * @var int $PostId
	 **/
	private $postId;
	/**
	 * id of the Profile that submitted post; this is a foreign key
	 * @var int $postProfileId
	 **/
	private $postProfileId
	/**
 	* date and time this post was submitted, in a PHP TimeStamp object
 	* @var \TimeStamp $postDate
	 **/
	private $postDate;
	/**
	 * actual textual content of post
	 * @var string $postContent
	 **/
	private $postContent;
		/**
		 * City location of post
		 * @var string $postCity
		 **/
	private $postCity;
		/**
		 * Country location of post
		 * @var string $postCountry
		 **/
	private $postCountry;
		/**
		 * deadline of post (duration of time allowed on forum), in a PHP DateTime object
		 * @var \DateTime $postDeadline
		 **/
	private $postDeadline;

	/**constructor for this post
	 *
	 * @param int|null $newPostId id of the post or null if a new Post
	 * @param int $newPostProfileId id of the Profile that submitted the Post
	 * @param \TIMESTAMP|string $newPostDate date and time Post was sent
	 * @param string $newPostContent string containing actual Post data
	 * @param string $newPostCity string containing City of Post
	 * @param string $newPostCountry string containing Country of Post
	 * @param \DateTime|string $newPostDeadline date and time of deadline
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 **/

	public function __construct(int $newPostId = null, int $newPostProfileId, string $newPostContent, $newPostDate, string $newPostCity, string $newPostCounty, $newTweetDeadline = null) {
		try {
			$this->setPostId($newPostId);
			$this->setPostProfileId($newPostProfileId);
			$this->setPostContent($newPostContent);
			$this->setPostDate($newPostDate);
			$this->setPostCity($newPostCity);
			$this->setPostCountry($newPostCountry);
			$this->setPostDeadline($newPostDeadline);
		} catch(\InvalidArgumentException $invalidArgument) {
			// rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		} catch(\RangeException $range) {
			// rethrow the exception to the caller
			throw(new \RangeException($range->getMessage(), 0, $range));
		} catch(\TypeError $typeError) {
			// rethrow the exception to the caller
			throw(new \TypeError($typeError->getMessage(), 0, $typeError));
		} catch(\Exception $exception) {
			// rethrow the exception to the caller
			throw(new \Exception($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 * accessor method for post id
	 *
	 * @return int|null value of post id
	 **/
	public function getPostId() {
		return($this->PostId);
	}

	/**
	 * mutator method for post id
	 *
	 * @param int|null $newPostId new value of post id
	 * @throws \RangeException if $newPostId is not positive
	 * @throws \TypeError if $newPostId is not an integer
	 **/

	public function setPostId(int $newPostId = null) {
		// base case: if the post id is null, this a new tweet without a mySQL assigned id (yet)
		if($newPostId === null) {
			$this->PostId = null;
			return;
		}

		// verify the post id is positive
		if($newPostId <= 0) {
			throw(new \RangeException("post id is not positive, therefore invalid"));
		}

		// convert and store the post id
		$this->postId = $newpostId;
	}

	/**
	 * accessor method for post profile id
	 *
	 * @return int value of post profile id
	 **/
hrows \TypeError if $newPostContent is not a string
	 **/

	public function getPostProfileId() {
		return($this->PostProfileId);
	}

	/**
	 * mutator method for post profile id
	 *
	 * @param int $newPostProfileId new value of post profile id
	 * @throws \RangeException if $newPostProfileId is not positive
	 * @throws \TypeError if $newPostProfileId is not an integer
	 **/

	public function setPostProfileId(int $newPostProfileId) {
		// verify the profile id is positive
		if($newPostProfileId <= 0) {
			throw(new \RangeException("post profile id is not positive, therefore invalid"));
		}

		// convert and store the profile id
		$this->PostProfileId = $newPostProfileId;
	}

	/**
	 * accessor method for post content
	 *
	 * @return string value of post content
	 **/
	public function getPostContent() {
		return($this->postContent);
	}

	/**
	 * mutator method for post content
	 *
	 * @param string $newPostContent new value of post content
	 * @throws \InvalidArgumentException if $newPostContent is insecure
	 * @throws \RangeException if $newPostContent is > 140 characters
	 * @throws \TypeError if $newPostContent is not a string
	 **/

	public function setPostContent(string $newPostContent) {
		// verify the post content is secure
		$newPostContent = trim($newPostContent);
		$newPostContent = filter_var($newPostContent, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newPostContent) === true) {
			throw(new \InvalidArgumentException("post content is empty or insecure"));
		}

		// verify the post content will fit in the database
		if(strlen($newPostContent) > 2000) {
			throw(new \RangeException("post content too large, please summarize in less than 2000 characters"));
		}

		// store the post content
		$this->postContent = $newPostContent;
	}
	/**
	 * accessor method for post date
	 *
	 * @return \TimeStamp value of post date
	 **/
	public function getpostDate() {
		return($this->postDate);
	}

	/**
	 * mutator method for post date
	 *
	 * @param \TimeStamp|string $newPostDate post date as a TimeStamp object or string
	 * @throws \InvalidArgumentException if $newPostDate is not a valid object or string
	 * @throws \RangeException if $newPostDate is a date that does not exist
	 **/

	public function setPostDate($newPostDate = null) {
		// base case: if the date is null, use the current date and time
		if($newPostDate === null) {
			$this->PostDate = new \TimeStamp();
			return;
		}

		// store the post date
		try {
			$newpostDate = self::validateTimeStamp($newPostDate);
		} catch(\InvalidArgumentException $invalidArgument) {
			throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		} catch(\RangeException $range) {
			throw(new \RangeException($range->getMessage(), 0, $range));
		}
		$this->postDate = $newPostDate;
	}
/**
 * accessor method for post city
 *
 * @return string value of post city
 **/
	public function getPostCity() {
		return($this->postCity);
	}
	/**
	 * mutator method for post city
	 * @param string $newPostCity new value of post city
	 * @throws \InvalidArgumentException if $newPostCity is insecure
	 * @throws \RangeException if $newPostCity is > 20 characters
	 * @throws \TypeError if $newPostCity is not a string
	 **/

	public function setPostCity(string $newPostCity) {
		// verify the post content is secure
		$newPostCity = trim($newPostCity);
		$newPostCity = filter_var($newPostCity, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newPostCity) === true) {
			throw(new \InvalidArgumentException("city content is empty or insecure"));
		}

		// verify the post city will fit in the database
		if(strlen($newPostCity) > 20) {
			throw(new \RangeException("city content too large"));
		}

		// store the post city
		$this->postCity = $newPostCity;
	}
	/**
	 * inserts this Post into mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/