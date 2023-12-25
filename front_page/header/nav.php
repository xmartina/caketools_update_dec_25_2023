<?php
namespace front_page\header;

class Nav{

    public function __construct(){
        $p = $this;

        $p->home = "/";
        $p->dashboard = '/users/dashboard';
        $p->login = '/users/login';
    }
}