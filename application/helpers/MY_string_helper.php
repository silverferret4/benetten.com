<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY_ String Helper
 *
 * This extends the existing CodeIgniter String Helper.
 *
 * @package	CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author	Ben Etten
 */
	
// ------------------------------------------------------------------------

/**
 * Converts a page filename to a clean title.
 *
 * @access	public
 * @param	string	
 * @return	string
 */
if ( ! function_exists('clean_title'))
{
	function clean_title($filename)
	{
		// str_replace to replace any underscores with a space.
		// ucwords to set first letter of each word to uc.
		return ucwords(str_replace("_"," ",$filename));
	}
}



/* End of file MY_string_helper.php */
/* Location: ./application/helpers/MY_string_helper.php */