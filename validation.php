<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) php-team@yaochufa <php-team@yaochufa.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

class filter
{
    public function urlValidate($var)
    {
        echo filter_var($var, FILTER_VALIDATE_URL) ? 'yes,' . $var . " is a url\n" : $var . " is a invalid url\n";
    }

    public function emailValidate($var)
    {
        echo filter_var($var, FILTER_VALIDATE_EMAIL) ? 'yes,' . $var . " is a email\n" : $var . " is a invalid email\n";
    }

    public function ipValidate($var)
    {
        echo filter_var($var, FILTER_VALIDATE_IP) ? 'yes,' . $var . " is an ip\n" : $var . " is a invalid ip\n";
    }

    public function intValidate($var)
    {
        echo filter_var($var, FILTER_VALIDATE_INT) ? 'yes,' . $var . " is a integer\n" : $var . " is a invalid integer\n";
    }
}

$filter = new filter();
$filter->urlvalidate('mine.sion.com');
$filter->urlvalidate('http://mine.sion.com');
$filter->emailvalidate('justin@qq.com');
$filter->emailvalidate('isEmail.com');
$filter->ipvalidate('127.0.0.1');
$filter->ipvalidate('198.1');
$filter->intvalidate('198.1');
$filter->intvalidate('4');
$filter->intvalidate('4.0');
