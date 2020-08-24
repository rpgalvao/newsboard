<?php

class galeriaController extends Controller {

	public function index() {
		$dados = array();

		
		$this->loadTemplate('galeria', $dados);
	}
}