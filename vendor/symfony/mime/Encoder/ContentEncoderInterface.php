<?php


namespace Symfony\Component\Mime\Encoder;

/**
 * @author Chris Corbyn
 */
interface ContentEncoderInterface extends EncoderInterface
{
    /**
     * Encodes the stream to a Generator.
     *
     * @param resource $stream
     */
    public function encodeByteStream($stream, int $maxLineLength = 0): iterable;

    /**
     * Gets the MIME name of this content encoding scheme.
     */
    public function getName(): string;
}
