<?php 
include('conexao.php');
ini_set('default_charset', 'utf-8');
if(isset($_GET['cd_livro'])){
$sql = 'DELETE FROM tb_livro WHERE cd_livro = '.$_GET['cd_livro'];
$executa = $GLOBALS['con']->query($sql);
    if($executa){
        echo '<script>
                alert("Livro excluído");
                window.location = "listar.php"
              </script>';
    }else{
        echo 'Erro ao excluír livro: '.$GLOBALS['con']->error;
    }
}
?>