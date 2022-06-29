<?php $__env->startSection('content'); ?>

   

    <div class="panel-body">
        
       
        <form action="<?php echo e(url('todolist-create')); ?>" method="POST" class="form-horizontal">
            <?php echo csrf_field(); ?>


            
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">ToDo List</label>

                <div class="col-sm-6">
                    <input type="text" name="todolist" id="task-name" class="form-control">
                </div>
            </div>

            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Todo List
                    </button>
                </div>
            </div>
        </form>
    </div>

    
    <?php if(count($dataAll) > 0): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Date</th>
                        <th>ToDo List</th>
                        <th> Delete</th>
                        <th> To-Completed</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        <?php $__currentLoopData = $dataAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                
                                <td class="table-text">
                                    <div><?php echo e(date('d-m-Y', strtotime($task->created_at))); ?></div>
                                </td>
                                <td class="table-text">
                                    <div><?php echo e($task->todolist); ?></div>
                                </td>

                                <!-- Delete Button -->
                                <td>
                                    <form action="<?php echo e(url('todolist-delete/'.$task->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>

                                        <?php echo method_field('DELETE'); ?>


                                        <button>Delete Todo</button>
                                    </form>
                                </td>
                                <td>
                                	<?php if($task->is_completed ==1): ?>
                                	<button>Marked As Completed</button>
                                	<?php else: ?>
                                    <form action="<?php echo e(url('todolist-completed/'.$task->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>

                                        <button>For Complete Click Here</button>
                                    </form>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('todolist.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/todolistlaravel/todolist/resources/views/todolist/todolist.blade.php ENDPATH**/ ?>