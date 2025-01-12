@extends('layouts.master')
@section('content')    
<main class="container">
    <div class="sidebar">
        <div class="dptitle">
            <h1 style="font-size: 54px; font-weight:800; color:#7D8F69; letter-spacing: 0.15em;">DEPRESSION</h1>
        </div>
        <iframe width="450" height="255" src="https://www.youtube.com/embed/wr2IqS8bsS4" alt="Depression Video"></iframe>
    </div>
    <div class="container-content">
            <div class="content">
            <h1 style="font-weight: 700; font-size: 32px;">DEPRESSION<br></h1>
            <p style="font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;"><br>&emsp;&emsp;Depresi adalah gangguan suasana hati (mood) yang ditandai dengan perasaan sedih yang mendalam dan kehilangan minat terhadap hal-hal yang disukai. Seseorang dinyatakan mengalami depresi jika sudah 2 minggu merasa sedih, putus harapan, atau tidak berharga.<br>&emsp;&emsp;Depresi yang dibiarkan terus berlanjut dan tidak mendapatkan penanganan dapat menyebabkan terjadinya penurunan produktifitas kerja, gangguan hubungan sosial, hingga munculnya keinginan untuk bunuh diri.<br>&emsp;&emsp;Depresi bisa menyerang siapa saja, termasuk wanita dan pria. Depresi pada wanita sering dikaitkan dengan perubahan hormonal, termasuk menstruasi, kehamilan, setelah melahirkan, atau menopause. Namun, sampai saat ini belum ada penelitian yang menemukan penyebab lebih seringnya depresi terjadi pada wanita.</p>
            
        </div>

        <div class="content">
            <h1>
                <button class="tx" onclick="toggle1()">GEJALA</button>
                <button class="icon" onclick="toggle1()">
                    <i class="bi bi-caret-down-fill"></i>
                </button>
            </h1>
            <div id="dd1" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;">
                <br>&emsp;&emsp;Ketika seseorang mengalami depresi, maka ini sangat mempengaruhi orang dengan cara yang berbeda, termasuk pikiran, tubuh, dan perilaku mereka. Depresi yang masih tahap ringan, sebagian besar orang tak merasakan gejalanya.<br>&emsp;&emsp;Lalu, ketika semakin memuncak akan timbul gangguan suasana hati yang sulit dihindari.<br>Ada beberapa gejala depresi yang paling umum ditemukan antara lain:
                <br> - Merasa sedih, murung, suasana hati kosong, putus asa, dan perasaan gelisah.
                <br> - Mudah kehilangan energi dan tenaga, perasaan letih, lemah, lesu, kelelahan.
                <br> - Gangguan tidur (bisa berlebihan, bisa juga kurang dari lama tidur biasanya).
                <br> - Kehilangan minat dan kegairahan terhadap berbagai aktivitas yang sebelumnya disukai.
                <br> - Merasa bersalah, pesimis, dan tidak berguna
                Tidak mampu berkonsentrasi.
                <br> - Muncul pikiran-pikiran untuk menyakiti diri sendiri hingga bunuh diri.
                <br>Gejala depresi pada anak-anak adalah kehilangan minat bermain dan bergaul dengan teman-temannya sehingga mereka cenderung suka menyendiri. Depresi pada anak juga menyebabkan ia lebih mudah marah, menangis, dan menjadi rewel.
                
            </div>
        </div>

        <div class="content">
            <h1>
                <button class="tx" onclick="toggle2()">PENYEBAB</button>
                <button class="icon" onclick="toggle2()">
                    <i class="bi bi-caret-down-fill"></i>
                </button>
            </h1>
            <div id="dd2" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;">
                <br>&emsp;&emsp;Sebenarnya, tidak ada penyebab utama dan tunggal mengapa seseorang bisa mengalami gangguan depresi. Namun, ada pencetus atau faktor yang membuat seseorang bisa mengalaminya.<br>Berikut ini sejumlah faktor yang memicu munculnya depresi:
                <br> - Riwayat keluarga
                <br> - Masalah kesehatan fisik
                <br> - Pengalaman dan trauma masa kecil
                <br> - Peristiwa kehidupan yang penuh tekanan
                <br> - Berakhirnya hubungan, ditinggal oleh orang dicintai, masalah keuangan, dan sebagainya
                <br> - Menderita penyakit kronis atau serius
                <br> - Ketergantungan jenis obat tertentu
                <br> - Diintimidasi, bullying atau diseran
            </div>
        </div>

        <div class="content">
            <h1>
                <button class="tx" onclick="toggle3()">PENANGANAN</button>
                <button class="icon" onclick="toggle3()">
                    <i class="bi bi-caret-down-fill"></i>
                </button>
            </h1>
            <div id="dd3" style="display: none; font-weight: 400; font-size: 16px; text-align: justify; line-height: 28px;">
                <br> - Melakukan pola hidup teratur dengan istirahat cukup (6-8 jam sehari) dapat menurunkan tingkat depresi.<br> - Pola makan seimbang agar stamina tubuh terjaga.<br> - Olahraga dan rekreasi adalah salah satu cara untuk mencegah terjadinya depresi.
                <br> - Sikap hidup yang positif, dengan berpikir rasional dan objektif akan mencegah gejala depresi.
                <br> - Memiliki planning yang rasional dalam hidup, dan dapat menerima kondisi yang tak mungkin dapat diubah.
                <br> - Memiliki kerabat atau sahabat yang dapat sewaktu waktu saling berbagi dan saling membantu.
                <br> - Memiliki me time alias waktu untuk diri sendiri, di antara kesibukan yang padat.
                <br> - Lakukan kegiatan seperti spa, meditasi, yoga, dan relaksasi.
                <br> - Mengembangkan kehidupan spiritual

            </div>
        </div>
    </div>
</main>
@endsection
