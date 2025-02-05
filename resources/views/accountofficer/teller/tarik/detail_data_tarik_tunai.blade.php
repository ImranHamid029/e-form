@extends('layout\teller\app')
@section('content')

<div class="features-area">
    <div class="content2">
        <h4 class="h4-bold text-center">Data Tarik Tunai</h4>
    </div>
    <div class="detail-data-container">
        <div class="detail-data-content">
            <div class="detail-data-area">

                <div class="detail-data-text-area">
                    <div class="detail-info">
                        <p class="body-lg-bold"><strong>Kantor Oprasional : </strong> {{ $withdraw->bankBranch }}</p>
                        <p class="body-lg-bold"><strong>No. Rekening : </strong> {{ $withdraw->accountNumber }}</p>
                        <p class="body-lg-bold"><strong>Nama Pemilik Rekening :</strong> {{ $withdraw->ownerName }}</p>
                    </div>
                </div>

                <div class="detail-data-text-area">
                    <div class="detail-info">
                        <p class="body-lg-bold"><strong>Detail Penarikan :</strong></p>
                        <p>Jenis Rekening : {{ $withdraw->accountType }}</p>
                        <p>Jumlah : {{ $withdraw->amount }}</p>
                        <p>Terbilang : {{ $withdraw->amountInWords }}</p>
                    </div>
                </div>
                <div class="btn-area3">
                    <div>
                        <a href="javascript:void(0);" id="btnBack" class="btn-blue" onclick="goBack();">Kembali</a>
                    </div>

                    @if (!isset($from_history) || $from_history != true) <!-- Jika bukan dari history, tampilkan tombol -->
                    <div style="display: flex; gap: 10px;">
                        <button type="button" class="btn-accepted" onclick="showPopup('Disetujui')">Setujui</button>
                        <button type="button" class="btn-rejected" onclick="showPopup('Ditolak')">Tolak</button>
                    </div>
                    @endif
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

            let btnBack = document.getElementById("btnBack");
            if (btnBack) {
                btnBack.addEventListener("click", function () {
                    goBack();
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
            // Always pass 'Selesai' as status
            fetch("{{ route('withdraw.update_status', $withdraw->id) }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ status: 'Selesai' }) // Send 'Selesai' directly
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    let btnArea = document.querySelector('.btn-area3 div:last-child');
                    if (btnArea) {
                        btnArea.innerHTML = `<button type="button" class="btn-status">${status}</button>`;
                    }

                    setTimeout(() => {
                        window.location.href = "{{ route('withdraw.dashboard') }}";
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