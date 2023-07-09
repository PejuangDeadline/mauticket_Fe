// backstep3
$("#backstep3").click(function (e) {
    e.preventDefault();
    document.getElementById("step1").hidden = true;
    document.getElementById("step2").hidden = false;
    document.getElementById("step3").hidden = true;

    document.getElementById("btnstep1").hidden = true;
    document.getElementById("btnstep2").hidden = false;
    document.getElementById("btnstep3").hidden = true;

    document.getElementById("round3").setAttribute("class", "step");
});
