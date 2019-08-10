@extends('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <div class="tribe-title">
        <title>Find your tribe</title>
    </div>
 </head>

<body>
    <div class="container">
        <h2>Find Your Tribe!</h2>
        <br>
      <div class="row pl-4">
          @foreach($users as $user)
          @if(auth()->user()->id !== $user->id)

          <div class="card" style="width:250px">
              <img class="card-img-top" src="/images/avatar.png" alt="" style="width:100%">
              <div class="card-body">
                  <h4 class="card-title">{{ $user->name }}</h4>
                  <p class="mb-2">
                <small>Following: <span class="badge badge-primary">{{ $user->followings()->get()->count() }}</span></small>
                <small>Followers: <span class="badge badge-primary">{{ $user->followers()->get()->count() }}</span></small>
            </p>
            <button class="btn btn-info follow"  data-id="{{ $user->id }}">
                <strong>
                    @if(auth()->user()->isFollowing($user))
                    UnFollow
                    @else
                    Follow
                    @endif
                </strong>
            </button>
        </div>
    </div>

  @endif
  @endforeach
  </div>
</div>

</body>
</html>
@endsection
