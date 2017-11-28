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
            'password' => bcrypt('system'),
            'type' => 'administrator'
        ]);

        $this->command->info("System user created: {$system}");

        $this->command->info("Attempting to login...");

        Auth::login($system);

        if(Auth::check()) {
            $this->command->info("Login success :)");

            $recordsUser = factory(User::class, rand(5, 10))->create();

            foreach($recordsUser as $recordUser) {
                $recordUser->created_by = Auth::user()->id;
                $recordUser->updated_by = Auth::user()->id;
                $recordsEstablishment = $recordUser->establishments()->saveMany(factory(Establishment::class, rand(1, 8))->make());

                foreach($recordsEstablishment as $recordEstablishment) {
                    $recordEstablishment->created_by = $recordUser->id;
                    $recordEstablishment->updated_by = $recordUser->id;
                    $recordEstablishment->fiscal_user_id = rand(1,3) % 2 != 0 && $recordUser->type == 'fiscal' ? $recordUser->id : null; // optional and "any fiscal user"
                    $recordEstablishment->save();
                    $recordsMachine = $recordEstablishment->machines()->saveMany(factory(Machine::class, rand(1, 4))->make());

                    foreach($recordsMachine as $recordMachine) {
                        $recordMachine->created_by = $recordUser->id;
                        $recordMachine->updated_by = $recordUser->id;
                        $recordMachine->establishment_id = rand(1,3) % 2 != 0 ? $recordEstablishment->id : null; // optional
                        $recordMachine->save();

                        $recordsTransaction = $recordMachine->transactions()->saveMany(factory(Transaction::class, rand(0, 6))->make([
                            'establishment_id' => $recordEstablishment->id,
                            'created_by' => $recordUser->id,
                            'updated_by' => $recordUser->id
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
