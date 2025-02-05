<link rel="stylesheet" href="{{ asset('style.css') }}">

<div class="features-area">
    <div class="bg-popup">
        <div class="detail-data-container">
            
            <div class="detail-data-content">
                <span class="close" style="text-align: end; cursor: pointer;">&times;</span>

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
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("regForm");
    const textarea = document.getElementById("response");
    const submitButton = document.getElementById("submitButton");
    const errorMessage = document.querySelector(".invalid-icon");

    submitButton.addEventListener("click", async function (event) {
        event.preventDefault(); // Prevent form submission

        let isValid = true;

        // Validasi input
        if (!textarea.value.trim()) {
            textarea.classList.add("invalid");
            errorMessage.style.display = "inline";
            isValid = false;
        } else {
            textarea.classList.remove("invalid");
            errorMessage.style.display = "none";
        }

        if (isValid) {
            try {
                const formData = new FormData(form);

                let response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                });

                let data = await response.json();

                if (data.success) {
                    alert("Response berhasil dikirim!");
                    window.location.href = "{{ route('helpdesk.dashboard') }}";
                } else {
                    alert("Terjadi kesalahan. Coba lagi.");
                }
            } catch (error) {
                console.error("Error:", error);
                alert("Terjadi kesalahan. Silakan coba lagi.");
            }
        }
    });
});
</script>

<!-- <style>
    .invalid {
        border: 1px solid red;
    }
</style> -->
