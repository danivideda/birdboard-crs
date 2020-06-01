<?php

function gravatar_url($email)
{
    $email = md5($email);
    $s = 60;
    $d = 'https://s3.amazonaws.com/laracasts/images/default-square-avatar.jpg';
    return "https://gravatar.com/avatar/{$email}?s={$s}&d={$d}";
}
