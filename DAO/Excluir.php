<?php
    namespace Mercado\DAO;

    require_once('Conexao.php');

    use Mercado\DAO\Conexao;

    class Excluir{

        public function deletar(
            Conexao $conexao, string $nomeTabela, int $codigo)
        {
            try{
                $conn   = $conexao->conectar();
                $sql    = "delete from $nomeTabela where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);
                
                mysqli_close($conn);
                if($result){
                    echo "<br><br>Deletado com sucesso!";
                    return;
                }
                echo "Não deu certo!";
            }catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do deletar


    }//fim da classe


?>