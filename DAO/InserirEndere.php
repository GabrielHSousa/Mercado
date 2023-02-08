<?php
    namespace Mercado\DAO;

    require_once('Conexao.php');
    require_once('PHP/Endereco.php');

    use Mercado\DAO\Conexao;
    use Mercado\PHP\Endereco;

    class InserirEndere{
        public function insert(Conexao $conexao, string $Tabela, Endereco $endereco){
            //Inserir
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into $Tabela(codigo, rua, numero, cep) values('','$endereco->rua','$endereco->numero','$endereco->cep')";
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
