@extends('layout')

@section('body')
<div class="container mt-5">
    <div>E-book detail:</div>
    <table class="table table-striped table-hover mt-2">

        <nav>
            @foreach ($ebook as $list)
            <tr>
                <th scope="row">Title</th>
                <td>{{$list->title}}</td>
            </tr>
            <tr>
                <th scope="row">Author</th>
                <td>{{$list->author}}</td>
            </tr>
            <tr>
                <th scope="row">Description</th>
                <td>{{$list->description}}</td>
            </tr>          
            @endforeach
        </nav>
      </table>
      <div class="mt-5 item-align-center">
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit" value="signup">Rent</button>
          </div>
    </div>
</div>


@endsection