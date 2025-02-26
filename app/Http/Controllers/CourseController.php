<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request){
        $query = Course::query();
    
        // Search functionality
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where('title', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('instructor', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('courseHead', 'LIKE', "%{$searchTerm}%");
        }
    
        $courses = $query->paginate(10);
        return view('course.index', compact('courses'));
    }
        
    public function create(){
        return view('course.create'); 
    }

    public function store(Request $request){
        // Validate request
        $validated = $request->validate([
            'title' => 'required|max:255',
            'instructor' => 'required|max:255',
            'courseHead' => 'required|max:255',
        ]);
        
        Course::create($validated);
        return redirect()->route('course.index')->with('success', 'Course created successfully.');
    }

    public function show($id){
        $course = Course::findOrFail($id);
        return view('course.show', compact('course'));
    }

    public function edit($id){
        $course = Course::findOrFail($id);
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, $id){
        $course = Course::findOrFail($id);
        
        // Validate request
        $validated = $request->validate([
            'title' => 'required|max:255',
            'instructor' => 'required|max:255',
            'courseHead' => 'required|max:255',
        ]);
        
        $course->update($validated);
        return redirect()->route('course.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($id){
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('course.index')->with('success', 'Course deleted successfully.');
    }
}