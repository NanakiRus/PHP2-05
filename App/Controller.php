<?php

namespace App;

abstract class Controller
{

    protected $view;

    public function __construct()
    {
        $this->view = new \App\View();
    }

    protected function beforeAction()
    {
    }

    protected function access(): bool
    {
        return true;
    }

    public function action($name)
    {
        $this->beforeAction();
        $action = 'action' . $name;
        if (true === $this->access()) {
            $this->$action();
        } else {
            die('Доступ закрыт');
        }
    }

    public function view($path, $data = [])
    {
        $this->view->data = $data;
        $this->view->view($path);
    }

}