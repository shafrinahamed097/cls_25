<!-- Passing Data -->
<h1>Sum is={{$marks}}</h1>

<!-- If-else -->
@if($marks>=80 && $marks<=100)
<h1>Grade: A+</h1>

@elseif($marks>=70 && $marks<=79)
<h1>Grade: A</h1>

@elseif($marks>=60 && $marks<=69)
 <h1>Grade: A-</h1>

 @else
 <h1>Grade: F</h1>
 @endif

 <!-- Asset Binding -->
 <img src="{{asset('https://captainbinary.com/images/hero-img.svg')}}">

 <!-- Switch Case -->
  @switch($marks)

  @case(100)
  <h1>A+</h1>
  @break

  @case(80)
  <h1>A</h1>
  @break

  @default
  <h1>Do not know</h1>

  @endswitch()