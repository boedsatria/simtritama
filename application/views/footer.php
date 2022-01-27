        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="#" onclick="myFunction()" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
            <div id="togle-dark" class="dark-mode-switcher__toggle border <?= get_user_themes($this->session->userdata('userlogin')['id_user'])['btn']; ?>"></div>
        </div>
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <!-- <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script> -->
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&libraries=places"></script> -->
        <script src="<?= base_url(); ?>dist/js/app.js"></script>
        <script type="text/javascript">
            var element = document.getElementById("htmls");
            var nilai_project = document.getElementById("nilai_project");
            var nilai_pro = document.getElementById("nilai_pro");
            var durasi_pro = document.getElementById("durasi_pro");
            var lama_kegiatan = document.getElementById("lama_kegiatan");
            var nilai_sppd = document.getElementById("nilai_sppd");

            function myFunction() {
                element.classList.toggle("dark");
                var themes = element.className;
                if(themes == ""){
                    themes = 'light';
                }

                var urls = `<?= base_url(); ?>user/themes_user/${themes}/<?= $this->session->userdata('userlogin')['id_user'] ?>`;
                const xhttp = new XMLHttpRequest();
                xhttp.open("GET", urls);
                xhttp.send(); 
                
            }


            // durasi_pro.addEventListener("change",function(event){
            //     alert(this.value);
            //     lama_kegiatan.value = this.value;
            // });





            nilai_project.addEventListener("keydown",function(event){
                var key = event.which;
                if((key<48 || key>57) && key != 8 && key != 188) event.preventDefault();
            });

            nilai_project.addEventListener("keyup",function(event){
                this.value = this.value
						.replace(/\D/g, '')
						.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
						.replace(/^0+/, '')
                ;
                get_nilai(this.value);
            });


            function get_nilai(x) {
                var nilai_kontrak = parseFloat(nilai_project.value.replaceAll(".", ""));
                var dpp = nilai_kontrak * 100/110;
                var ppn = dpp*0.1;
                var pph = dpp * 0.02;

                var sp2d = nilai_kontrak-(ppn+pph);


                nilai_sppd.value = parseFloat(sp2d).toLocaleString('id') 
                // console.log(nilai_sppd.value);
            }
                      
        </script>
        <!-- END: JS Assets-->
    </body>
</html>