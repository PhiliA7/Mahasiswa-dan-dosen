<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Mahasiswa</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-grid">
        <!-- Area a: Logo/Branding -->
        <div class="logo-area">
            <div class="logo-circle">🎓</div>
            <span>STIKOM</span>
        </div>

        <!-- Area b: Top Header/Search -->
        <header class="top-header">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Cari informasi akademik...">
            </div>
        </header>

        <!-- Area c: Profile/Actions -->
        <div class="profile-area">
            <div class="notifications">
                <i class="fas fa-bell"></i>
                <span class="badge">3</span>
            </div>
            <div class="user-profile">
                <img src="https://ui-avatars.com/api/?name=Mahasiswa+User&background=3b82f6&color=fff" alt="User">
                <div class="user-info">
                    <span class="name">Mahasiswa User</span>
                    <span class="status">Online</span>
                </div>
            </div>
        </div>

        <!-- Area d: Left Sidebar Navigation -->
        <nav class="sidebar-nav">
            <ul class="nav-links">
                <li class="active"><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="#"><i class="fas fa-user-graduate"></i> Data Akademik</a></li>
                <li><a href="#"><i class="fas fa-calendar-alt"></i> Jadwal Kuliah</a></li>
                <li><a href="#"><i class="fas fa-file-invoice"></i> KRS & KHS</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> Pengaturan</a></li>
            </ul>
        </nav>

        <!-- Area e: Main Content Area -->
        <main class="main-content">
            <div class="content-header">
                <h2>Selamat Datang, Mahasiswa!</h2>
                <p>Pantau perkembangan akademik Anda hari ini.</p>
            </div>
            <div class="content-cards">
                <div class="stats-card">
                    <span class="label">IPK Terakhir</span>
                    <span class="value">3.85</span>
                </div>
                <div class="stats-card">
                    <span class="label">SKS Lulus</span>
                    <span class="value">112</span>
                </div>
                <div class="stats-card">
                    <span class="label">Semester</span>
                    <span class="value">6</span>
                </div>
            </div>
        </main>

        <!-- Area f: Right Sidebar/Secondary Content -->
        <aside class="right-sidebar">
            <h3>Agenda Terdekat</h3>
            <ul class="agenda-list">
                <li>
                    <span class="date">15 Apr</span>
                    <p>Ujian Tengah Semester</p>
                </li>
                <li>
                    <span class="date">20 Apr</span>
                    <p>Pengumpulan Tugas Akhir</p>
                </li>
            </ul>
        </aside>

        <!-- Area g: Footer Area -->
        <footer class="bottom-footer">
            <p>&copy; 2026 Portal Akademik STIKOM. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>

