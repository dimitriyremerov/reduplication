<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 13.07.2016
 * Time: 20:33
 */

namespace Reduplication\Language\Ru;

use Reduplication\ReduplicatorInterface;

class FirstVowel extends \Reduplication\Strategy\FirstVowel implements ReduplicatorInterface
{
	const VOWELS = ['а', 'э', 'о', 'у', 'я', 'е', 'ё', 'ю', 'и'];

	protected function concatenateParts(string $part1, string $part2) : string
	{
		return Helper::concatenateParts($part1, $part2);
	}
}
