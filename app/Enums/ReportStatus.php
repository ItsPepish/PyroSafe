<?php

namespace App\Enums;

enum ReportStatus: string
{
    case Pending = 'pending';
    case UnderReview = 'under_review';
    case Attended = 'attended';
    case Discarded = 'discarded';

    public function label(): string
    {
        return match ($this) {
            self::Pending => 'Pendiente',
            self::UnderReview => 'En revisión',
            self::Attended => 'Resuelto',
            self::Discarded => 'Descartado',
        };
    }

    public function badgeClasses(): string
    {
        return match($this) {
            self::Pending     => 'bg-[#f4993c]/15 text-[#a85e17]',
            self::UnderReview => 'bg-[#0f7688]/12 text-[#0f7688]',
            self::Attended    => 'bg-[#489a68]/14 text-[#005e31]',
            self::Discarded   => 'bg-[#ecf3f5] text-[#5e6b73]',
        };
    }
}
