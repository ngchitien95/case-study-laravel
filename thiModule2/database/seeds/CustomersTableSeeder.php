<?php

use App\customer;
use App\Customers;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customers();
        $customer->surname = 'Hee';
        $customer->name = 'Đông';
        $customer->phone = '0918768297';
        $customer->email = 'dongbede@gmail.com';
        $customer->address = 'A Lưới';
        $customer->save();

        $customer = new Customers();
        $customer->surname = 'Công';
        $customer->name = 'Hữu';
        $customer->phone = '09187612341';
        $customer->email = 'Huucong@gmail.com';
        $customer->address = 'Đặng Huy Trứ';
        $customer->save();

        $customer = new Customers();
        $customer->surname = 'hieu';
        $customer->name = 'tan';
        $customer->phone = '0918768297';
        $customer->email = 'tanhieu@gmail.com';
        $customer->address = 'Phan Bội Châu';
        $customer->save();

        $customer = new Customers();
        $customer->surname = 'Hee';
        $customer->name = 'Đông';
        $customer->phone = '0918768297';
        $customer->email = 'dongbede@gmail.com';
        $customer->address = 'Nam Đông';
        $customer->save();
    }
}
