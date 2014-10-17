<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" >G-EDUCAR v0.1</a>
            </div>
               <ul class="nav navbar-top-links navbar-right">
                                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>                          
                            <a class="active" href="<?php echo $this->Html->url(array('controller' => 'Schools', 'action' => 'index')); ?>"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Escola<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php echo $this->Html->link(__('Lista'), array('controller' => 'Schools', 'action' => 'index')); ?>
                                </li>
                                <li>
                                   <?php echo $this->Html->link(__('Cursos'), array('controller' => 'Courses', 'action' => 'index')); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('Disciplinas'), array('controller' => 'Disciplines', 'action' => 'index')); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('Professor'), array('controller' => 'Teachers', 'action' => 'index')); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('Alunos'), array('controller' => 'Students', 'action' => 'index')); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Turma<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php echo $this->Html->link(__('Lista'), array('controller' => 'Groups', 'action' => 'index')); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('Disciplinas'), array('controller' => 'DisciplineGroups', 'action' => 'index')); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('Matricular Aluno'), array('controller' => 'GroupStudents', 'action' => 'index')); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('Matricular Aluno em Disciplinas'), array('controller' => 'DisciplineStudents', 'action' => 'index')); ?>
                                </li>
                             </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Financeiro<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Gerar Boleto</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Etc...</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Relatório<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Pagamentos do Mês</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Etc...</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>