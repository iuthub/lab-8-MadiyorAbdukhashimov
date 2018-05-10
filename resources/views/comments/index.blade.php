@extends('layouts.app')

@section('content')
<div class="row">
    @forelse($comments as $comment)
    <div class="col-md-6 col-md-offset-3">
        <div class = "panel panel-default">
            <div class="panel-heading">
                <span>
                    {{$comment->username}}
                </span>
                <span class="pull-right clearfix">
                    {{$comment->created_at->diffForHumans()}}
                </span>
            </div>
            <div class="panel-body">
                {{$comment->shortcontent}}
                <a href="/comments/{{$comment->id}}">Read more</a>
                <form action="/comments" method="POST" >
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <label for="comment"> Reply </label>
                        <textarea name="reply" class="form-control" rows="1" cols="50"></textarea>
                    </div>
                    <button class="btn btn-success pull-right">Reply</button>
                </form>
            </div>
            <div class="panel-footer clearfix" style="background: white">
                <button class="btn btn-success pull-right ">Like</button>
            </div>
        </div>
    </div>
    @empty
        No comments yet
    @endforelse
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{ $comments->links() }}
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class = "panel panel-default">
            <div class="panel-heading">
                Leave a comment {{$user->name}} )))
            </div>
            <div class="panel-body">
                <form action="/comments" method="POST" >
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <label for="comment"> Comment </label>
                        <textarea name="comment" class="form-control"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success pull-right">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection