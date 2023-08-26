@php
$userName = "Abdul Rehman";
@endphp

<script>
    // old method **************
    // const data = @json($userName);
    // console.log(data);

//  *************   new method 
const data = {{Js::from($userName)}}
console.log(data)
</script>




@foreach ($users as $id => $value )
<h3>{{$id}} -> {{$value["name"]}} -> {{$value["Role"]}} -> {{$value["City"]}} = <a
        href="{{route('singleUser', $id)}}">Read More</a></h3>
@endforeach