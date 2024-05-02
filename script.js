function menuOpen(){
   let sidebar= document.querySelector('.menu-content')

   sidebar.classList.toggle('active')
}

window.addEventListener('load',()=>{
   document.querySelector('.toggle').addEventListener('click', menuOpen)

   /* atribuindo menuOpen a todos os links do menu */
   for(let c=0; c<=document.querySelectorAll('.menu-content li a').length-1;c++){
      document.querySelectorAll('.menu-content li a')[c].addEventListener('click', menuOpen)
   }


   /* carregando os projetos na pagina com jquery ajax */

   // $.get('./php/diretorio.php',{})
   //    .done((data)=>{
   //       $('#projects').append(data)
   //    })

})



