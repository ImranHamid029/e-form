@extends('layout\admin\app')

@section('content')
<div class="features-area">
    <div class="content2">
        <h1 class="h1-bold text-center">Riwayat Pengaduan Nasabah</h1>
    </div>

    <div class="container-bar">
        <div>
            
        </div>
        <div class="searchbar">
            <label for="">Search</label>
            <input type="text" id="searchInput" placeholder="Search..." onkeyup="searchWithdraw()">
            </div>
    </div>

    <div class="cards-container">
        @foreach ($history as $index => $item)
            @if($item->status == 'Selesai' && $index < 3)
                <a href="{{ route('detail.history.complaint', $item->id) }}" class="cards-link">
                    <div class="cards">
                        <div class="cards-header">
                            <p class="body-lg-bold">Data Nasabah</p>
                        </div>
                        <div class="cards-content">
                            <p class="caption-regular"><strong>Nama:</strong> {{ $item->fullName }}</p>
                            <p class="caption-regular"><strong>No Tlp:</strong> {{ $item->phoneNumber }}</p>
                            <p class="caption-regular"><strong>Email:</strong> {{ $item->email }}</p>
                            <p class="caption-regular">
                            <strong>Status:</strong> 
                            <span class="status-label {{ $item->status == 'Menunggu' ? 'status-pending' : ($item->status == 'Selesai' ? 'status-complete' : '') }}">
                                {{ $item->status }}
                            </span>
                        </p>                        </div>
                        <div class="cards-footer">
                            <img src="/img/logo/logo2.png" alt="">
                        </div>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
    
    @if(count($history) > 3)
        <div class="show-more">
            <a href="{{ route('history.showMore') }}" id="showMoreButton" class="caption-regular">Show More ...</a>
        </div>
    @endif
</div>

@endsection
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