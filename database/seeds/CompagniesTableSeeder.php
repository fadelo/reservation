<?php

use Illuminate\Database\Seeder;
use App\Models\Compagnie;

class CompagniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Compagnie::create([
        	'id'=>'1',
        	'nom'=>'ATT',
        	'description'=>'Compagnie de transport',
            'rccm'=>'21DS5ZSX55',
            'ifu'=>'02154879QS',
        	'telephone'=>'+22965987845',
        	'adresse'=>'Cotonou, étoile rouge',
        	'email'=>'att@att.com',
        	'wifi'=>'0',
        	'climatisation'=>'1',
        	'num_compte_bancaire'=>'d5525555dz222',
        	'momo'=>'+22997996112',
        	'flooz'=>'+22995551363',
        	'validiterReserv'=>'3',
        	'penaliter'=>'20',
        	'durPostPenaliter'=>'1',
        	'msgAverti'=>'Gardez bien vos colis et soyez à lheure',

        ]);

        Compagnie::create([
        	'id'=>'2',
        	'nom'=>'Confort Lines',
        	'description'=>'Compagnie de transport',
            'rccm'=>'21DS5ZGG55',
            'ifu'=>'MON02154879QS',
        	'telephone'=>'+22967887845',
        	'adresse'=>'Cotonou, Agontikon',
        	'email'=>'confort@confortlines.com',
        	'wifi'=>'0',
        	'climatisation'=>'1',
        	'num_compte_bancaire'=>'cd5225555dz222',
        	'momo'=>'+22997996112',
        	'flooz'=>'+22995551363',
        	'validiterReserv'=>'3',
        	'penaliter'=>'20',
        	'durPostPenaliter'=>'1',
        	'msgAverti'=>'Gardez bien vos colis et soyez à lheure',

        ]);

        Compagnie::create([
            'id'=>'3',
            'nom'=>'Pax express',
            'description'=>'Compagnie de transport de personnes et de marchandises',
            'rccm'=>'21DS5ZGG55',
            'ifu'=>'MON02154879QS',
            'telephone'=>'+22967887845',
            'adresse'=>'Cotonou, Agontikon',
            'email'=>'confort@confortlines.com',
            'wifi'=>'0',
            'climatisation'=>'0',
            'num_compte_bancaire'=>'cd5225555dz222',
            'momo'=>'+22997996112',
            'flooz'=>'+22995551363',
            'validiterReserv'=>'3',
            'penaliter'=>'20',
            'durPostPenaliter'=>'1',
            'msgAverti'=>'Gardez bien vos colis et soyez à lheure',

        ]);

        Compagnie::create([
            'id'=>'4',
            'nom'=>'Nanin Travel',
            'description'=>'Compagnie de transport',
            'rccm'=>'21DS5ZGG55',
            'ifu'=>'MON02154879QS',
            'telephone'=>'+22967887845',
            'adresse'=>'Cotonou, Etoile Rouge',
            'email'=>'confort@confortlines.com',
            'wifi'=>'0',
            'climatisation'=>'0',
            'num_compte_bancaire'=>'cd5225555dz222',
            'momo'=>'+22997996112',
            'flooz'=>'+22995551363',
            'validiterReserv'=>'3',
            'penaliter'=>'20',
            'durPostPenaliter'=>'1',
            'msgAverti'=>'Gardez bien vos colis et soyez à lheure',

        ]);


        Compagnie::create([
            'id'=>'5',
            'nom'=>'La Poste',
            'description'=>'Compagnie de transport',
            'rccm'=>'21DS5ZGG55',
            'ifu'=>'MON02154879QS',
            'telephone'=>'+22967887845',
            'adresse'=>'Cotonou, Akpakpa sacré coeur',
            'email'=>'confort@confortlines.com',
            'wifi'=>'1',
            'climatisation'=>'1',
            'num_compte_bancaire'=>'cd5225555dz222',
            'momo'=>'+22997996112',
            'flooz'=>'+22995551363',
            'validiterReserv'=>'3',
            'penaliter'=>'20',
            'durPostPenaliter'=>'1',
            'msgAverti'=>'Gardez bien vos colis et soyez à lheure',

        ]);

        Compagnie::create([
            'id'=>'6',
            'nom'=>'Sonef',
            'description'=>'Compagnie de transport de biens et de personnes',
            'rccm'=>'21DS5ZGG55',
            'ifu'=>'MON02154879QS',
            'telephone'=>'+22967887845',
            'adresse'=>'Cotonou, Akpakpa sacré coeur',
            'email'=>'confort@confortlines.com',
            'wifi'=>'0',
            'climatisation'=>'1',
            'num_compte_bancaire'=>'cd5225555dz222',
            'momo'=>'+22997996112',
            'flooz'=>'+22995551363',
            'validiterReserv'=>'3',
            'penaliter'=>'20',
            'durPostPenaliter'=>'1',
            'msgAverti'=>'Gardez bien vos colis et soyez à lheure',

        ]);
    }
}
