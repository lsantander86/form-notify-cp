const formulario = document.getElementById('formulario');

const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{5,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{5,40}$/,
    dni: /^\d{8}(?:[-\s]\d{4})?$/,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const validarFormulario = (e) => {
switch (e.target.name){
    case "email":
        if(expresiones.email.test(e.target.value)){
            document.getElementById('grupo__email').classList.remove('formulario__grupo-incorrecto');
            document.getElementById('grupo__email').classList.add('formulario__grupo-correcto');
        }else{
            document.getElementById('grupo__email').classList.add('formulario__grupo-incorrecto');
        }        

    break;
    case "nombre":        

    break;
    case "apellido":        

    break;
    case "razonsocial":        

    break;
    case "numdoc":        

    break;
    case "localidad":        

    break;
    case "direccion":        

    break;
    case "cp":        

    break;
    case "telefono":        

    break;

}
}

inputs.forEach((input) => {
    input.addEventListener('keyup',validarFormulario);
    input.addEventListener('blur',validarFormulario);
});
 
formulario.addEventListener('submit', (e) => {
    e.preventDefault();

});