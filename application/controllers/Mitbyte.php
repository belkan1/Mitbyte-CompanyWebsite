<?php

class Mitbyte extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    } 

    public function index(){
        
          $data['current'] = 'home';
          $this->load->view('templates/header',$data);
          $this->load->view('home');
          $this->load->view('templates/footer');

    }

    public function portfolio(){
        $data['current'] = 'portfolio';
        $this->load->view('templates/header',$data);
        $this->load->view('portfolio');
        $this->load->view('templates/footer');
    }

    public function android(){
        $data['current'] = 'android';
        $this->load->view('templates/header',$data);
        $this->load->view('android');
        $this->load->view('templates/footer');
    }

    public function ios(){
        $data['current'] = 'ios';
        $this->load->view('templates/header',$data);
        $this->load->view('ios');
        $this->load->view('templates/footer');
    }

    public function hybrid(){
        $data['current'] = 'hybrid';
        $this->load->view('templates/header',$data);
        $this->load->view('android');
        $this->load->view('templates/footer');

    }

    public function cross(){
        $data['current'] = 'cross';
        $this->load->view('templates/header',$data);
        $this->load->view('android');
        $this->load->view('templates/footer');

    }

    public function game(){
        $data['current'] = 'game';
        $this->load->view('templates/header',$data);
        $this->load->view('game');
        $this->load->view('templates/footer');
    }

    public function webdesign(){
        $data['current'] = 'webdesign';
        $this->load->view('templates/header',$data);
        $this->load->view('webdesign');
        $this->load->view('templates/footer');
    }

    public function webdevelopment(){
        $data['current'] = 'webdevelopment';
        $this->load->view('templates/header',$data);
        $this->load->view('webdesign');
        $this->load->view('templates/footer');
    }

    public function appstoreoptimization(){
        $data['current'] = 'appstoreoptimization';
        $this->load->view('templates/header',$data);
        $this->load->view('appstoreoptimization');
        $this->load->view('templates/footer');

    }

    public function searchengine(){
        $data['current'] = 'seo';
        $this->load->view('templates/header',$data);
        $this->load->view('appstoreoptimization');
        $this->load->view('templates/footer');
    }

    public function cybersecurity(){
        $data['current'] = 'cybersecurity';
        $this->load->view('templates/header',$data);
        $this->load->view('cybersecurity');
        $this->load->view('templates/footer');
    }

    public function contactUs(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('email');

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','E-mail','required|valid_email');

        if ($this->form_validation->run() === FALSE)
        {
            $data['current'] = 'contactus';
        $this->load->view('templates/header',$data);
        $this->load->view('contactus');
        $this->load->view('templates/footer');
        }
        else {
            function getUserIP()
     {
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
          }
            $ipaddress = getUserIP();
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
            $this->email->from($email, $name);
            $this->email->to('info@mitbyte.com');
            $this->email->subject($subject);
            $this->email->message($message."<br>Sender IP Address: ".$ipaddress);

            $this->email->send();
            redirect(base_url());

            }
        
    }

    public function aboutUs(){
        $data['current'] = 'aboutus';
        $this->load->view('templates/header',$data);
        $this->load->view('aboutus');
        $this->load->view('templates/footer');
    }
     
    public function privacypolicy() {
        $data['current'] = 'privacypolicy';
        $this->load->view('templates/header',$data);
        $this->load->view('privacypolicy');
        $this->load->view('templates/footer');
    }

    public function terms(){
        $data['current'] = 'privacypolicy';
        $this->load->view('templates/header',$data);
        $this->load->view('terms&conditions');
        $this->load->view('templates/footer');
    }

    public function siteMap(){
        $data['current'] = 'sitemap';
        $this->load->view('templates/header',$data);
        $this->load->view('sitemap');
        $this->load->view('templates/footer');
    }

        
}