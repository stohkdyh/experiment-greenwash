window.addEventListener("load", () => {
    // const correctPassword = "cb08ca4a7bb5f9683c19133a84872ca7";

    // const { value: password } = Swal.fire({
    //     title: "Masukkan Kode",
    //     input: "password",
    //     inputLabel: "Masukkan kode yang telah diberikan tim PKM-RSH",
    //     inputPlaceholder: "Masukkan Kode yang telah diberikan",
    //     allowOutsideClick: false,
    //     allowEscapeKey: false,
    //     confirmButtonText: "Submit",
    //     confirmButtonColor: "#0d6efd",
    //     inputAttributes: {
    //         autocapitalize: "off",
    //     },
    //     preConfirm: (password) => {
    //         const passwordHash = CryptoJS.MD5(password).toString();
    //         if (passwordHash !== correctPassword) {
    //             Swal.showValidationMessage(
    //                 "Incorrect password, please try again"
    //             );
    //             return false;
    //         }
    //         intro();
    //         return true;
    //     },
    // });
    intro();
    return true;
});

const intro = () =>
    Swal.fire({
        title: '<h1 class="fw-bold">Selamat Datang</h1>',
        text: "Website ini digunakan sebagai instrumen riset tim PKM RSH, Universitas Negeri Yogyakarta. Data yang diperoleh akan dirahasiakan dan digunakan sebagai bahan riset. Oleh karena itu, kami berharap Saudara/i dapat meluangkan waktu untuk ikut berpartisipasi dalam riset ini.",
        iconHtml:
            '<img src="assets/img/pop-up.png" class="img-fluid object-fit-contain">',
        confirmButtonColor: "#0d6efd",
        allowOutsideClick: false,
        allowEscapeKey: false,
        confirmButtonText: "Lanjut",
        width: "65%",
        customClass: {
            icon: "no-border",
        },
    }).then((result) => {
        if (result.isConfirmed) {
            // askForUserInfo();
            return true;
        }
    });

document.addEventListener("DOMContentLoaded", (event) => {
    const submitButton = document.getElementById("submit-button");
    const inputs = document.querySelectorAll("input, select");

    // Function to check if all required fields are filled
    const checkValidity = () => {
        let allFilled = true;
        inputs.forEach((input) => {
            if (
                input.value === "" ||
                input.value === null ||
                input.value === "Pilih Jenis Kelamin" ||
                input.value === "Pilih Penghasilan Perbulan Anda"
            ) {
                allFilled = false;
            }
        });
        submitButton.disabled = !allFilled;
    };

    // Add event listener to each input field
    inputs.forEach((input) => {
        input.addEventListener("input", checkValidity);
    });

    // Initial check
    checkValidity();
});

var requiredFields = {
    name: "",
    gender: "",
    age: "",
    location: "",
    occupation: "",
    education: "",
    income: "",
};

const askForUserInfo = () =>
    Swal.fire({
        title: '<h2 class="fw-bold mt-3 mb-5">Masukkan Data Diri Anda</h2>',
        html: `    <div class="row mx-auto" width="85%">
                <div class="col text-start">
                    <div class="mb-3 text-start"><label class="form-label text-start">
                            <h4>Nama Lengkap</h4>
                        </label>
                        <div class="input-group"><input type="text" id="swal-input1" class="form-control"
                                placeholder="Masukkan Nama Lengkap Anda"></div>
                    </div>
                    <label class="form-label">
                        <h4>Jenis Kelamin</h4>
                    </label>
                    <div class="input-group mb-3"><select class="form-select" id="swal-input2">
                            <option selected disabled>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select></div>
                    <div class="mb-3 text-start"><label class="form-label">
                            <h4>Usia</h4>
                        </label>
                        <div class="input-group"><input type="number" id="swal-input3" class="form-control"
                                placeholder="Masukkan Usia Anda"></div>
                    </div>
                    <div class="mb-3 text-start"><label class="form-label">
                            <h4>Domisili</h4>
                        </label>
                        <div class="input-group"><input type="text" id="swal-input4" class="form-control"
                                placeholder="Masukkan Domisili Anda"></div>
                    </div>
                </div>
                <div class="col text-start">
                    <div class="mb-3 text-start">
                        <label class="form-label">
                            <h4>Pekerjaan</h4>
                        </label>
                        <div class="input-group"><input type="text" id="swal-input5" class="form-control"
                                placeholder="Masukkan Pekerjaan Anda"></div>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label">
                            <h4>Pendidikan Terakhir</h4>
                        </label>
                        <div class="input-group"><input type="text" id="swal-input6" class="form-control"
                                placeholder="Masukkan Pendidikan Terakhir Anda"></div>
                    </div>
                    <label class="form-label">
                        <h4>Penghasilan</h4>
                    </label>
                    <div class="input-group mb-3"><select class="form-select" id="swal-input7">
                            <option selected disabled>Pilih Penghasilan Perbulan Anda</option>
                            <option value="Rp0,- s/d Rp500.000,-">Rp0,- s/d Rp500.000,-</option>
                            <option value=">Rp500.000,- s/d Rp1.000.000,-">>Rp500.000,- s/d Rp1.000.000,-</option>
                            <option value=">Rp1.000.000,- s/d Rp.1.500.000,-">>Rp1.000.000,- s/d Rp.1.500.000,-</option>
                            <option value=">Rp1.500.000,- s/d Rp2.000.000,-">>Rp1.500.000,- s/d Rp2.000.000,-</option>
                            <option value=">Rp2.000.000,- s/d Rp2.500.000,-">>Rp2.000.000,- s/d Rp2.500.000,-</option>
                            <option value=">Rp2.500.000,-">>Rp2.500.000,-</option>
                        </select></div>
                </div>
            </div>`,

        focusConfirm: false,
        showCancelButton: false,
        scrollbarPadding: false,
        confirmButtonText: "Submit",
        confirmButtonColor: "#0d6efd",
        allowOutsideClick: false,
        allowEscapeKey: false,
        width: "65%",
        preConfirm: () => {
            const name = document.getElementById("swal-input1").value;
            const gender = document.getElementById("swal-input2").value;
            const age = document.getElementById("swal-input3").value;
            const location = document.getElementById("swal-input4").value;
            const occupation = document.getElementById("swal-input5").value;
            const education = document.getElementById("swal-input6").value;
            const income = document.getElementById("swal-input7").value;

            requiredFields.name = name;
            requiredFields.gender = gender;
            requiredFields.age = age;
            requiredFields.location = location;
            requiredFields.occupation = occupation;
            requiredFields.education = education;
            requiredFields.income = income;

            if (
                !name ||
                !gender ||
                !age ||
                !location ||
                !occupation ||
                !education ||
                !income
            ) {
                Swal.showValidationMessage("All fields are required!");
                return false;
            }

            return true;
        },
    }).then((result) => {
        if (!result.isConfirmed) {
            askForUserInfo();
        } else {
            console.log("User Info:", requiredFields);
            sendDataToServer();
            return true;
            // You can proceed with the page load or any other logic here
        }
    });
