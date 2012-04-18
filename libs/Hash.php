<?php

	/*
	 * Hash::create('md5', 'passwordhere', 'saltIfThereisOne')
	 *@param string $algo The algorithm( md5, sha1, whirlpool, etc)
	 *@param string $data The data to encode
	 *@param string $salt The salt (this should be the same throughout the system probably)
	 *@return string The hashed/salted data
	 */
class HasH {
	public static function create($algo, $data, $salt) {

		$context = hash_init($algo, HASH_HMAC, $salt);
		hash_update($context, $data);

		return hash_final($context);
	}
}
