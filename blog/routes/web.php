 <?php
use App\Task;
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
Route::get('/index', ['as' => 'index', 'uses' => 'PostsController@index']);
Route::get('/posts', ['as' => 'posts', 'uses' => 'PostsController@show']);
Route::get('/posts/create', ['as' => 'create', 'uses' => 'PostsController@create']);
Route::post('/posts','Postscontroller@store');
Route::get('/posts/{post}','Postscontroller@show');
Route::post('/posts/{post}/comments','CommentsController@store');
Route::get('/','PostsController@index')->name('home');
Route::get('/registering','RegistrationController@create');
Route::post('/registering','RegistrationController@store');
 Route::get('/logining','SessionController@create');
 Route::post('/logining','SessionController@store');
  Route::get('/logout','SessionController@destroy');

  Route::post('/logining','SessionController@store');

// // Route::get('/', function () {
// //     return view('welcome');
// // });
Route::get('/task',['as'=>'second','uses'=>'TaskController@second']);

// Route::get('/model/{id}', function ($id) {
//  $ass=Task::find($id);
//  return view('aa',compact('ass'));   
// });
Route::get('/model/{id}',['as'=>'model/{id}','uses'=>'TaskController@index']);

Route::get('/task/{task}', function ($task) {
 $abc=Task::find($task);
 return view('abcd',compact('abc'));   
});

Auth::routes();

Route::get('/home', 'HomeController@index');
