<?php

class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['nama'] = 'Kim jo un';
        $data['pekerjaan'] = 'Idol';
        $data['foto'] = '/rio.jpg';
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}