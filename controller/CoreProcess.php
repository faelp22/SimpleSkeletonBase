<?php

namespace controller;

class CoreProcess {

    public static function get_nome($a) {
        return $a;
    }// End get_nome

    public static function get_description() {
        return 'Simple Skeleton Base V-0.0.2';
    }// End get_description

    public static function get_author() {
        return 'Isael Sousa';
    }// End get_author

    public static function get_icon() {
        return 'favicon.png';
    }// End get_icon

    public static function get_title() {
        return 'Simple Skeleton Base V-0.0.2';
    }// End get_title

    public static function get_css($baseURL, $baseFile) {
        return '<link href="'.$baseURL.$baseFile.'" rel="stylesheet">';
    }// End get_css

    public static function get_js($baseURL, $baseFile) {
        return '<script type="text/javascript" src="'.$baseURL.$baseFile.'"></script>';
    }// End get_js

}// End CoreProcess
