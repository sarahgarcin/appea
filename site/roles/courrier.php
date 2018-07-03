<?php

return [
  'name'        => 'Courrier',
  'default'     => false,
	  'permissions' => [
	    '*'                 => true,
	    'panel.site.update' => false,
	    'panel.user.*'      => false,
	    'panel.page.delete' => false,
	    'panel.user.read'   => true,
	    'panel.file.*'      => true,
	    'panel.page.visibility' => function() {
	        return 
	            $this->target()->page()->intendedTemplate() === 'papeterie'||
	            $this->target()->page()->intendedTemplate() === 'papeterie_document';
	    },
	    'panel.page.create' => function() {
	        return 
	            $this->site()->language()->default() &&
	            $this->target()->page()->intendedTemplate() === 'papeterie'||
	            $this->target()->page()->intendedTemplate() === 'papeterie_document';
	    },
	    'panel.page.update' => function() {
	        return 
	            $this->target()->page()->intendedTemplate() === 'papeterie'||
	            $this->target()->page()->intendedTemplate() === 'papeterie_document';
	    },     
	    'panel.page.read' => function() {
	        return 
	            $this->target()->page()->intendedTemplate()         === 'papeterie'||
	            $this->target()->page()->intendedTemplate() === 'papeterie_document';
	    },
	    'panel.user.update' => function() {
	        if($this->user()->is($this->target()->user())) {
	            return true;
	        } else {
	            return false;
	        }
	    }
	]
];