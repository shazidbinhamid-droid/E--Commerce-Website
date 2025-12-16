<?php

class HomeController extends Controller
{
    public function index()
    {
        $this->view('shop/home', ['title' => 'Home - E-commerce', 'name' => 'John Doe']);
    }
}
