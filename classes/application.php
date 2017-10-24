<?php

class Application {

    private $db_connect;

    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'db_ecomerce';
        $this->db_connect = mysqli_connect($host_name, $user_name, $password, $db_name);
        if (!$this->db_connect) {
            die('Connection Fail' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_category() {
        $sql = "SELECT * FROM tbl_category WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function select_all_publish_manufacturer_info() {
        $sql = "SELECT * FROM tbl_manufacturer WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function select_all_recent_product_info() {
        $sql = "SELECT * FROM tbl_product WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function select_published_product_by_id($category_id) {
        $sql = "SELECT * FROM tbl_product WHERE category_id='$category_id' AND publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function select_product_info_by_id($product_id) {
        $sql = "SELECT p.*,c.category_name,m.manufacturer_name FROM tbl_product as p,tbl_category as c,tbl_manufacturer as m WHERE p.category_id=c.category_id AND p.manufacturer_id=m.manufacturer_id AND p.product_id='$product_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function add_product_to_cart($data) {
        $product_id = $data['product_id'];
        $product_quantity = $data['product_quantity'];
        $sql = "SELECT * FROM tbl_product WHERE product_id='$product_id' ";
        $query_result = mysqli_query($this->db_connect, $sql);
        $product_info = mysqli_fetch_assoc($query_result);
        session_start();
        $session_id = session_id();
        $sql = "INSERT INTO tbl_temp_cart(session_id,product_id,product_name,product_price,product_quantity,product_image) VALUES ('$session_id','$product_id','$product_info[product_name]','$product_info[product_price]','$product_quantity','$product_info[product_image]')";
        mysqli_query($this->db_connect, $sql);
        header('Location: cart.php');
    }

    public function select_cart_product_by_session_id($session_id) {
        $sql = "SELECT * FROM tbl_temp_cart WHERE session_id='$session_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function update_product_by_temp_cart_id($data) {
        $sql = "UPDATE tbl_temp_cart SET product_quantity='$data[product_quantity]' WHERE temp_cart_id='$data[temp_cart_id]' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Your cart product update successfully.";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function delete_product_by_temp_cart_id($temp_cart_id) {
        $sql = "DELETE FROM tbl_temp_cart WHERE temp_cart_id='$temp_cart_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Your cart product delete successfully.";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function select_category_product_info_by_id($category_id) {
        $sql = "SELECT * FROM tbl_product WHERE category_id='$category_id' AND publication_status=1 ORDER BY product_id DESC LIMIT 6";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function save_customer_info($data) {
        $password = md5($data['password']);
        $sql = "INSERT INTO tbl_customer (first_name,last_name,email_address,password,address,phone_number,district_name) VALUES ('$data[first_name]','$data[last_name]','$data[email_address]','$password','$data[address]','$data[phone_number]','$data[district_name]')";

        if (mysqli_query($this->db_connect, $sql)) {
            $customer_id = mysqli_insert_id($this->db_connect);

            $_SESSION['customer_id'] = $customer_id;
            $_SESSION['customer_name'] = $data['first_name'] . ' ' . $data['last_name'];
            /*customer email verification start*/
//            $to=$data[email_address];
//            $subject="email_address";
//            $message="
//                    <h3> Wellcome $data[first_name]  $data[last_name].</h3><br/>
//                     <p>Thanks for join our community.</p><br/>
//                     <h4><u>your login information goes here</u></h4><br/>
//                     <p>Your email address :$data[email_address]</p><br/>
//                         <p>Your password : $data[password]</p><br/>
//                      <h2>To active press on the link</h2>                             
//                 <a href=' http://localhost/ecomerce_project/customer_update status.php/id?=$customer_id'>
//                  http://localhost/ecomerce_project/customer_update status/id=$customer_id
//                  </a>
//";
//                
//            mail($to, $subject, $message);
                 
                   
            /*email verification end*/

           header("Location: shipping.php");
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function select_customer_info_by_id($customer_id) {
        $sql = "SELECT * FROM tbl_customer WHERE customer_id='$customer_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function save_shipping_info($data) {
        $sql = "INSERT INTO tbl_shipping (full_name,email_address,address,phone_number,district_name) VALUES ('$data[full_name]','$data[email_address]','$data[address]','$data[phone_number]','$data[district_name]')";

        if (mysqli_query($this->db_connect, $sql)) {

            $shipping_id = mysqli_insert_id($this->db_connect);
            session_start();
            $_SESSION['shipping_id'] = $shipping_id;


            header("Location: payment.php");
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function save_order_info($data) {
        $payment_type = $data['payment_type'];
        if ($payment_type == 'cash_on_delivery') {
            $customer_id = $_SESSION['customer_id'];
            $shipping_id = $_SESSION['shipping_id'];
            $order_total = $_SESSION['order_total'];
            $sql = "INSERT INTO tbl_order (customer_id, shipping_id,order_total) VALUES ('$customer_id','$shipping_id','$order_total')";
            if (mysqli_query($this->db_connect, $sql)) {
                $order_id = mysqli_insert_id($this->db_connect);
                $sql = "INSERT INTO tbl_payment (order_id,payment_type) VALUES ('$order_id','$payment_type')";
                if (mysqli_query($this->db_connect, $sql)) {
                    session_start();
                    $session_id = session_id();
                    $sql = "SELECT * FROM tbl_temp_cart WHERE session_id='$session_id'  ";
                    $query_result = mysqli_query($this->db_connect, $sql);
                    while ($product_info = mysqli_fetch_assoc($query_result)) {
                        $sql = "INSERT INTO tbl_order_details (order_id,product_id,product_name,product_price,product_quantity,product_image) VALUES ('$order_id','$product_info[product_id]','$product_info[product_name]','$product_info[product_price]','$product_info[product_quantity]' ,'$product_info[product_image]'  ) ";
                        mysqli_query($this->db_connect, $sql);

                        header("Location: customer_home.php");
                    }
                    $sql = "DELETE FROM tbl_temp_cart session_id='$session_id' ";
                    mysqli_query($this->db_connect, $sql);
                } else {
                    die("Query Problem" . mysqli_error($this->db_connect));
                }
            } else {
                die("Query Problem" . mysqli_error($this->db_connect));
            }
        }
    }

    public function customer_resgistration_info($data) {
        $sql = "INSERT INTO tbl_customer (first_name,last_name,email_address,password,address,phone_number,district_name) VALUES ('$data[first_name]','$data[last_name]','$data[email_address]','$password','$data[address]','$data[phone_number]','$data[district_name]')";
        $password = md5(data['password']);
        if (mysqli_query($this->db_connect, $sql)) {
            $customer_id = mysqli_insert_id($this->db_connect);
            session_start();
            $_SESSION['customer_id'] = $customer_id;
            $_SESSION['customer_name'] = $data['first_name'] . ' ' . $data['last_name'];

            header("Location: index.php");
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
    public function select_profile_info($customer_id){
        $sql="SELECT * FROM tbl_customer WHERE customer_id='$customer_id' ";
        if(mysqli_query($this->db_connect, $sql)){
            $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;
        }  else {
             die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
    public function select_order_info($customer_id){
        $sql="SELECT tod.*,td.* FROM tbl_order_details as tod, tbl_order as td WHERE  td.order_id=tod.order_id AND td.customer_id='$customer_id' ";
        if(mysqli_query($this->db_connect, $sql)){
            $query_result=mysqli_query($this->db_connect, $sql);
            return $query_result;
        }  else {
             die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
//    public function select_order_detail_info_by_id($customer_id){
//        $sql="SELECT * FROM tbl_order   WHERE  customer_id='$customer_id' ";
//    if(mysqli_query($this->db_connect, $sql)){
//        $query_result=mysqli_query($this->db_connect, $sql);
//        return $query_result;
//    }  else {
//        die('Query problem'.mysqli_error($this->db_connect));    
//    }
//    }

    public function customer_email_check($email_address) {
        $sql = "SELECT email_address FROM tbl_customer WHERE email_address='$email_address' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function user_login_check($data) {
        $email_address = $data['email_address'];
        $password = md5($data['password']);
        $sql = "SELECT * FROM tbl_customer WHERE email_address='$email_address' AND password='$password' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            $customer_info = mysqli_fetch_assoc($query_result);

            if ($customer_info) {
                session_start();
                $_SESSION['customer_name'] = $customer_info['first_name'].' '.$customer_info['last_name'];
                $_SESSION['customer_id'] = $customer_info['customer_id'];
                header("Location: shipping.php");
            } else {
                $message = "Please, use valid email address and password";
                return $message;
            }
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }
    public function customer_login_check($data) {
        $email_address = $data['email_address'];
        $password = md5($data['password']);
        $sql = "SELECT * FROM tbl_customer WHERE email_address='$email_address' AND password='$password' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            $customer_info = mysqli_fetch_assoc($query_result);

            if ($customer_info) {
                session_start();
                $_SESSION['customer_name'] = $customer_info['first_name'].' '.$customer_info['last_name'];
                $_SESSION['customer_id'] = $customer_info['customer_id'];
                header("Location: index.php");
            } else {
                $message = "Please, use valid email address and password";
                return $message;
            }
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function customer_logout() {
        unset($_SESSION['customer_id']);
        unset($_SESSION['customer_name']);
        unset($_SESSION['shipping_id']);
        header('Location:index.php');
    }

}
