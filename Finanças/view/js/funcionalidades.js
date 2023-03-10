// seleciona a tabela pelo ID
const tableProfit = document.getElementById("profit");
const tableLoss = document.getElementById("expenses");

//teste
const showProfit = document.getElementById("showProfit");
const showLoss = document.getElementById("showLoss");
const showOverall = document.getElementById("showOverall");

// seleciona todas as linhas, exceto o cabeçalho
const rows = tableProfit.querySelectorAll("tr");
const rows2 = tableLoss.querySelectorAll("tr");


// cria uma array vazia para armazenar os dados da tabela
const data = [];
const data2 = [];

// itera sobre as linhas da tabela
for (let i = 0; i < rows.length; i++) {
  // cria uma variável para armazenar os dados de cada linha
  const rowData = [];

  // seleciona todas as células da linha atual
  const cells = rows[i].getElementsByClassName("preco");

  // itera sobre as células da linha atual e adiciona os dados à variável rowData
  for (let j = 0; j < cells.length; j++) {
    rowData.push(cells[j].textContent);

  }

  // adiciona a variável rowData à array data
  data.push(rowData);
}

for (let i = 0; i < rows2.length; i++) {
  // cria uma variável para armazenar os dados de cada linha
  const rowData2 = [];

  // seleciona todas as células da linha atual
  const cells2 = rows2[i].getElementsByClassName("preco");

  // itera sobre as células da linha atual e adiciona os dados à variável rowData
  for (let j = 0; j < cells2.length; j++) {
    rowData2.push(cells2[j].textContent);

  }

  // adiciona a variável rowData à array data
  data2.push(rowData2);
}

function somaLoss(){
  let soma2 = 0;
  for (let i = 0; i < data2.length; i++) {
    const valorNumerico = parseFloat(data2[i]);
    if (!isNaN(valorNumerico)) {
      soma2 += valorNumerico;
    }
  } 
  return soma2;
}

function somaProfit() {
  let soma = 0;
  for (let i = 0; i < data.length; i++) {
    const valorNumerico = parseFloat(data[i]);
    if (!isNaN(valorNumerico)) {
      soma += valorNumerico;
    }
  } 
  return soma;
}

function media(){
  var value = (somaProfit() - somaLoss());
  return value;
}

showProfit.innerHTML = "Current profit is: <br>" + "R$ " + somaProfit() + ",00";
showLoss.innerHTML = "Current spending is: <br>" + "R$ " + somaLoss() + ",00";
showOverall.innerHTML = "Current money: <br>" + "R$ " + media() + ",00";


// retorna a array com os dados da tabela
//console.log(data);
