<?php
namespace App;

class SiteController
{
    public function main()
    {
        /**
         * @todo use template engine instead
         * @see https://twig.symfony.com/
         */
        echo require '../views/site/main.php';
    }

    public function about()
    {
        echo require '../views/site/about.php';
    }

    public function contact()
    {
        $_SERVER['REQUEST_METHOD'];
        echo require '../views/site/contact.php';
    }
}