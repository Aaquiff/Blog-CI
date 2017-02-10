<?php
class Posts_Controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('posts_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['posts'] = $this->posts_model->get_news();
                $data['title'] = 'Posts';

                $this->load->view('templates/header');
                $this->load->view('posts/posts', $data);
                $this->load->view('templates/footer');
        }

        public function view($id = NULL)
        {
                $data['post'] = $this->posts_model->get_news($id);

                $data['title'] = 'Post';

                $this->load->view('templates/header');
                $this->load->view('posts/view', $data);
                $this->load->view('templates/footer');
        }                

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->helper('url_helper');

            $data['title'] = 'Create New Post';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('body', 'Body', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('posts/newpost',$data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->posts_model->set_news();
                $this->view('success');
            }
        }
}
?>