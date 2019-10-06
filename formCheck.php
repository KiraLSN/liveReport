<?php 
    include('conexao.php');







if(isset($_POST['btnSend'])){
    try {
        
        if(isset($_POST['alimentacao'])){
    $alimentacao = 'G';
    $justali = 'GOOD';
}else{
    $alimentacao = 'NG';
    $justali = $_POST['justali'];
}

if(isset($_POST['otico'])){
    $otico = 'G';
    $justotic = 'GOOD';
}else{
    $otico = 'NG';
    $justotic = $_POST['justotic']; 
}

if(isset($_POST['mecanico'])){
    $mecanico = 'G';
    $justmecanic = 'GOOD';
}else{
    $mecanico = 'NG';
    $justmecanic = $_POST['justmecanic'];
}

if(isset($_POST['fita'])){
    $fita = 'G';
    $justfita = 'GOOD';
}else{
    $fita = 'NG';
    $justfita = $_POST['justfita'];
}

if(isset($_POST['integridade'])){
    $integridade = 'G';
    $justintegro = 'GOOD';
}else{
    $integridade = 'NG';
    $justintegro = $_POST['justintegro'];
}

if(isset($_POST['sinalizacao'])){
    $sinalizacao = 'G';
    $justsinal = 'GOOD';
}else{
    $sinalizacao = 'NG';
    $justsinal = $_POST['justsinal'];
}

if(isset($_POST['conservacao'])){
    $conservacao = 'G';
    $justconserv = 'GOOD'; 
}else{
    $conservacao = 'NG';
    $justconserv = $_POST['justconserv'];
}



$codigo = $_POST['codigo'];

//$tipo = $_POST['tipo'];
$tipo = "AGV";
            $stm = $conexao_pdo->prepare("INSERT INTO `check_list` (`codigo`, `tipo`, `alimentacao`, `justali`, `otico`, `justotic`, `mecanico`, `justmecanic`, `fita`, `justfita`, `integridade`, `justintegro`, `sinalizacao`, `justsinal`, `conservacao`, `justconserv`)  values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $stm->bindValue(1, $codigo);
            $stm->bindValue(2, $tipo);
            $stm->bindValue(3, $alimentacao);
            $stm->bindValue(4, $justali);
            $stm->bindValue(5, $otico);
            $stm->bindValue(6, $justotic);
            $stm->bindValue(7, $mecanico);
            $stm->bindValue(8, $justmecanic);
            $stm->bindValue(9, $fita);
            $stm->bindValue(10, $justfita);
            $stm->bindValue(11, $integridade);
            $stm->bindValue(12, $justintegro);
            $stm->bindValue(13, $sinalizacao);
            $stm->bindValue(14, $justsinal);
            $stm->bindValue(15, $conservacao);
            $stm->bindValue(16, $justconserv);
            
            $stm->execute();
        
        
        echo "Codigo: ";
        echo $codigo;
        echo "<br>";
        echo "Tipo: ";
        echo $tipo;
        echo "<br>";
        echo "Alimentacao: ";
        echo $alimentacao;
        echo "<br>";
        echo "Justali: ";
        echo $justali;
        echo "<br>";
        echo "Otico: ";
        echo $otico;
        echo "<br>";
        echo "Justotic: ";
        echo $justotic;
        echo "<br>";
        echo "Mecanico: ";
        echo $mecanico;
        echo "<br>";
        echo "JustMecanic: ";
        echo $justmecanic;
        echo "<br>";
        echo "Fita: ";
        echo $fita;
        echo "<br>";
        echo "Justfita: ";
        echo $justfita;
        echo "<br>";
        echo "Integridade: ";
        echo $integridade;
        echo "<br>";
        echo "Justintegro: ";
        echo $justintegro;
        echo "<br>";
        echo "Sinalizacao: ";
        echo $sinalizacao;
        echo "<br>";
        echo "Justsinal: ";
        echo $justsinal;
        echo "<br>";
        echo "Conservacao: ";
        echo $conservacao;
        echo "<br>";
        echo "Justconserv: ";
        echo $justconserv;
        echo "<br>";
        
       //header('Location: good.php');
?>

<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Cadastrado com sucesso.</strong>
</div>
<?php 
            
            
            
            } catch(PDOException $e) {
            ?>
<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Atenção</strong> Ocorreu um erro ao acessar o banco de dados. Tente novamente em alguns instantes. Se o erro persistir, entre em contato com o suporte e informe a seguinte mensagem de erro: <strong><?=$e->getMessage();?></strong>
</div>
<?php
        }
}


    

?>
