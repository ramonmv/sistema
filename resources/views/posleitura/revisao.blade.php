@extends('layout_documento')


@section('conteudo')



<div class="blog-header">
  <div class="container">
    <h1 class="blog-title">Revisão do Acervo</h1>
    <p class="lead blog-description">
       Veja abaixo seu acervo de dúvidas e certezas
    </p>
  </div>
</div>




<div class="container">

  <div class="row">

    <div class="col-sm-8 blog-main"> <!-- /.blog-main -->

      <div class="blog-post">

        @include('form_acervo',['btduvida' => TRUE,'btcerteza' => TRUE, 'tituloLabel' => "Escreva sua certeza ou dúvida sobre o assunto:"])

        <br> 
        <hr>

        <p class="blog-post-meta">

           Lista das minhas <a href="#">Dúvidas</a>

        </p>



         <div class="accordion-container">
          

          @foreach ($duvidas as $duvida)
           
           @if (!$duvida->deletado)   

              <div class="set">

      
                <a href="#" class="duvidass">
                  <i class="fa fa-question-circle" style="color:#E7A394" aria-hidden="true"> 
                  &nbsp;&nbsp;&nbsp;
                  </i> 

                  {{ $duvida->texto  }} 
                  &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-chevron-down" style="color:#E7A394" aria-hidden="true">   </i>

                </a>

                <div class="content">
                           
                    <ul class="xdetalhes">
                        <li> <i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#BECCD5">  &nbsp; </i>
                        Origem do Registro <a href="#">Acervo de Dúvidas e Certezas</a> </li>
                
                        <li> <i class="fa fa-calendar-o" aria-hidden="true" style="color:#BECCD5"> &nbsp; </i> 
                        Data <a href="#" title="{{$duvida->created_at}}">{{$duvida->created_at->diffForHumans()}}</a></li>
                
                        <li> <i class="fa fa-file-text-o" aria-hidden="true" style="color:#BECCD5">  &nbsp; </i>
                        Documento <a href="/abrir/{{$doc->id}}">{{$doc->titulo}}</a> </li> 
                        
                        {{-- <div class="example_cont"> --}}
                        <li >  <i class="fa fa-question-circle" style="color:#E7A394" aria-hidden="true">  &nbsp; </i> 
                        Dúvida esclarecida: 
                            <a href="#">
                                <i class="fa fa-square-o fa-hover-hidden"> </i> 
                                <i class="fa fa-check-square-o fa-hover-show"> </i> 
                                 Sim
                            </a>
                        </li>
                        <li >  &nbsp; </li>
                        <li style="color:#923925"> Desejo excluir esta dúvida definitivamente:  &nbsp;
                            <a href="/duvida/apagar/{{$duvida->id}}" style="color:#923925">
                                <i class="fa fa-square-o fa-hover-hidden"> </i> 
                                <i class="fa fa-check-square-o fa-hover-show"> </i> 
                                 Sim
                            </a>
                        </li>   
                        <li >  &nbsp; </li>                     
                      {{-- </div> --}}
                    </ul>
                 
                  
                </div>
      

              </div>

              @endif
          @endforeach
          




        </div> {{-- accordio --}}



        <br> 
        <hr>

        <p class="blog-post-meta">

          Lista das minhas <a href="#">Certezas</a>

        </p>


