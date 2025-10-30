@extends('template_guest.layouts.app')

@section('content')
<div class="container py-5 text-center">
    <h2 class="mb-4">Tentang Aplikasi Pengaduan Warga</h2>

    <p class="mb-5">
        Aplikasi ini dibuat untuk memudahkan warga dalam menyampaikan aspirasi, keluhan,
        serta laporan mengenai fasilitas umum, pelayanan publik, dan lingkungan sekitar.
        Semua laporan akan diteruskan ke pihak terkait untuk ditindaklanjuti.
    </p>

    <!-- Tombol WhatsApp -->
    <a href="https://wa.me/6281234567890"
       target="_blank"
       class="btn btn-success btn-lg rounded-pill shadow">
        <i class="lab la-whatsapp"></i> Hubungi Kami via WhatsApp
    </a>

    <div class="mt-5">
        <img src="{{ asset('template_guest/assets/images/about.png') }}"
             alt="Tentang Kami"
             class="img-fluid rounded shadow-lg"
             style="max-width: 500px;">
    </div>
</div>
@endsection
