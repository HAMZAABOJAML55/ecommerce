
@extends('layouts.app')

@section('content')
<section id="services" class="services"  style="margin-top : 100px">
      <div class="container">
          <form action="{{ route('video.store') }}" method="POST">
              @csrf
              <label for="video_link">رابط الفيديو:</label>
              <input type="text" name="video_link" id="video_link">
              <button type="submit">إضافة الفيديو</button>
          </form>

      </div>
    </section>


    @endsection
