<?php

/**
 * Controller responsible for user authentication.
 *
 * Handles requests such as login (/auth/signin), logout (/auth/signout), and registration (/auth/signup).
 */
class AuthController
{
	/**
	 * Handles [GET] requests to /auth.
	 */
	public function main(): void
	{
		echo "<h1>AuthController</h1>";
	}
}
