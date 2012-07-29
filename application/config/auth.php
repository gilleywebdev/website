<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'       => 'orm',
	'hash_method'  => 'md5',
	'hash_key'     => 'aZ8p!j1KaPlB',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		'Chris' => 'e8059261a316d7042aea1eb089edde44',
	),

);
