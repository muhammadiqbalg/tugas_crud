<?php

    include_once("connection.php");

    if(isset($_POST['update'])){
        $id = $_POST['id'];

        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $year = $_POST['year'];

        $query = mysqli_query($mysqli,
        "UPDATE book SET title='$title', author='$author', publisher='$publisher', years='$year'");

        header('Location: index.php');
    }

    $id = $_GET['id'];

    $query = mysqli_query($mysqli, "SELECT * FROM book WHERE id='$id'");

    while($book_data = mysqli_fetch_array($query)) {
        $title = $book_data['title'];
        $author = $book_data['author'];
        $publisher = $book_data['publisher'];
        $year = $book_data['years'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="edit.css">
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
        <form action="edit.php" method="POST" name="editBook">
            <table>
                <tr>
                    <td>Judul Buku</td>
                    <td><input type="text" name="title" value="<?= $title ?>"></td>
                </tr>
                <tr>
                    <td>Penulis Buku</td>
                    <td><input type="text" name="author" value="<?= $author ?>" ></td>
                </tr>
                <tr>
                    <td>Penerbit Buku</td>
                    <td><input type="text" name="publisher" value="<?= $publisher ?>" ></td>
                </tr>
                <tr>
                    <td>Tahun Terbit</td>
                    <td><input type="year" name="year" value="<?= $year ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    </td>
                    <td>
                        <input type="submit" name="update" value="Update">
                    </td>
                </tr>
            </table>
        </form>
    </main>

</body>
</html>
