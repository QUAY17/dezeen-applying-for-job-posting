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

