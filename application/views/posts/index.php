<h2>Posts List    
    <p class="pull-right"><a href="<?php echo base_url("posts/add"); ?>" class="btn btn-primary btn-sm">Add Post</a></p>
</h2>
<table class="table table-bordered table-striped" id="postTable">
    <thead>
        <tr>
            <td>ID</td>
            <td>Author</td>
            <td>Title</td>
            <td style="width: 175px">Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        if (!empty($posts)):
            foreach ($posts as $post) :
                ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $post['name']; ?></td>
                    <td><?php echo $post['title']; ?></td>
                    <td>
                        <a href="<?php echo base_url("posts/view/" . $post['post_id']); ?>" class="btn btn-default btn-xs">View</a>
                        <a href="<?php echo base_url("posts/edit/" . $post['post_id']); ?>" class="btn btn-default btn-xs">Edit</a>                    
                        <a href="<?php echo base_url("posts/delete/" . $post['post_id']); ?>"
                           onclick="return confirm('Are you sure you want to delete this item? <?php echo $post['title'] ?>');" 
                           class="btn btn-default btn-xs">Delete</a>
                    </td>
                </tr>
                <?php
            endforeach;
        endif;
        ?>
    </tbody>
</table>
