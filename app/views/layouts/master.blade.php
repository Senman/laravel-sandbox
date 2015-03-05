

<!DOCTYPE html>

<html lang="cz">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Moje první pokusy">

<meta name="author" content="Petr">



<title>Moje první pokusy s Laravelem</title>






</head>



<body>




@if(Session::has('message'))


<div class="container">

<div class="alert alert-success alert-dismissable">

<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

<strong>Info!</strong> {{ Session::get('message') }}

</div>

</div>



@endif


@if(Session::has('error'))

<div class="container">


<div class="alert alert-danger alert-dismissable">

<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

<strong>Chyba</strong> {{ Session::get('message') }}

</div>


</div>


@endif




@yield('content')




<div class="container">


<div class="pull-right">


<footer>

<p></p>

</footer>

</div>


</div>



</body>

</html>

