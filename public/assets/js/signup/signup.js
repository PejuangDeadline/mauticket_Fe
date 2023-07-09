document.getElementById("step1").hidden = false;
document.getElementById("step2").hidden = true;
document.getElementById("step3").hidden = true;

document.getElementById("btnstep1").hidden = false;
document.getElementById("btnstep2").hidden = true;
document.getElementById("btnstep3").hidden = true;

const colfoto = document.getElementById("colfoto");
const uploadfoto = document.getElementById("uploadfoto");
const previewfoto = document.getElementById("previewfoto");
previewfoto.style.display = "none";

uploadfoto.onchange = (evt) => {
    previewfoto.style.display = "block";
    const [filefoto] = uploadfoto.files;
    if (filefoto) {
        colfoto.setAttribute("class", "col-lg-6");
        previewuploadfoto.src = URL.createObjectURL(filefoto);
        previewuploadfoto.style.width = "100%";
        previewuploadfoto.style.height = "auto";

        previewuploadfoto2.src = URL.createObjectURL(filefoto);
        previewuploadfoto2.style.width = "100%";
        previewuploadfoto2.style.height = "auto";
    } else {
        colfoto.setAttribute("class", "col-lg-12");
        previewfoto.style.display = "none";
    }
};
