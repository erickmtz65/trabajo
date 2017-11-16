<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()	{
		$this->load->view('header_inicio');
		$this->load->view('entrar_o_registrar');
		$this->load->view('footer');

	}

		public function candidato(){
		$this->load->view('header_candidato');
		$this->load->view('candidato');
		$this->load->view('footer');

	}
			public function empresa(){
		$this->load->view('header_candidato');
		$this->load->view('candidato');
		$this->load->view('footer');

	}

				public function registro(){
				$this->load->view('header_ofertas');
				$this->load->view('registro');
				$this->load->view('footer');

	}

	
		public function enlace_registro(){
			$this->load->view('header_registro');
			$this->load->view('enlace_registro');
			$this->load->view('footer');

	}

				public function registro_empresa(){
				$this->load->view('header_ofertas');
				$this->load->view('registro_empresa');
				$this->load->view('footer');

	}


		public function oferta_empleo(){
		$this->load->view('header_ofertas');
		$this->load->view('oferta_empleo');
		$this->load->view('footer');

	}

	public function enviar_datos_candidato(){
		$this->load->view('header_candidato');
		$this->load->view('candidato');
		$this->load->view('footer');
	}

		public function enviar_datos_empresa(){
		$this->load->view('header_empresa');
		$this->load->view('empresa');
		$this->load->view('footer');
	}






}
