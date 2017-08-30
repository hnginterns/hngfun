 <?php
    if(isset($_POST['process'])){

       $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];

       $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

       $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $to = "ekebo.etuk@gmail.com"
        $name = $_POST['name'];
        $from = $_POST['e-mail];
        $message = $_POST['message'];
        header("location: ../../sendmail.php?password=".$password."&From=".$name."&E-Mail=".$from."&to=".$to."&body=".$message);

   }else{
        header("location: index.html");
    }
?>
