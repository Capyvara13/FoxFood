function enviarDados() {
  const nome = document.getElementById('nome').value;
  const email = document.getElementById('email').value;

  const dados = {
    nome: nome,
    email: email
  };

  fetch('salvar_dados.php', { // Arquivo PHP que irá receber os dados
    method: 'POST',
    headers: {
      'Content-Type': 'application/json' // Indica que estamos enviando dados JSON
    },
    body: JSON.stringify(dados) // Converte o objeto JavaScript para uma string JSON
  })
  .then(response => response.text()) // Espera a resposta do PHP e a converte para texto
  .then(data => {
    console.log('Resposta do servidor:', data);
    alert('Dados enviados com sucesso!');
    // Aqui você pode adicionar alguma lógica para atualizar a página ou mostrar uma mensagem
  })
  .catch(error => {
    console.error('Erro ao enviar os dados:', error);
    alert('Erro ao enviar os dados.');
  });
}

function buscarDados() {
  fetch('pegar_dados.php') // Arquivo PHP que irá buscar os dados
  .then(response => response.json()) // Espera a resposta do PHP e a converte para JSON
  .then(data => {
    console.log('Dados recebidos:', data);
    // Aqui você pode manipular os dados recebidos e exibir na sua página HTML
    exibirDados(data);
  })
  .catch(error => {
    console.error('Erro ao buscar os dados:', error);
    alert('Erro ao buscar os dados.');
  });
}

function exibirDados(dados) {
  const listaDados = document.getElementById('listaDados');
  listaDados.innerHTML = ''; // Limpa a lista antes de exibir novos dados

  if (dados && Array.isArray(dados)) {
    dados.forEach(item => {
      const listItem = document.createElement('li');
      listItem.textContent = `Nome: ${item.nome_cliente}, Email: ${item.email}`; // Adapte de acordo com os campos que você quer exibir
      listaDados.appendChild(listItem);
    });
  } else {
    const listItem = document.createElement('li');
    listItem.textContent = 'Nenhum dado encontrado.';
    listaDados.appendChild(listItem);
  }
}

// Exemplo de como chamar a função para buscar dados quando a página carregar
window.onload = buscarDados;