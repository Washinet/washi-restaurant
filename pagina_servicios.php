<?php $pageTitle = 'Nuestra Carta'; ?>
<?php include 'includes/header.php'; ?>

<!-- Hero -->
<section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=1920&q=80" alt="Interior"
            class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-dark/85"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-dark"></div>
    </div>
    <div class="relative z-10 text-center max-w-4xl mx-auto px-4">
        <span class="text-accent font-body text-sm uppercase tracking-[0.4em] mb-4 block animate-fade-in"><i
                class="fas fa-utensils mr-2"></i>Menú &amp; Especialidades</span>
        <h1 class="font-display text-5xl md:text-7xl font-bold text-white mb-4 animate-fade-in-up">Nuestra <span
                class="gradient-text">Carta</span></h1>
        <p class="text-gray-300 font-body text-lg animate-fade-in-up delay-200">Cada plato cuenta una historia de
            tradición, pasión y sabores auténticos de Brasil</p>
    </div>
</section>

<!-- Tabs -->
<section class="bg-dark sticky top-20 z-20 border-b border-white/5">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex overflow-x-auto gap-2 py-4" id="menuTabs">
            <button
                class="menu-tab active font-body text-sm font-semibold px-6 py-2.5 rounded-full whitespace-nowrap transition-all bg-accent text-dark"
                data-category="all"><i class="fas fa-th mr-2"></i>Todos</button>
            <button
                class="menu-tab font-body text-sm font-medium px-6 py-2.5 rounded-full whitespace-nowrap transition-all bg-white/5 text-gray-400 hover:bg-white/10"
                data-category="entradas"><i class="fas fa-seedling mr-2"></i>Entradas</button>
            <button
                class="menu-tab font-body text-sm font-medium px-6 py-2.5 rounded-full whitespace-nowrap transition-all bg-white/5 text-gray-400 hover:bg-white/10"
                data-category="carnes"><i class="fas fa-drumstick-bite mr-2"></i>Carnes</button>
            <button
                class="menu-tab font-body text-sm font-medium px-6 py-2.5 rounded-full whitespace-nowrap transition-all bg-white/5 text-gray-400 hover:bg-white/10"
                data-category="acompañamientos"><i class="fas fa-bowl-rice mr-2"></i>Acompañamientos</button>
            <button
                class="menu-tab font-body text-sm font-medium px-6 py-2.5 rounded-full whitespace-nowrap transition-all bg-white/5 text-gray-400 hover:bg-white/10"
                data-category="bebidas"><i class="fas fa-cocktail mr-2"></i>Bebidas</button>
            <button
                class="menu-tab font-body text-sm font-medium px-6 py-2.5 rounded-full whitespace-nowrap transition-all bg-white/5 text-gray-400 hover:bg-white/10"
                data-category="postres"><i class="fas fa-ice-cream mr-2"></i>Postres</button>
        </div>
    </div>
</section>

<!-- Menu -->
<section class="py-20 bg-dark">
    <div class="max-w-7xl mx-auto px-4">
        <?php
