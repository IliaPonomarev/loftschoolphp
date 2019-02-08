<?php
return array(

    'users/register' => 'user/register',
    'users/auth' => 'user/auth',
    'users/logout' => 'user/logout',

    'users/view/([0-9]+)' => 'user/view/$1',

    'users/download/([0-9]+)' =>'user/download/$1',
    'users' => 'user/index',

    'error' => 'error/index',
    '' => 'site/index',

);