<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tokens;

class IntegrationsAPI extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Tokens::count() == 0) {
            DB::table('tokens')->insert([
                'id' => 1,
                'name' => 'Magento',
                'token' => 'Bearer eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ',
                'status' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => null
            ]);
        }
    }
}
