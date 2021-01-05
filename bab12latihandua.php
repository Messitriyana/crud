<?php
     require_once ("clsUtil.php");

     class harga extends Util
     {
     function harga ()
     {
     require_once "koneksi.php";
     require_once "user_cek.php";
     }
     function showHarga ()
     {
     global $db;
     global $FOOTER_NOTES,$HEADER_NOTES,$TITTLE,$PHP_SELF;
     global $awal,$jumrow;
     if($awal){
     $start=$awal;
     }else{
           $start=0;
     }
     if($jumrow){
                 $numrows=$jumrow;
     }else{
                 $numrows=ITEM_PER_PAGE;
     }
     $smarty = new Smarty;
     $USER = $_SESSION [usernamesession];
     $smarty->assign("user",$USER);
     $smarty->assign("HEADER_NOTES",$HEADER_NOTES);
     $smarty->assign("FOOTER_NOTES",$FOOTER_NOTES);
     $smarty->assign("title",$TITLE)
     $smarty->assign("self_url",$PHP_SELF);
     $keyword = empty ($_POST['keyword'])?$_REQUEST['keyword']:$_POST['keyword'];
     $keyword = str_replace ("","",stripslashes($keyword));
     $smarty->assign ("keyword",$keyword);
     $smarty->assign ("to_search",$to_search);
     $sqlUser = "PERNYATAAN SQL STATEMENT UNTUK MENAMPILKAN DATA";

     $rs=mysql_query($sqlUser);

     if(mysql_num_rows($rs)<1)
     {
     $kosong ='kosong';
     $pos_list[]=array(
     'no'=>$kosong,
     'id'=>$kosong,
     'kode'=>$kosong,
     'asal'=>$kosong,
     'tujuan'=>$kosong,
     'jenis'=>$kosong,
     'kirim'=>$kosong,
     'harga'=>$kosong
     }
     elsee
     {
      $no = $awal;

      while($row=(mysql_fetch_assoc($sr))){
      ++$no;

      $pos_list[]=array(
               'no'=>$no,
               'id'=>$row['kode'],
               'asal'=>$row['asal'],
               'tujuan'=>$row['tujuan'],
               'jenis'=>$row['jenis'],
               'kirim'=>$row['kirim'],
               'harga'=>$row['harga'])
               );
     }
     $nomor=$no;
     }
    }
   }
   ?>
