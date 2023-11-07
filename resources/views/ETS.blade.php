<html>
  <head>
    <title>SiCepat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- jquery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    />

    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900;9..40,1000&display=swap"
      rel="stylesheet"
    />

    <!-- csscustom -->
    <link rel="stylesheet" href="/css/ETS.css" />
  </head>

  <body>
    <img class="background" src="/asset/background.jpeg" />

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg nav fixed-top navbar-scrolled">
      <a class="navbar-brand" href="#"
        ><img
          src="/asset/sicepatlogo.png"
          style="width: 16rem; height: fit-content; flex-shrink: 0"
      /></a>
      <button
        class="navbar-toggler navbar-dark"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav" id="navbar">
          <li class="nav-item konten">
            <a class="nav-link active" href="#page1">BERANDA</a>
          </li>
          <li class="nav-item konten">
            <a class="nav-link" href="#page2">TENTANG</a>
          </li>
          <li class="nav-item konten">
            <a class="nav-link" href="#page3">LAYANAN</a>
          </li>
          <li class="nav-item konten">
            <a class="nav-link" href="#page4">PARTNER</a>
          </li>
          <li class="nav-item konten">
            <a class="nav-link" href="#page5">CONTACT</a>
          </li>
          <li class="nav-item konten">
            <a class="nav-link" href="#page6">ASSIGNMENT</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- Beranda -->
    <div class="row" id="page1">
      <div class="col-md-5"></div>
      <div class="col-md-7 pt-md-5 mt-5">
        <p class="highlight mt-5 pt-md-3">
          Pengiriman cepat dan mudah <br />#ketikasemuajadimudah
        </p>
        <button type="button" class="btn">PESAN LAYANAN</button>
        <div class="pt-3 pl-md-3">
          <img src="/asset/ap.png" class="mobile" />
          <img src="/asset/gp.png" class="mobile" />
        </div>
      </div>
    </div>

    <!-- Layanan -->
    <div class="row" id="page2">
      <div class="col-md-1"></div>
      <div class="col-md-5 col-sm-12 mx-auto">
        <!-- Intro alasan -->
        <p class="atas">SOLUSI PENGIRIMAN</p>
        <p class="judul">
          Kenapa <span style="color: #cd2028">Si Cepat?</span>
        </p>
        <p class="desc">
          SiCepat berkomitmen menjadi partner terpercaya <br />di seluruh
          Indonesia. Inilah 10 alasan tepat untuk<br />memilih SiCepat
        </p>
      </div>
      <div class="col-md-6 col-sm-12 mx-auto">
        <img class="kotak img-fluid" src="/asset/box.png" style="height: 280px" />
      </div>
      <!-- Card 10 alasan -->
      <div class="row alasan container-fluid mb-5">
        <div class="card card-alasan">
          <div class="row">
            <div class="col-3">
              <svg
                class="ikon-alasan"
                xmlns="http://www.w3.org/2000/svg"
                width="33"
                height="30"
                viewBox="0 0 37 30"
                fill="none"
              >
                <path
                  d="M24.5865 11.7928L19.4435 17.0049C19.1355 16.9219 18.8186 16.8779 18.5 16.8737C17.5187 16.8737 16.5776 17.2687 15.8837 17.9719C15.1898 18.6751 14.8 19.6289 14.8 20.6234C14.8041 20.9463 14.8476 21.2675 14.9295 21.5796L13.4865 23.0419C13.3131 23.2162 13.1755 23.4236 13.0816 23.6521C12.9876 23.8805 12.9393 24.1256 12.9393 24.3731C12.9393 24.6206 12.9876 24.8656 13.0816 25.0941C13.1755 25.3226 13.3131 25.5299 13.4865 25.7042C13.6585 25.88 13.8631 26.0194 14.0885 26.1146C14.314 26.2098 14.5558 26.2588 14.8 26.2588C15.0442 26.2588 15.286 26.2098 15.5115 26.1146C15.7369 26.0194 15.9415 25.88 16.1135 25.7042L17.5565 24.2419C17.8645 24.3248 18.1814 24.3689 18.5 24.3731C19.4813 24.3731 20.4224 23.978 21.1163 23.2748C21.8102 22.5716 22.2 21.6179 22.2 20.6234C22.1959 20.3005 22.1524 19.9793 22.0705 19.6672L27.2135 14.4551C27.5618 14.1021 27.7575 13.6232 27.7575 13.124C27.7575 12.6247 27.5618 12.1459 27.2135 11.7928C26.8651 11.4398 26.3926 11.2414 25.9 11.2414C25.4073 11.2414 24.9348 11.4398 24.5865 11.7928ZM18.5 0C16.0706 0 13.6649 0.484945 11.4204 1.42715C9.17586 2.36935 7.13644 3.75036 5.41856 5.49132C1.94915 9.00735 5.66989e-05 13.7761 5.66989e-05 18.7485C-0.00905376 22.4618 1.07994 26.0927 3.12655 29.1727C3.40131 29.5854 3.8266 29.8706 4.30884 29.9655C4.79109 30.0605 5.2908 29.9574 5.69804 29.6789C6.10528 29.4005 6.38669 28.9695 6.48036 28.4807C6.57404 27.992 6.4723 27.4856 6.19754 27.0729C4.7074 24.8147 3.85041 22.1888 3.71809 19.4754C3.58576 16.7621 4.18307 14.0634 5.44623 11.6673C6.70938 9.27117 8.59096 7.26774 10.89 5.87089C13.1891 4.47404 15.8194 3.73623 18.5 3.73623C21.1806 3.73623 23.8109 4.47404 26.11 5.87089C28.409 7.26774 30.2906 9.27117 31.5538 11.6673C32.8169 14.0634 33.4142 16.7621 33.2819 19.4754C33.1496 22.1888 32.2926 24.8147 30.8025 27.0729C30.6661 27.2771 30.5709 27.5066 30.5222 27.7483C30.4735 27.9899 30.4723 28.2388 30.5187 28.4809C30.5651 28.723 30.6582 28.9534 30.7926 29.159C30.927 29.3646 31.1001 29.5413 31.302 29.6789C31.6082 29.8875 31.969 29.9985 32.338 29.9977C32.641 29.9981 32.9395 29.9231 33.2072 29.7793C33.475 29.6354 33.7038 29.4271 33.8735 29.1727C35.9201 26.0927 37.0091 22.4618 36.9999 18.7485C36.9999 13.7761 35.0508 9.00735 31.5814 5.49132C28.112 1.97529 23.4065 0 18.5 0Z"
                  fill="#B00202"
                />
              </svg>
            </div>
            <div class="col-9">
              <p class="card-title judulcard">15 hours <br />delivery</p>
            </div>
            <div class="row bawah">
              Kiriman Cepat 15 Jam sampai tanpa tambahan biaya apapun.
            </div>
          </div>
        </div>
        <div class="card card-alasan">
          <div class="row">
            <div class="col-4">
              <svg
                class="ml-3"
                xmlns="http://www.w3.org/2000/svg"
                width="37"
                height="37"
                viewBox="0 0 48 48"
                fill="none"
              >
                <mask
                  id="mask0_14_171"
                  style="mask-type: luminance"
                  maskUnits="userSpaceOnUse"
                  x="2"
                  y="6"
                  width="45"
                  height="40"
                >
                  <path
                    d="M20 33L26 35C26 35 41 32 43 32C45 32 45 34 43 36C41 38 34 44 28 44C22 44 18 41 14 41H4"
                    stroke="white"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M4 29C6 27 10 24 14 24C18 24 27.5 28 29 30C30.5 32 26 35 26 35M16 18V10C16 9.46957 16.2107 8.96086 16.5858 8.58579C16.9609 8.21071 17.4696 8 18 8H42C42.5304 8 43.0391 8.21071 43.4142 8.58579C43.7893 8.96086 44 9.46957 44 10V26"
                    stroke="white"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M25 8H35V17H25V8Z"
                    fill="white"
                    stroke="white"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </mask>
                <g mask="url(#mask0_14_171)">
                  <path d="M0 0H48V48H0V0Z" fill="#B3181C" />
                </g>
              </svg>
            </div>
            <div class="col-8" style="margin-left: -1rem">
              <p class="card-title judulcard">Pickup<br />delivery</p>
            </div>
            <div class="row bawah" style="margin-top: 8rem">
              Minimal 5 paket atau setara dengan 5 kg kami ambil di tempat Anda
              (waktu flexible dan GRATIS).
            </div>
          </div>
        </div>
        <div class="card card-alasan">
          <div class="row">
            <div class="col-3">
              <svg
                class="ml-3 mt-1"
                style="width: 2rem"
                xmlns="http://www.w3.org/2000/svg"
                width="36"
                height="41"
                viewBox="0 0 36 41"
                fill="none"
              >
                <path
                  d="M26 0.396851H10C4 0.396851 0 4.39685 0 10.3969V30.3969C0 36.3969 4 40.3969 10 40.3969H26C32 40.3969 36 36.3969 36 30.3969V10.3969C36 4.39685 32 0.396851 26 0.396851ZM29.14 13.3568L24.78 20.3568C24.66 20.5368 24.46 20.6768 24.26 20.6968C24.22 20.6968 24.18 20.6968 24.16 20.6968C23.98 20.6968 23.8 20.6369 23.66 20.5169C20.44 17.6569 15.6 17.6569 12.38 20.5169C12.22 20.6569 12 20.7369 11.78 20.6968C11.56 20.6568 11.36 20.5368 11.26 20.3568L6.9 13.3568C6.66 13.0568 6.72 12.6569 7 12.3969C13.26 6.81685 22.72 6.81685 29 12.3969C29.28 12.6569 29.34 13.0568 29.14 13.3568Z"
                  fill="#B3181C"
                />
              </svg>
            </div>
            <div class="col-9">
              <p class="card-title judulcard">Timbangan <br />akurat</p>
            </div>
            <div class="row bawah">
              Berat lebih akurat dengan timbangan digital.
            </div>
          </div>
        </div>
        <div class="card card-alasan">
          <div class="row">
            <div class="col-3">
              <svg
                class="ml-1"
                style="width: 2.9rem"
                xmlns="http://www.w3.org/2000/svg"
                width="58"
                height="58"
                viewBox="0 0 58 58"
                fill="none"
              >
                <path
                  d="M31.0179 7.63903C31.1524 7.53694 31.272 7.41656 31.3732 7.28137H37.5647C38.0316 7.25615 38.4995 7.25615 38.9663 7.28137H39.0582C40.4338 7.27749 41.793 7.58135 43.036 8.1707C45.3067 9.06143 47.2709 10.5908 48.691 12.5739C49.7659 14.0755 50.4972 15.7953 50.833 17.6113C51.1688 19.4272 51.1009 21.2948 50.634 23.0815L42.7049 15.2588C42.3656 14.9241 41.908 14.7366 41.4313 14.7368H29.8918C29.5215 14.7518 29.1647 14.88 28.8695 15.1041L24.3165 18.5551C24.0718 18.7414 23.7928 18.8777 23.4955 18.9562C23.1981 19.0347 22.8882 19.0538 22.5835 19.0125C22.2787 18.9712 21.9851 18.8703 21.7194 18.7155C21.4536 18.5607 21.221 18.3551 21.0347 18.1105C20.8495 17.8696 20.7138 17.5945 20.6356 17.3009C20.5573 17.0074 20.5379 16.7012 20.5786 16.4001C20.6192 16.0991 20.7191 15.809 20.8725 15.5468C21.0259 15.2845 21.2296 15.0552 21.4721 14.8721L31.0179 7.63903ZM19.0893 34.4012L19.0554 34.4326L16.7016 36.7719L16.6702 36.801C16.258 37.1929 15.7094 37.4091 15.1406 37.4037C14.5718 37.3982 14.0274 37.1717 13.6228 36.7719C13.4206 36.5715 13.2601 36.3331 13.1506 36.0703C13.0411 35.8075 12.9847 35.5257 12.9847 35.241C12.9847 34.9563 13.0411 34.6745 13.1506 34.4117C13.2601 34.1489 13.4206 33.9104 13.6228 33.71L15.9766 31.3707C16.3866 30.9647 16.9402 30.737 17.5172 30.737C18.0942 30.737 18.6479 30.9647 19.0578 31.3707C19.4608 31.7701 19.6901 32.3122 19.696 32.8795C19.7019 33.4468 19.4839 33.9936 19.0893 34.4012ZM18.386 38.5047C17.9914 38.9123 17.7734 39.4591 17.7793 40.0264C17.7852 40.5937 18.0144 41.1358 18.4174 41.5352C19.2681 42.381 20.648 42.381 21.4987 41.5352L23.8525 39.1959C24.0807 38.9696 24.2554 38.6952 24.3638 38.3927C24.4723 38.0902 24.5117 37.7673 24.4793 37.4476C24.4469 37.1279 24.3434 36.8195 24.1764 36.545C24.0094 36.2704 23.7831 36.0367 23.5142 35.8609C23.1013 35.5892 22.6086 35.4652 22.1163 35.5091C21.624 35.553 21.161 35.7621 20.8027 36.1025L20.7713 36.1364L18.4174 38.4733L18.386 38.5047ZM13.2917 27.5669C13.4939 27.7673 13.6543 28.0058 13.7639 28.2685C13.8734 28.5313 13.9298 28.8131 13.9298 29.0978C13.9298 29.3825 13.8734 29.6644 13.7639 29.9271C13.6543 30.1899 13.4939 30.4284 13.2917 30.6288L10.9378 32.9681C10.5278 33.3748 9.97358 33.6031 9.39601 33.6031C8.81844 33.6031 8.26426 33.3748 7.85418 32.9681C7.652 32.7677 7.49152 32.5292 7.382 32.2665C7.27248 32.0037 7.21609 31.7218 7.21609 31.4372C7.21609 31.1525 7.27248 30.8706 7.382 30.6079C7.49152 30.3451 7.652 30.1066 7.85418 29.9062L10.2104 27.5669C10.6204 27.1609 11.1741 26.9331 11.7511 26.9331C12.328 26.9331 12.8817 27.1609 13.2917 27.5669ZM28.6448 40.8996C28.8469 41.1 29.0074 41.3385 29.1169 41.6013C29.2265 41.864 29.2828 42.1459 29.2828 42.4306C29.2828 42.7153 29.2265 42.9971 29.1169 43.2599C29.0074 43.5226 28.8469 43.7611 28.6448 43.9615L26.2909 46.3009C25.8809 46.7069 25.3273 46.9346 24.7503 46.9346C24.1733 46.9346 23.6197 46.7069 23.2097 46.3009C22.8887 45.9826 22.6758 45.5715 22.6012 45.1257C22.5266 44.6799 22.5941 44.2219 22.794 43.8165L22.7964 43.8117C22.9018 43.5994 23.0414 43.4059 23.2097 43.239L25.5635 40.8996C25.9735 40.4936 26.5271 40.2659 27.1041 40.2659C27.6811 40.2659 28.2348 40.4936 28.6448 40.8996ZM12.9147 11.6725C14.5193 10.0783 16.4651 8.86945 18.6052 8.13724C20.7453 7.40503 23.0238 7.16857 25.2687 7.4457L19.285 11.9818C18.6617 12.4533 18.1379 13.0435 17.7437 13.7183C17.3494 14.3931 17.0926 15.1393 16.9879 15.9138C16.8832 16.6883 16.9328 17.4758 17.1338 18.2311C17.3347 18.9863 17.6831 19.6944 18.1588 20.3145C19.1194 21.5664 20.536 22.3878 22.0998 22.5992C23.6636 22.8106 25.2475 22.395 26.506 21.443L30.5757 18.3618H40.6894L49.1647 26.7234C49.1919 26.7572 49.221 26.7895 49.2517 26.8201L52.0308 29.5993C52.656 30.2332 53.0143 31.0827 53.0318 31.9728C53.0493 32.8629 52.7248 33.7259 52.125 34.3839C51.5253 35.0419 50.696 35.4448 49.808 35.5096C48.9201 35.5744 48.0411 35.2962 47.3522 34.7323L47.1202 34.5003C47.0752 34.4546 47.0268 34.4126 46.9752 34.3746L44.3338 31.7356C44.2223 31.6202 44.089 31.5282 43.9415 31.4648C43.7941 31.4015 43.6356 31.3682 43.4751 31.3668C43.3147 31.3654 43.1556 31.396 43.0071 31.4567C42.8586 31.5175 42.7237 31.6072 42.6102 31.7206C42.4967 31.8341 42.407 31.969 42.3463 32.1175C42.2855 32.266 42.2549 32.4251 42.2563 32.5856C42.2577 32.746 42.2911 32.9046 42.3544 33.052C42.4177 33.1994 42.5098 33.3327 42.6252 33.4442L45.4043 36.2234C45.5058 36.3225 45.6073 36.4191 45.7137 36.511L45.82 36.6173C46.0527 36.845 46.238 37.1167 46.365 37.4165C46.492 37.7163 46.5584 38.0384 46.5601 38.364C46.5619 38.6896 46.499 39.0123 46.3752 39.3135C46.2514 39.6147 46.0691 39.8883 45.8389 40.1186C45.6086 40.3488 45.335 40.5311 45.0338 40.6549C44.7326 40.7787 44.4099 40.8416 44.0843 40.8398C43.7587 40.838 43.4366 40.7717 43.1368 40.6447C42.837 40.5177 42.5653 40.3324 42.3376 40.0997L41.9268 39.6913C41.7563 39.5213 41.539 39.4061 41.3027 39.3605C41.0664 39.3148 40.8218 39.3408 40.6003 39.435C40.3789 39.5293 40.1906 39.6875 40.0596 39.8895C39.9287 40.0914 39.861 40.3279 39.8653 40.5685C39.8615 40.732 39.8911 40.8945 39.9522 41.0462C40.0132 41.1978 40.1046 41.3354 40.2206 41.4506L40.7595 41.9895C40.9816 42.1986 41.1594 42.4502 41.2825 42.7293C41.4056 43.0084 41.4713 43.3094 41.4759 43.6144C41.4805 43.9194 41.4238 44.2223 41.3092 44.505C41.1946 44.7877 41.0244 45.0445 40.8087 45.2601C40.593 45.4758 40.3362 45.646 40.0535 45.7607C39.7708 45.8753 39.468 45.932 39.163 45.9274C38.858 45.9228 38.557 45.857 38.2779 45.7339C37.9988 45.6109 37.7472 45.433 37.5381 45.211H37.5357L37.5067 45.1795L36.9992 44.672C36.8875 44.559 36.7544 44.4693 36.6078 44.408C36.4611 44.3468 36.3038 44.3152 36.1449 44.3152C35.986 44.3152 35.8286 44.3468 35.682 44.408C35.5353 44.4693 35.4023 44.559 35.2906 44.672C35.0641 44.8986 34.9368 45.2059 34.9368 45.5263C34.9368 45.8467 35.0641 46.154 35.2906 46.3806L35.8174 46.9099C36.0343 47.1241 36.2069 47.3789 36.3254 47.6599C36.4438 47.9408 36.5057 48.2423 36.5076 48.5471C36.5095 48.852 36.4514 49.1542 36.3365 49.4366C36.2216 49.719 36.0522 49.976 35.838 50.1929C35.6238 50.4098 35.3689 50.5824 35.088 50.7009C34.8071 50.8193 34.5056 50.8812 34.2007 50.8831C33.8958 50.885 33.5936 50.8269 33.3112 50.712C33.0288 50.5971 32.7718 50.4277 32.5549 50.2135L29.0967 46.9268L30.3654 45.6653C30.7928 45.242 31.132 44.7381 31.3636 44.1829C31.5951 43.6277 31.7143 43.0321 31.7143 42.4306C31.7143 41.829 31.5951 41.2334 31.3636 40.6782C31.132 40.123 30.7928 39.6192 30.3654 39.1959C29.9133 38.7468 29.373 38.3965 28.7786 38.1669C28.1841 37.9372 27.5486 37.8334 26.912 37.8619C26.94 37.2278 26.835 36.5948 26.6035 36.0038C26.3721 35.4127 26.0195 34.8767 25.5683 34.4302C25.1166 33.9814 24.5767 33.6311 23.9827 33.4015C23.3887 33.1719 22.7535 33.0679 22.1173 33.0962C22.1452 32.4625 22.04 31.8299 21.8086 31.2393C21.5772 30.6487 21.2246 30.1131 20.7737 29.667C20.1992 29.0973 19.4853 28.6883 18.7033 28.4809C17.9213 28.2736 17.0986 28.275 16.3173 28.4852C16.1831 27.4908 15.7233 26.5688 15.0099 25.8631C14.2149 25.0751 13.161 24.6021 12.0438 24.5319C10.9266 24.4617 9.82187 24.799 8.93443 25.4813C8.36367 23.0312 8.42981 20.4759 9.12655 18.0586C9.8233 15.6414 11.1274 13.4428 12.9147 11.6725Z"
                  fill="#B3181C"
                />
              </svg>
            </div>
            <div class="col-9">
              <p class="card-title judulcard" style="margin-left: -1rem">
                Kerjasama secara kekeluargaan
              </p>
            </div>
            <div class="row bawah" style="margin-top: 5.5rem">
              Kami bertanggung jawab mewakili online shop Anda untuk semua
              masalah pengiriman paket.
            </div>
          </div>
        </div>
        <div class="card card-alasan">
          <div class="row">
            <div class="col-3">
              <svg
                class="ml-2"
                style="width: 2.7rem"
                xmlns="http://www.w3.org/2000/svg"
                width="56"
                height="56"
                viewBox="0 0 56 56"
                fill="none"
              >
                <path
                  d="M53.6666 18.6667V42C53.6666 44.5667 51.5666 46.6667 49 46.6667H11.6666C10.3833 46.6667 9.33331 45.6167 9.33331 44.3334C9.33331 43.05 10.3833 42 11.6666 42H49V18.6667C49 17.3834 50.05 16.3334 51.3333 16.3334C52.6166 16.3334 53.6666 17.3834 53.6666 18.6667ZM9.33331 37.3334C5.45998 37.3334 2.33331 34.2067 2.33331 30.3334V16.3334C2.33331 12.46 5.45998 9.33337 9.33331 9.33337H37.3333C41.2066 9.33337 44.3333 12.46 44.3333 16.3334V32.6667C44.3333 35.2334 42.2333 37.3334 39.6666 37.3334H9.33331ZM16.3333 23.3334C16.3333 27.2067 19.46 30.3334 23.3333 30.3334C27.2066 30.3334 30.3333 27.2067 30.3333 23.3334C30.3333 19.46 27.2066 16.3334 23.3333 16.3334C19.46 16.3334 16.3333 19.46 16.3333 23.3334Z"
                  fill="#AD1B1E"
                />
              </svg>
            </div>
            <div class="col-9">
              <p class="card-title judulcard">
                Pembayaran fleksibel dan akurat
              </p>
            </div>
            <div class="row bawah" style="margin-top: 5rem">
              Pembayaran H+1 dengan rekap tagihan yang jelas.
            </div>
          </div>
        </div>
        <div class="card card-alasan">
          <div class="row">
            <div class="col-3">
              <svg
                class="ml-3"
                xmlns="http://www.w3.org/2000/svg"
                width="45"
                height="39"
                viewBox="0 0 50 39"
                fill="none"
              >
                <path
                  d="M45.8438 11.375H4.17712V6.5C4.17712 6.06902 4.39662 5.6557 4.78732 5.35095C5.17802 5.0462 5.70792 4.875 6.26046 4.875H43.7605C44.313 4.875 44.8429 5.0462 45.2336 5.35095C45.6243 5.6557 45.8438 6.06902 45.8438 6.5V11.375ZM45.8438 14.625V32.5C45.8438 32.931 45.6243 33.3443 45.2336 33.649C44.8429 33.9538 44.313 34.125 43.7605 34.125H6.26046C5.70792 34.125 5.17802 33.9538 4.78732 33.649C4.39662 33.3443 4.17712 32.931 4.17712 32.5V14.625H45.8438ZM22.9271 22.75V18.6875L13.5521 26H35.4271V22.75H22.9271Z"
                  fill="#B00202"
                />
              </svg>
            </div>
            <div class="col-9">
              <p class="card-title judulcard">Ganti rugi</p>
            </div>
            <div class="row bawah" style="padding-top: 2rem">
              Pergantian barang non-asuransi senilai harga barang dengan maks
              1Ox ongkos kirim
            </div>
          </div>
        </div>
        <div class="card card-alasan">
          <div class="row">
            <div class="col-3">
              <svg
                class="ml-3"
                xmlns="http://www.w3.org/2000/svg"
                width="40"
                height="40"
                viewBox="0 0 52 52"
                fill="none"
              >
                <path
                  d="M7.80005 13C7.80005 11.6209 8.3479 10.2982 9.32309 9.32303C10.2983 8.34784 11.6209 7.79999 13 7.79999H31.2001C32.5792 7.79999 33.9018 8.34784 34.877 9.32303C35.8522 10.2982 36.4001 11.6209 36.4001 13V31.2H44.2001V36.4C44.2001 38.4687 43.3783 40.4526 41.9155 41.9154C40.4527 43.3782 38.4687 44.2 36.4001 44.2H15.6C13.5314 44.2 11.5474 43.3782 10.0846 41.9154C8.62183 40.4526 7.80005 38.4687 7.80005 36.4V13ZM36.4001 41.6C37.7792 41.6 39.1018 41.0521 40.077 40.0769C41.0522 39.1018 41.6001 37.7791 41.6001 36.4V33.8H36.4001V41.6ZM16.9 15.6C16.5553 15.6 16.2246 15.737 15.9808 15.9808C15.737 16.2245 15.6 16.5552 15.6 16.9C15.6 17.2448 15.737 17.5754 15.9808 17.8192C16.2246 18.063 16.5553 18.2 16.9 18.2H27.3001C27.6448 18.2 27.9755 18.063 28.2193 17.8192C28.4631 17.5754 28.6 17.2448 28.6 16.9C28.6 16.5552 28.4631 16.2245 28.2193 15.9808C27.9755 15.737 27.6448 15.6 27.3001 15.6H16.9ZM16.9 23.4C16.5553 23.4 16.2246 23.537 15.9808 23.7807C15.737 24.0245 15.6 24.3552 15.6 24.7C15.6 25.0448 15.737 25.3754 15.9808 25.6192C16.2246 25.863 16.5553 26 16.9 26H27.3001C27.6448 26 27.9755 25.863 28.2193 25.6192C28.4631 25.3754 28.6 25.0448 28.6 24.7C28.6 24.3552 28.4631 24.0245 28.2193 23.7807C27.9755 23.537 27.6448 23.4 27.3001 23.4H16.9ZM16.9 31.2C16.5553 31.2 16.2246 31.337 15.9808 31.5807C15.737 31.8245 15.6 32.1552 15.6 32.5C15.6 32.8448 15.737 33.1754 15.9808 33.4192C16.2246 33.663 16.5553 33.8 16.9 33.8H22.1C22.4448 33.8 22.7755 33.663 23.0193 33.4192C23.2631 33.1754 23.4 32.8448 23.4 32.5C23.4 32.1552 23.2631 31.8245 23.0193 31.5807C22.7755 31.337 22.4448 31.2 22.1 31.2H16.9Z"
                  fill="#B3181C"
                />
              </svg>
            </div>
            <div class="col-9">
              <p class="card-title judulcard">Request resi</p>
            </div>
            <div class="row bawah" style="padding-top: 2rem">
              Tracking status paket makin mudah bagi pemilik online shop dengan
              software Request Resi.
            </div>
          </div>
        </div>
        <div class="card card-alasan">
          <div class="row">
            <div class="col-3">
              <svg
                class="ml-3"
                xmlns="http://www.w3.org/2000/svg"
                width="35"
                height="35"
                viewBox="0 0 43 43"
                fill="none"
              >
                <g clip-path="url(#clip0_32_37)">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M34.0416 5.375C35.4671 5.375 36.8343 5.94129 37.8423 6.9493C38.8503 7.95731 39.4166 9.32446 39.4166 10.75V28.6667C39.4166 30.0922 38.8503 31.4594 37.8423 32.4674C36.8343 33.4754 35.4671 34.0417 34.0416 34.0417H13.1382L7.16659 38.5208C5.69025 39.6281 3.58325 38.5746 3.58325 36.7292V10.75C3.58325 9.32446 4.14955 7.95731 5.15755 6.9493C6.16556 5.94129 7.53271 5.375 8.95825 5.375H34.0416ZM19.7083 21.5H14.3333C13.8581 21.5 13.4024 21.6888 13.0664 22.0248C12.7303 22.3608 12.5416 22.8165 12.5416 23.2917C12.5416 23.7668 12.7303 24.2226 13.0664 24.5586C13.4024 24.8946 13.8581 25.0833 14.3333 25.0833H19.7083C20.1834 25.0833 20.6391 24.8946 20.9752 24.5586C21.3112 24.2226 21.4999 23.7668 21.4999 23.2917C21.4999 22.8165 21.3112 22.3608 20.9752 22.0248C20.6391 21.6888 20.1834 21.5 19.7083 21.5ZM28.6666 14.3333H14.3333C13.8766 14.3338 13.4374 14.5087 13.1053 14.8222C12.7732 15.1357 12.5734 15.5641 12.5467 16.02C12.5199 16.4759 12.6682 16.9248 12.9613 17.275C13.2544 17.6251 13.6702 17.8502 14.1236 17.9041L14.3333 17.9167H28.6666C29.1232 17.9162 29.5625 17.7413 29.8945 17.4278C30.2266 17.1143 30.4264 16.6859 30.4532 16.23C30.4799 15.7741 30.3316 15.3252 30.0385 14.9751C29.7454 14.6249 29.3297 14.3998 28.8762 14.3459L28.6666 14.3333Z"
                    fill="#B3181C"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_32_37">
                    <rect width="43" height="43" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <div class="col-9">
              <p class="card-title judulcard">SMS Resi</p>
            </div>
            <div class="row bawah" style="padding-top: 2rem">
              Berat lebih akurat dengan timbangan digital.
            </div>
          </div>
        </div>
        <div class="card card-alasan">
          <div class="row">
            <div class="col-3">
              <svg
                class="ml-3"
                xmlns="http://www.w3.org/2000/svg"
                width="35"
                height="35"
                viewBox="0 0 51 51"
                fill="none"
              >
                <path
                  d="M6.375 28.6875L4.78125 25.5H15.9375L14.6625 22.3125H4.25L2.65625 19.125H19.2313L17.9562 15.9375H2.35875L0.53125 12.75H8.5C8.5 11.6228 8.94777 10.5418 9.7448 9.7448C10.5418 8.94777 11.6228 8.5 12.75 8.5H38.25V17H44.625L51 25.5V36.125H46.75C46.75 37.8158 46.0784 39.4373 44.8828 40.6328C43.6873 41.8284 42.0658 42.5 40.375 42.5C38.6842 42.5 37.0627 41.8284 35.8672 40.6328C34.6716 39.4373 34 37.8158 34 36.125H25.5C25.5 37.8158 24.8284 39.4373 23.6328 40.6328C22.4373 41.8284 20.8158 42.5 19.125 42.5C17.4342 42.5 15.8127 41.8284 14.6172 40.6328C13.4216 39.4373 12.75 37.8158 12.75 36.125H8.5V28.6875H6.375ZM40.375 39.3125C41.2204 39.3125 42.0311 38.9767 42.6289 38.3789C43.2267 37.7811 43.5625 36.9704 43.5625 36.125C43.5625 35.2796 43.2267 34.4689 42.6289 33.8711C42.0311 33.2733 41.2204 32.9375 40.375 32.9375C39.5296 32.9375 38.7189 33.2733 38.1211 33.8711C37.5233 34.4689 37.1875 35.2796 37.1875 36.125C37.1875 36.9704 37.5233 37.7811 38.1211 38.3789C38.7189 38.9767 39.5296 39.3125 40.375 39.3125ZM43.5625 20.1875H38.25V25.5H47.7275L43.5625 20.1875ZM19.125 39.3125C19.9704 39.3125 20.7811 38.9767 21.3789 38.3789C21.9767 37.7811 22.3125 36.9704 22.3125 36.125C22.3125 35.2796 21.9767 34.4689 21.3789 33.8711C20.7811 33.2733 19.9704 32.9375 19.125 32.9375C18.2796 32.9375 17.4689 33.2733 16.8711 33.8711C16.2733 34.4689 15.9375 35.2796 15.9375 36.125C15.9375 36.9704 16.2733 37.7811 16.8711 38.3789C17.4689 38.9767 18.2796 39.3125 19.125 39.3125Z"
                  fill="#AD1B1E"
                />
              </svg>
            </div>
            <div class="col-9">
              <p class="card-title judulcard">Lebih cepat</p>
            </div>
            <div class="row bawah" style="padding-top: 2rem">
              Kami bertanggung jawab mewakili online shop Anda untuk semua
              masalah pengiriman paket.
            </div>
          </div>
        </div>
        <div class="card card-alasan">
          <div class="row">
            <div class="col-3">
              <svg
                class="ml-3"
                xmlns="http://www.w3.org/2000/svg"
                width="40"
                height="40"
                viewBox="0 0 54 54"
                fill="none"
              >
                <path
                  d="M21.5189 19.6425L22.6777 23.8342C23.7689 27.783 24.3134 29.7585 25.9177 30.6562C27.5219 31.5562 29.5582 31.0252 33.6307 29.9677L37.9507 28.8427C42.0232 27.7852 44.0594 27.2565 44.9864 25.7017C45.9134 24.1447 45.3689 22.1692 44.2754 18.2205L43.1189 14.031C42.0277 10.08 41.4809 8.1045 39.8789 7.20675C38.2724 6.30675 36.2362 6.83775 32.1637 7.8975L27.8437 9.01799C23.7712 10.0755 21.7349 10.6065 20.8102 12.1635C19.8832 13.7182 20.4277 15.6937 21.5189 19.6425Z"
                  fill="#AD1B1E"
                />
                <path
                  d="M5.12318 11.8057C5.18246 11.5921 5.28328 11.3921 5.41988 11.2174C5.55647 11.0427 5.72616 10.8967 5.91924 10.7876C6.11233 10.6785 6.32502 10.6086 6.54515 10.5817C6.76529 10.5549 6.98856 10.5717 7.20218 10.6312L11.0339 11.6932C12.0494 11.969 12.9762 12.5032 13.7238 13.2438C14.4714 13.9843 15.0145 14.9059 15.2999 15.9187L20.1397 33.4372L20.4952 34.6657C21.9194 35.199 23.1434 36.1957 23.9197 37.5187L24.6172 37.3027L44.5747 32.1165C44.7892 32.0607 45.0126 32.0476 45.2322 32.0781C45.4517 32.1086 45.6631 32.182 45.8543 32.2942C46.0455 32.4064 46.2127 32.5552 46.3464 32.732C46.48 32.9088 46.5776 33.1102 46.6334 33.3247C46.6893 33.5393 46.7023 33.7627 46.6718 33.9822C46.6413 34.2018 46.5679 34.4132 46.4557 34.6044C46.3435 34.7955 46.1947 34.9627 46.0179 35.0964C45.8411 35.2301 45.6397 35.3277 45.4252 35.3835L25.5397 40.5495L24.8017 40.779C24.7859 43.6365 22.8127 46.2487 19.8292 47.025C16.2494 47.9565 12.5707 45.8955 11.6122 42.426C10.6537 38.9543 12.7777 35.3857 16.3552 34.4565C16.5315 34.4111 16.7093 34.372 16.8884 34.3395L12.0464 16.8165C11.9161 16.3663 11.6715 15.9575 11.3363 15.6299C11.0012 15.3022 10.587 15.0669 10.1339 14.9467L6.29993 13.8825C6.08628 13.8234 5.88636 13.7229 5.71158 13.5865C5.53681 13.4502 5.3906 13.2808 5.28133 13.0879C5.17205 12.8951 5.10184 12.6826 5.0747 12.4626C5.04757 12.2426 5.06404 12.0194 5.12318 11.8057Z"
                  fill="#AD1B1E"
                />
              </svg>
            </div>
            <div class="col-9">
              <p class="card-title judulcard">Paket double</p>
            </div>
            <div class="row bawah" style="padding-top: 2rem">
              Tidak akan ada pengiriman double karena mudah terdeteksi
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Layanan -->
    <div
      class="page3"
      style="background-color: #f5f4f6; padding-bottom: 5vw"
      id="page3"
    >
      <!-- Intro Layanan -->
      <div class="row row-layanan mt-5 pt-5" style="width: 100%">
        <p class="judul-layanan">
          Layanan kami untuk <span style="color: AD1B1E">Anda</span>
        </p>
      </div>
      <div class="row row-layanan">
        <p class="ket-layanan">
          Sicepat menyediakan layanan yang cocok untuk kebutuhan anda. Pilih
          <br />
          layanan yang tepat untuk bisnis anda.
        </p>
      </div>

      <!-- Jenis layanan -->
      <div
        class="container-fluid"
        style="
          margin-top: 7vw;
          margin-left: 1.4vw;
          padding-bottom: 2vw;
          max-width: 99%;
        "
      >
        <div class="row ctn-layanan">
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4 card card-layanan">
            <div class="card-title">
              <img
                style="width: 55%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/service/sicepat-siuntung.png"
              />
            </div>
            <p class="mt-4">
              Layanan Pengiriman Cepat Yang Murah Dengan Harga Regular
            </p>
            <button
              type="button"
              class="btn-layanan"
              style="margin-top: 3.3rem"
            >
              Pilih Layanan
            </button>
          </div>
          <div class="col-lg-4 mb-4 col-md-4 col-sm-6 card card-layanan">
            <img
              style="width: 45%; padding: 0.6rem 0rem"
              src="https://fe-cft.cdn.sicepat.express/web-company/public/images/service/sicepat-best.png"
            />
            <p class="mt-4" style="padding-top: 0.2rem">
              Barang cepat sampai tujuan hanya dengan estimasi sehari
            </p>
            <button
              type="button"
              class="btn-layanan"
              style="margin-top: 3.9rem"
            >
              Pilih Layanan
            </button>
          </div>
          <div class="col-lg-4 mb-4 col-md-4 col-sm-6 card card-layanan">
            <img
              style="width: 45%"
              src="https://fe-cft.cdn.sicepat.express/web-company/public/images/service/sicepat-halu.png"
            />
            <p class="mt-4">
              Layanan pengiriman dengan tarif ongkir mulai dari 5 ribu rupiah
              yang tersedia di E-Commerce
            </p>
            <button type="button" class="btn-layanan">Pilih Layanan</button>
          </div>
        </div>
        <div class="row ctn-layanan">
          <div class="col-lg-4 mb-4 col-md-4 col-sm-6 card card-layanan">
            <img
              style="width: 50%; margin-bottom: 1vw"
              src="https://fe-cft.cdn.sicepat.express/web-company/public/images/service/sicepat-gokil.png"
            />
            <p class="mt-4">
              Layanan dengan pengiriman Barang minimum charge 10kg dengan harga
              yang lebih ekonomis
            </p>
            <button
              type="button"
              class="btn-layanan"
              style="margin-top: 3.8rem"
            >
              Pilih Layanan
            </button>
          </div>
          <div
            class="col-lg-3 mb-4 col-md-4 col-sm-6 mx-auto card card-layanan"
          >
            <img
              style="width: 35%"
              src="https://fe-cft.cdn.sicepat.express/web-company/public/images/service/sicepat-h3lo.png"
            />
            <p class="mt-4">
              Cukup bayar 2kg untuk kiriman barang 3,3kg dan hanya berlaku di
              Social Commerce, drop paket di gerai atau PUDO
            </p>
            <button
              type="button"
              class="btn-layanan"
              style="margin-top: 2.7rem"
            >
              Pilih Layanan
            </button>
          </div>
          <div
            class="col-lg-4 mb-4 col-md-4 col-sm-6 mx-auto card card-layanan"
          >
            <img
              style="width: 25%"
              src="https://fe-cft.cdn.sicepat.express/web-company/public/images/service/sicepat-go.png"
            />
            <p class="mt-4">
              Kini SiCepatGo! makin hemat dan cepat untuk kiriman internasional
              hingga ke seluruh benua
            </p>
            <button type="button" class="btn-layanan" style="margin-top: 4rem">
              Pilih Layanan
            </button>
          </div>
        </div>
        <div
          class="row row-layanan ctn-layanan mx-auto"
          style="padding-top: 0.7vw"
        >
          <div class="col-lg-4 mb-4 col-md-4 col-sm-6 card card-layanan">
            <img
              style="width: 26%"
              src="https://fe-cft.cdn.sicepat.express/web-company/public/images/service/sicepat-cod.png"
            />
            <p class="mt-4">
              Kini SiCepatGo! makin hemat dan cepat untuk kiriman internasional
              hingga ke seluruh benua
            </p>
            <button type="button" class="btn-layanan">Pilih Layanan</button>
          </div>
          <div class="col-lg-4 mb-4 col-md-4 col-sm-6 card card-layanan">
            <img
              style="width: 45%"
              src="https://fe-cft.cdn.sicepat.express/web-company/public/images/service/sicepat-bbm.png"
            />
            <p class="mt-4">
              Kini SiCepatGo! makin hemat dan cepat untuk kiriman internasional
              hingga ke seluruh benua
            </p>
            <button type="button" class="btn-layanan">Pilih Layanan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Partner -->
    <div class="row" style="margin-top: 8vw" id="page4">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <!-- Intro partner -->
        <p class="atas pl-lg-5 pl-md-3 pl-sm-0">E-COMMERCE</p>
        <p class="judul pl-lg-5 pl-md-3 pl-sm-0">
          Partner <span style="color: #cd2028">Kami</span>
        </p>
        <p class="desc pl-lg-5 pl-md-3 pl-sm-0">
          SiCepat siap melayani anda dan telah<br />
          bekerjasama dengan 21 partner dan e-commerce<br />
          di Indonesia.
        </p>
        <img
          src="/asset/Partner.png"
          class="pl-lg-5 pl-md-3 pl-sm-0"
          style="width: 93%"
        />
      </div>

      <!-- Partner -->
      <div class="col-lg-7 col-md-6 col-sm-12">
        <div class="container-fluid">
          <div class="row mt-3 pt-4 pl-2">
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/marketplace/tokopedia.png"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/marketplace/shopee.png"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/marketplace/bukalapak.svg"
              />
            </div>
          </div>
          <div class="row pl-2">
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/marketplace/lazada.png"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/marketplace/blibli.png"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/marketplace/jakmall.png"
              />
            </div>
          </div>
          <div class="row pl-2">
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/marketplace/zalora.png"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/marketplace/zilingo.png"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 55%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/heavenlight.png"
              />
            </div>
          </div>
          <div class="row pl-2">
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 45%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/Everwhite.png"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 50%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/Lights.clo.png"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 50%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/Macadamia-House.png"
              />
            </div>
          </div>
          <div class="row pl-2">
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 35%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/klamby.png"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 50%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/Mayoutfit.png"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 50%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/geulis.png"
              />
            </div>
          </div>
          <div class="row pl-2">
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 45%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/Oclo.jpg"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 50%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/vanilla-hijab.png"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 45%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/male.PNG"
              />
            </div>
          </div>
          <div class="row pl-2">
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 45%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/KAMI-Idea.jpg"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 40%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/Livehaf.jpg"
              />
            </div>
            <div class="col mb-4 card-partner">
              <img
                class="card-img"
                style="width: 35%"
                src="https://fe-cft.cdn.sicepat.express/web-company/public/images/partner/Metamorv.jpg"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Form validation -->
    <div
      class="page5 pb-5"
      style="background-color: hsl(270, 10%, 96%)"
      id="page5"
    >
      <div class="row mt-5">
        <div class="col-8 card contact" style="margin: auto">
          <div class="row">
            <!-- Keterangan kiri form -->
            <div class="col-5" style="margin-left: -1rem">
              <div
                class="gambarkiri"
                style="
                  background-image: url(/asset/side.png);
                  background-size: cover;
                  background-position: center;
                  padding-bottom: 14rem;
                "
              >
                <p class="info-kontak mt-4">Informasi Kontak</p>
                <div class="row mt-5">
                  <div class="col-2" style="padding-left: 2rem">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="22"
                      height="32"
                      viewBox="0 0 29 37"
                      fill="none"
                    >
                      <path
                        d="M14.5 0.762695C10.6558 0.767095 6.97026 2.25038 4.25197 4.88717C1.53368 7.52397 0.00455059 11.099 1.54265e-05 14.828C-0.00458884 17.8753 1.02158 20.8399 2.9211 23.2671C2.9211 23.2671 3.31656 23.7722 3.38115 23.8451L14.5 36.5652L25.6241 23.8387C25.6821 23.7709 26.0789 23.2671 26.0789 23.2671L26.0802 23.2633C27.9788 20.8372 29.0045 17.8739 29 14.828C28.9954 11.099 27.4663 7.52397 24.748 4.88717C22.0297 2.25038 18.3442 0.767095 14.5 0.762695ZM14.5 19.9426C13.4572 19.9426 12.4377 19.6426 11.5706 19.0806C10.7035 18.5186 10.0277 17.7198 9.62864 16.7852C9.22956 15.8507 9.12514 14.8223 9.32859 13.8301C9.53204 12.838 10.0342 11.9267 10.7716 11.2114C11.509 10.4961 12.4485 10.0089 13.4713 9.81159C14.4942 9.61424 15.5543 9.71553 16.5178 10.1026C17.4812 10.4898 18.3047 11.1453 18.8841 11.9864C19.4635 12.8275 19.7727 13.8164 19.7727 14.828C19.771 16.1839 19.2149 17.4839 18.2264 18.4427C17.238 19.4015 15.8979 19.9409 14.5 19.9426Z"
                        fill="#FFCECE"
                      />
                    </svg>
                  </div>
                  <div class="col-9">
                    <p class="informasi">
                      Medialand Tower Lantai 7, Jalan H. R. Rasuna Said
                      Superblok 2 Kawasan Kuningan Persada, RT.1/RW.6,
                      Desa/Kelurahan Guntur, Kecamatan Setiabudi, Jakarta
                      Selatan, Provinsi DKI Jakarta 12980
                    </p>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-2" style="padding-left: 2.1rem">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="23"
                      height="28"
                      viewBox="0 0 29 31"
                      fill="none"
                    >
                      <path
                        d="M5.83222 13.3745C8.15222 18.0653 11.89 21.9107 16.4494 24.2976L19.9939 20.651C20.445 20.1869 21.0733 20.0543 21.6372 20.2366C23.4417 20.8499 25.375 21.1814 27.3889 21.1814C27.8162 21.1814 28.226 21.3561 28.5281 21.6669C28.8303 21.9777 29 22.3993 29 22.8389V28.6403C29 29.0799 28.8303 29.5015 28.5281 29.8123C28.226 30.1232 27.8162 30.2978 27.3889 30.2978C20.1249 30.2978 13.1584 27.3291 8.02202 22.0447C2.88561 16.7603 0 9.59316 0 2.11992C0 1.68032 0.169742 1.25872 0.471883 0.947879C0.774025 0.637034 1.18382 0.462402 1.61111 0.462402H7.25C7.67729 0.462402 8.08709 0.637034 8.38923 0.947879C8.69137 1.25872 8.86111 1.68032 8.86111 2.11992C8.86111 4.19183 9.18333 6.18085 9.77944 8.03728C9.95667 8.61741 9.82778 9.26384 9.37667 9.72795L5.83222 13.3745Z"
                        fill="#FFCECE"
                      />
                    </svg>
                  </div>
                  <div class="col-9">
                    <p class="informasi">021-3020-5050</p>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-2" style="padding-left: 2.1rem">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="28"
                      height="28"
                      viewBox="0 0 33 33"
                      fill="none"
                    >
                      <path
                        d="M16.5 0.940918C25.613 0.940918 33 8.06481 33 16.8531C33 25.6414 25.613 32.7653 16.5 32.7653C13.5841 32.7699 10.7195 32.0257 8.20052 30.6092L0.00662321 32.7653L2.23742 24.8601C0.767426 22.4301 -0.00484832 19.6664 2.29024e-05 16.8531C2.29024e-05 8.06481 7.38707 0.940918 16.5 0.940918ZM10.8768 9.37438L10.5468 9.38711C10.3332 9.39966 10.1244 9.45379 9.93302 9.54623C9.75403 9.64398 9.59064 9.76618 9.44792 9.90903C9.24992 10.0888 9.13772 10.2448 9.01727 10.3959C8.40697 11.1612 8.07837 12.1006 8.08337 13.066C8.08667 13.8457 8.29787 14.6047 8.62787 15.3144C9.30272 16.7497 10.4132 18.2693 11.8784 19.6775C12.2315 20.0165 12.578 20.357 12.9509 20.6736C14.7715 22.2194 16.941 23.3342 19.2869 23.9293L20.2241 24.0677C20.5293 24.0836 20.8346 24.0613 21.1415 24.047C21.622 24.0231 22.0912 23.8976 22.5159 23.6795C22.732 23.5721 22.9429 23.4553 23.1479 23.3294C23.1479 23.3294 23.2188 23.2848 23.3541 23.1862C23.5769 23.027 23.7138 22.9141 23.8986 22.7279C24.0356 22.5911 24.1544 22.4303 24.2451 22.2474C24.3738 21.988 24.5025 21.4931 24.5553 21.081C24.5949 20.7659 24.5834 20.5941 24.5784 20.4875C24.5718 20.3172 24.425 20.1406 24.2649 20.0658L23.3046 19.6505C23.3046 19.6505 21.8691 19.0474 20.9913 18.6623C20.8995 18.6237 20.801 18.6015 20.7009 18.5971C20.588 18.5859 20.4739 18.5982 20.3664 18.633C20.2588 18.6679 20.1602 18.7245 20.0772 18.7992C20.069 18.796 19.9584 18.8867 18.7655 20.2806C18.697 20.3693 18.6027 20.4364 18.4945 20.4732C18.3864 20.5101 18.2693 20.515 18.1583 20.4875C18.0508 20.4597 17.9455 20.4246 17.8431 20.3824C17.6385 20.2997 17.5676 20.2679 17.4273 20.2106C16.4803 19.8121 15.6035 19.2736 14.8286 18.6146C14.6207 18.4396 14.4276 18.2486 14.2296 18.064C13.5805 17.4645 13.0148 16.7863 12.5466 16.0464L12.4493 15.8952C12.3793 15.7936 12.3228 15.684 12.281 15.569C12.2183 15.3351 12.3816 15.1473 12.3816 15.1473C12.3816 15.1473 12.7826 14.7241 12.969 14.4949C13.1505 14.2722 13.304 14.0558 13.403 13.9014C13.5977 13.5991 13.6587 13.2888 13.5564 13.0485C13.0944 11.9601 12.6159 10.8765 12.1242 9.80083C12.0269 9.58761 11.7381 9.43485 11.4758 9.40462C11.3867 9.39507 11.2976 9.38552 11.2085 9.37916C10.9869 9.36854 10.7648 9.37067 10.5435 9.38552L10.8752 9.37279L10.8768 9.37438Z"
                        fill="#FFCECE"
                      />
                    </svg>
                  </div>
                  <div class="col-9">
                    <p class="informasi">0812 9966 6088</p>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-2" style="padding-left: 2.1rem">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="28"
                      height="23"
                      viewBox="0 0 32 27"
                      fill="none"
                    >
                      <path
                        d="M28.8 6.86228L16 14.9427L3.2 6.86228V3.63012L16 11.7105L28.8 3.63012M28.8 0.397949H3.2C1.424 0.397949 0 1.83626 0 3.63012V23.0231C0 23.8803 0.337142 24.7025 0.937258 25.3086C1.53737 25.9148 2.35131 26.2553 3.2 26.2553H28.8C29.6487 26.2553 30.4626 25.9148 31.0627 25.3086C31.6629 24.7025 32 23.8803 32 23.0231V3.63012C32 2.77289 31.6629 1.95078 31.0627 1.34463C30.4626 0.73848 29.6487 0.397949 28.8 0.397949Z"
                        fill="#FFCECE"
                      />
                    </svg>
                  </div>
                  <div class="col-9">
                    <p class="informasi">customer.care@sicepat.com</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Kanan tempat form -->
            <div class="col-7 mt-4">
              <p class="kontak">Contact Us</p>
              <form>
                <div class="form-group">
                  <label class="form-tulisan">Nama</label>
                  <input
                    type="text"
                    class="form-control"
                    id="Nama"
                    placeholder="Masukkan nama"
                  />
                  <p id="nama-error" class="pesanerror"></p>
                </div>
                <div class="form-group">
                  <label class="form-tulisan">Nomor telepon</label>
                  <input
                    type="text"
                    class="form-control"
                    id="Notelp"
                    placeholder="Masukkan nomor telepon"
                  />
                  <p id="notelp-error" class="pesanerror"></p>
                </div>
                <div class="form-group">
                  <label class="form-tulisan">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="Email"
                    placeholder="Masukkan email"
                  />
                  <p id="email-error" class="pesanerror"></p>
                </div>
                <div class="form-group">
                  <label class="form-tulisan">Pesan</label>
                  <textarea
                    class="form-control"
                    style="padding-bottom: 2rem"
                    id="Pesan"
                    placeholder="Masukkan pesan"
                  ></textarea>
                  <p id="pesan-error" class="pesanerror"></p>
                </div>
                <button
                  type="button"
                  class="container btn-layanan"
                  style="margin-top: -0.01rem; float: right"
                  onclick="validateForm()"
                >
                  Kirim
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer id="page6" class="page-footer font-small teal pt-4" style="color: white; background-color: #cd2028;">
      <div class="container-fluid text-center text-md-left">
        <h4 style="overflow-y: hidden;font-weight: 600;">Link</h4>
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <div><a class="link" href="http://localhost:8000/response-hey=open" target="_blank">Hello</a></div>
            <div><a class="link" href="http://localhost:8000/response-ling-file=open" target="_blank">Link</a></div>
            <div><a class="link" href="http://localhost:8000/open-link-style" target="_blank">Style</a></div>
            <div><a class="link" href="http://localhost:8000/response-boot-respon=open" target="_blank">Responsive</a></div>
            <div><a class="link" href="http://localhost:8000/latt-respon=open" target="_blank">Latihan</a></div>
          </div>

          <hr class="clearfix w-100 d-md-none pb-3" />

          <div class="col-md-6 mb-md-0 mb-3">
            <div><a class="link" href="http://localhost:8000/opn-file-valid" target="_blank">Validation</a></div>
            <div><a class="link" href="http://localhost:8000/response-js-first=open" target="_blank">Javascript-1</a></div>
            <div><a class="link" href="http://localhost:8000/js-sc=open" target="_blank">Javascript-2</a></div>
            <div><a class="link" href="http://localhost:8000/prjct-link-duplicate" target="_blank">Linktree</a></div>
          </div>
        </div>
      </div>

      <div class="footer-copyright text-center py-2" style="background-color: #8a141a; font-size: 14px;">
        © 2023 Copyright:
        <a href="/" style="text-decoration: none; color: white;"> Sicepat-redesain.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </body>

  <!-- Import jquery -->
  <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"
  ></script>
  <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
  ></script>

  <!-- Slicker responsif skrip -->
  <script type="text/javascript">
    $(".alasan").slick({
      infinite: true,
      dots: true,
      prevArrow: false,
      nextArrow: false,
      slidesToShow: 5,
      slidesToScroll: 5,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  </script>

  <script>
    // Mengganti warna background navbar
    const navEl = document.querySelector(".nav");

    window.addEventListener("scroll", () => {
      if (window.scrollY < 100) {
        navEl.classList.remove("navbar-scrolled");
      } else {
        navEl.classList.add("navbar-scrolled");
      }
    });

    // Validasi form
    function validateForm() {
      var nama = document.getElementById("Nama");
      var namaError = document.getElementById("nama-error");
      var isValid = true;
      if (nama.value == "") {
        namaError.innerText = "Nama tidak boleh kosong!";
        isValid = false;
      } else if (nama.value.length < 3) {
        namaError.innerText = "Nama harus lebih dari 2 karakter";
        isValid = false;
      } else {
        namaError.innerText = "";
        isValid = true;
      }

      var nomor = document.getElementById("Notelp");
      var nomorError = document.getElementById("notelp-error");
      if (nomor.value == "") {
        nomorError.innerText = "Nomor telepon tidak boleh kosong!";
        isValid = false;
      } else if (nomor.value.length < 10 || nomor.value.length > 13) {
        nomorError.innerText = "Nomor harus 10 hingga 13 karakter";
        isValid = false;
      } else if (!nomor.value.startsWith("08")) {
        nomorError.innerText = "Masukkan nomor yang valid";
        isValid = false;
      } else {
        nomorError.innerText = "";
        isValid = true;
      }
      var email = document.getElementById("Email");
      var emailError = document.getElementById("email-error");
      if (email.value == "") {
        emailError.innerText = "Email tidak boleh kosong!";
        isValid = false;
      } else if (!email.value.includes("@") || !email.value.includes(".")) {
        emailError.innerText = "Masukkan email yang valid";
        isValid = false;
      } else {
        emailError.innerText = "";
        isValid = true;
      }
      var pesan = document.getElementById("Pesan");
      var pesanError = document.getElementById("pesan-error");
      if (pesan.value == "") {
        pesanError.innerText = "Pesan tidak boleh kosong!";
        isValid = false;
      } else {
        pesanError.innerText = "";
        isValid = true;
      }
    }
  </script>
</html>
