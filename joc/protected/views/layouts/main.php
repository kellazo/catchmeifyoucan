<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">
   <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>CatchMeIfYouCan</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link type="text/css" rel="stylesheet" media="all" href="<?php echo Yii::app()->request->baseUrl;?>/css/style.css" />
        <link type="text/css" rel="stylesheet" media="all" href="<?php echo Yii::app()->request->baseUrl;?>/css/form.css" />

		
   </head>


<body>

       


<div id="container">


<div id="page">
       <div id="header">
               <div class="site_title">
                       <h1>CatchMeIfYouCan</h1>
                       <div class="description">Descobreix una experiència de joc com mai l'havies vist</div>
               </div> <!-- end site_title -->

               <div class="topmenu">
                    <?php /* $this->widget('zii.widgets.CMenu',array(
                        'id' => 'menu',
                        'items'=>array(
                            array('label'=>'Inici', 'url'=>array('/site/index'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'Historia', 'url'=>array('/site/page', 'view'=>'about'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                             array('label'=>'Contacte', 'url'=>array('/site/contact'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'Ranking', 'url'=>array('/ranking/index'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'Usuaris', 'url'=>array('/usuaris/index'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                            array('label'=>'Accedir', 'url'=>array('/cruge/ui/login'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                            // array('label'=>'Accedir', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest, 'linkOptions' => array( 'class' => 'menulink' ) ),
                           // array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'linkOptions' => array( 'class' => 'menulink' ) ),
                            // array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'linkOptions' => array( 'class' => 'menulink' ) ),
                        ),
                    ));*/
                            
                   $this->widget('zii.widgets.CMenu',array(
                        'id' => 'menu',
                        'items'=>array(
                          array('label'=>'Home', 'url'=>array('/site/index'),'linkOptions' => array( 'class' => 'menulink' ) ),
                          array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions' => array( 'class' => 'menulink' ) ),
                          array('label'=>'Contact', 'url'=>array('/site/contact'),'linkOptions' => array( 'class' => 'menulink' ) ),
                          array('label'=>'Ranking', 'url'=>array('/ranking/index'),'linkOptions' => array( 'class' => 'menulink' ) ),
                          //array('label'=>'Jugar', 'url'=>array('/joc/index'),'linkOptions' => array( 'class' => 'menulink' ) ),
                          array('label'=>'Jugar', 'url'=>array('/joc/index'),'visible'=>!Yii::app()->user->isGuest,'linkOptions' => array( 'class' => 'menulink' ) ),
                          array('label'=>'Administrar Usuarios','url'=>Yii::app()->user->ui->userManagementAdminUrl,'visible'=>!Yii::app()->user->isGuest,'linkOptions' => array( 'class' => 'menulink' ) ),
                          array('label'=>'Login','url'=>Yii::app()->user->ui->loginUrl,'visible'=>Yii::app()->user->isGuest,'linkOptions' => array( 'class' => 'menulink' ) ),
                          array('label'=>'Logout ('.Yii::app()->user->name.')','url'=>Yii::app()->user->ui->logoutUrl,'visible'=>!Yii::app()->user->isGuest,'linkOptions' => array( 'class' => 'menulink' ) ),
                        ),
                      )); ?>



                  
               </div> <!-- end topmenu -->
       </div> <!-- end header -->



      

        <div class="mainwrap">
            <div class="content">
                
                <?php echo $content; ?>

            </div>

       </div><!-- end columns_wrapper -->


       <div id="footer">

               <div class="footer-left">
                    <p>
                        Design by Guillem & Sara<br />
                    </p>
               </div>

               <div class="footer-right">
                       <p>&#169; 2014 Lacetània</a></p>
               </div>

       </div> <!-- end footer -->


</div> <!-- end page -->

</div>

  
<?php echo Yii::app()->user->ui->displayErrorConsole(); ?>
</body>
</html>
