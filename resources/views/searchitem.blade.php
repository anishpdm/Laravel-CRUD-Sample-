<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">  </div>

<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">  



<form action="/searchprocess" method="post">
{{ csrf_field() }}

<table class="table">

<tr>
    <td> Name </td>
    <td> <input name="fname" type="text" class="form-control">
    </td>
</tr>
<tr>
    <td></td>
    <td> <button class="btn btn-success"> SEARCH </button></td>
</tr>
</table>


</form>





</div>


<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">  </div>

</div>
</div>
    
</body>
</html>