{{--         @foreach ($certezas as $certeza)

      
         <i class="fa fa-check-circle" style="color:#B0BAE7" aria-hidden="true"> 

            &nbsp;&nbsp;&nbsp; 
         
         </i>  

            {{ $certeza->texto  }}

            &nbsp;&nbsp;&nbsp;  

        <a href="#" data-idd="171"><i class="fa fa-chevron-down" style="color:#B0BAE7" aria-hidden="true">   </i> </a>
        <div name="detalhes" class="detalhes" style='display: none;' id="171">
          Lista de itens
        </div>


        <br>

        @endforeach --}}



        <div class="accordion-container">

          

          @foreach ($certezas as $certeza)
            
           @if (!$certeza->deletado)   

            <div class="set">

            
            <a href="#" >
              <i class="fa fa-check-circle" style="color:#B0BAE7" aria-hidden="true"> 
                &nbsp;&nbsp;&nbsp;
              </i> 

              {{ $certeza->texto  }}   
              &nbsp;&nbsp;&nbsp;
              <i class="fa fa-chevron-down" style="color:#B0BAE7" aria-hidden="true">   </i>

            </a>

            <div class="content">
             
              <ul class="xdetalhes">
                
                <li> <i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#BECCD5">  &nbsp; </i>
                Origem do Registro <a href="#">Acervo de Dúvidas e Certezas</a> </li>
                
                <li> <i class="fa fa-calendar-o" aria-hidden="true" style="color:#BECCD5"> &nbsp; </i> 
                Data <a href="#" title="{{$certeza->created_at}}">{{$certeza->created_at->diffForHumans()}}</a></li>
                

                <li> <i class="fa fa-file-text-o" aria-hidden="true" style="color:#BECCD5">  &nbsp; </i>
                Documento <a href="/abrir/{{$doc->id}}">{{$doc->titulo}}</a> </li>
                
{{--                 <li> <i class="fa fa-commenting" aria-hidden="true" style="color:#BECCD5">  &nbsp; </i>
                Contribuições: <a href="/abrir/{{$doc->id}}">3 Comentários</a> </li>

                <li> <i class="fa fa-thumbs-up" aria-hidden="true" style="color:#BECCD5">  &nbsp; </i>
                Posicionamentos: <a href="/abrir/{{$doc->id}}">3 votos</a> </li>
 --}}

{{--                 <li style="color:#923925"> 
                  <i class="fa fa-question-circle" style="color:#E7A394" aria-hidden="true">  &nbsp; </i> 
                  Converter essa certeza em dúvida:  &nbsp;
                  <a href="#" style="color:#923925">
                    <i class="fa fa-square-o fa-hover-hidden"> </i> 
                    <i class="fa fa-check-square-o fa-hover-show"> </i> 
                    Sim
                  </a>
                </li> --}}

                <li >  &nbsp; </li>
                <li style="color:#31698A"> Desejo excluir esta certeza definitivamente:  &nbsp;
                    <a href="/certeza/apagar/{{$certeza->id}}" tyle="color:#31698A">
                        <i class="fa fa-square-o fa-hover-hidden"> </i> 
                        <i class="fa fa-check-square-o fa-hover-show"> </i> 
                         Sim
                    </a>
                </li>   
                <li >  &nbsp; </li>


                {{-- </div> --}}
              </ul>
              
              
            </div>
            

          </div>

          @endif

          @endforeach
          




        </div> {{-- accordio --}}


      </div>


{{--       <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Somente as certezas</a>
        <a class="btn btn-outline-primary " href="#">Somente as Dúvidas</a>
      </nav>
 --}}




    </div><!-- /.blog-main -->

{{--     <div class="col-sm-3 offset-sm-1 blog-sidebar">

     @include('abrir.menuLateral_meuAcervo')

   </div><!-- /.blog-sidebar --> --}}



 </div><!-- /.row -->

</div><!-- /.container -->




<script type="text/javascript">

jquery("#divFormAcervo").show(1000);


$(document).ready(function(){
  $(".set > a").on("click", function(){
     event.preventDefault();
    if($(this).hasClass('active'))
    {
      $(this).removeClass("active");
      $(this).siblings('.content').slideUp(200);

      // $(".set > a i").removeClass("fa-chevron-up").addClass("fa-chevron-down");
      // $("iconeCerteza").addClass("fa fa-question-circle");
      //id="iconeCerteza" class="fa fa-question-circle"
    }
    else
    {
      // $(".set > a i").removeClass("fa-chevron-up").addClass("fa-chevron-down");
      // $(this).find("i").removeClass("fa-chevron-down").addClass("fa-chevron-up");
      $(".set > a").removeClass("active");
      $(this).addClass("active");
      $('.content').slideUp(200);
      $(this).siblings('.content').slideDown(200);
      // $("iconeCerteza").addClass("fa fa-question-circle");
    }
    
  });
});

</script>




@endsection

@include('formModal_resposta')
  