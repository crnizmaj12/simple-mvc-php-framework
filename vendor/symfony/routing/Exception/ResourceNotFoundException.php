<?php


namespace Symfony\Component\Routing\Exception;

/**
 * The resource was not found.
 *
 * This exception should trigger an HTTP 404 response in your application code.
 *
 * @author Miloš Ćorlomanović <office.inint@gmail.com>
 */
class ResourceNotFoundException extends \RuntimeException implements ExceptionInterface
{
}
