<?php
        namespace Mercado\DAO;

        require_once('Conexao.php');
        require_once('PHP/Endereco.php');

        use Mercado\DAO\Conexao;
        use Mercado\PHP\Endereco;

        class InserirFunc{
        public function insert(Conexao $conexao, string $nomeTabela, string $nome,string $endereco,string $telefone,string $sexo,string $funcao,string $salario, ){
            try{
                $conn = $conexao->conectar();//Abrindo conexão com o banco
                $sql = "insert into $nomeTabela (codigo,nome,endereco,telefone,sexo,funcao,salario) values('','$nome','$endereco','$telefone','$sexo','$funcao','$salario')";
                $result = mysqli_query($conn,$sql);//Comando que executa a ação do script dentro do banco
                if($result){
                    return "<br><br>Inserido com sucesso no banco de dados!";
                }
                return "<br><br>Erro. Não foi inserido no banco de dados.";
            }catch(Except $erro){
                echo $erro;
                    }//fim do inserir



        }//fim da classe
    }
?>
