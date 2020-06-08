<?php

class Usuario{
    private $nome;
    private $email;
    private $senha;

    public function getNome(){
        return $this->nome;
    } 

    private function setNome($nome){
        $this->nome = $nome;
    }

    private function getEmail(){
        return $this->email;
    } 

    private function setEmail($email){
        $this->email = $email;
    }

    private function getSenha(){
        return $this->senha;
    }

    private function setSenha($senha){
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $this->senha = $senhaHash;
    }

    public function create($nome, $email, $senha){
        if($this->confirmEmail($email) == false){
            $this->setNome($nome);
            $this->setEmail($email);
            $this->setSenha($senha);
            $sql = "INSERT INTO users(nome, email, senha) VALUES(?,?,?)";
            $stmt = Conexao::pdo()->prepare($sql);
            $stmt->execute([$this->getNome(), $this->getEmail(), $this->getSenha()]);
            if($stmt->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function login($email, $senha){
        if($this->confirmEmail($email)){
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = Conexao::pdo()->prepare($sql);
            $stmt->execute([$email]);
            if($stmt->rowCount() > 0){
                $dados = $stmt->fetch();
                if(password_verify($senha, $dados['senha'])){
                    $this->dados($email);
                    return true;
                }else{
                    return false;
                }
            }
        }
    }

   public function confirmEmail($email){
       $sql = "SELECT email FROM users WHERE email = ?";
       $stmt = Conexao::pdo()->prepare($sql);
       $stmt->execute([$email]);
       if($stmt->rowCount() > 0){
           return true;
       }else{
           return false;
       }
   }

   public function dados($email){
    if($this->confirmEmail($email)){
        $sql = "SELECT nome FROM users WHERE email = ?";
        $stmt = Conexao::pdo()->prepare($sql);
        $stmt->execute([$email]);
        if($stmt->rowCount() > 0){
            $nome = $stmt->fetch();
            return $nome['nome'];
        }else{
            return array();
        }
    }
   }


}