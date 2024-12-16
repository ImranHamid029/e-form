@extends('accountofficer.layout')


@section('content')

    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="{{ url('admin/in') }}" class="logo">
                <img src="../../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

            <div class="container-fluid">
            </div>
        </nav>
        <!-- End Navbar -->
    </div>
    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2">

        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Account Officer</span>
									<span class="caret"></span>
								</span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#profile">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings">
                                        <span class="link-collapse">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                        <h4 class="text-section">Applicant</h4>
                    <li class="nav-item active submenu">
                        <a href="{{ url('admin/in') }}">
                            <i class="fas fa-table"></i>
                            <p>Incoming</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Incoming Applicant</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="multi-filter-select" class="display table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Nomor Telepon</th>
                                            <th>Email</th>
                                            <th>Alamat Tinggal</th>
                                            <th>Provinsi Tinggal</th>
                                            <th>Kabupaten Tinggal</th>
                                            <th>Kecamatan Tinggal</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Alamat Usaha</th>
                                            <th>Provinsi Usaha</th>
                                            <th>Kabupaten Usaha</th>
                                            <th>kecamatan_usaha</th>
                                            <th>Status Tempat Usaha</th>
                                            <th>Bidang Usaha</th>
                                            <th>Jumlah Kredit</th>
                                            <th>Jangka Waktu</th>
                                            <th>Keterangan</th>
                                            <th>Jaminan</th>
                                            <th>Nama Pasangan</th>
                                            <th>Pekerjaan Pasangan</th>
                                            <th>Alamat Pekerjaan</th>
                                            <th>Jumlah Anak</th>
                                            <th>Nama Ibu Kandung</th>
                                            <th>Rekening Bank</th>
                                            <th>Pinjaman Bank Lain</th>
                                            <th>Wilayah Pengajuan</th>
                                        </tr>

                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Nomor Telepon</th>
                                            <th>Email</th>
                                            <th>Alamat Tinggal</th>
                                            <th>Provinsi Tinggal</th>
                                            <th>Kabupaten Tinggal</th>
                                            <th>Kecamatan Tinggal</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Alamat Usaha</th>
                                            <th>Provinsi Usaha</th>
                                            <th>Kabupaten Usaha</th>
                                            <th>kecamatan_usaha</th>
                                            <th>Status Tempat Usaha</th>
                                            <th>Bidang Usaha</th>
                                            <th>Jumlah Kredit</th>
                                            <th>Jangka Waktu</th>
                                            <th>Keterangan</th>
                                            <th>Jaminan</th>
                                            <th>Nama Pasangan</th>
                                            <th>Pekerjaan Pasangan</th>
                                            <th>Alamat Pekerjaan</th>
                                            <th>Jumlah Anak</th>
                                            <th>Nama Ibu Kandung</th>
                                            <th>Rekening Bank</th>
                                            <th>Pinjaman Bank Lain</th>
                                            <th>Wilayah Pengajuan</th>
                                        </tr>

                                        </tfoot>
                                        <tbody>
                                        @foreach($applicants as $appl)
                                            <tr>
                                                <td>{{ $appl->nik }}</td>
                                                <td>{{ $appl->nama_lengkap }}</td>
                                                <td>{{ $appl->tempat_lahir }}</td>
                                                <td>{{ $appl->tanggal_lahir }}</td>
                                                <td>{{ $appl->no_tlp }}</td>
                                                <td>{{ $appl->email }}</td>
                                                <td>{{ $appl->alamat_tinggal }}</td>
                                                <td>{{ $appl->provinsi_tinggal }}</td>
                                                <td>{{ $appl->kabupaten_tinggal }}</td>
                                                <td>{{ $appl->kecamatan_tinggal }}</td>
                                                <td>{{ $appl->nama_perusahaan }}</td>
                                                <td>{{ $appl->alamat_usaha }}</td>
                                                <td>{{ $appl->provinsi_usaha }}</td>
                                                <td>{{ $appl->kabupaten_usaha }}</td>
                                                <td>{{ $appl->kecamatan_usaha }}</td>
                                                <td>{{ $appl->status_tempat_usaha }}</td>
                                                <td>{{ $appl->bidang_usaha }}</td>
                                                <td>{{ $appl->jumlah_kredit }}</td>
                                                <td>{{ $appl->jangka_waktu }}</td>
                                                <td>{{ $appl->keterangan_pengguna_kredit }}</td>
                                                <td>{{ $appl->jaminan_kredit }}</td>
                                                <td>{{ $appl->nama_pasangan }}</td>
                                                <td>{{ $appl->pekerjaan_pasangan }}</td>
                                                <td>{{ $appl->alamat_pekerjaan }}</td>
                                                <td>{{ $appl->jumlah_anak }}</td>
                                                <td>{{ $appl->nama_ibu_kandung }}</td>
                                                <td>{{ $appl->rekening_bank }}</td>
                                                <td>{{ $appl->pinjaman_bank_lain }}</td>
                                                <td>{{ $appl->wilayah_pengajuan }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
