
@extends('layouts.app')

@section('content')
<section id="services" class="services"  style="margin-top : 100px;
.drag-area{
  border: 2px dashed #fff;
  height: 500px;
  width: 700px;
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}">

      <div class="container">

      <div class="drag-area">
    <form method="post" action="{{ Route('insert.file') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
        <input type="file" name="video"/>
        <p>
         @if($errors->has('video'))
           {{ $errors->first('video') }}
         @endif
        </p>
        <input type="submit" name="click"/>
    </form>
</div>

        </div>

      </div>
    </section>


    @endsection
