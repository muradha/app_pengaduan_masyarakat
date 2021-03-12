<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengaduan Masyarakat</title>
    <style type="text/css">
        body {
            margin: auto;
            background: #eeeded;
            font-family: sans-serif;
        }
        .menu{
            color: white;
            text-decoration: none;
        }
        .footer{
            color:white;
        }
    </style>
</head>

<body>

    <!-- Table Header -->
    <table width="80%" border="0" cellpadding="5" cellspacing="0" bgcolor="lightblue" align="center">
        <tr>
            <td height="100">
                <h2>Aplikasi Pengaduan Masyarakat</h2>
            </td>
        </tr>
    </table>

    <!-- Table Menu -->
    <table width="80%" border="0" cellpadding="5" cellspacing="0" bgcolor="black " align="center">
        <tr>
            <td height="50">
            <a href="/" class="menu ">Beranda</a> |
            <a href="#" class="menu">Petugas</a> |
            <a href="{{ url('masyarakat') }}" class="menu">Masyarakat</a> |
            <a href="#" class="menu">Pengaduan </a> |
            <a href="#" class="menu">Tanggapan </a> |
            <a href="#" class="menu">Logout </a> |
            </td>
        </tr>
    </table>


    <!-- Table Content -->
    <table width="80%" border="0" cellpadding="5" cellspacing="0" bgcolor="white" align="center">
        <tr>
            <td height="250">
                @yield('isi')
            </td>
        </tr>
    </table>


    <!-- Table Footer -->
    <table width="80%" border="0" cellpadding="5" cellspacing="0" bgcolor="black" align="center" class="footer">
        <tr>
            <td height="75" align="center">
                Copyright &copy; 2021.
            </td>
        </tr>
    </table>
</body>

</html>