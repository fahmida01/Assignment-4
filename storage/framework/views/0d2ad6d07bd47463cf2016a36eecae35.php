<form method="POST" action="<?php echo e(url('/contacts')); ?>">
    <?php echo csrf_field(); ?>
    <input type="Number" name="id" placeholder="Id" required>
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone"required>
    <input type="text" name="address" placeholder="address"required>
<?php /**PATH C:\Users\Ghajini\contact_management\resources\views/contacts/create.blade.php ENDPATH**/ ?>