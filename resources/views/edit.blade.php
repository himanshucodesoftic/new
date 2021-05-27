@extends('layout')
@section('content')

<h1 style="text-align: center;">Form</h1>

    <div class="container" >
        
    <form action="submit/{{$books->id}}" method="post" enctype="mutlipart/form-data">
        @csrf
<div class="row mt-5">
       
  
    <div class="col-md-6">
<label>first Name</label>
<input type="text" name="fname" class="form-control" value="{{$books->fname}}">
</div>
<div class="col-md-6">

    <label>Last Name</label>
    <input type="text" name="lname" class="form-control"  value="{{$books->lname}}">
    

</div>

</div>

<div class="row">
    <div class="col-md-6">
        
    <label>Email</label>
    <input type="text" name="email" class="form-control" value="{{$books->email}}">
    
</div>
{{-- <div class="row"> --}}
    <div class="col-md-6">
        
    <label>Gender</label>
    <br>
    <input type="radio"   id="male" name="gender" {{ $books->gender == '0' ? 'checked' : ''}}  value="0">
    <label for="male">Male</label><br>
    <input type="radio"  id="female"  {{$books->gender == '1' ? 'checked' : ''}}     name="gender" value="1">
    <label for="female">Female</label><br>
    


    {{-- <input type="text" name="gender" class="form-control"> --}}
    
{{-- </div> --}}
</div>
</div>

<div class="row">
    <div class="col-md-6">
        
        <label>Phone No</label>
        <input type="text"  value="{{$books->phone}}"name="phone" class="form-control">
        
    {{-- </div> --}}
    </div>
    <div class="col-md-6">
        
        <label>Address</label>
        <input type="text" name="Address"  value="{{$books->Address}}" class="form-control">
        
    {{-- </div> --}}
    </div>

</div>
    
<div class="col-md-6">
    <label>City</label>
        <input type="text" name="city"  value="{{$books->city}}" class="form-control">
    


</div>

<div class="col-md-6">

    <label for="country">Country</label><span style="color: red !important; display: inline; float: none;">*</span>      
        
    <select id="country"  name="country" class="form-control">
        <option {{ $books->country == 'Afghanistan' ? 'selected' : ''}} value="Afghanistan">Afghanistan</option>
        <option  {{ $books->country == 'Åland Islands' ? 'selected' : ''}}  value="Åland Islands">Åland Islands</option>
        <option   {{ ( $books->country  == "Albania") ? 'selected' : '' }}   value="Albania">Albania</option>
        <option   {{ ( $books->country  == "Algeria") ? 'selected' : '' }} value="Algeria">Algeria</option>
        <option  {{ ( $books->country  == "American Samoa") ? 'selected' : '' }}  value="American Samoa">American Samoa</option>
        <option  {{ ( $books->country  == "Andorra") ? 'selected' : '' }}  value="Andorra">Andorra</option>
        <option {{ ( $books->country  == "Angola") ? 'selected' : '' }}  value="Angola">Angola</option>
        <option {{ ( $books->country  == "Anguilla") ? 'selected' : '' }}  value="Anguilla">Anguilla</option>
        <option  {{ ( $books->country  == "Antarctica") ? 'selected' : '' }} value="Antarctica">Antarctica</option>
        <option  {{ ( $books->country  == "Antigua and Barbuda") ? 'selected' : '' }} value="Antigua and Barbuda">Antigua and Barbuda</option>
        <option  {{ ( $books->country  == "Argentina") ? 'selected' : '' }} value="Argentina">Argentina</option>
        <option  {{ ( $books->country  == "Armenia") ? 'selected' : '' }} value="Armenia">Armenia</option>
        <option  {{ ( $books->country  == "Aruba") ? 'selected' : '' }} value="Aruba">Aruba</option>
        <option  {{ ( $books->country  == "Australia") ? 'selected' : '' }} value="Australia">Australia</option>
        <option  {{ ( $books->country  == "Austria") ? 'selected' : '' }} value="Austria">Austria</option>
        <option {{ ( $books->country  == "Azerbaijan") ? 'selected' : '' }}  value="Azerbaijan">Azerbaijan</option>
        <option {{ ( $books->country  == "Bahamas") ? 'selected' : '' }}  value="Bahamas">Bahamas</option>
        <option  {{ ( $books->country  == "Bahrain") ? 'selected' : '' }} value="Bahrain">Bahrain</option>
      <option {{ ( $books->country  == "Chad") ? 'selected' : '' }}  value="Chad">Chad</option>
        <option  {{ ( $books->country  == "Chile") ? 'selected' : '' }} value="Chile">Chile</option>
         </select>



</div>


<div class="col-md-12">


    <input type="file"
    name="image"
    accept="image/png, image/jpeg" value="{{$books->country}}">
    <img src="asset('{{$books->image}}')}}" width="60" height="60">
</div>

<div class="container">

<div class="row ">
    <div class="col-md-12 justify-content-center">
    <button type="btn" class="btn-primary"  value="submit">Submit</button>

</div>
</div>
</div>

    </form>
    </div>  

@endsection