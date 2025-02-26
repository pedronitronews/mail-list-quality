<?php

namespace PedroNN\MailListQuality\Patterns;

use PedroNN\MailListQuality\Traits\Check;

class SpamTraps
{
    use Check;

    const POINTS = 15;

    public $regex = [
        /**
         * Todos os emails que tenham até 9 dígitos sequenciais de números na frente, exemplo "000@gmail.com".
         * @lang RegExp
         */
        '/^[0-9]{1,9}@(hotmail.ac|outlook.co.ao|hotmail.com.ar|live.com.ar|outlook.com.ar|hotmail.as|hotmail.at|hotmail.co.at|live.at|outlook.at|hotmail.com.au|live.com.au|msn.net.au|outlook.com.au|outlook.ax|hotmail.ba|hotmail.bb|hotmail.be|live.be|outlook.be|outlook.bg|hotmail.com.bo|hotmail.com.br|outlook.com.br|hotmail.bs|outlook.bz|hotmail.ca|live.ca|hotmail.ch|live.ch|hotmail.cl|live.cl|outlook.cl|outlook.cm|live.cn|msn.cn|outlook.com.cn|live.com.co|outlook.co|hotmail.com|live.com|msn.com|outlook.com|windowslive.com|outlook.co.cr|hotmail.cz|outlook.cz|hotmail.de|live.de|outlook.de|hotmail.dk|live.dk|outlook.dk|hotmail.com.do|outlook.ec|hotmail.ee|hotmail.es|outlook.es|outlook.com.es|windowslive.es|hotmail.fi|live.fi|hotmail.net.fj|hotmail.fr|live.fr|outlook.fr|hotmail.gr|outlook.com.gr|live.com.gt|hotmail.hk|hotmail.com.hk|live.hk|outlook.hn|outlook.com.hr|outlook.ht|hotmail.hu|outlook.hu|hotmail.co.id|outlook.co.id|hotmail.ie|live.ie|outlook.ie|hotmail.co.il|outlook.co.il|hotmail.co.in|live.in|live.co.in|outlook.in|live.is|hotmail.it|live.it|outlook.it|hotmail.jp|hotmail.co.jp|live.jp|outlook.jp|outlook.co.jp|hotmail.co.kr|live.co.kr|outlook.kr|hotmail.la|outlook.la|hotmail.lt|hotmail.lu|hotmail.lv|outlook.lv|hotmail.ly|hotmail.com.ly|live.mk|hotmail.mn|msn.mv|hotmail.mw|live.com.mx|outlook.mx|hotmail.my|hotmail.com.my|live.com.my|outlook.my|webtv.net|hotmail.nl|live.nl|msn.nl|hotmail.no|live.no|hotmail.co.nz|msn.co.nz|outlook.co.nz|outlook.pa|live.com.pe|outlook.com.pe|hotmail.ph|hotmail.com.ph|live.ph|live.com.ph|outlook.ph|live.com.pk|outlook.pk|hotmail.com.pl|hotmail.pn|hotmail.co.pn|hotmail.pt|live.com.pt|outlook.pt|outlook.com.py|outlook.ro|hotmail.rs|hotmail.com.ru|live.ru|outlook.sa|hotmail.se|live.se|hotmail.sg|hotmail.com.sg|live.com.sg|outlook.sg|hotmail.sh|outlook.si|hotmail.sk|outlook.sk|hotmail.co.th|outlook.co.th|hotmail.com.tr|outlook.com.tr|hotmail.com.tt|hotmail.com.tw|hotmail.ua|outlook.com.ua|hotmail.co.ug|hotmail.co.uk|live.co.uk|outlook.uy|hotmail.com.uz|hotmail.co.ve|hotmail.com.ve|live.com.ve|hotmail.com.vn|outlook.com.vn|hotmail.vu|live.wf|hotmail.co.za|live.co.za|aol.com.ar|yahoo.com.ar|aol.at|yahoo.at|aol.com.au|yahoo.com.au|aol.be|yahoo.be|yahoo.bg|aol.com.br|yahoo.com.br|yahoo.ca|aol.ch|aol.cl|yahoo.cl|aol.com.co|yahoo.com.co|aim.com|aol.com|compuserve.com|cs.com|frontier.com|games.com|goowy.com|netscape.com|rocketmail.com|rogers.com|sky.com|wild4music.com|wmconnect.com|wow.com|y7mail.com|yahoo.com|ygm.com|ymail.com|aol.cz|yahoo.cz|aol.de|yahoo.de|aol.dk|yahoo.dk|yahoo.ee|aol.es|yahoo.es|aol.fi|yahoo.fi|aol.fr|yahoo.fr|yahoo.gr|aol.hk|yahoo.com.hk|yahoo.com.hr|yahoo.hu|yahoo.co.hu|yahoo.co.id|yahoo.ie|yahoo.co.il|aol.in|verizon.net.in|yahoo.in|yahoo.co.in|aol.it|verizonmedia.it|yahoo.it|aol.jp|yahoo.co.jp|yahoo.ne.jp|ybb.ne.jp|aol.kr|yahoo.co.kr|yahoo.lt|yahoo.lv|aol.com.mx|yahoo.com.mx|yahoo.com.my|bellatlantic.net|citlink.net|frontiernet.net|gte.net|netscape.net|verizon.net|aol.nl|yahoo.nl|yahoo.no|aol.co.nz|yahoo.co.nz|yahooxtra.co.nz|yahoo.com.pe|yahoo.com.ph|aol.pl|yahoo.pl|yahoo.pt|yahoo.ro|yahoo.rs|aol.ru|aol.se|yahoo.se|yahoo.com.sg|yahoo.si|yahoo.sk|yahoo.co.th|aol.com.tr|yahoo.com.tr|aol.tw|yahoo.com.tw|yahoo.com.ua|aol.co.uk|yahoo.co.uk|aol.com.ve|yahoo.com.ve|yahoo.com.vn|yahoo.co.za|gmail.com|googlemail.com).*/',

        //Todos os emails que tenham até 9 dígitos sequenciais de letras iguais na frente, exemplo "aaa@gmail.com".
        '/^[a]{1,10}@.*/',
        '/^[b]{1,10}@.*/',
        '/^[c]{1,10}@.*/',
        '/^[d]{1,10}@.*/',
        '/^[e]{1,10}@.*/',
        '/^[f]{1,10}@.*/',
        '/^[g]{1,10}@.*/',
        '/^[h]{1,10}@.*/',
        '/^[i]{1,10}@.*/',
        '/^[j]{1,10}@.*/',
        '/^[k]{1,10}@.*/',
        '/^[l]{1,10}@.*/',
        '/^[m]{1,10}@.*/',
        '/^[n]{1,10}@.*/',
        '/^[o]{1,10}@.*/',
        '/^[p]{1,10}@.*/',
        '/^[q]{1,10}@.*/',
        '/^[r]{1,10}@.*/',
        '/^[s]{1,10}@.*/',
        '/^[t]{1,10}@.*/',
        '/^[u]{1,10}@.*/',
        '/^[v]{1,10}@.*/',
        '/^[w]{1,10}@.*/',
        '/^[x]{1,10}@.*/',
        '/^[y]{1,10}@.*/',
        '/^[z]{1,10}@.*/',

        /**
         * Bloquear admin roles
         * @lang RegExp
         */
        '/^(postmaster|admin|abuse|root)@.*/',

        /**
         * Usuários com até 3 caracteres nos domínios publicos
         * @lang RegExp
         */
        '/^[a-z]{1,4}\@(hotmail.ac|outlook.co.ao|hotmail.com.ar|live.com.ar|outlook.com.ar|hotmail.as|hotmail.at|hotmail.co.at|live.at|outlook.at|hotmail.com.au|live.com.au|msn.net.au|outlook.com.au|outlook.ax|hotmail.ba|hotmail.bb|hotmail.be|live.be|outlook.be|outlook.bg|hotmail.com.bo|hotmail.com.br|outlook.com.br|hotmail.bs|outlook.bz|hotmail.ca|live.ca|hotmail.ch|live.ch|hotmail.cl|live.cl|outlook.cl|outlook.cm|live.cn|msn.cn|outlook.com.cn|live.com.co|outlook.co|hotmail.com|live.com|msn.com|outlook.com|windowslive.com|outlook.co.cr|hotmail.cz|outlook.cz|hotmail.de|live.de|outlook.de|hotmail.dk|live.dk|outlook.dk|hotmail.com.do|outlook.ec|hotmail.ee|hotmail.es|outlook.es|outlook.com.es|windowslive.es|hotmail.fi|live.fi|hotmail.net.fj|hotmail.fr|live.fr|outlook.fr|hotmail.gr|outlook.com.gr|live.com.gt|hotmail.hk|hotmail.com.hk|live.hk|outlook.hn|outlook.com.hr|outlook.ht|hotmail.hu|outlook.hu|hotmail.co.id|outlook.co.id|hotmail.ie|live.ie|outlook.ie|hotmail.co.il|outlook.co.il|hotmail.co.in|live.in|live.co.in|outlook.in|live.is|hotmail.it|live.it|outlook.it|hotmail.jp|hotmail.co.jp|live.jp|outlook.jp|outlook.co.jp|hotmail.co.kr|live.co.kr|outlook.kr|hotmail.la|outlook.la|hotmail.lt|hotmail.lu|hotmail.lv|outlook.lv|hotmail.ly|hotmail.com.ly|live.mk|hotmail.mn|msn.mv|hotmail.mw|live.com.mx|outlook.mx|hotmail.my|hotmail.com.my|live.com.my|outlook.my|webtv.net|hotmail.nl|live.nl|msn.nl|hotmail.no|live.no|hotmail.co.nz|msn.co.nz|outlook.co.nz|outlook.pa|live.com.pe|outlook.com.pe|hotmail.ph|hotmail.com.ph|live.ph|live.com.ph|outlook.ph|live.com.pk|outlook.pk|hotmail.com.pl|hotmail.pn|hotmail.co.pn|hotmail.pt|live.com.pt|outlook.pt|outlook.com.py|outlook.ro|hotmail.rs|hotmail.com.ru|live.ru|outlook.sa|hotmail.se|live.se|hotmail.sg|hotmail.com.sg|live.com.sg|outlook.sg|hotmail.sh|outlook.si|hotmail.sk|outlook.sk|hotmail.co.th|outlook.co.th|hotmail.com.tr|outlook.com.tr|hotmail.com.tt|hotmail.com.tw|hotmail.ua|outlook.com.ua|hotmail.co.ug|hotmail.co.uk|live.co.uk|outlook.uy|hotmail.com.uz|hotmail.co.ve|hotmail.com.ve|live.com.ve|hotmail.com.vn|outlook.com.vn|hotmail.vu|live.wf|hotmail.co.za|live.co.za|aol.com.ar|yahoo.com.ar|aol.at|yahoo.at|aol.com.au|yahoo.com.au|aol.be|yahoo.be|yahoo.bg|aol.com.br|yahoo.com.br|yahoo.ca|aol.ch|aol.cl|yahoo.cl|aol.com.co|yahoo.com.co|aim.com|aol.com|compuserve.com|cs.com|frontier.com|games.com|goowy.com|netscape.com|rocketmail.com|rogers.com|sky.com|wild4music.com|wmconnect.com|wow.com|y7mail.com|yahoo.com|ygm.com|ymail.com|aol.cz|yahoo.cz|aol.de|yahoo.de|aol.dk|yahoo.dk|yahoo.ee|aol.es|yahoo.es|aol.fi|yahoo.fi|aol.fr|yahoo.fr|yahoo.gr|aol.hk|yahoo.com.hk|yahoo.com.hr|yahoo.hu|yahoo.co.hu|yahoo.co.id|yahoo.ie|yahoo.co.il|aol.in|verizon.net.in|yahoo.in|yahoo.co.in|aol.it|verizonmedia.it|yahoo.it|aol.jp|yahoo.co.jp|yahoo.ne.jp|ybb.ne.jp|aol.kr|yahoo.co.kr|yahoo.lt|yahoo.lv|aol.com.mx|yahoo.com.mx|yahoo.com.my|bellatlantic.net|citlink.net|frontiernet.net|gte.net|netscape.net|verizon.net|aol.nl|yahoo.nl|yahoo.no|aol.co.nz|yahoo.co.nz|yahooxtra.co.nz|yahoo.com.pe|yahoo.com.ph|aol.pl|yahoo.pl|yahoo.pt|yahoo.ro|yahoo.rs|aol.ru|aol.se|yahoo.se|yahoo.com.sg|yahoo.si|yahoo.sk|yahoo.co.th|aol.com.tr|yahoo.com.tr|aol.tw|yahoo.com.tw|yahoo.com.ua|aol.co.uk|yahoo.co.uk|aol.com.ve|yahoo.com.ve|yahoo.com.vn|yahoo.co.za|gmail.com|googlemail.com).*/',

        /**
         * Usuários parecidos com email em domínio publico..
         * @lang RegExp
         */
        '/^(email|e-mail|e_mail|mail|test|teste)\@(hotmail.ac|outlook.co.ao|hotmail.com.ar|live.com.ar|outlook.com.ar|hotmail.as|hotmail.at|hotmail.co.at|live.at|outlook.at|hotmail.com.au|live.com.au|msn.net.au|outlook.com.au|outlook.ax|hotmail.ba|hotmail.bb|hotmail.be|live.be|outlook.be|outlook.bg|hotmail.com.bo|hotmail.com.br|outlook.com.br|hotmail.bs|outlook.bz|hotmail.ca|live.ca|hotmail.ch|live.ch|hotmail.cl|live.cl|outlook.cl|outlook.cm|live.cn|msn.cn|outlook.com.cn|live.com.co|outlook.co|hotmail.com|live.com|msn.com|outlook.com|windowslive.com|outlook.co.cr|hotmail.cz|outlook.cz|hotmail.de|live.de|outlook.de|hotmail.dk|live.dk|outlook.dk|hotmail.com.do|outlook.ec|hotmail.ee|hotmail.es|outlook.es|outlook.com.es|windowslive.es|hotmail.fi|live.fi|hotmail.net.fj|hotmail.fr|live.fr|outlook.fr|hotmail.gr|outlook.com.gr|live.com.gt|hotmail.hk|hotmail.com.hk|live.hk|outlook.hn|outlook.com.hr|outlook.ht|hotmail.hu|outlook.hu|hotmail.co.id|outlook.co.id|hotmail.ie|live.ie|outlook.ie|hotmail.co.il|outlook.co.il|hotmail.co.in|live.in|live.co.in|outlook.in|live.is|hotmail.it|live.it|outlook.it|hotmail.jp|hotmail.co.jp|live.jp|outlook.jp|outlook.co.jp|hotmail.co.kr|live.co.kr|outlook.kr|hotmail.la|outlook.la|hotmail.lt|hotmail.lu|hotmail.lv|outlook.lv|hotmail.ly|hotmail.com.ly|live.mk|hotmail.mn|msn.mv|hotmail.mw|live.com.mx|outlook.mx|hotmail.my|hotmail.com.my|live.com.my|outlook.my|webtv.net|hotmail.nl|live.nl|msn.nl|hotmail.no|live.no|hotmail.co.nz|msn.co.nz|outlook.co.nz|outlook.pa|live.com.pe|outlook.com.pe|hotmail.ph|hotmail.com.ph|live.ph|live.com.ph|outlook.ph|live.com.pk|outlook.pk|hotmail.com.pl|hotmail.pn|hotmail.co.pn|hotmail.pt|live.com.pt|outlook.pt|outlook.com.py|outlook.ro|hotmail.rs|hotmail.com.ru|live.ru|outlook.sa|hotmail.se|live.se|hotmail.sg|hotmail.com.sg|live.com.sg|outlook.sg|hotmail.sh|outlook.si|hotmail.sk|outlook.sk|hotmail.co.th|outlook.co.th|hotmail.com.tr|outlook.com.tr|hotmail.com.tt|hotmail.com.tw|hotmail.ua|outlook.com.ua|hotmail.co.ug|hotmail.co.uk|live.co.uk|outlook.uy|hotmail.com.uz|hotmail.co.ve|hotmail.com.ve|live.com.ve|hotmail.com.vn|outlook.com.vn|hotmail.vu|live.wf|hotmail.co.za|live.co.za|aol.com.ar|yahoo.com.ar|aol.at|yahoo.at|aol.com.au|yahoo.com.au|aol.be|yahoo.be|yahoo.bg|aol.com.br|yahoo.com.br|yahoo.ca|aol.ch|aol.cl|yahoo.cl|aol.com.co|yahoo.com.co|aim.com|aol.com|compuserve.com|cs.com|frontier.com|games.com|goowy.com|netscape.com|rocketmail.com|rogers.com|sky.com|wild4music.com|wmconnect.com|wow.com|y7mail.com|yahoo.com|ygm.com|ymail.com|aol.cz|yahoo.cz|aol.de|yahoo.de|aol.dk|yahoo.dk|yahoo.ee|aol.es|yahoo.es|aol.fi|yahoo.fi|aol.fr|yahoo.fr|yahoo.gr|aol.hk|yahoo.com.hk|yahoo.com.hr|yahoo.hu|yahoo.co.hu|yahoo.co.id|yahoo.ie|yahoo.co.il|aol.in|verizon.net.in|yahoo.in|yahoo.co.in|aol.it|verizonmedia.it|yahoo.it|aol.jp|yahoo.co.jp|yahoo.ne.jp|ybb.ne.jp|aol.kr|yahoo.co.kr|yahoo.lt|yahoo.lv|aol.com.mx|yahoo.com.mx|yahoo.com.my|bellatlantic.net|citlink.net|frontiernet.net|gte.net|netscape.net|verizon.net|aol.nl|yahoo.nl|yahoo.no|aol.co.nz|yahoo.co.nz|yahooxtra.co.nz|yahoo.com.pe|yahoo.com.ph|aol.pl|yahoo.pl|yahoo.pt|yahoo.ro|yahoo.rs|aol.ru|aol.se|yahoo.se|yahoo.com.sg|yahoo.si|yahoo.sk|yahoo.co.th|aol.com.tr|yahoo.com.tr|aol.tw|yahoo.com.tw|yahoo.com.ua|aol.co.uk|yahoo.co.uk|aol.com.ve|yahoo.com.ve|yahoo.com.vn|yahoo.co.za|gmail.com|googlemail.com).*/',

        /**
         * Usuários com sequências de teclado em domínios publicos conhecidos.
         * @lang RegExp
         */
        '/^(abc|abcd|abcde|qwe|qwer|qwert|asd|asdf|asdfg|zxc|zxcv|zxcvb|123|1234|12345|qwe123|qwer1234|qwert12345|asd123|asdf1234|asdfg12345|zxc123|zxcv1234)\@(hotmail.ac|outlook.co.ao|hotmail.com.ar|live.com.ar|outlook.com.ar|hotmail.as|hotmail.at|hotmail.co.at|live.at|outlook.at|hotmail.com.au|live.com.au|msn.net.au|outlook.com.au|outlook.ax|hotmail.ba|hotmail.bb|hotmail.be|live.be|outlook.be|outlook.bg|hotmail.com.bo|hotmail.com.br|outlook.com.br|hotmail.bs|outlook.bz|hotmail.ca|live.ca|hotmail.ch|live.ch|hotmail.cl|live.cl|outlook.cl|outlook.cm|live.cn|msn.cn|outlook.com.cn|live.com.co|outlook.co|hotmail.com|live.com|msn.com|outlook.com|windowslive.com|outlook.co.cr|hotmail.cz|outlook.cz|hotmail.de|live.de|outlook.de|hotmail.dk|live.dk|outlook.dk|hotmail.com.do|outlook.ec|hotmail.ee|hotmail.es|outlook.es|outlook.com.es|windowslive.es|hotmail.fi|live.fi|hotmail.net.fj|hotmail.fr|live.fr|outlook.fr|hotmail.gr|outlook.com.gr|live.com.gt|hotmail.hk|hotmail.com.hk|live.hk|outlook.hn|outlook.com.hr|outlook.ht|hotmail.hu|outlook.hu|hotmail.co.id|outlook.co.id|hotmail.ie|live.ie|outlook.ie|hotmail.co.il|outlook.co.il|hotmail.co.in|live.in|live.co.in|outlook.in|live.is|hotmail.it|live.it|outlook.it|hotmail.jp|hotmail.co.jp|live.jp|outlook.jp|outlook.co.jp|hotmail.co.kr|live.co.kr|outlook.kr|hotmail.la|outlook.la|hotmail.lt|hotmail.lu|hotmail.lv|outlook.lv|hotmail.ly|hotmail.com.ly|live.mk|hotmail.mn|msn.mv|hotmail.mw|live.com.mx|outlook.mx|hotmail.my|hotmail.com.my|live.com.my|outlook.my|webtv.net|hotmail.nl|live.nl|msn.nl|hotmail.no|live.no|hotmail.co.nz|msn.co.nz|outlook.co.nz|outlook.pa|live.com.pe|outlook.com.pe|hotmail.ph|hotmail.com.ph|live.ph|live.com.ph|outlook.ph|live.com.pk|outlook.pk|hotmail.com.pl|hotmail.pn|hotmail.co.pn|hotmail.pt|live.com.pt|outlook.pt|outlook.com.py|outlook.ro|hotmail.rs|hotmail.com.ru|live.ru|outlook.sa|hotmail.se|live.se|hotmail.sg|hotmail.com.sg|live.com.sg|outlook.sg|hotmail.sh|outlook.si|hotmail.sk|outlook.sk|hotmail.co.th|outlook.co.th|hotmail.com.tr|outlook.com.tr|hotmail.com.tt|hotmail.com.tw|hotmail.ua|outlook.com.ua|hotmail.co.ug|hotmail.co.uk|live.co.uk|outlook.uy|hotmail.com.uz|hotmail.co.ve|hotmail.com.ve|live.com.ve|hotmail.com.vn|outlook.com.vn|hotmail.vu|live.wf|hotmail.co.za|live.co.za|aol.com.ar|yahoo.com.ar|aol.at|yahoo.at|aol.com.au|yahoo.com.au|aol.be|yahoo.be|yahoo.bg|aol.com.br|yahoo.com.br|yahoo.ca|aol.ch|aol.cl|yahoo.cl|aol.com.co|yahoo.com.co|aim.com|aol.com|compuserve.com|cs.com|frontier.com|games.com|goowy.com|netscape.com|rocketmail.com|rogers.com|sky.com|wild4music.com|wmconnect.com|wow.com|y7mail.com|yahoo.com|ygm.com|ymail.com|aol.cz|yahoo.cz|aol.de|yahoo.de|aol.dk|yahoo.dk|yahoo.ee|aol.es|yahoo.es|aol.fi|yahoo.fi|aol.fr|yahoo.fr|yahoo.gr|aol.hk|yahoo.com.hk|yahoo.com.hr|yahoo.hu|yahoo.co.hu|yahoo.co.id|yahoo.ie|yahoo.co.il|aol.in|verizon.net.in|yahoo.in|yahoo.co.in|aol.it|verizonmedia.it|yahoo.it|aol.jp|yahoo.co.jp|yahoo.ne.jp|ybb.ne.jp|aol.kr|yahoo.co.kr|yahoo.lt|yahoo.lv|aol.com.mx|yahoo.com.mx|yahoo.com.my|bellatlantic.net|citlink.net|frontiernet.net|gte.net|netscape.net|verizon.net|aol.nl|yahoo.nl|yahoo.no|aol.co.nz|yahoo.co.nz|yahooxtra.co.nz|yahoo.com.pe|yahoo.com.ph|aol.pl|yahoo.pl|yahoo.pt|yahoo.ro|yahoo.rs|aol.ru|aol.se|yahoo.se|yahoo.com.sg|yahoo.si|yahoo.sk|yahoo.co.th|aol.com.tr|yahoo.com.tr|aol.tw|yahoo.com.tw|yahoo.com.ua|aol.co.uk|yahoo.co.uk|aol.com.ve|yahoo.com.ve|yahoo.com.vn|yahoo.co.za|gmail.com|googlemail.com).*/',

        /**
         * Tentativa de discar qualquer coisa no teclado em domínios publicos.
         * @lang RegExp
         */
        '/^(qwqw|adad|asda|sgddsg|sfyag|afat|atfwyda|awfyga|yuwadg|rxfaw|awtcfa|awcatfw|asdasdsad|asdasdad)\@(hotmail.ac|outlook.co.ao|hotmail.com.ar|live.com.ar|outlook.com.ar|hotmail.as|hotmail.at|hotmail.co.at|live.at|outlook.at|hotmail.com.au|live.com.au|msn.net.au|outlook.com.au|outlook.ax|hotmail.ba|hotmail.bb|hotmail.be|live.be|outlook.be|outlook.bg|hotmail.com.bo|hotmail.com.br|outlook.com.br|hotmail.bs|outlook.bz|hotmail.ca|live.ca|hotmail.ch|live.ch|hotmail.cl|live.cl|outlook.cl|outlook.cm|live.cn|msn.cn|outlook.com.cn|live.com.co|outlook.co|hotmail.com|live.com|msn.com|outlook.com|windowslive.com|outlook.co.cr|hotmail.cz|outlook.cz|hotmail.de|live.de|outlook.de|hotmail.dk|live.dk|outlook.dk|hotmail.com.do|outlook.ec|hotmail.ee|hotmail.es|outlook.es|outlook.com.es|windowslive.es|hotmail.fi|live.fi|hotmail.net.fj|hotmail.fr|live.fr|outlook.fr|hotmail.gr|outlook.com.gr|live.com.gt|hotmail.hk|hotmail.com.hk|live.hk|outlook.hn|outlook.com.hr|outlook.ht|hotmail.hu|outlook.hu|hotmail.co.id|outlook.co.id|hotmail.ie|live.ie|outlook.ie|hotmail.co.il|outlook.co.il|hotmail.co.in|live.in|live.co.in|outlook.in|live.is|hotmail.it|live.it|outlook.it|hotmail.jp|hotmail.co.jp|live.jp|outlook.jp|outlook.co.jp|hotmail.co.kr|live.co.kr|outlook.kr|hotmail.la|outlook.la|hotmail.lt|hotmail.lu|hotmail.lv|outlook.lv|hotmail.ly|hotmail.com.ly|live.mk|hotmail.mn|msn.mv|hotmail.mw|live.com.mx|outlook.mx|hotmail.my|hotmail.com.my|live.com.my|outlook.my|webtv.net|hotmail.nl|live.nl|msn.nl|hotmail.no|live.no|hotmail.co.nz|msn.co.nz|outlook.co.nz|outlook.pa|live.com.pe|outlook.com.pe|hotmail.ph|hotmail.com.ph|live.ph|live.com.ph|outlook.ph|live.com.pk|outlook.pk|hotmail.com.pl|hotmail.pn|hotmail.co.pn|hotmail.pt|live.com.pt|outlook.pt|outlook.com.py|outlook.ro|hotmail.rs|hotmail.com.ru|live.ru|outlook.sa|hotmail.se|live.se|hotmail.sg|hotmail.com.sg|live.com.sg|outlook.sg|hotmail.sh|outlook.si|hotmail.sk|outlook.sk|hotmail.co.th|outlook.co.th|hotmail.com.tr|outlook.com.tr|hotmail.com.tt|hotmail.com.tw|hotmail.ua|outlook.com.ua|hotmail.co.ug|hotmail.co.uk|live.co.uk|outlook.uy|hotmail.com.uz|hotmail.co.ve|hotmail.com.ve|live.com.ve|hotmail.com.vn|outlook.com.vn|hotmail.vu|live.wf|hotmail.co.za|live.co.za|aol.com.ar|yahoo.com.ar|aol.at|yahoo.at|aol.com.au|yahoo.com.au|aol.be|yahoo.be|yahoo.bg|aol.com.br|yahoo.com.br|yahoo.ca|aol.ch|aol.cl|yahoo.cl|aol.com.co|yahoo.com.co|aim.com|aol.com|compuserve.com|cs.com|frontier.com|games.com|goowy.com|netscape.com|rocketmail.com|rogers.com|sky.com|wild4music.com|wmconnect.com|wow.com|y7mail.com|yahoo.com|ygm.com|ymail.com|aol.cz|yahoo.cz|aol.de|yahoo.de|aol.dk|yahoo.dk|yahoo.ee|aol.es|yahoo.es|aol.fi|yahoo.fi|aol.fr|yahoo.fr|yahoo.gr|aol.hk|yahoo.com.hk|yahoo.com.hr|yahoo.hu|yahoo.co.hu|yahoo.co.id|yahoo.ie|yahoo.co.il|aol.in|verizon.net.in|yahoo.in|yahoo.co.in|aol.it|verizonmedia.it|yahoo.it|aol.jp|yahoo.co.jp|yahoo.ne.jp|ybb.ne.jp|aol.kr|yahoo.co.kr|yahoo.lt|yahoo.lv|aol.com.mx|yahoo.com.mx|yahoo.com.my|bellatlantic.net|citlink.net|frontiernet.net|gte.net|netscape.net|verizon.net|aol.nl|yahoo.nl|yahoo.no|aol.co.nz|yahoo.co.nz|yahooxtra.co.nz|yahoo.com.pe|yahoo.com.ph|aol.pl|yahoo.pl|yahoo.pt|yahoo.ro|yahoo.rs|aol.ru|aol.se|yahoo.se|yahoo.com.sg|yahoo.si|yahoo.sk|yahoo.co.th|aol.com.tr|yahoo.com.tr|aol.tw|yahoo.com.tw|yahoo.com.ua|aol.co.uk|yahoo.co.uk|aol.com.ve|yahoo.com.ve|yahoo.com.vn|yahoo.co.za|gmail.com|googlemail.com).*/',

        //
        /**
         * Domínios trap por exemplo email.com, email.com.br, etc.
         * @lang RegExp
         */
        '/^.*@(email|mail|e-mail|test|teste)\.(com|net|org|com.br)$/',


        /**
         * Domínios formados por até 4 caracteres iguais e sequenciais
         * exemplo: aaa.com bbb.com ccc.com 111.net etc...
         * @lang RegExp
         */
        '/^.*@(.)\1{1,3}\.(com|net|org|com.br)$/',
    ];

