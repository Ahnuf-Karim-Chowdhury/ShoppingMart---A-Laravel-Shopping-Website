<?php

namespace Database\Seeders;
use App\RolesEnum;
use App\PermissionsEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
        $userRole = Role::create(['name'=>RolesEnum::User->value]);
        $adminRole = Role::create(['name'=>RolesEnum::Admin->value]);
        $vendorRole = Role::create(['name'=>RolesEnum::Vendor->value]);

        $approveVendors = Role::create(['name'=>PermissionsEnum::ApproveVendors->value]);
        $sellProducts = Role::create(['name'=>PermissionsEnum::SellProducts->value]);
        $buyProducts = Role::create(['name'=>PermissionsEnum::BuyProducts->value]);

        $userRole->syncPermissions([$buyProducts]);
        $vendorRole->syncPermissions([$sellProducts,$buyProducts]);
        $adminRole->syncPermissions([$approveVendors,$sellProducts,$buyProducts]);
    }
}
