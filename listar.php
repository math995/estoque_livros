<table>
    <thead>
        <td>Id</td>
        <td>Nome</td>
        <td>Ano</td>
        <td>Cadastro</td>
        <td>Exemplares</td>
        <td>Controles</td>
    </thead>
    <tbody>
<?php
date_default_timezone_set('America/Sao_Paulo');

ini_set('default_charset', 'utf-8');

include('conexao.php');

$sql = 'SELECT * FROM tb_livro ORDER BY nm_livro ASC';
$executa = $GLOBALS['con']->query($sql);
while($livro = $executa->fetch_array()){    //convertemos a linha percorrida em array

    echo '<tr>
          <td>'.$livro['cd_livro'].'</td>';
    echo '<td>'.$livro['nm_livro'].'</td>';
    echo '<td>'.date('Y',strtotime($livro['dt_ano'])).'</td>';
    echo '<td>'.date('Y',strtotime($livro['dt_cadastro'])).'</td>';
    echo '<td>'.$livro['qt_exemplares'].'</td>';
    echo '<td>
            <a href="editar.php?cd_livro='.$livro['cd_livro'].'">Editar</a>
            <a href="excluir.php?cd_livro='.$livro['cd_livro'].'">Excluir</a>
          </td>
          </tr>';
        }
        ?>
    </tbody>
</table>
<br>
<button class="field"><a href="cadastrar.php" class="decoration">Cadastrar Livros</a></button>
  