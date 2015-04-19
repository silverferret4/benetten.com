<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Instagram Class
 *
 * @package		CodeIgniter
 * @subpackage	Application
 * @category	Libraries
 * @author		Ben Etten
 */
class Instagram {

	/**
	 * Declare the necessary variables.
	 */
	private $CI;			// Private variable to hold the CodeIgniter instance.
	
// ------------------------------------------------------------------------
	
	/**
	 * Constructor for this controller.
	 *
	 */
	public function __construct()
	{
		// Get the CodeIgniter instance.  Important: ByRef =&
		$this->CI =& get_instance();
		
		// Load the Instagram configuration information.
		$this->CI->load->config('instagram');
		
		// Test to make sure that curl is installed.
		if (!in_array('curl', get_loaded_extensions()))
		{
			log_message('error', 'curl is not installed.  The Instagram library will not work.');
		}
	}

// ------------------------------------------------------------------------

	/**
	 * Use cURL library to connect to Instagram API
	 *
	 * @access	public
	 * @param	string		API url to connect to.
	 * @param	array		Post parameters for cURL call.
	 * @return	std_class	Data returned from cURL call.
	 */
	public function call_api($url, $post_parameters = FALSE)
	{
		// Log message.
		log_message('debug','call_api');
				
		// Initiate handle to cURL session.
		$ch = curl_init();
				
		// Set the URL of the API being called.
		curl_setopt($ch, CURLOPT_URL, $url);
		
		// If there are any additional parameters, add them now.
		if ($post_parameters !== FALSE)
		{
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_parameters);
		}
		
		// Return the cURL results to a variable.
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		// Setup to debug cURL call.  This should be taken out if not using!!!
		//$fp = fopen(APPPATH.'/logs/instagram_curl_log.txt', 'w'); 
		//curl_setopt($ch, CURLOPT_VERBOSE, 1);
		//curl_setopt($ch, CURLOPT_STDERR, $fp);
		
		// Appears that I need to disable the security checking.
		// This may be an issue.  Read more.
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		
		// Execute cURL session.
		$contents = curl_exec($ch);
		
		// Close the cURL session.
		curl_close($ch);
		
		// Log message... the response from Instagram.
		log_message('debug',$contents);
		
		// Return the response.
		return json_decode($contents);
	}

// ------------------------------------------------------------------------

	/**
	 * Retrieve popular media from Instagram.
	 * This method only needs your instagram client_id; OAuth not required.
	 *
	 * @access	public
	 * @return	std_class	Current popular media with associated data.
	 */
	public function get_popular_media()
	{
		// Log message.
		log_message('debug','get_popular');
		
        // Build URL for retrieving popular media.
        $url = sprintf(
        	$this->CI->config->item('instagram_popular_media_url'),
        	$this->CI->config->item('instagram_client_id')
        	);
        
        // Call instragram api.
        return $this->call_api($url);
	}
	

// ------------------------------------------------------------------------

	/**
	 * Retrieve media from my user feed.
	 * Note: Manually retrieved an OAuth token.
	 *
	 * @access	public
	 * @return	std_class	User feed data.
	 */
	public function get_user_feed()
	{
		// Log message.
		log_message('debug','get_user_feed');
		
		// Build URL for retrieving user feed.
		$url = sprintf(
			$this->CI->config->item('instagram_user_feed_url'),
			$this->CI->config->item('instagram_access_token')
			);
			
        // Call instragram api.
        return $this->call_api($url);
	}
 
}

/* End of file instagram.php */
/* Location: ./application/libraries/instagram.php */