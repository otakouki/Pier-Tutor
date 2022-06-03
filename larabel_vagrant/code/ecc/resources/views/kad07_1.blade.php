<div class="container">
@foreach($data as $cont) <div class="media my-4">
<img class="mr-3" alt="" src=""> <div class="media-body">
<div class="row">
<h5 class="text-primary col-sm-8">{{$cont->title}}</h5>
<div class="col-sm-4 text-secondary">{{$cont->created_at}}</div>
</div> {{$cont->contents}}
</div> </div>
<hr> @endforeach
</div>