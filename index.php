<?php
    // Gunanya Index php ini adalah routingan sederhana
    session_start();
    define('BASE_URL', 'http://localhost:8080/');

    $url = ltrim($_SERVER['REQUEST_URI'], '/');
    $view = 'App/Views/';
    $controller = 'App/Controllers/';
    
    // Pemanggilan Controller (SETIAP ADA FILE DI CONTROLLER HARUS DIMASUKKAN DISINI)
    require_once $controller . 'Auth/RegisterController.php';
    require_once $controller . 'Auth/LoginController.php';
    require_once $controller . 'Home/HomeController.php';
    require_once $controller . 'Dashboard/DashboardController.php';
    require_once $controller . 'Dashboard/ConsoleController.php';

    // INISIALISASI CONTROLLERNYA
    $RegisterController = new RegisterController();
    $LoginController = new LoginController();
    $HomeController = new HomeController();
    $DashboardController = new DashboardController();
    $ConsoleController = new ConsoleController();

    switch ($url) {
        // REGISTER
        case 'register':
            $RegisterController->Index();
        break;
        case 'register/process':
            $RegisterController->CreateUser();
        break;


        // LOGIN
        case 'login':
            $LoginController->Index();
        break;
        case 'login/process':
            $LoginController->LoginUser();
        break;


        // HOME
        case '':
            $HomeController->Index();  
        break;
            


        // ROLE ADMIN (HALAMAN DASHBOARD)
        case 'admin/dashboard':
            $DashboardController->Index();
            break;
        // ROLE ADMIN (HALAMAN CONSOLE)
        case 'admin/console':
            $ConsoleController->Index();
            break;
        case 'admin/console/add':
            $ConsoleController->CreateConsole();
            break;
        case 'admin/console/update':
            $ConsoleController->UpdateConsole();
            break;
        case 'admin/console/delete':
            $ConsoleController->DeleteConsole();
            break;
        // ROLE ADMIN (HALAMAN PESANAN)
        // ROLE ADMIN (HALAMAN PELANGGAN)


        // ROLE MEMBER (HALAMAN HOME)
        // ROLE MEMBER (HALAMAN PESAN SESI)
        // ROLE MEMBER (HALAMAN MENU)
        // ROLE MEMBER (HALAMAN REKOMENDASI)
        // ROLE MEMBER (HALAMAN LOGOUT)


        // LEMPAR KE HALAMAN 404 KETIKA USER MENGETIKKAN URL YANG TIDAK ADA DALAM DAFTAR
        default:
            require_once $view . 'users/layoutUser/headerUsers.php';
            require_once $view . 'errors/404.php';
            require_once $view . 'users/layoutUser/footerUsers.php';
        break;
    }































































        // DASHBOARD ADMIN
        // case 'dashboard/admin':
        //     $model = [
        //         'section' => "Dashboard Home",
        //         'title' => "RentGo - Dashboard Home",
        //         'username' => $_SESSION['username'],
        //         'email' => $_SESSION['email'],
        //         'photo' => 'http://localhost:8080/' . $_SESSION['photo'],
        //     ];
        //     require_once $view . 'dashboard/layout/header.php';
        //     require_once $view . 'dashboard/admin/dashboardHome.php';
        //     require_once $view . 'dashboard/layout/footer.php';
        //     break;
        // case 'dashboard/console':
        //     require_once $model . 'AdminModel.php';
        //     $model = [
        //         'section' => "Dashboard Home",
        //         'title' => "RentGo - Dashboard Home",
        //         'username' => $_SESSION['username'],
        //         'email' => $_SESSION['email'],
        //         'photo' => 'http://localhost:8080/' . $_SESSION['photo'],
        //         'items' => $items['consoles'],
        //         'success' => $_SESSION['success'] ?? NULL,
        //         'alert' => $_SESSION['alert'] ?? NULL,
        //     ];
        //     require_once $view . 'dashboard/layout/header.php';
        //     require_once $view . 'dashboard/admin/console.php';
        //     require_once $view . 'dashboard/layout/footer.php';
        //     break;
        // case 'dashboard/pesanan':
        //     $model = [
        //         'section' => "Dashboard Home",
        //         'title' => "RentGo - Dashboard Home",
        //         'username' => $_SESSION['username'],
        //         'email' => $_SESSION['email'],
        //         'photo' => 'http://localhost:8080/' . $_SESSION['photo'],
        //     ];
        //     require_once $view . 'dashboard/layout/header.php';
        //     require_once $view . 'dashboard/admin/pesanan.php';
        //     require_once $view . 'dashboard/layout/footer.php';
        //     break;
        // case 'dashboard/pelanggan':
        //     $model = [
        //         'section' => "Dashboard Home",
        //         'title' => "RentGo - Dashboard Home",
        //         'username' => $_SESSION['username'],
        //         'email' => $_SESSION['email'],
        //         'photo' => 'http://localhost:8080/' . $_SESSION['photo'],
        //     ];
        //     require_once $view . 'dashboard/layout/header.php';
        //     require_once $view . 'dashboard/admin/pelanggan.php';
        //     require_once $view . 'dashboard/layout/footer.php';
        //     break;
        // case 'dashboard/revenues':
        //     $model = [
        //         'section' => "Revenue Reports",
        //         'title' => "RentGo - Revenue Dashboard"
        //     ];
        //     require_once $view . 'dashboard/templates/header.php';
        //     require_once $view . 'dashboard/dashboardRevenue.php';
        //     require_once $view . 'dashboard/templates/footer.php';
        //     break;
        // case 'dashboard/monitors':
        //     $model = [
        //         'section' => "Monitoring Dashboard",
        //         'title' => "RentGo - Monitoring Dashboard"
        //     ];
        //     require_once $view . 'dashboard/templates/header.php';
        //     require_once $view . 'dashboard/dashboardMonitor.php';
        //     require_once $view . 'dashboard/templates/footer.php';
        //     break;
        // case 'dashboard/reports':
        //     $model = [
        //         'section' => "Report Dashboard",
        //         'title' => "RentGo - Report Dashboard"
        //     ];
        //     require_once $view . 'dashboard/templates/header.php';
        //     require_once $view . 'dashboard/dashboardReport.php';
        //     require_once $view . 'dashboard/templates/footer.php';
        //     break;
        // case 'dashboard/settings':
        //     $model = [
        //         'section' => "Settings Dashboard",
        //         'title' => "RentGo - Settings Dashboard"
        //     ];
        //     require_once $view . 'dashboard/templates/header.php';
        //     require_once $view . 'dashboard/dashboardSetting.php';
        //     require_once $view . 'dashboard/templates/footer.php';
        //     break;



        // //DASHBOARD MEMBER
        // case 'dashboard/member':
        //     $model = [
        //         'section' => "Dashboard Member",
        //         'title' => "RentGo - Dashboard Member",
        //         'username' => $_SESSION['username'],
        //         'email' => $_SESSION['email'],
        //         'photo' => 'http://localhost:8080/' . $_SESSION['photo'],
        //     ];
        //     require_once $view . 'dashboard/member/layoutMember/headerMember.php';
        //     require_once $view . 'dashboard/member/homeMember.php';
        //     require_once $view . 'dashboard/member/layoutMember/footerMember.php';
        //     break;





















































































        // UI USER













        // case 'users/pesan-sesi':
        //     $model = [
        //         'title' => "RentGo",
        //     ];
        //     require_once $view . 'users/layoutUser/headerUsers.php';
        //     require_once $view . 'users/pesan-sesi.php';
        //     require_once $view . 'users/layoutUser/footerUsers.php';
        //     break;
        // case 'users/menu':
        //     $model = [
        //         'title' => "RentGo",
        //     ];
        //     require_once $view . 'users/layoutUser/headerUsers.php';
        //     require_once $view . 'users/menu.php';
        //     require_once $view . 'users/layoutUser/footerUsers.php';
        //     break;
        // case 'users/rekomendasi':
        //     $model = [
        //         'title' => "RentGo",
        //     ];
        //     require_once $view . 'users/layoutUser/headerUsers.php';
        //     require_once $view . 'users/rekomendasi.php';
        //     require_once $view . 'users/layoutUser/footerUsers.php';
        //     break;

        // // UI MEMBER
        // case 'member':
        //     $model = [
        //         'title' => "RentGo",
        //     ];
        //     require_once $view . 'dashboard/member/layoutMember/headerMember.php';
        //     require_once $view . 'dashboard/member/homeMember.php';
        //     require_once $view . 'dashboard/member/layoutMember/footerMember.php';
        //     break;
        // case 'member/pesan-sesi':
        //     $model = [
        //         'title' => "RentGo",
        //         'username' => ""
        //     ];
        //     require_once $view . 'dashboard/member/layoutMember/headerMember.php';
        //     require_once $view . 'dashboard/member/pesan-sesiMember.php';
        //     require_once $view . 'dashboard/member/layoutMember/footerMember.php';
        //     break;
        // case 'member/menu':
        //     $model = [
        //         'title' => "RentGo",
        //     ];
        //     require_once $view . 'dashboard/member/layoutMember/headerMember.php';
        //     require_once $view . 'dashboard/member/menuMember.php';
        //     require_once $view . 'dashboard/member/layoutMember/footerMember.php';
        //     break;
        // case 'member/rekomendasi':
        //     $model = [
        //         'title' => "RentGo",
        //     ];
        //     require_once $view . 'dashboard/member/layoutMember/headerMember.php';
        //     require_once $view . 'dashboard/member/rekomendasiMember.php';
        //     require_once $view . 'dashboard/member/layoutMember/footerMember.php';
        //     break;

































        // case 'dashboard/console/add':
        //     require_once $model . 'Admin/CreateModel.php';
        //     break;
        // case 'dashboard/console/delete':
        //     require_once $model . 'Admin/DeleteModel.php';
        //     break;
        // case 'dashboard/console/update':
        //     require_once $model . 'Admin/UpdateModel.php';
        //     break;

        
?>