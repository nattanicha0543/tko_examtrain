<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Train'); //ชื่อของโมเดล
		$this->load->view('navbar'); //เรียกแนบบา
	}

	//โชว์หน้า from 
	public function index()
	{
		$this->load->view('index');
	}


	//โชว์หน้า from Train
	public function train()
	{
		$this->load->view('train');
	}

	public function insert()
	{

		$data = array(

			'train_id' => $this->input->post("train_id"),
			'note' => $this->input->post("note"),
		);

		$data1 = array(

			'station' => $this->input->post("station"),
			'date_time' => $this->input->post("date_time"),
		);

		$data2 = array(

			'to' => $this->input->post("to"),
			'out' => $this->input->post("out"),
		);

		$data3 = array(

			'des_station' => $this->input->post("des_station"),
			'on_time' => $this->input->post("on_time"),
		);

		$this->Train->train_insert($data);
		$this->Train->origin_insert($data1);
		$this->Train->huay_insert($data2);
		$this->Train->des_insert($data3);
		redirect('welcome/show');
	}


	//โชว์หน้า from show
	public function show()
	{
		$data['query'] = $this->Train->show();
		$this->load->view('show train', $data);
	}


}
