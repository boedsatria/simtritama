<!DOCTYPE html>
<html lang="en" id="htmls" class="<?= get_user_themes($this->session->userdata('userlogin')['id_user'])['theme']; ?>">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="<?= base_url(); ?>dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Management Project dan Keuangan PT.BMT">
    <meta name="keywords" content="Sistem informasi BMT">
    <meta name="author" content="SATRIACORP.ID">
    <title>Dashboard</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= base_url(); ?>dist/css/app.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>dist/css/style.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->