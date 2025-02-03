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

        //With validate popular tlds
        if(isset($this->tlds) AND is_array($this->tlds)){
            $e_domain = explode('.',$e_email[1]);
            if(!is_array($e_domain) OR !isset($this->tlds[end($e_domain)])){
                $this->points = self::POINTS;
                return true;
            }
        }

        //With Full Domains
        if(isset($this->full_domains) AND is_array($this->full_domains)){
            if(isset($this->full_domains['@'.$e_email[1]])){
                $this->points = self::POINTS;
                return true;
            }
        }

        //With Domains.
        if(defined('self::DOMAINS') AND is_array(self::DOMAINS)){
            foreach (self::DOMAINS as $domain) {
                if(strpos($email,$domain)){
                    $this->points = self::POINTS;
                    return true;
                }
            }
        }

        //With REGEX
        if(defined('self::REGEX') AND is_array(self::REGEX)){
            foreach (self::REGEX as $regex) {
                if(preg_match($regex,$email)){
                    $this->points = self::POINTS;
                    return true;
                }
            }
        }

        //With Emails
        if(defined('self::EMAILS') AND is_array(self::EMAILS)){
            if(in_array($email,self::EMAILS)){
                $this->points = self::POINTS;
                return true;
            }
        }

        //With Users
        if(isset($this->users) AND is_array($this->users)){
            if(isset($this->users[$e_email[0]])){
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