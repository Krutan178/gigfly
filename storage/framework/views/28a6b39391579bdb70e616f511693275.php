<form action="<?php echo e(url('upload'), false); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>
<?php /**PATH /home/gigfly.in/public_html/resources/views/amazon.blade.php ENDPATH**/ ?>