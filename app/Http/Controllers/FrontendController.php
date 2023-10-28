<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {

        $courses = Course::all();
        // check if a user has already purchased or registered for a course and redirect to course list instead of adding to cart
        $existing_registered_courses = CourseStudent::all()->where('user_id', '=', Auth::id())->pluck('course_id');

        // $existing_registered_courses gives a list of courses a user has registerd for
        // we need to check if courses in frontend are in this array then we can redirect a user to course list instead of
        // asking them to add to cart

        // dd($existing_registered_courses[2]);
        // $existing_registered_courses->toArray()  converts a collectio instance to an array

        return view('frontend.index')->with([
            'courses' => $courses,
            'existing_registered_courses' => $existing_registered_courses,
        ]);

    }

    public function view_course($id)
    {
        $course = Course::find($id);
        if (! $course) {
            abort('404');
        }

        $modules = Module::all()->where('course_id', $course->id);

        return view('viewcourse')->with([
            'course' => $course,
            'modules' => $modules,
        ]);
    }

    public function all_courses()
    {
        $courses = Course::all();

        return view('frontend.all_courses')->with([
            'courses' => $courses,
        ]);
    }

    public function start_course(Request $request, $id)
    {
        $course = Course::find($id);
        $existing_registered_courses = CourseStudent::all()->where('user_id', '=', Auth::id())->where('course_id', '=', $id);
        if (count($existing_registered_courses) > 0) {
            // this will output the number of times a user has registered for the same course , if already registered for
            // the course the user is only redirected to the profile to view the course list
            return redirect('/user_profile');

        } else {

            $courseStudent = new CourseStudent();
            $courseStudent->course_id = $course->id;
            $courseStudent->user_id = Auth::id();
            $courseStudent->save();
            $request->session()->flash('success', 'Course registered successfully');

            return redirect('/user_profile');

        }

    }

    public function my_courses()
    {
        $coursesStudent = CourseStudent::orderBy('id', 'DESC')->where('user_id', Auth::id())->first();
        $courses = Course::all()->where('id', '=', $coursesStudent->course_id);

        return view('frontend.mycourses')->with([
            'coursesStudent' => $coursesStudent,
            'courses' => $courses,
        ]);
    }

    public function view_module($title)
    {
        $module = Module::find($title);

        if (Auth::check()) {
            $module->students()->attach(Auth::id());
        }

        return view('frontend.lessons')->with([
            'module' => $module,
        ]);
    }

    public function about_gts_learning()
    {
        return view('about');
    }

    public function contact_gts_learning()
    {
        return view('contact_us');
    }

    public function user_profile()
    {
        $student_courses = CourseStudent::all()->where('user_id', '=', Auth::id());
        $total_courses = count($student_courses);

        return view('user_dashboard')->with([
            'student_courses' => $student_courses,
            'total_courses' => $total_courses,
        ]);
    }

    public function wish_list_courses()
    {
        return view('frontend.wish_list');
    }

    public function course_detail($course_id)
    {

        $course = Course::find($course_id);
        if (! $course) {
            return redirect('/');
        }

        return view('frontend.course_detail')->with([
            'course' => $course,
        ]);
    }
}
