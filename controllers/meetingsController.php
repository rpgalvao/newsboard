<?php


class meetingsController extends Controller
{
    public function index(){}

    public function meet()
    {
        $dados = array();

        $this->loadTemplate("public", $dados);
    }
}