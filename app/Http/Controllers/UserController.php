<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
      
        $users = [
            ['name' => 'Malik', 'email' => 'malik@example.com', 'role' => 'student', 'about' => "Hello everyone! My name is Malik and I'm a student ..."],
            ['name' => 'Tisalita Gabriel loan', 'email' => 'michael+student@example.com', 'role' => 'student', 'about' => 'Hello! My name is Michael, and I am a student of La...'],
            ['name' => 'Marwan Khaled', 'email' => 'sanna+student@xample.com', 'role' => 'student', 'about' => 'Sanna is a student of law who loves to read and stud...'],
            ['name' => 'Petra Nova', 'email' => 'petra+student@xample.com', 'role' => 'student', 'about' => 'Petra is a person who is passionate about climate sci...'],
            ['name' => 'Cordelia Taraby', 'email' => 'cordelia+teacher@xample.com', 'role' => 'student', 'about' => 'Cordelia is a professor of vision science, with a focu...'],
            ['name' => 'Roberto Frederick', 'email' => 'roberto+student@xample.com', 'role' => 'student', 'about' => 'Roberto is a student of economics, with a focus on t...'],
            ['name' => 'Roxanne', 'email' => 'roxanne@example.com', 'role' => 'teacher', 'about' => 'Hello! My name is Roxanne, and I am a teacher of En...'],
            ['name' => 'Dawn Jacobs', 'email' => 'dawn+teacher@xample.com', 'role' => 'teacher', 'about' => 'Dawn is a professor of economics and marketing, wi...'],
            ['name' => 'Marie Curie', 'email' => 'marie+teacher@xample.com', 'role' => 'teacher', 'about' => 'In December 1903 the Royal Swedish Academy of S...'],
        ];

       
       return view('create_user', compact('users'));
    }
}
