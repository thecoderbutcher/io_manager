const activeButtonLateral = () => {
    buttons = document.querySelector('.btn-lateral-action')
    buttons.forEach((button) =>{
        button.addEventListener('click', function(e){
            button.classList.toggle('active')
        })
    })
}

const registerIO = () => {
    const actions = document.querySelectorAll('.io-actions')
    actions.forEach((action) => {
        action.addEventListener('click', function(e){
            axios({
                method: 'post',
                url: action.getAttribute('data-url') + action.getAttribute('data-action'),
                data: {
                    empleado:    action.getAttribute('data-empleado'),
                    registrador: document.querySelector('#users-tbody').getAttribute('data-registrador'),
                    dataStatus:  action.getAttribute('data-status') 
                }
            })
            .then(function(response){
                action.setAttribute('data-status',response.data)  
            })
            if(e.target.id == "registrar-entrada"){
                e.target.id = "registrar-salida"
                e.target.title = "Registrar salida"
                e.target.firstChild.textContent = "Salida"
                action.setAttribute('data-action','registrarSalida')
            }
            else{
                e.target.id = "registrar-entrada"
                e.target.firstChild.title = "Registrar entrada"
                e.target.firstChild.textContent = "Entrada"
                action.setAttribute('data-action','registrarEntrada')
            }
            action.classList.toggle("entrada")
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
    })
}

const buscarEmpleado = () => {
    empleado = document.querySelector('.buscar-empleado')
    empleado.addEventListener('keyup', function(){ 
        axios({
            method: 'post',
            url: empleado.getAttribute('data-url'),
            data:{
                value: this.value
            }
        })
        .then(function(response){ 
            document.querySelector("#users-tbody").innerHTML = response.data
            registerIO()
        })
    })
} 

function validarcampo(e) {
    e.preventDefault();
    const csobres = document.getElementById('csobres').value;
    const tvalidos = document.getElementById('tvalidos').value;
    const vnulos = document.getElementById('vnulos').value;
    const vrecurridos = document.getElementById('vrecurridos').value;
    const viimpugnada = document.getElementById('viimpugnada').value;

    const sumaVotos = parseInt(tvalidos) + parseInt(vnulos) + parseInt(vrecurridos) + parseInt(viimpugnada);
    const intcsobres = parseInt(csobres);
    if (intcsobres !== sumaVotos) {
        console.log(sumaVotos);
        console.log(intcsobres);
        alert("No coincide cantidad de sobres con total de votos");
        return false;
    
    }
    else {
        console.log(sumaVotos);
        console.log(csobres);
        console.log("no funciono");
        return false;
    }
};

document.addEventListener("DOMContentLoaded", function() {
    registerIO()
    buscarEmpleado()
    registrarEmpleado()
    activeButtonLateral()
    /* const btngob = document.getElementById('botonsubmit');
        btngob.addEventListener("click",(e) => {
            validarcampo(e)
        });

    document.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
        }
    });
    
    
    

    let cantSobres = document.getElementById('csobres1')
    let tvalidos = document.getElementById('tvalidos')
    var caca=  tvalidos.addEventListener('change', (e)=>{
        return e.target.value
    });
    console.log(caca)

    let vnulos = document.getElementById('vnulos')
    let vrecurridos = document.getElementById('vrecurridos')
    let viimpugnada = document.getElementById('viimpugnada')
    let vblanco = document.getElementById('vblanco')

    const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  }); */
});
