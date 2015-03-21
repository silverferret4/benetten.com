<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Pages Class
 *
 * @package	CodeIgniter
 * @subpackage	Application
 * @category	Controller
 * @author	B Etten
 * @link	http://example.com
 */
class Pages extends CI_Controller {
	
// ------------------------------------------------------------------------

	/**
	 * Loads the requested page.
	 *
	 * @access	public
	 * @param	string	Name of the view being requested.
	 * @return	type
	 */
	 public function view($page='home')
	 {
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Requested page does not exist... show 404.
			show_404();
			
			// Return FALSE if there as a problem.
			return FALSE;
		}

		// Build title based on requested page.
		$data['title'] = clean_title($page);


		// Home should not have header, menu or footer.
		// So use a little conditional logic to control that.
		if ($page<>'home')
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/menu');
		}
		$this->load->view('pages/'.$page, $data);
		if ($page<>'home')
		{
			$this->load->view('templates/footer');
		}   
	 }

// ------------------------------------------------------------------------

	/**
	 * Loads the request portfolio item
	 *
	 * @access	public
	 * @param	string	Name of the portfolio item being requested.
	 * @return	type
	 */
	 public function portfolio($page)
	 {
		if ( ! file_exists(APPPATH.'/views/portfolio/'.$page.'.php'))
		{
			// Requested page does not exist... show 404.
			show_404();
			
			// Return FALSE if there was a problem.
			return FALSE;
		}

		// Build title based on requested page.
		$data['title'] = clean_title($page);


		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('portfolio/'.$page, $data);
		$this->load->view('templates/footer');  
	 }
	 
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */