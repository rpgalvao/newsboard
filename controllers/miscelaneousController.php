<?php


class miscelaneousController extends Controller
{
    public function index(){}

    public function mechanical()
    {
        $dados = array();

        $this->loadTemplate("mechanical", $dados);
    }

    public function events()
    {
        $dados = array();

        $this->loadTemplate("events", $dados);
    }

    public function donate()
    {
        $dados = array();

        $this->loadTemplate("donate", $dados);
    }

    public function groups()
    {
        $dados = array();

        $this->loadTemplate("groups", $dados);
    }
}