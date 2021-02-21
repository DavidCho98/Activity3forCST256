<?php
namespace app\Services\Data;

use App\Models\UserModel;
use Carbon\Exceptions\Exception;
use Egulias\EmailValidator\Exception\AtextAfterCFWS;

class SecurityDAO{

    private $conn;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "activity2";
    private $dbQuery;



    public function __construct() {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
    }

    public function findByUser(UserModel $user){
        $username = $user->getUsername();
        $password = $user->getPassword();
        $this->dbQuery = "SELECT Username, Password FROM `users` WHERE `Username`='$username' AND `Password`='$password'";
        $result = mysqli_query($this->conn, $this->dbQuery);
        if (mysqli_num_rows($result) > 0) {
            mysqli_free_result($result);
            mysqli_close($this->conn);
            return TRUE;
        }
        mysqli_close($this->conn);
        return FALSE;
    }


}
