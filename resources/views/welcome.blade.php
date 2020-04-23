@extends('layouts.main')
@section('content')
<div class="container">

    <h1>HOME PAGE</h1>

    @if(session('successMsg'))
    <div class="alert alert-primary" role="alert">
        {{session('successMsg')}}
    </div>
    @endif

    <table class="table table-hover">
        <thead class="brown white-text">
            <tr>
                <th scope="col">id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td>
                    <a href="{{route('edit', $student->id)}}"><span class="badge badge-primary">EDIT</span></a>
                    ||
                    <a onclick="deleteData({{($student->id)}})"><span class="badge badge-danger">DELETE</span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$students->links()}}
</div>

<script>
    function deleteData(id) {
        let url = "{{url('delete')}}/" + id
        alert(url);
        fetch(url, {
                method: 'DELETE',
                headers: {
                    // 'token': "{{ csrf_token() }}",
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
            })
            .then(res => {
                return res.json()
            })
            .then(data => {
                console.log(data)
                if (data === true) {
                    location.reload()
                }
            })
    }
</script>

@endsection