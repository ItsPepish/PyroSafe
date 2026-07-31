<?php

namespace App\Enums;

enum ReportStatus: string {
    case Pending = 'pending';
    case UnderReview = 'under_review';
    case Attended = 'attended';
    case Discarded = 'discarded';
}