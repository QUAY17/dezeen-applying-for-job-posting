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