<?php

namespace Scaffold\Model;

class Foo
{
    public $id;

    static function buildFromId( $id )
    {
        $foo = new Foo();
        $foo->id = $id;

        return $foo;
    }
}