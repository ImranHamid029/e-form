@extends('layout\admin\app')
@section('content')
<div class="features-area">
    <div class="content2">
        <h1 class="h1-bold text-center">Data Pengajuan Kredit</h1>
    </div>

    <div class="container-bar">
        <div></div>
        <div class="searchbar">
            <label for="">Search</label>
            <input type="text" placeholder="Search...">
        </div>
    </div>

    <div class="cards-container">
        @foreach($applicants as $index => $applicant)
            <a href="{{ route('applicant.detail', $applicant->id) }}" class="cards-link cards-item"
                style="{{ $index >= 3 ? 'display: none;' : '' }}">
                <div class="cards">
                    <div class="cards-header">
                        <p class="body-lg-bold">Data Nasabah</p>
                    </div>
                    <div class="cards-content">
                        <p class="caption-regular"><strong>Nama:</strong> {{ $applicant->fullName }}</p>
                        <p class="caption-regular"><strong>NIK:</strong> {{ $applicant->nik }}</p>
                        <p class="caption-regular"><strong>No Tlp:</strong> {{ $applicant->phoneNumber }}</p>
                        <p class="caption-regular">
                            <strong>Status:</strong> 
                            <span class="status-label {{ $complaint->status == 'Menunggu' ? 'status-pending' : ($complaint->status == 'Selesai' ? 'status-complete' : '') }}">
                            {{ $aplicant->status }}
                            </span>
                        </p>

                    </div>
                    <div class="cards-footer">
                        <img src="/img/logo/logo2.png" alt="">
                    </div>
                </div>
            </a>
        @endforeach

        @if(count($applicants) > 3)
        <div class="show-more">
            <a href="javascript:void(0);" id="toggleButton" class="caption-regular">Show More ...</a>
        </div>
        @endif
    </div>
</div>

<script>
    document.getElementById('toggleButton')?.addEventListener('click', function () {
        let cards = document.querySelectorAll('.cards-item');
        let isExpanded = this.getAttribute('data-expanded') === 'true';

        if (isExpanded) {
            // Kembali ke tampilan hanya 3 kartu
            cards.forEach((item, index) => {
                item.style.display = index < 3 ? 'block' : 'none';
            });
            this.textContent = 'Show More ...';
        } else {
            // Tampilkan semua kartu
            cards.forEach(item => {
                item.style.display = 'block';
            });
            this.textContent = 'Show Less';
        }

        this.setAttribute('data-expanded', !isExpanded);
    });
</script>
@endsection
