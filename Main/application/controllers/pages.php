<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function index()
    {
        echo 'Pages -> Index page';

    }

    public function view($page)
    {
        /*
        if (! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
            show_404();
        }*/

        echo 'home page is: '.$page ;
/*
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
 */

    } 

    public function about()
    {
        $this->load->view('pages/about');
    }
}
?>


