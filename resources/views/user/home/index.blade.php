<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lowongan - Youth Id.</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/perpus.svg') }}">
    <link rel="shortcut icon" href="{{ asset('assets') }}/img/food recipe.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets') }}/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/compiled/css/table-datatable-jquery.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/compiled/css/app.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/compiled/css/app-dark.css">

</head>

<body>
    <script src="{{ asset('assets') }}/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        {{-- <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets') }}/compiled/svg/logo.svg" alt="Logo"
                                    srcset=""></a>
                        </div> --}}
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item active ">
                            <a href="{{ route('admin.home') }}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Daftar Lowongan</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Daftar Lowo</span>
                            </a>
                        </li> --}}
                        <li class="sidebar-title">Menu</li>

                        {{-- <li class="sidebar-item  ">
                            <a href="{{ route('admin.lowongan') }}" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Profile</span>
                            </a>
                        </li> --}}

                        <li class="sidebar-item  ">
                            <a href="{{ route('user.profile') }}" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item" style="margin-top: 40vh;">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm w-100">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Daftar Lowongan</h3>
                            <p class="text-subtitle text-muted">Kelola Lowongan dengan mudah menggunakan tabel
                                interaktif.
                            </p>


                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Daftar Lowongan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Recent Posts Section -->
                <section id="recent-posts" class="recent-posts section">

                    <div class="container">

                        <div class="row gy-5">
                            @forelse ($lowongan as $lwn)
                                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header">
                                                <div class="post-img position-relative overflow-hidden">
                                                    <span class="post-date">
                                                        @if ($lwn->jenis == 1)
                                                            Full Time
                                                        @else
                                                            Part Time
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="post-content d-flex flex-column">

                                                    <!-- Judul pekerjaan -->
                                                    <h3 class="post-title">{{ $lwn->nama }}</h3>

                                                    <!-- Informasi pekerjaan -->
                                                    <ul class="job-info list-unstyled">
                                                        <li><strong>Salary:</strong> {{ $lwn->gaji }}</li>
                                                        <li><strong>Category:</strong> {{ $lwn->kategori }}</li>
                                                        <li><strong>Company:</strong> {{ $lwn->perusahaan }}</li>
                                                        <li><strong>Status:</strong>
                                                            @if ($lwn->status == 1)
                                                                <span class="badge bg-primary">Tersedia</span>
                                                            @elseif ($lwn->status == 2)
                                                                <span class="badge bg-warning">Terbatas</span>
                                                            @elseif ($lwn->status == 3)
                                                                <span class="badge bg-success">Terpenuhi</span>
                                                            @endif
                                                        </li>
                                                        <li><strong>Location:</strong> {{ $lwn->alamat }}</li>
                                                    </ul>

                                                    <hr>

                                                    <!-- Link untuk membaca lebih lanjut -->
                                                    <a href="#" class="readmore stretched-link"
                                                        data-bs-toggle="modal" data-bs-target="#confirmationModal"
                                                        onclick="setJobId('{{ $lwn->id }}')">
                                                        <span>Read More</span><i class="bi bi-arrow-right"></i>
                                                    </a>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div><!-- End post item -->
                            @empty
                            @endforelse
                        </div>

                    </div>

                </section><!-- /Recent Posts Section -->

                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#historyModal">
                    Lihat Status Lamaran
                </button>



                <!-- Modal -->




                <!-- Modal Konfirmasi -->
                <div class="modal fade" id="confirmationModal" tabindex="-1"
                    aria-labelledby="confirmationModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="applicationForm" action="{{ route('user.lamar.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Lamaran Pekerjaan
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin melamar posisi ini?</p>
                                    <input name="id_lowongan" id="id_lowongan" hidden>
                                    {{-- Ganti '1' dengan nilai id_lowongan yang sesuai --}}
                                    <div class="mb-3">
                                        <label for="cv" class="form-label">Upload Resume/CV:</label>
                                        <input type="file" class="form-control" id="cv" name="cv"
                                            required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Lamar</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- Modal Riwayat -->
                <div class="modal fade" id="historyModal" tabindex="-1" aria-labelledby="historyModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmationModalLabel">Riwayat Pengajuan Lamaran
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive datatable-minimal">
                                    <table class="table" id="table2">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Lamaran</th>
                                                <th>Nama Lowongan</th>
                                                <th>Perusahaan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($lamaran as $lmn)
                                                <tr>
                                                    <td>{{ $lmn->created_at }}</td>
                                                    <td>{{ $lmn->lowongan->nama }}</td>
                                                    <td>{{ $lmn->lowongan->perusahaan }}</td>
                                                    <td>
                                                        @if ($lmn->status == 1)
                                                            Belum diverifikasi
                                                        @elseif ($lmn->status == 2)
                                                            Tolak
                                                        @elseif ($lmn->status == 3)
                                                            Terima
                                                        @else
                                                            Belum diverifikasi
                                                        @endif
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse
                                            <!-- Data dari AJAX akan ditampilkan di sini -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2024 &copy; Youth Id.</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"></span>
                            by <a href="https://polije.ac.id" target="_blank">Politeknik Negeri Jember</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- Menggunakan CDN untuk jQuery dan DataTables -->
    <script src="{{ asset('assets') }}/static/js/components/dark.js"></script>
    <script src="{{ asset('assets') }}/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="{{ asset('assets') }}/compiled/js/app.js"></script>



    <script src="{{ asset('assets') }}/extensions/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('assets') }}/static/js/pages/datatables.js"></script>


    <script>
        function viewFoto(namaFoto) {
            var fotoUrl = '{{ asset('storage/foto-Lowongan') }}/' + namaFoto;
            $('#fotoModalImg').attr('src', fotoUrl);
            $('#fotoModal').modal('show');
        }

        // Function to delete a class
        function deleteClass(id) {
            if (confirm('Are you sure you want to delete this data?')) {
                $.ajax({
                    url: '/Lowongan/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        alert('Data deleted successfully!');
                        $('#table2').DataTable().ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        alert('Error occurred: ' + error);
                    }
                });
            }
        }
    </script>

    <script>
        function setJobId(jobId) {
            document.getElementById('id_lowongan').value = jobId;
        }
    </script>


</body>

</html>
