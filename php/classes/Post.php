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