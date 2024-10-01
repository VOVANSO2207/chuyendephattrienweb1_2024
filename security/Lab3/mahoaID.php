<?php

function encodeId($id) {
    // Mã hoá theo quy ước
    $encodingMap = [
        '0' => 'ABC',
        '1' => 'DEF',
        '2' => '*&BUYG',
        '3' => ')(*YH',
        '4' => 'YUS',
        '5' => 'PQR',
        '6' => 'LMN',
        '7' => 'JKL',
        '8' => 'TUV',
        '9' => 'WXY'
    ];

    // mã hóa ID
    $encodedId = '';
    foreach (str_split($id) as $digit) {
        if (isset($encodingMap[$digit])) {
            $encodedId .= $encodingMap[$digit];
        }
    }

    return $encodedId;
}

function decodeId($encodedId) {
    // Giải mã mã hoá để có thể truy cập id
    $decodingMap = [
        'ABC' => '0',
        'DEF' => '1',
        '*&BUYG' => '2',
        ')(*YH' => '3',
        'XYZ' => '4',
        'PQR' => '5',
        'LMN' => '6',
        'JKL' => '7',
        'TUV' => '8',
        'WXY' => '9'
    ];

    $decodedId = '';
    foreach ($decodingMap as $key => $digit) {
        while (strpos($encodedId, $key) === 0) {
            $decodedId .= $digit;
            $encodedId = substr($encodedId, strlen($key));
        }
    }

    return $decodedId;
}