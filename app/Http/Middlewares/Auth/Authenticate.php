<?php

namespace App\Http\Middlewares\Auth;

class Authenticate
{
	public function execute()
	{
		$restricted = false;

		if (! $restricted) {
			header('Location: login'); exit;
		}

		return true;
	}
}