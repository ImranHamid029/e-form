@extends('layout\admin\app')
@section('content')

<div class="features-area">
    <div class="content2">
        <h4 class="h4-bold text-center">Detail Laporan</h4>
    </div>
    <div class="detail-data-container">
        <div class="detail-data-content">
            <div class="detail-data-area">
                <div class="detail-data-text-area">
                    <div class="detail-info">
                        <p>Nama Lengkap : {{ $complaint->fullName }}</p>
                        <p>No Hp        : {{ $complaint->phoneNumber }}</p>
                        <p>Email        : {{ $complaint->email }}</p><br>
                        <p>Laporan      : {{ $complaint->complaint }}</p>
                    </div>
                </div>
                <h4 class="h4-bold text-center">Balasan</h4>
                <div class="detail-data-text-area">
                    <div class="detail-info">
                        <div class="profile-area-respons">
                            <div class="profile">
                                <img src="/img/bg-img/16.jpg" alt="Logo">
                            </div>
                            <div class="name-area">
                                <a class="body-sm-bold">{{ $complaint->admin_name }}</a><br>
                                <a class="caption-regular">Role Admin</a>
                            </div>
                        </div>
                        <div>
                            <p>{{ $complaint->response }}</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="btn-area3">
                <div>
                    <a href="javascript:void(0);" onclick="window.history.back(); " class="btn-blue">Kembali</a>
                </div>
                <div>

                </div>

            </div>
        </div>
        
    </div>
    
</div>
@endsection
