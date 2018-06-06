<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) php-team@yaochufa <php-team@yaochufa.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

include 'phpqrcode.php';
//QRcode::png('http://www.yaochufa.com');

QRcode::png('http://www.yaochufa.com', 'qrcode.png', QR_ECLEVEL_L, 10, 2);
$logo = 'logo.png';
$qr   = 'qrcode.png';
if ($logo !== false) {
    $qr   = imagecreatefromstring(file_get_contents($qr));
    $logo = imagecreatefromstring(file_get_contents($logo));

//计算两张图片的长宽
    $qr_width       = imagesx($qr);
    $qr_height      = imagesx($qr);
    $logo_width     = imagesx($logo);
    $logo_height    = imagesx($logo);
    $logo_qr_width  = $qr_width / 5;
    $scale          = $logo_width / $logo_qr_width;
    $logo_qr_height = $logo_height / $scale;
    $from_width     = ($qr_width - $logo_qr_width) / 2;

//重新组合图片并调整大小
    imagecopyresampled($qr, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
}

imagepng($qr, 'combinationCode.png');
