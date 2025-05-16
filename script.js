function buscarCGM() {
  alert("Busca de CGM ainda não implementada.");
}
function buscarNome() {
  alert("Busca de Nome ainda não implementada.");
}
function excluir() {
  alert("Registro excluído (apenas exemplo).");
}

document.getElementById("cgm").addEventListener("keypress", function (e) {
  if (!/[0-9]/.test(e.key)) {
    e.preventDefault();
  }
});

document.getElementById("cep").addEventListener("keypress", function (e) {
  if (!/[0-9]/.test(e.key)) {
    e.preventDefault();
  }
});

document.getElementById("cel").addEventListener("keypress", function (e) {
  if (!/[0-9]/.test(e.key)) {
    e.preventDefault();
  }
});
