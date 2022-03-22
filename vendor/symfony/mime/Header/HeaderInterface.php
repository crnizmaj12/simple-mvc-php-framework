<?php


namespace Symfony\Component\Mime\Header;

/**
 * A MIME Header.
 *
 * @author Chris Corbyn
 */
interface HeaderInterface
{
    /**
     * Sets the body.
     *
     * The type depends on the Header concrete class.
     *
     * @param mixed $body
     */
    public function setBody($body);

    /**
     * Gets the body.
     *
     * The return type depends on the Header concrete class.
     *
     * @return mixed
     */
    public function getBody();

    public function setCharset(string $charset);

    public function getCharset(): ?string;

    public function setLanguage(string $lang);

    public function getLanguage(): ?string;

    public function getName(): string;

    public function setMaxLineLength(int $lineLength);

    public function getMaxLineLength(): int;

    /**
     * Gets this Header rendered as a compliant string.
     */
    public function toString(): string;

    /**
     * Gets the header's body, prepared for folding into a final header value.
     *
     * This is not necessarily RFC 2822 compliant since folding white space is
     * not added at this stage (see {@link toString()} for that).
     */
    public function getBodyAsString(): string;
}
