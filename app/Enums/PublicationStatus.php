<?php

namespace App\Enums;

enum PublicationStatus: string
{
    case Draft = 'draft';
    case Published = 'published';
    case Hidden = 'hidden';

    public function label(): string
    {
        return match ($this) {
            self::Draft => 'Borrador',
            self::Published => 'Publicado',
            self::Hidden => 'Oculto',
        };
    }

    public function badgeClasses(): string
    {
        return match ($this) {
            self::Draft => 'bg-[#ecf3f5] text-[#5e6b73]',
            self::Published => 'bg-[#489a68]/14 text-[#005e31]',
            self::Hidden => '',
        };
    }
}
