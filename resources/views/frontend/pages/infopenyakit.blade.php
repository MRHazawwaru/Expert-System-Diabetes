@extends('frontend.index')

@section('content-wrapper')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <b>Informasi Penyakit</b>
        </div>
        <div class="card-body">
            <div class="container-fluid row">
                <div class="col-sm-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://p2ptm.kemkes.go.id/uploads//TmQwU05BQS9YYlJpanB5VnNtRldFUT09/1_Desember_2021_07.png"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold" style="color: #000;">Diabetes Mellitus Tipe 1</h5>
                                    <p class="card-text text-align-left" style="color: #000;">
                                        kondisi autoimun di mana sistem kekebalan tubuh menyerang dan menghancurkan
                                        sel-sel beta di pankreas yang memproduksi insulin. Akibatnya, tubuh tidak dapat
                                        memproduksi insulin yang cukup untuk mengatur kadar gula darah. Diabetes tipe 1
                                        biasanya didiagnosis pada anak-anak dan remaja, tetapi dapat terjadi pada usia
                                        berapa pun. Penderitanya memerlukan terapi insulin seumur hidup dan pemantauan
                                        gula darah secara teratur.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://pbs.twimg.com/media/EF14sGdXUAEtdUo?format=jpg&name=4096x4096"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold" style="color: #000;">Diabetes Mellitus Tipe 2</h5>
                                    <p class="card-text text-align-left" style="color: #000;">
                                        bentuk diabetes yang lebih umum dan sering kali terkait dengan faktor gaya
                                        hidup, seperti obesitas, kurangnya aktivitas fisik, dan pola makan yang tidak
                                        sehat. Pada tipe 2, tubuh masih memproduksi insulin, tetapi tidak menggunakannya
                                        dengan efektif (resistensi insulin). Seiring waktu, produksi insulin juga dapat
                                        menurun. Tipe ini biasanya terjadi pada orang dewasa, meski kini semakin banyak
                                        remaja dan anak-anak yang mengalaminya.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://p2ptm.kemkes.go.id/uploads//TmQwU05BQS9YYlJpanB5VnNtRldFUT09/29_November_15.png"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold" style="color: #000;">Diabetes Gestasional</h5>
                                    <p class="card-text text-align-left" style="color: #000;">
                                        kondisi di mana wanita mengalami peningkatan kadar gula darah selama kehamilan,
                                        biasanya terjadi pada trimester kedua atau ketiga. Hal ini terjadi karena tubuh
                                        tidak dapat memproduksi cukup insulin untuk mengatasi kebutuhan tambahan selama
                                        kehamilan. Diabetes gestasional sering kali tidak menunjukkan gejala yang jelas,
                                        tetapi dapat terdeteksi melalui tes darah.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection