<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
</head>
<body class="antialiased">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

    <ul>
        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('categories', ['language' => $language->code])); ?>"><?php echo $language->code; ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <form action="<?php echo e(route('categories.update', ['language' => $currentLang])); ?>" method="post">
        <?php echo csrf_field(); ?>

    <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
        <tr>
            <th scope="col"><?php echo __('ID'); ?></th>
            <th scope="col"><?php echo __('category.title'); ?></th>
            <th scope="col"><?php echo __('category.parent_title'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($category->id); ?></td>
                <td><input type="text" name="title[<?php echo e($category->id); ?>]" value="<?php echo e($category->title); ?>"></td>
                <td><?php echo e($category->parent_title); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

        <button type="submit"><?php echo __('common.save_button'); ?></button>
    </form>
</div>
</body>
</html>
<?php /**PATH /Users/zabudkodmytro/Documents/Work/TestJobs/category-list/resources/views/category.blade.php ENDPATH**/ ?>