<?php

class Dashboard extends Admin_Controller
{
	var $permission = array();
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Dashboard';

		$this->load->model('model_products');
		$this->load->model('model_orders');
		$this->load->model('model_users');
		$this->load->model('model_stores');
	}

	/*
	* It only redirects to the manage category page
	* It passes the total product, total paid orders, total users, and total stores information
	into the frontend.
	*/
	public function index()
	{
		$this->data['total_products'] = $this->model_products->countTotalProducts();
		$this->data['total_paid_orders'] = $this->model_orders->countTotalPaidOrders();
		$this->data['total_users'] = $this->model_users->countTotalUsers();
		$this->data['total_stores'] = $this->model_stores->countTotalStores();

		$user_group = $this->session->userdata('group_id');
		$is_admin = ($user_group == 1) ? true :false;
		$is_manager = ($user_group == 4) ? true: false;
		$is_employee = ($user_group == 5) ? true: false;

		$this->data['is_admin'] = $is_admin;
		$this->data['is_manager'] = $is_manager;
		$this->data['is_employee'] = $is_employee;
		$this->render_template('dashboard', $this->data);
	}
}
