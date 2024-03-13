<?php

namespace App\Http\Controllers;

use App\Models\Estagiario;
use function Spatie\LaravelPdf\Support\pdf;
use Spatie\LaravelPdf\Facades\Pdf;

class PdfController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Estagiario $estagiario)
    {
        return Pdf::view('estagiario.encaminhamento', compact('estagiario'))
        ->name($estagiario->name . '.pdf');
    }
    // public function __invoke(Estagiario $estagiario)
    // {
    //     return pdf()
    //     ->view('estagiario.encaminhamento', compact('estagiario'))
    //     ->download($estagiario->name . '.pdf');
    // }
}
