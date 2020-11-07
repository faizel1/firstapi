<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$hook['pre_controller'] = array(
    'class'    => 'Hook',
    'function' => 'index',
    'filename' => 'Hook.php',
    'filepath' => 'hooks',
);