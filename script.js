function trocar(){
    var formulario = document.getElementById('form')
    var img_consultar = document.getElementById('imagem_consultar')
    var botao = document.getElementById('botao_01')

    if(img_consultar.style.display == 'block' && formulario.style.display ){
        img_consultar.style.display = 'none'
        formulario.style.display = 'block'
        botao.value = 'Consultar meu cliente'
        botao.value = 'Envie os dados'
        
        
     
    }else{
       img_consultar.style.display = 'block'
       formulario.style.display = 'none' 
       botao.value = 'Consultar meu cliente'
      
      
    }

}

function menu_escondido(){
    var menu_escondido = document.getElementById('menu_escondido')
    if(menu_escondido.style.display == 'none'){
        menu_escondido.style.display = 'block'
    }else{
        menu_escondido.style.display = 'none'
    }
}

