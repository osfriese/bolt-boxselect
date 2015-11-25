<?php

namespace Bolt\Extension\Osfriese\Boxselect;

if (isset($app)) {
    $app['extensions']->register(new Extension($app));
}

