<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<title>Image-Uploader</title>
<body>
    <div class="main-parent">
        <div class="main-container">
            <form action="" method="post">
                <h1 class="title">Add </h1>
                <div class="img">

                    <div class="img-plcehlder" onclick="addImage()">
                        <h3>Upload Image</h3>
                    </div>
                    <div class="img-add">
                    <img src="" onclick="addImage()" id="profileDisplay">
                    </div>

                </div>
                <div class="addImg">
                    <input type="image" name="addImage" class="img-upload" style="display: none;">
                    <label>Image</label>
                </div>
                <div class="img-caption">
                    <label>Add Caption</label>
                    <textarea name="caption"></textarea>
                </div>
                <div class="img-svBtn">
                    <button type="submit" name="save" >Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
