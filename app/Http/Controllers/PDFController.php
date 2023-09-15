<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function downloadPdf()
    {
        $users = User::all();
        $data = [
            'date' => date('m/d/Y'),
            'users' => $users,
        ];
        $pdf = Pdf::loadView('userPDF', $data);
        return $pdf->download('tes-pdf-filament.pdf');
    }
}
