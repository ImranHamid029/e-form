@extends('layout\admin\app')

@section('content')
<section class="features-area ">
    <div class="container2 text-center" >
        <h1 class="h1-bold">Manajemen Akun</h1>
    </div>

        <div class="container-bar">
    
            <div>
                
            </div>
            <div class="searchbar">
                <label for="">Search</label>
                <input type="text" placeholder="Search...">
            </div>
        </div>
        <div class="container2">
            <div class="add-account-container">
                <div class="add-account">
                    <a class="btn-custom" href="/add-account">Tambah Akun</a>
                </div>
            </div>
        </div>
        <div class="container2">
            <div class="table-container">
                <table class="office-table">
                        <tr>
                            <th>Kode Kantor</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Imran Sukron Hamid</td>
                            <td>Teller</td>
                            <td>
                                <div class="btn-edit">
                                    <a href="/edit-account" >Edit</a>
                                </div>
                                <div class="btn-delete">
                                    <a href="#">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Akmal Adnan Djayasinga</td>
                            <td>Helpdesk</td>
                            <td>
                                <div class="btn-edit">
                                    <a href="/edit-account" >Edit</a>
                                </div>
                                <div class="btn-delete">
                                    <a href="#">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>

</section>
@endsection