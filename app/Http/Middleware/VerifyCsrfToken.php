<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

	protected function tokensMatch($request)
	{
		if (env('APP_ENV') === 'testing') {
			return true;
		}

		return parent::tokensMatch($request);
	}
}
