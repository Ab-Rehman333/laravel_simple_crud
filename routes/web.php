<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SingleFetch;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\Constraint;



// Route::controller(PageController::class)->group(function () {
//     Route::get("/",              "show")->name("home");
//     Route::get("/about-us",      "about")->name("about");
//     Route::get("/contact-us",    "contact")->name("contact");
//     Route::get("/error",          "error")->name("error");
//     Route::get("/property-list", "pList")->name("propertyList");
//     Route::get("/property-agent", "pAgent")->name("propertyAgent");
//     Route::get("/property-type", "pType")->name("propertyType");
//     Route::get("/testimonial", "testimonial")->name("testimonial");

// Route::get("/users", "showUsers")->name("users");
// Route::get("/user{id}", "showUser")->name("singleUser");

// });




Route::get("/", [PageController::class, "show"])->name("home");
Route::get("/about-us", [PageController::class, "about"])->name("about");
Route::get("/contact-us", [PageController::class, "contact"])->name("contact");
Route::get("/error", [PageController::class, "error"])->name("error");
Route::get("/property-list", [PageController::class, "pList"])->name("propertyList");
Route::get("/property-agent",  [PageController::class, "pAgent"])->name("propertyAgent");
Route::get("/property-type",  [PageController::class, "pType"])->name("propertyType");
Route::get("/testimonial", [PageController::class, "testimonial"])->name("testimonial");
Route::get("/users", [PageController::class, "showUsers"])->name("users");
Route::get("/user{id}", [PageController::class, "showUser"])->name("singleUser");


// other controller 
Route::get("/SingleFetch", SingleFetch::class)->name("single");


Route::get("/students", [StudentController::class, "students"])->name("students");
Route::post("/add", [StudentController::class, "addStudent"])->name("addStudent");
Route::get("/updatePage{id}", [StudentController::class, "updatePage"])->name("updatePage");
Route::post("/update{id}", [StudentController::class, "updateStudentInfo"])->name("updateStudent");
Route::get("/delete{id}", [StudentController::class, "deleteStudent"])->name("student.delete");
Route::get("/student{id}", [StudentController::class, "student"])->name("student");



// adding 
Route::view("/newStudent", 'addStudent')->name("addStu");

// Route::get('/test', function () {
//     $user = "Abdul Rehman One";
//     $city = "RawalPindi";

//     $array = getUsers();
//     // first method 
//     // return view('test', compact("user"));
//     // second method 
//     // return view("test")->withUser($user)->withCity("RawalPindi");
//     // seding array through routes 
//     return view("test", [
//         "users" => $array
//     ]);
// })->name("test");






// Route::get('/user{id}', function ($id) {
//     $users = getUsers();
//     abort_if(!isset($users[$id]), 404);
//     $user = $users[$id];
//     return view('singleUser', ["id" => $user]);
// })->name("singleUser");


// Route::prefix("page")->group(function () {
//     Route::get('/second', function () {
//         return "<h1>second</h1>";
//     })->name("second");

//     Route::get('/third', function () {
//         return "<h1>third</h1>";
//     })->name("third");


//     Route::get('/four', function () {
//         return "<h1>four</h1>";
//     })->name("four");
// });




// single line route 
// Route::view("/newRoute", "new");


// route parameters  multiple routes with pare
// Route::get("/about/{post_id?}/comment/{comment_id?}", function ($post_id = null, $comment = null) {
//     if ($post_id) {
//         return "<h1> Post Id : {$post_id} </h1> <h1>Comment Id : {$comment}</h1>";
//     } else {
//         return "<h1> No Id : Found </h1>";
//     }
// });

// Constraint  single 
// Route::get("/about/{post_id?}", function ($post_id = null) {
//     if ($post_id) {
//         return "<h1> Post Id : {$post_id} </h1>";
//     } else {
//         return "<h1> No Id : Found </h1>";
//     }
// })->where("post_id", '[@*0-9]+');
// Constraint  double 


// Route::get("/about/{post_id?}/comment/{comment_id?}", function ($post_id = null, $comment) {
//     if ($post_id || $comment) {
//         return "<h1> Post Id : {$post_id} </h1> <h1> Post Id : {$comment} </h1>";
//     } else {
//         return "<h1> No Id : Found </h1>";
//     }
// })->where("post_id", '[@*0-9]+')->whereAlpha("comment_id");
