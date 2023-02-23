
<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MyFlashController extends CI_Controller {



   public function __construct() { 

      parent::__construct(); 

      $this->load->library("session");

   }



	public function success()

	{

      $this->session->set_flashdata('success', 'User Updated successfully');

      return $this->load->view('admin');

	}



  public function error()

  {

      $this->session->set_flashdata('error', 'Something is wrong.');

      return $this->load->view('admin');

  }



  public function warning()

  {

      $this->session->set_flashdata('warning', 'Something is wrong.');

      return $this->load->view('admin');

  }


  public function info()

  {

      $this->session->set_flashdata('info', 'User listed bellow');

      return $this->load->view('admin');

  }


}