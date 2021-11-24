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

    <?php


if (Session::has('message')){
    echo "<p>".  Session()->get('message') ."</p>";
}
    ?>
    
    <form action=" <?php echo route("post.store")?> "method="POST" enctype="multipart/form-data"  >
        @csrf
        <input type= "text" name="email" value="<?php echo old ('email'); ?>" /><br><br>
        <?php if ($errors->has('email')): ?>
        <?php foreach ($errors->get('title') as $error): ?>
        <p><?php echo $error; ?></p>
        <?php endforeach; ?>
        <?php endif; ?>

        <input type= "text" name="email" value="<?php echo old ('email'); ?>" /><br><br>
        <?php if ($errors->has('email')): ?>
        <?php foreach ($errors->get('title') as $error): ?>
        <p><?php echo $error; ?></p>
        <?php endforeach; ?>
        <?php endif; ?>
        <textarea name= "content" id="" cols="30" rows="10" > <?php echo old ('content');?>  </textarea><br>
        <?php if ($errors->has('content')): ?>
        <?php foreach ($errors->get('content') as $error): ?>
        <p><?php echo $error; ?></p>
        <?php endforeach; ?>
        <?php endif; ?>
        <label> computer <input type="checkbox" name="check['computer']['id']" id="" value="computer"></label>
        <label> general <input type="checkbox" name="check['general']['id']" id="" value="general"></label>
        <label> science <input type="checkbox" name="check['science']['id']" id="" value="science"></label>
        <label> arts <input type="checkbox" name="check['arts']['id']" id="" value="arts"></label>
        <label> bussiness <input type="checkbox" name="check['bussiness']['id']" id="" value="bussiness"></label><br><br>
        <?php if ($errors->has('check')): ?>
        <?php foreach ($errors->get('check') as $error): ?>
        <p><?php echo $error; ?></p>
        <?php endforeach; ?>
        <?php endif; ?>
        <label for="" > select an image: <input type="file" name="photo" id=""></label><br><br>
        <?php if ($errors->has('photo')): ?>
        <?php foreach ($errors->get('photo') as $error): ?>
        <p><?php echo $error; ?></p>
        <?php endforeach; ?>
        <?php endif; ?>


            <label for="" >Accept TOS: <input type="checkbox" name="TOS" id="" value="1" > </label>
            <?php if ($errors->has('TOS')): ?>
        <?php foreach ($errors->get('TOS') as $error): ?>
        <p><?php echo $error; ?></p>
        <?php endforeach; ?>
        <?php endif; ?>
           

        <label for="" >Enter Website : <input type="url" name="website" id=""> </label>
        <?php if ($errors->has('dt')): ?>
    <?php foreach ($errors->get('dt') as $error): ?>
    <p><?php echo $error; ?></p>
    <?php endforeach; ?>
    <?php endif; ?><br><br>

   <label for="" >select Date : <input type="date" name="dt" id=""> </label>
        <?php if ($errors->has('TOS')): ?>
    <?php foreach ($errors->get('TOS') as $error): ?>
    <p><?php echo $error; ?></p>
    <?php endforeach; ?>
    <?php endif; ?><br><br>
            <input type="submit" value="Add New Post"><br>
            
        </form>


</body>
</html>