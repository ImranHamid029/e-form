<link rel="stylesheet" href="{{ asset('style.css') }}">

    <div class="bg-popup" id="responsModal2">
        <div class="detail-data-container">
            
            <div class="detail-data-content">
                <span class="close" style="text-align: end;">&times;</span>

                <form action="{{ route('helpdesk.storeResponse', $complaint->id) }}" method="POST" enctype="multipart/form-data" id="regForm">
                    @csrf
                    <div class="detail-data-area">
                        <label for="response">Tanggapan</label>
                        <div class="input-area">
                            <textarea name="response" id="response" placeholder="Tulis disini" style="height:160px;" required></textarea>
                            <span class="invalid-icon" style="display: none; color: red;">&#x2716; Harap isi tanggapan</span>
                        </div>
                    </div>
                
                    <div class="btn-respons-area">
                        <button type="submit" id="submitButton" class="btn-custom">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




