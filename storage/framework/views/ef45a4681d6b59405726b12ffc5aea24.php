


<?php $__env->startSection('content'); ?>
    <div>
        <div class="sort-bar">Najnowsze memy:</div>
        <div class="memeContent">

            
        <?php $__currentLoopData = $memes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="meme-card">
                <div class="meme-description">
                        <div class="description-bar">
                        <div class="title"><?php echo e($meme->title); ?></div>
                        <div class="author"><?php echo e($meme->authorName); ?></div>
                        <div class="upload-time"><?php echo e($meme->upload_at); ?></div>
                    </div>
                </div>
                <div class="meme-content">
                    <img src="storage/memes/<?php echo e($meme->image_path); ?>" />
                </div>
                <div class="meme-likes"> <?php echo e($meme->likes_number); ?></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div> 
    </div>
<?php $__env->stopSection(); ?>

<style>
.sort-bar {
        display: flex;
        justify-content: center;
        align-items: center;

        font-family: 'Roboto', sans-serif;
        font-weight: 600;
        color: white;

        margin-top: 10px;
        height: 2.34rem;

        background-color: rgb(75, 54, 54);
    }

.memeContent {
        flex-direction: column;
        align-items: center;
    }

.memeContent,
.meme-description {
        display: flex;
        justify-content: center;

        color: #5eff00;
    }

.meme-card {
    margin: 10px 0;
    padding: 20px 10px;
    width: 600px;

    background-color: rgb(27, 24, 24);
    border: 1px solid grey;
    }

.title, .author {
    padding-left: 2%;
}
.author {
    padding-left: 5%;
}

.meme-description {
        display: flex;
        flex-direction: column;
    }

.description-bar {
    background-color: rgb(47, 80, 80);
    }

.title {
    font-size: 1.7rem;
    color: #c5d8ba;
    }

.author {
    color: #69c533;
    }

.meme-content img {
    margin-left: auto;
    }

.meme-likes::before {
    content: '+ ';
}

.meme-likes {
    display: inline-flex;
    justify-content: center;

    margin: 5px 0;
    padding: 15px 5px;
    width: 40px;

    color: white;

    background-color: red;
    }

</style>
<?php echo $__env->make('mainMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mem-serv\resources\views/memeList.blade.php ENDPATH**/ ?>