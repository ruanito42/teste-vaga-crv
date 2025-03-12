function validarForm() {
    const nome = document.getElementById('nome').value;
    const telefone = document.getElementById('telefone').value;

    if (nome.trim() === '') {
        alert('Nome é obrigatório!');
        return false;
    }

    if (telefone.trim() === '') {
        alert('Telefone é obrigatório!');
        return false;
    }

    if (!/^[\d ()-]+$/.test(telefone)) {
        alert('Telefone inválido!');
        return false;
    }

    return true;
}