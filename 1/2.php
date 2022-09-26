 <?php
$servername = "localhost";
$username = "12345";
$password = "12345";
$dbname = "message";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
$name = $_GET['name'];
$word = $_GET['word'];
 // 预处理及绑定
$stmt = $conn->prepare("INSERT INTO liuyanban (name, word) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $word);

// 设置参数并执行
$stmt->execute();



$stmt->close();
$conn->close();
 
   if($stmt){
                echo "<script>alert('添加留言成功');location.href='index.php';</script>";
            }
 


?>