<?php $pageTitle = 'Inicio'; ?>
<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=1920&q=80" alt="Washi Restaurant interior" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-dark/70 via-dark/50 to-dark"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-dark/60 via-transparent to-dark/60"></div>
        </div>

        <!-- Floating decorative elements -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-accent/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-32 right-10 w-48 h-48 bg-primary/10 rounded-full blur-3xl animate-pulse delay-300"></div>

        <!-- Content -->
        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
            <div class="animate-fade-in mb-6">
                <span class="inline-block text-accent font-body text-sm uppercase tracking-[0.4em] mb-4 border border-accent/30 px-6 py-2 rounded-full backdrop-blur-sm">
                    <i class="fas fa-fire mr-2"></i>Auténtica Gastronomía Brasileña
                </span>
            </div>
            <h1 class="font-display text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-bold mb-6 animate-fade-in-up leading-tight">
                Sabores de<br>
                <span class="gradient-text">Brasil</span>
                <br>en tu mesa
            </h1>
            <p class="font-body text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10 animate-fade-in-up delay-200 leading-relaxed">
                Descubre la pasión por las carnes a la brasa, la feijoada tradicional y toda la riqueza de la cocina brasileña en un ambiente vibrante y acogedor.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up delay-400">
                <a href="pagina_servicios.php" class="btn-glow bg-accent text-dark font-body font-bold px-10 py-4 rounded-full uppercase tracking-wider text-sm hover:bg-accent-light transition-all">
                    <i class="fas fa-utensils mr-2"></i>Ver Nuestra Carta
                </a>
                <a href="pagina_contacto.php" class="btn-glow border-2 border-white/20 text-white font-body font-semibold px-10 py-4 rounded-full uppercase tracking-wider text-sm hover:border-accent hover:text-accent transition-all backdrop-blur-sm">
                    <i class="fas fa-calendar-alt mr-2"></i>Reservar Mesa
                </a>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
            <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center pt-2">
                <div class="w-1 h-3 bg-accent rounded-full"></div>
            </div>
        </div>
    </section>

    <!-- Highlights Section -->
    <section class="py-24 bg-dark relative overflow-hidden">
        <!-- Background texture -->
        <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23F9A825\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Section Header -->
            <div class="text-center mb-16 observe-animate">
                <span class="text-accent font-body text-sm uppercase tracking-[0.3em] mb-4 block">Especialidades de la Casa</span>
                <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-4">Nuestros Destacados</h2>
                <div class="section-divider mt-6"></div>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Card 1 - Picanha -->
                <div class="card-hover observe-animate delay-100">
                    <div class="glass rounded-2xl overflow-hidden group">
                        <div class="img-zoom aspect-square relative">
                            <img src="https://images.unsplash.com/photo-1558030006-450675393462?w=600&q=80" alt="Picanha a la brasa" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/20 to-transparent"></div>
                            <div class="absolute top-4 right-4 bg-accent text-dark text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                <i class="fas fa-star mr-1"></i>Popular
                            </div>
                        </div>
                        <div class="p-6 -mt-12 relative z-10">
                            <h3 class="font-display text-2xl font-bold text-white mb-2 group-hover:text-accent transition-colors">Picanha Premium</h3>
                            <p class="text-gray-400 font-body text-sm leading-relaxed">
                                Corte premium de picanha brasileña, asada lentamente al carbón con sal gruesa parrillera. Jugosa, tierna y llena de sabor auténtico.
                            </p>
                            <a href="pagina_servicios.php" class="inline-flex items-center gap-2 text-accent font-body text-sm font-semibold mt-4 group-hover:gap-3 transition-all">
                                Ver en la carta <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 - Feijoada -->
                <div class="card-hover observe-animate delay-300">
                    <div class="glass rounded-2xl overflow-hidden group">
                        <div class="img-zoom aspect-square relative">
                            <img src="https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?w=600&q=80" alt="Feijoada completa" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/20 to-transparent"></div>
                            <div class="absolute top-4 right-4 bg-secondary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                <i class="fas fa-fire mr-1"></i>Tradición
                            </div>
                        </div>
                        <div class="p-6 -mt-12 relative z-10">
                            <h3 class="font-display text-2xl font-bold text-white mb-2 group-hover:text-accent transition-colors">Feijoada Completa</h3>
                            <p class="text-gray-400 font-body text-sm leading-relaxed">
                                El plato nacional de Brasil. Guiso de porotos negros con carnes ahumadas, servido con arroz, farofa, naranja y couve refogada.
                            </p>
                            <a href="pagina_servicios.php" class="inline-flex items-center gap-2 text-accent font-body text-sm font-semibold mt-4 group-hover:gap-3 transition-all">
                                Ver en la carta <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 - Rodízio -->
                <div class="card-hover observe-animate delay-500">
                    <div class="glass rounded-2xl overflow-hidden group">
                        <div class="img-zoom aspect-square relative">
                            <img src="https://images.unsplash.com/photo-1594041680534-e8c8cdebd659?w=600&q=80" alt="Rodízio de carnes" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/20 to-transparent"></div>
                            <div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                <i class="fas fa-crown mr-1"></i>Premium
                            </div>
                        </div>
                        <div class="p-6 -mt-12 relative z-10">
                            <h3 class="font-display text-2xl font-bold text-white mb-2 group-hover:text-accent transition-colors">Rodízio Completo</h3>
                            <p class="text-gray-400 font-body text-sm leading-relaxed">
                                La experiencia brasileña definitiva. Más de 12 cortes de carne servidos al estilo churrasco directamente en tu mesa, ilimitados.
                            </p>
                            <a href="pagina_servicios.php" class="inline-flex items-center gap-2 text-accent font-body text-sm font-semibold mt-4 group-hover:gap-3 transition-all">
                                Ver en la carta <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-dark-soft relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Image Side -->
                <div class="observe-animate relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl shadow-primary/10">
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&q=80" alt="Interior de Washi Restaurant" class="w-full aspect-[4/5] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/40 to-transparent"></div>
                    </div>
                    <!-- Floating card -->
                    <div class="absolute -bottom-6 -right-6 md:right-8 glass rounded-xl p-5 animate-fade-in delay-400 shadow-xl">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-accent/20 flex items-center justify-center">
                                <i class="fas fa-award text-accent text-2xl"></i>
                            </div>
                            <div>
                                <p class="font-display text-2xl font-bold text-white">+5 Años</p>
                                <p class="text-gray-400 font-body text-xs">de excelencia gastronómica</p>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative dot pattern -->
                    <div class="absolute -top-6 -left-6 w-24 h-24 opacity-20" style="background-image: radial-gradient(circle, #F9A825 1.5px, transparent 1.5px); background-size: 12px 12px;"></div>
                </div>

                <!-- Text Side -->
                <div class="observe-animate delay-200">
                    <span class="text-accent font-body text-sm uppercase tracking-[0.3em] mb-4 block">Nuestra Historia</span>
                    <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                        Una experiencia<br>
                        <span class="text-accent">auténticamente</span><br>
                        brasileña
                    </h2>
                    <div class="section-divider !mx-0 mb-8"></div>
                    <p class="text-gray-300 font-body leading-relaxed mb-6">
                        En <strong class="text-accent">Washi Restaurant</strong> traemos la calidez y los sabores vibrantes de Brasil a tu mesa. Nuestros chefs expertos preparan cada plato con técnicas tradicionales brasileñas, carnes seleccionadas de primera calidad y ingredientes frescos que capturan la esencia de la gastronomía carioca.
                    </p>
                    <p class="text-gray-400 font-body leading-relaxed mb-8">
                        Desde la picanha perfectamente asada al carbón hasta la feijoada que te transporta al corazón de Rio de Janeiro, cada experiencia en Washi es un viaje sensorial al universo gastronómico brasileño.
                    </p>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 mb-8">
                        <div class="text-center p-4 rounded-xl bg-white/5">
                            <p class="font-display text-3xl font-bold gradient-text">12+</p>
                            <p class="text-gray-500 font-body text-xs mt-1">Cortes de carne</p>
                        </div>
                        <div class="text-center p-4 rounded-xl bg-white/5">
                            <p class="font-display text-3xl font-bold gradient-text">50+</p>
                            <p class="text-gray-500 font-body text-xs mt-1">Platos en carta</p>
                        </div>
                        <div class="text-center p-4 rounded-xl bg-white/5">
                            <p class="font-display text-3xl font-bold gradient-text">100%</p>
                            <p class="text-gray-500 font-body text-xs mt-1">Sabor brasileño</p>
                        </div>
                    </div>

                    <a href="pagina_contacto.php" class="btn-glow inline-flex items-center bg-accent text-dark font-body font-bold px-8 py-3.5 rounded-full uppercase tracking-wider text-sm hover:bg-accent-light transition-all">
                        <i class="fas fa-calendar-check mr-2"></i>Reserva tu experiencia
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax CTA Banner -->
    <section class="relative py-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=1920&q=80" alt="Comida brasileña" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-dark/80"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-primary/30 to-secondary/20"></div>
        </div>
        <div class="relative z-10 text-center max-w-3xl mx-auto px-4">
            <div class="observe-animate">
                <i class="fas fa-fire text-accent text-4xl mb-6 animate-pulse"></i>
                <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                    ¿Listo para vivir la<br>experiencia <span class="text-accent">Washi</span>?
                </h2>
                <p class="text-gray-300 font-body text-lg mb-10 leading-relaxed">
                    Reserva tu mesa y déjate seducir por los sabores más auténticos de la cocina brasileña. Una experiencia que tus sentidos no olvidarán.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="pagina_contacto.php" class="btn-glow bg-accent text-dark font-body font-bold px-10 py-4 rounded-full uppercase tracking-wider text-sm hover:bg-accent-light transition-all">
                        <i class="fas fa-utensils mr-2"></i>Reservar Ahora
                    </a>
                    <a href="tel:+541112345678" class="btn-glow border-2 border-white/20 text-white font-body font-semibold px-10 py-4 rounded-full uppercase tracking-wider text-sm hover:border-accent hover:text-accent transition-all backdrop-blur-sm">
                        <i class="fas fa-phone mr-2"></i>Llamar al Restaurante
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
