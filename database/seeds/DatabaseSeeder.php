<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = new \App\User;
      $admin->name = 'admin';
      $admin->email = 'admin@admin.com';
      $admin->role = 'admin';
      $admin->password = bcrypt(111111);
      $admin->save();

      $admin = new \App\User;
      $admin->name = 'admin2';
      $admin->email = 'admin2@admin.com';
      $admin->role = 'admin';
      $admin->password = bcrypt(111111);
      $admin->save();

      $user = new \App\User;
      $user->name = 'user';
      $user->email = 'user@user.com';
      $user->password = bcrypt(111111);
      $user->save();

      $user = new \App\User;
      $user->name = 'user2';
      $user->email = 'user2@user.com';
      $user->password = bcrypt(111111);
      $user->save();

      $promotion = new \App\Promotion;
      $promotion->name = 'Bag';
      $promotion->pro_id = '5047';
      $promotion->startdate = '2017-5-19';
      $promotion->expdate = '2017-6-19';
      $promotion->active = 1;
      $promotion->point = 20;
      $promotion->description = 'แลกประเป๋า';
      $promotion->img = '/images/promotions/1.png';
      $promotion->save();

      $promotion = new \App\Promotion;
      $promotion->name = 'Free test';
      $promotion->pro_id = '3040';
      $promotion->startdate = '2017-5-19';
      $promotion->expdate = '2017-5-27';
      $promotion->active = 1;
      $promotion->point = 0;
      $promotion->description = 'ทดลองเรียนฟรี';
      $promotion->img = '/images/promotions/2.png';
      $promotion->save();


      $promotion = new \App\Promotion;
      $promotion->name = 'Discount';
      $promotion->pro_id = '1234';
      $promotion->startdate = '2017-5-19';
      $promotion->expdate = '2017-6-20';
      $promotion->active = 1;
      $promotion->point = 20;
      $promotion->description = 'ลดราคา';
      $promotion->img = '/images/promotions/3.png';
      $promotion->save();

      $section = new \App\Section;
      $section->email = 'user@user.com';
      $user = \App\User::where('email','=','user@user.com')->first();
      $user->point = 5;
      $user->save();
      $section->sub_id = '1101';
      $section->time_left = '18';
      $section->save();

      $section = new \App\Section;
      $section->email = 'user@user.com';
      $user = \App\User::where('email','=','user@user.com')->first();
      $user->point = 5;
      $user->save();
      $section->sub_id = '1102';
      $section->time_left = '18';
      $section->save();

      $subject = new \App\Subject;
      $subject->sub_id = '1101';
      $subject->name = 'GRAMMAR';
      $subject->type = 'เด็กประถม';
      $subject->price = '6300';
      $subject->hour = '18';
      $subject->point = '5';
      $subject->description = 'แกรมม่าสำหรับเด็กประถม';
      $subject->save();

      $subject = new \App\Subject;
      $subject->sub_id = '1102';
      $subject->name = 'GRAMMAR2';
      $subject->type = 'เด็กมัธยม';
      $subject->price = '6300';
      $subject->hour = '18';
      $subject->point = '5';
      $subject->description = 'เด็กมัธยม';
      $subject->save();

      $subject = new \App\Subject;
      $subject->sub_id = '1201';
      $subject->name = 'VOCAM 1';
      $subject->type = 'เด็กประถม-มัธยม';
      $subject->price = '5600';
      $subject->hour = '16';
      $subject->point = '5';
      $subject->description = 'คำศัพท์สำหรับเด็ก';
      $subject->save();
    }
}
