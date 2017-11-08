<?php

class Autocuidado extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->helper('url_helper');
  }

 public function index()
  {
    echo 'Hola index';
  }

  public function aseo(){
    $this->load->view('templates/header');
    $this->load->view('autocuidado/aseo.php');
    $this->load->view('templates/footer');
  }

  public function alimentacion(){
    $this->load->view('templates/header');
    $this->load->view('autocuidado/alimentacion.php');
    $this->load->view('templates/footer');
  }


}
