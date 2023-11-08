<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10){
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for($i = 0;$i <$length;$i++){
            $randomString .=$characters[rand(0,$charactersLength - 1)];      
        }
        return $randomString;
    }
    public function generateRandomName(){
    $first_name = $this->generateRandomString(rand(2,15));
    $first_name = strtolower($first_name);
    $first_name = ucfirst($first_name);
    $last_name = $this->generateRandomString(rand(2,15));
    $last_name = strtolower($last_name);
    $name = $first_name." ".ucfirst($last_name);
    return $name;
    }

    public function generateRandomPostition(){
    $postition = array(
        'top',
        'jg',
        'mid',
        'ad',
        'sup',
    );
    return $postition[rand(0,count($postition)-1)];
    }

    public function generateRandomNationality(){
        $nationality = array(
            "中國",
            "美國",
            "印度",
            "巴西",
            "日本",
            "俄羅斯",
            "印尼",
            "墨西哥",
            "菲律賓",
            "埃及",
            "法國",
            "德國",
            "義大利",
            "西班牙",
            "英國",
            "加拿大",
            "澳大利亞",
            "南韓",
            "泰國",
            "越南",
            "馬來西亞",
            "新加坡",
            "土耳其",
            "荷蘭",
            "比利時",
            "瑞士",
            "奧地利",
            "瑞典",
            "挪威",
            "芬蘭",
            "丹麥",
        );
                     
    return $nationality[rand(0,count($nationality)-1)];
    }

    public function generateRandomGender(){
        $gender = array(
            '男',
            '女',         
        );

        return $gender[rand(0,count($gender)-1)];
    }



    

    public function run()
    {
        for ($i=0;$i<500;$i++){
            $name = $this->generateRandomName();
            $postition = $this->generateRandomPostition();
            $nationality = $this->generateRandomNationality();
            $gender = $this->generateRandomGender();
            $random_datatime = Carbon::now()->subMinutes(rand(1,55));       
            DB::table('players')->insert([      
                'name' =>$name,
                'tid' =>rand(1,20),
                'postition' =>$postition,
                'nationality' =>$nationality,
                'age' =>rand(20,30),
                'year'=>rand(1,8),
                'gender' =>$gender,
                'created_at' =>$random_datatime,
                'updated_at' =>$random_datatime,
            ]);
           }
      
    }
}
