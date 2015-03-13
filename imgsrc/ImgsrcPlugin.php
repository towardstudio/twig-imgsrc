<?php
namespace Craft;

class ImgsrcPlugin extends BasePlugin
{

	public function getName()
	{
		return 'Imgsrc';
	}

	public function getVersion()
	{
		return '0.1';
	}

	public function getDeveloper()
	{
		return 'Bluegg';
	}

	public function getDeveloperUrl()
	{
		return 'http://bluegg.co.uk';
	}

	public function hookAddTwigExtension()
  {
      Craft::import('plugins.imgsrc.twigextensions.ImgsrcTwigExtension');

      return new ImgsrcTwigExtension();
  }
}
