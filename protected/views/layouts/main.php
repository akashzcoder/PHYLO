<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />

<!-- blueprint CSS framework -->
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
	media="screen, projection" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	media="print" />
<link rel="stylesheet" type="text/css"
	href="/css/font-awesome.css" />
<link rel="stylesheet" type="text/css"
	href="/css/font-awesome-ie7.css" />

<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->


<!-- custom css -->
<link rel="stylesheet" type="text/css"
	href="/css/style.css" />


<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	
	<div class="container" id="page">

		<div id="header"></div>
		<!-- header -->

		<div id="top-panel">
			<div id='logo' class='span3'>PHYLO | Citizen Science</div>

			<?php $this->widget('bootstrap.widgets.TbNavbar', array(
					'type'=>'', // null or 'inverse'
					'brand'=>'PHYLO | Citizen Science',
					//'collapse'=>true, // requires bootstrap-responsive.css
					'htmlOptions'=>array('id'=>''),

					'items'=>array(
							array(
									'class'=>'bootstrap.widgets.TbMenu',
									'htmlOptions'=>array('id'=>'nav', 'class'=>'span6'),

									'items'=>array(
											array('label'=>'Play', 'url'=>'/index.php/play', 'active'=>(Yii::app()->controller->id === 'site' && Yii::app()->controller->action->id === 'play') ^ (Yii::app()->controller->id === 'site' && Yii::app()->controller->action->id === 'index')),
											array('label'=>'Tutorial', 'url'=>'/index.php/tutorial', 'active'=>Yii::app()->controller->id === 'site' && Yii::app()->controller->action->id === 'tutorial'),
											array('label'=>'About', 'url'=>'/index.php/about', 'active'=>Yii::app()->controller->id === 'site' && Yii::app()->controller->action->id === 'about'),
											array('label'=>'Credits', 'url'=>'/index.php/credits', 'active'=>Yii::app()->controller->id === 'site' && Yii::app()->controller->action->id === 'credits'),
											array('label'=>'Ranking', 'url'=>'/index.php/ranking', 'active'=>Yii::app()->controller->id === 'site' && Yii::app()->controller->action->id === 'ranking'),
									),
							),
					array(
							'class'=>'bootstrap.widgets.TbMenu',
							'htmlOptions'=>array('class'=>'pull-right'),
							'items'=>array(
									array('label'=>'Login', 'url'=>'#'),
									'---',
									array('label'=>'settings', 'items'=>array(
											array(
													'url' => '#',
													'dropDown' => true,
													'label'=>'Language', 
													'items' => array(
														array('label' => 'English', 'url'=>'?lang=en'),
														array('label' => '', 'url'=>'#')									
												),
											),
											array(
												'label'=>'Customize', 
												'url'=>'#customize',
												),
									)),
							),
					),
			),
			)); ?>
		</div>
		
		
		<!-- mainmenu -->
		<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?>
		<!-- breadcrumbs -->
		<?php endif?>
		<!-- additional script -->
		<?php
			include_once "panel.php";
		?>
		<!--
		<script 
		src="/js/twitter-bootstrap/bootstrap.js" 
		type="text/javascript"></script> -->
		
		<script 
		src="/js/jquery/jquery-ui-1.9.1.custom.min.js" 
		type="text/javascript"></script>
		
			<div id='mid-panel' class='forceDisplayNone'>	
				<?php echo $content; ?>
			</div>

		<div class="clear"></div>
		
		<div id="footer">
			Want to contribute? <a href='https://github.com/McGill-CSB/PHYLO'>Click Here</a><br>
			Copyright &copy;
			<?php echo date('Y'); ?>
			by Alfred Kam, PHYLO, McGill CSB and McGill University.<br /> All Rights Reserved.<br />
			
		</div>
		<!-- footer -->

	</div>
	<!-- page -->
	
	<!-- additional script -->
	<!-- login -->
        <!-- validation scripts -->
        <script src='/js/validation/cookie.validation.js' type='text/javascript'></script>
        <script src='/js/validation/login.validation.js' type='text/javascript'></script>

</body>


</html>
