<?php
    namespace Mercado\DAO;

    require_once('Conexao.php');

    use Mercado\DAO\Conexao;
    class Atualizar{
        public function update(Conexao $conexao, string $campo, string $novoDado,
                               string $codigo, string $nomeTabela)
        {
            try{
                $conn   = $conexao->conectar();
                $sql    = "update $nomeTabela set $campo = '$novoDado' where codigo = '$codigo'";
                $result     = mysqli_query($conn,$sql);
                
                mysqli_close($conn);
                
                if($result){
                    echo "<br><br>Atualizado com sucesso!";
                    return;
                }
                echo "<br><br>Impossível Atualizar!"; 
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim do atualizar
    }//fim da classe




?>