<!-- icon -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
    .header {
        background-color: #2c3e50;
        padding: 0.75rem 2rem; 
        /* height: 30px;  */
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: white;
        font-size: 1.6rem; 
        font-weight: bold;
    }

    .profile-dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {
        background-color: transparent;
        color: white;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1rem;
        padding: 0.8rem 1.2rem; 
        border-radius: 4px;
        transition: background-color 0.3s;
        white-space: nowrap; 
    }

    .dropbtn:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .dropbtn i {
        font-size: 1.2rem; 
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        top: 100%; 
        background-color: white;
        min-width: 180px; 
        box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
        border-radius: 4px;
        z-index: 1001; 
        overflow: hidden;
        margin-top: 5px; 
    }

    .dropdown-content a {
        color: #333;
        padding: 14px 18px; 
        text-decoration: none;
        display: block;
        font-size: 0.95rem; 
        transition: background-color 0.3s;
        white-space: nowrap;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown-content a i {
        margin-right: 10px; 
        width: 16px; 
    }

    .profile-dropdown:hover .dropdown-content {
        display: block;
    }

</style>

<header class="header">
    <div class="logo">
        <span>Bacprep</span>
    </div>

    <div class="profile-dropdown">
        <button class="dropbtn">
            <i class='bx bx-user'></i> Profil
        </button>
        <div class="dropdown-content">
             <a href="profile.php"><i class='bx bx-user'></i> Mon Compte</a>
            <a href="logout.php"><i class='bx bx-log-out'></i> Déconnexion</a>
        </div>
    </div>
</header>