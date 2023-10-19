


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="header">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nowy mem</div>

                    <div class="card-body">
                        <?php if($message = Session::get('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e($message); ?>

                            </div>
                        <?php endif; ?>

                        <?php if($message = Session::get('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e($message); ?>

                            </div>
                        <?php endif; ?>

                        <form action="<?php echo e(route('upload.meme')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                        
                            <div class="form-group">
                                <label for="title">Tytuł</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                        
                            <div class="form-group">
                                <label for="authorName">Autor</label>
                                <input type="text" class="form-control" id="authorName" name="authorName" required>
                            </div>                            
                        
                            <div class="form-image-container">
                                <input type="file" class="form-control-file" id="image" name="image" required>
                            </div>
                        
                            <button type="submit" class="sendMeme-btn">Wyślij</button>
                        </form>
                        

                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(!session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<style>

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    height: 30rem;
    width: 100vw;

    color: #ffffff;
}

.header {
    display: flex;
    align-items: center;
    background-color: #181818;
}

.card-header {
    display: flex;
    justify-content: center;
}

.card-body * {
    /* border: 1px solid red; */
}

.card-header {
    margin: 5px;
    font-size: 2em;

}

.card-body {
    display: flex;
    justify-content: center;
    align-items: center;

    margin: 5px;
    height: 15rem;
}

.form-group {
    margin: 15px;
}

.form-group label {
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-image-container {
    display: flex;
    align-items: center;

    margin: 5px;
    height: 60px;
    border: 1px solid white;
}

input {
    width: 100%;
}

.sendMeme-btn {
    margin: 20px;
}

</style>
<?php echo $__env->make('mainMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mem-serv\resources\views/memeUpload.blade.php ENDPATH**/ ?>