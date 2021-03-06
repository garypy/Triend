<?php

class Customers_model extends CI_Model {

    public function __construct()
    {
    	//loading database
        $this->load->database();
    }
	/*
    public function get_news( $slug = FALSE )
    {
        if( $slug == FALSE )
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
        else
        {
            $query = $this->db->get_where('news', array('slug' => $slug ));
            return $query->row_array();
        }
    }
    
    public function set_news()
    {
    	$this->load->helper('url');
    	$slug = url_title($this->input->post('title'), 'dash', TRUE);
    	
    	$data = array(
    			'title' => $this->input->post('title'),
    			'slug' => $slug,
    			'text' => $this->input->post('text')
    			);
    	
    	return $this->db->insert('news', $data);
    }
    */

    public function set_news()
    {
    	$this->load->helper('url');
    	
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message'),
            );
    
    	return $this->db->insert('customers', $data);
    }
    
}
?>