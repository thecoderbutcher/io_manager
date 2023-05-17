
const registerIO = () => {
    const actions = document.querySelectorAll('.io-actions')

    actions.forEach((action) => {
        action.addEventListener('click', function(e){
        if(e.target.id == "registrar-entrada"){
            e.target.id = "registrar-salida"
            e.target.title = "Registrar salida"
            e.target.text = "logout"
        }
        else{
            e.target.id = "registrar-entrada"
            e.target.title = "Registrar entrada"
            e.target.text = "login"
        }

        })
    })
}

document.addEventListener("DOMContentLoaded", function() {
    registerIO()
});