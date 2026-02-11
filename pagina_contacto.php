<?php $pageTitle = 'Reservas y Contacto'; ?>
<?php include 'includes/header.php'; ?>

<!-- Hero -->
<section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1920&q=80" alt="Restaurante"
            class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-dark/85"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-dark"></div>
    </div>
    <div class="relative z-10 text-center max-w-4xl mx-auto px-4">
        <span class="text-accent font-body text-sm uppercase tracking-[0.4em] mb-4 block animate-fade-in"><i
                class="fas fa-calendar-alt mr-2"></i>Reservas &amp; Contacto</span>
        <h1 class="font-display text-5xl md:text-7xl font-bold text-white mb-4 animate-fade-in-up">Reserva tu <span
                class="gradient-text">Mesa</span></h1>
        <p class="text-gray-300 font-body text-lg animate-fade-in-up delay-200">Asegura tu experiencia gastronómica
            brasileña. Te esperamos con los brazos abiertos.</p>
    </div>
</section>

<!-- Reservation & Contact -->
<section class="py-20 bg-dark" id="contacto">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">

            <!-- Form (3 cols) -->
            <div class="lg:col-span-3 observe-animate">
                <div class="glass rounded-2xl p-8 md:p-10">
                    <div class="mb-8">
                        <span class="text-accent font-body text-sm uppercase tracking-[0.3em] mb-2 block">Formulario de
                            Reserva</span>
                        <h2 class="font-display text-3xl font-bold text-white">Reserva tu experiencia</h2>
                        <div class="section-divider !mx-0 mt-4"></div>
                    </div>

                    <form id="reservationForm" class="space-y-6" onsubmit="return handleSubmit(event)">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-400 font-body text-sm mb-2" for="nombre"><i
                                        class="fas fa-user text-accent mr-2"></i>Nombre completo *</label>
                                <input type="text" id="nombre" name="nombre" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white font-body text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all"
                                    placeholder="Tu nombre">
                            </div>
                            <div>
                                <label class="block text-gray-400 font-body text-sm mb-2" for="email"><i
                                        class="fas fa-envelope text-accent mr-2"></i>Email *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white font-body text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all"
                                    placeholder="tu@email.com">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-400 font-body text-sm mb-2" for="telefono"><i
                                        class="fas fa-phone text-accent mr-2"></i>Teléfono *</label>
                                <input type="tel" id="telefono" name="telefono" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white font-body text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all"
                                    placeholder="+54 11 1234-5678">
                            </div>
                            <div>
                                <label class="block text-gray-400 font-body text-sm mb-2" for="personas"><i
                                        class="fas fa-users text-accent mr-2"></i>Personas *</label>
                                <select id="personas" name="personas" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white font-body text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all [&>option]:bg-dark">
                                    <option value="">Seleccionar...</option>
                                    <?php for ($i = 1; $i <= 12; $i++): ?>
                                    <option value="<?= $i?>">
                                        <?= $i?> persona<?= $i > 1 ? 's' : ''?>
                                    </option>
                                    <?php endfor; ?>
                                    <option value="13+">Más de 12</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-400 font-body text-sm mb-2" for="fecha"><i
                                        class="fas fa-calendar text-accent mr-2"></i>Fecha *</label>
                                <input type="date" id="fecha" name="fecha" required min="<?= date('Y-m-d')?>"
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white font-body text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-gray-400 font-body text-sm mb-2" for="hora"><i
                                        class="fas fa-clock text-accent mr-2"></i>Hora *</label>
                                <select id="hora" name="hora" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white font-body text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all [&>option]:bg-dark">
                                    <option value="">Seleccionar...</option>
                                    <?php
