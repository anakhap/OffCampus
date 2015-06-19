<?php

namespace app\models;
use yii\base\Model;

class UserForm extends Model{
    public $name;
    public $email;
    
    public function rules(){
        // User must enter name and email, and email must look like an email
        return [
                [['name', 'email'], 'required'],
                ['email', 'email'],
                ];
    }
    
}
