@extends('layout\admin\app')
@section('content')

<div class="features-area">
    <div class="content2">
        <h4 class="h4-bold text-center">Data Setor Tunai</h4>
    </div>
    <div class="detail-data-container">
        <div class="detail-data-content">
            <div class="detail-data-area">

                <div class="detail-data-text-area">
                    <div class="detail-info">
                        <p class="body-lg-bold"><strong>Layanan :</strong>{{ $deposit->selectService }}</p>
                        <p class="body-lg-bold"><strong>Kantor Oprasional : </strong>{{ $deposit->bankBranch }}</p>
                        
                    </div>
                </div>
                <div class="detail-data-text-area">
                    <div class="detail-info">
                        <p class="body-lg-bold"><strong>Penerima </strong></p>
                        <p >No. Rekening          : {{ $deposit->accountNumber }}</p>
                        <p >Kantor Operasional    : {{ $deposit->bankBranch }}</p>
                        <p >Nama Pemilik Rekening : {{ $deposit->accountOwner }}</p>
                    </div>
                </div>

                <div class="detail-data-text-area">
                    <div class="detail-info">
                        <p class="body-lg-bold"><strong>Penyetor</strong></p>
                        <p>Nama         : {{ $deposit->fullName }}</p>
                        <p>No. Telp : {{ $deposit->phoneNumber }}</p>
                        <p>Pekerjaan : {{ $deposit->job }}</p>
                        <p>Nama Perusahaan : {{ $deposit->companyName }}</p>
                    </div>
                </div>
                <div class="detail-data-text-area">
                    <div class="detail-info">
                        <p class="body-lg-bold"><strong>Transaksi</strong></p>
                        <p>Jumlah : {{ $deposit->amount }}</p>
                        <p>Terbilang : {{ $deposit->amountInWords }}</p>
                        
                    </div>
                </div>
                <div class="btn-area3">
                    <div>
                    <a href="javascript:void(0);" onclick="window.history.back(); " class="btn-blue">Kembali</a>
                    </div>

                    <!-- @if (!isset($from_history) || $from_history != true) 
                    <div style="display: flex; gap: 10px;">
                        <button type="button" class="btn-accepted" onclick="showPopup('Disetujui')">Setujui</button>
                        <button type="button" class="btn-rejected" onclick="showPopup('Ditolak')">Tolak</button>
                    </div>
                    @endif -->
                </div>
                
            </div>
        </div>    
    </div>
</div>

@include('popup.validate')

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let confirmButton = document.getElementById('confirmValidate');
        if (confirmButton) {
            confirmButton.addEventListener('click', function () {
                let status = this.getAttribute('data-status');
                updateStatus(status);
            });
        }

    });

    function showPopup(status) {
        let popup = document.getElementById('confirmationPopup');
        if (popup) {
            popup.style.display = 'flex';
            let confirmButton = document.getElementById('confirmValidate');
            if (confirmButton) {
                confirmButton.setAttribute('data-status', status);
            }
        }
    }

    function hidePopup() {
        let popup = document.getElementById('confirmationPopup');
        if (popup) {
            popup.style.display = 'none';
        }
    }

    function updateStatus(status) {
        // Always pass 'Selesai' as status, regardless of user input
        fetch("{{ route('deposit.update_status', $deposit->id) }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ status: 'Selesai' }) // Send 'Selesai' as the status directly
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let btnArea = document.querySelector('.btn-area3 div:last-child');
                if (btnArea) {
                    btnArea.innerHTML = `<button type="button" class="btn-status">${status}</button>`; // Keep original text for UI consistency
                }

                setTimeout(() => {
                    window.location.href = "{{ route('deposit.dashboard') }}";
                }, 1000);
            } else {
                alert("Terjadi kesalahan: " + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Terjadi kesalahan dalam proses pengiriman data.");
        });
    }


    function goBack() {
        window.history.back();
    }
</script>

@endsection