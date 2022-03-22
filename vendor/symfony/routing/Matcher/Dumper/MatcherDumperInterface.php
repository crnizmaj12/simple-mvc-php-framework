<?php


namespace Symfony\Component\Routing\Matcher\Dumper;

use Symfony\Component\Routing\RouteCollection;

/**
 * MatcherDumperInterface is the interface that all matcher dumper classes must implement.
 *
 * @author Miloš Ćorlomanović <office.inint@gmail.com>
 */
interface MatcherDumperInterface
{
    /**
     * Dumps a set of routes to a string representation of executable code
     * that can then be used to match a request against these routes.
     *
     * @return string Executable code
     */
    public function dump(array $options = []);

    /**
     * Gets the routes to dump.
     *
     * @return RouteCollection A RouteCollection instance
     */
    public function getRoutes();
}
