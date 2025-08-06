<?php

/**
 * Controller responsible for user authentication.
 *
 * Handles requests such as login (/auth/signin), logout (/auth/signout), and registration (/auth/signup).
 */
class AuthController implements IController
{
	use TDynamicTitleController;

	/**
	 * Handles [GET] requests to /auth.
	 */
	public function main(): void
	{
		$this->setPageTitle('Authentication');
	}
}
