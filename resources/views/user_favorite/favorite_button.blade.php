@if (Auth::user()->id) 
    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['user.removefavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入りから削除', ['class' => "btn btn-danger btn-xs form-inline"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.addfavorite', $micropost->id]]) !!}
            {!! Form::submit('お気に入りに追加', ['class' => "btn btn-warning btn-xs form-inline"]) !!}
        {!! Form::close() !!}
    @endif
@endif