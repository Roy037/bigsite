<?php
    include 'partials/header.php';
?>

    <section class="form_section">
        <div class="container form_section-container">
            <h2>Add Post</h2>
            <div class="alert_message error">
                <p>This is an error message</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <select>
                    <option value="1">travel</option>
                    <option value="1">art</option>
                    <option value="1">Since</option>
                    <option value="1">travel</option>
                    <option value="1">travel</option>

                </select>
                <textarea rows="10" placeholder="Body"></textarea>
                <div class="form_control">
                    <input type="checkbox" id="is_featured"checked>
                    <label for="is_featured" >Featured</label>
                </div>
                <div class="form_control">
                    <label for="thumbnail"> Add Thumbnail</label>
                    <input type="file" id="thumbnail">
                </div>
                <button type="submit" class="btn">Add Post</button>

            </form>
        </div>
    </section>

<?php
    include '../partials/footer.php';
?>