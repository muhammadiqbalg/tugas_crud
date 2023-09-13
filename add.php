<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan Buku</title>
    <link rel="stylesheet" href="add.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <header>
        <h1>Book Data</h1>
        <nav>
            <a href="index.php">Kembali</a>
        </nav>
    </header>

    <main>
        <form action="add.php" method="POST" name="addBook">
            <table>
                <tr>
                    <td>Judul Buku</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Penulis Buku</td>
                    <td><input type="text" name="author"></td>
                </tr>
                <tr>
                    <td>Penerbit Buku</td>
                    <td><input type="text" name="publisher"></td>
                </tr>
                <tr>
                    <td>Tahun Terbit</td>
                    <td><input type="year" name="year"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="add">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        
            if(isset($_POST['submit'])) {
                $title = $_POST['title'];
                $author = $_POST['author'];
                $publisher = $_POST['publisher'];
                $year = $_POST['year'];
            }

            include_once("connection.php");

            $result = mysqli_query($mysqli,
            "INSERT INTO book (title,author,publisher,years) VALUES ('$title','$author','$publisher','$year')");

            echo "Berhasil menambahkan Buku. <a href='index.php'>Lihat Buku</a> "

        ?>
    </main>

</body>
</html>