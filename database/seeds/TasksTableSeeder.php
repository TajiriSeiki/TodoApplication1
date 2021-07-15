<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 21; $i <=50; $i++){
            $task = new \App\Task([
                'user_id' => rand(1,3),
                'title' => 'サンプルタスク'.$i,
                'detail' => '詳細'.$i,
                'dead_line' => '2021-0'.rand(1,9).'-'.rand(0,2).rand(1,9).' 12:0'.rand(0,9).':00',
                'whether_done' => 0,
            ]);
            $task->save();
        }
    }
}
