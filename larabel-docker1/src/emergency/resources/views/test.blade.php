<div class="container">
@foreach($user as $cont) <div class="media my-4">
<img class="mr-3" alt="" src=""> <div class="media-body">
<div class="row">
<h5 class="text-primary col-sm-8">{{$cont->user_name}}</h5>
</div> </div>
<hr> @endforeach
</div>