<?php

namespace App\Http\Controllers;
use App\Models\Federal_states;
use App\Models\Municipalities;
use App\Models\Parishes;
use App\Models\CellPhoneAreaCode;
use App\Models\PhoneAreaCode;

use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    public function Federal_state()
    {
        $data = Federal_states::get();
        return $data;
    }
    public function Municipalities()
    {
        $data = Municipalities::get();
        return $data;
    }

    public function Parishes()
    {
        $data = Parishes::get();
        return $data;
    }
    public function CellPhoneAreaCode()
    {
        $data = CellPhoneAreaCode::get();
        return $data;
    }
    public function PhoneAreaCode()
    {
        $data = PhoneAreaCode::get();
        return $data;
    }
}
