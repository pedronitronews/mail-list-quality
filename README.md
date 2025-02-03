# Mail List Quality
Library to check the quality of an email list and validate superficially emails.

Requeriments:
PHP 5>

Example to check email list:
-----

```php
use PedroNN\MailListQuality\MailListQuality;

$emails = [
    'email1@example1.com',
    'email2@gmal.com',
    'email@example3.com',
    'email4@example4.com',
    'email5@example5.com',
    'email6@example6.com',
    'email7@example7.com',
    'email8@example8.com',
    'email9@example9.com',
    'email10@example10.com'
];

//Test list of emails
$mlq = new MailListQuality();
$mlq->check($emails);

//get result score from 1 to 5
switch ($mlq->result()){
    case MailListQuality::GREAT:
        echo 'The mail list is GREAT';
        break;
    case MailListQuality::GOOD:
        echo 'The mail list is GOOD';
        break;
    case MailListQuality::REASONABLE:
        echo 'The mail list is REASONABLE';
        break;
    case MailListQuality::BAD:
        echo 'The mail list is BAD';
        break;
    case MailListQuality::TERRIBLE:
        echo 'The mail list is TERRIBLE';
        break;
}

$mlq->matches(); //Count of Matches
$mlq->most_common(); //Most common match.
```

Example to validate TLD of email:
-----
```php
use PedroNN\MailListQuality\Patterns\TLDs;

//Validate TLD of email
(new TLDs())->check('example@gmail.gom'); //true
(new TLDs())->check('example@gmail.com'); //false
(new TLDs())->check('example@hotmail.coma'); //true
(new TLDs())->check('example@hotmail.com.br'); //false
```

Example to validate Role Email:
-----
```php
use PedroNN\MailListQuality\Patterns\RoleMails;

(new RoleMails())->check('clovis@email.com'); //false
(new RoleMails())->check('abuse@email.com'); //true
(new RoleMails())->check('pedro@email.com'); //false
(new RoleMails())->check('support@email.com'); //true
```

Example to validate Temp Email:
-----
```php
use PedroNN\MailListQuality\Patterns\TempMails;

(new TempMails())->check('example@gmail.com'); //false
(new TempMails())->check('example@10mail.com'); //true
(new TempMails())->check('example@hotmail.com'); //false
(new TempMails())->check('example@besttempmail.com'); //true
```

Example to validate possible Spamtrap:
-----
```php
use PedroNN\MailListQuality\Patterns\SpamTraps;

(new SpamTraps())->check('pedro@example.com'); //false
(new SpamTraps())->check('email@hotmail.com'); //true
(new SpamTraps())->check('123@hotmail.com'); //true
(new SpamTraps())->check('aaaa@dominio.com'); //true
```

Example to validate possible Incorrect Domain:
-----
```php
use PedroNN\MailListQuality\Patterns\IncorrectDomains;

(new IncorrectDomains())->check('email@outlook.com'); //false
(new IncorrectDomains())->check('email@outlok.com'); //true
(new IncorrectDomains())->check('email@gmail.com'); //false
(new IncorrectDomains())->check('email@gmal.com'); //true
(new IncorrectDomains())->check('email@yahho.com'); //true
```

Example to validate possible Disable popular domain:
-----
```php
use PedroNN\MailListQuality\Patterns\DisabledDomains;

(new DisabledDomains())->check('email@outlook.com'); //false
(new DisabledDomains())->check('email@facebook.com'); //true
(new DisabledDomains())->check('email@gmail.com'); //false
(new DisabledDomains())->check('email@instagram.com'); //false
```

