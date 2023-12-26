<?php

namespace config;

class generalSettings
{
    const siteUrl = 'https://caketoolnftmarketplace.com/';
    public $siteLogo;
    public function siteLogo(){
        $p = $this;
        $p->siteLogo = self::siteUrl.'asset/img/logo.png';
        return $p ;
    }
}