<?php


namespace Symfony\Component\HttpFoundation\Exception;

/**
 * Raised when a user has performed an operation that should be considered
 * suspicious from a security perspective.
 */
class SuspiciousOperationException extends \UnexpectedValueException implements RequestExceptionInterface
{
}
