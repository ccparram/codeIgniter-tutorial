<?php
class Dance extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['title'] = 'The amazing dancer';
                $data['css'] = ['/assets/css/dancer.css'];
                $data['js'] = ['https://cdnjs.cloudflare.com/ajax/libs/three.js/84/three.min.js',
                                'https://threejs.org/examples/js/controls/OrbitControls.js'];

                $this->load->view('templates/header', $data);
                $this->load->view('dance/index', $data);
        }
}