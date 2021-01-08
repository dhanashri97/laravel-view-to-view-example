<h2>Users Page </h2>
@include('inner')

@csrf


@foreach ($users as $user)
<h2>{{$user}}</h2>
@endforeach

{{-- php to js --}}
<script>
    var data=@json($users);
    console.log(data)
</script>