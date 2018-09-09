<?php
// src/App/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    protected $siteRules;

    public function __construct()
{
    parent::__construct();
    // your own logic
}

    /**
     * @return mixed
     */
    public function getSiteRules()
{
    return $this->siteRules;
}

    /**
     * @param mixed $siteRules
     */
    public function setSiteRules($siteRules): void
{
    $this->siteRules = $siteRules;
}


    /*
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        var_dump($_POST ["app_user_registration"]); die;
        //$metadata->addPropertyConstraint('task', new NotBlank());
        if(!$_POST ["app_user_registration"]["task"]){
            var_dump($_POST ["app_user_registration"]); die;
        }
        else{
            echo "error"; die;
        }
    }*/
}