<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Pages Class
 *
 * @package		CodeIgniter
 * @subpackage	Application
 * @category	Controller
 * @author		Ben Etten
 */
class Pages extends CI_Controller {

	/**
	 * Constructor for this controller.
	 *
	 */
	public function __construct()
	{
		parent::__construct();
	}

// ------------------------------------------------------------------------

	/**
	 * Loads the requested page.
	 *
	 * @access	public
	 * @param	string	Name of the view being requested.
	 * @return	mixed	FALSE if there is a problem, else renders view.
	 */
	 public function view($page='portfolio')
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


		// Load up individual templates in order to put together complete page.
		$this->load->view('templates/head', $data);
		$this->load->view('templates/menu');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');

	 }

// ------------------------------------------------------------------------

	/**
	 * Loads the requested portfolio item
	 *
	 * @access	public
	 * @param	string	Name of the portfolio item being requested.
	 * @return	mixed	FALSE if there is a problem, else renders view.
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

		// Now build up the page by loading the appropriate views.
		$this->load->view('templates/head', $data);
		$this->load->view('templates/menu');
		$this->load->view('portfolio/'.$page, $data);
		$this->load->view('templates/footer');
	 }

// ------------------------------------------------------------------------

	/**
	 * Loads the requested portfolio item
	 *
	 * @access	public
	 * @param	string	Name of the portfolio item being requested.
	 * @return	mixed	FALSE if there is a problem, else renders view.
	 */
	 public function sketchbook()
	 {
		// Use the get_user_feed method to retrieve my sketches.
		$data['sketchbook'] = $this->instagram->get_user_feed();

		// Build title based on requested page.
		$data['title'] = clean_title('sketchbook');

		// Now build up the page by loading the appropriate views.
		$this->load->view('templates/head', $data);
		$this->load->view('templates/menu');
		$this->load->view('pages/sketchbook', $data);
		$this->load->view('templates/footer');
	 }

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
