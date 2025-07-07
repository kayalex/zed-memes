<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zed-memes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
        header, footer { background: #222; color: #fff; padding: 1em; text-align: center; }
        main { max-width: 900px; margin: 2em auto; background: #fff; padding: 2em; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        nav { margin-bottom: 2em; }
        nav a { margin: 0 1em; color: #fff; text-decoration: none; font-weight: bold; }
        .wireframe-box { border: 2px dashed #bbb; padding: 1.5em; margin-bottom: 1.5em; text-align: center; color: #888; background: #fafafa; }
        .meme-display img { max-width: 100%; height: auto; border-radius: 8px; }
        .reactions button { margin: 0 0.5em; }
    </style>
</head>
<body>
    <header>
        <h1>Zed-memes</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Upload Meme</a>
            <a href="#">Gallery</a>
            <a href="#">About</a>
        </nav>
    </header>
    <main>
        <section class="wireframe-box">
            <h2>Upload a Meme</h2>
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="meme-title">Title:</label><br>
                <input type="text" id="meme-title" name="meme-title" required><br><br>
                <label for="meme-image">Select Meme Image:</label><br>
                <input type="file" id="meme-image" name="meme-image" accept="image/*" required><br><br>
                <button type="submit">Upload Meme</button>
            </form>
        </section>
        <section class="wireframe-box">
            <h2>Latest Meme</h2>
            <div class="meme-display">
                <h3>Meme Title Example</h3>
                <img src="https://via.placeholder.com/400x300?text=Meme+Image" alt="Meme Example">
                <div class="reactions" style="margin-top:1em;">
                    <button type="button">😂 Laugh</button>
                    <button type="button">👍 Like</button>
                    <button type="button">😮 Wow</button>
                    <button type="button">👎 Dislike</button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        &copy; 2025 Zed-memes. All rights reserved.
    </footer>
</body>
</html>