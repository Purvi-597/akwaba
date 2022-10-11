<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
	 'stripe' => [
        'secret' => 'sk_test_51J0P5oSIIyggE4jOd5s4F460VuV9YZzGfwmORr4tzX1s9j4aEHkuqfv7KG6jR2UQY22w5WES8v6IfCvAT2bPGaqe00bjTwZHHC',
    ],
   'google' => [
    'client_id' => '385885824557-1hj6rhj9q60v8hrlu0nhomsso6rk3luk.apps.googleusercontent.com',
    'client_secret' => 'c3yD3nV75121vuhVbRuhSJ8F',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '264869215553278',
        'client_secret' => '50e2bbc344acda485c5041fc8d8757d4',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

	
];
