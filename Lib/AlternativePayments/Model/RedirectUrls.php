<?php

namespace AlternativePayments\Model;

class RedirectUrls extends Element
{

    /*
     * @var string
     */
    protected $returnUrl;
    
    /*
     * @var string
     */
    protected $cancelUrl;
    
    /*
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /*
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }
    
    /*
     * @param string
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }

    /*
     * @param string
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }
}
