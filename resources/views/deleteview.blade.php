


@extends("theme")

@section("content")


<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">


<form action="/facultydelete/{{$faculties->id}}" method="post">

{{ csrf_field() }}

@method("DELETE")

<table class="table">

 <tr>
     <td> Name </td>
     <td>
      <input readonly name="fname" type="text" value= " {{ $faculties->fname}}" class="form-control">
     </td>
 </tr>
 <tr>
     <td>Designation</td>
     <td>       <input readonly value= " {{ $faculties->desc}}" name="fdes" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Contact number</td>
     <td>      <input readonly value= " {{ $faculties->mob}}" name="fcontact" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>College </td>
     <td>      <input readonly value= " {{ $faculties->college}}" name="fcollege" type="text" class="form-control">
</td>
 </tr>


 <tr>
     <td></td>
     <td> <button onclick="return confirm('Are You sure want to delete ?' )" class="btn btn-success"> DELETE </button></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>


@endsection