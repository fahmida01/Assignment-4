<p><strong> Id :</strong> <?php echo e($contact->id); ?></p>
<p><strong> Name:</strong> <?php echo e($contact->name); ?></p>
<p><strong> Email:</strong> <?php echo e($contact->email); ?></p>
<p><strong> Phone:</strong> <?php echo e($contact->phone); ?></p>
<p><strong> Address:</strong> <?php echo e($contact->address); ?></p>
<a href="<?php echo e(url('/contacts/' . $contact->id . '/edit')); ?>">Edit</a>
<form action="<?php echo e(url('/contacts/' . $contact->id)); ?>" method="POST" style="display:inline;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit">Delete</button>
</form>
<a href="<?php echo e(url('/contacts')); ?>">Back to Contacts</a>
<?php /**PATH C:\Users\Ghajini\contact_management\resources\views/contacts/show.blade.php ENDPATH**/ ?>