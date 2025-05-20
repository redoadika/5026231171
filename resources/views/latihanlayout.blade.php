<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helperfin Dashboard</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="latihanlayout.css">
</head>
<body>

    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-header">
                <button class="toggle-btn" onclick="toggleSidebar()">
                    <i class="fas fa-chevron-left"></i>
                </button>
            </div>

            <div class="user-info">
                <i class="fas fa-user user-icon"></i>
                <div class="user-text">
                    <strong>User</strong>
                    <div class="text-muted">user@gmail.com</div>
                </div>
            </div>

            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    <i class="fas fa-clipboard"></i> <span>Helperlog</span>
                </li>
                <li class="list-group-item list-group-item-action active">
                    <i class="fas fa-search"></i> <span>Helperfind</span>
                </li>
                <li class="list-group-item list-group-item-action">
                    <i class="fas fa-comments"></i> <span>Helperassist</span>
                </li>
            </ul>

            <a href="#" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> <span>Log Out</span>
            </a>
        </div>

        <div class="main-content">
            <h2>Helperfind Dashboard</h2>

            <div class="filter-container">
                <label>Filter PRT Berdasarkan</label>
                <div class="filter-options">
                    <select><option>Kategori Pekerjaan</option></select>
                    <select><option>Pilih Lokasi</option></select>
                    <select><option>Pilih Rating</option></select>
                    <select><option>Pilih Umur</option></select>
                    <button class="search-btn"><i class="fas fa-search"></i> Cari</button>
                </div>
            </div>

            <div class="no-result">
                <img src="https://cdn-icons-png.flaticon.com/512/953/953792.png" alt="Not Found">
                <p>Maaf, kami tidak bisa menemukan PRT yang cocok<br>Coba pencarian lain!</p>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            document.querySelector(".sidebar").classList.toggle("minimized");
            document.querySelector(".toggle-btn i").classList.toggle("fa-chevron-right");
        }
    </script>

</body>
</html>