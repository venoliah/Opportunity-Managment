<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol']     = 'smtp';
$config['smtp_host']    = 'smtp.gmail.com';
$config['smtp_port']    = 465;
$config['smtp_user']    = 'kennedyvenoliah@gmail.com';
$config['smtp_pass']    = 'okeyoangel@123';
$config['smtp_crypto']  = 'ssl';
$config['mailtype']     = 'html';
$config['charset']      = 'utf-8';
$config['newline']      = "\r\n";

return $config;
