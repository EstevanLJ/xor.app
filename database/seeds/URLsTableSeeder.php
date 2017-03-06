<?php

use Illuminate\Database\Seeder;

class URLsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $urls = [
            ['http://univates.br/', 'Univates', '1'],
            ['http://google.com.br/', 'Google', '1'],
            ['http://uol.com.br/', 'UOL', '1'],
            ['http://terra.com.br/', 'Terra', '2'],
            ['http://laravel.com/', 'Laravel', '2'],
            ['https://www.shodan.io/', 'Shodan', '2'],
            ['http://stackoverflow.com/', 'Stack Overflow', '2'],
            ['https://github.com/', 'GITHub', '2'],
            ['http://2.bp.blogspot.com/-2VgYVSIqRkw/VCF-RvDJkrI/AAAAAAAA4bg/ln6M7MrLy_Y/s1600/paisagens.jpg', 'Paisagem', '2'],
            ['http://www.industrialshields.com/wp-content/uploads/2016/02/PLC-ARDUINO-M-DUINO-38-RELAY-5.jpg', 'CLP', '2'],
            ['http://uploads.cantodosclassicos.com/2015/05/donnie-darko-cd.jpg', 'Filme', '2']
        ];

        for($i = 0; $i < sizeof($urls); $i++){
            $xor = new App\URL([
                'short' => str_random(5), 
                'full' => $urls[$i][0],
                'description' => $urls[$i][1]
            ]);        
            $xor->user_id = $urls[$i][2];
            $xor->save();
        }
    }
}
