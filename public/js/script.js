document.getElementById('ucapanForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('/ucapan', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('popupMessage').textContent = data.message;
        document.getElementById('popup').style.display = 'block';
    });
});

function closePopup() {
    document.getElementById('popup').style.display = 'none';
}

// ... (kode sebelumnya)

function typeWriter(element, text, i = 0) {
    if (i < text.length) {
        element.innerHTML += text.charAt(i);
        i++;
        setTimeout(() => typeWriter(element, text, i), 50); // Kecepatan mengetik (50ms)
    }
}

// Contoh penggunaan:
// typeWriter(document.getElementById('pesanPenerima'), 'Ucapan dramatis untuk Nando...');

// Event saat submit form
document.getElementById('ucapanForm').addEventListener('submit', function (event) {
    // Validasi input
    const nama = document.getElementById('nama').value.trim();
    const tanggalLahir = document.getElementById('tanggal_lahir').value.trim();
    const pesan = document.getElementById('pesan').value.trim();

    if (!nama || !tanggalLahir || !pesan) {
        event.preventDefault();
        alert("Lengkapi semua data terlebih dahulu!");
        return;
    }

    localStorage.setItem('formSubmitted', true); // Tandai sudah submit
});

// Event saat klik tombol "Sudah nih"
document.querySelector('.button-container a').addEventListener('click', function (event) {
    // Cek langsung isi input form
    const nama = document.getElementById('nama').value.trim();
    const tanggalLahir = document.getElementById('tanggal_lahir').value.trim();
    const pesan = document.getElementById('pesan').value.trim();

    if (!localStorage.getItem('formSubmitted') || !nama || !tanggalLahir || !pesan) {
        event.preventDefault();
        alert("Isi form terlebih dahulu sebelum lanjut!");
    }
});

