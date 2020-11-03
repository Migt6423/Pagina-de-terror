<?php
//array asociativo para navbar
session_start();
$navbar=[];
    $navbar["Home"]="index.php?seccion=home";
    $navbar["Galeria"]="index.php?seccion=galeria";
    $navbar["peliculas"]="index.php?seccion=peliculas";
    $navbar["Formulario"]="index.php?seccion=formulario";
    if(empty($_SESSION["usuario"])){
    $navbar["Iniciar Sesion"]="iniciosesion.php?seccion=iniciar&estado=ok";
    }else{
    $navbar["Cerrar Sesion"]="cerrarsesion.php";
    if($_SESSION["usuario"]["perfil"] == "admin"){
        $navbar["Panel Control"] = "panel/index.php";
    }
}
?>

<?php
//array multidimensional pagina home (abrir con notepad/codificacion/utf8 sin bom)
$home=[];
    $home[0]=[];
        $home[0]["imagen"]="img/Freddy1.jpg";
        $home[0]["titulo"]="Freddy Krueger";
        $home[0]["descripcion"]=file_get_contents("descripcion/freddy.txt");
        /*  */
        $home[1]=[];
        $home[1]["imagen"]="img/jason.jpg";
        $home[1]["titulo"]="Jason Voorhees";
        $home[1]["descripcion"]=file_get_contents("descripcion/jason.txt");
        /* */
        $home[2]=[];
        $home[2]["imagen"]="img/clow1.jpg";
        $home[2]["titulo"]="Pennywise, el payaso";
        $home[2]["descripcion"]=file_get_contents("descripcion/clow.txt");
?>
<?php
//array para galeria Freddy
$galeria1=[];
    $galeria1[0]="img/Freddy7.jpg";
    $galeria1[1]="img/Freddy2.jpg";
    $galeria1[2]="img/Freddy3.jpg";
    $galeria1[3]="img/Freddy4.jpg";
    $galeria1[4]="img/Freddy5.jpg";
    $galeria1[5]="img/Freddy6.jpg";

?>
<?php
//array multimensional para galeria Jason y Pennywise, el payaso
$galeria2=[];
    $galeria2["---Jason Voorhees---"]=[];
        $galeria2["---Jason Voorhees---"][0]="img/jason5.jpg";
        $galeria2["---Jason Voorhees---"][1]="img/jason2.jpg";
        $galeria2["---Jason Voorhees---"][2]="img/jason3.jpg";
        $galeria2["---Jason Voorhees---"][3]="img/jason4.jpg";
    $galeria2["---Pennywise, el payaso---"]=[];
        $galeria2["---Pennywise, el payaso---"][0]="img/clow1.jpg";
        $galeria2["---Pennywise, el payaso---"][1]="img/clow5.jpg";
        $galeria2["---Pennywise, el payaso---"][2]="img/clow3.jpg";
        $galeria2["---Pennywise, el payaso---"][3]="img/clow4.jpg";
?>
<?php
//array asociativo para checkbox en la pagina formulario
$checkbox=[]; 
$checkbox["Viernes 13"]="Viernes 13 ";
$checkbox["El Conjuro"]="El Conjuro";
$checkbox["Chuky el muñeco Maldito"]="Chucky el muñeco Maldito";
$checkbox["Hallowen"]="Halloween";
$checkbox["Terro en la calle elm"]="Terror en la Calle elm";
?>
<?php
//array multidimensional para textbox en la pagina formulario
$text=[];
    $text[0]=[];
        $text[0]["titulo"]="¿Que es lo que más te aterraria ver en una película?";
        $text[0]["datos"]="pregunta";
        $text[0]["placehold"]="Ingrese su respuesta";
    $text[1]=[];
        $text[1]["titulo"]="¿Algo más que quiera compartir?";
        $text[1]["datos"]="comentario";
        $text[1]["placehold"]="Ingrese su comentario";
?>
<?php
//array para formulario "Nuevo Villano"
$personaje=[];
    $personaje[0]="Scout";
    $personaje[1]="Soldier";
    $personaje[2]="Pyro";
    $personaje[3]="Demoman";
    $personaje[4]="Heavy";
    $personaje[5]="Engineer";
    $personaje[6]="Medic";
    $personaje[7]="Sniper";
    $personaje[8]="Spy";
    $personaje[9]="Multiple";
?>