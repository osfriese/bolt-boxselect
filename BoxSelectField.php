<?php

namespace Bolt\Extension\Osfriese\Boxselect;

use Bolt\Field\FieldInterface;

class BoxSelectField implements FieldInterface
{

    public function getName()
    {
        return 'boxselect';
    }

    public function getTemplate()
    {
        return '_boxselect.twig';
    }

    public function getStorageType()
    {
        return 'text';
    }

    public function getStorageOptions()
    {
        return array('default'=>'');
    }

}
