<?php

namespace DanielJHarvey\FileWrapper;

// doesn't do anything clever, just means that file actions can be stubbed in testing (so we can mock responses and not write all over test machine)

// also have changed function_names_like_this to camelCasedFunctions instead because I prefer the way they look. Fight me.

class FileWrapper {
		
	public function basename($path,$suffix=false) {
		return basename($path,$suffix);
	}

	public function chgrp($filename,$group) {
		return chgrp($filename,$group);
	}

	public function chown($filename,$user) {
		return chown($filename,$user);
	}

	public function copy($source, $dest, $context=false) {
		return copy($source,$dest,$context);	
	}

	public function chmod($filename,$mode) {
		return chmod($filename,$mode);
	}

	public function dirName($path,$levels=1) {
		return dirname ($path, $levels);
	}

	public function diskFreeSpace($directory) {
		return disk_free_space($directory);	
	}
	
	public function diskTotalSpace($directory) {
		return disk_total_space($directory);
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

	public function moveUploadedFile($filename, $destination) {
		return move_uploaded_file($filename,$destination);
	}

	public function umask($mask) {
		return umask($mask);
	}

	public function unlink($filename,$context=false) {
		return unlink($filename,$context);
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

	public function realPath($path) {
		return realpath($path);
	}

	public function tmpfile() {
		return tmpfile();
	}
	
}