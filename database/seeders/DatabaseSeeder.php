<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\District;
use App\Models\Division;
use App\Models\People;
use App\Models\Upazila;
use App\Models\User;
use App\Models\VaccinationCenter;
use App\Models\Vaccine;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        User::factory()->create( [
            'name'     => 'Shamim Ahmed',
            'email'    => 'admin@tika.test',
            'password' => bcrypt( '123' ),
        ] );

        People::factory( 30 )->create();

        // creating Divisions
        foreach ( tika_bd_divisions() as $division ) {
            Division::create( [
                'name' => $division['name'],
            ] );
        }

        // creating Districts
        foreach ( tika_bd_districts() as $district ) {
            District::create( [
                'name'        => $district['name'],
                'division_id' => $district['division_id'],
            ] );
        }

        // creating Upazilas
        foreach ( tika_bd_upazilas() as $upazila ) {
            Upazila::create( [
                'name'        => $upazila['name'],
                'district_id' => $upazila['district_id'],
            ] );
        }

        // creating Categories
        foreach ( tika_bd_categories() as $categorie ) {
            Category::create( [
                'name'    => $categorie['name'],
                'min_age' => $categorie['min_age'],
            ] );
        }

        // creating Vaccine
        $available_vaccines = ['Pfizer', 'Moderna', 'AstraZeneca', 'Sinopharm', 'Sputnik V'];
        foreach ( $available_vaccines as $available_vaccine ) {
            $vaccine = new Vaccine();
            $vaccine->name = $available_vaccine;
            $vaccine->save();
        }

        VaccinationCenter::factory( 20 )->create();
    }
}
