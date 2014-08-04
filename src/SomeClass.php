<?php
namespace MyApplication;

class SomeClass
{
	/**
	 * If you wanted, you could inject stuff here as well. Auto-dependency
	 * injection is recursive.
	 */
	public function __construct() {}

	public function sayHello()
	{
		return 'Hello world from SomeClass!';
	}
}
