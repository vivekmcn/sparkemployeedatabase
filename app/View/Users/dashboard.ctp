<div class="users index">
    <ul class="dashboardbox">
        <li>
            <b>Employee Count</b><br/>
            <b><?php echo $employeecount; ?><b>
            <br/><?php echo $this->Html->link('List Employees',array('controller' => 'Employees','action' => 'index')); ?>
        </li>
        <li>
            <b>Projects Count</b><br/>
            <?php echo $projectcount; ?>
            <br/><?php echo $this->Html->link('List Projects',array('controller' => 'Projects','action' => 'index')); ?>
        </li>
        <li>
            <b>Skill count</b><br/>
            <?php echo $skillcount; ?>
            <br/><?php echo $this->Html->link('List Skills',array('controller' => 'Skills','action' => 'index')); ?>
        </li>
    </ul>
</div>
<div class="actions">
    
</div>