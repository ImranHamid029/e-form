<form action="{{ route('test.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="pl-1 mt-2">
                <strong>Nama nasabah:</strong>
            </div>
            <div class="pl-1 mt-2">
                <input type="text" name="nama" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
