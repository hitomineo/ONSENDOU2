<?php

namespace App\Enums;

enum Parking: int
{
    // 基本情報
    case Yes = 1;
    case No = 2;

    // 日本語を追加
    public function label_parking(): string
    {
        return match($this)
        {
            Parking::Yes => '駐車場あり',
            Parking::No => '駐車場なし',
           
        };
    }
}