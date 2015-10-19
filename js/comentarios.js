jQuery(function($){
   var select = $('.ocultar-exibir'); // pega o select
   $(select).change(function(){ // ao alterar o option do select
       var valor = $(this).val(); //pega valor dos options do select
       var id_comentario = $(this).find(':selected').attr('data-id'); // pega atributo data-id do select
       var mensagem = $('.mensagens');
      $.ajax({
         url: 'js/comentarios.php',
         type: 'POST',
         data: {valor:valor,id_comentario:id_comentario},
         beforeSend:function(){
             mensagem.html('Aguarde...')
         },
         success:function(data){
             console.log(data);
             location.reload(); // atualiza página
         }
         
      });
   });
});

