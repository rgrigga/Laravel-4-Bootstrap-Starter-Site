<?php

class DatabaseSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();

        // Add calls to Seeders here
        // WARNING!! THIS WILL OVERWRITE/DELETE EXISTING DATA!!
        // $this->call('UsersTableSeeder');
        // $this->call('PostsTableSeeder');
        // $this->call('CommentsTableSeeder');
        // $this->call('RolesTableSeeder');
        // $this->call('PermissionsTableSeeder');
    }

}