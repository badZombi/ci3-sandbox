<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = [
    //default template when none is specified in controller
    'template' => 'frontend',
    'css' => [
        '_components/fontawesome/css/font-awesome.css',
        '_components/todc-bootstrap/dist/css/bootstrap.css',
        '_components/todc-bootstrap/dist/css/todc-bootstrap.css',
        'css/site.css'
        //$config['template'].'/css/template.css',
        //$config['template'].'/css/style.css',
        //$config['template'].'/css/snackbar.css',
        //'common/css/jquery-jvectormap-1.2.2.css'
    ],
    'js' => [
        '_components/jquery/dist/jquery.js'
        //'common/js/bootstrap-3.2.0.js',
        //'common/js/jquery-jvectormap-1.2.2.min.js',
        //'common/js/jquery-ui.js',
        //'common/maps/jquery-jvectormap-us-lcc-en.js',
        //$config['template'].'/js/snackbar.js',
        //$config['template'].'/js/site.js'
    ]
];