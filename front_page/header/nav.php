<?php
namespace front_page\header;

class Nav{

    public function __construct(){
        $p = $this;

        $p->home = "/";
        $p->dashboard = '/user/dashboard';
        $p->login = '/user/login';
    }
}