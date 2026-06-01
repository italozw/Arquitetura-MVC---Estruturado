const mesAno = document.getElementById("mesAno");
const diasContainer = document.getElementById("dias");

const prevBtn = document.getElementById("prev");
const nextBtn = document.getElementById("next");

let data = new Date();

function renderizarCalendario(){

    const ano = data.getFullYear();
    const mes = data.getMonth();

    const primeiroDia = new Date(ano, mes, 1).getDay();

    const ultimoDia = new Date(ano, mes + 1, 0).getDate();

    const meses = [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    ];

    mesAno.innerHTML = `${meses[mes]} ${ano}`;

    diasContainer.innerHTML = "";

    for(let i = 0; i < primeiroDia; i++){

        const vazio = document.createElement("div");
        diasContainer.appendChild(vazio);

    }

    for(let dia = 1; dia <= ultimoDia; dia++){

        const divDia = document.createElement("div");

        divDia.innerHTML = dia;


        const hoje = new Date();

        if(
            dia === hoje.getDate() &&
            mes === hoje.getMonth() &&
            ano === hoje.getFullYear()
        ){
            divDia.classList.add("hoje");
        }

        diasContainer.appendChild(divDia);

    }

}

prevBtn.addEventListener("click", () => {

    data.setMonth(data.getMonth() - 1);

    renderizarCalendario();

});

nextBtn.addEventListener("click", () => {

    data.setMonth(data.getMonth() + 1);

    renderizarCalendario();

});

renderizarCalendario();
alert('teste')