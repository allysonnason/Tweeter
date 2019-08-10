@extends('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-6">

                    <div class= "card">
                        <div class="card-body">
                            <form action="/profiles/{{ $profile->id}}" method="POST">
                                {{method_field('PUT')}}
                                @csrf
                                <textarea name="location" value="location">{{ $profile->location}}</textarea><br />
                                <textarea name="interests" value="interests">{{ $profile->interests}}</textarea><br />
                                <textarea name="horsename" value="horsename">{{ $profile->horsename}}</textarea><br />
                                <textarea name="breed" value="breed">{{ $profile->breed}}</textarea><br />
                                <textarea name="age" value="age">{{ $profile->age}}</textarea><br />
                                <button type="submit">Save</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>

@endsection
