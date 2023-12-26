<?php

namespace config;

class generalSettings
{
    const siteUrl = 'https://caketoolnftmarketplace.com/';
    public $siteLogo;
    public $logoClass;
    public function siteLogo(){
        $p = $this;
        $p->siteLogo = self::siteUrl.'asset/img/logo.png';
        $p->logoClass = 'logoClass';
        return $p ;
    }
}