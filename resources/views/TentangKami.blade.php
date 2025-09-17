@extends('Layout.app')

@section('title', 'Tentang Kami')

@section('content')
    <div class="text-white py-12">

        <!-- PROFIL USAHA -->
        <div class="px-4 sm:px-8 md:px-16 grid grid-cols-1 lg:grid-cols-2 gap-10">
            <!-- Kiri: Profil Usaha -->
            <div>
                <span class="inline-block bg-white text-black font-bold text-sm sm:text-md px-4 py-1 rounded-full mb-4">
                    PROFIL USAHA
                </span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-6">
                    Kenali Lebih Dekat Tumpeng Bandung 1970
                </h2>
                <p class="text-gray-300 leading-relaxed mb-4 text-base sm:text-lg md:text-xl text-justify">
                    Tumpeng Bandung 1970 adalah unit usaha dari Tjihapit Catering yang berfokus
                    pada layanan katering tradisional dan modern. Berawal dari tradisi kuliner Sunda
                    sejak tahun 1970, kami terus berinovasi menghadirkan hidangan dengan cita rasa
                    autentik, tampilan menarik, serta pelayanan yang profesional.
                </p>
                <p class="text-gray-300 leading-relaxed mb-6 text-base sm:text-lg md:text-xl text-justify">
                    Kami percaya, makanan bukan hanya sekadar santapan, tetapi juga bagian dari
                    momen penting yang menghadirkan kebahagiaan dan kebersamaan.
                </p>

                <!-- Gambar bawah teks -->
                <div>
                    <img src="foto1.jpeg" alt="Menu 3" class="rounded-lg w-full h-48 sm:h-60 object-cover">
                </div>
            </div>

            <!-- Kanan: Gambar + Quote -->
            <div class="grid grid-cols-1 sm:grid-cols-[240px_1fr] gap-6">
                <!-- Kiri atas -->
                <div>
                    <img src="foto1.jpeg" alt="Menu 1" class="rounded-lg w-full h-[400px] object-cover mb-6 sm:mb-0">
                </div>

                <!-- Kanan (foto panjang) -->
                <div class="row-span-2">
                    <img src="foto2.jpeg" alt="Menu 2" class="rounded-lg w-full h-full object-cover">
                </div>

                <!-- Kiri bawah (quote box) -->
                <div class="bg-white text-gray-900 rounded-lg p-6 flex items-center">
                    <p class="italic text-base sm:text-lg md:text-xl">
                        “Tumpeng spesial hari ini selalu siap meriahkan harimu – pesan sekarang dan nikmati sensasi
                        rasanya!”
                    </p>
                </div>
            </div>

            <!-- VISI & MISI -->
            <div>
                <span class="inline-block bg-white text-black font-bold text-sm sm:text-md px-4 py-1 rounded-full mb-6">
                    VISI & MISI
                </span>
                <img src="foto1.jpeg" alt="Visi Misi" class="rounded-lg w-full max-w-3xl h-auto object-cover mx-auto">
            </div>

            <div>
                <h2 class="text-2xl sm:text-3xl font-bold mb-6">Visi & Misi</h2>
                <p class="text-gray-300 text-base sm:text-lg md:text-xl leading-relaxed mb-4 text-justify">
                    Visi kami adalah menyajikan hidangan yang berkualitas dengan pelayanan yang ramah dan bersahabat,
                    sehingga setiap pelanggan dapat merasakan pengalaman kuliner yang berkesan.
                </p>
                <p class="text-gray-300 text-base sm:text-lg md:text-xl leading-relaxed text-justify">
                    Dalam mewujudkan visi tersebut, kami berkomitmen untuk selalu memberikan layanan prima kepada seluruh
                    pelanggan, menghadirkan produk dengan cita rasa yang terjaga, serta mengutamakan kualitas, kebersihan,
                    dan kerapihan dalam setiap hidangan. Kami juga terus berinovasi untuk menghadirkan pilihan menu yang
                    sesuai dengan kebutuhan dan selera, demi kepuasan pelanggan yang menjadi prioritas utama kami.
                </p>
            </div>
        </div>

        <!-- SEJARAH SINGKAT -->
        <div class="px-4 sm:px-8 md:px-16 text-white pt-10">
            <span class="inline-block bg-white text-black font-bold text-sm sm:text-md px-4 py-1 rounded-full mb-6">
                SEJARAH SINGKAT
            </span>
            <h1 class="font-bold text-2xl sm:text-3xl md:text-4xl mb-6">
                Sejak Tahun 1970, hingga saat ini
            </h1>

            <p class="text-gray-300 text-base sm:text-lg md:text-xl leading-relaxed mb-6 text-justify">
                Perjalanan usaha ini bermula pada tahun 1970, ketika Ibu Hj. Nunung Juaeriah mendirikan sebuah warung makan
                sederhana
                bernama Lotek Tjihapit 1970 di Jl. Cihapit No. 8A, Bandung. Dengan modal semangat dan keterampilan memasak
                yang
                diwariskan turun-temurun, warung kecil tersebut hadir untuk memenuhi kebutuhan makan masyarakat sekitar
                dengan sajian
                khas Sunda, khususnya lotek dan rujak yang diracik dengan bumbu kacang buatan sendiri.
            </p>
            <p class="text-gray-300 text-base sm:text-lg md:text-xl leading-relaxed mb-6 text-justify">
                Pada masa-masa awal, Lotek Tjihapit 1970 hanya melayani kebutuhan makan harian pelanggan sekitar serta
                pesanan rantang
                keluarga. Namun, berkat cita rasa yang khas, kesegaran bahan, serta konsistensi dalam menjaga kualitas,
                warung ini
                perlahan mulai dikenal lebih luas. Banyak pelanggan yang kemudian menjadikan Lotek Tjihapit 1970 sebagai
                destinasi wajib ketika
                berkunjung ke kawasan Cihapit. Nama Lotek Tjihapit 1970 pun semakin melekat di hati masyarakat Bandung
                sebagai salah
                satu ikon kuliner tradisional Sunda.
            </p>
            <p class="text-gray-300 text-base sm:text-lg md:text-xl leading-relaxed mb-6 text-justify">
                Seiring berjalannya waktu dan meningkatnya permintaan, usaha ini tidak lagi hanya sebatas warung makan
                keluarga. Pada
                tahun 2015, usaha keluarga tersebut resmi dikembangkan menjadi badan usaha berbentuk CV dengan nama CV
                Tjihapit 8A, yang
                dipimpin oleh Ibu Lenggawati. Transformasi ini menandai langkah besar dalam pengelolaan usaha, karena dari
                sini lahirlah
                “Tjihapit Catering” sebagai branding utama perusahaan
            </p>
            <p class="text-gray-300 text-base sm:text-lg md:text-xl leading-relaxed mb-6 text-justify">
                Di bawah Tjihapit Catering, terdapat dua unit usaha yang berjalan secara beriringan: 1. Lotek Tjihapit 1970,
                yang tetap
                mempertahankan keaslian konsep warung makan Sunda dengan menu khas seperti lotek, rujak, dan aneka masakan
                Sunda. 2.
                Tumpeng Bandung 1970, yang dikembangkan untuk menjawab kebutuhan pasar akan layanan katering profesional,
                meliputi
                tumpeng, tumpeng mini, nasi box, nasi besek, bento, nasi liwet, hingga paket catering acara lainnya.
            </p>
            <p class="text-gray-300 text-base sm:text-lg md:text-xl leading-relaxed mb-6 text-justify">
                Dengan hadirnya Tumpeng Bandung 1970, cakupan layanan pun semakin luas. Tidak hanya melayani kebutuhan rumah
                tangga,
                tetapi juga dipercaya untuk menyediakan hidangan katering perkantoran, kampus, acara komunitas, hingga event
                berskala
                besar dengan jumlah pesanan mencapai ribuan porsi per hari. Kepercayaan ini tumbuh berkat reputasi panjang
                yang dibangun
                dari kualitas rasa, pelayanan yang ramah, serta penyajian hidangan yang rapi dan elegan
            </p>
            <p class="text-gray-300 text-base sm:text-lg md:text-xl leading-relaxed mb-6 text-justify">
                Kini, setelah lebih dari lima dekade perjalanan, CV Tjihapit 8A terus berkembang sebagai perusahaan kuliner
                yang
                menggabungkan tradisi dengan inovasi. Dengan manajemen yang solid, pengalaman yang matang, dan semangat
                untuk selalu
                beradaptasi dengan kebutuhan zaman, Tjihapit Catering berkomitmen menghadirkan layanan katering berkualitas
                dengan cita
                rasa autentik, higienis, dan dekorasi yang sesuai dengan kebutuhan setiap klien
            </p>
            <p class="text-gray-300 text-base sm:text-lg md:text-xl leading-relaxed mb-6 text-justify">
                Tidak hanya sekadar menjual makanan, tetapi juga berusaha menciptakan pengalaman kuliner yang menghadirkan
                kebahagiaan,
                kebersamaan, dan kehangatan di setiap sajian.
            </p>
        </div>

        <!-- CARA PEMESANAN -->
        <div class="px-4 sm:px-8 md:px-16 pt-4">
            <!-- Tag -->
            <span class="inline-block bg-white text-black font-bold text-sm sm:text-md px-4 py-1 rounded-full mb-6">
                CARA PEMESANAN
            </span>

            <!-- Title -->
            <h2 class="text-2xl sm:text-3xl font-bold mb-12 text-center md:text-left">
                Tata Cara Pemesanan di Tumpeng Bandung 1970
            </h2>

            <!-- Grid utama -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center max-w-xs">
                    <h3 class="text-2xl md:text-3xl font-bold mb-2">01</h3>
                    <p class="text-white text-base sm:text-lg leading-relaxed">
                        Buka website <br> Tumpeng Bandung 1970.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center max-w-xs">
                    <h3 class="text-2xl md:text-3xl font-bold mb-2">02</h3>
                    <p class="text-white text-base sm:text-lg leading-relaxed">
                        Lihat dan pilih menu <br> produk yang diinginkan.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center max-w-xs">
                    <h3 class="text-2xl md:text-3xl font-bold mb-2">03</h3>
                    <p class="text-white text-base sm:text-lg leading-relaxed">
                        Klik tombol Pesan via <br> WhatsApp di bawah produk.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="flex flex-col items-center text-center max-w-xs">
                    <h3 class="text-2xl md:text-3xl font-bold mb-2">04</h3>
                    <p class="text-white text-base sm:text-lg leading-relaxed">
                        Isi format pesanan <br> (jenis tumpeng, jumlah porsi, tanggal & alamat).
                    </p>
                </div>

                <!-- Step 5-6-7 dibungkus biar center -->
                <div
                    class="col-span-1 sm:col-span-2 lg:col-span-4 grid grid-cols-1 sm:grid-cols-2 lg:flex lg:justify-center gap-8">
                    <!-- Step 5 -->
                    <div class="flex flex-col items-center text-center max-w-xs">
                        <h3 class="text-2xl md:text-3xl font-bold mb-2">05</h3>
                        <p class="text-white text-base sm:text-lg leading-relaxed">
                            Tunggu balasan & <br> konfirmasi ketersediaan dari admin.
                        </p>
                    </div>

                    <!-- Step 6 -->
                    <div class="flex flex-col items-center text-center max-w-xs">
                        <h3 class="text-2xl md:text-3xl font-bold mb-2">06</h3>
                        <p class="text-white text-base sm:text-lg leading-relaxed">
                            Lakukan pembayaran <br> sesuai instruksi dari admin.
                        </p>
                    </div>

                    <!-- Step 7 -->
                    <div class="flex flex-col items-center text-center max-w-xs">
                        <h3 class="text-2xl md:text-3xl font-bold mb-2">07</h3>
                        <p class="text-white text-base sm:text-lg leading-relaxed">
                            Pesanan diproses & <br> siap dikirim sesuai waktu yang disepakati.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection