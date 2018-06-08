<?php
/**
 * Created by PhpStorm.
 * User: zhongsiyong
 * Date: 2018/6/7
 * Time: 19:26
 * Version: 1.0
 */

function urlValidate($var){
    echo filter_var($var,FILTER_VALIDATE_URL)?"yes,".$var." is a url\n":$var." is a invalid url\n";
}
function emailValidate($var){
    echo filter_var($var,FILTER_VALIDATE_EMAIL)?"yes,".$var." is a email\n":$var." is a invalid email\n";
}
function ipValidate($var){
    echo filter_var($var,FILTER_VALIDATE_IP)?"yes,".$var." is an ip\n":$var." is a invalid ip\n";
}
function intValidate($var){
    echo filter_var($var,FILTER_VALIDATE_INT)?"yes,".$var." is a integer\n":$var." is a invalid integer\n";
}

urlvalidate("mine.sion.com");
urlvalidate("http://mine.sion.com");
emailvalidate("justin@qq.com");
emailvalidate("isEmail.com");
ipvalidate("127.0.0.1");
ipvalidate("198.1");
intvalidate("198.1");
intvalidate("4");
intvalidate("4.0");