<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Metadata dokumen -->
  <meta charset="utf-8" />
  <title>For You</title>
  <meta name="description" content="Happy birthday" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Favicon -->
  <link rel="icon" type="image" href="il.png" />
  <!-- Stylesheet Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Stylesheet Custom -->
  <link rel="stylesheet" href="style.css" />
  <!-- Library JavaScript -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- Library TypeIt -->
  <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>

  <!-- CSS Custom -->
  <style>
    /* Definisi gaya CSS */

    /* CSS Anda */
    @media screen and (max-width: 768px) {

      /* Menyesuaikan tata letak untuk layar kecil */
      body {
        font-size: 12px;
        /* Mengurangi ukuran font untuk layar kecil */
      }

      .swiper-slide {
        margin-top: -50px;
        /* Menyesuaikan margin atas untuk slide */
      }
    }

    @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Caveat&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Inter&family=Itim&display=swap");

    :root {
      --poppins: "Poppins", sans-serif;
      --nunito: "Nunito Sans", sans-serif;
      --caveat: "Caveat", cursive;
      --quicksand: "Quicksand", sans-serif;
      --itim: "Itim", cursive;
      --inter: "Inter", sans-serif;
    }

    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #000;
      font-family: "Itim", cursive;
      font-size: 14px;
      color: #fff;
      text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
      margin: 0;
      padding: 0;
    }

    #bodyblur {
      opacity: 0.5;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.3);
      transition: all 1s ease;
    }

    #wallpaper {
      animation: jj 10s infinite;
      width: 100%;
      height: 100%;
      transform: scale(1);
      transition: all 1.3s ease;
    }

    #wallpaper2,
    #wallpaper3,
    #wallpaper4 {
      display: none;
    }

    @keyframes jj {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.2);
      }

      100% {
        transform: scale(1);
      }
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      /*background: #fff;*/
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-top: -100px;
    }

    p {
      margin-left: 60px;
      margin-right: 60px;
      text-align: left;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper-pagination {
      margin-bottom: 20vh;
    }

    .swiper-pagination-bullet-active {
      background-color: #fff !important;
      opacity: 1 !important;
    }

    .swiper-pagination-bullet {
      background-color: rgba(158, 158, 158, 1) !important;
    }

    .swiper-button-next,
    .swiper-button-prev {
      opacity: 0;
      cursor: none;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
      opacity: 0;
    }

    .swiper-button-prev {
      display: none;
    }

    .sembunyi {
      display: none !important;
    }

    .stiker {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 90px;
      height: 90px;
      margin-left: auto;
      margin-right: auto;
      box-shadow: 0 4px 30px rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      background: rgba(255, 255, 255, 0.7);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      padding: 10px;
      margin-bottom: 20px;
      transition: all 0.75s ease;
    }

    .stiker img {
      width: 85px;
      height: 85px;
    }

    b.merah {
      color: rgb(255, 0, 153);
    }

    b.kuning {
      color: yellow;
    }

    b.putih {
      text-shadow: none;
      padding-left: 8px;
      padding-right: 8px;
      padding-top: 1px;
      padding-bottom: 2px;
      background-color: white;
      border-radius: 12px;
    }

    span.pink {
      border-bottom: 2px solid rgb(223, 28, 152);
    }

    span.gariskuning {
      border-bottom: 2px solid yellow;
    }

    p {
      color: white;
      font-size: 15px;
      line-height: 1.5em;
    }

    .scale0 {
      opacity: 0;
      transform: scale(0);
      transition: all 0.9s ease;
    }

    .scale1 {
      opacity: 1;
      transform: scale(1);
      transition: all 0.9s ease;
    }

    svg {
      vertical-align: middle;
      width: 22px;
      height: 22px;
      fill: #fff;
    }

    .heart-icon {
      z-index: 100;
      width: 30px;
      height: 30px;
      position: fixed;
      animation: heartMove linear 1;
      top: -10vh;
    }

    @keyframes heartMove {
      0% {
        transform: translateY(-10vh);
      }

      100% {
        transform: translateY(100vh);
      }
    }

    svg.line {
      fill: none;
      stroke: #fff;
      stroke-width: 2;
      animation: moving 0.7s linear infinite alternate;
    }

    .spin {
      animation: spin 3s linear infinite alternate;
    }

    @keyframes spin {
      from {
        transform: rotate(20deg);
      }

      to {
        transform: rotate(-20deg);
      }
    }

    @keyframes moving {
      from {
        transform: translateY(0);
      }

      to {
        transform: translateY(3px);
      }
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #000;
      z-index: 100;
    }

    .loading-message {
      font-size: 13px;
      text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.8);
      color: white;
      text-align: center;
    }

    .blocklove {
      display: none;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .lovein {
      background: #fff;
      color: #da1e82;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      padding: 10px;
      font-size: 30px;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .lovein:hover {
      transform: scale(0.9);
      color: #ff0900;
    }

    .lovein svg {
      stroke: #6a00ff;
      width: 30px;
      height: 30px;
    }

    .blocktext {
      position: relative;
      width: 100%;
      height: 400px;
      margin-top: 100px;
      overflow: auto;
    }

    #Tombol {
      position: relative;
      margin-top: 20px;
      margin-left: auto;
      margin-right: auto;
      display: flex;
      align-items: center;
      justify-content: center;
      list-style: none;
      transition: all 1s ease;
    }

    #Tombol a {
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      margin: 0;
      margin: 10px;
      transition: all 0.2s ease;
      padding: 10px;
      outline: 0;
      border: 1px solid white;
      border-radius: 12px;
      line-height: 15px;
      background: rgba(0, 0, 0, 0.3);
      color: white;
      font-size: 13px;
      font-weight: 700;
      white-space: nowrap;
      overflow: hidden;
      box-shadow: rgba(255, 255, 255, 0.15) 0px 7px 29px 0px;
      z-index: 1;
    }

    footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    text-align: center;
}

