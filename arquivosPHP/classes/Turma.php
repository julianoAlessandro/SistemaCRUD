

<?php



class Turma
{
    public $id;
    public $descTurma;
    public  $ano;

    public function inserir()
    {
        //Define a string SQL de inserção de dados na tabela "tb_turmas"
        $sql = "INSERT INTO tb_turmas(descTurma,ano)VALUES(
            '".$this->descTurma."',
            '".$this->ano."' 
            )";
        

        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=sis-escolar','root','');
        //executa a string  SQL na conexao, inserindo os dados
        $conexao->exec($sql);
        echo "Registro gravado com sucesso!";

    }

    public function listar(){
        $sql = "SELECT * FROM tb_turmas";
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=sis-escolar','root','');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchALL();
        //retorna o array contendo todos os registros da tabela "tb_turmas"
        return $lista;
       

    }

    public function excluir(){
        $sql = "DELETE FROM tb_turmas WHERE id =".$this->id;
        echo $sql;
        die();
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=sis-escolar','root','');
        $conexao ->exec($sql);

    }

    public function __construct($id = false){
        if($id){
            $this ->id =$id;
            $this -> carregar();
                       
    
        }

    }
    public function carregar(){
        $sql = "SELECT * FROM tb_turmas WHERE id=".$this ->id;
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=sis-escolar','root','');
        $resultado = $conexao ->query($sql);
            $linha = $resultado -> fetch();
            $this ->descTurma = $linha['descTurma'];
            $this -> ano = $linha['ano'];
    }

    public function atualizar(){
        $sql = "UPDATE tb_turmas SET  desctTurma = '$this ->descTurma, ano = '$this -> ano ' WHERE id = $this->id";
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=sis-escolar','root','');
        $conexao ->exec($sql);
    }

  
}










?>








