<?php

namespace config;

class generalSettings
{
    const siteUrl = 'https://caketoolnftmarketplace.com/';
    public function generalSite(){
        $p = $this;

        $p->siteLogo = self::siteUrl.'asset/img/logo.png';
    }
}