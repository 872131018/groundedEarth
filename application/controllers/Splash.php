<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Splash extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('splash');
	}

	public function editor()
	{
		/*
		* Get list of items in the directory
		*/
		$images = scandir(getcwd()."/images/thumbnails/");
		/*
		* Clean up any values you dont want to show
		*/
		foreach($images as $key => $value)
		{
			switch($value)
			{
				case ".":
				case "..":
				case ".DS_Store":
					unset($images[$key]);
					break;
				default:
					break;
			}
			/*
			* Unset all png files
			*/
			if(substr($value, -3) == "png")
			{
				unset($images[$key]);
			}
		}
		/*
		* Each item in data will be variable in view
		*/
		$data = array(
			'images' => $images,
    );
		$this->load->view('editor', $data);
	}
}
