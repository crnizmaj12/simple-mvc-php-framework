<?php


namespace Symfony\Component\Mime\Encoder;

/**
 * @author Chris Corbyn
 */
interface EncoderInterface
{
    /**
     * Encode a given string to produce an encoded string.
     *
     * @param int $firstLineOffset if first line needs to be shorter
     * @param int $maxLineLength   - 0 indicates the default length for this encoding
     */
    public function encodeString(string $string, ?string $charset = 'utf-8', int $firstLineOffset = 0, int $maxLineLength = 0): string;
}
