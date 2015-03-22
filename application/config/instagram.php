<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Instagram Configuration
 *
 * Configuration information to support retrieving images
 * through the Instagram API.
 *
 * @package		CodeIgniter
 * @subpackage	Application
 * @category	Config
 * @author		Ben Etten
 */
 
/*
|--------------------------------------------------------------------------
| Instagram
|--------------------------------------------------------------------------
|
| This is the information needed in order to connect to a Instagram. 
|
*/
$config['instagram_client_id']			= '3464ea14d17d456990df8b56a0d8b8fd';
$config['instagram_client_secret']		= 'ee739f701c36487ba7576178b4ea1d4c';
$config['instagram_access_token']		= '1781863826.3464ea1.c486f75fbdf94810bfd9122cb666a5dd';
$config['instagram_popular_media_url'] 	= 'https://api.instagram.com/v1/media/popular?client_id=%s';
$config['instagram_user_feed_url']		= 'https://api.instagram.com/v1/users/self/feed?access_token=%s';

/* End of file instagram.php */
/* Location: ./application/config/instagram.php */