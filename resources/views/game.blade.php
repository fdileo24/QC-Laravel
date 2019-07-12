@extends('layouts.main')
@section('content')
<form form class="text-center border border-0 p-5 col-md-4  center_div__ " method="POST" action="{{action('GameController@NextQuestion')}}">
   @csrf
    <br><br><br>  
    <div class="form-group">
      <p class="text-white">{{$pregunta->question}}</p>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Respuestas!</label>
      <select multiple class="form-control" id="exampleFormControlSelect2" name="answer">
        <option value='1'>{{$pregunta->answer_1}}</option>
        <option value='2'>{{$pregunta->answer_2}}</option>
      </select>
      <button type="submit">Siguiente!!</button>
    </div>
  </form>
@endsection