# 🔥 Washi Restaurant — Sitio Web

Sitio web profesional para **Washi Restaurant**, un restaurante de gastronomía brasileña auténtica.

## 🛠 Stack Técnico

- **PHP 8+** con includes para header/footer
- **Tailwind CSS v3** vía CDN
- **Google Fonts**: Playfair Display + Inter
- **Font Awesome 6** vía CDN
- **Mobile-first** responsive design
- **JavaScript** vanilla para interactividad

## 📁 Estructura

```
├── index.php                 → Landing page (hero, destacados, about, CTA)
├── pagina_servicios.php      → Carta / menú (22 platos, 5 categorías, filtros)
├── pagina_contacto.php       → Reservas y contacto (formulario, mapa, info)
├── includes/
│   ├── header.php            → Navbar sticky + hamburger + assets
│   └── footer.php            → Footer + scripts + back-to-top
├── .htaccess                 → Seguridad, cache, compresión
└── README.md                 → Este archivo
```

## 🚀 Instalación

1. Clonar o copiar los archivos a un servidor con PHP 8+
2. Asegurar que `mod_rewrite` esté habilitado (Apache)
3. Acceder desde el navegador

### Desarrollo local:

```bash
php -S localhost:8000
```

Abrir `http://localhost:8000` en el navegador.

## 🎨 Paleta de Colores

| Rol | Color | Hex |
|---|---|---|
| Primario (verde) | 🟢 | `#1B5E20` |
| Acento (dorado) | 🟡 | `#F9A825` |
| Secundario (terracota) | 🟠 | `#BF360C` |
| Fondo oscuro | ⚫ | `#1A1A1A` |
| Fondo claro | ⚪ | `#FAF3E0` |

## 📄 Licencia

© 2026 Washi Restaurant. Todos los derechos reservados.
