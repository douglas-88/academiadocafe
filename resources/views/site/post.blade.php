<!--/Vai herdar da base.blade.php/-->
@extends('site.template.base',["titulopost" => $cafe->nome,"current" => "post"])

@section('body-post-content')
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-10 mx-auto ">
           <div id="post_content">
             {{$cafe->descricao}}
           </div>
          </div>
          <div class="col-lg-3">
            @component('site.componentes.pesquisar')
            @endcomponent
          </div>
        </div>
      </div>
    </article>
@endsection

@section('javascript-page-post')
<script>
        function pesquisarCafe(){
           cafe = {id:$("#cafe_id").val()}
             $.ajax({
                    type:"GET",
                    data:cafe.id,
                    url:"/api/cafe/"+cafe.id,
                    success:function(resposta){
                    
                       console.log(resposta);
                       $("#post_content").empty();
                       $("#post-title").empty();
                       $("#post-title").append(resposta.nome);
                       $("#post_content").append(resposta.descricao);

                   }
              });

   }


    $("#search_form").submit(function(event){
       event.preventDefault();
       pesquisarCafe();
       
    });


    //Para o Modal:

    //Para o Modal:
      function AbreModal(){
        $("#nomeCafe").val("");
        $("#descricaoCafe").val("");
        $("#menssage-validade").empty();
        $("#dlgProdutos").modal("show");
    };


    function criarCafe(){
     cafe = {nome:$("#nomeCafe").val(),descricao:$("#descricaoCafe").val()}
     $.ajax({
      type:"POST",
      data:cafe,
      url:"/api/cafe",
      success:function(data){
       lista = "<tr>" +
       "<td>" +data.id +   "</td>" +
       "<td>" +data.nome + "</td>" +
       "<td>" +data.descricao + "</td>"+
       "<td>";
       $('.cafe-list').prepend(lista);
       console.log(data);

       $("#dlgProdutos").modal("hide");
       carregarCafes(1);
     },

     statusCode: {
      422: function(resposta) {
        $("#nome-required").empty();
        $("#descricao-required").empty();
        $("#nome-required").append(resposta.responseJSON.errors.nome);
        $("#descricao-required").append(resposta.responseJSON.errors.descricao);
            //alert(resposta.responseJSON.errors.nome);
          }
        }
      });

   }
    
    
    $("#formCafe").submit(function(event){
       event.preventDefault();
       console.log("teste");
       $("#menssage-validade").empty();
       criarCafe();

       
    });


</script>
@endsection
  