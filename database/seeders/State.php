<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class State extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->insert([
            ["code"=>'AL',"name"=>strtolower('ALABAMA')],
            ["code"=>'AK',"name"=>strtolower('ALASKA')],
            ["code"=>'AB',"name"=>strtolower('ALBERTA')],
            ["code"=>'AS',"name"=>strtolower('AMERICAN SAMOA')],
            ["code"=>'AZ',"name"=>strtolower('ARIZONA')],
            ["code"=>'AR',"name"=>strtolower('ARKANSAS')],
            ["code"=>'BC',"name"=>strtolower('BRITISH COLUMBIA')],
            ["code"=>'CA',"name"=>strtolower('CALIFORNIA')],
            ["code"=>'PW',"name"=>strtolower('CAROLINE ISLANDS')],
            ["code"=>'CO',"name"=>strtolower('COLORADO')],
            ["code"=>'CT',"name"=>strtolower('CONNETICUT')],
            ["code"=>'DE',"name"=>strtolower('DELAWARE')],
            ["code"=>'DC',"name"=>strtolower('DISTRICT OF COLUMBIA')],
            ["code"=>'FM',"name"=>strtolower('FEDERATED STATE')],
            ["code"=>'FL',"name"=>strtolower('FLORIDA')],
            ["code"=>'GA',"name"=>strtolower('GEORGIA')],
            ["code"=>'GU',"name"=>strtolower('GUAM')],
            ["code"=>'HI',"name"=>strtolower('HAWAII')],
            ["code"=>'ID',"name"=>strtolower('IDOHA')],
            ["code"=>'IL',"name"=>strtolower('ILLINOIS')],
            ["code"=>'IN',"name"=>strtolower('INDIANA')],
            ["code"=>'IA',"name"=>strtolower('IOWA')],
            ["code"=>'KS',"name"=>strtolower('KANSAS')],
            ["code"=>'KY',"name"=>strtolower('KENTUCKY')],
            ["code"=>'LA',"name"=>strtolower('LOUSIANA')],
            ["code"=>'ME',"name"=>strtolower('MAINE')],
            ["code"=>'MB',"name"=>strtolower('MANITOBA')],
            ["code"=>'MP',"name"=>strtolower('MARIANA ISLANDS')],
            ["code"=>'MH',"name"=>strtolower('MARSHALL ISLANDS')],
            ["code"=>'MD',"name"=>strtolower('MARYLAND')],
            ["code"=>'MA',"name"=>strtolower('MASSACHUSETTS')],
            ["code"=>'MI',"name"=>strtolower('MICHIGAN')],
            ["code"=>'MN',"name"=>strtolower('MINNESOTA')],
            ["code"=>'MS',"name"=>strtolower('MISSISSIPPI')],
            ["code"=>'MO',"name"=>strtolower('MISSOURI')],
            ["code"=>'MT',"name"=>strtolower('MONTANA')],
            ["code"=>'NE',"name"=>strtolower('NEBRASKA')],
            ["code"=>'NV',"name"=>strtolower('NEVADA')],
            ["code"=>'NB',"name"=>strtolower('NEW BRUNSWICK')],
            ["code"=>'NH',"name"=>strtolower('NEW HAMPSHIRE')],
            ["code"=>'NJ',"name"=>strtolower('NEW JERSEY')],
            ["code"=>'NM',"name"=>strtolower('NEW MEXICO')],
            ["code"=>'NY',"name"=>strtolower('NEW YORK')],
            ["code"=>'NF',"name"=>strtolower('NEWFOUNDLAND')],
            ["code"=>'NC',"name"=>strtolower('NORTH CAROLINA')],
            ["code"=>'ND',"name"=>strtolower('NORTH DAKOTA')],
            ["code"=>'NT',"name"=>strtolower('NORTHWEST TERRITORIES')],
            ["code"=>'NS',"name"=>strtolower('NOVA SCOTIA')],
            ["code"=>'NU',"name"=>strtolower('NUNAVUT')],
            ["code"=>'OH',"name"=>strtolower('OHIO')],
            ["code"=>'OK',"name"=>strtolower('OKLAHOMA')],
            ["code"=>'ON',"name"=>strtolower('ONTARIO')],
            ["code"=>'OR',"name"=>strtolower('OREGON')],
            ["code"=>'PA',"name"=>strtolower('PENNSYLVANIA')],
            ["code"=>'PE',"name"=>strtolower('PRINCE EDWARD ISLAND')],
            ["code"=>'PR',"name"=>strtolower('PUERTO RICO')],
            ["code"=>'PQ',"name"=>strtolower('QUEBEC')],
            ["code"=>'RI',"name"=>strtolower('RHODE ISLAND')],
            ["code"=>'SK',"name"=>strtolower('SASKATCHEWAN')],
            ["code"=>'SC',"name"=>strtolower('SOUTH CAROLINA')],
            ["code"=>'SD',"name"=>strtolower('SOUTH DAKOTA')],
            ["code"=>'TN',"name"=>strtolower('TENNESSEE')],
            ["code"=>'TX',"name"=>strtolower('TEXAS')],
            ["code"=>'UT',"name"=>strtolower('UTAH')],
            ["code"=>'VT',"name"=>strtolower('VERMONT')],
            ["code"=>'VI',"name"=>strtolower('VIRGIN ISLANDS')],
            ["code"=>'VA',"name"=>strtolower('VIRGINIA')],
            ["code"=>'WA',"name"=>strtolower('WASHINGTON')],
            ["code"=>'WV',"name"=>strtolower('WEST VIRGINIA')],
            ["code"=>'WI',"name"=>strtolower('WISCONSIN')],
            ["code"=>'WY',"name"=>strtolower('WYOMING')],
            ["code"=>'YT',"name"=>strtolower('YUKON TERRITORY')],
            ["code"=>'AE',"name"=>strtolower('ARMED FORCES-EUROPE')],
            ["code"=>'AA',"name"=>strtolower('ARMED FORCES-AMERICAS')],
            ["code"=>'AP',"name"=>strtolower('ARMED FORCES-PACIFIC')]
        ]);

    }
}
