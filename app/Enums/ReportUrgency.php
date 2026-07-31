<?php

namespace App\Enums;

enum ReportUrgency: string {
    case Low = 'low';
    case Medium = 'medium';
    case High = 'high';
}