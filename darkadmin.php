<?php

namespace Plugins\Darkadmin;

use \Typemill\Plugin;

class Darkadmin extends Plugin
{	
    public static function getSubscribedEvents()
    {
		return array(
			'onTwigLoaded' 			=> 'onTwigLoaded'
		);
    }
		
	public function onTwigLoaded()
	{
		if($this->adminpath)
		{
			$this->addCSS('/darkadmin/public/style.css');	
		}
		
	}
}