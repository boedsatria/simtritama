<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="<?= base_url() ?>dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Error Page</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= base_url() ?>dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main">
    <div class="container">
        <!-- BEGIN: Error Page -->
        <div class="error-page flex flex-col lg:flex-row items-center justify-center h-screen text-center lg:text-left">
            <div class="-intro-x lg:mr-20">
                <img alt="Rubick Tailwind HTML Admin Template" class="h-48 lg:h-auto" src="<?= base_url() ?>dist/images/error-illustration.svg">
            </div>
            <div class="text-white mt-10 lg:mt-0">
                <div class="intro-x text-8xl font-medium">404</div>
                <div class="intro-x text-xl lg:text-3xl font-medium mt-5">Oops. Halaman yang anda cari tidak ditemukan.</div>
                <div class="intro-x text-lg mt-3">Halaman yang anda tuju mungkin belum tersedia atau anda tidak memiliki hak akses.</div>
                <button class="intro-x btn py-3 px-4 text-white border-white dark:border-dark-5 dark:text-gray-300 mt-10" onclick="window.location.href='<?= base_url() ?>'">Kembali ke halaman utama</button>
            </div>
        </div>
        <!-- END: Error Page -->
    </div>
    <!-- BEGIN: JS Assets-->
    <script src="<?= base_url() ?>dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>