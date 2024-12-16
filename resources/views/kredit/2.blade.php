<div>
    <h3>Keuntungan</h3>
    <ul>
        <li>Coffee</li>
        <li>Tea</li>
    </ul>
</div>
<div>
    <h3>Syarat & Ketentuan</h3>
    <ol>
        <li>Keju</li>
        <li>Coklat</li>
    <oul>
</div>
<form action="/form/{{$nomor}}" onsubmit="return checkForm(this);">
        <label class='container'>Saya setuju dengan Syarat & Ketentuan di atas
            <input id="field_terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" type="checkbox" required name="terms">
            <span class="checkmark"></span>
            <p><button type="submit">Isi Form</button></p>
        </label>
        <script>
            document.getElementById("field_terms").setCustomValidity("pastikan anda setuju dengan Syarat & Ketentuan");
        </script>
    </form>
<div>
    <h3>Simulasi</h3>
</div>