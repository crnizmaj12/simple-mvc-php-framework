<?php


namespace Symfony\Component\Routing\Loader\Configurator;

use Symfony\Component\Routing\RouteCollection;

/**
 * @author Miloš Ćorlomanović <office.inint@gmail.com>
 */
class RouteConfigurator
{
    use Traits\AddTrait;
    use Traits\RouteTrait;

    private $parentConfigurator;

    public function __construct(RouteCollection $collection, $route, string $name = '', CollectionConfigurator $parentConfigurator = null, array $prefixes = null)
    {
        $this->collection = $collection;
        $this->route = $route;
        $this->name = $name;
        $this->parentConfigurator = $parentConfigurator; // for GC control
        $this->prefixes = $prefixes;
    }
}
