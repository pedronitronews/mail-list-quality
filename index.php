<?php

include 'vendor/autoload.php';

use PedroNN\MailListQuality\Patterns\DisabledDomains;

(new DisabledDomains())->check('email@outlook.com'); //false
(new DisabledDomains())->check('email@facebook.com'); //true
(new DisabledDomains())->check('email@gmail.com'); //false
(new DisabledDomains())->check('email@instagram.com'); //false