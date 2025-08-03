<?php

/**
 * Controller responsible for the movie page ("/movie") of the application.
 */
class MovieController
{
	/**
	 * Handles [GET] requests to /movie/{id}, where "id" is a positive number.
	 *
	 * @param array $args Route arguments. Must include the 'id' of the movie.
	 */
	public function main(array $args): void
	{
		echo "<h1>MovieController</h1>";
		echo "<h2>Movie code: {$args['id']}</h2>";
	}
}
