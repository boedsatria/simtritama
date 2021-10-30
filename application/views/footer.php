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
                      
        </script>
        <!-- END: JS Assets-->
    </body>
</html>