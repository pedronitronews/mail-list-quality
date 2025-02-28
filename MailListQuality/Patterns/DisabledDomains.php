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
        '@contoso.com'      => true, //https://www.spamresource.com/2024/05/dead-domain-sort-of-contosocom.html
        '@cfu.net'          => true, //https://www.spamresource.com/2024/08/dead-domain-cfunet-in-2025.html
        '@solarmora.com'    => true, //https://www.spamresource.com/2024/05/dead-domain-sort-of-solarmoracom.html
        '@cableone.net'     => true, //https://www.spamresource.com/2023/11/dead-domains-sparklight-cable-one.html
        '@newwavecom.net'   => true, //https://www.spamresource.com/2023/11/dead-domains-sparklight-cable-one.html
        '@nwcable.net'      => true, //https://www.spamresource.com/2023/11/dead-domains-sparklight-cable-one.html
        '@mycitycable.com'  => true, //https://www.spamresource.com/2023/11/dead-domains-sparklight-cable-one.html
        '@vodafone.it'      => true, //https://www.spamresource.com/2023/06/dead-domains-vodafoneit-and-teletuit.html
        '@teletu.it'        => true, //https://www.spamresource.com/2023/06/dead-domains-vodafoneit-and-teletuit.html
        '@orangemail.sk'    => true, //https://www.spamresource.com/2022/11/dead-email-domain-orangemailsk.html
        '@hargray.com'      => true, //https://www.spamresource.com/2022/11/dead-email-domain-hargraycom.html
        '@love.com'         => true, //https://www.spamresource.com/2022/10/dead-email-domain-lovecom.html
        '@ctemplar.com'     => true, //https://www.spamresource.com/2022/09/dead-email-domain-ctemplarcom.html
        '@unitel.me'        => true, //https://www.spamresource.com/2022/09/dead-email-domains-unitelme-and.html
        '@bluestreakme.com' => true, //https://www.spamresource.com/2022/09/dead-email-domains-unitelme-and.html
        '@myblackberry.com' => true, //https://www.spamresource.com/2021/11/dead-domains-myblackberrycom-and.html
        '@blackberry.com'   => true, //https://www.spamresource.com/2021/11/dead-domains-myblackberrycom-and.html
        '@yahoo.cn'         => true, //https://www.spamresource.com/2021/11/dead-domains-yahoocn-and-yahoocomcn.html
        '@yahoo.com.cn'     => true, //https://www.spamresource.com/2021/11/dead-domains-yahoocn-and-yahoocomcn.html
        '@vodafone.ie'      => true, //https://www.spamresource.com/2018/05/vodafone-ireland-vodafoneie-is-dead.html
        '@tesco.net'        => true, //https://www.spamresource.com/2018/07/dead-email-domain-tesconet.html
    ];

}