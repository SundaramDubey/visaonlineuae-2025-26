<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestimonialModel extends CI_Model {

    public function get_all_testimonials() {
        // Fetch testimonials from the database
        $query = $this->db->get('testimonials');  // assuming you have a testimonials table
        return $query->result_array();
    }
}
