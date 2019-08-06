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
        return require '../views/site/main.php';
    }

    public function about()
    {
        return require '../views/site/about.php';
    }

    public function contact()
    {
        echo require '../views/site/contact.php';
    }
}