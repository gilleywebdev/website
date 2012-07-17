<?php
	echo Form::open();
	echo Form::input('name', NULL, array('label' => 'Name:'));
	echo Form::input('email', NULL, array('label' => 'Email:'));
	echo Form::textarea('message', NULL, array('label' => 'Message:'));
	echo Form::submit(NULL, 'Submit');
	echo Form::close();