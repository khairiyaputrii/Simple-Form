{{-- 
Contains a minimum of 5 input fields.
Can upload and display image files after submission.
Uploaded files must have extensions .png/.jpg/.jpeg and a maximum size of 2 MB.
Include validation.
Have one field that can input a double value between 2.50 to 99.99.
Provide a success flash message if the form is successfully submitted according to the requirements. --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Art Submission Form</title>
</head>
<body>
    <div class="container">
        <h1>ART SUBMISSION</h1>
    </div>
    <form action="/submit" method="POST">
        @csrf
        <div class="form-container">
            <label for="Name">Artist Name:</label>
            <input type="text" id="artist" name="artist" placeholder="Artist Name"><br>

            <label for="Title">Art Title:</label>
            <input type="text" id="title" name="title" placeholder="Art Title"><br>

            <label for="Email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email"><br>

            <label for="Size">Size of Art:</label>
            <input type="number" id="size" step="0.01" name="size" placeholder="Size of Art in cm"><br>

            <label for="Art">Art:</label>
        </div>
        <div class="pic-container">
            <input type="file" accept=".png, .jpg, .jpeg" id="art" name="art" placeholder="Art Picture"> <br>
            
            <script>
                const art = document.getElementById('art');
                art.addEventListener('change', (event) => {
                const file = art.files[0];
                const maxSize = 2 * 1024 * 1024; // 2 MB

                if (file.size > maxSize) {
                    alert('The selected file exceeds the maximum size of 2 MB.');
                    art.value = ''; // Reset the input value
                }
                });
            </script>
        </div>
        <div class="submit-container">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>