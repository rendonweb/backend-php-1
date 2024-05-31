<?php

namespace App\Controllers;

use App\Models\Person;

class PersonController
{
    private $model;

    public function __construct()
    {
        $this->model = new Person();
    }

    public function index()
    {
        $people = $this->model->getAll();
        include __DIR__ . '/../../views/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: /');
        }
        include __DIR__ . '/../../views/create.php';
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: /');
        }
        $person = $this->model->get($id);
        include __DIR__ . '/../../views/edit.php';
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: /');
            exit();
        }
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /');
    }
}
