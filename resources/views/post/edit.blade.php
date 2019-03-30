<form action="{{ route('posts.update',$post) }}" method="post" enctype="multpart/form-data">
{{csrf_field() }}

Title:
<input type="text" name="title" value="{{$post->title}}">
<br>
Content:
<textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
<br>
Image:
<img width="60" src="{{ asset('storage/'.$post->imagess) }}" alt="">
<input type="file" name="imagess">
<button type="submit">Save</button>
<button type="submit" formaction="{{route('posts.delete',$post) }}">Delete</button>
</form>