<?php
    class ProfilesController extends AppController{
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow('Employee');
        }
        public function Employee($emp_id=null){
            
          
            
            $this->layout='profiles';
            app::import('model','Employee');
            app::import('model','Certification');
            app::import('model','Skill');
            app::import('model','Project');
            $employeeobj                =   new Employee();
            $certificationobj           =   new Certification();
            $skillobj                   =   new Skill();
            $projectobj                 =   new Project();
            $employeedata   =   $employeeobj->find('first',array('conditions' => array('Employee.id' => $emp_id)));
            $this->set('employee',$employeedata);
            foreach($employeedata['EmployeeCertification'] as $certifications){
                $certificationsarr[]    =   $certificationobj->find('first',array('conditions' => array('id' => $certifications['certification_id'])));
            }
            $this->set('certifications',$certificationsarr);
            foreach($employeedata['Employeeskill'] as $skillvals){
                $skillarray[]               =   $skillobj->find('first',array('conditions' => array('Skill.id' => $skillvals['skill_id'])));
            }
            foreach($skillarray as $skillval){
                $skillsets[$skillval['Skillcategory']['category_name']][] = $skillval['Skill']['skillname'];
            }
            
            $this->set('skills',$skillsets);
            foreach ($employeedata['Employeeproject'] as $projectvals){
                $projectdetails[]   =   $projectobj->find('first',array('conditions' => array('Project.id' => $projectvals['project_id'])));
            }
            $this->set('projects',$projectdetails);
        }
    }
?>
