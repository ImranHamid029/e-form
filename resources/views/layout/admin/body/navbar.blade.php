<header id="fixedheader" class="header-area">
    <div class="credit-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="top-header-area" style="background-color: #0B4198; height:96px;">
                <div class="container-header-admin" style="height:96px;">
                    <div class="row h-100 align-items-center" style="height:96px;">
                        <div class="col-12 d-flex justify-content-between" style="height:96px;">
                            <!-- Logo Area -->
                            <div class="admin-name" style="width: 152px;height:82px;">
                                <img src="/img/logo2.png" width="232px" height="113" alt="Logo">
                            </div>
                            <!-- Menu -->
                            <div class="align-items-center d-flex">
                                @php
                                    // Mapping officeCode ke nama kantor
                                    $officeNames = [
                                        '370' => 'Kantor Pusat',
                                        '401' => 'KC Jakarta',
                                        '405' => 'KCP Teuku Umar',
                                        '383' => 'KC Kalianda',
                                        '381' => 'KC Metro',
                                        '397' => 'KCP Antasari',
                                        '396' => 'KCP Panaragan Jaya',
                                        '400' => 'KCP Gading Rejo',
                                        '407' => 'KCP Gedong Tataan',
                                        '410' => 'KCP Hanura',
                                        '403' => 'KCP Natar',
                                        '416' => 'KCP Pekalongan',
                                        '402' => 'KCP Sidomulyo',
                                        '406' => 'KCP Way Jepara',
                                        '391' => 'KCP Kartini',
                                        '390' => 'KCP Panjang',
                                    ];

                                    $officeCode = session('officeCode', '370'); // Default ke Kantor Pusat
                                    $officeName = $officeNames[$officeCode] ?? 'Kantor Tidak Dikenal';
                                @endphp
                                <a class="text-center" href="#" style="color:#fff;">{{ $officeName }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
