<div id="bodyright">
    <?php
        if(isset($_GET['edit_term'])) {
            echo edit_term();

        } else {
            ?>
    <h3>View All T&C</h3>
    <div id="add" >
        <details style="width:70%">
            <summary>Add New T&C</summary>
        
        <form method="post" enctype="multipart/form-data">
            <select name="for_whome" required>
                <option value="">Select Term For</option>
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
            </select>
            <input type="text" name="term" placeholder="Enter Term Name here">
            <button name="add_term">Add T&C</button>
        </form>
        </details>
        <table cellspacing='0' style="width: 70%">
            <tr>
                <th>Sr No.</th>
                <th style='width: 50%'>Terms</th>
                <th>For Whome</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php echo view_term() ?>
        </table>
    </div>
</div>

<?php echo add_term();  } ?>