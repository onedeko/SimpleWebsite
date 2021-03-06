<?php namespace controllers;
use core\view;

/*
 * Welcome controller
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
 */
class Welcome extends \core\controller{

	/**
	 * Call the parent construct
	 */
	public function __construct(){
		parent::__construct();
		$this->language->load('welcome');
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {

		if($_GET['ex'] == 'error'){
			$alert['error'] = 'Error alert example' ; 
		}
		if($_GET['ex'] == 'success'){
			$alert['success'] = 'Success alert example' ; 
		} 
		if($_GET['ex'] == 'infos'){
			$alert['info'] = 'Infos alert example' ; 
		}  

		$data['title'] = $this->language->get('welcome_text');
		$data['welcome_message'] = $this->language->get('welcome_message');
		
		View::rendertemplate('header', $data);
		View::rendertemplate('navbar', $data, $alert);
		View::render('welcome/welcome', $data);
		View::rendertemplate('footer', $data);
	}

	/**
	 * Define Subpage page title and load template files
	 */
	public function subpage() {

		$data['title'] = $this->language->get('subpage_text');
		$data['welcome_message'] = $this->language->get('subpage_message');
		
		View::rendertemplate('header', $data);
		View::rendertemplate('navbar', $data, $alert);
		View::render('welcome/subpage', $data);
		View::rendertemplate('footer', $data);
	}

}
