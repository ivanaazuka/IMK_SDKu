<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Halaman Awal</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="jquery-ui/themes/blitzer/jquery-ui.css" />
<script src="jquery-3.1.0.js"></script>
<script src="jquery-ui/jquery-ui.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('button,input[type="submit"],a').button(); 
            $( "#Kelas" ).selectmenu();
            $( "#Mapel" ).selectmenu();       
            $( "#Semester" ).selectmenu();
        });
 
 
    </script>


<style>
.jumbotron{
	background-color: #1BB6E9;
	text-align:center;
	padding-top:10px;
	color:#FFF;
	font-family:Helvetica;
	margin:0;
}
.menu{
	background-color:inherit;
	padding:0;
	margin-left:15px;
	margin-right:15px;
}
body{
	background-color: #95DDFF; /**Perbaiki warna latar ini**/
}
.color{
	background-color:#1BB6E9;
	color:white;
}
footer{
	color:white;
	padding-bottom:10px;
}
.no{
	width:20px;
}
.nama{
	width:130px;
}

.navbar {
    margin-bottom: 0;
    border-radius: 0;
}

</style>
    </head>
    
    <body>
    <!-- Bagian Header -->
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="col-md-1">
                <img src="images/Logo.gif" alt="Logo" style="width:180px; height:180px">
            </div>
            <h1>Sistem Informasi SD Ku</h1>
            <p>Jalan Sitoluamaa<p>
        </div>
    </div>
    <!-- Akhir Header -->
    
    <!-- ISI -->
    <div class="text-center">
        <h2>Selamat datang<br>
            Sistem Informasi SD Ku</h2>
        <p>Silahkan tekan tombol dibawah untuk memulai</p>
        <a href="Login.php" class="btn btn-primary">Mulai</a>
        <br>
        <br>
    </div>
    <!-- End Isi -->
    
    <!-- Footer -->
    <div class="container-fluid color" style="padding-left:0px; padding-right:0px;">
        <footer class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Institut Teknologi Del</h3>
                        <img src="images/ITDel.png" alt="ITDel" style="width:180px; height:180px">
                    </div>
                    
                    <div class="col-md-4" align="center">
                        <h3>Tim Kerja :</h3>
                        <table class="text-left">
                            <tr>
                                <td class="no">1.</td>
                                <td class="nama">Indra Simanjuntak</td>
                                <td>11S15001</td>
                            </tr>
                            <tr>
                                <td class="no">2.</td>
                                <td class="nama">Ivana Situmorang</td>
                                <td>11S15014</td>
                            </tr>
                            <tr>
                                <td class="no">3.</td>
                                <td class="nama">Willy Manurung</td>
                                <td>11S15038</td>
                            </tr>
                            <tr>
                                <td class="no">4.</td>
                                <td class="nama">Hendro Prabowo</td>
                                <td>11S15048</td>
                            </tr>
                            <tr>
                                <td class="no">5.</td>
                                <td class="nama">Adrian Sirait</td>
                                <td>11S15062</td>
                            </tr>
                        </table>
                    </div>
                      
                    <div class="col-md-4">
                        <h3>About SD Ku</h3>
                        <p style="text-align:justify">SD Ku adalah sebuah sistem informasi yang mempermudah 
                        pihak sekolah baik Guru maupun Kepala Sekolah dalam mengelola nilai nilai dari 
                        setiap siswa. Para Guru akan lebih mudah memasukkan nilai dan langung tersimpan di database.</p>
                    </div>    
                </div>
            </div>
        </footer>
    </div>
    <!-- End Footer -->
    
    </body>
</html>