<?php


class meetingsController extends Controller
{
    public function index(){}

    public function publicMeet()
    {
        $dados = array();

        $this->loadTemplate("public", $dados);
    }

    public function vmc()
    {
        $dados = array();

        $this->loadTemplate("vmc", $dados);
    }
}