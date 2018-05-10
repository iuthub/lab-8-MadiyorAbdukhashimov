<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Comment;

class CommentController extends Controller
{

    public function index()
    {
        $comments = Comment::paginate(5);
        $user = Auth::user();
        return view('comments.index', compact('user', 'comments'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $this->validate($request, array(
                'comment'=> 'required|min:5|max:750'
            ));
        // return $request;
        Comment::create($request->all());
        return back();
    }


    public function show($id)
    {
        $comments = Comment::findOrFail($id);
        return $comments;
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
