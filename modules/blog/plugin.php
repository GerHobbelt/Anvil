<?php

use Blog\Post;
use Blog\Comment;

class BlogPlugin extends Plugin {

	/**
	 * Retrieve the blog posts.
	 *
	 * @param  int     $skip
	 * @param  int     $take
	 * @param  string  $orderBy
	 * @param  string  $orderDir
	 * @return array
	 */
	public function posts($skip = 0, $take = 10, $orderBy = 'created_at', $orderDir = 'ASC')
	{
		return Post::with('author')
					->orderBy($orderBy, $orderDir)
					->skip($skip)
					->take($take)
					->get();
	}

	/**
	 * Retrieve the blog comments.
	 *
	 * @return array
	 */
	public function comments()
	{
		return Comment::with(array('post', 'author'))->get();
	}
}