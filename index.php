<?php

    class Certificate {
    public null|string $path;
    public null|string $fileName;
    public null|string $userOnCertificate;
    public function __construct() {
        $this->path = null;
        $this->fileName = null;
        $this->userOnCertificate = null;
    }
}


class CertificateBuilder {
    public Certificate $certificate;

    function __construct()
    {
        $this->certificate = new Certificate();
    }

    public function setPath($path) {
        $this->certificate->path = $path;
        return $this;
    }

    public function setFileName($fileName) {
        $this->certificate->fileName = $fileName;
        return $this;
    }

    public function setUserOnCertificate($userOnCertificate) {
        $this->certificate->userOnCertificate = $userOnCertificate;
        return $this;
    }

    public function get() {
        return $this->certificate;
    }
}
