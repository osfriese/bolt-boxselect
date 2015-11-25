<?php

namespace Bolt\Extension\Osfriese\Boxselect;

use Bolt\Application;
use Bolt\BaseExtension;

include_once 'BoxSelectField.php';

class Extension extends BaseExtension
{

    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->app['config']->getFields()->addField(new BoxSelectField());
        if ($this->app['config']->getWhichEnd()=='backend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
        }
    }
    
    public function initialize()
    {
        $this->addCss('assets/boxselect.css');
        //$this->addJavascript('assets/start.js', true);
    }

    public function getName()
    {
        return "Boxselect";
    }
}
