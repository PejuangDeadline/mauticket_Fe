// Initiate
const namadepan = document.getElementById("namadepan");
const namabelakang = document.getElementById("namabelakang");
const email = document.getElementById("email");
const phone = document.getElementById("phone");

var namadepans = 0;
var namabelakangs = 0;
var emails = 0;
var phones = 0;

// nextstep1
$("#nextstep1").click(function (e) {
    e.preventDefault();
    checkInputs1();

    // document.getElementById("step1").hidden = true;
    // document.getElementById("step2").hidden = false;
    // document.getElementById("step3").hidden = true;

    // document.getElementById("btnstep1").hidden = true;
    // document.getElementById("btnstep2").hidden = false;
    // document.getElementById("btnstep3").hidden = true;
});

function checkInputs1() {
    // trim to remove the whitespaces
    const namadepanValue = namadepan.value.trim();
    const namabelakangValue = namabelakang.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();

    var format = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,<>\/?~1234567890]/;
    var checkvalnama = format.test(namadepanValue);
    if (namadepanValue === "") {
        namadepans = 0;
        return setErrorFor(namadepan, " *Silahkan Diisi");
    } else if (checkvalnama === true) {
        namadepans = 0;
        return setErrorFor(namadepan, " *Jangan Gunakan Simbol");
    } else {
        namadepans = 1;
        setSuccessFor(namadepan);
    }

    var checkvalnamabelakang = format.test(namabelakangValue);
    if (namabelakangValue === "") {
        namabelakangs = 0;
        return setErrorFor(namabelakang, " *Silahkan Diisi");
    } else if (checkvalnamabelakang === true) {
        namabelakangs = 0;
        return setErrorFor(namabelakang, " *Jangan Gunakan Simbol");
    } else {
        namabelakangs = 1;
        setSuccessFor(namabelakang);
    }

    if (emailValue === "") {
        emails = 0;
        return setErrorFor(email, " *Silahkan Diisi");
    } else if (!isEmail(emailValue)) {
        emails = 0;
        return setErrorFor(email, " *Email Tidak Valid");
    } else {
        emails = 1;
        setSuccessFor(email);
    }

    if (phoneValue === "") {
        phones = 0;
        return setErrorFor(phone, " *Silahkan Diisi");
    } else {
        phones = 1;
        setSuccessFor(phone);
    }

    if (
        namadepans === 1 &&
        namabelakangs === 1 &&
        emails === 1 &&
        phones === 1
    ) {
        document.getElementById("step1").hidden = true;
        document.getElementById("step2").hidden = false;
        document.getElementById("step3").hidden = true;

        document.getElementById("btnstep1").hidden = true;
        document.getElementById("btnstep2").hidden = false;
        document.getElementById("btnstep3").hidden = true;

        document.getElementById("username").focus();
        document.getElementById("round2").setAttribute("class", "step active");
    }
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
        email
    );
}

//When Click Field Back to Normal
namadepan.addEventListener("click", function () {
    defaultInput(namadepan);
});
namabelakang.addEventListener("click", function () {
    defaultInput(namabelakang);
});
email.addEventListener("click", function () {
    defaultInput(email);
});
phone.addEventListener("click", function () {
    defaultInput(phone);
});

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");
    small.innerText = message;
    small.setAttribute("class", "small2");
    input.setAttribute("class", "form-control fail is-invalid");
    input.focus();
}
function setSuccessFor(input) {
    input.setAttribute("class", "form-control success is-valid");
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");
    small.innerText = "";
}
function defaultInput(id) {
    id.setAttribute("class", "form-control");
    const formControl = id.parentElement;
    const small = formControl.querySelector("small");
    small.innerText = "";
    small.setAttribute("class", "small1");
}
