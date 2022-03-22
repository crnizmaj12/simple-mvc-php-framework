<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
		$routeToProduct = str_replace('{id}', 1, $routes->get('product')->getPath());

        require_once APP_ROOT . '/views/home.php';
	}

	// Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $product = new Product();
        $product->read($id);

        require_once APP_ROOT . '/views/folder1.php';
	}

	// Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $product = new Product();
        $product->read($id);

        require_once APP_ROOT . '/views/folder2.php';
	}
}