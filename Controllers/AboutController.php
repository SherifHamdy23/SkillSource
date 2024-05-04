<?php
namespace Controllers;

use Support\helper\Helper;

class AboutController {
    // Add your model logic here
    public function __construct()
    {
        echo "Controller works fine";
    }
    public function index() {
        Helper::view('about');
    }
}

?>
