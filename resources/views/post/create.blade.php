<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
 {{@csrf_field()}}
    Title:
    <input type="text" name="title">
    Content:
    <textarea name="content" id="" cols="50" row="30"></textarea>
    Image:
    <input type="file" name="imagess">
    <button type="submit">Save</button>
</form>