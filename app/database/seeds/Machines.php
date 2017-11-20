<?php

use Illuminate\Database\Seeder;
use App\Models\Establishment;
use App\Models\Machine;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Machines extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // gc_collect_cycles();

        $this->command->info("Truncating tables...");

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('TRANSACTION_TBL')->truncate();
        DB::table('MACHINE_TBL')->truncate();
        DB::table('ESTABLISHMENT_TBL')->truncate();
        DB::table('USER_TBL')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $this->command->info("Truncating tables: done.");

        $system = factory(User::class)->create([
            'username' => 'system',
            'name' => 'System',
            'password' => bcrypt('system')
        ]);

        $this->command->info("System user created: {$system}");

        $this->command->info("Attempting to login...");

        Auth::login($system);

        if(Auth::check()) {
            $this->command->info("Login success :)");

            $recordsUser = factory(User::class, rand(5, 20))->create();

            foreach($recordsUser as $recordUser) {
                $recordsEstablishment = $recordUser->establishments()->saveMany(factory(Establishment::class, rand(5, 20))->make());

                foreach($recordsEstablishment as $recordEstablishment) {
                    $recordEstablishment->fiscal_user_id = rand(1,3) % 2 === 0 ?: null; // optional and "any fiscal user"
                    $recordEstablishment->save();
                    $recordsMachine = $recordEstablishment->machines()->saveMany(factory(Machine::class, rand(5, 20))->make());

                    foreach($recordsMachine as $recordMachine) {
                        $recordMachine->establishment_id = rand(1,3) % 2 === 0 ?: null; // optional
                        $recordMachine->save();

                        $recordsTransaction = $recordMachine->transactions()->saveMany(factory(Transaction::class, rand(5, 20))->make([
                            'establishment_id' => $recordEstablishment->id
                        ]));
                    }
                }
            }
        }
        else {
            $this->command->info("Login failed :(");
        }

        $this->command->info("Seeding: done.");
    }
}
