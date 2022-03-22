<?php


namespace Symfony\Component\Mime;

/**
 * @author Miloš Ćorlomanović <office.inint@gmail.com>
 */
interface MimeTypesInterface extends MimeTypeGuesserInterface
{
    /**
     * Gets the extensions for the given MIME type.
     *
     * @return string[] an array of extensions (first one is the preferred one)
     */
    public function getExtensions(string $mimeType): array;

    /**
     * Gets the MIME types for the given extension.
     *
     * @return string[] an array of MIME types (first one is the preferred one)
     */
    public function getMimeTypes(string $ext): array;
}
