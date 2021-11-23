<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Form </title>
</head>
<body>
    
    <h2>Create New Post </h2>
    <form action=" <?php echo route("post.store")?> "method="POST" >
        @csrf
        <input type= "text" name="title"/><br>
        <textarea name= "content" id="" cols="30" rows="10" > </textarea><br>
            <input type="submit" value="Add New Post">
        </form>


</body>
</html>