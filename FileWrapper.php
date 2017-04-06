<?php

namespace DanielJHarvey;

// doesn't do anything clever, just means that file actions can be stubbed in testing (so we can mock responses and not write all over test machine)

class FileWrapper {
	
	public function realPath($path) {
		return realpath($path);
	}

	public function fileExists($filename) {
		return file_exists($filename);
	}

	public function fileGetContents($filename) {
		return file_get_contents($filename);
	}

	public function filePutContents($filename, $data) {
		return file_put_contents($filename,$data);
	}

	public function umask($mask) {
		return umask($mask);
	}

	public function mkdir($pathName, $mode= 0777, $recursive=false) {
		return mkdir($pathName, $mode, $recursive);
	}

	public function base64Encode($data) {
		return base64_encode($data);
	}
	
	public function pathInfo($path,$options=false) {
		return pathinfo($path,$options);
	}
	
}