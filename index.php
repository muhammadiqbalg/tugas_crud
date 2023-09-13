<?php

    include_once("connection.php");

    $result = mysqli_query($mysqli, 'SELECT * FROM book');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Data</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <header>
        <h1>Book Data</h1>
        <nav>
            <a href="add.php">Add Book</a>
        </nav>
    </header>

    <main>

        <table>
            <tr>
                <th>Judul Buku</th>
                <th>Penulis Buku</th>
                <th>Penerbit Buku</th>
                <th>Tahun Terbit</th>
                <th>Action</th>
            </tr>

            <tr>
                <?php
                
                    while($book_data = mysqli_fetch_array($result)) {
                
                ?>
                <tr>
                    <td><?php echo $book_data['title']; ?></td>
                    <td><?php echo $book_data['author'];?></td>
                    <td><?php echo $book_data['publisher']; ?></td>
                    <td><?php echo $book_data['years']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $book_data['id']; ?>" id="edit">Edit</a>
                        <a href="delete.php?id=<?php echo $book_data['id']; ?>" id="delete">Delete</a>
                    </td>
                </tr>

                <?php
                }
                ?>
            </tr>
        </table>

    </main>

</body>
</html>