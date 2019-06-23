<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('stilos_css/stilos.css')}}">
    <link rel="stylesheet" href="{{asset('stilos_css/style_cad.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,800&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
    <header class="header_first">
        <div class="header_bloc">
           <img  class="logo_header"src="images/logo_nav_principal.png" alt="">
           <i class="fal fa-user-circle"></i>
           <i class="fal fa-search"></i>
                <nav class="menu_header">
                    <a class="iten" href="#">CATEGORIAS</a>
                    <a class="iten" href="#">LEILÕES</a>
                    <a class="iten" href="#">LOJAS</a>
                    <a class="iten" href="#">VENDA MAIS RAPIDO</a>
                    <a href="#"><button class="botton_header" type="button">PUBLICAR ANÚNCIO</button></a>
                </nav>
            <div class="header_icon"></div>
        </div>       
    </header>
    <div class="baner"  >
        <h1>Aqui baner</h1>
    </div>

<section class="sessao_form area_form ">
    <div class="bloc_first">
            <div>
                    <div class=""> 
                         <h1 class="text_h">Em qual categoria deseja anunciar?</h1>
                         <p  class="text_p" >Selecione a categoria mais adequada para seu anúncio.</p>
                     </div> 
                    <ul class="select_cat">
                        <li class="iten_cat"><a class="select_text" href="#">Equíno</a></li>
                        <li class="iten_cat"><a class="select_text" href="#">Caprino</a></li>
                        <li class="iten_cat"><a class="select_text" href="#">Bolvino</a></li>
                        <li class="iten_cat"><a class="select_text" href="#">Ovino</a></li>
                        <li class="iten_cat"><a class="select_text" href="#">Fazenda</a></li>
                        <li class="iten_cat"><a class="select_text" href="#">Maquinario</a></li>
                    </ul>
                 </div>
                 
                 <h1 class="text_h">Qual o tipo do seu anúncio?</h1>
                 <p class="text_p">Informe a classificação do seu anúncio abaixo. Quanto mais específico, melhores serão seus resultados!</p>
                 <div class="sub_1">

                    <ul class="select_cat">
                        <li class="iten_cat">?</li>
                        <li class="iten_cat">?</li>
                        <li class="iten_cat">?</li>
                    </ul>  
                    <i class="fal fa-caret-right"></i>
                 </div>
                 <div clas>
                        <ul>
                            <li>?</li>
                        </ul>  
         
                </div>
    </div>
    
    
    
    
    
    
    
    
    <div class="bloc_secont">
         
        <div class="pos">
        <form class="aaa">
            <h1 class="text_h">Descreva abaixo sua oferta.</h1>
            <p class="text_p" >Defina as pricipais características do seu anúncio.</p>
            

            <label class="text_labe_input"  for="2">Titulo:
            <input class="input_sl_1 " type="text" name="title" id="2"></label>
        
            

            <label class="text_labe_area"  for="">Descrição:
            <textarea class="cx_desc"></textarea></label>
            
            
            
            <label class="text_labe_input" for="">Preço:
                <div class="ps_pr">
                        <input class="input_sl_2" type="text">
                        <span>Por:</span>
                        <select class="tip options" >
                                <option value="animal">animal</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                        </select>
                        <br><input  class="chec" type="checkbox" name="vehicle1" value="Bike"> Valor a negociar  
                    </div> 
                </label>
            
                <br><label class="text_labe_input" for="">Localização:
                <input class="input_sl_1" type="text"name="title" ></label>
                
                <h1 class="text_h">Informações Genealógicas:</h1>
    
                <label class="text_labe_input" for="">Pai:
                <input class="input_sl_1" type="text" name="title"></label>
            
                <label class="text_labe_input" for="">Mãe:
                <input class="input_sl_1" type="text"name="title"></label>
                
                <label class="text_labe_input" for="">Avô Paterno:
                <input class="input_sl_1" type="text"name="title" ></label>
                
                <label class="text_labe_input" for="">Avó Paterno:
                <input class="input_sl_1" type="text"name="title" ></label>
                
                <label class="text_labe_input" for="">Avô Materno:
                <input class="input_sl_1" type="text"name="title" ></label>
                
                <label class="text_labe_input" for="" >Avó Paterno:
                <input class="input_sl_1" type="text" name="title"></label>
                
                <label class="text_labe_input" for="1">Valor a negociar:
                <input  class="input_sl_1" type="text" id="1"></label>
            </form>  </div> 

    </div>
    <div class="bloc_third"> 
        <div class="pos2" >  
            <h1>Adicionar imagens</h1>
             <div class="add_images"></div>
             <input type="file">
             <h1>Adicionar Videos</h1>
             <p>Torne seu anuncio mais atrativo, adicione um video</p>
             <div class="add_video"></div>
             <div class="line_bot">
             <button class="save_bot">Salvar Alterações</button>
             </div>
        </div>
    </div>
    </div>
    <div class="bloc_fourth">
        
       <p class="text_submit p1">Nome da Importante: Só serão permitidos anúncios nas seguintes categorias:
            Bovinos, Equídeos, Caprinos, Ovinos e Propriedades relacionados à pecuária. Anúncios fora 
            dessas categorias serão excluídos sem aviso prévio e não haverão reembolsos caso possuam algum 
            plano associado.vó materno</p>  
        <p class="text_submit p2">Ao publicar um anúncio você concorda e aceita os <b>Termos e Condições</b> 
            do Clube Rural.</p>
            <div class="line_bot">
                <button class="save_bot">Salvar</button>
            </div>
    </div>
</section>





















   
    
  
   
   
   
    <footer>Footer</footer>
</body>
</html>