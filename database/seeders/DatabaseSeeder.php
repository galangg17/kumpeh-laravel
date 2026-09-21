<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Article;
use App\Models\Story;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Admin User
        User::firstOrCreate(
            ['email' => 'admin@desa-kumpeh.id'],
            [
                'name' => 'Administrator UMKM Kumpeh',
                'password' => Hash::make('admin123'),
            ]
        );

        // Seed Dynamic Site Settings
        $settings = [
            'site_name' => 'IKAN ASIN TANJUNG',
            'site_tagline' => 'Gurih Asli dari Dapur Jambi',
            'contact_whatsapp' => '089529628963',
            'contact_email' => 'admin@desa-kumpeh.id',
            'contact_address' => 'Tanjung RT 012/RW 000, Kelurahan Tanjung, Kec. Kumpeh Ilir, Kab. Muaro Jambi, Jambi (36371)',
            'announcement_text' => '🔥 PROMO PELUNCURAN TOKO DIGITAL: Gratis Ongkir Khusus Wilayah Jambi & Diskon Combo PIRT Terverifikasi!',
            'announcement_enabled' => '1',
            'announcement_link' => '#produk',
            'hero_badge' => '🌿 100% Olahan Ikan Rawa Gambut Jambi | Legalitas P-IRT & NIB',
            'hero_title' => 'Cita Rasa Kuliner Gurih Asli dari Dapur Tanjung Kumpeh',
            'hero_subtitle' => 'Dipelopori oleh Ibu-Ibu Kelompok Usaha TK-PPEG & Didukung Program IMPLI / IFAD / GEF / DLH Jambi. Rasakan kenikmatan keripik balado, rempeyek, dan kentang mustofa ikan asin krispi berizin edar resmi.',
            'hero_cta_primary' => 'Belanja Sekarang',
            'hero_cta_secondary' => 'Lihat Cerita Warga',
            'hero_image' => '/storage/products/keripik-ikan-asin.jpg',
            'legal_nib' => '1008260074264',
            'legal_pirt_keripik' => 'P-IRT 5021505010314-31',
            'legal_pirt_rempeyek' => 'P-IRT 5051505020314-31',
            'legal_pirt_mustofa' => 'P-IRT 5111505030314-31',
            'legal_hki' => 'DID2026090542 (DJKI Kemenkumham RI)',
            'legal_halal' => 'SiHalal BPJPH (Dalam Proses Verifikasi P3H)',
            'sop_1_title' => 'APD & Higienitas Area',
            'sop_1_desc' => 'Setiap perajin wajib mengenakan celemek, penutup kepala, masker, dan menjaga kebersihan ruangan produksi.',
            'sop_2_title' => 'Kontrol Suhu Minyak',
            'sop_2_desc' => 'Penggorengan pada suhu stabil 160–170°C untuk menghasilkan kerenyahan merata tanpa merusak kualitas bahan.',
            'sop_3_title' => 'De-oiling Spinner',
            'sop_3_desc' => 'Penggunaan peniris minyak mekanis (spinner) untuk memastikan produk bebas kadar minyak lebih & tahan lama.',
            'sop_4_title' => 'Penyegelan Kedap Udara & FIFO',
            'sop_4_desc' => 'Standing pouch di-seal rapat kedap udara dengan hand sealer, stempel tanggal EXP Date, dan metode FIFO.',
        ];

        foreach ($settings as $k => $v) {
            SiteSetting::set($k, $v);
        }

        // Seed 3 Exact Products with Official PDF Laporan & Packaging Data
        $products = [
            [
                'name' => 'Keripik Ikan Asin Balado',
                'slug' => 'keripik-ikan-asin-balado',
                'short_description' => 'Keripik krispi gurih berpadu bumbu balado pedas manis khas Tanjung Kumpeh Jambi.',
                'description' => 'Dibuat dari 500g ikan asin rawa gambut pilihan, tepung beras, dan balutan racikan bumbu balado cabai merah (150g) khas Dapur Jambi. Diolah krispi tanpa minyak sisa via mesin spinner. (Isi Bersih: 75 Gram, NIB: 1008260074264, P-IRT: 5021505010314-31, HKI: DID2026090542, Halal Indonesia).',
                'price' => 25000,
                'weight' => '75g',
                'packaging' => 'Standing Pouch Food Grade',
                'sku' => 'KMP-BAL-001',
                'stock' => 50,
                'is_featured' => true,
                'main_image' => '/storage/products/keripik-ikan-asin.jpg',
            ],
            [
                'name' => 'Rempeyek Ikan Asin',
                'slug' => 'rempeyek-ikan-asin',
                'short_description' => '100% Ikan Asin Pilihan dengan adonan kencur & wangi daun jeruk segar. Renyahnya ketagihan!',
                'description' => 'Rempeyek garing beraroma daun jeruk segar (10 lembar) dan santan murni dengan taburan 100% ikan asin rawa gambut pilihan (150g) dari Tanjung, Kumpeh Ilir, Muaro Jambi. (Isi Bersih: 75 Gram, NIB: 1008260074264, P-IRT: 5051505020314-31, HKI: DID2026090542, Halal Indonesia).',
                'price' => 23000,
                'weight' => '75g',
                'packaging' => 'Standing Pouch Food Grade',
                'sku' => 'KMP-RPY-002',
                'stock' => 45,
                'is_featured' => true,
                'main_image' => '/storage/products/rempeyek-ikan-asin.jpg',
            ],
            [
                'name' => 'Kentang Mustofa Ikan Asin',
                'slug' => 'kentang-mustofa-ikan-asin',
                'short_description' => 'Solusi lauk praktis siap santap! Stik kentang krispi dipadu serpihan ikan asin & bumbu karamel pedas.',
                'description' => 'Stik kentang krispi potongan halus dipadu serpihan ikan asin teri rawa gambut (150g) khas Tanjung Kumpeh. Dibalut bumbu karamel pedas-gurih dengan cabai rawit dan daun jeruk. Cocok untuk semua lauk & bepergian. (Berat Bersih: 100 Gram, NIB: 1008260074264, P-IRT: 5111505030314-31, HKI: DID2026090542, Halal Indonesia).',
                'price' => 28000,
                'weight' => '100g',
                'packaging' => 'Standing Pouch Food Grade',
                'sku' => 'KMP-MST-003',
                'stock' => 40,
                'is_featured' => true,
                'main_image' => '/storage/products/kentang-mustofa-ikan-asin.jpg',
            ],
        ];

        foreach ($products as $p) {
            Product::updateOrCreate(['slug' => $p['slug']], $p);
        }

        // Seed Articles based on Official IMPLI Program Report
        $articles = [
            [
                'title' => 'Program Hilirisasi IMPLI: Standardisasi SOP & Pengolahan Produk Ikan Asin Tanjung',
                'slug' => 'program-hilirisasi-impli-standardisasi-sop-pengolahan-ikan-asin-tanjung',
                'excerpt' => 'Pelaksanaan pendampingan teknis program IMPLI (Integrated Management of Peatland Landscape in Indonesia) bersama IFAD & GEF di Kelurahan Tanjung, Kumpeh Ilir.',
                'content' => "Program Hilirisasi Produk Ikan Asin merupakan bagian dari kegiatan IMPLI (Integrated Management of Peatland Landscape in Indonesia) bekerjasama dengan IFAD, GEF, Dinas Lingkungan Hidup Provinsi Jambi, dan PT Laman Cakap Kolaborasi di Kelurahan Tanjung, Kecamatan Kumpeh Ilir, Kabupaten Muaro Jambi.\n\nMelalui pendampingan ini, kelompok usaha wanita TK-PPEG Sumber Rezeki dibina menyusun SOP baku produksi: mulai dari pemilihan bahan baku ikan rawa steril, penggorengan suhu terkontrol 160-170°C, penirisan minyak via spinner, hingga pengemasan pouch kedap udara.",
                'featured_image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1200',
                'author' => 'PT Laman Cakap Kolaborasi & Tim IMPLI',
                'is_published' => true,
            ],
            [
                'title' => 'Penerbitan NIB, P-IRT Resmi BPOM, dan Fasilitasi Merek HKI Kemenkumham RI',
                'slug' => 'penerbitan-nib-p-irt-resmi-bpom-dan-fasilitasi-merek-hki',
                'excerpt' => 'Tiga produk turunan ikan asin Kumpeh kini mengantongi legalitas lengkap NIB 1008260074264, Izin Edar P-IRT resmi, serta pendaftaran Merek HKI.',
                'content' => "Untuk menjamin mutu dan kepercayaan konsumen nasional, kelompok UMKM Ikan Asin Tanjung resmi mengantongi legalitas lengkap:\n1. Nomor Induk Berusaha (NIB): 1008260074264 (KBLI 10794, 10219, 10218, 10211).\n2. Izin Edar SPP-IRT Dinkes/BPOM untuk 3 varian produk berlaku hingga 2031.\n3. Pendaftaran Merek Dagang HKI DJKI Kemenkumham RI (No: DID2026090542, Kelas 29).\n4. Rekomendasi Disperindag Provinsi Jambi & Sertifikasi Halal SiHalal BPJPH Kemenag RI.",
                'featured_image' => 'https://images.unsplash.com/photo-1556742049-0a670e4a4591?auto=format&fit=crop&q=80&w=1200',
                'author' => 'Tim Legalitas & Pendampingan Desa',
                'is_published' => true,
            ],
            [
                'title' => 'Strategi Pemasaran Digital & Diversifikasi Produk Sambal Tabur Ikan Asin',
                'slug' => 'strategi-pemasaran-digital-dan-diversifikasi-produk-sambal-tabur',
                'excerpt' => 'Analisis kompetitor marketplace dan pengembangan produk turunan baru berkonsep Gurih Asli dari Dapur Jambi.',
                'content' => "Berdasarkan hasil analisis kompetitor marketplace Shopee oleh tim ahli, produk olahan ikan asin Desa Tanjung Kumpeh diposisikan sebagai produk lokal premium harga menengah yang terjangkau. Strategi ini menghindari perang harga murah dan fokus pada cita rasa otentik, kebersihan SOP, dan kemasan modern.\n\nTim juga menyiapkan pengembangan varian turunan baru yaitu Sambal Tabur Ikan Asin Gambut untuk memperluas portofolio toko online.",
                'featured_image' => 'https://images.unsplash.com/photo-1565557623262-b51c2513a641?auto=format&fit=crop&q=80&w=1200',
                'author' => 'Tim Strategi Pemasaran Digital',
                'is_published' => true,
            ],
        ];

        foreach ($articles as $a) {
            Article::updateOrCreate(['slug' => $a['slug']], $a);
        }

        // Seed Story from Report Data
        $stories = [
            [
                'name' => 'Sopiyah J & Ibu-Ibu TK-PPEG Sumber Rezeki',
                'role' => 'Perajin & Pengurus Produksi Kelurahan Tanjung',
                'quote' => 'Gurih Asli dari Dapur Jambi. Melalui program hilirisasi IMPLI, ikan rawa gambut kami memiliki nilai tambah yang menopang ekonomi keluarga secara berkelanjutan.',
                'story' => 'Kegiatan pendampingan oleh IMPLI, IFAD, DLH Jambi, dan PT Laman Cakap Kolaborasi mengubah cara kami mengolah ikan asin dari cara tradisional menjadi produk krispi higienis berstandar P-IRT dan Halal.',
                'photo_url' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800',
                'slug' => 'ibu-sopiyah-tanjung-kumpeh',
            ]
        ];

        foreach ($stories as $s) {
            Story::updateOrCreate(['slug' => $s['slug']], $s);
        }
    }
}
