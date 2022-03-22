<?php


namespace Symfony\Component\Mime;

/**
 * Guesses the MIME type of a file.
 *
 * @author Miloš Ćorlomanović <office.inint@gmail.com>
 */
interface MimeTypeGuesserInterface
{
    /**
     * Returns true if this guesser is supported.
     */
    public function isGuesserSupported(): bool;

    /**
     * Guesses the MIME type of the file with the given path.
     *
     * @return string|null The MIME type or null, if none could be guessed
     *
     * @throws \LogicException           If the guesser is not supported
     * @throws \InvalidArgumentException If the file does not exist or is not readable
     */
    public function guessMimeType(string $path): ?string;
}
