@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact Me</h1>
        <form action="" method="post">
            @csrf
            <div class="form-group">
              <label for="full_name">Full Name</label>
              <input type="text" name="" id="fullNameHelper" class="form-control" placeholder="Mario Rossi" aria-describedby="fullNameHelper" minlength="5" maxlength="255" required>
              <small id="fullNameHelper" class="text-muted">Type here youre full name</small>
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="email@example.com" required>
              <small id="emailHelpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="message" id="message" rows="5"></textarea>
            </div>
            <button type="button" name="" id="" class="btn btn-primary btn-lg btn-block"></button>
        </form>
    </div>
@endsection