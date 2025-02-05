@extends('layout\helpdesk\app')

@section('content')
<div class="features-area">
    <div class="content2">
        <h1 class="h1-bold text-center">Data Pengaduan Online Nasabah</h1>
    
    </div>

    <div class="container-bar">
            <div> 
            </div>
            <div class="searchbar">
                <label for="">Search</label>
                <input type="text" placeholder="Search...">
            </div>
    </div>

    <div class="cards-container">
        @foreach($complaints as $complaint)
            <a href="{{ route('complaint.detail', $complaint->id) }}" class="cards-link">
                <div class="cards">
                    <div class="cards-header">
                        <p class="body-lg-bold">Data Nasabah</p>
                    </div>
                    <div class="cards-content">
                        <p class="caption-regular"><strong>Nama:</strong> {{ $complaint->fullName }}</p>
                        <p class="caption-regular"><strong>No Tlp:</strong> {{ $complaint->phoneNumber }}</p>
                        <p class="caption-regular"><strong>Email:</strong> {{ $complaint->email }}</p>
                        <p class="caption-regular"><strong>Status:</strong> <span class="status-label">{{ $complaint->status }}</span></p>
                    </div>
                    <div class="cards-footer">
                        <img src="/img/logo/logo2.png" alt="">
                    </div>
                </div>
            </a>
        @endforeach
        
        @if(count($complaints) > 3)
        <div class="show-more">
            <a href="#" id="showMoreButton" class="caption-regular">Show More ...</a>
        </div>
        @endif
    </div>
</div>
@endsection