
<div>
@foreach ($messages as $m)
    <p style="background-color: lightgrey;">{{$m -> text}}</p>
    <br>
@endforeach
</div>