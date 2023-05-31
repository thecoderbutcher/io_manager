
const registerIO = () => {
    const actions = document.querySelectorAll('.io-actions')

    actions.forEach((action) => {
        action.addEventListener('click', function(e){   
            axios({
                method: 'post',
                url: action.getAttribute('data-url') + action.getAttribute('data-action'),
                data: {
                    empleado:    action.getAttribute('data-empleado'),
                    registrador: action.getAttribute('data-registrador'),
                    dataStatus:  action.getAttribute('data-status') 
                }
            })
            .then(function(response){
                action.setAttribute('data-status',response.data)  
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

const registrarEmpleado = () => {
    form = document.forms["agregar-empleado"]
    form.addEventListener('submit',function(e){ 
        e.preventDefault()
        axios({
            method:'post',
            url: form.getAttribute('data-url'),
            data:{
                nombre: form.nombres.value,
                apellido: form.apellido.value,
                documento: form.documento.value,
                email: form.email.value,
                telefono: form.telefono.value,
                area: form.area.value,
                rol:form.rol.value
            }
        })
        .then(function(response){
            table = document.querySelector('#users-table').children
            const newuser = `
                <tr>
                    <th scope='row'>${form.documento.value}</th>
                    <td>${form.apellido.value}</td>
                    <td>${form.nombres.value}</td>
                    <td>${form.telefono.value}</td>
                    <td>${form.email.value}</td>
                    <td>${form.area.options[(form.area).selectedIndex].textContent}</td>
                </tr> 
            `
            table[1].insertAdjacentHTML("beforebegin",newuser)
        })
        location.reload()   
        location.reload()   
        location.reload()  
    })
    
}

document.addEventListener("DOMContentLoaded", function() {
    registerIO()
    registrarEmpleado()
});