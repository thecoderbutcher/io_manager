
const registerIO = () => {
    const actions = document.querySelectorAll('.io-actions')

    actions.forEach((action) => {
        action.addEventListener('click', function(e){  
            url = action.getAttribute('data-url') + action.getAttribute('data-action')
            empleado = action.getAttribute('data-empleado')
            registrador = action.getAttribute('data-registrador')
            actionStatus = action.getAttribute('data-status')
            console.log(empleado)
            axios({
                method: 'post',
                url: url,
                data: {
                    empleado: empleado,
                    registrador: registrador,
                    actionStatus: actionStatus
                }
            })
            .then(function(response){
                console.log(response)
            })
            if(e.target.id == "registrar-entrada"){
                e.target.id = "registrar-salida"
                e.target.title = "Registrar salida"
                e.target.firstChild.textContent = "Salida "
                e.target.lastChild.innerText = "logout"
                action.setAttribute('data-action','registrarSalida')


            }
            else{
                e.target.id = "registrar-entrada"
                e.target.firstChild.title = "Registrar entrada"
                e.target.firstChild.textContent = "Entrada "
                e.target.lastChild.innerText = "login"
                action.setAttribute('data-action','registrarEntrada')
            }
        })
    })
}

document.addEventListener("DOMContentLoaded", function() {
    registerIO()
});