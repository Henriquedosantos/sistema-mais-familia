
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


