<form method="GET" action="<?php echo e(url('/contacts')); ?>">
    <input type="text" name="search" placeholder="Search by name or email" value="<?php echo e(request('search')); ?>">
    <button type="submit">Search</button>
</form>

<a href="<?php echo e(url('/contacts/create')); ?>">Add New Contact</a>

<table>
    <thead>
    </thead>
        <tr>
            <th><a href="<?php echo e(url('/contacts?sort=id')); ?>">Id  </a></th>
            <th><a href="<?php echo e(url('/contacts?sort=name')); ?>">Name     </a></th>
            <th><a href="<?php echo e(url('/contacts?sort=created_at')); ?>">Created At     </a></th>
            <th><a href="<?php echo e(url('/contacts?sort=updated_at')); ?>">Updated At    </a></th>
            <th>Email     </th>
            <th>Phone    </th>
            <th>Address   </th>
    
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($contact->id); ?></td>
                <td><?php echo e($contact->name); ?></td>
                <td><?php echo e($contact->created_at); ?></td>
                <td><?php echo e($contact->updated_at); ?></td>
                <td><?php echo e($contact->email); ?></td>
                <td><?php echo e($contact->phone); ?></td>
                <td><?php echo e($contact->address); ?></td>
                <td>
                    <a href="<?php echo e(url('/contacts/' . $contact->id)); ?>">View</a>
                    <a href="<?php echo e(url('/contacts/' . $contact->id . '/edit')); ?>">Edit</a>
                    <form action="<?php echo e(url('/contacts/' . $contact->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH D:\cou\laravel\contact_management\resources\views/contacts/index.blade.php ENDPATH**/ ?>