$hours = ['12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '19:00', '19:30', '20:00', '20:30', '21:00', '21:30', '22:00', '22:30', '23:00'];
foreach ($hours as $h): ?>
                                    <option value="<?= $h?>">
                                        <?= $h?> hs
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-gray-400 font-body text-sm mb-2" for="mensaje"><i
                                    class="fas fa-comment text-accent mr-2"></i>Mensaje o requerimiento especial</label>
                            <textarea id="mensaje" name="mensaje" rows="4"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white font-body text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all resize-none"
                                placeholder="Alergias, celebraciones, preferencias de ubicación..."></textarea>
                        </div>
                        <button type="submit" id="submitBtn"
                            class="btn-glow w-full bg-accent text-dark font-body font-bold py-4 rounded-xl uppercase tracking-wider text-sm hover:bg-accent-light transition-all">
                            <i class="fas fa-paper-plane mr-2"></i>Confirmar Reserva
                        </button>
                    </form>

                    <!-- Success message (hidden) -->
                    <div id="successMsg" class="hidden text-center py-12">
                        <div class="w-20 h-20 rounded-full bg-primary/20 flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-check text-primary text-3xl"></i>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-white mb-2">¡Reserva Enviada!</h3>
                        <p class="text-gray-400 font-body">Te confirmaremos a la brevedad por email o WhatsApp.</p>
                    </div>
                </div>
            </div>

            <!-- Info (2 cols) -->
            <div class="lg:col-span-2 space-y-6 observe-animate delay-200">

                <!-- Contact Info Card -->
                <div class="glass rounded-2xl p-8">
                    <h3 class="font-display text-xl font-bold text-white mb-6">Información de Contacto</h3>
                    <ul class="space-y-5">
                        <li class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-accent"></i></div>
                            <div>
                                <p class="text-white font-body text-sm font-semibold">Dirección</p>
                                <p class="text-gray-400 font-body text-sm">Av. Corrientes 1234, CABA<br>Buenos Aires,
                                    Argentina</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-accent"></i></div>
                            <div>
                                <p class="text-white font-body text-sm font-semibold">Teléfono</p><a
                                    href="tel:+541112345678"
                                    class="text-gray-400 hover:text-accent font-body text-sm transition-colors">+54 11
                                    1234-5678</a>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-accent"></i></div>
                            <div>
                                <p class="text-white font-body text-sm font-semibold">Email</p><a
                                    href="mailto:reservas@washirestaurant.com"
                                    class="text-gray-400 hover:text-accent font-body text-sm transition-colors">reservas@washirestaurant.com</a>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center flex-shrink-0">
                                <i class="fab fa-whatsapp text-accent"></i></div>
                            <div>
                                <p class="text-white font-body text-sm font-semibold">WhatsApp</p><a
                                    href="https://wa.me/541112345678" target="_blank"
                                    class="text-gray-400 hover:text-accent font-body text-sm transition-colors">Enviar
                                    mensaje</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Hours Card -->
                <div class="glass rounded-2xl p-8">
                    <h3 class="font-display text-xl font-bold text-white mb-6"><i
                            class="fas fa-clock text-accent mr-2"></i>Horarios</h3>
                    <ul class="space-y-3">
                        <li class="flex justify-between font-body text-sm"><span class="text-gray-400">Lunes -
                                Viernes</span><span class="text-accent font-semibold">12:00 - 00:00</span></li>
                        <li class="flex justify-between font-body text-sm"><span
                                class="text-gray-400">Sábado</span><span class="text-accent font-semibold">11:00 -
                                01:00</span></li>
                        <li class="flex justify-between font-body text-sm"><span
                                class="text-gray-400">Domingo</span><span class="text-accent font-semibold">11:00 -
                                23:00</span></li>
                    </ul>
                </div>

                <!-- Social Card -->
                <div class="glass rounded-2xl p-8">
                    <h3 class="font-display text-xl font-bold text-white mb-6">Síguenos</h3>
                    <div class="grid grid-cols-3 gap-3">
                        <a href="#"
                            class="flex flex-col items-center gap-2 p-4 rounded-xl bg-white/5 hover:bg-accent/10 transition-all group">
                            <i class="fab fa-instagram text-2xl text-gray-400 group-hover:text-accent transition-colors"></i>
                            <span class="text-[10px] text-gray-500 font-body">Instagram</span>
                        </a>
                        <a href="#"
                            class="flex flex-col items-center gap-2 p-4 rounded-xl bg-white/5 hover:bg-accent/10 transition-all group">
                            <i class="fab fa-facebook-f text-2xl text-gray-400 group-hover:text-accent transition-colors"></i>
                            <span class="text-[10px] text-gray-500 font-body">Facebook</span>
                        </a>
                        <a href="#"
                            class="flex flex-col items-center gap-2 p-4 rounded-xl bg-white/5 hover:bg-accent/10 transition-all group">
                            <i class="fab fa-tiktok text-2xl text-gray-400 group-hover:text-accent transition-colors"></i>
                            <span class="text-[10px] text-gray-500 font-body">TikTok</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps -->
<section class="py-20 bg-dark-soft">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12 observe-animate">
            <span class="text-accent font-body text-sm uppercase tracking-[0.3em] mb-4 block">Ubicación</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-white mb-4">Encuéntranos</h2>
            <div class="section-divider mt-4"></div>
        </div>
        <div class="observe-animate rounded-2xl overflow-hidden border border-white/5 shadow-2xl">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.016887889015!2d-58.38375032477651!3d-34.60373887295423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccacb5aa282ed%3A0x6aa7d5ae2b9d6f09!2sAv.%20Corrientes%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1700000000000!5m2!1ses-419!2sar"
                width="100%" height="450" style="border:0; filter: grayscale(0.5) contrast(1.1);" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<script>
    function handleSubmit(e) {
        e.preventDefault();
        const btn = document.getElementById('submitBtn');
        btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Enviando...';
        btn.disabled = true;
        setTimeout(() => {
            document.getElementById('reservationForm').classList.add('hidden');
            document.getElementById('successMsg').classList.remove('hidden');
        }, 1500);
        return false;
    }
</script>

<?php include 'includes/footer.php'; ?>
