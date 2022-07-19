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
                'ket' => '<div>Laptop tebal dan ultra-portabel ini menghadirkan kinerja yang andal. Dengan masa pakai baterai yang tahan lama, mudah untuk tetap bersosialisasi, produktif, dan terhubung dengan hal-hal penting.&nbsp;<br><br>Layar mikro-tepi memberi Anda banyak hal untuk dilihat dengan lebih banyak layar dalam bingkai yang lebih kecil.&nbsp;<br><br>Color: Natural Silver&nbsp;<br>Operating System: Windows 11&nbsp;<br>Prosesor: Intel Celeron N4120 Processor&nbsp;<br>Family: Intel Celeron processor&nbsp;<br>Memory: 4 GB (single channel)&nbsp;<br>Internal Storage: 256 GB PCIe NVMe M.2&nbsp;<br>SSD Storage Type: SSD&nbsp;<br>Display: 14\"&nbsp;<br>HD Graphics: Intel? UHD Graphics 600&nbsp;<br>Ports: 1 USB 3.1 Gen 1 Type-C (Data Transfer Only, 5 Gb/s signaling rate) 2 USB 3.1 Gen 1 Type-A (Data Transfer Only) 1 AC smart pin 1 HDMI 1.4b;1 headphone/microphone combo Pointing&nbsp;<br>Device: HP Imagepad with multi-touch gesture support Precision Touchpad Support Audio&nbsp;<br>Features: Dual speakers&nbsp;<br>Keyboard: Full-size, backlit, natural silver keyboard&nbsp;<br>Wireless: Realtek RTL8821CE 802.11a/b/g/n/ac (1x1) Wi-Fi and Bluetooth? 4.2 combo Power Supply&nbsp;<br>Type: 45 W Smart AC power adapter Battery&nbsp;<br>Weight: 180 g Dimensions Without Stand&nbsp;<br>(W X D X H): 32.4 x 22.59 x 1.99 cm&nbsp;<br>Berat: Starting at 1.46 kg&nbsp;<br>Warranty : 2 year limited parts and labour Accidental Damage&nbsp;<br>Protection: Yes Backlit&nbsp;<br>keyboard: Yes Microsoft OHS 2019&nbsp;<br>Camera: HP TrueVision HD Camera with integrated dual array digital microphone Whats in the&nbsp;<br>box: Unit Laptop Charger / Pengisi Daya Kartu Garansi Dus Laptop Pembelian notebook HP 14s-dq0508TU</div>'
            ]), 
            'laptop2' => collect([
                'name' =>'ASUS GA401IV-R9R6F8W R9-4900HS',
                'category_id' => 1,
                'harga' => 8599000,
                'foto' => 'laptop2.jpg',
                'ket' => '<div>Spesifikasi<br>Detail OS<br>Windows 10 Home<br>Display<br>14 Inch<br>Prosessor<br>AMD<br>Detail Prosessor<br>AMD Ryzen 9-4900HS (3.0 GHz; 8M Cache; up to 4.4 GHz)<br>Memory<br>16GB<br>Tipe Grafis<br>NVIDIA GeForce RTX2060 GDDR6 6GB<br>Resolusi Layar<br>-<br>Tipe Layar<br>14-inch Non-glare WQHD (2560 x 1440) IPS-level panel, 60Hz, 100% sRGB, Pantone® Validated<br>Touchscreen<br>Tidak<br>Audio<br>2 x 2.5W speakers with Smart AMP technology 2 x 0.7W tweeter, Array Microphones With Dolby Atmos technology<br>HDD<br>M.2 1TB SSD PCIe<br>Optical Drive Type<br>-<br>Networking<br>ada<br>Kecepatan Jaringan<br>-<br>Wireless<br>Ada<br>Wireless Protocol Type<br>ada<br>Bluetooth<br>Intel® Wi-Fi 6 with Gig+ performance (802.11ax) Bluetooth 5.0<br>Interface<br>1 x USB 3.2 Gen 2 Type-C with DisplayPort™ 1.4 and Power Delivery 1 x USB 3.2 Gen 2 Type-C 2 x USB 3.2 Gen 1 Type-A 1 x HDMI 2.0b 1 x 3.5mm headphone and microphone combo jack 1 x Kensington lock<br>Konsumsi Daya<br>180W power adaptor<br>Baterai<br>-<br>Dimensi Produk<br>32.4cm x 22.2cm x 1.79cm<br>Berat<br>1.6kg<br>Kelengkapan Paket<br>Notebook, Adapter Kabel, Buku Manual User, Kartu Garansi<br>Lain-lain<br>-<br>Brand<br>Asus</div>'
            ]), 
            'handphone1' => collect([
                'name' =>'Xiaomi 12 (8GB+256GB) Snapdragon® 8 Gen 1 5G 50MP Triple Kamera Layar AMOLED 6,28” 120Hz 4500mAh',
                'category_id' => 2,
                'harga' => 2900000,
                'foto' => 'hp1.jpg',
                'ket' => '<div>Spesifikasi:<br><br>Layar<br>DotDisplay AMOLED 6,28 FHD+<br>20:9, 2400 x 1080<br>419 ppi<br>Refresh rate: 120 Hz<br>Touch sampling rate: hingga 480 Hz<br>Lebih dari 68 miliar warna<br>Gamut warna: DCI-P3<br>Tampilan TrueColor: JNCD0.61, Delta E0.59<br>Rasio kontras: 5.000.000: 1<br>HDR10+<br>Dolby Vision<br>Corning Gorilla Glass Victus<br>Sensor cahaya ambien 360<br>DisplayMate A+<br><br>Prosesor<br>Snapdragon 8 Gen 1<br>Proses fabrikasi 4 nm demi penghematan daya<br>"CPU:<br>1x Prime core (berbasis X2), 3,0 GHz<br>3x Gold core (berbasis A710), 2,5 GHz<br>4x Silver core (berbasis A510), 1,8 GHz"<br>GPU: GPU Qualcomm Adreno<br>Qualcomm AI Engine Generasi ke-7<br><br>Kamera Belakang<br>Kamera wide 50 MP<br>Ukuran sensor 1/1,56<br>Ukuran piksel 1,0 m, Super Pixel 4-in-1 2 m<br>f/1,88<br>OIS<br>Kamera ultra-wide 13 MP<br>FOV 123<br>f/2,4<br>Kamera telemakro 5 MP<br>f/2,4<br>AF (3cm-7cm)<br><br>Kamera depan<br>Kamera depan 32 MP di sisi atas layar<br>f/2,45<br>Fitur fotografi kamera depan<br>Mode Selfie Night<br>Mode burst<br>AI Beautify<br>Mode potret AI dengan bokeh dan kontrol kedalaman<br>HDR<br>Selfie panorama<br><br>Baterai &amp; Pengisian Daya<br>Baterai 4500 mAh (standar)<br>Pengisian daya turbo 67 W dengan kabel<br>Pengisian daya turbo 50 W nirkabel<br>Reverse charging 10 W nirkabel<br>Pengisi daya 67 W disertakan<br>USB tipe C<br>Xiaomi AdaptiveCharge<br>Sistem pendingin<br>Teknologi LiquidCool (VC super besar + lembaran grafit berlapis+lapisan BN)<br><br>Keamanan &amp; Autentikasi<br>Sensor sidik jari di layar<br>Kunci layar dengan pengenalan wajah berbasis AI<br>NFC<br>Mendukung Google Pay<br>*Ketersediaan berbeda-beda tergantung pasar<br><br>Jaringan &amp; Konektivitas<br>SIM ganda<br>Frekuensi jaringan:<br>Mendukung 5G*/4G/3G/2G<br>*Ketersediaan SIM ganda bisa berbeda-beda tergantung wilayah.<br>*Konektivitas 5G bisa berbeda-beda tergantung ketersediaan wilayah dan dukungan operator setempat.<br><br>Sistem Operasi<br>MIUI 13, android 12</div>'
            ]), 
            'handphone2' => collect([
                'name' => 'Apple iPhone 13 256GB, (PRODUCT) RED',
                'category_id' => 2,
                'harga' => 10699000,
                'foto' => 'hp2.jpg',
                'ket' => '<div>iPhone 13. Sistem kamera ganda paling canggih yang pernah ada di iPhone. Chip A15 Bionic yang secepat kilat. Lompatan besar dalam kekuatan baterai. Desain kokoh. Dan layar Super Retina XDR yang lebih cerah.<br><br><br>Isi Kotak :<br>• iPhone dengan iOS 15.<br>• Kabel USB-C ke Lightning.<br>• Buku Manual dan Dokumentasi lain.<br><br><br>Poin-poin fitur utama<br>• Layar Super Retina XDR 6,1 inci(1)<br>• Mode Sinematik menambahkan kedalaman bidang yang dangkal dan pindah fokus secara otomatis di video Anda<br>• Sistem kamera ganda canggih dengan kamera Wide dan Ultra Wide 12 MP;  Gaya Fotografi, Smart HDR 4, mode Malam, perekaman HDR 4K Dolby Vision<br>• Kamera depan TrueDepth 12 MP dengan mode Malam, perekaman HDR 4K Dolby Vision<br>• Chip A15 Bionic untuk performa secepat kilat<br>• Pemutaran video hingga 19 jam(2)<br>• Desain kokoh dengan Ceramic Shield<br>• Level ketahanan air IP68 terdepan di industri(3)<br>• iOS 15 dilengkapi berbagai fitur baru untuk melakukan lebih banyak hal dengan iPhone(4)<br>• Mendukung aksesori MagSafe untuk kemudahan pemasangan dan pengisian daya nirkabel yang lebih cepat(5)<br><br><br>Legal<br>1. Layar memiliki sudut melengkung yang mengikuti desain lekukan yang indah, dan semua sudut ini berada di dalam bidang persegi standar. Jika diukur sebagai bentuk persegi standar, layarnya memiliki ukuran diagonal 6,06 inci. Area bidang layar berukuran lebih kecil.&nbsp;<br>2. Kekuatan baterai bervariasi tergantung penggunaan dan konfigurasi. Lihat apple.com/batteries untuk informasi selengkapnya.<br>3. iPhone 13 tahan tumpahan, cipratan, dan debu dan diuji dalam kondisi laboratorium terkontrol dengan level IP68 menurut standar IEC 60529. Ketahanan terhadap tumpahan, cipratan, dan debu tidak berlaku secara permanen. Daya tahan mungkin berkurang akibat penggunaan sehari-hari. Jangan coba mengisi daya iPhone yang basah; lihat panduan pengguna untuk instruksi pembersihan dan pengeringan. Kerusakan akibat cairan tidak ditanggung dalam garansi.&nbsp;<br>4. Beberapa fitur mungkin tidak tersedia untuk semua negara atau semua wilayah.&nbsp;<br>5. Aksesori dijual terpisah.</div>'
            ]),
            'video_games1' => collect([
                'name' => 'DVD GAME PC GAME Assassins Creed Odyssey + DLC + UPDATE',
                'category_id' => 3,
                'harga' => 65000,
                'foto' => 'game1.jpg',
                'ket' => '<div>Minimum:<br>&nbsp;OS: Windows 7 SP1, Windows 8.1, Windows 10 (64bit versions only)<br>&nbsp;Processor: AMD FX 6300 @ 3.8 GHz, Ryzen 3&nbsp; 1200, Intel Core i5 2400 @ 3.1 GHz (MORE DETAILS HERE)<br>&nbsp;Memory: 8 GB RAM<br>&nbsp;Graphics: AMD Radeon R9 285, NVIDIA GeForce GTX 660 (2GB VRAM with Shader Model 5.0) (MORE DETAILS HERE)<br>&nbsp;DirectX: Version 11<br>&nbsp;Storage: 46+ GB available space<br>Additional Notes: Video Preset: Lowest (720p)<br><br>Recommended:<br>&nbsp;OS: Windows 7 SP1, Windows 8.1, Windows 10 (64bit versions only)<br>&nbsp;Processor: AMD FX-8350 @ 4.0 GHz, Ryzen 5&nbsp; 1400, Intel Core i7-3770 @ 3.5 GHz or better (MORE DETAILS HERE)<br>&nbsp;Memory: 8 GB RAM<br>&nbsp;Graphics: AMD Radeon R9 290, NVIDIA GeForce GTX 970 (4GB VRAM with Shader Model 5.0) or better (MORE DETAILS HERE)<br>&nbsp;Storage: 46+ GB available space<br><br><br>Terpercaya dan bisa cek testimoninya disini gan/sis<br><br><br>1. Cara Instalasi game ?<br>* Sudah saya lengkapi didalam dvd, tips n trick, dan troubleshooting saya sediakan juga didalamnya<br><br>2. Packaging kiriman ?<br>*&nbsp; Packing Standart kita menggunakan Amplop Coklat Dan Dilapisi kardus / Bubble Wrap<br>*&nbsp; Nama, Alamat, Data Pengirim diprint sesuai dengan data yang diberikan, Alamat selengkap mungkin agar paket kamu tidak ada kendala saat pengiriman<br><br>3. Pengiriman ?<br>* Tersedia jasa EKSPEDISI JNE / GOJEK / GRAB<br><br>4. Garansi Produk ?<br>* Garansi 7 hari setelah barang diterima, cek ketentuan lengkapnya di catatan kebijakan produk<br><br>NOTE / HARAP DIPERHATIKAN DIBAWAH INI :<br><br>- STOK SELALU READY YA, TIDAK PERLU DITANYAKAN KEMBALI<br><br>- SILAHKAN PM / CHAT YA, APABILA ADA REQUEST GAME / YANG BELUM SAYA POSTING DISINI<br>- SELAMAT BERBELANJA, TERIMA KASIH</div>'
            ]),
            'pendingin_ruangan1' => collect([
                'name' => 'STAND FAN COSMOS 16 XDC / 16XDC KAKI SILANG',
                'category_id' => 4,
                'harga' => 210000,
                'foto' => 'pr1.jpg',
                'ket' => '<div>Kipas Angin Berdiri Kaki Silang Stand Fan 16 Inch Cosmos 16XDC 16 XDC<br><br>Spesifikasi :<br>✓ Merk : Cosmos<br>✓ Type : 16 XDC<br>✓ Kipas Angin Berdiri / Stand Fan dengan Bilah Kipas Berukuran 16 inch<br>✓ 3 Level Kecepatan &amp; Tombol Berhenti<br>✓ Tinggi Kipas Bisa Diatur<br>✓ Tombol Model Berputar<br>✓ Superspread (Penyebaran Angin Lebih Merata)<br>✓ Garansi Motor 5 Tahun<br>✓ Daya Masukan : 46 Watt<br><br>Kipas Angin Berdiri / Stand Fan dengan bilah kipas berukuran 16 inch. Memiliki 3 level kecepatan dan tombol berhenti yang dapat digunakan sesuai dengan kebutuhan.<br><br>Desain elegan dengan tombol model berputar (Rotary Model Switch). Blade dirancang untuk menghasilkan angin sejuk yang lebih melebar dan merata ke seluruh ruangan.<br><br>Note : sebelum memesan barang, mohon konfirmasi warna terlebih dahulu ya bisa melalui chat atau diskusi. :)<br><br>Silahkan bertanya melalui diskusi produk atau langsung chat dengan kami mengenai produk ini dan lain sebagainya. Terima kasih.<br><br>Suka Harganya, Suka Ong Houseware :)</div>'
            ]),
            'tv1' => collect([
                'name' => 'Xiaomi Mi TV Q1E 55" 4K QLED Bezel-less Android 10 Digital Smart TV 4 A2 P1 Ukuran Layar 55 43 32 98 75 Inch Garansi Resmi TAM',
                'category_id' => 5,
                'harga' => 3999999,
                'foto' => 'tv1.jpg',
                'ket' => '<div>Xiaomi TV Q1E 55"<br><br>Xiaomi TV Q1E 55" menggunakan resolusi 4K ultra-tinggi menawarkan gambar yang empat kali lebih jernih dibandingkan TV FHD biasanya, yang memberikan Anda gambar dengan detail tajam dan kualitas yang lebih baik*. Berkat dukungan Dolby Vision® dan HDR 10+, perangkat ini menghasilkan tingkat kecerahan dan warna yang luar biasa untuk gambar apa pun*.<br><br>Xiaomi TV Q1E 55" Berkat sistem 6 speaker terbaru yang telah ditingkatkan, daya maksimal dari satu speaker dapat mencapai hingga 15W. Speaker ini mendukung Dolby Audio + DTS yang dapat memberikan Anda pengalaman sinematik yang menghanyutkan dari rumah Anda.<br><br>Spesifikasi :<br><br>Layar<br>Tipe Layar: QLED, 4K<br>Resolusi: 4k, 3840 x 2160<br>Gamut warna: DCI-P3 97% (umum)<br>Kedalaman warna: 1,07 miliar (8-bit + FRC)<br>Refresh rate: 60Hz<br>MEMC: 60Hz<br>Sudut tampilan: 178°(H)/ 178°(V)<br>Mendukung Dolby Vision®, HDR10+, HDR10, HLG<br><br>Speaker<br>Speaker (Output Suara): 15W + 15W<br>Mendukung Dolby Audio™ dan DTS-HD®<br><br>Sistem operasi<br>Android TV™ 10<br><br>Prosesor dan Penyimpanan<br>MediaTek 9611<br>CPU: Quad-core Cortex-A55<br>GPU: ARM Mali G52<br>RAM: 2GB<br>Penyimpanan: 32GB<br><br>Desain<br>Tampilan tanpa batas, tanpa bezel<br>Warna: Abu-abu<br>Kaki penyangga: dua kaki penyangga dari logam<br>Lampu notifikasi LED<br>Tombol Mematikan Suara Mikrofon<br><br>Konektivitas<br>Bluetooth 5.0<br>Wi-Fi 2,4Ghz/5GHz<br>HDMI x 3（1 port dengan eARC)<br>USB 2.0 x 2<br>Composite In (AV): Ya<br>Slot CI: Ya<br>Ethernet (Lan): Ya<br>Output Audio Digital Optik: Ya<br>Jack headphone 3,5 mm x 1<br>Sistem siaran: DVB-T2/C, DVB-S2<br><br>Multimedia<br>Format video yang didukung:<br>AV1, H.265, H.264, H.263, VP8/VP9, MPEG1/2, MJPEG<br>Format audio yang didukung:<br>Dolby, DTS, FLAC, AAC, AC4, OGG, PCM/LPCM/ADPCM, MPEG-I/MPEG-II<br>Format gambar yang didukung:<br>PNG, Gif, JPG, Bmp<br><br>Daya &amp; Lingkungan pengoperasian<br>Daya: 180W<br>Tegangan: 100-240V, 50/60Hz<br>Suhu pengoperasian: 0℃～40℃, Kelembapan 20%～80%<br>Suhu penyimpanan: -15℃～45℃, Kelembapan relatif &lt;80%</div>'
            ]),
            'elektronik_dapur1' => collect([
                'name' => 'Magic Com Cosmos CRJ-3305 / Penanak Nasi Cosmos',
                'category_id' => 6,
                'harga' => 244970,
                'foto' => 'ed1.jpg',
                'ket' => '<div>Membuat nasi pulen menjadi lebih mudah dengan menggunakan rice cooker Cosmos terbaru ini. Memiliki desain yang lucu dan menggemaskan membuat Cosmos CRJ3305 – Magic Com 1.8 Liter 3in1 400 Watt melengkapi keseruan Anda dalam membuat nasi hangat dan lembut untuk keluarga tercinta.<br>cosmos CRJ3305 – Magic Com 1.8 Liter 3in1 400 Watt Desain spesial dengan 6 pilihan designyang menggemaskan membuat perlengkapan dapur anda semakin komplit dengan kehadiran Cosmos CRJ3305 – Magic Com 1.8 Litter 3in1 400 Watt. Membuat nasi, mengukus atau menghangatkannya menjadi lebih mudah dengan menggunakannya karena lapisan panci dalam yang terbuat dari bahan stainless steel membuat hasilnya menjadi sempurna, anti lengket dan menghasilkan nasi dengan tekstur yang lembut.<br><br>Kapasitas : 1.8 Liter<br>Garansi : 1 Tahun Service<br>Innerpot Terbuat dari Bahan Non-stick<br>6 pilihan design<br>Watt rendah hanya 400 Watt<br><br>Spesifikasi<br>Nama Produk : Cosmos Magic Com<br>Tipe : CRJ-3305<br>Bahan Material : Plastik<br>Panjang Kabel : 1 Meter<br>Kapasitas : 1.8 Liter<br>Daya<br>Memasak : 400 Watt<br>Menghangatkan : 45 Watt<br>Tegangan : 220 Volt / 50 Hz<br>Dimensi (P x L x T) : 30 cm x 30 cm x 30 cm<br>Berat : 5 Kg<br>Warna : Ungu muda</div>'
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
                'ket' => '<div>Baterai ABC Biru size AA 1.5V<br>Harga yang terlampir adalah harga per 1 pcs<br>---<br>Untuk pengiriman luar pulau Jawa (Kalimantan, Maluku, Nusa Tenggara, Papua, Sulawesi, Sumatera)<br>Hanya bisa menggunakan ekspedisi JNE &amp; SICEPAT (JALUR DARAT)<br>Baterai = mengandung bahan yang mudah meledak sehingga tidak bisa menggunakan JALUR UDARA<br>dan estimasi pengiriman JALUR DARAT 7-14 Hari Kerja (Jangan tanya lagi koq lama ya min barang saya belum sampai? di sini kami sudah jelaskan estimasi pengiriman)<br>---<br>Kami bekerja secara team (Ada admin, Bagian packing &amp; stok)<br>Jika ada kesalahan dalam pengemasan barang (Produk kurang atau tidak sesuai mohon di mengerti karena kami hanya manusia biasa yang tidak luput dari kesalahan dan kami tidak sempurna, jadi mohon kerjasamanya dalam perihal komplen &amp; memberikan ulasan yang bijak)<br>Kami akan selalu melakukan yang terbaik :)<br>---<br>UNTUK KOMPLEN :<br>MOHON LAMPIRKAN VIDEO UNBOXING PAKET + FOTO LABEL DARI TOKO KAMI + FOTO KEMASAN PAKET + FOTO PRODUK<br>Jika ada komplenan dan tidak melampirkan sesuai prosedur diatas maka kami tidak dapat memproses komplenan tersebut.<br>---<br>Mohon kerjasamanya yang baik, Terima kasih :)</div>'
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