<?php

namespace Scaffold\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FooController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function showAction()
    {
        return new ViewModel( array(
            'id' => $this->params()->fromQuery( 'id' )
        ) );
    }
}
