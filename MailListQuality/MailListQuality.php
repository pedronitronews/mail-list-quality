<?php

namespace PedroNN\MailListQuality;

use PedroNN\MailListQuality\Patterns\DisabledDomains;
use PedroNN\MailListQuality\Patterns\IncorrectDomains;
use PedroNN\MailListQuality\Patterns\RoleMails;
use PedroNN\MailListQuality\Patterns\SpamTraps;
use PedroNN\MailListQuality\Patterns\TempMails;
use PedroNN\MailListQuality\Patterns\TLDs;

class MailListQuality
{

    const TERRIBLE = 1;
    const BAD = 2;
    const REASONABLE = 3;
    const GOOD = 4;
    const GREAT = 5;



    private $result = [
        'points'    => 0,
        'matches'   => [
            'count'             => 0,
            'spamtrap'          => 0,
            'incorrect_domain'  => 0,
            'disabled_domain'   => 0,
            'tempmail'          => 0,
            'rolemail'          => 0,
            'invalid_syntax'    => 0,
            'tlds'              => 0,
        ]
    ];
    private $max_points = 0;

    private $debug;

    /**
     * @param $debug
     */
    public function __construct($debug = false)
    {
        $this->debug = $debug;
    }

    /**
     * Exec the check on the mail list.
     * @param array $email_list
     * @return void
     */
    public function check(array $email_list)
    {

        $this->result['matches']['count'] = count($email_list);

        //Define max points.
        $this->max_points = $this->result['matches']['count']*15;

        foreach ($email_list as $email) {

            //Limpa espaços.
            $email = trim($email);

            //Verifica sintaxe do email.
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                if($this->debug) var_dump($email." - %%Invalid Syntax");

                $this->result['points'] += 1;
                $this->result['matches']['invalid_syntax']++;
                continue;
            }

            //Check spamtraps
            $spamtrap = new SpamTraps();
            if($spamtrap->check($email)){

                if($this->debug) var_dump($email." - %%Spamtrap");

                $this->result['points'] += $spamtrap->points();
                $this->result['matches']['spamtrap']++;
                continue;
            }

            //Check incorrect domains
            $incorrect_domains = new IncorrectDomains();
            if($incorrect_domains->check($email)){

                if($this->debug) var_dump($email." - %%Incorrect Domain");

                $this->result['points'] += $incorrect_domains->points();
                $this->result['matches']['incorrect_domain']++;
                continue;
            }

            //Check disabled domains
            $disabled_domains = new DisabledDomains();
            if($disabled_domains->check($email)){

                if($this->debug) var_dump($email." - %%Disabled Domain");

                $this->result['points'] += $disabled_domains->points();
                $this->result['matches']['disabled_domain']++;
                continue;
            }

            //Check tempmails
            $tempmails = new TempMails();
            if($tempmails->check($email)){

                if($this->debug) var_dump($email." - %%TempMail");

                $this->result['points'] += $tempmails->points();
                $this->result['matches']['tempmail']++;
                continue;
            }

            //Check role mails.
            $rolemails = new RoleMails();
            if($rolemails->check($email)){

                if($this->debug) var_dump($email." - %%RoleMail");

                $this->result['points'] += $rolemails->points();
                $this->result['matches']['rolemail']++;
                continue;
            }

            //Check role mails.
            $tlds = new TLDs();
            if($tlds->check($email)){

                if($this->debug) var_dump($email." - %%TLDs");

                $this->result['points'] += $tlds->points();
                $this->result['matches']['tlds']++;
                continue;
            }

            if($this->debug) var_dump($email." - Email Válido");
        }

    }

    /**
     * Returns a score from 1 to 5
     * @return int|void
     */
    public function result()
    {
        $resultado = (100*$this->result['points'])/$this->max_points;
        $resultado = round($resultado,2);

        if($this->debug){
            var_dump($this->result);
            var_dump($this->max_points);
            var_dump($resultado);
        }

        if($resultado <= 0.15){
            return self::GREAT;
        } else if ($resultado > 0.15 AND $resultado <= 0.30){
            return self::GOOD;
        } else if ($resultado > 0.30 AND $resultado <= 0.40){
            return self::REASONABLE;
        } else if ($resultado > 0.40 AND $resultado <= 0.55){
            return self::BAD;
        } else if ($resultado > 0.55){
            return self::TERRIBLE;
        }
    }

    /**
     * Returns a list with the number of matches for each check.
     * @return array
     */
    public function matches(){
        return $this->result['matches'];
    }

    /**
     * Returns the most common match in list check.
     * @return mixed
     */
    public function most_common(){

        //Ordena array.
        arsort($this->result['matches']);

        //busca só o segundo valor mais comum, sabendo que o count sempre será o primeiro.
        $array_ordenado = array_slice($this->result['matches'], 1, 1);

        //pega somente a chave do array.
        $somente_chave = array_keys($array_ordenado);

        return reset($somente_chave);
    }


}