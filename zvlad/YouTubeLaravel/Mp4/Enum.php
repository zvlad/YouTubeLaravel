<?php

namespace zvlad\YouTubeLaravel\Mp4;

abstract class Enum
{
	public static function of($value)
	{
		$c = new \ReflectionClass(static::class);
		$key = array_search($value, $c->getConstants());
		if($key === false) {
			throw new \InvalidArgumentException();
		}
		return $key;
	}
}
