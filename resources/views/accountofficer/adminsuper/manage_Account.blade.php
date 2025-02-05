@extends('layout.admin.app')

@section('content')
<section class="features-area">
    <div class="container2 text-center">
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
                <a class="btn-custom" href="{{ route('add-account') }}">Tambah Akun</a>
            </div>
        </div>
    </div>

    <div class="container2">
        <div class="table-container">
            <table class="office-table">
                <thead>
                    <tr>
                        <th>Kode Kantor</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($accounts as $account)
                    <tr>
                        <td>{{ $account->officeCode }}</td>
                        <td>{{ $account->username }}</td>
                        <td>{{ $account->role }}</td>
                        <td>
                            <div class="btn-edit">
                                <a href="{{ route('edit-account', $account->id) }}">Edit</a>
                            </div>
                            <div>
                                <form action="{{ route('delete-account', $account->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
