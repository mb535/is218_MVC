<?php include '../view/header.php'; ?>
<main>
    <h1>Add Category</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_category">


        <br>


        <label>Name:</label>
        <input type="text" name="name" />
        <br>
        <label>&nbsp;</label>
        <input type="submit" value="Add Category" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_categories">View Category List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>