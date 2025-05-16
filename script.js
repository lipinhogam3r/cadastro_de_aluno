function buscarCGM() {
  alert("Busca de CGM ainda não implementada.");
}

function buscarNome() {
  alert("Busca de Nome ainda não implementada.");
}

function cadastrar() {
  alert("Aluno cadastrado com sucesso!");
}

function excluir() {
  alert("Registro excluído.");
}

function cancelar() {
  document.querySelectorAll("input, select").forEach(el => {
    if (el.type !== "button" && !el.disabled) el.value = "";
  });
}
