@extends('layout.admin.app')

@section('content')
<section class="features-area">
    <div class="container2 text-center">
        <h1 class="h1-bold">Tambah Akun</h1>
    </div>

    <form action="{{ route('store-account') }}" method="POST" enctype="multipart/form-data" id="regForm">
        @csrf
        <div class="form-group2 d-block justify-content-center">
            <div class="form-area">
                <div class="col-12 pl-4">
                    <div class="card mt-4 border mb-4 shadow-sm mx-0">
                        <div class="card-body">
                        <div class="form-container">
    <label for="bankBranch">Kantor Operasional <span class="required">*</span></label>
    <div class="form-container">
        <label for="officeCode">Kode Kantor <span class="required">*</span></label>
        <select id="officeCode" name="officeCode" class="form-input" required>
            <option value="" disabled selected>Pilih Kode Kantor</option>
            @foreach ($offices as $office)
                <option value="{{ $office->_id }}">{{ $office->_id }} - {{ $office->office_name }}</option>
            @endforeach
        </select>
    </div>
</div>


                            <div class="form-container">
                                <label for="role">Role <span class="required">*</span></label>
                                <select id="role" name="role" class="form-input" required>
                                    <option value="" disabled selected>Pilih Role</option>
                                    <option value="adminsuper">Admin Super</option>
                                    <option value="admin">Teller</option>
                                    <option value="staff">Customer Service</option>
                                    <option value="user">Helpdesk</option>
                                </select>
                            </div>

                            <div class="form-container">
                                <label for="username">Username <span class="required">*</span></label>
                                <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
                            </div>

                            <div class="form-container">
                                <label for="password">Password <span class="required">*</span></label>
                                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                            </div>

                            <div class="form-container">
                                <label for="confirm_password">Konfirmasi Password <span class="required">*</span></label>
                                <input type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password" required>
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

<script>
    document.getElementById('regForm').addEventListener('submit', function (e) {
        let password = document.getElementById('password').value;
        let confirmPassword = document.getElementById('confirm_password').value;

        if (password !== confirmPassword) {
            e.preventDefault();
            alert('Password dan Konfirmasi Password harus sama!');
        }
    });
</script>

@endsection
