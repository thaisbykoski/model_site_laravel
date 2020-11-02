<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'=>'Admin',
            'email'=>'admin@mail.com',
            'password'=>bcrypt('123456'),
        ];
        if(User::where('email','=',$dados['email'])->count()){
            $user = User::where('email','=',$dados['email'])->first();
            $user->update($dados);
            echo "Usuario Alterado!";
        }else {
            User::create($dados);
            echo "Usuario Criado!";
        }
    }
}
