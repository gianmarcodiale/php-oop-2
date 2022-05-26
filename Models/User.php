<?php

class User
{
    public $is_logged;

    function __construct(bool $is_logged) {
        $this->is_logged = $is_logged;
    }
}