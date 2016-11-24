<div class="title">COMMENTS RELATED TO POSTS</div>
<div style="color: red;">
<ul>
@foreach ($result as $data)
	<!-- <li>{{$data -> title}}</li> -->
	
	<li>
		<label> Body : </label>
		{{ $data->body}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 	<a href="{{ action('PostController@selectTag')."/?comment_id=$data->id&post_id=$data->post_id"}}">
	 	Tag</a>
	 	&nbsp;&nbsp;
	 	<a href="{{ action('PostController@update')."/?comment_id=$data->id&post_id=$data->post_id"}}">
	 	Update</a>
 	</li>
@endforeach
</ul>
</div>
<form method="post" action="{{action('CommentController@insertComment')}}">
	<table>
		<tr>
			<td>Body : </td>
			<td><input type="text" name="body"></td>
		</tr>

		<tr>
			<td>Post ID : </td>
			<td><input type="text" name="post_id"></td>
		</tr>
		
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
			<td><input type="reset" name="reset" value="Reset"></td>
		</tr>
	</table>
	{{ csrf_field() }}
	<!-- <a href="{{action('PostController@update')."/?comment_id=$data->id&post_id=$data->post_id"}}">Update Comment</a> -->
</form>