$menu = [
    ['Pão de Queijo', 'Bollitos de queso de Minas Gerais, crujientes y suaves.', '$4.500', 'https://images.unsplash.com/photo-1598142982901-df6cec890e36?w=500&q=80', 'entradas', 'Favorito', 'accent'],
    ['Coxinha de Pollo', 'Croquetas brasileñas rellenas de pollo desmenuzado con queso crema.', '$4.200', 'https://images.unsplash.com/photo-1601050690117-94f5f6fa8bd7?w=500&q=80', 'entradas', '', ''],
    ['Pastéis Variados', 'Pasteles fritos rellenos de carne, queso, palmitos y camarones.', '$5.800', 'https://images.unsplash.com/photo-1630383249896-424e482df921?w=500&q=80', 'entradas', '', ''],
    ['Bolinho de Bacalao', 'Buñuelos de bacalao dorados y crocantes con aioli de lima.', '$5.200', 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=500&q=80', 'entradas', '', ''],
    ['Picanha Premium', 'El corte estrella brasileño, asado al carbón con sal gruesa. Jugoso y tierno.', '$14.500', 'https://images.unsplash.com/photo-1558030006-450675393462?w=500&q=80', 'carnes', 'Estrella', 'accent'],
    ['Costela no Bafo', 'Costilla de res cocinada 8 horas. Se deshace con el ahumado perfecto.', '$13.800', 'https://images.unsplash.com/photo-1544025162-d76694265947?w=500&q=80', 'carnes', 'Premium', 'primary'],
    ['Fraldinha Grelhada', 'Entraña marinada en especias, asada a punto con chimichurri casero.', '$12.500', 'https://images.unsplash.com/photo-1588168333986-5078d3ae3976?w=500&q=80', 'carnes', '', ''],
    ['Rodízio Completo', '+12 cortes ilimitados en espada estilo churrascaria con buffet de ensaladas.', '$18.900', 'https://images.unsplash.com/photo-1594041680534-e8c8cdebd659?w=500&q=80', 'carnes', 'Todo incluido', 'secondary'],
    ['Linguiça Toscana', 'Chorizo toscano a la parrilla con farofa y vinagreta brasileña.', '$9.200', 'https://images.unsplash.com/photo-1529193591184-b1d58069ecdd?w=500&q=80', 'carnes', '', ''],
    ['Feijoada Completa', 'Porotos negros con carnes ahumadas, arroz, farofa, naranja y couve.', '$11.500', 'https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?w=500&q=80', 'carnes', 'Tradición', 'secondary'],
    ['Farofa Especial', 'Harina de mandioca tostada con huevo, panceta y cebolla crujiente.', '$3.500', 'https://images.unsplash.com/photo-1536304993881-460e4c078ce7?w=500&q=80', 'acompañamientos', 'Clásico', 'accent'],
    ['Arroz con Brócoli', 'Arroz brasileño salteado con brócoli al dente y ajo dorado.', '$3.200', 'https://images.unsplash.com/photo-1516684732162-798a0062be99?w=500&q=80', 'acompañamientos', '', ''],
    ['Vinagrete Brasileña', 'Tomate, cebolla, pimiento y cilantro en vinagre y aceite de oliva.', '$2.800', 'https://images.unsplash.com/photo-1563379926898-05f4575a45d8?w=500&q=80', 'acompañamientos', '', ''],
    ['Banana Frita', 'Banana plátano frita caramelizada con canela y azúcar.', '$3.000', 'https://images.unsplash.com/photo-1528975604071-b4dc52a2d18c?w=500&q=80', 'acompañamientos', '', ''],
    ['Caipirinha Clásica', 'Cachaça, lima fresca, azúcar y hielo picado. Refrescante y potente.', '$5.500', 'https://images.unsplash.com/photo-1541546006121-e8e0aafc7fc5?w=500&q=80', 'bebidas', 'Clásico', 'accent'],
    ['Caipirinha de Frutas', 'Maracuyá, frutilla, kiwi o mango. Elige tu favorita.', '$6.200', 'https://images.unsplash.com/photo-1536935338788-846bb9981813?w=500&q=80', 'bebidas', '', ''],
    ['Guaraná Antarctica', 'La gaseosa más icónica de Brasil, importada directamente.', '$3.200', 'https://images.unsplash.com/photo-1625772299848-391b6a87d7b3?w=500&q=80', 'bebidas', '', ''],
    ['Jugo de Açaí', 'Açaí puro del Amazonas con un toque de guaraná. Energizante.', '$4.800', 'https://images.unsplash.com/photo-1590301157890-4810ed352733?w=500&q=80', 'bebidas', 'Natural', 'primary'],
    ['Brigadeiro Gourmet', 'Trufas de chocolate con leche condensada y granulado belga.', '$4.200', 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?w=500&q=80', 'postres', 'Favorito', 'accent'],
    ['Pudim de Leite', 'Flan brasileño de leche condensada con caramelo dorado.', '$4.800', 'https://images.unsplash.com/photo-1624353365286-3f8d62daad51?w=500&q=80', 'postres', '', ''],
    ['Açaí Bowl', 'Açaí congelado con granola, banana, frutilla y miel.', '$5.500', 'https://images.unsplash.com/photo-1546039907-7b3a6c241f52?w=500&q=80', 'postres', 'Saludable', 'primary'],
    ['Quindim', 'Yema de huevo, coco rallado y azúcar. Dorado y brillante.', '$4.000', 'https://images.unsplash.com/photo-1587314168485-3236d6710814?w=500&q=80', 'postres', '', ''],
];
?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="menuGrid">
            <?php foreach ($menu as $i => $m): ?>
            <div class="menu-item card-hover observe-animate" data-category="<?= $m[4]?>">
                <div class="glass rounded-2xl overflow-hidden group h-full flex flex-col">
                    <div class="img-zoom aspect-video relative">
                        <img src="<?= $m[3]?>" alt="<?= $m[0]?>" class="w-full h-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark via-transparent to-transparent"></div>
                        <?php if ($m[5]): ?>
                        <div
                            class="absolute top-3 right-3 bg-<?= $m[6]?> <?= $m[6] === 'accent' ? 'text-dark' : 'text-white'?> text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                            <?= $m[5]?>
                        </div>
                        <?php
    endif; ?>
                        <div
                            class="absolute bottom-3 right-3 bg-dark/80 backdrop-blur-sm text-accent font-display font-bold text-lg px-4 py-1.5 rounded-full border border-accent/20">
                            <?= $m[2]?>
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h3
                            class="font-display text-xl font-bold text-white group-hover:text-accent transition-colors mb-2">
                            <?= $m[0]?>
                        </h3>
                        <p class="text-gray-400 font-body text-sm leading-relaxed flex-1">
                            <?= $m[1]?>
                        </p>
                        <span
                            class="text-[10px] font-body text-gray-600 uppercase tracking-widest mt-3 border-t border-white/5 pt-3"><i
                                class="fas fa-tag mr-1 text-primary"></i>
                            <?= ucfirst($m[4])?>
                        </span>
                    </div>
                </div>
            </div>
            <?php
endforeach; ?>
        </div>
    </div>
</section>

<!-- Rodízio CTA -->
<section class="py-20 bg-dark-soft relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 text-center relative">
        <div class="observe-animate glass rounded-3xl p-12 md:p-16 border border-accent/10">
            <div class="w-20 h-20 rounded-full bg-accent/10 flex items-center justify-center mx-auto mb-6"><i
                    class="fas fa-fire text-accent text-3xl"></i></div>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-white mb-4">Rodízio <span
                    class="text-accent">Ilimitado</span></h2>
            <p class="text-gray-300 font-body text-lg max-w-2xl mx-auto mb-8 leading-relaxed">Viernes y sábados, +12
                cortes premium servidos a tu mesa, ensaladas ilimitadas y acompañamientos.</p>
            <a href="pagina_contacto.php"
                class="btn-glow bg-accent text-dark font-body font-bold px-10 py-4 rounded-full uppercase tracking-wider text-sm hover:bg-accent-light transition-all inline-block"><i
                    class="fas fa-calendar-check mr-2"></i>Reservar para Rodízio</a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.menu-tab'), items = document.querySelectorAll('.menu-item');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => { t.classList.remove('active', 'bg-accent', 'text-dark'); t.classList.add('bg-white/5', 'text-gray-400'); });
                tab.classList.add('active', 'bg-accent', 'text-dark'); tab.classList.remove('bg-white/5', 'text-gray-400');
                const cat = tab.dataset.category;
                items.forEach(item => { if (cat === 'all' || item.dataset.category === cat) { item.style.display = ''; item.style.animation = 'scaleIn 0.4s ease-out forwards'; } else { item.style.display = 'none'; } });
            });
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
