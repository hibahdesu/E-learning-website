<div id="bodyright">
    <?php
        if(isset($_GET['edit_cat'])) {
            echo edit_cat();

        } else {
            ?>
    <h3>View All FAQs</h3>
    <div id="add">
        <details>
            <summary>Add FAQs</summary>
        
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="qsn" placeholder="Enter FAQs here">
            <textarea class="textarea" name="ans" id="" cols="30" rows="10"></textarea>
            <button name="add_faqs">Add FAQs</button>
        </form>
        </details>
        <?php echo view_faqs();?>
    </div>
</div>

<?php echo add_faqs();  } ?>