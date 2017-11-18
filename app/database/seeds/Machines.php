<?php

use Illuminate\Database\Seeder;
use App\Models\Establishment;
use App\Models\Machine;
use App\Models\Transaction;
use App\Models\User;

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

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('TRANSACTION_TBL')->truncate();
        DB::table('MACHINE_TBL')->truncate();
        DB::table('ESTABLISHMENT_TBL')->truncate();
        DB::table('USER_TBL')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');        

        $system = factory(User::class)->make([
            'username' => 'system',
            'name' => 'System',
            'password' => bcrypt('system')
        ]);

        factory(User::class, rand(5, 20))->create()->each(function($user) use ($system) {
            $user->created_by = $system->id;
            $user->updated_by = $system->id;
            $user->save();
            factory(Establishment::class, rand(5, 20))->create()->each(function($establishment) use ($user) {
                $establishment->fiscal_user_id = rand(1,3) % 2 === 0 ? $user_id : null; // optional and "any fiscal user"
                $establishment->created_by = $user->id;
                $establishment->updated_by = $user->id;
                $establishment->save();
                factory(Machine::class, rand(5, 20))->create()->each(function($machine) use ($user, $establishment) {
                    $machine->establishment_id = rand(1,2) % 2 === 0 ? $establishment->id : null; // optional
                    $machine->created_by = $user->id;
                    $machine->updated_by = $user->id;
                    $machine->save();
                    factory(Transaction::class, rand(5, 20))->create()->each(function($transaction) use ($user, $establishment, $machine) {
                        $transaction->establishment_id = $establishment->id;
                        $transaction->machine_id = $machine->id;
                        $transaction->created_by = $user->id;
                        $transaction->updated_by = $user->id;
                        $transaction->save();
                    });
                });
            });
        });
    }
}
