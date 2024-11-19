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
    <form class="card w-75 mx-auto my-4" action="{{ route('postTest.store') }}" method="POST">

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
        <div class="row mx-5">
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
        <hr class="border border-2 mx-auto rounded-4 mb-5" width="90%">

        <!-- Card -->
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Apakah iklan yang ditampilkan di video perusahaan sesuai dengan pencapaian kinerja lingkungannya?
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation1" id="inlineRadio1" value="Sesuai" {{ old('manipulation1') == 'Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio1">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation1" id="inlineRadio2" value="Sebagian Sesuai" {{ old('manipulation1') == 'Sebagian Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio2">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation1" id="manipulation1" value="Sangat Sesuai" {{ old('manipulation1') == 'Sangat Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio3">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Apakah PROPER dan Kehati menunjukkan kinerja lingkungan perusahaan?
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation2" id="inlineRadio1" value="Sesuai" {{ old('manipulation2') == 'Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio1">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation2" id="inlineRadio2" value="Sebagian Sesuai" {{ old('manipulation2') == 'Sebagian Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio2">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation2" id="inlineRadio3" value="Sangat Sesuai" {{ old('manipulation2') == 'Sangat Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio3">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Apakah PROPER kode hitam, merah, hijau menunjukkan kinerja lingkungan perusahaan?
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation3" id="inlineRadio1" value="Sesuai" {{ old('manipulation3') == 'Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio1">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation3" id="inlineRadio2" value="Sebagian Sesuai" {{ old('manipulation3') == 'Sebagian Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio2">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation3" id="inlineRadio3" value="Sangat Sesuai" {{ old('manipulation3') == 'Sangat Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio3">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Apakah komunikasi yang ditampilkan oleh perusahaan sesuai dengan tindakan nyata ramah lingkungan
                    perusahaan?
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation4" id="inlineRadio1" value="Sesuai" {{ old('manipulation4') == 'Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio1">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation4" id="inlineRadio2" value="Sebagian Sesuai" {{ old('manipulation4') == 'Sebagian Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio2">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation4" id="inlineRadio3" value="Sangat Sesuai" {{ old('manipulation4') == 'Sangat Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio3">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Apakah Anda melihat kode PROPER pada video?</p>
            </div>

            <div class="text-center mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation5" id="inlineRadio1" value="Sesuai" {{ old('manipulation5') == 'Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio1">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation5" id="inlineRadio2" value="Sebagian Sesuai" {{ old('manipulation5') == 'Sebagian Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio2">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation5" id="inlineRadio3" value="Sangat Sesuai" {{ old('manipulation5') == 'Sangat Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio3">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Apakah Anda melihat logo KEHATI pada video?
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation6" id="inlineRadio1" value="Sesuai" {{ old('manipulation6') == 'Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio1">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation6" id="inlineRadio2" value="Sebagian Sesuai" {{ old('manipulation6') == 'Sebagian Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio2">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation6" id="inlineRadio3" value="Sangat Sesuai" {{ old('manipulation6') == 'Sangat Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio3">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Apakah Anda beranggapan bahwa berita yang ditampilkan menunjukkan kinerja lingkungan perusahaan?</p>
            </div>

            <div class="text-center mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation7" id="inlineRadio1" value="Sesuai" {{ old('manipulation7') == 'Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio1">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation7" id="inlineRadio2" value="Sebagian Sesuai" {{ old('manipulation7') == 'Sebagian Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio2">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation7" id="inlineRadio3" value="Sangat Sesuai" {{ old('manipulation7') == 'Sangat Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio3">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Apakah Anda mengerti bahwa perusahaan tersebut mencitrakan dirinya sebagai perusahaan ramah lingkungan?</p>
            </div>

            <div class="text-center mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation8" id="inlineRadio1" value="Sesuai" {{ old('manipulation8') == 'Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio1">Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation8" id="inlineRadio2" value="Sebagian Sesuai" {{ old('manipulation8') == 'Sebagian Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio2">Sebagian Sesuai</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="manipulation8" id="inlineRadio3" value="Sangat Sesuai" {{ old('manipulation8') == 'Sangat Sesuai' ? 'checked' : '' }} />
                    <label class="form-check-label" for="inlineRadio3">Sangat Sesuai</label>
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Produk tersebut menipu saya melalui kata-kata ramah lingkungan.
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post1" value="{{ $i }}" {{ old('post1') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Produk tersebut menipu saya melalui visual atau grafik bernuansa lingkungan
                </p>
            </div>
            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>
                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post2" value="{{ $i }}" {{ old('post2') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Produk tersebut menipu saya dengan klaim ramah lingkungan yang tidak jelas
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post3" value="{{ $i }}" {{ old('post3') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Produk tersebut melebih-lebihkan fungsi ramah lingkungannya
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post4" value="{{ $i }}" {{ old('post4') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    SProduk tersebut menyembunyikan informasi penting, membuat klaim ramah lingkungan terdengar lebih baik daripada yang sebenarnya </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post5" value="{{ $i }}" {{ old('post5') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Menurut saya produk ini memiliki citra lingkungan yang baik
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post6" value="{{ $i }}" {{ old('post6') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saya merasa klaim lingkungan dari produk ini mendapat dukungan dari masyarakat </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post7" value="{{ $i }}" {{ old('post7') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Dibandingkan dengan produk sejenis lainnya, produk ini memiliki citra lingkungan yang lebih baik </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post8" value="{{ $i }}" {{ old('post8') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saya merasa proses produksi dari produk tersebut sudah dilakukan dengan profesional tentang pengelolaan lingkungan </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post9" value="{{ $i }}" {{ old('post9') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saya senang dengan keputusan memilih produk ini, karena citra ramah lingkungannya </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post10" value="{{ $i }}" {{ old('post10') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Menurut saya, membeli produk ini adalah keputusan yang tepat karena fungsinya yang ramah lingkungan </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post11" value="{{ $i }}" {{ old('post11') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Secara keseluruhan saya senang membeli produk ini karena ramah lingkungan </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post12" value="{{ $i }}" {{ old('post12') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Dari sudut pandang efektivitas lingkungan, membeli produk ini adalah keputusan yang tepat </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post13" value="{{ $i }}" {{ old('post13') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saya puas dengan daya tarik lingkungan dari produk ini </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post14" value="{{ $i }}" {{ old('post14') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Secara keseluruhan, saya puas dengan produk ini karena kinerjanya yang ramah lingkungan </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post15" value="{{ $i }}" {{ old('post15') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saya percaya bahwa memilih produk ramah lingkungan, berkontribusi dalam mengurangi pencemaran.</p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post16" value="{{ $i }}" {{ old('post16') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saya rela menghabiskan lebih banyak uang untuk produk yang dibuat, diproses, dan dikemas dengan cara yang bertanggung jawab terhadap lingkungan.</p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post17" value="{{ $i }}" {{ old('post17') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Untuk membeli produk dengan kemasan ramah lingkungan, saya akan siap membayar uang tambahan.</p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post18" value="{{ $i }}" {{ old('post18') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saya akan memilih produk yang tidak berbahaya bagi lingkungan jika diberi pilihan antara dua produk serupa.</p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post19" value="{{ $i }}" {{ old('post19') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saya memeriksa lebih jauh saat membeli suatu produk terkait dengan aspek lingkungan yang akan ditimbulkan.</p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post20" value="{{ $i }}" {{ old('post20') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Sulit untuk membedakan produk ini dengan produk lain dalam hal menilai dampak lingkungannya
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post21" value="{{ $i }}" {{ old('post21') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Karena banyak produk yang mirip dalam hal dampak lingkungan, jadi sulit mengenali produk mana yang lebih baik.
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post22" value="{{ $i }}" {{ old('post22') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Ada begitu banyak pilihan produk sejenis sehingga saya merasa bingung memilih mana yang lebih ramah lingkungan
                </p>
            </div>
            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>
                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post23" value="{{ $i }}" {{ old('post23') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Banyaknya pilihan produk membuat saya merasa bingung untuk memilih produk karena penilaian dampak lingkungan hidup susah dibandingkan
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post24" value="{{ $i }}" {{ old('post24') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saat membeli produk ini, saya merasa tidak cukup mendapatkan informasi mengenai dampak lingkungannya
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post25" value="{{ $i }}" {{ old('post25') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saat membeli produk ini, saya merasa tidak percaya dengan dampak lingkungan yang diklaimnya </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post26" value="{{ $i }}" {{ old('post26') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saya merasa reputasi lingkungan dari produk ini secara umum dapat diandalkan
                </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post27" value="{{ $i }}" {{ old('post27') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saya merasa bahwa kinerja lingkungan dari produk ini secara umum dapat diandalkan </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post28" value="{{ $i }}" {{ old('post28') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Saya merasa bahwa klaim lingkungan dari produk ini secara umum dapat dipercaya </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post29" value="{{ $i }}" {{ old('post29') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Harapan saya terkait kepedulian produk ini terhadap lingkungan telah terpenuhi </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post30" value="{{ $i }}" {{ old('post30') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Produk ini menepati janji dan komitmen dalam hal perlindungan lingkungan </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post31" value="{{ $i }}" {{ old('post31') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Produk ini dianggap sebagai standar emas dalam hal komitmen lingkungan </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post32" value="{{ $i }}" {{ old('post32') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Produk ini memiliki keberhasilan yang baik dalam hal kelestarian lingkungan hidup </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post33" value="{{ $i }}" {{ old('post33') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Produk ini memiliki keberhasilan yang baik dalam hal kelestarian lingkungan hidup </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post34" value="{{ $i }}" {{ old('post34') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Produk ini terkenal dalam hal permasalahan lingkungan hidup </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post35" value="{{ $i }}" {{ old('post35') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
            </div>
        </div>
        <div class="mx-5 mb-5">
            <div class="text-center">
                <p class="fw-medium" style="font-size: 1.1rem;">
                    Komitmen lingkungan dari produk ini dapat dipercaya </p>
            </div>

            <div class="text-center mb-3">
                <div class="d-inline mx-3">
                    Sangat Tidak Setuju
                </div>

                @for ($i = 1; $i <= 7; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="post36" value="{{ $i }}" {{ old('post36') == $i ? 'checked' : '' }} />
                    <label class="form-check-label">{{ $i }}</label>
                </div>
                @endfor
                <div class="d-inline me-4">
                    Sangat Setuju
                </div>
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