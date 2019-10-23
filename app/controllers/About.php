<?php



class About{

	public function index($nama = 'kiki', $pekerjaan = 'mahasiswa'){
		echo "Hallo temen-temen, saya $nama, saya adalah seorang $pekerjaan";
	}
	
	public function page(){
		echo 'About/page';
		
	}
}