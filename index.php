<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOSOPEDIA - Peta & Potensi Wilayah Wonosobo</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        wonosobo: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                        },
                        mountain: '#1e293b'
                    }
                }
            }
        }
    </script>
    
    <!-- Google Fonts & FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Leaflet JS Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    
    <!-- ToneJS for Digital Gamelan & Bundengan Synth -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tone/14.8.49/Tone.js"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0b1329;
            color: #f8fafc;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255,255,255,0.05);
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(16, 185, 129, 0.3);
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(16, 185, 129, 0.6);
        }
        .leaflet-container {
            background-color: #0b1329 !important;
        }
        .pulse-orange {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.05); opacity: 0.8; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body class="min-h-screen bg-[#0b1329] text-slate-100 overflow-x-hidden">

    <!-- Navigation & Header Banner -->
    <header class="border-b border-slate-800 bg-slate-900/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-3">
                <div class="bg-gradient-to-tr from-emerald-500 to-amber-500 p-2.5 rounded-xl shadow-lg shadow-emerald-500/20">
                    <i class="fa-solid fa-map-location-dot text-2xl text-slate-950"></i>
                </div>
                <div>
                    <h1 class="text-xl font-extrabold tracking-tight bg-gradient-to-r from-emerald-400 via-teal-300 to-amber-300 bg-clip-text text-transparent">
                        WOSOPEDIA
                    </h1>
                    <p class="text-[10px] text-emerald-400 font-semibold tracking-wider uppercase">Portal Informasi & Potensi Wonosobo</p>
                    <p class="text-[9px] text-slate-300 mt-1 font-medium bg-slate-800/80 px-2 py-0.5 rounded border border-slate-700/50 inline-block">
                        <i class="fa-solid fa-graduation-cap text-amber-400 mr-1"></i> Projek Lintas Mapel & SSK SMAN 1 Wonosobo
                    </p>
                </div>
            </div>
            
            <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                <span class="text-xs bg-slate-800/80 border border-slate-700/50 px-3 py-1.5 rounded-full flex items-center gap-1.5 text-slate-300">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    15 Kecamatan Terpetakan
                </span>
                <span class="text-xs bg-slate-800/80 border border-slate-700/50 px-3 py-1.5 rounded-full flex items-center gap-1.5 text-slate-300">
                    <i class="fa-solid fa-cloud-sun text-amber-400"></i>
                    The Soul of Java
                </span>
            </div>
        </div>
    </header>

    <!-- Main Content Layout -->
    <main class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
        
        <!-- Welcome Jumbotron -->
        <div class="bg-gradient-to-r from-slate-900 via-emerald-950/40 to-slate-900 border border-slate-800 rounded-3xl p-6 mb-8 shadow-2xl relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-80 h-80 bg-emerald-500/10 rounded-full blur-3xl"></div>
            <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-amber-500/5 rounded-full blur-3xl"></div>
            
            <div class="relative z-10 max-w-3xl">
                <span class="bg-emerald-500/10 text-emerald-400 text-xs px-3 py-1 rounded-full font-bold border border-emerald-500/20 inline-block mb-3">
                    Eksplorasi Wilayah Interaktif
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-2">Jelajahi Potensi Bumi Dieng & Lembah Wonosobo</h2>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    Pilih salah satu wilayah kecamatan di peta interaktif di bawah ini untuk melihat detail potensi hortikultura, pariwisata, kerajinan lokal, kondisi geografis, hingga mendengarkan musik khas instrumen Bundengan.
                </p>
                
                <!-- Quick Search or Dropdown -->
                <div class="flex flex-col sm:flex-row gap-3 max-w-md">
                    <div class="relative flex-1">
                        <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                        <input id="searchKecamatan" type="text" placeholder="Cari nama kecamatan... (Contoh: Kejajar)" 
                            class="w-full bg-slate-950 border border-slate-800 rounded-xl py-2 px-10 text-xs text-white focus:outline-none focus:border-emerald-500 transition-colors">
                    </div>
                    <button id="resetViewBtn" class="bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-semibold px-4 py-2 rounded-xl border border-slate-700 transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-rotate-left"></i> Atur Ulang
                    </button>
                </div>
            </div>
        </div>

        <!-- Interactive Layout Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- LEFT COLUMN: MAP MODULES (7 COLS) -->
            <div class="lg:col-span-7 space-y-6">
                
                <!-- Map Header & View Controls -->
                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-4 flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-1.5 h-6 bg-gradient-to-b from-emerald-500 to-emerald-700 rounded-full"></div>
                        <h3 class="font-bold text-white text-sm tracking-wide flex items-center gap-2">
                            Peta Administrasi Wonosobo
                            <span class="text-xs font-normal text-slate-400" id="activeFilterBadge">(Semua Kategori)</span>
                        </h3>
                    </div>
                    
                    <!-- Toggle Controls -->
                    <div class="flex bg-slate-950 p-1 rounded-xl border border-slate-800">
                        <button id="btnSvgMap" class="px-3 py-1.5 text-xs font-bold rounded-lg transition-all flex items-center gap-1.5 bg-emerald-500 text-slate-950 shadow-md">
                            <i class="fa-solid fa-layer-group"></i> Peta Vektor
                        </button>
                        <button id="btnLeafletMap" class="px-3 py-1.5 text-xs font-semibold text-slate-400 rounded-lg hover:text-white transition-all flex items-center gap-1.5">
                            <i class="fa-solid fa-earth-asia"></i> Satelit GIS
                        </button>
                    </div>
                </div>

                <!-- Map Container Box -->
                <div class="bg-slate-900 border border-slate-800 rounded-3xl p-4 overflow-hidden shadow-xl min-h-[500px] relative flex flex-col justify-center items-center">
                    
                    <!-- Filter Badges / Category Sorter -->
                    <div class="absolute top-4 left-4 right-4 z-10 flex flex-wrap gap-2 pointer-events-auto">
                        <button onclick="filterByPotensi('all')" class="cat-filter-btn px-2.5 py-1 rounded-lg text-[10px] font-bold border transition-all bg-emerald-500/20 text-emerald-400 border-emerald-500/40">
                            ⚡ Semua Potensi
                        </button>
                        <button onclick="filterByPotensi('Wisata')" class="cat-filter-btn px-2.5 py-1 rounded-lg text-[10px] font-bold border transition-all bg-slate-950 text-slate-400 border-slate-800 hover:border-amber-500/55 hover:text-amber-400">
                            🌲 Wisata Alam & Budaya
                        </button>
                        <button onclick="filterByPotensi('Pertanian')" class="cat-filter-btn px-2.5 py-1 rounded-lg text-[10px] font-bold border transition-all bg-slate-950 text-slate-400 border-slate-800 hover:border-emerald-500/55 hover:text-emerald-400">
                            🥕 Pertanian & Perkebunan
                        </button>
                        <button onclick="filterByPotensi('Industri')" class="cat-filter-btn px-2.5 py-1 rounded-lg text-[10px] font-bold border transition-all bg-slate-950 text-slate-400 border-slate-800 hover:border-sky-500/55 hover:text-sky-400">
                            🏭 Industri & Kerajinan
                        </button>
                    </div>

                    <!-- 1. SVG Vektor Map -->
                    <div id="svgMapContainer" class="w-full h-full min-h-[450px] flex items-center justify-center transition-all duration-300">
                        <svg viewBox="0 0 600 700" class="w-full max-h-[550px] h-auto drop-shadow-[0_10px_30px_rgba(0,0,0,0.6)]" id="wonosoboSvg">
                            <!-- Background Grid Overlay Pattern -->
                            <defs>
                                <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <circle cx="2" cy="2" r="1" fill="rgba(255,255,255,0.05)" />
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" fill="url(#dots)" rx="20" />
                            
                            <!-- SVG Polygons for each Subdistrict with organic placement -->
                            <g id="regionsGroup">
                                <!-- Kejajar (North) -->
                                <polygon id="poly-kejajar" points="250,50 350,50 390,120 310,160 210,120" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#043224" />
                                
                                <!-- Garung (North-Central) -->
                                <polygon id="poly-garung" points="310,160 390,120 410,190 340,230 280,200" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#073b2d" />
                                
                                <!-- Watumalang (North-West) -->
                                <polygon id="poly-watumalang" points="140,150 210,120 280,200 240,260 160,230" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#063e32" />
                                
                                <!-- Mojotengah (Central-North) -->
                                <polygon id="poly-mojotengah" points="240,260 280,200 340,230 320,290 260,290" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#0b4c3a" />
                                
                                <!-- Wonosobo (Center) -->
                                <polygon id="poly-wonosobo" points="260,290 320,290 330,350 270,350" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#115e4a" />
                                
                                <!-- Kertek (East-Central) -->
                                <polygon id="poly-kertek" points="340,230 410,190 490,240 440,330 330,350 320,290" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#0f4a3e" />
                                
                                <!-- Sukoharjo (West) -->
                                <polygon id="poly-sukoharjo" points="60,210 140,220 160,290 90,310 50,250" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#042a1e" />
                                
                                <!-- Leksono (West-Central) -->
                                <polygon id="poly-leksono" points="160,290 270,350 250,410 160,380" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#093f31" />
                                
                                <!-- Selomerto (Central-South) -->
                                <polygon id="poly-selomerto" points="270,350 330,350 350,430 280,450 250,410" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#135242" />
                                
                                <!-- Kalikajar (East) -->
                                <polygon id="poly-kalikajar" points="440,330 490,240 540,320 490,410 390,410 350,430 330,350" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#063529" />
                                
                                <!-- Sapuran (South-East) -->
                                <polygon id="poly-sapuran" points="390,410 490,410 510,500 400,510" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#0a3227" />
                                
                                <!-- Kepil (Far South-East) -->
                                <polygon id="poly-kepil" points="400,510 510,500 530,590 420,620" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#032119" />
                                
                                <!-- Kaliwiro (South) -->
                                <polygon id="poly-kaliwiro" points="160,440 280,450 290,540 200,560" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#04271e" />
                                
                                <!-- Kalibawang (Far South) -->
                                <polygon id="poly-kalibawang" points="290,540 400,510 420,620 310,640" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#032119" />
                                
                                <!-- Wadaslintang (South-West) -->
                                <polygon id="poly-wadaslintang" points="80,410 160,440 200,560 130,650 60,550" 
                                    class="region-polygon cursor-pointer transition-all duration-300 stroke-slate-800 stroke-2 hover:stroke-amber-400 hover:fill-emerald-800/80" fill="#021f17" />
                            </g>
                            
                            <!-- Interactive Map Labels/Text (Placed precisely) -->
                            <g id="regionLabels" class="pointer-events-none fill-slate-300 font-bold text-[10px]" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                                <text x="300" y="90" text-anchor="middle">KEJAJAR</text>
                                <text x="345" y="165" text-anchor="middle">GARUNG</text>
                                <text x="210" y="185" text-anchor="middle">WATUMALANG</text>
                                <text x="290" y="245" text-anchor="middle">MOJOTENGAH</text>
                                <text x="295" y="325" text-anchor="middle" class="fill-emerald-300 text-[11px]">WONOSOBO</text>
                                <text x="400" y="275" text-anchor="middle">KERTEK</text>
                                <text x="100" y="265" text-anchor="middle">SUKOHARJO</text>
                                <text x="215" y="350" text-anchor="middle">LEKSONO</text>
                                <text x="300" y="405" text-anchor="middle">SELOMERTO</text>
                                <text x="440" y="355" text-anchor="middle">KALIKAJAR</text>
                                <text x="445" y="465" text-anchor="middle">SAPURAN</text>
                                <text x="465" y="560" text-anchor="middle">KEPIL</text>
                                <text x="230" y="505" text-anchor="middle">KALIWIRO</text>
                                <text x="355" y="580" text-anchor="middle">KALIBAWANG</text>
                                <text x="130" y="540" text-anchor="middle">WADASLINTANG</text>
                            </g>
                        </svg>
                        
                        <!-- Mini Guide overlay -->
                        <div class="absolute bottom-4 right-4 bg-slate-950/90 border border-slate-800 px-3 py-2 rounded-xl text-[10px] text-slate-400 space-y-1">
                            <div class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 bg-emerald-700 border border-emerald-500 rounded-sm inline-block"></span> Kepadatan Hijau: Wilayah Hutan/Kebun</div>
                            <div class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 bg-amber-500 rounded-sm inline-block"></span> Wilayah Terpilih</div>
                        </div>
                    </div>

                    <!-- 2. GIS Map (Hidden by default) -->
                    <div id="leafletMapContainer" class="w-full h-[500px] rounded-2xl hidden overflow-hidden border border-slate-800">
                        <div id="gisMap" class="w-full h-full"></div>
                    </div>

                </div>

                <!-- Info Cards / Quick Facts Banner -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="bg-slate-900 border border-slate-800 p-4 rounded-2xl text-center">
                        <p class="text-[10px] text-slate-400 uppercase tracking-wide font-medium">Ketinggian Rata-rata</p>
                        <p class="text-lg font-bold text-white mt-1">270 - 2.250 <span class="text-xs text-slate-400">mdpl</span></p>
                    </div>
                    <div class="bg-slate-900 border border-slate-800 p-4 rounded-2xl text-center">
                        <p class="text-[10px] text-slate-400 uppercase tracking-wide font-medium">Suhu Udara</p>
                        <p class="text-lg font-bold text-white mt-1">14°C - 26°C</p>
                    </div>
                    <div class="bg-slate-900 border border-slate-800 p-4 rounded-2xl text-center">
                        <p class="text-[10px] text-slate-400 uppercase tracking-wide font-medium">Slogan Daerah</p>
                        <p class="text-sm font-extrabold text-emerald-400 mt-2">Wonosobo ASRI</p>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: REGION POTENTIAL DETAIL HUB (5 COLS) -->
            <div id="detailSection" class="lg:col-span-5 space-y-6">
                
                <!-- Unselected State Widget -->
                <div id="unselectedWidget" class="bg-slate-900 border border-slate-800 rounded-3xl p-8 text-center min-h-[500px] flex flex-col items-center justify-center space-y-4">
                    <div class="w-20 h-20 bg-slate-950 border border-slate-800 rounded-full flex items-center justify-center text-emerald-500 shadow-inner">
                        <i class="fa-solid fa-hand-pointer text-3xl animate-bounce"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-white">Eksplorasi Dimulai</h3>
                        <p class="text-xs text-slate-400 max-w-xs mx-auto mt-1 leading-relaxed">
                            Silakan klik salah satu wilayah kecamatan di peta kiri atau masukkan nama kecamatan di kolom pencarian di atas untuk memuat potensi wilayahnya.
                        </p>
                    </div>
                    <div class="w-full border-t border-slate-800/80 pt-4 max-w-xs">
                        <p class="text-[10px] text-slate-500 font-semibold uppercase tracking-wider mb-2">Paling Sering Dicari</p>
                        <div class="flex flex-wrap justify-center gap-1.5">
                            <button onclick="selectKecamatan('kejajar')" class="text-[10px] bg-slate-950 hover:bg-emerald-500/20 hover:text-emerald-400 border border-slate-800 rounded-full px-2.5 py-1 text-slate-300 transition-all">Kejajar</button>
                            <button onclick="selectKecamatan('garung')" class="text-[10px] bg-slate-950 hover:bg-emerald-500/20 hover:text-emerald-400 border border-slate-800 rounded-full px-2.5 py-1 text-slate-300 transition-all">Garung</button>
                            <button onclick="selectKecamatan('wonosobo')" class="text-[10px] bg-slate-950 hover:bg-emerald-500/20 hover:text-emerald-400 border border-slate-800 rounded-full px-2.5 py-1 text-slate-300 transition-all">Wonosobo Kota</button>
                            <button onclick="selectKecamatan('wadaslintang')" class="text-[10px] bg-slate-950 hover:bg-emerald-500/20 hover:text-emerald-400 border border-slate-800 rounded-full px-2.5 py-1 text-slate-300 transition-all">Wadaslintang</button>
                        </div>
                    </div>
                </div>

                <!-- Selected State Widget (Hidden initially) -->
                <div id="selectedWidget" class="hidden bg-slate-900 border border-slate-800 rounded-3xl p-6 space-y-6 shadow-2xl relative overflow-hidden">
                    
                    <!-- Decorative backdrop light -->
                    <div class="absolute right-0 top-0 w-32 h-32 bg-emerald-500/10 rounded-full blur-2xl pointer-events-none"></div>

                    <!-- Header Kecamatan Info -->
                    <div class="flex items-start justify-between">
                        <div>
                            <span id="txtCategoryBadge" class="bg-emerald-500/10 text-emerald-400 text-[10px] font-bold px-2.5 py-1 rounded-full border border-emerald-500/20 inline-block mb-1">
                                PARIWISATA & PERTANIAN
                            </span>
                            <h2 id="txtKecamatanName" class="text-3xl font-black text-white tracking-tight">Kecamatan Kejajar</h2>
                            <p id="txtGeographicTag" class="text-xs text-slate-400 flex items-center gap-1.5 mt-1">
                                <i class="fa-solid fa-mountain text-emerald-500"></i> Dataran Tinggi Dieng, Lereng Sindoro
                            </p>
                        </div>
                        <div class="bg-slate-950 p-2.5 rounded-2xl border border-slate-800 flex flex-col items-center">
                            <span class="text-[9px] text-slate-500 font-bold uppercase tracking-wide">MDPL</span>
                            <span id="txtMdplVal" class="text-sm font-extrabold text-amber-400">1.400 - 2.200</span>
                        </div>
                    </div>

                    <!-- Overview Paragraph -->
                    <p id="txtDescription" class="text-xs text-slate-300 leading-relaxed border-l-2 border-emerald-500 pl-3">
                        Kecamatan Kejajar merupakan salah satu wilayah paling strategis di Jawa Tengah. Terletak di kawasan Dataran Tinggi Dieng yang terkenal sebagai sentra wisata internasional sekaligus sentra pertanian hortikultura penghasil sayur-mayur berkualitas.
                    </p>

                    <!-- Potential Progress Indicators -->
                    <div class="space-y-3 bg-slate-950 p-4 rounded-2xl border border-slate-800/80">
                        <h4 class="text-[11px] font-bold uppercase tracking-wider text-slate-400 flex items-center gap-1.5 mb-2">
                            <i class="fa-solid fa-chart-bar text-emerald-500"></i> Distribusi Sektor Potensi
                        </h4>
                        
                        <!-- Pertanian -->
                        <div>
                            <div class="flex justify-between text-[10px] font-medium mb-1">
                                <span class="text-slate-300">🥕 Pertanian & Perkebunan</span>
                                <span id="barPertanianTxt" class="text-emerald-400 font-bold">95%</span>
                            </div>
                            <div class="w-full bg-slate-800 h-1.5 rounded-full overflow-hidden">
                                <div id="barPertanian" class="bg-gradient-to-r from-emerald-500 to-emerald-400 h-full rounded-full transition-all duration-700" style="width: 95%;"></div>
                            </div>
                        </div>

                        <!-- Pariwisata -->
                        <div>
                            <div class="flex justify-between text-[10px] font-medium mb-1">
                                <span class="text-slate-300">🌲 Pariwisata Alam & Budaya</span>
                                <span id="barWisataTxt" class="text-amber-400 font-bold">90%</span>
                            </div>
                            <div class="w-full bg-slate-800 h-1.5 rounded-full overflow-hidden">
                                <div id="barWisata" class="bg-gradient-to-r from-amber-500 to-amber-400 h-full rounded-full transition-all duration-700" style="width: 90%;"></div>
                            </div>
                        </div>

                        <!-- Industri / Kerajinan -->
                        <div>
                            <div class="flex justify-between text-[10px] font-medium mb-1">
                                <span class="text-slate-300">🏭 Industri & UMKM Kreatif</span>
                                <span id="barIndustriTxt" class="text-sky-400 font-bold">45%</span>
                            </div>
                            <div class="w-full bg-slate-800 h-1.5 rounded-full overflow-hidden">
                                <div id="barIndustri" class="bg-gradient-to-r from-sky-500 to-sky-400 h-full rounded-full transition-all duration-700" style="width: 45%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Highlights & Potentials (Dynamic Items) -->
                    <div class="space-y-3">
                        <h4 class="text-xs font-bold text-white tracking-wide">💡 Potensi Wilayah Unggulan</h4>
                        <div id="highlightsContainer" class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <!-- Highligts dynamic insertion -->
                        </div>
                    </div>

                    <!-- Interactive Bundengan Synthesizer (Traditional Wonosobo Instrument) -->
                    <div class="bg-slate-950 p-4 rounded-2xl border border-slate-800 relative overflow-hidden">
                        <div class="absolute right-2 bottom-2 opacity-5">
                            <i class="fa-solid fa-music text-7xl text-white"></i>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <div>
                                <h4 class="text-xs font-bold text-emerald-400 flex items-center gap-1.5">
                                    <i class="fa-solid fa-guitar text-emerald-500"></i> Alat Musik Bundengan Digital
                                </h4>
                                <p class="text-[9px] text-slate-400 leading-relaxed mt-0.5">
                                    Mainkan nada khas musik kowangan tradisi Wonosobo!
                                </p>
                            </div>
                            <button id="synthPlayAllBtn" onclick="playAuthenticMelody()" class="bg-emerald-500 hover:bg-emerald-600 active:scale-95 text-slate-950 px-3 py-1.5 rounded-xl font-bold text-[10px] flex items-center gap-1 transition-all">
                                <i class="fa-solid fa-play"></i> Putar Lagu Khas
                            </button>
                        </div>
                        <div class="flex justify-between gap-1">
                            <button onclick="triggerNote('C4')" class="flex-1 bg-slate-900 border border-slate-800 hover:bg-emerald-500/20 active:scale-95 text-xs font-bold py-2.5 rounded-lg text-slate-300 transition-all flex flex-col items-center">
                                <span class="text-[8px] text-slate-500">Nong</span>
                                <span>C</span>
                            </button>
                            <button onclick="triggerNote('E4')" class="flex-1 bg-slate-900 border border-slate-800 hover:bg-emerald-500/20 active:scale-95 text-xs font-bold py-2.5 rounded-lg text-slate-300 transition-all flex flex-col items-center">
                                <span class="text-[8px] text-slate-500">Ging</span>
                                <span>E</span>
                            </button>
                            <button onclick="triggerNote('G4')" class="flex-1 bg-slate-900 border border-slate-800 hover:bg-emerald-500/20 active:scale-95 text-xs font-bold py-2.5 rounded-lg text-slate-300 transition-all flex flex-col items-center">
                                <span class="text-[8px] text-slate-500">Gong</span>
                                <span>G</span>
                            </button>
                            <button onclick="triggerNote('A4')" class="flex-1 bg-slate-900 border border-slate-800 hover:bg-emerald-500/20 active:scale-95 text-xs font-bold py-2.5 rounded-lg text-slate-300 transition-all flex flex-col items-center">
                                <span class="text-[8px] text-slate-500">Neng</span>
                                <span>A</span>
                            </button>
                            <button onclick="triggerNote('C5')" class="flex-1 bg-slate-900 border border-slate-800 hover:bg-emerald-500/20 active:scale-95 text-xs font-bold py-2.5 rounded-lg text-slate-300 transition-all flex flex-col items-center">
                                <span class="text-[8px] text-slate-500">Nying</span>
                                <span>C+</span>
                            </button>
                        </div>
                        <p class="text-[8px] text-slate-500 text-center mt-2 italic">Synthesized dynamically on your browser using ToneJS</p>
                    </div>

                    <!-- Footer Action Buttons (Print / Share) -->
                    <div class="flex items-center gap-2 border-t border-slate-800/80 pt-4">
                        <button onclick="exportToText()" class="flex-1 bg-slate-800 hover:bg-slate-700 text-slate-200 py-2 rounded-xl text-xs font-semibold border border-slate-700 transition-all flex items-center justify-center gap-1.5">
                            <i class="fa-solid fa-copy"></i> Salin Laporan Potensi
                        </button>
                        <button onclick="sharePotensi()" class="bg-slate-800 hover:bg-slate-700 text-slate-200 p-2 rounded-xl text-xs border border-slate-700 transition-all flex items-center justify-center">
                            <i class="fa-solid fa-share-nodes"></i>
                        </button>
                    </div>

                </div>

            </div>

        </div>

        <!-- Tourism Roadtrip Route & Culinary Section -->
        <section class="mt-12 bg-slate-900 border border-slate-800 rounded-3xl p-6 relative overflow-hidden">
            <div class="absolute right-0 bottom-0 opacity-10 pointer-events-none">
                <i class="fa-solid fa-route text-9xl"></i>
            </div>
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
                <div>
                    <h3 class="text-xl font-bold text-white flex items-center gap-2">
                        <i class="fa-solid fa-compass text-amber-500"></i> Rekomendasi Alur Perjalanan Wisata & Kuliner Wonosobo
                    </h3>
                    <p class="text-xs text-slate-400">Rencanakan petualangan Anda menjelajahi keindahan alam dari dataran rendah hingga puncak Dieng.</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative">
                <!-- Route card 1 -->
                <div class="bg-slate-950 border border-slate-800 rounded-2xl p-4 flex gap-4 items-start relative">
                    <div class="bg-emerald-500/10 text-emerald-400 p-2 rounded-lg font-bold text-sm">
                        01
                    </div>
                    <div class="space-y-1">
                        <h4 class="font-bold text-sm text-white">Gerbang Masuk & Kuliner</h4>
                        <p class="text-xs text-slate-400">Mulai dari Kota Wonosobo & Selomerto. Nikmati **Mie Ongklok** hangat, **Tempe Kemul**, serta jajanan **Carica** khas pegunungan.</p>
                    </div>
                </div>
                
                <!-- Route card 2 -->
                <div class="bg-slate-950 border border-slate-800 rounded-2xl p-4 flex gap-4 items-start relative">
                    <div class="bg-amber-500/10 text-amber-400 p-2 rounded-lg font-bold text-sm">
                        02
                    </div>
                    <div class="space-y-1">
                        <h4 class="font-bold text-sm text-white">Perkebunan Teh & Danau</h4>
                        <p class="text-xs text-slate-400">Lanjutkan perjalanan menanjak ke Kecamatan Garung. Kunjungi **Telaga Menjer** dan berjalan-jalan santai di **Perkebunan Teh Tambi**.</p>
                    </div>
                </div>

                <!-- Route card 3 -->
                <div class="bg-slate-950 border border-slate-800 rounded-2xl p-4 flex gap-4 items-start relative">
                    <div class="bg-sky-500/10 text-sky-400 p-2 rounded-lg font-bold text-sm">
                        03
                    </div>
                    <div class="space-y-1">
                        <h4 class="font-bold text-sm text-white">Negeri Di Atas Awan</h4>
                        <p class="text-xs text-slate-400">Tiba di Kecamatan Kejajar (Kawasan Dieng). Abadikan **Sikunir Golden Sunrise**, **Candi Arjuna**, dan keunikan kawah belerang.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Notification Toast Container -->
        <div id="toast" class="fixed bottom-6 right-6 z-[9999] bg-emerald-500 text-slate-950 px-4 py-3 rounded-2xl shadow-2xl flex items-center gap-2 transform translate-y-20 opacity-0 pointer-events-none transition-all duration-300">
            <span id="toastIcon"><i class="fa-solid fa-circle-check"></i></span>
            <span id="toastMsg" class="text-xs font-bold">Laporan berhasil disalin!</span>
        </div>

    </main>

    <!-- Footer of the website -->
    <footer class="border-t border-slate-800 bg-slate-950/80 mt-16 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center space-y-3">
            <p class="text-xs text-emerald-400 font-bold bg-emerald-950/30 border border-emerald-900/50 py-1.5 px-4 rounded-full inline-block">
                <i class="fa-solid fa-circle-info text-amber-400 mr-1.5"></i> Web dibuat untuk tugas projek lintas mapel dan SSK SMAN 1 Wonosobo
            </p>
            <p class="text-xs text-slate-500">
                &copy; 2026 WOSOPEDIA Kabupaten Wonosobo. Dikembangkan secara mandiri untuk promosi pariwisata dan potensi pertanian daerah.
            </p>
            <div class="flex justify-center gap-4 text-sm text-slate-400">
                <a href="#" class="hover:text-emerald-400 transition-colors"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-emerald-400 transition-colors"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="hover:text-emerald-400 transition-colors"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Wonosobo Kecamatan Potentials Database
        const KECAMATAN_DATA = {
            kejajar: {
                name: "Kecamatan Kejajar",
                category: "WISATA & PERTANIAN HORTIKULTURA",
                geographic: "Dataran Tinggi Dieng, Berbukit Sangat Terjal",
                altitude: "1.400 - 2.200 mdpl",
                description: "Terletak di dataran tinggi bagian utara Wonosobo. Kejajar merupakan magnet utama pariwisata Jawa Tengah (Kawasan Dieng) sekaligus sentra sayur-mayur, kentang, carica, dan purwaceng yang mendunia.",
                potensi: {
                    pertanian: 95,
                    wisata: 90,
                    industri: 40
                },
                highlights: [
                    { title: "Kawasan Dieng", desc: "Pusat candi hindu kuno, kawah vulkanis, dan telaga.", icon: "fa-solid fa-gopuram" },
                    { title: "Komoditas Kentang", desc: "Penghasil kentang granola berkualitas nasional.", icon: "fa-solid fa-seedling" },
                    { title: "Sikunir Sunrise", desc: "Puncak berburu fenomena 'Golden Sunrise' terindah se-Asia Tenggara.", icon: "fa-solid fa-sun" },
                    { title: "Buah Carica", desc: "Pabrikasi manisan buah pepaya gunung endemik Dieng.", icon: "fa-solid fa-lemon" }
                ],
                latlng: [-7.2486, 109.9149]
            },
            garung: {
                name: "Kecamatan Garung",
                category: "WISATA ALAM & PERKEBUNAN TEH",
                geographic: "Lereng Gunung Sindoro, Dataran Tinggi",
                altitude: "800 - 1.500 mdpl",
                description: "Pintu gerbang menuju kawasan Dieng. Garung dikaruniai tanah yang sangat subur, menjadikannya sentra kebun teh tertua serta wisata petualangan danau alam yang menakjubkan.",
                potensi: {
                    pertanian: 85,
                    wisata: 88,
                    industri: 45
                },
                highlights: [
                    { title: "Telaga Menjer", desc: "Danau vulkanik yang indah dengan wisata perahu kayuh.", icon: "fa-solid fa-water" },
                    { title: "Kebun Teh Tambi", desc: "Hamparan kebun teh peninggalan era kolonial Belanda.", icon: "fa-solid fa-leaf" },
                    { title: "Sayuran Organik", desc: "Budidaya kubis, wortel, dan bawang daun di kaki Gunung Sindoro.", icon: "fa-solid fa-carrot" },
                    { title: "Kahuripan Park", desc: "Wisata edukasi peternakan kambing etawa dan hutan pinus.", icon: "fa-solid fa-tree" }
                ],
                latlng: [-7.2941, 109.9234]
            },
            wonosobo: {
                name: "Kecamatan Wonosobo (Kota)",
                category: "JASA, KULINER & PEMERINTAHAN",
                geographic: "Lembah Pegunungan, Pusat Administrasi",
                altitude: "700 - 800 mdpl",
                description: "Sebagai ibu kota kabupaten, Kecamatan Wonosobo merupakan pusat administrasi, perdagangan, pariwisata transit, serta tempat bermuara berbagai keunikan kuliner khas nusantara.",
                potensi: {
                    pertanian: 30,
                    wisata: 75,
                    industri: 80
                },
                highlights: [
                    { title: "Mie Ongklok", desc: "Kuliner mi legendaris dengan kuah kental gurih berbumbu ebi.", icon: "fa-solid fa-bowl-food" },
                    { title: "Alun-Alun Kota", desc: "Ruang terbuka hijau terbaik dengan kuliner tempe kemul melimpah.", icon: "fa-solid fa-archway" },
                    { title: "Oleh-Oleh Khas", desc: "Sentra keripik jamur kuping, carica kemasan, dan teh Tambi.", icon: "fa-solid fa-bag-shopping" },
                    { title: "Pusat Edukasi & Jasa", desc: "Pusat akomodasi hotel, perbankan, dan kantor pemerintahan.", icon: "fa-solid fa-building-user" }
                ],
                latlng: [-7.3592, 109.9022]
            },
            kertek: {
                name: "Kecamatan Kertek",
                category: "PERTANIAN AGRO & TRANSPORTASI",
                geographic: "Celah Lereng Sindoro-Sumbing, Pintu Timur",
                altitude: "750 - 1.200 mdpl",
                description: "Kertek adalah gerbang masuk timur Kabupaten Wonosobo. Berada di persimpangan dua gunung berapi raksasa membuat kecamatan ini sangat subur dan menjadi lumbung pangan sayur mayur.",
                potensi: {
                    pertanian: 90,
                    wisata: 65,
                    industri: 60
                },
                highlights: [
                    { title: "Lumbung Sayur", desc: "Suplai utama kubis, sawi, kentang, dan cabai ke pasar Jabodetabek.", icon: "fa-solid fa-seedling" },
                    { title: "Agrowisata Lereng Sumbing", desc: "Kawasan pendakian gunung dan perkebunan hortikultura.", icon: "fa-solid fa-campground" },
                    { title: "Kerajinan Gerabah", desc: "Sentra produksi gerabah tanah liat dan anyaman bambu.", icon: "fa-solid fa-hammer" },
                    { title: "Pasar Hewan Kertek", desc: "Pusat transaksi hewan ternak terbesar di Kedu barat.", icon: "fa-solid fa-cow" }
                ],
                latlng: [-7.3694, 109.9547]
            },
            watumalang: {
                name: "Kecamatan Watumalang",
                category: "PERTANIAN & HUTAN RAKYAT",
                geographic: "Berbukit-bukit Indah, Barat Kota",
                altitude: "800 - 1.400 mdpl",
                description: "Wilayah bergelombang yang indah di sebelah barat kota Wonosobo. Watumalang memiliki potensi luar biasa di sektor kehutanan rakyat, pertanian kopi robusta, dan pesona perbukitan asri.",
                potensi: {
                    pertanian: 85,
                    wisata: 60,
                    industri: 35
                },
                highlights: [
                    { title: "Hutan Rakyat Sengon", desc: "Penghasil bahan baku kayu olahan berkualitas ekspor.", icon: "fa-solid fa-tree" },
                    { title: "Kopi Watumalang", desc: "Pengembangan perkebunan kopi robusta bercita rasa unik.", icon: "fa-solid fa-mug-hot" },
                    { title: "Bukit Krapyak", desc: "Spot camping ground asri pemandangan langsung Gunung Sumbing.", icon: "fa-solid fa-tent" },
                    { title: "Pertanian Organik", desc: "Pengembangan padi organik berkelanjutan oleh kelompok tani lokal.", icon: "fa-solid fa-wheat-awn" }
                ],
                latlng: [-7.3312, 109.8451]
            },
            mojotengah: {
                name: "Kecamatan Mojotengah",
                category: "PENDIDIKAN, SOSIO-RELIGI & CARICA",
                geographic: "Transisi Dataran Tinggi, Utara Kota",
                altitude: "800 - 1.100 mdpl",
                description: "Terkenal sebagai kawasan santri dan kota pendidikan tinggi di Wonosobo dengan adanya Universitas Sains Al-Qur'an (UNSIQ). Industri olahan rumahan berkembang pesat di sini.",
                potensi: {
                    pertanian: 60,
                    wisata: 50,
                    industri: 75
                },
                highlights: [
                    { title: "Pusat Pendidikan Islam", desc: "Pesantren-pesantren besar penghafal Al-Qur'an dan Kampus UNSIQ.", icon: "fa-solid fa-graduation-cap" },
                    { title: "Industri Carica Rumahan", desc: "Sentra UMKM pengemasan manisan carica skala mikro.", icon: "fa-solid fa-industry" },
                    { title: "Situs Sejarah Dirgantara", desc: "Prasasti dan tapak sejarah kedirgantaraan awal Indonesia.", icon: "fa-solid fa-plane-up" },
                    { title: "Pancingan Kalianget", desc: "Objek pemandian air hangat belerang alami dekat perbatasan.", icon: "fa-solid fa-hot-tub-person" }
                ],
                latlng: [-7.3243, 109.8972]
            },
            sukoharjo: {
                name: "Kecamatan Sukoharjo",
                category: "PERTANIAN, JAGUNG & ANYAMAN",
                geographic: "Lembah Aliran Serayu Barat Laut",
                altitude: "400 - 800 mdpl",
                description: "Kecamatan di bagian barat laut dengan bentang alam berlembah dialiri anakan sungai Serayu. Terkenal dengan produksi palawija khususnya jagung dan anyaman bambu.",
                potensi: {
                    pertanian: 80,
                    wisata: 40,
                    industri: 55
                },
                highlights: [
                    { title: "Sentra Jagung", desc: "Kawasan budidaya jagung pipil kering berkualitas tinggi.", icon: "fa-solid fa-seedling" },
                    { title: "Anyaman Bambu", desc: "Kerajinan kukusan, besek, dan perabotan rumah tangga berbahan bambu.", icon: "fa-solid fa-basket-shopping" },
                    { title: "Perkebunan Salak", desc: "Budidaya salak pondoh madu organik di lereng-lereng bukit.", icon: "fa-solid fa-apple-whole" },
                    { title: "Situs Arkeologi", desc: "Peninggalan sejarah purbakala peradaban kuno Serayu.", icon: "fa-solid fa-landmark" }
                ],
                latlng: [-7.2889, 109.8052]
            },
            leksono: {
                name: "Kecamatan Leksono",
                category: "SENTRA BUAH & KERAJINAN BAMBU",
                geographic: "Dataran Rendah - Sedang, Koridor Barat",
                altitude: "400 - 650 mdpl",
                description: "Dilalui aliran megah Sungai Serayu. Leksono diberkahi tanah subur beriklim sedang yang ideal bagi perkebunan buah tropis endemik serta kerajinan tangan berkualitas ekspor.",
                potensi: {
                    pertanian: 75,
                    wisata: 50,
                    industri: 80
                },
                highlights: [
                    { title: "Durian Leksono", desc: "Durian lokal unggul dengan cita rasa legit, manis dan pahit pas.", icon: "fa-solid fa-certificate" },
                    { title: "Kerajinan Bambu Kreatif", desc: "Sentra anyaman dekoratif, lampion, dan souvenir kelas dunia.", icon: "fa-solid fa-paint-brush" },
                    { title: "Wisata Arung Jeram", desc: "Pengembangan spot olahraga arung jeram (rafting) Sungai Serayu.", icon: "fa-solid fa-ship" },
                    { title: "Sentra Benih Ikan", desc: "Pusat pembenihan ikan tawar (emas, nila, mujaer) andalan Jateng.", icon: "fa-solid fa-fish" }
                ],
                latlng: [-7.3523, 109.8322]
            },
            selomerto: {
                name: "Kecamatan Selomerto",
                category: "SITUS BUDAYA & PERTANIAN PADI",
                geographic: "Dataran Lembah Aluvial Subur",
                altitude: "500 - 700 mdpl",
                description: "Merupakan pusat peradaban purba Wonosobo. Kaya akan temuan situs candi kuno Hindu-Budha serta memiliki area sawah padi irigasi teknis terluas di kabupaten.",
                potensi: {
                    pertanian: 82,
                    wisata: 55,
                    industri: 60
                },
                highlights: [
                    { title: "Situs Candi Bogang", desc: "Situs bersejarah arca Buddha raksasa peninggalan Mataram Kuno.", icon: "fa-solid fa-gopuram" },
                    { title: "Lumbung Padi", desc: "Swasembada beras lokal kelas premium dengan sistem irigasi terjaga.", icon: "fa-solid fa-wheat-awn" },
                    { title: "Kesenian Tari Embleg", desc: "Pusat pelestarian tari kuda kepang tradisional khas Wonosobo.", icon: "fa-solid fa-mask" },
                    { title: "Sentra Perikanan Air Tawar", desc: "Budidaya gurame dan kolam pemancingan wisata terpadu.", icon: "fa-solid fa-fish" }
                ],
                latlng: [-7.4042, 109.8943]
            },
            kalikajar: {
                name: "Kecamatan Kalikajar",
                category: "KEHUTANAN & PERKEBUNAN KOPI SINDORO",
                geographic: "Lereng Selatan Gunung Sumbing",
                altitude: "700 - 1.600 mdpl",
                description: "Menyajikan panorama eksotis lereng Gunung Sumbing. Memiliki potensi hebat dalam industri kayu sengon, kopi arabika sumbing, serta tanaman obat-obatan herbal.",
                potensi: {
                    pertanian: 88,
                    wisata: 60,
                    industri: 50
                },
                highlights: [
                    { title: "Kopi Arabika Sumbing", desc: "Kopi lereng gunung bercita rasa asam buah eksotis khas kopi sumbing.", icon: "fa-solid fa-mug-saucer" },
                    { title: "Wisata Pendakian", desc: "Basecamp jalur pendakian Gunung Sumbing via Garung Kalikajar.", icon: "fa-solid fa-mountain-climbing" },
                    { title: "Industri Penggergajian", desc: "Pengolahan kayu glondong rakyat menjadi playwood pabrikan.", icon: "fa-solid fa-tree" },
                    { title: "Budidaya Tembakau", desc: "Sentra tembakau hitam wangi srinthil bernilai jual tinggi.", icon: "fa-solid fa-smoking" }
                ],
                latlng: [-7.4011, 109.9672]
            },
            sapuran: {
                name: "Kecamatan Sapuran",
                category: "INDUSTRI KAYU & PERKEBUNAN RAKYAT",
                geographic: "Perbukitan Lembah Tenggara",
                altitude: "600 - 1.200 mdpl",
                description: "Sapuran berkembang sebagai pusat industri manufaktur olahan kayu sekunder. Didukung dengan hasil kebun buah duku dan cengkeh rakyat yang masif.",
                potensi: {
                    pertanian: 70,
                    wisata: 40,
                    industri: 85
                },
                highlights: [
                    { title: "Pabrik Kayu Lapis", desc: "Konsentrasi pabrik ekspor plywood terbesar di Wonosobo.", icon: "fa-solid fa-industry" },
                    { title: "Perkebunan Cengkeh", desc: "Komoditas emas hijau cengkeh berkualitas premium.", icon: "fa-solid fa-leaf" },
                    { title: "Dukuh Sapuran", desc: "Buah duku berdaging tebal, manis legendaris tanpa biji.", icon: "fa-solid fa-circle" },
                    { title: "Pasar Seni Rakyat", desc: "Pelestarian wayang suket dan orkes kesenian musik bambu.", icon: "fa-solid fa-music" }
                ],
                latlng: [-7.4523, 109.9723]
            },
            kepil: {
                name: "Kecamatan Kepil",
                category: "BUAH EXOTIS, PETERNAKAN & HUTAN",
                geographic: "Berbukit Pegunungan Batas Purworejo",
                altitude: "400 - 1.000 mdpl",
                description: "Kecamatan paling tenggara yang berbatasan dengan Kabupaten Purworejo dan Magelang. Terkenal sebagai sentra durian montong, peternakan kambing, serta madu hutan.",
                potensi: {
                    pertanian: 85,
                    wisata: 55,
                    industri: 40
                },
                highlights: [
                    { title: "Kampung Durian Kepil", desc: "Penghasil durian mentega tebal pemenang berbagai kontes lokal.", icon: "fa-solid fa-award" },
                    { title: "Madu Klanceng Liar", desc: "Budidaya madu lebah tanpa sengat yang kaya khasiat kesehatan.", icon: "fa-solid fa-jar" },
                    { title: "Peternakan Kambing", desc: "Sentra pengembangbiakan kambing peranakan etawa (PE).", icon: "fa-solid fa-cow" },
                    { title: "Situs Kalianget", desc: "Objek wisata tirta pemandian air hangat tersembunyi berkhasiat.", icon: "fa-solid fa-water-ladder" }
                ],
                latlng: [-7.5123, 110.0242]
            },
            kaliwiro: {
                name: "Kecamatan Kaliwiro",
                category: "PERKEBUNAN KELAPA & ANYAMAN",
                geographic: "Perbukitan Bergelombang Selatan",
                altitude: "300 - 600 mdpl",
                description: "Kecamatan di bagian selatan Wonosobo yang berudara hangat. Menghasilkan jutaan kelapa, komoditas aren/gula merah jawa, serta anyaman pandan tradisional.",
                potensi: {
                    pertanian: 78,
                    wisata: 45,
                    industri: 65
                },
                highlights: [
                    { title: "Gula Jawa Aren", desc: "Sentra pembuatan gula merah aren batok asli tanpa bahan kimia.", icon: "fa-solid fa-cubes-stacked" },
                    { title: "Kawasan Kelapa", desc: "Penyuplai kebutuhan kelapa parut dan minyak VCO se-Karesidenan.", icon: "fa-solid fa-circle" },
                    { title: "Anyaman Pandan", desc: "Kerajinan tikar, tas, dan dompet anyaman daun pandan duri.", icon: "fa-solid fa-wallet" },
                    { title: "Situs Watu Tumpang", desc: "Batuan geologi unik peninggalan letusan gunung berapi purba.", icon: "fa-solid fa-gem" }
                ],
                latlng: [-7.4891, 109.8453]
            },
            kalibawang: {
                name: "Kecamatan Kalibawang",
                category: "PERTANIAN BUAH & EMBUNG AIR",
                geographic: "Perbukitan Terpencil Batas Selatan",
                altitude: "300 - 700 mdpl",
                description: "Merupakan kecamatan terkecil di Wonosobo. Kalibawang unggul dengan kebun duku manis, rambutan melimpah, dan optimalisasi embung penampungan air penopang tani.",
                potensi: {
                    pertanian: 80,
                    wisata: 50,
                    industri: 30
                },
                highlights: [
                    { title: "Buah Rambutan", desc: "Sentra buah rambutan rapiah dan binjai manis rontok cangkang.", icon: "fa-solid fa-apple-whole" },
                    { title: "Embung Kalibawang", desc: "Waduk tadah hujan buatan di puncak bukit berpemandangan indah.", icon: "fa-solid fa-water" },
                    { title: "Kopi Lanang Kalibawang", desc: "Produksi kopi robusta pasca-panen sortasi biji tunggal (lanang).", icon: "fa-solid fa-mug-hot" },
                    { title: "Grup Hadroh Klasik", desc: "Kekayaan kesenian musik rebana bernuansa religi yang kental.", icon: "fa-solid fa-music" }
                ],
                latlng: [-7.5143, 109.9322]
            },
            wadaslintang: {
                name: "Kecamatan Wadaslintang",
                category: "PERIKANAN, WADUK & PLTA",
                geographic: "Perbukitan Kapur & Cekungan Waduk Besar",
                altitude: "200 - 600 mdpl",
                description: "Berbatasan langsung dengan Kebumen. Wadaslintang mendominasi wilayah selatan dengan kepemilikan Waduk Raksasa penyuplai irigasi & PLTA Jawa-Bali, serta surga pemancing.",
                potensi: {
                    pertanian: 70,
                    wisata: 85,
                    industri: 50
                },
                highlights: [
                    { title: "Waduk Wadaslintang", desc: "Salah satu waduk terbesar di Indonesia, penopang listrik & air.", icon: "fa-solid fa-water" },
                    { title: "Lubang Sewu", desc: "Wisata tebing kapur berlubang eksotis yang hanya muncul saat air surut.", icon: "fa-solid fa-gem" },
                    { title: "Keramba Nila", desc: "Budidaya ikan nila hitam/merah jaring apung melimpah.", icon: "fa-solid fa-fish-fins" },
                    { title: "Hutan Pinus Lancar", desc: "Spot foto instagramable di antara jajaran pohon pinus rindang.", icon: "fa-solid fa-tree" }
                ],
                latlng: [-7.5451, 109.7824]
            }
        };

        let map;
        let activeKecamatan = null;
        let selectedCategoryFilter = 'all';

        // Tone JS Synthesizer configuration mimicking Wonosobo's traditional Bundengan
        const synth = new Tone.PolySynth(Tone.Synth, {
            oscillator: {
                type: "triangle"
            },
            envelope: {
                attack: 0.02,
                decay: 0.4,
                sustain: 0.2,
                release: 1
            }
        }).toDestination();

        // Add a soft metal sound to simulate the pluck of duck-feather string on bamboo (Bundengan)
        const metalSynth = new Tone.MetalSynth({
            frequency: 200,
            envelope: {
                attack: 0.001,
                decay: 0.1,
                release: 0.1
            },
            resonance: 8000,
            harmonicity: 5.1
        }).toDestination();

        window.onload = function() {
            initSvgListeners();
            initLeafletMap();
            initSearch();
            
            // Default to Kejajar on first visit to highlight the feature immediately
            setTimeout(() => {
                selectKecamatan('kejajar');
            }, 600);
        };

        // Initialize SVG Map Interactions
        function initSvgListeners() {
            const polygons = document.querySelectorAll('.region-polygon');
            polygons.forEach(poly => {
                poly.addEventListener('click', function() {
                    const id = this.id.replace('poly-', '');
                    selectKecamatan(id);
                });
            });

            // View switches
            document.getElementById('btnSvgMap').addEventListener('click', () => {
                switchMapView('svg');
            });
            document.getElementById('btnLeafletMap').addEventListener('click', () => {
                switchMapView('leaflet');
            });
            document.getElementById('resetViewBtn').addEventListener('click', () => {
                resetView();
            });
        }

        // Switch map view logic
        function switchMapView(mode) {
            const svgBtn = document.getElementById('btnSvgMap');
            const leafletBtn = document.getElementById('btnLeafletMap');
            const svgContainer = document.getElementById('svgMapContainer');
            const leafletContainer = document.getElementById('leafletMapContainer');

            if (mode === 'svg') {
                svgBtn.className = "px-3 py-1.5 text-xs font-bold rounded-lg transition-all flex items-center gap-1.5 bg-emerald-500 text-slate-950 shadow-md";
                leafletBtn.className = "px-3 py-1.5 text-xs font-semibold text-slate-400 rounded-lg hover:text-white transition-all flex items-center gap-1.5";
                svgContainer.classList.remove('hidden');
                leafletContainer.classList.add('hidden');
            } else {
                leafletBtn.className = "px-3 py-1.5 text-xs font-bold rounded-lg transition-all flex items-center gap-1.5 bg-emerald-500 text-slate-950 shadow-md";
                svgBtn.className = "px-3 py-1.5 text-xs font-semibold text-slate-400 rounded-lg hover:text-white transition-all flex items-center gap-1.5";
                leafletContainer.classList.remove('hidden');
                svgContainer.classList.add('hidden');
                
                // Recalculate leaflet size to prevent grey boxes
                setTimeout(() => {
                    map.invalidateSize();
                }, 100);
            }
        }

        // Initialize Leaflet GIS Satellite Map
        function initLeafletMap() {
            // Wonosobo coordinates
            map = L.map('gisMap', {
                center: [-7.3592, 109.9022],
                zoom: 11,
                scrollWheelZoom: false
            });

            // Use carto dark map tiles to fit our sleek theme
            L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
                attribution: '&copy; OpenStreetMap contributors &copy; CARTO',
                subdomains: 'abcd',
                maxZoom: 20
            }).addTo(map);

            // Add interactive markers for all sub-districts
            Object.keys(KECAMATAN_DATA).forEach(key => {
                const kec = KECAMATAN_DATA[key];
                
                // Custom Leaflet DivIcon for premium appearance
                const customIcon = L.divIcon({
                    className: 'custom-div-icon',
                    html: `<div class="w-4 h-4 rounded-full bg-emerald-500 border-2 border-slate-950 shadow-[0_0_10px_#10b981] pulse-orange"></div>`,
                    iconSize: [16, 16],
                    iconAnchor: [8, 8]
                });

                const marker = L.marker(kec.latlng, { icon: customIcon }).addTo(map);
                marker.bindTooltip(`<b>${kec.name}</b>`, {
                    direction: 'top',
                    className: 'bg-slate-950 text-white border-slate-800 rounded-lg text-[10px]'
                });

                marker.on('click', () => {
                    selectKecamatan(key);
                });
            });
        }

        // Select Kecamatan and update UI Dashboard
        function selectKecamatan(id) {
            const data = KECAMATAN_DATA[id];
            if (!data) return;

            activeKecamatan = id;

            // Highlight chosen polygon on SVG map
            const polygons = document.querySelectorAll('.region-polygon');
            polygons.forEach(poly => {
                poly.classList.remove('fill-amber-500', 'stroke-amber-400', 'scale-[1.02]', 'drop-shadow-lg');
            });

            const activePoly = document.getElementById(`poly-${id}`);
            if (activePoly) {
                activePoly.classList.add('fill-amber-500', 'stroke-amber-400');
            }

            // Sync Leaflet map center
            if (map) {
                map.setView(data.latlng, 12, { animate: true });
            }

            // Hide unselected widget and show detail dashboard
            document.getElementById('unselectedWidget').classList.add('hidden');
            document.getElementById('selectedWidget').classList.remove('hidden');

            // Set texts
            document.getElementById('txtCategoryBadge').innerText = data.category;
            document.getElementById('txtKecamatanName').innerText = data.name;
            document.getElementById('txtGeographicTag').innerHTML = `<i class="fa-solid fa-mountain text-emerald-500"></i> ${data.geographic}`;
            document.getElementById('txtMdplVal').innerText = data.altitude;
            document.getElementById('txtDescription').innerText = data.description;

            // Animate progress bars
            setTimeout(() => {
                document.getElementById('barPertanian').style.width = data.potensi.pertanian + '%';
                document.getElementById('barPertanianTxt').innerText = data.potensi.pertanian + '%';
                
                document.getElementById('barWisata').style.width = data.potensi.wisata + '%';
                document.getElementById('barWisataTxt').innerText = data.potensi.wisata + '%';
                
                document.getElementById('barIndustri').style.width = data.potensi.industri + '%';
                document.getElementById('barIndustriTxt').innerText = data.potensi.industri + '%';
            }, 100);

            // Load highlights cards
            const highlightsContainer = document.getElementById('highlightsContainer');
            highlightsContainer.innerHTML = '';
            
            data.highlights.forEach(hl => {
                const card = document.createElement('div');
                card.className = "bg-slate-950/80 border border-slate-800/80 p-3 rounded-2xl flex gap-3 items-start hover:border-emerald-500/30 transition-colors";
                card.innerHTML = `
                    <div class="bg-emerald-500/10 text-emerald-400 p-2 rounded-xl text-xs mt-0.5">
                        <i class="${hl.icon}"></i>
                    </div>
                    <div>
                        <h5 class="font-bold text-xs text-slate-100">${hl.title}</h5>
                        <p class="text-[10px] text-slate-400 leading-normal mt-0.5">${hl.desc}</p>
                    </div>
                `;
                highlightsContainer.appendChild(card);
            });

            // Smooth scroll into detail section on mobile devices
            if (window.innerWidth < 1024) {
                document.getElementById('detailSection').scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Filter map polygons based on main selected potential category
        function filterByPotensi(category) {
            selectedCategoryFilter = category;
            const polygons = document.querySelectorAll('.region-polygon');
            const badge = document.getElementById('activeFilterBadge');

            // Style buttons to reflect selection
            const filterButtons = document.querySelectorAll('.cat-filter-btn');
            filterButtons.forEach(btn => {
                btn.className = "cat-filter-btn px-2.5 py-1 rounded-lg text-[10px] font-bold border transition-all bg-slate-950 text-slate-400 border-slate-800 hover:border-emerald-500/55 hover:text-emerald-400";
            });

            if (category === 'all') {
                badge.innerText = "(Semua Kategori)";
                polygons.forEach(poly => {
                    poly.style.fill = ""; // back to default styled css
                });
            } else {
                badge.innerText = `(Sektor ${category})`;
                
                Object.keys(KECAMATAN_DATA).forEach(key => {
                    const data = KECAMATAN_DATA[key];
                    const poly = document.getElementById(`poly-${key}`);
                    if (!poly) return;

                    // High value represents high potential in that category
                    let potVal = 0;
                    if (category === 'Wisata') potVal = data.potensi.wisata;
                    else if (category === 'Pertanian') potVal = data.potensi.pertanian;
                    else if (category === 'Industri') potVal = data.potensi.industri;

                    if (potVal >= 75) {
                        poly.style.fill = "#059669"; // Emerald light glow
                    } else if (potVal >= 50) {
                        poly.style.fill = "#065f46"; // Medium
                    } else {
                        poly.style.fill = "#1e293b"; // Muted dark
                    }
                });
            }
        }

        // Reset view to original state
        function resetView() {
            activeKecamatan = null;
            document.getElementById('searchKecamatan').value = '';
            document.getElementById('unselectedWidget').classList.remove('hidden');
            document.getElementById('selectedWidget').classList.add('hidden');
            
            const polygons = document.querySelectorAll('.region-polygon');
            polygons.forEach(poly => {
                poly.classList.remove('fill-amber-500', 'stroke-amber-400');
                poly.style.fill = "";
            });

            if (map) {
                map.setView([-7.3592, 109.9022], 11);
            }
            filterByPotensi('all');
            showToast("Tampilan web berhasil diatur ulang", "fa-solid fa-rotate-left");
        }

        // Search Input handler
        function initSearch() {
            const input = document.getElementById('searchKecamatan');
            input.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();
                
                // Find matching key
                const matchKey = Object.keys(KECAMATAN_DATA).find(key => 
                    key.includes(query) || KECAMATAN_DATA[key].name.toLowerCase().includes(query)
                );

                if (matchKey && query.length >= 2) {
                    selectKecamatan(matchKey);
                }
            });
        }

        // Play interactive Bundengan/Kowangan notes
        function triggerNote(note) {
            // Resume Audio Context dynamically
            if (Tone.context.state !== 'running') {
                Tone.start();
            }
            
            // Mix metallic plucking sound and normal oscillator tone
            synth.triggerAttackRelease(note, "8n");
            metalSynth.triggerAttack();
        }

        // Play authentic traditional wonosobo melody (Pariwisata Dieng vibe)
        function playAuthenticMelody() {
            if (Tone.context.state !== 'running') {
                Tone.start();
            }

            const now = Tone.now();
            // Traditional pentatonic slendro scale notes: C4, D4, F4, G4, A4, C5
            const melody = [
                { time: 0, note: "C4" },
                { time: 0.3, note: "F4" },
                { time: 0.6, note: "G4" },
                { time: 0.9, note: "A4" },
                { time: 1.2, note: "G4" },
                { time: 1.5, note: "C5" },
                { time: 1.8, note: "A4" },
                { time: 2.1, note: "G4" },
                { time: 2.4, note: "F4" },
                { time: 2.7, note: "C4" }
            ];

            melody.forEach(item => {
                synth.triggerAttackRelease(item.note, "8n", now + item.time);
                // Randomly trigger metal string pluck
                if (Math.random() > 0.3) {
                    metalSynth.triggerAttack(now + item.time);
                }
            });

            showToast("Memutar Musik Bundengan Digital Khas Wonosobo 🎵", "fa-solid fa-music");
        }

        // Copy regional potential report to Clipboard
        function exportToText() {
            if (!activeKecamatan) return;
            const data = KECAMATAN_DATA[activeKecamatan];

            let text = `== LAPORAN POTENSI WILAYAH: ${data.name.toUpperCase()} ==\n\n`;
            text += `Kategori: ${data.category}\n`;
            text += `Geografis: ${data.geographic}\n`;
            text += `Ketinggian: ${data.altitude}\n`;
            text += `Deskripsi: ${data.description}\n\n`;
            text += `Daftar Potensi Unggulan:\n`;
            data.highlights.forEach((h, i) => {
                text += `${i+1}. ${h.title} - ${h.desc}\n`;
            });
            text += `\nLaporan diekspor dari aplikasi WOSOPEDIA Wonosobo pada: ${new Date().toLocaleDateString('id-ID')}`;

            // Standar clipboard copy fallback for iFrame sandbox
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);

            showToast("Laporan Berhasil Disalin ke Clipboard!", "fa-solid fa-clipboard-check");
        }

        // Web Share API fallback
        function sharePotensi() {
            if (!activeKecamatan) return;
            const data = KECAMATAN_DATA[activeKecamatan];
            
            if (navigator.share) {
                navigator.share({
                    title: `Potensi Wilayah ${data.name}`,
                    text: `Ayo lihat peta potensi wilayah ${data.name} Wonosobo yang luar biasa di Wosopedia!`,
                    url: window.location.href,
                }).catch(console.error);
            } else {
                showToast("Fitur share tidak didukung browser Anda. Gunakan 'Salin Laporan' sebagai gantinya.", "fa-solid fa-circle-exclamation");
            }
        }

        // Custom UI Toast Notification (No alert allowed)
        function showToast(message, iconClass) {
            const toast = document.getElementById('toast');
            const toastMsg = document.getElementById('toastMsg');
            const toastIcon = document.getElementById('toastIcon');

            toastMsg.innerText = message;
            toastIcon.innerHTML = `<i class="${iconClass}"></i>`;

            toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
            toast.classList.add('translate-y-0', 'opacity-100');

            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
                toast.classList.remove('translate-y-0', 'opacity-100');
            }, 3000);
        }
    </script>
</body>
</html>