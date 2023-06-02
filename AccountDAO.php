<?php
class AccountDAO
{
    private ?string $host = null;
    private ?string $name = null;
    private ?string $user = null;
    private ?string $password = null;
    private ?PDO $conn = null;
    public function __construct(string $host, string $name, string $user, string $password)
    {
        $this->host = $host;
        $this->name = $name;
        $this->user = $user;
        $this->password = $password;
    }
    public function openConnection(): void
    {
        $this->conn = new PDO("mysql:host={$this->host};dbname={$this->name};charset=utf8", $this->user, $this->password);
    }
    public function closeConnection(): void
    {
        $this->conn = null;
    }

    public function loginUser(string $email, string $password): mixed
    {
        try {
            $this->openConnection();
            $sql =
                "   SELECT UserID, Email, FirstName, LastName 
                FROM usertbl 
                WHERE 
                    Email = :email && Password_Hash = :password 
                LIMIT 1";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_STR);
            $user = null;
            if ($stmt->execute() > 0) {
                while ($account = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $user = $account;
                }
            }
            return $user;
        } catch (Exception $e) {
            return null;
        } finally {
            $this->closeConnection();
        }
    }

    public function signUpUser(string $email, string $firstname, string $lastname, string $password): bool
    {
        try {
            $this->openConnection();
            $this->conn->beginTransaction();
            $sql = " INSERT INTO usertbl (Email,FirstName,LastName,Password_Hash) VALUES (:email, :firstname, :lastname, :password)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":firstname", $firstname, PDO::PARAM_STR);
            $stmt->bindParam(":lastname", $lastname, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_STR);
            $isAdded = $stmt->execute();
            $this->conn->commit();
            return $isAdded;
        } catch (Exception $e){
            $this->conn->rollBack();
            return false;
        } finally {
            $this->closeConnection();
        }
    }
}
