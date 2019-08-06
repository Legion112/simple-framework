<?php

namespace App;

use App\Form\CreateBookForm;

class BookController
{
    public function create()
    {
        $serviceLocator = ServiceLocator::getInstance();
        /**
         * @var  $request Request
         */
        $request = $serviceLocator->get(Services::REQUEST);
        if ($request->isPost()) {
            $form = new CreateBookForm();
            $form->name = $request->post('name');
            // TODO validate and show errors
        } else {
            return require '../views/book/create.php';
        }
    }


    public function view()
    {
        $serviceLocator = ServiceLocator::getInstance();
        /** @var Request $request */
        $request = $serviceLocator->get(Services::REQUEST);
        $id = $request->get('id');
        die("New book id is $id");
    }
}