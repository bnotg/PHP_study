<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) php-team@yaochufa <php-team@yaochufa.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

function loopDirectory($path)
{
    $files = [];

    if (@$dh = opendir($path)) {    //在opendir的前面加@抑制错误信息的输出
        while (false !== ($file = readdir($dh))) {
            if ('..' != $file && '.' != $file) {
                if (is_dir($file)) {
                    $files[] = loopDirectory($file);
                } else {
                    $files[] = $file;
                }
            }
        }
        closedir($dh);

        return $files;
    }
}

echo '<pre>';
print_r(loopDirectory('E:/work/WWW/PHP_study'));
echo '</pre>';
