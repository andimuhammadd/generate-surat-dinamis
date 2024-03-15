<?php
require 'vendor/autoload.php';

use PhpOffice\PhpWord\TemplateProcessor;

// Inisialisasi TemplateProcessor dengan dokumen template
$templateProcessor = new TemplateProcessor('SURAT.docx');

// Mengambil data yang dikirim dari formulir
$tanggal_generate = date('d-m-Y'); // Format: Tahun-Bulan-Tanggal
$nama_pengaju = $_POST['nama_pengaju'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_berakhir = $_POST['tanggal_berakhir'];
$jabatan = $_POST['jabatan'];
$alasan = $_POST['alasan'];

// Mengganti teks dalam dokumen template dengan data yang diterima dari formulir
$templateProcessor->setValue('nama_pengaju', $nama_pengaju);
$templateProcessor->setValue('tanggal_generate', $tanggal_generate);
$templateProcessor->setValue('tanggal_mulai', $tanggal_mulai);
$templateProcessor->setValue('tanggal_berakhir', $tanggal_berakhir);
$templateProcessor->setValue('jabatan', $jabatan);
$templateProcessor->setValue('alasan', $alasan);

// Simpan hasil penggantian ke dalam dokumen baru
$outputFileName = 'surat_pengajuan_cuti.docx';
$templateProcessor->saveAs($outputFileName);

// Set header untuk mengirim dokumen Word sebagai file yang akan didownload
header('Content-Type: application/octet-stream');
header("Content-Disposition: attachment; filename=$outputFileName");

// Keluarkan konten dokumen Word yang dihasilkan ke output
readfile($outputFileName);

// Hapus dokumen sementara yang telah dibuat
unlink($outputFileName);
