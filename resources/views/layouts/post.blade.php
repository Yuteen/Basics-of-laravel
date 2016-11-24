<div class="title">POST DATA</div>
<div style="color: red;">
<ul>
@foreach ($result as $data)
	<!-- <li>{{$data -> title}}</li> -->
	<li>
		<label> Title: </label>
	 	<a href="{{ action('PostController@select')."/?post_id=$data->id"}}">
	 	{{ $data->title}}</a>
 	</li>
@endforeach
</ul>
</div>
<form method="post" action="{{action('PostController@insert')}}">
	<table>
		<tr>
			<td>Title : </td>
			<td><input type="text" name="title"></td>
		</tr>

		<tr>
			<td>Description : </td>
			<td><input type="text" name="description"></td>
		</tr>
		
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
			<td><input type="reset" name="reset" value="Reset"></td>

		</tr>
	</table>
	{{ csrf_field() }}
</form>

