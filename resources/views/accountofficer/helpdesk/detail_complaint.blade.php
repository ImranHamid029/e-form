@extends('layout\helpdesk\app')

@section('content')
<div class="features-area">
    <div class="content2">
        <h4 class="h4-bold text-center">Laporan Pengguna</h4>
    </div>
    <div class="detail-data-container">
        <div class="detail-data-content">
            <div class="detail-data-area">
                <div class="detail-data-text-area">
                    <div class="detail-info">
                        <p class="body-md-bold"><strong>Informasi Pelapor</strong></p>
                        <p>Nama Lengkap : {{ $complaint->fullName }}</p>
                        <p>No Hp        : {{ $complaint->phoneNumber }}</p>
                        <p>Email        : {{ $complaint->email }}</p>
                        <br>
                        <p class="body-md-bold"><strong>Laporan Keluhan</strong></p>
                        <p>Laporan : {{ $complaint->complaint }}</p>
                    </div>
                </div>
            </div>
            <div class="btn-respons-area">
                <a href="javascript:void(0)" id="tanggapiBtn" class="btn-custom" data-id="{{ $complaint->id }}">Tanggapi</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Response akan muncul di bawah -->
<div id="responsContainer"></div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const tanggapiBtn = document.getElementById("tanggapiBtn");
    const responsContainer = document.getElementById("responsContainer");
    
    tanggapiBtn.addEventListener("click", function (e) {
        e.preventDefault();
        let complaintId = this.getAttribute("data-id");

        fetch(`/helpdesk/respond/${complaintId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.text();
            })
            .then(data => {
                responsContainer.innerHTML = data;
                const form = document.getElementById("responsForm");

                if (form) {
                    form.addEventListener("submit", handleSubmit);
                } else {
                    console.error("Form tidak ditemukan dalam respons modal.");
                }
            })
            .catch(error => {
                console.error("Error loading response form:", error);
                alert("Terjadi kesalahan saat memuat konten.");
            });
    });

    function handleSubmit(event) {
        event.preventDefault();
        const form = event.target;
        const formData = new FormData(form);
        const complaintId = form.getAttribute("data-id");
        
        fetch(`/helpdesk/respond/${complaintId}`, {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Response berhasil dikirim!");
                window.location.href = "{{ route('helpdesk.dashboard') }}";
            } else {
                alert("Terjadi kesalahan. Coba lagi.");
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Terjadi kesalahan. Coba lagi.");
        });
    }
});
</script>
@endsection
