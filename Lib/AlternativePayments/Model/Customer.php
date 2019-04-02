<?php

namespace AlternativePayments\Model;

class Customer extends Element
{

    /*
     * @var string
     */
    protected $firstName;

     /*
      * @var string
      */
    protected $lastName;

    /*
     * @var string
     */
    protected $email;

    /*
     * @var string
     */
    protected $address;

    /*
     * @var string
     */
    protected $city;

    /*
     * @var string
     */
    protected $zip;

    /*
     * @var string
     */
    protected $country;

    /*
     * @var string
     */
    protected $state;

    /*
     * @var string
     */
    protected $phone;


    /*
     * @var string
     */
    protected $address2;

    /*
     * @var string
     */
    protected $birthDate;
    
    
    /*
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /*
     * @param string
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /*
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /*
     * @param string
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    /*
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /*
     * @param string
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /*
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    /*
     * @param string
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /*
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /*
     * @param string
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /*
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }
    
    /*
     * @param string
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /*
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /*
     * @param string
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /*
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
    
    /*
     * @param string
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /*
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /*
     * @param string
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /*
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /*
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /*
     * @param string
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /*
     * @param string
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }


}
