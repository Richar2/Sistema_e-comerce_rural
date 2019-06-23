<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('stilos_css/user.css')}}">
    <link rel="stylesheet" href="{{asset('stilos_css/stilos.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('icon/style.css')}}"></head>
    <title>Document</title>
</head>
<body>
<section class="user_section">
        <div class="bloc_user_header">1
            <div class=header_user>
               <div>
                   <h1 class="titol">Bem - vindo (a) <b>maycon cabral </b></h1>
                   <h2>Este é o seu painel administrativo. Acompanhe suas negociações, compras e mensagens atraves dos botões abaixo.</h2>
               </div>
               <nav class="menu_user">
                   <ul class="menu_user_itens">
                        <li class=iten_user><a class=text_inten_menu href="#"><i class="fal fa-user"></i> Minha Conta</a></li>
                        <li class=iten_user><a class=text_inten_menu href="#"><i class="fal fa-tag"></i>Meus anuncios</a></li>
                        <li class=iten_user><a class=text_inten_menu href="#"><i class="fal fa-comment-alt-lines"></i>Mensagens</a></li>
                        <li class=iten_user><a class=text_inten_menu href="#"><i class="fal fa-shopping-cart"></i>compras</a></li>
                        <li class=iten_user><a class=text_inten_menu href="#"><i class="fal fa-money-check-alt"></i>Planos</a></li>
                    </ul>
                </nav>
            </div>

        </div>
        <div class="bloc_user_content">
            <form class="form_cad_user">
                <div class="bloc_cad_user1">
                    

                    <div class="container_form_user">
                        
                        <h2>Minha conta</h2>
                        
                        <label class="label_form" for="">E-Mail:
                            <input class="input_form_user" type="text">
                            
                        </label>
                        
                        <div class="bt">
                                <button class="bt_auter_senha"><i class="fal fa-lock-alt"></i>Alterar Senha</button>
                        </div>
                        
                        
                        <label class="label_form" for="">Nome Completo:
                            <input class="input_form_user" type="text">
                        </label>
                        
                        <label class="label_form" for="">Telefone:
                            <input class="input_form_user tip2" type="text">
                            <input class="input_form_user tip3 " type="text">
                        </label>
                        
                        <label class="label_form" for="">RG:
                            <input class="input_form_user" type="text">
                        </label>
                        
                        <label class="label_form" for="">CPF:
                            <input class="input_form_user" type="text">
                        </label>
                        
                        <label class="label_form" for="">Nacionalidade:
                            <input class="input_form_user" type="text">
                        </label>
                        
                        <label class="label_form" for="">Estado Civil:
                            <input class="input_form_user" type="text">
                        </label>
                        
                        <label class="label_form" for="">Profissão:
                            <input class="input_form_user" type="text">
                        </label>
                        
                        <label class="label_form" for="">CRECI
                            <input class="input_form_user tip4" type="text">
                            <button class="tip5">CHECAR CRECI</button>
                        </label>
                        
                        <h2>Referência Comercial</h2>
                        <label class="label_form" for="">Nome:
                            <input class="input_form_user" type="text">
                        </label> 
                        
                        <label class="label_form" for="">Telefone:
                                <input class="input_form_user tip2" type="text">
                                <input class="input_form_user tip3" type="text">
                        </label>
                    
                    
                        <div>
                                <h2>Notificações</h2>
                                  <div>
                                       <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                        </label>
                                  </div>
                            </div>      
                    
                    




                            <div>
                                    <h2>categoriar de interesse</h2>
                                        <div class="li_ci">
                                            <ul class="object_ci">
                                                <li class="object_iten_ci"> 
                                                    <input type='checkbox' name='q1_myOptions[]' id="bovino"/>
                                                    <label for="bovino"></label>
                                                    <p class="text_ci">Bovinos</p>
                                                </li>
                                                <li class="object_iten_ci">
                                                        <input type='checkbox' name='q1_myOptions[]' id="equideo"/>
                                                        <label for="equideo"></label>
                                                        <p class="text_ci" >Equídeos</p> 
                                                </li>
                                                <li class="object_iten_ci">
                                                        <input type='checkbox' name='q1_myOptions[]' id="caprino"/>
                                                        <label for="caprino"></label>
                                                        <p class="text_ci" >Caprinos</p> 
                                                </li>
                                                <li class="object_iten_ci">
                                                        <input type='checkbox' name='q1_myOptions[]' id="ovino"/>
                                                        <label for="ovino"></label>
                                                        <p class="text_ci" >Ovinos</p> 
                                                </li>
                                                <li class="object_iten_ci">
                                                        <input type='checkbox' name='q1_myOptions[]' id="propriedades"/>
                                                        <label for="propriedades"></label>
                                                        <p class="text_ci" >Propriedades</p> 
                                                </li>
                                                <li class="object_iten_ci">
                                                        <input type='checkbox' name='q1_myOptions[]' id="maquinario"/>
                                                        <label for="maquinario"></label>
                                                        <p class="text_ci" >Maquinarios</p> 
                                                </li>
                                            </ul>
                                        </div>
                                    </div>        
                    
                    
                    
                    
                    
                    
                    </div>
                            
                    
                </div>
                <div class="bloc_cad_user2">
                    <div class="al">   
                    <div class="container_form_user">
                                <h2>Endereço</h2>
                                <label class="label_form" for="">CEP:
                                        <input class="input_form_user tip4" type="text">
                                        <button class="tip5">  CHECAR CEP </button>
                                </label>

                                <label class="label_form" for="">lagradouro:
                                        <input class="input_form_user" type="text">
                                </label>

                                <label class="label_form" for="">numero:
                                    <input class="input_form_user" type="text">
                                </label>
                                    
                                <label class="label_form" for="">Complemento:
                                    <input class="input_form_user" type="text">
                                </label>

                                <label class="label_form" for="">Bairro:
                                    <input class="input_form_user" type="text">
                                </label>
                                
                                <label class="label_form" for="">Cidade:
                                    <input class="input_form_user" type="text">
                                </label>

                                <label class="label_form" for="">Estado:
                                    <input class="input_form_user" type="text">
                                </label>
                                <h2>Banco</h2>
                                <label class="label_form" for="">Nome do Banco:
                                    <input class="input_form_user" type="text">
                                </label>

                                <label class="label_form" for="">Agência:
                                    <input class="input_form_user" type="text">
                                </label>
                                     
                                <label class="label_form" for="">Gerente:
                                    <input class="input_form_user" type="text">
                                </label>




                        </div>    
                    </div> 

                </div>
                <div class="bloc_cad_user3">
                  <div class="footer_user_save">
                    <p class="text_p">Ao clicar em "Salvar alterações", você estará aceitando os<b> Termos de Uso e a Política de Privacidade.</b></p>
                    <button class="bt_user_save">Salvar alterações</button>  
                 </div> 
                </div>
            </form>
        </div>
    </section>

</body>
</html>    