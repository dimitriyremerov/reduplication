<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 15/07/16
 * Time: 14:22
 */

namespace Reduplication\Processor\Standard\Extraction;

use Reduplication\Strategy\Standard\Context;

class Standard
{
    public static function extractByFirstVowel(Context $context): bool
    {
        $input = $context->getPreExtracted();
        $firstVowelPos = static::detectFirstVowelPos($input);
        if ($firstVowelPos === null) {
            return false;
        }
        $context
            ->setExtracted(substr($input, $firstVowelPos))
            ->setRemovedPart(substr($input, 0, $firstVowelPos))
        ;
        return true;
    }

    /**
     * @param string $string
     * @return int|null
     */
    protected static function detectFirstVowelPos(string $string): ?int
    {
        for ($i = 0; $i <= strlen($string); $i++) {
            if (static::isVowel($string[$i])) {
                return $i;
            }
        }
        return null;
    }

    protected static function isVowel(string $letter): bool
    {
        static $vowels = null;
        if (!isset($vowels[static::class])) {
            $vowels[static::class] = array_fill_keys(static::VOWELS, true);
        }
        return isset($vowels[static::class][$letter]);
    }

    protected static function concatenateParts(string $part1, string $part2): string
    {
        if (static::isVowel($part1[strlen($part1) - 1]) && static::isVowel($part2[0])) {
            $part1 = substr($part1, 0, strlen($part1) - 1);
        }
        return $part1 . $part2;
    }
}
