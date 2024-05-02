<?php

$meus_projetos=array();

class projeto{
    public $titulo;
    public $caminho;
    public $wireframe;
    public $descricao;

    function __construct($titulo, $caminho, $wireframe, $descricao){
        $this->titulo=$titulo;
        $this->caminho=$caminho;
        $this->wireframe=$wireframe;
        $this->descricao=$descricao;
     
    }

}




$list_dir=array_diff(
    scandir("./projetos"),
    array(".","..")
);

//listando todos os projetos dentro da pasta projetos
foreach($list_dir as $file) {
    
    $list_dir2=array_diff(
        scandir("./projetos/".$file),
        array(".","..")
    );

    $titulo= $file;
    $caminho= "";
    $wireframe= "";
    $descricao= "";

// Listandos todos os arquivos dentro dos projetos
    foreach($list_dir2 as $file2) {

        //filtrar os arquivos que precisamos

        if(ucwords(strtolower($file2))==ucwords(strtolower('index.html'))){
            $caminho= './projetos/'.$file.'/'.$file2;
            
        }
        if(ucwords(strtolower($file2))==ucwords(strtolower('wireframe'))){
            $thumb='./projetos/'.$file.'/'. $file2;
            $list_img=array_diff(
                scandir($thumb),
                array('.','..')
            );
                foreach($list_img as $img) {
                    if(ucwords(strtolower($img))== ucwords(strtolower('layout.jpg'))){
                        $wireframe=$thumb.'/'.$img;
                }
             }
 
        }

        if(ucwords(strtolower($file2))== ucwords(strtolower('descricao.txt'))){
            $desc='projetos/'.$file.'/'. $file2;
            $descricao= file_get_contents($desc);
        }    

    }

     //criar objetos e armazena-los em array meus_projetos

    $obj=new projeto($titulo, $caminho, $wireframe, $descricao) ;
    array_push($meus_projetos, $obj);
}

// Mostrando o array meus_projetos
foreach($meus_projetos as $a) {

    print " <div class='card'>
    <div class='card-header'>
        <div class='card-img'>
            <img src='$a->wireframe' alt=''>
        </div>
       
    </div>
    <div class='card-content'>
        <div class='card-title'>
            <h3>$a->titulo</h3>
        </div>
        <p>$a->descricao</p>
        <a href='$a->caminho' target='blank'>Web View</a>
    </div>
</div>";

}

/* estrutura do card */

/*
        <div class="card">
            <div class="card-header">
                <div class="card-img">
                    <img src="./projetos/fz15/rascunhos/fz15-RacingBlue.jpg" alt="">
                </div>
               
            </div>
            <div class="card-content">
                <div class="card-title">
                    <h3>Yamaha Fz15- Landing Page</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolor quae facere tempora ducimus molestiae hic omnis provident dolore pariatur vero aliquid, debitis, corrupti enim. Quod quaerat incidunt nesciunt ipsa.</p>
                <a href="#" target='__blank'>Web View</a>
            </div>
        </div>

*/

