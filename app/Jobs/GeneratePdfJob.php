<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use PDF;
use App\Models\Withdraw;
use App\Models\Deposit;
use App\Models\Applicant;
use Illuminate\Support\Facades\Storage;

class GeneratePdfJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $queueNumber;
    protected $type;

    public function __construct($queueNumber, $type)
    {
        $this->queueNumber = $queueNumber;
        $this->type = $type;
    }

    public function handle()
    {
        if ($this->type === 'withdraw') {
            $data = Withdraw::where('queueNumber', $this->queueNumber)->first();
            $view = 'tiket.tarik.tarik_tunai_tiket';
        } elseif ($this->type === 'deposit') {
            $data = Deposit::where('queueNumber', $this->queueNumber)->first();
            $view = 'tiket.setor.setor_tunai_tiket';
        } elseif ($this->type === 'applicant') {
            $data = Applicant::where('resiNumber', $this->queueNumber)->first();
            $view = 'tiket.kredit.kredit_tiket';
        } else {
            return;
        }

        if (!$data) {
            return;
        }

        $pdf = PDF::loadView($view, compact('data'));

        // Langsung menampilkan PDF ke browser tanpa menyimpan ke storage
        return response()->make($pdf->stream("Bukti_{$this->type}.pdf"), 200, [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
