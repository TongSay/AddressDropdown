<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 8 Dynamic Dependent Dropdown using Jquery Ajax - XpertPhp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Laravel 8 Dynamic Dependent Dropdown using Jquery Ajax</h2>
  <div class="form-group">
    <label for="no">No:</label>
    <input name="no" id="no" type="text" class="form-control"/>
</div>
<div class="form-group">
    <label for="st">St:</label>
    <input name="st" id="st" type="address" class="form-control"/>
</div>





    <div class="form-group">
      <label for="country">City:</label>
	  <select id="country" name="pob" class="form-control">
        <option value="" selected disabled>Select City</option>
         @foreach ( $countries as $key=>$country){
         <option value="{{$key}}"> 
          
            {{-- {{ $country[0]->vallage }} --}}
            {{ $country[0]->province }}
             
          
          </option> }
          @endforeach
         
         </select>
    </div>
    
    <div class="form-group">
      <label for="state">District:</label>
      <select name="state" id="state" class="form-control"></select>
    </div>
	<div class="form-group">
      <label for="city">Commune:</label>
      <select name="city" id="city" class="form-control"></select>
    </div>
</div>
<script type=text/javascript>
  $('#country').change(function(){
  var countryID = $(this).val();  
  if(countryID){
    $.ajax({
      type:"GET",
      url:"{{url('getState')}}?country_id="+countryID,
      success:function(res){        
      if(res){
        $("#state").empty();
        $("#state").append('<option>Select State</option>');

        $.each(res,function(key,states){
          $("#state").append('<option value="'+key[0]+'">'+states[0]+'</option>');
        });
      
      }else{
        $("#state").empty();
      }
      }
    });
  }else{
    $("#state").empty();
    $("#city").empty();
  }   
  });
  $('#state').on('change',function(){
  var stateID = $(this).val();  
  if(stateID){
    $.ajax({
      type:"GET",
      url:"{{url('getCity')}}?state_id="+stateID,
      success:function(res){        
      if(res){
        $("#city").empty();
		$("#city").append('<option>Select City</option>');
        $.each(res,function(key,value){
          $("#city").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#city").empty();
      }
      }
    });
  }else{
    $("#city").empty();
  }
    
  });
</script>
</body>
</html>