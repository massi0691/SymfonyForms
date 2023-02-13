<?php

namespace App\Form\Model;

use App\Validator\UniqueUser;
use Symfony\Component\Validator\Constraints as Assert;


class UserRegistrationFormModel
{
    /**
     * @Assert\NotBlank()
     * @Assert\Email()
     * @UniqueUser()
     */
   public $email;
    /**
     * @Assert\NotBlank(message="Choose a password")
     * @Assert\Length(min="5", minMessage= "Comme on you can think password longer then that!")
     */
   public $plainPassword;
    /**
     * @Assert\IsTrue(message="I now it\'s silly but you must agree to our terms.")
     */
   public $agreeTerms;
}