<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    // Display a listing of the questions
    public function question()
    {
        $questions = Question::all();
        return view('admin.question.dashboard', compact('questions'));
    }

    // Show the form for creating a new question
    public function create()
    {
        return view('admin.question.create');
    }

    // Store a newly created question in storage
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_tlp' => 'required',
            'text' => 'required',
        ]);

        Question::create($request->all());

        return redirect()->route('admin.question')->with('success', 'Question created successfully.');
    }

    // Show the form for editing the specified question
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('admin.question.edit', compact('question'));
    }

    // Update the specified question in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_tlp' => 'required',
            'text' => 'required',
        ]);

        $question = Question::findOrFail($id);
        $question->update($request->all());

        return redirect()->route('admin.question')->with('success', 'Question updated successfully.');
    }

    // Remove the specified question from storage
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('admin.question')->with('success', 'Question deleted successfully.');
    }
}
