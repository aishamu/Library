<?php

SESSION_start();
SESSION_destroy();

header("Location: ../login.php");