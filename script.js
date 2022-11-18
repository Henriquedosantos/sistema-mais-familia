
var icone_menu = document.getElementById('menu_icon')
var menu = document.getElementById('menu')
var menu_aberto = document.getElementById('img-menu-ativo')


// ativando o menu

function ativar_menu(){
    if(icone_menu.style.display != "block"){
        menu.style.display = "flex"
    }
}

icone_menu.addEventListener('click',ativar_menu)


// desativando o menu

function fechar_menu(){
  if(icone_menu.style.display != 'none'){

    menu.style.display = "none"
   
  }
}

menu_aberto.addEventListener('click',fechar_menu)



// ativar consulta 33

var ativar_form = document.getElementById("ativar_consulta") // formulario ativar
var form_container = document.getElementById('form_container') // container do formulario
var img = document.getElementById('img_container') // imagem
var h1_msg = document.getElementById('h1_msg') // mensagem do titulo
var p_msg = document.getElementById('p_msg') // mensagem do paragrafo
var entre_contato = document.getElementById('entre-contato') // botão entrar em contato





    function ativar_formulario(){
      


        if(form_container.style.display != 'flex'){

            form_container.style.display = 'flex'
            img.style.display = 'none'
            h1_msg.style.animation = 'simples 3s 1s ease-in-out forwards;'
            h1_msg.innerHTML = 'Duvidas de como consultar?'
            p_msg.innerHTML = 'Fale com o nosso escritorio clicando no botão abaixo.'
            ativar_form.style.display = 'none'
            entre_contato.style.display = 'flex'
           

        }else{
            form_container.style.display = 'none'
            img.style.display = 'block'
            h1_msg.innerHTML = 'Consulte seu cliente clicando'
            p_msg.innerHTML = 'Seja bem vindo ao sistema de consulta do cartão MAIS FAMÍLIA.'
            

        }
    }



ativar_form.addEventListener('click',ativar_formulario)




