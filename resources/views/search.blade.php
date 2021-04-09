



@extends("theme")

@section("content")
<div class="container">
<div class="row">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
    </div>
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

   <form action="" method="post">
   {{ csrf_field() }}
   
   <table class="table-borderless">
    <tr>
        <td> Phone Number </td>
        <td> <input name="mob" type="text" class="form-control"> </td>
    </tr>

    <tr>
        <td></td>
        <td><button class="btn btn-success">SEARCH</button></td>
    </tr>
    </table>
   </form>
    </div>

    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
    </div>
</div>
</div>


@endsection