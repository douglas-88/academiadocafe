<!--/Vai herdar da base.blade.php/-->
@extends('site.template.base',["current" => 'home'])

@section('body-page-home')
    <!-- Main Content -->
    <div class="container"><!--/Início do conteúdo/-->
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto" id="wrapper-posts-preview">
          <div class="post-preview">
            <a href="#">
              <h2 class="post-title">
                Título do Café view HOME
              </h2>
              <h3 class="post-subtitle">
                Descrição do café
              </h3>
            </a>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Outras postagens &rarr;</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto mt-5">
          <!--Inicio Paginação-->
          <nav id="paginationNav">
            <ul class="pagination">
            </ul>
          </nav>
          <!--End Paginação-->
        </div>
      </div>
    </div><!--/end conteúdo/-->
@endsection
<!--/Vai herdar da base.blade.php/-->
@section('javascript-page-home')
  <script type="text/javascript">
     function getNextItem(data) {
        i = data.current_page+1;
        if (data.current_page == data.last_page)
            s = '<li class="page-item disabled">';
        else
            s = '<li class="page-item">';
        s += '<a class="page-link" ' + 'pagina="'+i+'" ' + ' href="javascript:void(0);">Próximo</a></li>';
        return s;
    }
    function getPreviousItem(data) {
        i = data.current_page-1;
        if (data.current_page == 1)
            s = '<li class="page-item disabled">';
        else
            s = '<li class="page-item">';
        s += '<a class="page-link" ' + 'pagina="'+i+'" ' + ' href="javascript:void(0);">Anterior</a></li>';
        return s;
    }
    function getItem(data, i) {
        if (data.current_page == i)
            s = '<li class="page-item active">';
        else
            s = '<li class="page-item">';
        s += '<a class="page-link" ' + 'pagina="'+i+'" ' + ' href="javascript:void(0);">' + i + '</a></li>';
        return s;
    }
    function montarPaginator(data) {
        $("#paginationNav>ul>li").remove();

        $("#paginationNav>ul").append(
            getPreviousItem(data)
        );

        n = 3;//Mesmo número da função: Cafe::paginate(3);

        if (data.current_page - n/2 <= 1)
            inicio = 1;
        else if (data.last_page - data.current_page < n)
            inicio = data.last_page - n + 1;
        else
            inicio = data.current_page - n/2;

        fim = inicio + n-1;

        for (i=inicio;i<=fim;i++) {
            $("#paginationNav>ul").append(
                getItem(data,i)
            );
        }
        $("#paginationNav>ul").append(
            getNextItem(data)
        );
    }
    function montarLinha(post) {
        var id = post.id;
        var url = "{{ route('post-content', '_id_') }}".replace('_id_', id);
        return  '<div class="post-preview">'+
                   '<a href='+url+' target="_blank">'+
                        '<h2 class="post-title">'+post.nome+'</h2>'+
                        '<h3 class="post-subtitle">'+post.descricao+'</h3>'+
                   '</a>'+
                '</div>';
    }
    function montarPosts(data){
      $("#wrapper-posts-preview").empty();
      for(i=0;i<data.length;i++) {
            $("#wrapper-posts-preview").append(
                montarLinha(data[i])
            );
        }
    }
    function carregarCafes(pagina) {
        $.get('{{ asset('/') }}/api/cafe', {page: pagina}, function(resp) {
            montarPosts(resp);
            /*montarPaginator(resp);
            $("#paginationNav>ul>li>a").click(function(){
                // console.log($(this).attr('pagina') );
                carregarCafes($(this).attr('pagina'));
                 $(window).scrollTop(0);
            })*/

        });
    }
    $(function(){
        carregarCafes(1);
    });
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
      url:"{{ asset('/') }}/api/cafe",
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
