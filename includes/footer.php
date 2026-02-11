    </main>

    <!-- Footer -->
    <footer class="bg-dark-soft border-t border-white/5 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">

                <!-- Brand -->
                <div class="lg:col-span-1">
                    <a href="index.php" class="flex items-center gap-3 mb-6 group">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary to-accent flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                            <span class="text-dark font-display font-bold text-xl">W</span>
                        </div>
                        <div>
                            <span class="font-display text-xl font-bold tracking-wide text-white">WASHI</span>
                            <span class="block text-[10px] tracking-[0.3em] text-accent font-body uppercase -mt-1">Restaurant</span>
                        </div>
                    </a>
                    <p class="text-gray-400 font-body text-sm leading-relaxed mb-6">
                        Auténtica gastronomía brasileña en un ambiente cálido y vibrante. Carnes a la brasa, sabores tropicales y la mejor experiencia gastronómica.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:bg-accent hover:text-dark transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:bg-accent hover:text-dark transition-all duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:bg-accent hover:text-dark transition-all duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:bg-accent hover:text-dark transition-all duration-300">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-display text-lg text-white mb-6 relative">
                        Links Rápidos
                        <span class="absolute bottom-0 left-0 w-8 h-0.5 bg-accent -mb-2 rounded"></span>
                    </h4>
                    <ul class="space-y-3 mt-4">
                        <li><a href="index.php" class="text-gray-400 hover:text-accent transition-colors font-body text-sm flex items-center gap-2"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Inicio</a></li>
                        <li><a href="pagina_servicios.php" class="text-gray-400 hover:text-accent transition-colors font-body text-sm flex items-center gap-2"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Nuestra Carta</a></li>
                        <li><a href="pagina_contacto.php" class="text-gray-400 hover:text-accent transition-colors font-body text-sm flex items-center gap-2"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Reservas</a></li>
                        <li><a href="pagina_contacto.php#contacto" class="text-gray-400 hover:text-accent transition-colors font-body text-sm flex items-center gap-2"><i class="fas fa-chevron-right text-[8px] text-accent"></i> Contacto</a></li>
                    </ul>
                </div>

                <!-- Hours -->
                <div>
                    <h4 class="font-display text-lg text-white mb-6 relative">
                        Horarios
                        <span class="absolute bottom-0 left-0 w-8 h-0.5 bg-accent -mb-2 rounded"></span>
                    </h4>
                    <ul class="space-y-3 mt-4 font-body text-sm">
                        <li class="flex justify-between text-gray-400">
                            <span>Lunes - Viernes</span>
                            <span class="text-accent">12:00 - 00:00</span>
                        </li>
                        <li class="flex justify-between text-gray-400">
                            <span>Sábado</span>
                            <span class="text-accent">11:00 - 01:00</span>
                        </li>
                        <li class="flex justify-between text-gray-400">
                            <span>Domingo</span>
                            <span class="text-accent">11:00 - 23:00</span>
                        </li>
                    </ul>
                    <div class="mt-6 p-3 rounded-lg bg-primary/10 border border-primary/20">
                        <p class="text-xs text-gray-400"><i class="fas fa-info-circle text-accent mr-2"></i>Reservas recomendadas los fines de semana</p>
                    </div>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-display text-lg text-white mb-6 relative">
                        Contacto
                        <span class="absolute bottom-0 left-0 w-8 h-0.5 bg-accent -mb-2 rounded"></span>
                    </h4>
                    <ul class="space-y-4 mt-4">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt text-accent mt-1"></i>
                            <span class="text-gray-400 font-body text-sm">Av. Corrientes 1234, CABA<br>Buenos Aires, Argentina</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-phone text-accent"></i>
                            <a href="tel:+541112345678" class="text-gray-400 hover:text-accent transition-colors font-body text-sm">+54 11 1234-5678</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-envelope text-accent"></i>
                            <a href="mailto:reservas@washirestaurant.com" class="text-gray-400 hover:text-accent transition-colors font-body text-sm">reservas@washirestaurant.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 font-body text-xs">
                    &copy; <?php echo date('Y'); ?> Washi Restaurant. Todos los derechos reservados.
                </p>
                <p class="text-gray-600 font-body text-xs">
                    Diseñado con <i class="fas fa-heart text-secondary"></i> y mucho sabor brasileño
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-6 right-6 w-12 h-12 bg-accent text-dark rounded-full shadow-lg hidden items-center justify-center hover:bg-accent-light transition-all duration-300 z-30 hover:scale-110" aria-label="Volver arriba">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script>
        // Hamburger Menu
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        let menuOpen = false;

        hamburgerBtn.addEventListener('click', () => {
            menuOpen = !menuOpen;
            if (menuOpen) {
                hamburgerBtn.classList.add('hamburger-active');
                mobileMenu.classList.add('open');
                document.body.style.overflow = 'hidden';
            } else {
                hamburgerBtn.classList.remove('hamburger-active');
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            }
        });

        // Close mobile menu on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menuOpen = false;
                hamburgerBtn.classList.remove('hamburger-active');
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            });
        });

        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg', 'shadow-black/20');
                navbar.style.background = 'rgba(26, 26, 26, 0.95)';
            } else {
                navbar.classList.remove('shadow-lg', 'shadow-black/20');
                navbar.style.background = '';
            }
        });

        // Back to Top
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTop.classList.remove('hidden');
                backToTop.classList.add('flex');
            } else {
                backToTop.classList.add('hidden');
                backToTop.classList.remove('flex');
            }
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Intersection Observer for animations
        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    entry.target.style.opacity = '1';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.observe-animate').forEach(el => {
            el.style.opacity = '0';
            observer.observe(el);
        });
    </script>
</body>
</html>
