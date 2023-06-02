<?php
class ProductDAO
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
    public function getAllPeripherals(): mixed
    {
        try {
            $this->openConnection();
            $sql = "SELECT * 
                    FROM producttbl 
                    WHERE 
                        ProductType = 'PERIPHERALS'";
            $stmt = $this->conn->prepare($sql);
            $products = null;
            if ($stmt->execute() > 0) {
                while ($product = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $products[] = $product;
                }
            }
            return $products;
        } catch (Exception $e) {
            return null;
        } finally {
            $this->closeConnection();
        }
    }
    public function getAllPcParts(): mixed
    {
        try {
            $this->openConnection();
            $sql = "SELECT * 
                    FROM producttbl 
                    WHERE 
                        ProductType = 'PARTS'";
            $stmt = $this->conn->prepare($sql);
            $products = null;
            if ($stmt->execute() > 0) {
                while ($product = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $products[] = $product;
                }
            }
            return $products;
        } catch (Exception $e) {
            return null;
        } finally {
            $this->closeConnection();
        }
    }
}
