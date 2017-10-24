<?php

class Super_admin {

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

    public function save_category_info($data) {
        $sql = "INSERT INTO tbl_category(category_name,category_description,publication_status) VALUES('$data[category_name]','$data[category_description]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Category info save successfully";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function select_all_category() {
        $sql = "SELECT * FROM tbl_category";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function unpublish_category_id($category_id) {
        $sql = "UPDATE tbl_category SET publication_status=0 WHERE category_id='$category_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Category info unpublish successfully';
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function publish_category_id($category_id) {
        $sql = "UPDATE tbl_category SET publication_status=1 WHERE category_id='$category_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Category info publish successfully';
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function select_category_info_by_id($category_id) {
        $sql = "SELECT * FROM tbl_category WHERE category_id='$category_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function update_category_info($data) {

        $sql = "UPDATE tbl_category SET category_name='$data[category_name]',category_description='$data[category_description]',  publication_status='$data[publication_status]' WHERE category_id='$data[category_id]' ";
        if (mysqli_query($this->db_connect, $sql)) {

            $_SESSION['message'] = 'Category info updated successfully';
            header("Location:manage.php");
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function delete_category_id($category_id) {
        $sql = "DELETE FROM tbl_category WHERE category_id='$category_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Category info successfully deleted";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function save_manufacturer_info($data) {
        $sql = "INSERT INTO tbl_manufacturer(manufacturer_name,manufacturer_description,publication_status) VALUES('$data[manufacturer_name]','$data[manufacturer_description]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Manufacturer info save successfully";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function select_all_manufacturer() {
        $sql = "SELECT * FROM tbl_manufacturer";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function unpublish_manufacturer_id($manufacturer_id) {
        $sql = "UPDATE tbl_manufacturer SET publication_status=0 WHERE manufacturer_id='$manufacturer_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'manufacturer info unpublish successfully';
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function publish_manufacturer_id($manufacturer_id) {
        $sql = "UPDATE tbl_manufacturer SET publication_status=1 WHERE manufacturer_id='$manufacturer_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Category info publish successfully';
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function delete_manufacturer_id($manufacturer_id) {
        $sql = "DELETE FROM tbl_manufacturer WHERE manufacturer_id='$manufacturer_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "manufacturer info successfully deleted";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function Select_manufacturer_info_by_id($manufacturer_id) {
        $sql = "SELECT * FROM tbl_manufacturer WHERE manufacturer_id='$manufacturer_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
  

    public function update_manufacturer_info($data) {
        $sql = "UPDATE tbl_manufacturer SET manufacturer_name='$data[manufacturer_name]',manufacturer_description='$data[manufacturer_description]',  publication_status='$data[publication_status]' WHERE manufacturer_id='$data[manufacturer_id]' ";
        if (mysqli_query($this->db_connect, $sql)) {

            $_SESSION['message'] = 'Manufacturer info updated successfully';
            header("Location:manage_manufacturer.php");
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function save_product_info($data) {
        $directory = '../assets/admin_assets/product_img/';
        $target_file = $directory . $_FILES['product_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['product_image']['size'];
        $image = getimagesize($_FILES['product_image']['tmp_name']);
        if ($image) {
            if (file_exists($target_file)) {
                echo 'This image already exist';
            } else {
                if ($file_size > 5242880) {
                    echo 'File size is too large. Please select a file within 5mb';
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png') {
                        die('File type is not valid');
                    } else {
                        move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file);
                        $sql = " INSERT INTO tbl_product (product_name, category_id, manufacturer_id, product_price , stock_quantity , product_sku , product_short_description , product_long_description , product_image , publication_status) VALUES('$data[product_name]' , '$data[category_id]' , '$data[manufacturer_id]' , '$data[product_price]' , '$data[stock_quantity]' , '$data[product_sku]' , '$data[product_short_description]' , '$data[product_long_description]' , '$target_file' , '$data[publication_status]')";
                       if(mysqli_query($this->db_connect, $sql)){
                           $message="Product information save successfully.";
                           return $message;
                       }  else {
                           die("Query Problem".  mysqli_error($this->db_connect));
                       }
                        
                    }
                }
            }
        } else {
            echo 'This is not a image';
            exit();
        }
    }
    public function select_all_product_info(){
        $sql = "SELECT p.product_id,p.product_name, p.category_id,p.manufacturer_id,p.product_price,p.stock_quantity,p.publication_status,c.category_name,m.manufacturer_name FROM tbl_product as p, tbl_category as c,tbl_manufacturer as m WHERE p.category_id=c.category_id AND p.manufacturer_id=m.manufacturer_id";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
    public function select_all_product_info_by_id($product_id){
        $sql = "SELECT p.*,c.category_name,m.manufacturer_name FROM tbl_product as p, tbl_category as c,tbl_manufacturer as m WHERE p.category_id=c.category_id AND p.manufacturer_id=m.manufacturer_id AND p.product_id='$product_id'  ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
        
    }
    public function select_all_order_info(){
         $sql = "SELECT o.*,c.first_name,c.last_name,p.payment_status FROM tbl_order as o, tbl_customer as c,tbl_payment as p WHERE o.customer_id=c.customer_id AND o.order_id=p.order_id ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    
    public function select_customer_info_by_id($order_id){
        $sql = "SELECT o.order_id,c.* FROM tbl_order as o, tbl_customer as c WHERE o.customer_id=c.customer_id AND o.order_id=$order_id ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
     public function select_shipping_info_by_id($order_id){
        $sql = "SELECT o.order_id,s.* FROM tbl_order as o, tbl_shipping as s WHERE o.shipping_id=s.shipping_id AND o.order_id=$order_id ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
    public function select_product_info_by_id($order_id){
        $sql = "SELECT o.order_id,od.* FROM tbl_order as o, tbl_order_details as od WHERE o.order_id=od.order_id AND o.order_id=$order_id ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
    public function select_payment_info_by_id($order_id){
        $sql = "SELECT o.order_id,p.* FROM tbl_order as o, tbl_payment as p WHERE o.order_id=p.order_id AND o.order_id=$order_id ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
    public function unpublish_product_id($product_id) {
        $sql = "UPDATE tbl_product SET publication_status=0 WHERE product_id='$product_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'product info unpublish successfully';
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
     public function publish_product_id($product_id) {
        $sql = "UPDATE tbl_product SET publication_status=1 WHERE product_id='$product_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'product info publish successfully';
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
    public function delete_product_id($product_id) {
        $sql = "DELETE FROM tbl_product WHERE product_id='$product_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "product info successfully deleted";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }
    public function delete_order_info($order_id){
        $sql = "DELETE FROM tbl_order WHERE order_id='$order_id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "orderinfo successfully deleted";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->db_connect));
        }
    }

    public function add_slider_info($data) {
        $directory = '../assets/admin_assets/product_img/';
        $target_file = $directory . $_FILES['product_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['product_image']['size'];
        $image = getimagesize($_FILES['product_image']['tmp_name']);
        if ($image) {
            if (file_exists($target_file)) {
                echo 'This image already exist';
            } else {
                if ($file_size > 5242880) {
                    echo 'File size is too large. Please select a file within 5mb';
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png') {
                        die('File type is not valid');
                    } else {
                        move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file);
                        $sql = "INSERT INTO tbl_product(product_name,category_id,manufacturer_id,product_price,stock_quantity,product_sku,product_short_description,product_long_description,product_image,publication_status) VALUES('$data[product_name]','$data[category_id]','$data[manufacturer_id]','$data[product_price]','$data[stock_quantity]','$data[product_sku]','$data[product_short_description]','$data[product_long_description]','$target_file','$data[publication_status]')";
                       if(mysqli_query($this->db_connect, $sql)){
                           $message="Product information save successfully.";
                           return $message;
                       }  else {
                           die("Query Problem".  mysqli_error($this->db_connect));
                       }
                        
                    }
                }
            }
        } else {
            echo 'This is not a image';
            exit();
        }
    }

    
    public function logout() {
        unset($_SESSION['admin_name']);
        unset($_SESSION['admin_id']);
        header("Location:index.php");
    }

}
