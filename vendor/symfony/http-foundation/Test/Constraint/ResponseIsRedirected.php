<?php


namespace Symfony\Component\HttpFoundation\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\HttpFoundation\Response;

final class ResponseIsRedirected extends Constraint
{
    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return 'is redirected';
    }

    /**
     * @param Response $response
     *
     * {@inheritdoc}
     */
    protected function matches($response): bool
    {
        return $response->isRedirect();
    }

    /**
     * @param Response $response
     *
     * {@inheritdoc}
     */
    protected function failureDescription($response): string
    {
        return 'the Response '.$this->toString();
    }

    /**
     * @param Response $response
     *
     * {@inheritdoc}
     */
    protected function additionalFailureDescription($response): string
    {
        return (string) $response;
    }
}