<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = [
    //default template when none is specified in controller
    'template' => 'frontend',
    'css' => [
        '_components/todc-bootstrap/dist/css/bootstrap.css',
        '_components/todc-bootstrap/dist/css/todc-bootstrap.css',
        '_components/todc-datepicker/css/google-datepicker.css',
        '_components/todc-select2/select2.css',
        'css/site.css'
    ],
    'js' => [
        '_components/jquery/dist/jquery.js',
        '_components/todc-bootstrap/dist/js/bootstrap.js',
        '_components/todc-datepicker/js/bootstrap-datepicker.js',
        '_components/todc-select2/select2.js',
        'js/site.js'
    ]
];