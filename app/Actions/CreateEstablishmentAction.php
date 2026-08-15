<?php

namespace App\Actions;

use App\Models\Establishment;
use Illuminate\Support\Facades\DB;

class CreateEstablishmentAction
{
    public function execute(array $data): Establishment 
    {
        return DB::transaction(function() use($data) {
            return Establishment::create($data);
        });
    }
}
