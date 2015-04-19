<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Asset Helper
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Ben Etten
 */
	
// ------------------------------------------------------------------------

/**
 * Returns the path to the assets folder.
 *
 * @access	public
 * @return	url		Url to the assets folder.
 */
if ( ! function_exists('assets_url'))
{
	function assets_url()
	{
		return base_url('assets');
	}
}
	 
// ------------------------------------------------------------------------

/**
 * Returns the path to the images folder.
 *
 * @access	public
 * @return	url		Url to the images folder.
 */
if ( ! function_exists('images_url'))
{
	function images_url()
	{
		return base_url('assets/images');
	}
}

// ------------------------------------------------------------------------

/**
 * Returns the path to the js folder.
 *
 * @access	public
 * @return	url		Url to the js folder.
 */
if ( ! function_exists('scripts_url'))
{
	function scripts_url()
	{
		return base_url('assets/js');
	}
}

// ------------------------------------------------------------------------

/**
 * Returns the path to the css folder.
 *
 * @access	public
 * @return	url		Url to the css folder.
 */
if ( ! function_exists('styles_url'))
{
	function styles_url()
	{
		return base_url('assets/css');
	}
} 

// ------------------------------------------------------------------------

/**
 * Returns the path to the css folder.
 *
 * @access	public
 * @return	url		Url to the pdf folder.
 */
if ( ! function_exists('pdfs_url'))
{
	function pdfs_url()
	{
		return base_url('assets/pdf');
	}
} 

// ------------------------------------------------------------------------

/**
 * Returns a full path to the blog version of the requested image.
 *
 * @access	public
 * @param	string	Name of the image.
 * @return	url		Url to the requested image.
 */
if ( ! function_exists('blog_image_url'))
{
	function blog_image_url($image_name)
	{
		return base_url('assets/images/'.$image_name.'/blog_full.jpg');
	}
}

// ------------------------------------------------------------------------

/**
 * Returns a full path to the large version of the requested image.
 *
 * @access	public
 * @param	string	Name of the portfolio image.
 * @param	string	Size of the portfolio image (large, medium, or small).
 * @return	url		Url to the requested image.
 */
if ( ! function_exists('get_image_url'))
{
	function get_image_url($image_name, $image_size)
	{
		return base_url('assets/images/'.$image_name.'/'.$image_size.'.jpg');
	}
} 

// ------------------------------------------------------------------------

/**
 * Returns a full path to the large version of the requested image.
 *
 * @access	public
 * @param	string	Name of the image.
 * @return	url		Url to the requested image.
 */
if ( ! function_exists('large_image_url'))
{
	function large_image_url($image_name)
	{
		return base_url('assets/images/'.$image_name.'/large.jpg');
	}
} 

// ------------------------------------------------------------------------

/**
 * Returns a full path to the medium version of the requested image.
 *
 * @access	public
 * @param	string	Name of the image.
 * @return	url		Url to the requested image.
 */
if ( ! function_exists('medium_image_url'))
{
	function medium_image_url($image_name)
	{
		return base_url('assets/images/'.$image_name.'/medium.jpg');
	}
}  

// ------------------------------------------------------------------------

/**
 * Returns a full path to the small version of the requested image.
 *
 * @access	public
 * @param	string	Name of the image.
 * @return	url		Url to the requested image.
 */
if ( ! function_exists('small_image_url'))
{
	function small_image_url($image_name)
	{
		return base_url('assets/images/'.$image_name.'/small.jpg');
	}
}  


/* End of file asset_helper.php */
/* Location: ./application/helpers/asset_helper.php */