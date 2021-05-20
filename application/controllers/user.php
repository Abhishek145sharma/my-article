<?php

class User extends CI_Controller
{
	
	public function index()
	{

       //log_message('error','error message in this line');

       //log_message('debug','debug message in this line');

       //log_message('info','info messeage in this line');



       $this->load->model('Loginmodel');
       $this->load->library('pagination');
       $config=[
       	'base_url'=>base_url('User/index'),
       	'per_page'=>3,
       	'total_rows'=>$this->Loginmodel->all_articles_count(),
       	'full_tag_open'=>"<ul class='pagination'>",
       	'full_tag_close'=>"</ul>",
       	'next_tag_open'=>"<li>",
       	'next_tag_close'=>"</li>",
       	'prev_tag_open'=>"<li>",
       	'prev_tag_close'=>"</li>",
       	'num_tag_open'=>"<li>",
       	'num_tag_close'=>"</li>",
       	'cur_tag_open'=>"<li class='active'><a>",
       	'cur_tag_close'=>"</a></li>"
       ];
        
        $this->pagination->initialize($config);

       $article=$this->Loginmodel->fect_allarticles($config['per_page'],$this->uri->segment(3));
       
		$this->load->view('users/homepage',['article'=>$article]);
	}

       

}


