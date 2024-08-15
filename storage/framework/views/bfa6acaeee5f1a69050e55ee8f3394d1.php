<form method="POST" action="<?php echo e(url('/contacts/' . $contact->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <input type="text" name="name" placeholder="Name" value="<?php echo e($contact->name); ?>" required>
    <input type="email" name="email" placeholder="Email" value="<?php echo e($contact->email); ?>" required>
    <input type="text" name="phone" placeholder="Phone" value="<?php echo e($contact->phone); ?>"required>
    <input type="text" name="address" placeholder="Address" value="<?php echo e($contact->address); ?>"required>
    <button type="submit">Update</button>
</form>
<a href="<?php echo e(url('/contacts')); ?>">Back to Contacts</a>
<?php /**PATH C:\Users\Ghajini\contact_management\resources\views/contacts/edit.blade.php ENDPATH**/ ?>