<?php

/**
 * Controller responsible for the home page ("/" or "/home") of the application.
 */
class HomeController implements IController
{
	use TDynamicTitleController;

	/**
	 * Handles [GET] requests to the home page.
	 */
	public function main(): void
	{
		$this->setPageTitle('Home');
		require BASE_PATH . 'components/head.php';
		require BASE_PATH . 'views/HomeView.php';
		require BASE_PATH . 'components/foot.php';
	}
}
