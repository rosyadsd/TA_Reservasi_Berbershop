{{-- Showcase --}}
<div class="container px-5 mt-4 me-1">
    <div class="row gx-5 align-items-center">
        <div class="col-lg-6">
            <!-- Mashead text and app badges-->
            <div class="mb-5 mb-lg-0 text-center text-lg-start">
                <h1 class="display-1 lh-1 mb-3">Iphone 14 Dynamic Island</h1>
                <p class="lead fw-normal text-muted mb-3">Memperkenalkan Dynamic Island. Deteksi Tabrakan. Kamera 48 MP untuk resolusi hingga 4x lebih besar. Chip Ryzen™ 3970X. Mantep gk dy ?</p>
                <p class="fw-bold">Harga : </p>
                <p class="mb-1"><span class="text-muted text-decoration-line-through">Rp. 70.000.000</span><br>Rp. 69.999.999</p>
                <button class="btn btn-primary" id="musik_kematian" onClick="playPause()" style="border-radius: 12px">
                    <audio
                      src="/music/selamat.mp3"
                    ></audio>
                    Beli Sekarang!
                  </button>
                  
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Masthead device mockup feature-->
            <div class="masthead-device-mockup">
                <div class="device-wrapper">
                    <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                        <div class="screen bg-black">
                            <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="/assets/img/demo-screen.mp4" type="video/mp4" /></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var aud = document.getElementById("musik_kematian").children[0];
    var isPlaying = false;
    aud.pause();
  
    function playPause() {
      if (isPlaying) {
        aud.pause();
      } else {
        aud.play();
      }
      isPlaying = !isPlaying;
    }
  </script>
{{-- Showcase --}}