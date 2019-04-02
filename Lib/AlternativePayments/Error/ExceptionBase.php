<?php

namespace AlternativePayments\Error;

/**
 * Abstract Error class inherented by all specific error classes
 */
abstract class ExceptionBase extends \Exception
{

    /*
     * @var string
     */
    protected $message;

    /*
     * @var integer
     */
    protected $errorCode;

    /*
     * @var string
     */
    protected $statusCode;
    
    /*
     * @var string
     */
    protected $parameter;

    /*
     * @param string message
     * @param integer $httpCode - optional
     * @param string $body - optional
     * @param bool $launch - optional
     */
    public function __construct($message, $errorCode = null, $statusCode = null, $parameter = null)
    {
        parent::__construct($message);
        $this->message = $message;
        $this->errorCode = $errorCode;
        $this->statusCode = $statusCode;
        $this->parameter = $parameter;
    }

    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getParameter()
    {
        return $this->parameter;
    }
}
