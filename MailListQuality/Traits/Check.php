<?php

namespace PedroNN\MailListQuality\Traits;

trait Check
{

    private $points = 0;

    /**
     * @param $email
     * @return bool
     */
    public function check($email){

        //Mete tudo pra minusculo.
        $email = strtolower($email);

        //Explode e-mail in user and domain.
        $e_email    = explode('@',$email);

        //Apenas usuário do domínio
        $user = $e_email[0];

        //Apenas domínio
        $domain     = $e_email[1];

        //Explode do dominio
        $e_domain = explode('.',$domain);

        //Apenas nome de domínio
        $name_domain = reset($e_domain);

        //Apenas TLD do domínio
        $tld_domain = end($e_domain);

        //With validate popular tlds
        if(isset($this->tlds) AND is_array($this->tlds)){
            if(!isset($this->tlds[$tld_domain])){
                $this->points = self::POINTS;
                return true;
            }
        }

        //With Full Domains
        if(isset($this->full_domains) AND is_array($this->full_domains)){
            if(isset($this->full_domains['@'.$domain])){
                $this->points = self::POINTS;
                return true;
            }
        }

        //With Domains.
        if(isset($this->domains) AND is_array($this->domains)){
            foreach ($this->domains as $Sdomain) {
                if(strpos($email,$Sdomain)){
                    $this->points = self::POINTS;
                    return true;
                }
            }
        }

        //With Name Domains
        if(isset($this->name_domains) AND is_array($this->name_domains)){
            if(isset($this->name_domains[$name_domain])){
                $this->points = self::POINTS;
                return true;
            }
        }

        //With REGEX Domains
        if(isset($this->regex_domains) AND is_array($this->regex_domains)){
            foreach ($this->regex_domains as $regex) {
                if(preg_match($regex,$domain)){
                    $this->points = self::POINTS;
                    return true;
                }
            }
        }

        //With REGEX
        if(isset($this->regex) AND is_array($this->regex)){
            foreach ($this->regex as $regex) {
                if(preg_match($regex,$email)){
                    $this->points = self::POINTS;
                    return true;
                }
            }
        }

        //With Emails
        if(isset($this->emails) AND is_array($this->emails)){
            if(in_array($email,$this->emails)){
                $this->points = self::POINTS;
                return true;
            }
        }

        //With Users
        if(isset($this->users) AND is_array($this->users)){
            if(isset($this->users[$user])){
                $this->points = self::POINTS;
                return true;
            }
        }

        return false;
    }

    /**
     * @return int
     */
    public function points(){
        return $this->points;
    }

}