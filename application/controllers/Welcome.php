<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('pagPrincipal/head.php');
		$this->load->view('pagPrincipal/indexPrincipal.php');
		$this->load->view('pagPrincipal/footer.php');
	}
	public function vehicular()
	{
		$this->load->view('pagPrincipal/head.php');
		$this->load->view('pagVehicular/indexVehicular.php');
		$this->load->view('pagPrincipal/footer.php');
	}
	public function hogar()
	{
		$this->load->view('pagPrincipal/head.php');
		$this->load->view('pagHogar/indexHogar.php');
		$this->load->view('pagPrincipal/footer.php');
	}
	public function vida()
	{
		$this->load->view('pagPrincipal/head.php');
		$this->load->view('pagVida/indexVida.php');
		$this->load->view('pagPrincipal/footer.php');
	}
	public function viaje()
	{
		$this->load->view('pagPrincipal/head.php');
		$this->load->view('pagViaje/indexViaje.php');
		$this->load->view('pagPrincipal/footer.php');
	}
	public function mascotas()
	{
		$this->load->view('pagPrincipal/head.php');
		$this->load->view('pagMascotas/indexMascotas.php');
		$this->load->view('pagPrincipal/footer.php');
	}
	public function bicicleta()
	{
		$this->load->view('pagPrincipal/head.php');
		$this->load->view('pagBici/indexBici.php');
		$this->load->view('pagPrincipal/footer.php');
	}
	public function corporativo()
	{
		$this->load->view('pagPrincipal/head.php');
		$this->load->view('pagCorporativo/indexCorporativo.php');
		$this->load->view('pagPrincipal/footer.php');
	}

}
