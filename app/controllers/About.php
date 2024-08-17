<?php

class About
{

    public function index($nama = "(belum di isi)", $pekerjaan = "(belum di isi)")
    {
        echo "Hallo nama saya $nama, dan saya adalah seorang $pekerjaan ";
    }

    public function page()
    {
        echo "Controller = About/ Method = Page";
    }
}
