<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CodeController extends Controller
{
    public function generateCode()
    {
        $file = time() . '_' . 'qrcode' . '.png';
        QrCode::size(150)                
                ->format('png')
                ->generate('laporan-akhir-pstt-polinema.xyz', storage_path('app/public/qrcode/' . $file));
        
        return view('qr-code');
    }
}
