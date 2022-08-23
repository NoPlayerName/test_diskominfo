<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index', [
        'tittle' => "Home Page"
    ]);
});



Route::get('/post', function () {
    $data = [
        [
            "tittle" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Muhammad Ruhiyat",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ullam velit quae adipisci, ipsum quod beatae. Vitae in vero aspernatur eos sequi reprehenderit placeat! Saepe, accusamus iure repellendus incidunt eius, numquam adipisci enim laborum, obcaecati architecto labore cupiditate? Veritatis ab exercitationem dolorum aut placeat hic ducimus, libero officiis vel laborum non consequuntur obcaecati odit rerum delectus facere. Quisquam ea sit, tempora laborum quos ipsam deleniti harum quae nam ipsa quaerat animi in adipisci laboriosam? Temporibus ratione ut ducimus tempore numquam minus est nesciunt dicta ipsum eum corporis eos unde voluptate architecto perspiciatis corrupti explicabo esse, hic provident recusandae expedita maiores!"
        ],

        [
            "tittle" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Ruhiyat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos consequatur eum quae accusantium accusamus, illum possimus labore qui, aliquam maxime aperiam ratione, veritatis explicabo! Et sit sint unde saepe ea accusantium blanditiis, id reprehenderit neque facilis vel temporibus, fugiat ratione beatae ab harum doloribus quibusdam dolor cupiditate possimus vero quae obcaecati! Sapiente, tenetur nam. Beatae enim mollitia ipsum, veniam itaque rem omnis. Porro reprehenderit est similique doloremque molestias et, ipsum vel iusto expedita tenetur iure repellendus enim at architecto sint suscipit, adipisci optio dolorem vero. Iste explicabo iure culpa ea illo, saepe quasi inventore, rem molestiae dolores maxime? Delectus, sequi!"
        ],
    ];

    return view('post.index', [
        'tittle' => "Halaman Post",
        'post' => $data
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $data = [
        [
            "tittle" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Muhammad Ruhiyat",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ullam velit quae adipisci, ipsum quod beatae. Vitae in vero aspernatur eos sequi reprehenderit placeat! Saepe, accusamus iure repellendus incidunt eius, numquam adipisci enim laborum, obcaecati architecto labore cupiditate? Veritatis ab exercitationem dolorum aut placeat hic ducimus, libero officiis vel laborum non consequuntur obcaecati odit rerum delectus facere. Quisquam ea sit, tempora laborum quos ipsam deleniti harum quae nam ipsa quaerat animi in adipisci laboriosam? Temporibus ratione ut ducimus tempore numquam minus est nesciunt dicta ipsum eum corporis eos unde voluptate architecto perspiciatis corrupti explicabo esse, hic provident recusandae expedita maiores!"
        ],

        [
            "tittle" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Ruhiyat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos consequatur eum quae accusantium accusamus, illum possimus labore qui, aliquam maxime aperiam ratione, veritatis explicabo! Et sit sint unde saepe ea accusantium blanditiis, id reprehenderit neque facilis vel temporibus, fugiat ratione beatae ab harum doloribus quibusdam dolor cupiditate possimus vero quae obcaecati! Sapiente, tenetur nam. Beatae enim mollitia ipsum, veniam itaque rem omnis. Porro reprehenderit est similique doloremque molestias et, ipsum vel iusto expedita tenetur iure repellendus enim at architecto sint suscipit, adipisci optio dolorem vero. Iste explicabo iure culpa ea illo, saepe quasi inventore, rem molestiae dolores maxime? Delectus, sequi!"
        ],
    ];

    $new = [];

    foreach ($data as $pos) {
        if ($pos["slug"] == $slug) {
            $new = $pos;
        }
    }

    return view('post.posts', [
        'tittle' => "Halaman Post Utama",
        'post' => $new
    ]);
});

Route::get('/about', function () {
    return view('home.about', [
        'tittle' => "About",
        'name' => "Muhammad Ruhiyat",
        'email' => "muhammadruhiyat020998@gmail.com",
        'img' => "/img/photo_2022-08-01_13-12-07.jpg"
    ]);
});

Route::get('/category', function () {
    return view('category.index', [
        'tittle' => "Halaman Category"
    ]);
});

Route::get('/login', function () {
    return view('login.index');
});
