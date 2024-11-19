    const correctVocal = '324d59bbec96857b0b9db1fc2e1fb987';
    const correctPartial = '9be203cdfef8628939c9942fb61fdae3';
    const correctGWash = 'df384708e63878991986ebe865408aa2';

    const passvocal = () => Swal.fire({
        title: "Masukkan Kode",
        input: "password",
        inputLabel: "Masukkan kode yang telah diberikan tim PKM-RSH",
        inputPlaceholder: 'Masukkan Kode yang telah diberikan',
        allowOutsideClick: false,
        allowEscapeKey: false,
        confirmButtonText: 'Submit',
        confirmButtonColor: "#0d6efd",
        inputAttributes: {
            autocapitalize: "off",
        },
        preConfirm: (password) => {
            const passwordHash = CryptoJS.MD5(password).toString();
            if (passwordHash !== correctVocal) {
                Swal.showValidationMessage('Incorrect password, please try again');
                return false;
            }
            window.location.href= "/news-vocal";
            return true;
        }
    }); 
    const passpartial = () => Swal.fire({
        title: "Masukkan Kode",
        input: "password",
        inputLabel: "Masukkan kode yang telah diberikan tim PKM-RSH",
        inputPlaceholder: 'Masukkan Kode yang telah diberikan',
        allowOutsideClick: false,
        allowEscapeKey: false,
        confirmButtonText: 'Submit',
        confirmButtonColor: "#0d6efd",
        inputAttributes: {
            autocapitalize: "off",
        },
        preConfirm: (password) => {
            const passwordHash = CryptoJS.MD5(password).toString();
            if (passwordHash !== correctPartial) {
                Swal.showValidationMessage('Incorrect password, please try again');
                return false;
            }
            window.location.href= "/news-partial";
            return true;
        }
    }); 
    const passgwash = () => Swal.fire({
        title: "Masukkan Kode",
        input: "password",
        inputLabel: "Masukkan kode yang telah diberikan tim PKM-RSH",
        inputPlaceholder: 'Masukkan Kode yang telah diberikan',
        allowOutsideClick: false,
        allowEscapeKey: false,
        confirmButtonText: 'Submit',
        confirmButtonColor: "#0d6efd",
        inputAttributes: {
            autocapitalize: "off",
        },
        preConfirm: (password) => {
            const passwordHash = CryptoJS.MD5(password).toString();
            if (passwordHash !== correctGWash) {
                Swal.showValidationMessage('Incorrect password, please try again');
                return false;
            }
            window.location.href= "/news-gwash";
            return true;
        }
    }); 