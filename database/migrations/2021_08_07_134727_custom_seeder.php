<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;


class CustomSeeder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $users = array(
            array(
                "name"       => "Elie Azar",
                "email"      => "elie.azar@mail.com",
                "password"   => bcrypt("1234"), 
            )
        );


        $customers = array(
            array(
                
                "name"       => "Elie Azar",
                "email"      => "elie.azar@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Beirut, Baabda, Butchay",
                "created_at" => Carbon::now()->subDays(25),
                
            ),
            array(
                
                "name"       => "George Khoury",
                "email"      => "george.khoury@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Beirut, Ashrafieh, Sassin",
                "created_at" => Carbon::now()->subDays(11),

                
            ),

            array(
                
                "name"       => "Omar Ayoub",
                "email"      => "omar.ayoub@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Mont-Liban, Hammana, Route 21",
                "created_at" => Carbon::now()->subHour(2)->subWeeks(10),

                
            ),

            array(
                
                "name"       => "Ralph Fares",
                "email"      => "ralph.fares@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Gulf, Dubai, Route 21",  
                "created_at" => Carbon::now()->subDays(10),

            ),


            array(
                
                "name"       => "Adam Azar",
                "email"      => "adam.azar@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Lebanon, Baabda, Route 21",
                "created_at" => Carbon::now()->subHour(2)->subWeeks(6),

            ),

            array(
                
                "name"       => "Elio Khayrallah",
                "email"      => "elio.Khayrallah@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Africa, Oganda, Route 21",  
                "created_at" => Carbon::now()->subWeeks(5),

            ),

            array(
                
                "name"       => "George Azar",
                "email"      => "george.azar@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Gulf, Qatar, Route 21",  
                "created_at" => Carbon::now()->subDays(29),

            ),


            array(
                
                "name"       => "Ali Maksoud",
                "email"      => "Ali.Maksoud@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "KSA, Riyadh, Route 21", 
                "created_at" => Carbon::now()->subDays(24),

            ),

            array(
                
                "name"       => "Tarek Najem",
                "email"      => "tarek.najem@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "France, Paris, Route 21",  
                "created_at" => Carbon::now()->subDays(19),

            ),

            array(
                
                "name"       => "Faten Azar",
                "email"      => "faten.azar@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Lebanon, Baabda, Route 21",
                "created_at" => Carbon::now()->subHour(2)->subDays(11),

            ),

            array(
                
                "name"       => "Mark Aleme",
                "email"      => "mark.aleme@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "UK, London, Route 21", 
                "created_at" => Carbon::now()->subHour(1)->subDays(11),

            ),

            array(
                
                "name"       => "Noor Naoom",
                "email"      => "Noor.Naoum@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "UK, London, Route 21", 
                "created_at" => Carbon::now()->subDays(11),

            ),

            array(
                
                "name"       => "Rex Hamelton",
                "email"      => "Rex.Hamelton@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "UK, London, Route 21",  
                "created_at" => Carbon::now()->subHour(2)->subDays(9),

            ),

            array(
                
                "name"       => "Richard Rizk",
                "email"      => "richard.rizk@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "USA, California, Route 21", 
                "created_at" => Carbon::now()->subHour(1)->subDays(9),

            ),

            array(
                
                "name"       => "Mostafa Hamdan",
                "email"      => "mostafa.hamdank@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Africa, Cote-D'voire, Route 21", 
                "created_at" => Carbon::now()->subDays(9),

            ),

            array(
                
                "name"       => "Alaa Chamaa",
                "email"      => "alaa.chamaa@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "KSA, Riyadh, Route 21", 
                "created_at" => Carbon::now()->subHour(2)->subDays(7),

            ),

            array(
                
                "name"       => "Walid Jamal",
                "email"      => "walid.jamal@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "KSA, Riyadh, Route 21", 
                "created_at" => Carbon::now()->subHour(2)->subDays(6),

            ),

            array(
                
                "name"       => "Ribal Ghrayzi",
                "email"      => "ribal.Ghrayzi@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Norway, Oslo, Route 21",
                "created_at" => Carbon::now()->subHour(2)->subDays(5),

            ),

            array(
                
                "name"       => "Khadija Sakjandar",
                "email"      => "Khadija.Sakjandar@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Sweden, Stockholm, Route 21", 
                "created_at" => Carbon::now()->subHour(2)->subDays(4),

            ),

            array(
                
                "name"       => "Mazen Chayya",
                "email"      => "mazen.chayya@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Lebanon, Aley, Route 21", 
                "created_at" => Carbon::now()->subHour(1)->subDays(4),

            ),

            array(
                
                "name"       => "Noor Chamaa",
                "email"      => "noor.chamaa@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Lebanon, Aramoun, Route 21", 
                "created_at" => Carbon::now()->subHour(2)->subDays(3),

            ),

            array(
                
                "name"       => "Kamal Azar",
                "email"      => "kamal.azar@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Lebanon, Baabda, Route 21",  
                "created_at" => Carbon::now()->subHour(2)->subDays(2),

            ),

            array(
                
                "name"       => "Amal Azar",
                "email"      => "amal.azar@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Lebanon, Baabda, Route 21", 
                "created_at" => Carbon::now()->subHour(2)->subDays(1),

            ),

            array(
                
                "name"       => "George Azar",
                "email"      => "george.azar2@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Lebanon, Baabda, Route 21", 
                "created_at" =>  Carbon::now()->subHour(5),

            ),

            array(
                
                "name"       => "Fadia Shehade",
                "email"      => "fadia.shehade@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Lebanon, Baabda, Route 21", 
                "created_at" => Carbon::now()->subHour(4),

            ),

            array(
                
                "name"       => "Fadi Deeb",
                "email"      => "Fadi.Deeb@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Lebanon, Baabda, Route 21", 
                "created_at" => Carbon::now()->subHour(3),

            ),

            array(
                
                "name"       => "Samer Nahas",
                "email"      => "samer.nahas@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Lebanon, Baabda, Route 21", 
                "created_at" => Carbon::now()->subHour(1),

            ),

            array(
                
                "name"       => "Joseph Ghantous",
                "email"      => "josep.ghantous@mail.com",
                "password"   => bcrypt("1234"),
                "phone"      => "70647025",
                "address"    => "Lebanon, Baabda, Route 21", 
                "created_at" => Carbon::now(),

            ),
        );

        DB::table('users')->insert($users);
        DB::table('customers')->insert($customers);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
