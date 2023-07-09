// Initiate
const username = document.getElementById("username");
const password = document.getElementById("password");
const passwordconfirm = document.getElementById("passwordconfirm");

var usernames = 0;
var passwords = 0;
var passwordconfirms = 0;
// var uploadfotos = 0;

// backstep2
$("#backstep2").click(function (e) {
    e.preventDefault();
    document.getElementById("step1").hidden = false;
    document.getElementById("step2").hidden = true;
    document.getElementById("step3").hidden = true;

    document.getElementById("btnstep1").hidden = false;
    document.getElementById("btnstep2").hidden = true;
    document.getElementById("btnstep3").hidden = true;

    document.getElementById("round2").setAttribute("class", "step");
});

// nextstep2
$("#nextstep2").click(function (e) {
    e.preventDefault();
    checkInputs2();
    summary();
    // document.getElementById("step1").hidden = true;
    // document.getElementById("step2").hidden = true;
    // document.getElementById("step3").hidden = false;

    // document.getElementById("btnstep1").hidden = true;
    // document.getElementById("btnstep2").hidden = true;
    // document.getElementById("btnstep3").hidden = false;
});

function checkInputs2() {
    // trim to remove the whitespaces
    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();
    const passwordconfirmValue = passwordconfirm.value.trim();
    const uploadfotoValue = uploadfoto.value.trim();

    var spaceRegex = /\s/;
    var checkvalusername = spaceRegex.test(usernameValue);
    if (usernameValue === "") {
        usernames = 0;
        return setErrorFor(username, " *Silahkan Diisi");
    } else if (checkvalusername === true) {
        usernames = 0;
        return setErrorFor(username, " *Jangan Menggunakan Spasi");
    } else {
        usernames = 1;
        setSuccessFor(username);
    }

    if (passwordValue === "") {
        passwords = 0;
        return setErrorFor(password, " *Silahkan Diisi");
    } else {
        passwords = 1;
        setSuccessFor(password);
    }

    if (passwordconfirmValue === "") {
        passwordconfirms = 0;
        return setErrorFor(passwordconfirm, " *Silahkan Diisi");
    }
    if (passwordconfirmValue != passwordValue) {
        passwordconfirms = 0;
        return setErrorFor(passwordconfirm, " *Kata Sandi Tidak Cocok");
    } else {
        passwordconfirms = 1;
        setSuccessFor(passwordconfirm);
    }

    var ExtensionFOTO = uploadfotoValue
        .substring(uploadfotoValue.lastIndexOf(".") + 1)
        .toLowerCase();
    if (uploadfotoValue === "") {
        uploadfotos = 0;
        return setErrorFor(uploadfoto, " *Silahkan Diunggah");
    } else if (
        ExtensionFOTO == "gif" ||
        ExtensionFOTO == "png" ||
        ExtensionFOTO == "bmp" ||
        ExtensionFOTO == "jpeg" ||
        ExtensionFOTO == "jpg"
    ) {
        uploadfotos = 1;
        setSuccessFor(uploadfoto);
    } else {
        uploadfotos = 0;
        setSuccessFor(uploadfoto, "*format (.png, .jpg, .jpeg)");
    }

    if (
        usernames === 1 &&
        passwords === 1 &&
        passwords === 1 &&
        passwordconfirms === 1 &&
        uploadfotos === 1
    ) {
        document.getElementById("step1").hidden = true;
        document.getElementById("step2").hidden = true;
        document.getElementById("step3").hidden = false;

        document.getElementById("btnstep1").hidden = true;
        document.getElementById("btnstep2").hidden = true;
        document.getElementById("btnstep3").hidden = false;

        document.getElementById("round3").setAttribute("class", "step active");
    }
}

//When Click Field Back to Normal
username.addEventListener("click", function () {
    defaultInput(username);
});
uploadfoto.addEventListener("click", function () {
    defaultInput(uploadfoto);
});
password.addEventListener("click", function () {
    defaultInput(password);
});
passwordconfirm.addEventListener("click", function () {
    defaultInput(passwordconfirm);
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

function summary() {
    const summarynd = document.getElementById("summarynd");
    const summarynb = document.getElementById("summarynb");
    const summaryemail = document.getElementById("summaryemail");
    const summaryno = document.getElementById("summaryno");

    const summaryuname = document.getElementById("summaryuname");

    const nd = document.getElementById("namadepan").value;
    const nb = document.getElementById("namabelakang").value;
    const email = document.getElementById("email").value;
    const no = document.getElementById("phone").value;

    const username = document.getElementById("username").value;

    summarynd.innerText = nd;
    summarynb.innerText = nb;
    summaryemail.innerText = email;
    summaryno.innerText = no;

    summaryuname.innerText = username;
}
