<?php

use Illuminate\Database\Seeder;
use App\Scholarship;
use App\User;
use App\Faq;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Scholarship::create([
            'name' => "Batch 1",
            'startStepOne' => date("2021-12-01"),
            'endStepOne' => date("2021-12-02"),
            'announceStepOne' => date("2021-12-03"),
            'startStepTwo' => date("2021-12-04"),
            'endStepTwo' => date("2021-12-05"),
            'announceStepTwo' => date("2021-12-06"),
            'onlineTest' => "https://facebook.com",
            'status' => 1,
        ]);

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@kynesia.com',
            'password' => Hash::make("superadmin123"),
            'role' => 1,
            'status' => 1,
        ]);

        Faq::create([
            'title' => "Apakah bisa untuk melakukan pendaftaran beasiswa jika bukan mahasiswa baru?",
            'content' => "Untuk saat ini beasiswa hanya diperuntukan untuk mahasiswa baru yang telah mendapatkan bukti telah diterima di program studi sarjana perguruan tinggi yang terdaftar pada tahun ajaran 2021/2022."
        ]);
        Faq::create([
            'title' => "Benefit apa saja yang didapatkan dari Kynesia Scholarship?",
            'content' => "Penerima beasiswa yang telah dinyatakan lolos proses seleksi Kynesia Scholarship 2021 akan mendapatkan beasiswa untuk 8 (delapan) semester penuh. Program beasiswa Kynesia Scholarship 2021 mencakup pada pemberian dana pendidikan dengan nilai maksimal, Rp.5.000.000 untuk program studi sosial dan humaniora dan Rp.7.500.000 untuk program studi sains dan teknologi."
        ]);
        Faq::create([
            'title' => "Apakah bisa mendaftar jika bukan mahasiswa terdaftar di Unpad, ITB dan UI?",
            'content' => "Untuk saat ini Kynesia Scholarship hanya menerima pendaftaran yang berasal dari perguruan tinggi Universitas Padjadjaran, Institut Teknologi Bandung dan Universitas Indonesia."
        ]);
        Faq::create([
            'title' => "Bagaimana cara mendapatkan informasi terkait kelulusan proses seleksi beasiswa?",
            'content' => "Informasi kelulusan proses seleksi beasiswa dapat diakses melalui website pendaftaran beasiswa. Informasi dapat dilihat pada halaman home website pendaftaran beasiswa. Informasi proses kelulusan beasiswa juga dapat diakses melalui sosial media kami yang tertera dibawah."
        ]);
        Faq::create([
            'title' => "Bagaimana cara mengetahui informasi terkait pencairan dana beasiswa?",
            'content' => "Informasi terkait pencairan dana dapat diakses melalui website portal beasiswa kami yang hanya dapat diakses oleh pendaftar yang telah lolos seluruh proses seleksi Kynesia Scholarship. Pada website portal ini juga kamu dapat mendapat informasi seputar beasiswa yang eksklusif bagi para pendaftar yang telah lolos proses seleksi Kynesia Scholarship."
        ]);
    }
}
