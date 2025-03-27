<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untukmu, Teman Spesial</title>
    <style>
        body {
    background: linear-gradient(120deg, #2c3e50, #4ca1af);
    color: white;
    font-family: 'Arial', sans-serif;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh; /* Ubah height jadi min-height */
    margin: 0;
    padding: 20px;
    overflow-x: hidden; /* Hanya sembunyikan scroll horizontal */
}

.container {
    max-width: 600px;
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    animation: fadeIn 2s ease-in-out;
    position: relative;
    z-index: 1;
    overflow-y: visible; /* Pastikan konten tidak terpotong */
}

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        p {
            font-size: 18px;
            margin-bottom: 15px;
            white-space: normal; /* Ubah dari nowrap ke normal */
            word-wrap: break-word; /* Agar kata yang panjang tidak keluar dari container */
            overflow: hidden;
            border-right: 2px solid white;
            display: inline-block;
        }

        .highlight {
            font-weight: bold;
            color: #FFD700;
        }
        .stars {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            pointer-events: none;
        }
        .star {
            position: absolute;
            width: 3px;
            height: 3px;
            background: white;
            opacity: 0.8;
            animation: falling 3s linear infinite;
        }
        @keyframes falling {
            0% { transform: translateY(-10px) translateX(0); opacity: 1; }
            100% { transform: translateY(100vh) translateX(20px); opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="stars"></div>
    <div class="container">
        <h2 id="title">🌙 Buat Kamu, Teman Spesial 🌙</h2>
        <p class="typing" data-text="Hey, kamu yang lagi baca ini! Iya, kamu! 🙃"></p>
        <p class="typing" data-text="Gimana harimu? Semoga lebih lancar dari sinyal WiFi tetangga. 😆"></p>
        <p class="typing" data-text="Aku cuma mau bilang… Kamu itu unik! Seunik orang yang makan nasi pake garpu. 🤔"></p>
        <p class="typing" data-text="Kadang kita ngerasa biasa aja, tapi nyatanya..."></p>
        <p class="typing" data-text="Kita itu kayak charger HP, kalau nggak ada, orang-orang langsung panik.⚡"></p>
        <p class="typing" data-text="Jadi kalau ada yang bilang kamu nggak spesial, bilang aja: 'Loe kira gua Indomie? Semua orang suka?' 🤣"></p>
        <p class="typing highlight" data-text="Kamu tahu nggak? Kadang hidup ini kayak langit mendung ☁️. Kelabu, berat, dan bikin sesak. Tapi entah kenapa, selalu ada orang-orang yang jadi cahaya kecil di tengah gelap itu ✨. Dan buatku, kamu adalah salah satunya."></p>
        <p class="typing highlight" data-text="Ada banyak orang yang datang dan pergi 🚶‍♂️🚶‍♀️, tapi nggak semuanya bisa ninggalin jejak. Tapi kamu? Kamu adalah salah satu yang nggak bisa kulupakan, bukan karena aku nggak mau, tapi karena kamu terlalu berarti buat diabaikan. 💖"></p>
        <p class="typing highlight" data-text="Aku nggak tahu bagaimana cara dunia bekerja, tapi aku bersyukur bisa kenal kamu. Kamu tuh kayak rumah 🏡—tenang, nyaman, dan selalu bikin aku ngerasa bahwa semuanya akan baik-baik aja. 😊"></p>
        <p class="typing highlight" data-text="Kita mungkin nggak selalu ada di setiap cerita satu sama lain 📖. Tapi di setiap perjalanan, aku tahu ada bagian kecil dari kamu yang ikut bersamaku. Entah itu dalam bentuk kenangan, tawa, atau sekadar kata-kata yang dulu pernah kamu ucapin. 💭"></p>
        <p class="typing highlight" data-text="Kamu mungkin nggak sadar, tapi kehadiranmu itu berarti. Bukan cuma buat aku, tapi juga buat banyak orang di sekitarmu. Jadi kalau suatu hari kamu merasa nggak cukup baik atau nggak cukup berharga, tolong ingat ini: 'kamu adalah seseorang yang istimewa.' 🌟"></p>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let paragraphs = document.querySelectorAll(".typing");
            let delay = 1000;
            function typeEffect(element, text, speed, callback) {
    let i = 0;
    function typing() {
        if (i < text.length) {
            element.textContent += text.charAt(i);
            i++;
            setTimeout(typing, speed);
        } else {
            element.style.borderRight = "none";
            element.style.whiteSpace = "normal";
            element.style.wordWrap = "break-word"; // Tambahkan ini
            if (callback) callback();
        }
    }
    typing();
}

            function startTyping(index) {
                if (index < paragraphs.length) {
                    let p = paragraphs[index];
                    let text = p.getAttribute("data-text");
                    typeEffect(p, text, 50, () => {
                        setTimeout(() => startTyping(index + 1), delay);
                    });
                }
            }
            startTyping(0);

            function createStars() {
                const starsContainer = document.querySelector(".stars");
                for (let i = 0; i < 50; i++) {
                    let star = document.createElement("div");
                    star.className = "star";
                    star.style.top = Math.random() * -100 + "px";
                    star.style.left = Math.random() * 100 + "%";
                    star.style.animationDuration = Math.random() * 2 + 3 + "s";
                    starsContainer.appendChild(star);
                }
            }
            createStars();
        });
    </script>
</body>
</html>
