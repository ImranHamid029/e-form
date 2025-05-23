@extends('layout\admin\app')

@section('content')
<div class="features-area">
    <div class="content2">
        <h1 class="h1-bold text-center">History Data Tarik Tunai</h1>
    
    </div>

    <div class="container-bar">
    
            <div >
                
            </div>
            <div class="searchbar">
                <label for="">Search</label>
                <input type="text" id="searchInput" placeholder="Search..." onkeyup="searchWithdraw()">
            </div>
    </div>

    <div class="cards-container">
        @foreach($doneWithdraws as $index => $withdraw)
            <a href="{{ route('history.withdraw.detail', ['id' => $withdraw->id, 'from_history' => 1]) }}" class="cards-link cards-item" 
                style="{{ $index >= 4 ? 'display: none;' : '' }}">
                <div class="cards">
                    <div class="cards-header">
                        <p class="body-lg-bold">Data Nasabah</p>
                    </div>
                    <div class="cards-content">
                        <p class="caption-regular"><strong>No Rekening :</strong> {{ $withdraw->accountNumber }}</p>
                        <p class="caption-regular"><strong>Pemilik Rekening :</strong> {{ $withdraw->ownerName }}</p>
                        <p class="caption-regular"><strong>Jenis Rekening :</strong> {{ $withdraw->accountType }}</p>
                        <p class="caption-regular">
                            <strong>Status:</strong> 
                            <span class="status-label {{ $withdraw->status == 'Menunggu' ? 'status-pending' : ($withdraw->status == 'Selesai' ? 'status-complete' : '') }}">
                            {{ $withdraw->status }}
                            </span>
                        </p>
                    </div>
                    <div class="cards-footer">
                        <img src="/img/logo/logo2.png" alt="">
                    </div>
                </div>
            </a>
        @endforeach

        @if(count($doneWithdraws) > 4)
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
                item.style.display = index < 4 ? 'block' : 'none';
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
<script>
    function searchWithdraw() {
        let input = document.getElementById("searchInput").value.toLowerCase();
        let cards = document.querySelectorAll(".cards-link");

        cards.forEach(card => {
            let queueNumber = card.querySelector(".cards-content p:first-child").textContent.toLowerCase();
            if (queueNumber.includes(input)) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }
</script>

@endsection