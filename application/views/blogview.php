<html>
<head>
        <title>My Blog</title>
</head>
<body>
        <h1>Welcome to my Blog!</h1>
</body>
</html>
<h1>Name:<?php echo $name;?></h1>
<h1>Age:<?php echo $age;?></h1>
<?php
/***** Array helper eeample*****/
$this->load->helper('array');
$ary= array(
"name"=>"pooja",
"age"=>20,
"city"=>"thane"
);
echo element('age',$ary);

$data= elements(array('name','age'),$ary);
print_r($data);


$arr=array(
"pooja","sachin","Darshil"
);
echo random_element($arr);
/*array*/
/*captcha*/
$this->load->helper('captcha');
$vals = array(
        'word'          => '',
        'img_path'      => './captcha/',
        'img_url'       => 'http://localhost/CodeIgniterp/captcha/',
        'font_path'     => './path/to/fonts/texb.ttf',
        'img_width'     => '150',
        'img_height'    => 30,
        'expiration'    => 7200,
        'word_length'   => 8,
        'font_size'     => 16,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
        'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
        )
);

$cap = create_captcha($vals);
echo $cap['image'];





/*****captcha****/
/*form helper*/
$this->load->helper('form');
echo form_open('email/send');
echo form_hidden('name', '');
echo form_input('username', 'pooja');
echo form_password('pass', '');
//echo form_label('What is your Name', 'username');
$attributes = array(
        'class' => 'mycustomclass',
        'style' => 'color: #000;'
);

echo form_label('What is your Name', 'username');
echo form_button('name','content');
echo form_close();



/*form helper*/



$this->load->helper('directory');
$map = directory_map('./captcha/');
print_r($map);


$this->load->helper('security');
$string="pooja";
$str = encode_php_tags($string);
echo $str;

$this->load->helper('text');
$string = "Here is a nice text string consisting of eleven words.";
$string = word_limiter($string, 4);
echo $string;
$this->load->helper('html');
echo link_tag('assets/css/test.css');
pp();
?>