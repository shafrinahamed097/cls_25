<h1>Sum is={{$marks}}</h1>


@if($marks>=80 && $marks<=100)
<h1>Grade: A+</h1>

@elseif($marks>=70 && $marks<=79)
<h1>Grade: A</h1>

@elseif($marks>=60 && $marks<=69)
 <h1>Grade: A-</h1>

 @else
 <h1>Grade: F</h1>
 @endif

 <img src="{{asset('https://captainbinary.com/images/hero-img.svg')}}">