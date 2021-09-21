<?php

declare(strict_types=1);

namespace _64FF00\PurePerms;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

final class PurePerms extends PluginBase{
	use SingletonTrait;

	public static function getInstance() : PurePerms{
		return self::$instance; // Shut up IntelliJ
	}

	protected function onLoad() : void{
		self::setInstance($this);
	}

	protected function onEnable() : void{
		// TODO
	}
}