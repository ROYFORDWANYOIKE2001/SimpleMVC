<?php 	

/**
 * 
 */
class File
{
	
	function __construct()
	{
		
	}
	public  static function copy_file($file,$destination='',$file2){
		copy($file, $destination.$file2);

	}
	public  static  function make_dir($destination='',$dir)
	{
		mkdir($destination.$dir);
	}
	public static function delete_dir($dirname)
	{
		rmdir($dirname);
	}
	public static function move_file($file1,$destination)
	{
		copy($file1, $destination);
		unlink($file1);
	}
	public  static function delete_file($file)
	{
		unlink($file);
	}
	public  static function rename_dir($destination='',$oldname,$newname)
	{
		rename($destination.$oldname, $destination.$newname);
	}
	public static function rename_file($oldname,$newname)
	{
		rename($oldname,$newname);
	}
	public static function load_content($value)
	{
		if(!file_exists($value))
			return  array('error' => 'file doest exist');
		return file_get_contents($value);
	}

}

 ?>