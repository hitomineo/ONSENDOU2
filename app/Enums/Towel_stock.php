<?php

namespace App\Enums;

enum Towel_stock: int
{
    // 基本情報
    case Yes = 1;
    case No = 2;
    

    // 日本語を追加
    public function label_towel(): string
    {
        return match($this)
        {
           Towel_stock::Yes => 'タオル貸し出しあり',
           Towel_stock::No => 'タオル貸し出しなし',
        };
    }
}