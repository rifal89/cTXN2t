<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");

if(!function_exists("HitungUsia")) {
    function HitungUsia($tgllhr) {         
        list($thn, $bln, $tgl) = explode('-', $tgllhr);
        $lahir = mktime(0, 0, 0, (int)$bln, (int)$tgl, (int)$thn); //jam,menit,detik,bulan,tanggal,tahun 
        $t = time(); 
        $umur = ($lahir < 0) ? ( $t + ($lahir * -1) ) : $t - $lahir; $tahun = 60 * 60 * 24 * 365; 
        $tahunlahir = $umur / $tahun; 
        $umursekarang=floor($tahunlahir) ; 
        return $umursekarang; 
    } 
}

if(!function_exists("indonesia_day_name")) {
    function indonesia_day_name($date) {
        $days = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
        return $days[$date];
    }
}

if(!function_exists("indonesia_month_name")) {
    function indonesia_month_name($date) {
        list($thn, $bln, $tgl)=explode('-',$date);
        $month = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); // index 0 di kosongkan
        return $month[(int)$bln];
    }
}

if(!function_exists("indonesia_date_format")) {
    function indonesia_date_format($date) {
        list($thn, $bln, $tgl)=explode('-',$date);
        $month = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); // index 0 di kosongkan
        return $tgl." ".$month[(int)$bln]." ".$thn;
    }
}

if(!function_exists("indonesia_date_short_format")) {
    function indonesia_date_short_format($date) {
        list($thn, $bln, $tgl)=explode('-',$date); 
        $month = array("","Jan","Feb","Mar","April","Mei","Juni","Juli","Agust","Sept","Okt","Nov","Des"); // index 0 di kosongkan
        return $tgl." ".$month[(int)$bln]." ".$thn;
    }
}

if(!function_exists("convert_to_invoice_no")) {
    function convert_to_invoice_no($no, $date) {
        list($thn, $bln, $tgl)=explode('-',$date);
        $romawi_month = array("", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
        return $no."/INVOICE/".$romawi_month[(int)$bln]."/".$thn;
    }
}

if(!function_exists("indonesia_currency")) {
	function indonesia_currency($nominal)
	{
		$rupiah =  number_format($nominal, 2, ",",".");		
		$rupiah = "Rp. "  . $rupiah . "";
		return $rupiah;
	}
}

/***************************************************  untuk .. . .  ************************/
if(!function_exists("get_product_category")) {
    function get_product_category() {
        // Get a reference to the controller object
        $CI = get_instance();

        // You may need to load the model if it hasn't been pre-loaded
        $CI->load->model('select_mod');

        // Call a function of the model
        return $CI->select_mod->get_category();     
    }
}

if(!function_exists("get_new_message")) {
    function get_new_message() {        
        $CI = get_instance();
        $CI->load->model('select_mod');        
        return $CI->select_mod->get_new_inbox();     
    }
}