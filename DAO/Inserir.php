<?php
    namespace Mercado\DAO;

    require_once('Conexao.php');

    use Mercado\DAO\Conexao;
    

    class Inserir{
        public function insert(Conexao $conexao, string $tabela, string $produto, string $quantidade, string $valor){
            //Inserir
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into $tabela(produto, quantidade, valor) values('$produto','$quantidade','$valor')";
                $result = mysqli_query($conn,$sql);
                
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }else{
                    return "<br><br>Não inserido!";
                }   

                mysqli_close($conn);
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim do inserir
    }//fim da classe
?>
