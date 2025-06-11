function excluir(codigo,tabela){
  resp = confirm("Quer realmente cancelar esse corre :" +codigo+"?");
  if(resp==true){
    $.ajax({
      type : "post",
      url : "excluir.php",
      data : {codigo:codigo,tabela:tabela},
      sucess: function (response){
        window.location.reload()
      }
    });
  }
}
$('.sucesso,.erro').click(function(e){
  e.preventDefault();
  $(this).fadeOut(500);
});

$('#burguer').click(function(e){
  e.preventDefault();
  $('.menu').toggleClass('exibir');
  $('#burguer div:first-child').toggleClass('linha1');
  $('#burguer div:nth-child(2)').toggleClass('linha2');
  $('#burguer div:last-child').toggleClass('linha3');
});

function pesquisar(texto,tabela){
  if (tabela == "tb_produtos") {
    alvo = "pesquisarTenis.act.php";
  }
  if (tabela == "tb_usuarios") {
    alvo = "pesquisarUsuarios.act.php";
  }
  $.ajax({
    type : "post",
    url : alvo,
    data : {texto:texto,tabela:tabela},
    sucess: function (response){
      $('#retorno').html(response);
    }
  });
}
