<?php
$alert_class = 'alert m-0';
$content = null;

// Get validation errors
if (function_exists('validation_errors')) {
    if (validation_errors()) {
        echo validation_errors('<div class="' . $alert_class . ' alert-danger">', '</div>');
    }
}

// Get success messages
if ($this->session->flashdata('alert-success')) {
    echo '<div class="row mb-3"><div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 offset-2 offset-lg-2 offset-md-2 offset-sm-2 offset-xs-2"><div class="' . $alert_class . ' alert-success">' . $this->session->flashdata('alert-success') . '</div></div></div>';
}

if ($this->session->flashdata('alert-info')) {
    echo '<div class="row mb-3"><div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 offset-2 offset-lg-2 offset-md-2 offset-sm-2 offset-xs-2"><div class="' . $alert_class . ' alert-info">' . $this->session->flashdata('alert-info') . '</div></div></div>';
}

if ($this->session->flashdata('alert-error')) {
    echo '<div class="row mb-3"><div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 offset-2 offset-lg-2 offset-md-2 offset-sm-2 offset-xs-2"><div class="' . $alert_class . ' alert-danger">' . $this->session->flashdata('alert-error') . '</div></div></div>';
}
