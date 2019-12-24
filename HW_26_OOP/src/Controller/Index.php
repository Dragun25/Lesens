<?php

namespace Controller;

use Framework\Controller\AbstractController;

class Index extends AbstractController
{
    public function index()
    {
        return $this->view->generate('framework/index.phtml', ['content' => __METHOD__]);
    }
}