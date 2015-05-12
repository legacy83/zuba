<?php

namespace Scaffold\Controller;

use Scaffold\Model\Foo;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FooController extends AbstractActionController
{
    public function indexAction()
    {
        $foos = array();
        foreach ( range( 1, 6 ) as $id ) {
            $foos[ ] = Foo::buildFromId( $id );
        }

        return new ViewModel( array(
            'foos' => $foos,
        ) );
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

    public function createAction()
    {
        if ( $this->params()->fromPost( 'createSubmitCreate' ) ) {
            $this->flashMessenger()->addSuccessMessage( '@foo created successfully' );
            $this->redirect()->toRoute( '@foo' );
        }

        if ( $this->params()->fromPost( 'createSubmitCancel' ) ) {
            $this->redirect()->toRoute( '@foo' );
        }

        return new ViewModel();
    }

    public function editAction()
    {
        if ( $this->params()->fromPost( 'editSubmitSave' ) ) {
            $this->flashMessenger()->addSuccessMessage( '@foo modified successfully' );
            $this->redirect()->toRoute( '@foo' );
        }

        if ( $this->params()->fromPost( 'editSubmitCancel' ) ) {
            $this->redirect()->toRoute( '@foo' );
        }

        $foo = Foo::buildFromId(
            $this->params()->fromQuery( 'id' )
        );

        return new ViewModel( array(
            'foo' => $foo
        ) );
    }

    public function destroyAction()
    {
        if ( $this->params()->fromPost( 'destroySubmitYes' ) ) {
            $this->flashMessenger()->addSuccessMessage( '@foo destroyed successfully' );
            $this->redirect()->toRoute( '@foo' );
        }

        if ( $this->params()->fromPost( 'destroySubmitNo' ) ) {
            $this->redirect()->toRoute( '@foo' );
        }

        $foo = Foo::buildFromId(
            $this->params()->fromQuery( 'id' )
        );

        return new ViewModel( array(
            'foo' => $foo
        ) );
    }
}
