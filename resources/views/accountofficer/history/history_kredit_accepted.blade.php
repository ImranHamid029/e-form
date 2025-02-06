@extends('layout/cs/app')
@section('content')

<div class="features-area">
    <div class="content2">
        <h1 class="h1-bold text-center">Data Pengajuan Kredit</h1>
    </div>

    <div class="container-bar">
        <div></div>
        <div class="searchbar">
            <label for="">Search</label>
            <input type="text" id="searchInput" placeholder="Search...">
        </div>
    </div>

    <div class="cards-container" id="cardsContainer">
        @foreach ($acceptedApplicants as $applicant)
        <a href="{{ route('history.detail', ['id' => $applicant->id, 'from_history' => true]) }}" class="cards-link">
            <div class="cards">
                <div class="cards-header">
                    <p class="body-lg-bold">Data Nasabah</p>
                </div>
                <div class="cards-content">
                    <p class="caption-regular"><strong>Nama Lengkap :</strong> {{ $applicant->fullName }}</p>
                    <p class="caption-regular"><strong>NIK :</strong> {{ $applicant->nik }}</p>
                    <p class="caption-regular"><strong>No. Telp :</strong> {{ $applicant->phoneNumber }}</p>
                    <p class="caption-regular">
                            <strong>Status:</strong> 
                            <span class="status-label 
                                {{ $applicant->status == 'Menunggu' ? 'status-pending' : 
                                    ($applicant->status == 'Disetujui' ? 'status-complete' : 
                                    ($applicant->status == 'Ditolak' ? 'status-rejected' : '')) }}
                            ">
                            {{ $applicant->status }}
                            </span>
                        </p>               
                    </div>
                <div class="cards-footer">
                    <img src="/img/logo/logo2.png" alt="">
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

<script>
    document.getElementById('searchInput').addEventListener('input', function () {
        let searchValue = this.value.toLowerCase();
        let cards = document.querySelectorAll('.cards-link');

        cards.forEach(card => {
            let name = card.querySelector('.cards-content p:nth-child(2)').innerText.toLowerCase();
            if (name.includes(searchValue)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>

@endsection
