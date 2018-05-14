<?php

namespace TokenChef\IcoTemplate\Exceptions;

/**
 * Class SafeException
 *
 * @package App\Exceptions
 */
class PrivilegesException extends WebException
{

    public function __construct()
    {
        parent::__construct(trans("messages.no_privileges"));
    }

}
