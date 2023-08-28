<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function students()
    {
        try {
            $students = DB::table("students")
                ->join('infos', 'students.city', '=', 'infos.id')
                ->select('students.*', 'infos.city as city_name')
                ->orderBy('students.id')
                ->orderBy('students.age')
                ->orderBy('infos.city')
                ->paginate(3, ['*'], 'search');
            // return $students;
            return view("students", compact("students"));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
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
        // Validate the incoming request data
        $validation = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'age' => 'required|integer',
            'city' => 'required',
        ]);

        // If validation passes, insert the data
        if ($validation) {
            try {
                DB::table('students')->insert([
                    'name' => $req->name,
                    'email' => $req->email,
                    'role' => $req->role,
                    'age' => $req->age,
                    'city' => $req->city,
                ]);

                return redirect()->route('students')->with('success', 'Student added successfully');
            } catch (Exception $e) {
                return redirect()->back()->withInput()->with('error', 'Failed to add student');
            }
        } else {
            // Validation failed, redirect back to the form with validation errors
            return redirect()->back()->withInput()->withErrors($validation);
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
