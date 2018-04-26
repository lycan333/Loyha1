<?

$ar = [
    ['books/', 'Kitoblar', 'book'],
    ['employes/', 'Kitobxonlar', 'users'],
    ['authors/', 'Avtorlar', 'feather'],
    ['creditess/', 'Masul shaxslar', 'suitcase'],
    ['categories/', 'Kategoriya', 'menu'],
    ['publisher/', 'Nashriyotlar', 'bookmarks'],
    ['lang/', 'Internation', 'globe'],
];


?>

<div class="sidebar-menu">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="index.html">
                    <img src="assets/images/logo@2x.png" width="120" alt=""/>
                </a>
            </div>

            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon">
                    <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>


            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>


        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <? foreach ($ar as $item) { ?>
                <li>
                    <a href="<?= \yii\helpers\Url::to([$item[0]]) ?>">
                        <i class="entypo-<?=$item[2]?>"></i>
                        <span class="title"><?=$item[1]?></span>
                    </a>
                </li>
            <? } ?>

        </ul>

    </div>

</div>