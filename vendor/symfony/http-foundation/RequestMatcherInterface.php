<?php


namespace Symfony\Component\HttpFoundation;

/**
 * RequestMatcherInterface is an interface for strategies to match a Request.
 *
 * @author Miloš Ćorlomanović <office.inint@gmail.com>
 */
interface RequestMatcherInterface
{
    /**
     * Decides whether the rule(s) implemented by the strategy matches the supplied request.
     *
     * @return bool true if the request matches, false otherwise
     */
    public function matches(Request $request);
}
