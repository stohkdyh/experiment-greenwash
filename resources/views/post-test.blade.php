<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Post-Test</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/styles.css" />
    <script>
        window.addEventListener('load', () => {
            Swal.fire({
                title: '<h1 class="fw-bold mb-5">Selamat Datang</h1>',
                html: `<pre class="text-start fs-5" style="font-family: 'Montserrat', sans-serif;">
        Responden yang terhormat,

        Dengan segala kerendahan hati, kami menginformasikan bahwa survei ini merupakan bagian 
        dari kegiatan riset mengenai greenwashing. Data yang diperoleh akan dirahasiakan dan 
        digunakan sebagai bahan riset. Oleh karena itu, kami berharap Saudara/i dapat meluangkan
        waktu untuk ikut berpartisipasi dalam riset ini. Kami sangat menghargai perhatian dan 
        kesediaan waktu Saudara/i untuk menjawab pertanyaan dalam angket ini. Terimakasih
        

        Hormat kami,
    
    
        Tim Peneliti
    </pre>`,
                // iconHtml: '<img src="assets/img/pop-up.png" class="img-fluid object-fit-contain">',
                confirmButtonColor: "#0d6efd",
                allowOutsideClick: false,
                allowEscapeKey: false,
                confirmButtonText: "Lanjut",
                width: "80%",
                customClass: {
                    icon: 'no-border'
                }
            })
            const form = document.querySelector('form');
            const submitButton = document.getElementById('submitButton');
            const radioGroups = Array.from({ length: 36 }, (_, i) => document.getElementsByName(`post${i + 1}`));

            function checkRadios() {
                const allFilled = radioGroups.every(group => Array.from(group).some(radio => radio.checked));
                submitButton.disabled = !allFilled;
            }

            radioGroups.forEach(group => group.forEach(radio => radio.addEventListener('change', checkRadios)));
            checkRadios();
        })
    </script>
</head>

