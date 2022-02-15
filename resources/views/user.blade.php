@extends('layout')

@section('body')
<table class="table table-striped table-hover mt-5">
    <thead class="border">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
        </tr>
    </thead>

    <nav>
        @foreach ($ebook as $list)
        <tr>
            <th scope="row"><a href="/more/{{$list->ebook_id}}">{{$list->title}}</a></th>
            <td>{{$list->author}}</td>
        </tr>            
        @endforeach
    </nav>

  </table>
        
@endsection