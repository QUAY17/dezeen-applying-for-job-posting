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