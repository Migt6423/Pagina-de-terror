<?php
//Funcion en el navbar para que los items esten activados dependiendo de la pagina en donde estoy
function activo ($url){
    if(!empty($_GET["seccion"]) && $_GET["seccion"] == $url):
        return("active");
    elseif(empty($_GET["seccion"])):
        $_GET["seccion"] = "home";
        return("active");
    else:
        return(""); 
    endif;
}

//Funcion en el procesar formulario para verificar que ningun campo obligatorio este vacio
function error($vacio){
    if(empty($_POST[$vacio])):
        header("Location:index.php?seccion=formulario&estado=error&campo=$vacio");
        die();
    endif;
}


//Funcion en el slider de la galeria
function imagen($nombre){
    if($nombre == "Freddy1"){
        return('img/fredcarousel.jpg');
    }else if($nombre == "jason1"){
        return('img/jason1.jpg');
    }else{
        return('img/clowcarousel.png');
}
}


//Funcion en el listado para mostrar el mensaje indicado
function exito($bien){
    if($bien == "villano_creado"):
        return "El el vilano de terror fue creado";
    elseif($bien == "villano_eliminado"):
        return "el villano de terror fue eliminado";
    elseif($bien == "villano_editado"):
        return "El vilano de terror fue editado";
    else:
        return "";
    endif; 
}


//Funcion en el registro y login para mostrar los mensajes de error
function mal($mal){
    if($mal == "email"):
        return "Falta completar el campo Email";
    elseif($mal == "password"):
        return "Falta completar el campo Password";
    elseif($mal == "usuarioExiste"):
        return "El usuario ya existe";
    elseif($mal == "campo-obligatorio"):
        return "Completar el campo Email y Password";
    elseif($mal == "no-existe"):
        return "El usuario no existe";
    elseif($mal == "dato-erroneo"):
        return "Los datos que ha ingresado son incorrectos";
    endif;
}






function LimpiarChanchadas ($descripcion){

    $chanchadas = array("puta", "mierda", "imbecil");

    $limpio = str_replace($chanchadas, "***", $descripcion);

    return $limpio;
     }






/*### RATING BETA ###*/

function calcularRating($puntaje){

    if($puntaje == 1){
        $text = 
        '
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        ';

        return $text;
    }
    if($puntaje == 2){
        $text = 
        '
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        
        ';

        return $text;
    }
    if($puntaje == 3){
        $text = 
        '
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        ';

        return $text;
    }
    if($puntaje == 4){
        $text = 
        '
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        ';

        return $text;
    }
    if($puntaje == 5){
        $text = 
        '
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        ';

        return $text;
    }

}

function calcularRatingEdit($ratingedit){
    if($ratingedit == 1){
        $text = 
        '
        <option selected>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>    
        ';
        return $text;
    }
    if($ratingedit == 2){
        $text = 
        '
        <option>1</option>
        <option selected>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        ';
        return $text;
    }
    if($ratingedit == 3){
        $text = 
        '
        <option>1</option>
        <option>2</option>
        <option selected>3</option>
        <option>4</option>
        <option>5</option>
        ';
        return $text;
    }
    if($ratingedit == 4){
        $text = 
        '
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option selected>4</option>
        <option>5</option>
        ';
        return $text;
    }
    if($ratingedit == 5){
        $text = 
        '
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option selected>5</option>
        ';
        return $text;
    }


}



?>
    

