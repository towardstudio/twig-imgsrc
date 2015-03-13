<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class ImgsrcTwigExtension extends Twig_Extension
{
	public function getName()
	{
		return 'Imgsrc';
	}

	public function getFunctions()
	{
		return array('imgsrc' => new \Twig_Function_Method($this, 'imgsrc'));
	}

	public function imgsrc($width, $height=null, $bgColor='', $txtColor='', $text='') {
		if ($height==null) {
			$height = $width;
		}
		$str = "http://imgsrc.me/{$width}x${height}/{$bgColor}/$txtColor";
		if (strlen($text) > 0) {
			$str .= "$text?showDimensions=0";
		}
		return $str;
	}
}


