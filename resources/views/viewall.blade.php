








@extends("theme")

@section("content")


<div class="container">

<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">  </div>
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"> 
    
    
    <table class="table table-borderless">
    
    <tr>
        <th> Faculty Name </th>
        <th>Contact Number </th>
        
    </tr>


@foreach ($faculties as $faculty)




<tr>
    <td>{{ $faculty->fname}}  </td>
       <td>  {{ $faculty->mob}}  </td>


       <td>   <a class="btn btn-danger" href="/faculty/{{ $faculty->id }}/delete">   DELETE </a> </td>

       <td>   <a class="btn btn-warning" href="/faculty/{{ $faculty->id }}/edit">   EDIT </a> </td>

</tr>

@endforeach



    
    </table>
    
     </div>
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">  </div>
</div>
</div>


@endsection