<div class="title">POST DATA</div>
<div>
<ul>
@foreach ($result as $data)
	<!-- <li>{{$data -> title}}</li> -->
	<li style="color: green;">
	 	<label> Tag: </label>{{ $data->name}}
 	</li>
@endforeach
</ul>
</div>
