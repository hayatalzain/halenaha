<?php echo $__env->make('master.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('page_css'); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\wamp64\www\newh\resources\views/master/master.blade.php ENDPATH**/ ?>