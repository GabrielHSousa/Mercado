<?php
    namespace Mercado\DAO;

    require_once('Conexao.php');

    use Mercado\DAO\Conexao;

    class InserirClient{
        public function insert(Conexao $conexao, string $nomeTabela, string $nome, string $telefone, int $endereco, string $cpf, string $quantidade, string $valorTotal){
            //Inserir
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into $nomeTabela(codigo,nome, telefone, endereco, cpf , quantidade, valorTotal) values('','$nome','$telefone','$endereco','$cpf','$quantidade','$valorTotal')";
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
