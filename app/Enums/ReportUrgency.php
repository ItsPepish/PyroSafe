<?php

namespace App\Enums;

enum ReportUrgency: string {
    case Low = 'low';
    case Medium = 'medium';
    case High = 'high';

    public function label(): string
    {
        return match ($this) {
            self::Low => 'Bajo',
            self::Medium => 'Medio',
            self::High => 'Alto',
        };
    }

    public function checkedClasses(): string
    {
        return match ($this) {
            self::Low => 'peer-checked:border-green-600 peer-checked:bg-green-50 peer-checked:text-green-700',
            self::Medium => 'peer-checked:border-orange-500 peer-checked:bg-orange-50 peer-checked:text-orange-700',
            self::High => 'peer-checked:border-red-600 peer-checked:bg-red-50 peer-checked:text-red-700',
        };
    }
}