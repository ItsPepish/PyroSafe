<?php

namespace App\Enums;

enum ReportType: string {
    case ClandestineWorkshop = 'clandestine_workshop';
    case IrregularStorage = 'irregular_storage';
    case UnauthorizedSale = 'unauthorized_sale';
    case RiskSituation = 'risk_situation';
}