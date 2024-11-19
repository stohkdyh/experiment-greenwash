<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cista Water</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/scripts.js"></script>


</head>

<body style="background-color: #f1f1f1; background: url(assets/img/background-head-2.png); background-size: cover;">
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="card mx-auto justify-content-center vw-75" >
            <form class="row mx-5 my-5" width="85%" action="{{ route('user.store') }}" method="POST">

                @csrf
                <div class="col text-start">
                    <div class="mb-3 text-start"><label class="form-label text-start">
                        <h4>Nama Lengkap</h4>
                    </label>
                    <div class="input-group"><input class="form-control" type="text" id="swal-input1" name="name" value="{{ old('name') }}"
                        placeholder="Masukkan Nama Lengkap Anda"></div>
                    </div>
                    <label class="form-label">
                        <h4>Jenis Kelamin</h4>
                    </label>
                    <div class="input-group mb-3"><select class="form-select" id="swal-input2" name="gender" value="{{ old('gender') }}">
                        <option selected disabled>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select></div>
                    <div class="mb-3 text-start"><label class="form-label">
                            <h4>Usia</h4>
                        </label>
                        <div class="input-group"><input type="number" id="swal-input3" class="form-control" name="age" value="{{ old('age') }}"
                            placeholder="Masukkan Usia Anda"></div>
                        </div>
                        <div class="mb-3 text-start"><label class="form-label">
                            <h4>Domisili</h4>
                        </label>
                        <div class="input-group"><input type="text" id="swal-input4" class="form-control" name="location" value="{{ old('location') }}"
                                placeholder="Masukkan Domisili Anda"></div>
                    </div>
                </div>
                <div class="col text-start">
                    <div class="mb-3 text-start">
                        <label class="form-label">
                            <h4>Pekerjaan</h4>
                        </label>
                        <div class="input-group"><input type="text" id="swal-input5" class="form-control" name="occupation" value="{{ old('occupation') }}"
                            placeholder="Masukkan Pekerjaan Anda"></div>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label">
                            <h4>Pendidikan Terakhir</h4>
                        </label>
                        <div class="input-group"><input type="text" id="swal-input6" class="form-control" name="education" value="{{ old('education') }}"
                                placeholder="Masukkan Pendidikan Terakhir Anda"></div>
                    </div>
                    <label class="form-label">
                        <h4>Penghasilan</h4>
                    </label>
                    <div class="input-group mb-3"><select class="form-select" id="swal-input7" name="income" value="{{ old('income') }}">
                            <option selected disabled>Pilih Penghasilan Perbulan Anda</option>
                            <option value="Rp0,- s/d Rp500.000,-">Rp0,- s/d Rp500.000,-</option>
                            <option value=">Rp500.000,- s/d Rp1.000.000,-">>Rp500.000,- s/d Rp1.000.000,-</option>
                            <option value=">Rp1.000.000,- s/d Rp.1.500.000,-">>Rp1.000.000,- s/d Rp.1.500.000,-</option>
                            <option value=">Rp1.500.000,- s/d Rp2.000.000,-">>Rp1.500.000,- s/d Rp2.000.000,-</option>
                            <option value=">Rp2.000.000,- s/d Rp2.500.000,-">>Rp2.000.000,- s/d Rp2.500.000,-</option>
                            <option value=">Rp2.500.000,-">>Rp2.500.000,-</option>
                        </select></div>
                    </div>
                    <button type="submit" class="btn btn-md btn-primary me-3" id="submit-button">Submit</button>
                </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
</body>

</html>