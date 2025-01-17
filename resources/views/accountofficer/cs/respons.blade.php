<link rel="stylesheet" href="{{ asset('style.css') }}">

<div class="features-area">
    <div class="bg-popup">
        <div class="detail-data-container">
            
            <div class="detail-data-content">
            <span class="close" style="text-align: end; cursor: pointer;">&times;</span>

                <div class="detail-data-area">
                    <form action="#" method="POST" enctype="multipart/form-data" id="regForm">
                        @csrf
                        <label for="tanggapan">Tanggapan</label>
                        <div class="input-area">
                            <textarea name="tanggapan" id="tanggapan" placeholder="Tulis disini" style="height:160px;" required></textarea>
                            <span class="invalid-icon" style="display: none;">&#x2716;</span>
                        </div>
                    </form>
                </div>
            
                <div class="btn-respons-area">
                    <button type="submit" id="submitButton" class="btn-custom">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("submitButton").addEventListener("click", function (event) {
        event.preventDefault();  // Mencegah form untuk langsung dikirim

        const form = document.getElementById("regForm");
        const inputs = form.querySelectorAll("input[required], select[required], textarea[required]"); // Target semua input, select, dan textarea
        let isValid = true;

        // Periksa validasi untuk setiap elemen
        inputs.forEach(input => {
            const invalidIcon = input.nextElementSibling; // Mengambil ikon invalid

            if (!input.value.trim()) {
                input.classList.add("invalid");
                if (invalidIcon) invalidIcon.style.display = "inline-block";
                isValid = false;
            } else {
                input.classList.remove("invalid");
                if (invalidIcon) invalidIcon.style.display = "none";
            }
        });

        // Kirim form jika semua elemen valid
        if (isValid) {
            alert("Form berhasil dikirim!");
            form.submit();  // Kirim form jika valid
        } else {
            alert("Tanggapan tidak boleh kosong!");
        }
    });
</script>
