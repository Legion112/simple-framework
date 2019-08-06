<?php

namespace App;

class BookController
{
    public function create()
    {
        /**
         * @var  $request
         * @todo don't create here get via dependency
         */
        $request = new Request();
        if ($request->isPost()) {
            /**
             * @todo validate (show errors if there are any), save, and redirect to (book/view?id=12334)
             */
            var_dump($_POST);
            die;
        }
        return require '../views/book/create.php';
    }


    public function view()
    {
        die('View created book');
    }
}