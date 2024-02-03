<?php

class Index
{
    use Model;

    protected $table = 'users';
    protected $allowed_fields = [
        'email',
        'password'
    ];
}