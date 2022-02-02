<!-- BEGIN : RINGKOS -->
<div class="flex flex-col sm:flex-row items-center my-5">
    <h2 class="text-lg font-medium mr-auto">
        CREATED PROJECT
    </h2>
</div>
<?php
    $uri = $this->uri->segment(2);
    $text2 = $text3 = $text4 = $text5 = $text6 = "text-gray-700 dark:text-gray-600";
    $btn2 = $btn3 = $btn4 = $btn5 = $btn6 = "text-gray-600 bg-gray-200 dark:bg-dark-1";
    $link2 = $link3 = $link4 = $link5 = $link6 = "";
    if($v['id_project'] > 0):
        if($v['nama_project'] != ""):
            $btn2 = "btn-primary";
            $text2 = "";
            $link2 = "href='".base_url().'pic/tambah_project_2/'.$v['id_project']."'";
        endif;
        if($v['client_project'] > 0):
            $btn3 = "btn-primary";
            $text3 = "";
            $link3 = "href='".base_url().'pic/tambah_project_3/'.$v['id_project']."'";
        endif;
        if($v['pelaksana_project'] > 0):
            $btn4 = "btn-primary";
            $text4 = "";
            $link4 = "href='".base_url().'pic/tambah_project_4/'.$v['id_project']."'";
        endif;

        if($v['jenis_project'] == 1):
            if(count($v['produksi']) > 0):
                $btn5 = "btn-primary";
                $text5 = "";
                $link5 = "href='".base_url().'pic/tambah_project_5/'.$v['id_project']."'";
            endif;
        elseif($v['jenis_project'] == 2):
            if(count($v['placement']) > 0):
                $btn6 = "btn-primary";
                $text6 = "";
                $link6 = "href='".base_url().'pic/tambah_project_6/'.$v['id_project']."'";
            endif;
        else:
            if(count($v['produksi']) > 0):
                $btn5 = "btn-primary";
                $text5 = "";
                $link5 = "href='".base_url().'pic/tambah_project_5/'.$v['id_project']."'";
            endif;
            if(count($v['placement']) > 0):
                $btn6 = "btn-primary";
                $text6 = "";
                $link6 = "href='".base_url().'pic/tambah_project_6/'.$v['id_project']."'";
            endif;
        endif;

    endif;


    if($uri == "tambah_project_2"):
        $btn2 = "btn-primary";
        $text2 = "";
    elseif($uri == "tambah_project_3"):
        $btn3 = "btn-primary";
        $text3 = "";
    elseif($uri == "tambah_project_4"):
        $btn4 = "btn-primary";
        $text4 = "";
    elseif($uri == "tambah_project_5"):
        $btn5 = "btn-primary";
        $text5 = "";
    elseif($uri == "tambah_project_6"):
        $btn6 = "btn-primary";
        $text6 = "";
    endif;

    // print_r($uri);
?>

<!-- BEGIN: Wizard Layout -->
<div class="box py-10 sm:py-10 mt-5">
    <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
        <a <?= ($v['id_project'] == 0 ? "" : "href='".base_url().'pic/tambah_project/'.$v['id_project']."'") ?> class="lg:text-center flex items-center lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto">Judul Kegiatan</div>
        </a>
        <a <?= $link2 ?> class="lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn <?= $btn2 ?>">2</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto <?= $text2 ?>">Dokumen</div>
        </a>
        <a <?= $link3 ?> class="lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn t <?= $btn3 ?>">3</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto <?= $text3 ?>">Client</div>
        </a>
        <a <?= $link4 ?> class="lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
            <button class="w-10 h-10 rounded-full btn t <?= $btn4 ?>">4</button>
            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto <?= $text4 ?>">Pelaksana</div>
        </a>

        <?php if($v['id_project'] > 0): ?>
            <?php if($v['jenis_project'] == 1): ?>
                <a <?= $link5 ?> class="lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn  <?= $btn5 ?>">5</button>
                    <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto <?= $text5 ?>">Produksi</div>
                </a>

            <?php elseif($v['jenis_project'] == 2): ?>
                <a <?= $link6 ?> class="lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn  <?= $btn6 ?>">5</button>
                    <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto <?= $text6 ?>">Placement</div>
                </a>

            <?php else : ?>
                <a <?= $link5 ?> class="lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn  <?= $btn5 ?>">5</button>
                    <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto <?= $text5 ?>">Produksi</div>
                </a>
                
                <a <?= $link6 ?> class="lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn  <?= $btn6 ?>">6</button>
                    <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto <?= $text6 ?>">Placement</div>
                </a>

            <?php endif; ?>
        <?php endif; ?>
        
        <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>
    </div>