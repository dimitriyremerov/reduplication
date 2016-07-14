<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 13.07.2016
 * Time: 18:32
 */

namespace Reduplication;


interface ReduplicatorInterface
{
	/**
	 * @param ReduplicationConfig $config
	 */
	public function __construct(ReduplicationConfig $config);

	/**
	 * Main reduplcation function
	 *
	 * @param string $string
	 */
	public function reduplicate(string $string) : string;
}
