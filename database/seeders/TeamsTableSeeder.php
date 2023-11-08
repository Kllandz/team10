<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomTeams(){
        $teams = array(
            "Team SoloMid",
            "Cloud9",
            "Fnatic",
            "G2 Esports",
            "SK Telecom T1",
            "DAMWON Gaming",
            "Rogue",
            "Invictus Gaming",
            "EDward Gaming",
            "Gen.G",
            "Team Liquid",
            "Afreeca Freecs",
            "Team Vitality",
            "FunPlus Phoenix",
            "Royal Never Give Up",
            "MAD Lions"
        );        
            return $teams[rand(0,count($teams)-1)];     
    }
    
    public function generateRandomDivision(){
        $division = array(
            "LCK (League of Legends Champions Korea)",
            "LPL (League of Legends Pro League)",
            "LEC (League of Legends European Championship)",
            "LCS (League of Legends Championship Series)",
            "LCS (League of Legends Continental League)",
            "TCL (Turkish Championship League)",
            "CBLOL (Campeonato Brasileiro de League of Legends)",
            "LJL (Japan League of Legends Pro League)",
            "LLA (Liga Latinoamérica de League of Legends)",
            "PCS (Pacific Championship Series)"
        );
        return $division[rand(0,count($division)-1)];
    }

    public function run()
    {    
        for($i=0;$i<20;$i++){
            $teams = $this->generateRandomTeams();
            $division = $this->generateRandomDivision();
            $random_datatime = Carbon::now()->subMinutes(rand(1,55));  
            DB::table('teams')->insert([      
                'team' =>$teams,
                'year' =>2023,
                'divison' =>$division,
                'rank' =>rand(1,4),
                'rate' =>rand(40,80),
                'pastrate'=>rand(40,80),
                'games' =>rand(100,500),
                'founded'=>rand(1990,2020),
                'created_at' =>$random_datatime,
                'updated_at' =>$random_datatime,
            ]);
        }
    }
    
}
