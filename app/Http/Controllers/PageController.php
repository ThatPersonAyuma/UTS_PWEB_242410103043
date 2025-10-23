<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }
    protected $welcomes = [
        "Selamat datang, semangat belajar hari ini!",
        "Halo! Siap menjelajahi ilmu baru?",
        "Hai! Semoga harimu produktif dan menyenangkan!",
        "Belajar itu menyenangkan, ayo mulai!",
        "Good day! Jangan lupa senyum sambil belajar!",
        "Kamu luar biasa! Saatnya menambah pengetahuan!",
        "Semangat! Setiap langkah kecil membawa hasil besar!",
        "Selamat datang kembali! Hari ini belajar apa nih?"
    ];

    public function index()
    {
        // Ambil satu random welcome message
        $randomWelcome = $this->welcomes[array_rand($this->welcomes)];

        // Kirim ke view
        return view('dashboard', [
            'welcomeMessage' => $randomWelcome
        ]);
    }
    public function dashboard()
    {
        // ambil data dari model / dummy
        $data = [
            'title' => 'Selamat Datang di Website Kami',
            'description' => 'Website ini dibuat menggunakan Laravel.'
        ];
        $welcome = $this->welcomes[array_rand($this->welcomes)];
        $userID = session('userID');
        $name = session('user')['name'];
        return view('dashboard', compact('userID', 'welcome', 'name'));
    }
    public function course()
    {
        $subCourses = [
            (object)[
                'subCode' => 'AP1-01',
                'subTitle' => 'Pengenalan Algoritma'
            ],
            (object)[
                'subCode' => 'AP1-02',
                'subTitle' => 'Pengenalan Python'
            ],
            (object)[
                'subCode' => 'AP1-03',
                'subTitle' => 'Struktur Kendali'
            ],
            (object)[
                'subCode' => 'AP1-04',
                'subTitle' => 'Perulangan & Koleksi Data'
            ],
            (object)[
                'subCode' => 'AP1-05',
                'subTitle' => 'Fungsi dan Modularisasi'
            ],
            (object)[
                'subCode' => 'AP1-06',
                'subTitle' => 'Penerapan Algoritma'
            ],
        ];
        $courses = [(object)[
            'courseCode' => 'CSE-101',
            'title' => 'Algoritma dan Pemrograman 1',
            'description' => 'Pengenalan dasar-dasar algoritma dan pemrograman',
            'progress' => 65,
            'subCourses' => $subCourses,
        ],];
        $userID = session('userID');
        $articles = [
            ['title' => 'Tips Belajar Algoritma', 'excerpt' => 'Cara memahami algoritma dengan cepat...', 'date' => '23 Okt 2025'],
            ['title' => 'Python: Fungsi & Modularisasi', 'excerpt' => 'Pelajari bagaimana membagi kode menjadi fungsi...', 'date' => '21 Okt 2025'],
            ['title' => 'Perulangan dan Koleksi Data', 'excerpt' => 'Ringkasan materi perulangan di Python...', 'date' => '20 Okt 2025'],
            ['title' => 'Problem Solving 101', 'excerpt' => 'Tips menghadapi soal logika dan algoritma...', 'date' => '19 Okt 2025'],
        ];
        $modules = [
            ['title' => 'Algoritma Dasar', 'icon' => 'fa-brain'],
            ['title' => 'Python Pemula', 'icon' => 'fa-code'],
            ['title' => 'Matematika Diskrit', 'icon' => 'fa-square-root-alt'],
            ['title' => 'Struktur Data', 'icon' => 'fa-database'],
            ['title' => 'Machine Learning', 'icon' => 'fa-robot'],
            ['title' => 'Logika & Problem Solving', 'icon' => 'fa-lightbulb'],
        ];
        return view('course', compact('courses', 'userID', 'articles', 'modules'));
    }
    public function profile(){
        $stats = [
            'courses' => 5,
            'modules' => 23,
            'articles' => 2,
            'progress' => 68,
        ];
        $student = [
            'id' => session('userID'),
            'name' => 'Aditya Bayu Pratama',
            'email' => 'aditya@example.com',
            'username' => 'adityabayu',
            'pw' => 'abcd1234',
            'photo' => 'https://i.pravatar.cc/200?img=15',
            'bio' => 'Mahasiswa yang pengen jago Programming tapi males ngoding',
            'interest' => ['Rust', 'C', 'C++', 'Tomboy'],
            'joined_at' => '2023-09-14',
            'completed_courses' => 12,
            'total_articles' => 5,
            'rank' => 'Expert Learner',
            'createdAt' => "2025-10-23 14:30:15",
            'lastActive' => date("Y-m-d H:i:s",time() + 7 * 60 * 60),
            'gender' => 'L',
            'phoneNumber' => '088899123456',
            'birthDate' => null,
        ];
        return view('profile', compact('stats', 'student'));
    }
}