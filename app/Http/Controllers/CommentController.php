<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'content' => 'required|string|max:1000',
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'question_id' => $request->question_id,
            'content' => $request->content,
        ]);

        return back()->with('success', 'Komentar berhasil ditambahkan!');
    }
    
    public function reply(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'parent_id' => 'nullable|exists:comments,id',
            'content' => 'required|string'
        ]);
    
        Comment::create([
            'user_id' => Auth::id(),
            'question_id' => $request->question_id,
            'parent_id' => $request->parent_id,
            'content' => $request->content,
        ]);
    
        return back();
    }

    public function reply2reply(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'parent_id' => 'nullable|exists:comments,id',
            'content' => 'required|string'
        ]);
    
        Comment::create([
            'user_id' => Auth::id(),
            'question_id' => $request->question_id,
            'parent_id' => $request->parent_id,
            'content' => '@' . $request->username . ' ' . $request->content,
        ]);
    
        return back();
    }
}
