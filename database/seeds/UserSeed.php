<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'firstname' => 'Sarath','lastname' => 'Perera', 'email' => 'admin@admin.com', 'password' => '$2y$10$DHKFHDI0EMIRoJzCohQbTOFfBKstTRGSo7lI61IQbSu8Vniyh3rCi','avatar'=>'/admin/img/profile-pics/2.jpg', 'role_id' => 1,],
            ['id' => 2, 'firstname' => 'Danushka','lastname' => 'Herath', 'email' => 'danushka@gmail.com', 'password' => '$2y$10$DHKFHDI0EMIRoJzCohQbTOFfBKstTRGSo7lI61IQbSu8Vniyh3rCi', 'avatar'=>'/admin/img/profile-pics/3.jpg', 'role_id' => 2,],
            ['id' => 9, 'firstname' => 'Saman','lastname' => 'Pathirana', 'email' => 'saman@gmail.com', 'password' => '$2y$10$DHKFHDI0EMIRoJzCohQbTOFfBKstTRGSo7lI61IQbSu8Vniyh3rCi', 'avatar'=>'/admin/img/profile-pics/4.jpg', 'role_id' => 2,],
            ['id' => 10, 'firstname' => 'Lakmal','lastname' => 'Fernando', 'email' => 'lak@gmail.com', 'password' => '$2y$10$DHKFHDI0EMIRoJzCohQbTOFfBKstTRGSo7lI61IQbSu8Vniyh3rCi', 'avatar'=>'/admin/img/profile-pics/4.jpg', 'role_id' => 2,],
            ['id' => 3, 'firstname' => 'kamal','lastname' => 'perera', 'email' => 'kamal@gmail.com', 'password' => '$2y$10$DHKFHDI0EMIRoJzCohQbTOFfBKstTRGSo7lI61IQbSu8Vniyh3rCi','avatar'=>'/admin/img/profile-pics/4.jpg', 'role_id' => 3,],
            ['id' => 4, 'firstname' => 'Nimal','lastname' => 'rathnayake', 'email' => 'nimal@gmail.com', 'password' => '$2y$10$DHKFHDI0EMIRoJzCohQbTOFfBKstTRGSo7lI61IQbSu8Vniyh3rCi', 'role_id' => 4,],
            ['id' => 5, 'firstname' => 'Sunil','lastname' => 'Ranasinghe', 'email' => 'sunil@gmail.com', 'password' => '$2y$10$DHKFHDI0EMIRoJzCohQbTOFfBKstTRGSo7lI61IQbSu8Vniyh3rCi', 'role_id' => 4,],
            ['id' => 6, 'firstname' => 'Nisal','lastname' => 'Kumara', 'email' => 'nisal@gmail.com', 'password' => '$2y$10$DHKFHDI0EMIRoJzCohQbTOFfBKstTRGSo7lI61IQbSu8Vniyh3rCi', 'role_id' => 4,],
            ['id' => 7, 'firstname' => 'android','lastname' => 'student', 'email' => 'ravindu@gmail.com', 'password' => '12345678', 'role_id' => 3,],
            ['id' => 8, 'firstname' => 'android','lastname' => 'teacher', 'email' => 'ravindu1@gmail.com', 'password' => '12345678', 'role_id' => 4,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
