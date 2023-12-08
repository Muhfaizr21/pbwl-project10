<?php

namespace App\Controllers;

use App\Core\Controller;

class Sekolah extends Controller
{
    public object $model;

    public function __construct()
    {
        parent::cekLogin();

        $this->model = new \App\Models\Sekolah(); // Assuming you have a Sekolah model
    }

    public function index()
    {
        $data['rows'] = $this->model->show();
        $data['rows'] = $this->model->show();

        $this->dashboard('sekolah/index', $data);
    }

    public function input()
    {
        $this->dashboard('sekolah/input');
    }

    public function save()
    {
        $this->model->save();
        header('location:' . URL . '/sekolah');
    }

    public function edit($id)
    {
        $data['row'] = $this->model->edit($id);
        $this->dashboard('sekolah/edit', $data);
    }

    public function update()
    {
        $this->model->update();
        header('location:' . URL . '/sekolah');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location:' . URL . '/sekolah');
    }
}