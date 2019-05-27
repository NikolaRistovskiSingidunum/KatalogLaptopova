<?php
    final class Configuration {
        const BASE = 'http://localhost/KatalogLaptopova/KatalogLaptopova/nedelja01/';

        const DATABASE_HOST = 'localhost';
        const DATABASE_USER = 'root';
        const DATABASE_PASS = '';
        const DATABASE_NAME = 'bazaKatalogLaptopova';

        const SESSION_STORAGE_CLASS = '\\App\\Core\\Session\\FileSessionStorage';
        const SESSION_STORAGE_ARGUMENTS = [ './session/' ]; # !!!

        const FINGERPRINT_PROVIDER_CLASS = '\\App\\Core\\Fingerprint\\BasicFingerprintProvider';
    }
