<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Header extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function visa_header()
	{
		$this->load->view('header');
	}

	public function load_form_data()
	{
		// Load your model
		$this->load->model('Destination_model');

		// Fetch destinations
		$data['destinationList'] = $this->Destination_model->getDestinationList();

		// Pass data to the view
		$this->load->view('your_form_view', $data);
	}


	public function index()
	{
		$this->load->view('header'); // Load your header
		$this->load->view('featured_section'); // Load Featured Section
		$this->load->view('footer'); // Load your footer
	}

	public function customer_reviews()
	{
		$this->load->view('customer_reviews');
	}

	public function __construct()
	{
		parent::__construct();
	}

	public function contact()
	{
		// Load the contact view
		$this->load->view('contact_view');
	}

}

class Carousel extends CI_Controller
{
	public function index()
	{
		$this->load->view('carousel_view');
	}
}



class Contact extends CI_Controller
{

	public function index()
	{
		$data['page_title'] = "Contact Us"; // Dynamic title
		$this->load->view('contact_view', $data);
	}
}


// class Destinations extends CI_Controller {

// 	public function index()
// 	{
// 		$this->load->view('destinations_view');
// 	}

// }

class CountryController extends CI_Controller {
    public function index() {
        $this->load->view('destination_list'); // Load the view
    }
}