footer a {
    color: rgba(255, 255, 255, 0.875); /* Warna putih dengan transparansi */
    text-decoration: none; /* Menghapus garis bawah */
}
    /* ... */
  </style>
</head>

<body>
  <!-- Audio latar -->
  <audio src="mhbd.mp3" id="linkmp3" class="sembunyi"></audio>
  <!-- Overlay loading -->
  <div class="overlay">
    <div class="loading-message">Hai kamu!<br />Tunggu dulu ya..</div>
    <!-- Tombol Love -->
    <div id="loveIn" class="blocklove">
      <!-- Love icon -->
      <a href="##" target="_blank" class="lovein">
        <svg class="line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <g transform="translate(2.550170, 3.550158)">
            <path
              d="M0.371729633,8.89614246 C-0.701270367,5.54614246 0.553729633,1.38114246 4.07072963,0.249142462 C5.92072963,-0.347857538 8.20372963,0.150142462 9.50072963,1.93914246 C10.7237296,0.0841424625 13.0727296,-0.343857538 14.9207296,0.249142462 C18.4367296,1.38114246 19.6987296,5.54614246 18.6267296,8.89614246 C16.9567296,14.2061425 11.1297296,16.9721425 9.50072963,16.9721425 C7.87272963,16.9721425 2.09772963,14.2681425 0.371729633,8.89614246 Z">
            </path>
            <path d="M13.23843,4.013842 C14.44543,4.137842 15.20043,5.094842 15.15543,6.435842"></path>
          </g>
        </svg>
      </a>
      <!-- Pesan Sentuh Love -->
      <p id="ket">Tap LOVE</p>
    </div>
  </div>

  <!-- Efek blur untuk latar belakang -->
  <div id="bodyblur">
    <img src="bg.jpg" id="wallpaper" />
  </div>

  <!-- Slider Swiper -->
  <div class="swiper mySwiper">
    
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        <!-- Stiker dan teks -->
        <div id="stiker1" class="scale0 stiker">
          <img src="glg.gif" />
        </div>
        <h1 id="teks1" class="scale0 itim" style="font-size: 20px">
          this is for youuu 🫶<br />
          ⇒ ⇒ ⇒
        </h1>
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide">
        <!-- Stiker dan teks -->
        <div id="stiker2" class="scale0 stiker">
          <img src="emh.gif" />
        </div>
        <h1 id="teks2" class="scale0 itim" style="font-size: 19px">
          ciee, whose birthday is today 💞<br /><br /><span style="font-size: 16px; font-weight: 400">swipe & read to the end!</span><br /><br />
            ⇒ ⇒ ⇒
        </h1>
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide">
        <!-- Stiker dan teks -->
        <div id="stiker3" class="scale0 stiker sembunyi">
          <img src="kdp2.gif" />
        </div>
        <!-- Konten teks -->
        <div id="scroll-container" class="blocktext">
          <p id="teks3" class="itim" style="font-size: 16px; margin-left: 40px">
            <span class="pink">Hai</span> kiara clarinta achysyal
             <br><br /><b class="putih merah"><i>happy birthday yaaa 💐</i></b><br />semogaa
            dengan bertambahnya usiamuuu bisaa menjadiii
            pribadi yang lebih baikk, panjangg umurr, sehat selaluu, berbakti
            kepada orang tuaaa, serta segala doa dan cita citamuuu dikabulkann
            dan segala urusan dipermudahkannn, <i>aminnn</i>.<br /><br />udaa
            semakin dewasaaa sajaa yaa kamu inii 😋 jangan pernah takut gagal
            yaaa, aku disiniii bakalan ngedukung kamuuuu selalu, jadiilahh
            anak yang baik, jangann lupa bersyukurrr,<br /><br />maaf
            ya kalo aku blum bisa jadi apa yang kamu mauuu, dan maaf bgt kalo
            selama ini aku sering buat masalah, maaf ya 🫠 aku selalu berdoaa
            agar kamu tetap berada dalam lindungan-Nya, intinyaa tetep menjadi
            pribadii yang lebih baikk.<br /><br />sekalilagii happy birthday
            kiaraa,
            <i>remain a good person whenever and wherever
            
            maaf yaa cuma bisa ngasi html sama hadiah kecil itu doangg </i> 🥳💐🫶✨
          </p>
        </div>
      </div>
     
    </div>
   
    <!-- Paginasi Swiper -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Library JavaScript Swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Skrip JavaScript -->
  <script>
    // Inisialisasi variabel dan konstanta
    var teksSekarang = 1;
    const body = document.querySelector("body");
    audio = new Audio('' + linkmp3.src); // Membuat objek audio

    // Inisialisasi Swiper
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: false,
      },
      on: {
        // Event listener untuk perubahan slide
        slideChange: function () {
          var currentIndex = swiper.activeIndex;

          // Menambahkan efek animasi ketika slide berubah
          teksSekarang++;
          teksScale = document.querySelector('#teks' + teksSekarang);
          stikerScale = document.querySelector('#stiker' + teksSekarang);
          setTimeout(function () {
            teksScale.classList.add("scale1");
            stikerScale.classList.add("scale1");

            // Memanggil fungsi untuk animasi khusus pada slide tertentu
            if (teksSekarang == 3) { katanimasi() }
          }, 50);
        },
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    // Mendapatkan teks dari elemen HTML dan mengosongkan konten teks tersebut
    var teks = teks3.innerHTML;
    teks3.innerHTML = "";

    // Fungsi untuk animasi khusus pada slide tertentu
    function katanimasi() {
      new TypeIt("#teks3", {
        strings: ["" + teks],
        startDelay: 250,
        speed: 50,
        cursor: true,
        afterComplete: function () {
          clearInterval(scrollInterval);
          teks3.innerHTML = teks;
          setInterval(berjatuhan, 200); // Memulai animasi jatuh hati
        },
      }).go();
    }

    // Event listener saat halaman dimuat
    window.addEventListener("load", (event) => {
      window.scrollTo(0, 0);
      var overlay = document.querySelector(".loading-message");
      overlay.style.display = "none"; // Menyembunyikan overlay loading
      var tomlv = document.querySelector(".blocklove");
      tomlv.style.display = "flex"; // Menampilkan tombol love
    });

    var sudahKlik = true; // Variabel untuk menentukan apakah tombol sudah diklik
    document.getElementById('loveIn').innerHTML = '<style>.lovein svg{animation:none;stroke:#ff0000;stroke-width:1.3;fill:none;width:35px;height:35px}</style><label class="lovein"><svg class="line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g transform="translate(2.550170, 3.550158)"><path d="M0.371729633,8.89614246 C-0.701270367,5.54614246 0.553729633,1.38114246 4.07072963,0.249142462 C5.92072963,-0.347857538 8.20372963,0.150142462 9.50072963,1.93914246 C10.7237296,0.0841424625 13.0727296,-0.343857538 14.9207296,0.249142462 C18.4367296,1.38114246 19.6987296,5.54614246 18.6267296,8.89614246 C16.9567296,14.2061425 11.1297296,16.9721425 9.50072963,16.9721425 C7.87272963,16.9721425 2.09772963,14.2681425 0.371729633,8.89614246 Z"></path><path d="M13.23843,4.013842 C14.44543,4.137842 15.20043,5.094842 15.15543,6.435842"></path></g></svg></label><p id="ket">Tap Love</p>';

    // Event listener saat tombol love diklik
    document.getElementById("loveIn").onclick = function () {
      if (sudahKlik) {
        audio.play(); // Memainkan audio
        document.querySelector(".overlay").style.display = "none"; // Menyembunyikan overlay
        stiker1.classList.add("scale1");
        teks1.classList.add("scale1"); // Menambahkan efek animasi pada stiker dan teks pertama
      } else {
        sudahKlik = true; // Tandai bahwa tombol sudah diklik
        document.getElementById('loveIn').innerHTML = '<style>.lovein svg{animation:none;stroke:#ff0000;stroke-width:1.3;fill:none;width:35px;height:35px}</style><label class="lovein"><svg class="line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g transform="translate(2.550170, 3.550158)"><path d="M0.371729633,8.89614246 C-0.701270367,5.54614246 0.553729633,1.38114246 4.07072963,0.249142462 C5.92072963,-0.347857538 8.20372963,0.150142462 9.50072963,1.93914246 C10.7237296,0.0841424625 13.0727296,-0.343857538 14.9207296,0.249142462 C18.4367296,1.38114246 19.6987296,5.54614246 18.6267296,8.89614246 C16.9567296,14.2061425 11.1297296,16.9721425 9.50072963,16.9721425 C7.87272963,16.9721425 2.09772963,14.2681425 0.371729633,8.89614246 Z"></path><path d="M13.23843,4.013842 C14.44543,4.137842 15.20043,5.094842 15.15543,6.435842"></path></g></svg></label><p id="ket">Tap Love</p>';
      }
    }

    // Fungsi untuk membuat animasi jatuh hati
    function berjatuhan() {
      const heart = document.createElement("div");
      heart.innerHTML = "<svg class='line spin' style='opacity:.5;z-index:100' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><g transform='translate(2.550170, 3.550158)'><path d='M0.371729633,8.89614246 C-0.701270367,5.54614246 0.553729633,1.38114246 4.07072963,0.249142462 C5.92072963,-0.347857538 8.20372963,0.150142462 9.50072963,1.93914246 C10.7237296,0.0841424625 13.0727296,-0.343857538 14.9207296,0.249142462 C18.4367296,1.38114246 19.6987296,5.54614246 18.6267296,8.89614246 C16.9567296,14.2061425 11.1297296,16.9721425 9.50072963,16.9721425 C7.87272963,16.9721425 2.09772963,14.2681425 0.371729633,8.89614246 Z'></path><path d='M13.23843,4.013842 C14.44543,4.137842 15.20043,5.094842 15.15543,6.435842'></path></g></svg>";
      heart.className = "heart-icon";
      heart.style.left = (Math.random() * 95) + "vw"; // Menentukan posisi horizontal
      heart.style.animationDuration = (Math.random() * 3) + 2 + "s"; // Menentukan durasi animasi
      document.body.appendChild(heart); // Menambahkan hati ke dalam body
    }

    // Menghapus hati yang sudah jatuh jika jumlahnya lebih dari 100
    setInterval(function () {
      var heartArr = document.querySelectorAll(".heart-icon");
      if (heartArr.length > 100) {
        heartArr[0].remove();
      }
    }, 100);

    // Fungsi untuk mengatur scroll otomatis pada halaman
    const scrollContainer = document.getElementById("scroll-container");
    const textContainer = document.getElementById("textsec2");

    function autoScroll() {
      scrollContainer.scrollTop += 10; // Menggeser posisi scroll
    }

    const scrollInterval = setInterval(autoScroll, 50); // Menjalankan scroll otomatis setiap 50ms
  </script>

<footer>
  <a href="https://himang.my.id">Himang.my.id</a>
</footer>
</body>

</html>