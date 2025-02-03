<?php

namespace PedroNN\MailListQuality\Patterns;

use PedroNN\MailListQuality\Traits\Check;

class DisabledDomains
{
    use Check;

    const POINTS = 5;

    public $full_domains = [
        '@brturbo.com.br'   => true,
        '@oi.com.br'        => true,
        '@globo.com'        => true,
        '@globomail.com'    => true,
        '@altomail.com'     => true,
        '@facebook.com'     => true,
        '@instagram.com'    => true,
        '@twitter.com'      => true,
    ];

}