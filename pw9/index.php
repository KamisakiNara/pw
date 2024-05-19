<!DOCTYPE html>
<html>
<head>
    <title>Membuat Upload File Dengan PHP Dan MySQL | www.malasngoding.com</title>
    <script>
        function previewImage() {
            const file = document.querySelector('input[type=file]').files[0];
            const preview = document.getElementById('preview');
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</head>
<body>
    <h1>Membuat Upload File Dengan PHP Dan MySQL <br/> www.malasngoding.com</h1>
    <form action="aksi.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" onchange="previewImage()">
        <input type="submit" name="upload" value="Upload">
        <input type="reset" name="Reset" value="Reset">
    </form>
    <br/>
    <img id="preview" src="" alt="Image preview" style="max-width: 300px;"/>
</body>
</html>
