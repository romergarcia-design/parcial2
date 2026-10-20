const formulario = document.querySelector("#form-horno");
const aviso = document.querySelector("#aviso-horno");

function validarFormulario(event) {

    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const pedido = document.querySelector("#pedido").value;

    if (nombre === "" || correo === "") {


        event.preventDefault();

    } else if (!correo.includes("@")) {

               event.preventDefault();

    } else {

        
    }
}

formulario.addEventListener("submit", validarFormulario);