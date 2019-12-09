<?php
namespace App\Model;

class User extends Model {

    public function find($username,$password) {
        $stmt = $this->mysqli->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param('s',$username);
        $stmt->execute();
        $arr = $stmt->get_result()->fetch_assoc();
        if($arr) {
        	if(password_verify($password, $arr['password'])) {
        		$arr = [
        			'id' => $arr['id'],
        			'username' => $arr['email'],
                    'first_name' => $arr['first_name'],
                    'last_name' => $arr['last_name'],
                    'full_name' => $arr['first_name'] . ' ' . $arr['last_name']
        		];

                $arr['display_name'] = strlen($arr['full_name']) > 0 ? $arr['full_name'] : $arr['username'];

        	} else {
                $arr = [];
            }
        }

        return $arr;
    }

}