<form method="post" action="{{action('PostController@updateComments')."/?comment_id=$request->comment_id&post_id=$request->post_id"}}">
	<table>
		<tr>
			<td>Body : </td>
			<td><input type="text" name="body"></td>
		</tr>
		
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
			<td><input type="reset" name="reset" value="Reset"></td>

		</tr>
	</table>
	{{ csrf_field() }}
</form>