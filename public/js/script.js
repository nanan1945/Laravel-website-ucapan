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
