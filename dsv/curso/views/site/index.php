<?php

/* @var $this yii\web\View */

$this->title = 'Curso';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Seja Bem Vindo!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <!--<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Aluno</h2>

               <center>
					<a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=aluno/create">
					<div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-education"></i> Cadastro de Aluno &raquo;</div>
					</a>
					</br></br>
					<a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=aluno/index">
					<div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-pencil"></i> Gerenciamento de Alunos &raquo;</div>
					</a>
					</br></br>
					
				</center>
		</div>

                <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>--->
            <div class="col-lg-4">
                <h2>Curso</h2>

               <center>
				<a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=curso/create">
				<div class="btn btn-default" style="width: 300px;"><i class="glyphicon glyphicon-book"></i> Cadastro de Cursos</div>
				</a>
				</br></br>
				<a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=curso/index">
				<div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-pencil"></i> Gerenciamento de Cursos &raquo;</div>
				</a>
				</center>
			</div>

                <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>-->
			
		
			
            <div class="col-lg-4">
                <h2>Professor</h2>
                   <center>
						<a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=turma/create">
						<div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-calendar"></i> Cadastro de Turmas &raquo;</div>
						</a>
						</br></br>
						<a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=turma/index">
						<div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-pencil"></i> Gerenciamento de Turmas &raquo;</div>
						</a>
				</center>
			</div>
			</br></br></br>
			</br></br></br>
               
               <!-- <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>-->
            </div>
        </div>

    </div>
</div>
