let contraseña1 = document.getElementById("empleado_contraseña");
let contraseña2 = document.getElementById("empleado_contraseña2");


document.addEventListener("DOMContentLoaded", () => {
    contraseña2.addEventListener("focusin", () => {

        if (contraseña2.value !== contraseña1.value) {
            contraseña2.className = "form-control is-invalid";
        } else {
            contraseña2.className = "form-control is-valid";
        }

    });
});