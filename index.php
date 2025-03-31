<?php

class Pdf {
    public null|string $path;
    public null|string $fileName;
    public null|string $userOnCertificate;
    public function __construct() {
        $this->path = null;
        $this->fileName = null;
        $this->userOnCertificate = null;
    }
}


class PdfBuilder {
    public Pdf $pdf;

    function __construct()
    {
        $this->pdf = new Pdf();
    }

    public function setPath($path) {
        $this->pdf->path = $path;
        return $this;
    }

    public function setFileName($fileName) {
        $this->pdf->fileName = $fileName;
        return $this;
    }

    public function setUserOnCertificate($userOnCertificate) {
        $this->pdf->userOnCertificate = $userOnCertificate;
        return $this;
    }

    public function get() {
        return $this->pdf;
    }
}
