<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 13.07.2016
 * Time: 19:50
 */

namespace Reduplication\Strategy;


use Reduplication\AbstractReduplicator;
use Reduplication\ReduplicationConfig;
use Reduplication\ReduplicatorInterface;

class FirstVowel extends AbstractReduplicator implements ReduplicatorInterface
{
	const VOWELS = ['a', 'e', 'i', 'o', 'u'];
 	/**
	 * Main reduplcation function
	 *
	 * @param string $string
	 * @return string
	 */
	public function reduplicate(string $string) : string
	{
		$firstVowelPos = $this->detectFirstVowelPos($string);
		return $this->concatenateParts($this->config->getBase(), substr($string, $firstVowelPos));
	}

	/**
	 * @param string $string
	 * @return int|null
	 */
	protected function detectFirstVowelPos(string $string) : ?int
	{
		for ($i = 0; $i <= strlen($string); $i++) {
			if (static::isVowel($string[$i])) {
				return $i;
			}
		}
		return null;
	}

	protected static function isVowel(string $letter) : bool
	{
		static $vowels = null;
		if (!isset($vowels[static::class])) {
			$vowels[static::class] = array_fill_keys(static::VOWELS, true);
		}
		return isset($vowels[static::class][$letter]);
	}

	protected function concatenateParts(string $part1, string $part2) : string
	{
		if (static::isVowel($part1[strlen($part1) - 1]) && static::isVowel($part2[0])) {
			$part1 = substr($part1, 0, strlen($part1) - 1);
		}
		return $part1 . $part2;
	}
}
