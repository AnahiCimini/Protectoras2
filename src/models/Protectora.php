<?php
class Protectora {
    private $conn; // Conexión a la base de datos
    public $nombre_protectora;
    public $direccion;
    public $telefono;
    public $email;
    public $id_provincia;
    public $poblacion;
    public $web;
    //public $logo;
    public $email_visible;
    public $password_user;


    public function __construct($db) {
        $this->conn = $db; // Almacena la conexión
    }

    public function getAll() {
    }


    //Buscar en la BBDD por email
    public function getProtectoraByEmail($email) {
        $query = "SELECT * FROM protectoras WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        
        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC); // Devuelve un array con los datos de la protectora
        }
    
        return false; // Si no se encuentra el email o hay error
    }

    //Comprobar si el nombre ya existe
    public function nombreExists($nombre) {
        $query = "SELECT COUNT(*) as count FROM protectoras WHERE nombre_protectora = :nombre";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] > 0;
    }

    public function registerProtectora() {
        // SQL para insertar los datos en la tabla protectoras
        $sql = "INSERT INTO protectoras (nombre_protectora, direccion, telefono, email, id_provincia, poblacion, web, email_visible, password_user) 
        VALUES (:nombre_protectora, :direccion, :telefono, :email, :id_provincia, :poblacion, :web, :email_visible, :password_user)";

        
        $stmt = $this->conn->prepare($sql);
        
        // Bind de parámetros
        $stmt->bindParam(':nombre_protectora', $this->nombre_protectora);
        $stmt->bindParam(':direccion', $this->direccion);
        $stmt->bindParam(':telefono', $this->telefono);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':id_provincia', $this->id_provincia);
        $stmt->bindParam(':poblacion', $this->poblacion);
        $stmt->bindParam(':web', $this->web);
        //$stmt->bindParam(':logo', $this->logo);
        $stmt->bindParam(':email_visible', $this->email_visible);
        $stmt->bindParam(':password_user', $this->password_user);

        // Ejecuta la inserción y retorna el resultado
        return $stmt->execute();
    }
}
?>