<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
            <h1>Palindrome check</h1>
            <hr>
            <form action="/palindromeCheck" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="title">Palindrome String</label>
                    <input type="text" class="form-control" id="Name"  name="name">
                </div>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\test\api-project\resources\views/create.blade.php ENDPATH**/ ?>