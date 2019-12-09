<?php

$this->insert('partials/header', ['title' => $title ]);

echo $this->section('content');

$this->insert('partials/footer');