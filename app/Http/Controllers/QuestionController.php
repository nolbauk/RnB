<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::latest()->get();
        return view('forum/discuss', compact('questions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Question::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return back()->with('success', 'Question posted successfully!');
    }

    public function show($id)
    {
        $question = Question::with(['user', 'comments.user', 'comments.replies.user'])->findOrFail($id);
        return view('forum.discuss-detail', compact('question'));
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        
        // Cek apakah user adalah admin
        if (Auth::user()->role_id != 1) {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus pertanyaan ini.');
        }
    
        $question->delete();
        return redirect()->back()->with('success', 'Pertanyaan berhasil dihapus.');
    }
}