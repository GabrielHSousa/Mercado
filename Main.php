<?php
    namespace Mercado;

    require_once('PHP/Controle.php');//Conectei as classes
    require_once('PHP/Cliente.php');
    require_once('PHP/Endereco.php');
    require_once('PHP/CadastroClient.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/InserirClient.php');
    require_once('DAO/InserirEndere.php');
    require_once('PHP/Funcionario.php');
    require_once('DAO/InserirFunc.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');

    use Mercado\DAO\Conexao;
    use Mercado\DAO\Inserir;
    use Mercado\DAO\InserirClient;
    use Mercado\DAO\InserirEndere;
    use Mercado\DAO\InserirFunc;
    use Mercado\PHP\Endereco;
    use Mercado\DAO\Consultar;
    use Mercado\DAO\Atualizar;
    use Mercado\DAO\Excluir;



    //$clientGabriel= new Cliente("Gabriel","12345678910","31/10/2022","Coxinha","10","20,00","30,00");

    //$controGabriel = new Controle("Coxinha","10","20,00");

    
    //$enderecoClient = new Endereco("aqui do lado","10" ,"2202");

    //$cadastroGabriel = new Cadastro("Gabriel", "45454554",$enderecoClient,"454544","50","1000");

   // $funGabriel = new Funcionario ("1","Gabrielzi", $enderecoClient, "545445454","Masculino","Chef","R$15000");

    //echo $clientGabriel;
   // echo "<br>";
    //echo $controGabriel;
   // echo "<br>";
    //echo $cadastroGabriel;
    //echo "<br>";
    //echo $funGabriel ;

    
    
    echo "------ Teste de Banco de Dados --------<br><br>";
    $conexao = new Conexao();
    $conexao->Conectar();//Abrindo a conexão com o banco de dados

    $inser = new Inserir();//Permissão para acessar os métodos da classe inserir
    echo $inser->Insert($conexao, "Controle","coxinha","2","20,00");

    $endereco = new Endereco(1,"Rua Manuel", "300", "09123");
   

    $end = new InserirEndere();
    echo $end->insert($conexao, "Endereco", $endereco);

    $inse = new InserirClient();//Permissão para acessar os métodos da classe inserir
    echo $inse->insert($conexao, "cliente","Gabiel","4444444",$endereco->codigo,"4806585844","0,00","1000");

    $Fun = new InserirFunc();//Permissão para acessar os métodos da classe inserir
    echo $Fun->insert($conexao, "Funcionario","Gabiel",$endereco->codigo,"4806585844","Masculino","Limpeza","1000");
    

    $select = new Consultar();//Permissão para acessar os método da classe consultar
    echo $select->consultarIndividual($conexao, "cliente");
    echo $select->consultarTudo($conexao,"cliente");


    $atu = new Atualizar();//Permissão para acessar os métodos da classe atualizar;
    echo $atu->update($conexao, "nome", "Maria", 1, "pessoa");
    
    $exc = new Excluir();//Permissão para acessar os métodos da classe excluir;
    echo $exc->deletar($conexao, "pessoa", 3);


    
    


?>
   