<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Tác Giả</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Quản trị</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="index.php?controller=category&action=index">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=author&action=index">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=article&action=index">Bài viết</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <a href="index.php?controller=author&action=add" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên Tác Giả</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['ma_tgia'], ENT_QUOTES, 'UTF-8') . "</td>";
                                echo "<td>" . htmlspecialchars($row['ten_tgia'], ENT_QUOTES, 'UTF-8') . "</td>";
                                echo '<td><a href="index.php?controller=author&action=edit&id=' . $row['ma_tgia'] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>';
                                echo '<td><a href="index.php?controller=author&action=delete&id=' . $row['ma_tgia'] . '" onclick="return confirm(\'BẠN CHẮC XÓA TÁC GIẢ NÀY CHỨ?\')"><i class="fa-solid fa-trash"></i></a></td>';
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>Không có tác giả nào.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">Vườn âm nhạc của TLU</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
