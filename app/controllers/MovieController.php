<?php

/**
 * Controller responsible for the movie page ("/movie") of the application.
 */
class MovieController implements IController
{
	use TDynamicTitleController;

	/**
	 * Handles [GET] requests to /movie/{id}, where "id" is a positive number.
	 *
	 * @param array $args Route arguments. Must include the 'id' of the movie.
	 */
	public function main(array $args): void
	{
		$this->setPageTitle('Movie');
		$id = $args['id'];
		echo "<h2>Movie code: {$id}</h2>";
	}
}
