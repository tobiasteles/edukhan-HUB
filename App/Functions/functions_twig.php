<?php

$site_url = new \Twig\TwigFunction('site_url', function(){
    return 'http://'.$_SERVER['SERVER_NAME'].':8000';
});




