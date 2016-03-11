<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Models\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->city,
        'description' => $faker->paragraph(3),
        'user_id' => $faker->numberBetween(1,10),
    ];
});

$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {
    return [
        'com' => $faker->city,
        'article_id' => $faker->numberBetween(1,10),
        'user_id' => $faker->numberBetween(1,10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [

        'title' => 'Laroche Traiteur',
        'user_id' => $faker->numberBetween(1,10),
        'client' => 'Jean-Micher Laroche',
        'client_metier' => 'propriétaire',
        'client_adresse' => '12 rue Victor Hugo 75018 Paris',
        'client_email' => 'jmlaroche75@wanadoo.fr',
        'client_tel' => '0642133769',
        'client_suivi' => 'Jean-Micher Laroche',
        'client_suivi_metier' => 'propriétaire',
        'client_suivi_adresse' => '12 rue Victor Hugo 75018 Paris',
        'client_suivi_email' => 'jmlaroche75@wanadoo.fr',
        'client_suivi_tel' => '0642133769',
        'fiche_identite' => 'Propriétaire - Cuisinier',
        'type_projet' => 'site internet',
        'context' => 'Perte d\'un gros client et recherche de nouveaux clients récurrents',
        'demande' => 'Je voudrais un site pour développer le traiteur auprès de société de moyennes ou grosses importances afin d\'avoir la possibilité de prestations récurrentes à l\'année.
Fabriquant mon foie gras et fumant mon saumon, peut-être jouer sur le côté artisanale ou authentique ; peut-être aussi une rubrique menu avec quelques exemples de cocktails de buffets et de plateaux repas.
Se référer à des sites traiteurs types Lenôtre, Dalloyau ou autres...',
        'objectifs' => 'Un site attractif pour attirer de nouveaux clients récurrents, des entreprises de préférence.
Si possible j\'aimerais que le site soit opérationnel pour avril ou mai. Le référencement me semble aussi être un point important.',
        'contraintes' => 'Je n’ai pas les accès au site actuel.'
    ];
});
