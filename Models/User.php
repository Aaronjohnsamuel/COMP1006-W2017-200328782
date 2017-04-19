<?php

class User
{
    function __construct($username, $password, $displayName)
    {
        $this->username = $username;
        $this->password = $password;
        $this->displayName  = $displayName;
    }
}