function pagina(opcao){
	switch(opcao){
		case 'aluno':
			location.href = "entrar_sala.html";
			break;
		case 'professor':
			location.href = "login_professor.html";
			break;
		case 'cadastrar':
			location.href = "cadastro.html";
			break;
		case 'criarSala':
			location.href = "criarsala_professor.html";
			break;
		case 'entrarJogo':
			location.href = "acompanhar_jogo.html";
			break;
		case 'gerenciarUsuario':
			location.href = "modificar_conta.html";
			break;
		default:
			alert("Página não encontrada!");
			break;
	}
};

function esconder(){
	var bianca = document.getElementById("tabela");
	if(bianca.hidden == false)
		bianca.hidden = true;
	else
		bianca.hidden = false;
};



// Pagina de cadastro do participante
var x = 2;
window.onload = function(){
	if(window.location.pathname.split('/').pop() == 'cadastro_participante.html'){
		var campoPai = document.getElementById('campoPai');
		var campos = document.getElementById('campos');
		document.getElementById('Adicionar').addEventListener('click', function(){
			var novoCampo = campos.cloneNode(true);
			novoCampo.id = novoCampo.id + x;
			
			novoCampo.children[0].textContent = "Usuario " + x + ": ";
			
			for(var y = 0; y < novoCampo.childElementCount - 1; y++){
				novoCampo.children[y].id = novoCampo.children[y].id + x;
				novoCampo.children[y].name = novoCampo.children[y].name + x;
				novoCampo.children[y].value = "";
			}
			
			campoPai.appendChild(novoCampo);
			x ++;
		});
	}
}