<body style="background-color: #f1f1f1;">
    <form class="card shadow border-0 mx-auto my-5 p-3 p-md-5 rounded-4" style="max-width: 1400px; width: 95%;" action="{{ route('postTest.store') }}" method="POST">

        @csrf

        <h2 class="text-center fw-bold mt-4 mb-3">Post-Test</h2>
        <pre class="text-start fs-6" style="font-family: 'Montserrat', sans-serif;">
                <strong>Petunjuk Pengerjaan:</strong>
                1.	Isikan identitas Saudara/i secara lengkap dan benar. Identitas Saudara/i akan dirahasiakan karena identitas 
                        Saudara/i semata untuk mempermudah pengolahan data.
                2.	Bacalah setiap pernyataan dengan teliti.
                3.	Isikan angket sesuai dengan keadaan yang sebenarnya dan sejujurnya.
                4.	Jawablah dengan memilih salah satu dari 7 alternatif jawaban kemudian klik pada kolom yang telah tersedia.
                5.	Atas partisipasi Saudara/i, peneliti mengucapkan terima kasih.
        </pre>
        {{-- <p class="text-center mx-5">Mohon isi form dibawah dengan sebenar-benarnya sesuai dengan yang anda rasakan dari
            melihat berita
            sebelumnya.</p> --}}
        <div class="row mx-md-5 bg-white p-4 border rounded-4 shadow-sm mb-5">
            <div class="col text-start">
                <div class="mb-5 text-start"><label class="form-label text-start">
                    <h4>Nama Lengkap</h4>
                </label>
                <div class="input-group"><input class="form-control" type="text" name="name" value="{{ old('name') }}"
                    placeholder="Masukkan Nama Lengkap Anda"></div>
                </div>
            </div>
            <div class="col text-start">
                <label class="form-label">
                    <h4>Kode Berita</h4>
                </label>
                <div class="input-group mb-3"><select class="form-select" id="swal-input2" name="kode_berita" value="{{ old('kode_berita') }}">
                    <option selected disabled>Pilih Kode Berita Anda</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select></div>
            </div>
        </div>
        

        <!-- Card -->
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Apakah iklan yang ditampilkan di video perusahaan sesuai dengan pencapaian kinerja lingkungannya?
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation1" id="manipulation1_Sesuai" value="Sesuai" {{ old('manipulation1') == 'Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation1_Sesuai" style="cursor: pointer;">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation1" id="manipulation1_SebagianSesuai" value="Sebagian Sesuai" {{ old('manipulation1') == 'Sebagian Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation1_SebagianSesuai" style="cursor: pointer;">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation1" id="manipulation1" value="Sangat Sesuai" {{ old('manipulation1') == 'Sangat Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio3">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Apakah PROPER dan Kehati menunjukkan kinerja lingkungan perusahaan?
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation2" id="manipulation2_Sesuai" value="Sesuai" {{ old('manipulation2') == 'Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation2_Sesuai" style="cursor: pointer;">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation2" id="manipulation2_SebagianSesuai" value="Sebagian Sesuai" {{ old('manipulation2') == 'Sebagian Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation2_SebagianSesuai" style="cursor: pointer;">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation2" id="manipulation2_SangatSesuai" value="Sangat Sesuai" {{ old('manipulation2') == 'Sangat Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation2_SangatSesuai" style="cursor: pointer;">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Apakah PROPER kode hitam, merah, hijau menunjukkan kinerja lingkungan perusahaan?
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation3" id="manipulation3_Sesuai" value="Sesuai" {{ old('manipulation3') == 'Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation3_Sesuai" style="cursor: pointer;">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation3" id="manipulation3_SebagianSesuai" value="Sebagian Sesuai" {{ old('manipulation3') == 'Sebagian Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation3_SebagianSesuai" style="cursor: pointer;">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation3" id="manipulation3_SangatSesuai" value="Sangat Sesuai" {{ old('manipulation3') == 'Sangat Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation3_SangatSesuai" style="cursor: pointer;">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Apakah komunikasi yang ditampilkan oleh perusahaan sesuai dengan tindakan nyata ramah lingkungan
                    perusahaan?
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation4" id="manipulation4_Sesuai" value="Sesuai" {{ old('manipulation4') == 'Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation4_Sesuai" style="cursor: pointer;">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation4" id="manipulation4_SebagianSesuai" value="Sebagian Sesuai" {{ old('manipulation4') == 'Sebagian Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation4_SebagianSesuai" style="cursor: pointer;">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation4" id="manipulation4_SangatSesuai" value="Sangat Sesuai" {{ old('manipulation4') == 'Sangat Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation4_SangatSesuai" style="cursor: pointer;">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Apakah Anda melihat kode PROPER pada video?</p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation5" id="manipulation5_Sesuai" value="Sesuai" {{ old('manipulation5') == 'Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation5_Sesuai" style="cursor: pointer;">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation5" id="manipulation5_SebagianSesuai" value="Sebagian Sesuai" {{ old('manipulation5') == 'Sebagian Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation5_SebagianSesuai" style="cursor: pointer;">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation5" id="manipulation5_SangatSesuai" value="Sangat Sesuai" {{ old('manipulation5') == 'Sangat Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation5_SangatSesuai" style="cursor: pointer;">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Apakah Anda melihat logo KEHATI pada video?
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation6" id="manipulation6_Sesuai" value="Sesuai" {{ old('manipulation6') == 'Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation6_Sesuai" style="cursor: pointer;">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation6" id="manipulation6_SebagianSesuai" value="Sebagian Sesuai" {{ old('manipulation6') == 'Sebagian Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation6_SebagianSesuai" style="cursor: pointer;">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation6" id="manipulation6_SangatSesuai" value="Sangat Sesuai" {{ old('manipulation6') == 'Sangat Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation6_SangatSesuai" style="cursor: pointer;">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Apakah Anda beranggapan bahwa berita yang ditampilkan menunjukkan kinerja lingkungan perusahaan?</p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation7" id="manipulation7_Sesuai" value="Sesuai" {{ old('manipulation7') == 'Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation7_Sesuai" style="cursor: pointer;">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation7" id="manipulation7_SebagianSesuai" value="Sebagian Sesuai" {{ old('manipulation7') == 'Sebagian Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation7_SebagianSesuai" style="cursor: pointer;">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation7" id="manipulation7_SangatSesuai" value="Sangat Sesuai" {{ old('manipulation7') == 'Sangat Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation7_SangatSesuai" style="cursor: pointer;">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Apakah Anda mengerti bahwa perusahaan tersebut mencitrakan dirinya sebagai perusahaan ramah lingkungan?</p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation8" id="manipulation8_Sesuai" value="Sesuai" {{ old('manipulation8') == 'Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation8_Sesuai" style="cursor: pointer;">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation8" id="manipulation8_SebagianSesuai" value="Sebagian Sesuai" {{ old('manipulation8') == 'Sebagian Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation8_SebagianSesuai" style="cursor: pointer;">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation8" id="manipulation8_SangatSesuai" value="Sangat Sesuai" {{ old('manipulation8') == 'Sangat Sesuai' ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="manipulation8_SangatSesuai" style="cursor: pointer;">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Produk tersebut menipu saya melalui kata-kata ramah lingkungan.
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post1" id="post1_{{ $i }}" value="{{ $i }}" {{ old('post1') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post1_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Produk tersebut menipu saya melalui visual atau grafik bernuansa lingkungan
                </p>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>
                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post2" id="post2_{{ $i }}" value="{{ $i }}" {{ old('post2') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post2_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Produk tersebut menipu saya dengan klaim ramah lingkungan yang tidak jelas
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post3" id="post3_{{ $i }}" value="{{ $i }}" {{ old('post3') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post3_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Produk tersebut melebih-lebihkan fungsi ramah lingkungannya
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post4" id="post4_{{ $i }}" value="{{ $i }}" {{ old('post4') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post4_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    SProduk tersebut menyembunyikan informasi penting, membuat klaim ramah lingkungan terdengar lebih baik daripada yang sebenarnya </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post5" id="post5_{{ $i }}" value="{{ $i }}" {{ old('post5') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post5_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Menurut saya produk ini memiliki citra lingkungan yang baik
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post6" id="post6_{{ $i }}" value="{{ $i }}" {{ old('post6') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post6_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saya merasa klaim lingkungan dari produk ini mendapat dukungan dari masyarakat </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post7" id="post7_{{ $i }}" value="{{ $i }}" {{ old('post7') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post7_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Dibandingkan dengan produk sejenis lainnya, produk ini memiliki citra lingkungan yang lebih baik </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post8" id="post8_{{ $i }}" value="{{ $i }}" {{ old('post8') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post8_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saya merasa proses produksi dari produk tersebut sudah dilakukan dengan profesional tentang pengelolaan lingkungan </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post9" id="post9_{{ $i }}" value="{{ $i }}" {{ old('post9') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post9_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saya senang dengan keputusan memilih produk ini, karena citra ramah lingkungannya </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post10" id="post10_{{ $i }}" value="{{ $i }}" {{ old('post10') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post10_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Menurut saya, membeli produk ini adalah keputusan yang tepat karena fungsinya yang ramah lingkungan </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post11" id="post11_{{ $i }}" value="{{ $i }}" {{ old('post11') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post11_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Secara keseluruhan saya senang membeli produk ini karena ramah lingkungan </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post12" id="post12_{{ $i }}" value="{{ $i }}" {{ old('post12') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post12_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Dari sudut pandang efektivitas lingkungan, membeli produk ini adalah keputusan yang tepat </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post13" id="post13_{{ $i }}" value="{{ $i }}" {{ old('post13') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post13_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saya puas dengan daya tarik lingkungan dari produk ini </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post14" id="post14_{{ $i }}" value="{{ $i }}" {{ old('post14') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post14_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Secara keseluruhan, saya puas dengan produk ini karena kinerjanya yang ramah lingkungan </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post15" id="post15_{{ $i }}" value="{{ $i }}" {{ old('post15') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post15_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saya percaya bahwa memilih produk ramah lingkungan, berkontribusi dalam mengurangi pencemaran.</p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post16" id="post16_{{ $i }}" value="{{ $i }}" {{ old('post16') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post16_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saya rela menghabiskan lebih banyak uang untuk produk yang dibuat, diproses, dan dikemas dengan cara yang bertanggung jawab terhadap lingkungan.</p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post17" id="post17_{{ $i }}" value="{{ $i }}" {{ old('post17') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post17_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Untuk membeli produk dengan kemasan ramah lingkungan, saya akan siap membayar uang tambahan.</p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post18" id="post18_{{ $i }}" value="{{ $i }}" {{ old('post18') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post18_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saya akan memilih produk yang tidak berbahaya bagi lingkungan jika diberi pilihan antara dua produk serupa.</p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post19" id="post19_{{ $i }}" value="{{ $i }}" {{ old('post19') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post19_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saya memeriksa lebih jauh saat membeli suatu produk terkait dengan aspek lingkungan yang akan ditimbulkan.</p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post20" id="post20_{{ $i }}" value="{{ $i }}" {{ old('post20') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post20_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Sulit untuk membedakan produk ini dengan produk lain dalam hal menilai dampak lingkungannya
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post21" id="post21_{{ $i }}" value="{{ $i }}" {{ old('post21') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post21_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Karena banyak produk yang mirip dalam hal dampak lingkungan, jadi sulit mengenali produk mana yang lebih baik.
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post22" id="post22_{{ $i }}" value="{{ $i }}" {{ old('post22') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post22_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Ada begitu banyak pilihan produk sejenis sehingga saya merasa bingung memilih mana yang lebih ramah lingkungan
                </p>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>
                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post23" id="post23_{{ $i }}" value="{{ $i }}" {{ old('post23') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post23_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Banyaknya pilihan produk membuat saya merasa bingung untuk memilih produk karena penilaian dampak lingkungan hidup susah dibandingkan
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post24" id="post24_{{ $i }}" value="{{ $i }}" {{ old('post24') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post24_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saat membeli produk ini, saya merasa tidak cukup mendapatkan informasi mengenai dampak lingkungannya
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post25" id="post25_{{ $i }}" value="{{ $i }}" {{ old('post25') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post25_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saat membeli produk ini, saya merasa tidak percaya dengan dampak lingkungan yang diklaimnya </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post26" id="post26_{{ $i }}" value="{{ $i }}" {{ old('post26') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post26_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saya merasa reputasi lingkungan dari produk ini secara umum dapat diandalkan
                </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post27" id="post27_{{ $i }}" value="{{ $i }}" {{ old('post27') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post27_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saya merasa bahwa kinerja lingkungan dari produk ini secara umum dapat diandalkan </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post28" id="post28_{{ $i }}" value="{{ $i }}" {{ old('post28') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post28_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Saya merasa bahwa klaim lingkungan dari produk ini secara umum dapat dipercaya </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post29" id="post29_{{ $i }}" value="{{ $i }}" {{ old('post29') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post29_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Harapan saya terkait kepedulian produk ini terhadap lingkungan telah terpenuhi </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post30" id="post30_{{ $i }}" value="{{ $i }}" {{ old('post30') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post30_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Produk ini menepati janji dan komitmen dalam hal perlindungan lingkungan </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post31" id="post31_{{ $i }}" value="{{ $i }}" {{ old('post31') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post31_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Produk ini dianggap sebagai standar emas dalam hal komitmen lingkungan </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post32" id="post32_{{ $i }}" value="{{ $i }}" {{ old('post32') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post32_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Produk ini memiliki keberhasilan yang baik dalam hal kelestarian lingkungan hidup </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post33" id="post33_{{ $i }}" value="{{ $i }}" {{ old('post33') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post33_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Produk ini memiliki keberhasilan yang baik dalam hal kelestarian lingkungan hidup </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post34" id="post34_{{ $i }}" value="{{ $i }}" {{ old('post34') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post34_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Produk ini terkenal dalam hal permasalahan lingkungan hidup </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post35" id="post35_{{ $i }}" value="{{ $i }}" {{ old('post35') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post35_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <div class="mx-md-5 mb-5 p-4 bg-white border rounded-4 shadow-sm">
            <div class="text-center">
                <p class="fw-medium fs-5 text-dark mb-0">
                    Komitmen lingkungan dari produk ini dapat dipercaya </p>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 bg-light p-3 rounded-3 mt-4">
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Tidak Setuju</div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post36" id="post36_{{ $i }}" value="{{ $i }}" {{ old('post36') == $i ? 'checked' : '' }} style="cursor: pointer;" />
                    <label class="form-check-label" for="post36_{{ $i }}" style="cursor: pointer;">{{ $i }}</label>
                </div>
                @endfor
                <div class="text-muted small fw-bold text-center flex-shrink-0" style="width: 150px;">Sangat Setuju</div>
            </div>
        </div>
        <button type="submit" onclick='location.href="/end"'
            class="btn btn-primary rounded-4 d-flex align-items-center mx-auto mb-4 text-white"
            style="--bs-btn-padding-y: 0.7rem; --bs-btn-color: --bs-primarycolor" id="submitButton">
            Submit
        </button>
    </form>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
</body>

</html>