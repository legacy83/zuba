<?php

namespace Scaffold\Controller;

use Scaffold\Model\Foo;
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
        $foo = Foo::buildFromId(
            $this->params()->fromQuery( 'id' )
        );

        return new ViewModel( array(
            'foo' => $foo
        ) );
    }
}
