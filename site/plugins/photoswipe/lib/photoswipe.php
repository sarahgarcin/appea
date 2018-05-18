<?php

namespace ka\kirby;

use Tpl;

class PhotoSwipe
{
	static function init()
	{
		return tpl::load(__DIR__ . DS . '..' . DS . 'templates' . DS . 'pswp.php');
	}
}