@extends('layout')
@section('content')









@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<h1 style="text-align: center;">Users</h1>
<div class="container">
<div class="col-md-12 ">

<select name="limit" id="sortbylimit"  >filter by
<option  value="edit"  name="limit"  href="admin">Admin</a></option>
<option name="1">User</option>
</select>
</div>

</div>
<div class="container">
<div class="row">
<div class="col-md-12 mt-5">
    <table style="width:100%"     
 >

        <tr>
            <th>Firstname</th> 
       
          <th>Lastname</th> 
          <th>Email</th>
          <th>Gender</th>
          <th>Image</th>
        </tr>
        @foreach($books as $user)
    
        <tr>
          <td>{{$user->fname}}</td>
          <td>{{$user->lname}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->gender}}</td>
          <td>{{$user->image}}</td>
          <td>
            <a class="btn btn-primary" href='{{$user->id}}' >Edit</a>
        </td>
    <td>
        <a class="btn btn-danger" href = 'delete/{{ $user->id }}'>
           delete</a> </td>
            </tr>
        
       
    
         @endforeach
      </table>
    

</div>

</div>

</div>

@endsection
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>   