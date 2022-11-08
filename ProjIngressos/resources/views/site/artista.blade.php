@extends('site.layout')

@section('content')

<section id="slider" style='height:100'>
  <input type="radio" name="slider" id="s1">
  <input img='' type="radio" name="slider" id="s2">
  <input type="radio" name="slider" id="s3" checked>
  <input type="radio" name="slider" id="s4">
  <input type="radio" name="slider" id="s5">
  <label for="s1" id="slide1"><img class=" h-100" src="https://dynaimage.cdn.cnn.com/cnn/digital-images/org/cc4f8999-309e-494f-90b3-3af14f73ee0b.jpg" alt="First slide"></label>
  <label for="s2" id="slide2"></label>
  <label for="s3" id="slide3"></label>
  <label for="s4" id="slide4"></label>
  <label for="s5" id="slide5"></label>
</section>

@endsection  