@extends('layout')
@section('content')

<h1 style="text-align: center;">Form</h1>


@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif


    <div class="container">
        
    <form action="{{url('/form')}}" method="post" enctype="mutlipart/form-data">
        @csrf
<div class="row mt-5">
    <div class="col-md-6">
<label>first Name</label>
<input type="text" name="fname" class="form-control">
</div>
<div class="col-md-6">

    <label>Last Name</label>
    <input type="text" name="lname" class="form-control">
    

</div>

</div>

<div class="row">
    <div class="col-md-6">
        
    <label>Email</label>
    <input type="text" name="email" class="form-control">
    
</div>
{{-- <div class="row"> --}}
    <div class="col-md-6">
        
    <label>Gender</label>
    <br>
    <input type="radio" id="male" name="gender" value="0">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="1">
    <label for="female">Female</label><br>
 


    {{-- <input type="text" name="gender" class="form-control"> --}}
    
{{-- </div> --}}
</div>
</div>

<div class="row">
    <div class="col-md-6">
        
        <label>Phone No</label>
        <input type="text" name="phone" class="form-control">
        
    {{-- </div> --}}
    </div>
    <div class="col-md-6">
        
        <label>Address</label>
        <input type="text" name="Address" class="form-control">
        
    {{-- </div> --}}
    </div>

</div>
    <div class="row">
<div class="col-md-6">
    <label>City</label>
        <input type="text" name="city" class="form-control">
    


</div>

<div class="col-md-6">

    <label for="country">Country</label><span style="color: red !important; display: inline; float: none;">*</span>      
        
    <select id="country"  name="country" class="form-control">
        <option value="Afghanistan">Afghanistan</option>
        <option value="Åland Islands">Åland Islands</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrain">Bahrain</option>
         <option value="Chad">Chad</option>
        <option value="Chile">Chile</option>
      </select>



</div>

</div>
<br>
<div class="col-md-12">


    <input type="file"
    name="image"
    accept="image/png, image/jpeg">
</div>

<Br>
<div class="container">

<div class="row ">
    <div class="col-md-12 justify-content-center">
    <button type="btn" class="btn-primary" name="submit" value="submit">Submit</button>

</div>
</div>
</div>

    </form>
    </div>  

@endsection