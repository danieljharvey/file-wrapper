<?php

require_once('../vendor/autoload.php');
use PHPUnit\Framework\TestCase;

class FileWrapperTest extends TestCase {
	
	public function testCreate() {
		$fileWrapper = new \DanielJHarvey\FileWrapper\FileWrapper;

		$this->assertInstanceOf(
			'\DanielJHarvey\FileWrapper\FileWrapper',
			$fileWrapper,
			"Could not create the right object without errors"
		);
	}

}
