<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use Illuminate\Support\Str;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = collect([
            'laptop1' => collect([
                'name' =>'HP 14s-dq0508TU',
                'category_id' => 1,
                'harga' => 4199000,
                'foto' => 'laptop1.jpg',
                'ket' => 'Laptop tipis dan ultra-portabel ini menghadirkan kinerja yang andal. Dengan masa pakai baterai yang tahan lama, mudah untuk tetap bersosialisasi, produktif, dan terhubung dengan hal-hal penting. Layar mikro-tepi memberi Anda banyak hal untuk dilihat dengan lebih banyak layar dalam bingkai yang lebih kecil.

                Color: Natural Silver
                
                Operating System: Windows 11
                
                Prosesor: Intel? Celeron? N4120
                
                Processor Family: Intel? Celeron? processor
                
                Memory: 4 GB (single channel)
                
                Internal Storage: 256 GB PCIe? NVMe? M.2 SSD
                
                Storage Type: SSD
                
                Display: 14\" HD
                
                Graphics: Intel? UHD Graphics 600
                
                Ports: 1 USB 3.1 Gen 1 Type-C? (Data Transfer Only, 5 Gb/s signaling rate); 2 USB 3.1 Gen 1 Type-A (Data Transfer Only); 1 AC smart pin; 1 HDMI 1.4b; 1 headphone/microphone combo
                
                Pointing Device: HP Imagepad with multi-touch gesture support; Precision Touchpad Support
                
                Audio Features: Dual speakers
                
                Keyboard: Full-size, backlit, natural silver keyboard
                
                Wireless: Realtek RTL8821CE 802.11a/b/g/n/ac (1x1) Wi-Fi? and Bluetooth? 4.2 combo
                
                Power Supply Type: 45 W Smart AC power adapter
                
                Battery Weight: 180 g
                
                Dimensions Without Stand (W X D X H): 32.4 x 22.59 x 1.99 cm
                
                Berat: Starting at 1.46 kg
                
                Warranty : 2 year limited parts and labour
                
                Accidental Damage Protection: Yes
                
                Backlit keyboard: Yes
                
                Microsoft OHS 2019
                
                Camera: HP TrueVision HD Camera with integrated dual array digital microphone
                
                What\'s in the box:
                
                Unit Laptop
                
                Charger / Pengisi Daya
                
                Kartu Garansi
                
                Dus Laptop
                
                Pembelian notebook HP 14s-dq0508TU'
            ]), 
            'laptop2' => collect([
                'name' =>'ASUS GA401IV-R9R6F8W R9-4900HS',
                'category_id' => 1,
                'harga' => 8599000,
                'foto' => 'laptop2.jpg',
                'ket' => '"Spesifikasi
                Detail OS
                Windows 10 Home
                Display
                14 Inch
                Prosessor
                AMD
                Detail Prosessor
                AMD Ryzen 9-4900HS (3.0 GHz; 8M Cache; up to 4.4 GHz)
                Memory
                16GB
                Tipe Grafis
                NVIDIA GeForce RTX2060 GDDR6 6GB
                Resolusi Layar
                -
                Tipe Layar
                14-inch Non-glare WQHD (2560 x 1440) IPS-level panel, 60Hz, 100% sRGB, Pantone® Validated
                Touchscreen
                Tidak
                Audio
                2 x 2.5W speakers with Smart AMP technology 2 x 0.7W tweeter, Array Microphones With Dolby Atmos technology
                HDD
                M.2 1TB SSD PCIe
                Optical Drive Type
                -
                Networking
                ada
                Kecepatan Jaringan
                -
                Wireless
                Ada
                Wireless Protocol Type
                ada
                Bluetooth
                Intel® Wi-Fi 6 with Gig+ performance (802.11ax) Bluetooth 5.0
                Interface
                1 x USB 3.2 Gen 2 Type-C with DisplayPort™ 1.4 and Power Delivery 1 x USB 3.2 Gen 2 Type-C 2 x USB 3.2 Gen 1 Type-A 1 x HDMI 2.0b 1 x 3.5mm headphone and microphone combo jack 1 x Kensington lock
                Konsumsi Daya
                180W power adaptor
                Baterai
                -
                Dimensi Produk
                32.4cm x 22.2cm x 1.79cm
                Berat
                1.6kg
                Kelengkapan Paket
                Notebook, Adapter Kabel, Buku Manual User, Kartu Garansi
                Lain-lain
                -
                Brand
                Asus'
            ]), 
            'handphone1' => collect([
                'name' =>'Xiaomi 12 (8GB+256GB) Snapdragon® 8 Gen 1 5G 50MP Triple Kamera Layar AMOLED 6,28” 120Hz 4500mAh',
                'category_id' => 2,
                'harga' => 2900000,
                'foto' => 'hp1.jpg',
                'ket' => 'Garansi Resmi, IMEI Resmi Terdaftar di database IMEI KEMENPERIN



                Bobot 180g lebar 69,9mm.
                
                Desain geometri simpel keren dan canggih
                
                Tersedia 3 warna yaitu Purple, Blue, dan Gray
                
                
                
                50MP pro-grade kamera utama, 5MP Kamera telemakro, dan 13MP Kamera ultra-wide dan mode Potret Malam. Juga dilengkapi Ultra Night Video, Multi-Scene Ultra Night View, dan Xiaomi ProFocus.
                
                
                
                Prosesor Snapdragon® 8 Gen 1. Performa melesat dengan konsumsi daya lebih kecil. Chipset fabrikasi 4 nm canggih.
                
                
                
                Dilengkapi dengan layar AMOLED 6,28”. Sebagai bukti, DisplayMate, evaluator layar terkemuka , telah memberi peringkat A+ untuk Xiaomi 12.120Hz Refresh rate, 480Hz Touch sampling rate, 1.100 nit Kecerahan puncak, DCI-P3, TrueColor, 5.000.000:1 Rasio kontras.
                
                
                
                Audio stereo empuk bagi ruang dengar Anda. Film dan musik akan lebih seru berkat audio resik berkualitas tinggi. 
                
                
                
                Kapasitas baterai besar 4500mAh (standar). Baterai densitas energi tertinggi dalam sejarah Xiaomi, plus fitur pengisian daya yang cepat.
                
                
                
                Pengisian daya turbo 67W dengan kabel + 50W nirkabel.
                
                
                
                Spesifikasi:
                
                
                
                Dimensi
                
                Tinggi: 152,7 mm
                
                Lebar: 69,9 mm
                
                Ketebalan: 8,16 mm
                
                Berat: 180 g
                
                *Data disediakan oleh laboratorium internal
                
                
                
                Layar
                
                DotDisplay AMOLED 6,28” FHD+
                
                20:9, 2400 x 1080
                
                419 ppi
                
                Refresh rate: 120 Hz
                
                Touch sampling rate: hingga 480 Hz
                
                Lebih dari 68 miliar warna
                
                Gamut warna: DCI-P3
                
                Tampilan TrueColor: JNCD≈0.61, Delta E≈0.59
                
                Rasio kontras: 5.000.000: 1
                
                HDR10+
                
                Dolby Vision®
                
                Corning® Gorilla® Glass Victus®
                
                Sensor cahaya ambien 360°
                
                DisplayMate A+
                
                
                
                Prosesor
                
                Snapdragon® 8 Gen 1
                
                Proses fabrikasi 4 nm demi penghematan daya
                
                CPU: 
                
                1x Prime core (berbasis X2), 3,0 GHz
                
                3x Gold core (berbasis A710), 2,5 GHz
                
                4x Silver core (berbasis A510), 1,8 GHz
                
                GPU: GPU Qualcomm® Adreno™
                
                Qualcomm® AI Engine Generasi ke-7
                
                
                
                Kamera Belakang
                
                Kamera wide 50 MP
                
                Ukuran sensor 1/1,56”
                
                Ukuran piksel 1,0 μm, Super Pixel 4-in-1 2 μm
                
                f/1,88
                
                OIS
                
                Kamera ultra-wide 13 MP
                
                FOV 123°
                
                f/2,4
                
                Kamera telemakro 5 MP
                
                f/2,4
                
                AF (3cm-7cm)
                
                
                
                Fitur fotografi kamera belakang
                
                Xiaomi ProFocus (Fokus pendeteksi gerakan/mata objek/objek bergerak)
                
                Mode eksposur panjang dengan enam efek (Moving crowd, Oil painting, Neon trails, Light painting, Starry sky, Star trails)
                
                Foto kloning
                
                Mode burst
                
                Filter foto
                
                Mode malam (wide/ultra-wide)
                
                Mode 50 MP
                
                Mode dokumen
                
                Kamera AI
                
                Google Lens
                
                Bingkai film
                
                
                
                Fitur video kamera belakang
                
                Xiaomi ProFocus (Fokus pendeteksi gerakan)
                
                Ultra Night Video
                
                One-click AI cinema: Magic Zoom, Slow Shutter, Time Freeze, Night Time-lapse, Parallel World, Freeze Frame Video
                
                Video HDR
                
                Video HDR10+
                
                Time-lapse Pro
                
                Mode vlog
                
                Video ganda (kamera Selfie + kamera utama)
                
                Pengeditan video
                
                Mode pro video
                
                Format log video
                
                Video gerak lambat: 120 fps, 240 fps, 480 fps, 960 fps, 1920 fps
                
                Perekaman video kamera belakang
                
                8K 7680x4320 kecepatan 24 fps
                
                4K 3840x2160 kecepatan 60 fps
                
                4K 3840x2160 kecepatan 30 fps
                
                1080p 1920x1080 kecepatan 60 fps
                
                1080p 1920x1080 kecepatan 30 fps
                
                720p 1280x720 kecepatan 30 fps
                
                
                
                Kamera depan
                
                Kamera depan 32 MP
                
                f/2,45
                
                Fitur fotografi kamera depan
                
                Mode Selfie Night
                
                Mode burst
                
                AI Beautify
                
                Mode potret AI
                
                HDR
                
                Selfie panorama
                
                
                
                Fitur video kamera depan
                
                Video HDR
                
                Video ganda (Wide, Selfie)
                
                Video potret AI
                
                Selfie time-lapse
                
                Perekaman video kamera depan
                
                1080p 1920x1080 pada kecepatan 60 fps
                
                1080p 1920x1080 pada kecepatan 30 fps
                
                720p 1280x720 pada kecepatan 30 fps
                
                Video gerak lambat: 120 fps, 720p
                
                
                
                Baterai & Pengisian Daya
                
                Baterai 4500 mAh (standar)
                
                Pengisian daya turbo 67 W dengan kabel
                
                Pengisian daya turbo 50 W nirkabel
                
                Reverse charging 10 W nirkabel
                
                Pengisi daya 67 W
                
                USB tipe C
                
                Xiaomi AdaptiveCharge
                
                Sistem pendingin
                
                Teknologi LiquidCool (VC super besar + lembaran grafit berlapis+lapisan BN)
                
                
                
                Keamanan & Autentikasi
                
                Sensor sidik jari di layar
                
                Kunci layar dengan pengenalan wajah berbasis AI
                
                NFC
                
                Google Pay
                
                
                
                Jaringan & Konektivitas
                
                SIM ganda
                
                Frekuensi jaringan:
                
                Mendukung 5G*/4G/3G/2G
                
                5G: Mendukung NSA + SA
                
                5G: n1/n3/n5/n7/n8/n20/n28/n38/n40/n41/n66/n77/n78/n79
                
                4G: LTE FDD: B1/2/3/4/5/7/8/12/13/17/18/19/20/25/26/28/32/66
                
                4G: LTE TDD: B38/39/40/41/42/48
                
                3G: WCDMA: B1/2/4/5/6/8/19
                
                2G: GSM: 850 900 1800 1900MHz
                
                Mendukung 4x4 MIMO
                
                SIM ganda tergantung wilayah.
                
                5G tergantung wilayah dan dukungan operator setempat.
                
                
                
                Jaringan Nirkabel
                
                Bluetooth 5.2
                
                Wi-Fi 6/Wi-Fi 6E
                
                Konektivitas Wi-Fi 6 tergantung ketersediaan dukungan jaringan setempat. Fungsi dapat ditambahkan melalui OTA saat dan jika tersedia.
                
                
                
                Navigasi & Deteksi Posisi
                
                GPS: L1+L5
                
                Galileo: E1+E5a | GLONASS: G1 | Beidou| NavIC: L5
                
                Penentuan posisi berbantuan A-GPS | Kompas elektronik | Jaringan nirkabel | Jaringan data | SAP
                
                Motor getaran
                
                Motor getaran linear sumbu x
                
                
                
                Audio
                
                Speaker ganda
                
                Dolby Atmos®
                
                SOUND BY Harman Kardon
                
                
                
                Sensor
                
                Sensor jarak | Sensor cahaya ambien | Akselerometer | Giroskop | Kompas elektronik | Motor linear | IR Blaster | Sensor kedip
                
                
                
                Sistem Operasi
                
                MIUI 13, android 12
                
                
                
                Isi Kemasan
                
                Xiaomi 12/Adaptor/Kabel USB Tipe C/Alat Pembuka SIM/Casing Pelindung/Panduan Memulai Cepat/Kartu GaransiD'
            ]), 
            'handphone2' => collect([
                'name' => 'Apple iPhone 13 256GB, (PRODUCT) RED',
                'category_id' => 2,
                'harga' => 10699000,
                'foto' => 'hp2.jpg',
                'ket' => 'iPhone 13. Sistem kamera ganda paling canggih yang pernah ada di iPhone. Chip A15 Bionic yang secepat kilat. Lompatan besar dalam kekuatan baterai. Desain kokoh. Dan layar Super Retina XDR yang lebih cerah.


                Isi Kotak :
                • iPhone dengan iOS 15.
                • Kabel USB-C ke Lightning.
                • Buku Manual dan Dokumentasi lain.
                
                
                Poin-poin fitur utama
                • Layar Super Retina XDR 6,1 inci(1)
                • Mode Sinematik menambahkan kedalaman bidang yang dangkal dan pindah fokus secara otomatis di video Anda
                • Sistem kamera ganda canggih dengan kamera Wide dan Ultra Wide 12 MP;  Gaya Fotografi, Smart HDR 4, mode Malam, perekaman HDR 4K Dolby Vision
                • Kamera depan TrueDepth 12 MP dengan mode Malam, perekaman HDR 4K Dolby Vision
                • Chip A15 Bionic untuk performa secepat kilat
                • Pemutaran video hingga 19 jam(2)
                • Desain kokoh dengan Ceramic Shield
                • Level ketahanan air IP68 terdepan di industri(3)
                • iOS 15 dilengkapi berbagai fitur baru untuk melakukan lebih banyak hal dengan iPhone(4)
                • Mendukung aksesori MagSafe untuk kemudahan pemasangan dan pengisian daya nirkabel yang lebih cepat(5)
                
                
                Legal
                1. Layar memiliki sudut melengkung yang mengikuti desain lekukan yang indah, dan semua sudut ini berada di dalam bidang persegi standar. Jika diukur sebagai bentuk persegi standar, layarnya memiliki ukuran diagonal 6,06 inci. Area bidang layar berukuran lebih kecil. 
                2. Kekuatan baterai bervariasi tergantung penggunaan dan konfigurasi. Lihat apple.com/batteries untuk informasi selengkapnya.
                3. iPhone 13 tahan tumpahan, cipratan, dan debu dan diuji dalam kondisi laboratorium terkontrol dengan level IP68 menurut standar IEC 60529. Ketahanan terhadap tumpahan, cipratan, dan debu tidak berlaku secara permanen. Daya tahan mungkin berkurang akibat penggunaan sehari-hari. Jangan coba mengisi daya iPhone yang basah; lihat panduan pengguna untuk instruksi pembersihan dan pengeringan. Kerusakan akibat cairan tidak ditanggung dalam garansi. 
                4. Beberapa fitur mungkin tidak tersedia untuk semua negara atau semua wilayah. 
                5. Aksesori dijual terpisah.'
            ]),
            'video_games1' => collect([
                'name' => 'DVD GAME PC GAME Assassins Creed Odyssey + DLC + UPDATE',
                'category_id' => 3,
                'harga' => 65000,
                'foto' => 'game1.jpg',
                'ket' => 'Minimum:
                OS: Windows 7 SP1, Windows 8.1, Windows 10 (64bit versions only)
                Processor: AMD FX 6300 @ 3.8 GHz, Ryzen 3  1200, Intel Core i5 2400 @ 3.1 GHz (MORE DETAILS HERE)
                Memory: 8 GB RAM
                Graphics: AMD Radeon R9 285, NVIDIA GeForce GTX 660 (2GB VRAM with Shader Model 5.0) (MORE DETAILS HERE)
                DirectX: Version 11
                Storage: 46+ GB available space
               Additional Notes: Video Preset: Lowest (720p)
               
               Recommended:
                OS: Windows 7 SP1, Windows 8.1, Windows 10 (64bit versions only)
                Processor: AMD FX-8350 @ 4.0 GHz, Ryzen 5  1400, Intel Core i7-3770 @ 3.5 GHz or better (MORE DETAILS HERE)
                Memory: 8 GB RAM
                Graphics: AMD Radeon R9 290, NVIDIA GeForce GTX 970 (4GB VRAM with Shader Model 5.0) or better (MORE DETAILS HERE)
                Storage: 46+ GB available space
               
               
               Terpercaya dan bisa cek testimoninya disini gan/sis
               
               
               1. Cara Instalasi game ?
               * Sudah saya lengkapi didalam dvd, tips n trick, dan troubleshooting saya sediakan juga didalamnya
               
               2. Packaging kiriman ?
               *  Packing Standart kita menggunakan Amplop Coklat Dan Dilapisi kardus / Bubble Wrap
               *  Nama, Alamat, Data Pengirim diprint sesuai dengan data yang diberikan, Alamat selengkap mungkin agar paket kamu tidak ada kendala saat pengiriman
               
               3. Pengiriman ?
               * Tersedia jasa EKSPEDISI JNE / GOJEK / GRAB
               
               4. Garansi Produk ?
               * Garansi 7 hari setelah barang diterima, cek ketentuan lengkapnya di catatan kebijakan produk
               
               NOTE / HARAP DIPERHATIKAN DIBAWAH INI :
               
               - STOK SELALU READY YA, TIDAK PERLU DITANYAKAN KEMBALI
               
               - SILAHKAN PM / CHAT YA, APABILA ADA REQUEST GAME / YANG BELUM SAYA POSTING DISINI
               - SELAMAT BERBELANJA, TERIMA KASIH'
            ]),
            'pendingin_ruangan1' => collect([
                'name' => 'STAND FAN COSMOS 16 XDC / 16XDC KAKI SILANG',
                'category_id' => 4,
                'harga' => 210000,
                'foto' => 'pr1.jpg',
                'ket' => 'Cosmos 16-XDC merupakan kipas angin dari vendor kenamaan asal lokal Cosmos yang memiliki kemampuan daya hembusan angin yang kencang dan hemat energi. Kipas Cosmos 16-XDC ini juga memiliki baling-baling Super Spread, dimana hembusan angin akan menyebar lebih merata disetiap sudutnya, sehingga sirkulasi udara di rumah Anda menjadi baik, dan kesejukanlah yang akan menjadi milik Anda!

                Sebagaimana disebutkan kipas angin ini memiliki kemampuan yang hebat memberikan kesejukan yang cepat di ruangan Anda. Kipas memiliki fan blade 16 inch yang akan berputar cepat menyuguhkan angin kencang dan menyejukan. Dilengkapi dengan tiga level kecepatan yang berbeda Anda tentu dapat sesuka hati mengatur kecepatan kipas sesuai dengan yang Anda inginkan. Untuk konsumsi daya listrik yang digunakannya kipas yang memiliki suara yang halus ini hanya membutuhkan daya 46 Watt saja yang tentunya akan menghemat anggaran listrik Anda!
                
                
                Spesifikasi Produk
                Nama Produk: Kipas Angin Berdiri/Stand Fan Cosmos
                Tipe Produk: 16-XDC
                Jenis: Stand Fan
                Material Kipas: Plastik
                Diameter Kipas: 16 Inch (40 cm)
                Daya: 46 W
                Voltase: 220 V
                Warna: Putih Hijau
                Pengatur Kecepatan: 3 mode kecepatan
                Garansi Resmi: 1 Tahun & 5 Tahun Motor'
            ]),
            'tv1' => collect([
                'name' => 'Xiaomi Mi TV Q1E 55" 4K QLED Bezel-less Android 10 Digital Smart TV 4 A2 P1 Ukuran Layar 55 43 32 98 75 Inch Garansi Resmi TAM',
                'category_id' => 5,
                'harga' => 3999999,
                'foto' => 'tv1.jpg',
                'ket' => 'Xiaomi TV Q1E 55"

                Xiaomi TV Q1E 55" menggunakan resolusi 4K ultra-tinggi menawarkan gambar yang empat kali lebih jernih dibandingkan TV FHD biasanya, yang memberikan Anda gambar dengan detail tajam dan kualitas yang lebih baik*. Berkat dukungan Dolby Vision® dan HDR 10+, perangkat ini menghasilkan tingkat kecerahan dan warna yang luar biasa untuk gambar apa pun*.
                
                Xiaomi TV Q1E 55" Berkat sistem 6 speaker terbaru yang telah ditingkatkan, daya maksimal dari satu speaker dapat mencapai hingga 15W. Speaker ini mendukung Dolby Audio + DTS yang dapat memberikan Anda pengalaman sinematik yang menghanyutkan dari rumah Anda.
                
                Spesifikasi :
                
                Layar
                Tipe Layar: QLED, 4K
                Resolusi: 4k, 3840 x 2160
                Gamut warna: DCI-P3 97% (umum)
                Kedalaman warna: 1,07 miliar (8-bit + FRC)
                Refresh rate: 60Hz
                MEMC: 60Hz
                Sudut tampilan: 178°(H)/ 178°(V)
                Mendukung Dolby Vision®, HDR10+, HDR10, HLG
                
                Speaker
                Speaker (Output Suara): 15W + 15W
                Mendukung Dolby Audio™ dan DTS-HD®
                
                Sistem operasi
                Android TV™ 10
                
                Prosesor dan Penyimpanan
                MediaTek 9611
                CPU: Quad-core Cortex-A55
                GPU: ARM Mali G52
                RAM: 2GB
                Penyimpanan: 32GB
                
                Desain
                Tampilan tanpa batas, tanpa bezel
                Warna: Abu-abu
                Kaki penyangga: dua kaki penyangga dari logam
                Lampu notifikasi LED
                Tombol Mematikan Suara Mikrofon
                
                Konektivitas
                Bluetooth 5.0
                Wi-Fi 2,4Ghz/5GHz
                HDMI x 3（1 port dengan eARC)
                USB 2.0 x 2
                Composite In (AV): Ya
                Slot CI: Ya
                Ethernet (Lan): Ya
                Output Audio Digital Optik: Ya
                Jack headphone 3,5 mm x 1
                Sistem siaran: DVB-T2/C, DVB-S2
                
                Multimedia
                Format video yang didukung:
                AV1, H.265, H.264, H.263, VP8/VP9, MPEG1/2, MJPEG
                Format audio yang didukung:
                Dolby, DTS, FLAC, AAC, AC4, OGG, PCM/LPCM/ADPCM, MPEG-I/MPEG-II
                Format gambar yang didukung:
                PNG, Gif, JPG, Bmp
                
                Daya & Lingkungan pengoperasian
                Daya: 180W
                Tegangan: 100-240V, 50/60Hz
                Suhu pengoperasian: 0℃～40℃, Kelembapan 20%～80%
                Suhu penyimpanan: -15℃～45℃, Kelembapan relatif <80%'
            ]),
            'elektronik_dapur1' => collect([
                'name' => 'Magic Com Cosmos CRJ-3305 / Penanak Nasi Cosmos',
                'category_id' => 6,
                'harga' => 244970,
                'foto' => 'ed1.jpg',
                'ket' => 'Cosmos CRJ-3305  Magic Com 1.8 Liter memiliki panci anti lengket dan dapat mengukus, serta food grade sangat aman digunakan untuk makanan Anda. Membuat nasi yang diolah tetap sehat tanpa mengurangi rasa. Berkapasitas besar dan sangat cocok untuk rice cooker keluarga besar.

                Spesifikasi : 
                - Kapasitas : 1.8 Liter 
                - Daya Listrik : 400 Watt 
                - Panci Anti Lengket 
                - Food Grade 
                - Harga Ramah & Produk Wah! 
                - Garansi Resmi COSMOS 1 Tahun
                 - Kelengkapan Aksesoris * rice paddle * measuring cup * rice scoop
                
                NOTES:
                - MOHON UNTUK TANYAKAN STOCK TERLEBIH DAHULU SEBELUM ORDER
                - Wajib melakukan video/foto unboxing untuk melakukan komplain jika produk yg dikirim rusak atau tidak sesuai. Komplain produk tanpa video/foto unboxing tidak akan di proses.
                - Untuk pengiriman sudah termasuk bubble wrap, akan tetapi jika customer ingin menghindari kerusakan barang pada proses pengiriman disarankan untuk menambahkan Extra Bubble Wrap atau menambah Packing Kayu yg terdapat pada etalase produk
                - Produk yg kami kirim sudah di cek terlebih dahulu. Kami pastikan barang sudah kami cek dan kondisi 100% saat pengiriman.
                - Untuk produk elektronik atau produk pecah belah disarankan untuk menambah extra bubble wrap atau packing payu. Jika ada kerusakan produk yg dibeli tanpa penambahan bubble wrap atau packing kayu di luar tanggung jawab kami
                - Slow respon dihari Sabtu dan Minggu'
            ]),
            'speaker1' => collect([
                'name' => 'Speaker Music Box G105 G101 Laptop Komputer Audio Suara 2 sisi Multimedia',
                'category_id' => 9,
                'harga' => 25000,
                'foto' => 'speaker1.jpg',
                'ket' => 'Speaker G105
                speaker G101
                
                Selamat Datang Di TOKO Gomini1688
                
                Kami Mohon maaf jika Ada Salah 
                
                Kami Akan Mengirimkan Paket anda secepat Mungkin
                
                semoga senang Terus belanja di SHOPPEE
                
                Salam Dari Gomini1688'
            ]),
            'baterai1' => collect([
                'name' => 'BATERAI ABC BIRU AA A2 JAM DINDING',
                'category_id' => 7,
                'harga' => 2450,
                'foto' => 'baterai1.jpg',
                'ket' => 'Baterai ABC Biru size AA 1.5V
                Harga yang terlampir adalah harga per 1 pcs
                ---
                Untuk pengiriman luar pulau Jawa (Kalimantan, Maluku, Nusa Tenggara, Papua, Sulawesi, Sumatera)
                Hanya bisa menggunakan ekspedisi JNE & SICEPAT (JALUR DARAT)
                Baterai = mengandung bahan yang mudah meledak sehingga tidak bisa menggunakan JALUR UDARA
                dan estimasi pengiriman JALUR DARAT 7-14 Hari Kerja (Jangan tanya lagi koq lama ya min barang saya belum sampai? di sini kami sudah jelaskan estimasi pengiriman)
                ---
                Kami bekerja secara team (Ada admin, Bagian packing & stok)
                Jika ada kesalahan dalam pengemasan barang (Produk kurang atau tidak sesuai mohon di mengerti karena kami hanya manusia biasa yang tidak luput dari kesalahan dan kami tidak sempurna, jadi mohon kerjasamanya dalam perihal komplen & memberikan ulasan yang bijak)
                Kami akan selalu melakukan yang terbaik :)
                ---
                UNTUK KOMPLEN :
                MOHON LAMPIRKAN VIDEO UNBOXING PAKET + FOTO LABEL DARI TOKO KAMI + FOTO KEMASAN PAKET + FOTO PRODUK
                Jika ada komplenan dan tidak melampirkan sesuai prosedur diatas maka kami tidak dapat memproses komplenan tersebut.
                ---
                Mohon kerjasamanya yang baik, Terima kasih :)'
            ]),
            'lampu1' => collect([
                'name' => 'Lampu LED Trueforce Philips 30W Putih CDL (30 W Watt 30Watt)',
                'category_id' => 8,
                'harga' => 105250,
                'foto' => 'lampu1.jpg',
                'ket' => 'Lampu LED Trueforce Philips 30W Putih CDL (30 W Watt 30Watt) Bulb Industri Original Grosir Promo

                Original Philips, stok selalu ready, bisa langsung dipesan
                
                Daya: 30 Watt
                Warna Cahaya: Putih
                Umur Lampu: Hingga 10.000 Jam
                Output Cahaya: 2.700 Lumen
                
                Produk sudah dicek sebelum dikirimkan'
            ]),
            'remote_control' => collect([
                'name' => 'Remot TV tabung Sharp',
                'category_id' => 10,
                'harga' => 6683,
                'foto' => 'remote1.jpg',
                'ket' => 'Remot TV tabung Sharp bisa di gunakan di semua Merk TV Sharp'
            ]),
        ]);
        foreach($barang as $b){
            Barang::create([
                'category_id' => $b['category_id'],
                'kode_barang' => Str::random(3).'-'.collect(range(1,9))->random().collect(range(1,9))->random(),
                'nama_barang' => $b['name'],
                'slug' => Str::slug($b['name'], '-'),
                'harga' => $b['harga'],
                'stok' => collect(range(5,30))->random(),
                'foto' => $b['foto'],
                'keterangan' => $b['ket'],
            ]);
        }
    }
}