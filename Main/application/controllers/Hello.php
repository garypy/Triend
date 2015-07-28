<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

    /*
	public function index()
	{
		$this->load->view('welcome_message');
	}
     */
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('News_model');
	
		$this->load->model('Customers_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
    public function index()
    {
        /*
        $data = array(
            'name' => 'Gary',
            'age' => '32',
        );*/
        $data['name'] = ucfirst('gary');
        $data['age'] = 32;

        $this->load->view('home', $data);

    }
    
    public function home()
    {
    	$this->load->helper('url');	
    	
    	//echo base_url();
    	$this->load->view('index');
    }

    public function sayhello($name1, $name2)
    {
        echo 'Hello, welcome to CI, '.$name1. 'and' .$name2;
    }
    
    public  function create()
    {
    	$this->load->library('form_validation');
    	
    	$this->form_validation->set_rules('name', 'name', 'required');
    	$this->form_validation->set_rules('email', 'email', 'required');
    	$this->form_validation->set_rules('message', 'message', 'required');
    	
    	if( $this->form_validation->run() == FALSE )
    	{
    		$this->load->view('index');
    	}
    	else
    	{
    		//$this->News_model->set_news();
    		$key=' <script type=text/javascript> alert("Submit success!"); </script> ';
    		echo $key;
    		$this->Customers_model->set_news();
    		$this->load->view('index');
    	}
    	//$this->Customers_model->set_news();
    }
}
