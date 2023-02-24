<?php

namespace App\Enums;

enum Payment: int
{
    // 基本情報
    case Cash = 1;
    case Card = 2;
    case Touch = 3;
    case QR = 4;

    // 日本語を追加
    public function label_payment(): string
    {
        return match($this)
        {
            Payment::Cash => '現金',
            Payment::Card => 'クレジットカード',
            Payment::Touch => 'タッチ決済',
            Payment::QR => 'QR決済',
        };
    }
}