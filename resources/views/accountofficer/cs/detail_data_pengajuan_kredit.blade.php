@extends('layout\admin\app')
@section('content')

<div class="features-area">
    <div class="content2">
        <h4 class="h4-bold text-center">Data Pengajuan Kredit</h4>
    </div>
    
    <div class="detail-data-container">
        <div class="detail-data-content">
            <div class="detail-data-text-area">
                <p class="body-lg-bold"><strong>Penerima </strong></p>
                <div class="detail-info d-flex justify-between">
                    <div style="width: 50%;">
                        <p class="body-lg-bold"><strong>Informasi Data Pribadi</strong></p>
                        <ul style="padding-left:24px;">
                            <li>NIK: {{ $applicant->nik }}</li>
                            <li>Nama Sesuai KTP: {{ $applicant->fullName }}</li>
                            <li>Tempat Lahir: {{ $applicant->placeOfBirth }}</li>
                            <li>Tanggal Lahir: {{ $applicant->dateOfBirth }}</li>
                            <li>Jenis Kelamin: {{ $applicant->gender }}</li>
                        </ul>
                        <p class="body-lg-bold"><strong>Kontak</strong></p>
                        <ul style="padding-left:24px;">
                            <li>No. Telp: {{ $applicant->phoneNumber }}</li>
                            <li>Email: {{ $applicant->email }}</li>
                        </ul>
                    </div>
                    <div style="width: 50%;">
                        <p class="body-lg-bold"><strong>Alamat</strong></p>
                        <ul style="padding-left:24px;">
                            <li>Alamat Rumah: {{ $applicant->residentialAddress }}</li>
                            <li>Provinsi: {{ $applicant->residentialProvince }}</li>
                            <li>Kabupaten/Kota: {{ $applicant->residentialCity }}</li>
                            <li>Kecamatan: {{ $applicant->residentialDistrict }}</li>
                            <li>Kode Pos: {{ $applicant->posCode }}</li>
                        </ul>
                        <p class="body-lg-bold"><strong>Keterangan</strong></p>
                        <ul style="padding-left:24px;">
                            <li>Keterangan Pengajuan Kredit: {{ $applicant->loanUsageDescription }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="detail-data-text-area">
                <p class="body-lg-bold"><strong>Data Usaha Nasabah</strong></p>
                <div class="detail-info d-flex justify-between align-item-start">
                    <div style="width: 50%;">
                        <p class="body-lg-bold"><strong>Informasi Usaha</strong></p>
                        <ul style="padding-left:24px;">
                            <li>Nama Usaha: {{ $applicant->companyName }}</li>
                            <li>Provinsi: {{ $applicant->businessProvince }}</li>
                            <li>Kabupaten/Kota: {{ $applicant->businessCity }}</li>
                            <li>Kecamatan: {{ $applicant->businessDistrict }}</li>
                            <li>Kode Pos: {{ $applicant->businessPosCode }}</li>
                        </ul>
                    </div>
                    <div style="width: 50%;">
                        <p class="body-lg-bold"><strong>Keterangan Usaha</strong></p>
                        <ul style="padding-left:24px;">
                            <li>Status Perusahaan: {{ $applicant->businessPlaceStatus }}</li>
                            <li>Bidang Usaha: {{ $applicant->businessSector }}</li>
                            <li>Jangka Waktu: {{ $applicant->loanTerm }} Bulan</li>
                            <li>Jaminan: {{ $applicant->loanCollateral }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="btn-area3">
                <div>
                <a href="javascript:void(0);" class="btn-blue" onclick="goBack();">Kembali</a>

                </div>
                @if (!isset($from_history) && auth()->user()->role !== 'adminsuper')
                    <div style="display: flex; gap: 10px;">
                        <button type="button" class="btn-accepted" onclick="showPopup('Disetujui')">Setujui</button>
                        <button type="button" class="btn-rejected" onclick="showPopup('Ditolak')">Tolak</button>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

@include('popup.validate')

<script>
    function showPopup(status) {
        let popup = document.getElementById(status === 'Disetujui' ? 'confirmationPopup' : 'feedbackPopup');
        popup.style.display = 'flex';
        document.getElementById('confirmValidate').setAttribute('data-status', status);
    }

    function hidePopup() {
        document.getElementById('confirmationPopup').style.display = 'none';
        document.getElementById('feedbackPopup').style.display = 'none';
    }

    document.getElementById('confirmValidate').addEventListener('click', function () {
        let status = this.getAttribute('data-status');
        updateStatus(status);
    });

    function updateStatus(status) {
        fetch("{{ route('applicant.update_status', $applicant->id) }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ status: status })
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  window.location.href = "{{ route('cs.dashboard') }}";
              }
          });
    }
    function goBack() {
    window.history.back();
}
</script>

@endsection
