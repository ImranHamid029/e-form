@extends('layout\admin\app')
@section('content')

<section class="features-area">
    <div class="container2 text-center">
        <h1 class="h1-bold">Tambah Akun</h1>
    </div>
        <form action="#" method="POST" enctype="multipart/form-data" id="regForm" >
            @csrf
            <div class="form-group2 d-block justify-content-center">
                <div class="form-area">
                    <div class="col-12 pl-4">
                        <div class="card mt-4 border mb-4 shadow-sm mx-0">
                            <div class="card-body">

                    
                            <div class="form-container" style="position: relative;">
                                <label for="kode_kantor">Kode Kantor <span class="required">*</span></label>
                                <select id="kode_kantor" name="kode_kantor" class="form-input" required>
                                    <option value="" disabled selected>Pilih Kode Kantor</option>
                                    <option value="001">001 - Kantor A</option>
                                    <option value="002">002 - Kantor B</option>
                                    <option value="003">003 - Kantor C</option>
                                </select>
                                <span class="invalid-icon" style="display: none;">&#x2716;</span>
                            </div>

                        <div class="form-container" style="position: relative;">
                            <label for="role">Role <span class="required">*</span></label>
                            <select id="role" name="role" class="form-input"required>
                                <option value="" disabled selected>Pilih Role</option>
                                <option value="admin">Teller</option>
                                <option value="staff">Customer Service</option>
                                <option value="user">Helpdesk</option>
                            </select>
                            <span class="invalid-icon" style="display: none;">&#x2716;</span>
                        
                        </div>

                        <div class="form-container" style="position: relative;">
                            <label for="username">Username <span class="required">*</span></label>
                            <div class="input-area">
                                <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
                                <span class="invalid-icon" style="display: none;">&#x2716;</span>
                            </div>
                        </div>

                        <div class="form-container" style="position: relative;">
                            <label for="password">Password <span class="required">*</span></label>
                            <div class="input-area">
                                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                                <span class="invalid-icon" style="display: none;">&#x2716;</span>
                            </div>
                        </div>

                        <div class="form-container" style="position: relative;">
                            <label for="confirm_password">Konfirmasi Password <span class="required">*</span></label>
                            <div class="input-area">
                                <input type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password" required>
                                <span class="invalid-icon" style="display: none;">&#x2716;</span>
                            </div>
                        </div>




                            </div>
                        </div>


                        <div class="btn-area d-flex justify-between align-items-center mt-3">
                            <a href="/admin/manage-accounts" class="btn-custom">Kembali</a>
                            <button type="submit" class="btn-custom" id="submitButton">Tambah</button>
                        </div>



                    </div>
                </div>
            </div>
        </form>
        </section>
@endsection