    public $emails = [
        //Emails trap
        'asda@bol.com.br',
        'asda@gmail.com',
        'asda@hotmail.com',
        'asda@outlook.com',
        'asda@msn.com',
        'asda@aol.com',
        'asda@bol.com',
        'asda@uol.com',
        'asda@uol.com.br',
        'asda@gmail.com',
        'asdad@gmail.com',
        'asdada@gmail.clm',
        'asdadd@gmail.com',
        'asdads@gmail.com',
        'asdads@hotmail.com',
        'asdakskl@gmail.com',
        'asdas@hotmail.com',
        'asdasd@amgil.com',
        'asdasd@asd.com.br',
        'asdasd@asdas.com',
        'asdasd@dsadas.com',
        'asdasd@hotmail.com',
        'asdasda@gmail.com',
        'asdasda@hotmai.com',
        'asdasdad@gmail.com',
        'asdasdad@proenem.com.br',
        'asdasdadas@gmail.com',
        'asdasdas@dasd.com',
        'asdasdasd@hotmai.com',
        'asdasdasdasd@hotmail.com',
        'asdasdasdsa@gmail.com',
        'asdasdawedq@adsadawdaw.com',
        'asdasdd@proenem.com.br',
        'asdasdsad@gmail.com',
        'asdasdsad@proenem.com.br',
        'asdasud@gmail.com',
        'asdaw@awr.com',
        'asdda@gmail.com',
        'asddd@gmail.ocm',
        'asddsadasdasdas@gmail.com',
    ];
}