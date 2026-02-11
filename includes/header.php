<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Washi Restaurant — Auténtica gastronomía brasileña. Picanha, Feijoada, Rodízio y más. Reserva tu mesa hoy.">
    <meta name="keywords" content="restaurante brasileño, picanha, feijoada, rodízio, churrasco, comida brasileña">
    <meta name="author" content="Washi Restaurant">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | Washi Restaurant' : 'Washi Restaurant — Gastronomía Brasileña'; ?></title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1B5E20',
                        'primary-light': '#2E7D32',
                        'primary-dark': '#0D3B0F',
                        accent: '#F9A825',
                        'accent-light': '#FBC02D',
                        secondary: '#BF360C',
                        'secondary-light': '#D84315',
                        dark: '#1A1A1A',
                        'dark-soft': '#2A2A2A',
                        cream: '#FAF3E0',
                        'cream-dark': '#F0E6CC',
                    },
                    fontFamily: {
                        display: ['Playfair Display', 'serif'],
                        body: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background-color: #1A1A1A; color: #FAFAFA; overflow-x: hidden; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Playfair Display', serif; }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #1A1A1A; }
        ::-webkit-scrollbar-thumb { background: #1B5E20; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #F9A825; }

        /* Smooth scroll */
        html { scroll-behavior: smooth; }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-60px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(60px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        @keyframes shimmer {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }
        .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
        .animate-fade-in { animation: fadeIn 1s ease-out forwards; }
        .animate-slide-left { animation: slideInLeft 0.8s ease-out forwards; }
        .animate-slide-right { animation: slideInRight 0.8s ease-out forwards; }
        .animate-scale-in { animation: scaleIn 0.6s ease-out forwards; }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }
        .delay-600 { animation-delay: 0.6s; }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #F9A825 0%, #FBC02D 50%, #F9A825 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmer 3s linear infinite;
        }

        /* Glass effect */
        .glass {
            background: rgba(26, 26, 26, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Card hover effects */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 60px rgba(249, 168, 37, 0.15);
        }

        /* Image zoom on hover */
        .img-zoom {
            overflow: hidden;
        }
        .img-zoom img {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .img-zoom:hover img {
            transform: scale(1.12);
        }

        /* Button glow */
        .btn-glow {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .btn-glow::before {
            content: '';
            position: absolute;
            top: 0; left: -100%; width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }
        .btn-glow:hover::before {
            left: 100%;
        }
        .btn-glow:hover {
            box-shadow: 0 0 30px rgba(249, 168, 37, 0.4);
        }

        /* Section separator */
        .section-divider {
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #1B5E20, #F9A825);
            margin: 0 auto;
            border-radius: 2px;
        }

        /* Hamburger lines */
        .hamburger-line {
            transition: all 0.3s ease;
        }
        .hamburger-active .hamburger-line:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }
        .hamburger-active .hamburger-line:nth-child(2) {
            opacity: 0;
        }
        .hamburger-active .hamburger-line:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }

        /* Nav links hover */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px; left: 0;
            width: 0; height: 2px;
            background: #F9A825;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        .nav-link:hover, .nav-link.active {
            color: #F9A825;
        }

        /* Mobile menu */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .mobile-menu.open {
            transform: translateX(0);
        }
    </style>
</head>
<body>

    <!-- Top Bar -->
    <div class="bg-primary-dark text-cream text-xs py-2 px-4 hidden md:block">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-6">
                <span><i class="fas fa-phone text-accent mr-2"></i> +54 11 1234-5678</span>
                <span><i class="fas fa-envelope text-accent mr-2"></i> reservas@washirestaurant.com</span>
            </div>
            <div class="flex items-center gap-4">
                <span><i class="fas fa-clock text-accent mr-2"></i> Lun-Dom: 12:00 - 00:00</span>
                <div class="flex gap-3 ml-4">
                    <a href="#" class="hover:text-accent transition-colors"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-accent transition-colors"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-accent transition-colors"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav id="navbar" class="sticky top-0 z-50 glass transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">

                <!-- Logo -->
                <a href="index.php" class="flex items-center gap-3 group">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary to-accent flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                        <span class="text-dark font-display font-bold text-xl">W</span>
                    </div>
                    <div>
                        <span class="font-display text-xl font-bold tracking-wide text-white group-hover:text-accent transition-colors">WASHI</span>
                        <span class="block text-[10px] tracking-[0.3em] text-accent font-body uppercase -mt-1">Restaurant</span>
                    </div>
                </a>

                <!-- Desktop Nav -->
                <div class="hidden md:flex items-center gap-8">
                    <?php
                    $currentPage = basename($_SERVER['PHP_SELF']);
                    ?>
                    <a href="index.php" class="nav-link font-body text-sm font-medium uppercase tracking-wider text-gray-300 <?php echo $currentPage === 'index.php' ? 'active' : ''; ?>">
                        Inicio
                    </a>
                    <a href="pagina_servicios.php" class="nav-link font-body text-sm font-medium uppercase tracking-wider text-gray-300 <?php echo $currentPage === 'pagina_servicios.php' ? 'active' : ''; ?>">
                        Nuestra Carta
                    </a>
                    <a href="pagina_contacto.php" class="nav-link font-body text-sm font-medium uppercase tracking-wider text-gray-300 <?php echo $currentPage === 'pagina_contacto.php' ? 'active' : ''; ?>">
                        Reservas
                    </a>
                    <a href="pagina_contacto.php" class="btn-glow bg-accent text-dark font-body font-semibold text-sm px-6 py-2.5 rounded-full uppercase tracking-wider hover:bg-accent-light">
                        <i class="fas fa-utensils mr-2"></i>Reservar Mesa
                    </a>
                </div>

                <!-- Mobile Hamburger -->
                <button id="hamburgerBtn" class="md:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 z-50" aria-label="Menú">
                    <span class="hamburger-line block w-6 h-0.5 bg-white rounded"></span>
                    <span class="hamburger-line block w-6 h-0.5 bg-white rounded"></span>
                    <span class="hamburger-line block w-6 h-0.5 bg-white rounded"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu fixed inset-0 z-40 bg-dark/95 backdrop-blur-xl flex flex-col items-center justify-center gap-8">
        <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
        <a href="index.php" class="font-display text-3xl text-white hover:text-accent transition-colors <?php echo $currentPage === 'index.php' ? 'text-accent' : ''; ?>">Inicio</a>
        <a href="pagina_servicios.php" class="font-display text-3xl text-white hover:text-accent transition-colors <?php echo $currentPage === 'pagina_servicios.php' ? 'text-accent' : ''; ?>">Nuestra Carta</a>
        <a href="pagina_contacto.php" class="font-display text-3xl text-white hover:text-accent transition-colors <?php echo $currentPage === 'pagina_contacto.php' ? 'text-accent' : ''; ?>">Reservas</a>
        <a href="pagina_contacto.php" class="btn-glow bg-accent text-dark font-body font-semibold px-8 py-3 rounded-full uppercase tracking-wider mt-4">
            <i class="fas fa-utensils mr-2"></i>Reservar Mesa
        </a>
        <div class="flex gap-6 mt-4">
            <a href="#" class="text-gray-400 hover:text-accent text-2xl transition-colors"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-gray-400 hover:text-accent text-2xl transition-colors"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-accent text-2xl transition-colors"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>

    <!-- Main Content -->
    <main>
