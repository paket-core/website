<?php

namespace TokenChef\IcoTemplate\Exceptions;

/**
 * Class SafeException
 *
 * @package App\Exceptions
 */
class WebException extends \ErrorException
{
    protected $details;

    /**
     * ExceptionWithDetails constructor.
     *
     * @param string $message
     * @param array $details
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message, $details = [], $code = 0, \Exception $previous = null)
    {
        $this->details = $details;
        parent::__construct($message, $code = 0, $previous);
    }

    public function getDetails()
    {
        return $this->details;
    }
}
