<?php

namespace App\Enums;

enum ReportType: string {
    case ClandestineWorkshop = 'clandestine_workshop';
    case IrregularStorage = 'irregular_storage';
    case UnauthorizedSale = 'unauthorized_sale';
    case RiskSituation = 'risk_situation';

    public function label(): string
    {
        return match ($this) {
            self::ClandestineWorkshop => 'Posible taller clandestino',
            self::IrregularStorage => 'Almacenamiento inadecuado',
            self::UnauthorizedSale => 'Venta sin permiso',
            self::RiskSituation => 'Situación de riesgo',
        };
    }
}