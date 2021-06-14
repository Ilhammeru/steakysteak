<!doctype html>

<html>

<head>
  <title>
    &Bobabar Webadmin
  </title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  <meta name="robots" content="NOINDEX,NOFOLLOW">

  <!-- START STYLES -->

  <!-- Bootstrap v5.0.0 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css?v5.0.0">

  <!-- Bootstrap Icons v1.2.1 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/icons/font/bootstrap-icons.css?v1.2.1">

  <!-- Sweetalert2 v10.3.5 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/sweetalert2/dist/sweetalert2.min.css?v10.3.5">

  <!-- Select2 v4.1.0 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/select2/dist/css/select2.min.css?v4.1.0">

  <!-- END STYLES -->

  <!-- START PLUGINS -->

  <!-- jQuery v3.5.1 -->
  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.5.1.min.js?v3.5.1"></script>

  <!-- Bootstrap v4.5.2 -->
  <script src="<?= base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js?v5.0.0"></script>

  <!-- jQuery Validate v1.19.2 -->
  <script src="<?= base_url(); ?>assets/vendor/jquery-validation/dist/jquery.validate.min.js?v1.19.2"></script>

  <!-- Sweetalert2 v10.3.5 -->
  <script src="<?= base_url(); ?>assets/vendor/sweetalert2/dist/sweetalert2.min.js?v10.3.5"></script>

  <!-- Select2 v4.1.0 -->
  <script src="<?= base_url(); ?>assets/vendor/select2/dist/js/select2.min.js?v4.1.0"></script>

  <!-- END PLUGINS -->

  <!-- General Style -->
  <style>
    html {
      scroll-behavior: smooth;
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    }

    main {
      margin-top: 5em;
    }

    .back-to-top-left {
      bottom: 1.25rem;
      position: fixed;
      left: 1.25rem;
      z-index: 1032;
    }

    #table-images {
      border-bottom: none !important;
    }

    .img-carousel,
    .img-outlets,
    .img-banner,
    .img-flavours {
      height: 5em;
      width: auto;
    }

    /* .card-body {
            padding: .50rem;
        } */

    input.success {
      background-color: #198754;
      color: white;
    }

    input.danger {
      background-color: #dc3545;
      color: white;
    }

    .btn-light:hover {
      color: #0d6efd;
    }

    .btn-light:focus {
      background-color: #0d6efd;
      color: white;
    }

    .btn-transparent {
      background-color: transparent !important;
    }

    .input-group-text {
      background-color: transparent;
      border: none;
    }

    .input-group input[type="text"] {
      border-radius: .5rem !important;
    }

    .table-sm {
      font-size: 12px;
    }

    .text-center {
      text-align: center;
    }

    .m-0 {
      margin: 0;
    }

    .label-upload {
      border: 1px solid #a0a0a0;
      box-shadow: none;
      background: #d6d3cf;
      font-size: 0.9em;
      color: black;
      padding: 0 0.5em;
      border-radius: 4px;
      margin-top: 5px;
      transition: ease .5s;
    }

    .span-file-name {
      font-size: 0.7em;
      color: #353535;
    }

    .save-flavour {
      width: 100%;
    }

    .progress-flavour {
      width: 50%;
      vertical-align: top;
      display: none;
    }

    #title {
      transition: all .4s;
    }

    .input-alert {
      box-shadow: 1px -2px 6px 6px rgba(235, 11, 11, 0.12);
      -webkit-box-shadow: 1px -2px 6px 6px rgba(235, 11, 11, 0.12);
      -moz-box-shadow: 1px -2px 6px 6px rgba(235, 11, 11, 0.12);
      border: 1px solid red;
    }

    .search-area {
      position: relative;
      width: 100%;
      height: 29px;
      background-color: #d6d6da;
      border-radius: 8px;
      padding: 0 7px;
      border: 1px solid #7f7e7e;
    }

    input.field-search-flavour,
    input.field-search-outlets {
      border: none;
      border-bottom: none;
      text-align: left;
      color: #5f5e5e;
      background: transparent;
      height: 1.5em !important;
      font-size: 0.8em !important;
    }

    input.field-search-outlets {
      border: none;
      border-bottom: none;
      text-align: left;
      color: #5f5e5e;
      background: transparent;
      height: 1.5em !important;
      font-size: 0.8em !important;
      width: 85%;
    }

    input.field-search-flavour:focus,
    input.field-search-outlets:focus {
      outline: none;
    }

    .search-icon {
      position: relative;
      /* top: -1px; */
    }

    .template-image {
      border-radius: 4px;
      width: 100px;
      height: 100px;
      background: #d6d4d4;
      align-content: center;
      text-align: center;
    }

    .label-edit {
      border: 1px solid #a0a0a0;
      box-shadow: none;
      background: #d6d3cf;
      font-size: 0.9em;
      color: black;
      padding: 0 0.5em;
      border-radius: 4px;
      margin-top: 35px;
      transition: ease .5s;
      position: relative;
    }

    .progress-edit {
      transition: ease .5s;
      position: relative;
      display: block;
      top: 40px;
      width: 100%;
    }

    .btn-edit-img:focus {
      background-color: #f8f9fa;
      box-shadow: none;
      color: black;
    }

    .bi.bi-x-circle {
      color: red;
    }

    .error-edit-image {
      font-size: 0.5em;
      color: red;
      display: none;
    }

    .table-parent {
      max-height: 31em;
      height: auto;
      overflow: scroll;
    }

    .table-parent>.table>thead tr:nth-child(1) th,
    #carousel-images-message-w>#table-images-w,
    #carousel-images-message-m>#table-images-m {
      background: white;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    #carousel-images-message-w,
    #carousel-images-message-m {
      max-height: 20em;
      height: auto;
      overflow: scroll;
      padding: 0.8em;
    }

    #carousel-images-message-w>#table-images-w>tbody>tr>td,
    #carousel-images-message-m>#table-images-m>tbody>tr>td {
      padding: 0.8em 0;
    }

    #preview-template {
      /* display: none; */
      height: 5em;
      width: auto;
      border-radius: 8px;
    }

    #progress-outlets {
      display: none;
      margin-top: 0.7em;
      width: 100%;
    }

    #progress-outlets-edit {
      display: none;
      margin-top: 0.7em;
      width: 100%;
    }

    .template-error-outlets {
      color: red;
      font-size: 0.6em;
    }

    .label-outlets {
      border: 1px solid #a0a0a0;
      box-shadow: none;
      background: #d6d3cf;
      font-size: 0.9em;
      color: black;
      padding: 0 0.5em;
      border-radius: 4px;
      transition: ease .5s;
      position: relative;
    }

    .image-edit-div {
      display: none;
    }

    .label-outlets-edit {
      margin-left: 1em;
      padding: 0 0.6em;
      border: 1px solid black;
      border-radius: 4px;
      background: #d6d3cf;
      font-size: 0.9em;
    }

    .image-field-w,
    .image-field-m {
      padding: 0.1em 0.7em;
      border: 1px solid #a0a0a0;
      border-radius: 5px;
      background-color: #d6d3cf
    }
  </style>

  <script>
    $(function() {

      $(document).on('click', '#btn-signout', function() {
        $('div#modal-placehorder').load("<?= site_url('dashboard/load_modal_sign_out'); ?>");
      });

    });
  </script>

</head>

<body>