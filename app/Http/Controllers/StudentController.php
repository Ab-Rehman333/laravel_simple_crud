<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function students()
    {
        $students = DB::table("students")
            ->orderBy('id')
            ->orderBy('age')
            ->orderBy('city')
            ->get();
        return view("students", compact("students"));
    }
    public function student(string $id)
    {
        // for selecting all the single user info 
        $student = DB::table("students")->where('id', $id)->get();
        return view("singleStud", compact("student"));

        // return $student;

        // fetch from conditions 
        // $student = DB::table("students")->where('age', '>', 25)->get();
        // return $student;


        // fetch from multiple conditions 
        // $student = DB::table("students")->where([
        //     ['age' , '<=', 25],
        //     ['name', 'like', 'j%']
        // ])->get();
        // return $student;






        // to get unique values from the db 
        // $student = DB::table("students")->select("city ")->distinct()->get();
        // for setting as 
        // $student = DB::table("students")->select('id', "name","city as forgin")->get();


        // for selecting columns 
        // $student = DB::table("students")->select('id', "name", "city ")->get();

        // return $student;

    }

    public function addStudent(Request $req)
    {
        $addStudent = DB::table("students")->insert([
            'name' => $req->name,
            'email' => $req->email,
            'role' => $req->role,
            'age' => $req->age,
            'city' => $req->city
        ]);

        if ($addStudent) {
            return redirect()->route('students');
        } else {
            echo "Student not added";
        }
    }
    public function updatePage(string $id)
    {

        // $student = DB::table("students")->where('id', $id)->get();
        $student = DB::table("students")->find($id);
        return view("updateStudent", compact("student"));
    }
    public function updateStudentInfo(Request $req, string $id)
    {
        $updateStudent = DB::table("students")->where('id', $id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'role' => $req->role,
            'age' => $req->age,
            'city' => $req->city
        ]);

        if ($updateStudent) {
            return redirect()->route('students');

        } else {
            echo '<div > Data NOt Updated</div>';
        }
    }

    public function deleteStudent(string $id)
    {
        $deleteStudent = DB::table("students")->where('id', $id)->delete();

        return redirect()->route('students');
    }
}
