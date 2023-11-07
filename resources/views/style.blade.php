<html>
    <head>
        <!--div di seluruh halaman ini diset seperti di blok-->
        <link rel="stylesheet" href="/css/mystyle.css"/>
        <style>
            div {
                color : green;
                font-weight: bold;
                text-align:right;
            }
            .judulhalaman{
                text-align:center;
                font-size:small;
            }
        </style>


    </head>
    <body>
        <div class="judulhalaman">Halo selamat Datang</div>
        <!--Inline CSS ketika ada spesifik ke 1 bagian saja-->
        <p style="text-decoration: line-through;color:rosybrown;">Halo apa kabar?</p>
        <!--Inpage CSS digunakan ketika ada yang spesifik ke 1 hal khusus-->
        <div>
            Halo apa kabar?
        </div>
        <!--External CSS untuk format umum 1 web-->
        <span>Halo apa kabar?</span>
    </body>
</html>
