@extends('layout.layoutAdmin')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Dasbor</h1>
    <!-- Awal Konten Halaman -->
    <div class="container-fluid">

        <!-- Judul Halaman -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dasbor</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Unduh Laporan
            </a>
        </div>

        <!-- Baris Konten -->
        <div class="row">

            <!-- Kartu Pendapatan (Bulanan) -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Pendapatan (Bulanan)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kartu Pendapatan (Tahunan) -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Pendapatan (Tahunan)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kartu Tugas -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tugas</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kartu Permintaan Tertunda -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Permintaan Tertunda</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Baris Konten -->
        <div class="row">

            <!-- Grafik Area -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Ringkasan Pendapatan</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Pilihan:</div>
                                <a class="dropdown-item" href="#">Aksi</a>
                                <a class="dropdown-item" href="#">Aksi lainnya</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Pilihan lainnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grafik Pie -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Sumber Pendapatan</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Pilihan:</div>
                                <a class="dropdown-item" href="#">Aksi</a>
                                <a class="dropdown-item" href="#">Aksi lainnya</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Pilihan lainnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2"><i class="fas fa-circle text-primary"></i> Langsung</span>
                            <span class="mr-2"><i class="fas fa-circle text-success"></i> Sosial</span>
                            <span class="mr-2"><i class="fas fa-circle text-info"></i> Rujukan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Baris Konten -->
        <div class="row">

            <!-- Kolom Konten -->
            <div class="col-lg-6 mb-4">

                <!-- Kartu Proyek -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Proyek</h6>
                    </div>
                    <div class="card-body">
                        <h4 class="small font-weight-bold">Migrasi Server <span class="float-right">20%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"></div>
                        </div>
                        <h4 class="small font-weight-bold">Pelacakan Penjualan <span class="float-right">40%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"></div>
                        </div>
                        <h4 class="small font-weight-bold">Database Pelanggan <span class="float-right">60%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                        </div>
                        <h4 class="small font-weight-bold">Detail Pembayaran <span class="float-right">80%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%"></div>
                        </div>
                        <h4 class="small font-weight-bold">Pengaturan Akun <span class="float-right">Selesai!</span></h4>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                        </div>
                    </div>
                </div>

                <!-- Sistem Warna -->
                <div class="row">
                    @php
                        $colors = [
                            ['label' => 'Utama', 'bg' => 'bg-primary', 'hex' => '#4e73df'],
                            ['label' => 'Sukses', 'bg' => 'bg-success', 'hex' => '#1cc88a'],
                            ['label' => 'Info', 'bg' => 'bg-info', 'hex' => '#36b9cc'],
                            ['label' => 'Peringatan', 'bg' => 'bg-warning', 'hex' => '#f6c23e'],
                            ['label' => 'Bahaya', 'bg' => 'bg-danger', 'hex' => '#e74a3b'],
                            ['label' => 'Sekunder', 'bg' => 'bg-secondary', 'hex' => '#858796'],
                            ['label' => 'Terang', 'bg' => 'bg-light text-black', 'hex' => '#f8f9fc'],
                            ['label' => 'Gelap', 'bg' => 'bg-dark', 'hex' => '#5a5c69'],
                        ];
                    @endphp
                    @foreach ($colors as $color)
                        <div class="col-lg-6 mb-4">
                            <div class="card {{ $color['bg'] }} text-white shadow">
                                <div class="card-body">
                                    {{ $color['label'] }}
                                    <div class="text-white-50 small">{{ $color['hex'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            <div class="col-lg-6 mb-4">

                <!-- Ilustrasi -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Ilustrasi</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="img/undraw_posting_photo.svg" alt="...">
                        </div>
                        <p>Tambahkan ilustrasi SVG berkualitas ke proyek Anda dari <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, koleksi gambar SVG gratis dan bebas atribusi yang selalu diperbarui!</p>
                        <a target="_blank" rel="nofollow" href="https://undraw.co/">Lihat Ilustrasi di unDraw &rarr;</a>
                    </div>
                </div>

                <!-- Pendekatan Pengembangan -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Pendekatan Pengembangan</h6>
                    </div>
                    <div class="card-body">
                        <p>SB Admin 2 menggunakan secara ekstensif kelas utilitas Bootstrap 4 untuk mengurangi beban CSS dan meningkatkan performa halaman. Kelas CSS khusus digunakan untuk komponen dan utilitas kustom.</p>
                        <p class="mb-0">Sebelum menggunakan tema ini, sebaiknya Anda memahami framework Bootstrap, khususnya kelas utilitasnya.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Akhir Konten Halaman -->
@endsection