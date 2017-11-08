<?php

  /**
   *  A controller for pages
   */
  class Pages extends CI_Controller
  {


    public function view($page='home')
    {

      # Checks if a view exists of this page
      if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
        show_404();
      }

      # An array of titles to pass into the view
      # ucfirst Capitalizes the 1st letter
      $data['title'] = ucfirst($page);


      # Loads the views
      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer');

    }//view


  }


?>
