			  <?php 
//sasa
$seviye=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
if (!isset($_SESSION)) {session_start();}
$seviyem=$_SESSION['MM_seviye'];
$kadim=$_SESSION['MM_kadi'];
$tittle="Anasayfa";
if(seviyeKontrol($seviye,$seviyem)==0){
$_SESSION['MM_seviye'] = NULL;
$_SESSION['MM_kadi'] = NULL;
unset($_SESSION['MM_seviye']);
unset($_SESSION['MM_kadi']);
header("Location:giris");
}


include_once("ansayfaust.php");

?>

 <div class="st-content">



        <!-- extra div for emulating position:fixed of the menu -->

        <div class="st-content-inner">



          <nav class="navbar navbar-subnav navbar-static-top margin-bottom-none" role="navigation">

            <div class="container-fluid">

              <!-- Brand and toggle get grouped for better mobile display -->

              <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">

                  <span class="sr-only">Toggle navigation</span>

                  <span class="fa fa-ellipsis-h"></span>

                </button>

              </div>



              <!-- Collect the nav links, forms, and other content for toggling --><!-- /.navbar-collapse -->

            </div>



          </nav>

         <div class="st-content">
        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner">

        



          <style type="text/css">
          #diva {width:130px; height:150px; background-color:#4d8e18; float:left; margin:42px; border-radius: 38px 25px; cursor:pointer;}
          #diva h2{font-size: x-large; color:white; text-align:center;}
        </style>

        


        <div id="diva">  
        <a style=" margin-left: auto; margin-right: auto; text-decoration: none;" href="sirketler">
<i class="fa fa-bank" style="font-size:96px; color:white; display:block; text-align:center;"></i>
<h2>Şirketler</h2>
</div>


        

        <div id="diva">  
        <a style=" margin-left: auto; margin-right: auto; text-decoration: none;" href="subeler">
<i class="fa fa-home" style="font-size:96px; color:white; display:block; text-align:center;"></i>
<h2>Şubeler</h2>
</div>





        <!--<div id="diva">  
        <a style=" margin-left: auto; margin-right: auto; text-decoration: none;" href="siniflar">
<i class="fa fa-line-chart" style="font-size:96px; color:white; display:block; text-align:center;"></i>
<h2>Sınıflar</h2>
</div>-->



<div id="diva">  

        <a style=" margin-left: auto; margin-right: auto; text-decoration: none;" href="dersler">

<i class="fa fa-newspaper-o" style="font-size:96px; color:white; display:block; text-align:center;"></i>

<h2>Dersler</h2>

</div>





        <div id="diva">  

        <a style=" margin-left: auto; margin-right: auto; text-decoration: none;" href="konular">

<i class="fa fa-external-link-square" style="font-size:96px; color:white; display:block; text-align:center;"></i>

<h2>Konular</h2>

</div>



        <div id="diva">  

        <a style=" margin-left: auto; margin-right: auto; text-decoration: none;" href="sinavlar">

<i class="fa fa-bar-chart" style="font-size:96px; color:white; display:block; text-align:center;"></i>

<h2>Sınavlar</h2>

</div>


        <div id="diva">  

        <a style=" margin-left: auto; margin-right: auto; text-decoration: none;" href="formlar">

<i class="fa fa-barcode" style="font-size:96px; color:white; display:block; text-align:center;"></i>

<h2>Formlar</h2>

</div>

<div id="diva">  

        <a style=" margin-left: auto; margin-right: auto; text-decoration: none;" href="soru-havuzu">

<i class="fa fa-barcode" style="font-size:96px; color:white; display:block; text-align:center;"></i>

<h2>Soru Havuzu</h2>

</div>










        </div>

        <!-- /st-content-inner -->



      </div>




          



        </div>

        <!-- /st-content-inner -->



      </div>

        

        <?php 

include_once("ansayfaalt.php");

?>                                		  		  		  		  		  		  		  