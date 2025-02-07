@extends('layout/user/app')
@section('content')

<section class="features-area">
    <div class="status-container-area">
        <div class="container-status2">
            @if ($data)
                <div class="top-area-status">
                    <h2 class="h2-bold">
                        STATUS {{ strtoupper($feature ?? 'TRANSAKSI') }}
                    </h2>
                </div>
                <div class="status-area">

                    <div class="content-status">
                        <h3 class="h3-bold">Hi {{ $data->fullName ?? $data->ownerName ?? 'Nasabah' }},</h3>
                        <p class="caption-regular">
                            Terima kasih, Status pengajuan <span class="caption-semibold">{{ strtolower($feature ?? 'transaksi') }}</span> Anda
                            <span class="caption-semibold">{{ $data->status ?? 'Sedang Diproses' }}.</span>
                        </p>
                    </div>

                    <div class="content-status">
                        <h5 class="h5-bold">Detail</h5>
                        <p class="body-md-regular">
                            @if ($type === 'Applicant')
                                No Resi: <span class="h5-bold">{{ $data->resiNumber }}</span>
                            @else
                                No Antrian: <span class="h5-bold">{{ $data->queueNumber }}</span>
                            @endif
                        </p>

                        <p class="caption-regular">
                            Saat ini pengajuan <span class="body-sm-semibold">{{ strtolower($feature ?? 'transaksi') }}</span> Anda
                            <span class="body-sm-semibold">{{ $data->status ?? 'Sedang Diproses' }}.</span>
                            Tim kami akan menghubungi Anda melalui email atau nomor telepon yang telah Anda berikan.
                        </p>
                    </div>

                    <div class="content-status">
                        <div class="{{ $data->status === 'Ditolak' ? 'rejected-status' : ($data->status === 'Disetujui' ? 'accepted-status' : 'status-process') }}">
                            <h5 class="body-lg-bold">{{ $data->status ?? 'Sedang Diproses' }}</h5>
                        </div>

                    </div>

                    <div class="content-status">
                        <h5 class="h5-bold">Butuh Bantuan?</h5>
                        <ul style="padding-left:20px;">
                            <li class="caption-regular">Hubungi Layanan Pelanggan: (0721) 484261</li>
                            <li class="caption-regular">Hubungi Email: info@banklampung.co.id</li>
                            <li class="caption-regular">Kunjungi Website Resmi: www.banklampung.co.id</li>
                        </ul>
                        <p class="caption-regular">Kami menghargai kesabaran Anda selama proses ini berlangsung.</p>
                    </div>

                    <div class="content-status">
                        <p class="caption-bold">Salam hangat,<br>Tim Bank Lampung</p>
                        <p class="caption-regular">
                            Jl. Wolter Monginsidi No.182, Bandar Lampung 35116, Indonesia <br>
                            Telepon: (0721) 484261 <br>
                            Email: info@banklampung.co.id <br>
                            Website: www.banklampung.co.id <br><br>
                            Bank Lampung, bahagia melayani dari hati.
                        </p>
                    </div>
                </div>
            @else
                <div class="top-area-status">
                    <h2 class="h2-bold">STATUS TIDAK DITEMUKAN</h2>
                </div>
                <div class="status-area">
                    <p class="caption-regular">
                        Nomor yang Anda masukkan tidak ditemukan. Pastikan Anda telah memasukkan nomor yang benar.
                    </p>
                </div>
            @endif
        </div>
            
        <div class="btn-area text-center mt-4">
            <a href="{{ route('status.check.form') }}" class="btn-custom">Kembali</a>
        </div>
    </div>   
</section>

@endsection
