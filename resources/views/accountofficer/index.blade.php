@extends('accountofficer.layout')


@section('content')
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="{{ url('admin') }}" class="logo">
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
									<span class="user-level">Administrator</span>
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
                    <li class="nav-item active">
                        <a href="{{ url('admin/') }}" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                        <h4 class="text-section">Applicant</h4>
                    <li class="nav-item">
                        <a href="{{ url('admin/in') }}">
                            <i class="fas fa-table"></i>
                            <p>Incoming</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/acc') }}">
                            <i class="fas fa-table"></i>
                            <p>Accepted</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/rej') }}">
                            <i class="fas fa-table"></i>
                            <p>Rejected</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title">Overall statistics</div>
                        <div class="card-category">Daily information about statistics in system</div>
                        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-1">
                                    <div class="circles-wrp" style="position: relative; display: inline-block;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90">
                                            <path fill="transparent" stroke="#f1f1f1" stroke-width="7"
                                                  d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 44.942357332570026 3.500040032273624 Z"
                                                  class="circles-maxValueStroke"></path>
                                            <path fill="transparent" stroke="#FF9E27" stroke-width="7"
                                                  d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 20.644357636259837 78.60137921350231 "
                                                  class="circles-valueStroke"></path>
                                        </svg>
                                        <div class="circles-text"
                                             style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 31.5px; height: 90px; line-height: 90px;">
                                            5
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fw-bold mt-3 mb-0">New Users</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-2">
                                    <div class="circles-wrp" style="position: relative; display: inline-block;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90">
                                            <path fill="transparent" stroke="#f1f1f1" stroke-width="7"
                                                  d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 44.942357332570026 3.500040032273624 Z"
                                                  class="circles-maxValueStroke"></path>
                                            <path fill="transparent" stroke="#2BB930" stroke-width="7"
                                                  d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 5.5495771787290025 57.88076625138973 "
                                                  class="circles-valueStroke"></path>
                                        </svg>
                                        <div class="circles-text"
                                             style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 31.5px; height: 90px; line-height: 90px;">
                                            100
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fw-bold mt-3 mb-0">Sales</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-3">
                                    <div class="circles-wrp" style="position: relative; display: inline-block;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90">
                                            <path fill="transparent" stroke="#f1f1f1" stroke-width="7"
                                                  d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 44.942357332570026 3.500040032273624 Z"
                                                  class="circles-maxValueStroke"></path>
                                            <path fill="transparent" stroke="#F25961" stroke-width="7"
                                                  d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 0 1 69.44267714510887 78.53812060894248 "
                                                  class="circles-valueStroke"></path>
                                        </svg>
                                        <div class="circles-text"
                                             style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 31.5px; height: 90px; line-height: 90px;">
                                            12
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fw-bold mt-3 mb-0">Subscribers</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
